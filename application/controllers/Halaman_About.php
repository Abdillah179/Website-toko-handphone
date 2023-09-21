<?php 
class Halaman_About extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata("session")) {
            redirect("Login/Home");
        }
    }

    public function index() {
        $data["judul"] = "Halaman About";
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_About", $data);
    }
}

?>