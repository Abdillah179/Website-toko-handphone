<?php 
class Model_Contact extends CI_Model {

    public function kirim() {

        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => htmlspecialchars($this->input->post("nama"), true),
            "email" => htmlspecialchars($this->input->post("email"), true),
            "no_handphone" => htmlspecialchars($this->input->post("no_handphone"), true),
            "pesan" => htmlspecialchars($this->input->post("pesan"), true),
            "tanggal_pengiriman" => date("Y-m-d H:i:s")
        ];

        $this->db->insert("contact", $data);
    }
    
}


?>