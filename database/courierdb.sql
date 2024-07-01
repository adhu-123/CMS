-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 03:46 PM
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
-- Database: `courierdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`email`, `password`, `a_id`) VALUES
('admin1@gmail.com', '12345', 1),
('admin2@gmail.com', '12345', 2),
('admin@admin.com', '1234', 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pnumber` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `name`, `pnumber`) VALUES
(1, 'admin1@gmail.com', 'Admin1', 12345),
(2, 'admin2@gmail.com', 'Admin2', 12345),
(3, 'admin@admin.com', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `street`, `city`, `state`, `zip_code`, `country`, `contact`) VALUES
(38, '343', '2nd cross', 'Italy', 'Italy', '23243', 'Britian', '387483746237'),
(65, '344', 'Bapuji Nagar', 'Mumbai', 'Maharastra', '87656', 'India', '9856748785'),
(56, '465768', 'rathnagar', 'Culcatta', 'West Bengal', '987869', 'India', '080-86765456569'),
(45, '500', 'church Street', 'Bangalore', 'Karnataka', '87858', 'India', '080-7463747643'),
(67, '567776', 'park street', 'Bangalore', 'Karnataka', '878667', 'India', '9847584754'),
(12, '657', 'main road', 'washington', 'Washington', '342344', 'America', '456656345332');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `subject`, `msg`) VALUES
(1, 'love@gmail.com', 'delay', 'I have courier 2 weeks ago but its not delivered yet..'),


-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `c_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `semail` varchar(50) DEFAULT NULL,
  `remail` varchar(50) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `rname` varchar(50) DEFAULT NULL,
  `sphone` varchar(20) DEFAULT NULL,
  `rphone` varchar(20) DEFAULT NULL,
  `saddress` varchar(50) DEFAULT NULL,
  `raddress` varchar(50) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `billno` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`c_id`, `u_id`, `semail`, `remail`, `sname`, `rname`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`, `date`) VALUES
(17, 7, 'vasu@gmail.com', 'kruthika@123', 'vasantha', 'kruthika', '3214234423', '768767657656', 'tamil nadu', 'kodagu', 15, 15, 'natural-organic-spa-cosmetic-products-set-with-eucalyptus-leaves-top-view-herbal-skincare.jpg', '2024-04-12'),


-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `name` varchar(20) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `date_of_birth` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `parents` varchar(50) NOT NULL,
  `married` varchar(30) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `nationality` varchar(10) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`name`, `emp_id`, `date_of_birth`, `address`, `parents`, `married`, `about`, `profession`, `experience`, `nationality`, `qualification`) VALUES
('Sarah Smith', 'CRP001', '15-05-1990', ' 123 Main Street, Culcatta, West Bengal', 'father is John and  mother is Disha Smith', 'married', ' Sarah has been working in customer service roles for over 5 years, with specific experience in the logistics and transportation industry. She has a strong track record of providing excellent customer support and problem-solving skills.\r\nA customer representative in a courier service plays a crucial role in ensuring customer satisfaction and smooth operations. Here\'s an explanation of their role:\r\n\r\nCustomer Support: Customer representatives serve as the primary point of contact for customers who have inquiries, issues, or requests related to courier services. They handle various forms of communication, including phone calls, emails, and live chats, providing assistance promptly and professionally.\r\nInformation Provision: They are responsible for providing accurate information to customers regarding shipment tracking, delivery schedules, shipping rates, and any other relevant details. This requires a good understanding of the company\'s services, policies, and procedures.\r\nProblem Resol', 'Customer Representative', '5 years of experience', 'American', 'Sarah holds a Bachelor\'s degree in Business Admini'),
('Sophia Patel', 'DDP090', '25-11-1987', '789 Elm Street, Metroville, Gujrath', 'father is  Rajesh Patel and mother is Kruthi Patel', 'married', 'Sophia has accumulated over 8 years of experience in operations management within the technology sector. She started her career as a software developer at a startup company specializing in mobile applications. Her strong leadership skills and passion for innovation quickly propelled her into management roles.\r\n\r\nShe transitioned into operations management at InnovateTech Solutions, a leading software development firm, where she currently serves as the Operational Manager for the Development Department. In this role, Sophia is responsible for overseeing the day-to-day operations of the development team, ensuring projects are delivered on time and within budget.\r\n\r\nSophia\'s experience in software development gives her a unique perspective on operational challenges within the development department. She excels at identifying opportunities for process improvement and implementing strategies to enhance efficiency and productivity.\r\n\r\nIn addition to her technical expertise, Sophia is also sk', ' Development Department at InnovateTech Solutions', '8 Years of experience', 'Canadian', 'Bachelor\'s Degree in Computer Science from Univers'),
('Madhuri L ', 'LDM200', '2004-09-13', 'Bangalore in Karnataka', 'Father is Lokesh and Mother is Komala', 'Unmarried', ' Priya has over 10 years of experience in the logistics and supply chain industry. She started her career as a logistics coordinator and steadily progressed through various roles, including warehouse manager and transportation supervisor, before becoming a department manager. Her expertise lies in optimizing logistics operations, managing inventory, coordinating shipments, and ensuring timely deliveries.\r\nStrategic Planning: A logistic department manager is responsible for developing and implementing strategic plans to optimize logistics operations. This involves setting objectives, defining key performance indicators (KPIs), and devising strategies to improve efficiency, reduce costs, and enhance overall performance.\r\nTeam Management: They oversee and manage a team of logistics professionals, including warehouse supervisors, transportation coordinators, and logistics coordinators. This includes assigning tasks, providing guidance and support, conducting performance evaluations, and fo', 'Logistic Department Manager', '2 years of experience', 'Indian', 'Bcom,MBA'),
('Rahul Shetty', 'MD6050', '05-12-2001', '789 Rosewood Avenue, Bangalore, Karnataka, India', 'father is Anit Shetty and mother is Sunitha Shetty', 'unmarried', ' Rahul has over 8 years of experience in marketing and brand management, with a focus on the logistics and transportation industry. He has held various roles in marketing, including marketing coordinator, brand manager, and marketing strategist, before assuming the position of marketing department manager. Rahul has a proven track record of developing and implementing successful marketing campaigns, driving brand awareness, and generating leads and sales.', 'Senior Manager for Marketing Department ', '3 years of experience', 'Indian', ' Rahul holds a Master\'s degree in Marketing Manage'),
('Alankarkita', 'OP2001', '15-05-1985', '123 Oak Street, Springfield, USA', 'Father: David Johnson Mother: Rebecca Johnson', 'married', 'Emily has over 10 years of experience in operations management. She began her career as a junior operations analyst at Tech Solutions Inc., where she quickly rose through the ranks due to her exceptional organizational skills and strategic thinking. After five years, she transitioned to a larger firm, Global Enterprises, where she served as a senior operations manager, overseeing a team of 50 employees and implementing process improvements that resulted in a 20% increase in efficiency within the first year.\r\n\r\nEmily\'s expertise lies in streamlining operations, optimizing supply chain logistics, and implementing quality management systems. She is known for her ability to identify bottlenecks in processes and develop innovative solutions to improve productivity and reduce costs.\r\n\r\nIn addition to her professional achievements, Emily is also actively involved in her community, volunteering with local charities and mentoring young professionals aspiring to enter the field of operations man', 'Operational Manager at Acme Technologies Inc.', '10 Years of experience', ':American', 'Bachelor\'s Degree in Business Administration from '),
('Srinivas V', 'PD1001', '1999-10-03', 'Pune in Maharastra', 'Father is Krishnappa and Mother is Mamatha', 'married', ' A product manager is the person who identifies the customer need and the larger business objectives that a product or feature will fulfill, articulates what success looks like for a product, and rallies a team to turn that vision into a reality. After 10 years of studying the craft of product management, I’ve developed a deep understanding of what it means to be a product manager.</div>\r\n    Product manager responsibilities\r\nSpecific responsibilities vary depending on the size of the organization. In larger organizations, for instance, product managers are embedded within teams of specialists. Researchers, analysts, and marketers help gather input, while developers and designers manage the day-to-day execution, draw up designs, test prototypes, and find bugs. These product managers have more help, but they also spend more time aligning these stakeholders behind a specific vision.\r\n\r\nOn the flip side, product managers at smaller organizations spend less time getting everyone to agree, ', 'Senior Product Manager', '8 Years of Experience', 'Hindu', 'Bcom, MBA, Bachelors degree in marketing and finan'),
('Dhanush', 'SM3020', '09-10-2003', 'Mariyappanapalya, Bangalore city, Karnataka', 'father is Krishna and Mother is radha', 'unmarried', 'Dhanush was working has sales manager from 5 years and he is hardworking person.\r\nA sales manager is responsible for guiding a team of sales associates to achieve targets set by an organisation. In addition to increasing sales, these managers also oversee sales plans, analyse data to help with strategic decision-making and train members of their team. If you are interested in this job role, it may be beneficial to understand what the job entails, the skills required and the qualifications to pursue.', 'Sales Manager', '5 years of experience', 'Hindu', 'Bcom, MBA, Bachelors degree in marketing and finan'),
('Priya Sharma', 'SUP400', '12-08-1985', '321 Lotus Lane, Mumbai, India', 'father is  Kumar Sharma and mother is Manjula Shar', 'married', 'Priya has over 12 years of experience in operations management, with a focus on supervisory roles. She began her career as a management trainee at a logistics company, where she quickly demonstrated her leadership abilities and was promoted to a supervisory position within two years.\r\n\r\nShe then transitioned to Global Solutions Ltd., a multinational corporation, where she currently serves as an Operational Manager supervising a team of 20 employees. In this role, Priya is responsible for overseeing daily operations, managing workflow, and ensuring that team members meet performance targets and adhere to company policies and procedures.\r\n\r\nPriya\'s extensive experience in operations management has equipped her with a deep understanding of process optimization, resource allocation, and performance management. She is skilled at identifying areas for improvement and implementing strategies to enhance efficiency and productivity.\r\nIn addition to her professional qualifications, Priya is also', 'Operational Manager - Supervisor at TechSavvy Solu', '12 Years of experience', 'Indian', 'Bachelor\'s Degree in Engineering (Computer Science'),
('Sanjay', 'TM2010', '1999-04-03', 'Gollarahatti , Bangalore North, Karnataka 560091', 'father is Lohith and Mother is Yamuna', 'Unmarried', 'A technical manager, as the name suggests, has to do the balancing act of managing technical processes and teams along with using his technical skills to provide the necessary environment for project success. The job of a technical manager is highly complex and requires efficiency in both technical as well as management fields. Organizations have several kinds of managerial roles across departments like human resource, finance, operations, procurement, logistics, design etc.', 'Technical Manager', '3 years of experience', 'Hindu', 'Bca, Mca, Engeeniering');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `u_id`) VALUES
('vasu@gmail.com', 'vasu', 7),


-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(10) NOT NULL,
  `reference_number` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_address` varchar(100) NOT NULL,
  `sender_contact` varchar(50) NOT NULL,
  `recipient_name` varchar(50) NOT NULL,
  `recipient_address` varchar(100) NOT NULL,
  `recipient_contact` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `from_branch_id` int(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `reference_number`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `status`, `from_branch_id`, `weight`, `price`, `date_created`) VALUES
(1, '15', 'vasantha', 'tamil nadu', '3214234423', 'kruthika', 'kodagu', '768767657656', 1, 355, '15', '500', '2024-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `s_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`s_id`, `email`, `password`) VALUES
(1, 'staff@staff.com', 'staff123');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(10) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `emailid`, `phonenumber`, `city`, `state`, `country`) VALUES
(1, 'Sri', 'sri@gmail.com', '3764734572', 'Bangalore', 'Karnataka', 'India'),


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pnumber` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `email`, `name`, `pnumber`) VALUES
(7, 'vasantha@gmail.com', 'vasantha', 2147483647),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_code`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `billno` (`billno`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD CONSTRAINT `adlogin_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

--
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `courier_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
