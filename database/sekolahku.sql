-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2022 pada 19.36
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `isi`, `tanggal`, `foto`, `id_kategori`) VALUES
(18, 'Sambutan Kepala Sekolah', '<p>Sambutan Kepala Sekolah</p><p>Assalamu&#39;alaikum wr.wb.</p><p>Puji syukur kepada Alloh SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website SDI Wali Songo Trowulan&nbsp; ini dapat terbit. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat, sangat diperlukan berbagai sarana prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SDI Wali Songo Trowulan.</p><p>Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhati pendidikan secara khusus bagi SDI Wali Songo Trowulan</p><p>Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai SDI Wali Songo Trowulan yang lebih baik lagi.</p><p>Wassalamu&#39;alaikum wr.wb.</p><p>&nbsp;</p><p>Hormat kami,</p><p>Kepala SDI Wali Songo Trowulan</p><p>&nbsp;</p><p>ttd</p><p>&nbsp;</p><p>&nbsp;</p><p>NIP.</p>', '2022-04-02', '20220402-sambutan-kepala-sekolah.jpg', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id`, `nama`, `email`, `isi`) VALUES
(6, 'Rizal', 'rizalprambudi565@yahoo.co.id', 'Website ini sangat membantu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ekskul`
--

CREATE TABLE `tbl_ekskul` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(50) DEFAULT NULL,
  `pembina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ekskul`
--

INSERT INTO `tbl_ekskul` (`id`, `nama_ekskul`, `pembina`) VALUES
(5, 'Pramuka', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `color` varchar(7) DEFAULT NULL,
  `mulai` timestamp NULL DEFAULT NULL,
  `selesai` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(9) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_files`
--

INSERT INTO `tbl_files` (`id`, `filename`, `created`) VALUES
(18, '1652848939199_155. SK 300 - NURUL MUBIN - SD ISLAM WALI SONGO.pdf', '2022-07-02 08:43:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(22, 'galeri1648964492.jpeg', 'Kurvey', '2022-04-03 05:41:32', '2022-07-02 03:38:47'),
(23, 'galeri1657473266.jpg', 'Pembelajaran', '2022-07-10 17:14:26', NULL),
(24, 'galeri1657473793.jpg', 'PPDB', '2022-07-10 17:23:13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` int(10) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama`, `nip`, `jenis_kelamin`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `alamat`, `foto`) VALUES
(15, 'Rizal Prambudi', 1461900054, 'L', '0881980937', 'Sidoarjo', '2001-04-16', 'TIK', 'Mojokerto', 'rizal.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(30) DEFAULT NULL,
  `ka_prodi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `nama_jurusan`, `ka_prodi`) VALUES
(9, 'Kelas 1', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_artikel`
--

CREATE TABLE `tbl_kategori_artikel` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori_artikel`
--

INSERT INTO `tbl_kategori_artikel` (`id`, `nama_kategori`) VALUES
(3, 'Kegiatan Sekolah'),
(12, 'Prestasi'),
(14, 'Informasi Sekolah'),
(15, 'Berita'),
(17, 'Sambutan Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`, `foto`) VALUES
(3, 'Administrator', 'admin', '$2y$10$9uAKnax9/7HoMVtMFWDUEe6GhtWdq5SIn75AWwHnYboKctXCfybVG', 'administrator.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nis` int(4) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `tempat_lahir` varchar(80) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tentang_website`
--

CREATE TABLE `tbl_tentang_website` (
  `id` int(11) NOT NULL,
  `tentang_website` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tentang_website`
--

INSERT INTO `tbl_tentang_website` (`id`, `tentang_website`) VALUES
(1, '<p>Tentang Website SDI Wali Songo Trowulan&nbsp; dan pembaharuan Versinya.</p><p>Website&nbsp;SDI Wali Songo Trowulan&nbsp; sebagai media yang dikelola oleh sekolah dan berada di Wilayah Negara Kesatuan Republik Indonesia tentunya Taat dan Patuh sepenuhnya terhadap Hukum dan Perundang Undangan yang berlaku di wilayah Negara Kesatuan Republik Indonesia. Dan mentaati Undang Undang Nomor 19 Tahun 2016 tentang ITE seperti yang tercantum pada tautan berikut&nbsp;<a target=\"_blank\" href=\"https://www.smkn1wanareja.sch.id/wp-content/uploads/2018/04/UU-19-Tahun-2016-ite.pdf\">UU Nomor 19 Tahun 2016</a>.</p><p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `visi_misi`) VALUES
(1, '<p><strong>Visi SDI Wali Songo</strong></p><p>Membentuk generasi berbudi luhur yang cinta Al-Qur&#39;an, cerdas, dan berkarakter pemimpin masa depan</p><p><strong>Misi&nbsp;SDI Wali Songo</strong></p><ol><li>Memaksimalkan potensi baca, hafal, pemahaman dan pengalaman Al-Qur&#39;an</li><li>Mengembangkan potensi kecerdasan majemuk dengan menuju generasi berpotensi</li><li>Membentuk karakter kepribadian yang jujur, rendah hati, disiplin, mandiri, peduli, dan berani</li></ol>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembina` (`pembina`);

--
-- Indeks untuk tabel `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_jurusan_ibfk_1` (`ka_prodi`);

--
-- Indeks untuk tabel `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `tbl_tentang_website`
--
ALTER TABLE `tbl_tentang_website`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_tentang_website`
--
ALTER TABLE `tbl_tentang_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_artikel` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD CONSTRAINT `tbl_ekskul_ibfk_1` FOREIGN KEY (`pembina`) REFERENCES `tbl_guru` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD CONSTRAINT `tbl_jurusan_ibfk_1` FOREIGN KEY (`ka_prodi`) REFERENCES `tbl_guru` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tbl_jurusan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
