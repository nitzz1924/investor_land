-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 02:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investor_land`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogname` varchar(255) DEFAULT NULL,
  `blogcategories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`blogcategories`)),
  `blogthumbnail` varchar(255) DEFAULT NULL,
  `blogdescription` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogname`, `blogcategories`, `blogthumbnail`, `blogdescription`, `created_at`, `updated_at`) VALUES
(7, 'How to Showcase Your Property for Maximum Buyer Appeal', '[\"Business\",\"Computer Software\",\"Fashion\"]', '1737013391_2.png', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>When selling your property, the first impression can make all the difference. Buyers often form opinions within seconds of viewing a home, whether in person or online. To maximize your property’s appeal, it’s essential to present it in the best possible light. Here are some actionable tips to help you showcase your property and attract the right buyers.</p><p><br></p><h4>1. <strong>Enhance Curb Appeal</strong></h4><p>The exterior of your property sets the tone for what’s inside. Make sure it leaves a lasting impression.</p><ul><li><strong>Landscaping:</strong> Keep the lawn trimmed, bushes manicured, and pathways clear. Add fresh mulch, seasonal flowers, or potted plants for a welcoming touch.</li><li><strong>Exterior Maintenance:</strong> Repaint faded walls, fix broken fences, and ensure the gutters are clean.</li><li><strong>Lighting:</strong> Install outdoor lighting to highlight your home’s features and provide a safe, inviting feel during evening viewings.</li></ul><p><br></p><h4>2. <strong>Declutter and Depersonalize</strong></h4><p>Buyers want to envision themselves in the space. Decluttering and depersonalizing your home can make it easier for them to do so.</p><ul><li><strong>Declutter:</strong> Remove excess furniture and items that make the space look cramped.</li><li><strong>Depersonalize:</strong> Take down personal photos, mementos, and unique decor. Neutral spaces appeal to a broader audience.</li><li><strong>Storage:</strong> Organize closets and cabinets. Buyers will likely peek inside, and neat storage suggests the home is well-maintained.</li></ul><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\" style=\"margin-top: -33px;\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2025-01-15 07:33:12', '2025-01-23 10:17:27'),
(10, 'Simple Tips to Increase the Value of Your Property', '[\"Business\",\"Health\"]', '1737614935_blog.jpg', '<p>Selling your property can be both exciting and challenging. Whether you’re planning to put it on the market or simply looking to increase its long-term value, making smart improvements can significantly enhance its appeal. Here are seven practical tips to boost your property’s value and attract potential buyers.</p><p><br></p><h3><strong>1. Refresh the Paintwork</strong></h3><p>A fresh coat of paint can transform your property, giving it a clean and modern look.</p><ul><li><strong>Neutral Colors</strong>: Opt for neutral tones like beige, gray, or white to appeal to a broader audience.</li><li><strong>Accent Walls</strong>: Add character to your living space with a single, subtle accent wall.</li></ul><p><br></p><h3><strong>2. Improve Energy Efficiency</strong></h3><p>Energy-efficient homes are in high demand. Implementing these changes can save future buyers money while increasing your property’s value:</p><ul><li><strong>LED Lighting</strong>: Replace outdated bulbs with energy-efficient LED options.</li><li><strong>Insulation</strong>: Ensure your walls and attic are properly insulated to reduce energy consumption.</li><li><strong>Smart Thermostats</strong>: Install a smart thermostat for more efficient heating and cooling.</li></ul><p><br></p><h3><strong>3. Upgrade the Kitchen</strong></h3><p>The kitchen is often the heart of the home. Upgrades here can provide the best return on investment.</p><ul><li>Replace old cabinet handles with sleek, modern designs.</li><li>Add a stylish backsplash to enhance the space’s appeal.</li><li>Consider upgrading appliances to energy-efficient models.</li></ul><p><br></p><h3><strong>4. Beautify the Bathrooms</strong></h3><p>Modernizing your bathrooms can make a huge difference.</p><ul><li>Install new fixtures such as faucets, showerheads, and towel racks.</li><li>Replace outdated mirrors with elegant, framed alternatives.</li><li>Upgrade lighting to add a touch of luxury.</li></ul>', '2025-01-23 01:18:55', '2025-01-23 01:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('f36a972d4deb9cb9427937777891777d', 'i:1;', 1738560131),
('f36a972d4deb9cb9427937777891777d:timer', 'i:1738560131;', 1738560131);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobilenumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `housecategory` varchar(255) DEFAULT NULL,
  `inwhichcity` varchar(255) DEFAULT NULL,
  `propertyid` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'New',
  `followupdetails` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`followupdetails`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `mobilenumber`, `email`, `city`, `state`, `housecategory`, `inwhichcity`, `propertyid`, `userid`, `status`, `followupdetails`, `created_at`, `updated_at`) VALUES
(1, 'John Smit', '9876543210', 'john.doe@example.com', 'Mumbai', 'Maharashtra', 'Apartment', 'Pune', '30', '2', 'Qualified', '[{\"date\":\"2025-01-14\",\"description\":\"this is 14th\"},{\"date\":\"2025-01-15\",\"description\":\"This is 15th\"},{\"date\":\"2025-01-16\",\"description\":\"This is 16th\"}]', '2024-12-10 06:59:41', '2025-01-25 09:59:25'),
(3, 'Jane Smith', '8765432109', 'jane.smith@example.com', 'Bengaluru', 'Karnataka', 'Villa', 'Hyderabad', '33', '2', 'New', NULL, '2025-01-13 06:59:41', '2025-01-25 09:59:28'),
(12, 'Ravi Shankar', '2222222222', 'auto@gmail.com', 'Ajmer', 'Rajasthan', 'Apartment', 'Pune', '39', '4', 'New', NULL, '2025-01-24 01:13:18', '2025-01-25 09:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Master',
  `categoryimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `label`, `type`, `categoryimage`, `created_at`, `updated_at`) VALUES
(20, 'Follow Up Status', 'Master', NULL, '2025-01-13 02:04:34', '2025-01-13 02:04:34'),
(21, 'New', 'Follow Up Status', NULL, '2025-01-13 02:05:09', '2025-01-13 02:05:09'),
(22, 'Qualified', 'Follow Up Status', NULL, '2025-01-13 02:05:26', '2025-01-13 02:05:26'),
(23, 'Not Responded', 'Follow Up Status', NULL, '2025-01-13 02:05:35', '2025-01-13 02:05:35'),
(24, 'Final', 'Follow Up Status', NULL, '2025-01-13 02:06:34', '2025-01-13 02:08:09'),
(26, 'Property Categories', 'Master', NULL, '2025-01-13 02:09:06', '2025-01-13 02:09:06'),
(27, 'Apartment', 'Property Categories', '1737012944_2.png', '2025-01-13 02:09:23', '2025-01-22 06:22:09'),
(28, 'Villa', 'Property Categories', '1737012944_2.png', '2025-01-13 02:09:29', '2025-01-22 06:22:10'),
(29, 'Penthouse', 'Property Categories', '1737012944_2.png', '2025-01-13 02:09:40', '2025-01-22 06:22:12'),
(30, 'Residences', 'Property Categories', '1737012944_2.png', '2025-01-13 02:10:07', '2025-01-22 06:22:14'),
(31, 'Won', 'Follow Up Status', NULL, '2025-01-14 06:46:38', '2025-01-14 06:46:38'),
(32, 'Blog Categories', 'Master', NULL, '2025-01-15 05:52:59', '2025-01-15 05:53:09'),
(33, 'Business', 'Blog Categories', NULL, '2025-01-15 05:53:26', '2025-01-15 05:53:26'),
(34, 'Computer Software', 'Blog Categories', NULL, '2025-01-15 05:53:42', '2025-01-15 05:53:42'),
(35, 'Fashion', 'Blog Categories', NULL, '2025-01-15 05:53:59', '2025-01-15 05:53:59'),
(36, 'Health', 'Blog Categories', NULL, '2025-01-15 05:54:06', '2025-01-15 05:54:06'),
(37, 'Luxury House', 'Property Categories', '1737012944_2.png', '2025-01-16 01:38:56', '2025-01-16 02:05:44'),
(38, 'Bunglow', 'Property Categories', '1737549230_p-3.jpg', '2025-01-22 06:52:26', '2025-01-22 07:03:50');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_02_080358_add_two_factor_columns_to_users_table', 1),
(5, '2025_01_02_080436_create_personal_access_tokens_table', 1),
(6, '2025_01_09_070838_add_website_link_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nortifications`
--

CREATE TABLE `nortifications` (
  `id` int(11) NOT NULL,
  `notificationname` varchar(255) DEFAULT NULL,
  `notificationimg` varchar(255) DEFAULT NULL,
  `notificationdes` text DEFAULT NULL,
  `sendto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nortifications`
--

INSERT INTO `nortifications` (`id`, `notificationname`, `notificationimg`, `notificationdes`, `sendto`, `created_at`, `updated_at`) VALUES
(1, 'New Listings', '1738579683_1737549230_p-3.jpg', 'Hurry.!!! ...Check New Listings', NULL, '2025-02-03 04:15:30', '2025-02-03 05:18:24'),
(12, 'Holi Offer', '1738584061_7bec7e63a493e2d61891b1e4051ef75a.jpg', 'Buy with Us for major discount on lands this Holi', 'users', '2025-02-03 06:31:01', '2025-02-03 06:31:01');

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
-- Table structure for table `property_listings`
--

CREATE TABLE `property_listings` (
  `id` int(11) NOT NULL,
  `usertype` varchar(255) DEFAULT NULL,
  `roleid` varchar(255) DEFAULT NULL,
  `property_name` varchar(255) DEFAULT NULL,
  `discription` longtext DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `squarefoot` varchar(255) DEFAULT NULL,
  `bedroom` varchar(255) DEFAULT NULL,
  `bathroom` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `thumbnail` text DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery`)),
  `documents` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`documents`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_listings`
--

INSERT INTO `property_listings` (`id`, `usertype`, `roleid`, `property_name`, `discription`, `price`, `squarefoot`, `bedroom`, `bathroom`, `floor`, `city`, `address`, `thumbnail`, `category`, `status`, `gallery`, `documents`, `created_at`, `updated_at`) VALUES
(31, 'Admin', '1', 'Dvilla Residences Batu', 'Property refers to any item that an individual or a business holds legal title to. This can include tangible items, such as houses, cars, or appliances, as well as intangible items that hold potential future value, such as stock and bond certificates. Legally, property is classified into two categories: personal property and real property. This distinction originates from English common law, and our contemporary legal system continues to differentiate between these two types.', '1500000', '343', '3', '4', '4', 'Ajmer', 'Ajmer', '1736588231_p-1.jpg', 'Penthouse', 'published', '[\"assets\\/images\\/Listings\\/c68bd9055776bf38d8fc43c0ed283678.jpg\",\"assets\\/images\\/Listings\\/dc36f18a9a0a776671d4879cae69b551.jpg\"]', '[\"assets\\/images\\/Listings\\/faa98789cfb692431ffb52e13497443a.pdf\",\"assets\\/images\\/Listings\\/466accbac9a66b805ba50e42ad715740.pdf\"]', '2025-01-10 06:28:41', '2025-01-16 02:17:34'),
(36, 'Admin', '1', 'PIK Villa House', 'Property refers to any item that an individual or a business holds legal title to. This can include tangible items, such as houses, cars, or appliances, as well as intangible items that hold potential future value, such as stock and bond certificates. Legally, property is classified into two categories: personal property and real property. This distinction originates from English common law, and our contemporary legal system continues to differentiate between these two types.', '5000000', '500', '3', '3', '5', 'Ajmer', 'Beawar', '1736588133_p-2.jpg', 'Penthouse', 'published', '[\"assets\\/images\\/Listings\\/115c343463041f8763d7552fdce43c9f.jpg\",\"assets\\/images\\/Listings\\/01d8bae291b1e4724443375634ccfa0e.jpg\"]', '[\"assets\\/images\\/Listings\\/f621585df244e9596dc70a39b579efb1.pdf\",\"assets\\/images\\/Listings\\/3a09a524440d44d7f19870070a5ad42f.pdf\"]', '2025-01-11 04:05:33', '2025-01-23 11:07:49'),
(39, 'Admin', '1', 'Tungis Luxury', 'Property refers to any item that an individual or a business holds legal title to. This can include tangible items, such as houses, cars, or appliances, as well as intangible items that hold potential future value, such as stock and bond certificates. Legally, property is classified into two categories: personal property and real property. This distinction originates from English common law, and our contemporary legal system continues to differentiate between these two types.', '5200000', '600', '4', '4', '6', 'Banswara', 'Jaipur', '1737548653_p-3.jpg', 'Bunglow', 'published', '[\"assets\\/images\\/Listings\\/8f125da0b3432ed853c0b6f7ee5aaa6b.jpg\",\"assets\\/images\\/Listings\\/29fdff891569187da8e5ed4f7a6ea4c8.jpg\",\"assets\\/images\\/Listings\\/7bec7e63a493e2d61891b1e4051ef75a.jpg\",\"assets\\/images\\/Listings\\/95e6834d0a3d99e9ea8811855ae9229d.jpg\"]', '[\"assets\\/images\\/Listings\\/5d0cb12f8c9ad6845110317afc6e2183.pdf\",\"assets\\/images\\/Listings\\/3ce83f544dbe69bb4fb19211fc442c2f.pdf\"]', '2025-01-22 06:54:13', '2025-01-22 07:00:06'),
(40, 'Agent', '4', 'Ojiag Duplex Apartment', 'Property refers to any item that an individual or a business holds legal title to. This can include tangible items, such as houses, cars, or appliances, as well as intangible items that hold potential future value, such as stock and bond certificates. Legally, property is classified into two categories: personal property and real property. This distinction originates from English common law, and our contemporary legal system continues to differentiate between these two types.', '8600000', '541', '5', '5', '8', 'Jodhpur', 'Bhilwara', '1737616797_p-7.jpg', 'Apartment', 'published', '[\"assets\\/images\\/Listings\\/6f3a770e5af1fd4cadc5f004b81e1040.jpg\",\"assets\\/images\\/Listings\\/7eb7eabbe9bd03c2fc99881d04da9cbd.jpg\",\"assets\\/images\\/Listings\\/79a3308b13cd31f096d8a4a34f96b66b.jpg\",\"assets\\/images\\/Listings\\/d1dc3a8270a6f9394f88847d7f0050cf.jpg\"]', '[\"assets\\/images\\/Listings\\/75e33da9b103b7b91dcd8da0abe1354b.pdf\"]', '2025-01-23 01:49:57', '2025-01-27 06:08:28'),
(41, 'Agent', '4', 'Duplex Bungalow', 'Property refers to any item that an individual or a business holds legal title to. This can include tangible items, such as houses, cars, or appliances, as well as intangible items that hold potential future value, such as stock and bond certificates. Legally, property is classified into two categories: personal property and real property. This distinction originates from English common law, and our contemporary legal system continues to differentiate between these two types.', '3500000', '343', '5', '5', '5', 'Beawar', 'Beawar', '1737717576_p-9.jpg', 'Luxury House', 'published', '[\"assets\\/images\\/Listings\\/696186d1596721cb6e79013d4655c5d9.jpg\",\"assets\\/images\\/Listings\\/79cae1be0fbae74dafbf8399ee2209cb.jpg\",\"assets\\/images\\/Listings\\/6be5336db2c119736cf48f475e051bfe.jpg\"]', '[\"assets\\/images\\/Listings\\/0a2a51dac6138826127f093500461d91.pdf\"]', '2025-01-24 05:49:36', '2025-02-03 02:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `register_companies`
--

CREATE TABLE `register_companies` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `companylogo` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `officeaddress` text DEFAULT NULL,
  `registrationimage` varchar(255) DEFAULT NULL,
  `pancardimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_companies`
--

INSERT INTO `register_companies` (`id`, `companyname`, `companylogo`, `city`, `state`, `country`, `pincode`, `contactnumber`, `email`, `officeaddress`, `registrationimage`, `pancardimage`, `created_at`, `updated_at`) VALUES
(2, 'Investor Lands', '1736320860_music.png', 'Ajmer', 'Rajasthan', 'India', '305001', '5878954858', 'investor@gmail.com', 'Demo Address Entered', '1736320860_music.png', '1736320860_music.png', '2025-01-08 01:51:00', '2025-01-08 02:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `register_users`
--

CREATE TABLE `register_users` (
  `id` int(11) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_document` varchar(255) DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `verification_status` varchar(255) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_users`
--

INSERT INTO `register_users` (`id`, `google_id`, `user_type`, `name`, `mobile`, `email`, `password`, `company_name`, `company_document`, `profile_photo_path`, `verification_status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'user', 'Ravi Shankar', '5754854858', 'auto@gmail.com', '$2y$12$21XxJ/VcpVnAwpyHfYKoeuLYOMrCXnBNqM0yvtNxQ0bKQzoxF.1C6', NULL, NULL, '1737716083_agent-6.jpg', '1', '2025-01-21 05:44:02', '2025-01-24 05:24:43'),
(4, '101105880704969277948', 'agent', 'Anshul Meena', '2222222222', 'anshulyuvmedia@gmail.com', '$2y$12$pRmLyDPyS2MgROKtMsVQ1OssBFii8IWpxIVednqpkmG74VLEd61Xy', NULL, NULL, '1738568423_music.png', '1', '2025-01-29 00:12:55', '2025-02-03 02:22:18'),
(6, '100390981121721709551', 'user', 'nitesh sharma', NULL, 'nitesh.yuvmedia@gmail.com', '$2y$12$9wS/m999wbTibsoS/1ccDur5j510fF5lhTQ8eR/t9Iaf1l8lbRODm', NULL, NULL, NULL, '1', '2025-01-29 00:08:37', '2025-02-03 07:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('O4MufY3fYqdWAAf1qBpHGudfqOY3FvZJoSHWtIrz', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWlljaFlNaHVhYm1ubFI5SzRVcVJzSG5XckxKZkd5VHcyUzBNZkpLVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hbGwtbm90aWZpY2F0aW9ucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkdVZBZnZUSVZGeHZVR2w3c1FCVDVYZVhObnlVdEVWa0ZzNzhNOHp2cUhGYUpGbDhHek91dGEiO3M6NToic3RhdGUiO3M6NDA6ImptcVY3OGNUa1lJN3dLd0hXeXlXR2dPSkdtV0JPU0F3Z0JBZ0JkNDkiO30=', 1738588008);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL,
  `fulladdress` varchar(255) DEFAULT NULL,
  `old_password` varchar(255) DEFAULT NULL,
  `new_password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `website_link`, `fulladdress`, `old_password`, `new_password`, `confirm_password`, `created_at`, `updated_at`) VALUES
(1, 'Ram Kumar', 'ramkumar@gmail.com', NULL, '$2y$12$uVAfvTIVFxvUGl7sQBT5XeXNnyUtEVkFs78M8zvqHFaJFl8GzOuta', NULL, NULL, NULL, NULL, NULL, '1736409350_avatar-3.jpg', 'www.investorlands.com', 'Ajmer, Rajasthan, India.', NULL, NULL, NULL, '2025-01-02 02:38:23', '2025-01-09 02:27:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nortifications`
--
ALTER TABLE `nortifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `property_listings`
--
ALTER TABLE `property_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_companies`
--
ALTER TABLE `register_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_users`
--
ALTER TABLE `register_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nortifications`
--
ALTER TABLE `nortifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_listings`
--
ALTER TABLE `property_listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `register_companies`
--
ALTER TABLE `register_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_users`
--
ALTER TABLE `register_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
