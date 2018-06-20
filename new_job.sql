-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2017 at 03:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Accounting/Finanace'),
(2, 'Garments/Textile'),
(7, 'Design/Creative'),
(8, 'IT/Telecommunication'),
(9, 'Marketing/Sales'),
(10, 'Media/Advertisement'),
(11, 'Medical/Pharma'),
(12, 'All');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryId` int(11) NOT NULL,
  `countryName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryId`, `countryName`) VALUES
(1, 'Bangladesh'),
(2, 'UK'),
(3, 'USA'),
(4, 'UAE'),
(5, 'India'),
(6, 'Saudi Arab');

-- --------------------------------------------------------

--
-- Table structure for table `jobApplication`
--

CREATE TABLE `jobApplication` (
  `applicationId` int(11) NOT NULL,
  `applicantName` text NOT NULL,
  `applicantEmail` text NOT NULL,
  `appliedJobTitle` text NOT NULL,
  `appliedJobCompany` text NOT NULL,
  `appliedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobApplication`
--

INSERT INTO `jobApplication` (`applicationId`, `applicantName`, `applicantEmail`, `appliedJobTitle`, `appliedJobCompany`, `appliedDate`, `skills`) VALUES
(13, 'XYZ', 'xyz@gmail.com', 'Senior Copywriter/Copy Supervisor(English)', 'Advertising Agency', '2017-11-27 14:19:17', 'Computer proficient, Extremely organized, Quick learner'),
(14, 'New', 'new@gmail.com', 'Transport Officer', 'A Well Reputed 100% Export Oriented Garments Industry', '2017-11-27 14:19:43', 'Excellent analytical skills, Technology, Engineering, Leadership Management'),
(15, 'abc', 'abc@gmail.com', 'Asst. Manager, Pre-Sales (Technology Sales Unit)', 'Ezzy Automations', '2017-11-27 14:20:53', 'Outstanding interpersonal skills, Quick learner, Strong verbal communication, Issue resolution');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobId` int(11) NOT NULL,
  `jobTitle` text NOT NULL,
  `jobDescription` text NOT NULL,
  `jobCategory` text NOT NULL,
  `jobLocation` text NOT NULL,
  `jobCompany` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `jobTitle`, `jobDescription`, `jobCategory`, `jobLocation`, `jobCompany`) VALUES
(1, 'Senior Copywriter/Copy Supervisor(English)', '\r\n    The job is open for a Senior Copywriter / Copy Supervisor who is experienced in English, should have a solid advertising agency background. Should be able to develop concepts from brief, write TVCs, RDCs, Jingles and catchy headlines and relevant copy. Should be able to think out-of-the-box ideas to challenge the visual team.\r\n    Should believe in cutting edge advertising ideals and work as a good team member.', 'Media/Advertisement', 'USA', 'Advertising Agency'),
(2, 'Programmer', '    Banking Software Development.\r\n    Work in a Team\r\n    Development and Enhancement of NET Applications\r\n    Systems Requirements Analysis\r\n    Conduct Units Testing and UAT\r\n    System Design and Development\r\n    Preparation of Design Documents\r\n    Writing Complex Store procedure and PL SQL\r\n    ASP.Net & SQL server or Oracle database', 'IT/Telecommunication', 'Bangladesh', 'Flora Telecom Limited'),
(3, 'Programmer', '\r\n    Banking Software Development.\r\n    Work in a Team\r\n    Development and Enhancement of NET Applications\r\n    Systems Requirements Analysis\r\n    Conduct Units Testing and UAT\r\n    System Design and Development\r\n    Preparation of Design Documents\r\n    Writing Complex Store procedure and PL SQL\r\n    ASP.Net & SQL server or Oracle database\r\n', 'IT/Telecommunication', 'Bangladesh', 'Flora Telecom Limited'),
(4, 'Transport Officer', '\r\n    Making scheduled checks on vehicle and spare parts\r\n    Writing of vehicle damage repair estimates\r\n    Overhauling and replacing parts according to schedule.\r\n    Repairing broken or worn mechanical components\r\n    Maintaining repair and service records\r\n    Installing equipment, components and systems\r\n    Testing vehicles both before and after repair', 'Garments/Textile', 'UAE', 'A Well Reputed 100% Export Oriented Garments Industry'),
(5, ' 3D Graphics Designer', '\r\n    Create 3D photo realistic renderings of both exterior & interior and Digital Printing environments.\r\n    Multi-task and work on various projects at any given time, sometimes simultaneously.\r\n    Doing post production in Photoshop/Illustrator, 3D Max, Autocad, Maya etc.\r\n    Should be independent for creative the designs.\r\n', 'Media/Advertisement', 'India', 'Super Sign Limited'),
(6, 'Asst. Manager, Pre-Sales (Technology Sales Unit)', '\r\n    To Lead formal client/internal status meetings as well as informal day to day direction with project team throughout the implementation process including project initiation, requirements, development, testing, training, delivery, and transition to ongoing operations.\r\n    Residential and Commercial electrical wiring and load calculation.\r\n    Design and working with AutoCAD and Electrical CAD.\r\n    Capability of exploring new technology using only manual and online resources.\r\n    Candidates should have proven delivery experience with all phases of the systems development/implementation life cycle for the BMS industry, specifically in sales force management systems or other field based technology systems.\r\n    Able to recognize the potentials of a customer & generating sales volume from potential clients.\r\n    Strong strategic thinking and negotiation skills.\r\n    Develop creative sales technique and tactics to meet business goals.\r\n    Build positive working relationship with existing clients for repeat business.\r\n    Identify and contact potential customers for new business opportunities.\r\n    Able to independently design, configure and operate building control systems.\r\n    Able to tender and manage BMS, Home automation systems and Security and Sound system.\r\n    Able to provide detailed information and submittals to communicate design and operation to customers, consultants, companies\' and field installation team.\r\n    Able to act independently and coordinate with others to meet the intent of the project requirements.\r\n    Able to complete and manage the development of BMS software programs, commissioning and troubleshooting to ensure proper operations of the building control system.\r\n    Keeps management and customer informed of job progress and issues.\r\n    A good understanding of the programming and logic development process.\r\n    Keen interest for latest technology and dedication for research and development.\r\n    The applicants should have experience in Sales/Marketing.\r\n', 'Marketing/Sales', 'USA', 'Ezzy Automations'),
(7, 'Unani Consultant (Hakim) ', '\r\nJob Description / Responsibility\r\n\r\n    As stated by the department \r\n\r\nJob Nature\r\n\r\nFull-time\r\nEducational Requirements\r\n\r\n    Bachelor of Unani Medicine & Surgery (BUMS) \r\n\r\nExperience Requirements\r\n\r\n    3 to 5 year(s)\r\n    The applicants should have experience in the following area(s):\r\n    Medical Research, Pharmacist, Quality Controller /Assurance\r\n    The applicants should have experience in the following business area(s):\r\n    Pharmaceuticals\r\n\r\n', 'Medical/Pharma', 'India', 'Gramo Pharmaceuticals Ltd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` text NOT NULL,
  `userEmail` text NOT NULL,
  `userPass` text NOT NULL,
  `userSkills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userEmail`, `userPass`, `userSkills`) VALUES
(5, 'New', 'new@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Excellent analytical skills, Technology, Engineering, Leadership Management'),
(6, 'XYZ', 'xyz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Computer proficient, Extremely organized, Quick learner'),
(7, 'abc', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Outstanding interpersonal skills, Quick learner, Strong verbal communication, Issue resolution');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryId`);

--
-- Indexes for table `jobApplication`
--
ALTER TABLE `jobApplication`
  ADD PRIMARY KEY (`applicationId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobApplication`
--
ALTER TABLE `jobApplication`
  MODIFY `applicationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
