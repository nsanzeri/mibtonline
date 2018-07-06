SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- DB: mibtonline utf8mb4_general_ci
--
-- Table structure for table `user` 
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY ('user_id'),
  UNIQUE KEY ('username')
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `is_active`) VALUES
(1, 'alexsanz', 'password', 1);