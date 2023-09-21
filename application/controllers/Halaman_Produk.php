<?php 
class Halaman_Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_Product");
        $this->load->library("form_validation");

        if(!$this->session->userdata("session")) {
            redirect("Login/Home");
        }
        
    }

    public function index() {

        $data["judul"] = "Halaman Produk";
        $data["produk"] = $this->Model_Product->GetAllProduk();
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Produk", $data);
    }

    public function Detail($id) {

        $data["judul"] = "Halaman Detail Produk";
        $data["detail"] = $this->Model_Product->DetailProduk($id);
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Detail_Produk", $data);
    }

    public function keranjang($id) {

        $produk = $this->Model_Product->GetProduk($id);

        $data = array(
            'id'      => $produk["id"],
            'qty'     => $this->input->post("qty"),
            'price'   => $produk["harga"],
            'name'    => $produk["nama_barang"],
            'weight'  => $produk["berat"],
    );

    $this->cart->insert($data);
    $this->session->set_flashdata("flash", "Ditambahkan");
    redirect("Halaman_Produk/Detail/$id");
    }

    public function DetailKeranjang() {

        $data["judul"] = "Halaman Detail Keranjang Belanja";
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Detail_Keranjang_Belanja_2", $data);
    }

    public function Hapus($id) {
        

        $this->cart->remove($id);
        $this->session->set_flashdata("flash", "Dihapus");
        redirect("Halaman_Produk/DetailKeranjang");
        
    }

    public function HapusSemuaKeranjang() {

        $this->Model_Product->DeleteAllCart();
        $this->session->set_flashdata("hapus", "Dihapus");
        redirect("Halaman_Produk/DetailKeranjang");
    }

    public function Pembayaran(){


        if($this->cart->contents()) 
        {
            $this->form_validation->set_rules("nama_pembeli", "NAMA PEMBELI", "required", [
                "required" => "Kolom Nama Pembeli Harus Diisi"
            ]);
        
            $this->form_validation->set_rules("no_hp_pembeli", "NO HP PEMBELI", "required|integer", [
                "required" => "Kolom No HP Pembeli Harus Diisi",
                "integer" => "Kolom No HP Pembeli Harus Berupa Angka"
            ]);
        
            $this->form_validation->set_rules("provinsi", "PROVINSI", "required", [
                "required" => "Kolom Provinsi Harus Diisi"
            ]);
        
            $this->form_validation->set_rules("kota", "KOTA", "required", [
                "required" => "Kolom Kota Harus Diisi"
            ]);
        
            $this->form_validation->set_rules("jasa_pengiriman", "JASA PENGIRIMAN", "required", [
                "required" => "Kolom Jasa Pengiriman Harus Diisi"
            ]);
        
            $this->form_validation->set_rules("pembayaran", "PEMBAYARAN", "required", [
                "required" => "Kolom Pembayaran Harus Diisi"
            ]);
        
        
            if($this->form_validation->run() == FALSE) {
        
                $data["judul"] = "Halaman Pembayaran";
                $data["session"] = $this->session->userdata("session");
                $this->load->view("Halaman_Pembayaran", $data);
            } else {
                $this->Model_Product->bayar();
                $this->session->set_flashdata("bayar", "Berhasil");
                redirect("Halaman_Produk/HalamanPembayaran");
            }
        } else {
            $this->session->set_flashdata("gagal", "Keranjang");
            redirect("Halaman_Produk/Halaman_No_Produk");
        }
    } 
        
    public function HalamanPembayaran() {

        $data["judul"] = "Halaman Pembayaran";
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Pembayaran", $data);
    }
        

    public function Halaman_No_Produk() {

        $data["judul"] = "Halaman No Produk";
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_No_Produk", $data);
    }

    public function UpdateCart() {

        $i = 1;
        foreach($this->cart->contents() as $items) 
        {
            $data = array(
                'rowid' => $items["rowid"],
                'qty'   => $this->input->post($i . '[qty]'),
        );
        
        $this->cart->update($data);
        $i++;
        redirect("Halaman_Produk/DetailKeranjang");
        }
        
    }


    public function Histori() {

        $data["judul"] = "Halaman Histori Pembelian";
        $data["histori"] = $this->Model_Product->Histori();
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Histori", $data);

    }

    public function DetailHistori($hstr) {

        $data["judul"] = "Halaman Detail Histori Pembelian";
        $data["histori"] = $this->Model_Product->GetHistori($hstr);
        $data["detailhistori"] = $this->Model_Product->DetailHistori($hstr);
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Detail_Histori", $data);
    }

    public function Struk($hstr) {
        $data["judul"] = "Halaman Pembelian";
        $data["struk"] = $this->Model_Product->GetStruk($hstr);
        $data["session"] = $this->session->userdata("session");
        $this->load->view("Halaman_Struk", $data);
    }


}



?>