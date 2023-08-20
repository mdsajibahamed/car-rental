-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `location_from` varchar(255) DEFAULT NULL,
  `location_to` varchar(255) DEFAULT NULL,
  `pickup_date` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `total_days` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `total_amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `detail_id`, `vehicle_id`, `location_from`, `location_to`, `pickup_date`, `return_date`, `total_days`, `status`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Gaptoli', 'Jamalpur', '2023-08-15', '2023-08-18', '2', 1, '10000', '2023-08-15 12:59:42', '2023-08-16 11:50:50'),
(5, 2, 4, 'Mirpur', 'Faridpur', '2023-08-18', '2023-08-19', '1', 1, '1500', '2023-08-16 12:25:35', '2023-08-16 12:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Toyota', 'A Japanese brand known for its reliability and wide range of vehicles, including sedans, SUVs, trucks, and hybrids', 1, '2023-08-15 06:15:55', '2023-08-15 06:15:55'),
(2, 'Honda', 'Honda A well-regarded Japanese brand known for producing practical and efficient vehicles.', 1, '2023-08-15 06:16:20', '2023-08-15 06:16:20'),
(3, 'Nissan', 'Nissan  A Japanese manufacturer with a range of cars, trucks, and SUVs, offering diverse options to consumers.', 1, '2023-08-15 06:16:49', '2023-08-15 06:16:49'),
(4, 'Ford', 'Ford an American automaker offering a diverse lineup of cars, trucks, SUVs, and electric vehicles.', 1, '2023-08-15 06:17:25', '2023-08-15 06:17:25'),
(5, 'Chevrolet', 'Chevrolet another American brand, known for producing a variety of vehicles, including trucks like the Silverado and SUVs like the Tahoe.', 1, '2023-08-15 06:18:00', '2023-08-15 06:18:00'),
(6, 'BMW', 'BMW  renowned German luxury brand that produces a range of vehicles known for their performance and upscale features.', 1, '2023-08-15 06:18:42', '2023-08-15 06:18:42'),
(7, 'Mercedes-Benz', 'Mercedes-Benz another German luxury brand synonymous with high-quality vehicles, advanced technology, and luxury features.', 1, '2023-08-15 06:19:13', '2023-08-15 06:19:13'),
(8, 'Hyundai', 'Hyundai South Korean brand offering a mix of affordable and reliable vehicles, from compact cars to SUVs.', 1, '2023-08-15 06:20:03', '2023-08-15 06:20:03'),
(9, 'Volkswagen', 'Volkswagen  German brand recognized for its iconic Beetle and a range of vehicles that cater to various market segments.', 1, '2023-08-15 06:23:17', '2023-08-15 06:23:17'),
(10, 'Audi', 'Audi  subsidiary of Volkswagen, known for its sophisticated design, advanced technology, and premium vehicles.', 1, '2023-08-15 06:23:49', '2023-08-15 06:23:49'),
(11, 'Kia', 'Kia anther South Korean automaker, offering stylish and well-equipped vehicles with an emphasis on value.', 1, '2023-08-15 06:24:23', '2023-08-15 06:24:23'),
(12, 'Tesla', 'Tesla an American electric car manufacturer, led by Elon Musk, that has revolutionized the electric vehicle market.', 1, '2023-08-15 06:25:03', '2023-08-15 06:25:03'),
(13, 'Ferrari', 'Ferrari an Italian brand synonymous with high-performance sports cars, luxury, and motorsports success.', 1, '2023-08-15 06:25:26', '2023-08-15 06:25:26'),
(14, 'Lamborghini', 'Lamborghini  an Italian manufacturer famous for producing exotic and supercars with striking designs and extreme performance.', 1, '2023-08-15 06:26:14', '2023-08-15 06:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `address1` text DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `user_id`, `date_of_birth`, `gender`, `mobile_number`, `address1`, `address2`, `created_at`, `updated_at`) VALUES
(1, 1, '6/6/2001', 1, '9112378909876', 'Landon', 'London England', '2023-08-15 06:06:35', '2023-08-15 06:06:35'),
(2, 2, '4/6/2001', 2, '9112378909877', 'Arizona', 'United States', '2023-08-15 06:08:16', '2023-08-15 06:08:16'),
(3, 3, '9/4/1996', 1, '9112378809879', 'Sydney', 'Australia', '2023-08-15 06:11:00', '2023-08-15 06:11:00'),
(4, 4, '4/6/2009', 1, '01800088832', 'Barisal', 'Bangladesh', '2023-08-15 06:12:29', '2023-08-15 06:12:29'),
(5, 5, '4/6/2003', 1, '01411177732', 'Mymensingh', 'Bangladesh', '2023-08-15 06:14:36', '2023-08-15 06:14:36'),
(6, 6, '6/5/2001', 1, '01707619901', 'Barisal', 'Bangladesh', '2023-08-15 06:29:36', '2023-08-15 06:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2019_12_14_000002_create_types_table', 1),
(5, '2023_08_08_140845_create_roles_table', 1),
(6, '2023_08_08_140846_create_users_table', 1),
(7, '2023_08_08_140847_create_details_table', 1),
(8, '2023_08_08_140848_create_brands_table', 1),
(9, '2023_08_08_140849_create_vehicles_table', 1),
(10, '2023_08_08_141338_create_bookings_table', 1),
(11, '2023_08_08_141338_create_services_table', 1),
(12, '2023_08_08_141534_create_payments_table', 1),
(13, '2023_08_08_141918_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_date` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `trxid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user typical person who uses a product or service and search product internet.', 1, '2023-08-15 06:04:39', '2023-08-15 06:04:39'),
(2, 'service_provider', 'Service Provider: Offers technology-related services such as IT support, network management.', 1, '2023-08-15 06:04:59', '2023-08-15 06:04:59'),
(3, 'administrator', 'Administrators often handle resources such as budgets, personnel, and equipment.', 1, '2023-08-15 06:05:20', '2023-08-15 06:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `highlights` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `highlights`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Car Inspection', 'car inspection', 'Our trained inspectors begin by conducting a thorough visual examination of your vehicle. They check for visible issues such as cracks in the windshield, damaged lights, worn tires, and signs of rust or corrosion.', 4000.00, 1, '2023-08-19 01:16:04', '2023-08-19 06:19:14'),
(4, 'Car Rental', 'Use good Technology', 'Our diverse fleet of vehicles caters to all preferences and requirement commuting to spacious SUVs for family trips, and even luxurious cars for those special occasions.', 3200.00, 1, '2023-08-19 01:46:13', '2023-08-19 01:46:13'),
(5, 'Auto Painting', 'High-Quality Paint', 'Our experienced technicians use advanced color matching technology to ensure that your car\'s new paint seamlessly matches the original color, leaving no visible difference.', 1000.00, 1, '2023-08-19 06:00:04', '2023-08-19 06:00:04'),
(6, 'Auto Repairing', 'Routine Maintenance', 'Our state-of-the-art diagnostic equipment allows us to identify and pinpoint issues with your vehicle quickly and accurately. We can diagnose engine problems, electrical issues, transmission troubles, and more.', 2000.00, 1, '2023-08-19 06:27:02', '2023-08-19 06:27:02'),
(7, 'Auto Clening', 'Hand Waxing and Polishing', 'We start by giving your car\'s exterior a thorough wash to remove dirt, dust, and grime. Our experienced team uses high-quality, eco-friendly car wash products to protect your car\'s paint and finish.', 1000.00, 1, '2023-08-19 06:28:24', '2023-08-19 06:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hatchbacks', 'Hatchbacks have a rear door that opens upward to provide access to a cargo area. The Nissan Leaf, for example, is an electric hatchback.', 1, '2023-08-15 01:12:00', '2023-08-15 02:13:55'),
(2, 'Crossovers', 'crossovers  type', 1, '2023-08-15 01:13:39', '2023-08-15 02:14:08'),
(3, 'Sedan', 'These are typically four-door vehicles with a separate trunk compartment. Examples include the Nissan Altima, Maxima, Sentra, and Versa.', 1, '2023-08-15 01:19:39', '2023-08-15 02:14:02'),
(4, 'Coupes', 'Coupes are two-door cars with a sportier and more compact design. The Nissan 370Z and GT-R are examples of Nissan\'s coupe models.', 1, '2023-08-15 01:20:13', '2023-08-15 01:20:13'),
(5, 'Electric Cars', 'The Nissan Leaf is a well-known all-electric car, which means it is powered solely by an electric motor and batteries.', 1, '2023-08-15 02:14:36', '2023-08-15 02:14:36'),
(6, 'Trucks', 'Nissan manufactures trucks like the Frontier and Titan, catering to those who need a vehicle for towing and hauling purposes.', 1, '2023-08-15 02:15:10', '2023-08-15 02:15:10'),
(7, 'Vans', 'The Nissan NV200 is a compact commercial van designed for transporting goods.', 1, '2023-08-15 02:15:37', '2023-08-15 02:15:37'),
(8, 'Sport Utility Vehicles', 'SUVs are versatile vehicles designed for a combination of on-road and off-road use.', 1, '2023-08-15 02:17:13', '2023-08-15 02:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Johan', 'Johan@gmail.com', NULL, '$2y$10$0Qb05lZx0QnM/moIaJzg2uKEJ/h4JmIbQFiN/EV37Kv8cO5cDp1yS', NULL, '2023-08-15 06:06:34', '2023-08-15 06:06:34'),
(2, 1, 'Maria', 'maria@gmail.com', NULL, '$2y$10$ON2V.ShSzALItxR7Xo7HVerMkzXWMLPK6aEAQG.IgHK23yPO33GD6', NULL, '2023-08-15 06:08:16', '2023-08-15 06:08:16'),
(3, 1, 'Milan', 'milan@gmail.com', NULL, '$2y$10$6gkeMeMBlxSFAi.x./ZrquBWDr0HAuCSZ9Q6cO2GWah0SFRymyanS', NULL, '2023-08-15 06:11:00', '2023-08-15 06:11:00'),
(4, 2, 'Jubayer', 'jubayer@gmail.com', NULL, '$2y$10$ZUwsUqsz42hkfJPYFpqep.rvsgoBFG6tOvC9aRcxcq2ZKZHpCeOI2', NULL, '2023-08-15 06:12:29', '2023-08-15 06:12:29'),
(5, 2, 'Anzuman', 'anzuman@gmail.com', NULL, '$2y$10$2HQ8dZ6sXFeueKJgt4sjZu7/7JZ73gFvt/zUpV1meEOr/cAzFI.XG', NULL, '2023-08-15 06:14:36', '2023-08-15 06:14:36'),
(6, 3, 'Sajib', 'sajib@gmail.com', NULL, '$2y$10$cIa1yFtEUCDs05q6pwPfseBC64ND6SOx0foso3GnbY0ydg1S7V5fi', NULL, '2023-08-15 06:29:35', '2023-08-15 06:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `seating_capacity` varchar(255) DEFAULT NULL,
  `rentamount` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `owner_phone` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `user_id`, `brand_id`, `type_id`, `brand`, `model`, `thumbnail`, `year`, `type`, `status`, `seating_capacity`, `rentamount`, `image`, `serial_number`, `owner_name`, `owner_phone`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, NULL, 'Toyota Camry', 'np_file_28945.jpeg', '2022', NULL, 1, '5', '50$', NULL, '1P8ZA1279SZ215470', 'Johan', '90990909909', '5000$', '2023-08-15 08:27:34', '2023-08-18 05:13:40'),
(2, 2, 2, 2, NULL, 'Honda CR-V', 'JDP_2023 Honda CR-V EX-L Red Front Quarter View.jpg', '2021', NULL, 1, '8', '60$', NULL, '1P8ZA1279SZ215490', 'Maria', '909090990090', '60000$', '2023-08-15 08:52:07', '2023-08-18 00:48:03'),
(3, 6, 14, 5, NULL, 'Lamborghini Aventador', '2023-Lamborghini-Urus-Performante-2-791x445.jpg', '2022', NULL, 1, '8', '100$', NULL, '1P8ZA1279SZ215479', 'Sajib', '934234234324', '90000$', '2023-08-15 08:58:11', '2023-08-18 00:46:27'),
(4, 5, 4, 7, NULL, 'Ford Capri', '2019-ford-edge-st-4_1.jpg', '2021', NULL, 1, '10', '40$', NULL, '1P8ZA1279SZ215410', 'Anzuman', '01909090909', '30000$', '2023-08-15 09:00:29', '2023-08-18 00:46:42'),
(5, 4, 2, 7, NULL, 'Honda S2000', '1686049567.jpg', '2012', NULL, 1, '7', '55$', NULL, '1P8ZA1279SZ215410', 'Jubayer', '01901111113', '30000$', '2023-08-15 09:03:10', '2023-08-18 00:48:19'),
(6, 1, 1, 1, NULL, 'Chevrolet XDTR', '20_2019-Audi-Q3-4340_Cropped.jpg', '2022', NULL, 1, '8', '50$', '2019-ford-edge-st-4_1.jpg', '1P8ZA1279SZ21555', 'milan', '54325252245', '5000$', '2023-08-18 00:27:29', '2023-08-18 00:45:44'),
(7, 4, 5, 3, NULL, 'UrbanHaul', 'F:\\xxammp\\tmp\\phpA5FB.tmp', '2021', NULL, 1, '8', '50$', 'F:\\xxammp\\tmp\\phpA64A.tmp', '1P8ZA1279SZ215479', 'Jubayer', '42352353454', '5000$', '2023-08-18 04:47:59', '2023-08-18 04:47:59'),
(8, 1, 1, 1, NULL, 'Toyota C-HR', 'F:\\xxammp\\tmp\\phpE280.tmp', '1992', NULL, 1, '7', '60$', 'F:\\xxammp\\tmp\\phpE2D0.tmp', '1P8ZA1279SZ215410', 'Jubayer', '534512525425', '5000$', '2023-08-18 05:48:17', '2023-08-18 05:48:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_detail_id_foreign` (`detail_id`),
  ADD KEY `bookings_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_title_unique` (`title`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_booking_id_foreign` (`booking_id`),
  ADD KEY `payments_service_id_foreign` (`service_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_title_unique` (`title`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_title_unique` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_user_id_foreign` (`user_id`),
  ADD KEY `vehicles_brand_id_foreign` (`brand_id`),
  ADD KEY `vehicles_type_id_foreign` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_detail_id_foreign` FOREIGN KEY (`detail_id`) REFERENCES `details` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
