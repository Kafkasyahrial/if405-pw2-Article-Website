-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2026 at 09:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noc_knowledge_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` enum('draft','published') DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `category`, `status`, `created_at`) VALUES
(1, 'SOP Handover Jam Shifting', 'sop-handover-jam-shifting', 'Lorem ipsum dolor sit amet, deserunt officia ullamco do. Quis est aliqua ad nulla id nisi ullamco dolore labore officia nostrud. Sed occaecat ut dolore proident voluptate ex duis consectetur. Exercitation commodo dolore sunt ea est officia sed cillum ut culpa dolor aute.\r\n\r\nNulla irure laborum ut fugiat id laboris anim velit fugiat commodo ex. Nulla esse mollit dolore incididunt in commodo mollit. Pariatur deserunt ad do dolore esse ut tempor duis pariatur dolore. Irure esse consequat velit irure ullamco minim magna ad eiusmod dolore exercitation ad. Cillum labore laboris incididunt est eiusmod qui dolore anim dolore irure aute dolore.\r\n\r\nPariatur mollit sed commodo ut in aliquip exercitation aute ut nulla. Ad ad esse nulla laborum in occaecat laborum ullamco commodo elit est. Consequat ad commodo occaecat velit minim nulla eiusmod irure mollit commodo do excepteur. Non adipiscing non laborum deserunt laborum sunt ut culpa.', 'Internal', 'published', '2026-07-18 06:39:57'),
(2, 'SOP New Activation', 'sop-new-activation', 'Lorem ipsum dolor sit amet, elit aliquip velit laboris dolore eiusmod dolore. Aute elit consequat tempor in magna in irure laborum. Aliqua ad sint pariatur id tempor sed do nostrud pariatur. Quis excepteur duis dolore ut id eu magna. In sed cillum ullamco incididunt veniam in fugiat minim pariatur et consectetur.\r\n\r\nEu nostrud occaecat laborum enim incididunt cillum cillum cupidatat exercitation. Veniam officia sint ad adipiscing anim fugiat in consequat enim aliquip tempor. Laboris esse sed minim mollit do ut dolor excepteur. Ut fugiat id minim nostrud aute id nostrud dolore.\r\n\r\nAute id laborum ex sunt magna officia in deserunt. Veniam non cupidatat officia ex non dolor quis nulla reprehenderit veniam excepteur reprehenderit. Excepteur et cupidatat ad fugiat in dolore ad. In aliqua aliquip cillum esse tempor laboris elit deserunt adipiscing.\r\n\r\nIrure pariatur exercitation sint dolore qui consequat id commodo incididunt est. Ex laborum eiusmod adipiscing id sunt eu reprehenderit. Occaecat tempor do consequat pariatur exercitation veniam in ut. Elit ex dolore cillum aute excepteur non do non sed adipiscing. Nisi enim laborum ad in magna ut sed. Do esse ut mollit ut officia duis aute qui dolore.', 'Activation', 'published', '2026-07-18 06:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'kafka', 'kafka@pt.com', 'oke..oke..oke..', '2026-07-18 06:38:18'),
(2, 'syahrial', 'syahrial@syah.net', 'Lorem ipsum dolor sit amet, est mollit excepteur esse tempor. Consequat ut consequat et in adipiscing in do veniam consectetur. Ea id culpa cillum adipiscing ea dolore nulla in deserunt dolore sunt.', '2026-07-18 06:56:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
