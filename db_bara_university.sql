-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 09:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `db_bara_university`;
USE `db_bara_university`;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bara_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `subjek`, `pesan`) VALUES
(26, 'Yudi Wahyudin', 'yudi@gmail.com', ' Biaya Kuliah', 'Apakah Setelah pendaftaran ada biaya lagi?'),
(27, 'Asep Saefulloh', 'asep@gmail.com', 'Pendaftar SMK', 'Apakah lulusan SMK bisa mendaftar?'),
(28, ' Yosep', 'yosep@gmail.com', ' KIP Kuliah', 'Saya memiliki KIP. Apakah bisa dipakai disini?'),
(29, ' Dulloh', 'dulloh@gmail.com', ' Biaya Kuliah', 'Berapa Biaya Kuliah yang harus dikelurakan di jurusan Ilmu Komputer'),
(30, ' Dewi', 'dew@gmail.com', ' Nilai UTBK', 'Saya tidak mengikuti UTBK apakah saya masih bisa mendaftar di jurusan DKV?'),
(31, ' Zulvan', 'zulvan@gmail.com', ' Pendaftaran', 'Apakah pendaftarannya masih dibuka?'),
(32, ' Syahriar', 'syahriar@gmail.com', ' Hasil Pengumuman', 'Bagaimana cara lihat hasil pengumuman?'),
(33, ' Veri Saputra', 'saputraVeri@gmail.com', ' Pengumuman Pendaftaran', 'Bagaimana saya melihat kelulusan nanti?'),
(34, ' Dzulfikri Syahrir', 'SyahrirDzulfikri@gmail.com', ' Pendaftar KIP', 'Apakah bisa memakai KIP untuk daftar kesini?'),
(35, ' Rifki Maulana', 'maulanaRifki@gmail.com', ' Seleksi Mandiri Jurusan', 'Haloo, apakah seleksi mandiri ini terbuka untuk semua jurusan?'),
(36, ' Fajar Mustaqim', 'mustaqimFajar@gmail.com', ' Biaya Kuliah', 'Setelah saya mendaftar apakah ada biaya lagi?'),
(37, ' Mori Maulana', 'mori@gmail.com', ' Jadwal', 'Haiii bolehkah meminta jadwal seleksi mandiri?'),
(38, ' Irsyad Alifka', 'alifkaIrsyad@gmail.com', ' Biaya Pendaftaran', 'Apakah benar untuk biaya pendaftarannya segitu?'),
(39, ' Tio Lukmanul', 'tioLukmanul@gmail.com', ' Portofolio Jurusan', 'Apakah semua jurusan memerlukan portofolio?'),
(40, ' Ikhsan Alfayed', 'alfayedIkhsan@gmail.com', ' Pendaftaran SMK', 'Apakah masih bisa mendaftar apabila lulusan SMK?'),
(41, ' Machra Muhammad', 'machra@gmail.com', ' Sistem Penilaian', 'Bagaimana sistem penilaian Seleksi Mandiri?'),
(42, ' Leonardo Topan', 'topan@gmail.com', ' Pengumuman', 'Bagaimana cara lihat pengumuman setelah pendaftaran dan ujian?'),
(43, ' Rafi Kevin', 'kevin@gmail.com', ' Tes Wawancara', 'Saya ingin bertanya apakah ada tes wawancaara untuk jurusan DKV?'),
(44, ' Devin Kamindra', 'kamindra@gmail.com', ' Materi Ujian', 'Materi pelajaran apa saja yang perlu saya pelajari apabila masuk jurusan Sastra Korea?'),
(45, ' Opang', 'opang@gmail.com', ' Biaya Kuliah', 'Setelah saya mendaftar apakah ada biaya lagi?'),
(46, ' Labilla', 'labilla@gmail.com', ' Sistem Penilaian', 'Bagaimana sistem penilaian dalam seleksi madiri ini?'),
(47, ' Yusuf Syuhada', 'syuhada@gmail.com', ' Pendaftar MA', 'Apakah Seorang lulusan MA bisa daftar kesini?'),
(48, ' DenaArifin', 'denaArifin@gmail.com', ' Transfer Biaya', 'Transfer via apa saja yang bisa dilakukan?'),
(49, ' Boy Asyakur', 'aysakur@gmail.com', ' Kriteria Penilaian', 'Saya ingin tahu bagaimana kriteria penilaian seleksi mandiri ini?'),
(50, ' Ropik', 'ropik@gmail.com', ' Pendaftaran', 'Apakah Pendaftarannya masih dibuka?'),
(51, ' Andin Rajendra', 'rajendra@gmail.com', ' Biaya Pendaftaran', 'Apakah biaya pendaftarannya tetap segitu?'),
(52, ' Adit Purnama', 'purnama@gmail.com', ' Lulusan SMK / MA', 'Lulusan SMK / MA bisa daftar kesini?'),
(53, ' Tari Andini', 'andini@gmail.com', ' Hasil Pengumuman', 'Bagaimana Cara melihat hasil pengumumannya?'),
(54, ' Topik', 'topik@gmail.com', ' Pendaftaran', 'Apakah untuk pendaftarannya masih dibuka?'),
(55, ' Gerhana Tari', 'tariGerhana@gmail.com', ' Portofolio Jurusan', 'Apakah untuk jurusan Akuntansi memerlukan portofolio?'),
(56, ' Rivaldo Septian', 'septianRivaldo@gmail.com', ' Lulusan SMK', 'Apakah Lulusan SMK bisa mendaftar disini?'),
(57, ' Dodo Purnama', 'Dodo@gmail.com', ' Biaya Pendaftaran', 'Apakah setelah pendafatran ada biaya lagi?'),
(58, ' Yusuf Dari', 'dari@gmail.com', ' Pendaftaran', 'Apakah pendaftarannya masih dibuka hingga kini?'),
(59, ' Deny Mahardika', 'denyMahardika@gmail.com', ' Biaya Pendaftaran', 'Apakah biaya pendaftarannya tetap segitu harganya?');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(8) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nomor_telp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `nama_org_tua` varchar(100) DEFAULT NULL,
  `nama_prodi` varchar(100) DEFAULT NULL,
  `nama_fakultas` varchar(100) DEFAULT NULL,
  `file_foto` text DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `nomor_telp`, `email`, `asal_sekolah`, `nama_org_tua`, `nama_prodi`, `nama_fakultas`, `file_foto`, `status`) VALUES
(43, 'Yusdan', 'Laki-Laki', '2004-08-01', 'Jl. K. H Ahmad Dahlan No 34C, Kota Sibolga, Sumatera Utara', '082274060100', 'myusdanali@gmail.com', 'SMA UNGGULAN CT ARSA FOUNDATION', 'Yuni Sartika', 'Ilmu Komputer', 'FMIPA', 'WhatsApp Image 2022-10-03 at 15.52.43.jpeg', 'approved'),
(44, 'Defrizal', 'Laki-Laki', '2003-06-06', 'Jln. Geger Arum Bawah no 156..rt 07 rw 01 Gegerkalong Sukasari Kota Bandung Jawa Barat 40153', '089636810104', 'defrijay@gmail.com', 'SMAN 2 kuningan', 'Sutardi', 'S1 Ilmu Komputer', 'FMIPA', 'Defrizal Yahdiyan Risyad.png', 'approved'),
(46, 'Deny Mahardika', 'Laki-Laki', '2003-02-04', 'Jln. Sersan Bajuri No. 54, Bandung, Jawa Barat', '08756643321', 'denyMahardika@gmail.com', 'SMAN 2 Kuningan', 'Tedy Saefulloh', 'S1 Ilmu Komputer', 'FMIPA', 'DefrizalYahdiyanRisyad_Humas&PDD_@dfrzlyr.JPG', 'approved'),
(47, 'Veri Saputra', 'Laki-Laki', '2004-03-05', 'Jln. Ahmad Yani No 43 Kel. Cikamerkar, Bandung, Jawa Barat', '08744333823', 'saputraVeri@gmail.com', 'SMAN 3 Bandung', 'Asep Komarudin', 'S1 Bahasa dan Sastra Korea', 'FBS', 'IMG_5754-02.jpeg', 'approved'),
(48, 'Andini Putri', 'Perempuan', '2006-01-06', 'Jln. Pangeran Timur Putra No. 154, Bandung Jawa Barat', '08377322311', 'putriAndini@gmail.com', 'SMKN 76 Jakarta', 'Taufik Hidayat', 'S1 Bahasa dan Sastra Perancis', 'FBS', 'shopping-concept-portrait-attractive-korean-girl-yellow-sweater-showing-promotion-offer-copy-space-pointing-looking-left-with-pleased-smile-blue-background.jpg', 'approved'),
(49, 'Wildan Juanda', 'Laki-Laki', '2007-03-27', 'Jln. Sersan Timur Patra No. 34, Tasikmalaya, Jawa Barat', '08287883233', 'wildan@gmail.com', 'MA 4 Tasikmalaya', 'Rangga Aditya', 'S1 Manajemen', 'FEB', 'DSC02972 (1).JPG', 'approved'),
(50, 'Dzakkir Thoriq', 'Laki-Laki', '2005-03-13', 'Jln. Afidik No. 54 Rt. 8, Kuningan, Jawa Barat', '08332232311', 'thoriq@gmail.com', 'SMAN 2 Kuningan', 'Rekan Setyono', 'S1 Ilmu Komunikasi', 'FIPS', 'jay.png', 'approved'),
(51, 'Miftahul Huda ', 'Laki-Laki', '2003-01-24', 'Perumahan Pondok Indah No. 67, Jakarta Barat', '082332323', 'hudaMiftahul@gmail.com', 'SMKN 154 Jakarta', 'Budiono', 'S1 Teknik Elektro', 'FTK', 'WhatsApp Image 2023-03-02 at 21.29.13.jpeg', 'approved'),
(52, 'Throriq Abdillah', 'Laki-Laki', '2004-03-13', 'Perumahan Malaka No. 56 ,Gresik, Jawa Timur', '08323887721', 'abdillah@gmail.com', 'MA Islam terpadu Gresik', 'Tan Malaka', 'S1 Akuntansi', 'FEB', '20230427_205723.jpg', 'approved'),
(53, 'Asep Komarudin', 'Laki-Laki', '2004-12-01', 'Jl. Geger Arum No 90, Bandung, Jawa Barat', '08932432', 'komaruddin@gmail.com', 'SMAN 1 Bandung', 'Soeharto', 'S1 IPSE', 'FMIPA', 'waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer.jpg', 'approved'),
(54, 'Putri Kisar', 'Perempuan', '2005-12-05', 'Jln. Utopia No. 67, Bandung, Jawa Barat', '8932432', 'kisarPutri@gmail.com', 'SMAN 4 Bandung', 'Ayu Meila', 'S1 Desain Komunikasi Visual', 'FSRD', 'shopping-concept-portrait-attractive-korean-girl-yellow-sweater-showing-promotion-offer-copy-space-pointing-looking-left-with-pleased-smile-blue-background.jpg', 'approved'),
(55, 'Salman Kaisar', 'Laki-Laki', '2005-12-06', 'Jln. AtomJuni No. 345, Jakarta Barat', '0832462663', 'salmanKaisar@gmail.com', 'MA 76 Jakarta', 'Denis Maryuni', 'S1 Bahasa dan Sastra Korea', 'FBS', 'smiling-businessman-standing-with-arms-folded-isolated-white.jpg', 'approved'),
(56, 'Dimas Ucup', 'Laki-Laki', '2003-12-03', 'Perumahan Indah Sari No. 43, Majalengka', '08934324', 'dimasUcup@gmail.com', 'SMAN 43 Majalengka', 'Ridwan Maulid', 'S1 Desain Interior', 'FSRD', 'happy-asian-man-standing-with-arms-crossed-grey-wall.jpg', 'approved'),
(57, 'Ikhsan Alfayed', 'Laki-Laki', '2004-01-01', 'Jln. Bulan Purnama No. 56, Cirebon,  Jawa Barat', '08923432', 'Alfayed@gmail.com', 'SMAN 3 Cirebon', 'Jasmine', 'S1 Seni Musik', 'FSRD', 'cheerful-man-pointing-finger-left-advertise-product.jpg', 'approved'),
(58, 'Leonardo Topan', 'Laki-Laki', '2023-06-07', 'Jln. Melati Barat No. 45, Cirebon, Jawa Barat', '089232392', 'leonardo@gmail.com', 'SMAN 3 Cirebon', 'Melati', 'S1 Ilmu Olahraga', 'FOK', 'smiling-businessman-standing-with-arms-folded-isolated-white.jpg', 'approved'),
(59, 'Rafi Kevin', 'Laki-Laki', '2004-05-04', 'Perumahan Geger Indah Bandung No. 45, Bandung, Jawa Barat', '08324823', 'kevin@gmail.com', 'SMAN 23 Bandung', 'Tuti Astuti', 'S1 Sosiologi', 'FIPS', 'portrait-man-smiling.jpg', 'approved'),
(60, 'Devindra Kevin', 'Laki-Laki', '2004-05-06', 'Jln. Utopia No. 167, Bandung, Jawa Barat', '83922330', 'kevin@gmail.com', 'SMAN 8 Bandung', 'Malik Udin', 'S1 Manajemen Industri Katering', 'FIPS', 'cheerful-man-pointing-finger-left-advertise-product.jpg', 'approved'),
(61, 'Opang', 'Laki-Laki', '2023-03-13', 'Jln. majaJaya No. 23, Jakarta Timur', '08934324', 'opang@gmail.com', 'SMAN 154 Jakarta', 'Udin Malaka', 'S1 Seni Tari', 'FSRD', 'waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer.jpg', 'approved'),
(62, 'Bara Abdillah', 'Laki-Laki', '2004-06-15', 'Perumahan Menlu Cirebon No. 34, Cirebon, Jawa Barat', '0893432', 'bara@gmail.com', 'MA Binnaul Ummah Cirebon', 'Endahsari', 'S1 Manajemen Pemasaran Pariwisata', 'FIPS', 'happy-asian-man-standing-with-arms-crossed-grey-wall.jpg', 'approved'),
(63, 'Fauzan Nur Ramadhan', 'Laki-Laki', '2005-07-20', 'Jln. Karyakarsa No. 76, Kuningan, Jawa barat', '0893423', 'fauzan@gmail.com', 'MA Khusnul Khotimah Kuningan', 'Yeti Turni', 'S1 Manajemen Perkantoran', 'FEB', 'waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer.jpg', 'approved'),
(64, 'Rasyid Safitri', 'Perempuan', '2004-08-17', 'Komplek Bulan Purnama No. 98, Medan', '0893432', 'safitriRasyid@gmail.com', 'SMAN 1 Medan', 'Doni Komaludin', 'S1 Matematika', 'FMIPA', 'asian-woman-posing-looking-away-gray-background.jpg', 'approved'),
(65, 'Dena Nur Aulia', 'Perempuan', '2004-08-18', 'Jln. Atmajaya No. 89, Subang, Jawa Barat', '089342342', 'denaNur@gmail.com', 'SMAN 4 Subang', 'Melvin Kevin', 'S1 Seni Rupa dan Kerajinan', 'FSRD', 'business-concept-portrait-confident-young-businesswoman-keeping-arms-crossed-looking-camera-w.jpg', 'approved'),
(66, 'Aulia Jasmine', 'Perempuan', '2005-02-19', 'Jln. Majayuning No. 81, Subang, Jawa Barat', '08932423', 'AuliaJasmine@gmail.com', 'SMAN 5 Subang', 'Dea Abdillah', 'S1 Manajemen Bisnis', 'FEB', 'portrait-beauty-asian-woman-brown-dress-smile-with-happy-confident-joyful-hand-hold-smartphone-business-communication-white-background (1).jpg', 'approved'),
(67, 'Bintang Fajar', 'Laki-Laki', '2004-03-20', 'Jln. Majayuning No. 89, Subang, Jawa Barat', '08934324', 'fajar@gmail.com', 'SMAN 23 Subang', 'Anjani Putri', 'S1 Teknik Mesin', 'FTK', 'portrait-man-smiling.jpg', 'approved'),
(68, 'Yusuf Maulana', 'Laki-Laki', '2003-01-01', 'Jln. Majanuning No. 87, Banjarnergara', '089324324', 'maulana@gmail.com', 'SMAN 45 Banjarnergara', 'Putri Purnama', 'S1 Keperawatan', 'FOK', 'smart-attractive-asian-glasses-male-standing-smile-with-freshness-joyful-casual-blue-shirt-portrait-white-background.jpg', 'approved'),
(69, 'Irfan Hanif', 'Laki-Laki', '2005-03-01', 'Perumahan Numrah Keren No. 56, Jawa Barat', '089342432', 'hanif@gmail.com', 'SMKN 5 Surabaya', 'Ani Abdillah', 'S1 Ilmu Olahraga', 'FOK', 'business-finance-people-concept-thoughtful-asian-businessman-blue-shirt-cross-arms-looking-upper-left-corner-making-choice-thinking-daydreaming-standing-white-background.jpg', 'approved'),
(70, 'Indah Yasmin', 'Perempuan', '2005-10-25', 'Jln. ManukWali Barat No. 90, Surabaya, Jawa Timur', '0893432', 'yasmin@gmail.com', 'SMKN 45 Surabaya', 'Yusuf Maulana', 'S1 Seni Musik', 'FSRD', 'lifestyle-people-emotions-casual-concept-confident-nice-smiling-asian-woman-cross-arms-chest-confident-ready-help-listening-coworkers-taking-part-conversation.jpg', 'approved'),
(71, 'Nuning Putri', 'Perempuan', '2003-09-02', 'Jln Raden Shaleh No. 90, Surabaya, Jawa Timur', '089343242', 'putriNuning@gmail.com', 'SMKN 5 Surabaya', 'Faizan Ramadhan', 'S1 Ekonomi dan Koperasi', 'FEB', 'business-finance-employment-female-successful-entrepreneurs-concept-friendly-smiling-office-manager-greeting-new-coworker-businesswoman-welcome-clients-with-hand-wave-hold-laptop.jpg', 'approved'),
(72, 'Aulia Putri Bulan', 'Perempuan', '2004-09-23', 'Jln. KaptenAtok No 90, Gresik, Jawa Tengah', '08932432', 'putiAulia@gmail.com', 'SMAN 7 Gresik', 'Susi Astri', 'S1 Geografi', 'FIPS', 'portrait-young-asia-lady-with-positive-expression-arms-crossed-smile-broadly-dressed-casual-clothing-looking-camera-pink-background.jpg', 'approved'),
(73, 'Indah Putri', 'Perempuan', '2005-10-25', 'Jln. BatangNegara, No. 190, Bandung, Jawa barat', '08943256565', 'IndahPutri@gmail.com', 'SMKN 4 Bandung', 'Udin Tejo', 'S1 Biologi', 'FMIPA', 'portrait-young-beautiful-business-asian-woman-office-crossed-arms.jpg', 'approved'),
(74, 'Dewi Indah', 'Perempuan', '2003-11-12', 'Perumahan Sidoarjo No. 76, Gresik, Jawa Tengah', '089324324', 'indahDewi@gmail.com', 'SMAN 8 Gresik', 'Sumarni', 'S1 Bahasa dan Sastra Perancis', 'FBS', 'image-young-asian-woman-company-worker-glasses-smiling-holding-digital-tablet-standing-white-background.jpg', 'approved'),
(75, 'Taufiq Syuhada', 'Laki-Laki', '2003-01-01', 'Jln. ManukWali No, 43, Sidoarjo, Jawa timur', '0893432342', 'syuhadaTaufiq@gmail.com', 'SMKN 45 Sidoarjo', 'Jea Julia', 'S1 Seni Bahasa', 'FSRD', 'waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer.jpg', 'approved'),
(76, 'Akim Putra Bulan', 'Laki-Laki', '2004-03-13', 'Jln. Padjajaran No. 80, Bandung, Jawa Barat', '08993423', 'putraAkim@gmail.com', 'SMKN 45 Bandung', 'Julianti Rosa', 'S1 Ilmu Ekonomi dan Keuangan Islam', 'FEB', 'smart-attractive-asian-glasses-male-standing-smile-with-freshness-joyful-casual-blue-shirt-portrait-white-background.jpg', 'approved'),
(77, 'Restu Putri', 'Perempuan', '2004-03-21', 'Jln. Lembang No. 890, Lembang, Jawa Barat', '08942394', 'restuPutri@gmail.com', 'SMAN 4 Bandung', 'Ayuning', 'S1 Teknik Arsitektur', 'FTK', 'shopping-concept-portrait-attractive-korean-girl-yellow-sweater-showing-promotion-offer-copy-space-pointing-looking-left-with-pleased-smile-blue-background.jpg', 'approved'),
(78, 'Loki Putri', 'Perempuan', '2005-05-13', 'jln. Siliwangi no. 89, Bandung, Jawa Barat', '08492384', 'Lokiputri@gmail.com', 'SMAN 4 Bandung', 'Cecep Komarudin', 'S1 Kesehatan dan Rekreasi', 'FOK', 'business-concept-portrait-confident-young-businesswoman-keeping-arms-crossed-looking-camera-w.jpg', 'approved');

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `tr_mahasiswa` BEFORE INSERT ON `mahasiswa` FOR EACH ROW BEGIN
  IF NEW.nama = '' 
  THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Nama tidak boleh kosong!';
  END IF;
  IF NEW.nama_org_tua = ''
  THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Nama Ibu tidak boleh kosong!';
  END IF;
  IF NEW.alamat = ''
  THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Alamat tidak boleh kosong!';
  END IF;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(13, 'yusdan', '$2y$10$Ehyzr7UcDfzuTadksNtUBO8TLBcBY54E0oBPrSyVZ0trlz8mySW4G'),
(14, 'defrizal', '$2y$10$yMkUCwMfxsrRI0eTImZ.LOMz9JlYI.aTdajW6FfmeySIWn0rbkYFe'),
(15, 'deny', '$2y$10$9UErdycAqG0s4guXJ9U.GevVkuXxY/aPaD4lFZk0egpN94.y.UoRC'),
(16, 'veri', '$2y$10$OmOJMHkQoWhChBX9UMLT.eetI/f0T9Gwm8q.cPgT5oOWLR0gUm9ly'),
(17, 'andin', '$2y$10$vRw0ZUtuM/aPxLxN/E.tjOH.P/HL0.js9D.47mXHMPolm8RYzHuAe'),
(18, 'wildan', '$2y$10$odhmbj4LxoYUYrUC94rE3.6pMarKCmpq9Gjhmi36TxYZxxoGLcRMy'),
(19, 'dzakkir', '$2y$10$/3HdraShaLVE7HwHCj2zc.Xyc59f6zOfS9Adcj29FGHBsS9OEl63O'),
(20, 'mitahul', '$2y$10$DaSeFzup6mIMN9UtkN42UOzUXZaRAwKSsj7laUKUvBHrO/6YLa/Ba'),
(21, 'thoriq', '$2y$10$7AdO900ed4RnhTWpDxngR.zRt6EdnqfumqPqRXiZfl/9sIgaBePDy'),
(22, 'asep', '$2y$10$rNzza8tRVrP7rETcNRAbGeIRnq1pNMQQL5gZz.yiXkDN8NiAVePky'),
(23, 'putri', '$2y$10$9SK0Kpui6RDa1fY48m//1eZnpgJlQMSekNUo3ZyE3QWo0Ux.PaUMC'),
(24, 'salman', '$2y$10$2uMI7bn2.Tp7x2pM4lUZ1.6SIW.k7Mn1VJ4e4DhQKOlSXkZ9MIeXO'),
(25, 'dimas', '$2y$10$Z5FLBh7CXiXPT486GuUIWO4Qp5d9iPfXKBQnwZLKOVUT.fD/vUbBS'),
(26, 'ikhsan', '$2y$10$qN.6wQXPxxBsyTHSbMaLiecZFhSKZqbxJ1lk9pOxzPCb1hQLgidHi'),
(27, 'leonardo', '$2y$10$P5uFZIlUUYrC4YPlpLmeIuQ39XcfDCAAhCOX4RSBG23vgjJWgozUW'),
(28, 'rafi', '$2y$10$sm4AyFdyPhB24VHZCVkdeelMMwQBiLqkxtdQTlKw1zVrFgOfgRRCu'),
(29, 'devindra', '$2y$10$CVky.6zxSt/w5p0SX0oMnOW70y/tAO5QrEMsyM.EmjY58eOMGV5Du'),
(30, 'opang', '$2y$10$SbGGOeBPVaZGKX1R30a69egY1lByNRpEESOVAKs2m0tGD.Qd1pWuy'),
(31, 'bara', '$2y$10$YxEyDIWkFllZkjJ/x1sXq..h02X7Hmlp/ogJWjxLff9io2pI6YyoK'),
(32, 'fauzan', '$2y$10$4eVUSycWjvzEIsX3DY35ZOaEv9u98bSX2ooBFZaYvwfG3q86KqyXi'),
(33, 'rasyid', '$2y$10$C8WKnaZNXAwV2gjUlz5Ym.n6BulGNGwUs3Ko0tOSLxruP8akJS582'),
(34, 'dena', '$2y$10$94YuB2CpFFTBNqQKOYpaMOcaOmYAlcLCHgGKem3XTUyztqlyS.FjO'),
(35, 'aulia', '$2y$10$fGK2QZbB4h9RQp/vynKX5.XezEODliB1jFBJgsDQSj/jnyHAlY0/u'),
(36, 'bintang', '$2y$10$cxFV1g1SeAjKGfYn/IW8a.f26lARYdabI947STzoeE1Ooq71t97GS'),
(37, 'yusuf', '$2y$10$ewkA7LpJk7dRQ6S41pzsp.9f4m8svSNOaXoqITwolQSfsGHJTiHpq'),
(38, 'irfan', '$2y$10$ja5EVCZ6A59Ga67AVBz9POeYInylpIIw4LiighgNBUw5Ekvyz8sWO'),
(39, 'indah', '$2y$10$Ue..fmq3DZan1y6.FDS9He5g4h9JYe0mZ4/NsFBKId.Ooshpu37CO'),
(40, 'nuning', '$2y$10$HdPGyRaJqJMRjXkkcUUNWel0KkZasZAeyykNbl.io54tKP.tUQVk.'),
(41, 'dewi', '$2y$10$Fjf/ID73jEssUGa12VCjHORiUrYG18tYVj2M5tsBGd8N.s4VgD.Su'),
(42, 'taufiq', '$2y$10$TpAdU5vtbm5WiPn3RusOPuURZMuA9VGSHyirdd4CiZPPtGL.JHMg.'),
(43, 'akim', '$2y$10$pWqVy5bnKSiFCNA0NiRuBehuGRaiHA2Hji1hxYRoZgT60g30bEE6i'),
(44, 'restu', '$2y$10$p4hX0X.u0vUm0ftmWP93f.Cvt1hFD3XwUfiawyaEUijrujF9jnM6m'),
(45, 'loki', '$2y$10$3o6KftPfvgEvGcg1KJGf3uR9Z2qSnJSXg4KCA7LbO7PTjb7sXGIX2'),
(46, 'cantika', '$2y$10$vaHakCq3qBnjGepdJltE/.xiPV.yXjcsRlOm4WNRrn85TwXu2vvPu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
