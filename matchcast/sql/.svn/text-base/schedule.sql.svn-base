-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2011 at 12:52 PM
-- Server version: 5.1.36
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wpbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `xml_date_time` datetime NOT NULL,
  `xml_day` int(10) NOT NULL,
  `xml_timezone` varchar(50) NOT NULL,
  `xml_utc_hour` int(10) NOT NULL,
  `xml_utc_minute` int(10) NOT NULL,
  `version_number` int(10) NOT NULL,
  `league_global_id` int(20) NOT NULL,
  `league_name` varchar(100) NOT NULL,
  `league_alias` varchar(50) NOT NULL,
  `league_display_name` varchar(255) NOT NULL,
  `season_year` int(10) NOT NULL,
  `season_id` int(10) NOT NULL,
  `season_description` varchar(255) NOT NULL,
  `game_date_time` datetime NOT NULL,
  `game_date_day` int(10) NOT NULL,
  `game_timezone` int(11) NOT NULL,
  `game_utc_hour` int(11) NOT NULL,
  `game_utc_minute` int(11) NOT NULL,
  `game_localdatetime` datetime NOT NULL,
  `game_localday` int(11) NOT NULL,
  `tba` varchar(10) NOT NULL,
  `gamecode_global_code` int(20) NOT NULL,
  `gamecode_code` bigint(50) NOT NULL,
  `coverage` int(6) NOT NULL,
  `agg_partner_game_global_code` varchar(30) NOT NULL,
  `game_type_id` int(11) NOT NULL,
  `game_type_description` varchar(100) NOT NULL,
  `game_week` int(11) NOT NULL,
  `game_original_week` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `stadium_global_id` int(11) NOT NULL,
  `stadium_id` int(11) NOT NULL,
  `stadium_name` varchar(255) NOT NULL,
  `match_number` int(11) NOT NULL,
  `home_team_global_id` int(11) NOT NULL,
  `home_team_id` int(11) NOT NULL,
  `home_team_location` varchar(255) NOT NULL,
  `home_team_name` varchar(100) NOT NULL,
  `home_team_alias` varchar(30) NOT NULL,
  `home_team_display_name` varchar(255) NOT NULL,
  `home_outcome` varchar(30) NOT NULL,
  `home_score` int(11) NOT NULL,
  `home_shootout_goals` int(11) NOT NULL,
  `visit_team_global_id` int(11) NOT NULL,
  `visit_team_id` int(11) NOT NULL,
  `visit_team_location` varchar(255) NOT NULL,
  `visit_team_name` varchar(100) NOT NULL,
  `visit_team_alias` varchar(100) NOT NULL,
  `visit_team_display_name` varchar(255) NOT NULL,
  `visit_outcome` varchar(20) NOT NULL,
  `visit_score` int(11) NOT NULL,
  `visit_shootout_goals` int(11) NOT NULL,
  `total_periods` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`xml_date_time`, `xml_day`, `xml_timezone`, `xml_utc_hour`, `xml_utc_minute`, `version_number`, `league_global_id`, `league_name`, `league_alias`, `league_display_name`, `season_year`, `season_id`, `season_description`, `game_date_time`, `game_date_day`, `game_timezone`, `game_utc_hour`, `game_utc_minute`, `game_localdatetime`, `game_localday`, `tba`, `gamecode_global_code`, `gamecode_code`, `coverage`, `agg_partner_game_global_code`, `game_type_id`, `game_type_description`, `game_week`, `game_original_week`, `status_id`, `status`, `stadium_global_id`, `stadium_id`, `stadium_name`, `match_number`, `home_team_global_id`, `home_team_id`, `home_team_location`, `home_team_name`, `home_team_alias`, `home_team_display_name`, `home_outcome`, `home_score`, `home_shootout_goals`, `visit_team_global_id`, `visit_team_id`, `visit_team_location`, `visit_team_name`, `visit_team_alias`, `visit_team_display_name`, `visit_outcome`, `visit_score`, `visit_shootout_goals`, `total_periods`) VALUES
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-08-14 11:00:00', 7, 0, -4, 0, '2011-08-14 16:00:00', 7, 'false', 1061205, 2011081410406, 6, '', 1, 'Regular Season', 1, 1, 1, 'Pre-Game', 5383, 226, 'The Hawthorns', 0, 7139, 406, 'West Bromwich Albion', '', 'WBA', 'West Bromwich Albion', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-08-22 15:00:00', 1, 0, -4, 0, '2011-08-22 20:00:00', 1, 'false', 1061212, 2011082210034, 6, '', 1, 'Regular Season', 2, 2, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6154, 39, 'Tottenham Hotspur', '', 'TOT', 'Tottenham Hotspur', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-08-28 11:00:00', 7, 0, -4, 0, '2011-08-28 16:00:00', 7, 'false', 1061221, 2011082810034, 6, '', 1, 'Regular Season', 3, 3, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6145, 21, 'Arsenal', '', 'ARS', 'Arsenal', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-09-10 12:30:00', 6, 0, -4, 0, '2011-09-10 17:30:00', 6, 'false', 1061228, 2011091010089, 6, '', 1, 'Regular Season', 4, 4, 1, 'Pre-Game', 5241, 76, 'Reebok Stadium', 0, 6155, 89, 'Bolton Wanderers', '', 'BW', 'Bolton Wanderers', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-09-18 11:00:00', 7, 0, -4, 0, '2011-09-18 16:00:00', 7, 'false', 1061242, 2011091810034, 6, '', 1, 'Regular Season', 5, 5, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6159, 25, 'Chelsea', '', 'CHE', 'Chelsea', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-09-24 12:30:00', 6, 0, -4, 0, '2011-09-24 17:30:00', 6, 'false', 1061254, 2011092411139, 6, '', 1, 'Regular Season', 6, 6, 1, 'Pre-Game', 6128, 555, 'Britannia Stadium', 0, 8246, 1139, 'Stoke City', '', 'STO', 'Stoke City', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-10-01 10:00:00', 6, 0, -4, 0, '2011-10-01 15:00:00', 6, 'false', 1061262, 2011100110034, 6, '', 1, 'Regular Season', 7, 7, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 7132, 91, 'Norwich City', '', 'NC', 'Norwich City', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-10-15 07:45:00', 6, 0, -4, 0, '2011-10-15 12:45:00', 6, 'false', 1061269, 2011101510032, 6, '', 1, 'Regular Season', 8, 8, 1, 'Pre-Game', 5204, 31, 'Anfield', 0, 6140, 32, 'Liverpool', '', 'LIV', 'Liverpool', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-10-23 08:30:00', 7, 0, -4, 0, '2011-10-23 13:30:00', 7, 'false', 1061283, 2011102310034, 6, '', 1, 'Regular Season', 9, 9, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6158, 33, 'Manchester City', '', 'MCY', 'Manchester City', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-10-29 08:00:00', 6, 0, -4, 0, '2011-10-29 12:00:00', 6, 'false', 1061288, 2011102910028, 6, '', 1, 'Regular Season', 10, 10, 1, 'Pre-Game', 5200, 27, 'Goodison Park', 0, 6149, 28, 'Everton', '', 'EVE', 'Everton', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-11-05 11:00:00', 6, 0, -4, 0, '2011-11-05 15:00:00', 6, 'false', 1061303, 2011110510034, 6, '', 1, 'Regular Season', 11, 11, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 7129, 38, 'Sunderland', '', 'SUN', 'Sunderland', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-11-19 12:30:00', 6, 0, -5, 0, '2011-11-19 17:30:00', 6, 'false', 1061313, 2011111911141, 6, '', 1, 'Regular Season', 12, 12, 1, 'Pre-Game', 6132, 559, 'Liberty Stadium', 0, 8248, 1141, 'Swansea City', '', 'SWA', 'Swansea City', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-11-26 10:00:00', 6, 0, -5, 0, '2011-11-26 15:00:00', 6, 'false', 1061321, 2011112610034, 6, '', 1, 'Regular Season', 13, 13, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6151, 36, 'Newcastle United', '', 'NCU', 'Newcastle United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-12-03 10:00:00', 6, 0, -5, 0, '2011-12-03 15:00:00', 6, 'false', 1061327, 2011120310022, 6, '', 1, 'Regular Season', 14, 14, 1, 'Pre-Game', 5194, 21, 'Villa Park', 0, 6144, 22, 'Aston Villa', '', 'AST', 'Aston Villa', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-12-10 10:00:00', 6, 0, -5, 0, '2011-12-10 15:00:00', 6, 'false', 1061341, 2011121010034, 6, '', 1, 'Regular Season', 15, 15, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 7140, 476, 'Wolverhampton', '', 'WLV', 'Wolverhampton', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-12-17 10:00:00', 6, 0, -5, 0, '2011-12-17 15:00:00', 6, 'false', 1061353, 2011121710094, 6, '', 1, 'Regular Season', 16, 16, 1, 'Pre-Game', 5390, 233, 'Loftus Road', 0, 7135, 94, 'Queens Park Rangers', '', 'QPR', 'Queens Park Rangers', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-12-21 15:00:00', 3, 0, -5, 0, '2011-12-21 20:00:00', 3, 'false', 1061364, 2011122110214, 6, '', 1, 'Regular Season', 17, 17, 1, 'Pre-Game', 5240, 75, 'Craven Cottage', 0, 6156, 214, 'Fulham', '', 'FUL', 'Fulham', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-12-26 10:00:00', 1, 0, -5, 0, '2011-12-26 15:00:00', 1, 'false', 1061371, 2011122610034, 6, '', 1, 'Regular Season', 18, 18, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6150, 815, 'Wigan Athletic', '', 'WIG', 'Wigan Athletic', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-12-31 10:00:00', 6, 0, -5, 0, '2011-12-31 15:00:00', 6, 'false', 1061381, 2011123110034, 6, '', 1, 'Regular Season', 19, 19, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6152, 88, 'Blackburn Rovers', '', 'BLA', 'Blackburn Rovers', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-01-14 10:00:00', 6, 0, -5, 0, '2012-01-14 15:00:00', 6, 'false', 1061401, 2012011410034, 6, '', 1, 'Regular Season', 21, 21, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6155, 89, 'Bolton Wanderers', '', 'BW', 'Bolton Wanderers', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-01-21 10:00:00', 6, 0, -5, 0, '2012-01-21 15:00:00', 6, 'false', 1061407, 2012012110021, 6, '', 1, 'Regular Season', 22, 22, 1, 'Pre-Game', 5570, 430, 'Emirates Stadium', 0, 6145, 21, 'Arsenal', '', 'ARS', 'Arsenal', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-01-31 15:00:00', 2, 0, -5, 0, '2012-01-31 20:00:00', 2, 'false', 1061418, 2012013110034, 6, '', 1, 'Regular Season', 23, 23, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 8246, 1139, 'Stoke City', '', 'STO', 'Stoke City', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-02-04 10:00:00', 6, 0, -5, 0, '2012-02-04 15:00:00', 6, 'false', 1061428, 2012020410025, 6, '', 1, 'Regular Season', 24, 24, 1, 'Pre-Game', 5197, 24, 'Stamford Bridge', 0, 6159, 25, 'Chelsea', '', 'CHE', 'Chelsea', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-02-11 10:00:00', 6, 0, -5, 0, '2012-02-11 15:00:00', 6, 'false', 1061442, 2012021110034, 6, '', 1, 'Regular Season', 25, 25, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6140, 32, 'Liverpool', '', 'LIV', 'Liverpool', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-02-25 10:00:00', 6, 0, -5, 0, '2012-02-25 15:00:00', 6, 'false', 1061452, 2012022510091, 6, '', 1, 'Regular Season', 26, 26, 1, 'Pre-Game', 6124, 551, 'Carrow Road', 0, 7132, 91, 'Norwich City', '', 'NC', 'Norwich City', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-03-03 10:00:00', 6, 0, -5, 0, '2012-03-03 15:00:00', 6, 'false', 1061464, 2012030310039, 6, '', 1, 'Regular Season', 27, 27, 1, 'Pre-Game', 5211, 38, 'White Hart Lane', 0, 6154, 39, 'Tottenham Hotspur', '', 'TOT', 'Tottenham Hotspur', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-03-10 10:00:00', 6, 0, -5, 0, '2012-03-10 15:00:00', 6, 'false', 1061472, 2012031010034, 6, '', 1, 'Regular Season', 28, 28, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 7139, 406, 'West Bromwich Albion', '', 'WBA', 'West Bromwich Albion', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-03-17 11:00:00', 6, 0, -4, 0, '2012-03-17 15:00:00', 6, 'false', 1061486, 2012031710476, 6, '', 1, 'Regular Season', 29, 29, 1, 'Pre-Game', 5437, 282, 'Molineux', 0, 7140, 476, 'Wolverhampton', '', 'WLV', 'Wolverhampton', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-03-24 11:00:00', 6, 0, -4, 0, '2012-03-24 15:00:00', 6, 'false', 1061491, 2012032410034, 6, '', 1, 'Regular Season', 30, 30, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6156, 214, 'Fulham', '', 'FUL', 'Fulham', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-03-31 10:00:00', 6, 0, -4, 0, '2012-03-31 15:00:00', 6, 'false', 1061498, 2012033110088, 6, '', 1, 'Regular Season', 31, 31, 1, 'Pre-Game', 5242, 77, 'Ewood Park', 0, 6152, 88, 'Blackburn Rovers', '', 'BLA', 'Blackburn Rovers', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-04-07 10:00:00', 6, 0, -4, 0, '2012-04-07 15:00:00', 6, 'false', 1061511, 2012040710034, 6, '', 1, 'Regular Season', 32, 32, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 7135, 94, 'Queens Park Rangers', '', 'QPR', 'Queens Park Rangers', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-04-09 10:00:00', 1, 0, -4, 0, '2012-04-09 15:00:00', 1, 'false', 1061525, 2012040910815, 6, '', 1, 'Regular Season', 33, 33, 1, 'Pre-Game', 5546, 402, 'DW Stadium', 0, 6150, 815, 'Wigan Athletic', '', 'WIG', 'Wigan Athletic', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-04-14 10:00:00', 6, 0, -4, 0, '2012-04-14 15:00:00', 6, 'false', 1061531, 2012041410034, 6, '', 1, 'Regular Season', 34, 34, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6144, 22, 'Aston Villa', '', 'AST', 'Aston Villa', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-04-21 10:00:00', 6, 0, -4, 0, '2012-04-21 15:00:00', 6, 'false', 1061543, 2012042110034, 6, '', 1, 'Regular Season', 35, 35, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 6149, 28, 'Everton', '', 'EVE', 'Everton', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-04-28 10:00:00', 6, 0, -4, 0, '2012-04-28 15:00:00', 6, 'false', 1061549, 2012042810033, 6, '', 1, 'Regular Season', 36, 36, 1, 'Pre-Game', 5435, 280, 'Etihad Stadium', 0, 6158, 33, 'Manchester City', '', 'MCY', 'Manchester City', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-05-05 10:00:00', 6, 0, -4, 0, '2012-05-05 15:00:00', 6, 'false', 1061563, 2012050510034, 6, '', 1, 'Regular Season', 37, 37, 1, 'Pre-Game', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 8248, 1141, 'Swansea City', '', 'SWA', 'Swansea City', '', 0, 0, 0),
('2011-08-11 17:21:39', 4, 'Eastern', -4, 0, 2, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2012-05-13 10:00:00', 7, 0, -4, 0, '2012-05-13 15:00:00', 7, 'false', 1061572, 2012051310038, 6, '', 1, 'Regular Season', 38, 38, 1, 'Pre-Game', 5210, 37, 'Stadium Of Light', 0, 7129, 38, 'Sunderland', '', 'SUN', 'Sunderland', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0);
