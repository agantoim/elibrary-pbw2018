-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 10:44 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama_anggota` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `status_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `username`, `password`, `nama_anggota`, `phone`, `address`, `status_user`) VALUES
(1, 'agankolbi', 'admin1', 'Qolbi', '+820000001', 'Bandung', '1\r'),
(2, 'fakhry', 'admin2', 'Fakhry', '+820000002', 'Bandung', '1\r'),
(3, 'icabane2', 'eP0jhZIxER', 'Iggie Cabane', '+62 965 856 1193', '938 Tony Junction', '0\r'),
(320, 'gklimkiewich3', 'fz166r', 'Gale Klimkiewich', '+86 349 571 2139', '25911 Homewood Terrace', '0\r'),
(321, 'jpye4', 'i2ZKPvIwrI', 'Jackelyn Pye', '+86 332 659 9796', '20679 Monica Trail', '0\r'),
(322, 'dmarner5', 'cNjc5yiRRJ69', 'Donaugh Marner', '+49 519 129 2096', '4 Paget Plaza', '0\r'),
(323, 'ijowitt6', 'FFf5aVe6WxTA', 'Ingra Jowitt', '+66 612 950 5256', '6454 Longview Crossing', '0\r'),
(324, 'nguthrie7', 'WM7sKFL', 'Neill Guthrie', '+55 557 586 5519', '4 Pine View Crossing', '0\r'),
(325, 'abreinlein8', 'ULckxOAXgga', 'Abra Breinlein', '+33 495 255 1293', '27798 Walton Park', '0\r'),
(326, 'ahuntly9', '4IhHrquyp', 'Alon Huntly', '+52 903 758 3081', '3421 Walton Street', '0\r'),
(327, 'rissacova', 'YTW41WVkAL8', 'Riannon Issacov', '+55 423 155 9697', '7 Hazelcrest Lane', '0\r'),
(328, 'fdavidovitzb', 'vGXq2mv', 'Frank Davidovitz', '+86 267 107 3500', '92 Ohio Pass', '0\r'),
(329, 'tobertc', 'OW2eyQ15jhr4', 'Tiffi Obert', '+351 524 152 9100', '12 Golf View Place', '0\r'),
(330, 'gsiveterd', 'tMj3mV4uNO1', 'Geraldine Siveter', '+86 855 537 1558', '484 Helena Pass', '0\r'),
(331, 'lshevlanee', 'wBK9fl', 'Lari Shevlane', '+265 924 609 2155', '5292 Cardinal Parkway', '0\r'),
(332, 'lbanisterf', 'sDxXG94', 'Lucais Banister', '+86 539 248 6092', '186 Farmco Street', '0\r'),
(333, 'tgocherg', 'dKiSoLhDe2u', 'Tracy Gocher', '+63 741 916 2568', '28231 Delaware Plaza', '0\r'),
(334, 'uswatradgeh', 'GWL1nkiye', 'Udall Swatradge', '+55 282 628 0258', '2729 Heffernan Circle', '0\r'),
(335, 'ifalcusi', 'YYEMksjR', 'Ilsa Falcus', '+48 762 991 5031', '20870 Mendota Place', '0\r'),
(336, 'ccrewsj', 'CffCyRnXmR', 'Cristi Crews', '+62 633 408 3853', '525 Glacier Hill Point', '0\r'),
(337, 'mramsbottomk', 'Un35j2R', 'Marshall Ramsbottom', '+30 676 143 7375', '01 Texas Park', '0\r'),
(338, 'zorringel', 'ebqbjXXz', 'Zed Orringe', '+62 519 697 0009', '439 Service Street', '0\r'),
(339, 'briccionem', 'S89eGhU85w5x', 'Bale Riccione', '+86 343 202 6948', '8 Orin Circle', '0\r'),
(340, 'apirdyn', 'ph8Q89Nv3yR', 'Annabella Pirdy', '+7 915 245 9613', '753 Kinsman Drive', '0\r'),
(341, 'gphizackerlyo', '5qXP9zUtTjY', 'Graig Phizackerly', '+48 455 321 1259', '0 Hansons Hill', '0\r'),
(342, 'mspiveyp', 'Yb3UVs', 'Maury Spivey', '+7 902 798 1872', '603 Daystar Crossing', '0\r'),
(343, 'pmeiningenq', 'mcUg4L', 'Price Meiningen', '+86 400 411 6962', '01 Elmside Place', '0\r'),
(344, 'cdallynr', 'bORuXaDZPbSp', 'Cody Dallyn', '+86 515 762 8631', '72 Dennis Center', '0\r'),
(345, 'tellwells', 'fq6oEW63OhxU', 'Talya Ellwell', '+7 156 609 5986', '09820 Westridge Hill', '0\r'),
(346, 'aruburyt', 'aiSR18', 'Audi Rubury', '+86 871 152 3363', '89 Birchwood Drive', '0\r'),
(347, 'bhelixu', 'gq1Y9qW', 'Brynna Helix', '+82 323 112 4135', '82 Clemons Court', '0\r'),
(348, 'jpockv', 'Rkelz8', 'Jerry Pock', '+251 726 575 0652', '27131 Schurz Terrace', '0\r'),
(349, 'dgrosierw', '2Te9koxuCG', 'Dinah Grosier', '+55 369 324 2088', '89 Marcy Pass', '0\r'),
(350, 'hrandalx', 'ylQQ6kZiX', 'Hamel Randal', '+53 247 934 8630', '40468 Dryden Way', '0\r'),
(351, 'sdashwoody', 'R7ZDiuB5K9p', 'Scarlet Dashwood', '+1 973 769 9981', '088 Roxbury Circle', '0\r'),
(352, 'mwattonz', 'mGeQ40', 'Mellie Watton', '+86 977 554 4651', '117 Southridge Way', '0\r'),
(353, 'mgoodlett10', 'PxGscg3', 'Maxy Goodlett', '+63 751 158 7806', '064 Kim Park', '0\r'),
(354, 'lminards11', 'BPbjMrUzwP', 'Lane Minards', '+212 169 674 2051', '69 Mosinee Plaza', '0\r'),
(355, 'chouliston12', '52gPLubt9', 'Colleen Houliston', '+62 968 310 2570', '1612 8th Terrace', '0\r'),
(356, 'gcornejo13', 'sgl8Fsm9Op', 'Garvin Cornejo', '+63 865 648 5302', '41405 Pawling Alley', '0\r'),
(357, 'sculpan14', 'Hv4GcoR', 'Shannon Culpan', '+86 596 392 3992', '69 Dayton Lane', '0\r'),
(358, 'ejohnke15', 'u5FgTFdSyf', 'Estrellita Johnke', '+421 122 172 4318', '332 Marquette Hill', '0\r'),
(359, 'cdewett16', '79QwuQW', 'Creigh Dewett', '+254 941 344 4664', '5315 Hayes Terrace', '0\r'),
(360, 'ofettiplace17', 'mDTMIF', 'Othilie Fettiplace', '+420 671 618 3229', '2266 Mayer Circle', '0\r'),
(361, 'ajodrelle18', 'Fh2biH7e', 'Arvin Jodrelle', '+62 823 764 6207', '9 Erie Road', '0\r'),
(362, 'cskudder19', 'oa42EFiM5LE', 'Clary Skudder', '+7 302 655 8658', '9385 Atwood Pass', '0\r'),
(363, 'mspeerman1a', 'bgwf5xmIh', 'Marylynne Speerman', '+63 379 929 7797', '02 Grover Plaza', '0\r'),
(364, 'dcutforth1b', 'RmIclZ5FNW', 'Delano Cutforth', '+7 776 488 2609', '762 Muir Pass', '0\r'),
(365, 'mperkinson1c', 'JRdLNOv', 'Melody Perkinson', '+380 336 898 0541', '12 Arkansas Junction', '0\r'),
(366, 'eblanc1d', '0nXmG8xW3', 'Enrichetta Blanc', '+995 619 314 2800', '9 Oneill Center', '0\r');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `book_code` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `pub_year` int(11) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `id` int(11) NOT NULL,
  `id_kategoriBuku` int(11) NOT NULL,
  `kategoriBuku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `book_code` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL,
  `due` int(11) NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_buku` (`book_code`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_kategoriBuku` (`id_kategoriBuku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
