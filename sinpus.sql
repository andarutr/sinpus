-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 05:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id_book` int(10) UNSIGNED NOT NULL,
  `nm_book` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `picture_book` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_book` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_from` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_statusbuku` int(11) NOT NULL,
  `url_book` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_book`, `nm_book`, `id_category`, `picture_book`, `description`, `author_book`, `publish_from`, `id_statusbuku`, `url_book`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Atomic Habits', 6, 'atomic-habits.jpg', '<p class=\"bot-0 text\">Tiap awal tahun kita pasti punya resolusi atau cita-cita yang harus kita capai di akhir tahun nanti. Sebagian orang ingin lebih banyak membaca buku dan berolah raga secara teratur, sebagian lain ingin memiliki skill untuk bermain piano ataupun gitar. Namun pertanyaannya adalah, berapa banyak orang yang akhirnya bisa membangun kebiasaan baik yang mereka telah tetapkan ataupun mendapatkan skill yang mereka idamkan di penghujung tahun? Tanpa saya beritahu jawabannya pun kalian pasti sudah tahu jawabannya, berkaca dari apa yang telah kita alami selama ini.</p>              <p>Membangun kebiasaan baik memang sulit untuk dilakukan, apalagi jika lingkungan sekitar kita tidak mendukung atas perubahan yang kita inginkan. James Clear, penulis asal Amerika Serikat, dalam bukunya yang berjudul Atomic Habits memberitahukan cara-cara jitu untuk melakukan hal itu. Ini mungkin bukan hasil ringkasan terbaik, but I will try my best.</p>', 'James Clear', 'Admin SINPUS', 1, 'atomic-habits', NULL, '2022-10-10 06:11:00', '2022-11-14 04:32:18'),
(2, 'Psychology of Money', 6, 'psychology-of-money.jpg', '<p>Ketika John F. Kennedy mencalonkan diri sebagai presiden di tahun 1960, dia sempat mendapatkan pertanyaan mengenai apa yang beliau alami saat Great Depression terjadi (krisis ekonomi di tahun 1929 yang diakibatkan oleh hancurnya pasar saham). Ternyata jawaban beliau mengejutkan banyak pendengar. Beliau mengaku bahwa keluarga mereka mempunyai kekayaan yang cukup banyak di waktu itu. Sepuluh tahun setelah krisis berlalu, kekayaan mereka justru bertambah. Di tahun 1939, keluarganya memiliki lebih banyak Asisten Rumah Tangga dan mereka juga berpindah ke rumah yang lebih besar. John baru menyadari bahwa Great Depression mengacaukan keadaan ekonomi dari rakyat Amerika setelah beliau berkuliah di Harvard dan mempelajari hal tersebut. Di kala krisis, tak semua orang Amerika berada pada perahu yang sama, begitupun masyarakat di seluruh dunia.</p>\r\n<p>Seorang anak dari buruh tani dan seorang anak dari pialang saham sukses di Manhattan tak hanya memiliki jalan hidup yang berbeda &ndash; mereka juga memiliki sudut pandang yang berbeda dalam melihat risiko dan keuntungan ketika berurusan dengan pengalokasian uang. Hal yang sama juga berlaku pada orang kaya dengan pengalaman hidup yang berbeda. Contohnya, anak orang kaya yang tumbuh di masa-masa inflasi tinggi akan mempunyai pendekatan yang berbeda terhadap uang jika dibandingkan dengan orang lain yang tumbuh di saat harga-harga barang stabil meskipun mereka berdua memiliki kekayaan yang jumlahnya relatif sama. Kita semua berpikir bahwa kita tahu bagaimana cara dunia bekerja, padahal kita hanya merasakan secuil dari realitas yang terjadi di sekeliling dunia. Gunakan pendekatan &ldquo;we know less than we&rsquo;d like to think we do&rdquo; dalam memahami psikologi uang.</p>', 'Morgan Housel', 'Admin SINPUS', 1, 'psychology-of-money', NULL, '2022-10-14 13:31:56', '2022-10-14 13:31:56'),
(3, 'Islam Santuy Ala Gus Baha', 1, 'islam-santuy.jpg', '<p>Gus Baha adalah oase di tengah merebaknya penceramah agama &ndash;atau orang-orang yang berharap dianggap demikian&mdash;yang lebih senang menampilkan agama sebagai sesuatu yang kaku dan bahkan cenderung wagu. Mereka kerap menampilkan wajah Tuhan sebagai sosok yang kejam dan penuh ancaman, padahal Tuhan adalah Maha Pengasih lagi Maha Penyayang. Dengan penampilan dan model penyampaian yang sederhana, Gus Baha mengembalikan marwah agama yang sebenarnya, bahwa agama adalah sumber kebahagiaan. Bersama Gus Baha, agama terasa sangat mudah untuk dipahami dan diamalkan. Dan semoga dengan itu, ada banyak manfaat dan kebaikan yang bisa kita tinggalkan.&nbsp;</p>', 'Gus Baha', 'Admin SINPUS', 4, 'islam-santuy-ala-gus-baha', NULL, '2022-10-14 13:32:28', '2022-11-15 09:48:31'),
(4, 'The Calm Investor', 2, 'the-calm-investor.jpg', '<p>Warren Buffett, investor saham legendaris dan salah satu orang terkaya di dunia, mengatakan bahwa &ldquo;Investasi saham itu mudah kalau Anda bisa mengendalikan emosi Anda&rdquo;. Tapi pertanyaannya, bagaimana cara untuk mengendalikan emosi tersebut? Bagaimana caranya agar seorang investor bisa mengelola portofolionya tanpa perasaan cemas, deg-degan, atau gelisah? Karena sering kali, kesalahan yang dilakukan seorang investor, yang pada akhirnya menyebabkan kerugian atau berkurangnya nilai keuntungan yang diperoleh, bukan karena dia tidak tahu cara menganalisis, tapi karena ia mudah merasa panik atau serakah sehingga tidak mampu bertindak secara logis.</p>\r\n<p>Tapi sayangnya investor seperti inilah yang banyak terdapat di bursa saham di Indonesia, dan alhasil kerugian besar-besaran kemudian menjadi cerita yang biasa. The Calm Investor, sesuai judulnya, adalah buku tentang kontrol emosi dalam berinvestasi di pasar modal, yang bertujuan untuk mentransformasi Anda menjadi investor yang tenang dan sabar, tidak emosional, mampu membeli dan menjual saham berdasarkan analisis yang logis dan bukan karena perasaan takut atau serakah, dan bisa tidur nyenyak di malam hari tanpa sedikit pun khawatir soal bagaimana saham Anda keesokan harinya. Orang-orang mengatakan bahwa investasi saham itu 90% emosi dan 10% analisis, jadi, selamat! Anda baru saja menemukan buku yang mengupas tuntas bagian yang 90% tersebut.</p>', 'Teguh Hidayat', 'Admin SINPUS', 1, 'the-calm-investor', NULL, '2022-10-14 13:43:20', '2022-10-14 13:43:20'),
(5, 'Belajar Cepat Vuejs', 3, 'belajar-cepat-vuejs.jpg', '<p>Saat ini, ada 3 framework Javascript yang paling diminati, yaitu AngularJS, ReactJS dan Vue.js. Dalam buku ini akan membahas khusus Vue.js yang lebih unggul secara kecepatan dan performa dibandingkan framework Javascript lainnya, karena ukurannya yang kecil dan simple, namun powerfull. Selain itu, package dan plugin sudah banyak include dalam Vue.js, sehingga dapat langsung digunakan, tanpa menginstall plugin-plugin ataupun external library.</p>\r\n<p>Vue.js dibangun dengan pendekatan Approachable yang fokus pada kesederhanaan dan kerapian struktur codingnya - cukup pengetahuan dasar HTML, CSS, dan Javascript - memudahkan pengguna mempelajarinya dengan cepat.</p>', 'Lutfi Gani', 'Admin SINPUS', 4, 'belajar-cepat-vuejs', NULL, '2022-10-14 13:45:36', '2022-11-14 05:46:53'),
(6, 'Buku Novel KALA', 4, 'kala.jpg', '<p>Novel yang bersampulkan dominan hitam ini menceritakan kisah sejoli yang sama-sama menanam luka di hati mereka. Kedua tokoh utama tersebut bernama Lara dan Saka, masing-masing memiliki trauma pada masa lalunya, yang satu melukai, sedangkan yang satu lagi terlukai.</p>\r\n<p>Dalam penulisannya terdapat pemilihan diksi yang sangat baik, sehingga para penikmat sastra bisa menjadi refrensi untuk dibaca saat waktu senggang.</p>\r\n<p>Novel Kala ditulis oleh 2 penulis yaitu Stefani Bella dan Syahid Muhammad.</p>', 'Stefani Bella, Syahid Muhammad', 'Admin SINPUS', 4, 'buku-novel-kala', NULL, '2022-10-14 13:49:55', '2022-11-15 03:22:49'),
(7, 'Buku Programming Laravel Basic', 5, 'programmer-laravel-basic.jpg', '<p>Buku dengan judul &ldquo;Semua Bisa Menjadi Programmer Laravel Basic&rdquo; ini merupakan buku dasar dalam mempelajari framework PHP dengan Laravel yang saat ini sedang populer. Dengan buku ini, tandanya Anda sudah belajar sampai tingkat menengah. Akan dibahas pula kelebihan dari script server programming dengan Laravel, serta materi lengkap dari dasar hingga menengah. Keunggulan buku ini adalah dapat memandu Anda membuat program web dengan Laravel dengan database MySQL dengan pembahasan yang mudah dan sistematis sehingga Anda tidak akan kesulitan mempelajarinya. Buku ini dibagi menjadi 30 bab, disusun secara sistematis dari program yang sederhana hingga database sehingga memudahkan Anda menjadi programmer dengan Laravel. Dengan mengacu beberapa buku penulis yang best seller maka terciptalah buku ini. Dalam buku ini, penulis juga membahas proses instalasi XAMPP di dalam Lampiran. Buku ini juga dapat dipakai oleh praktisi pendidikan, karyawan, dan mahasiswa.&nbsp;</p>', 'Yuniar Supardi, Sulaeman', 'Admin SINPUS', 1, 'buku-programming-laravel-basic', NULL, '2022-10-14 13:53:25', '2022-11-14 04:32:02'),
(8, 'Hikayat MajapahiT', 1, 'hikayat majapahit.jpg', '<p>OBersumber dari serat-serat kuno, Nino Oktorino berusaha merekonstruksi lini masa kebangkitan dan keruntuhan Majapahit, sebuah kerajaan yang bukan hanya terbesar di nusantara, tetapi juga disegani di wilayah Asia hingga China. Hikayat Majapahit berusaha memberikan dokumentasi secara objektif dan utuh mengenai kerajaan besar yang dalam historiografi nasional dianggap sebagai cikal bakal dari negara Indonesia modern. Sebuah laporan yang bukan hanya mencatat kisah para penguasa Majapahit tetapi juga kehidupan sehari-hari rakyatnya maupun hubungan kerajaan tersebut dengan dunia internasional pada zamannya. Sebuah catatan sejarah yang tidak hanya menuliskan kesohoran nama Majapahit tetapi juga borok-borok sejarahnya, mulai dari berdirinya hingga keruntuhan kerajaan tersebut.</p>', 'Nino OktorinO', 'Admin SINPUS', 1, 'hikayat-majapahit', NULL, '2022-10-14 14:07:08', '2022-11-14 05:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `nm_category` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_category` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nm_category`, `url_category`) VALUES
(1, 'Agama', 'agama'),
(2, 'Bisnis', 'bisnis'),
(3, 'Computer', 'computer'),
(4, 'Fiksi', 'fiksi'),
(5, 'Programming', 'programming'),
(6, 'Psikologi', 'psikologi'),
(7, 'Sejarah', 'sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nomor_kelas` varchar(3) NOT NULL,
  `prodi_kelas` varchar(128) NOT NULL,
  `url_kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nomor_kelas`, `prodi_kelas`, `url_kelas`) VALUES
(1, '10', 'Animasi', '10-animasi'),
(2, '11', 'Animasi', '11-animasi'),
(3, '12', 'Animasi', '12-animasi'),
(4, '10', 'Akuntansi', '10-akuntansi'),
(5, '11', 'Akuntansi', '11-akuntansi'),
(6, '12', 'Akuntansi', '12-akuntansi'),
(7, '10', 'Perbankan Syariah', '10-perbankan-syariah'),
(8, '11', 'Perbankan Syariah', '11-perbankan-syariah'),
(9, '12', 'Perbankan Syariah', '12-perbankan-syariah'),
(10, '10', 'OTKP1', '10-otkp1'),
(11, '11', 'OTKP1', '11-otkp1'),
(12, '12', 'OTKP1', '12-otkp1'),
(13, '10', 'OTKP2', '10-otkp2'),
(14, '11', 'OTKP2', '11-otkp2'),
(15, '12', 'OTKP2', '12-otkp2'),
(16, '', 'None', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kembalikan`
--

CREATE TABLE `kembalikan` (
  `id_kembalikan` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meringkas`
--

CREATE TABLE `meringkas` (
  `id_meringkas` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ringkasan` text NOT NULL,
  `total_kata` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_10_034926_create_roles_table', 1),
(6, '2022_10_10_035240_create_category_table', 1),
(7, '2022_10_10_035401_create_wishlist_table', 1),
(8, '2022_10_10_035531_create_books_table', 1),
(9, '2022_10_10_035857_create_pinjam_table', 1),
(10, '2022_10_10_035919_create_kembalikan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id_notif` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `do_notif` varchar(128) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('priobagus@gmail.com', '$2y$10$3fSCV/iVgl7.rEJDjW5yI.s4uN63.aafEoX1nOwlalx1F9Z1vN7Wy', '2022-10-19 07:27:45'),
('andarutr@gmail.com', '$2y$10$4Ea6mYAJaW/YyEtvxMMRgudNk43t3iUvG6eyWkikIKN4vYyLSzeDi', '2022-10-19 07:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `duration` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pointku`
--

CREATE TABLE `pointku` (
  `id_pointku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_meringkas` int(11) NOT NULL,
  `pointku` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(10) UNSIGNED NOT NULL,
  `nm_role` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `nm_role`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `status_buku`
--

CREATE TABLE `status_buku` (
  `id_statusbuku` int(11) NOT NULL,
  `nm_statusbuku` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_buku`
--

INSERT INTO `status_buku` (`id_statusbuku`, `nm_statusbuku`) VALUES
(1, 'Tersedia'),
(2, 'Proses Peminjaman'),
(3, 'Terpinjam'),
(4, 'Proses Pengembalian');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `picture`, `phone_number`, `id_kelas`, `id_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Si Admin', 'admin@pbs2app.my.id', '2022-10-19 07:44:41', '$2y$10$Wtca7LLfC3hee/cmEJFdIOuf89KwQzVxqKALevhGzQwa0.tT8h9/6', '10-reasons-to-love-yuji-itadori.jpg', '0123456', 1, 1, NULL, '2022-10-09 21:14:40', '2022-10-09 21:14:40'),
(2, 'Andaru Triadi', 'andarutr@gmail.com', '2022-11-16 04:01:37', '$2y$10$z23qhHDqIL8n6OfVgLqwNeB/XEAh.pgYft9UeyM1JbW4i6LsXCV0m', 'Andaru(2).jpg', '0123456', 3, 2, NULL, '2022-11-16 03:59:54', '2022-11-16 04:10:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kembalikan`
--
ALTER TABLE `kembalikan`
  ADD PRIMARY KEY (`id_kembalikan`);

--
-- Indexes for table `meringkas`
--
ALTER TABLE `meringkas`
  ADD PRIMARY KEY (`id_meringkas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `pointku`
--
ALTER TABLE `pointku`
  ADD PRIMARY KEY (`id_pointku`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `status_buku`
--
ALTER TABLE `status_buku`
  ADD PRIMARY KEY (`id_statusbuku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kembalikan`
--
ALTER TABLE `kembalikan`
  MODIFY `id_kembalikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meringkas`
--
ALTER TABLE `meringkas`
  MODIFY `id_meringkas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pointku`
--
ALTER TABLE `pointku`
  MODIFY `id_pointku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_buku`
--
ALTER TABLE `status_buku`
  MODIFY `id_statusbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
