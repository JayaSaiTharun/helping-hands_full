-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 08:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29509909_hh`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate_requests`
--

CREATE TABLE `certificate_requests` (
  `sno` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `fathername` text NOT NULL,
  `idnumber` text NOT NULL,
  `studied` text NOT NULL,
  `contributed_from` date NOT NULL,
  `contributed_till` date NOT NULL,
  `position_served` text NOT NULL,
  `position_required` text NOT NULL,
  `idcard` text NOT NULL,
  `student_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate_requests`
--

INSERT INTO `certificate_requests` (`sno`, `firstname`, `lastname`, `fathername`, `idnumber`, `studied`, `contributed_from`, `contributed_till`, `position_served`, `position_required`, `idcard`, `student_image`) VALUES
(2, 'jayasai tharun', 'pechetti', 'rambabu', 'N181099', '2018-2024', '2023-04-20', '2023-04-21', 'fr', 'ec-member', 'N181099Screenshot (5).png', 'N181099Screenshot (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `fd`
--

CREATE TABLE `fd` (
  `Sno` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fd`
--

INSERT INTO `fd` (`Sno`, `Img`) VALUES
(4, 'IMG-20201206-WA0044.jpg'),
(5, '72175094_2611084535785783_6945234165155495936_n.jpg'),
(6, 'oc2222.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `fd_con`
--

CREATE TABLE `fd_con` (
  `Sno` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Info` varchar(500) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fd_con`
--

INSERT INTO `fd_con` (`Sno`, `Title`, `Info`, `Img`) VALUES
(3, 'Donation towards Kidney failure Student Almuni', 'A cheque of 40,046/-was issued for the M.Naga Raju who is suffering from kidney failure.', 'oc2222.jfif'),
(4, 'Distribution of Money towards Electrician Family', 'A Cheque of 1,00,000/- was issued for the Electrician family who fell down while working on the campus and later confirmed as Brain dead. we done two fixed deposits with Rs 50,000/- each will be done in the name of his children.\r\n', 'OC-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Sno` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Sno`, `year`, `Img`) VALUES
(12, 2021, 'HELPING HANDS RGUKT NUZVID (2).png'),
(13, 2021, 'NAUPADA SCHOOL PRD.jpg'),
(14, 2021, 'IMG-20201206-WA0015.jpg'),
(16, 2019, 'hh article.jpg'),
(18, 2019, '14107634_1880735608820683_8377755543209262605_o_1880735608820683.jpg'),
(19, 2022, 'SUNIL RIYANI CHEQUE DIST.jpg'),
(20, 2020, 'store opening.jfif'),
(21, 2019, 'varun_surgery.PNG'),
(23, 2019, 'Kerala_flood_victims.JPG'),
(24, 2019, '1458934.PNG'),
(25, 2019, 'img_1_1680862552992.jpg'),
(26, 2019, 'caligraphy.jfif'),
(27, 2023, 'img_1_1680864960239.jpg'),
(28, 2023, 'IMG_20230407_114526.jpg'),
(29, 2023, 'director sir-TZ.JPG'),
(30, 2023, 'director sir-tz23.JPG'),
(31, 2023, 'DIR.jfif'),
(32, 2023, 'TT.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `hcd`
--

CREATE TABLE `hcd` (
  `Sno` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hcd`
--

INSERT INTO `hcd` (`Sno`, `Img`) VALUES
(11, 'FB_IMG_1607255358251.jpg'),
(12, 'FB_IMG_1607253894228.jpg'),
(13, 'FB_IMG_1607255175950.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `icd`
--

CREATE TABLE `icd` (
  `Sno` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `icd`
--

INSERT INTO `icd` (`Sno`, `Img`) VALUES
(17, 'IMG_20230407_124137.jpg'),
(18, '71836668_2611083939119176_8933755588857298944_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `icd_con`
--

CREATE TABLE `icd_con` (
  `Sno` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Info` varchar(500) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `icd_con`
--

INSERT INTO `icd_con` (`Sno`, `Title`, `Info`, `Img`) VALUES
(4, 'lk bkdhb', 'kjbdkh bd v', 'Screenshot (5).png'),
(5, ',vjbkh', 'jndb kjbkhd', 'Screenshot (5).png');

-- --------------------------------------------------------

--
-- Table structure for table `iit`
--

CREATE TABLE `iit` (
  `Sno` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iit`
--

INSERT INTO `iit` (`Sno`, `Img`) VALUES
(4, '14107634_1880735608820683_8377755543209262605_o_1880735608820683.jpg'),
(5, 'IMG20230407124241.jpg'),
(7, 'IMG_20230407_114729.jpg'),
(8, 'IMG20230407122445.jpg'),
(9, 'teck.jfif'),
(11, 'rao sir.jfif'),
(12, 'IMG-20221104-WA0011.jpg'),
(13, 'png_20230407_165128_0000.png');

-- --------------------------------------------------------

--
-- Table structure for table `iit_con`
--

CREATE TABLE `iit_con` (
  `Sno` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Info` varchar(500) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iit_con`
--

INSERT INTO `iit_con` (`Sno`, `Title`, `Info`, `Img`) VALUES
(7, 'TECKZITE THEME EXPO', '', 'FB_IMG_1607254077024.jpg'),
(8, 'ECO FRIENDLY CRAFTS', '', 'IMG_20230407_114729.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `Sno` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`Sno`, `Img`) VALUES
(12, '1681041210871.jpg'),
(13, '1681041574982.jpg'),
(14, '1681105856424.jpg'),
(15, 'SUNIL RIYANI CHEQUE DIST.jpg'),
(16, 'FB_IMG_1607255358251.jpg'),
(17, 'NAUPADA SCHOOL PRD.jpg'),
(18, '79387899_2695817597312476_4713399335147012096_o_2695817590645810.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main_con`
--

CREATE TABLE `main_con` (
  `Sno` int(11) NOT NULL,
  `titlehead` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Info` varchar(1500) NOT NULL,
  `Img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_con`
--

INSERT INTO `main_con` (`Sno`, `titlehead`, `Title`, `Info`, `Img`) VALUES
(12, 'TECKZITE-23', '', 'Aesthetically Pleasing and Environmentally Conscious?\r\nHere is A Clarion Call from Helping Hands to visit our Eco-Friendly Crafts Stall in Teckzite 23 and meet our new born Eco Hands....\r\nYour Time & Visit inspires us.\r\nVisit the Stall & Buy our Unique Eco Crafts.', 'png_20230407_020159_0000 (1).png'),
(13, 'Game Stall In TECKZITE-2K23', '', 'Helping Hands Game Stall in Teckzite 23 invites your Gracious Presence...  Come & Experience our Fun & Entertainment Games..! \r\nWin to Gain Profit and Lose to Donate.', 'png_20230407_022044_0000.png');

-- --------------------------------------------------------

--
-- Table structure for table `main_con2`
--

CREATE TABLE `main_con2` (
  `Sno` int(11) NOT NULL,
  `titlehead` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Info` varchar(400) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_con2`
--

INSERT INTO `main_con2` (`Sno`, `titlehead`, `Title`, `Info`, `Img`) VALUES
(4, 'Mega Eye Camp', '', '', 'FB_IMG_1607255157632.jpg'),
(5, 'Covid Initiatives in Lockdown', '', '', 'IMG-20201206-WA0044.jpg'),
(6, 'ENTREPRENEURAL INITIATIVE', '', 'We stepped into Entrepreneurship and established an Enterprise - GROCERY STORE for the faculty members in RGUKT NUZVID on 16 Dec 2020, funded and administrating by HH.', '1681041210871.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main_slide`
--

CREATE TABLE `main_slide` (
  `Sno` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Info` varchar(500) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_slide`
--

INSERT INTO `main_slide` (`Sno`, `Title`, `Info`, `Img`) VALUES
(135, 'EYE CAMP', 'We organized a large scale Eye  and provided quality spectacles nearly to 2000 students and faculty members, medicines and cataract surgeries for the two day eye camp in 2019  association with Aswini Foundation', 'HCD1.jpg'),
(137, 'Open Collection for Hemavathi', 'Hemavathi is the student who has suffered by crashing her hand and  total hand was idle, We donated 2,65,000/- for her surgery under the Health Care Department.', 'HCD3.jfif'),
(139, 'Distribution of Money for Ganesh who is suffering from Hemisectomy', 'Student named B.Ganesh from the 2018 batch has approached Helping Hands for his surgery expenses as he is suffering from Hemisectomy. The cheque of 25,000/- was issued for his medical treatment.', 'HCD 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prd`
--

CREATE TABLE `prd` (
  `Sno` int(11) NOT NULL,
  `Img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prd`
--

INSERT INTO `prd` (`Sno`, `Img`) VALUES
(3, 'NAUPADA SCHOOL PRD.jpg'),
(4, 'PRD G.jpg'),
(5, 'occc.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `prd_con`
--

CREATE TABLE `prd_con` (
  `Sno` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Info` varchar(500) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prd_con`
--

INSERT INTO `prd_con` (`Sno`, `Title`, `Info`, `Img`) VALUES
(3, 'Naupada School Development Project', 'We are organised a infrastructure Development Project in Govt.High School,Naupada initiated from PRD. We santioned 1,00,000/- for the Sanitation and Hand wash Unit facility in the school which was effected under the Titli Cyclone in srikaklulam Dist.', 'NAUPADA PRD2.jpg'),
(4, 'Munuguru Cloth Donation', 'We Successfully organised cloth donation campaign in few areas near Munuguru,Khammam District on 28-07-19. we have collected wearable clothes from the students and faculty, distributed more than 1000 pairs of clothes to the needy people.', 'PRD2.jpg'),
(5, 'Calligraphy Workshop', 'We are conducted a workshop for the school going children of the staff in association with the well-known hand-writing expert Mr.P.B Chandra initiated under the Public Relations Department.\r\n', 'IMG_20230407_011121.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_collections`
--

CREATE TABLE `weekly_collections` (
  `sno` int(11) NOT NULL,
  `collection_no` int(11) NOT NULL,
  `date` text NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `e4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weekly_collections`
--

INSERT INTO `weekly_collections` (`sno`, `collection_no`, `date`, `p1`, `p2`, `e1`, `e2`, `e3`, `e4`) VALUES
(4, 2445, '2023-04-04', 442, 24, 3, 24, 343, 124);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `fd`
--
ALTER TABLE `fd`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `fd_con`
--
ALTER TABLE `fd_con`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `hcd`
--
ALTER TABLE `hcd`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `icd`
--
ALTER TABLE `icd`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `icd_con`
--
ALTER TABLE `icd_con`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `iit`
--
ALTER TABLE `iit`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `iit_con`
--
ALTER TABLE `iit_con`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `main_con`
--
ALTER TABLE `main_con`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `main_con2`
--
ALTER TABLE `main_con2`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `main_slide`
--
ALTER TABLE `main_slide`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `prd`
--
ALTER TABLE `prd`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `prd_con`
--
ALTER TABLE `prd_con`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `weekly_collections`
--
ALTER TABLE `weekly_collections`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `collection_no` (`collection_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fd`
--
ALTER TABLE `fd`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fd_con`
--
ALTER TABLE `fd_con`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hcd`
--
ALTER TABLE `hcd`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `icd`
--
ALTER TABLE `icd`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `icd_con`
--
ALTER TABLE `icd_con`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `iit`
--
ALTER TABLE `iit`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `iit_con`
--
ALTER TABLE `iit_con`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `main_con`
--
ALTER TABLE `main_con`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `main_con2`
--
ALTER TABLE `main_con2`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main_slide`
--
ALTER TABLE `main_slide`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `prd`
--
ALTER TABLE `prd`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prd_con`
--
ALTER TABLE `prd_con`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `weekly_collections`
--
ALTER TABLE `weekly_collections`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
