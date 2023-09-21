<?php 
class Logout_Admin extends CI_Controller {

    public function logout() {

        $this->session->sess_destroy();
        redirect("Login_Admin/index");
    }
}


?>