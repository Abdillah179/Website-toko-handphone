<?php 
class Logout extends CI_Controller {

    public function logout() {

        $this->session->sess_destroy();
        redirect("Login/Home");
    }
}


?>