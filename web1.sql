-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 08:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `user_name`, `email`, `password`) VALUES
(1, 'sugar', 'cyrap2001@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `content_type` varchar(200) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_user` varchar(200) DEFAULT NULL,
  `language_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`id`, `content_type`, `content`, `user_id`, `post_user`, `language_name`) VALUES
(25, 'Html гэж юу вэ?', 'HTML бол вэб хуудасны стандарт тэмдэглэгээний хэл юм.\r\n\r\nHTML-ийн тусламжтайгаар та өөрийн вэбсайтаа үүсгэж болно.\r\n\r\nHTML сурахад хялбар байдаг - Та таалагдах болно!', NULL, 'cyrap2001@gmail.com', 'html'),
(26, 'HTML Элемэнт', 'HTML элементийг эхлэх шошго, зарим агуулга, мөн тодорхойлно төгсгөлийн шошго.', NULL, '', 'html'),
(27, 'HTML header', '<h1>Heading 1</h1>\r\n\r\nHTML гарчиг нь вэб хуудсан дээр харуулахыг хүссэн гарчиг эсвэл хадмал орчуулга юм', NULL, '', 'html'),
(28, 'HTML <div> Гэж юу вэ?', 'Вэб Browser(chrome,safari,firebox etc...) дээр харагдах текст, зураг, элэмнтийг харуулхад хэрэглэх хайрцаг утга зааж өгөх сав гэж хэлж болно.', NULL, '', 'html'),
(29, 'HMTL comment гэж юу вэ', 'HTML comment гэж кодийг тайлбарлаж үлдээх тайлбарт зориулсан тэмдэглэгээ бөгөөд <!-- Write your comments here --> гэж харагдана. Ажиллах code-нд огт хамаагүй.', NULL, '', 'html'),
(30, 'HTML Styles', 'html style-ийг inline, internal, external, гэж 3 ангилна. inline style гэж элемэнтийн таг дотор style=\"\" гэж шууд бичнэ. internal гэж html бүтцийн \"head\" хэсэгт <style></style> таг дотор бичих ба үүниийг inline гэж нэрлэнэ. External гэж \"head\" дотор <link href=\"style.css\"></link> байдлаар дуудсанаар html css-ийг хүлээж авна.', NULL, '', 'html'),
(31, 'HTML class', 'HTML class гэж үүссэн элемэнтийн таг дотор бичиж өгөх ба үүнийг энгийнээр ойлговол нэрлэж байна гэсэн үг. Class=\"elementName\" нь элемэнт нь style болон script бичиж өгөхөд дуудаж ашиглахад хэрэглэнэ.', NULL, 'cyrap2001@gmail.com', 'html'),
(32, 'HTML id', 'HTML id нь class-тай адил бөгөөд script бичиж ашиглахад ихэвчлэн ашиглана. id=\"elementId\" гэж ашиглах бөгөөд нөгөө талаас \"#\"-аар style-д ашиглах бөгөөд javascript-д document.getElementById(\"elementId\") ', NULL, '', 'html'),
(33, 'CSS class selector', 'CSS class-аар элемэнтийг сонгож авахдаа .Classname буюу class=\"Classname\"-ийг сонгож аван элемэнтийн хэв маягийг бичиж өгнө. Мөн Id-аар элемэнтийг сонгож авахдаа #-аар тэмдэглэнэ.\r\nМөн элетэнтийн tag name-ээр авж болно. div{} span{} h1{} etc...\r\n', NULL, 'cyrap2001@gmail.com', 'CSS'),
(34, 'CSS class selector', 'CSS class-аар элемэнтийг сонгож авахдаа .Classname буюу class=\"Classname\"-ийг сонгож аван элемэнтийн хэв маягийг бичиж өгнө. Мөн Id-аар элемэнтийг сонгож авахдаа #-аар тэмдэглэнэ.\r\nМөн элетэнтийн tag name-ээр авж болно. div{} span{} h1{} etc...\r\n', NULL, 'cyrap2001@gmail.com', 'CSS'),
(35, 'CSS class selector', 'CSS class-аар элемэнтийг сонгож авахдаа .Classname буюу class=\"Classname\"-ийг сонгож аван элемэнтийн хэв маягийг бичиж өгнө. Мөн Id-аар элемэнтийг сонгож авахдаа #-аар тэмдэглэнэ.\r\nМөн элетэнтийн tag name-ээр авж болно. div{} span{} h1{} etc...\r\n', NULL, 'cyrap2001@gmail.com', 'CSS'),
(36, 'js variable', 'javascript variable гэж \"var\", \"let\", \"const\" гэх гурван төрлийн санах ойд гаргах хайрцаг сав  дахин утгийг нь ашиглах боломжтой index гэж хэлж болно var гэж var color = \"red\"; var color= \"blue\" console.log(color); гэдэг хариу нь blue гэж гарна. харин бусад тохиолдолд утгыг ахин заах гэж ололдход алдаа заана энэ variable тогтмол бөгөөд өөрчлөгдөхгүй гэсэн үг', NULL, 'cyrap2001@gmail.com', 'Javascript'),
(37, 'sain uu Nymaa saihan shinelsen uu', 'sonin saihan yu baina daa', NULL, 'cyrap2001@gmail.com', 'Javascript');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `user_name`, `user_password`) VALUES
(1, 'sugar', '$2y$10$EVpHZWHV4fGIFZLdZPQo6OkrfPaIcvSZXYXetr5uEdeSBIBnNrsIy'),
(2, 'wrwerwer', '$2y$10$JkLRI21cgOQefqq14O2nU.HE8cK3CbM9GaJG5.g4n9dE4hoDJMiPi'),
(3, 's', '$2y$10$/0n12P6Xwy9SqdcSaJOUjOJBUh7r/S3.FEyVMqp2IrXsv46SFg/Ke'),
(4, '1', '$2y$10$dwFDNtwESdSuvnqFhN6RmuZnywUFGT9A9l7B4uNZpx9Cy2TnZ5fu6'),
(5, 'gfxhxg', '$2y$10$dvA7DPYTmwRhSIiF1rEfj..7c6fEMrMznpqS5RD/.nYBtaam4AZDG'),
(6, 'cyrap2001@gmail.com', '$2y$10$8jvmiV097MVboi8cmao3Ze/4QzLXOxuZkohGmD8suCkgwBcPg5M3y'),
(7, '94232720', '$2y$10$cp89P8fr0gesH1xNSqfmCOBDP57sIvx6oo5EnBmBrbQAJy2mfprH.'),
(8, ' ', '$2y$10$WiOI/x642EEurCPvVxXq6O9HZMaUsVvg2IazTg2BY.kUmfm3.0EuG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `html`
--
ALTER TABLE `html`
  ADD CONSTRAINT `html_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `admin` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
