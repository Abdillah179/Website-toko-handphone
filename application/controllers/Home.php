<?php 
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata("session")) {
            redirect("Login/Home");
        }
    }

    public function index() {

        $data["judul"] = "Halaman Home";
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Home", $data);
    }
}


?>