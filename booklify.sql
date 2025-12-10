-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2025 at 10:58 PM
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
-- Database: `booklify`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `checkin_date` date DEFAULT NULL,
  `checkout_date` date DEFAULT NULL,
  `guests` int(11) DEFAULT 1,
  `rooms` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `facilities` text DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `room_options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`room_options`)),
  `reviews` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`reviews`)),
  `nearby_restaurants` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`nearby_restaurants`)),
  `house_rules` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`house_rules`)),
  `available_from` date DEFAULT NULL,
  `available_to` date DEFAULT NULL,
  `max_guests` int(11) DEFAULT 2,
  `available_rooms` int(11) DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `destination`, `name`, `location`, `description`, `facilities`, `images`, `room_options`, `reviews`, `nearby_restaurants`, `house_rules`, `available_from`, `available_to`, `max_guests`, `available_rooms`) VALUES
(2, 'Cox\'s Bazar', 'Oceanview Retreat', 'Cox’s Bazar, Bangladesh', 'A beachfront property overlooking the Bay of Bengal with modern rooms and peaceful surroundings.', '[\"Free WiFi\", \"Swimming Pool\", \"Sea View Balcony\", \"24/7 Front Desk\", \"Free Breakfast\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\", \"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\", \"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Deluxe Sea View\",\"price\":8500},{\"type\":\"Premium Suite\",\"price\":12000},{\"type\":\"Family Room\",\"price\":9500}]', '[{\"user\":\"Rahim\",\"rating\":4.5,\"comment\":\"Great sea view and friendly staff.\"},{\"user\":\"Sadia\",\"rating\":4.0,\"comment\":\"Loved the breakfast!\"}]', '[\"Mermaid Café\",\"Salt Bistro\",\"Coastal Grills\"]', '{\"checkin\":\"2:00 PM\",\"checkout\":\"11:00 AM\",\"children\":\"All children welcome\",\"age_restriction\":\"18+\",\"payment\":\"Cash, Card, Mobile Banking\",\"pets\":\"Not allowed\"}', '2025-02-01', '2025-12-31', 6, 20),
(3, 'Sreemangal', 'Greenleaf Hotel & Spa', 'Sreemangal, Bangladesh', 'Located in tea gardens, perfect for nature lovers with spa services and eco-friendly cottages.', '[\"Spa\",\"Restaurant\",\"Free Parking\",\"Nature Trail\",\"Hot Water\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Standard Cottage\",\"price\":4500},{\"type\":\"Luxury Cottage\",\"price\":7000},{\"type\":\"Suite\",\"price\":9000}]', '[{\"user\":\"Tanvir\",\"rating\":5,\"comment\":\"Perfect for a quiet weekend.\"}]', '[\"Tea Valley Restaurant\",\"Forest Hut Café\"]', '{\"checkin\":\"1:00 PM\",\"checkout\":\"12:00 PM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash/Card\",\"pets\":\"Allowed\"}', '2025-01-01', '2025-12-31', 4, 12),
(4, 'Dhaka', 'Royal City Stay', 'Gulshan, Dhaka', 'Premium hotel located in the business district with high-class rooms and rooftop dining.', '[\"Gym\",\"Rooftop Restaurant\",\"Airport Shuttle\",\"WiFi\",\"Room Service\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Business Room\",\"price\":11000},{\"type\":\"Executive Suite\",\"price\":17000}]', '[{\"user\":\"Nadia\",\"rating\":4.8,\"comment\":\"Excellent service!\"}]', '[\"Bistro 21\",\"Steak House\",\"Thai Emerald\"]', '{\"checkin\":\"3:00 PM\",\"checkout\":\"12:00 PM\",\"children\":\"Not allowed under 10\",\"age_restriction\":\"18+\",\"payment\":\"Cash/Card\",\"pets\":\"Not allowed\"}', '2025-01-01', '2025-11-30', 3, 30),
(5, 'Bandarban', 'Hillside Cottage Inn', 'Bandarban', 'A wooden hillside cottage with scenic mountain views and adventure activities.', '[\"Mountain View\",\"Campfire\",\"Trekking Guide\",\"Breakfast\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Wood Cottage\",\"price\":4000},{\"type\":\"Hill View Room\",\"price\":5500}]', '[{\"user\":\"Rubel\",\"rating\":4.6,\"comment\":\"Amazing nature experience.\"}]', '[\"Tribal Kitchen\",\"Sky View Café\"]', '{\"checkin\":\"12:00 PM\",\"checkout\":\"11:00 AM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash Only\",\"pets\":\"Allowed\"}', '2025-01-15', '2025-12-30', 4, 10),
(6, 'Dhaka', 'Sunshine Business Hotel', 'Uttara, Dhaka', 'A modern business hotel close to the airport.', '[\"WiFi\",\"Conference Room\",\"Airport Shuttle\",\"Breakfast\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Standard\",\"price\":5000},{\"type\":\"Executive\",\"price\":7500}]', '[{\"user\":\"Arif\",\"rating\":4.3,\"comment\":\"Good for business travel.\"}]', '[\"Kacchi Bhai\",\"Food Junction\"]', '{\"checkin\":\"2:00 PM\",\"checkout\":\"12:00 PM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash/Card\",\"pets\":\"Not allowed\"}', '2025-01-01', '2025-12-31', 3, 18),
(7, 'Rangamati', 'Lakeshore Paradise', 'Rangamati', 'Located beside Kaptai Lake, offering boat rides and lakeside dining.', '[\"Lake View\",\"Boat Service\",\"Breakfast\",\"WiFi\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Lakeview Deluxe\",\"price\":6000},{\"type\":\"Family Suite\",\"price\":8000}]', '[{\"user\":\"Shuvo\",\"rating\":4.7,\"comment\":\"Wonderful lake views.\"}]', '[\"HillPoint Café\",\"Lake Breeze Restaurant\"]', '{\"checkin\":\"1:00 PM\",\"checkout\":\"11:00 AM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash/Card\",\"pets\":\"Allowed\"}', '2025-01-10', '2025-12-20', 4, 12),
(8, 'Jashore', 'Desert Palm Resort', 'Jashore', 'A quiet resort with palm trees and wide open spaces.', '[\"Swimming Pool\",\"Breakfast\",\"Parking\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Deluxe\",\"price\":4800},{\"type\":\"Suite\",\"price\":7000}]', '[{\"user\":\"Jenny\",\"rating\":4.2,\"comment\":\"Peaceful stay.\"}]', '[\"Palm Café\",\"Local Grill House\"]', '{\"checkin\":\"12:00 PM\",\"checkout\":\"10:00 AM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash/Card\",\"pets\":\"Not allowed\"}', '2025-02-01', '2025-11-30', 4, 10),
(9, 'Sylhet', 'Mountain Ridge Resort', 'Sylhet', 'A resort surrounded by green hills with premium services.', '[\"Gym\",\"Pool\",\"WiFi\",\"Breakfast\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Superior Room\",\"price\":6500},{\"type\":\"Luxury Suite\",\"price\":10500}]', '[{\"user\":\"Farhana\",\"rating\":4.9,\"comment\":\"Loved the atmosphere.\"}]', '[\"Green Lounge\",\"Hillside Café\"]', '{\"checkin\":\"3:00 PM\",\"checkout\":\"11:30 AM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash/Card\",\"pets\":\"Not allowed\"}', '2025-01-15', '2025-12-31', 4, 14),
(10, 'Khulna', 'Heritage Inn', 'Khulna', 'A traditional-style hotel with local heritage decorations.', '[\"WiFi\",\"Breakfast\",\"Parking\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Standard\",\"price\":3500},{\"type\":\"Family Room\",\"price\":5000}]', '[{\"user\":\"Hasan\",\"rating\":4.0,\"comment\":\"Great traditional vibe.\"}]', '[\"Khulna Kitchen\",\"Boat View Café\"]', '{\"checkin\":\"1:00 PM\",\"checkout\":\"11:00 AM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash/Card\",\"pets\":\"Allowed\"}', '2025-01-05', '2025-12-31', 4, 16),
(11, 'Dhaka', 'Urban Sky Hotel', 'Banani, Dhaka', 'A stylish modern hotel popular among young travelers.', '[\"WiFi\",\"Rooftop Lounge\",\"Gym\",\"Room Service\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Single\",\"price\":5500},{\"type\":\"Double\",\"price\":7200}]', '[{\"user\":\"Mahi\",\"rating\":4.4,\"comment\":\"Great rooftop view.\"}]', '[\"SkyDine\",\"Urban Grill\"]', '{\"checkin\":\"2:00 PM\",\"checkout\":\"12:00 PM\",\"children\":\"Not allowed\",\"age_restriction\":\"18+\",\"payment\":\"Cash/Card\",\"pets\":\"Not allowed\"}', '2025-01-01', '2025-12-31', 2, 20),
(12, 'Hatiya Island', 'Blue Lagoon Eco Resort', 'Hatiya Island', 'Eco-friendly lagoon-side resort surrounded by natural beauty.', '[\"Lagoon View\",\"Eco Cottages\",\"Organic Breakfast\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Eco Cottage\",\"price\":3800},{\"type\":\"Premium Cottage\",\"price\":5200}]', '[{\"user\":\"Tareq\",\"rating\":4.8,\"comment\":\"Calm and refreshing.\"}]', '[\"Island Café\",\"Lagoon Dine\"]', '{\"checkin\":\"12:00 PM\",\"checkout\":\"11:00 AM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash Only\",\"pets\":\"Allowed\"}', '2025-03-01', '2025-12-31', 4, 12),
(13, 'Chittagong', 'City Crown Hotel', 'Chittagong, Bangladesh', 'A comfortable business hotel near the commercial zone.', '[\"WiFi\",\"Breakfast\",\"Parking\",\"Conference Hall\"]', '[\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\",\"https://i.ibb.co.com/chFpDdkB/plane-image.jpg\"]', '[{\"type\":\"Standard\",\"price\":4800},{\"type\":\"Executive\",\"price\":9000}]', '[{\"user\":\"Imran\",\"rating\":4.1,\"comment\":\"Nice and clean.\"}]', '[\"Mezban House\",\"CTG Bistro\"]', '{\"checkin\":\"2:00 PM\",\"checkout\":\"12:00 PM\",\"children\":\"Allowed\",\"age_restriction\":\"None\",\"payment\":\"Cash/Card\",\"pets\":\"Not allowed\"}', '2025-01-01', '2025-12-31', 3, 22);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `stripe_payment_id` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(44, 'a@c.com', 'a@c.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
