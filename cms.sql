-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2021 at 01:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'PHP & LARAVEL'),
(16, 'DEV-OPS'),
(19, 'CTO & CEO'),
(20, 'Technical Support');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(3, 7, 'Allinel-Tech', 'Allinel-Tech@allinel.com', 'This Is My Software Company', 'approved', '2021-02-02'),
(8, 5, 'jeruii', 'sdjkl@ajdh.dfj', 'dshjfhskjdfgsd', 'approved', '2021-02-12'),
(9, 5, 'Allinel-Tech', 'Allinel-Tech@Allinel.com', 'siuduiayu daiuwewq ewiuowouw ewuiowqe ejiwi', 'approved', '2021-02-12'),
(10, 5, 'gbhguyguy', 'asaf@sdkj.d', 'gh gygu huiih uiyhhu hhjh  ijio iui ui ui u u', 'approved', '2021-02-12'),
(11, 3, 'fisher', 'sam@mail.com', 'kjkj huhghfg dfdesdgh hjkkjkljkj iuhjjh uih jhhjih ', 'approved', '2021-02-12'),
(12, 3, 'Allinel-Tech', 'ksdjnfka@DSKF.VDOI', 'hgjgh ygygugjh ji iojko ljkjjk ggy yfftfty ugh hi', 'unapproved', '2021-02-12'),
(13, 5, 'Smooth', 'mail@smooth.com', 'Smooth Platoon 4 Commander', 'unapproved', '2021-02-12'),
(14, 10, 'Allinel-Tech', 'ksdjnfka@DSKF.VDOI', 'ijiojoijiooiioio', 'unapproved', '2021-02-13'),
(15, 3, 'Edwmi', 'Allinel-Tech@Allinel.com', 'A random comment', 'unapproved', '2021-02-16'),
(16, 10, '', '', '', 'unapproved', '2021-02-21'),
(17, 10, '', '', '', 'unapproved', '2021-02-21'),
(18, 10, '', '', '', 'unapproved', '2021-02-21'),
(19, 10, '', '', '', 'unapproved', '2021-02-21'),
(20, 10, '', '', '', 'unapproved', '2021-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(21, 16, 'Bookworm', 'Yazid Musa', '2021-02-22', 'bkgg.jpg', '<p>This is a new post</p>', 'sfg', '4', 'draft', 0),
(22, 3, 'Now Self Student', 'Yazid', '2021-02-22', 'bkgk.jpg', '<p>Verify the post</p>', 'ppooo', '4', 'published', 3),
(23, 16, 'jdskjfd', 'sdf rg', '2021-02-22', 'headset.png', '<p>View this diasplay</p>', 'ppooo', '4', 'draft', 0),
(24, 16, 'jdskjfd', 'sdf rg', '2021-02-22', 'headset.png', '<p>View this diasplay</p>', 'ppooo', '', 'published', 0),
(25, 3, 'Now Self Student', 'Yazid', '2021-02-22', 'bkgk.jpg', '<p>Verify the post</p>', 'ppooo', '', 'draft', 0),
(26, 16, 'Bookworm', 'Yazid Musa', '2021-02-22', 'bkgg.jpg', '<p>This is a new post</p>', 'sfg', '', 'published', 0),
(27, 16, 'Bookworm', 'Yazid Musa', '2021-02-22', 'bkgg.jpg', '<p>This is a new post</p>', 'sfg', '', 'draft', 1),
(28, 3, 'Now Self Student', 'Yazid', '2021-02-22', 'bkgk.jpg', '<p>Verify the post</p>', 'ppooo', '', 'published', 0),
(29, 16, 'jdskjfd', 'sdf rg', '2021-02-22', 'headset.png', '<p>View this diasplay</p>', 'ppooo', '', 'draft', 0),
(30, 16, 'jdskjfd', 'sdf rg', '2021-02-22', 'headset.png', '<p>View this diasplay</p>', 'ppooo', '', 'published', 0),
(31, 3, 'Now Self Student', 'Yazid', '2021-02-22', 'bkgk.jpg', '<p>Verify the post</p>', 'ppooo', '', 'draft', 0),
(32, 16, 'Bookworm', 'Yazid Musa', '2021-02-22', 'bkgg.jpg', '<p>This is a new post</p>', 'sfg', '', 'published', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'plentnnm', '123', 'good', 'spender', 'plentyspender@gmail.com', '', 'admin', ''),
(4, 'yazshrilld', '1245', 'Yazidssskkkkkl', 'Musa', 'smooth@mail.com', '', 'admin', ''),
(5, 'stoned', '12345678', 'Topa', 'Musa', 'smoothuu@mail.com', '', 'subscriber', ''),
(6, 'jsidn', 'jsdire4834', 'Tech', 'Name', 'jaskj@jwd.flkf', '', 'admin', ''),
(8, 'ewojcdwa', 'wefr3445', 'edcj', 'dkchkjn', 'smooth@mail.com', '', 'admin', ''),
(9, 'ewojcdwa', 'wefr3445', 'edcj', 'dkchkjn', 'smooth@mail.com', '', 'admin', ''),
(10, 'kjhgjg', 'hjgjg67', 'lk', 'jkjkn', 'smoothuu@mail.com', '', 'admin', ''),
(11, 'kjhgjg', 'hjgjg67', 'lk', 'jkjkn', 'smoothuu@mail.com', '', 'admin', ''),
(12, 'kjhgjg', 'hjgjg67', 'lk', 'jkjkn', 'smoothuu@mail.com', '', 'admin', ''),
(13, 'kjhgjg', 'hjgjg67', 'lk', 'jkjkn', 'smoothuu@mail.com', '', 'admin', ''),
(14, 'kjhgjg', 'hjgjg67', 'lk', 'jkjkn', 'smoothuu@mail.com', '', 'admin', ''),
(15, 'kjhgjg', 'hjgjg67', 'lk', 'jkjkn', 'smoothuu@mail.com', '', 'admin', ''),
(16, 'favour', 'skdajdf', 'good', 'Musa', 'smoothuu@mail.com', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(18, 'bright', '12345', 'Yazid', 'Owolewa', 'brigh@maol.com', '', 'admin', '$2y$10$iusesomecrazystrings22'),
(34, 'funke', '$1$fMmDTKET$2CG7mHBrM3HZDzoE5n.tI0', 'funke', 'shola', 'sdfkj@kwef.sfj', '', 'admin', '$2y$10$iusesomecrazystrings22'),
(35, 'goasrt', '$1$xc7ZgJWv$P/VJ6QcsK5m1zTZY626Sf0', 'Yazid', 'Musa', 'skf@welk.dfk', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(36, 'real', '$1$ZRw1ozpn$o1a1w244FKGpb3ehC7BEL0', 'Yazido', 'Muzido', 'real@example.com', '', 'subscriber', '$2y$10$iusesomecrazystrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
