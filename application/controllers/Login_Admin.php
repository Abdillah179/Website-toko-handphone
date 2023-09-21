<?php 
class Login_Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_Login");
        $this->load->library("form_validation");

        if($this->session->userdata("session_admin")) {
            redirect("Halaman_Admin/index");
        }
    }

    public function index() {

        $this->form_validation->set_rules("username", "USERNAME", "required|trim|min_length[6]", [
            "required" => "Field Username Harus Diisi",
            "min_length" => "Field Username Harus Terdiri Dari 6 karakter"
        ]);

        $this->form_validation->set_rules("password", "PASSWORD", "required|trim", [
            "required" => "Field Password Harus Diisi"
        ]);

        if($this->form_validation->run() == FALSE) {

            $data["judul"] = "Halaman Login Admin";
            $this->session->set_flashdata("error", "GAGAL");
            $this->load->view("Halaman_Login_Admin", $data);
        } else {
            $this->Model_Login->Admin();
            $this->session->set_flashdata("success", "BERHASIL");
            redirect("Halaman_Admin/index");
        }

    }
}

?>