-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 05:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `added_item`
--

CREATE TABLE `added_item` (
  `food_id` int(250) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `fcalories` varchar(250) NOT NULL,
  `protien` varchar(250) NOT NULL,
  `fat` varchar(250) NOT NULL,
  `saturatedfat` varchar(250) NOT NULL,
  `polyfat` varchar(250) NOT NULL,
  `monofat` varchar(250) NOT NULL,
  `Tfat` varchar(250) NOT NULL,
  `cholesterol` varchar(250) NOT NULL,
  `fileName` varchar(250) NOT NULL,
  `sodium` varchar(250) NOT NULL,
  `potassium` varchar(250) NOT NULL,
  `tcarbo` varchar(250) NOT NULL,
  `dfiber` varchar(250) NOT NULL,
  `sugar` varchar(250) NOT NULL,
  `pre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `added_item`
--

INSERT INTO `added_item` (`food_id`, `food_name`, `fcalories`, `protien`, `fat`, `saturatedfat`, `polyfat`, `monofat`, `Tfat`, `cholesterol`, `fileName`, `sodium`, `potassium`, `tcarbo`, `dfiber`, `sugar`, `pre`) VALUES
(18, 'Noodles', '138', '4.5g', '2.1g', '0.4g', '0.6g', '0g', '29mg', '5mg', './uploads/penne-pasta.jpg', '5mg', '38mg', '25g', '1.2g', '0.4g', '56 g'),
(19, 'Manchurian', '837g', '29g', '22.6g', '12.1g', '0.7g', '0.6g', '0.1g', '0mg', './uploads/veg-manchurian.jpg', '314.7mg', '215.5mg', '30.9g', '1.1g', '0.5g', '9 pieces'),
(20, 'Pizza', '266', '11g', '10g', '4.5g', '107g', '2.6g', '0.2g', '17mg', './uploads/pizza.jpg', '598mg', '172mg', '33g', '2.3g', '3.6g', '2 Slices per person'),
(22, 'Biryani', '292', '8.9g', '18.2g', '1.7g', '2.7g', '5.3g', '0.1g', '48mg', './uploads/kobbarillu.jpg', '198mg', '462mg', '21.5g', '6.4g', '3.2g', '200g'),
(23, 'Pasta', '131', '5G', '1.1G', '0.2G', '0.1G', '0.1G', '0G', '33MG', './uploads/penne-pasta.jpg', '6MG', '24MG', '25MG', '1.2G', '4.8G', '100G-120G');

-- --------------------------------------------------------

--
-- Table structure for table `addrecipe`
--

CREATE TABLE `addrecipe` (
  `food_id` int(250) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `Ptime` varchar(250) NOT NULL,
  `FTmessage` varchar(250) NOT NULL,
  `cooktime` varchar(250) NOT NULL,
  `Mtype` varchar(250) NOT NULL,
  `Imessage` varchar(250) NOT NULL,
  `Dmessage` varchar(250) NOT NULL,
  `Nmessage` varchar(250) NOT NULL,
  `serve` varchar(250) NOT NULL,
  `fileName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addrecipe`
--

INSERT INTO `addrecipe` (`food_id`, `food_name`, `Ptime`, `FTmessage`, `cooktime`, `Mtype`, `Imessage`, `Dmessage`, `Nmessage`, `serve`, `fileName`) VALUES
(74, 'Noodles', '10-15 Min', 'Superb & tasty Noodles', '8-10 Min', 'Staple Food', '1.Peppers\r\n2.Noodles\r\n3.Carrots\r\n4.Ginger\r\n5.Water\r\n6.Chilli Flakes\r\n7.Sesame Oil', '1.Both Fresh and dried noodles have to be coked for about 10-15 min in boiling salty water and drained', '1.Sugar 2g\r\n2.latter 2g\r\n45 Calories', '2 Ounces 56g', './uploade/noodles.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `user`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'gert', 'sht', 'hsth', 'tsyhrt');

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `id` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `age` int(250) DEFAULT NULL,
  `height` varchar(250) DEFAULT NULL,
  `weight` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `bmi` decimal(60,0) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `calories` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`id`, `username`, `gender`, `age`, `height`, `weight`, `bmi`, `email`, `password`, `date`, `calories`) VALUES
(7, 'pranay', 'Male', 20, '180', '65', '35', 'abcde255@gmail.com', '$2y$04$bOMDif9C6uRJHIxvFonytuzVEkFvIT/ktkbpOjYvfDu1fvF1n/Ok2', '2022-12-03', '2400'),
(8, 'abcd', 'Male', 20, '180', '65', '35', 'abcd@gmail.com', '$2y$04$FYxuGFvg9aATLKN0r3cCN.hGJhKRf5KFTBEEiGT2K86K00y4h21Vq', '2022-12-03', '2500'),
(9, 'yash', 'Male', 21, '170', '70', '25', 'yashwanthgadila@gmail.com', '$2y$04$YwdL9LLCKz.7.phSNDsxouUyC1ACEpv9XBVSo1dkNGyTroXyA5xUa', '2022-12-22', '2400');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset`
--

CREATE TABLE `pass_reset` (
  `id` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pass_reset`
--

INSERT INTO `pass_reset` (`id`, `email`, `token`) VALUES
(1, 'yashwanthgadila@gmail.com', '5fa23b864fa22ba34d2fc58d30bdfde9b737de0e40be43959884bfbbdb1b19f978e3ffba123dd47b66587342903084cbb258');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `added_item`
--
ALTER TABLE `added_item`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `addrecipe`
--
ALTER TABLE `addrecipe`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pass_reset`
--
ALTER TABLE `pass_reset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `added_item`
--
ALTER TABLE `added_item`
  MODIFY `food_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `addrecipe`
--
ALTER TABLE `addrecipe`
  MODIFY `food_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerdata`
--
ALTER TABLE `customerdata`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pass_reset`
--
ALTER TABLE `pass_reset`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
