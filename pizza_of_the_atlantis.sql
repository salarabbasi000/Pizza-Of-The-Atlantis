-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 05:08 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_of_the_atlantis`
--

-- --------------------------------------------------------

--
-- Table structure for table `breverage`
--

CREATE TABLE `breverage` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `small_price` int(7) NOT NULL,
  `half_litre_price` int(7) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breverage`
--

INSERT INTO `breverage` (`id`, `name`, `image`, `small_price`, `half_litre_price`, `timestamp`) VALUES
(2, 'Coca Cola', '../pictures/menu/breverages/img_1533653074_cocacola.jpg', 40, 80, '2018-08-07 14:44:34'),
(17, 'Pepsi', '../pictures/menu/breverages/img_1533650492_pepsi.jpg', 40, 80, '2018-08-07 14:01:32'),
(22, 'Mirinda', '../pictures/menu/breverages/img_1561159766_mirinda.jpg', 35, 80, '2019-06-21 23:29:26'),
(26, 'Fanta', '../pictures/menu/breverages/img_1533721937_fanta.jpg', 40, 80, '2018-08-08 09:52:17'),
(27, 'Water', '../pictures/menu/breverages/img_1535038450_water.jpg', 25, 70, '2018-08-23 15:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(55) CHARACTER SET utf8 NOT NULL,
  `email` varchar(55) CHARACTER SET utf8 NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `timestamp`) VALUES
(2, 'Hiba Abbasi', 'hiba.abbasi@yahoo.com', '10/10 for food and service.', '2018-07-10 18:42:26'),
(7, 'Ahsan Ali', 'ahsan123@gmail.com', 'Chicken Fajita had no chicken :-(                        ', '2018-07-10 19:40:20'),
(10, 'Asad Jafri', 'jafri@yahoo.com', 'Overall experience: 9/10                        ', '2018-08-01 10:35:11'),
(13, 'Saad Jaliawala', 'jaliawala@yahoo.com', 'Taste:9/10   \r\nAmbiance: 6/10\r\nOverall:7.5/10\r\n                      ', '2018-08-08 05:43:30'),
(14, 'Mir Haadi', 'hadi@yahoo.com', '9/10 XD                        ', '2018-08-11 15:25:28'),
(15, 'Salar Ali', 'salarabbasi000@gmail.com', 'Chicken Fajita was awesome. Loved it <3\r\n', '2018-08-14 18:07:26'),
(16, 'Salar Ali', 'salarabbasi000@gmail.com', 'awesome experience', '2018-08-15 14:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(1) NOT NULL,
  `email` varchar(55) NOT NULL,
  `contact` varchar(25) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `views` int(11) NOT NULL,
  `delivery_charges` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `email`, `contact`, `address`, `views`, `delivery_charges`) VALUES
(1, 'we@pizzaoftheatlantis.com', '0900-78601', 'PIZZA OF THE ATLANTIS<br>Bell Arcade, Gulistan-e-Johar, Block#1, <br>Karachi.', 48, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `contact` varchar(25) CHARACTER SET utf8 NOT NULL,
  `items` text CHARACTER SET utf8 NOT NULL,
  `total` int(11) NOT NULL,
  `promo` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`email`, `address`, `contact`, `items`, `total`, `promo`, `id`) VALUES
('muze@gmail.com', 'Near NIPA', '0333-7563498', '1 Chicken Supreme - large(Price: PKR.950), 2 Spring Roll - 3 pieces/serving(Price: PKR.300), 1 Pepsi - small(Price: PKR.40), ', 1290, '', 5),
('xyz@gmail.com', 'nipa', '03337572321', '3 Spicy Ranch - medium(Price: PKR.1800), ', 1800, '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `small_price` int(5) NOT NULL DEFAULT '350',
  `medium_price` int(5) NOT NULL DEFAULT '600',
  `large_price` int(5) NOT NULL DEFAULT '950',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `description`, `image`, `small_price`, `medium_price`, `large_price`, `timestamp`) VALUES
(11, 'Chicken Supreme', '																																													Spicy chicken, chicken fajita, smoked chicken, onions, green peppers, olives and mushrooms.	\r\n																\r\n																\r\n															', '../pictures/menu/pizzas/img_1533657247_chicken supreme.jpg', 350, 600, 950, '2018-08-07 15:54:07'),
(23, 'Spicy Ranch', '															Creamy ranch base topped with chicken chunks, olives, capsicum, onions and spicy peri sauce.	\r\n															', '../pictures/menu/pizzas/img_1533656531_spicy ranch.jpg', 350, 600, 950, '2018-08-07 15:42:11'),
(25, 'Super  Supreme', 'Our famous combination of beef pepperoni, smoked chicken, cabanossi, beef, onions, green peppers, olives & Mushrooms with double the amount of topping.	\r\n																\r\n															', '../pictures/menu/pizzas/img_1533655622_super supreme.jpg', 350, 600, 950, '2018-08-07 15:27:02'),
(32, 'Chicken Fajita', 'Fajita marination of chicken fajita, onions, green peppers and topped mozzarella cheese.\r\n\r\n															', '../pictures/menu/pizzas/img_1533656949_chicken fajita.jpg', 350, 600, 950, '2018-08-07 15:49:09'),
(35, 'Behari', 'Behari masala marinated chicken chunks, onion, green chilies - topped with loads of mozzarella cheese and specially garnished with parsley and a wedge of lemon!\r\n																\r\n															', '../pictures/menu/pizzas/img_1533721797_bihari.jpg', 350, 600, 950, '2018-08-08 09:49:57'),
(36, 'Afghani Tikka', 'Our specialty !																\r\n															', '../pictures/menu/pizzas/img_1535039436_afghani.jpg', 350, 600, 950, '2018-08-23 15:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `starter`
--

CREATE TABLE `starter` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `pieces_or_servings` int(3) NOT NULL,
  `price` int(7) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `starter`
--

INSERT INTO `starter` (`id`, `name`, `description`, `image`, `pieces_or_servings`, `price`, `timestamp`) VALUES
(13, 'Cheese Roll', 'Plate of 6 rolls filled with creamy cheese.', '../pictures/menu/starters/img_1535039044_cheese roll.jpg', 6, 300, '2018-08-23 15:44:04'),
(14, 'Chicken Wings', 'Oven baked hot and spicy chicken wings.', '../pictures/menu/starters/img_1533666232_chicken wings.jpg', 8, 300, '2018-08-07 18:23:52'),
(15, 'Mix Salad', 'A scrumptious variety of garden fresh vegetables that will tempt you to create your very own favorite salad topped with our classic dressings.', '../pictures/menu/starters/img_1533666610_salad.jpg', 1, 300, '2018-08-07 18:30:10'),
(16, 'Spring Roll', 'Veggie lovers definitely like it !', '../pictures/menu/starters/img_1535092628_spring roll.jpg', 3, 150, '2018-08-24 06:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(3) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `position` varchar(25) CHARACTER SET utf8 NOT NULL,
  `description` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `facebook` varchar(70) CHARACTER SET utf8 NOT NULL,
  `instagram` varchar(70) CHARACTER SET utf8 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `description`, `image`, `facebook`, `instagram`, `timestamp`) VALUES
(28, 'Salar Ali', 'Founder', 'Founder & CEO of Pizza Of The Atlantis.', '../pictures/team/img_1533720789_Webp.net-resizeimage (8).jpg', 'https://www.facebook.com/m.salaraliabbasi', 'https://www.instagram.com/salar_9_9/', '2018-08-08 08:10:49'),
(30, 'Maham Shoaib', 'Chef', 'An experience chef, loyal to her work', '../pictures/team/img_1533720561_Webp.net-resizeimage (6).jpg', 'https://www.facebook.com/maham.shoaib.923', 'https://www.instagram.com/mahamshoaib._/', '2018-08-08 09:02:08'),
(31, 'Ahmed Raza', 'Manager', 'Someone who is trustworthy. A young boy with advanced management skills.', '../pictures/team/img_1533720094_Webp.net-resizeimage (5).jpg', 'https://www.facebook.com/raxa2', 'https://www.instagram.com/ahmmmeeed.raza/', '2018-08-08 09:04:35'),
(32, 'Awais Ahmed', 'Cook', 'His ROTIS may not be GOL, but pizzas made by him are mouth-watering.', '../pictures/team/img_1534250378_Webp.net-resizeimage (3).jpg', 'https://www.facebook.com/awais.nizamani.7', 'https://www.instagram.com/nizamani1879/', '2018-08-11 15:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` longtext CHARACTER SET utf8 NOT NULL,
  `contact` varchar(20) CHARACTER SET utf8 NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `contact`, `is_admin`, `timestamp`) VALUES
(1, 'Salar Ali', 'salarabbasi000@gmail.com', '0c8e2c4da6ab4547166564493343f0f6', 'Flat#302, Bell Arcade, Gulistan-e-Johar, Block#1.', '0333-7572330', 1, '2018-08-06 13:58:25'),
(4, 'Bilal Sohail', 'bilalsohail@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'Mehmoodabad, Block#4.', '0321-3145122', 0, '2018-08-09 15:26:29'),
(8, 'Muzamil Abbasi', 'muze@gmail.com', '962012d09b8170d912f0669f6d7d9d07', 'Near NIPA', '0333-7563498', 0, '2018-08-11 15:27:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breverage`
--
ALTER TABLE `breverage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starter`
--
ALTER TABLE `starter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breverage`
--
ALTER TABLE `breverage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `starter`
--
ALTER TABLE `starter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
