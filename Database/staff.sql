-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 07:16 AM
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
-- Database: `staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `al_staff_info`
--

CREATE TABLE `al_staff_info` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `sumary` text DEFAULT NULL,
  `education_background` text DEFAULT NULL,
  `spacial_skill` text DEFAULT NULL,
  `award` text DEFAULT NULL,
  `work_experiences` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `al_staff_info`
--

INSERT INTO `al_staff_info` (`id`, `img`, `name`, `skill`, `email`, `phone_number`, `sumary`, `education_background`, `spacial_skill`, `award`, `work_experiences`) VALUES
(11, '1707724078.jpg', 'តុង វុទ្ធា', 'Computer Science', 'vuthea@ksit.edu.kh', ' (+855) 086609087', 'I have been working for Kampong Speu Institute of Technology (KSIT) as a Teacher of Business Computer. I have some duties as follows:\r\n\r\n ⬩  Teaching on Computer field such as: Computer for career, Computer Installation, Computer Network, Local Wireless Network, Basic of Computer programming and Website.\r\n ⬩  Monitoring Network Systems and Internet.\r\n ⬩  Advisor of students’ projects in the Business Computer Department.\r\n ⬩  Administrator Digital E-Learning platform based on Moodle application', ' ⬩  2012-2016: Bachelor’ s Degree of Computer Science, Sisaket Rajabhat University, Thailand\r\n ⬩  2010-2012: Associate’ s Degree of Computer Technology, Sisaket Technical College, Thailand\r\n ⬩  2007-2010: Diploma of Electronics, Sisaket Technical College, Thailand\r\n ⬩  2006-2007: Secondary School, Kampong Chheuteal high school, Cambodia', ' ⬩  Microsoft office Application\r\n ⬩  Adobe Photoshop\r\n ⬩  Install network system and administration\r\n ⬩  Install CCTV, Computer software application and Hardware\r\n ⬩  Basic Computer programming and Web development\r\n ⬩  Internet of Things (IoTs, Smart Home, Smart Farm)', '', ' ⬩  27-28 May 2021: Seminar on Development of Instructional Design for Creating Young Innovators Using Double after Training Action Method by Chulalongkorn University of Thailand.\r\n ⬩  19 May 2021 : Seminar on E-Certificate Management System conducted by SEAMEO CECCEP & SEAMEO TED, Phnom Penh.\r\n ⬩  09 June 2021 : Instructor of Digital video production with Camtasia application training, Kampong Speu Institute of Technology.\r\n ⬩  June-September 2020 : Attendant as a trainer on Digital Online E-Learning (Google G-Suite, Google classroom) for High Schools of Ministry of Education Youth and Sport, Cambodia.\r\n ⬩  September 20th, 2018 : Seminar on Developing Associate and Bachelor’s Curricula, Phnom Penh, Cambodia.\r\n ⬩  2018 : Training of PLC (Professional Learning Community), Kampong Speu Institute of Technology(KSIT), Cambodia.\r\n ⬩  9-21 October, 2017 : Training on Developing and preparing for the basic technical teacher project, at Thaluang Cementhaianuorn Technical College, Thailand.\r\n ⬩  June 13rd to July12nd 2017: Seminar on Vocational Education for Teachers of Developing Countries, Ningbo Polytechnic, China.\r\n ⬩  2016-2017: IT Technician at ATOM Computer co, LTD., Phnom Penh, Cambodia. Computer software installation and maintenance. Printer installation and maintenance. Bring products to customer. Stock products control.\r\n ⬩  2015-2016: Salesman at MIDA Assets Public Company Limited, Based in Sisaket, Thailand. Basic fixes and repairs. Contact with customers for sales. Billing and collecting payment from customers. Find out more customers in the villages for retail sales as required by the company. Test Machine for customers. Instruct customers on how to use Machine of refrigerator, washing machine, TV, and other electrical equipment.\r\n ⬩  2012-2015: General technician, At ABC computer and service Company limited, Based in Sisaket, Thailand. Look after tidiness in the Shop. Test and check network system before starting up repairing. Fix and repair Computer PC, Notebooks, and Printers Setup program on Computer PC and Notebooks. Record repair job history in Database system. Deliver products for other branches.'),
(12, '1707724086.jpg', 'កន យុគី', 'Information Technology', 'yukykorn@gmail.com', '(+855) 967144158', '• The Development of Research Projects System based on Database of Informatics Program , Nakhon Ratchasima Rajabhat University. \r\n• Clothes Selling Website Project, PHP Language, Nakhon Ratchasima Rajabhat University. \r\n• Customer Database Management Project, C# and MySql Language, Nakhon Ratchasima Rajabhat University.', '• 2014-2018: Graduated Bachelor Degree of Information Technology, Nakhon Ratchasima Rajabhat University, Thailand (GPAX:3.33).\r\n • 2010-2013: Graduated High School Diploma Degree from Kampong Chheuteal High School, Kampong Thom, Cambodia.\r\n • 2007-2010: Graduated from Kampong Chheuteal Primary School, Kampong Thom, Cambodia.', 'Technical\r\n • Software: MS Word, Excel, PowerPoint, Access, and Project; Adobe Photoshop, Flash, Premiere, Illustrator, and Dreamweaver, Navicat Premium.\r\n • Operating System: MS Windows 7/8 and Mac Os\r\n • Networking: Cisco Routers and Switches\r\n • Programming: C#, Java, CSS ,and PHPCSS Language\r\n • English: Good with reading, listening, speaking and writing • Thai: Good with reading, listening, speaking and writing\r\n • Khmer: mother tongue.', '', '• 2019 July 17th-02nd Febuary:Work in Association of Support and Provision for Cambodian People.\r\n • 2018 July 16th-31st January: Was employed by Hbi Manufacturin(Thailand) Ltd, Surin, Thailand.\r\n • 2018 January 8th-5th May: Internship ,Joho Provincial Police Station,Thailand.\r\n • 2017 February 23rd-26th : Joined IT-Genius Camp #7th,Ban Horng Fab primary School, Thailand.\r\n • 2017 January31st-3rd February: Korat International Arts and Culture Festival 2017 at Nakhon Ratchasima,Thailand.\r\n • 2016 March 4th-6th :Attended IT-Genius Camp #6th, Ban Lung Thakhean primary School, Thailand.\r\n • 2016 September 21st : Open House Camp, Nakhon Ratchasima Rajabhat University, Thailand.\r\n • 2016 September 15th: Joined the StartUp trained at Rajamangala University of Technology Isan, Thailand.\r\n • 2016 August 18th : Science Week,Nakhon Ratchasima Rajabhat University.\r\n • 2016 February 26th-28th :Tour Guide invited By Rajamangala University of Technology Isan, Thailand.\r\n • 2015 January 4th : Attended Asean 2015 The way of life at Rajamangala University of Technology Isan, Thailand.\r\n • 2014 to present: Won the Princess Makha Chakri Sirindhorn’s Scholarship to obtain Bachelor Degree in Thailand, Kampong Chheuteal High School.'),
(13, '1707724097.jpg', 'អុល យ៉េន', 'គណនេយ្យ​ និងហិរញ្ញវត្ថុ​', 'ollyen8@gmail.com', '(+855) 85273028', '២៧-២៨​ តុលា ៖ បណ្តុះបណ្តាលស្តីអំពីរបៀបនៃការផលិតវីដេអូឌីជីថលនៅវិទ្យាស្ថានបច្ចេកទេសកម្ពុជា', '២០១៦ - ២០១៨ ៖ បរីញ្ញាបត្រ ឯកទេស គណនេយ្យ Burapha University ប្រទេសថៃ​។\r\n២០១៤ - ២០១៦ ៖ បរិញ្ញាបត្រ ឯកទេស បច្ចេកវិទ្យាកុំព្យូទ័រ Burapha University ប្រទេសថៃ។\r\n ២០០៩ - ២០១២ ៖ កម្រិតវប្បធម៌ទូទៅ វិទ្យាល័យបុទុមសាគរ កោះកុង។', '', '', '២០១៨ - បច្ចុប្បន្ន ៖ គ្រូបង្រៀនឯកទេសគណនេយ្យ នៅវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឹ។\r\n២០១៥ - ២០១៦ ៖ បុគ្គលិកផ្នែកហិរញ្ញវត្ថុនៅ Harvest Centre ប្រទេសថៃ។\r\n២០១៣ - ២០១៤ ៖ បុគ្គលិកផ្នែកគណនេយ្យក្រុមហ៊ុន Heritage Hotel ប្រទេសថៃ។'),
(14, '1707724106.jpg', 'ណា ស្ទែនដា', 'Master of Computer Science', 'nastanda1995@gmail.com', ' (+855) 98324904', 'Soft Skills Managing your boss and time management, Think on your feet, Customer satisfaction, Profession ethics, Problem solving Technical Skills Agile Software Development, IONIC framework, Software testing, T-SQL, ASP.NET, C# MVC, AngularJs', 'Kasetsart University Master in Computer Science - 4.00 GPA (Current GPA) Aug 2020 – Present University of Phayao Bachelor in Information Technology - 3.80 GPA Jun 2012 - Dec 2015', 'Language and framework . Java Spring MVC . Spring Boot, Hibernate . PHP Laravel . Dart Flutter . Node.js . VB, C# .NET . Python, R, C . Javascript, JQuery, AngularJs . CSS Bootstrap Database MySQL, Oracle, Maria DB, SQL Server Tools IntelliJ Idea, PhpStorm, DataGrip, Visual Studio, Android Studio, Netbeans, Eclipse, SVM, Git, Dimensions CM, Scrum JIRA, Trello, Docker', '2012-2015 Excellence academic student received grade A for 10 subjects in academic year 2013 and 2014 Championship of ACM-ICPC@UP Contest in year 2013 and 2014 2008-2011 1st rank in provincial Math competition for grade 12 2nd rank in provincial Math competition for grade 9', '');

-- --------------------------------------------------------

--
-- Table structure for table `com_staff_info`
--

CREATE TABLE `com_staff_info` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `sumary` text DEFAULT NULL,
  `education_background` text DEFAULT NULL,
  `spacial_skill` text DEFAULT NULL,
  `award` text DEFAULT NULL,
  `work_experiences` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `com_staff_info`
--

INSERT INTO `com_staff_info` (`id`, `img`, `name`, `skill`, `email`, `phone_number`, `sumary`, `education_background`, `spacial_skill`, `award`, `work_experiences`) VALUES
(11, '1707724078.jpg', 'តុង វុទ្ធា', 'Computer Science', 'vuthea@ksit.edu.kh', ' (+855) 086609087', 'I have been working for Kampong Speu Institute of Technology (KSIT) as a Teacher of Business Computer. I have some duties as follows:\r\n\r\n ⬩  Teaching on Computer field such as: Computer for career, Computer Installation, Computer Network, Local Wireless Network, Basic of Computer programming and Website.\r\n ⬩  Monitoring Network Systems and Internet.\r\n ⬩  Advisor of students’ projects in the Business Computer Department.\r\n ⬩  Administrator Digital E-Learning platform based on Moodle application', ' ⬩  2012-2016: Bachelor’ s Degree of Computer Science, Sisaket Rajabhat University, Thailand\r\n ⬩  2010-2012: Associate’ s Degree of Computer Technology, Sisaket Technical College, Thailand\r\n ⬩  2007-2010: Diploma of Electronics, Sisaket Technical College, Thailand\r\n ⬩  2006-2007: Secondary School, Kampong Chheuteal high school, Cambodia', ' ⬩  Microsoft office Application\r\n ⬩  Adobe Photoshop\r\n ⬩  Install network system and administration\r\n ⬩  Install CCTV, Computer software application and Hardware\r\n ⬩  Basic Computer programming and Web development\r\n ⬩  Internet of Things (IoTs, Smart Home, Smart Farm)', '', ' ⬩  27-28 May 2021: Seminar on Development of Instructional Design for Creating Young Innovators Using Double after Training Action Method by Chulalongkorn University of Thailand.\r\n ⬩  19 May 2021 : Seminar on E-Certificate Management System conducted by SEAMEO CECCEP & SEAMEO TED, Phnom Penh.\r\n ⬩  09 June 2021 : Instructor of Digital video production with Camtasia application training, Kampong Speu Institute of Technology.\r\n ⬩  June-September 2020 : Attendant as a trainer on Digital Online E-Learning (Google G-Suite, Google classroom) for High Schools of Ministry of Education Youth and Sport, Cambodia.\r\n ⬩  September 20th, 2018 : Seminar on Developing Associate and Bachelor’s Curricula, Phnom Penh, Cambodia.\r\n ⬩  2018 : Training of PLC (Professional Learning Community), Kampong Speu Institute of Technology(KSIT), Cambodia.\r\n ⬩  9-21 October, 2017 : Training on Developing and preparing for the basic technical teacher project, at Thaluang Cementhaianuorn Technical College, Thailand.\r\n ⬩  June 13rd to July12nd 2017: Seminar on Vocational Education for Teachers of Developing Countries, Ningbo Polytechnic, China.\r\n ⬩  2016-2017: IT Technician at ATOM Computer co, LTD., Phnom Penh, Cambodia. Computer software installation and maintenance. Printer installation and maintenance. Bring products to customer. Stock products control.\r\n ⬩  2015-2016: Salesman at MIDA Assets Public Company Limited, Based in Sisaket, Thailand. Basic fixes and repairs. Contact with customers for sales. Billing and collecting payment from customers. Find out more customers in the villages for retail sales as required by the company. Test Machine for customers. Instruct customers on how to use Machine of refrigerator, washing machine, TV, and other electrical equipment.\r\n ⬩  2012-2015: General technician, At ABC computer and service Company limited, Based in Sisaket, Thailand. Look after tidiness in the Shop. Test and check network system before starting up repairing. Fix and repair Computer PC, Notebooks, and Printers Setup program on Computer PC and Notebooks. Record repair job history in Database system. Deliver products for other branches.'),
(12, '1707724086.jpg', 'កន យុគី', 'Information Technology', 'yukykorn@gmail.com', '(+855) 967144158', '• The Development of Research Projects System based on Database of Informatics Program , Nakhon Ratchasima Rajabhat University. \r\n• Clothes Selling Website Project, PHP Language, Nakhon Ratchasima Rajabhat University. \r\n• Customer Database Management Project, C# and MySql Language, Nakhon Ratchasima Rajabhat University.', '• 2014-2018: Graduated Bachelor Degree of Information Technology, Nakhon Ratchasima Rajabhat University, Thailand (GPAX:3.33).\r\n • 2010-2013: Graduated High School Diploma Degree from Kampong Chheuteal High School, Kampong Thom, Cambodia.\r\n • 2007-2010: Graduated from Kampong Chheuteal Primary School, Kampong Thom, Cambodia.', 'Technical\r\n • Software: MS Word, Excel, PowerPoint, Access, and Project; Adobe Photoshop, Flash, Premiere, Illustrator, and Dreamweaver, Navicat Premium.\r\n • Operating System: MS Windows 7/8 and Mac Os\r\n • Networking: Cisco Routers and Switches\r\n • Programming: C#, Java, CSS ,and PHPCSS Language\r\n • English: Good with reading, listening, speaking and writing • Thai: Good with reading, listening, speaking and writing\r\n • Khmer: mother tongue.', '', '• 2019 July 17th-02nd Febuary:Work in Association of Support and Provision for Cambodian People.\r\n • 2018 July 16th-31st January: Was employed by Hbi Manufacturin(Thailand) Ltd, Surin, Thailand.\r\n • 2018 January 8th-5th May: Internship ,Joho Provincial Police Station,Thailand.\r\n • 2017 February 23rd-26th : Joined IT-Genius Camp #7th,Ban Horng Fab primary School, Thailand.\r\n • 2017 January31st-3rd February: Korat International Arts and Culture Festival 2017 at Nakhon Ratchasima,Thailand.\r\n • 2016 March 4th-6th :Attended IT-Genius Camp #6th, Ban Lung Thakhean primary School, Thailand.\r\n • 2016 September 21st : Open House Camp, Nakhon Ratchasima Rajabhat University, Thailand.\r\n • 2016 September 15th: Joined the StartUp trained at Rajamangala University of Technology Isan, Thailand.\r\n • 2016 August 18th : Science Week,Nakhon Ratchasima Rajabhat University.\r\n • 2016 February 26th-28th :Tour Guide invited By Rajamangala University of Technology Isan, Thailand.\r\n • 2015 January 4th : Attended Asean 2015 The way of life at Rajamangala University of Technology Isan, Thailand.\r\n • 2014 to present: Won the Princess Makha Chakri Sirindhorn’s Scholarship to obtain Bachelor Degree in Thailand, Kampong Chheuteal High School.'),
(13, '1707724097.jpg', 'អុល យ៉េន', 'គណនេយ្យ​ និងហិរញ្ញវត្ថុ​', 'ollyen8@gmail.com', '(+855) 85273028', '២៧-២៨​ តុលា ៖ បណ្តុះបណ្តាលស្តីអំពីរបៀបនៃការផលិតវីដេអូឌីជីថលនៅវិទ្យាស្ថានបច្ចេកទេសកម្ពុជា', '២០១៦ - ២០១៨ ៖ បរីញ្ញាបត្រ ឯកទេស គណនេយ្យ Burapha University ប្រទេសថៃ​។\r\n២០១៤ - ២០១៦ ៖ បរិញ្ញាបត្រ ឯកទេស បច្ចេកវិទ្យាកុំព្យូទ័រ Burapha University ប្រទេសថៃ។\r\n ២០០៩ - ២០១២ ៖ កម្រិតវប្បធម៌ទូទៅ វិទ្យាល័យបុទុមសាគរ កោះកុង។', '', '', '២០១៨ - បច្ចុប្បន្ន ៖ គ្រូបង្រៀនឯកទេសគណនេយ្យ នៅវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឹ។\r\n២០១៥ - ២០១៦ ៖ បុគ្គលិកផ្នែកហិរញ្ញវត្ថុនៅ Harvest Centre ប្រទេសថៃ។\r\n២០១៣ - ២០១៤ ៖ បុគ្គលិកផ្នែកគណនេយ្យក្រុមហ៊ុន Heritage Hotel ប្រទេសថៃ។'),
(14, '1707724106.jpg', 'ណា ស្ទែនដា', 'Master of Computer Science', 'nastanda1995@gmail.com', ' (+855) 98324904', 'Soft Skills Managing your boss and time management, Think on your feet, Customer satisfaction, Profession ethics, Problem solving Technical Skills Agile Software Development, IONIC framework, Software testing, T-SQL, ASP.NET, C# MVC, AngularJs', 'Kasetsart University Master in Computer Science - 4.00 GPA (Current GPA) Aug 2020 – Present University of Phayao Bachelor in Information Technology - 3.80 GPA Jun 2012 - Dec 2015', 'Language and framework . Java Spring MVC . Spring Boot, Hibernate . PHP Laravel . Dart Flutter . Node.js . VB, C# .NET . Python, R, C . Javascript, JQuery, AngularJs . CSS Bootstrap Database MySQL, Oracle, Maria DB, SQL Server Tools IntelliJ Idea, PhpStorm, DataGrip, Visual Studio, Android Studio, Netbeans, Eclipse, SVM, Git, Dimensions CM, Scrum JIRA, Trello, Docker', '2012-2015 Excellence academic student received grade A for 10 subjects in academic year 2013 and 2014 Championship of ACM-ICPC@UP Contest in year 2013 and 2014 2008-2011 1st rank in provincial Math competition for grade 12 2nd rank in provincial Math competition for grade 9', '');

-- --------------------------------------------------------

--
-- Table structure for table `el_staff_info`
--

CREATE TABLE `el_staff_info` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `sumary` text DEFAULT NULL,
  `education_background` text DEFAULT NULL,
  `spacial_skill` text DEFAULT NULL,
  `award` text DEFAULT NULL,
  `work_experiences` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `el_staff_info`
--

INSERT INTO `el_staff_info` (`id`, `img`, `name`, `skill`, `email`, `phone_number`, `sumary`, `education_background`, `spacial_skill`, `award`, `work_experiences`) VALUES
(11, '1707724078.jpg', 'តុង វុទ្ធា', 'Computer Science', 'vuthea@ksit.edu.kh', ' (+855) 086609087', 'I have been working for Kampong Speu Institute of Technology (KSIT) as a Teacher of Business Computer. I have some duties as follows:\r\n\r\n ⬩  Teaching on Computer field such as: Computer for career, Computer Installation, Computer Network, Local Wireless Network, Basic of Computer programming and Website.\r\n ⬩  Monitoring Network Systems and Internet.\r\n ⬩  Advisor of students’ projects in the Business Computer Department.\r\n ⬩  Administrator Digital E-Learning platform based on Moodle application', ' ⬩  2012-2016: Bachelor’ s Degree of Computer Science, Sisaket Rajabhat University, Thailand\r\n ⬩  2010-2012: Associate’ s Degree of Computer Technology, Sisaket Technical College, Thailand\r\n ⬩  2007-2010: Diploma of Electronics, Sisaket Technical College, Thailand\r\n ⬩  2006-2007: Secondary School, Kampong Chheuteal high school, Cambodia', ' ⬩  Microsoft office Application\r\n ⬩  Adobe Photoshop\r\n ⬩  Install network system and administration\r\n ⬩  Install CCTV, Computer software application and Hardware\r\n ⬩  Basic Computer programming and Web development\r\n ⬩  Internet of Things (IoTs, Smart Home, Smart Farm)', '', ' ⬩  27-28 May 2021: Seminar on Development of Instructional Design for Creating Young Innovators Using Double after Training Action Method by Chulalongkorn University of Thailand.\r\n ⬩  19 May 2021 : Seminar on E-Certificate Management System conducted by SEAMEO CECCEP & SEAMEO TED, Phnom Penh.\r\n ⬩  09 June 2021 : Instructor of Digital video production with Camtasia application training, Kampong Speu Institute of Technology.\r\n ⬩  June-September 2020 : Attendant as a trainer on Digital Online E-Learning (Google G-Suite, Google classroom) for High Schools of Ministry of Education Youth and Sport, Cambodia.\r\n ⬩  September 20th, 2018 : Seminar on Developing Associate and Bachelor’s Curricula, Phnom Penh, Cambodia.\r\n ⬩  2018 : Training of PLC (Professional Learning Community), Kampong Speu Institute of Technology(KSIT), Cambodia.\r\n ⬩  9-21 October, 2017 : Training on Developing and preparing for the basic technical teacher project, at Thaluang Cementhaianuorn Technical College, Thailand.\r\n ⬩  June 13rd to July12nd 2017: Seminar on Vocational Education for Teachers of Developing Countries, Ningbo Polytechnic, China.\r\n ⬩  2016-2017: IT Technician at ATOM Computer co, LTD., Phnom Penh, Cambodia. Computer software installation and maintenance. Printer installation and maintenance. Bring products to customer. Stock products control.\r\n ⬩  2015-2016: Salesman at MIDA Assets Public Company Limited, Based in Sisaket, Thailand. Basic fixes and repairs. Contact with customers for sales. Billing and collecting payment from customers. Find out more customers in the villages for retail sales as required by the company. Test Machine for customers. Instruct customers on how to use Machine of refrigerator, washing machine, TV, and other electrical equipment.\r\n ⬩  2012-2015: General technician, At ABC computer and service Company limited, Based in Sisaket, Thailand. Look after tidiness in the Shop. Test and check network system before starting up repairing. Fix and repair Computer PC, Notebooks, and Printers Setup program on Computer PC and Notebooks. Record repair job history in Database system. Deliver products for other branches.'),
(12, '1707724086.jpg', 'កន យុគី', 'Information Technology', 'yukykorn@gmail.com', '(+855) 967144158', '• The Development of Research Projects System based on Database of Informatics Program , Nakhon Ratchasima Rajabhat University. \r\n• Clothes Selling Website Project, PHP Language, Nakhon Ratchasima Rajabhat University. \r\n• Customer Database Management Project, C# and MySql Language, Nakhon Ratchasima Rajabhat University.', '• 2014-2018: Graduated Bachelor Degree of Information Technology, Nakhon Ratchasima Rajabhat University, Thailand (GPAX:3.33).\r\n • 2010-2013: Graduated High School Diploma Degree from Kampong Chheuteal High School, Kampong Thom, Cambodia.\r\n • 2007-2010: Graduated from Kampong Chheuteal Primary School, Kampong Thom, Cambodia.', 'Technical\r\n • Software: MS Word, Excel, PowerPoint, Access, and Project; Adobe Photoshop, Flash, Premiere, Illustrator, and Dreamweaver, Navicat Premium.\r\n • Operating System: MS Windows 7/8 and Mac Os\r\n • Networking: Cisco Routers and Switches\r\n • Programming: C#, Java, CSS ,and PHPCSS Language\r\n • English: Good with reading, listening, speaking and writing • Thai: Good with reading, listening, speaking and writing\r\n • Khmer: mother tongue.', '', '• 2019 July 17th-02nd Febuary:Work in Association of Support and Provision for Cambodian People.\r\n • 2018 July 16th-31st January: Was employed by Hbi Manufacturin(Thailand) Ltd, Surin, Thailand.\r\n • 2018 January 8th-5th May: Internship ,Joho Provincial Police Station,Thailand.\r\n • 2017 February 23rd-26th : Joined IT-Genius Camp #7th,Ban Horng Fab primary School, Thailand.\r\n • 2017 January31st-3rd February: Korat International Arts and Culture Festival 2017 at Nakhon Ratchasima,Thailand.\r\n • 2016 March 4th-6th :Attended IT-Genius Camp #6th, Ban Lung Thakhean primary School, Thailand.\r\n • 2016 September 21st : Open House Camp, Nakhon Ratchasima Rajabhat University, Thailand.\r\n • 2016 September 15th: Joined the StartUp trained at Rajamangala University of Technology Isan, Thailand.\r\n • 2016 August 18th : Science Week,Nakhon Ratchasima Rajabhat University.\r\n • 2016 February 26th-28th :Tour Guide invited By Rajamangala University of Technology Isan, Thailand.\r\n • 2015 January 4th : Attended Asean 2015 The way of life at Rajamangala University of Technology Isan, Thailand.\r\n • 2014 to present: Won the Princess Makha Chakri Sirindhorn’s Scholarship to obtain Bachelor Degree in Thailand, Kampong Chheuteal High School.'),
(13, '1707724097.jpg', 'អុល យ៉េន', 'គណនេយ្យ​ និងហិរញ្ញវត្ថុ​', 'ollyen8@gmail.com', '(+855) 85273028', '២៧-២៨​ តុលា ៖ បណ្តុះបណ្តាលស្តីអំពីរបៀបនៃការផលិតវីដេអូឌីជីថលនៅវិទ្យាស្ថានបច្ចេកទេសកម្ពុជា', '២០១៦ - ២០១៨ ៖ បរីញ្ញាបត្រ ឯកទេស គណនេយ្យ Burapha University ប្រទេសថៃ​។\r\n២០១៤ - ២០១៦ ៖ បរិញ្ញាបត្រ ឯកទេស បច្ចេកវិទ្យាកុំព្យូទ័រ Burapha University ប្រទេសថៃ។\r\n ២០០៩ - ២០១២ ៖ កម្រិតវប្បធម៌ទូទៅ វិទ្យាល័យបុទុមសាគរ កោះកុង។', '', '', '២០១៨ - បច្ចុប្បន្ន ៖ គ្រូបង្រៀនឯកទេសគណនេយ្យ នៅវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឹ។\r\n២០១៥ - ២០១៦ ៖ បុគ្គលិកផ្នែកហិរញ្ញវត្ថុនៅ Harvest Centre ប្រទេសថៃ។\r\n២០១៣ - ២០១៤ ៖ បុគ្គលិកផ្នែកគណនេយ្យក្រុមហ៊ុន Heritage Hotel ប្រទេសថៃ។'),
(14, '1707724106.jpg', 'ណា ស្ទែនដា', 'Master of Computer Science', 'nastanda1995@gmail.com', ' (+855) 98324904', 'Soft Skills Managing your boss and time management, Think on your feet, Customer satisfaction, Profession ethics, Problem solving Technical Skills Agile Software Development, IONIC framework, Software testing, T-SQL, ASP.NET, C# MVC, AngularJs', 'Kasetsart University Master in Computer Science - 4.00 GPA (Current GPA) Aug 2020 – Present University of Phayao Bachelor in Information Technology - 3.80 GPA Jun 2012 - Dec 2015', 'Language and framework . Java Spring MVC . Spring Boot, Hibernate . PHP Laravel . Dart Flutter . Node.js . VB, C# .NET . Python, R, C . Javascript, JQuery, AngularJs . CSS Bootstrap Database MySQL, Oracle, Maria DB, SQL Server Tools IntelliJ Idea, PhpStorm, DataGrip, Visual Studio, Android Studio, Netbeans, Eclipse, SVM, Git, Dimensions CM, Scrum JIRA, Trello, Docker', '2012-2015 Excellence academic student received grade A for 10 subjects in academic year 2013 and 2014 Championship of ACM-ICPC@UP Contest in year 2013 and 2014 2008-2011 1st rank in provincial Math competition for grade 12 2nd rank in provincial Math competition for grade 9', '');

-- --------------------------------------------------------

--
-- Table structure for table `food_staff_info`
--

CREATE TABLE `food_staff_info` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `sumary` text DEFAULT NULL,
  `education_background` text DEFAULT NULL,
  `spacial_skill` text DEFAULT NULL,
  `award` text DEFAULT NULL,
  `work_experiences` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_staff_info`
--

INSERT INTO `food_staff_info` (`id`, `img`, `name`, `skill`, `email`, `phone_number`, `sumary`, `education_background`, `spacial_skill`, `award`, `work_experiences`) VALUES
(11, '1707724078.jpg', 'តុង វុទ្ធា', 'Computer Science', 'vuthea@ksit.edu.kh', ' (+855) 086609087', 'I have been working for Kampong Speu Institute of Technology (KSIT) as a Teacher of Business Computer. I have some duties as follows:\r\n\r\n ⬩  Teaching on Computer field such as: Computer for career, Computer Installation, Computer Network, Local Wireless Network, Basic of Computer programming and Website.\r\n ⬩  Monitoring Network Systems and Internet.\r\n ⬩  Advisor of students’ projects in the Business Computer Department.\r\n ⬩  Administrator Digital E-Learning platform based on Moodle application', ' ⬩  2012-2016: Bachelor’ s Degree of Computer Science, Sisaket Rajabhat University, Thailand\r\n ⬩  2010-2012: Associate’ s Degree of Computer Technology, Sisaket Technical College, Thailand\r\n ⬩  2007-2010: Diploma of Electronics, Sisaket Technical College, Thailand\r\n ⬩  2006-2007: Secondary School, Kampong Chheuteal high school, Cambodia', ' ⬩  Microsoft office Application\r\n ⬩  Adobe Photoshop\r\n ⬩  Install network system and administration\r\n ⬩  Install CCTV, Computer software application and Hardware\r\n ⬩  Basic Computer programming and Web development\r\n ⬩  Internet of Things (IoTs, Smart Home, Smart Farm)', '', ' ⬩  27-28 May 2021: Seminar on Development of Instructional Design for Creating Young Innovators Using Double after Training Action Method by Chulalongkorn University of Thailand.\r\n ⬩  19 May 2021 : Seminar on E-Certificate Management System conducted by SEAMEO CECCEP & SEAMEO TED, Phnom Penh.\r\n ⬩  09 June 2021 : Instructor of Digital video production with Camtasia application training, Kampong Speu Institute of Technology.\r\n ⬩  June-September 2020 : Attendant as a trainer on Digital Online E-Learning (Google G-Suite, Google classroom) for High Schools of Ministry of Education Youth and Sport, Cambodia.\r\n ⬩  September 20th, 2018 : Seminar on Developing Associate and Bachelor’s Curricula, Phnom Penh, Cambodia.\r\n ⬩  2018 : Training of PLC (Professional Learning Community), Kampong Speu Institute of Technology(KSIT), Cambodia.\r\n ⬩  9-21 October, 2017 : Training on Developing and preparing for the basic technical teacher project, at Thaluang Cementhaianuorn Technical College, Thailand.\r\n ⬩  June 13rd to July12nd 2017: Seminar on Vocational Education for Teachers of Developing Countries, Ningbo Polytechnic, China.\r\n ⬩  2016-2017: IT Technician at ATOM Computer co, LTD., Phnom Penh, Cambodia. Computer software installation and maintenance. Printer installation and maintenance. Bring products to customer. Stock products control.\r\n ⬩  2015-2016: Salesman at MIDA Assets Public Company Limited, Based in Sisaket, Thailand. Basic fixes and repairs. Contact with customers for sales. Billing and collecting payment from customers. Find out more customers in the villages for retail sales as required by the company. Test Machine for customers. Instruct customers on how to use Machine of refrigerator, washing machine, TV, and other electrical equipment.\r\n ⬩  2012-2015: General technician, At ABC computer and service Company limited, Based in Sisaket, Thailand. Look after tidiness in the Shop. Test and check network system before starting up repairing. Fix and repair Computer PC, Notebooks, and Printers Setup program on Computer PC and Notebooks. Record repair job history in Database system. Deliver products for other branches.'),
(12, '1707724086.jpg', 'កន យុគី', 'Information Technology', 'yukykorn@gmail.com', '(+855) 967144158', '• The Development of Research Projects System based on Database of Informatics Program , Nakhon Ratchasima Rajabhat University. \r\n• Clothes Selling Website Project, PHP Language, Nakhon Ratchasima Rajabhat University. \r\n• Customer Database Management Project, C# and MySql Language, Nakhon Ratchasima Rajabhat University.', '• 2014-2018: Graduated Bachelor Degree of Information Technology, Nakhon Ratchasima Rajabhat University, Thailand (GPAX:3.33).\r\n • 2010-2013: Graduated High School Diploma Degree from Kampong Chheuteal High School, Kampong Thom, Cambodia.\r\n • 2007-2010: Graduated from Kampong Chheuteal Primary School, Kampong Thom, Cambodia.', 'Technical\r\n • Software: MS Word, Excel, PowerPoint, Access, and Project; Adobe Photoshop, Flash, Premiere, Illustrator, and Dreamweaver, Navicat Premium.\r\n • Operating System: MS Windows 7/8 and Mac Os\r\n • Networking: Cisco Routers and Switches\r\n • Programming: C#, Java, CSS ,and PHPCSS Language\r\n • English: Good with reading, listening, speaking and writing • Thai: Good with reading, listening, speaking and writing\r\n • Khmer: mother tongue.', '', '• 2019 July 17th-02nd Febuary:Work in Association of Support and Provision for Cambodian People.\r\n • 2018 July 16th-31st January: Was employed by Hbi Manufacturin(Thailand) Ltd, Surin, Thailand.\r\n • 2018 January 8th-5th May: Internship ,Joho Provincial Police Station,Thailand.\r\n • 2017 February 23rd-26th : Joined IT-Genius Camp #7th,Ban Horng Fab primary School, Thailand.\r\n • 2017 January31st-3rd February: Korat International Arts and Culture Festival 2017 at Nakhon Ratchasima,Thailand.\r\n • 2016 March 4th-6th :Attended IT-Genius Camp #6th, Ban Lung Thakhean primary School, Thailand.\r\n • 2016 September 21st : Open House Camp, Nakhon Ratchasima Rajabhat University, Thailand.\r\n • 2016 September 15th: Joined the StartUp trained at Rajamangala University of Technology Isan, Thailand.\r\n • 2016 August 18th : Science Week,Nakhon Ratchasima Rajabhat University.\r\n • 2016 February 26th-28th :Tour Guide invited By Rajamangala University of Technology Isan, Thailand.\r\n • 2015 January 4th : Attended Asean 2015 The way of life at Rajamangala University of Technology Isan, Thailand.\r\n • 2014 to present: Won the Princess Makha Chakri Sirindhorn’s Scholarship to obtain Bachelor Degree in Thailand, Kampong Chheuteal High School.'),
(13, '1707724097.jpg', 'អុល យ៉េន', 'គណនេយ្យ​ និងហិរញ្ញវត្ថុ​', 'ollyen8@gmail.com', '(+855) 85273028', '២៧-២៨​ តុលា ៖ បណ្តុះបណ្តាលស្តីអំពីរបៀបនៃការផលិតវីដេអូឌីជីថលនៅវិទ្យាស្ថានបច្ចេកទេសកម្ពុជា', '២០១៦ - ២០១៨ ៖ បរីញ្ញាបត្រ ឯកទេស គណនេយ្យ Burapha University ប្រទេសថៃ​។\r\n២០១៤ - ២០១៦ ៖ បរិញ្ញាបត្រ ឯកទេស បច្ចេកវិទ្យាកុំព្យូទ័រ Burapha University ប្រទេសថៃ។\r\n ២០០៩ - ២០១២ ៖ កម្រិតវប្បធម៌ទូទៅ វិទ្យាល័យបុទុមសាគរ កោះកុង។', '', '', '២០១៨ - បច្ចុប្បន្ន ៖ គ្រូបង្រៀនឯកទេសគណនេយ្យ នៅវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឹ។\r\n២០១៥ - ២០១៦ ៖ បុគ្គលិកផ្នែកហិរញ្ញវត្ថុនៅ Harvest Centre ប្រទេសថៃ។\r\n២០១៣ - ២០១៤ ៖ បុគ្គលិកផ្នែកគណនេយ្យក្រុមហ៊ុន Heritage Hotel ប្រទេសថៃ។'),
(14, '1707724106.jpg', 'ណា ស្ទែនដា', 'Master of Computer Science', 'nastanda1995@gmail.com', ' (+855) 98324904', 'Soft Skills Managing your boss and time management, Think on your feet, Customer satisfaction, Profession ethics, Problem solving Technical Skills Agile Software Development, IONIC framework, Software testing, T-SQL, ASP.NET, C# MVC, AngularJs', 'Kasetsart University Master in Computer Science - 4.00 GPA (Current GPA) Aug 2020 – Present University of Phayao Bachelor in Information Technology - 3.80 GPA Jun 2012 - Dec 2015', 'Language and framework . Java Spring MVC . Spring Boot, Hibernate . PHP Laravel . Dart Flutter . Node.js . VB, C# .NET . Python, R, C . Javascript, JQuery, AngularJs . CSS Bootstrap Database MySQL, Oracle, Maria DB, SQL Server Tools IntelliJ Idea, PhpStorm, DataGrip, Visual Studio, Android Studio, Netbeans, Eclipse, SVM, Git, Dimensions CM, Scrum JIRA, Trello, Docker', '2012-2015 Excellence academic student received grade A for 10 subjects in academic year 2013 and 2014 Championship of ACM-ICPC@UP Contest in year 2013 and 2014 2008-2011 1st rank in provincial Math competition for grade 12 2nd rank in provincial Math competition for grade 9', '');

-- --------------------------------------------------------

--
-- Table structure for table `macha_staff_info`
--

CREATE TABLE `macha_staff_info` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `sumary` text DEFAULT NULL,
  `education_background` text DEFAULT NULL,
  `spacial_skill` text DEFAULT NULL,
  `award` text DEFAULT NULL,
  `work_experiences` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `macha_staff_info`
--

INSERT INTO `macha_staff_info` (`id`, `img`, `name`, `skill`, `email`, `phone_number`, `sumary`, `education_background`, `spacial_skill`, `award`, `work_experiences`) VALUES
(11, '1707724078.jpg', 'តុង វុទ្ធា', 'Computer Science', 'vuthea@ksit.edu.kh', ' (+855) 086609087', 'I have been working for Kampong Speu Institute of Technology (KSIT) as a Teacher of Business Computer. I have some duties as follows:\r\n\r\n ⬩  Teaching on Computer field such as: Computer for career, Computer Installation, Computer Network, Local Wireless Network, Basic of Computer programming and Website.\r\n ⬩  Monitoring Network Systems and Internet.\r\n ⬩  Advisor of students’ projects in the Business Computer Department.\r\n ⬩  Administrator Digital E-Learning platform based on Moodle application', ' ⬩  2012-2016: Bachelor’ s Degree of Computer Science, Sisaket Rajabhat University, Thailand\r\n ⬩  2010-2012: Associate’ s Degree of Computer Technology, Sisaket Technical College, Thailand\r\n ⬩  2007-2010: Diploma of Electronics, Sisaket Technical College, Thailand\r\n ⬩  2006-2007: Secondary School, Kampong Chheuteal high school, Cambodia', ' ⬩  Microsoft office Application\r\n ⬩  Adobe Photoshop\r\n ⬩  Install network system and administration\r\n ⬩  Install CCTV, Computer software application and Hardware\r\n ⬩  Basic Computer programming and Web development\r\n ⬩  Internet of Things (IoTs, Smart Home, Smart Farm)', '', ' ⬩  27-28 May 2021: Seminar on Development of Instructional Design for Creating Young Innovators Using Double after Training Action Method by Chulalongkorn University of Thailand.\r\n ⬩  19 May 2021 : Seminar on E-Certificate Management System conducted by SEAMEO CECCEP & SEAMEO TED, Phnom Penh.\r\n ⬩  09 June 2021 : Instructor of Digital video production with Camtasia application training, Kampong Speu Institute of Technology.\r\n ⬩  June-September 2020 : Attendant as a trainer on Digital Online E-Learning (Google G-Suite, Google classroom) for High Schools of Ministry of Education Youth and Sport, Cambodia.\r\n ⬩  September 20th, 2018 : Seminar on Developing Associate and Bachelor’s Curricula, Phnom Penh, Cambodia.\r\n ⬩  2018 : Training of PLC (Professional Learning Community), Kampong Speu Institute of Technology(KSIT), Cambodia.\r\n ⬩  9-21 October, 2017 : Training on Developing and preparing for the basic technical teacher project, at Thaluang Cementhaianuorn Technical College, Thailand.\r\n ⬩  June 13rd to July12nd 2017: Seminar on Vocational Education for Teachers of Developing Countries, Ningbo Polytechnic, China.\r\n ⬩  2016-2017: IT Technician at ATOM Computer co, LTD., Phnom Penh, Cambodia. Computer software installation and maintenance. Printer installation and maintenance. Bring products to customer. Stock products control.\r\n ⬩  2015-2016: Salesman at MIDA Assets Public Company Limited, Based in Sisaket, Thailand. Basic fixes and repairs. Contact with customers for sales. Billing and collecting payment from customers. Find out more customers in the villages for retail sales as required by the company. Test Machine for customers. Instruct customers on how to use Machine of refrigerator, washing machine, TV, and other electrical equipment.\r\n ⬩  2012-2015: General technician, At ABC computer and service Company limited, Based in Sisaket, Thailand. Look after tidiness in the Shop. Test and check network system before starting up repairing. Fix and repair Computer PC, Notebooks, and Printers Setup program on Computer PC and Notebooks. Record repair job history in Database system. Deliver products for other branches.'),
(12, '1707724086.jpg', 'កន យុគី', 'Information Technology', 'yukykorn@gmail.com', '(+855) 967144158', '• The Development of Research Projects System based on Database of Informatics Program , Nakhon Ratchasima Rajabhat University. \r\n• Clothes Selling Website Project, PHP Language, Nakhon Ratchasima Rajabhat University. \r\n• Customer Database Management Project, C# and MySql Language, Nakhon Ratchasima Rajabhat University.', '• 2014-2018: Graduated Bachelor Degree of Information Technology, Nakhon Ratchasima Rajabhat University, Thailand (GPAX:3.33).\r\n • 2010-2013: Graduated High School Diploma Degree from Kampong Chheuteal High School, Kampong Thom, Cambodia.\r\n • 2007-2010: Graduated from Kampong Chheuteal Primary School, Kampong Thom, Cambodia.', 'Technical\r\n • Software: MS Word, Excel, PowerPoint, Access, and Project; Adobe Photoshop, Flash, Premiere, Illustrator, and Dreamweaver, Navicat Premium.\r\n • Operating System: MS Windows 7/8 and Mac Os\r\n • Networking: Cisco Routers and Switches\r\n • Programming: C#, Java, CSS ,and PHPCSS Language\r\n • English: Good with reading, listening, speaking and writing • Thai: Good with reading, listening, speaking and writing\r\n • Khmer: mother tongue.', '', '• 2019 July 17th-02nd Febuary:Work in Association of Support and Provision for Cambodian People.\r\n • 2018 July 16th-31st January: Was employed by Hbi Manufacturin(Thailand) Ltd, Surin, Thailand.\r\n • 2018 January 8th-5th May: Internship ,Joho Provincial Police Station,Thailand.\r\n • 2017 February 23rd-26th : Joined IT-Genius Camp #7th,Ban Horng Fab primary School, Thailand.\r\n • 2017 January31st-3rd February: Korat International Arts and Culture Festival 2017 at Nakhon Ratchasima,Thailand.\r\n • 2016 March 4th-6th :Attended IT-Genius Camp #6th, Ban Lung Thakhean primary School, Thailand.\r\n • 2016 September 21st : Open House Camp, Nakhon Ratchasima Rajabhat University, Thailand.\r\n • 2016 September 15th: Joined the StartUp trained at Rajamangala University of Technology Isan, Thailand.\r\n • 2016 August 18th : Science Week,Nakhon Ratchasima Rajabhat University.\r\n • 2016 February 26th-28th :Tour Guide invited By Rajamangala University of Technology Isan, Thailand.\r\n • 2015 January 4th : Attended Asean 2015 The way of life at Rajamangala University of Technology Isan, Thailand.\r\n • 2014 to present: Won the Princess Makha Chakri Sirindhorn’s Scholarship to obtain Bachelor Degree in Thailand, Kampong Chheuteal High School.'),
(13, '1707724097.jpg', 'អុល យ៉េន', 'គណនេយ្យ​ និងហិរញ្ញវត្ថុ​', 'ollyen8@gmail.com', '(+855) 85273028', '២៧-២៨​ តុលា ៖ បណ្តុះបណ្តាលស្តីអំពីរបៀបនៃការផលិតវីដេអូឌីជីថលនៅវិទ្យាស្ថានបច្ចេកទេសកម្ពុជា', '២០១៦ - ២០១៨ ៖ បរីញ្ញាបត្រ ឯកទេស គណនេយ្យ Burapha University ប្រទេសថៃ​។\r\n២០១៤ - ២០១៦ ៖ បរិញ្ញាបត្រ ឯកទេស បច្ចេកវិទ្យាកុំព្យូទ័រ Burapha University ប្រទេសថៃ។\r\n ២០០៩ - ២០១២ ៖ កម្រិតវប្បធម៌ទូទៅ វិទ្យាល័យបុទុមសាគរ កោះកុង។', '', '', '២០១៨ - បច្ចុប្បន្ន ៖ គ្រូបង្រៀនឯកទេសគណនេយ្យ នៅវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឹ។\r\n២០១៥ - ២០១៦ ៖ បុគ្គលិកផ្នែកហិរញ្ញវត្ថុនៅ Harvest Centre ប្រទេសថៃ។\r\n២០១៣ - ២០១៤ ៖ បុគ្គលិកផ្នែកគណនេយ្យក្រុមហ៊ុន Heritage Hotel ប្រទេសថៃ។'),
(14, '1707724106.jpg', 'ណា ស្ទែនដា', 'Master of Computer Science', 'nastanda1995@gmail.com', ' (+855) 98324904', 'Soft Skills Managing your boss and time management, Think on your feet, Customer satisfaction, Profession ethics, Problem solving Technical Skills Agile Software Development, IONIC framework, Software testing, T-SQL, ASP.NET, C# MVC, AngularJs', 'Kasetsart University Master in Computer Science - 4.00 GPA (Current GPA) Aug 2020 – Present University of Phayao Bachelor in Information Technology - 3.80 GPA Jun 2012 - Dec 2015', 'Language and framework . Java Spring MVC . Spring Boot, Hibernate . PHP Laravel . Dart Flutter . Node.js . VB, C# .NET . Python, R, C . Javascript, JQuery, AngularJs . CSS Bootstrap Database MySQL, Oracle, Maria DB, SQL Server Tools IntelliJ Idea, PhpStorm, DataGrip, Visual Studio, Android Studio, Netbeans, Eclipse, SVM, Git, Dimensions CM, Scrum JIRA, Trello, Docker', '2012-2015 Excellence academic student received grade A for 10 subjects in academic year 2013 and 2014 Championship of ACM-ICPC@UP Contest in year 2013 and 2014 2008-2011 1st rank in provincial Math competition for grade 12 2nd rank in provincial Math competition for grade 9', '');

-- --------------------------------------------------------

--
-- Table structure for table `plant_staff_info`
--

CREATE TABLE `plant_staff_info` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `sumary` text DEFAULT NULL,
  `education_background` text DEFAULT NULL,
  `spacial_skill` text DEFAULT NULL,
  `award` text DEFAULT NULL,
  `work_experiences` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant_staff_info`
--

INSERT INTO `plant_staff_info` (`id`, `img`, `name`, `skill`, `email`, `phone_number`, `sumary`, `education_background`, `spacial_skill`, `award`, `work_experiences`) VALUES
(11, '1707724078.jpg', 'តុង វុទ្ធា', 'Computer Science', 'vuthea@ksit.edu.kh', ' (+855) 086609087', 'I have been working for Kampong Speu Institute of Technology (KSIT) as a Teacher of Business Computer. I have some duties as follows:\r\n\r\n ⬩  Teaching on Computer field such as: Computer for career, Computer Installation, Computer Network, Local Wireless Network, Basic of Computer programming and Website.\r\n ⬩  Monitoring Network Systems and Internet.\r\n ⬩  Advisor of students’ projects in the Business Computer Department.\r\n ⬩  Administrator Digital E-Learning platform based on Moodle application', ' ⬩  2012-2016: Bachelor’ s Degree of Computer Science, Sisaket Rajabhat University, Thailand\r\n ⬩  2010-2012: Associate’ s Degree of Computer Technology, Sisaket Technical College, Thailand\r\n ⬩  2007-2010: Diploma of Electronics, Sisaket Technical College, Thailand\r\n ⬩  2006-2007: Secondary School, Kampong Chheuteal high school, Cambodia', ' ⬩  Microsoft office Application\r\n ⬩  Adobe Photoshop\r\n ⬩  Install network system and administration\r\n ⬩  Install CCTV, Computer software application and Hardware\r\n ⬩  Basic Computer programming and Web development\r\n ⬩  Internet of Things (IoTs, Smart Home, Smart Farm)', '', ' ⬩  27-28 May 2021: Seminar on Development of Instructional Design for Creating Young Innovators Using Double after Training Action Method by Chulalongkorn University of Thailand.\r\n ⬩  19 May 2021 : Seminar on E-Certificate Management System conducted by SEAMEO CECCEP & SEAMEO TED, Phnom Penh.\r\n ⬩  09 June 2021 : Instructor of Digital video production with Camtasia application training, Kampong Speu Institute of Technology.\r\n ⬩  June-September 2020 : Attendant as a trainer on Digital Online E-Learning (Google G-Suite, Google classroom) for High Schools of Ministry of Education Youth and Sport, Cambodia.\r\n ⬩  September 20th, 2018 : Seminar on Developing Associate and Bachelor’s Curricula, Phnom Penh, Cambodia.\r\n ⬩  2018 : Training of PLC (Professional Learning Community), Kampong Speu Institute of Technology(KSIT), Cambodia.\r\n ⬩  9-21 October, 2017 : Training on Developing and preparing for the basic technical teacher project, at Thaluang Cementhaianuorn Technical College, Thailand.\r\n ⬩  June 13rd to July12nd 2017: Seminar on Vocational Education for Teachers of Developing Countries, Ningbo Polytechnic, China.\r\n ⬩  2016-2017: IT Technician at ATOM Computer co, LTD., Phnom Penh, Cambodia. Computer software installation and maintenance. Printer installation and maintenance. Bring products to customer. Stock products control.\r\n ⬩  2015-2016: Salesman at MIDA Assets Public Company Limited, Based in Sisaket, Thailand. Basic fixes and repairs. Contact with customers for sales. Billing and collecting payment from customers. Find out more customers in the villages for retail sales as required by the company. Test Machine for customers. Instruct customers on how to use Machine of refrigerator, washing machine, TV, and other electrical equipment.\r\n ⬩  2012-2015: General technician, At ABC computer and service Company limited, Based in Sisaket, Thailand. Look after tidiness in the Shop. Test and check network system before starting up repairing. Fix and repair Computer PC, Notebooks, and Printers Setup program on Computer PC and Notebooks. Record repair job history in Database system. Deliver products for other branches.'),
(12, '1707724086.jpg', 'កន យុគី', 'Information Technology', 'yukykorn@gmail.com', '(+855) 967144158', '• The Development of Research Projects System based on Database of Informatics Program , Nakhon Ratchasima Rajabhat University. \r\n• Clothes Selling Website Project, PHP Language, Nakhon Ratchasima Rajabhat University. \r\n• Customer Database Management Project, C# and MySql Language, Nakhon Ratchasima Rajabhat University.', '• 2014-2018: Graduated Bachelor Degree of Information Technology, Nakhon Ratchasima Rajabhat University, Thailand (GPAX:3.33).\r\n • 2010-2013: Graduated High School Diploma Degree from Kampong Chheuteal High School, Kampong Thom, Cambodia.\r\n • 2007-2010: Graduated from Kampong Chheuteal Primary School, Kampong Thom, Cambodia.', 'Technical\r\n • Software: MS Word, Excel, PowerPoint, Access, and Project; Adobe Photoshop, Flash, Premiere, Illustrator, and Dreamweaver, Navicat Premium.\r\n • Operating System: MS Windows 7/8 and Mac Os\r\n • Networking: Cisco Routers and Switches\r\n • Programming: C#, Java, CSS ,and PHPCSS Language\r\n • English: Good with reading, listening, speaking and writing • Thai: Good with reading, listening, speaking and writing\r\n • Khmer: mother tongue.', '', '• 2019 July 17th-02nd Febuary:Work in Association of Support and Provision for Cambodian People.\r\n • 2018 July 16th-31st January: Was employed by Hbi Manufacturin(Thailand) Ltd, Surin, Thailand.\r\n • 2018 January 8th-5th May: Internship ,Joho Provincial Police Station,Thailand.\r\n • 2017 February 23rd-26th : Joined IT-Genius Camp #7th,Ban Horng Fab primary School, Thailand.\r\n • 2017 January31st-3rd February: Korat International Arts and Culture Festival 2017 at Nakhon Ratchasima,Thailand.\r\n • 2016 March 4th-6th :Attended IT-Genius Camp #6th, Ban Lung Thakhean primary School, Thailand.\r\n • 2016 September 21st : Open House Camp, Nakhon Ratchasima Rajabhat University, Thailand.\r\n • 2016 September 15th: Joined the StartUp trained at Rajamangala University of Technology Isan, Thailand.\r\n • 2016 August 18th : Science Week,Nakhon Ratchasima Rajabhat University.\r\n • 2016 February 26th-28th :Tour Guide invited By Rajamangala University of Technology Isan, Thailand.\r\n • 2015 January 4th : Attended Asean 2015 The way of life at Rajamangala University of Technology Isan, Thailand.\r\n • 2014 to present: Won the Princess Makha Chakri Sirindhorn’s Scholarship to obtain Bachelor Degree in Thailand, Kampong Chheuteal High School.'),
(13, '1707724097.jpg', 'អុល យ៉េន', 'គណនេយ្យ​ និងហិរញ្ញវត្ថុ​', 'ollyen8@gmail.com', '(+855) 85273028', '២៧-២៨​ តុលា ៖ បណ្តុះបណ្តាលស្តីអំពីរបៀបនៃការផលិតវីដេអូឌីជីថលនៅវិទ្យាស្ថានបច្ចេកទេសកម្ពុជា', '២០១៦ - ២០១៨ ៖ បរីញ្ញាបត្រ ឯកទេស គណនេយ្យ Burapha University ប្រទេសថៃ​។\r\n២០១៤ - ២០១៦ ៖ បរិញ្ញាបត្រ ឯកទេស បច្ចេកវិទ្យាកុំព្យូទ័រ Burapha University ប្រទេសថៃ។\r\n ២០០៩ - ២០១២ ៖ កម្រិតវប្បធម៌ទូទៅ វិទ្យាល័យបុទុមសាគរ កោះកុង។', '', '', '២០១៨ - បច្ចុប្បន្ន ៖ គ្រូបង្រៀនឯកទេសគណនេយ្យ នៅវិទ្យាស្ថានបច្ចេកវិទ្យាកំពង់ស្ពឹ។\r\n២០១៥ - ២០១៦ ៖ បុគ្គលិកផ្នែកហិរញ្ញវត្ថុនៅ Harvest Centre ប្រទេសថៃ។\r\n២០១៣ - ២០១៤ ៖ បុគ្គលិកផ្នែកគណនេយ្យក្រុមហ៊ុន Heritage Hotel ប្រទេសថៃ។'),
(14, '1707724106.jpg', 'ណា ស្ទែនដា', 'Master of Computer Science', 'nastanda1995@gmail.com', ' (+855) 98324904', 'Soft Skills Managing your boss and time management, Think on your feet, Customer satisfaction, Profession ethics, Problem solving Technical Skills Agile Software Development, IONIC framework, Software testing, T-SQL, ASP.NET, C# MVC, AngularJs', 'Kasetsart University Master in Computer Science - 4.00 GPA (Current GPA) Aug 2020 – Present University of Phayao Bachelor in Information Technology - 3.80 GPA Jun 2012 - Dec 2015', 'Language and framework . Java Spring MVC . Spring Boot, Hibernate . PHP Laravel . Dart Flutter . Node.js . VB, C# .NET . Python, R, C . Javascript, JQuery, AngularJs . CSS Bootstrap Database MySQL, Oracle, Maria DB, SQL Server Tools IntelliJ Idea, PhpStorm, DataGrip, Visual Studio, Android Studio, Netbeans, Eclipse, SVM, Git, Dimensions CM, Scrum JIRA, Trello, Docker', '2012-2015 Excellence academic student received grade A for 10 subjects in academic year 2013 and 2014 Championship of ACM-ICPC@UP Contest in year 2013 and 2014 2008-2011 1st rank in provincial Math competition for grade 12 2nd rank in provincial Math competition for grade 9', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `sumary` varchar(255) DEFAULT NULL,
  `education_background` varchar(255) DEFAULT NULL,
  `spacial_skill` varchar(255) DEFAULT NULL,
  `award` varchar(255) DEFAULT NULL,
  `work_experiences` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`id`, `img`, `name`, `skill`, `email`, `phone_number`, `sumary`, `education_background`, `spacial_skill`, `award`, `work_experiences`) VALUES
(2, '', 'vutea', 'IOT', 'temnov568@gmail.com', '089755633', 'I have been working for Kampong Speu Institute of Technology (KSIT) as a Teacher of Business Computer. I have some duties as follows:\r\n\r\nTeaching on Computer field such as: Computer for career, Computer Installation, Computer Network, Local Wireless Netwo', '2012-2016: Bachelor’ s Degree of Computer Science, Sisaket Rajabhat University, Thailand\r\n2010-2012: Associate’ s Degree of Computer Technology, Sisaket Technical College, Thailand\r\n2007-2010: Diploma of Electronics, Sisaket Technical College, Thailand\r\n2', 'Microsoft office Application\r\n\r\nAdobe Photoshop\r\nInstall network system and administration\r\nInstall CCTV, Computer software application and Hardware\r\nBasic Computer programming and Web development\r\nInternet of Things (IoTs, Smart Home, Smart Farm)', 'None', '27-28 May 2021: Seminar on Development of Instructional Design for Creating Young Innovators Using Double after Training Action Method by Chulalongkorn University of Thailand.\r\n19 May 2021 : Seminar on E-Certificate Management System conducted by SEAMEO C'),
(11, 'DSC_0796.JPG', 'qwe', 'IOT', 'kmnpro459@gmail.com', '8556767', 'laaslfjdf\r\n  &#8718;dlfldsfjld\r\n  &#8718;fdsaflafjl', 'laaslfjdf\r\n  &#8718;dlfldsfjld\r\n  &#8718;fdsaflafjl', 'laaslfjdf\r\n  &#8718;dlfldsfjld\r\n  &#8718;fdsaflafjl', 'laaslfjdf\r\n  &#8718;dlfldsfjld\r\n  &#8718;fdsaflafjl', 'laaslfjdf\r\n  &#8718;dlfldsfjld\r\n  &#8718;fdsaflafjl'),
(12, 'DSC_0796.JPG', 'qwe', 'IOT', 'kmnpro459@gmail.com', '8556767', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl'),
(13, 'DSC_0796.JPG', 'qwe', 'IOT', 'kmnpro459@gmail.com', '8556767', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld\r\n  &#8718; fdsaflafjl'),
(14, 'DSC_0796.JPG', 'qwe', 'IOT', 'kmnpro459@gmail.com', '8556767', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl'),
(15, 'DSC_0796.JPG', 'qwe', 'IOT', 'kmnpro459@gmail.com', '8556767', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjl', '<h6>laaslfjdf</h6>\r\n  &#8718; dlfldsfjld<br>\r\n  &#8718; fdsaflafjll'),
(16, 'DSC_0929.JPG', '', '', '', '', 'sdsd&nbsp;&nbsp;&nbsp;fsfs', '', '', '', ''),
(17, 'DSC_0929.JPG', '', '', '', '', 'sdsd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fsfs', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `id_card` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `sex`, `phone_number`, `id_card`) VALUES
(12, 'Many', 'Male', '085697400', '20243342'),
(13, 'May', 'Female', '0983487644', '20244683'),
(14, 'Yin', 'Male', '098927893', '20248877'),
(15, 'Wanwan', 'Female', '068918736', '20247788'),
(20, 'mm', 'Female', '0778735454', '35535356');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `al_staff_info`
--
ALTER TABLE `al_staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com_staff_info`
--
ALTER TABLE `com_staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `el_staff_info`
--
ALTER TABLE `el_staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_staff_info`
--
ALTER TABLE `food_staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macha_staff_info`
--
ALTER TABLE `macha_staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant_staff_info`
--
ALTER TABLE `plant_staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `al_staff_info`
--
ALTER TABLE `al_staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `com_staff_info`
--
ALTER TABLE `com_staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `el_staff_info`
--
ALTER TABLE `el_staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `food_staff_info`
--
ALTER TABLE `food_staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `macha_staff_info`
--
ALTER TABLE `macha_staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `plant_staff_info`
--
ALTER TABLE `plant_staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
