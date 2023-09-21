<?php 
class Model_Login extends CI_Model {

    public function Registrasi() {

        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "username" => htmlspecialchars($this->input->post("username", true)),
            "email" => htmlspecialchars($this->input->post("email", true)),
            "password" => htmlspecialchars(password_hash($this->input->post("password", true), PASSWORD_DEFAULT)),
            "role_id" => 2,
            "is_active" => 1,
            "date_created" => date("Y-m-d H:i:s"),
            "image" => base_url("public/img2/acer r751.jpg")
        ];

        $this->db->insert("user", $data);

       
    }

    public function Login() {

        $email = $this->input->post("email1");
        $password = $this->input->post("password1");

        $user = $this->db->get_where("user", ["email" => $email])->row_array();
        
        if($user) {

            if($user["is_active"] == 1) {
                if(password_verify($password, $user["password"])){
                    $data = [
                        "username" => $user["username"],
                        "role_id" => $user["role_id"],
                    ];

                    $this->session->set_userdata("session", $data);

                }else {
                    $this->session->set_flashdata("password", "SALAH");
                    redirect("Login/index");
                }

            }else {
                $this->session->set_flashdata("active", "TERAKTIVASI");
                redirect("Login/index");
            }

        } else {
            $this->session->set_flashdata("logingagal", "TIDAK TERDAFTAR");
            redirect("Login/index");
        }
    }

    public function Admin() {

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $user = $this->db->get_where("user_admin", ["username" => $username])->row_array();

        if($user) {
            if($user["is_active"] == 1) {
                if($password == $user["password"]) {
                    $data = [
                        "session" => true,
                        "username" => $user["username"],
                    ];

                    $this->session->set_userdata("session_admin", $data);

                }else {
                    $this->session->set_flashdata("password", "TIDAK DITEMUKAN");
                    redirect("Login_Admin/index");
                }

            }else {
                $this->session->set_flashdata("active", "TIDAK AKTIF");
                redirect("Login_Admin/index");
            }


        }else {

            $this->session->set_flashdata("gagal", "TIDAK TERDAFTAR");
            redirect("Login_Admin/index");
        }
    }

    // private function _SendEmail() {

    //     $config = [
    //         'protocol' => 'smtp',
    //         'smtp_host' => 'ssl://smtp.googlemail.com',
    //         'smtp_user' => 'muhammadabdillahasyhar68@gmail.com',
    //         'smtp_pass' => 'abi222,.',
    //         'smtp_port' => '465',
    //         'mailtype' => 'html',
    //         'charset' => 'utf-8',
    //         'newline' => "\r\n",
    //     ];

    //     $this->load->library("email", $config);

    //     $this->email->from("muhammadabdillahasyhar68@gmail.com", "Muhammad Abdillah Asyhar");
    //     $this->email->to($this->input->post("email"));
    //     $this->email->subject("Informasi Login");
    //     $this->email->message("Selamat Anda Berhasil Registrasi");


    //     if($this->email->send()) {
    //         return true;
    //     } else {

    //         echo $this->email->print_debugger();
    //     }
    // }

    

    
}
?>