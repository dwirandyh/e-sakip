/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 8.0.15 : Database - esakip
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_04_27_165234_create_satuan_kerjas_table',1),
(5,'2019_04_27_165904_create_petugas_satkers_table',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `penilaian` */

DROP TABLE IF EXISTS `penilaian`;

CREATE TABLE `penilaian` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_satuan_kerja` bigint(11) unsigned NOT NULL,
  `tahun` int(4) DEFAULT NULL,
  `renstra` varchar(200) DEFAULT NULL,
  `perjanjian_kinerja` varchar(200) DEFAULT NULL,
  `rencana_aksi` varchar(200) DEFAULT NULL,
  `akuntabilitas` varchar(200) DEFAULT NULL,
  `dokumen_pendukung` varchar(200) DEFAULT NULL,
  `nilai_akhir` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `penilaian_ibfk_1` (`id_satuan_kerja`),
  CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_satuan_kerja`) REFERENCES `satuan_kerja` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `penilaian` */

insert  into `penilaian`(`id`,`id_satuan_kerja`,`tahun`,`renstra`,`perjanjian_kinerja`,`rencana_aksi`,`akuntabilitas`,`dokumen_pendukung`,`nilai_akhir`,`created_at`,`updated_at`) values 
(11,1,2014,NULL,NULL,'1d52f5c00567e96b27e55ead87903a84.pdf','a7381eac138be3168b71bd779c8f70b6.pdf',NULL,NULL,'2019-04-28 19:29:03','2019-04-28 19:29:03'),
(12,1,2014,'6179ab99b02d6fc0de8376587828b3fc.pdf','3e05e631cfe9a4a733c55cb5dd3c5d32.pdf','2a448b8efdcaef8634e9d95611e49c78.pdf','8bfde95d3db18c06b81b86fd01472713.pdf',NULL,NULL,'2019-04-28 19:30:13','2019-04-28 19:30:13');

/*Table structure for table `petugas_satker` */

DROP TABLE IF EXISTS `petugas_satker`;

CREATE TABLE `petugas_satker` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_satuan_kerja` bigint(20) unsigned NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` enum('Inputer','Kepala') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `petugas_satker_id_satuan_kerja_foreign` (`id_satuan_kerja`),
  CONSTRAINT `petugas_satker_id_satuan_kerja_foreign` FOREIGN KEY (`id_satuan_kerja`) REFERENCES `satuan_kerja` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `petugas_satker` */

insert  into `petugas_satker`(`id`,`id_satuan_kerja`,`nama`,`jabatan`,`email`,`password`,`created_at`,`updated_at`) values 
(2,1,'Petugas','Inputer','petugas@gmail.com','$2y$10$4G.rpoSqDf6uvm4sxMwFzOu5oJLOg9mWaRhwuoHY6L8cZi4gG72OK',NULL,NULL);

/*Table structure for table `satuan_kerja` */

DROP TABLE IF EXISTS `satuan_kerja`;

CREATE TABLE `satuan_kerja` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `satuan_kerja` */

insert  into `satuan_kerja`(`id`,`nama`,`created_at`,`updated_at`) values 
(1,'Lampung',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
