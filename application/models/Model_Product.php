<?php 
class Model_Product extends CI_Model {

    public function GetAllProduk() {

        return $this->db->get("tb_barang")->result_array();
    }

    public function DetailProduk($id) {

        return $this->db->get_where("tb_barang", ["id" => $id])->result_array();


    }

    public function GetProduk($id) {

        return $this->db->get_where("tb_barang", ["id" => $id])->row_array();
    }

    public function DeleteAllCart() {

        $this->cart->destroy();
    }

    public Function bayar() {

            date_default_timezone_set("Asia/Jakarta");
            $data = [
                "nama_pembeli" => htmlspecialchars($this->input->post("nama_pembeli", true)),
                "no_hp_pembeli" => htmlspecialchars($this->input->post("no_hp_pembeli", true)),
                "provinsi" => htmlspecialchars($this->input->post("provinsi", true)),
                "kota" => htmlspecialchars($this->input->post("kota", true)),
                "jasa_pengiriman" => htmlspecialchars($this->input->post("jasa_pengiriman", true)),
                "pembayaran" => htmlspecialchars($this->input->post("pembayaran", true)),
                "alamat_lengkap_tujuan" => htmlspecialchars($this->input->post("alamat_lengkap_tujuan", true)),
                "tanggal_pemesanan" => date("Y-m-d H:i:s")
            ];
    
            $this->db->insert("tb_transaksi", $data);
            $id_transaksi = $this->db->insert_id();

            foreach($this->cart->contents() as $items)
            {
                $data = [
                    "id_transaksi" => $id_transaksi,
                    "id_barang" => $items["id"],
                    "nama_barang" => $items["name"],
                    "harga" => $items["price"],
                    "berat_satuan_produk" => $items["weight"],
                    "qty" => $items["qty"],
                    "subtotal" => $items["subtotal"],
                    "total" => $this->cart->total()
                ];

                $this->db->insert("tb_pesanan", $data);
            }
            $this->cart->destroy();

            return true;

        }

        public function Histori() {

            return $this->db->get("tb_transaksi")->result_array();
        }


        public function GetHistori($hstr) {

            return $this->db->get_where("tb_transaksi", ["id" => $hstr])->result_array();
        }

        public function DetailHistori($hstr) {

            return $this->db->get_where("tb_pesanan", ["id_transaksi" => $hstr])->result_array();
        }

        public function GetStruk($hstr) {

            return $this->db->get_where("tb_transaksi", ["id" => $hstr])->row_array();
        }
        

}


?>