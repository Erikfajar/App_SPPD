-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2023 pada 06.04
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
-- Database: `sppd_v3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapegawai`
--

CREATE TABLE `datapegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tgllhr` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapegawai`
--

INSERT INTO `datapegawai` (`id`, `nip`, `nama`, `pangkat`, `jabatan`, `tgllhr`, `created_at`, `updated_at`) VALUES
(4, '19640620 198803 1 007', 'Ramlis, S.TP., M.Si', 'IV/b', 'Guru Madya', 'Takengon, 20 Juni 1964', '2023-06-25 01:55:33', '2023-08-14 04:51:19'),
(5, '19630806 198410 1 003', 'Soleh, S.Pd., M.MPd', 'IV/a', 'Guru Madya', 'Subang, 06 Agustus 1963', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(6, '19640614 198803 2 006', 'Eti Rohayati, SP', 'IV/a', 'Guru Madya', 'Ciamis, 14 Juni 1964', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(7, '19640608 199303 2 003', 'Dra.Meryeni Tasugalen', 'IV/a', 'Guru Madya', 'Bogor, 08 Juni 1964', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(8, '19630922 198703 1 004', 'Sunarto', 'IV/a', 'Guru Madya', 'Tegal, 22 September 1963', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(9, '19700416 199802 2 003', 'Widyasrini, SP', 'IV/a', 'Guru Madya', 'Bantul, 16 April 1970', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(10, '19650919 198803 1 007', 'Enjang Kurniadi, SE', 'IV/a', 'Guru Madya', 'Sumedang, 19 September 1965', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(11, '19710311  200003 1 002', 'Oro Sumara, S.Pd', 'IV/a', 'Guru Madya', 'Bandung, 11  Maret 1971', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(12, '19660429 200604 2 004', 'Dra. Nina Rusmiati', 'III/d', 'Guru Muda', 'Jakarta, 29 April 1966', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(13, '19710415 200701 2 007', 'Emmy Apriani Fatimah, S.Pd', 'III/d', 'Guru Muda', 'Manado, 15 April 1971', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(14, '19790118 200902 2 003', 'Nunung Nurhayati, M.Pd', 'III/d', 'Guru Muda', 'Subang, 18 Januari 1979', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(15, '19760908 200801 1 004', 'Dede Saryono, S.Pd., M.Pd', 'III/c', 'Guru Pertama', 'Subang, 08 September 1976', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(16, '19800820 200801 1 004', 'Deden , S.St.Pi', 'III/c', 'Guru Pertama', 'Subang, 20 Agustus 1980', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(17, '19761003 201001 1 005', 'Yuyun Ruhyatna, S.Pd', 'III/c', 'Guru Pertama', 'Bandung, 3 Oktober 1976', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(18, '19810717 200902 2 003', 'Betta Yuliana, SP', 'III/c', 'Guru Pertama', 'Sumedang, 17 Juli 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(19, '19790428 200902 2 001', 'Yani Setiani, M.Pd', 'III/c', 'Guru Pertama', 'Bandung, 28 April 1979', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(20, '19821218 200902 2 008', 'Wiwi Wiyanti, S.Pd', 'III/b', 'Guru Pertama', 'Subang, 18 Desember 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(21, '19770726 200902 1 001', 'Eep Deden Efendi, ST', 'III/b', 'Guru Pertama', 'Subang, 26 Juli 1977', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(22, '19821223 201001 2 023', 'Mela Nurfitria, SP', 'III/b', 'Guru Pertama', 'Subang, 23 Desember 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(23, '19820806 201101 2 005', 'Euis Tuti Pirmansah, ST', 'III/b', 'Guru Pertama', 'Ciamis, 06 Agustus 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(24, '19750101 200801 2 006', 'Karisem, S.Pd', 'III/b', 'Guru Pertama', 'Subang, 01 Januari 1975', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(25, '19680221 201410 1 001', 'Ruhendi, ST', 'III/b', 'Guru Pertama', 'Subang, 21 Februari 1968', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(26, '19730130 201411 2 001', 'Sri Yuwono Ekowati, S.Si', 'III/b', 'Guru Pertama', 'Tuban, 30 Januari 1973', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(27, '19790126 201411 1 001', 'Dadang Sudarmin, S.St.Pi', 'III/b', 'Guru Pertama', 'Subang, 26 Januari 1979', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(28, '19771118 201410 2 001', 'Novrida, S.Pd.Fis', 'III/b', 'Guru Pertama', 'Rantau Prapat, 18 November 1977', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(29, '19710308 201411 1 001', 'Budianto, ST', 'III/a', 'Guru Pertama', 'Magetan, 08 Maret 1971', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(30, '19930410 201903 1 013', 'Aprizal Putu Jaya Pamungkas, ST', 'III/a', 'Guru Pertama', 'Cilacap, 10 April 1993', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(31, '19810811 201410 2 002', 'Teni Agustien, S.Pd', 'II/d', 'Pelaksana Guru', 'Sukabumi, 11 Agustus 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(32, '19831221 201411 1 001', 'Deni Ruswandi, S.Pd.I', 'II/b', 'Pelaksana Guru', 'Bandung, 21 Desember 1983', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(33, '19690315 202121 2 001', 'Suminah, S.Pd', 'IX', 'ASN PPPK GURU', 'Bandung, 15 Maret 1969', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(34, '19770308 202121 2 001', 'Asih Samsiah, S.ST.Pi., Gr', 'IX', 'ASN PPPK GURU', 'Subang, 08 Maret 1977', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(35, '19780303 202121 1 001', 'Suhara, S.Pd.I', 'IX', 'ASN PPPK GURU', 'Subang, 03 Maret 1978 ', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(36, '19830319 202121 1 002', 'Lili Ramdani, M.Pd., Gr', 'IX', 'ASN PPPK GURU', 'Pataruman,19 Maret 1983', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(37, '19700728 202221 1 002', 'Tatang Haryono, S.AP', 'IX', 'ASN PPPK GURU', 'Surabaya, 28 Juli 1970', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(38, '19710313 202221 2 005', 'Ketut Sisriani, S.Pd', 'IX', 'ASN PPPK GURU', 'Pasuruan, 13 Maret 1971', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(39, '19711103 202221 1 001', 'Ramlan Mujiono, S.Pt., Gr', 'IX', 'ASN PPPK GURU', 'Indramayu, 03 November 1971', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(40, '19721219 202221 1 001', 'Wawan Setiawan, SE', 'IX', 'ASN PPPK GURU', 'Bandung, 19 Desember 1972', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(41, '1975091 2202221 1 006', 'Seft Nugraha Taruna, ST', 'IX', 'ASN PPPK GURU', 'Jakarta, 12 September 1975', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(42, '19780123 202221 1003', 'Suhenda, S.Si', 'IX', 'ASN PPPK GURU', 'Bandung, 23 Januari 1978', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(43, '19780719 202221 1 005', 'Yuli Sukmara, S.Pd., Gr', 'IX', 'ASN PPPK GURU', 'Subang, 19 Juli 1978 ', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(44, '19800909 202221 1 003', 'Ade Nurdin, ST', 'IX', 'ASN PPPK GURU', 'Subang, 09 September 1980', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(45, '19810227 202221 1 004', 'Deden Faizal, S.Psi', 'IX', 'ASN PPPK GURU', 'Jakarta, 27 Februari 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(46, '19810423 202221 1 008', 'Inan Mulyana, ST., M.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 23 April 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(47, '19810518 202221 1 003', 'Rudi Supriyadi, ST', 'IX', 'ASN PPPK GURU', 'Subang, 18 Mei 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(48, '19821011 202221 1 009', 'Casidin, S.Pd., Gr', 'IX', 'ASN PPPK GURU', 'Indramayu, 11 Oktober 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(49, '19830311 202221 2 019', 'Santi Dewi Efendi, ST', 'IX', 'ASN PPPK GURU', 'Subang, 11 Maret 1983', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(50, '19840201 202221 1 007', 'Waluyo Adi Prasojo, S.Pd', 'IX', 'ASN PPPK GURU', 'Brebes, 1 Pebruari 1984', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(51, '19840614 202221 2 019', 'Dini Wulansari, S.Pd., Gr', 'IX', 'ASN PPPK GURU', 'Bandung, 14 Juni 1984', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(52, '19840427 202221 2 012', 'Cucun Kurniasih, S.TP., Gr', 'IX', 'ASN PPPK GURU', 'Subang, 27 April 1984', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(53, '19850710 202221 1 012', 'Pepi Supriyadi, S.ST., Gr', 'IX', 'ASN PPPK GURU', 'Subang, 10 Juli 1985', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(54, '19860112 202221 2 024', 'Ikeviana Kharismilla, S.Pd', 'IX', 'ASN PPPK GURU', 'Brebes, 12 Januari 1986', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(55, '19870216 202221 1 004', 'Umar Safa’at, ST., Gr', 'IX', 'ASN PPPK GURU', 'Subang 16 Februari 1987', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(56, '19880617 202221 2 006', 'Devi Irawati, S.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 17 Juni 1988', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(57, '19890801 202221 2 012', 'Dian Agustina, S.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 01 Agustus 1989', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(58, '19890118 202221 1 004', 'Asep Rudini, S.Pd., Gr', 'IX', 'ASN PPPK GURU', 'Cirebon, 18 Januari 1989', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(59, '19890129 202221 2 012', 'Leni Aelani Maman, S.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 29 Januari 1989', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(60, '19910704 202221 2 007', 'Dwi Ambarwati, S.Pd', 'IX', 'ASN PPPK GURU', 'Cimahi, 04 Juli 1991', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(61, '19910120 202221 1 005', 'Jihan Pahlevi, ST., Gr', 'IX', 'ASN PPPK GURU', 'Pematang Siantar, 20 Januari 1991', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(62, '19930725 202221 1 002', 'Ilan Julia Rahayu, S.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 25 Juli 1993', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(63, '19720307 2022212 008', 'Yayah Marlina, S.Pd', 'IX', 'ASN PPPK GURU', 'Bandung, 07 Maret 1972', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(64, '19770317 202221 1 004', 'Tian Setiawan, ST', 'IX', 'ASN PPPK GURU', 'Tasikmalaya, 17 Maret 1977', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(65, '19770227 202221 2 008', 'Siti Hadijah, SS', 'IX', 'ASN PPPK GURU', 'Tebing Tinggi, 27 Februari 1977', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(66, '19810604 202221 1 011', 'Maman Rohyana, S.Pd', 'IX', 'ASN PPPK GURU', 'Sumedang, 04 Mei 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(67, '19810208 202221 1 015', 'Teguh Pratikno, S.Pd', 'IX', 'ASN PPPK GURU', 'Cimahi, 08 Februari 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(68, '19811018 202221 1 012', 'Budi Irawan, ST', 'IX', 'ASN PPPK GURU', 'Bandung, 18 Oktober 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(69, '19811223 202221 1 013', 'Iwan Permana, S.Tr.Kom', 'IX', 'ASN PPPK GURU', 'Sumedang, 23 Desember 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(70, '19820726 202221 2 022', 'Titin Kartini, S,PD.', 'IX', 'ASN PPPK GURU', 'Sumedang, 26 Juli 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(71, '19830203 202221 1 015', 'Suryana, S.Pd.I', 'IX', 'ASN PPPK GURU', 'Subang, 3 Februari 1983', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(72, '19830115 202221 1 013', 'Diny Harry Heryadi, S.Pd', 'IX', 'ASN PPPK GURU', 'Sumedang, 15 Januari 1983', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(73, '19840929 202221 2 029', 'Suminar, S.Pd', 'IX', 'ASN PPPK GURU', 'Bandung, 29 September 1984', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(74, '19850409 202221 1 013', 'Yayat Ruhiyat, ST', 'IX', 'ASN PPPK GURU', 'Majalengka, 09 April 1985', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(75, '19870903 202221 2 014', 'N.Epa Kartika,S.PD', 'IX', 'ASN PPPK GURU', 'Cianjur, 03 September 1987', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(76, '19901005 202221 2 021', 'Wina Eryana S, S.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 05 Oktober 1990', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(77, '19901208 202221 2 012', 'Eka Aryani, S.Pd', 'IX', 'ASN PPPK GURU', 'Cirebon, 108 Desember 1990', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(78, '19900912 202221 2 020', 'Rahipah Riskalia, S.Pd', 'IX', 'ASN PPPK GURU', 'Sukabumi, 12 September 1990', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(79, '19910128 202221 1 007', 'Dede Piat, S.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 28 Januari 1991', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(80, '19930126 202221 2 017', 'Agnia Purwa Andani, S.Pd', 'IX', 'ASN PPPK GURU', 'Bogor, 26 Januari 1993', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(81, '19940823 202221 1 008', 'Resvifauzi Maulana Nasution, S.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 23 Agustus 1994', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(82, '19950830 202221 2 013', 'Astri Rengganis, S.Sos', 'IX', 'ASN PPPK GURU', 'Majalengka, 30 Agustus 1995', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(83, '19970208 202221 2 011', 'Niken Kania Savitri, S.Pd', 'IX', 'ASN PPPK GURU', 'Subang, 08 Februari 1997', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(84, '19650325 198703 1 006', 'Mumuh Muhyidin', 'III/b', 'Pelaksana', 'Subang, 25 Maret 1965', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(85, '19690616 199003 1 005', 'Rohmat Nurdin', 'III/b', 'Pelaksana', 'Bandung, 16 Juni 1969', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(86, '19680628 199003 1 007', 'Nono Saryono', 'III/b', 'Pelaksana', 'Subang, 28 Juni 1968', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(87, '19671005 199003 1 006', 'Endang', 'III/a', 'Pelaksana', 'Subang, 05 Oktober 1967', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(88, '19680803 199903 1 005', 'Jujum Sopandi', 'II/c', 'Pelaksana', 'Subang, 03 Agustus 1968', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(89, '-', 'Budi Prapanca, S.Pdi', '-', 'Guru Honorer Provinsi ', 'Subang, 11 April 1980', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(90, '-', 'Opik Ahmad T, S.Pd.I., Gr', '-', 'Guru Honorer Provinsi ', 'Subang, 21 Juni 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(91, '-', 'Yanti Siti Nuryanti S, S.Pd', '-', 'Guru Honorer Provinsi ', 'Subang, 11 Februari 1975', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(92, '-', 'Dendhy Gumulya, S.IP', '-', 'Guru Honorer Provinsi ', 'Subang, 11 Maret 1974', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(93, '-', 'Erni, S.Pd.I', '-', 'Guru Honorer Provinsi ', 'Tegal, 3 September 1975', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(94, '-', 'Nikkita Dwi Putra Syamsuati, S.Pd', '-', 'Guru Honorer Provinsi ', 'Bandung, 29 Mei 1989', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(95, '-', 'Atin Roslina, S.Ag', '-', 'Guru Honorer Provinsi ', 'Garut, 31 Agustus 1970', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(96, '-', 'Dina Hendriawati, S.Si', '-', 'Guru Honorer Provinsi ', 'Subang, 3 Agustus 1984', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(97, '-', 'Nunung Lestari, SS', '-', 'Guru Honorer Provinsi ', 'Subang, 16 Februari 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(98, '-', 'Sinta Fatmawati, SP., Gr', '-', 'Guru Honorer Provinsi ', 'Subang, 25 September 1986', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(99, '-', 'Nurhasanah, S.Pd', '-', 'Guru Honorer Provinsi ', 'Tangerang, 22 September 1992', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(100, '-', 'Yan Yan Restiyan, SP., Gr', '-', 'Guru Honorer Provinsi ', 'Bandung, 16 Mei 1984', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(101, '-', 'Herleniawati, S.Pd., Gr', '-', 'Guru Honorer Provinsi ', 'Karangampel, 09 September 1986', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(102, '-', 'Reni Tresnawati, S.Pd', '-', 'Guru Honorer Provinsi ', 'Purwakarta, 24 Maret 1989', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(103, '-', 'Heli Rohimah, S.Pd', '-', 'Guru Honorer Provinsi ', 'Subang, 06 Maret 1990', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(104, '-', 'Deniarsyah Bangbang, S.Pd., Gr', '-', 'Guru Honorer Provinsi ', 'Subang, 12 Januari 1978', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(105, '-', 'Amillia Surma, S.Pd.', '-', 'Guru Honorer Provinsi ', 'Jakarta, 25 Juli 1991 ', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(106, '-', 'Sriwijaya Kusuma Wardani, M.Si', '-', 'Guru Honorer Provinsi ', 'Subang, 22 Desember 1987', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(107, '-', 'Yayat Sukendar, S.Kom', '-', 'Guru Honorer Provinsi ', 'Subang, 21 Juni 1991', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(108, '-', 'Aan Handian, A.Md', '-', 'Guru Honorer Provinsi ', 'Subang, 16 Juni 1973', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(109, '-', 'Maulana Rachman, ST', '-', 'Guru Honorer Provinsi ', 'Jakarta, 05 November 1978', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(110, '-', 'Talim, ST', '-', 'Guru Honorer Provinsi ', 'Subang, 02 Juni 1993', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(111, '-', 'Dani Sujani, A.Md', '-', 'Guru Honorer Provinsi ', 'Ciamis, 10 Juni 1980', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(112, '-', 'Ucu Kusnadi, A.Md', '-', 'Guru Honorer Provinsi ', 'Karawang, 02 Oktober 1971', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(113, '-', 'Dadang Hidayat, A.Md', '-', 'Guru Honorer Provinsi ', 'Sumedang, 28 Agustus 1970', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(114, '-', 'Aan Anisah Khoerunisah, ST', '-', 'Guru Honorer Provinsi ', 'Subang, 27 Maret 1996', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(115, '-', 'Heriyanto, S.Pd.I', '-', 'Guru Honorer Provinsi ', 'Subang, 17 Agustus 1990', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(116, '-', 'Lingga Yogi Hambalih, S.Pd', '-', 'Guru Honorer Provinsi ', 'Purwakarta, 26 Mei 1996', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(117, '-', 'Otong Sunarya, S.Pd', '-', 'Guru Honorer Provinsi ', 'Subang, 16 Agustus 1992', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(118, '-', 'H. Abd Rahman, S.Ag', '-', 'Guru Honorer Provinsi ', 'Bogor, 20 Januari 1975', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(119, '-', 'Muhamad Hidayat Nur Ramdhan, S.Pd', '-', 'Guru Honorer Provinsi ', 'Wonogiri, 13 Februari 1997', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(120, '-', 'Iim Umi Sadiyatul Marpuah, ST', '-', 'Guru Honorer Provinsi ', 'Subang, 29 Agustus 1995', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(121, '-', 'Witno, ST', '-', 'Guru Honorer Provinsi ', 'Subang, 10 Mei 1993', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(122, '-', 'Euis Teti, S.Pd', '-', 'Guru Honorer Provinsi ', 'Subang, 16 Mei 1978', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(123, '-', 'Annes Soraya Hafiany, S.Pd', '-', 'Guru Tidak Tetap', 'Cimahi, 29 September 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(124, '-', 'Hendrik Saeful Azis, SST', '-', 'Guru Tidak Tetap', 'Subang, 16 November 1985', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(125, '-', 'Riska Sri Maryani, S.Hum', '-', 'Guru Tidak Tetap', 'Sumedang, 10 Oktober 1994', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(126, '-', 'Maryam Retno Aji, S.Pd', '-', 'Guru Tidak Tetap', 'Sukoharjo, 14 Oktober 1995', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(127, '-', 'Tria Maryani, S.Pd', '-', 'Guru Tidak Tetap', 'Subang, 01 Maret 1996', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(128, '-', 'Achmad Faiz Hermawan, S.Pd', '-', 'Guru Tidak Tetap', 'Cirebon, 13 April 1996', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(129, '-', 'Andryan Gabe Hutapea, S.Par', '-', 'Guru Tidak Tetap', 'Subang, 19 Mei 1996', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(130, '-', 'Ginggi Khansa Julyanidar, S.Pd', '-', 'Guru Tidak Tetap', 'Subang, 29 Juli 1997', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(131, '-', 'Cevi Dwi Andriana, S.Tr.Pt', '-', 'Guru Tidak Tetap', 'Subang, 15 November 1997', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(132, '-', 'Suryana ', '-', 'Pegawai Honorer Provinsi', 'Subang, 15 Juli 1971', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(133, '-', 'Tisna  Agus Jalil', '-', 'Pegawai Honorer Provinsi', 'Subang. 27 Agustus 1969', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(134, '-', 'Odih Sutisna', '-', 'Pegawai Honorer Provinsi', 'Subang, 05 Agustus 1975', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(135, '-', 'Wiwi Kartiwi, S.Pd', '-', 'Pegawai Honorer Provinsi', 'Subang, 04 Juli 1983', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(136, '-', 'Dodi Hermawan', '-', 'Pegawai Honorer Provinsi', 'Subang, 16 April 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(137, '-', 'Nana Darna', '-', 'Pegawai Honorer Provinsi', 'Subang, 20 Agustus 1976', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(138, '-', 'Aas Lasmana', '-', 'Pegawai Honorer Provinsi', 'Subang, 13 Januari 1985', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(139, '-', 'I t o k', '-', 'Pegawai Honorer Provinsi', 'Majalengka, 11 Juni 1972', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(140, '-', 'Euis Juliani, S.Tr.Kom', '-', 'Pegawai Honorer Provinsi', 'Subang, 15 Juli 1979', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(141, '-', 'Asep Adeng Kartiwa', '-', 'Pegawai Honorer Provinsi', 'Subang, 26 Juni 1988', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(142, '-', 'Dudi Haryadi', '-', 'Pegawai Honorer Provinsi', 'Subang, 21 April 1978', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(143, '-', 'Nining Rusningsih, A.Md', '-', 'Pegawai Honorer Provinsi', 'Subang, 13 Oktober 1975', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(144, '-', 'Rakhma Maryam N, S.Sos.', '-', 'Pegawai Honorer Provinsi', 'Bandung, 07 September 1977', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(145, '-', 'Willa Muliawati, S.Tr.Kom', '-', 'Pegawai Honorer Provinsi', 'Subang, 20 Maret 1980', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(146, '-', 'Wiwi Winiarti, S.Kom', '-', 'Pegawai Honorer Provinsi', 'Subang, 16 Maret 1989', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(147, '-', 'Sugiyanto', '-', 'Pegawai Honorer Provinsi', 'Subang, 25 Mei 1978', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(148, '-', 'Asep Gunawan', '-', 'Pegawai Honorer Provinsi', 'Subang, 13 Agustus 1988', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(149, '-', 'Hendra Suhendar', '-', 'Pegawai Honorer Provinsi', 'Sukabumi, 04 Mei 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(150, '-', 'Edi', '-', 'Pegawai Honorer Provinsi', 'Subang, 10 November 1977', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(151, '-', 'Lilis, A.Md', '-', 'Pegawai Honorer Provinsi', 'Subang, 12 Desember 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(152, '-', 'Magfi Nugraha Wahyuna, S.Pd', '-', 'Pegawai Honorer Provinsi', 'Subang, 14 September 1990', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(153, '-', 'Saepudin', '-', 'Pegawai Honorer Provinsi', 'Subang, 26 Desember 1980', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(154, '-', 'Duryani, SH', '-', 'Pegawai Honorer Provinsi', 'Indramayu, 12 Januari 1996', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(155, '-', 'Monica Nutie Thamrin', '-', 'Pegawai Honorer Provinsi', 'Subang, 09 April 1998', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(156, '-', 'Widiyanto', '-', 'Pegawai Honorer Provinsi', 'Subang, 03 Mei 1997', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(157, '-', 'Yanuar Rifal, S. AN', '-', 'Pegawai Honorer Provinsi', 'Subang, 06 Januari 1998', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(158, '-', 'Abdul Ajis', '-', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)', 'Subang, 03 September 1992', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(159, '-', 'Endang Iskandar', '-', 'Pegawai Tidak Tetap(Tenaga Administrasi)', 'Subang, 18 Nopember 1973', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(160, '-', 'Jaelani Bisri', '-', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)', 'Subang, 09 Juni 1994', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(161, '-', 'Maman Usman', '-', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)', 'Subang, 28 Februari 1990', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(162, '-', 'Nanang Heryana', '-', 'Pegawai Tidak Tetap(Petugas Kebersihan)', 'Subang, 13 Maret 1986', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(163, '-', 'Nuryadi', '-', 'Pegawai Tidak Tetap(Petugas Kebersihan)', 'Subang, 06 Mei 1982', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(164, '-', 'Rizal Fadli', '-', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)', 'Subang, 01 Oktober 1995', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(165, '-', 'Yudi Maulana Yusuf', '-', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)', 'Subang, 09 Maret 1978', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(166, '-', 'Zaenal Abidin', '-', 'Pegawai Tidak Tetap(Petugas Kebersihan)', 'Subang, 08 Agustus 1981', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(167, '-', 'Topan Nurpana', '-', 'Pegawai Tidak Tetap(Tenaga Administrasi)', 'Subang, 21 Juli 1999', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(168, '-', 'Daslam', '-', 'Pegawai Tidak Tetap(Tenaga Administrasi)', 'Brebes, 28 Februari 1989', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(169, '-', 'Fahmi Idris', '-', 'Pegawai Tidak Tetap(Tenaga Administrasi)', 'Subang, 11 November 2000', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(170, '-', 'Aty Sumiati', '-', 'Pegawai Tidak Tetap(Petugas Kebersihan)', 'Subang, 24 September 1979', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(171, '-', 'Ratih Febrianti', '-', 'Pegawai Tidak Tetap(Tenaga Administrasi)', 'Subang, 19 Februari 2001', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(172, '-', 'Rumyati', '-', 'Pegawai Tidak Tetap(Petugas Kebersihan)', 'Pati, 25 Januari 1968', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(173, '-', 'Tini Kartini', '-', 'Pegawai Tidak Tetap(Petugas Kebersihan)', 'Subang, 03 Juli 1977', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(174, '-', 'Haerul Jaman', '-', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)', 'Subang, 11 Maret 1988', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(175, '-', 'Rosita Yulia Narlianthi', '-', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)', 'Subang, 10 Juli 1985', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(176, '-', 'Novian Jambak', '-', 'Pegawai Tidak Tetap(Tenaga Administrasi)', 'Subang, 11 November 1997', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(177, '-', 'Adhi Sudrajat', '-', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)', 'Jakarta, 22 Januari 1970', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(178, '-', 'Rangga Komara', '-', 'Pegawai tidak tetap (Instruktur)', 'Subang, 17 Juni 2002', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(179, '-', 'Ahmad Aliansyah', '-', 'Pegawai tidak tetap (Instruktur)', 'Subang, 04 November 2002', '2023-06-25 01:55:33', '2023-06-25 01:55:33'),
(180, '-', 'Aep Bagus Bahrulalam', '-', 'Pegawai tidak tetap (Instruktur)', 'Subang, 07 Maret 2003', '2023-06-25 01:55:33', '2023-06-25 01:55:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_23_074558_create_sppds_table', 1),
(6, '2023_06_23_075541_create_datapegawais_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `sppd`
--

CREATE TABLE `sppd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengguna_anggaran` varchar(100) DEFAULT NULL,
  `datapegawai_id` bigint(20) NOT NULL,
  `biaya_perjalanan` varchar(100) DEFAULT NULL,
  `maksud_perjalanan` varchar(1000) DEFAULT NULL,
  `alat_angkutan` varchar(100) DEFAULT NULL,
  `tempat_berangkat` varchar(100) DEFAULT NULL,
  `tempat_tujuan` varchar(100) DEFAULT NULL,
  `lama_berangkat` varchar(100) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `namapengikut1` varchar(1000) DEFAULT NULL,
  `tgllhr1` date DEFAULT NULL,
  `ketpengikut1` varchar(1000) DEFAULT NULL,
  `namapengikut2` varchar(1000) DEFAULT NULL,
  `tgllhr2` date DEFAULT NULL,
  `ketpengikut2` varchar(1000) DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `akun` varchar(100) DEFAULT NULL,
  `ket` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'smkn2sbg', 'smkn2sbg@gmail.com', NULL, '$2y$10$fwu.Q0Gku4omHqg4.NKXW.wsa/F8liaspii1eZqH6zG1qB2T2cdsa', 'wGctVZQKyaz9WPD5DTz6wtrDUsrz9cAuqoc18hw2qsiBfGUBBHnFkeM9SHJ4', '2023-06-26 02:04:39', '2023-06-26 02:04:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sppd`
--
ALTER TABLE `sppd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sppd`
--
ALTER TABLE `sppd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
