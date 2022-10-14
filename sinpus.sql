-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2022 pada 15.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id_book` int(10) UNSIGNED NOT NULL,
  `nm_book` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `picture_book` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_book` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_from` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_book` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id_book`, `nm_book`, `id_category`, `picture_book`, `description`, `author_book`, `publish_from`, `status`, `url_book`, `created_at`, `updated_at`) VALUES
(1, 'Atomic Habits', 6, 'atomic-habits.jpeg', '<p class=\"bot-0 text\">Tiap awal tahun kita pasti punya resolusi atau cita-cita yang harus kita capai di akhir tahun nanti. Sebagian orang ingin lebih banyak membaca buku dan berolah raga secara teratur, sebagian lain ingin memiliki skill untuk bermain piano ataupun gitar. Namun pertanyaannya adalah, berapa banyak orang yang akhirnya bisa membangun kebiasaan baik yang mereka telah tetapkan ataupun mendapatkan skill yang mereka idamkan di penghujung tahun? Tanpa saya beritahu jawabannya pun kalian pasti sudah tahu jawabannya, berkaca dari apa yang telah kita alami selama ini.</p>              <p>Membangun kebiasaan baik memang sulit untuk dilakukan, apalagi jika lingkungan sekitar kita tidak mendukung atas perubahan yang kita inginkan. James Clear, penulis asal Amerika Serikat, dalam bukunya yang berjudul Atomic Habits memberitahukan cara-cara jitu untuk melakukan hal itu. Ini mungkin bukan hasil ringkasan terbaik, but I will try my best.</p>', 'James Clear', 'Admin', 'Tersedia', 'atomic-habits', '2022-10-10 06:11:00', '2022-10-10 06:11:00'),
(2, 'Psychology of Money', 6, 'psychology-of-money.jpg', '<p>Ketika John F. Kennedy mencalonkan diri sebagai presiden di tahun 1960, dia sempat mendapatkan pertanyaan mengenai apa yang beliau alami saat Great Depression terjadi (krisis ekonomi di tahun 1929 yang diakibatkan oleh hancurnya pasar saham). Ternyata jawaban beliau mengejutkan banyak pendengar. Beliau mengaku bahwa keluarga mereka mempunyai kekayaan yang cukup banyak di waktu itu. Sepuluh tahun setelah krisis berlalu, kekayaan mereka justru bertambah. Di tahun 1939, keluarganya memiliki lebih banyak Asisten Rumah Tangga dan mereka juga berpindah ke rumah yang lebih besar. John baru menyadari bahwa Great Depression mengacaukan keadaan ekonomi dari rakyat Amerika setelah beliau berkuliah di Harvard dan mempelajari hal tersebut. Di kala krisis, tak semua orang Amerika berada pada perahu yang sama, begitupun masyarakat di seluruh dunia.</p>\r\n<p>Seorang anak dari buruh tani dan seorang anak dari pialang saham sukses di Manhattan tak hanya memiliki jalan hidup yang berbeda &ndash; mereka juga memiliki sudut pandang yang berbeda dalam melihat risiko dan keuntungan ketika berurusan dengan pengalokasian uang. Hal yang sama juga berlaku pada orang kaya dengan pengalaman hidup yang berbeda. Contohnya, anak orang kaya yang tumbuh di masa-masa inflasi tinggi akan mempunyai pendekatan yang berbeda terhadap uang jika dibandingkan dengan orang lain yang tumbuh di saat harga-harga barang stabil meskipun mereka berdua memiliki kekayaan yang jumlahnya relatif sama. Kita semua berpikir bahwa kita tahu bagaimana cara dunia bekerja, padahal kita hanya merasakan secuil dari realitas yang terjadi di sekeliling dunia. Gunakan pendekatan &ldquo;we know less than we&rsquo;d like to think we do&rdquo; dalam memahami psikologi uang.</p>', 'Morgan Housel', 'Admin SINPUS', 'Tersedia', 'psychology-of-money', '2022-10-14 13:31:56', '2022-10-14 13:31:56'),
(3, 'Islam Santuy Ala Gus Baha', 1, 'islam-santuy.jpg', '<p>Gus Baha adalah oase di tengah merebaknya penceramah agama &ndash;atau orang-orang yang berharap dianggap demikian&mdash;yang lebih senang menampilkan agama sebagai sesuatu yang kaku dan bahkan cenderung wagu. Mereka kerap menampilkan wajah Tuhan sebagai sosok yang kejam dan penuh ancaman, padahal Tuhan adalah Maha Pengasih lagi Maha Penyayang. Dengan penampilan dan model penyampaian yang sederhana, Gus Baha mengembalikan marwah agama yang sebenarnya, bahwa agama adalah sumber kebahagiaan. Bersama Gus Baha, agama terasa sangat mudah untuk dipahami dan diamalkan. Dan semoga dengan itu, ada banyak manfaat dan kebaikan yang bisa kita tinggalkan.&nbsp;</p>', 'Gus Baha', 'Admin SINPUS', 'Tersedia', 'islam-santuy-ala-gus-baha', '2022-10-14 13:32:28', '2022-10-14 13:32:28'),
(4, 'The Calm Investor', 2, 'the-calm-investor.jpg', '<p>Warren Buffett, investor saham legendaris dan salah satu orang terkaya di dunia, mengatakan bahwa &ldquo;Investasi saham itu mudah kalau Anda bisa mengendalikan emosi Anda&rdquo;. Tapi pertanyaannya, bagaimana cara untuk mengendalikan emosi tersebut? Bagaimana caranya agar seorang investor bisa mengelola portofolionya tanpa perasaan cemas, deg-degan, atau gelisah? Karena sering kali, kesalahan yang dilakukan seorang investor, yang pada akhirnya menyebabkan kerugian atau berkurangnya nilai keuntungan yang diperoleh, bukan karena dia tidak tahu cara menganalisis, tapi karena ia mudah merasa panik atau serakah sehingga tidak mampu bertindak secara logis.</p>\r\n<p>Tapi sayangnya investor seperti inilah yang banyak terdapat di bursa saham di Indonesia, dan alhasil kerugian besar-besaran kemudian menjadi cerita yang biasa. The Calm Investor, sesuai judulnya, adalah buku tentang kontrol emosi dalam berinvestasi di pasar modal, yang bertujuan untuk mentransformasi Anda menjadi investor yang tenang dan sabar, tidak emosional, mampu membeli dan menjual saham berdasarkan analisis yang logis dan bukan karena perasaan takut atau serakah, dan bisa tidur nyenyak di malam hari tanpa sedikit pun khawatir soal bagaimana saham Anda keesokan harinya. Orang-orang mengatakan bahwa investasi saham itu 90% emosi dan 10% analisis, jadi, selamat! Anda baru saja menemukan buku yang mengupas tuntas bagian yang 90% tersebut.</p>', 'Teguh Hidayat', 'Admin SINPUS', 'Tersedia', 'the-calm-investor', '2022-10-14 13:43:20', '2022-10-14 13:43:20'),
(5, 'Belajar Cepat Vuejs', 3, 'belajar-cepat-vuejs.jpg', '<p>Saat ini, ada 3 framework Javascript yang paling diminati, yaitu AngularJS, ReactJS dan Vue.js. Dalam buku ini akan membahas khusus Vue.js yang lebih unggul secara kecepatan dan performa dibandingkan framework Javascript lainnya, karena ukurannya yang kecil dan simple, namun powerfull. Selain itu, package dan plugin sudah banyak include dalam Vue.js, sehingga dapat langsung digunakan, tanpa menginstall plugin-plugin ataupun external library.</p>\r\n<p>Vue.js dibangun dengan pendekatan Approachable yang fokus pada kesederhanaan dan kerapian struktur codingnya - cukup pengetahuan dasar HTML, CSS, dan Javascript - memudahkan pengguna mempelajarinya dengan cepat.</p>', 'Lutfi Gani', 'Admin SINPUS', 'Tersedia', 'belajar-cepat-vuejs', '2022-10-14 13:45:36', '2022-10-14 13:45:36'),
(6, 'Buku Novel KALA', 4, 'kala.jpg', '<p>Novel yang bersampulkan dominan hitam ini menceritakan kisah sejoli yang sama-sama menanam luka di hati mereka. Kedua tokoh utama tersebut bernama Lara dan Saka, masing-masing memiliki trauma pada masa lalunya, yang satu melukai, sedangkan yang satu lagi terlukai.</p>\r\n<p>Dalam penulisannya terdapat pemilihan diksi yang sangat baik, sehingga para penikmat sastra bisa menjadi refrensi untuk dibaca saat waktu senggang.</p>\r\n<p>Novel Kala ditulis oleh 2 penulis yaitu Stefani Bella dan Syahid Muhammad.</p>', 'Stefani Bella, Syahid Muhammad', 'Admin SINPUS', 'Tersedia', 'buku-novel-kala', '2022-10-14 13:49:55', '2022-10-14 13:49:55'),
(7, 'Buku Programming Laravel Basic', 5, 'programmer-laravel-basic.jpg', '<p>Buku dengan judul &ldquo;Semua Bisa Menjadi Programmer Laravel Basic&rdquo; ini merupakan buku dasar dalam mempelajari framework PHP dengan Laravel yang saat ini sedang populer. Dengan buku ini, tandanya Anda sudah belajar sampai tingkat menengah. Akan dibahas pula kelebihan dari script server programming dengan Laravel, serta materi lengkap dari dasar hingga menengah. Keunggulan buku ini adalah dapat memandu Anda membuat program web dengan Laravel dengan database MySQL dengan pembahasan yang mudah dan sistematis sehingga Anda tidak akan kesulitan mempelajarinya. Buku ini dibagi menjadi 30 bab, disusun secara sistematis dari program yang sederhana hingga database sehingga memudahkan Anda menjadi programmer dengan Laravel. Dengan mengacu beberapa buku penulis yang best seller maka terciptalah buku ini. Dalam buku ini, penulis juga membahas proses instalasi XAMPP di dalam Lampiran. Buku ini juga dapat dipakai oleh praktisi pendidikan, karyawan, dan mahasiswa.&nbsp;</p>', 'Yuniar Supardi, Sulaeman', 'Admin SINPUS', 'Tersedia', 'buku-programming-laravel-basic', '2022-10-14 13:53:25', '2022-10-14 13:53:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `nm_category` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_category` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `nm_category`, `url_category`) VALUES
(1, 'Agama', 'agama'),
(2, 'Bisnis', 'bisnis'),
(3, 'Computer', 'computer'),
(4, 'Fiksi', 'fiksi'),
(5, 'Programming', 'programming'),
(6, 'Psikologi', 'psikologi'),
(7, 'Sejarah', 'sejarah'),
(8, 'Lainnya', 'lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nomor_kelas` varchar(3) NOT NULL,
  `prodi_kelas` varchar(128) NOT NULL,
  `url_kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
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
-- Struktur dari tabel `kembalikan`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_10_10_034926_create_roles_table', 1),
(6, '2022_10_10_035240_create_category_table', 1),
(7, '2022_10_10_035401_create_wishlist_table', 1),
(8, '2022_10_10_035531_create_books_table', 1),
(9, '2022_10_10_035857_create_pinjam_table', 1),
(10, '2022_10_10_035919_create_kembalikan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `duration` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id_role` int(10) UNSIGNED NOT NULL,
  `nm_role` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `picture`, `phone_number`, `id_kelas`, `id_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin SINPUS', 'admin@pbs2app.my.id', NULL, '$2y$10$si/CD0.oDaGtTgD2rDm8FO0htz5OIvxXDIVCNhGLThT7OjN4SwtYa', 'modern-abstract-geometric-background-free-vector.jpg', '123123123', 16, 1, NULL, '2022-10-09 21:14:40', '2022-10-09 21:14:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kembalikan`
--
ALTER TABLE `kembalikan`
  ADD PRIMARY KEY (`id_kembalikan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kembalikan`
--
ALTER TABLE `kembalikan`
  MODIFY `id_kembalikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
