-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table dealer_db.account: ~2 rows (approximately)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
REPLACE INTO `account` (`id`, `username`, `nama_lengkap`, `password`, `no_telp`, `email`, `path_foto`, `access_menu`, `super_admin`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `last_login`, `status`) VALUES
	(6, 'inoy@sportix.com', 'inoy', 'fRYDm3nou2K3ILEblYs~ASe8c.N.3RRvgCHE~SC~FeM04Do0mBrryDOW15~vd2dlyIJqu02MhrdmXh3qfCK8yw--', '909090909', 'supri170845@gmail.com', 'assets/images/account/3e15e47695fe78a92a28313a79875c23.jpg', 'a:27:{i:0;a:3:{s:4:"menu";s:2:"23";s:4:"slug";s:14:"master-jabatan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:1;a:3:{s:4:"menu";s:2:"24";s:4:"slug";s:15:"master-karyawan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:2;a:3:{s:4:"menu";s:2:"26";s:4:"slug";s:15:"master-customer";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:3;a:3:{s:4:"menu";s:2:"27";s:4:"slug";s:12:"master-motor";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:4;a:3:{s:4:"menu";s:2:"28";s:4:"slug";s:16:"master-aksesoris";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:5;a:3:{s:4:"menu";s:2:"29";s:4:"slug";s:13:"master-gudang";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:6;a:3:{s:4:"menu";s:2:"30";s:4:"slug";s:14:"master-leasing";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:7;a:3:{s:4:"menu";s:2:"37";s:4:"slug";s:16:"master-biro-jasa";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:8;a:3:{s:4:"menu";s:2:"36";s:4:"slug";s:15:"user-management";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:9;a:3:{s:4:"menu";s:2:"60";s:4:"slug";s:5:"owner";s:5:"child";a:4:{s:3:"add";i:0;s:3:"upd";i:1;s:3:"del";i:0;s:3:"prt";i:0;}}i:10;a:3:{s:4:"menu";s:2:"32";s:4:"slug";s:9:"penjualan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:11;a:3:{s:4:"menu";s:2:"38";s:4:"slug";s:11:"kwitansi-dp";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:12;a:3:{s:4:"menu";s:2:"41";s:4:"slug";s:3:"pdi";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:13;a:3:{s:4:"menu";s:2:"42";s:4:"slug";s:4:"stnk";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:14;a:3:{s:4:"menu";s:2:"59";s:4:"slug";s:11:"terima-stnk";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:15;a:3:{s:4:"menu";s:2:"43";s:4:"slug";s:4:"void";s:5:"child";a:4:{s:3:"add";i:0;s:3:"upd";i:0;s:3:"del";i:0;s:3:"prt";i:0;}}i:16;a:3:{s:4:"menu";s:2:"44";s:4:"slug";s:11:"surat-jalan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:17;a:3:{s:4:"menu";s:2:"45";s:4:"slug";s:5:"stock";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:18;a:3:{s:4:"menu";s:2:"46";s:4:"slug";s:23:"import-penerimaan-motor";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:19;a:3:{s:4:"menu";s:2:"47";s:4:"slug";s:26:"input-penerimaan-aksesoris";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:20;a:3:{s:4:"menu";s:2:"48";s:4:"slug";s:12:"motor-keluar";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:21;a:3:{s:4:"menu";s:2:"49";s:4:"slug";s:11:"motor-masuk";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:22;a:3:{s:4:"menu";s:2:"50";s:4:"slug";s:22:"cetak-kwitansi-leasing";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:23;a:3:{s:4:"menu";s:2:"51";s:4:"slug";s:13:"rekap-tagihan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:24;a:3:{s:4:"menu";s:2:"52";s:4:"slug";s:16:"surat-pernyataan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:25;a:3:{s:4:"menu";s:2:"53";s:4:"slug";s:17:"pencairan-leasing";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:26;a:3:{s:4:"menu";s:2:"54";s:4:"slug";s:17:"laporan-penjualan";s:5:"child";a:4:{s:3:"add";i:0;s:3:"upd";i:0;s:3:"del";i:0;s:3:"prt";i:0;}}}', '2', NULL, 6, NULL, '0000-00-00 00:00:00', '2017-04-29 15:27:26', '0000-00-00 00:00:00', '2017-04-29 15:42:18', '1'),
	(7, 'sapta@gmail.com', 'Sapta', 'FPeGUTv9tqU2OK+ehIe1y8pL+LOh5ZmSomm7hY/ibO9N77b052+OaMFj/vNfzL298YcvFF/EAsBh8faI+QQvRA==', '879979797979', 'supri170845@gmail.com', '667fa1e720b199d98293f0eec4086ebe.jpg', 'a:27:{i:0;a:3:{s:4:"menu";s:2:"23";s:4:"slug";s:14:"master-jabatan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:1;a:3:{s:4:"menu";s:2:"24";s:4:"slug";s:15:"master-karyawan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:2;a:3:{s:4:"menu";s:2:"26";s:4:"slug";s:15:"master-customer";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:3;a:3:{s:4:"menu";s:2:"27";s:4:"slug";s:12:"master-motor";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:4;a:3:{s:4:"menu";s:2:"28";s:4:"slug";s:16:"master-aksesoris";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:5;a:3:{s:4:"menu";s:2:"29";s:4:"slug";s:13:"master-gudang";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:6;a:3:{s:4:"menu";s:2:"30";s:4:"slug";s:14:"master-leasing";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:7;a:3:{s:4:"menu";s:2:"37";s:4:"slug";s:16:"master-biro-jasa";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:8;a:3:{s:4:"menu";s:2:"32";s:4:"slug";s:9:"penjualan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:9;a:3:{s:4:"menu";s:2:"38";s:4:"slug";s:11:"kwitansi-dp";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:10;a:3:{s:4:"menu";s:2:"33";s:4:"slug";s:10:"pembayaran";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:11;a:3:{s:4:"menu";s:2:"41";s:4:"slug";s:3:"pdi";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:12;a:3:{s:4:"menu";s:2:"42";s:4:"slug";s:4:"stnk";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:13;a:3:{s:4:"menu";s:2:"59";s:4:"slug";s:11:"terima-stnk";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:14;a:3:{s:4:"menu";s:2:"43";s:4:"slug";s:4:"void";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:15;a:3:{s:4:"menu";s:2:"44";s:4:"slug";s:11:"surat-jalan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:16;a:3:{s:4:"menu";s:2:"34";s:4:"slug";s:12:"return-motor";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:17;a:3:{s:4:"menu";s:2:"45";s:4:"slug";s:5:"stock";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:18;a:3:{s:4:"menu";s:2:"46";s:4:"slug";s:23:"import-penerimaan-motor";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:19;a:3:{s:4:"menu";s:2:"47";s:4:"slug";s:26:"input-penerimaan-aksesoris";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:20;a:3:{s:4:"menu";s:2:"48";s:4:"slug";s:12:"motor-keluar";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:21;a:3:{s:4:"menu";s:2:"49";s:4:"slug";s:11:"motor-masuk";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:22;a:3:{s:4:"menu";s:2:"50";s:4:"slug";s:22:"cetak-kwitansi-leasing";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:23;a:3:{s:4:"menu";s:2:"51";s:4:"slug";s:13:"rekap-tagihan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:24;a:3:{s:4:"menu";s:2:"52";s:4:"slug";s:16:"surat-pernyataan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:25;a:3:{s:4:"menu";s:2:"53";s:4:"slug";s:17:"pencairan-leasing";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}i:26;a:3:{s:4:"menu";s:2:"54";s:4:"slug";s:17:"laporan-penjualan";s:5:"child";a:4:{s:3:"add";i:1;s:3:"upd";i:1;s:3:"del";i:1;s:3:"prt";i:1;}}}', '1', NULL, 6, NULL, '0000-00-00 00:00:00', '2017-03-12 01:16:44', '0000-00-00 00:00:00', '2017-03-12 01:13:19', '1');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Dumping data for table dealer_db.covernote_history: ~0 rows (approximately)
/*!40000 ALTER TABLE `covernote_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `covernote_history` ENABLE KEYS */;

-- Dumping data for table dealer_db.detail_motor_keluar: ~2 rows (approximately)
/*!40000 ALTER TABLE `detail_motor_keluar` DISABLE KEYS */;
REPLACE INTO `detail_motor_keluar` (`id_motor_keluar`, `id_detail_motor_keluar`, `no_mesin`) VALUES
	(1, 2, 'JBP1E1380986'),
	(2, 2, 'JBP1E1384326');
/*!40000 ALTER TABLE `detail_motor_keluar` ENABLE KEYS */;

-- Dumping data for table dealer_db.detail_motor_keluar_temp: ~0 rows (approximately)
/*!40000 ALTER TABLE `detail_motor_keluar_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_motor_keluar_temp` ENABLE KEYS */;

-- Dumping data for table dealer_db.global_data: ~9 rows (approximately)
/*!40000 ALTER TABLE `global_data` DISABLE KEYS */;
REPLACE INTO `global_data` (`id`, `group_data`, `value`, `global_data_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'aksesoris', 'aki', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'aksesoris', 'spion', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'aksesoris', 'helm', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'cpembelian', 'Cash', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'cpembelian', 'Kredit', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'aksesoris', 'toolkit', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'aksesoris', 'rumah_plat', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 'aksesoris', 'jacket', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'aksesoris', 'jas_hujan', '1', NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `global_data` ENABLE KEYS */;

-- Dumping data for table dealer_db.menus: ~36 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
REPLACE INTO `menus` (`id`, `parent`, `module`, `name`, `icon`, `slug`, `number`, `status`) VALUES
	(1, NULL, '-', 'Master', 'fa fa-home', 'javascript:void(0);', 1, '1'),
	(2, NULL, '-', 'Transaksi', 'fa fa-edit', 'javascript:void(0);', 2, '1'),
	(3, NULL, '-', 'Inventory', 'fa fa-tasks', 'javascript:void(0);', 3, '1'),
	(4, NULL, '-', 'Leasing', 'fa fa-users', 'javascript:void(0);', 4, '1'),
	(5, NULL, '-', 'Laporan', 'fa fa-envelope', 'javascript:void(0);', 5, '1'),
	(23, 1, 'md_jabatan', 'Master Jabatan', 'fa fa-circle', 'master-jabatan', 1, '1'),
	(24, 1, 'md_karyawan', 'Master Karyawan', 'fa fa-circle', 'master-karyawan', 2, '1'),
	(26, 1, 'md_customer', 'Master Customer', 'fa fa-circle', 'master-customer', 3, '1'),
	(27, 1, 'md_motor', 'Master Motor', 'fa fa-circle', 'master-motor', 4, '1'),
	(28, 1, 'md_aksesoris', 'Master Aksesoris', 'fa fa-circle', 'master-aksesoris', 5, '1'),
	(29, 1, 'md_gudang', 'Master Gudang', 'fa fa-circle', 'master-gudang', 6, '1'),
	(30, 1, 'md_leasing', 'Master Leasing', 'fa fa-circle', 'master-leasing', 7, '1'),
	(32, 2, 't_penjualan', 'Penjualan', 'fa fa-circle', 'penjualan', 1, '1'),
	(36, 1, 'account', 'Users Management', 'fa fa-circle', 'user-management', 9, '1'),
	(37, 1, 'md_birojasa', 'Master Birojasa', 'fa fa-circle', 'master-biro-jasa', 8, '1'),
	(38, 2, 't_kwitansi', 'Kwitansi DP', 'fa fa-circle', 'kwitansi-dp', 2, '1'),
	(41, 2, 't_pdi', 'PDI', 'fa fa-circle', 'pdi', 3, '1'),
	(42, 2, 't_stnk_bpkb', 'STNK & BPKB', 'fa fa-circle', 'stnk', 5, '1'),
	(43, 2, 't_void', 'Void', 'fa fa-circle', 'void', 7, '1'),
	(44, 2, 't_surat_jalan', 'Surat Jalan', 'fa fa-circle', 'surat-jalan', 4, '1'),
	(45, 3, 'stok', 'Stok', 'fa fa-circle', 'stock', 1, '1'),
	(46, 3, 'motor_terima', 'Penerimaan Motor', 'fa fa-circle', 'import-penerimaan-motor', 2, '1'),
	(47, 3, 'input_penerimaan', 'Penerimaan Aksesoris', 'fa fa-circle', 'input-penerimaan-aksesoris', 3, '1'),
	(48, 3, 'motor_keluar', 'Mutasi Motor', 'fa fa-circle', 'motor-keluar', 4, '1'),
	(50, 4, 'leasing/cetak_kwitansi_leasing', 'Cetak Kwitansi', 'fa fa-circle', 'cetak-kwitansi-leasing', 1, '1'),
	(51, 4, 'leasing/rekap_tagihan', 'Rekap Tagihan', 'fa fa-circle', 'rekap-tagihan', 2, '1'),
	(52, 4, 'leasing_covernote', 'Surat Pernyataan', 'fa fa-circle', 'surat-pernyataan', 3, '1'),
	(53, 4, 'pencairan_leasing', 'Pencairan Leasing', 'fa fa-circle', 'pencairan-leasing', 4, '1'),
	(54, 5, 'laporan', 'Rpt.Penjualan', 'fa fa-circle', 'laporan-penjualan', 1, '1'),
	(55, 5, 'laporan', 'Saldo', 'fa fa-circle', 'laporan-saldo', 2, '1'),
	(56, 5, 'laporan', 'Print Stok', 'fa fa-circle', 'print-stok', 3, '1'),
	(59, 2, 't_terima_stnk', 'TT STNK & BPKB', 'fa fa-circle', 'terima-stnk', 6, '1'),
	(60, 1, 'md_owner_info', 'Owner Setting', 'fa fa-circle', 'owner', 10, '1');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping data for table dealer_db.motor_keluar: ~2 rows (approximately)
/*!40000 ALTER TABLE `motor_keluar` DISABLE KEYS */;
REPLACE INTO `motor_keluar` (`id_motor_keluar`, `kode_motor_keluar`, `id_gudang_in`, `id_gudang_out`, `tgl_motor_keluar`, `kode_po_motor_keluar`, `kode_do_motor_keluar`, `pic_motor_keluar`, `keterangan_motor_keluar`, `status_motor_keluar`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'MKA-SJL/BK/2016/00001', 1, 2, '2016-11-30', '8768686xx', '989776564xx', 'inoyx', 'xxx', '3', 6, 6, 6, '2016-11-28 22:26:59', '2016-12-24 22:24:09', '2017-02-03 23:31:41'),
	(2, 'MKA-SJL/BK/2017/00001', 2, 1, '2017-02-04', 'PO1', 'DO1', 'Otong', 'untuk barang display', '1', 6, NULL, NULL, '2017-02-03 23:41:09', NULL, NULL);
/*!40000 ALTER TABLE `motor_keluar` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_aksesoris: ~16 rows (approximately)
/*!40000 ALTER TABLE `m_aksesoris` DISABLE KEYS */;
REPLACE INTO `m_aksesoris` (`id`, `kd_aksesoris`, `aksesoris`, `kategori`, `url_foto`, `m_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'AKS-20161029-0001', '12N5-3B', 1, 'assets/images/aksesoris/c88961606f15cbce3f8881794dbdd2cb.jpg', '1', 6, 6, 6, '2016-10-29 11:57:08', '2017-01-01 09:12:43', '2016-10-29 12:23:08'),
	(2, 'AKS-20161029-0002', 'GN4-2A-2', 1, 'assets/images/aksesoris/965a2344fe24ea698d11a40bb2e40b6c.png', '1', 6, 6, NULL, '2016-10-29 14:21:11', '2017-01-01 12:24:31', NULL),
	(3, 'AKS-20161224-0003', 'GN4A-4D', 1, 'assets/images/aksesoris/ca14aa7d139b33b011547228bbe50ca1.jpg', '1', 6, 6, NULL, '2016-12-24 07:26:33', '2017-01-01 09:13:02', NULL),
	(4, 'AKS-20161224-0004', 'GN4-2A', 1, 'assets/images/aksesoris/ecba2c73ca4c7a2d084d1c23afbca7cb.jpg', '1', 6, 6, NULL, '2016-12-24 07:26:40', '2017-01-01 09:13:14', NULL),
	(5, 'AKS-20161224-0005', 'RS SPION', 2, 'assets/images/aksesoris/1fad22e24e2d6333ce0528b93d6abd2a.jpg', '1', 6, 6, NULL, '2016-12-24 07:26:47', '2017-01-01 09:16:25', NULL),
	(6, 'AKS-20161224-0006', 'MPX Spion', 2, 'assets/images/aksesoris/457e7f556d1ff83e1536767009070e5d.jpg', '1', 6, 6, NULL, '2016-12-24 07:26:55', '2017-01-01 09:16:15', NULL),
	(7, 'AKS-20161224-0007', 'TRX-R Full Face', 3, 'assets/images/aksesoris/4511bdb796345ee41e510b4f0a59eef0.jpg', '1', 6, 6, NULL, '2016-12-24 07:27:01', '2017-01-01 09:18:58', NULL),
	(8, 'AKS-20161224-0008', 'TRX-R Half Face', 3, 'assets/images/aksesoris/090c5da0303fa6db8b02bc3246abf526.jpg', '1', 6, 6, NULL, '2016-12-24 07:27:06', '2017-01-01 09:19:18', NULL),
	(9, 'AKS-20161224-0009', 'Toolkit STD', 6, 'assets/images/aksesoris/3d0b050d48b201ee695147a0a971d769.jpg', '1', 6, 6, NULL, '2016-12-24 07:27:13', '2017-01-01 09:21:15', NULL),
	(10, 'AKS-20161224-0010', 'Toolkit ADV', 6, 'assets/images/aksesoris/ede6f0d03a436ddf8812832a6eca8f99.jpg', '1', 6, 6, NULL, '2016-12-24 07:27:20', '2017-01-01 09:21:41', NULL),
	(11, 'AKS-20161224-0011', 'House Plat STD', 7, 'assets/images/aksesoris/icon.png', '1', 6, 6, NULL, '2016-12-24 07:27:31', '2017-01-01 09:22:29', NULL),
	(12, '123', 'House Plat ADV', 7, 'assets/images/aksesoris/icon.png', '1', 6, 6, NULL, '2016-12-24 11:41:31', '2017-01-01 09:22:55', NULL),
	(13, 'AKS-20161224-0012', 'JKT-STD', 8, 'assets/images/aksesoris/8b63d0a164be59fa897935a17ad39a78.jpg', '1', 6, NULL, NULL, '2017-01-01 09:25:03', NULL, NULL),
	(14, 'AKS-20161224-0013', 'JKT-ADV', 8, 'assets/images/aksesoris/ec9e1a6cb4d1079b498773289424e8ac.jpg', '1', 6, NULL, NULL, '2017-01-01 09:25:35', NULL, NULL),
	(15, 'AKS-20161224-0014', 'JS-STD', 9, 'assets/images/aksesoris/7c1d0f9b807d6ca02b35440b6397fe4a.jpg', '1', 6, NULL, NULL, '2017-01-01 09:27:13', NULL, NULL),
	(16, 'AKS-20161224-0015', 'JS-ADV', 9, 'assets/images/aksesoris/999924d765c46ea8783d59292ffcd99b.jpg', '1', 6, NULL, NULL, '2017-01-01 09:27:44', NULL, NULL);
/*!40000 ALTER TABLE `m_aksesoris` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_biro_jasa: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_biro_jasa` DISABLE KEYS */;
REPLACE INTO `m_biro_jasa` (`id`, `nama_birojasa`, `telepon_birojasa`, `handphone_birojasa`, `alamat_birojasa`, `pic_birojasa`, `pic_kontak_birojasa`, `email_birojasa`, `status_birojasa`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
	(1, 'PT.BIRO SATU', '0214563125', '087549464644', 'Jl. Raden Inten 10', 'Oki', '08754546413', 'birosatu@gmail.com', 1, NULL, '2017-01-21 07:18:52', '2017-01-21 07:20:07', NULL, 6, 6),
	(2, 'PT.BIRO DUA', '0154513454', '08752421212', 'Jl. Kemayoran 10 Jakarta Selatan', 'Yano', '08786442245', 'birodua@gmail.com', 1, NULL, '2017-01-21 07:19:45', NULL, NULL, 6, NULL),
	(3, 'A Biro Jasa', '02187946464', '08756646464', 'Jl. Mangar Selatan Jakarta Pusat', 'Helmi', '08754546413', NULL, 1, '2017-01-21 07:08:51', NULL, NULL, 6, NULL, NULL);
/*!40000 ALTER TABLE `m_biro_jasa` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_customer: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_customer` DISABLE KEYS */;
REPLACE INTO `m_customer` (`id`, `no_ktp`, `nama_customer`, `tempat_lahir_customer`, `tanggal_lahir_customer`, `kelamin_customer`, `alamat_customer`, `telepon_customer`, `handphone_customer`, `rt`, `rw`, `wilayah`, `kelurahan`, `kecamatan`, `m_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(11, '1234', 'Inoy YthXX', 'Jakarta XXX', '2016-12-27', 'P', 'Jl. STM', '021-31212121', '0877889911369', '002', '005', 'Jakarta Utara', 'Tugu Selatan', 'Koja', '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(12, '3171032402860014', 'Fredy Halim', 'Pontianak', '1986-02-24', 'P', 'Cempaka Sari IIA/36', '0214204245', '081808881898', '010', '008', 'Jakarta Pusat', 'Harapan Mulya', 'Cempaka Putih', '1', NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `m_customer` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_gudang: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_gudang` DISABLE KEYS */;
REPLACE INTO `m_gudang` (`id`, `kd_gudang`, `gudang`, `alamat`, `telepon`, `pic`, `status_gudang`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'WRH-0001', 'Gudang 123 f', 'jl.laksamana jakarta timur no.45 Jakarta Timur  18992', '0218889989', 'Inoy Yth', '1', 1, 1, NULL, '2016-10-11 22:22:48', '2016-10-20 00:11:31', NULL),
	(2, 'WRH-0002', 'Gudang 123x', 'jl.laksamana jakarta timur no.45 Jakarta Timur  18992rr', '021888998933', 'tukul', '1', 1, 6, 1, '2016-10-11 22:29:52', '2016-11-27 06:16:13', '2016-10-11 22:31:54');
/*!40000 ALTER TABLE `m_gudang` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_jabatan: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_jabatan` DISABLE KEYS */;
REPLACE INTO `m_jabatan` (`id`, `jabatan`, `keterangan`, `status_jabatan`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(4, 'Super Administrator', 'Super Admin', '1', NULL, 1, 1, NULL, '2016-10-09 08:36:05', '2016-10-24 11:55:27'),
	(6, 'Administrator', 'admin biasa', '1', NULL, 1, 1, NULL, '2016-10-09 08:31:53', '2016-10-24 11:37:48'),
	(7, 'Sales Marketing', 'Sales Marketing yang bertugas datang ke leasing', '1', 1, 1, 1, '2016-10-09 03:16:19', '2016-10-09 08:31:22', '2016-10-24 11:36:10');
/*!40000 ALTER TABLE `m_jabatan` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_karyawan: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_karyawan` DISABLE KEYS */;
REPLACE INTO `m_karyawan` (`id`, `kd_karyawan`, `karyawan`, `kd_jabatan_karyawan`, `tgl_masuk`, `tgl_keluar`, `foto`, `status_karyawan`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'EMP-0001', 'Inoy', '4', '2016-10-10', '2017-12-13', 'assets/images/karyawan/56a1db0151a39a719963cfa193d9b448.jpg', '1', NULL, 6, 1, NULL, '2016-10-28 23:35:27', '2016-10-11 08:01:28'),
	(2, 'EMP-0002', 'Karyawan 1', '4', '2016-10-11', '2016-11-03', 'assets/images/karyawan/4a7930fd0cfce40ee43741b4d0c0321f.jpg', '1', 1, 6, NULL, '2016-10-11 07:54:05', '2016-10-28 23:35:43', NULL),
	(7, 'EMP-0003', 'coba', '7', '2016-10-06', '2016-10-07', 'assets/images/karyawan/assets/images/karyawan/user_icon.png', '2', 6, 6, NULL, '2016-10-28 23:29:39', '2016-10-29 14:17:08', NULL),
	(8, 'EMP-0008', 'coba', '4', '2016-10-28', '2017-09-19', 'assets/images/karyawan/user_icon.png', '3', 6, 6, 6, '2016-10-28 23:36:07', '2016-10-28 23:36:16', '2017-03-31 07:56:28');
/*!40000 ALTER TABLE `m_karyawan` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_leasing: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_leasing` DISABLE KEYS */;
REPLACE INTO `m_leasing` (`id`, `kd_leasing`, `leasing`, `alamat`, `telepon`, `email`, `pic`, `hp`, `kalimat_kw_1`, `kalimat_kw_2`, `status_leasing`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'WO', 'WOW FINANCE', 'JL. Jagakarasa No.56 Jakarta Selatan', '021888998933', 'womfinance@gmail.com', 'Inoy', '087880008008', 'Kalimat KW 1', 'Kalimat KW 2', '1', 1, 1, NULL, '2016-10-12 07:08:43', '2016-10-26 02:04:00', NULL),
	(2, 'WOM', 'fsfd', 'dfsdf', '4333333333', 'supri170845@rocketmail.com', 'Sapta', '34343434909090', 'kdsdf', 'kjsldkf', '1', 1, NULL, NULL, '2016-10-26 02:00:28', NULL, NULL);
/*!40000 ALTER TABLE `m_leasing` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_motor: ~34 rows (approximately)
/*!40000 ALTER TABLE `m_motor` DISABLE KEYS */;
REPLACE INTO `m_motor` (`id`, `tipe_motor`, `nama_motor`, `varian`, `merk`, `harga_otr`, `nama_foto`, `url_foto`, `m_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'AFX12U08', 'SupraX 125 D', 'Manual', 'Honda', 15000000, 'assets/images/motor/7875eb7c85881c95c21b8995f0de1e9a.jpg', '/assets/images//assets/images/motor/7875eb7c85881c95c21b8995f0de1e9a.jpg', '1', NULL, 6, NULL, NULL, '2016-12-26 22:52:57', NULL),
	(3, 'AFX12U8A', 'Spacy', 'Automatic', 'Honda', 16000000, 'assets/images/motor/a390e0181be2d62aee6c3aef26f2575d.jpg', '/assets/images//assets/images/motor/a390e0181be2d62aee6c3aef26f2575d.jpg', '1', NULL, 6, NULL, NULL, '2016-12-26 22:53:32', NULL),
	(5, 'C1CN16M2', 'Supra X 125', 'Manual', 'Honda', 14500000, 'assets/images/motor/9a482b5e17d0940d026120082284d945.jpg', '/assets/images//assets/images/motor/9a482b5e17d0940d026120082284d945.jpg', '1', NULL, 6, NULL, NULL, '2016-12-26 22:55:08', NULL),
	(7, 'C1CN16MS', 'Vario 110', 'Automatic', 'Honda', 15600000, 'assets/images/motor/54a634dc98176830475eb278f29135c1.jpg', '/assets/images//assets/images/motor/54a634dc98176830475eb278f29135c1.jpg', '1', NULL, 6, NULL, NULL, '2016-12-26 22:55:49', NULL),
	(8, 'D1A2N8MA', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'EF02N12M', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(16, 'K1H2N4LM', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(22, 'NF12ACF3', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(24, 'NFT13C01', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(74, 'GL15BCF2', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(79, 'NC1D1CF2', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(80, 'X1B2N7L0', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(94, 'X1B2N4LA', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(102, 'YG2N15L1', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(117, 'GL15C21A', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(118, 'K1H2N4L0', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(121, 'NFT13C03', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(127, 'YG2N2LAA', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(128, 'T5E02RL0', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(138, 'YG2N2L1A', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(149, 'D1A2N18M', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(150, 'D1A2N19M', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(151, 'D1A2N9MA', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(158, 'YG02N2L1', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(164, 'EF02N11S', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(174, 'X1B2N4LO', 'SupraX 125 D', 'Bebek', 'Honda', 14000000, 'assets/images/motor/cf19ce1d4adbd1f03a206d077745183a.jpg', '/assets/images//assets/images/motor/cf19ce1d4adbd1f03a206d077745183a.jpg', '1', NULL, 6, NULL, NULL, '2016-12-24 22:21:17', NULL),
	(182, 'Y3B2R17L', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(263, 'H5C2R2MA', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(392, 'K1H2N14S', 'Vario 125', 'Matic', 'Honda', 13500000, 'assets/images/motor/icon.png', '/assets/images//assets/images/motor/icon.png', '1', NULL, 6, NULL, NULL, '2016-12-24 22:20:20', NULL),
	(606, 'H5C2R2M1', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(641, 'EF02N12S', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(790, 'H5C2R2MB', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(800, 'AFP12W08', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
	(893, 'NFT13C02', 'unknow-name', 'unknown-varian', 'unknown-merk', 0, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `m_motor` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_owner: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_owner` DISABLE KEYS */;
REPLACE INTO `m_owner` (`id`, `company_name`, `owner_name`, `owner_ktp`, `owner_telp`, `owner_handphone`, `owner_email`, `owner_address`, `owner_npwp`, `owner_jabatan`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'PT.Mandala Kekar Abadi', 'Sanjaya, SE', '1055031302660002', '021535353535', '08674521153', 'sanjaya.se@gmail.com', 'Jl. Raya Bekasi Timur No. 158, Cipinang - Jakarta Timur', '000000000', 'Direktur Utama', NULL, 6, NULL, NULL, '2017-02-05 10:28:23', NULL);
/*!40000 ALTER TABLE `m_owner` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_supplier: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_supplier` DISABLE KEYS */;
REPLACE INTO `m_supplier` (`id`, `kdsupplier`, `supplier`, `alamat`, `telp`, `pic`, `hp`, `m_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
	(1, 'spl001', 'Honda Sunter', 'Jl. Sunter Raya', '021-2134112', 'Sapta', '082123313010', 1, '2016-11-15 05:08:30', '2016-11-15 05:18:06', NULL, 6, 6, NULL),
	(2, 'spl002', 'Yamaha Kalibata', 'Jl. Kalibata Raya', '021-33167872', 'Supriyadi', '08312123122', 3, '2016-11-15 05:19:32', NULL, '2016-11-15 05:20:00', 6, NULL, 6);
/*!40000 ALTER TABLE `m_supplier` ENABLE KEYS */;

-- Dumping data for table dealer_db.m_supplier_old: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_supplier_old` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_supplier_old` ENABLE KEYS */;

-- Dumping data for table dealer_db.penerimaan_aksesoris: ~201 rows (approximately)
/*!40000 ALTER TABLE `penerimaan_aksesoris` DISABLE KEYS */;
REPLACE INTO `penerimaan_aksesoris` (`id`, `aksesoris_id`, `jumlah`, `tanggal_terima`, `status_add_or_min`, `keterangan`, `gudang_id`, `aksesoris_status`, `by_system`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(8, 1, 300, '2017-01-01 01:29:13', '1', 'barang baru terima', 1, '1', '1', 6, NULL, NULL, '2017-01-01 01:29:13', NULL, NULL),
	(9, 1, 100, '2017-01-01 01:29:30', '1', 'barang baru terima', 1, '1', '1', 6, NULL, NULL, '2017-01-01 01:29:30', NULL, NULL),
	(11, 2, 100, '2017-01-01 09:30:41', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 09:30:41', NULL, NULL),
	(12, 5, 200, '2017-01-01 21:19:31', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:19:31', NULL, NULL),
	(13, 6, 100, '2017-01-01 21:19:47', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:19:47', NULL, NULL),
	(14, 7, 100, '2017-01-01 21:29:25', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:29:25', NULL, NULL),
	(15, 8, 100, '2017-01-01 21:29:42', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:29:42', NULL, NULL),
	(16, 9, 100, '2017-01-01 21:29:53', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:29:53', NULL, NULL),
	(17, 10, 100, '2017-01-01 21:30:12', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:30:12', NULL, NULL),
	(18, 11, 100, '2017-01-01 21:30:33', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:30:33', NULL, NULL),
	(19, 12, 100, '2017-01-01 21:30:46', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:30:46', NULL, NULL),
	(20, 13, 100, '2017-01-01 21:31:01', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:31:01', NULL, NULL),
	(21, 14, 100, '2017-01-01 21:31:12', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:31:12', NULL, NULL),
	(22, 15, 100, '2017-01-01 21:31:27', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:31:27', NULL, NULL),
	(23, 16, 100, '2017-01-01 21:31:39', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:31:39', NULL, NULL),
	(24, 8, 100, '2017-01-01 21:45:23', '2', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:45:23', NULL, NULL),
	(26, 8, 100, '2017-01-01 21:46:51', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-01-01 21:46:51', NULL, NULL),
	(62, 1, 1, '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(63, 5, 1, '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(64, 9, 1, '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(65, 7, 1, '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(66, 11, 1, '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(67, 13, 1, '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(68, 15, 1, '2017-01-04 00:14:25', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(69, 1, 1, '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(70, 5, 1, '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(71, 9, 1, '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(72, 7, 1, '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(73, 11, 1, '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(74, 13, 1, '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(75, 15, 1, '2017-01-04 00:17:33', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(77, 5, 1, '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(78, 9, 1, '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(79, 7, 1, '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(80, 11, 1, '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(81, 13, 1, '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(82, 15, 1, '2017-01-04 00:17:33', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(84, 5, 1, '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(85, 9, 1, '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(86, 7, 1, '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(87, 11, 1, '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(88, 13, 1, '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(89, 15, 1, '2017-01-04 00:18:24', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(90, 2, 1, '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(91, 5, 1, '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(92, 9, 1, '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(93, 7, 1, '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(94, 11, 1, '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(95, 13, 1, '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(96, 15, 1, '2017-01-04 00:18:24', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(97, 2, 1, '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(98, 5, 1, '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(99, 9, 1, '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(100, 7, 1, '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(101, 11, 1, '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(102, 13, 1, '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(103, 15, 1, '2017-01-21 23:54:17', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(104, 2, 1, '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(105, 5, 1, '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(106, 9, 1, '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(107, 7, 1, '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(108, 11, 1, '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(109, 13, 1, '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(110, 15, 1, '2017-01-21 23:54:17', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(111, 2, 1, '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(112, 5, 1, '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(113, 9, 1, '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(114, 7, 1, '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(115, 11, 1, '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(116, 13, 1, '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(117, 15, 1, '2017-01-22 11:52:50', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(119, 5, 1, '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(120, 9, 1, '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(121, 7, 1, '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(122, 11, 1, '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(123, 13, 1, '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(124, 15, 1, '2017-01-22 11:52:50', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(126, 5, 1, '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(127, 9, 1, '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(128, 7, 1, '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(129, 11, 1, '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(130, 13, 1, '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(131, 15, 1, '2017-01-22 11:53:12', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(132, 1, 1, '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(134, 9, 1, '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(135, 7, 1, '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(136, 11, 1, '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(137, 13, 1, '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(138, 15, 1, '2017-01-22 11:53:12', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(139, 1, 1, '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(141, 9, 1, '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(142, 7, 1, '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(143, 11, 1, '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(144, 13, 1, '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(145, 15, 1, '2017-01-22 12:09:07', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(146, 1, 1, '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(147, 5, 1, '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(148, 9, 1, '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(149, 7, 1, '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(150, 11, 1, '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(151, 13, 1, '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(152, 15, 1, '2017-01-22 12:09:07', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(153, 1, 1, '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(154, 5, 1, '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(155, 9, 1, '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(156, 7, 1, '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(157, 11, 1, '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(158, 13, 1, '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(159, 15, 1, '2017-01-22 16:27:39', '1', 'Release By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(160, 1, 1, '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(161, 5, 1, '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(162, 9, 1, '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(163, 7, 1, '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(164, 11, 1, '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(165, 13, 1, '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(166, 15, 1, '2017-01-22 16:27:39', '2', 'Update By System For PDI-2017/I/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(167, 1, 1, '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(168, 5, 1, '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(169, 10, 1, '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(170, 7, 1, '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(171, 11, 1, '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(172, 14, 1, '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(173, 16, 1, '2017-02-02 01:01:12', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(174, 1, 1, '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(175, 5, 1, '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(176, 9, 1, '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(177, 7, 1, '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(178, 11, 1, '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(179, 13, 1, '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(180, 15, 1, '2017-02-07 15:23:55', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(181, 1, 1, '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(182, 6, 1, '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(183, 9, 1, '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(184, 7, 1, '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(185, 12, 1, '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(186, 13, 1, '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(187, 15, 1, '2017-02-08 00:34:20', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(188, 1, 1, '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(189, 5, 1, '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(190, 9, 1, '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(191, 7, 1, '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(192, 11, 1, '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(193, 13, 1, '2017-02-11 13:27:08', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(194, 15, 1, '2017-02-11 13:27:09', '2', 'Update By System For PDI-2017/II/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(195, 1, 1, '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(196, 6, 1, '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(197, 9, 1, '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(198, 7, 1, '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(199, 11, 1, '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(200, 13, 1, '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(201, 15, 1, '2017-02-11 14:32:29', '2', 'Update By System For PDI-2017/II/000002', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(202, 1, 1, '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(203, 5, 1, '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(204, 9, 1, '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(205, 8, 1, '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(207, 13, 1, '2017-02-17 23:18:35', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(209, 1, 1, '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(210, 5, 1, '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(211, 9, 1, '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(212, 8, 1, '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(214, 13, 1, '2017-02-18 14:40:43', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(216, 1, 1, '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(217, 5, 1, '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(218, 9, 1, '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(219, 8, 1, '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(221, 13, 1, '2017-02-18 14:40:44', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(223, 1, 1, '2017-02-18 14:45:23', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(224, 5, 1, '2017-02-18 14:45:23', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(225, 9, 1, '2017-02-18 14:45:23', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(226, 8, 1, '2017-02-18 14:45:24', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(228, 13, 1, '2017-02-18 14:45:24', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(230, 1, 1, '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(231, 5, 1, '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(232, 9, 1, '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(233, 8, 1, '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(235, 13, 1, '2017-02-18 14:45:24', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(237, 1, 1, '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(238, 5, 1, '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(239, 9, 1, '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(240, 8, 1, '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(242, 13, 1, '2017-02-18 14:47:45', '1', 'Release By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(244, 1, 1, '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(245, 5, 1, '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(246, 9, 1, '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(247, 8, 1, '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(249, 13, 1, '2017-02-18 14:47:45', '2', 'Update By System For PDI-2017/II/000003', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(251, 3, 8, '2017-03-04 09:51:23', '1', '-', 2, '1', '1', 6, NULL, NULL, '2017-03-04 09:51:23', NULL, NULL),
	(252, 1, 1, '2017-04-29 15:25:51', '2', 'Update By System For PDI-2017/IV/000004', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(253, 6, 1, '2017-04-29 15:25:51', '2', 'Update By System For PDI-2017/IV/000004', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(254, 10, 1, '2017-04-29 15:25:51', '2', 'Update By System For PDI-2017/IV/000004', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(255, 7, 1, '2017-04-29 15:25:51', '2', 'Update By System For PDI-2017/IV/000004', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(256, 11, 1, '2017-04-29 15:25:51', '2', 'Update By System For PDI-2017/IV/000004', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(257, 0, 1, '2017-04-29 15:25:51', '2', 'Update By System For PDI-2017/IV/000004', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(258, 0, 1, '2017-04-29 15:25:51', '2', 'Update By System For PDI-2017/IV/000004', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(259, 2, 1, '2017-04-29 15:44:01', '2', 'Update By System For PDI-2017/IV/000005', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(260, 5, 1, '2017-04-29 15:44:01', '2', 'Update By System For PDI-2017/IV/000005', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(261, 9, 1, '2017-04-29 15:44:01', '2', 'Update By System For PDI-2017/IV/000005', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(262, 8, 1, '2017-04-29 15:44:01', '2', 'Update By System For PDI-2017/IV/000005', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(263, 11, 1, '2017-04-29 15:44:01', '2', 'Update By System For PDI-2017/IV/000005', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(264, 0, 1, '2017-04-29 15:44:01', '2', 'Update By System For PDI-2017/IV/000005', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
	(265, 16, 1, '2017-04-29 15:44:01', '2', 'Update By System For PDI-2017/IV/000005', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `penerimaan_aksesoris` ENABLE KEYS */;

-- Dumping data for table dealer_db.penerimaan_motor: ~6 rows (approximately)
/*!40000 ALTER TABLE `penerimaan_motor` DISABLE KEYS */;
REPLACE INTO `penerimaan_motor` (`id`, `nopolisi`, `tgl_sj`, `no_sj`, `no_so`, `nomesin`, `norangka`, `tipe`, `warna`, `tahun`, `kdgudang`, `tglupload`, `namafile`, `m_status`, `status_jual`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'B9562UYY', '2016-03-01', 'SJ16030006', 'SO16023000', 'JBP1E1380984', 'JBP112GK383415', 'AFX12U08', 'MH', '2016', 1, '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', NULL, 6, 6, NULL, '2016-12-26 22:50:56', '2017-02-18 14:21:00', NULL),
	(2, 'B9562UYY', '2016-03-01', 'SJ16030006', 'SO16023000', 'JBP1E1380986', 'JBP113GK383410', 'AFX12U08', 'MH', '2016', 2, '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '4', 6, 6, NULL, '2016-12-26 22:50:56', '2017-02-18 17:37:53', NULL),
	(3, 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBP1E1384326', 'JBP110GK386121', 'AFX12U8A', 'BK', '2016', 2, '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', 6, 6, NULL, '2016-12-26 22:50:56', '2017-02-11 14:29:49', NULL),
	(4, 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JBP1E1384317', 'JBP11XGK386157', 'AFX12U8A', 'BK', '2016', 2, '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', 6, 6, NULL, '2016-12-26 22:50:56', '2017-02-11 14:28:07', NULL),
	(5, 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFW1E1362372', 'JFW111GK363347', 'C1CN16M2', 'MS', '2016', 2, '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', '2', 6, 6, NULL, '2016-12-26 22:50:56', '2017-04-29 15:21:29', NULL),
	(6, 'B9562UYY', '0000-00-00', 'SJ16030006', 'SO16023000', 'JFW1E1362327', 'JFW119GK362995', 'C1CN16M2', 'MS', '2016', 2, '2016-12-26 22:50:56', '20161226225028-excel_penerimaan_motor.xlsx', '1', NULL, 6, 6, NULL, '2016-12-26 22:50:56', '2017-04-29 15:41:45', NULL);
/*!40000 ALTER TABLE `penerimaan_motor` ENABLE KEYS */;

-- Dumping data for table dealer_db.penerimaan_motor_temp: ~0 rows (approximately)
/*!40000 ALTER TABLE `penerimaan_motor_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `penerimaan_motor_temp` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_harga_motor: ~7 rows (approximately)
/*!40000 ALTER TABLE `t_harga_motor` DISABLE KEYS */;
REPLACE INTO `t_harga_motor` (`id`, `noso`, `cara_pembelian`, `marketing`, `leasing`, `dp_system`, `diskon`, `tagih`, `dp`, `sisa_hutang`, `dp_lunas`, `fee`, `m_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
	(1, 'SO/MKA-2017/II/000001', 'Cash', 'Inoy', '', 15000000, 200000, 14800000, 5000000, 9800000, '1', 200000, 1, '2017-02-11 13:17:44', NULL, NULL, 6, NULL, NULL),
	(2, 'SO/MKA-2017/II/000002', 'Cash', 'Surti', '', 16000000, 1000000, 15000000, 5000000, 10000000, '2', 500000, 1, '2017-02-11 14:28:06', NULL, NULL, 6, NULL, NULL),
	(3, 'SO/MKA-2017/II/000003', 'Kredit', 'Sudirman', 'WO', 5000000, 500000, 4500000, 2750000, 1750000, '2', 750000, 1, '2017-02-11 14:29:49', NULL, NULL, 6, NULL, NULL),
	(4, 'SO/MKA-2017/II/000004', 'Kredit', 'Sudirman', 'WO', 5000000, 1000000, 4000000, 1000000, 3000000, '1', 300000, 1, '2017-02-18 14:21:00', NULL, NULL, 6, NULL, NULL),
	(5, 'SO/MKA-2017/II/000005', 'Cash', 'salim', '', 15000000, 1000000, 14000000, 5000000, 9000000, '1', 500000, 1, '2017-02-18 17:37:53', NULL, NULL, 6, NULL, NULL),
	(6, 'SO/MKA-2017/IV/000001', 'Cash', 'Herlina', '', 14500000, 500000, 14000000, 4000000, 10000000, '2', 200000, 1, '2017-04-29 15:21:29', '2017-04-29 15:29:45', NULL, 6, 6, NULL),
	(7, 'SO/MKA-2017/IV/000002', 'Kredit', 'Herlina', 'WO', 1500000, 555888, 944112, 444888, 499224, '1', 5555, 1, '2017-04-29 15:41:45', NULL, NULL, 6, NULL, NULL);
/*!40000 ALTER TABLE `t_harga_motor` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_kwitansi_diskon: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_kwitansi_diskon` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_kwitansi_diskon` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_kwitansi_fee: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_kwitansi_fee` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_kwitansi_fee` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_kwitansi_leasing: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_kwitansi_leasing` DISABLE KEYS */;
REPLACE INTO `t_kwitansi_leasing` (`id`, `nokwitansi`, `noso`, `dp_system`, `tagih`, `subsidi1`, `subsidi2`, `status_rekap`, `m_status`, `sys_create_user`, `sys_create_date`) VALUES
	(1, 'KWT/MKA/FIF/II/000001', 'SO/MKA-2017/II/000003', 5000000, 11000000, 100000, 0, 1, 1, '6', '2017-02-11 14:43:28'),
	(2, 'KWT/MKA/FIF/IV/000002', 'SO/MKA-2017/II/000004', 5000000, 10000000, 100000, 0, 1, 1, '6', '2017-04-04 00:11:03');
/*!40000 ALTER TABLE `t_kwitansi_leasing` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_pdi: ~5 rows (approximately)
/*!40000 ALTER TABLE `t_pdi` DISABLE KEYS */;
REPLACE INTO `t_pdi` (`id`, `kdpdi`, `noso`, `nosj`, `tgl_pdi`, `pic`, `gudang_id`, `sj_print_date`, `sj_print_status`, `sj_print_user_id`, `m_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
	(1, 'PDI-2017/II/000001', 'SO/MKA-2017/II/000001', 'SJ-2017/II/000001', '2017-02-11', 'inoy', 1, '2017-02-11', '2', 6, 1, '2017-02-11', NULL, NULL, 6, NULL, NULL),
	(2, 'PDI-2017/II/000002', 'SO/MKA-2017/II/000003', 'SJ-2017/II/000002', '2017-02-11', 'Bandu', 1, NULL, '1', NULL, 1, '2017-02-11', NULL, NULL, 6, NULL, NULL),
	(3, 'PDI-2017/II/000003', 'SO/MKA-2017/II/000002', 'SJ-2017/II/000003', '2017-02-18', 'inoy', 1, '2017-02-17', '2', 6, 1, '2017-02-17', '2017-02-18', NULL, 6, 6, NULL),
	(4, 'PDI-2017/IV/000004', 'SO/MKA-2017/IV/000001', 'SJ-2017/IV/000004', '2017-04-29', 'Deddy Naswandi', 1, '2017-04-29', '2', 6, 1, '2017-04-29', NULL, NULL, 6, NULL, NULL),
	(5, 'PDI-2017/IV/000005', 'SO/MKA-2017/IV/000002', 'SJ-2017/IV/000005', '2017-04-29', 'Deddy Akoi', 1, NULL, '1', NULL, 1, '2017-04-29', NULL, NULL, 6, NULL, NULL);
/*!40000 ALTER TABLE `t_pdi` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_pdi_detail: ~35 rows (approximately)
/*!40000 ALTER TABLE `t_pdi_detail` DISABLE KEYS */;
REPLACE INTO `t_pdi_detail` (`id`, `pdi_id`, `aksesoris_id`) VALUES
	(1, 1, 1),
	(2, 1, 5),
	(3, 1, 9),
	(4, 1, 7),
	(5, 1, 11),
	(6, 1, 13),
	(7, 1, 15),
	(8, 2, 1),
	(9, 2, 6),
	(10, 2, 9),
	(11, 2, 7),
	(12, 2, 11),
	(13, 2, 13),
	(14, 2, 15),
	(36, 3, 1),
	(37, 3, 5),
	(38, 3, 9),
	(39, 3, 8),
	(40, 3, 0),
	(41, 3, 13),
	(42, 3, 0),
	(43, 4, 1),
	(44, 4, 6),
	(45, 4, 10),
	(46, 4, 7),
	(47, 4, 11),
	(48, 4, 0),
	(49, 4, 0),
	(50, 5, 2),
	(51, 5, 5),
	(52, 5, 9),
	(53, 5, 8),
	(54, 5, 11),
	(55, 5, 0),
	(56, 5, 16);
/*!40000 ALTER TABLE `t_pdi_detail` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_pembayaran: ~13 rows (approximately)
/*!40000 ALTER TABLE `t_pembayaran` DISABLE KEYS */;
REPLACE INTO `t_pembayaran` (`id`, `nokwitansi`, `noso`, `transaksi`, `nominal`, `tgl_dp`, `m_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
	(1, 'KWT/KD/2017/II/000001', 'SO/MKA-2017/II/000001', 1, 5000000, '2017-02-10', 1, '2017-02-11 13:17:44', NULL, NULL, 6, NULL, NULL),
	(2, 'KWT/KD/2017/II/000002', 'SO/MKA-2017/II/000002', 1, 5000000, '2017-02-11', 1, '2017-02-11 14:28:06', NULL, NULL, 6, NULL, NULL),
	(3, 'KWT/KD/2017/II/000003', 'SO/MKA-2017/II/000003', 1, 2750000, '2017-02-11', 1, '2017-02-11 14:29:49', NULL, NULL, 6, NULL, NULL),
	(4, 'KWT/KD/2017/II/000004', 'SO/MKA-2017/II/000002', 2, 3000000, '2017-02-12', 1, '2017-02-11 14:30:59', NULL, NULL, 6, NULL, NULL),
	(5, 'KWT/KD/2017/II/000005', 'SO/MKA-2017/II/000003', 4, 2250000, '2017-02-12', 1, '2017-02-11 14:31:31', NULL, NULL, 6, NULL, NULL),
	(6, 'KWT/KD/2017/II/000006', 'SO/MKA-2017/II/000002', 4, 7000000, '2017-02-17', 1, '2017-02-17 23:17:42', NULL, NULL, 6, NULL, NULL),
	(7, 'KWT/KD/2017/II/000007', 'SO/MKA-2017/II/000004', 1, 1000000, '2017-02-18', 1, '2017-02-18 14:21:00', NULL, NULL, 6, NULL, NULL),
	(8, 'KWT/KD/2017/II/000008', 'SO/MKA-2017/II/000004', 2, 1000000, '2017-02-18', 1, '2017-02-18 17:21:29', NULL, NULL, 6, NULL, NULL),
	(9, 'KWT/KD/2017/II/000009', 'SO/MKA-2017/II/000004', 3, 1000000, '2017-02-24', 1, '2017-02-18 17:23:18', NULL, NULL, 6, NULL, NULL),
	(10, 'KWT/KD/2017/II/000010', 'SO/MKA-2017/II/000005', 1, 5000000, '2017-02-25', 1, '2017-02-18 17:37:53', NULL, NULL, 6, NULL, NULL),
	(11, 'KWT/KD/2017/IV/000003', 'SO/MKA-2017/IV/000001', 1, 4000000, '2017-04-29', 1, '2017-04-29 15:21:29', '2017-04-29 15:29:45', NULL, 6, 6, NULL),
	(12, 'KWT/KD/2017/IV/000004', 'SO/MKA-2017/IV/000001', 4, 10000000, '2017-04-30', 1, '2017-04-29 15:31:50', NULL, NULL, 6, NULL, NULL),
	(13, 'KWT/KD/2017/IV/000005', 'SO/MKA-2017/IV/000002', 1, 444888, '2017-05-01', 1, '2017-04-29 15:41:45', NULL, NULL, 6, NULL, NULL),
	(14, 'KWT/KD/2017/IV/000006', 'SO/MKA-2017/IV/000002', 2, 355112, '2017-04-30', 1, '2017-04-29 15:45:39', NULL, NULL, 6, NULL, NULL);
/*!40000 ALTER TABLE `t_pembayaran` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_pencairan_leasing: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_pencairan_leasing` DISABLE KEYS */;
REPLACE INTO `t_pencairan_leasing` (`id`, `no_tagihan`, `tgl_tagihan`, `cabang_leasing`, `tgl_pencairan`, `no_bukti_potongan`, `tot_tagihan`, `tot_pencairan`, `sisa_tagihan`, `sys_create_user`, `sys_create_date`, `sys_update_user`, `sys_update_date`, `m_status`) VALUES
	(1, 'TGH/MKA-REK/2017/000001', '2017-04-03 00:00:00', 'Cipinang', '2017-04-03 00:00:00', 'ABCD', 27050000, 13900000, 13150000, 6, '2017-04-04 08:58:08', 6, '2017-04-06 09:38:59', '1');
/*!40000 ALTER TABLE `t_pencairan_leasing` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_pencairan_leasing_detail: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_pencairan_leasing_detail` DISABLE KEYS */;
REPLACE INTO `t_pencairan_leasing_detail` (`id`, `no_tagihan`, `id_kwitansi`, `no_bukti_potongan`, `tgl_pencairan`, `sys_create_user`, `sys_create_date`, `sys_update_user`, `sys_update_date`, `m_status`) VALUES
	(5, 'TGH/MKA-REK/2017/000001', 1, '123AB', '2017-05-05', 6, '2017-04-09 01:55:38', 6, '2017-04-20 23:59:32', '1');
/*!40000 ALTER TABLE `t_pencairan_leasing_detail` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_penjualan: ~7 rows (approximately)
/*!40000 ALTER TABLE `t_penjualan` DISABLE KEYS */;
REPLACE INTO `t_penjualan` (`id`, `nosj`, `noso`, `nokonsumen`, `ktp`, `tanggal`, `nomsn`, `warna_motor`, `harga_otr`, `m_status`, `status_kwitansi`, `fee_print`, `fee_print_user`, `discount_print`, `discount_print_user`, `fee_print_date`, `discount_print_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(23, NULL, 'SO/MKA-2017/II/000001', NULL, '1234', '2017-02-10', 'JBP1E1380984', 'MH', 15000000, '4', 0, '1', NULL, '1', NULL, NULL, NULL, 6, NULL, NULL, '2017-02-11 13:17:44', NULL, NULL),
	(24, NULL, 'SO/MKA-2017/II/000002', NULL, '1234', '2017-02-11', 'JBP1E1384317', 'BK', 16000000, '1', 0, '1', NULL, '1', NULL, NULL, NULL, 6, NULL, NULL, '2017-02-11 14:28:06', NULL, NULL),
	(25, NULL, 'SO/MKA-2017/II/000003', NULL, '1234', '2017-02-11', 'JBP1E1384326', 'BK', 16000000, '1', 1, '1', NULL, '1', NULL, NULL, NULL, 6, NULL, NULL, '2017-02-11 14:29:48', NULL, NULL),
	(26, NULL, 'SO/MKA-2017/II/000004', NULL, '1234', '2017-02-18', 'JBP1E1380984', 'MH', 15000000, '1', 1, '2', 6, '2', 7, '2017-03-12 00:35:43', '2017-03-12', 6, NULL, NULL, '2017-02-18 14:21:00', NULL, NULL),
	(27, NULL, 'SO/MKA-2017/II/000005', NULL, '1234', '2017-02-25', 'JBP1E1380986', 'MH', 15000000, '1', 0, '2', 6, '1', NULL, '2017-03-12 00:37:39', NULL, 6, NULL, NULL, '2017-02-18 17:37:53', NULL, NULL),
	(28, NULL, 'SO/MKA-2017/IV/000001', NULL, '3171032402860014', '2017-04-29', 'JFW1E1362372', 'MS', 14500000, '1', 0, '1', NULL, '1', NULL, NULL, NULL, 6, 6, NULL, '2017-04-29 15:21:29', '2017-04-29 15:29:45', NULL),
	(29, NULL, 'SO/MKA-2017/IV/000002', NULL, '3171032402860014', '2017-05-01', 'JFW1E1362327', 'MS', 14500000, '1', 0, '1', NULL, '1', NULL, NULL, NULL, 6, NULL, NULL, '2017-04-29 15:41:45', NULL, NULL);
/*!40000 ALTER TABLE `t_penjualan` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_rekap_tagihan: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_rekap_tagihan` DISABLE KEYS */;
REPLACE INTO `t_rekap_tagihan` (`id`, `no_tagihan`, `tgl_tagihan`, `tot_tagihan`, `sisa_tagihan`, `kdleasing`, `cabang_leasing`, `sys_create_user`, `sys_create_date`, `sys_update_user`, `sys_update_date`, `m_status`, `status_rekap`, `status_pencairan`) VALUES
	(7, 'TGH/MKA-REK/2017/000001', '2017-04-03 00:00:00', 27050000, 0, 'WO', 'Cipinang', 6, '2017-04-04 02:22:19', 6, '2017-04-29 14:52:58', '1', 0, 0);
/*!40000 ALTER TABLE `t_rekap_tagihan` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_rekap_tagihan_detail: ~2 rows (approximately)
/*!40000 ALTER TABLE `t_rekap_tagihan_detail` DISABLE KEYS */;
REPLACE INTO `t_rekap_tagihan_detail` (`id`, `id_kwitansi`, `no_kwitansi`, `tgl_kwitansi`, `nomor_tagihan`, `sys_create_user`, `sys_create_date`, `sys_update_user`, `sys_update_date`, `m_status`, `status_rekap`, `status_pencairan`) VALUES
	(40, 2, NULL, NULL, 'TGH/MKA-REK/2017/000001', 6, '2017-04-29 14:52:45', NULL, NULL, '1', 0, 0),
	(41, 1, NULL, NULL, 'TGH/MKA-REK/2017/000001', 6, '2017-04-29 14:52:45', NULL, NULL, '1', 0, 0);
/*!40000 ALTER TABLE `t_rekap_tagihan_detail` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_stnk: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_stnk` DISABLE KEYS */;
REPLACE INTO `t_stnk` (`id`, `no_so`, `no_process`, `stnk_process_date`, `stnk_estimate_date`, `bpkb_process_date`, `bpkb_estimate_date`, `stnk_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
	(1, 'SO/MKA-2017/II/000002', 'SB-2017-02-000001', '2017-02-01', '2017-02-15', '2017-02-01', '2017-05-02', 1, '2017-02-17 23:42:11', '0000-00-00 00:00:00', NULL, 6, NULL, NULL),
	(2, 'SO/MKA-2017/IV/000001', 'SB-2017-04-000002', '2017-05-01', '2017-05-15', '2017-05-01', '2017-07-30', 1, '2017-04-29 15:33:30', '0000-00-00 00:00:00', NULL, 6, NULL, NULL);
/*!40000 ALTER TABLE `t_stnk` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_stnk_bpkb: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_stnk_bpkb` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_stnk_bpkb` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_stnk_customer: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_stnk_customer` DISABLE KEYS */;
REPLACE INTO `t_stnk_customer` (`id`, `t_stnk_id`, `t_stnk_ktp`, `t_stnk_nama`, `t_stnk_tempat_lahir`, `t_stnk_tgl_lahir`, `t_stnk_jenis_kelamin`, `t_stnk_alamat`, `t_stnk_rt`, `t_stnk_rw`, `t_stnk_wilayah`, `t_stnk_kelurahan`, `t_stnk_kecamatan`, `t_stnk_telepon`, `t_stnk_handphone`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
	(1, 1, '1234', 'Inoy YthXX', 'Jakarta XXX', '2016-12-27', 'P', 'Jl. STM', '002', '005', 'Jakarta Utara', 'Tugu Selatan', 'Koja', '021-31212121', '0877889911369', '2017-02-17', NULL, NULL, 6, NULL, NULL),
	(2, 2, '3171032402860014', 'Fredy Halim', 'Pontianak', '1986-02-24', 'P', 'Cempaka Sari IIA/36', '010', '008', 'Jakarta Pusat', 'Harapan Mulya', 'Cempaka Putih', '0214204245', '081808881898', '2017-04-29', NULL, NULL, 6, NULL, NULL);
/*!40000 ALTER TABLE `t_stnk_customer` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_terima_stnk: ~1 rows (approximately)
/*!40000 ALTER TABLE `t_terima_stnk` DISABLE KEYS */;
REPLACE INTO `t_terima_stnk` (`id`, `t_stnk_id`, `birojasa_id`, `t_terima_no_polisi`, `t_terima_no_stnk`, `t_terima_no_bpkb`, `t_terima_tgl_stnk`, `t_terima_tgl_bpkb`, `t_terima_no_bon_1`, `t_terima_no_bon_2`, `t_terima_add_biaya_1`, `t_terima_add_biaya_2`, `t_terima_add_biaya_1_description`, `t_terima_add_biaya_2_description`, `t_terima_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 1, 1, 'B2145DGD', '45454545455', '5454545454', '2017-03-04', '2017-03-04', '12', '13', 20000, 30000, '-', NULL, 1, 6, NULL, NULL, '2017-03-04 07:00:42', NULL, NULL),
	(2, 2, 1, 'B6688PRO', 'A161616', 'B9877', '2017-05-03', '2017-05-10', 'BJ001/007JAMESBOND', 'BJ002/007JAMESBOND', 1000000, 0, 'Pajak Progresif ', NULL, 1, 6, NULL, NULL, '2017-04-29 15:36:13', NULL, NULL);
/*!40000 ALTER TABLE `t_terima_stnk` ENABLE KEYS */;

-- Dumping data for table dealer_db.t_void: ~0 rows (approximately)
/*!40000 ALTER TABLE `t_void` DISABLE KEYS */;
REPLACE INTO `t_void` (`id`, `noso`, `void_user_id`, `void_description`, `void_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
	(1, 'SO/MKA-2017/II/000001', 6, 'barang cacat', '2017-02-11 13:50:48', 6, NULL, NULL, '2017-02-11 13:50:48', NULL, NULL);
/*!40000 ALTER TABLE `t_void` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
