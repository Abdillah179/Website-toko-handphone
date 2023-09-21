-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2023 pada 07.28
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_online3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(130) NOT NULL,
  `no_handphone` char(12) NOT NULL,
  `pesan` varchar(140) NOT NULL,
  `tanggal_pengiriman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `no_handphone`, `pesan`, `tanggal_pengiriman`) VALUES
(2, 'MUHAMMAD ABDILLAH ASYHAR', 'muhammadabdillahasyhar68@gmail.com', '081386052908', 'BAGUS', '2023-09-06'),
(3, 'MUHAMMAD ABDILLAH ASYHAR ', 'muhammadabdillahasyhar68@gmail.com', '081386052908', 'GREAT JOB', '2023-09-15'),
(5, 'EKO KURNIAWAN', 'muhammadabdillahasyhar68@gmail.com', '081386052908', 'COBA', '2023-09-20 12:29:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(110) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_barang`, `keterangan`, `kategori`, `harga`, `berat`, `stok`, `gambar`) VALUES
(4, 'VIVO Y33S', '> SPESIFIKASI HANDPHONE\r\n\r\nProsesorHelio                 : G80\r\nRAM                                  : 6GB\r\nPenyimpanan                   : 128GB (Memori Eksternal hingga 1TB)\r\nBaterai                               : 5000mAh (TYP)\r\nWarna                                : Mirror black / midday dream\r\nSistem Operasi                 : Funtouch OS 11.1 (Android 11 (Go edition))\r\nTampilan Layar                 : 6,58-inci\r\nResolusi                             : 2408×1080 (FHD+)\r\nTipe                                     :  LCD (IPS)\r\nLayar                                   :  Layar Sentuh Kapasitif\r\nKamera                               : Kamera Depan 16MP/Belakang 50MP + 2MP+ 2MP Front f/2.0 (16MP), Rear f/1.8 (50MP) + f/2.4 \r\nKoneksi                               : Wi-Fi 2,4 GHz / 5 GHz\r\nBluetooth                            :  Bluetooth 5.0\r\nUSB                                      : Micro USB (USB 2.0)\r\nGPS                                      : Didukung\r\nOTG                                ', 'HANDPHONE', 1150000, 178, 59, 'vivo y33s.jpg'),
(5, 'REALME 10 PRO', '> Specification:\r\n\r\n1.Model No.:A96\r\n2.Platform : Qualcomm 888+\r\n3.Standby: Dual sim dual standby(A slot support SIM card, another slot support SIM card or TF card)\r\n4.Screen: 7.8 HD+ Full Display 1080X2320\r\n5.Speaker: 1511 Box Speaker\r\n6.Frequency: GSM850, 3G: WCDMA2100MHz，5G LTE  5G7.Vibration: Support\r\n8.Colors:   Black/Gold/Light Blue/Green/Purple\r\n9.Memory: 16GB RAM+1TB ROM\r\n10.Multi Media: MP3/MP4/3GP/FM Radio/Bluetooth\r\n11.Camera: 48MP+72MP\r\n12.Multi Function: Full screen, Face recognition, Dual SIM, Wifi, GPS, Gravity Sensor, Alarm ,Calendar ,Calculator ,Audio recorder ,Video recorder, WAP/MMS/GPR, Image viewer,E-Book,World clock,Tasks card rear flash IML rear cover\r\n13.Languages: Multi-language support\r\n14.Others: Android OS 12.0 System\r\n15.Battery:8000Mah Lithium-ion battery\r\n16.Type-C plug\r\n17.Ultra unibody\r\n\r\n> Package Included:\r\n1 x Smartphone,\r\n1 x Charger Adapter,\r\n1 x Headphones,\r\n1 x User Manual\r\n1 x phone case\r\n1 x Protection film', 'HANDPHONE', 1300000, 178, 36, 'realme 10.jpg'),
(6, 'GALAXY S23 ULTRA', '> Deskripsi Produk:\r\n\r\nModel: Galaxy S23 Ultra  (Versi peningkatan 5G)\r\nJenis Prosesor:Qualcomm 888+\r\nPlatform: Android 12.0 \r\nPita Frekuensi 3G/4G/5G LTE\r\nSiaga: Kartu ekspansi kartu TF vertikal dua lapis\r\nLayar: 7.5 inches HD+\r\nFrekuensi: GSM: 800/900/1800/1900, WCDMA: 850/2100\r\nWarna: Graphite，Hijau，Lime，Merah Jambu\r\nKapasitas RAM dan ROM:  RAM 12GB  dan ROM 512GB\r\nKamera: 48MP + 72MP\r\nResolusi：1080X2320\r\nPanel: Layar kaku\r\n\r\nMultifungsi:5G+,pengenalan wajah, Wi-Fi 6 (802.11ax), senter ponsel,GPS, sensor gravitasi, jam alarm, kalender, kalkulator, perekam audio, perekam video, wap/mms/gprs/, penampil gambar, tugas e-book, sampul IML...\r\nBahasa: Dukungan multi-bahasa\r\nBaterai: Baterai lithium-ion 6800mAh\r\nAksesoris: Charger standar, kabel data, earphone, lengan karet, film pelindung, manual.\r\n\r\nIsi Paket:\r\n1xPerangkat \r\n1xPengisi Daya  \r\n1x Kabel Data USB\r\n1 xPanduan Pengguna\r\n1x Headset \r\nGratis 2 Hadiah:\r\n1x Case Pelindung\r\n1xFilm Pelindung\r\n', 'HANDPHONE', 979000, 189, 43, 'galaxy s23 ultra.jpg'),
(7, 'XIAOMI POCO C40', 'Body 	\r\nDimensions 	169.6 x 76.6 x 9.2 mm (6.68 x 3.02 x 0.36 in)\r\nWeight 	204 g (7.20 oz)\r\nSIM 	\r\nDual SIM (Nano-SIM, dual stand-by)\r\nDust & splash resistant\r\nDisplay 	\r\nType 	IPS LCD, 400 nits\r\nSize 	6.71 inches, 106.5 cm2 (~82.0% screen-to-body ratio)\r\nResolution 	720 x 1650 pixels (~268 ppi density)\r\nProtection 	\r\nCorning Gorilla Glass\r\nPlatform 	\r\nOS 	Android 11, MIUI 13 for POCO\r\nChipset 	\r\nJLQ JR510 (11 nm)\r\nCPU 	Octa-core (4x2.0 GHz Cortex-A55 & 4x1.5 GHz Cortex-A55)\r\nGPU 	Mali-G57 MC1\r\nMemory 	\r\nCard slot 	microSDXC\r\nInternal 	64GB 4GB RAM\r\nMain Camera 	\r\nDual 	13 MP, f/2.2, (wide), PDAF\r\n2 MP, f/2.4, (depth)\r\nFeatures 	LED flash, HDR, panorama\r\nVideo 	1080p@30fps\r\nSelfie camera 	\r\nSingle 	5 MP, f/2.2\r\nFeatures 	HDR\r\nVideo 	1080p@30fps\r\nSound 	\r\nLoudspeaker 	Yes\r\n3.5mm \r\njack 	Yes\r\nComms 	\r\nWLAN 	Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot\r\nBluetooth 	5.0, A2DP, LE\r\nGPS 	Yes, with A-GPS, GLONASS, GALILEO, BDS\r\nNFC 	Yes (market/region dependent)\r\nInfrared port 	Ye', 'HANDPHONE', 1267000, 206, 47, 'poco c40.jpg'),
(8, 'OPPO A16', 'NETWORK\r\nTechnology	GSM / HSPA / LTE\r\n\r\nLAUNCH\r\nAnnounced	2021, July 17\r\nStatus	Available. Released 2021, July 17\r\n\r\nBODY\r\nDimensions	163.8 x 75.6 x 8.4 mm (6.45 x 2.98 x 0.33 in)\r\nWeight	190 g (6.70 oz)\r\nSIM	        Dual SIM (Nano-SIM, dual stand-by)\r\n\r\nDISPLAY\r\nType	IPS LCD, 480 nits (typ)\r\nSize	        6.52 inches, 102.6 cm2 (~82.9% screen-to-body ratio)\r\nResolution	720 x 1600 pixels, 20:9 ratio (~269 ppi density)\r\n\r\nPLATFORM\r\nOS	Android 11, ColorOS 11.1\r\nChipset	MediaTek MT6765G Helio G35 (12 nm)\r\nCPU	Octa-core (4x2.3 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)\r\nGPU	PowerVR GE8320\r\n\r\nMEMORY\r\nCard slot	microSDXC\r\nInternal	128GB 6GB RAM \r\n\r\nMAIN CAMERA\r\nTriple	13 MP, f/2.2, 26mm (wide), 1/3.06\", 1.12µm, PDAF\r\n                2 MP, f/2.4, (macro)\r\n                2 MP, f/2.4, (depth)\r\nFeatures	LED flash, HDR, panorama\r\nVideo	1080p@30fps\r\n\r\nSELFIE CAMERA\r\nSingle	8 MP, f/2.0, (wide)\r\nFeatures	HDR\r\nVideo	1080p@30fps\r\n\r\nSOUND\r\nLoudspeaker	Yes\r\n3.5mm jack	Yes\r\n\r\nCOMMS\r\nWLAN	Wi-Fi 802.11 a/b/g/n', 'HANDPHONE', 970000, 190, 37, 'oppo a16.jpg'),
(9, 'OPPO RENO 9 PRO', '> Deskripsi Produk\r\n\r\nModel: Reno9 Pro\r\nJenis Prosesor:Snapdragon 865 Plus\r\nPlatform: Android 12.0 \r\nPita Frekuensi 3G/4G/5G LTE\r\nSiaga: Kartu ekspansi kartu TF vertikal dua lapis\r\nLayar: 7.5 inches HD+\r\nFrekuensi: GSM: 800/900/1800/1900, WCDMA: 850/2100\r\nWarna: Graphite，Hijau，Lime，Merah Jambu\r\nKapasitas RAM dan ROM:  RAM 12GB  dan ROM 512GB\r\nKamera: 32MP + 64MP\r\nResolusi：1440*3040\r\nPanel: Layar kaku\r\n\r\nMultifungsi:5G+,pengenalan wajah, Wi-Fi 6 (802.11ax), senter ponsel,GPS, sensor gravitasi, jam alarm, kalender, kalkulator, perekam audio, perekam video, wap/mms/gprs/, penampil gambar, tugas e-book, sampul IML...\r\nBahasa: Dukungan multi-bahasa\r\nBaterai: Baterai lithium-ion 6800mAh\r\nAksesoris: Charger standar, kabel data, earphone, lengan karet, film pelindung, manual.\r\n\r\nIsi Paket:\r\n1xPerangkat \r\n1xPengisi Daya  \r\n1x Kabel Data USB\r\n1 xPanduan Pengguna\r\n1x Headset \r\nGratis 2 Hadiah:\r\n1x Case Pelindung\r\n1xFilm Pelindung', 'HANDPHONE', 1139000, 198, 37, 'oppo reno 9.jpg'),
(10, 'VIVO Y17', '> Spesifikasi VIVO Y17\r\n\r\nUkuran Layar : 6.35 inci 720 x 1544 pixel HD+\r\nChipset : Mediatek Helio P35\r\nGPU: PowerVR GE8320\r\nCPU: Octa-core (4x2.3 GHz Cortex- A53 & 4x1.8 GHz Cortex-A53)\r\nOS : Android 9.0 (pie),funtouch 9\r\nRAM: 4 GB & 6GB\r\nMemori internal : 128GB\r\nUkuran HP : Dimensi 159.4 x 76.8 x 8.9mm\r\nBerat HP : 190.5g\r\nKamera depan : single 20 MP,f/2.0,(wide)\r\nKamera belakang : Triple camera 13 MP,f/2.2;8 MP,f2/2,16mm (ultrawide);2 MP,f/2.4,(depth)\r\nBaterai :5000 mAh\r\nWLAN: Wi-fi 802.11 b/g/n,wi-fi direct,hostpot\r\nBluetooth: 5.0,A2DP,LE\r\nPilihan Warna : Mineral blue,Pearl pink\r\nTanggal Rilis :april 2019', 'HANDPHONE', 890000, 190, 79, 'vivo y17.jpg'),
(11, 'OPPO A77S', '> Size and Weight : \r\nHeight: about 16.374cm\r\nWidth: about 7.503cm\r\n\r\n> Thickness :\r\nPanel version (Starry Black): about 0.799cm\r\nLeather version (Sunset Orange): about 0.804cm\r\n\r\n> Weight :\r\nPanel version (Starry Black): about 187g\r\nLeather version (Sunset Orange): about 190g\r\n\r\n> Storage :\r\nRAM and ROM Capacities: 8GB + 128GB\r\nRAM Type: LPDDR4X @ 2133MHz, dual 16-bit channels\r\nROM Specifications  UFS 2.2 @ 2-lane Gear3\r\nPhone Storage Card:  SDXC\r\nUSB OTG:  Supported\r\n\r\n> Display :\r\nSize:  6.56 inches (16.66cm)\r\nScreen Ratio:  89.8%\r\nResolution:  1612 x 720 (HD+)\r\nRefresh Rate:  \r\nMax: 90Hz\r\nOptional: 60Hz\r\nTouch Sampling Rate:  \r\nMax: 90Hz\r\nOptional: 60Hz\r\nColour Gamut:  96%\r\nColor Depth:  16.7 million colors\r\nPixel Density:  269PPI\r\nBrightness:  \r\nTypical value: 480nits\r\nMax value: 600nits\r\nPanel:  LCD (a-Si)\r\nCover Glasses:  Panda MN228\r\n\r\n> Camera :\r\nRear\r\nMain camera: 50M; f/1.8; FOV 77°; 5P lens; AF\r\nMono camera: 2M; f/2.4; FOV 89°; 3P lens; FF\r\nFront\r\n8MP; f/2.0; FOV 79°; 5P le', 'HANDPHONE', 869000, 189, 31, 'oppo a77s.jpg'),
(12, 'VIVO V15', '> SPESIFIKASI :VIVO V15\r\n\r\nJARINGAN : GSM / HSPA / LTE\r\nDIMENSI :161.2 x 75.9 x 8.5 mm\r\nBERAT :	189.5 g\r\nJENIS LAYAR :IPS LCD\r\nUKURAN :6.53 inches, 104.7 cm2 (~85.6% screen-to-body ratio)\r\nRESOLUSI :1080 x 2340 pixels, 19.5:9 ratio (~395 ppi density)\r\nPROTEKSI :\r\nOS ANDROID :Android 9.0 (Pie), Funtouch 9\r\nCHIPSET : 	Mediatek MT6771 Helio P70 (12nm)\r\nCPU :Octa-core (4x2.1 GHz Cortex-A73 & 4x2.0 GHz Cortex-A53)\r\nGPU : 	Mali-G72 MP3\r\nMEMORI :256GB+8GB RAM\r\nKAMERA UTAMA (BELAKANG :24 MP, f/1.8, 1/2.8\", 1.12µm, Dual Pixel PDAF\r\n8 MP, f/2.2, 13mm (ultrawide), 1/4.0\", 1.12µm\r\n5 MP, f/2.4, (depth)\r\nKAMERA SELFIE(DEPAN) :Motorized pop-up 32 MP, f/2.0, 26mm (wide), 1/2.8\", 0.8µm\r\nVIDEO : 1080p@30fps\r\nKAPASITAS BATERAI :Li-Po 4000 mAh, non-removable\r\nFINGERPRINT : YA\r\n\r\nKELENGKAPAN:\r\n-HANDPHONE,DUS,CHARGER HANDPONE,\r\n-FREE SOFT CASE/JELLY CASE DAN ANTI GORES, ( RANDOM TIDAK SEMUA CUSTOMER DAPAT )\r\n-GARANSI TOKO 1 TAHUN\r\n- PACKING RAPIH', 'HANDPHONE', 1000000, 189, 70, 'vivo v15.jpg'),
(16, 'POCO M3', 'Specification:\r\n1.Model No : PCOCM3 5G\r\n2.Platform : MTK6889\r\n3.Standby: Dual sim dual standby(A slot support SIM card, another slot support SIM card or TF card)\r\n4.Screen: 6.8 HD+ Full Display 1440X3040\r\n5.Speaker: 1511 Box Speaker\r\n6.Frequency: GSM850, 3G: WCDMA2100MHz，5G LTE  5G7.Vibration: Support\r\n8.Colors:   Black / Blue / Golden\r\n9.Memory: 12GB RAM+512GB ROM\r\n10.Multi Media: MP3/MP4/3GP/FM Radio/Bluetooth\r\n11.Camera: 32MP+64MP\r\n12.Multi Function: Full screen, Face recognition, Dual SIM, Wifi, GPS, Gravity Sensor, Alarm ,Calendar ,Calculator ,Audio recorder ,Video recorder, WAP/MMS/GPR, Image viewer,E-Book,World clock,Tasks card rear flash IML rear cover\r\n13.Languages: Multi-language support\r\n14.Others: Android OS 12.0 System\r\n15.Battery:4800Mah Lithium-ion battery\r\n16.Type-C plug\r\n\r\nPackage Included:\r\n1 x Smartphone,\r\n1 x Charger Adapter,\r\n1 x Headphones,\r\n1 x User Manual\r\n1 x phone case', 'HANDPHONE', 7000000, 189, 180, 'poco m3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat_satuan_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_transaksi`, `id_barang`, `nama_barang`, `harga`, `berat_satuan_produk`, `qty`, `subtotal`, `total`) VALUES
(81, 69, 4, 'VIVO Y33S', 1150000, 178, 1, 1150000, 1150000),
(82, 70, 9, 'OPPO RENO 9 PRO', 1139000, 198, 1, 1139000, 1139000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(120) NOT NULL,
  `no_hp_pembeli` char(12) NOT NULL,
  `provinsi` varchar(120) NOT NULL,
  `kota` varchar(120) NOT NULL,
  `jasa_pengiriman` varchar(110) NOT NULL,
  `pembayaran` varchar(110) NOT NULL,
  `alamat_lengkap_tujuan` varchar(130) NOT NULL,
  `tanggal_pemesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `nama_pembeli`, `no_hp_pembeli`, `provinsi`, `kota`, `jasa_pengiriman`, `pembayaran`, `alamat_lengkap_tujuan`, `tanggal_pemesanan`) VALUES
(69, 'MUHAMMAD ABDILLAH ASYHAR', '081386052908', 'JAWA BARAT', 'Karawang', 'JNE', 'BCA', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', '2023-09-19 12:25:37'),
(70, 'ABDILLAH', '081386052908', 'JAWA BARAT', 'Karawang', 'JNE', 'BCA', 'Bumi Telukjambe Blok T/567 rt 006/ rw 011, Desa Sukaharja Kecamatan Telukjambe Timur, Kabupaten Karawang Jawa Barat', '2023-09-19 12:31:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(900) NOT NULL,
  `password` varchar(900) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(110) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role_id`, `is_active`, `date_created`, `image`) VALUES
(29, 'abdillah123', 'muhammadabdillahasyhar68@gmail.com', '$2y$10$3hGIA29qzx5DfwJl/58.Gu.H/szqUHNHA7DrHIp4pZEmyg0wISR46', 2, 1, '2023-09-20 12:49:25', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role_id` int(2) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'abdillah129', 'abi123', 2, 1, '20-09-2023 17:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role_id`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
