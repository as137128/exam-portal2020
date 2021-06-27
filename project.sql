-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 09:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(5) NOT NULL,
  `category` varchar(100) NOT NULL,
  `exam_time_in_minutes` varchar(10) NOT NULL,
  `exam_questions` varchar(5) NOT NULL,
  `hide_show` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `exam_time_in_minutes`, `exam_questions`, `hide_show`) VALUES
(2, 'paper1', '40', '20', 1),
(3, 'learn', '50', '30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `total_question` varchar(10) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `ques_attempt` varchar(100) NOT NULL,
  `not_attempt` varchar(100) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`id`, `username`, `exam_type`, `total_question`, `correct_answer`, `wrong_answer`, `ques_attempt`, `not_attempt`, `exam_time`) VALUES
(55, '', 'paper1', '45', '14', '31', '', '', '2020-07-02'),
(56, '', 'paper1', '45', '2', '43', '', '', '2020-07-02'),
(57, '', 'paper1', '45', '2', '43', '', '', '2020-07-02'),
(58, '', 'paper1', '45', '8', '37', '', '', '2020-07-02'),
(59, '', 'paper1', '45', '0', '45', '', '', '2020-07-02'),
(60, '', 'paper1', '45', '7', '38', '', '', '2020-07-02'),
(61, '', 'paper1', '45', '0', '45', '', '', '2020-07-02'),
(62, '17RU2020', 'paper1', '45', '2', '43', '', '', '2020-07-02'),
(63, '17RU2020', 'paper1', '45', '4', '41', '', '', '2020-07-02'),
(64, '17RU2020', 'paper1', '45', '7', '38', '', '', '2020-07-02'),
(65, '17RU2020', 'paper1', '45', '0', '45', '', '', '2020-07-02'),
(66, '17RU2020', 'paper1', '45', '10', '35', '0', '', '2020-07-02'),
(67, '17RU2020', 'paper1', '45', '2', '0', '0', '', '2020-07-02'),
(68, '17RU2020', 'paper1', '45', '4', '0', '0', '', '2020-07-02'),
(69, '17RU2020', 'paper1', '45', '4', '41', '8', '', '2020-07-02'),
(70, '17RU2020', 'paper1', '45', '5', '5', '10', '35', '2020-07-02'),
(71, '17RU2020', 'paper1', '45', '0', '1', '1', '44', '2020-07-02'),
(72, '17RU2020', 'paper1', '45', '0', '0', '0', '45', '2020-07-03'),
(73, '17RU2020', 'paper1', '45', '0', '0', '0', '45', '2020-07-03'),
(74, '17RU2020', 'paper1', '46', '0', '1', '1', '45', '2020-07-03'),
(75, '17RU20201', 'paper1', '46', '4', '4', '8', '38', '2020-07-03'),
(76, '17RU2020', 'paper1', '46', '0', '1', '1', '45', '2020-07-03'),
(77, '17RU2020', 'paper1', '46', '0', '1', '1', '45', '2020-07-03'),
(78, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-03'),
(79, '17RU2020', '', '0', '0', '0', '0', '0', '2020-07-03'),
(80, '17RU2020', '', '0', '0', '0', '0', '0', '2020-07-03'),
(81, '17RU2020', '', '0', '0', '0', '0', '0', '2020-07-03'),
(82, '17RU2020', '', '0', '0', '0', '0', '0', '2020-07-03'),
(83, '17RU2020', 'I am ready to begin..', '0', '0', '0', '0', '0', '2020-07-03'),
(84, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-03'),
(85, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-03'),
(86, '17RU2020', 'iuk', '0', '0', '0', '0', '0', '2020-07-04'),
(87, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-04'),
(88, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-04'),
(89, '17RU2020', 'learn', '0', '0', '0', '0', '0', '2020-07-04'),
(90, '17RU2020', 'paper1', '46', '0', '1', '1', '45', '2020-07-04'),
(91, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(92, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(93, '17RU2020', 'paper1', '46', '4', '1', '5', '41', '2020-07-05'),
(94, '17RU2020', 'paper1', '46', '4', '1', '5', '41', '2020-07-05'),
(95, '17RU2020', 'paper1', '46', '3', '0', '3', '43', '2020-07-05'),
(96, '17RU2020', 'paper1', '46', '2', '0', '2', '44', '2020-07-05'),
(97, '17RU2020', 'paper1', '46', '2', '0', '2', '44', '2020-07-05'),
(98, '17RU2020', 'paper1', '46', '5', '0', '5', '41', '2020-07-05'),
(99, '17RU2020', 'paper1', '46', '3', '0', '3', '43', '2020-07-05'),
(100, '17RU2020', 'paper1', '46', '0', '1', '1', '45', '2020-07-05'),
(101, '17RU2020', 'paper1', '46', '0', '1', '1', '45', '2020-07-05'),
(102, '17RU2020', 'paper1', '46', '0', '2', '2', '44', '2020-07-05'),
(103, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(104, '17RU2020', 'paper1', '46', '0', '1', '1', '45', '2020-07-05'),
(105, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(106, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(107, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(108, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(109, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(110, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-05'),
(111, '17RU2020', 'paper1', '46', '1', '0', '1', '45', '2020-07-05'),
(112, '17RU2020', 'paper1', '46', '1', '0', '1', '45', '2020-07-06'),
(113, '17RU2020', 'paper1', '46', '1', '0', '1', '45', '2020-07-06'),
(114, '17RU2020', 'paper1', '46', '0', '2', '2', '44', '2020-07-06'),
(115, '17RU2020', 'paper1', '46', '1', '2', '3', '43', '2020-07-06'),
(116, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-06'),
(117, '17RU2020', 'paper1', '46', '0', '0', '0', '46', '2020-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `opt1` varchar(1000) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES
(19, '1', 'WWW stands for ?', 'World Whole Web', 'Wide World Web', 'Web World Wide', 'World Wide Web', 'World Wide Web', 'paper1'),
(20, '2', ' Which of the following are components of Central Processing Unit (CPU) ?', 'Arithmetic logic unit, Mouse', 'Arithmetic logic unit, Control unit', 'Arithmetic logic unit, Integrated Circuits', 'Control Unit, Monitor', 'Arithmetic logic unit, Control unit', 'paper1'),
(21, '3', 'Which among following first generation of computers had ?', 'Vaccum Tubes and Magnetic Drum', 'Integrated Circuits', 'Magnetic Tape and Transistors', 'All of above', 'Vaccum Tubes and Magnetic Drum', 'paper1'),
(22, '4', 'Where is RAM located ?', 'Expansion Board', 'External Drive', 'Mother Board', 'All of above', 'Mother Board', 'paper1'),
(23, '5', 'If a computer has more than one processor then it is known as ?', 'Uniprocess', 'Multiprocessor', 'Multithreaded', 'Multiprogramming', 'Multiprocessor', 'paper1'),
(24, '6', 'If a computer provides database services to other, then it will be known as ?', 'Web server', 'Application server', 'Database server', 'FTP server', 'Database server', 'paper1'),
(25, '7', 'Full form of URL is ?', 'Uniform Resource Locator', 'Uniform Resource Link', 'Uniform Registered Link', 'Unified Resource Link', 'Uniform Resource Locator', 'paper1'),
(26, '8', 'In which of the following form, data is stored in computer ?', 'Decimal', 'HexaDecimal', 'Binary', 'Octal', 'Binary', 'paper1'),
(27, '9', 'Technology used to provide internet by transmitting data over wires of telephone network is ?', 'Transmitter', 'Diodes', 'HHL', 'DSL', 'DSL', 'paper1'),
(28, '10', 'Which level language is Assembly Language ?', 'high-level programming language', 'medium-level programming languag', 'low-level programming language', 'machine language', 'low-level programming language', 'paper1'),
(29, '11', 'Documents, Movies, Images and Photographs etc are stored at a ?', 'File Server', 'Application Sever', 'Web Sever', 'Print Server', 'File Server', 'paper1'),
(30, '12', 'Which of following is used in RAM ?', 'Conductor', 'Semi Conductor', 'Vaccum Tubes', 'Transistor', 'Semi Conductor', 'paper1'),
(31, '13', 'What is full form of GUI in terms of computers ?', 'Graphical user Instrument', 'Graphical unified Interface', 'Graphical unified Instrument', 'Graphical user Interface', 'Graphical user Interface', 'paper1'),
(32, '14', 'What is full form of ALU ?', 'Arithmetic logic unit', 'Allowed logic unit', 'Ascii logic unit', 'Arithmetic least unit', 'Arithmetic logic unit', 'paper1'),
(33, '15', 'Who was the Founder of Bluetooth ?', 'Ericson', 'Martin Cooper', 'Steve Jobs', 'Apple', 'Ericson', 'paper1'),
(34, '16', 'Who was the father of Internet ?', 'Chares Babbage', 'Vint Cerf', 'Denis Riche', 'Martin Cooper', 'Vint Cerf', 'paper1'),
(35, '17', 'Verification is process of ?', 'Access', 'Login', 'Logout', 'Authentication', 'Authentication', 'paper1'),
(36, '18', 'What is LINUX ?', 'Malware', 'Operating System', 'Application Program', 'Firmware', 'Operating System', 'paper1'),
(37, '19', 'What is the name of first super computer of India ?', 'Saga 220', 'PARAM 8000', 'ENIAC', 'PARAM 6000', 'PARAM 8000', 'paper1'),
(38, '20', 'Which is most common language used in web designing ?', 'C', 'C++', 'PHP', 'HTML', 'HTML', 'paper1'),
(39, '21', 'Who is also known as Father of Computer ?', 'Vint Cerf', 'Tim Berner Lee', 'Charles Babbage', 'Steve Jobs', 'Charles Babbage', 'paper1'),
(40, '22', 'Which among following is commonly used language in Android applications ?', 'C', 'Php', 'C++', 'Java', 'Java', 'paper1'),
(41, '23', 'Where are saved files stored in computer ?', 'RAM', 'Hard disk', 'Cache', 'Any of above', 'Hard disk', 'paper1'),
(42, '24', 'Which among following is odd ?', 'CD/DVD', 'Floopy Disks', 'SD Disk', 'BIOS', 'BIOS', 'paper1'),
(43, '25', 'Which operations are performed by RAM ?', 'Read', 'Write', 'Read and Write', 'Depends on computer', 'Read and Write', 'paper1'),
(44, '26', 'Which among following is secondary storage device ?', 'Hard Disk', 'RAM', 'Diode', 'Semi Conductor', 'Hard Disk', 'paper1'),
(45, '27', 'USB is which type of storage device ?', 'Primay', 'Secondary', 'Tertiary', 'None of above', 'Tertiary', 'paper1'),
(46, '28', 'Which program is run by BIOS to check hardware components are working properly while computer is turned ON ?', 'DMOS', 'POST', 'CMOS', 'RIP', 'POST', 'paper1'),
(47, '29', 'Random Access Memory (RAM) is which storage of device ?', 'Secondary', 'Primay', 'Teriary', 'Off line', 'Primay', 'paper1'),
(48, '30', 'What is full form CMOS ?', 'Content Metal Oxide Semiconductor', 'Complementary Metal Oxide Semiconductor', 'Complementary Metal Oxygen Semiconductor', 'Complementary Metal Oscilator Semiconductor', 'Complementary Metal Oxide Semiconductor', 'paper1'),
(49, '31', 'Second generation of computers consist of which of following ?', 'Vaccum Tubes', 'Diodes', 'VLSI Microprocessor', 'Transistors', 'Transistors', 'paper1'),
(50, '32', 'MPG is an file extension of which type of files ?', 'Audio', 'Image', 'Video', 'Flash', 'Video', 'paper1'),
(51, '33', 'What is full form of SMPS ?', 'Switch Mode Power Supply', 'Simple Mode Power Supply', 'Storage Mode Power Supply', 'Storage Mode Power Shortage', 'Switch Mode Power Supply', 'paper1'),
(52, '34', 'Which component of computer is also considered as it Heart ?', 'Monitor', 'Keyboard', 'Scanner', 'Microprocessor', 'Microprocessor', 'paper1'),
(53, '35', 'What is used to make computer chips ?', 'Copper', 'Steel', 'Silicon', 'Iron', 'Silicon', 'paper1'),
(54, '36', 'What is used to make computer chips ?', 'Copper', 'Steel', 'Silicon', 'Iron', 'Silicon', 'paper1'),
(55, '37', 'Where BIOS is stored ?', 'Hard Disk', 'RAM', 'Flash Memory Chip', 'Any of above', 'Flash Memory Chip', 'paper1'),
(56, '38', 'What is full form of EXIF ?', 'Exchangeable Image Fine Finish', 'Exchangeable Image File Format', 'Executable Image File Format', 'Executable Image File Finish', 'Exchangeable Image File Format', 'paper1'),
(57, '39', 'BIOS is used for ?', ' Updating system information on network', 'Loading operating system', 'It helps in routing', 'It take inputs from keywords and other devices', 'Loading operating system', 'paper1'),
(58, '40', '1 Mega Byte is equal to', '1024 Bytes', '1024 Kilo Bytes', '1024 Giga Bits', '1024 Bits', '1024 Kilo Bytes', 'paper1'),
(59, '41', 'An electronic path, that sends signals from one part of computer to another is ?', 'Logic Gate', 'Modem', 'Bus', 'Serial Port', 'Bus', 'paper1'),
(60, '42', 'Which is odd one ?', 'Inkjet Printers', 'CRT', 'Laser Printers', 'Dot Matrix Printers', 'CRT', 'paper1'),
(61, '43', 'Which device among following is used for sending digital data over a phone line ?', 'USB', 'Scanner', 'Printer', 'Modem', 'Modem', 'paper1'),
(62, '44', 'IP address version 4 is in which format ?', '4 bit', '8 bit', '16 bit', '32 bit', '32 bit', 'paper1'),
(63, '45', 'In banking, railways etc which computers are used ?', 'Mini Computers', 'Micro Computers', 'Main Frames', 'Super Computers', 'Main Frames', 'paper1'),
(75, '46', 'what is first letter?', '../opt_images/ebf56e0ae260b7be4f4bf604e5c1d8adopt1.png', '../opt_images/ebf56e0ae260b7be4f4bf604e5c1d8adopt2.png', '../opt_images/ebf56e0ae260b7be4f4bf604e5c1d8adopt33.png', '../opt_images/ebf56e0ae260b7be4f4bf604e5c1d8adopt4.png', '../opt_images/ebf56e0ae260b7be4f4bf604e5c1d8adopt2.png', 'paper1'),
(80, '2', '5+2=', '4', '5', '7', 'All of above', '7', 'S E'),
(81, '3', '2+2=', '7', 'Four', '7', 'four', 'four', 'S E');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `username`, `email`, `password`, `contact`) VALUES
(1, '', 'trial', 'trial', 'trial', ''),
(3, '', '', '', '', ''),
(4, 'ugsjv', 'adminh', 'vsa@gmail.com', '489653', '8946'),
(5, 'Aman Kumar Singh', '17RU2020', 'vs137128@gmail.com', '26061998', '8936524'),
(6, 'aman', '17RU20201', 'vs@gmail.com', '26061998', '54424515312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
