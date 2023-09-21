<?php 
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_Login");
        $this->load->library("form_validation");

        if($this->session->userdata("session")) {
            redirect("Halaman_Produk/index");
        }
    }

    public function Home() {

        $data["judul"] = "Halaman Registrasi Dan Login";
        $this->load->view("Halaman_Login_Registrasi", $data);
    }

    public function index() {

        $this->form_validation->set_rules("email1", "EMAIL", "trim|required|min_length[4]", [
            "required" => "Field Email Harus Diisi",
            "min_lenght" => "Field Email Kurang Dari 4 Karakter"
        ]);

        $this->form_validation->set_rules("password1", "PASSWORD", "trim|required", [
            "required" => "Field Password Harus Diisi"
        ]);
        
        if($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Login Dan Registrasi";
            $this->session->set_flashdata("login", "GAGAL");
            $this->load->view("Halaman_Login_Registrasi", $data);
        } else {
            $this->Model_Login->Login();
            redirect("Home/index");
        }
    }

    public function Registrasi() {

        $this->form_validation->set_rules("username", "USERNAME", "required|trim|is_unique[user.username]", [
            "required" => "Field Username Harus Diisi",
            "trim" => "Field Username Tidak Boleh Memiliki Spasi",
            "is_unique" => "Username Sudah Terdaftar"
        ]);

        $this->form_validation->set_rules("email", "EMAIL", "required|trim|is_unique[user.email]", [
            "required" => "Field Email Harus Diisi",
            "trim" => "Field Email Tidak Boleh Memiliki Spasi",
            "is_unique" => "Email Sudah Terdaftar"
        ]);
    
        $this->form_validation->set_rules("password", "PASSWORD", "required|trim|min_length[4]|matches[password2]", [
            "required" => "Field Password Harus Diisi", 
            "trim" => "Field Password Tidak Boleh Memiliki Spasi",
            "min_length" => "Field Password Kurang Dari 4 Karakter",
            "matches" => "Field Password Harus Sesuai Dengan Field Confirm Password"
        ]);
    
        $this->form_validation->set_rules("password2", "CONFIRM PASSWORD", "required|trim|matches[password]", [
            "required" => "Field Confirm Password Harus Diisi", 
            "trim" => "Field Confirm Password Tidak Boleh Memiliki Spasi",
            "matches" => "Field Confirm Password Harus Sesuai Dengan Field Password"
        ]);
    
        if($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Login Dan Registrasi";
            $this->session->set_flashdata("registrasi", "GAGAL");
            $this->load->view("Halaman_Login_Registrasi", $data);
        }else {
            $this->Model_Login->Registrasi();
            $this->session->set_flashdata('sukses', 'Berhasil');
            redirect("Login/Home");
            
        } 
    }

    
}
?>