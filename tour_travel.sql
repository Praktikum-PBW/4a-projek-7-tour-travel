CREATE TABLE `tb_customer` (
  `id_cust` varchar PRIMARY KEY AUTO_INCREMENT,
  `nama_cust` varchar(255 ),
  `alamat` text,
  `no_telp` varchar(255)
);

CREATE TABLE `tb_pesanan` (
  `no_pesanan` varchar PRIMARY KEY AUTO_INCREMENT,
  `id_cust` varchar,
  `tujuan_wisata` varchar(255),
  `jmlh_pesan` int,
  `tgl_berangkat` datetime,
  `jumlah_hari` int,
  `jam_berangkat` timestamp,
  `jam_tiba` datetime,
  `transportasi` varchar(255),
  `penginapan` varchar(255),
  `restoran` varchar(255)
);

CREATE TABLE `tb_transaksi` (
  `no_trans` varchar PRIMARY KEY,
  `no_pesanan` varchar,
  `tgl_trans` datetime,
  `sub_total` int,
  `biaya_admin` int,
  `total` int
);

ALTER TABLE `tb_pesanan` ADD FOREIGN KEY (`no_pesanan`) REFERENCES `tb_transaksi` (`no_pesanan`);

ALTER TABLE `tb_customer` ADD FOREIGN KEY (`id_cust`) REFERENCES `tb_pesanan` (`id_cust`);
