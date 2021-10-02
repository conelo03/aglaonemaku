-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 06:27 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aglaonemaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(4, 'irshad', 'cuy', 'cuy', ''),
(12, 'ucup', 'ucup@gmail.com', 'ucup', '');

-- --------------------------------------------------------

--
-- Table structure for table `aglaonema`
--

CREATE TABLE `aglaonema` (
  `id_agl` int(5) NOT NULL,
  `nama_agl` varchar(100) NOT NULL,
  `desc_agl` text NOT NULL,
  `gambar_agl` text NOT NULL,
  `jumlah_fav` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aglaonema`
--

INSERT INTO `aglaonema` (`id_agl`, `nama_agl`, `desc_agl`, `gambar_agl`, `jumlah_fav`) VALUES
(2, 'Aglaonema Red Peacock / Widuri', 'Aglonema widuri memiliki bagian tulang daun utama yang nampak merah menyala. Helaian daunnya terdapat spot hijau yang lebar dan didominasi dengan warna pink. Selain itu, bentuk daunnya pun oval sedangkan permukaannya agak cekung. Tunas dari aglonema widuri ini sangat banyak sehingga mudah sekali untuk dikembangkan.', '11.png', 1),
(3, 'Aglaonema Cinta', 'Aglaonema Cinta memiliki warna daun yang ditandai dengan kombinasi warna hijau, kuning, oren, dan pink yang serba ornamental. Tanaman aglonema cinta ini pun identik dengan ungkapan kasih sayang atau tanda cinta kasih. Aglaonema sangat tahan terhadap suhu ruangan', '2.png', 1),
(4, 'Aglaonema Suksom', 'Aglaonema suksom memiliki ciri khas warna merah pada daunnya yang begitu menyala dan polos dengan minim klorofil. Jenis suksom termasuk kedalam tanaman yang dibandrol dengan harga mahal. ', '31.png', 0),
(5, 'Aglaonema Claudia', 'Aglaonema claudia memiliki ciri khas yang ditandai dengan permukaan daun yang berwarna hijau pucat atau hijau kekuning-kuningan. Struktur daunnya rapi dan tersebar rata, komposisi letaknya juga sangat teratur.', '4.png', 0),
(6, 'Aglaonema Pride Of Sumatera', 'Aglaonema pride of Sumatera memiliki ciri khas yang kokoh dan secara keseluruhan daunnya kompak. Bentuk daunnya elips memanjang, tangkai daunnya berwarna pink. Bercak daunnya berwarna hijau gelap, merah, dan pink dengan tulang daunnya merah menyala.', '5.png', 0),
(7, 'Aglaonema Moonlight', 'Aglaonema moonlight memiliki tampilan yang sangat ideal dengan bentuk daun yang membulat serta cekung layaknya sebuah mangkuk. Coraknya tegas dengan tulang daun berwarna merah yang melengkapi keindahan dari jenis aglonema ini. Aglaonema ini termasuk jenis aglonema terbaik nusantara.', '6.png', 0),
(8, 'Aglaonema Red Kochin', 'Aglaonema red kkochin mempunyai warna merah dengan sentuhan hijau di tepi daunnya. Tangkai panjang sehingga tampak menjuntai dengan cantik.', '7.png', 0),
(9, 'Aglaonema Red Ruby', 'Aglaonema red ruby memiliki ciri khas daun berwarna merah ruby dan sedikit hijau. Tanaman yang berumur panjang ini akan terus mempertahankan kesegaran daunnya selama bertahun-tahun.', '8.png', 0),
(10, 'Aglaonema Bidadari', 'Aglaonema bidadari memiliki daun dengan kombinasi warna kuning, jingga, pink, dan hijau membuatnya nampak berbeda. Daunnya yang cantik layaknya bidadari. Tangkai penopang berwarna merah muda dan pada ujungnya tumbuh bercak-bercak hijau.', '9.png', 0),
(11, 'Aglaonema Lipstik (Siam Aurora)', 'Aglaonema red lipstic memiliki ciri khas tulang dan batang daun dari yang berwarna merah mampu mempertegas daunnya yang berwarna hijau mengkilap. Dijuluki “lipstik” karena pinggir daunnya berwarna merah layaknya lipstik.', '10.png', 0),
(12, 'Aglaonema Dud Anjamani', 'Aglaonema dud anjamani memiliki ciri khas yang terletak pada daunnya yang berbentuk agak bulat dan berwarna merah mengkilap dengan tulang daun hijau, menjadikannya indah dipandang.  Namanya memiliki arti permata dan membuat orang takjub saat melihatnya karena unik . Aglaonema tipe Dud Anjamani masih merupakan jenis aglaonema terfavorit saat ini.', '111.png', 0),
(13, 'Aglaonema Lady Valentine', 'Aglaonema Lady Valentine memiliki daun yang terlihat agak bergelombang dan berbentuk bulat telur. Ciri khasnya terletak pada daunnya yang berwarna pink merona disertai bintik-bintik pada tepi dan pusat daunnya.', '12.png', 0),
(14, 'Aglaonema Legacy', 'Aglaonema legacy memiiki daun yang berwarna hijau kekuningan, terdapat bercak hijau gelap yang tersebar merata di permukaan daunnya, dan berbentuk bulat namun meruncing pada ujung daunnya. Yang unik dari aglaonema ini adalah daunnya dibatasi oleh tulang daun berwarna merah lembut.', '13.png', 0),
(15, 'Aglaonema Snow White', 'Aglonema Snow White memiliki ciri khas daun yang berwarna putih dengan corak-corak hijau yang tersebar rata di permukaannya.', '14.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `desc_gejala` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `desc_gejala`) VALUES
('G1', 'Pertumbuhan tanaman terganggu', 'penyakit'),
('G2', 'Daun kisut/ mengkerut', 'penyakit'),
('G3', 'Terdapat jelaga/lapisan hitam pada permukaan daun', 'penyakit'),
('G4', 'Daun menguning', 'penyakit'),
('G5', 'Batang/daun melepuh', 'Penyakit'),
('G15', 'Ulat pada daun atau batang tanaman ', 'Penyakit'),
('G6', 'Batang/daun lunak seperti bubur ', 'Penyakit'),
('G7', 'Tanaman berbau tidak sedap', 'Penyakit'),
('G8', 'Batang/daun mengering', 'Penyakit'),
('G14', 'Daun rombeng/sobek/rusak', 'Penyakit'),
('G9', 'Batang/daun membusuk', 'Penyakit'),
('G10', 'Akar membusuk', 'Penyakit'),
('G11', 'Tanaman menjadi kurus dan kecil', 'Penyakit'),
('G12', 'Daun menjadi layu', 'Penyakit'),
('G13', 'Gigitan pada pinggir daun muda/setengah tua', 'Penyakit'),
('G16', 'Kutu putih pada batang/tangkai/bawah daun', 'Penyakit'),
('G17', 'Kutu hitam/coklat pada dalam daun/ lipatan batang', 'Penyakit'),
('G18', 'Kutu putih pada akar tanaman', 'Penyakit'),
('G19', 'Lintah berukuran kecil', 'Penyakit'),
('G20', 'Laba-laba kecil menempel pada batang dan daun', 'Penyakit'),
('G21', 'Telur laba-laba dilapisi sarang dibagian  bawah daun', 'Penyakit'),
('G22', 'Bintik-bintik putih/kuning pada daun', 'Penyakit'),
('G23', 'Ujung tunas gundul', 'Penyakit');

-- --------------------------------------------------------

--
-- Table structure for table `hama_penyakit`
--

CREATE TABLE `hama_penyakit` (
  `kode_hp` varchar(5) NOT NULL,
  `nama_hp` varchar(100) NOT NULL,
  `desc_hp` text NOT NULL,
  `solusi_hp` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hama_penyakit`
--

INSERT INTO `hama_penyakit` (`kode_hp`, `nama_hp`, `desc_hp`, `solusi_hp`) VALUES
('HP6', 'Root mealy bugs', 'Hama tanaman', 'Cara mengatasi serangan hama ini adalah dengan mengganri media tanam yang telah terserang kutu putih dengan media tanam baru yang steril. Cara lainnya adalah semprot tanaman dengan insektisida sistematik Confidor 200 SL dengan dosis 0,5-0,75 ml / liter. Atau memakai Supracide 25 WP dengan dosis 1-2 gram / liter. Frekuensi penyemprotan dapat dilakukan 2 minggu sekali.'),
('HP7', 'Tungau Laba-laba', 'Hama tanaman', 'Cara mengatasi serangan hama ini adalah dengan menyeka bagian yang terserang dengan lap basah hingga bersih. Daun yang sudah layu bisa diobati dengan minyak hortikultura dan sabun insektisida.'),
('HP4', 'Pythium', 'Penyakit akibat jamur Pythium', 'Cara mengatasinya penyakit ini adalah dengan membongkar tanaman dan membuang akar yang busuk. jika akar tanaman habis sama sekali, setelah direndam menggunakan obat jamur sismetik selama 2-3 menit, tanaman diangkat dan diangin-anginkan selama 1 jam. Selanjutnya tanaman yang tinggal batangnya tersebut diolesi obat perangsang akar (misal Roton F) secara merata, kemudian ditanam kembali menggunakan media tanam sekam bakar dan pot yang bersih dengan drainase yang memadai.'),
('HP5', 'Erwinia sp', 'Penyakit akibat bakteri Erwinia sp', 'Cara mengatasi penyakit ini adalah dengan memberikan obat Agrept 20 WP yang banyak beredar dipasaran untuk membasmi bakteri ini. Komposisi dari obat tersebut adalah streptomisin sulfat dan tetracyclin. Dosis dan tata cara penggunaannya dapat disesuaikan dengan anjuran yang tertera di label atau kemasan.'),
('HP1', 'Mealy bugs', 'Hama tanaman', 'Cara mengatasi serangan hama ini adalah dengan cara membersihkan bagian yang terserang mengunakan malathion atau akothion dengan dosis 1 cc per liter sampai bersih. Pembersihan menggunakan malathoin dan akothion ini dilakukan tiga hari sekali, jika jumlahnya banyak, kutu-kutu harus dibersihkan menggunakan lidi yang dibalut kapas dan dicelupkan ke dalam cairan malathion atau akothion yang sudah diencerkan. Membersihkannya dilakukan dengan cara menggosokkan ujung lidi yang dibalut kapas tersebut ke kumpulan kutu, kemudian mengangkatnya kembali dan mencelupkan ke dalam cairan obat agar kutu-kutu hilang.'),
('HP2', 'Kutu Sisik', 'Hama tanaman', 'Cara mengatasi serangan hama ini adalah dengan menggunakan  minyak hortikultura, sabun insektisida atau sabun cuci piring berbagai merek. Caranya adalah dengan mencampurkan air dengan sedikit larutan tersebut, aduk sampai berbuih, masukkan kain pada campuran air tersebut, lalu lap pada daun atau bagian aglaonema yang terkena kutu sisik. '),
('HP3', 'Thrips', 'Hama tanaman', 'Cara mengatasi serangan hama ini adalah dengan mengerik hama thrips dengan menggunakan kuku atau alat lain, seperti kapas (cotton bud) lalu usapkan ke permukaan tanaman yang terkena thrips sampai habis, lakukan perlahan agar daun tanaman tidak rusak / sobek. Kemudian cara lainnya adalah dengan menyemprot dengan Insektisida sistematik berbahan aktif imidakloprid, profenofos misal Confidor 200 SL atau agrimex  dengan dosis 0,75-1 ml / liter. Frekuensi penyemprotan dapat dilakukan 1 minggu sekali.'),
('HP8', 'Ulat', 'Hama tanaman', 'Cara mengatasi serangan hama ini adalah apabila serangan ulat masih dengan intensitas rendah/sedikit kita dapat mengambil ulat lalu mematikannya. Cara lainnya adalah semprotkan insektisida Decis 25 EC 0,5-1 m / liter dicampur dengan insektisida Atabron 1 ml / liter. Jika serangan tidak terlalu parah kita bisa hanya memakai satu jenis insektisida tanpa perlu dicampur. Kita juga dapat memakai insektisida Buldok 25 EC dengan dosis 0,5-2 ml / liter air bersih. Frekuensi penyemprotan dapat dilakukan 2 minggu sekali apabila kita menggunakan insektisida sistematik.'),
('a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(5) NOT NULL,
  `id_identifikasi` varchar(100) NOT NULL,
  `kode_hp` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_identifikasi`, `kode_hp`) VALUES
(191, 'periksa605341b0878c6', 'P3'),
(192, 'periksa60537cde8dbc2', 'P2'),
(193, 'periksa605381484619a', 'P2'),
(194, 'periksa60538188ccfc1', 'P3'),
(195, 'periksa6054152b3dfe6', 'P4'),
(196, 'periksa60541578ed705', 'P4'),
(197, 'periksa6054487004ad4', 'P3'),
(198, 'periksa607ff27fa96fe', 'P2'),
(199, 'periksa608019d0a65ea', 'P3'),
(200, 'periksa60801d3e0eafd', 'P1'),
(201, 'periksa608f8f3ddeaf0', 'P1'),
(202, 'periksa608f97f838e64', 'HP1'),
(203, 'identifikasi60f06709a7d16', 'HP5'),
(204, 'identifikasi60f069cfb044a', 'HP5'),
(205, 'identifikasi60f06a85cd2da', 'HP5'),
(206, 'identifikasi60f0f36f78612', 'HP5'),
(207, 'identifikasi60f103bcc31e6', 'HP1'),
(208, 'identifikasi60f1479b4b319', 'HP7'),
(209, 'identifikasi60f41e16d11bd', 'HP2'),
(210, 'identifikasi60f4512db8bb1', 'HP7'),
(211, 'identifikasi60f4550dc0bd3', 'HP1'),
(212, 'identifikasi60f537ae93b00', 'HP7'),
(213, 'identifikasi60f808e8984fa', 'HP7');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(5) NOT NULL,
  `id_identifikasi` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `usia` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_identifikasi`, `nama`, `usia`, `alamat`) VALUES
(7, 'identifikasi60f103bcc31e6', 'Hilal', '21', 'Jaka'),
(9, 'identifikasi60f41e16d11bd', 'Nayra', '12', 'SMA 53'),
(10, 'identifikasi60f44519c5223', 'Hilal', '21', 's'),
(15, 'identifikasi60f808e8984fa', 'Hilda Tasya Salsabila', '21', 'Komp. Jaka Kencana D. 17. Bekasi Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_ip` int(5) NOT NULL,
  `id_agl` int(5) NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_ip`, `id_agl`, `ip`) VALUES
(2, 2, '103.105.33.99'),
(3, 3, '180.252.127.98');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `kode_hp` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `kode_gejala`, `kode_hp`) VALUES
(155, 'G16', 'HP1'),
(154, 'G3', 'HP1'),
(153, 'G2', 'HP1'),
(152, 'G1', 'HP1'),
(156, 'G1', 'HP2'),
(157, 'G2', 'HP2'),
(158, 'G4', 'HP2'),
(159, 'G12', 'HP2'),
(160, 'G19', 'HP2'),
(161, 'G1', 'HP3'),
(162, 'G2', 'HP3'),
(163, 'G4', 'HP3'),
(164, 'G17', 'HP3'),
(165, 'G1', 'HP4'),
(166, 'G4', 'HP4'),
(167, 'G7', 'HP4'),
(168, 'G8', 'HP4'),
(169, 'G9', 'HP4'),
(170, 'G10', 'HP4'),
(171, 'G1', 'HP5'),
(172, 'G5', 'HP5'),
(173, 'G6', 'HP5'),
(174, 'G7', 'HP5'),
(175, 'G1', 'HP6'),
(176, 'G11', 'HP6'),
(177, 'G12', 'HP6'),
(178, 'G18', 'HP6'),
(179, 'G1', 'HP7'),
(180, 'G12', 'HP7'),
(181, 'G20', 'HP7'),
(182, 'G21', 'HP7'),
(183, 'G22', 'HP7'),
(184, 'G23', 'HP7'),
(185, 'G1', 'HP8'),
(186, 'G13', 'HP8'),
(187, 'G14', 'HP8'),
(188, 'G15', 'HP8');

-- --------------------------------------------------------

--
-- Table structure for table `rule_temp`
--

CREATE TABLE `rule_temp` (
  `id_rule` int(5) NOT NULL,
  `id_identifikasi` varchar(100) NOT NULL,
  `pilihan` varchar(100) NOT NULL,
  `kesimpulan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`username`);

--
-- Indexes for table `aglaonema`
--
ALTER TABLE `aglaonema`
  ADD PRIMARY KEY (`id_agl`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`),
  ADD UNIQUE KEY `nama` (`nama_gejala`);

--
-- Indexes for table `hama_penyakit`
--
ALTER TABLE `hama_penyakit`
  ADD PRIMARY KEY (`kode_hp`),
  ADD UNIQUE KEY `nama` (`nama_hp`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_ip`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`),
  ADD KEY `id_gejala` (`kode_gejala`),
  ADD KEY `id_penyakit` (`kode_hp`);

--
-- Indexes for table `rule_temp`
--
ALTER TABLE `rule_temp`
  ADD PRIMARY KEY (`id_rule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `aglaonema`
--
ALTER TABLE `aglaonema`
  MODIFY `id_agl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_ip` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id_relasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `rule_temp`
--
ALTER TABLE `rule_temp`
  MODIFY `id_rule` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
