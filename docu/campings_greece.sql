-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.6
-- Erstellungszeit: 10. Mai 2020 um 14:32
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `campings_greece`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `campings_en`
--

CREATE TABLE `campings_en` (
  `id_camping_en` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_en` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_en` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_en` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `campings_gr`
--

CREATE TABLE `campings_gr` (
  `id_camping_gr` bigint(20) UNSIGNED NOT NULL,
  `name_gr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_gr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_gr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_gr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cards`
--

CREATE TABLE `cards` (
  `id_cards` bigint(20) UNSIGNED NOT NULL,
  `visa` int(11) NOT NULL,
  `master` int(11) NOT NULL,
  `other_card` int(11) NOT NULL,
  `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_info_campings`
--

CREATE TABLE `contact_info_campings` (
  `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL,
  `email_camping` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_status` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `descriptions`
--

CREATE TABLE `descriptions` (
  `id_descriptions` bigint(20) UNSIGNED NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_gr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `facilities`
--

CREATE TABLE `facilities` (
  `id_facilites` bigint(20) UNSIGNED NOT NULL,
  `distance_sea` int(11) NOT NULL,
  `places` int(11) NOT NULL,
  `area_sq` int(11) NOT NULL,
  `room` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `market` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bar` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cooking_facil` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ironic_facil` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hanticapped_people` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobil_home` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_05_200709_create_users_table', 2),
(4, '2020_05_06_165714_create_users', 3),
(5, '2020_05_10_094749_roles', 3),
(6, '2020_05_10_095354_users', 4),
(7, '2020_05_10_100605_photo_profiles', 5),
(8, '2020_05_10_100911_campings_gr', 6),
(9, '2020_05_10_102407_contact_info_campings', 7),
(10, '2020_05_10_103105_status', 7),
(11, '2020_05_10_103755_contact_info_campings', 8),
(12, '2020_05_10_103837_campings_gr', 9),
(13, '2020_05_10_103913_campings_en', 10),
(14, '2020_05_10_103948_facilities', 11),
(15, '2020_05_10_104416_sports_facilities', 12),
(16, '2020_05_10_104630_photos_camping', 13),
(17, '2020_05_10_104849_cards', 14),
(18, '2020_05_10_105029_descriptions', 15);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `photos_camping`
--

CREATE TABLE `photos_camping` (
  `id_photos_camping` bigint(20) UNSIGNED NOT NULL,
  `img1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `photo_profiles`
--

CREATE TABLE `photo_profiles` (
  `id_photo_profile` bigint(20) UNSIGNED NOT NULL,
  `url_photo_profile` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `roles`
--

CREATE TABLE `roles` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sports_facilities`
--

CREATE TABLE `sports_facilities` (
  `id_sports_facilites` bigint(20) UNSIGNED NOT NULL,
  `beach_volley` int(11) NOT NULL,
  `tennis` int(11) NOT NULL,
  `footbal_5x5` int(11) NOT NULL,
  `ping_pong` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basket` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pool` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `status`
--

CREATE TABLE `status` (
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `campings_en`
--
ALTER TABLE `campings_en`
  ADD PRIMARY KEY (`id_camping_en`),
  ADD KEY `campings_en_id_contact_info_camping_foreign` (`id_contact_info_camping`);

--
-- Indizes für die Tabelle `campings_gr`
--
ALTER TABLE `campings_gr`
  ADD PRIMARY KEY (`id_camping_gr`),
  ADD KEY `campings_gr_id_contact_info_camping_foreign` (`id_contact_info_camping`);

--
-- Indizes für die Tabelle `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id_cards`),
  ADD KEY `cards_id_contact_info_camping_foreign` (`id_contact_info_camping`);

--
-- Indizes für die Tabelle `contact_info_campings`
--
ALTER TABLE `contact_info_campings`
  ADD PRIMARY KEY (`id_contact_info_camping`),
  ADD KEY `contact_info_campings_id_status_foreign` (`id_status`),
  ADD KEY `contact_info_campings_id_user_foreign` (`id_user`);

--
-- Indizes für die Tabelle `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id_descriptions`),
  ADD KEY `descriptions_id_contact_info_camping_foreign` (`id_contact_info_camping`);

--
-- Indizes für die Tabelle `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id_facilites`),
  ADD KEY `facilities_id_contact_info_camping_foreign` (`id_contact_info_camping`);

--
-- Indizes für die Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `photos_camping`
--
ALTER TABLE `photos_camping`
  ADD PRIMARY KEY (`id_photos_camping`),
  ADD KEY `photos_camping_id_contact_info_camping_foreign` (`id_contact_info_camping`);

--
-- Indizes für die Tabelle `photo_profiles`
--
ALTER TABLE `photo_profiles`
  ADD PRIMARY KEY (`id_photo_profile`),
  ADD KEY `photo_profiles_id_user_foreign` (`id_user`);

--
-- Indizes für die Tabelle `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indizes für die Tabelle `sports_facilities`
--
ALTER TABLE `sports_facilities`
  ADD PRIMARY KEY (`id_sports_facilites`),
  ADD KEY `sports_facilities_id_contact_info_camping_foreign` (`id_contact_info_camping`);

--
-- Indizes für die Tabelle `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `campings_en`
--
ALTER TABLE `campings_en`
  MODIFY `id_camping_en` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `campings_gr`
--
ALTER TABLE `campings_gr`
  MODIFY `id_camping_gr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cards`
--
ALTER TABLE `cards`
  MODIFY `id_cards` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `contact_info_campings`
--
ALTER TABLE `contact_info_campings`
  MODIFY `id_contact_info_camping` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id_descriptions` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id_facilites` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT für Tabelle `photos_camping`
--
ALTER TABLE `photos_camping`
  MODIFY `id_photos_camping` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `photo_profiles`
--
ALTER TABLE `photo_profiles`
  MODIFY `id_photo_profile` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `sports_facilities`
--
ALTER TABLE `sports_facilities`
  MODIFY `id_sports_facilites` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `status`
--
ALTER TABLE `status`
  MODIFY `id_status` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `campings_en`
--
ALTER TABLE `campings_en`
  ADD CONSTRAINT `campings_en_id_contact_info_camping_foreign` FOREIGN KEY (`id_contact_info_camping`) REFERENCES `contact_info_campings` (`id_contact_info_camping`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `campings_gr`
--
ALTER TABLE `campings_gr`
  ADD CONSTRAINT `campings_gr_id_contact_info_camping_foreign` FOREIGN KEY (`id_contact_info_camping`) REFERENCES `contact_info_campings` (`id_contact_info_camping`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_id_contact_info_camping_foreign` FOREIGN KEY (`id_contact_info_camping`) REFERENCES `contact_info_campings` (`id_contact_info_camping`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `contact_info_campings`
--
ALTER TABLE `contact_info_campings`
  ADD CONSTRAINT `contact_info_campings_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_info_campings_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `descriptions`
--
ALTER TABLE `descriptions`
  ADD CONSTRAINT `descriptions_id_contact_info_camping_foreign` FOREIGN KEY (`id_contact_info_camping`) REFERENCES `contact_info_campings` (`id_contact_info_camping`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_id_contact_info_camping_foreign` FOREIGN KEY (`id_contact_info_camping`) REFERENCES `contact_info_campings` (`id_contact_info_camping`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `photos_camping`
--
ALTER TABLE `photos_camping`
  ADD CONSTRAINT `photos_camping_id_contact_info_camping_foreign` FOREIGN KEY (`id_contact_info_camping`) REFERENCES `contact_info_campings` (`id_contact_info_camping`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `photo_profiles`
--
ALTER TABLE `photo_profiles`
  ADD CONSTRAINT `photo_profiles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `sports_facilities`
--
ALTER TABLE `sports_facilities`
  ADD CONSTRAINT `sports_facilities_id_contact_info_camping_foreign` FOREIGN KEY (`id_contact_info_camping`) REFERENCES `contact_info_campings` (`id_contact_info_camping`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
