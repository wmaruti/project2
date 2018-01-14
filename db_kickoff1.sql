-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jan 2018 pada 12.04
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kickoff1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbarang` int(11) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `nama_barang`, `stock`, `harga_beli`, `harga_jual`) VALUES
(231113002, 'kaos kaki', 30, 20000, 40000),
(931113009, 'kaos kaki 1', 30, 23000, 50000),
(1631112916, 'jersey', 30, 70000, 100000),
(2147483647, 'sepatu', 30, 120000, 195000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_aset`
--

CREATE TABLE IF NOT EXISTS `barang_aset` (
  `kode_aset` int(11) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `stock` varchar(45) NOT NULL,
  `harga` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_aset`
--

INSERT INTO `barang_aset` (`kode_aset`, `nama_barang`, `stock`, `harga`) VALUES
(2147483647, 'sapu', '30', '8000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli_barang`
--

CREATE TABLE IF NOT EXISTS `beli_barang` (
  `idbelibarang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `iddivisi` int(11) NOT NULL,
  `nama_divisi` varchar(15) NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `idjadwal` int(11) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `jam_Sewa` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`idjadwal`, `jam`, `jam_Sewa`, `harga`) VALUES
(1, '08.00', '08.00 - 09.00', 80000),
(2, '09.00', '09.00 - 10.00', 80000),
(3, '10.00', '10.00 - 11.00', 80000),
(4, '11.00', '11.00 - 12.00', 80000),
(5, '12.00', '12.00 - 13.00', 80000),
(6, '13.00', '13.00 - 14.00', 80000),
(7, '14.00', '14.00 - 15.00', 80000),
(8, '15.00', '15.00 - 16.00', 80000),
(9, '16.00', '16.00 - 17.00', 80000),
(10, '17.00', '17.00 - 18.00', 80000),
(11, '18.00', '18.00 - 19.00', 100000),
(12, '19.00', '19.00 - 20.00', 100000),
(13, '20.00', '20.00 - 21.00', 100000),
(14, '21.00', '21.00 - 22.00', 100000),
(15, '22.00', '22.00 - 23.00', 100000),
(16, '23.00', '23.00 - 00.00', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `idpegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(45) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `divisi_iddivisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `idpelanggan` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `club` varchar(30) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `club`, `alamat`, `no_telpon`, `user_id`) VALUES
(0, 'wahyu maruti adjie', 'MANCHESTER UNITED', 'LONDON', '081364727552', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakaian_aset`
--

CREATE TABLE IF NOT EXISTS `pemakaian_aset` (
  `kode` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `qty_pemakaian` int(10) NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `kode_aset` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `idpembayaran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(200) DEFAULT NULL,
  `idpemesanan` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`idpembayaran`, `tanggal`, `total_harga`, `bayar`, `bukti_pembayaran`, `idpemesanan`) VALUES
(0, '2018-01-13', 90000, 90000, '', 2147483647),
(1831042935, '2018-01-13', 72000, 72000, '', 1831043008),
(1831113559, '2018-01-02', 72000, 72000, 'BuktiPembayaran1831113559.jpg', 1831113624);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `idpemesanan` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `lama_sewa` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `idstatus` int(15) NOT NULL,
  `idjadwal` int(15) NOT NULL,
  `idpelanggan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`idpemesanan`, `tanggal`, `lama_sewa`, `total`, `idstatus`, `idjadwal`, `idpelanggan`) VALUES
(1, '2018-01-13', 1, 80000, 2, 1, 0),
(31114639, '2018-01-12', 1, 80000, 2, 2, 0),
(31114702, '2018-01-12', 1, 80000, 1, 2, 0),
(31114812, '2018-01-12', 1, 80000, 1, 2, 0),
(1831043008, '2018-01-16', 1, 72000, 1, 2, 0),
(1831090601, '2018-01-14', 1, 72000, 1, 3, 0),
(1831090841, '2018-01-15', 1, 72000, 1, 1, 0),
(1831100140, '2018-01-15', 1, 90000, 1, 3, 0),
(1831100227, '2018-01-15', 1, 90000, 1, 15, 0),
(1831100259, '2018-01-20', 1, 72000, 1, 1, 0),
(1831100402, '2018-01-13', 1, 72000, 1, 3, 0),
(1831100453, '2018-01-13', 1, 90000, 1, 14, 0),
(1831100936, '2018-01-13', 1, 72000, 1, 2, 0),
(1831113418, '2018-01-22', 1, 72000, 1, 4, 0),
(1831113624, '2018-01-19', 1, 72000, 1, 4, 0),
(2147483647, '2018-01-13', 1, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
  `idpengajuan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `spesifikasi` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
  `idpengeluaran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `idstatus` int(15) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`idstatus`, `status`) VALUES
(1, 'Belum Bayar'),
(2, 'Sudah Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_barang`
--

CREATE TABLE IF NOT EXISTS `transaksi_barang` (
  `idtransaksi_barang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(15) NOT NULL,
  `bayar` int(15) NOT NULL,
  `idbarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(225) NOT NULL,
  `password_reset_token` varchar(225) DEFAULT NULL,
  `email` varchar(225) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `role`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'adjie', NULL, 'znHSnAtyDhnu_9Q1rvvKQLai8lGalUWR', '$2y$13$kCbgMFZG8lnZtyynEoYNXeC61ScBHmnnBnJlr7iMdgjXUO60t4icS', NULL, 'wahyumarutiadjie09@gmail.com', 10, 1515782814, 1515782814),
(2, 'admin', 1, 'qY3IRZehksF-5RDxCjvyoP8-KICAs-U5', '$2y$13$m.67l0qQtKHeLTa0EOtG5OPdC0mm.J24tSI2685Kljb4d1wV0bLx6', NULL, 'admin@gmail.com', 10, 1515830313, 1515830313),
(3, 'arit', NULL, 'W6q_LNbbdXIqk3j3eiOGKEb7CTnyKjWX', '$2y$13$YiOqSC8pEzncPHd7QwLIUOVk20ISeemvg6pa0I1AFogIDK3WqztUG', NULL, 'arit@gmail.com', 10, 1515837976, 1515837976),
(4, 'rendi', NULL, 'xuiVzjGY19pC8zYiiDYqsaj1SZF1Ed-U', '$2y$13$qMCuaFX52u/Q9jwBdgGhnekq2EZ0qfW70lwSerY3IrxRHrpAWFzMq', NULL, 'rendi@gmail.com', 10, 1515917647, 1515917647),
(5, 'qwerty', NULL, 'euQcHnJCstRkMRisDvfSX2zf6Oe_VuzR', '$2y$13$DSFI2.Ku7qv7aRXvkkFicufsY6FO6HnOneBp4zhYd7HFZxG9SFXLu', NULL, 'qwe@com.com', 10, 1515918024, 1515918024),
(6, 'asd', NULL, 'G3FqH7jj4LQ4-Oi6hhVbNfzRUmEAUnGA', '$2y$13$uvQUOVwUCw2wMjfyyS/j/ev8Zj8IGf1wG02MuSEDNL/.QaijywJty', NULL, 'adsa@gmail.com', 10, 1515918124, 1515918124),
(7, 'ASDA', NULL, 'NAvpWFjtOn52tA6OqFmej9GbGjVhqblc', '$2y$13$puJZ4w3nQzB4JduQiS2qKu1PeR/QgWKBg9zFH0dXWhwDdkuxJuqPu', NULL, 'sda@gmail.com', 10, 1515919005, 1515919005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `barang_aset`
--
ALTER TABLE `barang_aset`
  ADD PRIMARY KEY (`kode_aset`);

--
-- Indexes for table `beli_barang`
--
ALTER TABLE `beli_barang`
  ADD PRIMARY KEY (`idbelibarang`),
  ADD KEY `fk_sewa_barang_barang1_idx` (`idbarang`),
  ADD KEY `fk_sewa_barang_pelanggan1_idx` (`idpelanggan`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`iddivisi`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idjadwal`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpegawai`),
  ADD KEY `fk_pegawai_divisi1_idx` (`divisi_iddivisi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`),
  ADD KEY `fk_pelanggan_user1_idx` (`user_id`);

--
-- Indexes for table `pemakaian_aset`
--
ALTER TABLE `pemakaian_aset`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `fk_pemakaian_aset_barang_aset1_idx` (`kode_aset`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpembayaran`),
  ADD KEY `fk_pembayaran_pemesanan1_idx` (`idpemesanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idpemesanan`),
  ADD KEY `fk_pemesanan_status1_idx` (`idstatus`),
  ADD KEY `fk_pemesanan_jadwal1_idx` (`idjadwal`),
  ADD KEY `fk_pemesanan_pelanggan1_idx` (`idpelanggan`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idpengajuan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`idpengeluaran`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD PRIMARY KEY (`idtransaksi_barang`),
  ADD KEY `fk_transaksi_barang_beli_barang1_idx` (`idbarang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `idpengeluaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `beli_barang`
--
ALTER TABLE `beli_barang`
  ADD CONSTRAINT `fk_sewa_barang_barang1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sewa_barang_pelanggan1` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_pegawai_divisi1` FOREIGN KEY (`divisi_iddivisi`) REFERENCES `divisi` (`iddivisi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `fk_pelanggan_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pemakaian_aset`
--
ALTER TABLE `pemakaian_aset`
  ADD CONSTRAINT `fk_pemakaian_aset_barang_aset1` FOREIGN KEY (`kode_aset`) REFERENCES `barang_aset` (`kode_aset`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_pemesanan1` FOREIGN KEY (`idpemesanan`) REFERENCES `pemesanan` (`idpemesanan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_pemesanan_jadwal1` FOREIGN KEY (`idjadwal`) REFERENCES `jadwal` (`idjadwal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pemesanan_pelanggan1` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pemesanan_status1` FOREIGN KEY (`idstatus`) REFERENCES `status` (`idstatus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD CONSTRAINT `fk_transaksi_barang_beli_barang1` FOREIGN KEY (`idbarang`) REFERENCES `beli_barang` (`idbelibarang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
