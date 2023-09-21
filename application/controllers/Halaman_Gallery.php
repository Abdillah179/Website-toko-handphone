<?php 
class Halaman_Gallery extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata("session")) {
            redirect("Login/Home");
        }
    }

    public function index() {

        $data["judul"] = "Halaman Gallery";
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Gallery", $data);
    }
}

?>