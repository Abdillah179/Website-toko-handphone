<?php 
class Halaman_Admin extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();

        if(!$this->session->userdata("session_admin")) {
            redirect("Halaman_Admin/index");
        }

        $this->load->library("form_validation");
    }


    public function index() {
        $data["judul"] = "Halaman Admin";
        $data["session"] = $this->session->userdata("session_admin");
        $data["jumlahbarang"] = $this->Model_Admin->GetJumlahDataBarang();
        $data["jumlahcontact"] = $this->Model_Admin->GetJumlahDataContact();
        $data["jumlahuser"] = $this->Model_Admin->GetJumlahDataUser();
        $data["jumlahuseradmin"] = $this->Model_Admin->GetJumlahDataUserAdmin();
        $data["jumlahdatatransaksi"] = $this->Model_Admin->GetRowContact();
        $this->load->view("Halaman_Admin", $data);
    }

    public function DataBarang() {

        $data["judul"] = "Halaman Data Barang";
        $data["barang"] = $this->Model_Admin->GetAllBarang();
        $data["session"] = $this->session->userdata("session_admin");
        $data["totalbarang"] = $this->Model_Admin->GetJumlahDataBarang();
        $this->load->view("Halaman_Data_Barang_Admin", $data);
    }

    public function Contact() {

        $data["judul"] = "Halaman Data Contact";
        $data["contact"] = $this->Model_Admin->GetAllContact();
        $data["session"] = $this->session->userdata("session_admin");
        $this->load->view("Halaman_Data_Contact_Admin", $data);
    }

    public function User() {

        $data["judul"] = "Halaman Data User";
        $data["user"] = $this->Model_Admin->GetAllUser();
        $data["session"] = $this->session->userdata("session_admin");
        $this->load->view("Halaman_Data_User", $data);
    }

    public function UserAdmin() {

        $data["judul"] = "Halaman Data User Admin";
        $data["useradmin"] = $this->Model_Admin->GetAllUserAdmin();
        $data["session"] = $this->session->userdata("session_admin");
        $this->load->view("Halaman_Data_User_Admin", $data);
    }

    public function HapusBarang($id) {

        $this->Model_Admin->Hapus($id);
        $this->session->set_flashdata("hapus", "DIHAPUS");
        redirect("Halaman_Admin/DataBarang");
    }

    public function DetailBarang($id) {

        $data["judul"] = "Halaman Detail Barang";
        $data["session"] = $this->session->userdata("session_admin");
        $data["detail"] = $this->Model_Admin->GetDetailBarang($id);
        $this->load->view("Halaman_Detail_Barang_Admin", $data);
    }

    public function TambahData() {

        $this->form_validation->set_rules("nama_barang", "NAMA BARANG", "required", [
            "required" => "Field Nama Barang Harus Diisi"
        ]);

        $this->form_validation->set_rules("keterangan", "KETERANGAN", "required", [
            "required" => "Field Keterangan Harus Diisi"
        ]);

        $this->form_validation->set_rules("kategori", "KATEGORI", "required", [
            "required" => "Field Kategori Harus Diisi"
        ]);

        $this->form_validation->set_rules("harga", "HARGA", "required|integer", [
            "required" => "Field Harga Harus Diisi",
            "integer" => "Masukkan Harga Barang Hanya Bilangan Saja Contoh(13000000)"
        ]);

        $this->form_validation->set_rules("berat", "BERAT", "required|integer", [
            "required" => "Field Berat Harus Diisi",
            "integer" => "Masukkan Berat Hanya Bilangan Saja Contoh(129)"
        ]);

        $this->form_validation->set_rules("stok", "STOK", "required|integer", [
            "required" => "Field Stok Harus Diisi",
            "integer" => "Masukkan Stok Hanya Bilangan saja Contoh(129)"
        ]);

        $this->form_validation->set_rules("gambar", "GAMBAR", "required", [
            "required" => "Field Gambar Harus Diisi",
        ]);

        if($this->form_validation->run() == FALSE) {

            $data["judul"] = "Halaman Tambah Data Barang";
            $data["session"] = $this->session->userdata("session_admin");
            $this->load->view("Halaman_Tambah_Data_Admin", $data);
            
        } else {
            $this->Model_Admin->Tambah();
            $this->session->set_flashdata("sukses", "BERHASIL");
            redirect("Halaman_Admin/TambahData");
        }
    }

    public function Transaksi() {

        $data["judul"] = "Halaman Detail Transaksi";
        $data["session"] = $this->session->userdata("session_admin");
        $data["user"] = $this->Model_Admin->GetUser();
        $data["totaltransaksi"] = $this->Model_Admin->GetAllTransaksi();
        $this->load->view("Halaman_Detail_Transaksi_Admin", $data);
    }

    public function HapusTransaksi($id) {

        $this->Model_Admin->DeleteTransaksi($id);
        $this->Model_Admin->DeletePesanan($id);
        redirect("Halaman_Admin/Transaksi");
    }

    public function DetailTransaksi($id) {

        $data["judul"] = "Halaman Detail Transaksi";
        $data["session"] = $this->session->userdata("session_admin");
        $data["transaksi"] = $this->Model_Admin->GetOneTransaksi($id);
        $data["pesanan"] = $this->Model_Admin->GetOnePesanan($id);
        $this->load->view("Halaman_Detail_Lengkap_Transaksi_Admin", $data);
    }

    public function HapusContact($id) {

        $this->Model_Admin->DeleteContact($id);
        $this->session->set_flashdata("contact", "DIHAPUS");
        redirect("Halaman_Admin/Contact");
    }

    public function DetailContact($id) {

        $data["judul"] = "Halaman Detail Contact";
        $data["session"] = $this->session->userdata("session_admin");
        $data["contact"] = $this->Model_Admin->GetContact($id);
        $this->load->view("Halaman_Detail_Contact_Admin", $data);
    }

    
    public function HapusUser($id) {

        $this->Model_Admin->DeleteUser($id);
        $this->session->set_flashdata("SUKSES", "BERHASIL DIHAPUS");
        redirect("Halaman_Admin/User");
    }

    
    public function DetailUser($id) {

        $data["judul"] = "Halaman Detail User";
        $data["session"] = $this->session->userdata("session_admin");
        $data["detailuser"] = $this->Model_Admin->GetDetailUser($id);
        $this->load->view("Halaman_Detail_User", $data);
    }


    public function HapusUserAdmin($id) {

        $this->Model_Admin->DeleteUserAdmin($id);
        $this->session->set_flashdata("admin", "BERHASIL");
        redirect("Halaman_Admin/UserAdmin");
    }

    public function DetailUserAdmin($id) {

        $data["judul"] = "Halaman Detail User Admin";
        $data["session"] = $this->session->userdata("session_admin");
        $data["detailuseradmin"] = $this->Model_Admin->GetDetailUserAdmin($id);
        $this->load->view("Halaman_Detail_Lengkap_User_Admin", $data);

    }
}


?>