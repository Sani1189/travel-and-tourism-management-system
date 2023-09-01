-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 03:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '2023-08-30 03:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bookings`
--

CREATE TABLE `hotel_bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `num_guests` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_bookings`
--

INSERT INTO `hotel_bookings` (`id`, `name`, `email`, `check_in`, `check_out`, `num_guests`) VALUES
(1, 'hamimm', 'zahid.imx@gmail.com', '2023-08-22', '2023-09-01', 5),
(2, 'Farhan Jaman Hamim', 'zahid.imx@gmail.com', '2023-08-17', '2023-08-31', 3),
(3, 'hamim', 'zahid.imx@gmail.com', '2023-08-10', '2023-08-31', 5),
(4, 'sani', 'hello@gmail.com', '2023-08-10', '2023-08-22', 5),
(5, 'Farhan Jaman Hamim', 'zahid.imx@gmail.com', '2023-09-08', '2023-08-16', 6),
(6, 'hamim Islam', 'g@gmail.com', '2023-08-08', '2023-08-18', 5),
(7, 'hamim', 'zahid.imx@gmail.com', '2023-08-24', '2023-08-10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `addsOn` text DEFAULT NULL,
  `pkgtype` varchar(25) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `senior` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`, `addsOn`, `pkgtype`, `child`, `adult`, `senior`, `total`) VALUES
(7, 22, 'zahid.imx@gmail.com', '2023-08-31', '2023-08-31 02:31:24', 0, NULL, NULL, 'photographer,transport', 'couple', 0, 2, 0, 6000),
(8, 26, 'zahid.imx@gmail.com', '2023-08-16', '2023-08-31 02:37:25', 0, NULL, NULL, 'spa', 'single', 0, 1, 0, 3700),
(9, 23, 'zahid.imx@gmail.com', '2023-08-16', '2023-08-31 02:38:11', 0, NULL, NULL, '', 'group', 0, 2, 0, 3200),
(10, 16, 'zahid.imx@gmail.com', '2023-08-30', '2023-08-31 02:38:59', 2, 'u', '2023-09-01 09:20:04', 'photographer', 'group', 0, 4, 1, 26100),
(11, 19, 'zahid.imx@gmail.com', '2023-08-28', '2023-08-31 02:39:46', 2, 'a', '2023-09-01 10:01:26', 'guide,transport', 'family', 2, 2, 3, 13310),
(12, 21, 'zahid.imx@gmail.com', '2023-08-07', '2023-08-31 02:40:12', 0, NULL, NULL, 'transport,spa', 'family', 1, 2, 2, 13500),
(13, 17, 'zahid.imx@gmail.com', '2023-08-08', '2023-08-31 02:40:37', 0, NULL, NULL, '', 'single', 0, 1, 0, 1200),
(14, 21, 'zahid.imx@gmail.com', '2023-08-07', '2023-08-31 02:41:09', 0, NULL, NULL, 'transport', 'family', 5, 0, 0, 10300),
(15, 18, 'zahid.imx@gmail.com', '2023-09-05', '2023-08-31 02:42:01', 0, NULL, NULL, 'guide', 'group', 0, 2, 1, 4850),
(16, 16, 'zahid.imx@gmail.com', '2023-09-14', '2023-09-01 08:54:18', 2, 'u', '2023-09-01 09:20:08', 'guide', 'single', 0, 1, 0, 5050),
(17, 16, 'zahid.imx@gmail.com', '', '2023-09-01 08:54:21', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(18, 16, 'zahid.imx@gmail.com', '', '2023-09-01 08:59:51', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(19, 16, 'zahid.imx@gmail.com', '', '2023-09-01 08:59:54', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(20, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:00:09', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(21, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:01:31', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(22, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:01:38', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(23, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:02:32', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(24, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:04:16', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(25, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:05:08', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(26, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:05:33', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(27, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:16:00', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(28, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:18:11', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(29, 16, 'zahid.imx@gmail.com', '', '2023-09-01 09:18:29', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(30, 26, 'zahid.imx@gmail.com', '', '2023-09-01 09:20:37', 1, NULL, '2023-09-01 10:01:32', 'spa', 'family', 1, 2, 1, 14200),
(31, 16, 'zahid.imx@gmail.com', '2023-08-28', '2023-09-01 09:23:45', 1, NULL, '2023-09-01 10:01:29', 'spa', 'family', 1, 2, 1, 20200),
(32, 16, 'zahid.imx@gmail.com', '2023-09-03', '2023-09-01 10:24:00', 0, NULL, NULL, 'transport', 'family', 0, 4, 0, 20300),
(33, 16, 'zahid.imx@gmail.com', '', '2023-09-01 12:52:37', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(34, 16, 'zahid.imx@gmail.com', '', '2023-09-01 12:55:16', 0, NULL, NULL, '', 'single', 0, 1, 0, 5000),
(35, 19, 'zahid.imx@gmail.com', '', '2023-09-01 12:55:40', 0, NULL, NULL, '', 'single', 0, 1, 0, 1800),
(36, 22, 'zahid.imx@gmail.com', '2023-09-12', '2023-09-01 12:56:00', 0, NULL, NULL, 'photographer,transport,spa', 'family', 2, 4, 2, 23000);

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(9, 'zahid', 'zahid.imx@gmail.com', '0175430901', 'Discount', 'Can I get any discount on Love Bird package?', '2023-08-31 02:55:53', 1),
(10, 'Sani', 'saniul@gmail.com', '0175430956', 'Package', 'Do you have any package for upcomming cricket WC?', '2023-08-31 02:56:49', NULL),
(11, 'zahid', 'zahid.imx@gmail.com', '1754309016', 'This is issue', 'this is issue', '2023-08-31 16:51:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(17, 'zahid.imx@gmail.com', 'Booking Issues', NULL, '2023-08-31 02:33:54', 'Sorry for the inconvenience .', '2023-08-31 02:46:37'),
(18, 'zahid.imx@gmail.com', 'Refund', NULL, '2023-08-31 02:34:12', NULL, NULL),
(19, 'zahid.imx@gmail.com', 'Booking Issues', NULL, '2023-08-31 02:35:40', NULL, NULL),
(20, 'zahid.imx@gmail.com', 'Other', NULL, '2023-08-31 02:36:44', NULL, NULL),
(21, NULL, NULL, NULL, '2023-08-31 02:58:47', NULL, NULL),
(22, 'zahid.imx@gmail.com', 'Refund', NULL, '2023-09-01 09:32:14', NULL, NULL),
(23, 'zahid.imx@gmail.com', 'Booking Issues', NULL, '2023-09-01 09:37:51', NULL, NULL),
(24, 'zahid.imx@gmail.com', 'Cancellation', NULL, '2023-09-01 09:38:04', NULL, NULL),
(25, 'zahid.imx@gmail.com', 'Booking Issues', NULL, '2023-09-01 10:24:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '																														<p align=\"justify\"><font size=\"2\"><strong><font color=\"#990000\">(1) ACCEPTANCE OF TERMS</font><br><br></strong>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <a href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</a>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<p align=\"justify\"><font size=\"2\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </font><a href=\"http://in.docs.yahoo.com/info/terms/\"><font size=\"2\">http://in.docs.yahoo.com/info/terms/</font></a><font size=\"2\">. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<p align=\"justify\"><font size=\"2\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </font><a href=\"http://in.docs.yahoo.com/info/terms/\"><font size=\"2\">http://in.docs.yahoo.com/info/terms/</font></a><font size=\"2\">. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n										\r\n										\r\n										'),
(2, 'privacy', '																				<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span><div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: bold;\">Data Security:</span> We employ security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, no data transmission over the internet can be guaranteed as completely secure.</span><br></div><div><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: bold;\">Your Choices:</span>&nbsp;You have the right to access, update, and correct your personal information. You may also opt-out of receiving marketing communications from us at any time.</span><br></div></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: bold;\">Cookies and Tracking Technologies:</span> We use cookies and similar technologies to enhance your browsing experience and collect data about your usage of our platform. You can control cookies preferences through your browser settings. Changes to Privacy Policy We reserve the right to update this Privacy Policy from time to time. We will notify you of significant changes by posting a prominent notice on our website.&nbsp;</span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: bold;\">Contact Us:</span> If you have any questions or concerns about our Privacy Policy, please contact us at [Contact Email or Phone Number]. Please note that this is a generic template and should be customized to reflect the specific practices and policies of your travel and tourism management system. You may want to consult with legal professionals to ensure that your privacy policy complies with relevant laws and regulations.</span><br></div>'),
(3, 'aboutus', '																				<div><span style=\"color: rgb(0, 0, 0); font-family: Georgia; font-size: 15px; text-align: justify; font-weight: bold;\">Welcome to Tourism Management System!!!</span></div><span style=\"font-family: &quot;courier new&quot;;\"><span style=\"color: rgb(0, 0, 0); font-size: 15px; text-align: justify;\">Since then, our courteous and committed team members have always ensured a pleasant and enjoyable tour for the clients. This arduous effort has enabled Shreya Tour &amp; Travels to be recognized as a dependable Travel Solutions provider with three offices Delhi.</span><span style=\"color: rgb(80, 80, 80); font-size: 13px;\">&nbsp;We have got packages to suit the discerning traveler\'s budget and savor. Book your dream vacation online. Supported quality and proposals of our travel consultants, we have a tendency to welcome you to decide on from holidays packages and customize them according to your plan.</span></span>\r\n										<div><span style=\"font-family: &quot;courier new&quot;;\"><span style=\"color: rgb(80, 80, 80); font-size: 13px;\"><br></span></span></div><div><p class=\"MsoNormal\"><b><span style=\"line-height: 107%; font-size: x-large;\">About Us<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family: &quot;times new roman&quot;; font-size: large;\">At Travel and tourism management system, we are passionate\r\nabout creating unforgettable travel experiences that inspire, enrich, and\r\nconnect people to the world\'s most captivating destinations. With a deep\r\nappreciation for the transformative power of travel, we have curated a range of\r\nmeticulously designed travel packages and services to cater to the diverse\r\ninterests and preferences of our valued travelers.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family: &quot;times new roman&quot;; font-size: large;\">Founded on the belief that every journey is an opportunity\r\nfor discovery and growth, our mission is to offer seamless and personalized\r\ntravel solutions that cater to the wanderlust of adventure seekers, cultural\r\nenthusiasts, and leisure travelers alike. With years of expertise in the travel\r\nindustry, we have forged strong partnerships with top-tier hotels, airlines, and\r\nlocal guides to ensure that every aspect of your journey is infused with\r\nauthenticity and excellence.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family: &quot;times new roman&quot;; font-size: large;\">Our dedicated team of travel experts is committed to\r\nproviding you with exceptional customer service, helping you craft journeys\r\nthat reflect your unique style and desires. Whether you\'re seeking an immersive\r\ncultural experience, an adrenaline-pumping adventure, or a serene escape to\r\nnature\'s beauty, we have meticulously designed travel itineraries that\r\nencompass the essence of your dream getaway.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family: &quot;times new roman&quot;; font-size: large;\">Beyond crafting exceptional travel experiences, we are\r\ndevoted to fostering sustainable and responsible tourism practices. We believe\r\nin leaving a positive impact on the destinations we visit, supporting local\r\ncommunities, and preserving the natural beauty that makes each place special.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family: &quot;times new roman&quot;; font-size: large;\">Join us on a journey that goes beyond the ordinary and opens\r\nup a world of boundless exploration. With every destination, we strive to\r\ncreate memories that linger long after the journey is over. Welcome to [Your\r\nCompany Name], where your travel dreams come to life.<o:p></o:p></span></p>\r\n\r\n<div class=\"MsoNormal\" align=\"center\" style=\"text-align:center\">\r\n\r\n<hr size=\"0\" width=\"100%\" noshade=\"\" style=\"color:#D1D5DB\" align=\"center\">\r\n\r\n</div>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-size: large;\"><span style=\"font-family: &quot;times new roman&quot;;\">Feel free to customize this passage to align with your\r\ncompany\'s values, goals, and unique offerings</span>.</span><o:p></o:p></p></div>\r\n										'),
(11, 'contact', '<p class=\"MsoNormal\">Contact Us<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Welcome to our Contact Us page! We\'re delighted that you\'re\r\ninterested in reaching out to us. Whether you have inquiries about our travel\r\nservices, need assistance with bookings, or just want to share your thoughts,\r\nwe\'re here to listen and help.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">Our dedicated team at [Your Company Name] is committed to\r\nproviding you with top-notch customer support. We value your feedback and are\r\neager to assist you in making your travel plans a reality.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">How to Get in Touch<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">There are various ways you can contact us:<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">1. Phone:<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Feel free to give us a call at [Your Contact Number]. Our\r\nfriendly customer support agents are available during our operating hours to\r\naddress your questions and provide guidance.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">2. Email:<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">You can send us an email at [Your Contact Email]. Whether\r\nit\'s a question about a specific destination, a request for customized travel\r\npackages, or anything else, we\'re here to respond promptly.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">3. Visit Our Office:<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">If you\'re in the area, we welcome you to stop by our office\r\nat [Your Company Address]. Our team will be delighted to meet you in person and\r\ndiscuss your travel preferences.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">4. Online Inquiry Form:<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">For your convenience, we\'ve set up an online inquiry form\r\nright here on our website. Simply fill in your details and your message, and\r\nwe\'ll ensure that the right person gets back to you with the information you\r\nneed.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">5. Social Media:<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Stay connected with us on our social media platforms! Follow\r\nus on Facebook, Twitter, Instagram, and more [@YourSocialHandles]. We regularly\r\nshare travel tips, destination inspiration, and updates about our services.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">At [Your Company Name], we\'re more than just a travel and\r\ntourism management system – we\'re your partners in creating exceptional travel\r\nexperiences. Your satisfaction is our priority, and we\'re here to assist you\r\nevery step of the way. Contact us today and let\'s start planning your next\r\nadventure!<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">---<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Feel free to personalize and modify the content to match\r\nyour brand\'s voice and specific contact details. This passage-style content\r\naims to engage and reassure visitors that you\'re available to assist them with\r\ntheir travel needs.<o:p></o:p></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` longtext DEFAULT NULL,
  `PackageInfo` longtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageInfo`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(16, 'Refreshment', 'Exclusive', 'Russia', 5000, 'Free Drop', '<p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; line-height: 1.5rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"></p><span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 1rem;\"></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem;\">A copy of the <span style=\"font-weight: bold;\">Passport</span>.</p><p></p></span>', 'aron-visuals-LSFuPFE9vKE-unsplash.jpg', '2023-08-29 17:09:32', '2023-08-31 01:55:54'),
(17, 'Coastal Retreat', 'Beach Vacation', 'California', 1200, 'Oceanfront Resort', '<p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 1rem;\"></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'images (2).jpeg', '2023-08-31 02:09:19', NULL),
(18, 'Mountain Adventure', 'Outdoor Expedition', 'Colorado', 1500, 'Alpine Lodge', '<p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 1rem;\"></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', '31189.jpg', '2023-08-31 02:11:05', NULL),
(19, 'Cultural Discovery', 'Heritage Tour', 'Japan', 1800, 'Traditional Ryokan', '<p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 1rem;\"></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'images (3).jpeg', '2023-08-31 02:12:40', NULL),
(20, 'Urban Escapade', 'City Getaway', 'New York City, USA', 1000, 'Luxury Hotel', '<p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 1rem;\"></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'united-states-prolific-interactive-city-scape-city-view.jpg', '2023-08-31 02:14:52', NULL),
(21, 'Safari Expedition', 'Wildlife Adventure', 'Kenya', 2500, 'Safari Lodge', '<p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 1rem;\"></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'Amboseli-National-Park.jpg', '2023-08-31 02:16:54', NULL),
(22, 'Romantic Getaway', 'Love Bird', 'Santorini, Greece', 2800, 'Cliffside Villa', '<p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 1rem;\"></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'image_processing20211220-4-178m415.jpeg', '2023-08-31 02:19:22', NULL),
(23, 'Wellness Retreat', 'Health and Relaxation', 'Bali, Indonesia', 1600, 'Eco-Resort', '<p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); font-size: 14px; letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; line-height: 22px; color: rgb(93, 105, 116); font-size: 1rem;\"></p><p style=\"margin-bottom: 1rem; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'c4fedab1-4041-4db5-9245-97439472cf2c.jpg', '2023-08-31 02:21:08', NULL),
(24, 'Historical Journey', 'Cultural Tour', 'Rome, Italy', 2200, 'Boutique Hotel', '<p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; font-size: 1rem; line-height: 22px; color: rgb(93, 105, 116);\"></p><p style=\"margin-bottom: 1rem; font-size: 16px; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'wide_fullhd_rome-italy-panorama.jpg', '2023-08-31 02:24:11', NULL);
INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageInfo`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(25, 'Alpine Skiing', 'Winter Sports', 'Chamonix, France', 1900, 'Chalet Rental', '<p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; font-size: 1rem; line-height: 22px; color: rgb(93, 105, 116);\"></p><p style=\"margin-bottom: 1rem; font-size: 16px; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'download.jpeg', '2023-08-31 02:25:28', NULL),
(26, 'Tropical Paradise', 'Island Retreat', 'French Polynesia', 3500, 'Overwater Bungalow', '<p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\">This tour is designed for anyone who is looking to go a little more off the beaten path. Camping is usually more affordable than hotels, keeps you connected to nature during your entire stay, and can give you access to beaches so uncrowded you may even have the place to yourself. It also provides the chance to see thousands of stars over the ocean, to really become familiar with just how different a coastal landscape can be outside of the tourist towns, and, most importantly, to create lasting memories with family and friends.</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Available Activities:</span></p><ul style=\"margin-bottom: 1rem; color: rgb(93, 105, 116); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; font-size: 14px; letter-spacing: 0.14px;\"><li style=\"text-align: justify;\">Human Futsal</li><li style=\"text-align: justify;\">Carrom Game</li><li style=\"text-align: justify;\">Football</li><li style=\"text-align: justify;\">Hammocks</li><li style=\"text-align: justify;\">Musical Instruments like guitar</li><li style=\"text-align: justify;\">Food</li><li style=\"text-align: justify;\">If there is no rain, we will set up a campfire.</li><li style=\"text-align: justify;\">In case of high tide, travelers can go for boat rides.</li></ul><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\"><u>Food Menu</u></span></p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Lunch&nbsp;</span>1:30 PM to 2:30 PM<span style=\"font-weight: 600;\">:</span></p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\">Chicken Curry (1 piece), Fish Curry (1 Piece), Alu Bhorta, Shutki Bhorta, Plain Rice and Water</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Evening Snacks&nbsp;</span>4:30 PM to 5:30 PM:</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\"><span style=\"font-weight: 600;\">Dinner 8</span>:30 PM to 9:30 PM</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px;\">Chicken Curry (2 pieces), Khichuri, Egg Fry, Salad</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\"><span style=\"font-weight: 600;\">Breakfast&nbsp;</span>9:00 AM to 9:30 AM</p><p style=\"margin-bottom: 1rem; font-size: 14px; font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; line-height: 1.5rem; color: rgb(93, 105, 116); letter-spacing: 0.14px; text-align: justify;\">Parota, Egg Omelette, Alu Bhaji, Daal and water.</p>', '<span style=\"font-weight: bold;\">Remember!!</span><br><ul><li>Always be respectful of the rules and guidelines of the tourist spots.</li><li>Do not litter, use a disposable bag as a portable trash bin.</li><li>Unmarried couples are not allowed to stay inside the campsite.</li><li>Couple must show a valid proof of their marriage.</li><li>If any couple fails to show the proof of their marriage then they will not be allowed to check-in.</li><li>Consumption of any sort of drugs is strictly prohibited.</li><li>This is a sports and activity center. Luxurious amenities are not available here.</li><li>There is not room service/waiter. Self service policy is maintained in the case of food and dining.</li><li><span style=\"font-weight: bold;\">No medication will be provided</span></li></ul><p></p><span data-v-d27cb9aa=\"\" style=\"font-size: 14px; line-height: 22px; color: rgb(28, 60, 107); font-family: &quot;Avenir Next&quot;, Helvetica, Arial, serif; letter-spacing: 0.14px;\"><span data-v-d27cb9aa=\"\" style=\"font-weight: 600;\">Requirements:</span><p data-v-d27cb9aa=\"\" style=\"margin-bottom: 0px; font-size: 1rem; line-height: 22px; color: rgb(93, 105, 116);\"></p><p style=\"margin-bottom: 1rem; font-size: 16px; line-height: 1.5rem;\">A copy of the&nbsp;<span style=\"font-weight: bold;\">Passport</span>.</p></span>', 'shutterstock_648072241.jpg', '2023-08-31 02:27:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(12, 'zahidul Islam', '0175430901', 'zahid.imx@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-08-29 13:30:11', NULL),
(21, 'Saniul Islam Sani', '1835025522', 'saniul@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-08-31 02:58:47', NULL),
(22, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', '2023-09-01 09:32:14', NULL),
(23, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', '2023-09-01 09:37:51', NULL),
(24, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', '2023-09-01 09:38:04', NULL),
(25, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', '2023-09-01 10:24:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_bookings`
--

CREATE TABLE `ticket_bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `transportation` varchar(20) NOT NULL,
  `ticket_system` varchar(20) NOT NULL,
  `seating` varchar(50) DEFAULT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_bookings`
--

INSERT INTO `ticket_bookings` (`id`, `name`, `email`, `quantity`, `transportation`, `ticket_system`, `seating`, `booking_date`) VALUES
(1, 'hamim', 'g@gmail.com', 5, 'train', 'business', 'b1', '2023-08-27 06:21:49'),
(3, 'hamim Islam', 'zahid.imx@gmail.com', 54, 'train', 'business', '', '2023-08-28 06:28:47'),
(4, 'sani', 'zahid@gmail.com', 2, 'airplane', 'first-class', 'B6', '2023-08-28 14:34:43'),
(5, 'hamim Islam', 'zahid.imx@gmail.com', 6, 'train', 'business', '5h', '2023-08-30 06:47:16'),
(6, 'hamim', 'zahid.imx@gmail.com', 5, 'train', 'business', '6B', '2023-08-30 10:02:21'),
(7, 'hamim', 'zahid.imx@gmail.com', 5, 'train', 'business', '5', '2023-08-30 19:44:34'),
(8, 'Farhan Jaman Hamim', 'zahid.imx@gmail.com', 4, 'train', 'business', '6B', '2023-08-30 19:45:25'),
(9, 'hamim', 'zahid.imx@gmail.com', 4, 'train', 'first-class', 'b1', '2023-08-30 20:15:32'),
(10, 'hamim', 'zahid.imx@gmail.com', 4, 'train', 'first-class', 'b1', '2023-08-30 20:16:26'),
(11, 'hamim', 'zahid.imx@gmail.com', 3, 'train', 'first-class', '6B', '2023-08-30 20:18:24'),
(13, 'hamim', 'zahid.imx@gmail.com', 3, 'train', 'first-class', '34', '2023-08-30 20:24:12'),
(14, 'hamim', 'g@gmail.com', 6, 'bus', 'first-class', 'HD', '2023-08-31 17:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

CREATE TABLE `tour_guide` (
  `guide_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `experience` int(11) DEFAULT NULL,
  `hourly_rent` decimal(10,2) DEFAULT NULL,
  `spoken_skill` varchar(50) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_guide`
--

INSERT INTO `tour_guide` (`guide_id`, `gender`, `experience`, `hourly_rent`, `spoken_skill`, `destination`) VALUES
(1, 'male', 1, 10.00, 'bangla', 'dhaka'),
(2, 'female', 2, 10.00, 'english, bangla', 'dhaka'),
(3, 'female', 3, 5.00, 'english, bangla', 'dhaka'),
(4, 'female', 2, 5.00, 'english', 'Bogra'),
(5, 'female', 2, 5.00, 'english, bangla, hindi', 'Chattogram'),
(6, 'male', 1, 10.00, 'hindi', 'Chattogram'),
(7, 'female', 3, 10.00, 'bangla', 'Bogra'),
(8, 'male', 2, 15.00, 'bangla, hindi', 'Barguna'),
(9, 'female', 3, 15.00, 'bangla, hindi', 'Barguna'),
(10, 'female', 2, 15.00, 'bangla', 'Sylhet'),
(11, 'female', 3, 10.00, 'english', 'Bhola'),
(12, 'female', 2, 15.00, 'bangla', 'Barguna'),
(13, 'female', 2, 10.00, 'bangla', 'Barguna'),
(14, 'female', 2, 15.00, 'hindi', 'Dhaka'),
(15, 'female', 2, 10.00, 'english, bangla', 'Barisal'),
(16, 'female', 3, 15.00, 'bangla', 'Sylhet'),
(17, 'female', 2, 15.00, 'english', 'Barisal'),
(18, 'female', 2, 10.00, 'english', 'Chattogram'),
(19, 'male', 2, 10.00, 'english, bangla', 'Dhaka'),
(20, 'male', 1, 15.00, 'bangla', 'Bagerhat'),
(21, 'male', 1, 10.00, 'english', 'Bagerhat'),
(22, 'female', 2, 15.00, 'bangla', 'Barguna'),
(23, 'male', 2, 10.00, 'english, hindi', 'Dhaka'),
(24, 'female', 2, 15.00, 'english, bangla', 'Barisal'),
(25, 'female', 2, 5.00, 'english, bangla', 'Dhaka'),
(26, 'male', 2, 15.00, 'bangla, hindi', 'Dhaka'),
(27, 'female', 3, 15.00, 'english, bangla', 'Bhola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`),
  ADD KEY `tblbooking_fk1` (`PackageId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- Indexes for table `ticket_bookings`
--
ALTER TABLE `ticket_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD PRIMARY KEY (`guide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ticket_bookings`
--
ALTER TABLE `ticket_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tour_guide`
--
ALTER TABLE `tour_guide`
  MODIFY `guide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD CONSTRAINT `tblbooking_fk1` FOREIGN KEY (`PackageId`) REFERENCES `tbltourpackages` (`PackageId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
