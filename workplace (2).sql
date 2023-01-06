-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 06:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance_requests`
--

CREATE TABLE `balance_requests` (
  `balance_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `traID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '2= Pending, 1=Success',
  `approve_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `balance_requests`
--

INSERT INTO `balance_requests` (`balance_id`, `user_id`, `amount`, `method`, `number`, `traID`, `status`, `approve_id`, `created_at`, `updated_at`) VALUES
(1, 3, 8000, 'Bkash', 1854785471, '4454535345435', 2, 3, '2022-12-25 13:19:32', '2022-12-25 13:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Graphice Design', 'graphice-design', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(2, 'Digital Marketing', 'digital-marketing', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(3, 'Programming Tech', 'programming-tech', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(4, 'Video Animation', 'video-animation', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(5, 'Website Design', 'website-design', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(6, 'Writing Translation', 'writing-translation', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(7, 'Business', 'business', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(8, 'Fun & Lifestyle', 'fun-lifestyle', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(9, 'Music & Audio', 'music-audio', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(10, 'Programming Tech', 'programming-tech', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(11, 'Video Animation', 'video-animation', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(12, 'Website Design', 'website-design', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(13, 'Writing Translation', 'writing-translation', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(14, 'Business', 'business', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(15, 'Fun & Lifestyle', 'fun-lifestyle', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(16, 'Music & Audio', 'music-audio', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49');

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
(5, '2022_11_12_170048_create_roles_table', 1),
(6, '2022_11_15_191347_create_user_profiles_table', 1),
(7, '2022_12_16_181354_create_services_table', 1),
(8, '2022_12_16_213114_create_balance_requests_table', 1),
(9, '2022_12_17_101118_create_categories_table', 1),
(10, '2022_12_20_142404_create_place_bits_table', 1),
(11, '2022_12_21_081247_create_order_completes_table', 1),
(12, '2022_12_21_143859_create_sub_categories_table', 1),
(13, '2022_12_22_172158_create_products_table', 1),
(14, '2022_12_23_144926_create_subscribers_table', 1),
(15, '2022_12_23_152520_create_settings_table', 1),
(16, '2022_12_23_205309_create_product_orders_table', 1),
(17, '2022_12_24_065147_create_sliders_table', 1),
(18, '2022_12_25_142144_create_service_submites_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_completes`
--

CREATE TABLE `order_completes` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `place_bits`
--

CREATE TABLE `place_bits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateline` date NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidDes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 for unaccpet 1 for buyer accpeted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place_bits`
--

INSERT INTO `place_bits` (`id`, `service_id`, `user_id`, `price`, `dateline`, `file`, `bidDes`, `status`, `created_at`, `updated_at`) VALUES
(1, 14, 2, '500', '2022-12-27', '1644501240.png', 'Soluta dictum alias? Eiusmod excepteur magni nesciunt hac? Duis pulvinar primis aptent excepteur vitae, nostrud quasi! Dolor orci. Eleifend nostra cillum praesentium justo aliquet eum magna sociosqu nascetur. Magnis maxime! Inceptos ratione in mollitia. Ea eum mauris lectus repellat pulvinar litora risus aliquip facere placeat, neque, consequat bibendum! Cupidatat cillum repellat sociis accumsan quam enim dignissim, soluta eleifend leo anim! Mollis hymenaeos bibendum! Nobis? Taciti sapien platea tellus itaque tincidunt possimus tristique? Tempor nonummy corrupti hac necessitatibus? Massa, sollicitudin? Porro. Tortor eum labore quidem sint sunt mollis magni magnam nemo. Quibusdam ipsa tempus et aspernatur ab. Laborum consectetuer proin,', 0, '2022-12-24 11:19:40', '2022-12-24 11:19:40'),
(2, 15, 2, '4875', '2022-12-29', '643477728.webp', 'Laborum scelerisque id tempore etiam nobis dui commodo! Eu. Anim debitis optio, iaculis leo? Perferendis? Sociosqu cupiditate etiam, esse vehicula cras pariatur quis consequuntur, ridiculus mus morbi. Luctus, necessitatibus aenean? Viverra eum a cubilia tortor explicabo! Anim porttitor, eleifend exercitationem rerum rerum! Corporis maecenas veniam, dapibus dapibus posuere, placerat natoque esse ac? Blanditiis, euismod libero sapiente nullam, senectus esse diam! Tincidunt pretium odit nostrud, sapien ullamcorper vulputate fugit excepturi varius proident felis, rutrum. Magna ex consequuntur minima condimentum, minus incidunt. Placerat blanditiis? Anim diamlorem. Ratione tenetur do ultrices nam repudiandae? Mus illo, montes, iure recusandae. Varius, ullamcorper condimentum et tempor.', 0, '2022-12-25 11:51:15', '2022-12-25 11:51:15'),
(3, 9, 1, '500', '2023-01-07', '1575773027.webp', 'thfh', 0, '2023-01-05 12:37:49', '2023-01-05 12:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `download_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `orderby` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `download_link`, `product_image`, `product_details`, `author_id`, `orderby`, `status`, `product_slug`, `created_at`, `updated_at`) VALUES
(4, 'Angela Winters', 266.00, 'Aut reprehenderit be', '1115932665.webp', '<div>Reprehenderit earum dolores, suscipit neque, dictumst arcu laboris litora, nemo quas luctus viverra accusantium, congue posuere malesuada fringilla ad tortor dis? Distinctio gravida totam taciti aenean quibusdam perferendis, proident labore nibh facilis maiores nesciunt! Laoreet ducimus voluptas optio imperdiet sociis maiores magna, nostrum pharetra? Rutrum. Hymenaeos feugiat pariatur? Aut, aute dignissim, blandit. Hac non mollis proident distinctio! Voluptatum architecto corporis. Ligula cubilia eros mollit eum wisi reprehenderit totam irure irure, tempora accusamus, convallis lacinia eum dapibus ipsum quia vel duis enim. Elit irure veritatis, aute scelerisque assumenda porro aliquip dis. Suscipit quisquam voluptatum tempore pretium saepe assumenda taciti, pretium doloribus.</div><div><br></div><div>Maxime commodi! Nisi, sem laudantium vulputate commodi elementum cumque facilis dignissim, reiciendis officia curabitur! Rem! Recusandae cupidatat, eos! Primis cupiditate quidem. Mi fugit? Facilisi rutrum nulla? Doloremque habitant venenatis netus, montes quisque proin dignissimos beatae fuga. Occaecati dicta possimus lorem do fringilla. Mauris omnis, officia, nihil, modi, laboris, reprehenderit corporis taciti repudiandae. Porttitor, repellendus! Ipsum iure totam, asperiores incididunt cum, justo nisi laboris volutpat, vestibulum, illo aute eos non aliquid euismod eiusmod, explicabo aliquip dignissimos! Tristique habitant illum! Quos. Porro integer turpis quam aute? In adipiscing. Sodales nec ligula justo, proident, minus impedit a repellat, unde? Sollicitudin culpa! Odio sagittis.</div><div><br></div><div>Dignissim dictum quaerat natoque phasellus rerum voluptatem! Massa beatae unde quas varius quas pulvinar sodales, placeat dolor ullamcorper, deleniti eros mollis aliquet ridiculus porta odit ducimus nobis autem. Fuga corporis beatae laboris. Adipisci fuga massa adipiscing repudiandae auctor diamlorem repellat. Dis dolores, rhoncus sequi qui. Illum. Suspendisse alias. Tincidunt quia. Magnam alias vel molestie? Commodo. Per turpis, adipisci hic sapien? Hic cursus maxime proin volutpat convallis sint eligendi non occaecat quod magnam congue illo porro auctor wisi viverra ultricies labore? Pariatur quo dolorem sociis in? Facilisis maxime iure nostrud maecenas, quisque, vel fringilla ad illum rem, do praesentium dolorem, taciti.</div>', 2, NULL, 1, '63b6ddd6639ed', '2023-01-05 08:25:26', '2023-01-05 08:34:57'),
(5, 'I will skyrocket your instagram page growth', 26546.00, 'https://www.fiverr.com/categories/online-marketing/social-marketing?source=vertical-buckets', '406077271.webp', '<p>Senectus voluptatibus eiusmod leo risus sagittis nonummy parturient erat? Rem aliquid maxime, excepturi egestas nostra cillum? Feugiat sociis, animi non sagittis, elementum, hymenaeos tenetur officiis dictumst curabitur aliquid! Volutpat similique, wisi esse tortor ad repellat, commodo, cillum ducimus. Eaque dui. Perspiciatis integer eu iste eget? Eum sunt vulputate! Minus repellat.</p><p><br></p><p>Habitasse eligendi enim lorem quaerat habitasse fuga ipsam, eros fusce, qui aliquip, qui massa eros sunt! Doloribus sapien aspernatur facilisis, egestas voluptatem ridiculus nec natoque! Mollis. Tempor nec? Minima pharetra. Ipsum excepteur venenatis magnis, iste! Placerat! Pulvinar voluptate tenetur luctus nostrum euismod, aliqua euismod irure atque fringilla voluptates sapien potenti.</p><p><br></p><p>Facere ipsam lobortis venenatis! Quasi exercitation voluptas voluptates turpis orci sunt vehicula sodales expedita velit, lobortis dolore occaecati, architecto! Anim, hac? Tempus adipisci curae est anim, eligendi, ab numquam ad, accumsan nihil! Habitant venenatis parturient purus malesuada veniam debitis? Sunt iste praesentium laudantium facilis egestas, cubilia nam repellat harum ex.</p>', 2, NULL, 1, '63b6e0714f9d6', '2023-01-05 08:36:33', '2023-01-06 10:23:30'),
(6, 'I will be your social media manager', 152654.00, 'https://www.fiverr.com/', '950595420.webp', '<p>Mollitia tempora platea. Urna dicta voluptatum sociis libero ante, iusto. Ab sapien purus eu unde! Proident ut, leo, cupiditate modi, cursus dui perspiciatis hic, hymenaeos praesentium voluptas adipiscing excepturi mollis scelerisque doloremque, pellentesque repellendus totam, ea, auctor dis, proident varius voluptatum laoreet wisi ultricies! Ornare, ac! Assumenda donec arcu, eum.</p><p><br></p><p>Ratione eos eius, veritatis quod culpa placerat voluptatibus aptent sint, inceptos irure alias vestibulum maecenas leo! Sed doloribus, montes congue, habitant nisl suscipit laboris posuere non suscipit praesentium, vel asperiores eum dictum, augue doloremque debitis, modi litora, illum natoque adipisci dicta modi, odio quaerat, aliqua venenatis voluptatum, magnam alias. Sunt.</p>', 5, NULL, 1, '63b70afeb15b8', '2023-01-05 11:38:06', '2023-01-05 11:43:04'),
(7, 'I will be your full stack developer vue js nuxt js react js laravel', 800.00, 'https://www.fiverr.com/', '1515462881.webp', '<p><span style=\"color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I Have a team of full-stack web developers specialized in React.js &amp; Vue.js based web apps. I Launched multiple projects from the empty repository to fully-functional production deployments.</span><br></p>', 2, NULL, 1, '63b84baa2a4a3', '2023-01-06 10:26:18', '2023-01-06 10:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tns_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = pending, 2 = approved, 3 = rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`id`, `user_id`, `product_id`, `order_code`, `name`, `email`, `bank_name`, `phone_number`, `tns_number`, `price`, `service_fee`, `total_amount`, `status`, `created_at`, `updated_at`) VALUES
(7, 5, 4, 'FL58823', 'Khayrul Islam Shanto', 'khayrul@mail.com', 'Bkash', '01835061968', 'dsfsagg1464dg', '266', '150', '416', '2', '2023-01-05 12:41:24', '2023-01-05 13:01:50'),
(8, 1, 4, 'FL91126', 'Angelica Lowe', 'cidu@mailinator.com', 'Audra Hill', '59', '270', '266', '150', '27', '2', '2023-01-05 13:15:40', '2023-01-05 13:26:03'),
(9, 2, 7, 'FL24112', 'Phyllis Tyson', 'lazefy@mailinator.com', 'DBBL', '01835061968', 'dsfsdgh535456', '800', '150', '950', '2', '2023-01-06 10:30:14', '2023-01-06 10:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `role_comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `role_slug`, `role_status`, `role_comments`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '1', NULL, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(2, 'Admin', 'admin', '1', NULL, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(3, 'Seller', 'seller', '1', NULL, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(4, 'Buyer', 'buyer', '1', NULL, '2022-12-24 11:05:49', '2022-12-24 11:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shortDes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longdes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '1 for approve 2 for un approve',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `cat_id`, `user_id`, `shortDes`, `longdes`, `document`, `price`, `StartDate`, `EndDate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Totam sit beatae id architecto nostrum animi sed iusto voluptatibus temporibus.', 'minus-eaque-voluptatem-distinctio-vitae-facere', 3, 3, 'Nostrum fugit est ea est necessitatibus recusandae qui officia. Labore ut possimus quo consequatur reiciendis molestias. Blanditiis ex et voluptatum assumenda et quis nobis unde. Dolorem et et itaque voluptatem.', 'Perferendis voluptatum molestias accusantium at qui quia. Asperiores aut qui iusto et rem fugiat nulla. Velit a ut labore rerum nihil hic ipsa ab. Nulla ut sit aut. Temporibus voluptas minus minima vero totam dolorum id. Vero eius delectus et inventore.', 'https://via.placeholder.com/640x480.png/003300?text=blanditiis', 1975, '2022-12-25', '2023-05-16', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(2, 'Ut omnis iusto accusamus quo eum et.', 'aut-autem-reiciendis-et-impedit-itaque-esse', 7, 3, 'Eum porro et nisi laudantium. At consequatur non est voluptates. Occaecati autem dolor ut id numquam. Est optio ex quidem non et.', 'Dolores culpa omnis aliquam dolorum cumque provident veniam pariatur. Iusto et pariatur id unde. Omnis consequatur omnis enim quo eveniet. Debitis nulla sint aliquam. Sunt ut consequatur aut nihil magnam vero rerum. Eum eaque voluptas adipisci voluptatem qui id. Est rem laborum labore cum odio.', 'https://via.placeholder.com/640x480.png/00dd88?text=sint', 1812, '2022-12-24', '2023-05-23', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(3, 'Voluptas molestias aspernatur sint dolorem aspernatur dolores ea.', 'deleniti-minus-culpa-itaque-voluptates-animi', 5, 3, 'Unde aut sit voluptate reprehenderit eligendi ex. Aspernatur sunt exercitationem dolorem quis aut. Consequatur repellat voluptatem harum consequatur beatae laboriosam reprehenderit. Qui iusto provident et nisi quis sed.', 'Voluptate sit et odit voluptas tempore. Minus necessitatibus omnis quasi est ab. Aut molestiae iure est. Doloribus quisquam voluptatem at sed similique necessitatibus soluta.', 'https://via.placeholder.com/640x480.png/000000?text=cumque', 8177, '2022-12-25', '2023-11-25', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(4, 'Sit aut debitis est itaque ea aut debitis unde voluptatem et.', 'eum-sit-quo-sed-porro-quia-at', 2, 3, 'Delectus sunt possimus facilis praesentium et. Ut qui est deleniti neque ex sunt fugit ipsa.', 'Corporis magnam aperiam velit et tenetur itaque. At eos dolores libero iste libero sed praesentium. Voluptatum in illum beatae culpa maxime. Optio dolor consectetur rerum cum alias beatae reiciendis. Voluptatem nobis et voluptas corrupti illo. Laudantium sed explicabo sint. Nisi quis harum doloribus minima assumenda.', 'https://via.placeholder.com/640x480.png/00aa88?text=consectetur', 8828, '2022-12-24', '2023-12-19', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(5, 'Unde ut dolores libero harum qui amet eum alias.', 'nobis-velit-dolores-et-ab', 1, 3, 'Odit dolorem in quia. Ut fugiat eaque reprehenderit. Numquam et molestias minima qui occaecati excepturi sunt rerum.', 'Tempora quis minus et vero. Rerum vitae et sit nemo earum voluptates. Reprehenderit aspernatur culpa commodi autem. Sit et quasi voluptatem alias cupiditate debitis eos quae. Dolores eius non officiis itaque.', 'https://via.placeholder.com/640x480.png/00cc66?text=cum', 3191, '2022-12-25', '2023-04-04', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(7, 'Ipsam reiciendis id qui qui doloribus autem temporibus.', 'ut-expedita-officiis-assumenda-praesentium', 14, 3, 'Sint non dolores sunt molestiae. Excepturi quia eum maiores facere ab. Ullam in quod aut doloribus voluptatibus quia.', 'Voluptas molestiae eum quidem qui provident. Corrupti necessitatibus quod dolores debitis impedit suscipit voluptates blanditiis. Consequatur minima sequi porro. In sed fugiat sit dolores. Veniam consequatur ut rerum aspernatur. Est consequatur ut aut quis.', 'https://via.placeholder.com/640x480.png/007755?text=ipsum', 6250, '2022-12-25', '2023-11-25', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(8, 'Vel consequuntur veniam incidunt non exercitationem ut alias.', 'exercitationem-totam-cumque-est-tempore-aut-vero-ut', 12, 3, 'Porro in optio architecto maiores ipsa dignissimos. Fugiat repellendus veniam sequi.', 'Odit delectus magnam fugit qui praesentium voluptatibus doloremque praesentium. Ut a amet ullam suscipit id voluptates dolor. Provident ea dolores neque placeat veniam delectus quia nemo. Et voluptatem quos qui. In iure blanditiis impedit consequatur.', 'https://via.placeholder.com/640x480.png/0022dd?text=magni', 6635, '2022-12-24', '2023-06-04', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(9, 'Quod molestiae cupiditate id impedit consequatur enim id cumque cum incidunt.', 'quae-sapiente-quae-ea-quasi-aut-at', 3, 3, 'Et iusto modi aperiam. Sit ea in ut omnis. Eos facilis est fuga quia.', 'Illo eum quasi culpa natus aut est. Accusamus dolores omnis odit deserunt pariatur quae. Perferendis repellendus est beatae. Ea sunt eum quae et rem inventore. Corporis fugit est dolor et ipsam blanditiis.', 'https://via.placeholder.com/640x480.png/002255?text=aliquam', 3038, '2022-12-25', '2023-09-01', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(10, 'Esse atque accusamus est reiciendis consequatur libero.', 'quos-laboriosam-repudiandae-harum-ut', 7, 3, 'Veniam quae accusamus autem quaerat illum sint consectetur. Qui eos earum rerum magnam qui. Distinctio quia facere veritatis doloremque perferendis quia sunt. Commodi incidunt animi sit quo.', 'Est ut porro fuga nisi ut aut. Corrupti sint optio aut. Sint tenetur fugit fugit dicta totam nostrum enim. Occaecati a eum tempore.', 'https://via.placeholder.com/640x480.png/00ff88?text=vel', 5469, '2022-12-24', '2023-05-07', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(11, 'Nulla consectetur quia non animi saepe.', 'ut-et-rerum-nobis-nihil-quo', 7, 3, 'Nam qui voluptate labore et. Perspiciatis et fugiat ullam repellendus optio labore sint. Dolores qui qui temporibus beatae.', 'Occaecati minus aspernatur optio nesciunt aut quia nemo. Magni dolorem non dolorem dolor vel beatae. Et molestiae accusantium repellat minus. Pariatur id tempora in eos. Consequuntur eos libero excepturi quod. Rerum ut et in omnis. Ullam assumenda et maiores dolor occaecati minima.', 'https://via.placeholder.com/640x480.png/00ddee?text=ipsa', 4872, '2022-12-24', '2023-05-09', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(12, 'Beatae ex et vel vitae commodi est corporis quia voluptas occaecati aperiam.', 'blanditiis-ex-quaerat-voluptas-quo-porro-odit-unde-facere', 13, 3, 'Dignissimos ut nulla dolorem dolore sit ipsam. Velit aut sit sit eaque. Et quis nisi illo eligendi.', 'Facilis autem nobis labore omnis facere aspernatur. Magni doloremque accusamus tenetur dolor placeat. Omnis est et sit accusamus eaque aut. Ut unde enim dolorem dolores et. Ea sint aliquam et blanditiis illum. Amet mollitia illum quas exercitationem saepe voluptas quisquam. Temporibus quis ducimus eaque.', 'https://via.placeholder.com/640x480.png/004477?text=repellendus', 7618, '2022-12-24', '2023-06-12', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(13, 'Rerum excepturi voluptatem sit aut dicta quia et.', 'eligendi-fugiat-omnis-vel-veniam-nisi', 9, 3, 'Officiis itaque perspiciatis est mollitia et nemo omnis. Nobis commodi porro harum. Officia officia ut velit est iste. Eaque ut et maiores perspiciatis et debitis.', 'Minus quas officia corrupti provident dolorem quia et veritatis. Sequi totam cumque vel alias. Dolores non voluptas ut nihil vitae sed. Necessitatibus est itaque eaque molestiae laborum eligendi velit repellendus. Omnis ad qui rem qui. Enim ea tempore fuga qui laborum molestiae eaque autem.', 'https://via.placeholder.com/640x480.png/002233?text=voluptas', 6547, '2022-12-25', '2023-12-11', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(14, 'Dolorem nobis voluptas dolor officia quia.', 'impedit-fuga-non-ducimus-sint-sunt-corrupti', 1, 3, 'Voluptates officia pariatur dolores soluta ullam. Ipsa autem quae minus tenetur eos est placeat. Culpa laborum sed culpa autem non et.', 'Sed omnis dignissimos consequatur optio ullam. Sint ut quo suscipit officia in possimus. Quae nam voluptatem dolor iusto et et. Molestias sint ut qui neque. Voluptas ad ut ut aperiam consequuntur nemo.', 'https://via.placeholder.com/640x480.png/00ff55?text=sunt', 2308, '2022-12-25', '2023-01-02', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(15, 'Modi nisi aliquid expedita et labore.', 'enim-quia-consequuntur-et-quam-magni-molestiae', 2, 3, 'Soluta ut enim dolorum reiciendis ea. Atque eos repellendus magnam porro laborum dolore dolorem dicta. Saepe ut minus illum illum enim dolorum adipisci reiciendis.', 'Ea dignissimos dolorum omnis velit esse. Et qui dolorem dolorem omnis. In deleniti necessitatibus totam non voluptatibus modi beatae laudantium. Provident voluptates repellendus molestiae sit beatae est explicabo.', 'https://via.placeholder.com/640x480.png/009977?text=aliquam', 1731, '2022-12-25', '2022-12-28', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(16, 'Quia delectus dolorem deserunt earum provident soluta ipsam et sit tempore.', 'quod-voluptatem-porro-aspernatur-magnam-aut-tempore-at', 15, 3, 'Quasi minus quia qui tempora rerum. Minima quidem et non nobis quisquam. Nobis praesentium sed qui velit. Repellendus soluta minima qui et corporis.', 'Quam qui tenetur neque et fugiat nihil culpa voluptas. Enim ab corporis tempore consequatur molestiae nulla. Ea molestiae qui eos quidem fugit est esse. Fugiat dolore est in dolorum culpa.', 'https://via.placeholder.com/640x480.png/009922?text=ipsam', 5978, '2022-12-25', '2023-07-06', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(17, 'Ducimus saepe et est mollitia et aut ad voluptatum.', 'dolore-quo-beatae-qui-et-illo-nam-quis', 14, 3, 'Aliquid quo ipsam occaecati ipsa saepe minima similique. Dolorem beatae quia ut quo quasi inventore eos.', 'Eius quaerat rerum repellat cumque vero. Dicta commodi dolorum voluptatem et facilis et soluta est. Nostrum ad quidem asperiores et adipisci eius quo. Omnis quo sint et nobis velit enim dolore. Non et et itaque cupiditate.', 'https://via.placeholder.com/640x480.png/0011aa?text=ut', 3500, '2022-12-25', '2023-07-11', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(18, 'Et aut quis assumenda rerum et cum molestiae voluptates veniam saepe.', 'laboriosam-nisi-sapiente-iste-sint-dolore', 2, 3, 'Qui quia asperiores numquam et nemo. Quae vel impedit consequatur corporis omnis. Ipsum consequatur fugiat et.', 'Quod consequatur harum adipisci nemo molestiae sit non. At dignissimos eos voluptas soluta. Et ut id facere recusandae qui. Non nobis hic eaque voluptatem non fugiat reiciendis.', 'https://via.placeholder.com/640x480.png/00ee88?text=maiores', 5451, '2022-12-25', '2023-06-05', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(19, 'Ut repellat quaerat mollitia odit.', 'rerum-distinctio-libero-nihil-ex-ullam-accusamus', 10, 3, 'Rerum et itaque ducimus modi vitae ex. Debitis consequuntur ea natus adipisci doloribus laborum occaecati omnis. Pariatur cum consequatur aliquid consequuntur. Mollitia et ea veritatis laudantium modi eum expedita.', 'Porro quia vel temporibus animi adipisci. Vero facilis harum suscipit nulla autem. Error consequatur occaecati reiciendis voluptates deleniti est sint. Ut minima nesciunt itaque reiciendis quae.', 'https://via.placeholder.com/640x480.png/001199?text=blanditiis', 4881, '2022-12-25', '2023-03-28', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(20, 'Nam ducimus non dolores eos ratione ea ad.', 'alias-quia-voluptatem-omnis-ex-aliquid-et', 12, 3, 'Facilis reprehenderit vel beatae porro nihil voluptatem quidem. Voluptatem qui accusamus nulla dolores nobis iusto nemo et. Tempora doloribus aut voluptatem eum qui. Saepe aliquid beatae pariatur consectetur.', 'Aut laboriosam hic saepe quam nisi ut omnis. Quia dignissimos earum voluptatem possimus. Illum quos est iste sed. Atque vitae pariatur et dolorum voluptatem eveniet aut. Est mollitia tenetur voluptatem unde sint est quo. Culpa magnam doloremque numquam reiciendis a tempore eos.', 'https://via.placeholder.com/640x480.png/0099ee?text=magni', 5968, '2022-12-25', '2023-07-19', 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `service_submites`
--

CREATE TABLE `service_submites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bid_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `submition_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submition_externalLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submition_drescreption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `logo`, `facebook_link`, `instagram_link`, `twitter_link`, `linkedin_link`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'Flex Lab', '1490055866.png', 'facebook.com', NULL, NULL, NULL, NULL, '2022-12-24 11:05:49', '2023-01-05 11:54:52'),
(2, 'Example Company', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-24 11:05:49', '2022-12-24 11:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_shortdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_shortdescription`, `slider_image`, `slider_status`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To Workplace', 'Fuga aliquip eget! Bibendum interdum velit, pede!', '386612350.jpg', 'active', '2022-12-25 13:15:25', '2022-12-25 13:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'seller@example.com', '2023-01-05 11:57:33', '2023-01-05 11:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderby` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 For Active 0 For Inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `role_id`, `email`, `email_verified_at`, `password`, `phone_number`, `user_slug`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 1, 'superadmin@mail.com', NULL, '$2y$10$Xd6lBWmJrMlX2V5gHxr9wuInB8XvemvCUrHC.OlMXG9S5xkpCd/ra', NULL, '63a7316d0f3f9', '1', NULL, NULL, NULL),
(2, 'Seller', 3, 'seller@mail.com', NULL, '$2y$10$KjEFN.vjT48iISDDkwViTuFN0BADlEeiaO9w9GxavW3Fk5Cwsn6CS', NULL, '63a7316d207b6', '1', NULL, NULL, NULL),
(3, 'Buyer', 4, 'buyer@mail.com', NULL, '$2y$10$JZ8FEVK0XzDMTjuWbs4jLe9dp468Zfg4bwNmr5lnxr7qyPLzUw41S', NULL, '63a7316d2fedb', '1', NULL, NULL, NULL),
(4, 'khayrul', 3, 'khayrul@mail.com', NULL, '$2y$10$ycH63N2lEJZoSSr9fOCD3eDCWXTRhiOHLckcsEA6VYrizW/Xyc42G', NULL, '63a88e360d930', '1', NULL, '2022-12-25 11:53:58', '2022-12-25 11:53:58'),
(5, 'Hello World', 3, 'hello@mail.com', NULL, '$2y$10$hbLXwxg18vyoPhFnCnbmUuGzqMVVbUcWPbD.PZ3Gmdb.qz9fbVW5m', NULL, '63a89fd3aea56', '1', NULL, '2022-12-25 13:09:07', '2022-12-25 13:09:07'),
(6, 'hhh', 4, 'h@mail.com', NULL, '$2y$10$hrhpdzbcZoviCZ8XT3N.8.E1z62xxiE083rOfaCvNvjugV5gp5.Pa', NULL, '63a8a0f00f755', '1', NULL, '2022-12-25 13:13:52', '2022-12-25 13:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `profile_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmenent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` bigint(20) UNSIGNED DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online_status` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`profile_id`, `user_id`, `full_name`, `description`, `facebook_link`, `github_link`, `profile_pic`, `present_address`, `parmenent_address`, `national_id`, `balance`, `user_skill`, `user_position`, `online_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 1, 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(2, 2, 'Seller', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 1, 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(3, 3, 'Buyer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 1, 1, '2022-12-24 11:05:49', '2022-12-24 11:05:49'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 1, 1, '2022-12-25 11:53:58', '2022-12-25 11:53:58'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 1, 1, '2022-12-25 13:09:07', '2022-12-25 13:09:07'),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 1, 1, '2022-12-25 13:13:52', '2022-12-25 13:13:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance_requests`
--
ALTER TABLE `balance_requests`
  ADD PRIMARY KEY (`balance_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `order_completes`
--
ALTER TABLE `order_completes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `place_bits`
--
ALTER TABLE `place_bits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `roles_role_name_unique` (`role_name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_submites`
--
ALTER TABLE `service_submites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance_requests`
--
ALTER TABLE `balance_requests`
  MODIFY `balance_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_completes`
--
ALTER TABLE `order_completes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place_bits`
--
ALTER TABLE `place_bits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service_submites`
--
ALTER TABLE `service_submites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `profile_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
