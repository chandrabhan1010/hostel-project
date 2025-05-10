-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 09:46 PM
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
-- Database: `hosteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_username` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `image` varchar(400) NOT NULL,
  `verify_token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_username`, `admin_pass`, `admin_email`, `image`, `verify_token`) VALUES
(1, 'Chandrabhan', 'admin@123', '1234', 'cparachhi@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `complaint_no` bigint(12) DEFAULT NULL,
  `userid` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `roomno` int(11) NOT NULL,
  `complaint_type` varchar(225) NOT NULL,
  `complaint_details` varchar(255) NOT NULL,
  `complaint_doc` varchar(400) NOT NULL,
  `complaint_status` varchar(255) NOT NULL DEFAULT 'New',
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `complaint_no`, `userid`, `name`, `mobile`, `roomno`, `complaint_type`, `complaint_details`, `complaint_doc`, `complaint_status`, `registration_date`) VALUES
(17, 259623172, '88452382181 ', 'Chandrabhan ', '8305764534', 1, 'Electrical', 'change fan', '../complaint_img/IMG20241126095145.jpg', 'Closed', '2024-12-03 14:13:39'),
(18, 253799803, '88574547414 ', 'Aditya Kumar', '236423846', 3, 'Room Related', 'Fan is not working', '../complaint_img/IMG20241126095145.jpg', 'New', '2025-05-04 11:55:00'),
(19, 569183330, '88452382209 ', 'Mohan', '7656464654', 2, 'Electrical', 'my switch boardi is not working', '../complaint_img/change_switch_board.png', 'In Progress', '2025-05-04 12:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `complainthistory`
--

CREATE TABLE `complainthistory` (
  `id` int(11) NOT NULL,
  `complaint_no` bigint(11) DEFAULT NULL,
  `complaint_status` varchar(255) NOT NULL,
  `complaint_remark` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainthistory`
--

INSERT INTO `complainthistory` (`id`, `complaint_no`, `complaint_status`, `complaint_remark`, `posting_date`) VALUES
(18, 259623172, 'In Progress', ' I will solves your issue soon', '2024-12-03 14:15:08'),
(22, 569183330, 'In Progress', 'I will solved issue within two days', '2025-05-04 12:54:13'),
(23, 259623172, 'Closed', 'cloas', '2025-05-04 13:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `regno` bigint(20) NOT NULL,
  `sname` varchar(225) NOT NULL,
  `cast_certificate` varchar(400) NOT NULL,
  `domicile_certificate` varchar(400) NOT NULL,
  `hostel_fee_receipt` varchar(400) NOT NULL,
  `semester_fee_receipt` varchar(400) NOT NULL,
  `aadhar` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`regno`, `sname`, `cast_certificate`, `domicile_certificate`, `hostel_fee_receipt`, `semester_fee_receipt`, `aadhar`) VALUES
(88452382209, 'Mohan', '../upload_document_pdf/Dummy Cast certificate.pdf', ' ../upload_document_pdf/Dummy Domicile Certificate.pdf', '../upload_document_pdf/Dummy Hostel Fee Receipt.pdf', '../upload_document_pdf/Dummy Semester Fee Receipt.pdf', '../upload_document_pdf/Dummy Aadhar Card.pdf'),
(88574547414, 'Ram', '../upload_document_pdf/Dummy Cast certificate.pdf', ' ../upload_document_pdf/Dummy Domicile Certificate.pdf', '../upload_document_pdf/Dummy Hostel Fee Receipt.pdf', '../upload_document_pdf/Dummy Semester Fee Receipt.pdf', '../upload_document_pdf/Dummy Aadhar Card.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_warden`
--

CREATE TABLE `hostel_warden` (
  `id` int(11) NOT NULL,
  `warden_name` varchar(200) NOT NULL,
  `work` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `warden_type` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostel_warden`
--

INSERT INTO `hostel_warden` (`id`, `warden_name`, `work`, `department`, `warden_type`, `email`, `mobile`, `image`) VALUES
(1, 'Dr. Sudesh Kumar', 'Administrative Warden (GGBH)', 'Assistant Professor (Department Of Computer Science)', 'Administrative warden', 'sudesh.kumar@igntu.ac.in', '9178691710', '../upload_img/sudesh_kumar.jpg'),
(2, 'Prof. Vikash Singh', 'Chief Warden (GGBH)', 'Professor, Head & Dean (Department of Vocational Education and Skill Training)', 'Chief warden', 'vikash.singh@igntu.ac.in', '9175871690', '../upload_img/DrVikash.jpg'),
(3, 'Dr. Janki Prasad', 'Warden (GGBH)', 'Assistant Professor ( Department of Geography and Regional Development)', 'Warden', 'janki.prasad@igntu.ac.in', '9194073592', '../upload_img/janki_prasad.jpg'),
(4, 'Dr. Shivaji Chaudhary', 'Warden (GGBH)', 'Professor & Head (Department Of Environmental Science)', 'Warden', 'shivaji.chaudhari@igntu.ac.in', '9194360934', '../upload_img/shivaji.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `idcard`
--

CREATE TABLE `idcard` (
  `enroll_no` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `father_name` varchar(225) NOT NULL,
  `room_no` int(11) NOT NULL,
  `course` varchar(225) NOT NULL,
  `std_img` varchar(225) NOT NULL,
  `warden_sign` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `idcard`
--

INSERT INTO `idcard` (`enroll_no`, `name`, `father_name`, `room_no`, `course`, `std_img`, `warden_sign`) VALUES
('2201151005', 'Aditya Kumar', 'Sameer singh', 2, 'MCA', '../upload_img/aditya.jpg', '../upload_document_pdf/warden_sign.png');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link_title` varchar(255) NOT NULL,
  `file` varchar(400) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `description`, `link_title`, `file`, `post_date`) VALUES
(1, 'List of provisionally eligible students for the Hostels', '         List of provisionally eligible students for the Hostels ', 'provisionally eligible students for GGBH', '../document/GGBH-HostelAdmList-July23.pdf', '2024-11-15'),
(5, 'GGBH Hostel New Student allotement list 2024', 'List of provisionally eligible students for the Hostels', 'Here to Download list ', '../document/GGBH-HostelAdmList-July23.pdf', '2024-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `id` int(11) NOT NULL,
  `enrollment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `semester` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `physical_disable` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `student_type` varchar(20) NOT NULL,
  `pay_year` varchar(200) NOT NULL,
  `pay_date` date NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`id`, `enrollment`, `name`, `fname`, `course_type`, `course_name`, `dob`, `semester`, `gender`, `category`, `mobile`, `physical_disable`, `email`, `address`, `city`, `state`, `zipcode`, `amount`, `student_type`, `pay_year`, `pay_date`, `transaction_id`, `payment_status`) VALUES
(15, '2201151010', 'Chandrabhan Parachhi', 'Mohan', 'UG', 'Bachelor in Computer Applications (BCA)', '2003-12-09', 6, 'Male', 'ST', '8305746836', 'NO', 'cparachhi@gmail.com', 'Igntu', 'Amarkantak', 'Madhya Pradesh', 484887, 5, 'OLD', '3rd Year', '2025-05-03', 'pay_QQbyqDQomC774G', 'complete'),
(23, '220151010', 'Chandrabhan', 'Mohan', 'UG', 'Bachelor in Computer Applications (BCA)', '2003-12-09', 6, 'Male', 'ST', '8305746836', 'NO', 'cparachhi@gmail.com', 'igntu', 'amarkantak', 'Madhya Pradesh', 484886, 5, 'NEW', '3rd Year', '2025-05-05', 'pay_QRJzXH2Zmqz26U', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `pgregistration`
--

CREATE TABLE `pgregistration` (
  `registration_no` bigint(15) NOT NULL,
  `cuet_no` varchar(255) NOT NULL,
  `std_img` varchar(400) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `program_type` varchar(225) NOT NULL,
  `course` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `aadhar_pdf` varchar(255) NOT NULL,
  `apply_date` date NOT NULL,
  `hostel_status` varchar(225) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pgregistration`
--

INSERT INTO `pgregistration` (`registration_no`, `cuet_no`, `std_img`, `sname`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `category`, `religion`, `program_type`, `course`, `phone_no`, `email_id`, `address`, `state`, `distance`, `aadhar_pdf`, `apply_date`, `hostel_status`) VALUES
(88574547414, '234234', '77426user-profile.png', 'ram', 'sdfs', 'sdfsdf', '2025-05-19', 'male', 'ST', 'Hindu', 'PG', 'M.A./M.Sc. Mathematics ', '34324234', 'sparachhi@gmail.com', 'sfsdf', 'Maharashtra', '433', '21808Dummy Aadhar Card.pdf', '2025-05-01', 'Yes'),
(88574547415, '22012364312', '96594sagar soy.jpg', 'Sagar', 'mohan', 'meera', '2001-12-09', 'male', 'SC', 'Hindu', 'PG', 'MCA Computer Science ', '7746323212', 'sagar@gmail.com', 'Igntu', 'Madhya Pradesh', '800', '46158Dummy Aadhar Card.pdf', '2025-05-02', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_no` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `allot_seat` int(11) NOT NULL,
  `empty_seat` int(11) NOT NULL,
  `allot_status` varchar(255) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `floor`, `seater`, `allot_seat`, `empty_seat`, `allot_status`) VALUES
(1, 1, 4, 0, 4, 'No'),
(2, 1, 4, 1, 3, 'Yes'),
(3, 1, 4, 1, 4, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `room_no` int(11) NOT NULL,
  `stay_from` date NOT NULL,
  `duration` varchar(225) NOT NULL,
  `std_img` varchar(400) NOT NULL,
  `program_type` varchar(225) NOT NULL,
  `course` varchar(225) NOT NULL,
  `semester` int(11) NOT NULL,
  `registration_no` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `mname` varchar(225) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(225) NOT NULL,
  `religion` varchar(225) NOT NULL,
  `blood_group` varchar(225) NOT NULL,
  `physical_disable` varchar(10) NOT NULL,
  `contact_no` varchar(225) NOT NULL,
  `email_id` varchar(225) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `emergency_no` varchar(225) NOT NULL,
  `guardian_name` varchar(225) NOT NULL,
  `guardian_relation` varchar(225) NOT NULL,
  `guardian_contact_no` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `pincode` varchar(225) NOT NULL,
  `distance` int(11) NOT NULL,
  `document` varchar(400) NOT NULL,
  `enrollment` varchar(225) NOT NULL DEFAULT 'Not Issued',
  `abc_id` varchar(255) NOT NULL DEFAULT 'Not Issued',
  `admission_no` varchar(255) NOT NULL DEFAULT 'Not Issued'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`room_no`, `stay_from`, `duration`, `std_img`, `program_type`, `course`, `semester`, `registration_no`, `name`, `fname`, `mname`, `dob`, `category`, `religion`, `blood_group`, `physical_disable`, `contact_no`, `email_id`, `aadhar_no`, `emergency_no`, `guardian_name`, `guardian_relation`, `guardian_contact_no`, `address`, `city`, `state`, `pincode`, `distance`, `document`, `enrollment`, `abc_id`, `admission_no`) VALUES
(2, '2025-05-01', '2', '../upload_img/user-profile.png', 'UG', 'Bachelor in Business Administration (BBA)', 3, '88452382209 ', 'Mohan', 'Ramesh', 'xyz  ', '2025-05-30', 'ST', 'Hindu', 'B+', 'NO', '76564646543', 'cparachhi@gmail.com', '234234', '34234234', 'fsdfsdf', 'Father', '34242', '               adsad', 'sfsd               ', 'Mizoram', '23423', 500, '98471Dummy Aadhar Card.pdf', '2201151010', 'Not Issued', 'Not Issued'),
(0, '0000-00-00', '', '44081sagar.jpg  ', 'UG ', 'STATISTICS-DISCIPLINARY MAJOR SUBJECTS (UG) ', 0, '88452382211 ', 'Sagar   ', 'Mathur ', 'maya  ', '2001-12-02', 'ST ', 'Hindu ', '', '', '8543454323 ', 'shivamthakur13092003@gmail.com ', '', '', '', '', '', 'jharkhand ', '', 'Jharkhand ', '', 800, '19094Dummy Aadhar Card.pdf', 'Not Issued', 'Not Issued', 'Not Issued'),
(3, '2025-05-01', '2', '../upload_img/Admin-Profile.png', 'PG', 'MCA Computer Science', 2, '88574547414 ', 'Aditya Kumar', 'sfsdf', 'sdfsdf  ', '2025-05-27', 'General', 'Hindu', 'B+', 'NO', '236423846', 'sparachhi@gmail.com', '32324234', '23234', 'sdfsdf', 'Mother', '32432', ' igntu', 'amarkantak', 'Maharashtra', '3424', 231, '21808Dummy Aadhar Card.pdf', '2201151005', 'Not Issued', 'Not Issued');

-- --------------------------------------------------------

--
-- Table structure for table `ugregistration`
--

CREATE TABLE `ugregistration` (
  `registration_no` bigint(11) NOT NULL,
  `cuet_no` varchar(255) NOT NULL,
  `std_img` varchar(400) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `program_type` varchar(225) NOT NULL DEFAULT 'UG',
  `course` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `aadhar_pdf` varchar(255) NOT NULL,
  `apply_date` date NOT NULL,
  `hostel_status` varchar(255) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ugregistration`
--

INSERT INTO `ugregistration` (`registration_no`, `cuet_no`, `std_img`, `sname`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `category`, `religion`, `program_type`, `course`, `phone_no`, `email_id`, `address`, `state`, `distance`, `aadhar_pdf`, `apply_date`, `hostel_status`) VALUES
(88452382209, '2201151001', '11659user-profile.png', 'Mohan', 'abc', 'xyz', '2001-12-09', 'male', 'General', 'Hindu', 'UG', 'Bachelor in Computer Applications (BCA)', '8877654323', 'cparachhi@gmail.com', 'Narmadapuram ', 'Madhya Pradesh', '600', '98471Dummy Aadhar Card.pdf', '2025-05-01', 'Yes'),
(88452382210, '2201151005', '54329avinash_11zon.jpg', 'Avinash ', 'krishnakant', 'Radha', '2025-07-04', 'male', 'ST', 'Hindu', 'UG', 'Mathematics-Disciplinary Major Subjects (UG)', '9876431234', 'anupam@gmail.com', 'Igntu', 'Madhya Pradesh', '700', '23520Dummy Aadhar Card.pdf', '2025-05-02', 'No'),
(88452382211, '2201151025', '44081sagar.jpg', 'Sagar ', 'Mathur', 'maya', '2001-12-02', 'male', 'ST', 'Hindu', 'UG', 'STATISTICS-DISCIPLINARY MAJOR SUBJECTS (UG)', '8543454323', 'shivamthakur13092003@gmail.com', 'jharkhand', 'Jharkhand', '800', '19094Dummy Aadhar Card.pdf', '2025-05-05', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user_cred`
--

CREATE TABLE `user_cred` (
  `sr_no` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_otp` int(20) NOT NULL,
  `verify_token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cred`
--

INSERT INTO `user_cred` (`sr_no`, `sname`, `user_name`, `user_pass`, `user_email`, `user_otp`, `verify_token`) VALUES
(9, 'Mohan', 'mohan@123', '12345', 'cparachhi@gmail.com', 0, ''),
(11, 'Aditya Kumar', 'ram@123', '1233', 'sparachhi@gmail.com', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complainthistory`
--
ALTER TABLE `complainthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `hostel_warden`
--
ALTER TABLE `hostel_warden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idcard`
--
ALTER TABLE `idcard`
  ADD PRIMARY KEY (`enroll_no`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgregistration`
--
ALTER TABLE `pgregistration`
  ADD PRIMARY KEY (`registration_no`),
  ADD UNIQUE KEY `cuet_no` (`cuet_no`),
  ADD UNIQUE KEY `cuet_no_2` (`cuet_no`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `studentregistration`
--
ALTER TABLE `studentregistration`
  ADD PRIMARY KEY (`registration_no`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `ugregistration`
--
ALTER TABLE `ugregistration`
  ADD PRIMARY KEY (`registration_no`),
  ADD UNIQUE KEY `cuet_no` (`cuet_no`);

--
-- Indexes for table `user_cred`
--
ALTER TABLE `user_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `complainthistory`
--
ALTER TABLE `complainthistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `hostel_warden`
--
ALTER TABLE `hostel_warden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pgregistration`
--
ALTER TABLE `pgregistration`
  MODIFY `registration_no` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88574547416;

--
-- AUTO_INCREMENT for table `ugregistration`
--
ALTER TABLE `ugregistration`
  MODIFY `registration_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88452382212;

--
-- AUTO_INCREMENT for table `user_cred`
--
ALTER TABLE `user_cred`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
