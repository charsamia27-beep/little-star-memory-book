-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.infinityfree.com
-- Generation Time: May 24, 2026 at 09:49 AM
-- Server version: 11.4.10-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_41840911_little_star_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `love_letters`
--

CREATE TABLE `love_letters` (
  `letter_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `letter_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `love_letters`
--

INSERT INTO `love_letters` (`letter_id`, `title`, `message`, `letter_date`) VALUES
(7, 'First Letter', '**My Dear Little Star,**\r\n\r\nYou are not even here yet, and still—you have already filled our hearts with a kind of love we cannot fully explain. As I write this, we are waiting for you, counting the days, dreaming about the moment we finally see your tiny face. InshaAllah, on the 31st of May, you will arrive and change our world forever.\r\n\r\nI want you to know something from the very beginning: you are deeply loved. Not just by your parents, but by all of us—your whole family. You are a blessing, a light, a little star sent into our lives.\r\n\r\nI imagine the first time I will hold you… your small hands, your soft smile, your innocent eyes looking at the world for the very first time. That moment will be unforgettable. And from that day, I promise—you will never walk alone. I will always be there for you.\r\n\r\nAs you grow, life will show you many things—joy, challenges, lessons. But no matter what happens, always remember:\r\n\r\n* You are stronger than you think\r\n* You are more capable than you know\r\n* And you are loved more than words can ever express\r\n\r\nI will watch you take your first steps, say your first words, and slowly become the amazing person you are meant to be. I pray that your life is filled with happiness, good health, and endless success. May Allah always protect you, guide you, and bless your path.\r\n\r\nThis letter is just the beginning. I am making something special for you—a place where I will keep memories, words, and love for you as you grow. One day, when you read this, I hope you feel how much you meant to us even before you were born.\r\n\r\nWelcome to this beautiful world, my little star.\r\nWe are waiting for you with open arms.\r\n\r\n**With all my love,**\r\nYour loving mum mum💛\r\n', '2026-05-04'),
(8, 'letter two', 'love you', '2026-05-05'),
(9, 'morning', 'May Allah bless You', '2026-05-06'),
(11, 'baba', 'miss u', '2026-05-13'),
(12, 'rety', 'rertruytiuy', '2026-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`) VALUES
(1, '1778025729_vaia.jpg'),
(6, '1778611056_vabi.jpeg'),
(7, '1778758336_Screenshot 2026-04-23 134511.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `love_letters`
--
ALTER TABLE `love_letters`
  ADD PRIMARY KEY (`letter_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `love_letters`
--
ALTER TABLE `love_letters`
  MODIFY `letter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
