SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- DB: mibtonline utf8mb4_general_ci
--
-- Table structure for table `user` 
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_logged_in` tinyint(1) DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY (`username`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `is_active`) VALUES
(1, 'alexsanz', 'password', 1);

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `first_name`, `last_name`, `is_active`, `is_logged_in`, `is_paid`, `is_admin`, `join_date`) VALUES ('1', 'nsanzeri', 'fuckoff', 'nunya@gmail.com', 'Nick', 'Sanzeri', '1', NULL, NULL, NULL, '2018-07-04');