-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 10:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `path_foto` varchar(255) DEFAULT NULL,
  `access_menu` text,
  `super_admin` enum('1','2') DEFAULT '1' COMMENT '1 =>not super admin, 2 => is super admin',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime NOT NULL,
  `sys_update_date` datetime NOT NULL,
  `sys_delete_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `status` enum('1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `nama_lengkap`, `password`, `no_telp`, `email`, `path_foto`, `access_menu`, `super_admin`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `last_login`, `status`) VALUES
(6, 'admin@mandala.com', 'SUPER ADMINISTRATOR', 'Eb1eN68MrSMwrIxc1ck0fY9VlbRO21YO3e~2RAwl6wxysQcOnHLfNBAcCiCfjfmz4.O7mdcui4F4~3ME.eiZfw--', '909090909', 'supri170845@gmail.com', 'assets/images/account/3e15e47695fe78a92a28313a79875c23.jpg', 'a:26:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"36\";s:4:\"slug\";s:15:\"user-management\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"60\";s:4:\"slug\";s:5:\"owner\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:10;a:3:{s:4:\"menu\";s:2:\"38\";s:4:\"slug\";s:11:\"kwitansi-dp\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"41\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"44\";s:4:\"slug\";s:11:\"surat-jalan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:13;a:3:{s:4:\"menu\";s:2:\"42\";s:4:\"slug\";s:4:\"stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:14;a:3:{s:4:\"menu\";s:2:\"59\";s:4:\"slug\";s:11:\"terima-stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:15;a:3:{s:4:\"menu\";s:2:\"43\";s:4:\"slug\";s:4:\"void\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:16;a:3:{s:4:\"menu\";s:2:\"45\";s:4:\"slug\";s:5:\"stock\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:17;a:3:{s:4:\"menu\";s:2:\"46\";s:4:\"slug\";s:23:\"import-penerimaan-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:18;a:3:{s:4:\"menu\";s:2:\"47\";s:4:\"slug\";s:26:\"input-penerimaan-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:19;a:3:{s:4:\"menu\";s:2:\"48\";s:4:\"slug\";s:12:\"motor-keluar\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:20;a:3:{s:4:\"menu\";s:2:\"50\";s:4:\"slug\";s:22:\"cetak-kwitansi-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:21;a:3:{s:4:\"menu\";s:2:\"51\";s:4:\"slug\";s:13:\"rekap-tagihan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:22;a:3:{s:4:\"menu\";s:2:\"52\";s:4:\"slug\";s:16:\"surat-pernyataan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:23;a:3:{s:4:\"menu\";s:2:\"53\";s:4:\"slug\";s:17:\"pencairan-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:24;a:3:{s:4:\"menu\";s:2:\"54\";s:4:\"slug\";s:17:\"laporan-penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:25;a:3:{s:4:\"menu\";s:2:\"65\";s:4:\"slug\";s:15:\"backup-database\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}}', '2', NULL, 6, NULL, '0000-00-00 00:00:00', '2017-05-07 13:08:16', '0000-00-00 00:00:00', '2017-05-12 15:21:41', '1'),
(7, 'sapta@gmail.com', 'Sapta', 'FPeGUTv9tqU2OK+ehIe1y8pL+LOh5ZmSomm7hY/ibO9N77b052+OaMFj/vNfzL298YcvFF/EAsBh8faI+QQvRA==', '879979797979', 'supri170845@gmail.com', '667fa1e720b199d98293f0eec4086ebe.jpg', 'a:27:{i:0;a:3:{s:4:\"menu\";s:2:\"23\";s:4:\"slug\";s:14:\"master-jabatan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:1;a:3:{s:4:\"menu\";s:2:\"24\";s:4:\"slug\";s:15:\"master-karyawan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:2;a:3:{s:4:\"menu\";s:2:\"26\";s:4:\"slug\";s:15:\"master-customer\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:3;a:3:{s:4:\"menu\";s:2:\"27\";s:4:\"slug\";s:12:\"master-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:4;a:3:{s:4:\"menu\";s:2:\"28\";s:4:\"slug\";s:16:\"master-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:5;a:3:{s:4:\"menu\";s:2:\"29\";s:4:\"slug\";s:13:\"master-gudang\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:6;a:3:{s:4:\"menu\";s:2:\"30\";s:4:\"slug\";s:14:\"master-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:7;a:3:{s:4:\"menu\";s:2:\"37\";s:4:\"slug\";s:16:\"master-biro-jasa\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:8;a:3:{s:4:\"menu\";s:2:\"32\";s:4:\"slug\";s:9:\"penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:9;a:3:{s:4:\"menu\";s:2:\"38\";s:4:\"slug\";s:11:\"kwitansi-dp\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:10;a:3:{s:4:\"menu\";s:2:\"33\";s:4:\"slug\";s:10:\"pembayaran\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:11;a:3:{s:4:\"menu\";s:2:\"41\";s:4:\"slug\";s:3:\"pdi\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:12;a:3:{s:4:\"menu\";s:2:\"42\";s:4:\"slug\";s:4:\"stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:13;a:3:{s:4:\"menu\";s:2:\"59\";s:4:\"slug\";s:11:\"terima-stnk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:14;a:3:{s:4:\"menu\";s:2:\"43\";s:4:\"slug\";s:4:\"void\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:15;a:3:{s:4:\"menu\";s:2:\"44\";s:4:\"slug\";s:11:\"surat-jalan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:16;a:3:{s:4:\"menu\";s:2:\"34\";s:4:\"slug\";s:12:\"return-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:17;a:3:{s:4:\"menu\";s:2:\"45\";s:4:\"slug\";s:5:\"stock\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:18;a:3:{s:4:\"menu\";s:2:\"46\";s:4:\"slug\";s:23:\"import-penerimaan-motor\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:19;a:3:{s:4:\"menu\";s:2:\"47\";s:4:\"slug\";s:26:\"input-penerimaan-aksesoris\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:20;a:3:{s:4:\"menu\";s:2:\"48\";s:4:\"slug\";s:12:\"motor-keluar\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:21;a:3:{s:4:\"menu\";s:2:\"49\";s:4:\"slug\";s:11:\"motor-masuk\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:22;a:3:{s:4:\"menu\";s:2:\"50\";s:4:\"slug\";s:22:\"cetak-kwitansi-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:23;a:3:{s:4:\"menu\";s:2:\"51\";s:4:\"slug\";s:13:\"rekap-tagihan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:24;a:3:{s:4:\"menu\";s:2:\"52\";s:4:\"slug\";s:16:\"surat-pernyataan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:25;a:3:{s:4:\"menu\";s:2:\"53\";s:4:\"slug\";s:17:\"pencairan-leasing\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}i:26;a:3:{s:4:\"menu\";s:2:\"54\";s:4:\"slug\";s:17:\"laporan-penjualan\";s:5:\"child\";a:4:{s:3:\"add\";i:1;s:3:\"upd\";i:1;s:3:\"del\";i:1;s:3:\"prt\";i:1;}}}', '1', NULL, 6, NULL, '0000-00-00 00:00:00', '2017-03-12 01:16:44', '0000-00-00 00:00:00', '2017-03-12 01:13:19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `covernote_history`
--

CREATE TABLE `covernote_history` (
  `id_covernote` int(11) NOT NULL,
  `noso_covernote` varchar(50) DEFAULT NULL,
  `print_format_id` int(11) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_motor_keluar`
--

CREATE TABLE `detail_motor_keluar` (
  `id_motor_keluar` int(11) NOT NULL,
  `id_detail_motor_keluar` int(11) NOT NULL,
  `no_mesin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_motor_keluar_temp`
--

CREATE TABLE `detail_motor_keluar_temp` (
  `id_detail_motor_keluar` int(11) NOT NULL,
  `no_mesin` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `global_data`
--

CREATE TABLE `global_data` (
  `id` int(11) NOT NULL,
  `group_data` varchar(50) NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `global_data_status` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global_data`
--

INSERT INTO `global_data` (`id`, `group_data`, `value`, `global_data_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'aksesoris', 'aki', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'aksesoris', 'spion', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'aksesoris', 'helm', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'cpembelian', 'Cash', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'cpembelian', 'Kredit', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'aksesoris', 'toolkit', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'aksesoris', 'rumah_plat', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'aksesoris', 'jacket', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'aksesoris', 'jas_hujan', '1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `module` varchar(100) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `status` enum('1','2') DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent`, `module`, `name`, `icon`, `slug`, `number`, `status`) VALUES
(1, NULL, '-', 'Master', 'fa fa-home', 'javascript:void(0);', 1, '1'),
(2, NULL, '-', 'Transaksi', 'fa fa-edit', 'javascript:void(0);', 2, '1'),
(3, NULL, '-', 'Inventory', 'fa fa-tasks', 'javascript:void(0);', 3, '1'),
(4, NULL, '-', 'Leasing', 'fa fa-users', 'javascript:void(0);', 4, '1'),
(5, NULL, '-', 'Laporan', 'fa fa-envelope', 'javascript:void(0);', 5, '1'),
(6, NULL, '-', 'Setting', 'fa fa-cogs', 'javascript:void(0);', 6, '1'),
(23, 1, 'md_jabatan', 'Master Jabatan', 'fa fa-circle', 'master-jabatan', 1, '1'),
(24, 1, 'md_karyawan', 'Master Karyawan', 'fa fa-circle', 'master-karyawan', 2, '1'),
(26, 1, 'md_customer', 'Master Customer', 'fa fa-circle', 'master-customer', 3, '1'),
(27, 1, 'md_motor', 'Master Motor', 'fa fa-circle', 'master-motor', 4, '1'),
(28, 1, 'md_aksesoris', 'Master Aksesoris', 'fa fa-circle', 'master-aksesoris', 5, '1'),
(29, 1, 'md_gudang', 'Master Gudang', 'fa fa-circle', 'master-gudang', 6, '1'),
(30, 1, 'md_leasing', 'Master Leasing', 'fa fa-circle', 'master-leasing', 7, '1'),
(32, 2, 't_penjualan', 'Penjualan', 'fa fa-circle', 'penjualan', 1, '1'),
(36, 1, 'account', 'Users Management', 'fa fa-circle', 'user-management', 9, '1'),
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
(59, 2, 't_terima_stnk', 'TT STNK & BPKB', 'fa fa-circle', 'terima-stnk', 6, '1'),
(60, 1, '-', 'Owner Setting', 'fa fa-circle', 'owner', 10, '1'),
(65, 6, 'backup_db', 'Backup Database', 'fa fa-circle', 'backup-database', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `motor_keluar`
--

CREATE TABLE `motor_keluar` (
  `id_motor_keluar` int(11) NOT NULL,
  `kode_motor_keluar` varchar(30) DEFAULT NULL,
  `id_gudang_in` int(11) DEFAULT NULL,
  `id_gudang_out` int(11) DEFAULT NULL,
  `tgl_motor_keluar` date DEFAULT NULL,
  `kode_po_motor_keluar` varchar(20) DEFAULT NULL,
  `kode_do_motor_keluar` varchar(20) DEFAULT NULL,
  `pic_motor_keluar` varchar(30) DEFAULT NULL,
  `keterangan_motor_keluar` text,
  `status_motor_keluar` enum('1','2','3') DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_aksesoris`
--

CREATE TABLE `m_aksesoris` (
  `id` int(11) NOT NULL,
  `kd_aksesoris` varchar(20) NOT NULL,
  `aksesoris` varchar(35) NOT NULL,
  `kategori` int(11) NOT NULL,
  `url_foto` text NOT NULL,
  `m_status` enum('1','2','3') NOT NULL DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_aksesoris`
--

INSERT INTO `m_aksesoris` (`id`, `kd_aksesoris`, `aksesoris`, `kategori`, `url_foto`, `m_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'GLS', 'SPION GLS', 2, 'assets/images/aksesoris/icon.png', '1', 6, 6, NULL, '2017-05-06 14:54:30', '2017-05-06 14:57:27', NULL),
(2, 'K03S', 'SPION K03S', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:55:02', NULL, NULL),
(3, 'K16A', 'SPION K16A', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:55:18', NULL, NULL),
(4, 'K18A', 'SPION K18A', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:55:33', NULL, NULL),
(5, 'K25A', 'SPION K25A', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:55:47', NULL, NULL),
(6, 'K2LG', 'SPION K2LG', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:56:03', NULL, NULL),
(7, 'K2RA', 'SPION K2RA', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:56:16', NULL, NULL),
(8, 'K45G', 'SPION K45G', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:56:37', NULL, NULL),
(9, 'K56A', 'SPION K56A', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:56:57', NULL, NULL),
(10, 'K56F', 'SPION K56F', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:57:12', NULL, NULL),
(11, 'K61A', 'SPION K61A', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:57:48', NULL, NULL),
(12, 'K81A', 'SPION K81A', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:58:01', NULL, NULL),
(13, 'NF100T', 'SPION NF100T', 2, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:58:16', NULL, NULL),
(14, 'GENERAL', 'TOOLKIT GENERAL', 6, 'assets/images/aksesoris/icon.png', '3', 6, NULL, 6, '2017-05-06 14:58:45', NULL, '2017-05-06 14:59:28'),
(15, 'T-GENERAL', 'TOOLKIT GENERAL', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 14:59:47', NULL, NULL),
(16, 'T-CB150', 'TOOLKIT CB 150', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:00:07', NULL, NULL),
(17, 'T-CBR150', 'TOOLKIT CBR150', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:00:24', NULL, NULL),
(18, 'T-MEGAPRO', 'TOOLKIT MEGAPRO', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:00:42', NULL, NULL),
(19, 'T-SONIC', 'TOOLKIT SONIC', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:00:59', NULL, NULL),
(20, 'T-SPACY', 'TOOLKIT SPACY', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:01:16', NULL, NULL),
(21, 'T-SUPRA GTR', 'TOOLKIT SUPRA GTR', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:01:38', NULL, NULL),
(22, 'T-VERZA', 'TOOLKIT VERZA', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:01:55', NULL, NULL),
(23, 'T- SUPRA X HI', 'TOOLKIT SUPRA X HELM IN', 6, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:02:39', NULL, NULL),
(24, 'AKI-4V', 'AKI 4V', 1, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:03:00', NULL, NULL),
(25, 'AKI-5V', 'AKI 5V', 1, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:03:14', NULL, NULL),
(26, 'AKI-6V', 'AKI 6V', 1, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:03:25', NULL, NULL),
(27, 'H-TRX-3', 'HELM TRX-3', 3, 'assets/images/aksesoris/0a083c1cd4ff1e6e1c10bb829f9942e6.jpg', '1', 6, 6, NULL, '2017-05-06 15:03:54', '2017-05-06 15:06:20', NULL),
(28, 'H-TRX-R', 'HELM TRX-R', 3, 'assets/images/aksesoris/2e3f310412d46cdbaaf4e0ec1b59174c.jpg', '1', 6, 6, NULL, '2017-05-06 15:04:12', '2017-05-06 15:06:31', NULL),
(29, 'H-TRX-S', 'HELM TRX-S', 3, 'assets/images/aksesoris/icon.png', '1', 6, NULL, NULL, '2017-05-06 15:04:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_backup_db`
--

CREATE TABLE `m_backup_db` (
  `id` int(11) NOT NULL,
  `backup_file` text,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_backup_db`
--

INSERT INTO `m_backup_db` (`id`, `backup_file`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(22, 'backup-on-2017-05-07-13-11-02.zip', 6, NULL, NULL, '2017-05-07 13:11:02', NULL, NULL),
(23, 'backup-on-2017-05-07-13-17-08.zip', 6, NULL, NULL, '2017-05-07 13:17:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_biro_jasa`
--

CREATE TABLE `m_biro_jasa` (
  `id` int(10) NOT NULL,
  `nama_birojasa` varchar(50) DEFAULT NULL,
  `telepon_birojasa` varchar(20) DEFAULT NULL,
  `handphone_birojasa` varchar(20) DEFAULT NULL,
  `alamat_birojasa` text,
  `pic_birojasa` varchar(50) DEFAULT NULL,
  `pic_kontak_birojasa` varchar(20) DEFAULT NULL,
  `email_birojasa` varchar(50) DEFAULT NULL,
  `status_birojasa` int(11) DEFAULT '2',
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_biro_jasa`
--

INSERT INTO `m_biro_jasa` (`id`, `nama_birojasa`, `telepon_birojasa`, `handphone_birojasa`, `alamat_birojasa`, `pic_birojasa`, `pic_kontak_birojasa`, `email_birojasa`, `status_birojasa`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
(1, 'TEGUH JAYA', '02155952617', '02155952617', 'CITRA 2 JAKARTA BARAT', 'JOHANES HAMBALI', '02155952617', 'BJTJYUNGS@GMAIL.COM', 1, '2017-05-06 14:48:25', NULL, NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_customer`
--

CREATE TABLE `m_customer` (
  `id` int(11) NOT NULL,
  `no_ktp` varchar(30) NOT NULL DEFAULT '',
  `nama_customer` varchar(100) DEFAULT NULL,
  `tempat_lahir_customer` varchar(50) DEFAULT NULL,
  `tanggal_lahir_customer` date DEFAULT NULL,
  `kelamin_customer` enum('P','W') DEFAULT NULL,
  `alamat_customer` text,
  `telepon_customer` varchar(20) DEFAULT NULL,
  `handphone_customer` varchar(20) DEFAULT NULL,
  `rt` varchar(10) DEFAULT NULL,
  `rw` varchar(10) DEFAULT NULL,
  `wilayah` varchar(75) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `m_status` enum('1','2','3') DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_customer`
--

INSERT INTO `m_customer` (`id`, `no_ktp`, `nama_customer`, `tempat_lahir_customer`, `tanggal_lahir_customer`, `kelamin_customer`, `alamat_customer`, `telepon_customer`, `handphone_customer`, `rt`, `rw`, `wilayah`, `kelurahan`, `kecamatan`, `m_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, '3171032402860014', 'Fredy Halim', 'Pontianak', '2017-05-06', 'P', 'cempaka sari 2A/36', '0214204245', '081808881898', '010', '008', 'Jakarta Pusat', 'Harapan Mulya', 'Cempaka Putih', '1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_gudang`
--

CREATE TABLE `m_gudang` (
  `id` int(11) NOT NULL,
  `kd_gudang` varchar(10) NOT NULL,
  `gudang` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `status_gudang` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_gudang`
--

INSERT INTO `m_gudang` (`id`, `kd_gudang`, `gudang`, `alamat`, `telepon`, `pic`, `status_gudang`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'WRH-0001', 'GUDANG DEALER', 'JL. BEKASI TIMUR RAYA NO. 158 JAKARTA TIMUR', '0218517620', 'SUWARTO', '1', 6, NULL, NULL, '2017-05-06 14:41:33', NULL, NULL),
(2, 'WRH-0002', 'GUDANG MK', 'MUARA KARANG JAKARTA UTARA', '02166605419', 'SUNJAYA', '1', 6, NULL, NULL, '2017-05-06 14:42:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_jabatan`
--

CREATE TABLE `m_jabatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `keterangan` text,
  `status_jabatan` enum('1','2','3') DEFAULT '1' COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_jabatan`
--

INSERT INTO `m_jabatan` (`id`, `jabatan`, `keterangan`, `status_jabatan`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'ADMINISTRASI', '', '1', 6, NULL, NULL, '2017-05-06 15:07:51', NULL, NULL),
(2, 'SOPIR', '', '1', 6, NULL, NULL, '2017-05-06 15:07:59', NULL, NULL),
(3, 'MANAGER', '', '1', 6, NULL, NULL, '2017-05-06 15:08:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_karyawan`
--

CREATE TABLE `m_karyawan` (
  `id` int(11) NOT NULL,
  `kd_karyawan` varchar(10) NOT NULL,
  `karyawan` varchar(75) DEFAULT NULL,
  `kd_jabatan_karyawan` varchar(10) DEFAULT NULL COMMENT 'kd_jabatan_karyawan didapat dari table m_jabatan',
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status_karyawan` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_karyawan`
--

INSERT INTO `m_karyawan` (`id`, `kd_karyawan`, `karyawan`, `kd_jabatan_karyawan`, `tgl_masuk`, `tgl_keluar`, `foto`, `status_karyawan`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'EMP-0001', 'HERLINA WIDYASTUTY', '1', '2017-05-01', '0000-00-00', 'assets/images/karyawan/icon.png', '1', 6, 6, NULL, '2017-05-06 15:09:04', '2017-05-06 16:50:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_leasing`
--

CREATE TABLE `m_leasing` (
  `id` int(11) NOT NULL,
  `kd_leasing` varchar(10) NOT NULL,
  `leasing` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pic` varchar(50) NOT NULL COMMENT 'PIC mengambil dari m_karyawan',
  `hp` varchar(20) DEFAULT NULL,
  `kalimat_kw_1` text,
  `kalimat_kw_2` text,
  `status_leasing` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_leasing`
--

INSERT INTO `m_leasing` (`id`, `kd_leasing`, `leasing`, `alamat`, `telepon`, `email`, `pic`, `hp`, `kalimat_kw_1`, `kalimat_kw_2`, `status_leasing`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'FIF', 'FEDERAL INTERNATIONAL FINANCE', '-', '0210000000', 'a@fifgroup.co.id', 'AFFANDI', '081281053109', 'JASA PERANTARA MBD', '-', '1', 6, 6, NULL, '2017-05-06 14:45:05', '2017-05-06 14:46:45', NULL),
(2, 'WOM', 'WOM Finance', '-', '0210000000', 'a@wom.co.id', 'ERIKSON', '0817888061', 'TAGIHAN KOMISI', '-', '1', 6, 6, NULL, '2017-05-06 14:46:28', '2017-05-06 14:46:55', NULL),
(3, 'MPMF', 'MITRA PINASTHIKA MUSTIKA FINANCE', 'Gedung Lippo Kuningan Lt. 23 & 25, Jl. H.R. Rasuna Said Kav. B-12, RT.6/RW.7, Karet Kuningan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910, Indonesia', '0816257276', 'a@wom.co.id', 'DEDIH', '0800000000', 'SUBSIDI', '-', '1', 6, 6, NULL, '2017-05-06 16:04:40', '2017-05-06 16:16:31', NULL),
(4, 'MCF', 'MEGA CENTRAL FINANCE', 'Jalan Letjen. S. Parman Kav. 76, Slipi, RT.4/RW.3, Slipi, Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11410, Indonesia', '02153666627', 'a@mcf.co.id', '-', '0800000000', 'KOMISI PERANTARA', '-', '1', 6, 6, NULL, '2017-05-06 16:05:28', '2017-05-06 16:15:39', NULL),
(5, 'SOF', 'SUMMIT OTO FINANCE', 'Komplek Ruko Mega Grosir Cempaka Mas Blok E No. 11-12, Jl. Letjend Suprapto, RW.8, Sumur Batu, Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10460, Indonesia', '02142870688', 'a@sof.com', '-', '0800000000', 'SUBSIDI', '-', '1', 6, 6, NULL, '2017-05-06 16:06:19', '2017-05-06 16:14:50', NULL),
(6, 'MF', 'MEGA FINANCE', 'Tarum Barat No.24, RT.12/RW.7, Cipinang Melayu, Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13620, Indonesia', '0210000000', 'a@wom.co.id', 'OYAN', '0800000000', '-', '-', '1', 6, 6, NULL, '2017-05-06 16:07:09', '2017-05-06 16:13:27', NULL),
(7, 'IMFI', 'INDOMOBIL FINANCE INDONESIA', 'Jl. Boulevard Bar. Raya, RT.18/RW.8, Klp. Gading Bar., Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240, Indonesia', '02145853125', 'a@imfi.com', 'JONY', '0800000000', 'SUBSIDI', '-', '1', 6, 6, NULL, '2017-05-06 16:08:27', '2017-05-06 16:12:50', NULL),
(8, 'ADIRA', 'ADIRA DINAMIKA MULTI FINANCE', ' Komplek Ruko Kokan Permata, Blok F 3A-7, Jalan Boulevard Bukit Gading Raya, RT.15/RW.3, Klp. Gading Bar., Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240, Indonesia', '02145851314', 'a@adira.com', 'HENDRO', '0800000000', '-', '-', '1', 6, NULL, NULL, '2017-05-06 16:11:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_motor`
--

CREATE TABLE `m_motor` (
  `id` int(11) NOT NULL,
  `tipe_motor` varchar(25) NOT NULL DEFAULT '',
  `nama_motor` varchar(50) DEFAULT 'unknow-name',
  `varian` varchar(50) DEFAULT 'unknown-varian',
  `merk` varchar(50) DEFAULT 'unknown-merk',
  `harga_otr` float DEFAULT '0',
  `nama_foto` text,
  `url_foto` text,
  `m_status` enum('1','2','3') DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_motor`
--

INSERT INTO `m_motor` (`id`, `tipe_motor`, `nama_motor`, `varian`, `merk`, `harga_otr`, `nama_foto`, `url_foto`, `m_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'D1B2N2L2', 'HONDA BEAT CBS', 'MATIC', 'HONDA', 15425000, 'assets/images/motor/cef51ede7ed5188da65b78a692afa73e.png', '/assets/images//assets/images/motor/cef51ede7ed5188da65b78a692afa73e.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:13:49', NULL),
(7, 'D1B2N6L2', 'HONDA BEAT CW', 'MATIC', 'HONDA', 15225000, 'assets/images/motor/e7b3be0725a3b011038bc5f107c19984.png', '/assets/images//assets/images/motor/e7b3be0725a3b011038bc5f107c19984.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:15:43', NULL),
(8, 'EF02N11S', 'HONDA VARIO 125 CBS', 'MATIC', 'HONDA', 18225000, 'assets/images/motor/8b4a4ea21e0d88b8643619d083bee169.png', '/assets/images//assets/images/motor/8b4a4ea21e0d88b8643619d083bee169.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:17:17', NULL),
(13, 'EF02N12S', 'HONDA VARIO 125 ISS', 'MATIC', 'HONDA', 18825000, 'assets/images/motor/58035a5f29d78ba49ca1545e644fa00b.png', '/assets/images//assets/images/motor/58035a5f29d78ba49ca1545e644fa00b.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:18:22', NULL),
(25, 'K1H2N14S', 'HONDA VARIO 150', 'MATIC', 'HONDA', 21975000, 'assets/images/motor/5adfcd6cba0c5189957373e7798090be.png', '/assets/images//assets/images/motor/5adfcd6cba0c5189957373e7798090be.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:23:37', NULL),
(26, 'D1B2N3L2', 'HONDA BEAT ISS', 'MATIC', 'HONDA', 16275000, 'assets/images/motor/e2d108da18404a4f5865d0e73ce2a02f.png', '/assets/images//assets/images/motor/e2d108da18404a4f5865d0e73ce2a02f.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:20:14', NULL),
(28, 'YG2N15L1', 'HONDA BEAT POP ISS', 'MATIC', 'HONDA', 15475000, 'assets/images/motor/0317176557d5623a1b1d8693188a3619.png', '/assets/images//assets/images/motor/0317176557d5623a1b1d8693188a3619.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:21:46', NULL),
(61, 'D1I2N2M1', 'HONDA BEAT STREET', 'MATIC', 'HONDA', 15925000, 'assets/images/motor/19d1c5a896bdb5200d0d17a5c51b2cca.png', '/assets/images//assets/images/motor/19d1c5a896bdb5200d0d17a5c51b2cca.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:24:46', NULL),
(62, 'F1C2N2LA', 'HONDA SCOOPY STYLISH', 'MATIC', 'HONDA', 17850000, 'assets/images/motor/ba5196cc38269d51954f36c7c833e10b.png', '/assets/images//assets/images/motor/ba5196cc38269d51954f36c7c833e10b.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:27:59', NULL),
(65, 'F1C2N2LB', 'HONDA SCOOPY SPORTY', 'MATIC', 'HONDA', 17850000, 'assets/images/motor/9670ddbd040956c2a90d4cae20814d07.png', '/assets/images//assets/images/motor/9670ddbd040956c2a90d4cae20814d07.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:27:44', NULL),
(68, 'F1C2N2LC', 'HONDA SCOOPY PLAYFUL', 'MATIC', 'HONDA', 17850000, 'assets/images/motor/37b9cbde64643129a06617edbb4efdc8.png', '/assets/images//assets/images/motor/37b9cbde64643129a06617edbb4efdc8.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:28:57', NULL),
(78, 'D1A2N18S', 'HONDA VARIO 110 CBS STD', 'MATIC', 'HONDA', 16725000, 'assets/images/motor/cf5d9b08e3d3a2a8618948806a70e0e3.png', '/assets/images//assets/images/motor/cf5d9b08e3d3a2a8618948806a70e0e3.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:30:14', NULL),
(85, 'AFX21C08', 'SUPRA X125 CW', 'CUB', 'HONDA', 17925000, 'assets/images/motor/1b5cf202ce155f2f3b3efbc079b2cc8d.png', '/assets/images//assets/images/motor/1b5cf202ce155f2f3b3efbc079b2cc8d.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:34:31', NULL),
(87, 'GL15C21A', 'HONDA MEGAPRO', 'SPORT', 'HONDA', 21825000, 'assets/images/motor/8b57363325ade6c892b244ecab606e7f.png', '/assets/images//assets/images/motor/8b57363325ade6c892b244ecab606e7f.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:34:15', NULL),
(88, 'H5C2R2S1', 'HONDA CB 150R', 'SPORT', 'HONDA', 26025000, 'assets/images/motor/1383b178972329d76a3ce9c1eca893ef.png', '/assets/images//assets/images/motor/1383b178972329d76a3ce9c1eca893ef.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:35:40', NULL),
(90, 'K1H2N4S2', 'HONDA VARIO 150', 'MATIC', 'HONDA', 21975000, 'assets/images/motor/9c6b33ac3a462709d26658cf3deaa9e5.png', '/assets/images//assets/images/motor/9c6b33ac3a462709d26658cf3deaa9e5.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:38:16', NULL),
(93, 'NFT13C01', 'HONDA REVO FIT', 'CUB', 'HONDA', 13675000, 'assets/images/motor/df05ce2503914fa8907a59810c8332d8.png', '/assets/images//assets/images/motor/df05ce2503914fa8907a59810c8332d8.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:40:22', NULL),
(95, 'NFT13C03', 'HONDA REVO CW', 'CUB', 'HONDA', 15275000, 'assets/images/motor/d17f2f70eea52bcb3ba926fbff355682.png', '/assets/images//assets/images/motor/d17f2f70eea52bcb3ba926fbff355682.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:40:48', NULL),
(139, 'D1A2N8SA', 'HONDA VARIO 110 CBS ADV', 'MATIC', 'HONDA', 16825000, 'assets/images/motor/a5fcf2551d9a7f037d6c3909cc702335.png', '/assets/images//assets/images/motor/a5fcf2551d9a7f037d6c3909cc702335.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:41:41', NULL),
(140, 'D1A2N9SA', 'HONDA VARIO 110 ISS ADV', 'MATIC', 'HONDA', 17625000, 'assets/images/motor/ae026008765aff2f2da22fe170b0ac41.png', '/assets/images//assets/images/motor/ae026008765aff2f2da22fe170b0ac41.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:42:14', NULL),
(154, 'D1A2N19S', 'HONDA VARIO 110 ISS STD', 'MATIC', 'HONDA', 17525000, 'assets/images/motor/764f3460d866328f4b37dd415ce15217.png', '/assets/images//assets/images/motor/764f3460d866328f4b37dd415ce15217.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:42:47', NULL),
(180, 'EF2N12S2', 'HONDA VARIO 125 ISS', 'MATIC', 'HONDA', 18825000, 'assets/images/motor/ffa47287ecc062f5fbfee5e76aa285a5.png', '/assets/images//assets/images/motor/ffa47287ecc062f5fbfee5e76aa285a5.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:44:17', NULL),
(189, 'H5C2R2SA', 'HONDA CB 150 R SE XM', 'SPORT', 'HONDA', 27425000, 'assets/images/motor/db152a070a33fdb9f78cf0a0e3057695.png', '/assets/images//assets/images/motor/db152a070a33fdb9f78cf0a0e3057695.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:45:36', NULL),
(222, 'P5E02RM1', 'HONDA CBR 150 R STD', 'SPORT', 'HONDA', 33025000, 'assets/images/motor/4f64dde459cb7f8559904eb00f1782fd.png', '/assets/images//assets/images/motor/4f64dde459cb7f8559904eb00f1782fd.png', '1', NULL, 6, NULL, NULL, '2017-05-06 15:50:31', NULL),
(245, 'Y3B2R17S', 'NEW SONIC 150R STD', 'SPORT', 'HONDA', 21875000, 'assets/images/motor/06c2090d409372759f38ec2e2d6ce1ab.png', '/assets/images//assets/images/motor/06c2090d409372759f38ec2e2d6ce1ab.png', '1', NULL, 6, NULL, NULL, '2017-05-06 16:00:33', NULL),
(246, 'Y3B2R71B', 'NEW SONIC 150R SPECIAL', 'SPORT', 'HONDA', 22275000, 'assets/images/motor/5acbb75e7c676edd9241ff3d90a46686.png', '/assets/images//assets/images/motor/5acbb75e7c676edd9241ff3d90a46686.png', '1', NULL, 6, NULL, NULL, '2017-05-06 16:00:25', NULL),
(262, 'P5E02RMA', 'HONDA CBR 150 R RED', 'SPORT', 'HONDA', 33725000, 'assets/images/motor/1e474f89530618442ba54b8afcabb3ab.jpg', '/assets/images//assets/images/motor/1e474f89530618442ba54b8afcabb3ab.jpg', '1', NULL, 6, NULL, NULL, '2017-05-06 16:01:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_owner`
--

CREATE TABLE `m_owner` (
  `id` int(11) NOT NULL DEFAULT '0' COMMENT 'ID harus nilainya 1',
  `company_name` varchar(100) DEFAULT NULL,
  `owner_name` varchar(50) DEFAULT NULL,
  `owner_ktp` varchar(50) DEFAULT NULL,
  `owner_telp` varchar(20) DEFAULT NULL,
  `owner_handphone` varchar(20) DEFAULT NULL,
  `owner_email` varchar(50) DEFAULT NULL,
  `owner_address` text,
  `owner_npwp` varchar(50) DEFAULT NULL,
  `owner_jabatan` varchar(50) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_owner`
--

INSERT INTO `m_owner` (`id`, `company_name`, `owner_name`, `owner_ktp`, `owner_telp`, `owner_handphone`, `owner_email`, `owner_address`, `owner_npwp`, `owner_jabatan`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'PT.MANDALA KEKAR ABADI', 'Sunjaya, SE', '3172011302660004', '02185910473', '08121006028', 'sunjaya.houwie@gmail.com', 'Jl. Raya Bekasi Timur No. 158, Cipinang - Jakarta Timur', '069386522015000', 'Direktur Utama', NULL, 6, NULL, NULL, '2017-05-06 14:53:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_supplier`
--

CREATE TABLE `m_supplier` (
  `id` int(11) NOT NULL,
  `kdsupplier` varchar(15) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `pic` varchar(75) DEFAULT NULL,
  `hp` varchar(25) DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_supplier_old`
--

CREATE TABLE `m_supplier_old` (
  `kd_supplier` varchar(10) NOT NULL,
  `supplier` varchar(75) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telpon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status_supplier` enum('1','2','3') DEFAULT NULL COMMENT '1(Aktif), 2(In-Aktif), 3(Delete)',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_aksesoris`
--

CREATE TABLE `penerimaan_aksesoris` (
  `id` int(11) NOT NULL,
  `aksesoris_id` int(11) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `tanggal_terima` datetime DEFAULT NULL,
  `status_add_or_min` enum('1','2') DEFAULT '1' COMMENT '1=>tambah,2=>kurang',
  `keterangan` text,
  `gudang_id` int(11) DEFAULT NULL,
  `aksesoris_status` enum('1','2','3') DEFAULT '1',
  `by_system` enum('1','2') DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan_aksesoris`
--

INSERT INTO `penerimaan_aksesoris` (`id`, `aksesoris_id`, `jumlah`, `tanggal_terima`, `status_add_or_min`, `keterangan`, `gudang_id`, `aksesoris_status`, `by_system`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 1, 10, '2017-05-06 16:50:03', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-05-06 16:50:03', NULL, NULL),
(2, 14, 10, '2017-05-06 16:50:23', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-05-06 16:50:23', NULL, NULL),
(3, 24, 10, '2017-05-06 16:50:40', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-05-06 16:50:40', NULL, NULL),
(4, 27, 10, '2017-05-06 16:51:00', '1', '-', 1, '1', '1', 6, NULL, NULL, '2017-05-06 16:51:00', NULL, NULL),
(5, 24, 1, '2017-05-06 16:51:54', '2', 'Update By System For PDI-2017/V/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 1, '2017-05-06 16:51:54', '2', 'Update By System For PDI-2017/V/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 14, 1, '2017-05-06 16:51:54', '2', 'Update By System For PDI-2017/V/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 27, 1, '2017-05-06 16:51:54', '2', 'Update By System For PDI-2017/V/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 0, 1, '2017-05-06 16:51:54', '2', 'Update By System For PDI-2017/V/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 0, 1, '2017-05-06 16:51:54', '2', 'Update By System For PDI-2017/V/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 0, 1, '2017-05-06 16:51:54', '2', 'Update By System For PDI-2017/V/000001', 1, '1', '2', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_motor`
--

CREATE TABLE `penerimaan_motor` (
  `id` int(11) NOT NULL,
  `nopolisi` varchar(15) DEFAULT NULL COMMENT 'mobil yang membawa motor',
  `tgl_sj` date DEFAULT NULL,
  `no_sj` varchar(15) DEFAULT NULL,
  `no_so` varchar(15) DEFAULT NULL,
  `nomesin` varchar(25) DEFAULT NULL,
  `norangka` varchar(25) DEFAULT NULL,
  `tipe` varchar(25) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `kdgudang` int(11) DEFAULT NULL,
  `tglupload` datetime DEFAULT NULL,
  `namafile` varchar(200) DEFAULT NULL,
  `m_status` enum('1','2','3') DEFAULT '1',
  `status_jual` enum('1','2','3','4') DEFAULT '1' COMMENT '1=belum terjual, 2=sudah terjual, 3=retur,4=inprocess',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan_motor`
--

INSERT INTO `penerimaan_motor` (`id`, `nopolisi`, `tgl_sj`, `no_sj`, `no_so`, `nomesin`, `norangka`, `tipe`, `warna`, `tahun`, `kdgudang`, `tglupload`, `namafile`, `m_status`, `status_jual`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JM21E1353387', 'JM2111HK360075', 'D1B2N2L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '2', 6, 6, NULL, '2017-05-06 15:12:39', '2017-05-06 16:48:50', NULL),
(2, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JM21E1353388', 'JM2110HK360066', 'D1B2N2L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(3, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JM21E1352733', 'JM2119HK356307', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(4, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JM21E1352732', 'JM2117HK356306', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(5, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JM21E1352737', 'JM2119HK356310', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(6, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JM21E1353386', 'JM2119HK360065', 'D1B2N2L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(7, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JFZ1E1751235', 'JFZ119HK742213', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(8, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JFU1E1863125', 'JFU115HK860228', 'EF02N11S', 'WL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(9, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JFU1E1863126', 'JFU113HK860261', 'EF02N11S', 'WL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(10, 'B9791UDC', '2017-05-02', 'SJ17050001', 'SO17043125', 'JFU1E1863122', 'JFU111HK860226', 'EF02N11S', 'WL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(11, 'B9791UDC', '2017-05-02', 'SJ17050004', 'SO17043125', 'JFZ1E1673372', 'JFZ112HK657939', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(12, 'B9791UDC', '2017-05-02', 'SJ17050004', 'SO17043125', 'JFZ1E1680194', 'JFZ112HK661859', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(13, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17042948', 'JFV1E1566302', 'JFV110HK562157', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(14, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17042948', 'JFV1E1564870', 'JFV117HK559983', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(15, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17042948', 'JFV1E1566278', 'JFV115HK562171', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(16, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17042948', 'JFV1E1566491', 'JFV111HK562944', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(17, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17042948', 'JFV1E1567138', 'JFV110HK563017', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(18, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17043125', 'JFU1E1871590', 'JFU11XHK867448', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(19, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17043125', 'JFU1E1860122', 'JFU118HK857162', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(20, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17043125', 'JFU1E1871575', 'JFU110HK867569', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(21, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17043125', 'JFU1E1860257', 'JFU119HK857154', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(22, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17043125', 'JFU1E1852111', 'JFU119HK849622', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(23, 'B9724UYY', '2017-05-02', 'SJ17050011', 'SO17043125', 'JFU1E1857593', 'JFU116HK847102', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(24, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17041957', 'JFZ1E1751246', 'JFZ113HK742224', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(25, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17042276', 'KF11E2061432', 'KF1124HK064551', 'K1H2N14S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(26, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17042470', 'JM11E1240725', 'JM1111HK247222', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(27, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17042470', 'JM11E1240723', 'JM1118HK247220', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(28, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17042697', 'JFT1E1082435', 'JFT112HK082903', 'YG2N15L1', 'PH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(29, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17042982', 'JFU1E1741271', 'JFU119HK743784', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(30, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17042982', 'JFU1E1741276', 'JFU117HK743797', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(31, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17042982', 'JFU1E1742014', 'JFU116HK744620', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(32, 'B9563UYY', '2017-05-02', 'SJ17050028', 'SO17042982', 'JFU1E1742500', 'JFU114HK745006', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(33, 'B9563UYY', '2017-05-02', 'SJ17050032', 'SO17042470', 'JM11E1240761', 'JM1110HK247258', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(34, 'B9563UYY', '2017-05-02', 'SJ17050032', 'SO17042470', 'JM11E1273974', 'JM111XHK283202', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(35, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17042948', 'JFV1E1530184', 'JFV11XHK525486', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(36, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17042948', 'JFV1E1561108', 'JFV11XHK557631', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(37, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17042948', 'JFV1E1564363', 'JFV114HK560346', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(38, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17042948', 'JFV1E1564544', 'JFV115HK560534', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(39, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17042948', 'JFV1E1561146', 'JFV112HK557641', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(40, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17043189', 'JM21E1353325', 'JM211XHK360009', 'D1B2N2L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(41, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17043189', 'JM21E1352749', 'JM2115HK356322', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(42, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17043189', 'JM21E1352698', 'JM2117HK356323', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(43, 'B9789UDC', '2017-05-02', 'SJ17050034', 'SO17043189', 'JM21E1353356', 'JM2119HK360034', 'D1B2N2L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(44, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JM21E1354238', 'JM2112HK360795', 'D1B2N2L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(45, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JM21E1352079', 'JM211XHK355666', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(46, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JM21E1352748', 'JM2113HK356321', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(47, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JM21E1354236', 'JM2119HK360793', 'D1B2N2L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(48, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JM11E1273941', 'JM1115HK283169', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(49, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JM11E1273981', 'JM1110HK283208', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(50, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JFZ1E1729511', 'JFZ118HK718081', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(51, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JFZ1E1658058', 'JFZ116HK630145', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(52, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JFZ1E1729551', 'JFZ110HK718110', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(53, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JFU1E1870933', 'JFU117HK864765', 'EF02N11S', 'WL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(54, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JFU1E1871061', 'JFU112HK864964', 'EF02N11S', 'WL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(55, 'B9724UYY', '2017-05-02', 'SJ17050039', 'SO17050089', 'JFU1E1871060', 'JFU115HK864960', 'EF02N11S', 'WL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(56, 'B9063UVT', '2017-05-02', 'SJ17050041', 'SO17043189', 'JFZ1E1729284', 'JFZ117HK718041', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(57, 'B9063UVT', '2017-05-02', 'SJ17050041', 'SO17043189', 'JFZ1E1735038', 'JFZ11XHK720950', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(58, 'B9063UVT', '2017-05-02', 'SJ17050041', 'SO17043189', 'JFZ1E1729469', 'JFZ113HK718134', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(59, 'B9063UVT', '2017-05-02', 'SJ17050041', 'SO17043189', 'JFZ1E1729445', 'JFZ116HK718001', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(60, 'B9063UVT', '2017-05-02', 'SJ17050041', 'SO17043189', 'JFZ1E1735033', 'JFZ115HK720953', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(61, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JFZ2E1078869', 'JFZ217HK073924', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(62, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1048645', 'JM3112HK046425', 'F1C2N2LA', 'CH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(63, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1052945', 'JM3110HK049128', 'F1C2N2LA', 'HS', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(64, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1052944', 'JM3112HK049129', 'F1C2N2LA', 'HS', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(65, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1057944', 'JM3117HK053161', 'F1C2N2LB', 'HP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(66, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1057892', 'JM3113HK053139', 'F1C2N2LB', 'HP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(67, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1057742', 'JM311XHK052943', 'F1C2N2LB', 'PH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(68, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1054998', 'JM3111HK048196', 'F1C2N2LC', 'KA', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(69, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1055693', 'JM3115HK051148', 'F1C2N2LC', 'KA', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(70, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1054992', 'JM3113HK048197', 'F1C2N2LC', 'PB', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(71, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1055426', 'JM3115HK051022', 'F1C2N2LC', 'PJ', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(72, 'B9913UYZ', '2017-05-03', 'SJ17050084', 'SO17050141', 'JM31E1055428', 'JM3111HK051017', 'F1C2N2LC', 'PJ', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(73, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17043189', 'JM21E1353165', 'JM2112HK356732', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(74, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17043189', 'JM21E1243753', 'JM2111HK246349', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(75, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17043189', 'JM21E1243727', 'JM2113HK246322', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(76, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17043189', 'JM21E1243758', 'JM2113HK246353', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(77, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17043189', 'JFZ1E1729142', 'JFZ113HK718067', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(78, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17050141', 'JFX1E1260379', 'JFX112HK261854', 'D1A2N18S', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(79, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17050141', 'JFX1E1260376', 'JFX111HK261859', 'D1A2N18S', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(80, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17050141', 'JFX1E1260378', 'JFX119HK261852', 'D1A2N18S', 'MP', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(81, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17050141', 'JFZ2E1078817', 'JFZ211HK073983', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(82, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17050141', 'JFZ2E1078814', 'JFZ218HK073981', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(83, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17050141', 'JFZ2E1078873', 'JFZ216HK073929', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(84, 'B9789UDC', '2017-05-03', 'SJ17050092', 'SO17050141', 'JFZ2E1078816', 'JFZ213HK073984', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(85, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'JBP1E1523047', 'JBP113HK527930', 'AFX21C08', 'MH', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(86, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'JBP1E1522566', 'JBP112HK528406', 'AFX21C08', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(87, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'KC61E1047884', 'KC611XHK048075', 'GL15C21A', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(88, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'KC81E1150042', 'KC8114HK156431', 'H5C2R2S1', 'BY', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(89, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'KC81E1150433', 'KC8118HK157811', 'H5C2R2S1', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(90, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'KF11E2078696', 'KF1128HK081482', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(91, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'KF11E2082286', 'KF1125HK085070', 'K1H2N4S2', 'BL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(92, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'KF11E2082620', 'KF112XHK085436', 'K1H2N4S2', 'BL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(93, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'JBK1E1411361', 'JBK113HK414661', 'NFT13C01', 'BB', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(94, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'JBK1E1411274', 'JBK119HK414745', 'NFT13C01', 'BG', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(95, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'JBK3E1192428', 'JBK314HK193648', 'NFT13C03', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(96, 'B9724UYY', '2017-05-03', 'SJ17050104', 'SO17050219', 'JBK3E1192425', 'JBK312HK193647', 'NFT13C03', 'BR', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(97, 'B9066UVT', '2017-05-03', 'SJ17050118', 'SO17050219', 'KF11E2084164', 'KF1128HK086956', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(98, 'B9066UVT', '2017-05-03', 'SJ17050118', 'SO17050219', 'KF11E2084223', 'KF1120HK087017', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(99, 'B9066UVT', '2017-05-03', 'SJ17050118', 'SO17050219', 'KF11E2084221', 'KF1126HK087023', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(100, 'B9066UVT', '2017-05-03', 'SJ17050118', 'SO17050219', 'KF11E2082710', 'KF1129HK085489', 'K1H2N4S2', 'BL', '2017', 1, '2017-05-06 15:12:39', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:39', NULL, NULL),
(101, 'B9066UVT', '2017-05-03', 'SJ17050118', 'SO17050219', 'KF11E2082633', 'KF1128HK085421', 'K1H2N4S2', 'BL', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(102, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17042470', 'JM11E1241562', 'JM1113HK248064', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(103, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17042697', 'JFX1E1264438', 'JFX118HK264645', 'D1A2N18S', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(104, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17042697', 'JFT1E1082412', 'JFT117HK082945', 'YG2N15L1', 'PH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(105, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17043125', 'JFZ1E1455612', 'JFZ114HK466099', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(106, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17043125', 'JFU1E1749632', 'JFU110HK750638', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(107, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17043189', 'JFZ1E1455426', 'JFZ110HK465919', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(108, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17043189', 'JFZ1E1455701', 'JFZ119HK466292', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(109, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17043189', 'JFZ1E1453884', 'JFZ116HK465391', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(110, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17050089', 'JM11E1279775', 'JM1110HK288036', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(111, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17050089', 'JM11E1279831', 'JM1116HK288025', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(112, 'B9563UYY', '2017-05-03', 'SJ17050119', 'SO17050089', 'JM11E1279874', 'JM1114HK288072', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(113, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17042948', 'JFV1E1568119', 'JFV113HK564579', 'EF02N12S', 'RD', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(114, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050089', 'JFZ1E1456685', 'JFZ11XHK472070', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(115, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050089', 'JFZ1E1456676', 'JFZ119HK472061', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(116, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050089', 'JFZ1E1456675', 'JFZ117HK472060', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(117, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050141', 'JFX1E1260321', 'JFX118HK261874', 'D1A2N18S', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(118, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050141', 'JM11E1231547', 'JM1112HK241431', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(119, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050141', 'JM11E1231586', 'JM1115HK241472', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(120, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050141', 'JM11E1231589', 'JM1114HK241480', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(121, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050141', 'JM11E1231545', 'JM1115HK241424', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(122, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050141', 'JM11E1231549', 'JM1115HK241441', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(123, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050141', 'JM11E1231543', 'JM1116HK241433', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(124, 'B9791UDC', '2017-05-03', 'SJ17050128', 'SO17050141', 'JM11E1231509', 'JM1118HK241465', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(125, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050141', 'JFX1E1260325', 'JFX11XHK261875', 'D1A2N18S', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(126, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050141', 'JM31E1052923', 'JM3114HK049102', 'F1C2N2LA', 'HS', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(127, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050141', 'JM31E1057946', 'JM3119HK053159', 'F1C2N2LB', 'HP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(128, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'JM11E1282517', 'JM1117HK290527', 'D1B2N3L2', 'MC', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(129, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'JM11E1283846', 'JM1117HK293055', 'D1B2N3L2', 'MC', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(130, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'JM11E1282553', 'JM1119HK290562', 'D1B2N3L2', 'MC', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(131, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'JM31E1048498', 'JM3118HK049118', 'F1C2N2LA', 'HS', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(132, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'JM31E1048499', 'JM3116HK049120', 'F1C2N2LA', 'HS', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(133, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'KC81E1150080', 'KC8119HK156473', 'H5C2R2S1', 'BY', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(134, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'KC81E1150083', 'KC8112HK156475', 'H5C2R2S1', 'BY', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(135, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'KF11E2088126', 'KF1129HK090563', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(136, 'B9563UYY', '2017-05-04', 'SJ17050172', 'SO17050297', 'KF11E2088194', 'KF1123HK090607', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(137, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'JBP1E1522678', 'JBP115HK528464', 'AFX21C08', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(138, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'JBP1E1522671', 'JBP114HK528472', 'AFX21C08', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(139, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'JFX1E1262409', 'JFX118HK262779', 'D1A2N8SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(140, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'JFY1E1083205', 'JFY118HK087519', 'D1A2N9SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(141, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'JFY1E1083211', 'JFY119HK087514', 'D1A2N9SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(142, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'JFY1E1083202', 'JFY118HK087522', 'D1A2N9SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(143, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'JM11E1282540', 'JM1112HK290550', 'D1B2N3L2', 'MC', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(144, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'KC81E1150435', 'KC8111HK157813', 'H5C2R2S1', 'BR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(145, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'KC81E1150442', 'KC8112HK157822', 'H5C2R2S1', 'BR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(146, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'KF11E2088365', 'KF1125HK090771', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(147, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050297', 'KF11E2088370', 'KF112XHK090765', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(148, 'B9789UDC', '2017-05-04', 'SJ17050175', 'SO17050360', 'JM31E1048690', 'JM3115HK046449', 'F1C2N2LA', 'CH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(149, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17042470', 'JM11E1279824', 'JM1110HK288022', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(150, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17042470', 'JM11E1279827', 'JM1115HK288033', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(151, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'JBP1E1522577', 'JBP110HK528582', 'AFX21C08', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(152, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'JBP1E1522911', 'JBP119HK528502', 'AFX21C08', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(153, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'JBP1E1522871', 'JBP118HK528524', 'AFX21C08', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(154, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'JFY1E1083629', 'JFY116HK086739', 'D1A2N19S', 'PH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(155, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'JFX1E1262433', 'JFX116HK262750', 'D1A2N8SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(156, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'JFY1E1083207', 'JFY110HK087515', 'D1A2N9SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(157, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'JFY1E1083246', 'JFY113HK087511', 'D1A2N9SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(158, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'KF11E2088225', 'KF1128HK090635', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(159, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'KF11E2088368', 'KF1126HK090763', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(160, 'B9791UDC', '2017-05-04', 'SJ17050187', 'SO17050297', 'KF11E2088228', 'KF1125HK090639', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(161, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17043125', 'JFU1E1813997', 'JFU118HK806471', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(162, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050089', 'JFU1E1813684', 'JFU119HK804874', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(163, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050089', 'JFU1E1813642', 'JFU115HK804841', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(164, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050089', 'JFU1E1813066', 'JFU118HK804767', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(165, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050141', 'JFX1E1260357', 'JFX111HK261845', 'D1A2N18S', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(166, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050141', 'JM11E1231867', 'JM1115HK241410', 'D1B2N3L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(167, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050297', 'JFY1E1083630', 'JFY114HK086741', 'D1A2N19S', 'PH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(168, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050297', 'JFY1E1083686', 'JFY117HK086779', 'D1A2N19S', 'PH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(169, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050297', 'JFX1E1267204', 'JFX117HK268220', 'D1A2N8SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(170, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050297', 'JFX1E1267203', 'JFX114HK268224', 'D1A2N8SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(171, 'B9563UYY', '2017-05-04', 'SJ17050203', 'SO17050297', 'JFY1E1083201', 'JFY116HK087521', 'D1A2N9SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(172, 'B9563UYY', '2017-05-04', 'SJ17050206', 'SO17042697', 'JFT1E1082219', 'JFT115HK082720', 'YG2N15L1', 'PH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(173, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JM21E1354215', 'JM2111HK360853', 'D1B2N2L2', 'BP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(174, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JM21E1361683', 'JM2117HK354801', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(175, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JM21E1253768', 'JM2110HK260386', 'D1B2N2L2', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(176, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFZ1E1721967', 'JFZ113HK712561', 'D1B2N6L2', 'WH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(177, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFZ1E1456672', 'JFZ11XHK472053', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(178, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFZ2E1079459', 'JFZ214HK074562', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(179, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFU1E1740795', 'JFU115HK743099', 'EF02N11S', 'BR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(180, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFV1E1619215', 'JFV114HK612705', 'EF2N12S2', 'BY', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(181, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFV1E1620458', 'JFV118HK613873', 'EF2N12S2', 'WR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(182, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFV1E1615688', 'JFV114HK609187', 'EF2N12S2', 'RA', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(183, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFV1E1620319', 'JFV113HK613893', 'EF2N12S2', 'WR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(184, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFV1E1618019', 'JFV112HK611732', 'EF2N12S2', 'RA', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(185, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFV1E1619214', 'JFV110HK612703', 'EF2N12S2', 'BY', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(186, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFV1E1618479', 'JFV114HK611991', 'EF2N12S2', 'RA', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(187, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050422', 'JFV1E1615689', 'JFV116HK609188', 'EF2N12S2', 'RA', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(188, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050423', 'JM31E1048877', 'JM3115HK049173', 'F1C2N2LA', 'HS', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(189, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050423', 'KC82E1126462', 'KC8214HK130040', 'H5C2R2SA', 'XM', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(190, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050423', 'KF11E2078470', 'KF1128HK081255', 'K1H2N4S2', 'BL', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(191, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050423', 'KF11E2082657', 'KF1128HK085452', 'K1H2N4S2', 'BL', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(192, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050423', 'KF11E2082562', 'KF1129HK085332', 'K1H2N4S2', 'WH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(193, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050423', 'KF11E2080012', 'KF1124HK082791', 'K1H2N4S2', 'BW', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(194, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050423', 'KF11E2079999', 'KF1128HK082776', 'K1H2N4S2', 'BW', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(195, 'B9724UYY', '2017-05-05', 'SJ17050246', 'SO17050423', 'KF11E2082859', 'KF112XHK085646', 'K1H2N4S2', 'WH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(196, 'B9724UYY', '2017-05-05', 'SJ17050249', 'SO17050423', 'JM31E1061087', 'JM3115HK054891', 'F1C2N2LC', 'PJ', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(197, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050141', 'JFX1E1260308', 'JFX117HK261803', 'D1A2N18S', 'MP', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(198, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050297', 'JBP1E1522848', 'JBP116HK528540', 'AFX21C08', 'BK', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(199, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050297', 'JFY1E1083657', 'JFY112HK086785', 'D1A2N19S', 'PH', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL),
(200, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050297', 'JFX1E1267354', 'JFX115HK268622', 'D1A2N8SA', 'GR', '2017', 1, '2017-05-06 15:12:47', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:47', NULL, NULL);
INSERT INTO `penerimaan_motor` (`id`, `nopolisi`, `tgl_sj`, `no_sj`, `no_so`, `nomesin`, `norangka`, `tipe`, `warna`, `tahun`, `kdgudang`, `tglupload`, `namafile`, `m_status`, `status_jual`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(201, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050297', 'JFY1E1083269', 'JFY11XHK087571', 'D1A2N9SA', 'GR', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(202, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050422', 'JM11E1281446', 'JM1119HK289640', 'D1B2N3L2', 'MP', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(203, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050422', 'JFV1E1621089', 'JFV110HK614516', 'EF2N12S2', 'BY', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(204, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050422', 'JFV1E1621087', 'JFV114HK614518', 'EF2N12S2', 'BY', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(205, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050422', 'JFV1E1619760', 'JFV113HK613411', 'EF2N12S2', 'BY', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(206, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050422', 'JFV1E1620252', 'JFV117HK613363', 'EF2N12S2', 'WR', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(207, 'B9789UDC', '2017-05-05', 'SJ17050274', 'SO17050422', 'JFV1E1620448', 'JFV115HK613829', 'EF2N12S2', 'WR', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(208, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050422', 'JFV1E1620489', 'JFV115HK613863', 'EF2N12S2', 'WR', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(209, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050422', 'JFV1E1621088', 'JFV112HK614517', 'EF2N12S2', 'BY', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(210, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050422', 'JFV1E1620443', 'JFV11XHK613826', 'EF2N12S2', 'WR', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(211, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050423', 'KF11E2084891', 'KF1128HK087704', 'K1H2N4S2', 'BL', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(212, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050423', 'KF11E2085983', 'KF1129HK088795', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(213, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050423', 'KF11E2079728', 'KF1122HK082515', 'K1H2N4S2', 'BW', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(214, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050423', 'KF11E2085982', 'KF1125HK088793', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(215, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050423', 'KF11E2085244', 'KF1122HK088055', 'K1H2N4S2', 'WH', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(216, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050423', 'KF11E2085248', 'KF112XHK088059', 'K1H2N4S2', 'WH', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(217, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050423', 'KF11E2081570', 'KF1124HK084332', 'K1H2N4S2', 'BW', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(218, 'B9739UYY', '2017-05-05', 'SJ17050281', 'SO17050423', 'KF11E2085950', 'KF1125HK088759', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(219, 'B9064UVT', '2017-05-05', 'SJ17050282', 'SO17050141', 'JM31E1057980', 'JM3112HK053147', 'F1C2N2LB', 'HP', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(220, 'B9064UVT', '2017-05-05', 'SJ17050283', 'SO17050297', 'KC81E1150448', 'KC8115HK157829', 'H5C2R2S1', 'BR', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(221, 'B9064UVT', '2017-05-05', 'SJ17050283', 'SO17050297', 'KF11E2085953', 'KF1127HK088794', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(222, 'B9064UVT', '2017-05-05', 'SJ17050283', 'SO17050423', 'KC91E1095782', 'KC9117HK104359', 'P5E02RM1', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(223, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1054403', 'JM311XHK050688', 'F1C2N2LA', 'HS', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(224, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1057976', 'JM3118HK053153', 'F1C2N2LB', 'HP', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(225, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1066144', 'JM311XHK062341', 'F1C2N2LB', 'PH', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(226, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1057979', 'JM3111HK053155', 'F1C2N2LB', 'HP', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(227, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1065958', 'JM3115HK062165', 'F1C2N2LB', 'MH', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(228, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1065994', 'JM311XHK062193', 'F1C2N2LB', 'MH', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(229, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1061636', 'JM3116HK054933', 'F1C2N2LC', 'KA', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(230, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1061055', 'JM3119HK054893', 'F1C2N2LC', 'PJ', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(231, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1056293', 'JM3113HK051939', 'F1C2N2LC', 'PB', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(232, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'JM31E1055248', 'JM3111HK048909', 'F1C2N2LC', 'KA', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(233, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'KC82E1128470', 'KC8213HK130966', 'H5C2R2SA', 'XM', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(234, 'B9789UDC', '2017-05-06', 'SJ17050311', 'SO17050542', 'KC82E1128439', 'KC8216HK130931', 'H5C2R2SA', 'XM', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(235, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'JM21E1362102', 'JM2118HK367220', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(236, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'JM21E1362140', 'JM2117HK367242', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(237, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'JM21E1362142', 'JM2110HK367244', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(238, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'JFZ2E1079410', 'JFZ21XHK074503', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(239, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'JFZ2E1079485', 'JFZ218HK074578', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(240, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'JFZ2E1079487', 'JFZ214HK023594', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(241, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'JFZ2E1079483', 'JFZ210HK074574', 'D1I2N2M1', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(242, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'JM31E1065919', 'JM3116HK062112', 'F1C2N2LB', 'MH', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(243, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'KC82E1128479', 'KC8216HK130976', 'H5C2R2SA', 'XM', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(244, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'KC82E1128436', 'KC8214HK130927', 'H5C2R2SA', 'XM', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(245, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'KB11E1118962', 'KB1119HK122558', 'Y3B2R17S', 'MP', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(246, 'B9724UYY', '2017-05-06', 'SJ17050320', 'SO17050542', 'KB11E1120831', 'KB1112HK123020', 'Y3B2R71B', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(247, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JM21E1362135', 'JM2118HK367234', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(248, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JM21E1362129', 'JM2117HK367225', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(249, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JM21E1365575', 'JM2117HK367452', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(250, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JM21E1362124', 'JM2115HK367238', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(251, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JM21E1365519', 'JM2112HK367424', 'D1B2N2L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(252, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JFZ1E1634263', 'JFZ117HK626086', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(253, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JFZ1E1638428', 'JFZ115HK624756', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(254, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JFZ1E1638366', 'JFZ118HK624671', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(255, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JFZ1E1687145', 'JFZ117HK668595', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(256, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JFZ1E1793724', 'JFZ117HK782158', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(257, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JFZ1E1793831', 'JFZ115HK782224', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(258, 'B9739UYY', '2017-05-06', 'SJ17050324', 'SO17050542', 'JFZ1E1638460', 'JFZ110HK624762', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(259, 'B9063UVT', '2017-05-06', 'SJ17050327', 'SO17050542', 'JFZ1E1793824', 'JFZ117HK782225', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(260, 'B9063UVT', '2017-05-06', 'SJ17050327', 'SO17050542', 'KC82E1126885', 'KC8211HK130559', 'H5C2R2SA', 'XM', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(261, 'B9063UVT', '2017-05-06', 'SJ17050327', 'SO17050542', 'KC91E1089296', 'KC9114HK096480', 'P5E02RM1', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(262, 'B9063UVT', '2017-05-06', 'SJ17050327', 'SO17050542', 'KC91E1100185', 'KC9115HK108099', 'P5E02RMA', 'MP', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(263, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050423', 'KF11E2090124', 'KF1126HK093100', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(264, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050423', 'KF11E2089699', 'KF1126HK093193', 'K1H2N4S2', 'BW', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(265, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050423', 'KF11E2089551', 'KF1126HK092285', 'K1H2N4S2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(266, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050542', 'JFZ1E1793962', 'JFZ118HK782279', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(267, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050542', 'JFZ1E1793921', 'JFZ118HK782198', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(268, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050542', 'JFZ1E1793822', 'JFZ118HK782217', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(269, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050542', 'JFZ1E1793923', 'JFZ115HK782191', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(270, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050542', 'JFZ1E1793924', 'JFZ117HK782189', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(271, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050542', 'JFZ1E1793958', 'JFZ118HK782251', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:12:56', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:12:56', NULL, NULL),
(272, 'B9789UDC', '2017-05-06', 'SJ17050338', 'SO17050542', 'JFZ1E1793959', 'JFZ110HK782258', 'D1B2N6L2', 'BK', '2017', 1, '2017-05-06 15:13:03', '20170506151125-templateTerimaMotor.xlsx', '1', '1', 6, NULL, NULL, '2017-05-06 15:13:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_motor_temp`
--

CREATE TABLE `penerimaan_motor_temp` (
  `id_temp` int(11) NOT NULL,
  `nopolisi` varchar(15) DEFAULT NULL COMMENT 'mobil yang membawa motor',
  `tgl_sj` date DEFAULT NULL,
  `no_sj` varchar(15) DEFAULT NULL,
  `no_so` varchar(15) DEFAULT NULL,
  `nomesin` varchar(25) NOT NULL DEFAULT '',
  `norangka` varchar(25) NOT NULL DEFAULT '',
  `tipe` varchar(25) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `kdgudang` int(11) DEFAULT NULL,
  `tglupload` datetime DEFAULT NULL,
  `namafile` varchar(200) DEFAULT NULL,
  `m_status` enum('') DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_harga_motor`
--

CREATE TABLE `t_harga_motor` (
  `id` int(11) NOT NULL,
  `noso` varchar(25) NOT NULL,
  `cara_pembelian` varchar(15) DEFAULT NULL,
  `marketing` varchar(75) DEFAULT NULL,
  `leasing` varchar(15) DEFAULT NULL,
  `dp_system` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `tagih` float DEFAULT NULL,
  `dp` float DEFAULT NULL,
  `sisa_hutang` float DEFAULT NULL,
  `dp_lunas` enum('1','2') DEFAULT '1' COMMENT '1=>belum lunas, 2=>lunas',
  `fee` float DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_harga_motor`
--

INSERT INTO `t_harga_motor` (`id`, `noso`, `cara_pembelian`, `marketing`, `leasing`, `dp_system`, `diskon`, `tagih`, `dp`, `sisa_hutang`, `dp_lunas`, `fee`, `m_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
(1, 'SO/MKA-2017/V/000001', 'Kredit', 'Herlina', 'FIF', 3000000, 500000, 2500000, 500000, 2000000, '2', 50000, 1, '2017-05-06 16:48:50', NULL, NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_kwitansi_diskon`
--

CREATE TABLE `t_kwitansi_diskon` (
  `id` int(11) NOT NULL,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_kwitansi_fee`
--

CREATE TABLE `t_kwitansi_fee` (
  `id` int(11) NOT NULL,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `fee` double DEFAULT NULL,
  `m_status` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_kwitansi_leasing`
--

CREATE TABLE `t_kwitansi_leasing` (
  `id` int(10) NOT NULL,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `dp_system` float DEFAULT NULL,
  `tagih` int(10) DEFAULT NULL,
  `subsidi1` float DEFAULT NULL,
  `subsidi2` float DEFAULT NULL,
  `status_rekap` int(11) DEFAULT '0',
  `m_status` int(5) DEFAULT NULL,
  `sys_create_user` varchar(10) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kwitansi_leasing`
--

INSERT INTO `t_kwitansi_leasing` (`id`, `nokwitansi`, `noso`, `dp_system`, `tagih`, `subsidi1`, `subsidi2`, `status_rekap`, `m_status`, `sys_create_user`, `sys_create_date`) VALUES
(1, 'KWT/MKA/FIF/V/000001', 'SO/MKA-2017/V/000001', 3000000, 12425000, 800000, 0, 1, 1, '6', '2017-05-06 16:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_pdi`
--

CREATE TABLE `t_pdi` (
  `id` int(11) NOT NULL,
  `kdpdi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `nosj` varchar(25) DEFAULT NULL,
  `tgl_pdi` date DEFAULT NULL,
  `pic` varchar(25) DEFAULT NULL,
  `gudang_id` int(11) DEFAULT NULL,
  `sj_print_date` date DEFAULT NULL,
  `sj_print_status` enum('1','2') DEFAULT '1' COMMENT '1=>not printed, 2=>printed',
  `sj_print_user_id` int(11) DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` date DEFAULT NULL,
  `sys_update_date` date DEFAULT NULL,
  `sys_delete_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pdi`
--

INSERT INTO `t_pdi` (`id`, `kdpdi`, `noso`, `nosj`, `tgl_pdi`, `pic`, `gudang_id`, `sj_print_date`, `sj_print_status`, `sj_print_user_id`, `m_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
(1, 'PDI-2017/V/000001', 'SO/MKA-2017/V/000001', 'SJ-2017/V/000001', '2017-05-06', 'herlina', 1, '2017-05-06', '2', 6, 1, '2017-05-06', NULL, NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_pdi_detail`
--

CREATE TABLE `t_pdi_detail` (
  `id` int(11) NOT NULL,
  `pdi_id` int(11) DEFAULT NULL,
  `aksesoris_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pdi_detail`
--

INSERT INTO `t_pdi_detail` (`id`, `pdi_id`, `aksesoris_id`) VALUES
(1, 1, 24),
(2, 1, 1),
(3, 1, 14),
(4, 1, 27),
(5, 1, 0),
(6, 1, 0),
(7, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran`
--

CREATE TABLE `t_pembayaran` (
  `id` int(11) NOT NULL,
  `nokwitansi` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `transaksi` int(11) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `tgl_dp` date DEFAULT NULL,
  `m_status` int(2) DEFAULT '1',
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pembayaran`
--

INSERT INTO `t_pembayaran` (`id`, `nokwitansi`, `noso`, `transaksi`, `nominal`, `tgl_dp`, `m_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
(1, 'KWT/KD/2017/V/000001', 'SO/MKA-2017/V/000001', 1, 500000, '2017-05-06', 1, '2017-05-06 16:48:50', NULL, NULL, 6, NULL, NULL),
(2, 'KWT/KD/2017/V/000002', 'SO/MKA-2017/V/000001', 4, 2500000, '2017-05-06', 1, '2017-05-06 16:53:59', NULL, NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_pencairan_leasing`
--

CREATE TABLE `t_pencairan_leasing` (
  `id` int(11) NOT NULL,
  `no_tagihan` varchar(100) DEFAULT NULL,
  `tgl_tagihan` datetime DEFAULT NULL,
  `cabang_leasing` varchar(1000) DEFAULT NULL,
  `tgl_pencairan` datetime DEFAULT NULL,
  `no_bukti_potongan` varchar(100) DEFAULT NULL,
  `tot_tagihan` double DEFAULT NULL,
  `tot_pencairan` double DEFAULT NULL,
  `sisa_tagihan` double DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pencairan_leasing_detail`
--

CREATE TABLE `t_pencairan_leasing_detail` (
  `id` int(11) NOT NULL,
  `no_tagihan` varchar(100) DEFAULT NULL,
  `id_kwitansi` int(11) DEFAULT NULL,
  `tgl_pencairan` date DEFAULT NULL,
  `no_bukti_potongan` varchar(100) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pencairan_leasing_detail`
--

INSERT INTO `t_pencairan_leasing_detail` (`id`, `no_tagihan`, `id_kwitansi`, `tgl_pencairan`, `no_bukti_potongan`, `sys_create_user`, `sys_create_date`, `sys_update_user`, `sys_update_date`, `m_status`) VALUES
(1, 'TGH/MKA-REK/2017/000001', 1, '2017-06-01', 'afasdsafasdaease1123132', 6, '2017-05-08 02:15:27', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan`
--

CREATE TABLE `t_penjualan` (
  `id` int(11) NOT NULL,
  `nosj` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `nokonsumen` varchar(25) DEFAULT NULL,
  `ktp` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nomsn` varchar(20) DEFAULT NULL,
  `warna_motor` varchar(100) DEFAULT NULL,
  `harga_otr` float DEFAULT NULL,
  `m_status` enum('1','2','3','4','5') DEFAULT NULL COMMENT '1=>active,2=>not active,3=>deleted,4=>void,5=>process_finish',
  `status_kwitansi` int(11) DEFAULT '0',
  `fee_print` enum('1','2') DEFAULT '1',
  `fee_print_user` int(11) DEFAULT NULL,
  `discount_print` enum('1','2') DEFAULT '1',
  `discount_print_user` int(11) DEFAULT NULL,
  `fee_print_date` datetime DEFAULT NULL,
  `discount_print_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penjualan`
--

INSERT INTO `t_penjualan` (`id`, `nosj`, `noso`, `nokonsumen`, `ktp`, `tanggal`, `nomsn`, `warna_motor`, `harga_otr`, `m_status`, `status_kwitansi`, `fee_print`, `fee_print_user`, `discount_print`, `discount_print_user`, `fee_print_date`, `discount_print_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(28, NULL, 'SO/MKA-2017/V/000001', NULL, '3171032402860014', '2017-05-06', 'JM21E1353387', 'MP', 15425000, '1', 1, '1', NULL, '1', NULL, NULL, NULL, 6, NULL, NULL, '2017-05-06 16:48:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_rekap_tagihan`
--

CREATE TABLE `t_rekap_tagihan` (
  `id` int(11) NOT NULL,
  `no_tagihan` varchar(100) DEFAULT NULL,
  `tgl_tagihan` datetime DEFAULT NULL,
  `tot_tagihan` double DEFAULT NULL,
  `sisa_tagihan` double DEFAULT NULL,
  `kdleasing` varchar(100) DEFAULT NULL,
  `cabang_leasing` varchar(1000) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  `status_rekap` int(11) DEFAULT '0',
  `status_pencairan` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rekap_tagihan`
--

INSERT INTO `t_rekap_tagihan` (`id`, `no_tagihan`, `tgl_tagihan`, `tot_tagihan`, `sisa_tagihan`, `kdleasing`, `cabang_leasing`, `sys_create_user`, `sys_create_date`, `sys_update_user`, `sys_update_date`, `m_status`, `status_rekap`, `status_pencairan`) VALUES
(1, 'TGH/MKA-REK/2017/000001', '2017-05-06 00:00:00', 13225000, 0, 'FIF', 'kelapa gading', 6, '2017-05-06 17:03:09', 6, '2017-05-12 15:24:46', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_rekap_tagihan_detail`
--

CREATE TABLE `t_rekap_tagihan_detail` (
  `id` int(11) NOT NULL,
  `id_kwitansi` int(11) DEFAULT NULL,
  `no_kwitansi` varchar(100) DEFAULT NULL,
  `tgl_kwitansi` datetime DEFAULT NULL,
  `nomor_tagihan` varchar(100) DEFAULT NULL,
  `price_list` varchar(100) DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `m_status` enum('1','2','3','4') DEFAULT NULL,
  `status_rekap` int(11) DEFAULT '0',
  `status_pencairan` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rekap_tagihan_detail`
--

INSERT INTO `t_rekap_tagihan_detail` (`id`, `id_kwitansi`, `no_kwitansi`, `tgl_kwitansi`, `nomor_tagihan`, `price_list`, `sys_create_user`, `sys_create_date`, `sys_update_user`, `sys_update_date`, `m_status`, `status_rekap`, `status_pencairan`) VALUES
(1, 1, NULL, NULL, 'TGH/MKA-REK/2017/000001', 'ns', 6, '2017-05-08 02:11:03', NULL, NULL, '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_stnk`
--

CREATE TABLE `t_stnk` (
  `id` int(11) NOT NULL,
  `no_so` varchar(30) DEFAULT NULL,
  `no_process` varchar(50) DEFAULT NULL,
  `stnk_process_date` date DEFAULT NULL,
  `stnk_estimate_date` date DEFAULT NULL,
  `bpkb_process_date` date DEFAULT NULL,
  `bpkb_estimate_date` date DEFAULT NULL,
  `stnk_status` int(2) DEFAULT '1',
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime NOT NULL,
  `sys_delete_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_stnk`
--

INSERT INTO `t_stnk` (`id`, `no_so`, `no_process`, `stnk_process_date`, `stnk_estimate_date`, `bpkb_process_date`, `bpkb_estimate_date`, `stnk_status`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
(2, 'SO/MKA-2017/V/000001', 'SB-2017-05-000001', '2017-05-06', '2017-05-20', '2017-05-06', '2017-08-04', 1, '2017-05-06 16:53:26', '0000-00-00 00:00:00', NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_stnk_bpkb`
--

CREATE TABLE `t_stnk_bpkb` (
  `id` int(11) NOT NULL,
  `noproses` varchar(25) DEFAULT NULL,
  `noso` varchar(25) DEFAULT NULL,
  `tgl_proses_stnk` date DEFAULT NULL,
  `tgl_proses_bpkb` date DEFAULT NULL,
  `estimasi_stnk_selesai` date DEFAULT NULL,
  `estimasi_bpkb_selesai` date DEFAULT NULL,
  `ktp_stnk` varchar(35) DEFAULT NULL,
  `m_status` int(2) DEFAULT NULL,
  `sys_create_date` date DEFAULT NULL,
  `sys_update_date` date DEFAULT NULL,
  `sys_delete_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_stnk_customer`
--

CREATE TABLE `t_stnk_customer` (
  `id` int(11) NOT NULL,
  `t_stnk_id` int(11) DEFAULT NULL,
  `t_stnk_ktp` varchar(30) DEFAULT NULL,
  `t_stnk_nama` varchar(50) DEFAULT NULL,
  `t_stnk_tempat_lahir` varchar(30) DEFAULT NULL,
  `t_stnk_tgl_lahir` date DEFAULT NULL,
  `t_stnk_jenis_kelamin` enum('P','W') DEFAULT 'P',
  `t_stnk_alamat` text,
  `t_stnk_rt` varchar(5) DEFAULT NULL,
  `t_stnk_rw` varchar(5) DEFAULT NULL,
  `t_stnk_wilayah` text,
  `t_stnk_kelurahan` varchar(100) DEFAULT NULL,
  `t_stnk_kecamatan` varchar(100) DEFAULT NULL,
  `t_stnk_telepon` varchar(20) DEFAULT NULL,
  `t_stnk_handphone` varchar(20) DEFAULT NULL,
  `sys_create_date` date DEFAULT NULL,
  `sys_update_date` date DEFAULT NULL,
  `sys_delete_date` date DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_stnk_customer`
--

INSERT INTO `t_stnk_customer` (`id`, `t_stnk_id`, `t_stnk_ktp`, `t_stnk_nama`, `t_stnk_tempat_lahir`, `t_stnk_tgl_lahir`, `t_stnk_jenis_kelamin`, `t_stnk_alamat`, `t_stnk_rt`, `t_stnk_rw`, `t_stnk_wilayah`, `t_stnk_kelurahan`, `t_stnk_kecamatan`, `t_stnk_telepon`, `t_stnk_handphone`, `sys_create_date`, `sys_update_date`, `sys_delete_date`, `sys_create_user`, `sys_update_user`, `sys_delete_user`) VALUES
(1, 2, '3171032402860014', 'Fredy Halim', 'Pontianak', '2017-05-06', 'P', 'cempaka sari 2A/36', '010', '008', 'Jakarta Pusat', 'Harapan Mulya', 'Cempaka Putih', '0214204245', '081808881898', '2017-05-06', NULL, NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_terima_stnk`
--

CREATE TABLE `t_terima_stnk` (
  `id` int(11) UNSIGNED NOT NULL,
  `t_stnk_id` int(11) DEFAULT NULL,
  `birojasa_id` int(11) DEFAULT NULL,
  `t_terima_no_polisi` varchar(30) DEFAULT NULL,
  `t_terima_no_stnk` varchar(30) DEFAULT NULL,
  `t_terima_no_bpkb` varchar(30) DEFAULT NULL,
  `t_terima_tgl_stnk` date DEFAULT NULL,
  `t_terima_tgl_bpkb` date DEFAULT NULL,
  `t_terima_no_bon_1` varchar(20) DEFAULT NULL,
  `t_terima_no_bon_2` varchar(20) DEFAULT NULL,
  `t_terima_add_biaya_1` float DEFAULT NULL,
  `t_terima_add_biaya_2` float DEFAULT NULL,
  `t_terima_add_biaya_1_description` text,
  `t_terima_add_biaya_2_description` text,
  `t_terima_status` int(11) DEFAULT '1',
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_terima_stnk`
--

INSERT INTO `t_terima_stnk` (`id`, `t_stnk_id`, `birojasa_id`, `t_terima_no_polisi`, `t_terima_no_stnk`, `t_terima_no_bpkb`, `t_terima_tgl_stnk`, `t_terima_tgl_bpkb`, `t_terima_no_bon_1`, `t_terima_no_bon_2`, `t_terima_add_biaya_1`, `t_terima_add_biaya_2`, `t_terima_add_biaya_1_description`, `t_terima_add_biaya_2_description`, `t_terima_status`, `sys_create_user`, `sys_update_user`, `sys_delete_user`, `sys_create_date`, `sys_update_date`, `sys_delete_date`) VALUES
(1, 2, 1, 'B6666AAA', 'ABCDE', 'FGHIJ', '2017-05-12', '2017-05-12', '1212A', '1212B', 250000, 56000, 'NISA', NULL, 1, 6, NULL, NULL, '2017-05-12 15:39:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_void`
--

CREATE TABLE `t_void` (
  `id` int(11) NOT NULL,
  `noso` varchar(255) DEFAULT NULL,
  `void_user_id` int(11) DEFAULT NULL,
  `void_description` text,
  `void_date` datetime DEFAULT NULL,
  `sys_create_user` int(11) DEFAULT NULL,
  `sys_update_user` int(11) DEFAULT NULL,
  `sys_delete_user` int(11) DEFAULT NULL,
  `sys_create_date` datetime DEFAULT NULL,
  `sys_update_date` datetime DEFAULT NULL,
  `sys_delete_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covernote_history`
--
ALTER TABLE `covernote_history`
  ADD PRIMARY KEY (`id_covernote`);

--
-- Indexes for table `detail_motor_keluar`
--
ALTER TABLE `detail_motor_keluar`
  ADD PRIMARY KEY (`id_motor_keluar`);

--
-- Indexes for table `detail_motor_keluar_temp`
--
ALTER TABLE `detail_motor_keluar_temp`
  ADD PRIMARY KEY (`id_detail_motor_keluar`);

--
-- Indexes for table `global_data`
--
ALTER TABLE `global_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`) USING BTREE;

--
-- Indexes for table `motor_keluar`
--
ALTER TABLE `motor_keluar`
  ADD PRIMARY KEY (`id_motor_keluar`);

--
-- Indexes for table `m_aksesoris`
--
ALTER TABLE `m_aksesoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_backup_db`
--
ALTER TABLE `m_backup_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_biro_jasa`
--
ALTER TABLE `m_biro_jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`id`,`no_ktp`);

--
-- Indexes for table `m_gudang`
--
ALTER TABLE `m_gudang`
  ADD PRIMARY KEY (`id`,`kd_gudang`);

--
-- Indexes for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_karyawan`
--
ALTER TABLE `m_karyawan`
  ADD PRIMARY KEY (`id`,`kd_karyawan`);

--
-- Indexes for table `m_leasing`
--
ALTER TABLE `m_leasing`
  ADD PRIMARY KEY (`id`,`kd_leasing`);

--
-- Indexes for table `m_motor`
--
ALTER TABLE `m_motor`
  ADD PRIMARY KEY (`id`,`tipe_motor`),
  ADD UNIQUE KEY `unique_A` (`tipe_motor`) USING BTREE;

--
-- Indexes for table `m_owner`
--
ALTER TABLE `m_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_supplier`
--
ALTER TABLE `m_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_supplier_old`
--
ALTER TABLE `m_supplier_old`
  ADD PRIMARY KEY (`kd_supplier`);

--
-- Indexes for table `penerimaan_aksesoris`
--
ALTER TABLE `penerimaan_aksesoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan_motor`
--
ALTER TABLE `penerimaan_motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan_motor_temp`
--
ALTER TABLE `penerimaan_motor_temp`
  ADD PRIMARY KEY (`id_temp`,`norangka`,`nomesin`),
  ADD UNIQUE KEY `unique_A_B` (`nomesin`,`norangka`);

--
-- Indexes for table `t_harga_motor`
--
ALTER TABLE `t_harga_motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kwitansi_diskon`
--
ALTER TABLE `t_kwitansi_diskon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kwitansi_fee`
--
ALTER TABLE `t_kwitansi_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kwitansi_leasing`
--
ALTER TABLE `t_kwitansi_leasing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pdi`
--
ALTER TABLE `t_pdi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pdi_detail`
--
ALTER TABLE `t_pdi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pencairan_leasing`
--
ALTER TABLE `t_pencairan_leasing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pencairan_leasing_detail`
--
ALTER TABLE `t_pencairan_leasing_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noso` (`noso`);

--
-- Indexes for table `t_rekap_tagihan`
--
ALTER TABLE `t_rekap_tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_rekap_tagihan_detail`
--
ALTER TABLE `t_rekap_tagihan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_stnk`
--
ALTER TABLE `t_stnk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_stnk_bpkb`
--
ALTER TABLE `t_stnk_bpkb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_stnk_customer`
--
ALTER TABLE `t_stnk_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_terima_stnk`
--
ALTER TABLE `t_terima_stnk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_stnk_id` (`t_stnk_id`);

--
-- Indexes for table `t_void`
--
ALTER TABLE `t_void`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noso` (`noso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `covernote_history`
--
ALTER TABLE `covernote_history`
  MODIFY `id_covernote` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_motor_keluar`
--
ALTER TABLE `detail_motor_keluar`
  MODIFY `id_motor_keluar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_motor_keluar_temp`
--
ALTER TABLE `detail_motor_keluar_temp`
  MODIFY `id_detail_motor_keluar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `global_data`
--
ALTER TABLE `global_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `motor_keluar`
--
ALTER TABLE `motor_keluar`
  MODIFY `id_motor_keluar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_aksesoris`
--
ALTER TABLE `m_aksesoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `m_backup_db`
--
ALTER TABLE `m_backup_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `m_biro_jasa`
--
ALTER TABLE `m_biro_jasa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_gudang`
--
ALTER TABLE `m_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_karyawan`
--
ALTER TABLE `m_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_leasing`
--
ALTER TABLE `m_leasing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `m_motor`
--
ALTER TABLE `m_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT for table `m_supplier`
--
ALTER TABLE `m_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penerimaan_aksesoris`
--
ALTER TABLE `penerimaan_aksesoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `penerimaan_motor`
--
ALTER TABLE `penerimaan_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;
--
-- AUTO_INCREMENT for table `penerimaan_motor_temp`
--
ALTER TABLE `penerimaan_motor_temp`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_harga_motor`
--
ALTER TABLE `t_harga_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_kwitansi_diskon`
--
ALTER TABLE `t_kwitansi_diskon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_kwitansi_fee`
--
ALTER TABLE `t_kwitansi_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_kwitansi_leasing`
--
ALTER TABLE `t_kwitansi_leasing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_pdi`
--
ALTER TABLE `t_pdi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_pdi_detail`
--
ALTER TABLE `t_pdi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_pencairan_leasing`
--
ALTER TABLE `t_pencairan_leasing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_pencairan_leasing_detail`
--
ALTER TABLE `t_pencairan_leasing_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `t_rekap_tagihan`
--
ALTER TABLE `t_rekap_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_rekap_tagihan_detail`
--
ALTER TABLE `t_rekap_tagihan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_stnk`
--
ALTER TABLE `t_stnk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_stnk_bpkb`
--
ALTER TABLE `t_stnk_bpkb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_stnk_customer`
--
ALTER TABLE `t_stnk_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_terima_stnk`
--
ALTER TABLE `t_terima_stnk`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_void`
--
ALTER TABLE `t_void`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `fkmenuparentid` FOREIGN KEY (`parent`) REFERENCES `menus` (`id`);

--
-- Constraints for table `t_terima_stnk`
--
ALTER TABLE `t_terima_stnk`
  ADD CONSTRAINT `t_stnk_id` FOREIGN KEY (`t_stnk_id`) REFERENCES `t_stnk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_void`
--
ALTER TABLE `t_void`
  ADD CONSTRAINT `noso` FOREIGN KEY (`noso`) REFERENCES `t_penjualan` (`noso`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
