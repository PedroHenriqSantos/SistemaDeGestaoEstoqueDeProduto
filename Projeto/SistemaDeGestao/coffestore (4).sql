-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 11:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `avaliation`
--

CREATE TABLE `avaliation` (
  `id_avaliation` int(11) NOT NULL,
  `rate_avaliation` int(11) NOT NULL,
  `fk_id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avaliation`
--

INSERT INTO `avaliation` (`id_avaliation`, `rate_avaliation`, `fk_id_product`) VALUES
(1, 3, 14),
(2, 5, 15),
(3, 5, 14),
(4, 1, 15),
(5, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `fk_id_product` int(11) NOT NULL,
  `quantity_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `fk_id_product`, `quantity_cart`) VALUES
(34, 14, 3),
(35, 14, 4),
(36, 15, 5),
(37, 14, 4),
(38, 15, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id_category`, `name_category`) VALUES
(2, 'teste'),
(8, 'teste5');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `name_client` varchar(255) NOT NULL,
  `email_client` varchar(255) NOT NULL,
  `phone_client` varchar(255) NOT NULL,
  `street_client` varchar(255) NOT NULL,
  `district_client` varchar(255) NOT NULL,
  `number_client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `name_client`, `email_client`, `phone_client`, `street_client`, `district_client`, `number_client`) VALUES
(26, 'teste', 'terste@gmail.com', '3199878654', 'teste', 'teste', '3198'),
(27, 'teste', 'terste@gmail.com', '3199878654', 'teste', 'teste', '3198'),
(28, 'teste', 'terste@gmail.com', '3199878654', 'teste', 'teste', '3198'),
(29, 'teste', 'terste@gmail.com', '3199878654', 'teste', 'teste', '3198'),
(30, 'teste', 'terste@gmail.com', '3199878654', 'teste', 'teste', '3198'),
(31, 'teste', 'terste@gmail.com', '3199878654', 'teste', 'teste', '3198'),
(32, 'teste', 'terste@gmail.com', '3199878654', 'teste', 'teste', '3198'),
(33, 'teste', 'teste@gmail.coim', '319975643', 'teste', 'teste', 'teste'),
(34, 'teste', 'teste@gmail.com', '319942366', 'teste', 'teste', 'te'),
(35, 'teste', 'teste@gmail.com', '319942366', 'teste', 'teste', 'te'),
(36, 'teste', 'teste@gmail.com', '319942366', 'teste', 'teste', 'te'),
(37, 'teste', 'teste@gmail.com', '319745636', 'teste', 'teste', '3187'),
(38, 'teste', 'teste@gmail.com', '3413131', 'teste', 'teste', '317324'),
(39, 'teste', 'teste@gmail.com', '3413131', 'teste', 'teste', '317324'),
(40, 'teste', 'teste@gmail.com', '3413131', 'teste', 'teste', '317324'),
(41, 'teste', 'tgeste@gmail.com', '3199776554', 'teste', 'teste', '31'),
(42, 'teste', 'testrepedro2@gmail.com', '319423646', 'teste', 'teste', '3197324'),
(43, 'teste', 'teste@gmail.com', '319000', 'teste', 'teste', 'teste'),
(44, 'teste', 'teste@gmail.com', '319946326432', 'teste', 'teste', '318237'),
(45, 'teste', 'teste@gmail.conm', 'ste', 'te', 'teste', 'teste'),
(46, 'teste', 'teste@gmail.conm', 'ste', 'te', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `name_comment` varchar(255) NOT NULL,
  `comment_comment` text NOT NULL,
  `fk_id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `name_comment`, `comment_comment`, `fk_id_product`) VALUES
(10, 'teste', 'teste', 14);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `description_product` varchar(500) NOT NULL,
  `price_product` int(11) NOT NULL,
  `image_product` varchar(255) NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `fk_id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `description_product`, `price_product`, `image_product`, `quantity_product`, `fk_id_cat`) VALUES
(14, 'testeProduto', 'teste', 31, 'pao.png', 2, 2),
(15, 'produtotestedenovo', 'teste', 31, 'pao.png', 3, 2),
(16, 'teste45', 'teste', 31, '', 5, 2),
(17, 'testeImagem', 'teste', 12, 'Screenshot_3.png', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id_sale` int(11) NOT NULL,
  `fk_id_cart` int(11) NOT NULL,
  `fk_id_client` int(11) NOT NULL,
  `typeUser_sale` varchar(255) NOT NULL DEFAULT 'NORMAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id_sale`, `fk_id_cart`, `fk_id_client`, `typeUser_sale`) VALUES
(12, 34, 44, 'NORMAL'),
(13, 35, 45, 'NORMAL'),
(14, 36, 45, 'NORMAL'),
(15, 37, 46, 'NORMAL'),
(16, 38, 46, 'NORMAL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `function_user` varchar(50) NOT NULL,
  `phone_user` varchar(244) NOT NULL,
  `email_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `password_user`, `function_user`, `phone_user`, `email_user`) VALUES
(9, '345', 'teste', 'MASTER', '319985674', 'teste@gmail.com'),
(10, 'testepedrousuario', '1234', 'MASTER', '31973264', 'teste@gmail.com'),
(11, 'testeNormal', 'testeNormal@gmail.com', 'NORMAL', 'teste', 'testeNormal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliation`
--
ALTER TABLE `avaliation`
  ADD PRIMARY KEY (`id_avaliation`),
  ADD KEY `fkPro` (`fk_id_product`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `fkIdProduct` (`fk_id_product`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `product` (`fk_id_product`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `cat` (`fk_id_cat`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id_sale`),
  ADD KEY `fkIdCart` (`fk_id_cart`),
  ADD KEY `fkidClient` (`fk_id_client`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliation`
--
ALTER TABLE `avaliation`
  MODIFY `id_avaliation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id_sale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avaliation`
--
ALTER TABLE `avaliation`
  ADD CONSTRAINT `fkPro` FOREIGN KEY (`fk_id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fkIdProduct` FOREIGN KEY (`fk_id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `product` FOREIGN KEY (`fk_id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `cat` FOREIGN KEY (`fk_id_cat`) REFERENCES `categorys` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `fkIdCart` FOREIGN KEY (`fk_id_cart`) REFERENCES `cart` (`id_cart`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkidClient` FOREIGN KEY (`fk_id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
