-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Feb 2023 pada 12.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_bg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_div` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `divisions`
--

INSERT INTO `divisions` (`id`, `name_div`, `created_at`, `updated_at`) VALUES
(1, 'CRO', '2022-04-28 16:50:12', '2022-04-28 16:50:12'),
(2, 'CIT', '2022-04-28 16:50:12', '2022-04-28 16:50:12'),
(3, 'Rutang', '2022-04-28 16:50:12', '2022-04-28 16:50:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_jab` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatans`
--

INSERT INTO `jabatans` (`id`, `name_jab`, `created_at`, `updated_at`) VALUES
(1, 'Pemimpin Cabang', '2022-04-28 16:50:12', '2022-04-28 16:50:12'),
(2, 'Wakil Pemimpin Cabang', '2022-04-28 16:50:12', '2022-04-28 16:50:12'),
(3, 'Asisten Supervisor CRO', '2022-04-28 16:50:12', '2022-04-28 16:50:12'),
(4, 'Asisten Supervisor CIT', '2022-04-28 16:50:12', '2022-04-28 16:50:12'),
(5, 'Asisten Supervisor Rutang', '2022-04-28 16:50:12', '2022-04-28 16:50:12'),
(6, 'Internal Control', NULL, NULL),
(7, 'Admin CRO', NULL, NULL),
(8, 'Admin CIT', NULL, NULL),
(9, 'Admin Rutang', NULL, NULL),
(10, 'Pelaksana CIT', NULL, NULL),
(11, 'Pelaksana CPC', NULL, NULL),
(12, 'Supervisor CRO', NULL, NULL),
(13, 'Pelaksana CRO', NULL, NULL),
(16, 'Pengemudi CRO', NULL, NULL),
(17, 'Pengemudi CIT', NULL, NULL),
(18, 'Pramubakti', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_pco`
--

CREATE TABLE `nilai_pco` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nilai_sko` float NOT NULL,
  `nilai_sk` float NOT NULL,
  `nilai_akhir` float NOT NULL,
  `predikat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_cro`
--

CREATE TABLE `penilaian_cro` (
  `id_isi` int(11) NOT NULL,
  `aspek` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penilaian_cro`
--

INSERT INTO `penilaian_cro` (`id_isi`, `aspek`, `kriteria`, `target`, `nilai`) VALUES
(1, 'Proses Bisnis Internal', 'Menyelesaikan Pekerjaan Sesuai SOP', 'Maksimal 30 Menit setiap lokasi', 0),
(2, 'Proses Bisnis Internal', 'Pembuatan Laporan Kegiatan', 'Dilaporkan melalui telepon paling lama 10 menit setelah kegiatan selesai.', 0),
(3, 'Proses Bisnis Internal', 'Kelengkapan dan Pemeliharaan Peralatan', 'Tidak ada peralatan yang rusak dan hilang', 0),
(4, 'Pekerja', 'Mengikuti Pembinaan/Pengarahan dari atasan langsung', 'Dilakukan 1x dalam sebulan', 0),
(5, 'Pekerja', 'Disiplin', 'Absensi tanpa keterangan tidak lebih dari 5x dalam 1 tahun', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_spvcit`
--

CREATE TABLE `penilaian_spvcit` (
  `id_isi` int(11) NOT NULL,
  `aspek` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penilaian_spvcit`
--

INSERT INTO `penilaian_spvcit` (`id_isi`, `aspek`, `kriteria`, `target`, `nilai`) VALUES
(1, 'Proses Bisnis Internal', 'Merencanakan dan Membuat Jadwal Operasional', 'Dikirimkan ke Divisi Cash Management setiap bulan paling lambat tanggal 25', 0),
(2, 'Proses Bisnis Internal', 'Melakukan Pengecekan Laporan Harian', 'Memastikan telah diperiksa dan dikirim H+1 paling lambat jam 09.00 ke Customer', 0),
(3, 'Proses Bisnis Internal', 'Mengontrol Progress Invoice Customer', 'Memastikan jumlah pembayaran sesuai dengan invoice dan pembayaran tepat waktu', 0),
(4, 'Proses Bisnis Internal', 'Memonitoring kegiatan dan penggunaan dana operasional', 'Memastikan kesesuaian pengeluaran dengan bukti pemakaian', 0),
(5, 'Pekerja', 'Memberikan Pengarahan dan Pelatihan terhadap karyawan bawahannya', 'Dilakukan 1x dalam 1bulan', 0),
(6, 'Pekerja', 'Disiplin', 'Absensi tanpa keterangan tidak lebih dari 5x dalam 1 tahun', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_spvcro`
--

CREATE TABLE `penilaian_spvcro` (
  `id_isi` int(11) NOT NULL,
  `aspek` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penilaian_spvcro`
--

INSERT INTO `penilaian_spvcro` (`id_isi`, `aspek`, `kriteria`, `target`, `nilai`) VALUES
(1, 'Proses Bisnis Internal', 'Merencanakan dan Membuat Jadwal Operasional', 'Dikirimkan ke Cash Divisi Management setiap bulan tanggal 25', 0),
(2, 'Proses Bisnis Internal', 'Membuat Mapping Area', 'Tidak Terjadi Cash Out dan Pengerjaan terhadap ATM Problem tidak lebih dari 1 jam', 0),
(3, 'Proses Bisnis Internal', 'Melakukan Pengecekan Laporan Harian', 'Memastikan telah diperiksa dan dikirim H+1 paling lambat pukul 09.00 ke BRI', 0),
(4, 'Proses Bisnis Internal', 'Memonitoring kegiatan dan penggunaan dana operasional', 'Memastikan kesesuaian pengeluaran dengan bukti pemakaian', 0),
(5, 'Proses Bisnis Internal', 'Merencanakan Hand Over ATM', 'Hand Over sesuai jadwal', 0),
(6, 'Pekerja', 'Memberikan Pengarahan dan Pelatihan terhadap karyawan bawahannya', 'Dilakukan 1x dalam 1bulan', 0),
(7, 'Pekerja', 'Disiplin', 'Absensi tanpa keterangan maksimal 5x dalam 1 bulan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_spvrtg`
--

CREATE TABLE `penilaian_spvrtg` (
  `id_isi` int(11) NOT NULL,
  `aspek` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penilaian_spvrtg`
--

INSERT INTO `penilaian_spvrtg` (`id_isi`, `aspek`, `kriteria`, `target`, `nilai`) VALUES
(1, 'Proses Bisnis Internal', 'Merencanakan dan Mengawasi penggunaan dana operasional', 'Memastikan pengeluaran dan pemasukan disesuaikan dengan invoice dan bukti pemakaian', 0),
(2, 'Proses Bisnis Internal', 'Melakukan Rekonsiliasi Giro Operasional, TC dan Kas Harian', 'Memastikan saldo rekening koran dan kas sesuai', 0),
(3, 'Proses Bisnis Internal', 'Monitoring pos biaya pada aplikasi ERP', 'Memastikan biaya tidak kurang (minus)', 0),
(4, 'Proses Bisnis Internal', 'Monitoring pendataan aset & inventaris', 'Dilakukan setiap hari maksimal pukul 14.30', 0),
(5, 'Proses Bisnis Internal', 'Merencanakan mainte-nance aset & inventaris', 'Dilakukan 1x dalam 1 bulan', 0),
(6, 'Proses Bisnis Internal', 'Monitoring SDM dan Up-date data secara periodik', 'Dilakukan 3x dalam 1 tahun', 0),
(7, 'Proses Bisnis Internal', 'Melakukan Update Dokumen legalitas', 'Dilakukan setiap hari maksimal pukul 14.30', 0),
(8, 'Pekerja', 'Memberikan Pengarahan dan Pelatihan terhadap karyawan bawahannya', 'Dilakukan 1x dalam 1 bulan', 0),
(9, 'Pekerja', 'Disiplin', 'Absensi tanpa keterangan tidak lebih dari 5x dalam 1tahun', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_manajerial`
--

CREATE TABLE `sk_manajerial` (
  `id_isi` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sk_manajerial`
--

INSERT INTO `sk_manajerial` (`id_isi`, `kriteria`, `nilai`) VALUES
(1, 'Dorongan Berprestasi', ''),
(2, 'Orientasi Pelayanan Pelanggan', ''),
(3, 'Komitmen Organisasi', ''),
(4, 'Kepedulian Terhadap Pekerjaan dan Kualitas Hasil Kerja', ''),
(5, 'Kerjasama', ''),
(6, 'Kepemimpinan', ''),
(7, 'Pengambilan Keputusan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_pcro`
--

CREATE TABLE `sk_pcro` (
  `id_isi` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sk_pcro`
--

INSERT INTO `sk_pcro` (`id_isi`, `kriteria`, `nilai`) VALUES
(1, 'Dorongan Berprestasi', 0),
(2, 'Orientasi Pelayanan Pelanggan', 0),
(3, 'Komitmen Organisasi', 0),
(4, 'Kepedulian Terhadap Pekerjaan dan Kualitas Hasil Kerja', 0),
(5, 'Kerjasama', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `id_personal` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `jabatan` bigint(20) UNSIGNED DEFAULT NULL,
  `divisi` bigint(20) UNSIGNED DEFAULT NULL,
  `domisili` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `status` enum('kontrak','tetap') DEFAULT NULL,
  `no_bpjs_ketenagakerjaan` varchar(255) DEFAULT NULL,
  `no_bpjs_kesehatan` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `no_ktp`, `id_personal`, `id_pegawai`, `jabatan`, `divisi`, `domisili`, `agama`, `pendidikan`, `tgl_lahir`, `usia`, `status`, `no_bpjs_ketenagakerjaan`, `no_bpjs_kesehatan`, `ijazah`, `password`) VALUES
(1, 'Mochamad Anchar', '3276051004760010', 33, 34, 1, 1, 'Depok', 'Islam', 'S2 ILMU KOMPUTER', '1976-04-10', 45, 'tetap', '02J70098112', '0001795376316', 'S2 ILMU KOMPUTER', '34\r'),
(2, 'Dedeh Hermawan', '3174030609830000', 248, 247, 10, 2, 'Jakarta Selatan', 'Islam', 'SMK INSTALASI LISTRIK', '1983-09-06', 38, 'kontrak', '7001263800', '0001209678142', 'SMK INSTALASI LISTRIK', '247\r'),
(3, 'Muhamad Soleh', '3173021403910000', 335, 314, 3, 1, 'Jakarta Barat', 'Islam', 'SMA IPS', '1991-03-14', 30, 'kontrak', '13022708468', '1222194947', 'SMA IPS', '314\r'),
(4, 'Chandra Andhika', '3175090112890010', 337, 316, 4, 2, 'Jakarta Timur', 'Hindu', 'D3 BROADCAST', '1989-12-01', 32, 'kontrak', '13022709664', '0001795319447', 'D3 BROADCAST', '316\r'),
(5, 'Hamdan Prasetyo', '3275020809930010', 340, 319, 3, 1, 'Bekasi', 'Islam', 'SMA - IPA', '1993-09-08', 28, 'kontrak', '13022709946', '0002101525716', 'SMA IPA', '319\r'),
(6, 'Muhamad Aziz', '3174081101880000', 360, 337, 7, 1, 'Jakarta Selatan', 'Islam', 'SMK- TEKNIK ELEKTRO', '1988-01-11', 33, 'kontrak', '13022708450', '0001771054525', 'SMK TEKNIK ELEKTRO', '337\r'),
(7, 'Ichsan Kamarisa', '3175042407820000', 316, 387, 17, 2, 'Depok', 'Islam', 'SMK TEKNIK OTOMOTIF', '1982-07-24', 39, 'kontrak', '13022708583', '0001638842073', 'SMK OTOMOTIF', '387\r'),
(8, 'Muhamat Umardani', '3174011704750010', 331, 402, 17, 2, 'Jakarta Selatan', 'Islam', 'SMA IPS', '1975-04-17', 46, 'kontrak', '13022708476', '0001270117552', 'SMA IPS', '402\r'),
(9, 'Dio Tamara', '3276020305910000', 413, 418, 7, 1, 'Depok', 'Islam', 'D3 PENYIARAN', '1991-05-03', 30, 'kontrak', '13022709763', '1655992721', 'SMA IPS', '418\r'),
(10, 'Pitumen Prajaya', '1671021502750000', 433, 438, 2, 1, 'Jakarta Selatan', 'Islam', 'S1 AKUNTANSI', '1975-02-15', 46, 'tetap', '13022708880', '0002068864198', 'S1 AKUNTANSI', '438\r'),
(11, 'Reynolan Morris Sinaga', '3275021112870010', 440, 840, 3, 1, 'Bekasi', 'Islam', 'D1 PARIWISATA', '1987-12-11', 34, 'kontrak', '13022168127', '0001771046739', 'SMA IPS', '840\r'),
(12, 'Muhammad Yusuf', '3275091306900010', 524, 926, 10, 2, 'Bekasi', 'Islam', 'SMK TEKNIK OTOMOTIF', '1990-06-18', 31, 'kontrak', '13025300040', '0000508729151', 'SMK OTOMOTIF', '926\r'),
(13, 'Ahdi Ilhamsyah', '3275060804870000', 605, 1039, 17, 2, 'Bekasi', 'Islam', 'SMK TEKNIK OTOMOTIF', '1982-04-08', 39, 'kontrak', '13030656550', '0001795301561', 'SMK OTOMOTIF', '1039\r'),
(14, 'Roy Ramses Tamara Panggabean', '1271050704800000', 606, 1040, 10, 2, 'Jakarta Timur', 'Kristen Protestan', 'S1 PENDIDIKAN', '1980-04-07', 41, 'kontrak', '13030656568', '0001770073244', '? (kanpus)', '1040\r'),
(15, 'Sudiarto', '276051810850004', 907, 1069, 18, 1, 'Depok', 'Islam', 'SMK TEKNIK KENDARAAN RINGAN', '1985-10-18', 36, 'kontrak', '13039299246', '0001766166704', 'SMK TEKNIK KENDARAAN RINGAN', '1069\r'),
(16, 'Raneng Eko IS', '3175032105830000', 694, 1143, 7, 1, 'Jakarta Timur', 'Islam', 'S1 -TEKNIK KOMPUTER', '1983-05-21', 38, 'kontrak', '14000884495', '0001771054547', 'SMK TEKNIK', '1143\r'),
(17, 'Ahmad Fauzi', '3276011703940000', 699, 1148, 13, 1, 'Depok', 'Islam', 'SMK BISNIS MANAJEMEN', '1994-03-17', 27, 'kontrak', '18033098395', '511595627', 'SMK PEMASARAN', '1148\r'),
(18, 'Cecep Suhendang', '3175040168780020', 707, 1156, 3, 1, 'Jakarta Timur', 'Islam', 'SMA IPS', '1978-08-01', 43, 'kontrak', '14000884180', '1217984927', 'SMA IPS', '1156\r'),
(19, 'Hady Wibowo', '3175091010800020', 791, 1245, 10, 2, 'Jakarta Timur', 'Islam', 'SMA IPS', '1980-10-10', 41, 'kontrak', '14009587321', '0001214885891', 'SMA IPS', '1245\r'),
(20, 'Sopandi', '3175041206790000', 848, 1291, 3, 1, 'Jakarta Timur', 'Islam', 'SMK MEKANIK UMUM', '1979-06-12', 42, 'kontrak', '14018359787', '1857859929', 'SMK MEKANIK UMUM', '1291\r'),
(21, 'Hendra Maulana', '3175032203780000', 921, 1364, 7, 1, 'Jakarta Timur', 'Islam', 'D1 TEKNIK KOMPUTER', '1978-03-22', 43, 'kontrak', '14022789573', '1283035342', 'STM OTOMOTIF', '1364\r'),
(22, 'Anton Suseno', '3175040801900000', 933, 1376, 7, 1, 'Jakarta Timur', 'Islam', 'SMK - TEKNIK MESIN', '1990-01-08', 31, 'kontrak', '14022789508', '170202284', 'SMK TEKNIK MESIN', '1376\r'),
(23, 'Rangga Maryadi', '3175040905770000', 936, 1379, 10, 2, 'Jakarta Timur', 'Islam', 'SMA IPS', '1977-05-09', 44, 'kontrak', '14022789672', '0001440530976', 'SMA IPS', '1379\r'),
(24, 'Muhammad Rojak', '3203132209750000', 997, 1443, 13, 1, 'Cianjur', 'Islam', 'SMA IPS', '1975-09-22', 46, 'kontrak', '14029877108', '0002097406056', 'SMA IPS', '1443\r'),
(25, 'Ade Akhirudin', '3172032308880000', 998, 1444, 13, 1, 'Jakarta Utara', 'Islam', 'SMK TEKNIK MESIN', '1988-08-23', 33, 'kontrak', '14029876910', '0001771043128', 'SMK TEKNIK MESIN', '1444\r'),
(26, 'Reymond Elmondo', '3175042106830000', 1001, 1447, 3, 1, 'Jakarta Timur', 'Kristen Protestan', 'D3 PENYIARAN', '1983-06-21', 38, 'kontrak', '14029877181', '0001218223361', 'D3 PENYIARAN', '1447\r'),
(27, 'Syahrul ', '3276020607790000', 1007, 1453, 13, 1, 'Depok', 'Islam', 'D3', '1979-07-06', 42, 'kontrak', '14029877223', '0001218223361', 'SMA IPS', '1453\r'),
(28, 'Ridwan', '3174010107780000', 1063, 1509, 13, 1, 'Jakarta Selatan', 'Islam', 'SMA IPS', '1978-07-01', 43, 'kontrak', '15057210757', '0002514164286', 'SMA IPS', '1509\r'),
(29, 'Hendra', '3175031702830000', 1239, 1686, 17, 2, 'Jakarta Timur', 'Islam', 'SMA IPS', '1983-02-17', 38, 'kontrak', '15008381004', '1107533147', 'SMA IPS', '1686\r'),
(30, 'Moch.Rozali Chusen', '3175060706690000', 1240, 1687, 17, 2, 'Jakarta Timur', 'Islam', 'SMA IPS', '1969-06-07', 52, 'kontrak', '15008381111', '1107533147', 'SMA IPS', '1687\r'),
(31, 'Firman Rajasyah', '3174010401770000', 1469, 1916, 17, 2, 'Jakarta Selatan', 'Islam', 'STM ', '1977-01-04', 44, 'kontrak', '15032279570', '0001638842073', 'STM', '1916\r'),
(32, 'HERI ISWANDI', '3175030304890000', 1643, 2090, 10, 2, 'Jakarta Timur', 'Islam', 'SMA IPS', '1989-04-03', 32, 'kontrak', '15053465850', '0001771046741', 'SMA IPS', '2090\r'),
(33, 'Hanindya Windiyanti', '3175026206870010', 1693, 2140, 5, 1, 'Jakarta Timur', 'Islam', 'S1 SISTEM INFORMASI', '1987-06-22', 34, 'kontrak', '15057210567', '0002067300167', 'S1 SISTEM INFORMASI', '2140'),
(34, 'JANUAR ARISANDI', '3276020501930000', 1721, 2168, 17, 2, 'Depok', 'Islam', 'SMK TEKNIK OTOMOTIF', '1993-01-05', 28, 'kontrak', '16001701206', '0001014349702', 'SMK TEKNIK OTOMOTIF', '2168\r'),
(35, 'ANDI IRAWAN', '3174012105810000', 1723, 2170, 10, 2, 'Jakarta Selatan', 'Islam', 'SMK MESIN', '1981-05-21', 40, 'kontrak', '16001701040', '0001771054492', 'SMK MESIN', '2170\r'),
(36, 'HERIYANTO', '3302022201880000', 1724, 2171, 17, 2, 'Jakarta Pusat', 'Islam', 'SMK TEKNIK MESIN', '1988-01-22', 33, 'kontrak', '15057210609', '0001319097486', 'SMK TEKNIK MESIN', '2171\r'),
(37, 'Armen', '1771022703850000', 2030, 2477, 10, 2, 'Jakarta Timur', 'Islam', 'SMK BISNIS MANAJEMEN', '1985-03-27', 36, 'kontrak', '16019502802', '0001848496858', 'SMK BISNIS MANAJEMEN', '2477\r'),
(38, 'Ashari Prasetyo', '3175012906960000', 2079, 2526, 10, 2, 'Jakarta Timur', 'Islam', 'SMK ADMINISTRASI PERKANTORAN', '1996-06-29', 25, 'kontrak', '16028373666', '0001218616964', 'SMK ADM PERKANTORAN', '2526\r'),
(39, 'Muhammad Sulton', '3174030311820000', 2197, 2644, 13, 1, 'Jakarta Timur ', 'Islam', 'SMK TEKNIK INDUSTRI', '1982-11-03', 39, 'kontrak', '16040951804', '1210898621', 'SMK TEKNIK INDUSTRI', '2644\r'),
(40, 'Cendy Syahril', '3674010606840000', 2233, 2680, 10, 2, 'Ciater-Tangerang Selatan', 'Kristen Protestan', 'SMK TEKNIK OTOMOTIF', '1984-06-06', 37, 'kontrak', '16046836348', '0002103087521', 'SMK TEKNIK OTOMOTIF', '2680\r'),
(41, 'Irfan Rusliani', '3276060804840000', 2288, 2735, 10, 2, 'Depok', 'Islam', 'S1 MANAJEMEN EKONOMI', '1984-04-08', 37, 'kontrak', '16055142844', '0002205550372', 'S1 MANAJEMEN EKONOMI', '2735\r'),
(42, 'Muhammad Hasbi Falihuddin', '3525030803880000', 2431, 2878, 10, 1, 'Bekasi', 'Islam', 'SMK TEKNIK MESIN', '1988-03-08', 33, 'kontrak', '17009837182', '0002137170971', 'SMK TEKNIK MESIN', '2878\r'),
(43, 'Hagi Achmad', '3174020908940000', 2473, 2920, 3, 1, 'Jakarta Selatan', 'Islam', 'SMK TEKNIK ELEKTRO AUDIO VIDEO', '1994-08-09', 27, 'kontrak', '17017209663', '1294762634', 'SMK TEKNIK ELEKTRO AUDIO VIDEO', '2920\r'),
(44, 'Riswan Haryadi', '3276012802810000', 2529, 2976, 13, 1, 'Depok', 'Islam', 'SMA IPS', '1981-02-28', 40, 'kontrak', '17023086139', '0002139269578', 'SMA IPS', '2976\r'),
(45, 'FITRA ARIA SENJAYA W', '3674051705880000', 2608, 3055, 17, 2, 'Ciputat-Tangerang Selatan', 'Islam', 'S1 SISTEM INFORMASI', '1988-05-17', 33, 'kontrak', '17025709514', 'PEKERJA MANDIRI KOTA JAKARTA PUSAT ', 'SMA IPS', '3055\r'),
(46, 'Auki Priyansyah', '3303082207920000', 2609, 3056, 17, 2, 'Jakarta Utara', 'Islam', 'SMA', '1992-07-22', 29, 'kontrak', '17025709795', '533174444', 'SMA', '3056\r'),
(47, 'Nicolas Hansi Latue', '3674011211830000', 2675, 3122, 10, 2, 'Serpong - Tangerang Selatan', 'Kristen Protestan', 'SMA IPS', '1983-11-12', 38, 'kontrak', '17031220548', '0001243814589', 'SMA IPS', '3122\r'),
(48, 'Ginanjar Yuli Parwoto ', '3303142707940000', 2996, 3443, 7, 1, 'Jakarta Pusat', 'Islam', 'SMK AKUNTANSI', '1994-07-27', 27, 'kontrak', '17048147072', '2243677533', 'SMK AKUNTANSI', '3443\r'),
(49, 'Leondy Fauzan', '3276052607920010', 3113, 3560, 3, 1, 'Depok', 'Islam', 'SMK ', '1992-07-06', 29, 'kontrak', '17055350189', '1766500198', '-BELUM DIKASIH-', '3560\r'),
(50, 'Oktavianto Rusandi', '3275060710870010', 3114, 3561, 11, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK ELEKTRO AUDIO VIDEO', '1987-10-07', 34, 'kontrak', '17055350197', '1155614995', 'SMK TEKNIK ELEKTRO AUDIO VIDEO', '3561\r'),
(51, 'Gomfistua Tambunan', '1202132811950000', 3115, 3562, 3, 1, 'Bekasi', 'Kristen Protestan', 'SMK TEKNIK', '1995-11-28', 26, 'kontrak', '17055350205', '1492638219', 'SMK TEKNIK', '3562\r'),
(52, 'Septa Wijaya', '3215283009960000', 3211, 3658, 7, 1, 'Karawang', 'Islam', 'SMK TEKNIK MESIN', '1996-09-30', 25, 'kontrak', '17067045108', '0002916642745', 'SMK TEKNIK MESIN', '3658\r'),
(53, 'Agung Yulianto', '3275012407990020', 3213, 3660, 11, 1, 'Bekasi', 'Islam', 'SMK TEKNIK KOMPUTER', '1999-07-04', 22, 'kontrak', '17067045124', '0001456847278', 'SMK TEKNIK KOMPUTER', '3660\r'),
(54, 'Catur Wibianto', '3276060704830000', 3232, 3679, 13, 1, 'Depok', 'Islam', 'SMA IPS', '1983-04-07', 38, 'kontrak', '18001675216', '0000574049283', 'SMA IPS', '3679\r'),
(55, 'Syahril Anwar', '3171031601810000', 3458, 3905, 11, 1, 'Jakarta Pusat', 'Islam', 'S1 PERHOTELAN', '1981-01-16', 40, 'kontrak', '18024823264', '0001205683446', 'D1 PERHOTELAN', '3905\r'),
(56, 'Edi Rosady', '3276021212900000', 3462, 3909, 13, 1, 'Depok', 'Islam', 'SMK TEKNIK MESIN', '1990-12-12', 31, 'kontrak', '18024823066', '2218769796', 'SMK TEKNIK MESIN', '3909\r'),
(57, 'Budhy Ridwanto', '3275090910930010', 3540, 3987, 7, 1, 'Bekasi', 'Islam', 'S1 KEPERAWATAN', '1993-06-09', 28, 'kontrak', '18033097975', '0001186763523', 'S1 KEPERAWATAN', '3987\r'),
(58, 'Aris Hadi Tama', '1802071004860010', 3541, 3988, 13, 1, 'Jakarta Pusat', 'Islam', 'SMK TEKNIK ELEKTRO', '1986-04-10', 35, 'kontrak', '18033097983', 'PEKERJA MANDIRI KAB. LAMPUNG TENGAH ', 'SMK TEKNIK ELEKTRO', '3988\r'),
(59, 'Bayu Anggara', '1803072406960000', 3543, 3990, 11, 1, 'Jakarta Pusat', 'Islam', 'SMA IPS', '1996-06-24', 25, 'kontrak', '18033098007', '2238386692', 'SMA IPS', '3990\r'),
(60, 'Agus Suparman ', '3216072208760000', 3544, 3991, 13, 1, 'Bekasi', 'Islam', 'STM MESIN', '1976-08-22', 45, 'kontrak', '18033098015', '511595627', 'STM MESIN', '3991\r'),
(61, 'Desy Tria Rahmawati', '3175027012920000', 3546, 3993, 9, 1, 'Jakarta Timur', 'Islam', 'S1 MANAJEMEN KEUANGAN', '1992-12-30', 29, 'kontrak', '18033098023', '1218353949', 'S1 MANAJEMEN KEUANGAN', '3993\r'),
(62, 'Rayihadi', '203160203900011', 3701, 4148, 7, 1, 'Serpong - Tangerang Selatan', 'Islam', 'SMK BISNIS MANAJEMEN', '1990-03-02', 31, 'kontrak', '18039066198', '2355066977', 'SMK BISNIS MANAJEMEN', '4148\r'),
(63, 'Herman Nurmansyah', '3171051204890000', 3704, 4151, 11, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK OTOMOTIF', '1989-04-12', 32, 'kontrak', '18039065737', '1208238017', 'SMK TEKNIK OTOMOTIF', '4151\r'),
(64, 'Jimi Fajar', '3273251305880000', 3870, 4317, 10, 2, 'Bekasi', 'Islam', 'SMK ELEKTRO', '1988-05-13', 33, 'kontrak', '18059670804', '1881799042', 'SMK ELEKTRO', '4317\r'),
(65, 'Rusli', '3601130405900000', 3928, 4375, 13, 1, 'Jakarta Barat', 'Islam', 'SMA-IPS', '1989-09-26', 32, 'kontrak', '18067978140', '1620140949', 'SMA IPS', '4375\r'),
(66, 'Aditiya Prakoso', '3276080302950000', 4093, 4540, 7, 1, 'Depok', 'Islam', 'SMK - TEKNIK MESIN', '1995-02-03', 26, 'kontrak', '18087366722', 'PEKERJA MANDIRI KOTA DEPOK ', 'SMK TEKNIK MESIN', '4540\r'),
(67, 'Jumadi', '3172042005850000', 4096, 4543, 16, 1, 'Jakarta Utara', 'Islam', 'SMA', '1985-05-20', 36, 'kontrak', '18087366052', '1151121925', 'SMA IPS', '4543\r'),
(68, 'Tugas Wahyu Soedarmanto', '3275031807610000', 4177, 4624, 6, 1, 'Bekasi', 'Kristen Protestan', 'S1 EKONOMI PERUSAHAAN', '1961-07-18', 60, 'kontrak', '18103030997', 'YAYASAN KESEJAHTERAAN PEKERJA BANK RAKYAT INDONESIA 3 ', 'S1 EKONOMI PERUSAHAAN', '4624\r'),
(69, 'Steffanus Djapen Samudji', '3171080809800000', 4222, 4672, 10, 2, 'Jakarta Pusat', 'Islam', 'SMK', '1980-09-08', 41, 'kontrak', '18103030492', '1208637933', 'SMK', '4672\r'),
(70, 'M Aditya Chandra Wira W', '6205051512950000', 4240, 4690, 8, 2, 'Jakarta Selatan', 'Islam', 'SMA IPS', '1995-12-15', 26, 'kontrak', '18103030260', '0001263507568', 'SMA IPS', '4690\r'),
(71, 'Herwindo', '3171032811770000', 4242, 4692, 16, 1, 'Jakarta Pusat', 'Islam', 'SMK OTOMOTIF', '1977-11-28', 44, 'kontrak', '18103030591', 'PEKERJA MANDIRI KOTA DENPASAR ', 'SMK OTOMOTIF', '4692\r'),
(72, 'Endang Susanto', '3175042708790000', 4293, 4743, 13, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK', '1979-08-27', 42, 'kontrak', '18119640516', '0002340700424', 'SMK TEKNIK', '4743\r'),
(73, 'Nur Rochman', '3174042404910010', 4327, 4777, 13, 1, 'Jakarta Selatan', 'Islam', 'SMK BISNIS MANAJEMEN', '1991-04-24', 30, 'kontrak', '18119640243', '365633403', 'SMK AKUNTANSI', '4777\r'),
(74, 'Puput Agus Setyohadi', '3175021208810000', 4329, 4779, 10, 2, 'Jakarta Timur', 'Islam', 'D3 MANAJEMEN INFORMATIKA', '1981-08-12', 40, 'kontrak', '18119640375', '0001140010435', 'D3 MANAJEMEN INFORMATIKA', '4779\r'),
(75, 'Rokhmat Siswanto', '3516060704790000', 4405, 4855, 3, 1, 'Depok', 'Islam', 'S1 TEKNIK', '1979-04-07', 42, 'kontrak', '19008027534', '1645182325', 'S1 TEKNIK', '4855\r'),
(76, 'Zulfahmi', '1174011508840000', 4406, 4856, 10, 2, 'Jakarta Pusat', 'Islam', 'SMK TEKNIK LISTRIK', '1984-08-15', 37, 'kontrak', '19008027401', '0001265257348', 'SMK TEKNIK LISTRIK', '4856\r'),
(77, 'Dwi Sakti Abi Daryanto', '3276010110960000', 4457, 4907, 13, 1, 'Depok', 'Islam', 'SMK TEKNIK OTOMOTIF', '1996-10-01', 25, 'kontrak', '19015287162', '511034084', 'SMK TEKNIK OTOMOTIF', '4907\r'),
(78, 'Haris Supriatna', '3601110308860000', 4458, 4908, 11, 1, 'Depok', 'Islam', 'SMA IPS', '1987-08-03', 34, 'kontrak', '19015287139', '2687431329', 'SMA IPS', '4908\r'),
(79, 'Irsansah', '1804112207970000', 4466, 4916, 11, 1, 'Jakarta Pusat', 'Islam', 'SMA IPS', '1997-07-22', 24, 'kontrak', '19015287147', '993759456', 'SMA IPS', '4916\r'),
(80, 'Kurniawan', '3172032002850020', 4505, 4955, 13, 1, 'Jakarta Utara', 'Islam', 'SMK TEKNIK OTOMOTIF', '1985-02-20', 36, 'kontrak', '19015287493', '1224807895', 'SMK TEKNIK OTOMOTIF', '4955\r'),
(81, 'ANDIKA YUDHA PRATAMA', '3174052508970000', 4623, 5073, 13, 1, 'Jakarta Selatan', 'Islam', 'SMA AKUNTANSI', '1997-08-25', 24, 'kontrak', '19023954944', '1743310574', 'SMA AKUNTANSI', '5073\r'),
(82, 'ANTON AHMADI', '3204282802860000', 4626, 5076, 13, 1, 'Bekasi', 'Islam', 'SMA BAHASA', '1986-02-28', 35, 'kontrak', '19023955313', '0002095958856', 'SMA BAHASA', '5076\r'),
(83, 'RUSMANA', '3276113003710000', 4712, 5162, 16, 1, 'Depok', 'Islam', 'SMA IPS', '1971-03-30', 50, 'kontrak', '19033054438', '0001404631282', 'SMA IPS', '5162\r'),
(84, 'PONCO PRASTOWO', '3174010511900000', 4713, 5163, 13, 1, 'Jakarta Selatan', 'Islam', 'SMK TEKNIK MESIN', '1990-11-05', 31, 'kontrak', '19033054883', '1375702918', 'SMK TEKNIK MESIN', '5163\r'),
(85, 'YUSNIZAR', '3208071506770010', 4716, 5166, 16, 1, 'Bekasi', 'Islam', 'STM OTOMOTIF', '1977-07-17', 44, 'kontrak', '19033054461', '2120539419', 'STM OTOMOTIF', '5166\r'),
(86, 'MUHAMAD FIRZA DWIYANTO', '3175091405920000', 4810, 5260, 13, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK MESIN', '1992-05-14', 29, 'kontrak', '19038836433', '37080887', 'SMK TEKNIK MESIN', '5260\r'),
(87, 'Agung Budi Prasetio', '5171020301850000', 4922, 5372, 13, 1, 'Jakarta Pusat', 'Islam', 'D3 MANAJEMEN PERHOTELAN', '1985-01-03', 36, 'kontrak', '19047086376', '1791440515', 'D3 MANAJEMEN PERHOTELAN', '5372\r'),
(88, 'SURYONO ADI', '3173062907790010', 5002, 5452, 16, 1, 'Jakarta Barat', 'Islam', 'SMA IPA', '1979-07-29', 42, 'kontrak', '19056844269', '1635084718', 'SMA IPA', '5452\r'),
(89, 'ANDA SUBANDA', '3276030806890000', 5004, 5454, 7, 1, 'Depok', 'Islam', 'SMA IPS', '1989-06-08', 32, 'kontrak', '19056843949', '1404959793', 'SMA IPS', '5454\r'),
(90, 'Diki Dwigustian', '3175071608900000', 5054, 5504, 10, 2, 'Jakarta Timur', 'Islam', 'D3 KOMUNIKASI', '1990-08-16', 31, 'kontrak', '19065240517', '0000036653286', 'D3 KOMUNIKASI', '5504\r'),
(91, 'LAKSMANA PUTRA', '3571020207850000', 5057, 5507, 13, 1, 'Jakarta Selatan', 'Islam', 'SMA', '1985-07-02', 36, 'kontrak', '19065240285', '1625367868', 'SMA', '5507\r'),
(92, 'JEFTA SETIAWAN', '3175050709910000', 5058, 5508, 17, 2, 'Jakarta Timur', 'Islam', 'SMK MULTIMEDIA', '1991-09-07', 30, 'kontrak', '19065240525', '0000368393591', 'SMK MULTIMEDIA', '5508\r'),
(93, 'Rizky Eka Putra', '3275082812900010', 5140, 5590, 16, 1, 'Bekasi', 'Islam', 'D3 kEPERAWATAN', '1990-12-28', 31, 'kontrak', '19075109611', 'PEKERJA MANDIRI KAB. SUMEDANG ', 'D3 KEPERAWATAN', '5590\r'),
(94, 'Rikky Zainur Iqbal', '3171033005760000', 5141, 5591, 16, 1, 'Jakarta Pusat', 'Islam', 'SMA IPS', '1976-05-30', 45, 'kontrak', '19075109413', '0001208565325', 'SMA IPS', '5591\r'),
(95, 'Yaya Nurhayadi', '3275090409930020', 5237, 5688, 13, 1, 'Bekasi', 'Islam', 'SMK TATA NIAGA', '1993-09-04', 28, 'kontrak', '19095997359', '1790272348', 'SMK PEMASARAN', '5688\r'),
(96, 'Edin', '3276100207940000', 5238, 5689, 18, 1, 'Depok', 'Islam', 'SMK TEKNIK ELETRONIKA', '1994-07-02', 27, 'kontrak', '19095997417', '1451200184', 'SMK TEKNIK ELEKTRONIKA', '5689\r'),
(97, 'Saut Sahat Parulian (Kepala Pool)', '3175053009860000', 5279, 5730, 9, 1, 'Jakarta Timur', 'Kristen Protestan', 'SMA IPS', '1986-09-30', 35, 'kontrak', '20000483246', '1770597551', 'SMA IPS', '5730\r'),
(98, 'Febriyanto', '3171062408910000', 5327, 5778, 13, 1, 'Jakarta Selatan', 'Islam', 'SMK AKUNTANSI', '1991-08-24', 30, 'kontrak', '20010225439', '1766856251', 'SMK AKUNTANSI', '5778\r'),
(99, 'Parnington Siregar', '3671032804910000', 5328, 5779, 13, 1, 'Tangerang', 'Islam', 'SMA IPS', '1992-07-26', 29, 'kontrak', '20010225355', 'PEKERJA MANDIRI KOTA TANGERANG ', 'SMA IPS', '5779\r'),
(100, 'Budi Rahmat Hidayat', '3175042402790000', 5392, 5843, 16, 1, 'Jakarta Timur', 'Islam', 'SMA IPS', '1979-02-24', 42, 'kontrak', '20018722601', '0001451818337', 'SMA IPS', '5843\r'),
(101, 'Dhea Rahmadhani', '3175066912980000', 5393, 5844, 9, 1, 'Jakarta Timur', 'Islam', 'D3 SIA', '1998-12-29', 23, 'kontrak', '20018722619', '0002251512336', 'D3 SIA', '5844\r'),
(102, 'Aswin Setiawan', '3174010407840000', 5406, 5857, 7, 1, 'Jakarta Selatan', 'Islam', 'D3 MANAJEMEN INFORMATIKA', '1984-07-04', 37, 'kontrak', '20018722627', '0001482149542', 'D3 MANAJEMEN INFORMATIKA', '5857\r'),
(103, 'M Anton Trihatmono', '3175040205740000', 5497, 5948, 17, 2, 'Jakarta Timur', 'Islam', 'S1 TEKNIK INFORMATIKA', '1974-05-02', 47, 'kontrak', '20025620244', '0001641352983', 'S1 TEKNIK INFORMATIKA', '5948\r'),
(104, 'Agung Tri Nugroho', '3175041002850010', 5498, 5949, 17, 2, 'Jakarta Timur', 'Islam', 'S1 HUKUM', '1985-02-10', 36, 'kontrak', '20025620715', '0001215533889', 'S1 HUKUM', '5949\r'),
(105, 'Denyx Anggoro Putro', '3172042612950000', 5499, 5950, 17, 2, 'Jakarta Utara', 'Islam', 'SMK TEKNIK OTOMOTIF', '1995-12-26', 26, 'kontrak', '20025620665', '0000378890706', 'SMK TEKNIK OTOMOTIF', '5950\r'),
(106, 'Aditya Putra Ramadhan', '3172061201970000', 5543, 5994, 11, 1, 'Jakarta Utara', 'Islam', 'SMK TEKNIK JARINGAN', '1997-01-12', 24, 'kontrak', '1467868252', '0001467868252', 'SMK TEKNIK JARINGAN', '5994\r'),
(107, 'Muhammad Jasuli', '3175041205850000', 5544, 5995, 13, 1, 'Jakarta Timur', 'Islam', 'S1 TEKNOLOGI PANGAN', '1985-05-12', 36, 'kontrak', '1744649447', '0001744649447', 'S1 TEKNOLOGI PANGAN', '5995\r'),
(108, 'Novrizal', '3201032911930000', 5626, 6077, 11, 1, 'Bogor', 'Islam', 'SMA IPS', '1993-11-29', 28, 'kontrak', '20042117307', '0001736764233', 'SMA IPS', '6077\r'),
(109, 'Yudha Nugraha', '3276020408970000', 5812, 6263, 11, 1, 'Depok', 'Islam', 'D3 TEKNIK KOMPUTER', '1997-08-04', 24, 'kontrak', '20067335552', '0001109709821', 'D3 TEKNIK KOMPUTER', '6263\r'),
(110, 'Tommy Irawan', '3172021005850020', 5813, 6264, 13, 1, 'Jakarta Pusat', 'Islam', 'SMA IPS', '1989-03-24', 32, 'kontrak', '20067335750', '0001206561846', 'SMA IPS', '6264\r'),
(111, 'Ambar Sukmono', '3175080802840000', 5815, 6266, 16, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK OTOMOTIF', '1984-02-08', 37, 'kontrak', '20067335784', '0001215891911', 'SMK TEKNIK OTOMOTIF', '6266\r'),
(112, 'Fernando', '3175092002890000', 5852, 6303, 16, 1, 'Jakarta Timur', 'Kristen Protestan', 'SMA IPS', '1989-02-20', 32, 'kontrak', '20077150348', '0001289079156', 'SMA IPA', '6303\r'),
(113, 'Dody Wibowo', '3216081010970000', 5856, 6307, 16, 1, 'Bekasi', 'Islam', 'SMK TEKNIK OTOMOTIF', '1997-10-10', 24, 'kontrak', '20077150389', '0002510002449', 'SMK TEKNIK OTOMOTIF', '6307\r'),
(114, 'Bagus Adi Setiawan', '3173060201960000', 5895, 6346, 13, 1, 'Jakarta Barat', 'Islam', 'SMA IPS', '1996-01-02', 25, 'kontrak', '20090628056', '0000376115242', 'SMA IPS', '6346\r'),
(115, 'Zulvian Hadi Saputra', '3216081010970000', 5896, 6347, 13, 1, 'Bekasi', 'Islam', 'SMK TEKNIK OTOMOTIF', '1995-05-09', 26, 'kontrak', '20090628205', '0000073496924', 'SMK TEKNIK OTOMOTIF', '6347\r'),
(116, 'Liandri', '3275090701930010', 5897, 6348, 11, 1, 'Bekasi', 'Islam', 'SMA IPS', '1993-05-01', 28, 'kontrak', '20090628353', '0000507540284', 'SMA IPS', '6348\r'),
(117, 'Moh Taufiq Hidayat', '3171080709970000', 5969, 6420, 11, 1, 'Jakarta Pusat', 'Islam', 'SMK TEKNIK OTOMOTIF KENDARAAN RINGAN', '1997-09-07', 24, 'kontrak', '20095012603', '0001771108593', 'SMK TEKNIK OTOMOTIF KENDARAAN RINGAN', '6420\r'),
(118, 'Sabrina Awanis', '3175026211980000', 6010, 6461, 7, 1, 'Jakarta Timur', 'Islam', 'D3 AKUNTANSI', '1998-11-22', 23, 'kontrak', '21005122433', '0000020986042', 'D3 AKUNTANSI', '6461\r'),
(119, 'Hakim Welly Yoga', '120723200386002', 6166, 10584, 16, 1, 'Bekasi', 'Islam', 'SMK TEKNIK MESIN', '1986-03-20', 35, 'kontrak', '21021776386', '0002095107039', 'SMK TEKNIK MESIN', '10584\r'),
(120, 'Putra Agung Wibowo', '3328011206960000', 6167, 10585, 16, 1, 'Jakarta Utara', 'Islam', 'SMK TEKNIK MESIN', '1996-06-12', 25, 'kontrak', '21021776394', '0001900082092', 'SMK TEKNIK MESIN', '10585\r'),
(121, 'Joko Prayitno', '3214010404940000', 6171, 10589, 11, 1, 'Jakarta Pusat', 'Islam', 'SMK TEKNIK KENDARAAN RINGAN', '1996-06-12', 25, 'kontrak', '21021776402', '0001517118434', 'SMK TEKNIK KENDARAAN RINGAN', '10589\r'),
(122, 'Victor Christianto', '3276020104880000', 6174, 10592, 13, 1, 'Depok', 'Kristen Protestan', 'S1 SISTEM INFORMASI', '1988-04-01', 33, 'kontrak', '21021776428', '0001447033623', 'S1 SISTEM INFORMASI', '10592\r'),
(123, 'Didik Hariyadi', '3306110206880000', 6175, 10593, 16, 1, 'Bekasi', 'Islam', 'SMK TEKNIK MESIN', '1988-06-02', 33, 'kontrak', '21021776436', '0001623787075', 'SMK TEKNIK MESIN', '10593\r'),
(124, 'Muhamad Ibnu Safe\'i', '3175043110960010', 6180, 10598, 17, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK MESIN', '1996-10-31', 25, 'kontrak', '21021776444', '0002095196084', 'SMK TEKNIK MESIN', '10598\r'),
(125, 'Purwo Herijanto', '3175041009850000', 6181, 10599, 13, 1, 'Jakarta Pusat', 'Islam', 'SMK TEKNIK MESIN', '1985-09-10', 36, 'kontrak', '21021776451', '0002340367648', 'SMK TEKNIK MESIN', '10599\r'),
(126, 'Reza Virgiawan', '3171030202020000', 6182, 10600, 11, 1, 'Jakarta Pusat', 'Islam', 'SMK TEKNIK KOMPUTER', '2002-02-02', 19, 'kontrak', '21021776469', '0002135295652', 'SMK TEKNIK KOMPUTER', '10600\r'),
(127, 'Edho Chueka WP', '3173040204920000', 6286, 10704, 13, 1, 'Depok', 'Islam', 'SMA IPS', '1992-04-02', 29, 'kontrak', '21028875595', '0001300045678', 'SMA IPS', '10704\r'),
(128, 'Mohammad Wahyudi', '3174020406940000', 6287, 10705, 16, 1, 'Jakarta Selatan', 'Islam', 'SMK ADMINISTRASI PERKANTORAN', '1994-06-04', 27, 'kontrak', '21028875603', '0001210319796', 'SMK ADM PERKANTORAN', '10705\r'),
(129, 'Febriyan Syah', '3175082302010000', 6288, 10706, 16, 1, 'Jakarta Timur', 'Islam', 'SMK AKUNTANSI', '2001-02-23', 20, 'kontrak', '21028875611', '0001216487439', 'SMK AKUNTANSI', '10706\r'),
(130, 'Frengki Gom Gom Tampubolon', '1271210609910000', 6401, 10819, 17, 1, 'Jakarta Timur', 'Kristen Protestan', 'SMK TEKNIK OTOMATIF', '1991-09-06', 30, 'kontrak', '21036438618', '0001300900263', 'SMK TEKNIK OTOMOTIF', '10819\r'),
(131, 'Ikhsan Hermawan', '3175041101960000', 6442, 11859, 11, 1, 'Jakarta Timur', 'Islam', 'S1 SASTRA INGGRIS', '1996-01-11', 25, 'kontrak', '21044197594', '0001306693618', 'SMA IPS', '11859\r'),
(132, 'Rachmat Baihaki', '3175031203850000', 6578, 14901, 16, 1, 'Bekasi', 'Islam', 'SMK AKUNTANSI', '1985-03-12', 36, 'kontrak', '21054351289', '0000506511022', 'SMK AKUNTANSI', '14901\r'),
(133, 'Afrilyaldo Hasudungan', '3275112104980000', 6577, 14900, 16, 1, 'Bekasi', 'Kristen Protestan', 'S1 KOMUNIKASI', '1998-04-21', 27, 'kontrak', '21054351420', '0000037312751', 'SMA IPS', '14900\r'),
(134, 'M.Sobur Rabani', '3276022106850000', 6576, 14899, 16, 1, 'Depok', 'Islam', 'SMK BISNIS', '1985-06-21', 36, 'kontrak', '21054351867', '0000511512737', 'SMK BISNIS', '14899\r'),
(135, 'Adi Muhammad Ramadhanu Al Kifahi', '3275041212010010', 6664, 15986, 16, 1, 'Bekasi', 'Islam', 'SMK OTOMOTIF', '2001-12-12', 20, 'kontrak', '21061313371', '0001474336607', 'SMK OTOMOTIF', '15986\r'),
(136, 'Oktavian Hanif Gebze', '3275082710970020', 6666, 15988, 16, 1, 'Bekasi', 'Islam', 'SMK TEKNIK KENDARAAN', '1997-10-27', 24, 'kontrak', '21061313512', '0001628611997', 'SMK TEKNIK KENDARAAN', '15988\r'),
(137, 'Fachrian Ramadhan', '3171032312980000', 6782, 17077, 17, 1, 'Jakarta Utara', 'Islam', 'SMA IPA', '1998-12-23', 23, 'kontrak', '17052765892', '0001768660942', 'SMA IPS', '17077\r'),
(138, 'Bagus Rizki Abadi', '3326032906940000', 6781, 17076, 16, 1, 'Jakarta Barat', 'Islam', 'SMK OTOMOTIF', '1994-06-29', 27, 'kontrak', '21069213151', '', 'SMK OTOMOTIF', '17076\r'),
(139, 'Muhammad Taufik', '3175041708760010', 6783, 17078, 16, 1, 'Jakarta Timur', 'Islam', 'STM OTOMOTIF', '1976-08-17', 45, 'kontrak', '21069213714', '0001655870703', 'STM OTOMOTIF', '17078\r'),
(140, 'Diki Nurdiansyah', '3175092705020010', 6785, 17080, 11, 1, 'Jakarta Timur', 'Islam', 'SMK OTOMOTIF', '2002-05-27', 19, 'kontrak', '21069213003', '0001217735223', 'SMK OTOMOTIF', '17080\r'),
(141, 'Muhammad Farhan Zailani Putra', '3173022801030000', 6784, 17079, 11, 1, 'Jakarta Barat', 'Islam', 'SMA IPS', '2003-01-28', 18, 'kontrak', '21069213045', '0002103883536', 'SMA IPS', '17079\r'),
(142, 'Purnomo', '3175042209900000', 6786, 17081, 17, 2, 'Jakarta Timur', 'Islam', 'SMK OTOMOTIF', '1990-09-22', 31, 'kontrak', '21069213672', '0001439052039', 'SMK OTOMOTIF', '17081\r'),
(143, 'Rafli Virgiansyah', '3203032101020000', 6885, 18096, 11, 1, 'Cianjur', 'Islam', 'SMA IPA', '2002-01-21', 19, 'kontrak', '', '', 'SMA IPA', '18096\r'),
(144, 'Andri Wiguna', '3174011603920000', 6788, 17083, 10, 2, 'Jakarta Selatan', 'Islam', 'SMK TEKNIK INFORMASI', '1992-03-16', 29, 'kontrak', '21069213649', '0001465149047', 'SMK TEKNIK INFORMASI', '17083\r'),
(145, 'Muhammad Arman Rasyid', '3205110404710000', 6787, 17082, 17, 2, 'Garut', 'Islam', 'SMA BUDAYA', '1974-04-04', 47, 'kontrak', '', '0000428446719', 'SMA BUDAYA', '17082\r'),
(146, 'Djanurih', '3172040101020000', 6895, 18106, 11, 1, 'Jakarta Utara', 'Islam', 'SMK TEKNIK OTOMOTIF', '2002-01-01', 19, 'kontrak', '', '', 'SMK TEKNIK OTOMOTIF', '18106\r'),
(147, 'Muhamad Aziz Badawi', '3171081002030000', 6894, 18105, 11, 1, 'Jakarta Pusat', 'Islam', 'SMK BISNIS', '2003-02-10', 20, 'kontrak', '21080783091', '0001206887771', 'SMK BISNIS', '18105\r'),
(148, 'Deden Deni Wahyudin', '3211011506010000', 6896, 18107, 11, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK KENDARAAN RINGAN', '2001-06-15', 20, 'kontrak', '21080783117', '0002517577918', 'SMK TEKNIK KENDARAAN RINGAN', '18107\r'),
(149, 'Rizal Erik Riki Dwi F', '3174091510860010', 7073, 21200, 11, 1, 'Jakarta Selatan', 'Islam', 'SMK BISNIS MANAJEMEN', '1986-10-15', 36, 'kontrak', '21093121156', '0001210824202', 'SMK BISNIS MANAJEMEN', '21200\r'),
(150, 'Ghani Akbar', '31720324109400000', 7083, 21210, 11, 1, 'Jakarta Utara', 'Islam', 'SMA IPA', '1994-10-24', 28, 'kontrak', '21093121297', '0000378408587', 'SMA IPA', '21210\r'),
(151, 'Nurdiansyah', '32011804069500000', 7084, 21211, 11, 1, 'Depok', 'Islam', 'SMA IPS', '1995-06-04', 27, 'kontrak', '21093121321', '0001650135104', '', '21211\r'),
(152, 'Robertus Christon Dirgantara', '3216060302010010', 7078, 21205, 11, 1, 'Tambun Selatan', 'Katolik', 'SMA IPA', '2001-02-03', 21, 'kontrak', '21093121214', '0001226887198', '', '21205\r'),
(153, 'Moch Iqbal', '3175041609960000', 7081, 21208, 11, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK KENDARAAN RINGAN', '1996-09-16', 26, 'kontrak', '21093121263', '0002307573022', 'SMK TEKNIK KENDARAAN RINGAN', '21208\r'),
(154, 'Rhenal Aryawira', '3174051105021000', 7086, 21213, 11, 1, 'Jakarta Selatan', 'Islam', 'SMK TEKNIK KOMUNIKASI JARINGAN', '2002-05-11', 20, 'kontrak', '21093121370', '0001742216106', '', '21213\r'),
(155, 'Marasa Suprihatin', '3175070707840000', 7077, 21204, 11, 1, 'Jakarta Timur', 'Islam', 'SMK OTOMOTIF', '1984-07-07', 38, 'kontrak', '21093121198', '0001609684446', 'SMK OTOMOTIF', '21204\r'),
(156, 'Robi Nugroho', '1803031207950000', 7085, 21212, 11, 1, 'Tangerang', 'Islam', 'SMA IPA', '1995-06-16', 27, 'kontrak', '21093121354', '0000350687823', '', '21212\r'),
(157, 'Farhan Ihsan Prasetyo', '', 7183, 21310, 16, 1, 'Jakarta Timur', 'Islam', 'SMK TEKNIK KOMPUTER JARINGAN', '0000-00-00', 0, 'kontrak', '', '', '', '21310\r'),
(158, 'Jamal Amrin Dawolo', '', 7185, 21312, 16, 1, 'Bekasi', 'Islam', 'SMK TEKNIK AUDIO VIDEO', '0000-00-00', 0, 'kontrak', '', '', '', '21312\r'),
(159, 'Joseph Lesmana', '3276031709880000', 7179, 21306, 16, 1, 'Depok', 'Kristen', 'S1 HUKUM', '1988-09-17', 34, 'kontrak', '21099190916', '', '', '21306\r'),
(160, 'Sabaryanto', '3275022703810010', 7181, 21308, 16, 1, 'Bekasi', 'Islam', 'SMK', '1981-03-27', 41, 'kontrak', '21099188928', '', '', '21308\r'),
(161, 'Mochamad Yusup', '3276020104810010', 7562, 24688, 16, 1, 'Depok', 'Islam', 'SMU', '1981-04-01', 41, 'kontrak', '', '', '', '24688\r'),
(162, 'Eko Prasetiyo Budhi', '3315010311850000', 7564, 24690, 16, 1, 'Jakarta Pusat', 'Islam', 'SLTA', '1985-11-03', 37, 'kontrak', '', '', '', '24690\r'),
(163, 'Moh Alva Viantara', '3275022311870010', 1471, 1918, 3, 1, 'Bekasi', 'Islam', '', '1987-11-23', 35, 'kontrak', '', '', '', '1918\r');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_pco`
--
ALTER TABLE `nilai_pco`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian_cro`
--
ALTER TABLE `penilaian_cro`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indeks untuk tabel `penilaian_spvcit`
--
ALTER TABLE `penilaian_spvcit`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indeks untuk tabel `penilaian_spvcro`
--
ALTER TABLE `penilaian_spvcro`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indeks untuk tabel `penilaian_spvrtg`
--
ALTER TABLE `penilaian_spvrtg`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indeks untuk tabel `sk_manajerial`
--
ALTER TABLE `sk_manajerial`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indeks untuk tabel `sk_pcro`
--
ALTER TABLE `sk_pcro`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `divisi` (`divisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `nilai_pco`
--
ALTER TABLE `nilai_pco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penilaian_cro`
--
ALTER TABLE `penilaian_cro`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penilaian_spvcit`
--
ALTER TABLE `penilaian_spvcit`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penilaian_spvcro`
--
ALTER TABLE `penilaian_spvcro`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `penilaian_spvrtg`
--
ALTER TABLE `penilaian_spvrtg`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `sk_manajerial`
--
ALTER TABLE `sk_manajerial`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sk_pcro`
--
ALTER TABLE `sk_pcro`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`divisi`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`jabatan`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
