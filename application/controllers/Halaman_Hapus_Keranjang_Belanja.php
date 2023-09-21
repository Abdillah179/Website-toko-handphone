<?php 
class Halaman_Hapus_Keranjang_Belanja extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata("session")) {
            redirect("Login/Home");
        }
    }

    public function index() {
        $data["judul"] = "Halaman Detail Keranjang Belanja";
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Detail_Keranjang_Belanja", $data);
    }
}


?>