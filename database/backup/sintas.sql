-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2025 pada 01.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `sintas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `template_path` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `template_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `tanggal`, `template_path`, `deskripsi`, `template_file`, `created_at`, `updated_at`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(2, 'Pendataan lapangan survei penyusunan disagregasi pmtb di kab/kota', NULL, 'templates/RSLucclgiYndtCfUW89gUdKmDHSwzycYcXlqqtL5.docx', NULL, NULL, '2025-11-16 19:02:54', '2025-12-29 17:54:20', NULL, NULL),
(3, 'Pendataan lapangan survei sklnpt', NULL, 'templates/RndkmeMLR0VWZkqkhfR3izGPUp2ilAszkGKfsDe1.docx', NULL, NULL, '2025-11-17 00:23:32', '2025-12-29 17:54:12', NULL, NULL),
(4, 'Pendataan lapangan survei SKPS', NULL, 'templates/gpogF6zAH8XMFCY5JfuWM5Xz39bmDCYW7o0Tq7yj.docx', NULL, NULL, '2025-11-17 00:26:22', '2025-12-29 17:54:02', NULL, NULL),
(5, 'Pendataan lapangan survei SKSPPI', NULL, 'templates/T5iC2x70OQwx3PEnAJHn9zfgAANWjGjsYnXPmdCf.docx', NULL, NULL, '2025-11-17 00:26:53', '2025-12-29 17:53:52', NULL, NULL),
(6, 'Pendataan Lapangan Updating Direktori lnprt di kab/kota', NULL, 'templates/pgsXJ4MOcghLaK4N51Owel3rnGWYo5m6aDNka6bU.docx', NULL, NULL, '2025-11-23 19:49:29', '2025-12-29 17:53:42', NULL, NULL),
(7, 'Pengolahan Survei Penyusunan Disagregasi pmtb di kab/kota (non pns)', NULL, 'templates/qS4Mrd5mQiuN3fornY6hVi1l8ohH9Gd5AdZ8Wgfr.docx', NULL, NULL, '2025-11-23 19:50:14', '2025-12-29 17:53:32', NULL, NULL),
(8, 'Pengolahan Survei SKPS', NULL, 'templates/CGy8dxJn82g3wTRwwaGVE23djMPqM2r2JTLw6gUa.docx', NULL, NULL, '2025-11-23 19:51:20', '2025-12-29 17:53:23', NULL, NULL),
(9, 'Pendataan Lapangan Survei Khusus Neraca Produksi', NULL, 'templates/TwFtN0Eu5wRg43g7WMchnagTR7KdzMqk1yyzQm8R.docx', NULL, NULL, '2025-11-23 19:52:47', '2025-12-29 17:53:13', NULL, NULL),
(10, 'Pendataan Lapangan Survei sktnp barang', NULL, 'templates/aDdu3jHCjdeIO3iwnDnblAblF9GMjKUHhKvJpv0p.docx', NULL, NULL, '2025-11-23 19:55:17', '2025-12-29 17:53:02', NULL, NULL),
(11, 'Pendataan Lapangan Survei SKTNP Jasa', NULL, 'templates/i4ZfntY2LGJTdk1sftsEvRVlmvtDMXlH5qDFYvVw.docx', NULL, NULL, '2025-11-23 19:56:38', '2025-12-29 17:52:52', NULL, NULL),
(12, 'Pengolahan Survei SKNP Barang', NULL, 'templates/SEfJZ9YPnuxKrsB2xozQmE0PAptreyuZV1oA9r4d.docx', NULL, NULL, '2025-11-23 19:57:26', '2025-12-29 17:52:37', NULL, NULL),
(13, 'Pengolahan Survei SKTNP Barang', NULL, 'templates/0JQmILmX2X4CgtQZR7W2Oj9IgtUOfnIGOgJtidWk.docx', NULL, NULL, '2025-11-23 19:59:16', '2025-12-29 17:52:27', NULL, NULL),
(14, 'Pengolahan Survei SKTNP Jasa', NULL, 'templates/qPvxR3HDVFSoqCCHK2FIROUjaq8DNRIVuJYXRfrA.docx', NULL, NULL, '2025-11-23 20:00:02', '2025-12-29 17:50:49', NULL, NULL),
(15, 'Pendataan Lapangan Survei Jasa Penunjang Angkutan (Pergudangan dan Kurir)', NULL, 'templates/Slou5Ym6TmaBNBRVYrisFfcKHD9Y4Mb9MLW3vqWw.docx', NULL, NULL, '2025-11-23 20:00:27', '2025-12-29 17:50:38', NULL, NULL),
(16, 'Pendataan Lapangan Survei Perdagangan Barang Domestik', NULL, 'templates/dDXvnA264PvIKQyJuiKiR3L8Mpn5X71F6jDaMer3.docx', NULL, NULL, '2025-11-23 20:02:13', '2025-12-29 17:50:27', NULL, NULL),
(17, 'Pendataan Lapangan Survei Pola Distribusi Barang', NULL, 'templates/dUjFtX4drJCvRtjjgSp7jHGpAlhiZ4x1OGQSWsFx.docx', NULL, NULL, '2025-11-23 20:04:45', '2025-12-29 17:50:15', NULL, NULL),
(18, 'Pendataan Lapangan Survei Pola Usaha Non Pertanian', NULL, 'templates/SzFcCHxK87gNfACHC6CbI1uWDeMLP2F7kMMEVp10.docx', NULL, NULL, '2025-11-23 20:05:06', '2025-12-29 17:50:04', NULL, NULL),
(19, 'Pengolahan Survei Perdagangan Barang Domestik', NULL, 'templates/NUkiAyQZ6h69iilWZ9YDS7AQn6DYPBFvcheS75qi.docx', NULL, NULL, '2025-11-23 20:07:47', '2025-12-29 17:49:53', NULL, NULL),
(20, 'Pengolahan Survei Pola Distribusi Barang', NULL, 'templates/CYcw0yjkPDRHzkCei1FO9ZeU96SBd5mhK5Vwivp5.docx', NULL, NULL, '2025-11-23 20:08:48', '2025-12-29 17:49:40', NULL, NULL),
(21, 'Pengolahan Survei Pola Usaha Non Pertanian', NULL, 'templates/79eV9c5WBl8oIJER7bWFgAzyqv0Yrr4DRl8nr61y.docx', NULL, NULL, '2025-11-23 20:09:06', '2025-12-29 17:49:29', NULL, NULL),
(22, 'Pengolahan Peta dan Muatan', NULL, 'templates/iB4lWWoSAjSfegsQIB1JUHoRiPTebg4mtXVeQO0N.docx', NULL, NULL, '2025-11-23 20:09:39', '2025-12-29 17:49:19', NULL, NULL),
(23, 'Pemeriksa Lapangan (Non Organik)', NULL, 'templates/3qcBeQXLm1OHqb2jy9cWwiPZ4kf01FfbILIKVzgg.docx', NULL, NULL, '2025-11-23 20:17:32', '2025-12-29 17:49:09', NULL, NULL),
(24, 'Pemeriksa Lapangan (Organik)', NULL, 'templates/hAybrGrgUJ10vumuz2ZsaGjvDtQ32SFsL2Xh5TSZ.docx', NULL, NULL, '2025-11-23 20:17:54', '2025-12-29 17:48:51', NULL, NULL),
(25, 'Pendataan Lapangan (Pemetaan )', NULL, 'templates/N9MYF9Uoc7Scmt6SGAmfG7JDbSOxQ5FLGX4JmZhA.docx', NULL, NULL, '2025-11-23 20:59:58', '2025-12-29 17:48:39', NULL, NULL),
(26, 'Pengolahan Peta dan Muatan', NULL, 'templates/M53fcles3b9Sa1U4f74N4JdFIavc4IXHLJ0QxAOb.docx', NULL, NULL, '2025-11-23 21:00:38', '2025-12-29 17:48:26', NULL, NULL),
(27, 'Updating Direktori Usaha/Perusahaan Ekonomi Lanjutan', NULL, 'templates/kZe6btc6ombGCw2dTbObv9lPxhWLlVU0BzVgD2RS.docx', NULL, NULL, '2025-11-23 21:03:33', '2025-12-29 17:48:12', NULL, NULL),
(28, 'Pendataan Lapangan Survei Harga Kemahalan Konstruksi', NULL, 'templates/bO63FxApA2jrztLF76V3W1LOiVmWTe5Vmeq04WF3.docx', NULL, NULL, '2025-11-23 21:05:26', '2025-12-29 17:47:57', NULL, NULL),
(29, 'Pendataan Lapangan Survei Harga Konsumen Perdesaan (HKD)', NULL, 'templates/nJjsOCc9zmAtlh12LTOHiXm5bNgjXyxbJybEITqZ.docx', NULL, NULL, '2025-11-23 21:47:05', '2025-12-29 17:47:43', NULL, NULL),
(30, 'Pendataan Lapangan Survei Harga Perdagangan Besar', NULL, 'templates/Ts9s2vcnkyl62Ao1HDjitcX5TvZvLr4QeqCCheFx.docx', NULL, NULL, '2025-11-23 21:47:17', '2025-12-29 17:47:28', NULL, NULL),
(31, 'Pendataan Lapangan Survei Harga Produsen Identifikasi Komoditas Utama', NULL, 'templates/xqQQgvF0xbKRzt3Bcz4xVzlwtK7vQslQkoTnDJgT.docx', NULL, NULL, '2025-11-23 21:47:41', '2025-12-29 17:47:15', NULL, NULL),
(32, 'Pendataan Papangan Survei Harga Produsen Perdesaan (HD)', NULL, 'templates/QBktT6GkSJdzAy7CCTKB2jtEfExXnY9gfmno9TGZ.docx', NULL, NULL, '2025-11-23 21:47:52', '2025-12-29 17:47:04', NULL, NULL),
(33, 'Pendataan Lapangan Survei Harga Produsen Sektor Industri Pengolahan dan Sektor Pertambangan dan Penggalian (HP)', NULL, 'templates/uIDXvV3hy6AsPdcDf3gAYFV3D44t59cdYoSDDbUt.docx', NULL, NULL, '2025-11-23 21:48:09', '2025-12-29 17:46:53', NULL, NULL),
(34, 'Pendataan Lapangan Survei Harga Produsen Sektor Jasa (HPJ)', NULL, 'templates/FFpmp82W2EF5r0zbacfChV8tRIZeAagguf3Cg1lY.docx', NULL, NULL, '2025-11-23 21:48:19', '2025-12-29 17:46:33', NULL, NULL),
(35, 'Pendataan Lapangan Survei Harga Produsen Sektor Pertanian (HPT)', NULL, 'templates/qQlBlR7Hq63OVviGT6Ec4wAW13TzVqChRMU0cJUS.docx', NULL, NULL, '2025-11-23 21:48:29', '2025-12-29 17:46:21', NULL, NULL),
(36, 'Pendataan Lapangan Survei Kesejahteraan Petani', NULL, 'templates/yc8Zt2twuDJNa6KykZa1Cf2AcIy99fEqVqw4kV0R.docx', NULL, NULL, '2025-11-23 21:48:40', '2025-12-29 17:46:08', NULL, NULL),
(37, 'Pendataan Lapangan Updating Survei Kesejahteraan Petani', NULL, 'templates/Vl5qW1arpbzKLIW52ooK124DN0xWCkmeOPm0lUz3.docx', NULL, NULL, '2025-11-23 21:48:52', '2025-12-29 17:45:55', NULL, NULL),
(38, 'Pengolahan Survei Harga Kemahalan Konstruksi', NULL, 'templates/BwRZ1YAn6lcJkyBaGlrPOQwfpYE0RYfZmpDuwMNq.docx', NULL, NULL, '2025-11-23 21:49:03', '2025-12-29 17:45:42', NULL, NULL),
(39, 'Pengolahan Survei Harga Konsumen Perdesaan (HKD)', NULL, 'templates/Ll0jO6jhDRBktVIFfXDz5HHGIbH8m83EszfSJ9TY.docx', NULL, NULL, '2025-11-23 21:49:17', '2025-12-29 17:45:29', NULL, NULL),
(40, 'Pengolahan Survei Harga Perdagangan Besar', NULL, 'templates/1S65yx5Y4oCO4YnlGB7d6imfyPNQNpNKBBe3XchS.docx', NULL, NULL, '2025-11-23 21:49:30', '2025-12-29 17:45:16', NULL, NULL),
(41, 'Pengolahan Survei Harga Produsen Perdesaan (HD)', NULL, 'templates/7Eqe8nOOQJhCOUDPmJxV6YzAP9d7PLMXHfIyP8aJ.docx', NULL, NULL, '2025-11-23 21:49:49', '2025-12-29 17:45:00', NULL, NULL),
(42, 'Pengolahan Survei Harga Produsen Sektor Industri Pengolahan dan Sektor Pertambangan dan Penggalian (HP)', NULL, 'templates/FszQTCC5WqbArOzzjkvsLENMKa5P5d8AwMzlqUSR.docx', NULL, NULL, '2025-11-23 21:49:59', '2025-12-29 17:44:47', NULL, NULL),
(43, 'Pengolahan Survei Harga Produsen Sektor Jasa (HPJ)', NULL, 'templates/P9QT6MpV9ep3kYRHKrBncS9LWSHIBgalyWeXdtWv.docx', NULL, NULL, '2025-11-23 21:50:09', '2025-12-29 17:44:36', NULL, NULL),
(44, 'Pengolahan Survei Harga Produsen Sektor Pertanian (HPT)', NULL, 'templates/lqujFvAJvOQRUrLr5VKyS1jSkfTIPvbdOaYA9bAL.docx', NULL, NULL, '2025-11-23 21:50:23', '2025-12-29 17:44:04', NULL, NULL),
(45, 'Pengolahan Survei Kesejahteraan Petani', NULL, 'templates/OQeXaH46TJoMP9fua0fnrvKDxisCi6u6Cut6V2it.docx', NULL, NULL, '2025-11-23 21:50:34', '2025-12-29 17:43:43', NULL, NULL),
(46, 'Pengolahan Updating Survei Kesejahteraan Petani', NULL, 'templates/g5MjbOdKAb6OJNuYCKP2gE0BbknGeSf2wI5pP0LH.docx', NULL, NULL, '2025-11-23 21:50:44', '2025-12-29 17:43:28', NULL, NULL),
(47, 'Pendataan Lapangan Listing Survei IMK Triwulanan', NULL, 'templates/8mdU9RJktAqOkhlzRNUb1bgo4eCditovBK1w6oUF.docx', NULL, NULL, '2025-11-23 22:04:10', '2025-12-29 17:43:12', NULL, NULL),
(48, 'Pendataan Lapangan Pemutakhiran Direktori Perusahaan Awal (DPA)', NULL, 'templates/gKIg08x1rfDG2d2dkLZIedj4ivPYqBw78t5thclY.docx', NULL, NULL, '2025-11-23 22:04:21', '2025-12-29 17:42:56', NULL, NULL),
(49, 'Pendataan Lapangan Survei Captive Power', NULL, 'templates/24sAVCLs2V9hzI8IqRyXZuYMZWBhVgiKrDIFVwFi.docx', NULL, NULL, '2025-11-23 22:04:32', '2025-12-29 17:42:34', NULL, NULL),
(50, 'Pendataan Lapangan Survei IMK Tahunan', NULL, 'templates/Kig0zldTJBfzoAzQhy6Cg2Xjzig6v2pYbxr7jGhm.docx', NULL, NULL, '2025-11-23 22:05:03', '2025-12-29 17:42:17', NULL, NULL),
(51, 'Pendataan Lapangan Survei IMK Triwulanan', NULL, 'templates/ijrzH6vProHaCJ9Nie3fQlbmIRhDWresnRizpLB2.docx', NULL, NULL, '2025-11-23 22:05:18', '2025-12-29 17:42:01', NULL, NULL),
(52, 'Pendataan Lapangan Survei Perusahaan Konstruksi Tahunan', NULL, 'templates/3htK8Bthhr1ICaHQxmoqoIc3Bu3CUsB46vVDYf54.docx', NULL, NULL, '2025-11-23 22:05:32', '2025-12-29 17:41:45', NULL, NULL),
(53, 'Pendataan Lapangan Survei Perusahaan Konstruksi Triwulanan', NULL, 'templates/PiEtm1B8uAVtX7IxjiBLtuCcW17vxepRa2yT9bvb.docx', NULL, NULL, '2025-12-03 05:04:06', '2025-12-29 17:41:28', NULL, NULL),
(54, 'Pendataan Lapangan Survei Tahunan Perusahaan Air Bersih', NULL, 'templates/xx5a8dlhCtrGNQaEw9Qcd6VsoqETd9s8sBkJIyJ7.docx', NULL, NULL, '2025-12-03 05:04:43', '2025-12-29 17:41:12', NULL, NULL),
(55, 'Pendataan Lapangan Survei Industri Besar dan Sedang (IBS) Bulanan', NULL, 'templates/uRELwkWqNPF9Hws4sb96IAUEhl4fHWR0x1fAXefw.docx', NULL, NULL, '2025-12-03 05:04:59', '2025-12-29 17:40:58', NULL, NULL),
(56, 'Pendataan Lapangan Survei Industri Besar dan Sedang (IBS) Triwulanan', NULL, 'templates/q9c2IhfSOjWQJFw4WyrBKhoB4NCwvsAv2QZHqkQg.docx', NULL, NULL, '2025-12-03 05:05:15', '2025-12-29 17:40:42', NULL, NULL),
(57, 'Pendataan Lapangan Survei Tahunan Perusahaan Industri Manufaktur', NULL, 'templates/9vBrl40XeJB9FO2ZAEhLUIlcmabAITlKVckeRJ3s.docx', NULL, NULL, '2025-12-03 05:07:02', '2025-12-29 17:40:27', NULL, NULL),
(58, 'Pendataan Lapangan Survei Komoditas', NULL, 'templates/AaPxOeXgjcy6mCku9HJvswnSRE97BgSLbA0OcRHb.docx', NULL, NULL, '2025-12-03 05:07:16', '2025-12-29 17:40:11', NULL, NULL),
(59, 'Pendataan Lapangan Survei Tahunan Perusahaan Penggalian Bahan Industri dan Konstruksi', NULL, 'templates/SSTQLIl3kv2ZGRCrzbYftqFLDVNwelFaDim3CwU6.docx', NULL, NULL, '2025-12-03 05:07:31', '2025-12-29 17:39:55', NULL, NULL),
(60, 'Pendataan Lapangan Survei Tahunan Usaha Penggalian Bahan Industri dan Konstruksi', NULL, 'templates/htVcPdXhPzKoaPO36w6bjBuZA09nyj4XH1NgzC5U.docx', NULL, NULL, '2025-12-03 05:07:48', '2025-12-29 17:39:40', NULL, NULL),
(61, 'Pendataan Lapangan Survei Triwulanan Perusahaan Air Bersih', NULL, 'templates/cU9HZ6IRNwq6fjJ8wXTYOGreEnr5Ql0xtNROYGBN.docx', NULL, NULL, '2025-12-03 05:08:01', '2025-12-29 17:39:26', NULL, NULL),
(62, 'Pendataan Lapangan Survei Triwulanan Perusahaan Penggalian Bahan Industri dan Konstruksi', NULL, 'templates/hgjdVjMSAPxQTjgcgPtsCneTPIDvP3P6ikEQf86T.docx', NULL, NULL, '2025-12-03 05:09:13', '2025-12-29 17:39:14', NULL, NULL),
(63, 'Pendataan Lapangan Survei Vimk24 Triwulanan Triwulan 4', NULL, 'templates/DQpjGDTkGdQoqKdAGJKhFtNaxp40mOcFAAZpSZUy.docx', NULL, NULL, '2025-12-03 05:09:30', '2025-12-29 17:39:01', NULL, NULL),
(64, 'Pendataan Lapangan Updating Direktori Perusahaan Konstruksi', NULL, 'templates/2VtzmXKADckQ2M03OroaJfUTRNdjE04AmY7r9Fp5.docx', NULL, NULL, '2025-12-03 05:10:57', '2025-12-29 17:38:35', NULL, NULL),
(65, 'Pendataan Lapangan Updating Direktori Perusahaan Pertambangan dan Energi', NULL, 'templates/iyrRe8Al0H4SKWQOKSrRf796zcTJAWo4AsrEXXeN.docx', NULL, NULL, '2025-12-03 05:11:13', '2025-12-29 17:38:14', NULL, NULL),
(66, 'pendataan listing Survei IMK Tahunan', NULL, 'templates/YdRLMxFcgvf0VokzJsUnTwQGX0DOSubENNreC1nB.docx', NULL, NULL, '2025-12-03 05:11:28', '2025-12-29 17:37:57', NULL, NULL),
(67, 'Pengolahan Listing Survei IMK Tahunan', NULL, 'templates/F1MUbRdLaZyqBYTqPXICsLkUmYWBJEvbna3XGHPi.docx', NULL, NULL, '2025-12-03 05:19:42', '2025-12-29 17:37:40', NULL, NULL),
(68, 'Pengolahan Listing Survei IMK Triwulanan', NULL, 'templates/IEMCUn4vkqXHIJyt96RBZW7MpBntvsv0XwgG4NAA.docx', NULL, NULL, '2025-12-03 05:19:56', '2025-12-29 17:37:24', NULL, NULL),
(69, 'Pengolahan Survei Captive Power', NULL, 'templates/WSetptpmZctfqb6ZCggEoVzQorr82Ii9juFHEgwZ.docx', NULL, NULL, '2025-12-03 05:21:53', '2025-12-29 17:37:08', NULL, NULL),
(70, 'Pengolahan Survei Captive Power', NULL, 'templates/OCSjnW8AzVMzjQOoqJYULNMijT3dvtGHwHpYv49v.docx', NULL, NULL, '2025-12-03 05:22:44', '2025-12-29 17:36:53', NULL, NULL),
(71, 'Pengolahan Survei IMK Tahunan', NULL, 'templates/9opm134kyiUkFMzoJQtTV0YTb9nThncGgiWEEzQW.docx', NULL, NULL, '2025-12-03 05:23:01', '2025-12-29 17:36:37', NULL, NULL),
(72, 'Pengolahan Survei IMK Triwulanan i - iii', NULL, 'templates/I4ZWdr3csSrfWV9iQGL4BsKUBgwG3nLjAteyChWI.docx', NULL, NULL, '2025-12-03 05:24:02', '2025-12-29 17:36:22', NULL, NULL),
(73, 'Pengolahan Survei Perusahaan Konstruksi Tahunan', NULL, 'templates/EsTJcF2vQEtOhMzlqOTMaTid7UaIYVnjTmRuoQio.docx', NULL, NULL, '2025-12-03 05:28:13', '2025-12-29 17:36:06', NULL, NULL),
(74, 'Pengolahan Survei Perusahaan Konstruksi Triwulanan', NULL, 'templates/ye0CZOnGqLuMA4OQqIJZ6D9RQLG3wluovK9k8Yj3.docx', NULL, NULL, '2025-12-03 05:35:43', '2025-12-29 17:35:51', NULL, NULL),
(75, 'Pengolahan Survei Tahunan Perusahaan Air Bersih', NULL, 'templates/O77MrNYbQWBwdDV8ciytfab3XHVxR6KPp58BuBlM.docx', NULL, NULL, '2025-12-03 05:37:01', '2025-12-29 17:35:34', NULL, NULL),
(76, 'Pengolahan Survei Tahunan Perusahaan Penggalian Bahan Industri dan Konstruksi', NULL, 'templates/6uFpbw8NkYXCLnZo7mSPZFRlVyOTTcjL1pKrwRpt.docx', NULL, NULL, '2025-12-03 05:37:17', '2025-12-29 17:35:14', NULL, NULL),
(77, 'Pengolahan Survei Tahunan Usaha Penggalian Bahan Industri dan Konstruksi', NULL, 'templates/48fgxPj3gNavpwRAaeCePWdpwdVxmjGcGYmz08ck.docx', NULL, NULL, '2025-12-03 05:37:30', '2025-12-29 17:34:53', NULL, NULL),
(78, 'Pengolahan Survei Triwulanan Perusahaan Air Bersih', NULL, 'templates/7teT0oFcLE5T0b3BPIBfoALmRAQquvKZOKlNkbvo.docx', NULL, NULL, '2025-12-03 05:39:43', '2025-12-29 17:34:35', NULL, NULL),
(79, 'Pengolahan Survei Triwulanan Perusahaan Penggalian Bahan Industri dan Konstruksi', NULL, 'templates/b0LgtjHGogImMizWm6EFXVGf591P2tRUgaVfaprR.docx', NULL, NULL, '2025-12-03 05:42:09', '2025-12-29 17:34:17', NULL, NULL),
(80, 'Pengolahan survei vimk24 Triwulanan iv', NULL, 'templates/WKjJj97Gy3IFNczG3Ow3BuqPVDZtclzG5vzdpJPd.docx', NULL, NULL, '2025-12-03 05:42:22', '2025-12-29 17:33:57', NULL, NULL),
(81, 'Pengolahan Updating Direktori Perusahaan Konstruksi', NULL, 'templates/XUMyQbhJ8E4IoRLy8zmQmaKfoR5IhjRRO3TiCeqk.docx', NULL, NULL, '2025-12-03 05:42:34', '2025-12-29 17:33:40', NULL, NULL),
(82, 'Pengolahan Updating Direktori Perusahaan Pertambangan dan Energi', NULL, 'templates/FTORpTpPv7C6rr3qoWn9T5p2PJOb5bnLRf2RuHjy.docx', NULL, NULL, '2025-12-03 05:44:23', '2025-12-29 17:33:23', NULL, NULL),
(83, 'pemeriksaan Lapangan (Sakernas Agustus non organik)', NULL, 'templates/6O0zSLn9LGuR0KXjgPxDTTWbDNeAEqqTBEqz9L2z.docx', NULL, NULL, '2025-12-03 05:44:38', '2025-12-29 17:32:53', NULL, NULL),
(84, 'pemeriksaan Lapangan Updating Listing BS (Sakernas Agustus non organik)', NULL, 'templates/wGn50aMkylC13UeI3f4OwKG8lKZPacea8uXQPBsF.docx', NULL, NULL, '2025-12-03 05:44:48', '2025-12-29 17:32:21', NULL, NULL),
(85, 'Pendataan Lapangan (Sakernas Agustus)', NULL, 'templates/QbJIgIBbUotAkOi5FL6uB7FmJuiuzkch39hCScgN.docx', NULL, NULL, '2025-12-03 05:45:00', '2025-12-29 17:32:07', NULL, NULL),
(86, 'Pendataan Lapangan (Sakernas Februari)', NULL, 'templates/VTNAr1W0JDSNrigDUzG4AavpnStIJw2QUcaakTW7.docx', NULL, NULL, '2025-12-03 05:45:17', '2025-12-29 17:31:52', NULL, NULL),
(87, 'Pendataan Lapangan (Sakernas Mei)', NULL, 'templates/mxy1EYz0jqNzxJkyxYCzNOtNWy7zOKoWCNaIZTs2.docx', NULL, NULL, '2025-12-03 05:45:32', '2025-12-29 17:31:35', NULL, NULL),
(88, 'Pendataan Lapangan (Sakernas November)', NULL, 'templates/HdLZIZS9iWltq5omMFR8eDSLjaKlNHRN2VEzbpGk.docx', NULL, NULL, '2025-12-03 05:45:48', '2025-12-29 17:31:20', NULL, NULL),
(89, 'Pendataan Lapangan Updating Listing BS (Sakernas Agustus)', NULL, 'templates/VmFhVuBIgj4PuLLN7soZD20fscqbJzd3Rdo30i1c.docx', NULL, NULL, '2025-12-03 05:46:00', '2025-12-29 17:31:06', NULL, NULL),
(90, 'Pendataan Lapangan Updating Listing BS (Sakernas Februari)', NULL, 'templates/Yr3vUQa7o5unhYkqxetJusAdZlAxLxqQInnimFLM.docx', NULL, NULL, '2025-12-03 05:46:14', '2025-12-29 17:30:52', NULL, NULL),
(91, 'Pendataan Lapangan Updating Listing BS (Sakernas Mei)', NULL, 'templates/LxG6v8dK6izYUYS3QqjjWQKDG4SxYGPSQ7aMvoiJ.docx', NULL, NULL, '2025-12-03 05:46:31', '2025-12-29 17:30:38', NULL, NULL),
(92, 'Pendataan Lapangan Updating Listing BS (Sakernas November)', NULL, 'templates/Ltz7EPZJ2NAsLRSCSywLHmNU8G76AeXHdZqpuM89.docx', NULL, NULL, '2025-12-03 05:46:46', '2025-12-29 17:30:22', NULL, NULL),
(93, 'Pemeriksaan Lapangan CAPI (SUPAS 2025)', NULL, 'templates/Ov4UFtmmGK9gH4yhCHGCeYYL4zS7EJlhpRLjmzSN.docx', NULL, NULL, '2025-12-03 05:47:17', '2025-12-29 17:30:07', NULL, NULL),
(94, 'Pemeriksaan Lapangan Updating Listing BS (SUPAS 2025)', NULL, 'templates/WcKqGRt5hBxL5JuvU50slaQa7lWfqus9B0gmTaI2.docx', NULL, NULL, '2025-12-03 05:47:39', '2025-12-29 17:29:46', NULL, NULL),
(95, 'Pendataan Lapangan CAPI (SUPAS 2025)', NULL, 'templates/BO0A1ECUYjVjSr0YqB8AmYNk7MGyfTjfDDxWc6W0.docx', NULL, NULL, '2025-12-03 05:47:50', '2025-12-29 17:29:21', NULL, NULL),
(96, 'Pendataan Lapangan Updating Listing BS (SUPAS 2025)', NULL, 'templates/9EgA6OFuEAic47zLhUGYmNjRBc4UTLcPp0Vyjez0.docx', NULL, NULL, '2025-12-03 05:48:01', '2025-12-29 17:29:05', NULL, NULL),
(97, 'Pengolahan Lapangan (SUPAS 2025)', NULL, 'templates/39jrVfveGefw4mpYziD970qH62d7IJ9VBwJMt0QT.docx', NULL, NULL, '2025-12-03 05:48:12', '2025-12-29 17:28:46', NULL, NULL),
(98, 'Pengolahan Lapangan Updating Listing (SUPAS 2025)', NULL, 'templates/NT02GAFMtdHlrx6GG2FK65SZMfJawq9qH9PbCe1X.docx', NULL, NULL, '2025-12-03 05:48:23', '2025-12-29 17:28:32', NULL, NULL),
(99, 'Pemeriksaan Lapangan (Susenas Maret 2025)', NULL, 'templates/hAqoUjbAATwZOKXlwpwHUleduJwOonJgmaO8U9Fw.docx', NULL, NULL, '2025-12-03 05:48:39', '2025-12-29 17:28:11', NULL, NULL),
(100, 'Pemeriksaan Updating Listing (Susenas Maret 2025)', NULL, 'templates/KUgKuT2wBNZxOwEaCmPzELQQVcxdPCcIvgzrxMCZ.docx', NULL, NULL, '2025-12-03 05:48:53', '2025-12-29 17:27:55', NULL, NULL),
(101, 'Pendataan Lapangan ( Survei Sosial Ekonomi Rumah Tangga Triwulanan (Seruti))', NULL, 'templates/SmZYHRMpnM1Cw4k0N4fKJpuKKWlFXhuN7VYi89kj.docx', NULL, NULL, '2025-12-03 05:50:53', '2025-12-29 17:27:36', NULL, NULL),
(102, 'Pendataan Lapangan (Seruti terintegrasi Susenas)', NULL, 'templates/43MzQzmawkrIcmX5PxFrmwiSgJUCW2xP6yl5YLKz.docx', NULL, NULL, '2025-12-03 05:51:12', '2025-12-29 17:27:11', NULL, NULL),
(103, 'Pendataan Lapangan (Susenas Maret 2025)', NULL, 'templates/GBQct9cJIiwkmNYqBRNyM8SFSVL1RNrtz0tpU6Q7.docx', NULL, NULL, '2025-12-03 05:52:12', '2025-12-29 17:26:59', NULL, NULL),
(104, 'Pendataan Lapangan (Susenas mkp 2025)', NULL, 'templates/jOW8o8VIjCLpiPsdjgxDlH6aLhUp531iKGi1SNaA.docx', NULL, NULL, '2025-12-03 05:52:24', '2025-12-29 17:26:46', NULL, NULL),
(105, 'Pendataan Lapangan Updating Listing (Susenas Maret 2025)', NULL, 'templates/13e7u6CiL8HUcU0KW6ScO1fV0BaRAOgDwW4Hf5Zx.docx', NULL, NULL, '2025-12-03 05:52:37', '2025-12-29 17:26:34', NULL, NULL),
(106, 'Pendataan Lapangan Updating Listing (Susenas mkp 2025)', NULL, 'templates/6wK1Q9DpoWKdtYiK19dHr4Hk8bSwZ2H6vpwS6meY.docx', NULL, NULL, '2025-12-03 05:53:24', '2025-12-29 17:26:21', NULL, NULL),
(107, 'Pengolahan (Seruti terintegrasi Susenas)', NULL, 'templates/NPWrF0nuJrhLlZF7NSqExBXwd8Wd2KH78i6uLl4p.docx', NULL, NULL, '2025-12-03 05:53:34', '2025-12-29 17:26:08', NULL, NULL),
(108, 'Pendataan Lapangan ( Survei Ekonomi Rumah Tangga Triwulanan (Seruti) terintegrasi Susenas)', NULL, 'templates/2b0VkQPOOPHtvAL5w6fTe6hhxWUc0QR3PTx0bF3q.docx', NULL, NULL, '2025-12-03 05:53:45', '2025-12-29 17:25:55', NULL, NULL),
(109, 'Pengolahan (Survei Ekonomi Rumah Tangga Triwulanan (Seruti) terintegrasi Susenas)', NULL, 'templates/MNsuZKky2XgzF60YDGNGPCcefyW43mizCMeiHELS.docx', NULL, NULL, '2025-12-03 05:53:55', '2025-12-29 17:25:43', NULL, NULL),
(110, 'Pendataan Lapangan ( Survei Ekonomi Rumah Tangga Triwulanan (Seruti))', NULL, 'templates/noM5e3zlj7uiZ98eCU9UOGx35R1MMExT7gOVvwnp.docx', NULL, NULL, '2025-12-04 18:38:04', '2025-12-29 17:25:30', NULL, NULL),
(111, 'Pengolahan (Survei Ekonomi Rumah Tangga Triwulanan (Seruti))', NULL, 'templates/2vlpKtuyDN44YnI4eSkDH5HKlo26CLy40Z9AoJyt.docx', NULL, NULL, '2025-12-04 18:38:18', '2025-12-29 17:25:17', NULL, NULL),
(112, 'Pengolahan (Survei Sosial Ekonomi Rumah Tangga Triwulanan (Seruti))', NULL, 'templates/LXVOTqzZ5tL3unLLsld3yn2VKHiYmsX7aO0VN8uB.docx', NULL, NULL, '2025-12-04 18:38:30', '2025-12-29 17:25:04', NULL, NULL),
(113, 'Pengolahan (Susenas Maret 2025)', NULL, 'templates/hYHkWnlQ6NHNDQrVRXkQAphyBVxyrUmNGTdnVJtC.docx', NULL, NULL, '2025-12-04 18:38:43', '2025-12-29 17:24:52', NULL, NULL),
(114, 'Pengolahan (Susenas mkp 2025)', NULL, 'templates/3TGLh0pLi61JvYKV246SQMKit7SkRq4823UTo9LX.docx', NULL, NULL, '2025-12-04 18:38:58', '2025-12-29 17:24:34', NULL, NULL),
(115, 'Pengolahan Updating Listing (Susenas Maret 2025)', NULL, 'templates/gzw4HEJfcCfHSCUOZ8icqAyXZYadVZqqlKw4lWcR.docx', NULL, NULL, '2025-12-04 18:39:10', '2025-12-29 17:24:17', NULL, NULL),
(116, 'Pengolahan Updating Listing (Susenas mkp 2025)', NULL, 'templates/W9SDe4V8kjxqgxsot3QVOli93IC6FqAc8ridqoIB.docx', NULL, NULL, '2025-12-04 18:39:24', '2025-12-29 17:24:05', NULL, NULL),
(117, 'Pendataan Lapangan Susenas September 2025', NULL, 'templates/xvcaSFy9ciBbLJ0vVMmDTROqQzlMvk3RjfuTRWmJ.docx', NULL, NULL, '2025-12-04 18:39:36', '2025-12-29 17:23:53', NULL, NULL),
(118, 'Pendataan Seruti Triwulan 3', NULL, 'templates/BIld7NsSCuYi73f65RR2P787LCZhNl6xz3VzW70f.docx', NULL, NULL, '2025-12-04 18:39:49', '2025-12-29 17:23:40', NULL, NULL),
(119, 'Pengolahan Susenas September 2025', NULL, 'templates/M9PhTORJ0Io9R231pEIMFzPS4FUfbpMNi38T27Fm.docx', NULL, NULL, '2025-12-04 18:40:04', '2025-12-29 17:23:27', NULL, NULL),
(120, 'Pengolahan Seruti Triwulan 3', NULL, 'templates/iEvYPHIHdXvDMEL3mCo6oRb8iktOPxAAZi3KLrOt.docx', NULL, NULL, '2025-12-04 18:40:20', '2025-12-29 17:23:15', NULL, NULL),
(121, 'Pendataan Lapangan (SPAK)', NULL, 'templates/2FJ4JhrNgmRqF6E6bzQ5Plopm9NhXUcx8xW12JqP.docx', NULL, NULL, '2025-12-04 18:40:31', '2025-12-29 17:23:03', NULL, NULL),
(122, 'Pendataan Lapangan Pemutakhiran Data Perkembangan Desa', NULL, 'templates/rCTMo66cI2PIXYy02CF5tQ6FIHJhW80IK1obx0Dy.docx', NULL, NULL, '2025-12-04 18:40:43', '2025-12-29 17:22:38', NULL, NULL),
(123, 'Pendataan Lapangan Survei Bidang Jasa Pariwisata (VHTL)', NULL, 'templates/32ZyZa1RTmnD7AiVAKySqhQoKiz6CprmA9JKGSoR.docx', NULL, NULL, '2025-12-04 18:40:54', '2025-12-29 17:22:24', NULL, NULL),
(124, 'Pendataan Lapangan Survei Bidang Jasa Pariwisata (VHTS)', NULL, 'templates/p2fwllaRPHPEBUHCs0hp3Fl2SPEGpuvR2AoEoxPT.docx', NULL, NULL, '2025-12-04 19:02:35', '2025-12-29 17:22:06', NULL, NULL),
(125, 'Pendataan Lapangan Survei Usaha/PerUsahaan Penyedia Jasa Akomodasi Bulanan', NULL, 'templates/KjWMGTqlCXy1bZvLPpo0VdcmbayemToEQD4gDmG9.docx', NULL, NULL, '2025-12-04 19:02:48', '2025-12-29 17:21:56', NULL, NULL),
(126, 'Pendataan Lapangan Survei Usaha/PerUsahaan Penyedia Jasa Akomodasi Tahunan', NULL, 'templates/ijjla7vVxfvhPULwYj38ypTklGaSYPZuPYdi59tI.docx', NULL, NULL, '2025-12-04 19:03:26', '2025-12-29 17:21:44', NULL, NULL),
(127, 'Pendataan Lapangan Survei Bidang Usaha Pariwisata (Survei Objek Daya Tarik Wisata (VDTW)', NULL, 'templates/XXEzrHJGvKOG9yUT9dYNjQjq0lU9lYu3w55olvCc.docx', NULL, NULL, '2025-12-04 19:03:40', '2025-12-29 17:21:33', NULL, NULL),
(128, 'Pendataan Lapangan Survei Bidang Usaha Pariwisata (Updating Direktori Survei Usaha Penyedia Jasa Pariwisata)', NULL, 'templates/9mgC9ls5c6LdtZHa6INZfUHhYbKtPWGis9fXXBAz.docx', NULL, NULL, '2025-12-04 19:03:52', '2025-12-29 17:21:21', NULL, NULL),
(129, 'Pendataan Lapangan Survei Lembaga Keuangan Koperasi Simpan Pinjam', NULL, 'templates/1luIH1sQd6B5HPsM7H3LQWIp7DriCZRJ284JzLpM.docx', NULL, NULL, '2025-12-04 19:04:46', '2025-12-29 17:21:09', NULL, NULL),
(130, 'Pendataan Lapangan Survei Perusahaan/Usaha Penyedia Makan Minum UMB', NULL, 'templates/wMeWnHzH9oB9XA2A9weHdnf6pki6ChgFPsCSmyan.docx', NULL, NULL, '2025-12-04 19:05:03', '2025-12-29 17:20:59', NULL, NULL),
(131, 'Pendataan Lapangan Survei Statistik Badan Usaha dan Pasar Modal', NULL, 'templates/XT8XcG9zaCwaMNkv0p1TtvCWfKZQjtXXsIEizbXl.docx', NULL, NULL, '2025-12-04 19:05:17', '2025-12-29 17:20:47', NULL, NULL),
(132, 'Pendataan Lapangan Survei Statistik Keuangan Pemerintah Desa (K3)', NULL, 'templates/JQY0d48A9umPYNL6uf7KwoWLPQ89K3vvgxKkJxwc.docx', NULL, NULL, '2025-12-04 19:05:36', '2025-12-29 17:20:37', NULL, NULL),
(133, 'Pendataan Lapangan Listing Survei Konsumsi Bahan Pokok Non Rumahtangga', NULL, 'templates/wK5KRK1imgQWOnRWuYpBJjIKp7ZEyeUpoSkUvIop.docx', NULL, NULL, '2025-12-04 19:05:49', '2025-12-29 17:20:28', NULL, NULL),
(134, 'Pendataan Lapangan Survei Konsumsi Bahan Pokok Non Rumahtangga UMK (VBPNRT\'25 )', NULL, 'templates/J2xvQXxwoPL13u8z6pnkjCMchjOdKHUcnf3qQ11w.docx', NULL, NULL, '2025-12-04 19:06:05', '2025-12-29 17:16:30', NULL, NULL),
(135, 'Pendataan Lapangan Survei Konsumsi Bahan Pokok Non Rumahtangga UMB (VBPNRT\'25 )', NULL, 'templates/i3e9pqAoL66QSa2l6raLetRe5GCCkfTP6bkBTSPE.docx', NULL, NULL, '2025-12-04 19:06:39', '2025-12-29 17:16:19', NULL, NULL),
(136, 'Pengolahan Survei BUMD', NULL, 'templates/kAbGftePfzO8aXYo2ojsY3IRzxHve2VCEKFkXCHa.docx', NULL, NULL, '2025-12-04 19:06:52', '2025-12-29 17:16:10', NULL, NULL),
(137, 'Pengolahan Survei Keuangan Desa', NULL, 'templates/YKZlbU7ri044GfZKRYOX9wwpxn0ZLIwKzQ3enjKK.docx', NULL, NULL, '2025-12-04 19:07:05', '2025-12-29 17:15:59', NULL, NULL),
(138, 'Pengolahan Survei SLK Koperasi Simpan Pinjam', NULL, 'templates/79NGDm1RbWLJl2s0AnCUtoTnZSb6zJAX8lhJ7z6G.docx', NULL, NULL, '2025-12-04 19:07:17', '2025-12-29 17:15:49', NULL, NULL),
(139, 'Pengolahan Survei vdtw (non pns)', NULL, 'templates/xfiU6GCrNZf6P1oovzERIhv10VOqFp3PjQ6LkyQH.docx', NULL, NULL, '2025-12-04 19:07:28', '2025-12-29 17:15:36', NULL, NULL),
(140, 'Pengolahan Survei vhtl (non pns)', NULL, 'templates/myrN6ADFLxJjfDWo2ooYlRrdPLHpZwUMekxyHUdT.docx', NULL, NULL, '2025-12-04 19:07:40', '2025-12-29 17:15:24', NULL, NULL),
(141, 'Pengolahan Survei vhts (non pns)', NULL, 'templates/Jmv8XGjOegBrJrIGAwqvNNO0zZ4mkRLrvO9guOdN.docx', NULL, NULL, '2025-12-04 19:07:53', '2025-12-29 17:15:09', NULL, NULL),
(142, 'Pengolahan Survei vrest umb (non pns)', NULL, 'templates/g5SdoxTUC3R0wGigN4v3denhcpvZwEbDavrzw4hM.docx', NULL, NULL, '2025-12-04 19:08:12', '2025-12-29 17:14:58', NULL, NULL),
(143, 'Pendataan Lapangan Listing Survei E-Commerce', NULL, 'templates/JP7wBlJ956gpf0nCePd6W0LtEvs5mFGcn4yHsne9.docx', NULL, NULL, '2025-12-04 19:08:25', '2025-12-29 17:14:46', NULL, NULL),
(144, 'Pendataan Lapangan Survei E-Commerce', NULL, 'templates/DH4xaGdE1AQDMicip7z3UzKHfJvvxUIDYXA2RTfP.docx', NULL, NULL, '2025-12-04 19:08:51', '2025-12-29 17:13:41', NULL, NULL),
(145, 'Pengolahan Listing Survei E-Commerce', NULL, 'templates/Zp9w8pllEnKfX3fEw6MZTh3nQJ0tZ5mqAKQvI32X.docx', NULL, NULL, '2025-12-04 19:09:05', '2025-12-29 17:13:32', NULL, NULL),
(146, 'Pengolahan Listing Survei E-Commerce', NULL, 'templates/ep1ckLbi4u63T5cCIzUeZglmzyc8oAlo7ffhBMaH.docx', NULL, NULL, '2025-12-04 19:10:01', '2025-12-29 17:13:23', NULL, NULL),
(147, 'Pendataan Lapangan Survei Pelabuhan Perikanan dan Tempat Pelelangan Ikan', NULL, 'templates/zBJipPcB4pR2rTioDhg0teQV8u2eQ7MUuo6loYbU.docx', NULL, NULL, '2025-12-04 19:10:14', '2025-12-29 17:13:12', NULL, NULL),
(148, 'Pendataan Lapangan Survei Pemotongan Ternak Bulanan', NULL, 'templates/77XKyU27ohMmLQB1uqP0te7X19fM8upTxGcc2Zpd.docx', NULL, NULL, '2025-12-04 19:10:25', '2025-12-29 17:12:35', NULL, NULL),
(149, 'Pendataan Lapangan Survei Perusahaan Budidaya Ikan', NULL, 'templates/rw1be28UrYZtzqi97SRMlBeiCACCDmKNNq5dIICm.docx', NULL, NULL, '2025-12-04 19:10:37', '2025-12-29 17:12:26', NULL, NULL),
(150, 'Pendataan Lapangan Survei Perusahaan Kehutanan', NULL, 'templates/ivzTvADeCCnM4lbWIoOGAM7CZcCdeNHhy61KPnX4.docx', NULL, NULL, '2025-12-04 19:10:50', '2025-12-29 17:12:16', NULL, NULL),
(151, 'Pendataan Lapangan Survei Perusahaan Peternakan Tahunan', NULL, 'templates/rzRLTmLsAlSciw4rNgyQWSWFGQrOgZm6HTghZWnf.docx', NULL, NULL, '2025-12-04 19:11:15', '2025-12-29 17:11:28', NULL, NULL),
(152, 'Pendataan Lapangan Survei Kesejahteraan Petani', NULL, 'templates/CF4iwqq6BrMxoyX3wuS9JX6eLJyOPw4F09em9wCQ.docx', NULL, NULL, '2025-12-04 19:11:30', '2025-12-29 17:11:16', NULL, NULL),
(153, 'Pendataan Lapangan ksa jagung', NULL, 'templates/gB9jmQMT9UDKSb6srOJ5sWgX27KkeXzbx2PyqqRy.docx', NULL, NULL, '2025-12-04 19:11:56', '2025-12-29 17:11:04', NULL, NULL),
(154, 'Pendataan Lapangan ksa padi', NULL, 'templates/MGIigtDhHDb2p0RghFEvO6mbPeMthSG0HUIi6WLB.docx', NULL, NULL, '2025-12-04 19:12:09', '2025-12-29 17:10:24', NULL, NULL),
(155, 'Pendataan Lapangan Survei Pertanian Tanaman Pangan/Ubinan', NULL, 'templates/3HpqYXREhEGHrPyHAEdnIdt1MRV6DpWB2h9H8oo6.docx', NULL, NULL, '2025-12-04 19:13:09', '2025-12-29 17:10:15', NULL, NULL),
(156, 'Pendataan Lapangan Updating Survei Pertanian Tanaman Pangan/Ubinan', NULL, 'templates/AsdcaMKPBmMAhj2lpJEGW1LSum2qVyLYkHGqrSsG.docx', NULL, NULL, '2025-12-04 19:13:22', '2025-12-29 17:10:06', NULL, NULL),
(157, 'Pengolahan Survei Pertanian Tanaman Pangan/Ubinan', NULL, 'templates/uhDK9MXsellcuS7gEPhu90Y1f7zDYe47xgn4FdxY.docx', NULL, NULL, '2025-12-04 19:13:36', '2025-12-29 17:09:57', NULL, NULL),
(158, 'Pengolahan Updating Survei Pertanian Tanaman Pangan/Ubinan', NULL, 'templates/ihoVENMbj10x1qL8tQjXgnPpDkvNMo4X8WGH4Ivr.docx', NULL, NULL, '2025-12-04 19:13:44', '2025-12-29 17:09:47', NULL, NULL),
(159, 'Honor Petugas Pendataan Lapangan SKGB -Kering', NULL, 'templates/VgcmlfhyWRNKyBtDi9piLp2ULUL4KAuVktaJuQIK.docx', NULL, NULL, '2025-12-04 19:14:15', '2025-12-29 17:09:37', NULL, NULL),
(160, 'Honor Petugas Pendataan Lapangan SKGB -Giling', NULL, 'templates/OuvvUYcd74MbsncqhpGhfkZaT32OiB4aWrcxxy0V.docx', NULL, NULL, '2025-12-04 19:14:34', '2025-12-29 17:09:27', NULL, NULL),
(161, 'Pendataan Lapangan Survei Perusahaan Hortikultura', NULL, 'templates/HmsC5UXPYEBOtMGUry745lHZdXPTrK0jThyr0a5H.docx', NULL, NULL, '2025-12-04 19:14:53', '2025-12-29 17:08:54', NULL, NULL),
(162, 'Pendataan Lapangan Survei Perusahaan Perkebunan Bulanan', NULL, 'templates/FELw0TKavyHSTRgLKM5Leb2CCDoExhTPvADs4L2i.docx', NULL, NULL, '2025-12-04 19:15:05', '2025-12-29 17:08:45', NULL, NULL),
(163, 'Pendataan Lapangan Survei Perusahaan Perkebunan Tahunan', NULL, 'templates/MGDGCWGw6vOgXa0spI9RwgdfR5F16wRn7vvmBXCX.docx', NULL, NULL, '2025-12-04 19:15:16', '2025-12-29 17:08:36', NULL, NULL),
(164, 'Pendataan Lapangan Survei Usaha Hortikultura lainnya', NULL, 'templates/eH526hTwQcLs0ZpHw2tuLuscE7S9U3CSQ4doyQT6.docx', NULL, NULL, '2025-12-04 19:15:30', '2025-12-29 17:08:03', NULL, NULL),
(165, 'Pendataan Lapangan Updating Direktori Perusahaan Pertanian (DPP) dan Direktori Usaha Pertanian Lainnya (DUTL)', NULL, 'templates/O19FCTUuqpQBwswviF59pXpmvoxokaZ1K82rcc6q.docx', NULL, NULL, '2025-12-04 19:15:42', '2025-12-29 17:07:52', NULL, NULL),
(166, 'Pengolahan Survei Perusahaan Hortikultura', NULL, 'templates/OEmF8XidQZ9NcEZO5OuwUTypKIHKdlUATMEkc7n0.docx', NULL, NULL, '2025-12-04 19:15:57', '2025-12-29 17:07:44', NULL, NULL),
(167, 'Pengolahan Survei Perusahaan Perkebunan Tahunan', NULL, 'templates/I4aWbZlFhjo5wOZ0EYCstjBZ9GjqTmIyKzx8RdUI.docx', NULL, NULL, '2025-12-04 19:16:12', '2025-12-29 17:07:37', NULL, NULL),
(168, 'Pengolahan Survei Usaha Hortikultura lainnya', NULL, 'templates/M1jYy3dEAjQolEk81FuKBlGiLxE2UUbSCsSLdIQT.docx', NULL, NULL, '2025-12-04 19:16:31', '2025-12-29 17:07:29', NULL, NULL),
(169, 'Pengolahan Updating Direktori PerUsahaan Pertanian (DPP) dan Direktori Usaha Pertanian Lainnya (DUTL)', NULL, 'templates/nOJVgwD6KGUt6f2QqqtTnos9zaP1K3blVGQH3AU6.docx', NULL, NULL, '2025-12-04 19:16:47', '2025-12-29 17:07:21', NULL, NULL),
(170, 'Pendataan Lapangan Survei Kesejahteraan Petani', NULL, 'templates/rYKkhnRSF09FHTVIQ6EewgoZBNmwRb47JWc6gqC1.docx', NULL, NULL, '2025-12-04 19:17:25', '2025-12-29 17:07:12', NULL, NULL),
(171, 'Pendataan Lapangan Updating Survei Kesejahteraan Petani', NULL, 'templates/BdMSCVgdWUg0la2tiiporWt1DCLnzWV8lCKGjnZB.docx', NULL, NULL, '2025-12-04 19:22:33', '2025-12-29 17:07:04', NULL, NULL),
(172, 'Pengolahan Survei Kesejahteraan Petani', NULL, 'templates/y1dOUXIw0DY5rizi0UcsqdTdBeaUelDFfBKPisuS.docx', NULL, NULL, '2025-12-04 19:22:46', '2025-12-29 17:06:57', NULL, NULL),
(173, 'Pengolahan Updating Survei Kesejahteraan Petani', NULL, 'templates/sljIfO4ZY7YxcVZ62zIhQG7kqO1h8pCBUsWOvUbm.docx', NULL, NULL, '2025-12-04 19:23:00', '2025-12-29 17:06:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_11_03_052000_create_pegawai_table', 1),
(6, '2025_11_03_052530_create_surat_table', 1),
(7, '2025_11_03_063942_create_kegiatan_table', 1),
(8, '2025_11_04_051406_add_template_path_to_kegiatan_table', 2),
(9, '2025_12_03_131758_add_tanggal_to_kegiatan_table', 3),
(10, '2025_12_09_005848_add_tanggal_mulai_selesai_to_kegiatan_table', 4),
(11, '2025_12_09_020812_add_tanggal_mulai_dan_tanggal_selesai_to_surat_table', 5),
(12, '2025_12_09_021907_add_tanggal_surat_to_surat_table', 6),
(13, '2025_12_09_021958_modify_tanggal_nullable_in_surat_table', 7),
(14, '2025_12_23_115449_add_tanggal_surat_to_surat', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `created_at`, `updated_at`) VALUES
(2, 'IR. DWI IRNAWATI', '196808291994022001', '2025-11-16 18:30:07', '2025-11-16 18:30:07'),
(3, 'WAHYUDI', '196902011988031001', '2025-11-16 18:30:29', '2025-11-16 18:30:29'),
(4, 'ASBULLAH', '196911192007011004', '2025-11-16 18:30:41', '2025-11-16 18:30:41'),
(5, 'SYAMSU KADARYONO,SE', '196911291994011001', '2025-11-16 18:30:54', '2025-11-16 18:30:54'),
(6, 'SUTIONO ATIF SUSANTO', '197006112007101001', '2025-11-16 18:31:07', '2025-11-16 18:31:07'),
(7, 'SYAIFUL IMAM AR', '197108091991011001', '2025-11-16 18:31:38', '2025-11-16 18:31:38'),
(8, 'STEPHANUS PRATOMO SEPTYARDI PUTRANTO, S.ST', '197109181994011001', '2025-11-16 18:31:54', '2025-11-16 18:31:54'),
(9, 'AMININ ARIYANTO, SE', '197303011994011001', '2025-11-16 18:32:07', '2025-11-16 18:32:07'),
(10, 'DIDIT PURNANTO', '197303152007011007', '2025-11-16 18:32:21', '2025-11-16 18:32:21'),
(11, 'IRAWAN HERI PRASOJO, S.SOS', '197308021998031000', '2025-11-16 18:34:54', '2025-11-16 18:34:54'),
(12, 'SETIAWAN BUDIYANTO', '197309232009011000', '2025-11-16 18:35:07', '2025-11-16 18:35:07'),
(13, 'DWI WINARNO', '197403141994011001', '2025-11-16 18:35:22', '2025-11-16 18:35:22'),
(14, 'DARNAWI', '197405282007011001', '2025-11-16 18:35:31', '2025-11-16 18:35:31'),
(15, 'ANDY PRISTIAWAN', '197903272001121003', '2025-11-16 18:35:41', '2025-11-16 18:35:41'),
(16, 'VITA WISNANDAYI', '198501082006042001', '2025-11-16 18:35:57', '2025-11-16 18:35:57'),
(17, 'ARIEF ADI SISWANTO', '198110312006041019', '2025-11-16 18:36:10', '2025-11-16 18:36:10'),
(18, 'FAISHOL AMIR, S.Si, M.E.', '198609012011011004', '2025-11-16 18:36:22', '2025-11-16 18:36:22'),
(19, 'ENI SUPRIYANTI, S.ST', '198609192009122004', '2025-11-16 18:36:34', '2025-11-16 18:36:34'),
(20, 'RITZA SEPTIYARINING WAHYU,S.ST', '198709252010122001', '2025-11-16 18:36:45', '2025-11-16 18:36:45'),
(21, 'MARFIADA CANDRA PRASETYA', '198803232008011004', '2025-11-16 18:36:55', '2025-11-16 18:36:55'),
(22, 'Aditiya Esa Prastiyo, A.Md', '198906162012121002', '2025-11-16 18:37:05', '2025-11-16 18:37:05'),
(23, 'MUTIURROHMAN SUCIANTO, S.ST', '199112062014121001', '2025-11-16 18:37:17', '2025-11-16 18:37:17'),
(24, 'SUCI TRIYANINGSIH, SST', '199206262016022001', '2025-11-16 18:37:28', '2025-11-16 18:37:28'),
(25, 'IHYA PUTTY ULINNUHA, A.Md.', '199412012022032016', '2025-11-16 18:37:39', '2025-11-16 18:37:39'),
(26, 'RIBUT HADI CANDRA, SH,MM', '197207081992031004', '2025-11-16 18:37:57', '2025-11-16 18:37:57'),
(27, 'ADITHIYA HAMDANI', '200301212024121002', '2025-11-16 18:38:08', '2025-11-16 18:38:08'),
(28, 'DYAH ANISA PERMATASARI,SE', '198211172006042002', '2025-11-16 18:38:18', '2025-11-16 18:38:18'),
(29, 'NUR ANISA DAMAYANTI, A.Md.Stat.', '199705102022032016', '2025-11-16 18:38:33', '2025-11-16 18:38:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `kegiatan_id` varchar(255) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `nomor_surat`, `kegiatan_id`, `file_path`, `created_at`, `updated_at`, `tanggal_mulai`, `tanggal_selesai`, `tanggal_surat`) VALUES
(82, '12', '2', 'templates/OMaAzB0wBudSJYP71aFcBa3qyuGBDwmnyxPOkYE8.docx', '2025-12-29 06:59:44', '2025-12-29 06:59:44', '2025-12-29', '2025-12-31', '2025-12-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pegawai`
--

CREATE TABLE `surat_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surat_id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_pegawai`
--

INSERT INTO `surat_pegawai` (`id`, `surat_id`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(47, 82, 2, '2025-12-29 06:59:44', '2025-12-29 06:59:44'),
(48, 82, 3, '2025-12-29 06:59:44', '2025-12-29 06:59:44'),
(49, 82, 4, '2025-12-29 06:59:44', '2025-12-29 06:59:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `password`, `remember_token`) VALUES
(2, 'adminbps', '$2y$12$M0K9C26wpzhXvKFvIGHh0eJGrdeUt/z7Acb1ap5bzypaJwKyjmSui', 'NlDWWgw1JZmlnvIZnbWrzt0qyVSDxZTD6gWw8xqGSdXvzy4YqenTbEqGz4tJ'),
(3, 'user', '$2y$12$fCEMNRRqUjEPioe3YLqIe.0UkB5HPRVJV9ROjhCcz5dLKEvAElyS2', NULL),
(5, 'jamalbps', '$2y$12$6kl59n4MTx1OeOs1cVv3sOlRakQN0C1eEfG8WiePmYQweiz8N1EUW', 'FgKeNOBX390sxVxyzK9tmLF20pb6A41ZtoDpFXXIrm52BrErA5k2aYxff6kK');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_nip_unique` (`nip`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `surat_nomor_surat_unique` (`nomor_surat`),
  ADD KEY `kegiatan_id` (`kegiatan_id`);

--
-- Indeks untuk tabel `surat_pegawai`
--
ALTER TABLE `surat_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_surat` (`surat_id`),
  ADD KEY `fk_sp_pegawai` (`pegawai_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip_indeks` (`password`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `surat_pegawai`
--
ALTER TABLE `surat_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_pegawai`
--
ALTER TABLE `surat_pegawai`
  ADD CONSTRAINT `fk_sp_pegawai` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_sp_surat` FOREIGN KEY (`surat_id`) REFERENCES `surat` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
