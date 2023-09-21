<?php 
class Halaman_Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_Contact");
        $this->load->library("form_validation");
       
        if(!$this->session->userdata("session")) {
            redirect("Login/Home");
        }
    
    }

    public function index() {
        $data["judul"] = "Halaman Contact";
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Contact", $data);
    }

    public function Contact() {

        $this->form_validation->set_rules("nama", "NAMA PENGIRIM", "required", [
            "required" => "Field Nama Pengirim Harus Diisi"
        ]);

        $this->form_validation->set_rules("email", "EMAIL PENGIRIM", "required", [
            "required" => "Field Email Pengirim Harus Diisi"
        ]);

        $this->form_validation->set_rules("no_handphone", "NO HANDPHONE PENGIRIM", "required", [
            "required" => "Field No Handphone Pengirim Harus Diisi"
        ]);

        $this->form_validation->set_rules("pesan", "PESAN", "required", [
            "required" => "Field Pesan Harus Diisi"
        ]);

        if($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Contact";
            $data["session"] = $this->session->userdata("session");
            $this->load->view("Halaman_Contact", $data);
        } else {
            $this->Model_Contact->kirim();
            $this->session->set_flashdata("flash", "DIKIRIMKAN");
            redirect("Halaman_Contact");
        }
    }
}
?>