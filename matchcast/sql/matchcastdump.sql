-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2011 at 12:46 PM
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
-- Table structure for table `commentaries`
--

CREATE TABLE IF NOT EXISTS `commentaries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `game_id` int(10) NOT NULL,
  `gamecode_global_code` int(50) NOT NULL,
  `gamecode_code` bigint(50) NOT NULL,
  `comment_half` int(10) NOT NULL,
  `comment_time` int(10) NOT NULL,
  `comment_number` int(10) NOT NULL,
  `comment_headline` varchar(255) NOT NULL,
  `comment_text` text NOT NULL,
  `chant_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `commentary_id` int(10) NOT NULL,
  `game_code` bigint(20) NOT NULL,
  `userid` int(10) NOT NULL,
  `comment_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment_like`
--

CREATE TABLE IF NOT EXISTS `comment_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentary_id` int(11) NOT NULL,
  `game_code` bigint(20) NOT NULL,
  `userid` int(10) NOT NULL,
  `like` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `dream_team`
--

CREATE TABLE IF NOT EXISTS `dream_team` (
  `user_id` int(50) NOT NULL,
  `formation_id` varchar(50) NOT NULL,
  `players` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sports_date` datetime NOT NULL,
  `sports_day` int(10) NOT NULL,
  `sports_timezone` varchar(40) NOT NULL,
  `sports_utc_hour` int(5) NOT NULL,
  `sports_utc_minute` int(5) NOT NULL,
  `sports_version_number` int(5) NOT NULL,
  `league_global_id` int(10) NOT NULL,
  `league_name` varchar(50) NOT NULL,
  `league_alias` varchar(10) NOT NULL,
  `league_display_name` varchar(50) NOT NULL,
  `season_year` int(10) NOT NULL,
  `season_id` int(10) NOT NULL,
  `season_description` varchar(50) NOT NULL,
  `game_date` datetime NOT NULL,
  `game_day` int(10) NOT NULL,
  `game_utc_hour` int(10) NOT NULL,
  `game_utc_minute` int(10) NOT NULL,
  `game_local_game_date` datetime NOT NULL,
  `game_local_game_day` int(10) NOT NULL,
  `gamecode_global_code` int(50) NOT NULL,
  `gamecode_code` bigint(100) NOT NULL,
  `coverage_level` int(10) NOT NULL,
  `aggregate_partner_global_code` int(10) NOT NULL,
  `game_type_id` int(10) NOT NULL,
  `game_type_description` varchar(30) NOT NULL,
  `week` int(10) NOT NULL,
  `gamestate_status_id` int(10) NOT NULL,
  `gamestate_status` varchar(20) NOT NULL,
  `gamestate_period` int(10) NOT NULL,
  `gamestate_minutes` int(10) NOT NULL,
  `gamestate_seconds` int(10) NOT NULL,
  `gamestate_additional_minutes` int(10) NOT NULL,
  `stadium_global_id` int(10) NOT NULL,
  `stadium_id` int(10) NOT NULL,
  `stadium_global_name` varchar(30) NOT NULL,
  `match_number` int(5) NOT NULL,
  `visiting_team_global_id` int(20) NOT NULL,
  `visiting_team_id` int(10) NOT NULL,
  `visiting_team_global_location` varchar(50) NOT NULL,
  `visiting_team_global_name` varchar(50) NOT NULL,
  `visiting_team_global_alias` varchar(30) NOT NULL,
  `visiting_team_global_display_name` varchar(50) NOT NULL,
  `visiting_team_global_primary_color` varchar(30) NOT NULL,
  `visiting_team_global_shorts_color` varchar(30) NOT NULL,
  `visiting_team_global_wins` int(10) NOT NULL,
  `visiting_team_global_ties` int(10) NOT NULL,
  `visiting_team_global_losses` int(10) NOT NULL,
  `visiting_team_global_score` int(10) NOT NULL,
  `visiting_team_global_shots` int(10) NOT NULL,
  `visiting_team_global_half` int(10) NOT NULL,
  `visiting_team_global_formation` varchar(40) NOT NULL,
  `home_team_global_id` int(10) NOT NULL,
  `home_team_id` int(10) NOT NULL,
  `home_team_global_location` varchar(50) NOT NULL,
  `home_team_global_name` varchar(50) NOT NULL,
  `home_team_global_alias` varchar(20) NOT NULL,
  `home_team_global_display_name` varchar(50) NOT NULL,
  `home_team_global_primary_color` varchar(30) NOT NULL,
  `home_team_global_shorts_color` varchar(30) NOT NULL,
  `home_team_global_wins` int(10) NOT NULL,
  `home_team_global_ties` int(10) NOT NULL,
  `home_team_global_losses` int(10) NOT NULL,
  `home_team_global_score` int(10) NOT NULL,
  `home_team_global_shots` int(10) NOT NULL,
  `home_team_global_half` int(10) NOT NULL,
  `home_team_global_formation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `match_stats`
--

CREATE TABLE IF NOT EXISTS `match_stats` (
  `match_id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `match_stat_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_shots` varchar(50) NOT NULL,
  `team_fouls` varchar(50) NOT NULL,
  `team_corner_kicks` varchar(50) NOT NULL,
  `team_offsides` varchar(50) NOT NULL,
  `team_possession` varchar(50) NOT NULL,
  `team_yellow_cards` varchar(50) NOT NULL,
  `team_red_cards` varchar(50) NOT NULL,
  `team_saves` varchar(50) NOT NULL,
  PRIMARY KEY (`match_stat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Table structure for table `pbp`
--

CREATE TABLE IF NOT EXISTS `pbp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(10) NOT NULL,
  `half` int(10) NOT NULL,
  `minutes` int(10) NOT NULL,
  `seconds` int(10) NOT NULL,
  `additional_minutes` int(10) NOT NULL,
  `seq_number` int(10) NOT NULL,
  `event_number` int(10) NOT NULL,
  `event_text` varchar(100) NOT NULL,
  `global_team_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `away_score` int(10) NOT NULL,
  `home_score` int(10) NOT NULL,
  `global_offensive_player_id` int(10) NOT NULL,
  `global_defensive_player_id` int(10) NOT NULL,
  `global_assisting_player_id` int(10) NOT NULL,
  `offensive_player_id` int(10) NOT NULL,
  `defensive_player_id` int(10) NOT NULL,
  `assisting_player_id` int(10) NOT NULL,
  `offensive_player_first_name` varchar(100) NOT NULL,
  `offensive_player_last_name` varchar(100) NOT NULL,
  `offensive_player_shirt_name` varchar(100) NOT NULL,
  `offensive_player_full_first_name` varchar(100) NOT NULL,
  `offensive_player_full_last_name` varchar(100) NOT NULL,
  `defensive_player_first_name` varchar(100) NOT NULL,
  `defensive_player_last_name` varchar(100) NOT NULL,
  `defensive_player_shirt_name` varchar(100) NOT NULL,
  `defensive_player_full_first_name` varchar(100) NOT NULL,
  `defensive_player_full_last_name` varchar(100) NOT NULL,
  `assisting_player_first_name` varchar(100) NOT NULL,
  `assisting_player_last_name` varchar(100) NOT NULL,
  `assisting_player_shirt_name` varchar(100) NOT NULL,
  `assisting_player_full_first_name` varchar(100) NOT NULL,
  `assisting_player_full_last_name` varchar(100) NOT NULL,
  `x_coord` int(10) NOT NULL,
  `y_coord` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

-- --------------------------------------------------------

--
-- Table structure for table `player_stats`
--

CREATE TABLE IF NOT EXISTS `player_stats` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `match_id` int(50) NOT NULL,
  `team_name` varchar(200) NOT NULL,
  `player_stat_id` int(50) NOT NULL,
  `jno` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `total_shots` varchar(50) NOT NULL,
  `shots_on_goal` varchar(50) NOT NULL,
  `goals` varchar(50) NOT NULL,
  `assists` varchar(50) NOT NULL,
  `offsides` varchar(50) NOT NULL,
  `fouls_drawn` varchar(50) NOT NULL,
  `fouls_committed` varchar(50) NOT NULL,
  `saves` varchar(50) NOT NULL,
  `yellow_cards` varchar(50) NOT NULL,
  `red_cards` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `team_stats`
--

CREATE TABLE IF NOT EXISTS `team_stats` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `match_id` int(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_stat_id` int(50) NOT NULL,
  `p_jno` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_goals` varchar(50) NOT NULL,
  `p_substitute` varchar(50) NOT NULL,
  `p_red_card` varchar(50) NOT NULL,
  `p_yellow_card` varchar(50) NOT NULL,
  `p_pos` varchar(50) NOT NULL,
  `p_goaltime` int(11) NOT NULL,
  `p_sbstime` int(11) NOT NULL,
  `p_redtime` int(11) NOT NULL,
  `p_yellowtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;
