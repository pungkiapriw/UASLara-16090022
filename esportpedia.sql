-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 03:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esportpedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cat` int(11) NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `id_cat`, `judul`, `foto`, `isi`, `preview`, `kategori`, `view`, `deleted`, `created_at`, `updated_at`) VALUES
(3, 7, 'This The New Title Of Our Web', '1561731525LdxWi4AFY8YVCeb8pkhOMw.jpg', '<p>The format of containt must atleast have 151 length of character, so i am trying to input this character in order for it to work hehe</p>', 'The format of containt must atleast have 151 length of character, so i am trying to input this character in order for it to work hehe', 'News', 7, 0, '2019-06-28 07:18:45', '2019-06-30 08:29:04'),
(4, 7, 'Rahasia Onic Esport Memenangkan Lomba Mobalog', '1561762531EeZm3hBrUoBrNQ8qTSd5Im.jpg', '<p><span style=\"font-size:14px\"><img alt=\"yes\" src=\"https://cdn.ckeditor.com/4.11.4/full/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" />Kemenangan berturut turut oleh onic Esport apasih rahasia nya?</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Onic Esport lagi lagi memenangkan pertanding mobile legend setelah berhasil merebut piala presiden dengan mudah,</span></p>\r\n\r\n<p><span style=\"font-size:14px\">pasti kalian penasaran kan gimana bisa onic esport&nbsp; memenangkan pertandingan berturut turut tanpa kehilangan turret.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"https://cdn2.tstatic.net/makassar/foto/bank/images/onic-esport.jpg\" style=\"border-style:solid; border-width:1px; height:393px; width:700px\" /></span></p>\r\n\r\n<ul>\r\n	<li>x<span style=\"font-size:14px\">Kerja sama Yang kompak</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\">tentu saja kerja sama menjadi kunci nya<br />\r\nsesuai kutipan dari usuf mantan pelatih evos</span></p>\r\n\r\n<blockquote>\r\n<p><br />\r\n<span style=\"font-size:14px\">kalo kalian gak bisa kerja sama saya berhenti jadi pelatih evos, by usuf</span></p>\r\n</blockquote>\r\n\r\n<p><img alt=\"yes\" src=\"https://cdn.ckeditor.com/4.11.4/full/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" /></p>\r\n\r\n<p>&nbsp;</p>', 'Kemenangan berturut turut oleh onic Esport apasih rahasia nya?\r\n\r\nOnic Esport lagi lagi memenangkan pertanding mobile legend setelah berhasil merebut piala presiden dengan mudah,\r\n\r\npasti kalian penasaran kan gimana bisa onic esport  memenangkan pertandingan berturut turut tanpa kehilangan turret.', 'News', 17, 0, '2019-06-28 16:00:33', '2019-07-02 07:50:03'),
(6, 5, 'lorem ipsum', '1561893162MyRMJ1YjUhcLfQ497NMeV8.png', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', 'What is Lorem Ipsum?\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nWhy do we use it?\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'tips', 4, 0, '2019-06-30 04:12:42', '2019-06-30 04:12:42'),
(7, 4, 'jaksdkdsabjasd', '1562086870xG9RU0ICW26I8yPpUb5cyq.png', '<div style=\"background-color:#1e1e1e; color:#d4d4d4; font-family:Consolas,\'Courier New\',monospace; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#4ec9b0\">DB</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">table</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;articles&#39;</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">where</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;id&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#9cdcfe\">$id</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">update</span><span style=\"color:#d4d4d4\">([</span><span style=\"color:#ce9178\">&#39;view&#39;</span><span style=\"color:#d4d4d4\">=&gt;</span><span style=\"color:#4ec9b0\">DB</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">raw</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;view+1&#39;</span><span style=\"color:#d4d4d4\">)]);</span></div>\r\n\r\n<div><span style=\"color:#9cdcfe\">$item</span><span style=\"color:#d4d4d4\"> = </span><span style=\"color:#4ec9b0\">article</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">find</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#9cdcfe\">$id</span><span style=\"color:#d4d4d4\">);</span></div>\r\n&nbsp;\r\n\r\n<div><span style=\"color:#9cdcfe\">$log</span><span style=\"color:#d4d4d4\"> = [</span></div>\r\n\r\n<div><span style=\"color:#ce9178\">&#39;isi&#39;</span><span style=\"color:#d4d4d4\"> =&gt; </span><span style=\"color:#ce9178\">&#39;Someone Just Viewed on &quot; &#39;</span><span style=\"color:#d4d4d4\">.</span><span style=\"color:#9cdcfe\">$item</span><span style=\"color:#d4d4d4\">-&gt;</span><span style=\"color:#9cdcfe\">judul</span><span style=\"color:#d4d4d4\">.</span><span style=\"color:#ce9178\">&#39;&quot;&#39;</span></div>\r\n\r\n<div><span style=\"color:#d4d4d4\">];</span></div>\r\n\r\n<div><span style=\"color:#9cdcfe\">$logs</span><span style=\"color:#d4d4d4\"> = </span><span style=\"color:#4ec9b0\">logs</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">create</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#9cdcfe\">$log</span><span style=\"color:#d4d4d4\">);</span></div>\r\n\r\n<div><span style=\"color:#6a9955\">//return article::find($id);</span></div>\r\n\r\n<div><span style=\"color:#9cdcfe\">$data</span><span style=\"color:#d4d4d4\"> = </span><span style=\"color:#4ec9b0\">article</span><span style=\"color:#d4d4d4\">::</span><span style=\"color:#dcdcaa\">where</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;deleted&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#ce9178\">&#39;=&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#b5cea8\">0</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">orderBy</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;view&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#ce9178\">&#39;desc&#39;</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">take</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#b5cea8\">4</span><span style=\"color:#d4d4d4\">)-&gt;</span><span style=\"color:#dcdcaa\">get</span><span style=\"color:#d4d4d4\">();</span></div>\r\n\r\n<div><span style=\"color:#c586c0\">return</span><span style=\"color:#d4d4d4\"> </span><span style=\"color:#dcdcaa\">view</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;frontend.post&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#dcdcaa\">compact</span><span style=\"color:#d4d4d4\">(</span><span style=\"color:#ce9178\">&#39;item&#39;</span><span style=\"color:#d4d4d4\">,</span><span style=\"color:#ce9178\">&#39;data&#39;</span><span style=\"color:#d4d4d4\">));</span></div>\r\n</div>', 'PS C:\\xampp\\htdocs\\uselesstv\\private> php artisan migrate:rollback\r\nRolling back: 2019_07_02_164556_logs\r\nRolled back:  2019_07_02_164556_logs\r\nPS C:\\xampp\\htdocs\\uselesstv\\private> php artisan migrate\r\nMigrating: 2019_07_02_164556_logs\r\nMigrated:  2019_07_02_164556_logs', 'info', 1, 0, '2019-07-02 10:01:10', '2019-07-02 10:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `sub_kategori`, `deleted`, `created_at`, `updated_at`) VALUES
(2, 'Games', 'game', 0, '2019-06-29 07:40:00', '2019-06-30 07:47:44'),
(3, 'Games', 'gaming gear', 0, '2019-06-29 07:42:23', '2019-06-29 07:42:23'),
(4, 'Games', 'info', 0, '2019-06-29 07:46:09', '2019-06-29 07:46:09'),
(5, 'Games', 'tips', 0, '2019-06-29 07:46:31', '2019-06-29 07:46:31'),
(6, 'News', 'Esport', 0, '2019-06-29 07:47:16', '2019-06-29 07:47:16'),
(7, 'News', 'News', 0, '2019-06-29 07:47:36', '2019-07-02 10:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_06_27_143518_create_articles_table', 1),
(2, '2019_06_27_143626_create_categories_table', 1),
(3, '2019_07_02_025350_create_users_table', 2),
(4, '2019_07_02_030033_create_password_reset_table', 3),
(6, '2019_07_02_164556_logs', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pungkiapriw@gmail.com', '$2y$10$5evx1yhQQRovFBd.1TK8qurB0dsBZ7/LvPfhLTyuDr5nJhiGqIkYu', '2019-07-02 06:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pungky Apri Wibowo', 'pungkiapriw@gmail.com', NULL, '$2y$10$aQQ/vFvSuU0srMTpruaG/.sB7Eo/6EFmo/PZuoFu9JquyEQateYCC', 'I5wgjCCBma51VIpl1hJba9m9t8jTe3QOute2ZGzEg6DdfTaPUC5ORmCeP8nz', '2019-07-02 05:45:48', '2019-07-02 05:45:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_id_unique` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_id_unique` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_reset_email_index` (`email`),
  ADD KEY `password_reset_token_index` (`token`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
