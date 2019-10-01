-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2019 at 03:08 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alcheher_ness`
--

-- --------------------------------------------------------

--
-- Table structure for table `ness`
--

CREATE TABLE `ness` (
  `id` int(11) NOT NULL,
  `alcher_id` varchar(50) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `member_count` int(11) NOT NULL,
  `members_name` varchar(200) NOT NULL,
  `colleges_name` varchar(250) NOT NULL,
  `streams_name` varchar(250) NOT NULL,
  `year_of_study` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `home_address` varchar(150) NOT NULL,
  `local_address` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ness`
--

INSERT INTO `ness` (`id`, `alcher_id`, `team_name`, `member_count`, `members_name`, `colleges_name`, `streams_name`, `year_of_study`, `email`, `home_address`, `local_address`, `phone`) VALUES
(522, 'NESS-FULL-id', 'nobyo', 0, 'Kasturi Chutia,', 'Handique Girl&#039;s College,', 'Arts,', '1st year, B.A.,', 'kasturichutia99@gmail.com', 'NAMCHUNGI BHAGANIA GAON,  P.O. - NAMCHUNGI , P.S.- TITABAR', 'NAMCHUNGI BHAGANIA GAON,  P.O. - NAMCHUNGI , P.S.- TITABAR', '9365714641,'),
(523, 'NESS-FULL-id', 'NewGeneration', 0, 'Tanay Choudhury,', 'OKDISCD (Omeo Kumar Das Institute of Social Change and Development),', 'Social Science,', 'Ph.D scholar 1st year,', 'tanaych006@gmail.com', 'Rajgarh Road, Opposite Ricon, House No.62, P.O-Silpukhuri, Assam, Guwahati-781003', 'Rajgarh Road, Opposite Ricon, House No.62, P.O-Silpukhuri, Assam, Guwahati-781003', '9313584949,'),
(524, 'NESS-FULL-id', 'The3Amigos', 2, 'Pranita Patar,Sagarika Das,Surobhi Sonowal,', 'B. Borooah College,B. Borooah College,B. Borooah College,', 'Political Science,Political Science,Political Science,', '2nd year,Secondyear,Secondyear,', 'pranitapatar423428@gmail.com', 'Patarkuchi,Sonapur P.s- Sonapur, P.o- 782402 Dist- Kamrup (M)', 'Patarkuchi, sonapur', '8638725196,06001805654,9127016243,'),
(521, 'NESS-FULL-id', 'tissguwahati', 1, 'Divya Patnaik,Helarius Shylla,', 'Tata Institute of Social Sciences,Tata Institute of Social Sciences,', 'BACHELOR IN SOCIAL SCIENCES,MASTERS IN COMMUNITY DEVELOPMENT AND ORGANIZATION,', 'BA 6th Semester,MA 4th Semester,', 'divya.patnaik10@gmail.com', 'Nanakpura, South Moti Bagh, New Delhi, 110021', 'TISS Girls Hostel, Shantipur, Guwahati, 781009', '8130153570,9126436755,'),
(520, 'NESS-FULL-id', 'RukumoniDas', 1, 'Rukumoni Das,Rukumoni Das,', 'Handique Girl&#039;s College,Handiqur Girl&#039;s College,', 'Politcal Science,Arts,', '2nd,2nd,', 'rukumoni10829@gmail.com', 'Jorabat', 'Jorabat', '9101910719,9101910719,'),
(519, 'NESS-FULL-id', 'mithlesh4257', 2, 'mithlesh kumar,Clarke Boyle,Giacomo Butler,', 'Madonna Wiggins,Shelby Robertson,Harriet Berger,', 'Temporibus quisquam sapiente unde dolor nisi magna nostrum eligendi necessitatibus ad sed magni aut dolores voluptatem Magna aspernatur,Dolore est aliquip aliquam ut rem consequatur Ipsum odio illum quos deleniti aliqua Quam,Vel sequi esse exercitati', 'Ipsam illum est iure amet dolore laborum repellendus Autem odit doloribus quidem,Ad veniam excepteur veritatis praesentium mollitia optio omnis officiis architecto cum id omnis possimus eiusmod,Placeat veniam ad commodi officiis accusamus labore nece', 'mithlesh4257@iitg.ac.in', 'Beatae quae eos deleniti quod dolore dolore eaque sunt fuga Officia perspiciatis non corrupti exercitationem consequat', 'Voluptas cupiditate quia nemo odit eum culpa sunt', '7991120977,8521135456,9775588441,'),
(517, 'NESS-FULL-id', 'Arvind', 0, 'UPSC,', 'IITG,', 'cst,', '3,', 'nitharwalarvind@gmail.com', 'rajasthan', 'IITH', '3784637383,'),
(525, 'NESS-FULL-id', 'NEwins', 0, 'Satyam Saran,', 'iit guwahati,', 'chemical eng. (btech),', '2nd,', 'saran170107057@iitg.ac.in', 'patel nagar,patna-800024', 'lohit hostel,iit guwahati', '9113310974,'),
(526, 'NESS-FULL-id', 'Orion', 1, 'Pranay Kumar Sarkar,Nilkamal Kalita,', 'IIT Guwahati,IIT Guwahati,', 'CRT,Crt,', '3rd,2nd yr,', 'pranaysarkar1@gmail.com', 'Barpeta Road', 'IIT Guwahati', '8399836076,7578024285,'),
(527, 'NESS-FULL-id', 'Juniper', 0, 'Gauraangi Anand,', 'IIT Guwahati,', 'BTech in Civil engineering,', '1st year,', 'gauraang@iitg.ac.in', 'H. No. 102, sector 11A, Chandigarh', 'Dhansiri girls&#039; hostel,  IIT Guwahati', '7087204440,'),
(528, 'NESS-FULL-id', 'Angel', 2, 'Angela Wangpan,Hage Yaku,Joyshree Gogoi,', 'Bosco Institute Jorhat,Bosco Institute,bosco institute,', 'MSW,MSW,MSW,', '2,2,2,', 'angelaamai34@gmail.com', 'Mintgon Village, Arunachal Pradesh', 'Bosco Institute Bachung, life plus, jorhat', '6900447224,8724952934,7002386106,'),
(529, 'NESS-FULL-id', 'GU', 2, 'Sweta Nandi,Jonaki Saha,Suchismita Sanyal,', 'Guwahati University,Guwahati University,Guwahati University,', 'Arts(Department of English),Arts(Department of English) ,Arts (Department of English) ,', '2nd year,2nd year,2nd year,', 'swetanandi37@gmail.com', 'Dhubri, Assam', 'Lankeshwar, Guwahati', '8761874926,9101424077,9101312608,'),
(530, 'NESS-FULL-id', 'TheDoubleRs', 1, 'Rajmee Mahanta,Rajmee Mahanta,', 'Handique Girl&#039;s College,Handiqur Girl&#039;s College,', 'Politcal Science,Humanties,', '2nd,2nd,', 'aarohimahanta66@gmail.com', 'Six mile, Jayanagar, Opp. NRL petrol Station', 'Six mile, Jayanagar, Opp. NRL Petrol Station', '9101031578,9101031578,'),
(531, 'NESS-FULL-id', 'FHSS', 1, 'Nabaarun Barooah,Harshita Khound,', 'Faculty Higher Secondary School,Faculty Higher Secondary School,', 'Humanities,Humanities,', 'Senior Secondary 1st year,Senior Secondary 1st year,', 'nabaarunbarooah@icloud.com', '#46, F.C. Road, Uzanbazar', 'Guwahati, Assam- 781001', '6900176461,7636059789,'),
(532, 'NESS-FULL-id', 'TheDoubleRs', 1, 'Rajmee Mahanta,Rukumoni Das,', 'Handique Girl&#039;s College,Handique Girl&#039;s College,', 'Politcal Science,Humanties,', '2nd,2nd,', 'shantadas10829@gmail.com', 'Six mile, Jayanagar, Opp. NRL petrol Station', 'Six mile, Jayanagar, Opp. NRL Petrol Station', '9101031578,9101910719,'),
(533, 'NESS-FULL-id', 'ForMankind', 1, 'Anushka Sharma,Swaswati Das,', 'Faculty Higher Secondary School,Faculty Higher Secondary School,', 'Science,Humanities,', '11,11,', 'anushka.hp12345@gmail.com', 'House no. 4: Chirtachal Path, Nabagraha Temple Road,', 'House no. 4: Chirtachal Path, Nabagraha Temple Road', '9365053863,9435418811,'),
(534, 'NESS-FULL-id', 'Eccentric', 1, 'Suravi Mandal,Suravi Mandal,', 'Pandu College,Pandu College,', 'Arts,Arts,', '2018,2018,', 'mandalshilpa@gmail.com', '60, Sati Joymati Nagar, BG colony', 'Maligaon, ghy, 781011', '8486526520,8486526520,'),
(535, 'NESS-FULL-id', 'Eccentric', 0, 'Suravi Mandal,', 'Pandu College,', 'Arts,', '2018,', 'mandalsuravi@rocketmail.com', '60, Sati Joymati Nagar, BG colony', 'Maligaon, ghy, 781011', '8486526520,'),
(536, 'NESS-FULL-id', 'Trinom', 2, 'AVINASH KUMAR,ANKIT PAL,ABRAR AHMAD,', 'IIT, GUWAHATI,IIT, GUWAHATI,IIT, GUWAHATI,', 'DEVELOPMENT STUDIES,DEVELOPMENT STUDIES,DEVELOPMENT STUDIES,', 'FIRST YEAR,FIRST YEAR,FIRST YEAR,', 'avinash18@iitg.ac.in', 'Janidih, post-ghogha, District- Bhagalpur- Bihar- 813205', 'Barak Hostel, Room No. 248, Block - A , IIT, Guawahti- 781039', '8409355399,8938057873,7237999738,'),
(537, 'NESS-FULL-id', 'Ladybirds', 2, 'Bidisha Saikia,Chandrasmita Sarma,Bidisha Borah,', 'Tata Institute of Social Sciences,Tata institute of social sciences ,Tata institute of social sciences ,', 'MSW in Community Organisation and Development Practice,MSW in Community Organisation and Development Practice ,MSW in Community Organisation and Development Practice ,', '2018-2020,2018-2020,2018-2020,', 'bidishasaikia.kef@gmail.com', 'Astha Apartments, Beltola, Guwahati, Asssm', 'Astha Apartments, Beltola, Guwahati, Asssm', '8975074513,9957213203,8473821179,'),
(538, 'NESS-FULL-id', 'Faceofchange', 2, 'Tanya Pandey,Madhuparna Ghosh ,Purbita Chowdhury ,', 'Tata institute of social sciences,Tata institute of social sciences ,Tata institute of social sciences ,', 'MASW in CODP,MASW in CODP ,MASW in CODP ,', 'One and half years,One and half years ,One and half years ,', 'tanyapandey11@gmail.com', 'Flat no 302, Block B, Kadambani Apartments, Sheikhupura, Patna 800014', 'Tiss girls hostel, Shantipur', '7979092924,918721824059,919101318207,'),
(539, 'NESS-FULL-id', 'Analysts19', 0, 'Nabanita Teron,', 'Handique Girls College,', 'BSC,', 'Third year,', 'nitateron@gmail.com', 'House no. 11 Navagraha Road Silpukhuri Kamrup(M) Assam', 'House no. 11 Navagraha Road Silpukhuri Kamrup(M) Assam', '7896612020,'),
(540, 'NESS-FULL-id', 'Ameya', 2, 'Nupur Gohri,Bhaswab Jyoti Goswami,NA,', 'Tata Institute of Social Sciences, Guwahati,TISS Guwahati,NA,', 'Masters In Social Work,MSW,NA,', '1st year,1st Year,NA,', 'nupurgohri96@gmail.com', 'LNB Road tengabari', 'TISS Girls Hostel, Santipur, Guwahati.', '8876075837,8876075837,0,'),
(541, 'NESS-FULL-id', 'RealityBytes', 1, 'Nabanita Teron,Bhavani Sharma,', 'Handique Girl&#039;s College,Handique Girl&#039;s College,', 'BSC Economics,BA Economics,', 'Third,Third,', 'bhavani1998@outlook.com', 'House Number-6, Byelane Number-6, Rajgarh Road', 'Same as above', '7896612020,8135972398,'),
(542, 'NESS-FULL-id', 'TeamTISS', 2, 'Bhavya Kumar,Minal Karani,Abhijeet Ghosh,', 'Tata Institute of Social Sciences,Tata Institute of Social Sciences,Tata Institute of Social Sciences,', 'BA in Social Sciences,MA in Social Work (Counseling),MA in Social Work (Counseling),', '2nd,2nd,2nd,', 'bhavyakumar99@gmail.com', 'Fulwari, Dih Jamalpur, Behind Marwari Dharamshala, Jamalpur, Dist. - Munger, Bihar', 'TISS Girls Hostel, Santipur Main Road, Near Pragjyotish College , Guwahati', '9430834239,8976645920,8927388609,'),
(543, 'NESS-FULL-id', 'Inspiro', 2, 'Bhaswab Jyoti Goswami,Nupur Gohri,Triparna Mishra,', 'Tata Institute of Social Sciences, Guwahati,TISS Guwahati,TISS Guwahaiti,', 'Masters In Social Work,Masters in Social Work,MASW,', '1st year,1st Year,1St year,', 'Goswamibhaswab80@gmail.com', 'LNB Road tengabari', 'Jalukbari, Guwahati.', '8876075837,9971922122,9971922122,'),
(544, 'NESS-FULL-id', 'Cotton', 0, 'Mousumi Baruah,', 'Cotton University, Guwahati,', 'Humanities and Social Sciences,', 'UG 3rd year(BA),', 'mousumibaruah500@gmail.com', 'Tangla, Udalguri (BTAD), Assam.', 'Swahid Kanaklata Girls&#039; Hostel, Dighalipukhuri, Assam', '9132142207,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ness`
--
ALTER TABLE `ness`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ness`
--
ALTER TABLE `ness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=545;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
