-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2020 at 08:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iCoder`
--

-- --------------------------------------------------------

--
-- Table structure for table `Blog-Comments`
--

CREATE TABLE `Blog-Comments` (
  `Sno` int(3) NOT NULL,
  `User` varchar(200) NOT NULL,
  `Content` text NOT NULL,
  `Blog_No` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Blog-Comments`
--

INSERT INTO `Blog-Comments` (`Sno`, `User`, `Content`, `Blog_No`, `Date`) VALUES
(1, 'admin', 'This is awesome blog', 1, '2020-06-27 10:28:25'),
(2, 'Jarvis', 'This is best blog in the world', 1, '2020-06-27 10:36:37'),
(3, 'admin', 'This is Django Blog', 3, '2020-06-27 10:39:31'),
(4, 'admin', 'This is php blog', 2, '2020-06-27 10:40:03'),
(5, 'admin', 'hello', 1, '2020-06-27 10:40:41'),
(6, 'admin', 'Hello I am Admin work on python blogs', 2, '2020-06-27 11:27:22'),
(7, 'admin', 'This is my python blog', 1, '2020-06-27 11:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `C-Language-Tutorials`
--

CREATE TABLE `C-Language-Tutorials` (
  `Sno` int(4) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Link` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `code` text NOT NULL,
  `ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `C-Language-Tutorials`
--

INSERT INTO `C-Language-Tutorials` (`Sno`, `Name`, `Link`, `Description`, `code`, `ID`) VALUES
(1, 'Basic of C language', 'https://www.youtube.com/embed/BEsNYsy5BGs', 'Basic Program of c language', 'printf(\"hello word\");', 4),
(2, 'Header Files in C', 'https://www.youtube.com/embed/hzekM4xNRZQ', 'In this video I discuss about header files in C language', '#include<stdio.h>', 4),
(3, 'Reading the value from the user', 'https://www.youtube.com/embed/5CYb7v-rqR8', 'In this video I discuss about how to take the value from the user', 'scanf(\"%d\",&a);', 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `catID` int(11) NOT NULL,
  `videoID` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `catID`, `videoID`, `user`, `date`) VALUES
(22, 'is python great', 1, 1, 'admin', '2020-06-27 11:45:19'),
(23, 'python is wonderful language\r\n', 1, 1, 'admin', '2020-06-27 12:12:35'),
(24, 'this is list tutorial', 1, 2, 'admin', '2020-06-27 12:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `Sno` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Javascripts-Tutorials`
--

CREATE TABLE `Javascripts-Tutorials` (
  `Sno` int(4) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Link` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `code` text NOT NULL,
  `ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Javascripts-Tutorials`
--

INSERT INTO `Javascripts-Tutorials` (`Sno`, `Name`, `Link`, `Description`, `code`, `ID`) VALUES
(1, 'Basic of Javascript', 'https://www.youtube.com/embed/qY2-o9YbaGI', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions. ', 'console.log(\"hello);', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Python-Programming-Tutorials`
--

CREATE TABLE `Python-Programming-Tutorials` (
  `Sno` int(3) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Link` varchar(250) NOT NULL,
  `Description` text NOT NULL,
  `code` text NOT NULL,
  `ID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Python-Programming-Tutorials`
--

INSERT INTO `Python-Programming-Tutorials` (`Sno`, `Name`, `Link`, `Description`, `code`, `ID`) VALUES
(1, 'Basic Printing the string on console with python', 'https://www.youtube.com/embed/-bC2xyf_CJU', 'This Video is on very basic of the python and in this I wanr to teach how to print characters or a string on python console. I hope you like it.', 'print(\"hello\")', 1),
(2, 'Lists in python', 'https://www.youtube.com/embed/EFw9hEX_GA0', 'There are four collection data types in the Python programming language:\r\n\r\nList is a collection which is ordered and changeable. Allows duplicate members.\r\nTuple is a collection which is ordered and unchangeable. Allows duplicate members.\r\nSet is a collection which is unordered and unindexed. No duplicate members.\r\nDictionary is a collection which is unordered, changeable and indexed. No duplicate members.\r\nWhen choosing a collection type, it is useful to understand the properties of that type. Choosing the right type for a particular data set could mean retention of meaning, and, it could mean an increase in efficiency or security.', 'thislist = [\"apple\", \"banana\", \"cherry\"]\r\nprint(thislist)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Python_Blogs`
--

CREATE TABLE `Python_Blogs` (
  `Sno` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Python_Blogs`
--

INSERT INTO `Python_Blogs` (`Sno`, `Title`, `Content`) VALUES
(1, '2020 Python Software Foundation Board of Directors Election Results', 'The 2020 Python Software Foundation Board of Directors election has concluded.\r\nOf 1,151 eligible voting members, 462 ballots were cast. This surpasses the necessary 1/3 quorum.\r\nThe four top votegetters via approval voting are:\r\nNina Zakharenko\r\nDustin Ingram\r\nJeff Triplett\r\nThomas Wouters\r\nThey will serve a three year term on the board.\r\nNo ties were necessary to break.\r\nThe full result is visible to elligible voters at https://vote.heliosvoting.org/helios/e/psf-board-2020 using the same credentials as their ballot.\r\nThe Python Software Foundation thanks all the nominees, voting members, and the newly elected directors! The long term viability of our community relies on participation of our global membership.\r\nIf you would like to participate as a voter in the next election join as a Supporting, Contributing, or Managing member today! You can read more about the different classes at on python.org.'),
(2, 'About PHP', '<pre>Introduction\r\nThe PHP 4 documentation was removed from the PHP Manual in August 2014, approximately six years after PHP 4 reached its end of life. However, we have provided downloadable copies of the manual for anyone who would need it.\r\n\r\nPHP 4 Manual\r\nAn attempt has been made to preserve as much documentation related to PHP 4, as possible. Despite this, we don\'t have a nice, separate manual covering only PHP 4. The reason for this is how our documentation is structured. Even so, the archived copy describes more aspects of PHP 4 than actual manual described in August 2014 (e.g. it covers more PHP 4 extensions).</pre>'),
(3, 'Django Framework', 'Django (/ˈdʒæŋɡoʊ/ JANG-goh; stylised as django)[4] is a Python-based free and open-source web framework that follows the model-template-view (MVC) architectural pattern.[5][6] It is maintained by the Django Software Foundation (DSF), an American independent organization established as a 501(c)(3) non-profit.\r\n\r\nDjango\'s primary goal is to ease the creation of complex, database-driven websites. The framework emphasizes reusability and \"pluggability\" of components, less code, low coupling, rapid development, and the principle of don\'t repeat yourself.[7] Python is used throughout, even for settings files and data models. Django also provides an optional administrative create, read, update and delete interfa');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID` int(11) NOT NULL,
  `F_Name` varchar(30) NOT NULL,
  `L_Name` varchar(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID`, `F_Name`, `L_Name`, `Username`, `Email`, `Password`, `Date`) VALUES
(5, 'iCoder', '', 'admin', 'guyscommerce@gmail.com', '$2y$10$zZVvDltSr5QIm4jncrswx.q2ZYm/A6laa6QsN9nYDxkIjyrWeQZAS', '2020-06-26 08:12:37'),
(6, 'Shivam', 'Gupta', 'jarvis', 'sg330415@gmail.com', '$2y$10$9T0WgM7wxy33hOLtwvRaTePv5B7AWu5/QLyvWwg.dY8qTXQqxY4nS', '2020-06-26 15:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `Video_Head`
--

CREATE TABLE `Video_Head` (
  `ID` int(11) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Photo` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Video_Head`
--

INSERT INTO `Video_Head` (`ID`, `Topic`, `Description`, `Photo`, `Date`) VALUES
(1, 'Python-Programming-Tutorials', 'Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace.', 'python.jpg', '2020-06-25 17:28:21'),
(3, 'Javascripts-Tutorials', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.', '365155_preview.png', '2020-06-26 13:33:38'),
(4, 'C-Language-Tutorials', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions.', 'c-programming-569564.png', '2020-06-26 13:49:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Blog-Comments`
--
ALTER TABLE `Blog-Comments`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `C-Language-Tutorials`
--
ALTER TABLE `C-Language-Tutorials`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `Javascripts-Tutorials`
--
ALTER TABLE `Javascripts-Tutorials`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `Python-Programming-Tutorials`
--
ALTER TABLE `Python-Programming-Tutorials`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `Python_Blogs`
--
ALTER TABLE `Python_Blogs`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `Video_Head`
--
ALTER TABLE `Video_Head`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Topic` (`Topic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Blog-Comments`
--
ALTER TABLE `Blog-Comments`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `C-Language-Tutorials`
--
ALTER TABLE `C-Language-Tutorials`
  MODIFY `Sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `Sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Javascripts-Tutorials`
--
ALTER TABLE `Javascripts-Tutorials`
  MODIFY `Sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Python-Programming-Tutorials`
--
ALTER TABLE `Python-Programming-Tutorials`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Python_Blogs`
--
ALTER TABLE `Python_Blogs`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Video_Head`
--
ALTER TABLE `Video_Head`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
