<?php 
class Model_Admin extends CI_Model {

    public function GetAllBarang() {

        return $this->db->get("tb_barang")->result_array();
    }

    public function GetJumlahDataBarang() {

        return $this->db->get('tb_barang')->num_rows();
    }

    public function GetJumlahDataContact() {

        return $this->db->get('contact')->num_rows();
    }

    public function GetJumlahDataUser() {

        return $this->db->get('user')->num_rows();
    }

    public function GetJumlahDataUserAdmin() {

        return $this->db->get('user_admin')->num_rows();
    }

    public function GetAllContact () {

        return $this->db->get("contact")->result_array();
    }


    public function GetAllUser() {

        return $this->db->get("user")->result_array();
    }

    public function GetAllUserAdmin() {

        return $this->db->get("user_admin")->result_array();
    }

    public function Hapus($id) {

        return $this->db->delete("tb_barang", ["id" => $id]);
    }

    public function GetDetailBarang($id) {

        return $this->db->get_where("tb_barang", ["id" => $id])->row_array();
    }

    public function GetAllTransaksi() {

        return $this->db->get("tb_transaksi")->num_rows();
    }

    public function Tambah() {

        // $gambar = $_FILES["gambar"]["name"];

        // if($gambar) {

        //     $config['upload_path']          = './public/img2';
        //     $config['allowed_types']        = 'gif|jpg|png';
        //     $config['max_size']             = '2048';

        //     $this->load->library('upload', $config);

        //     if($this->upload->do_upload("gambar")) {
        //         $gambar = $this->upload->data("file_name");
        //         $this->db->insert("tb_barang", $gambar);
        //     }else {
        //         echo $this->upload->display_errors();
        //     }
        // }

        $data = [
            "nama_barang" => $this->input->post("nama_barang", true),
            "keterangan" => $this->input->post("keterangan", true),
            "kategori" => $this->input->post("kategori", true),
            "harga" => $this->input->post("harga", true),
            "berat" => $this->input->post("berat", true),
            "stok" => $this->input->post("stok", true),
            "gambar" => $this->input->post("gambar", true)
        ];

        $this->db->insert("tb_barang", $data);
    }

    public function GetUser() {

        return $this->db->get("tb_transaksi")->result_array();
    }

    public function DeleteTransaksi($id) {

        return $this->db->delete("tb_transaksi", ["id" => $id]);
    }

    public function DeletePesanan($id) {

        return $this->db->delete("tb_pesanan", ["id_transaksi" => $id]);
    }

    public function GetOneTransaksi($id) {

        return $this->db->get_where("tb_transaksi", ["id" => $id])->result_array();
    }

    public function GetOnePesanan($id) {

        return $this->db->get_where("tb_pesanan", ["id_transaksi" => $id])->result_array();
    }

    public function DeleteContact($id) {

        return $this->db->delete("contact", ["id" => $id]);
    }


    public function GetContact($id) {

        return $this->db->get_where("contact", ["id" => $id])->result_array();
    }

    public function GetRowContact() {

        return $this->db->get("tb_transaksi")->num_rows();
    }

    public function DeleteUser($id) {

        return $this->db->delete("user", ["id" => $id]);
    }


    public function GetDetailUser($id) {

        return $this->db->get_where("user", ["id" => $id])->result_array();
    }


    public function DeleteUserAdmin($id) {

        return $this->db->delete("user_admin", ["id" => $id]);
    }


    public function GetDetailUserAdmin($id) {

        return $this->db->get_where("user_admin", ["id" => $id])->result_array();
    }
}

?>