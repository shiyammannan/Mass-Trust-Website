-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 05:58 AM
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
-- Database: `mass_trust`
--

-- --------------------------------------------------------

--
-- Table structure for table `mass_about_us`
--

CREATE TABLE `mass_about_us` (
  `about_us_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `vision_mission_description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_achievements`
--

CREATE TABLE `mass_achievements` (
  `achievements_id` int(11) NOT NULL,
  `home_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `achievements_priority` int(11) DEFAULT NULL,
  `achievements_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_additional_documents`
--

CREATE TABLE `mass_additional_documents` (
  `additional_documents_id` int(11) NOT NULL,
  `document_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `pdf` text DEFAULT NULL,
  `additional_documents_priority` int(11) DEFAULT NULL,
  `additional_documents_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_contact_us`
--

CREATE TABLE `mass_contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `contact_us_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mass_contact_us`
--

INSERT INTO `mass_contact_us` (`contact_us_id`, `name`, `surname`, `email`, `phone_number`, `comments`, `contact_us_status`, `created_on`, `updated_on`, `deleted`) VALUES
(1, 'Arul', 'A', 'jenijohn1917@gmail.com', '09629805430', 'xcas', 1, '2024-09-06 10:01:52', '2024-09-06 10:01:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mass_coordinators`
--

CREATE TABLE `mass_coordinators` (
  `id` int(11) NOT NULL,
  `about_us_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `coordinators_priority` int(11) DEFAULT NULL,
  `coordinators_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_documents`
--

CREATE TABLE `mass_documents` (
  `documents_id` int(11) NOT NULL,
  `top_image` text DEFAULT NULL,
  `top_title` varchar(255) DEFAULT NULL,
  `top_description` text DEFAULT NULL,
  `top_pdf` text DEFAULT NULL,
  `documents_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_firm_profile`
--

CREATE TABLE `mass_firm_profile` (
  `firm_profile_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `alternative_contact_number` varchar(15) DEFAULT NULL,
  `landline_number` varchar(15) DEFAULT NULL,
  `street` text DEFAULT NULL,
  `locality` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `district` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `location_link` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `vision_mission` text DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `firm_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mass_firm_profile`
--

INSERT INTO `mass_firm_profile` (`firm_profile_id`, `company_name`, `subtitle`, `logo`, `contact_number`, `alternative_contact_number`, `landline_number`, `street`, `locality`, `city`, `district`, `state`, `country`, `email_id`, `location_link`, `facebook`, `instagram`, `youtube`, `vision_mission`, `username`, `password`, `firm_status`, `created_on`, `updated_on`, `deleted`) VALUES
(1, 'VPS Code Builders', 'Innovating Your Future', '/path/to/logo.png', '1234567890', '0987654321', '0221234567', '123 Tech Park', 'Sector 10', 'Chennai', 'Chennai', 'Tamil Nadu', 'India', 'info@vpscodebuilders.com', 'https://maps.example.com/location', 'https://facebook.com/vpscodebuilders', 'https://instagram.com/vpscodebuilders', 'https://youtube.com/vpscodebuilders', 'Our mission is to innovate and lead in software development.', 'admin', '$argon2id$v=19$m=65536,t=4,p=1$eHNrcmRUeExjMFg2VHFvbg$5Xen3ZUybLtbzJ60/qnBlCH8XYGbrNtR60WNgvN3sUA', 1, '2024-09-05 07:39:30', '2024-09-05 08:47:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mass_gallery`
--

CREATE TABLE `mass_gallery` (
  `gallery_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `gallery_priority` int(11) DEFAULT NULL,
  `gallery_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_home`
--

CREATE TABLE `mass_home` (
  `home_id` int(11) NOT NULL,
  `landing_image` text DEFAULT NULL,
  `landing_quotes_1` text DEFAULT NULL,
  `landing_quotes_21` text DEFAULT NULL,
  `landing_quotes_22` text DEFAULT NULL,
  `landing_quotes_23` text DEFAULT NULL,
  `landing_quotes_3` text DEFAULT NULL,
  `title_1` varchar(255) DEFAULT NULL,
  `quotes_1` text DEFAULT NULL,
  `title_2` varchar(255) DEFAULT NULL,
  `quotes_2` text DEFAULT NULL,
  `title_3` varchar(255) DEFAULT NULL,
  `quotes_3` text DEFAULT NULL,
  `title_4` varchar(255) DEFAULT NULL,
  `quotes_4` text DEFAULT NULL,
  `video_1` text DEFAULT NULL,
  `title_5` varchar(255) DEFAULT NULL,
  `quotes_5` text DEFAULT NULL,
  `supporters_image` text DEFAULT NULL,
  `ashram_document_title` varchar(255) DEFAULT NULL,
  `ashram_document_description` text DEFAULT NULL,
  `ashram_document_pdf` text DEFAULT NULL,
  `ashram_document_image` text DEFAULT NULL,
  `joiners_quotes` text DEFAULT NULL,
  `home_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_home_images`
--

CREATE TABLE `mass_home_images` (
  `home_images_id` int(11) NOT NULL,
  `home_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `home_images_priority` int(11) DEFAULT NULL,
  `home_images_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_roadmap`
--

CREATE TABLE `mass_roadmap` (
  `roadmap_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `year` varchar(6) DEFAULT NULL,
  `roadmap_priority` int(11) DEFAULT NULL,
  `roadmap_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mass_services`
--

CREATE TABLE `mass_services` (
  `services_id` int(11) NOT NULL,
  `about_us_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `services_priority` int(11) DEFAULT NULL,
  `services_status` tinyint(4) DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mass_about_us`
--
ALTER TABLE `mass_about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `mass_achievements`
--
ALTER TABLE `mass_achievements`
  ADD PRIMARY KEY (`achievements_id`),
  ADD KEY `home_id` (`home_id`);

--
-- Indexes for table `mass_additional_documents`
--
ALTER TABLE `mass_additional_documents`
  ADD PRIMARY KEY (`additional_documents_id`),
  ADD KEY `document_id` (`document_id`);

--
-- Indexes for table `mass_contact_us`
--
ALTER TABLE `mass_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `mass_coordinators`
--
ALTER TABLE `mass_coordinators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_us_id` (`about_us_id`);

--
-- Indexes for table `mass_documents`
--
ALTER TABLE `mass_documents`
  ADD PRIMARY KEY (`documents_id`);

--
-- Indexes for table `mass_firm_profile`
--
ALTER TABLE `mass_firm_profile`
  ADD PRIMARY KEY (`firm_profile_id`);

--
-- Indexes for table `mass_gallery`
--
ALTER TABLE `mass_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `mass_home`
--
ALTER TABLE `mass_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `mass_home_images`
--
ALTER TABLE `mass_home_images`
  ADD PRIMARY KEY (`home_images_id`),
  ADD KEY `home_id` (`home_id`);

--
-- Indexes for table `mass_roadmap`
--
ALTER TABLE `mass_roadmap`
  ADD PRIMARY KEY (`roadmap_id`);

--
-- Indexes for table `mass_services`
--
ALTER TABLE `mass_services`
  ADD PRIMARY KEY (`services_id`),
  ADD KEY `about_us_id` (`about_us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mass_about_us`
--
ALTER TABLE `mass_about_us`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_achievements`
--
ALTER TABLE `mass_achievements`
  MODIFY `achievements_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_additional_documents`
--
ALTER TABLE `mass_additional_documents`
  MODIFY `additional_documents_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_contact_us`
--
ALTER TABLE `mass_contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mass_coordinators`
--
ALTER TABLE `mass_coordinators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_documents`
--
ALTER TABLE `mass_documents`
  MODIFY `documents_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_firm_profile`
--
ALTER TABLE `mass_firm_profile`
  MODIFY `firm_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mass_gallery`
--
ALTER TABLE `mass_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_home`
--
ALTER TABLE `mass_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_home_images`
--
ALTER TABLE `mass_home_images`
  MODIFY `home_images_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_roadmap`
--
ALTER TABLE `mass_roadmap`
  MODIFY `roadmap_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mass_services`
--
ALTER TABLE `mass_services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mass_achievements`
--
ALTER TABLE `mass_achievements`
  ADD CONSTRAINT `mass_achievements_ibfk_1` FOREIGN KEY (`home_id`) REFERENCES `mass_home` (`home_id`);

--
-- Constraints for table `mass_additional_documents`
--
ALTER TABLE `mass_additional_documents`
  ADD CONSTRAINT `mass_additional_documents_ibfk_1` FOREIGN KEY (`document_id`) REFERENCES `mass_documents` (`documents_id`);

--
-- Constraints for table `mass_coordinators`
--
ALTER TABLE `mass_coordinators`
  ADD CONSTRAINT `mass_coordinators_ibfk_1` FOREIGN KEY (`about_us_id`) REFERENCES `mass_about_us` (`about_us_id`);

--
-- Constraints for table `mass_home_images`
--
ALTER TABLE `mass_home_images`
  ADD CONSTRAINT `mass_home_images_ibfk_1` FOREIGN KEY (`home_id`) REFERENCES `mass_home` (`home_id`);

--
-- Constraints for table `mass_services`
--
ALTER TABLE `mass_services`
  ADD CONSTRAINT `mass_services_ibfk_1` FOREIGN KEY (`about_us_id`) REFERENCES `mass_about_us` (`about_us_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
