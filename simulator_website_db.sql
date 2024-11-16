-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 12:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simulator_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `a_name` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `a_name`, `password`) VALUES
(1, 'admin123@gmail.com', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `overview`
--

CREATE TABLE `overview` (
  `overview_id` int(11) NOT NULL,
  `headline` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overview`
--

INSERT INTO `overview` (`overview_id`, `headline`, `description`) VALUES
(1, '', '<h2>Fulfil widget related expectations</h2>\r\n\r\n<p>Individuals who explore the online widget for the live visitor count these days get an overview regarding the style, live counter for the root domain, HTML code and other important things. They copy and paste the text to their website or blog HTML. They understand as well as double- check overall benefits of properly using the widget. They think smart and seek advanced facilities to improve their marketing efforts further.Individuals who explore the online widget for the live visitor count these days get an overview regarding the style, live counter for the root domain, HTML code and other important things. They copy and paste the text to their website or blog HTML. They understand as well as double- check overall benefits of properly using the widget. They think smart and seek advanced facilities to improve their marketing efforts further.</p>\r\n\r\n<p>Attractive things associated with the latest updates of free widgets for online visitors and users live counting purpose these days encourage many webmasters to compare and narrow down these widgets. You can feel free to visit this reliable platform and take note of the complete details about how to properly use the online widget. You will get 100% satisfaction and feel confidence to recommend this widget to others in your business network.</p>\r\n\r\n<h2>Focus on the main attractions of the visitors and users online widgets</h2>\r\n\r\n<p>Everyone has different expectations regarding their business development. They focus on the best suggestions to improve the visibility of their business on the target market and use every chance to make their business successful on online further. They can concentrate on the latest updates of the visitor online widget collection accessible from anywhere at any time. Once they have planned to find out the total number of visitors to their website and things lead visitors to get in touch with their website, they can directly prefer and use the recommended online visitor widget.</p>\r\n\r\n<h2>Unbiased reviews of widgets</h2>\r\n\r\n<p>Readers of the honest reviews of the top widgets for the free real-time live visitors count widgets on online these days get an overview about how they can successfully use one of these widgets. They are very conscious about how they pick and use the appropriate widget designed to display the total number of visitors or users of the website. You may be a beginner to the widgets in this category and think about where to place this widget in your website. You can place this widget anywhere in your website and begin a step to use the advanced online visitors&rsquo; analytics. You will find out and make certain about how many visitors you have on your business platform on online. You will the most useful details like where are these visitors from and what these visitors view on your website.</p>\r\n\r\n<p>Free widgets associated with the live traffic feed nowadays catch the attention of individuals who have planned to improve the success rate of their business in the competitive niche on online. You can get in touch with the Live Traffic Feed right now and take note of everything about users online widget collection on online. You do not fail to be amazed about various things associated with the widget and keen to make use of the appropriate widget. Beginners and regular users of the widgets nowadays think out of the box and seek the suggestions from experts in the widget creation to get free yet useful widget for identifying the number of visitors in the official website of their business.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `publication_id` int(11) NOT NULL,
  `publication` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publication_id`, `publication`, `link`) VALUES
(2, '<p><strong>Abu Kowsar,</strong> Syed Nazmus Sakib, <strong>Masum Billah</strong>, Sujoy Dey, Khaledun Nahar Babi, Ali Newaz Bahar, Syed Farid Uddin Farhad<em>.,</em> &ldquo;A novel simulator of multijunction solar cells: MSCS-1D&rdquo; Submitted to the Journal of Computational Electronics, <strong>Springer</strong>, Submission ID: JCEL-D-19-00280, May 2019. <strong>(SCIE Indexed, Impact factor: 1.63)</strong></p>\r\n', 'https://ijrer.org/ijrer/index.php/ijrer/article/view/11147/pdf'),
(3, '<p>Abu Kowsar, <strong>Masum Billah</strong>, Sujoy Dey, &ldquo;Comparative Study on Solar Cell Simulators&rdquo; Accepted to International Conference on Innovation in Engineering and Technology (ICIET) University of Dhaka, Submission ID Number: 68, 2019. <strong>(AI: IEEE Xplore and Scopus)</strong></p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `scientists`
--

CREATE TABLE `scientists` (
  `s_id` int(11) NOT NULL,
  `s_name` text NOT NULL,
  `role` text NOT NULL,
  `category` text NOT NULL,
  `designation` text NOT NULL,
  `priority` int(11) NOT NULL,
  `email` text NOT NULL,
  `image_name` text NOT NULL,
  `rg_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scientists`
--

INSERT INTO `scientists` (`s_id`, `s_name`, `role`, `category`, `designation`, `priority`, `email`, `image_name`, `rg_link`) VALUES
(3, 'masum billah', 'developer', 'Thesis Student', 'Lecturer', 1, 'admin@gmail.con', '1599847819-5081-rsz_1passport_size_picture_2.jpg', '#'),
(5, 'Apu kowser', 'Head', 'Scientist', 'scientific officer', 6, 'masum.swe.ndc@gmail.com', '1602973725-8610-IMG_20191107_0002.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `simulator`
--

CREATE TABLE `simulator` (
  `simulator_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `simulator_file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simulator`
--

INSERT INTO `simulator` (`simulator_id`, `title`, `date`, `description`, `simulator_file_name`) VALUES
(2, 'All about version one you should know about MSCS-1D', '2020-09-12', '<p><a href=\"https://mscs-bcsir.com/#\">About MSCS-1D</a></p>\r\n\r\n<p>One dimensional multijunction solar cell simulator: Version-1 (MSCS-1D: V-1) is developed by Advanced Photovoltaic Lab, Bangladesh Council of Scientific and Industrial Research (BCSIR).This work is financially supported by the Ministry of Science and Technology, the People&rsquo;s Republic of Bangladesh under Special Allocation Project. Mr. Abu Kowsar is the principal investigator of this project, Dr. Syed Farid Uddin Farhad and Khaledun Nahar Babi are the co-investigator of this project. Syed Nazmus Sakib, Lecturer, Department of ETE, Daffodil International University contributed here as a M.S. thesis student of Institute of Energy, University of Dhaka. The user friendly interface and the dialogue box of this simulation software were accomplished by the assitance of Mr. Md. Masum Billah, Mr. Sujoy Dey and Sazzatul Yeakin, SoftCare IT.</p>\r\n\r\n<p>For starting <a href=\"https://mscs-bcsir.com/\">click here</a></p>\r\n', '1599854636-5162-Career_opportunity_December_2019_Final-1.pdf'),
(3, 'Version 2', '2020-09-30', '<p><a href=\"https://mscs-bcsir.com/#\">About MSCS-</a>2d</p>\r\n\r\n<p>One dimensional multijunction solar cell simulator: Version-1 (MSCS-1D: V-1) is developed by Advanced Photovoltaic Lab, Bangladesh Council of Scientific and Industrial Research (BCSIR).This work is financially supported by the Ministry of Science and Technology, the People&rsquo;s Republic of Bangladesh under Special Allocation Project. Mr. Abu Kowsar is the principal investigator of this project, Dr. Syed Farid Uddin Farhad and Khaledun Nahar Babi are the co-investigator of this project. Syed Nazmus Sakib, Lecturer, Department of ETE, Daffodil International University contributed here as a M.S. thesis student of Institute of Energy, University of Dhaka. The user friendly interface and the dialogue box of this simulation software were accomplished by the assitance of Mr. Md. Masum Billah, Mr. Sujoy Dey and Sazzatul Yeakin, SoftCare IT.</p>\r\n', '1599855823-5299-Cover Letter NITER.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `overview`
--
ALTER TABLE `overview`
  ADD PRIMARY KEY (`overview_id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`publication_id`);

--
-- Indexes for table `scientists`
--
ALTER TABLE `scientists`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `simulator`
--
ALTER TABLE `simulator`
  ADD PRIMARY KEY (`simulator_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `overview`
--
ALTER TABLE `overview`
  MODIFY `overview_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `publication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scientists`
--
ALTER TABLE `scientists`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `simulator`
--
ALTER TABLE `simulator`
  MODIFY `simulator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
