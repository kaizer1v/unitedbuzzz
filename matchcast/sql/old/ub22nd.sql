-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2011 at 03:17 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unitedbuzzz_main`
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

--
-- Dumping data for table `commentaries`
--

INSERT INTO `commentaries` (`id`, `game_id`, `gamecode_global_code`, `gamecode_code`, `comment_half`, `comment_time`, `comment_number`, `comment_headline`, `comment_text`, `chant_id`) VALUES
(1, 1, 1061254, 2011092411139, 0, 0, 1, 'MAN IN THE MIDDLE', 'Taking charge of today''s game is Peter Walton, who has been a member of the Premier League''s elite group of referees since 2003. The Northamptonshire-based official sent off seven players in the top flight last season, though none from either of these two clubs. He did, however, dismiss two United players within the first half-hour of matches the campaign before last, Nani at Aston Villa in the league (even Sir Alex said he deserved it) and Fabio in the League Cup third round win over Wolves. Walton''s assistants today are Mike Mullarkey and Ceri Richards with Chris Foy fulfilling fourth official duties.', 0),
(2, 1, 1061254, 2011092411139, 0, 0, 2, 'EARLY TEAM NEWS', 'Kenwyne Jones misses out for Stoke having damaged his hamstring in the midweek Carling Cup victory over Tottenham. Salif Diao, Cameron Jerome and Jermaine Pennant are all carrying slight knocks and will have late fitness tests. Rio Ferdinand is set to return for United after a calf injury and could replace Chris Smalling, who is doubtful with a groin problem. Javier Hernandez has recovered from the shin injury he sustained courtesy of that reckless tackle by Ashley Cole in last weekend''s win over Chelsea, while Danny Welbeck returned from a hamstring problem in the midweek Carling Cup success at Leeds.', 0),
(3, 1, 1061254, 2011092411139, 0, 0, 3, 'PLAYER TO WATCH', 'Look no further than Wayne Rooney, who has scored nine goals in the opening five Premier League games, plus a couple for England in Bulgaria. The United frontman will benefit from a midweek off and will be looking to make his mark against Stoke. He didn''t play in either game against them last season and failed to score in either game the season before that. In fact has never netted against the Potters and no doubt Sir Alex Ferguson will be reminding him of that fact just before kick-off. Javier Hernandez, by contrast, scored three times against Stoke last season.', 0),
(4, 1, 1061254, 2011092411139, 0, 0, 4, 'HEAD-TO-HEAD RECORD', 'United have won 32 of the 76 league meetings between the sides, with Stoke having won 20 and the 24 matches being drawn. United did the double in this fixture last season, but did not have it their own way in either match. They won 2-1 at the Britannia Stadium on October 24, Javier Hernandez putting them in front on 27 minutes and grabbing the winner four minutes from time, just five minutes after Tuncay thought he had snatched a point for the home side with a glorious equaliser. It also finished 2-1 to United at Old Trafford on January 4, with Hernandez (27 mins) again opening the scoring. Dean Whitehead (50) levelled for Stoke, but Nani (62) won it for Sir Alex Ferguson''s side. Stoke''s last victory over United in the league was at the Victoria Ground in the old Division One way back on Boxing Day 1984.', 0),
(5, 1, 1061254, 2011092411139, 0, 0, 5, 'PREVIEW', 'Stoke have the unenviable task of being next up to try and derail the Manchester United rollercoaster when these two sides clash in Saturday''s late game in the Premier League. The top teams always have their hands full when going to the Britannia Stadium, just ask Liverpool who came a cropper a fortnight ago. But if there is one team who has proved adept at handling the Potters in recent years it is United, and a 2-1 victory in this corresponding match last season got their campaign up and running, having drawn their previous four away from home. Stoke have already kept seven clean sheets this season, United need two goals to top Newcastle''s Premier League record for the most goals in the opening six matches of the season (22 goals in 1994-95) so something has got to give. Today''s game kicks off at 1730BST, so join us around 30 minutes beforehand when we should have the confirmed team news, which will be followed by a match commentary.', 0),
(6, 1, 1061254, 2011092411139, 0, 0, 6, 'THE TEAMS', 'Stoke: Begovic, Wilkinson, Shawcross, Woodgate, Wilson, Pennant, Delap, Whelan, Etherington, Walters, Crouch. Substitutes: Sorensen, Huth, Whitehead, Upson, Shotton, Jerome, Palacios.  Man Utd: De Gea, Jones, Ferdinand, Evans, Evra, Nani, Anderson, Fletcher, Young, Berbatov, Hernandez. Substitutes: Lindegaard, Owen, Giggs, Park, Welbeck, Fabio Da Silva, Valencia.  Referee: Peter Walton (Northamptonshire).', 0),
(7, 1, 1061254, 2011092411139, 0, 0, 7, 'ROONEY OUT INJURED', 'There is no Wayne Rooney in the United line-up, he is out with a hamstring injury with his place going to Dimitar Barbatov. Rio Ferdinand returns in central defence, taking the place of Chris Smalling. For Stoke, Jermaine Pennant is back on the right-side of midfield with Jon Walters pushing up into attack the fill the hole left by the absence of the injured Kenwyne Jones.', 0),
(8, 1, 1061254, 2011092411139, 0, 0, 8, 'TEAM NEWS UPDATE', 'Jonny Evans injured his foot in the warm-up, so Antonio Valencia will play at right-back.', 0),
(9, 1, 1061254, 2011092411139, 1, 1, 9, 'HERE WE GO', 'United kick off, attacking the goal to our right.', 0),
(10, 1, 1061254, 2011092411139, 1, 2, 10, 'SWITCH FOR UNITED', 'Just to repeat, Evans was injured in the warm-up, so Phil Jones has moved to centre-back and Antonio Valencia has come in to play on the right side of defence.', 0),
(11, 1, 1061254, 2011092411139, 1, 3, 11, 'UNDER PRESSURE', 'Stoke win an early throw-in, which Delap hurls into the box. David De Gea spills, but the league leaders clear their lines.', 0),
(12, 1, 1061254, 2011092411139, 1, 5, 12, 'PENALTY CLAIMS', 'A richochet sees the ball find its way to Hernandez, who is clean through. Woodgate makes a desperate lunge which sees him just make contact with the ball before the man, so referee Peter Walton is right to dismiss claims for a penalty.', 0),
(13, 1, 1061254, 2011092411139, 1, 6, 13, 'HERNANDEZ HURTING', 'The Mexico striker went down under the challenge and collided with Asmir Begovic. He receives treatment after having suffered what appears to be a hip injury.', 0),
(14, 1, 1061254, 2011092411139, 1, 7, 14, 'BOOKING', 'Glenn Whelan is booked for a bad tackle on Evra which has Sir Alex off his bench in anger. Hernandez, meanwhile, has rejoined the fray.', 0),
(15, 1, 1061254, 2011092411139, 1, 9, 15, 'JONES GOES CLOSE', 'Phil Jones meets a left-wing free-kick from Anderson with a glancing header that is just wide.', 0),
(16, 1, 1061254, 2011092411139, 1, 9, 16, 'NOT GOOD FOR UNITED', 'Javier Hernandez has limped off again and will be unable to continue.', 0),
(17, 1, 1061254, 2011092411139, 1, 11, 17, 'PENNANT NOT FAR AWAY', 'United again have difficulty clearing a Delap long throw and Pennant sees his goalbound follow-up strike a United defender.', 0),
(18, 1, 1061254, 2011092411139, 1, 11, 18, 'UNITED SUBSTITUTION', 'Javier Hernandez is replaced by Michael Owen, who got two goals against Leeds in midweek.', 0),
(19, 1, 1061254, 2011092411139, 1, 15, 19, 'CROUCH HEADS WIDE', 'Another Delap special is hurled towards the near-post, but Crouch sees his header deflected past the post. From the corner Crouch has a free header but nods wide and in any case was adjudged, rightly, to have fouled Phil Jones.', 0),
(20, 1, 1061254, 2011092411139, 1, 18, 20, 'STEADYING INFLUENCE', 'Jonathan Walters frees Marc Wilson down the Stoke left, but the full-back''s cross is expertly dealt with by Rio Ferdinand.', 0),
(21, 1, 1061254, 2011092411139, 1, 19, 21, 'BERBATOV OFF TARGET', 'Dimitar Berbatov climbs highest to meet Anderson''s corner, but the Bulgaria striker heads disappointingly wide.', 0),
(22, 1, 1061254, 2011092411139, 1, 22, 22, 'ANOTHER CASUALTY', 'Jermaine Pennant is down with what appears to be a twisted left knee which he sustained after slipping under no challenge at all.', 0),
(23, 1, 1061254, 2011092411139, 1, 26, 23, 'OFF THE PACE', 'Jonathan Walters makes a promising burst forward for Stoke, but when he finds Peter Crouch the move breaks down. The former Spurs forward has been off the pace so far today, which is not to say he won''t get on the end of a Delap long throw later.', 0),
(24, 1, 1061254, 2011092411139, 1, 27, 24, 'GOAL UNITED', 'Nani gives United the lead.', 0),
(25, 1, 1061254, 2011092411139, 1, 28, 25, 'MORE ON THAT GOAL', 'It''s a goal out of nothing from the Portugal star. He exchanged passes with Fletcher high up the pitch and waltzed past the Stoke defence before netting with a low shot into the corner.', 0),
(26, 1, 1061254, 2011092411139, 1, 29, 26, 'ALMOST A LEVELLER', 'Back come Stoke. Pennant crosses, United half clear and Andy Wilkinson''s rasping shot is brilliantly saved by David De Gea, who palms it on to the crossbar.', 0),
(27, 1, 1061254, 2011092411139, 1, 33, 28, 'BAD MISS FROM NANI', 'A back-pass from Ryan Shawcross is miscontrolled by Begovic, who under pressure from Darren Fletcher plays the ball out to Nani. Twenry yards out and the goal gaping, it should be 2-0, but Nani is high and wide with his effort.', 0),
(28, 1, 1061254, 2011092411139, 1, 35, 29, 'DELAP OFF TARGET', 'Wilkinson fearlessly wins the ball in the centre circle and feeds Delap, whose long-range effort goes wide.', 0),
(29, 1, 1061254, 2011092411139, 1, 36, 30, 'BRILLIANT SAVE', 'Jonathan Walters shoots for goal from inside the box. It goes between the legs of Patrice Evra and forces David De Gea into his second world-class save of the half.', 0),
(30, 1, 1061254, 2011092411139, 1, 40, 31, 'FERDINAND FUMING', 'United''s England central defender is incensed by the lack of movement from his strikers when looking for an option from the back.', 0),
(31, 1, 1061254, 2011092411139, 1, 42, 32, 'POOR FIRST TOUCH FROM OWEN', 'Nani plays a promising ball inside to Owen, whose first touch drives him too wide and Shawcross is across to clear.', 0),
(32, 1, 1061254, 2011092411139, 1, 44, 33, 'STOKE STILL PRESSING', 'Jon Walters drops a fantastic ball in from the left to beyond the far post but neither Crouch nor Pennant can apply the decisive touch.', 0),
(33, 1, 1061254, 2011092411139, 1, 45, 34, 'ADDED TIME', 'There will be four minutes of added time after that injury to Javier Hernandez.', 0),
(34, 1, 1061254, 2011092411139, 1, 45, 35, 'JONES ATTACKS WITH PURPOSE', 'Phil Jones bustles forward from the back again and his left-foot shot hits Shawcross and goes out for a corner.', 0),
(35, 1, 1061254, 2011092411139, 1, 45, 37, 'HT: STOKE 0 MAN UTD 1', 'Manchester United lead at the interval thanks to that superb strike from Nani. The Portugal midfielder crafted the goal himself, playing a give-and-go with Darren Fletcher before beating the Stoke defence single-handedly and shooting low into the corner. Stoke almost levelled immediately, but David De Gea made a brilliant save to deny Andy Wilkinson, who saw his shot parried on to the bar. The Spaniard made an equally stupendous stop to keep out an effort from Jon Walters nine minutes before the break. It''s been an evenly-contested half, with one piece of class the difference. United are on course for a sixth straight league win, but Stoke are far from out of it yet.', 0),
(36, 1, 1061254, 2011092411139, 2, 46, 38, 'HERE WE GO AGAIN', 'Stoke get the second half under way.', 0),
(37, 1, 1061254, 2011092411139, 2, 49, 39, 'SIMPLY NOT GOOD ENOUGH', 'Matthew Etheringrton is often among the assist leaders in the Premier League, but his crossing so far today has been woeful. Another case in point, as a lofted pass in for Crouch provides catching practice for the United goalkeeper.', 0),
(38, 1, 1061254, 2011092411139, 2, 51, 40, 'YOUNG CROSS', 'A patient build-up from United finally ends with Ashley Young putting in a low ball from the left that Owen is unable to get on the end of.', 0),
(39, 1, 1061254, 2011092411139, 2, 52, 41, 'GOAL - STOKE 1 UNITED 0', 'Peter Crouch heads Stoke level.', 0),
(40, 1, 1061254, 2011092411139, 2, 53, 42, 'MORE ON THAT GOAL', 'It''s a text-book Stoke goal: Etherington left-wing corner, towering header from the giraffe, who has become the sixth player to score for six different Premier League clubs.', 0),
(41, 1, 1061254, 2011092411139, 2, 54, 43, 'BACK COME UNITED', 'The visitors look to restore their lead, but Dimitar Berbatov shoots straight at Asmir Begovic.', 0),
(42, 1, 1061254, 2011092411139, 2, 56, 45, 'HORROR MISS FROM CROUCH', 'Rio Ferdinand misses a cross from the right and presents Crouch with a gilt-edged chance. The scorer is unable to beat the goalkeeper from close range, his shot striking David De Gea and bouncing off the Spaniard''s back for a corner.', 0),
(43, 1, 1061254, 2011092411139, 2, 60, 46, 'TIME FOR A CHANGE', 'Danny Welbeck is warming up on the sidelines for United. Neither Michael Owen nor Dimitar Berbatov could have any complaints if Sir Alex removed them.', 0),
(44, 1, 1061254, 2011092411139, 2, 62, 47, 'TAME SHOT BY ANDERSON', 'Anderson makes a promising run across the front of the Stoke back-four, but his angled shot lacks the venom to truly test Asmir Begovic.', 0),
(45, 1, 1061254, 2011092411139, 2, 66, 48, 'PENALTY CLAIMS', 'There are half-hearted claims for a Stoke penalty after Pennant takes a tumble in the box, but referee Peter Walton is having none of it.', 0),
(46, 1, 1061254, 2011092411139, 2, 67, 49, 'CURLING FREE-KICK', 'Valencia catches Walters in the face with a high boot and Stoke have a free-kick in a very dangerous position on the edge of the area. Wilson curls it over the wall and de Gea fists away with some difficulty.', 0),
(47, 1, 1061254, 2011092411139, 2, 70, 50, 'HANDBALL CLAIMS', 'United mount an attacking threat and Young sees his shot blocked by Begovic. Evra''s follow-up hits a Stoke arm - that should be a penalty but the linesman has his flag up for offside.', 0),
(48, 1, 1061254, 2011092411139, 2, 71, 51, 'UNITED SUBSTITUTIONS', 'Ryan Giggs comes on for Ashley Young and Danny Welbeck replaces Dimitar Berbatov.', 0),
(49, 1, 1061254, 2011092411139, 2, 72, 52, 'IN NEED OF TREATMENT', 'A collision between Patrice Evra and Jonathan Walters leaves the United man requiring the physio.', 0),
(50, 1, 1061254, 2011092411139, 2, 76, 54, 'UNITED FIND A SECOND WIND', 'Nani is still causing Stoke some consternation and the Portuguese cuts in from the right before firing in a shot that is deflected wide for a corner. A desperate tackle from Ryan Shawcross then denies Owen.', 0),
(51, 1, 1061254, 2011092411139, 2, 80, 55, 'WELBECK LOOKING LIVELY', 'United are certainly causing the Stoke defence one or two more problems with the introduction of the lively Welbeck.', 0),
(52, 1, 1061254, 2011092411139, 2, 83, 56, 'STOKE SUBSTITUTION', 'Robert Huth replaces Andy Wilkinson, who has had a terrific game for Stoke.', 0),
(53, 1, 1061254, 2011092411139, 2, 84, 58, 'CHANCE GOES BEGGING', 'Another Stoke set-piece, another chance as Crouch heads wide from an Etherington corner.', 0),
(54, 1, 1061254, 2011092411139, 2, 86, 59, 'STOKE SUBSTITUTION', 'Dean Whitehead replaces Rory Delap for the home side.', 0),
(55, 1, 1061254, 2011092411139, 2, 87, 60, 'CROUCH SHOOTS WIDE', 'Crouch holds off Valencia at the far post to take down an Etherington cross on his chest but is off balance as he pulls the trigger and fires wide.', 0),
(56, 1, 1061254, 2011092411139, 2, 90, 61, 'STILL TIME FOR A WINNER', 'There will be four minutes of added time.', 0),
(57, 1, 1061254, 2011092411139, 2, 90, 62, 'BAD MISS FROM GIGGS', 'United have a chance to win it in injury time. Nani exchanges passes with Valencia and crosses to the far post. The unmarked former Wales winger looks odds-on to score, but shins the ball wide.', 0),
(58, 1, 1061254, 2011092411139, 2, 90, 63, 'SUBSTITUTION', 'Cameron Jerome replaces Jermaine Pennant for Stoke.', 0),
(59, 1, 1061254, 2011092411139, 2, 90, 64, 'FLAG DENIES UNITED', 'A lovely flick from Anderson puts Owen in the clear, but the flag is up for offside.', 0),
(60, 1, 1061254, 2011092411139, 2, 90, 65, 'FT: STOKE 1 MAN UTD 1', 'Stoke dent Manchester United''s 100 per cent record after coming from behind to snatch a draw in a pulsating encounter at the Britannia Stadium. United led at the break courtesy of a superb individual goal from Nani and were equally grateful to two world-class saves from David de Gea. But in the end Sir Alex Ferguson''s side will likely be satisfied, somewhat grudgingly, with a point after surrendering their lead to Peter Crouch''s 53rd-minute header from Matthew Etherington''s free-kick. United, remember, had to do without the services of nine-goal Wayne Rooney (hamstring injury in training) and then lost Javier Hernandez, also to injury, in the early going. A draw was still enough to take them back to the top of the table, while Stoke are now able to say they have finally taken points off the Red Devils in the Premier League era having lost all six previous meetings between the sides.', 0);

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commentary_id`, `game_code`, `userid`, `comment_text`) VALUES
(1, 60, 0, 1, 'asdasdasdasd'),
(2, 59, 0, 1, 'test'),
(3, 57, 0, 1, 'aisdnoiansd'),
(4, 58, 0, 1, 'sdfghjkl'),
(5, 56, 0, 1, 'asd'),
(6, 55, 0, 1, 'asdnasokdnoasid');

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

--
-- Dumping data for table `comment_like`
--

INSERT INTO `comment_like` (`id`, `commentary_id`, `game_code`, `userid`, `like`) VALUES
(1, 60, 0, 1, 'y'),
(2, 59, 0, 1, 'n'),
(3, 58, 0, 1, 'n'),
(4, 57, 0, 1, 'n'),
(5, 56, 0, 1, 'n'),
(6, 54, 0, 1, 'n'),
(7, 55, 0, 1, 'n'),
(8, 52, 0, 1, 'n'),
(9, 51, 0, 1, 'n'),
(10, 50, 0, 1, 'n'),
(11, 48, 0, 1, 'n'),
(12, 49, 0, 1, 'n'),
(13, 47, 0, 1, 'n'),
(14, 44, 0, 1, 'n'),
(15, 43, 0, 1, 'y'),
(16, 42, 0, 1, 'y'),
(17, 41, 0, 1, 'y'),
(18, 60, 0, 1, 'y');

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

--
-- Dumping data for table `dream_team`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `sports_date`, `sports_day`, `sports_timezone`, `sports_utc_hour`, `sports_utc_minute`, `sports_version_number`, `league_global_id`, `league_name`, `league_alias`, `league_display_name`, `season_year`, `season_id`, `season_description`, `game_date`, `game_day`, `game_utc_hour`, `game_utc_minute`, `game_local_game_date`, `game_local_game_day`, `gamecode_global_code`, `gamecode_code`, `coverage_level`, `aggregate_partner_global_code`, `game_type_id`, `game_type_description`, `week`, `gamestate_status_id`, `gamestate_status`, `gamestate_period`, `gamestate_minutes`, `gamestate_seconds`, `gamestate_additional_minutes`, `stadium_global_id`, `stadium_id`, `stadium_global_name`, `match_number`, `visiting_team_global_id`, `visiting_team_id`, `visiting_team_global_location`, `visiting_team_global_name`, `visiting_team_global_alias`, `visiting_team_global_display_name`, `visiting_team_global_primary_color`, `visiting_team_global_shorts_color`, `visiting_team_global_wins`, `visiting_team_global_ties`, `visiting_team_global_losses`, `visiting_team_global_score`, `visiting_team_global_shots`, `visiting_team_global_half`, `visiting_team_global_formation`, `home_team_global_id`, `home_team_id`, `home_team_global_location`, `home_team_global_name`, `home_team_global_alias`, `home_team_global_display_name`, `home_team_global_primary_color`, `home_team_global_shorts_color`, `home_team_global_wins`, `home_team_global_ties`, `home_team_global_losses`, `home_team_global_score`, `home_team_global_shots`, `home_team_global_half`, `home_team_global_formation`) VALUES
(1, '2011-09-24 14:35:58', 6, 'Eastern', -4, 0, 4, 39, 'English Premier League', 'EPL', '', 2011, 1, '2011 EPL Season', '2011-09-24 12:00:00', 6, -4, 0, '0000-00-00 00:00:00', 6, 1061254, 2011092411139, 6, 0, 1, 'Regular Season', 6, 4, 'Final', 2, 0, 0, 0, 6128, 555, 'Britannia Stadium', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '0000A0', '000000', 5, 1, 0, 1, 5, 1, '4-4-2', 8246, 1139, 'Stoke City', '', 'STO', 'Stoke City', 'FF0000', 'FFFFFF', 2, 3, 1, 0, 6, 1, '4-4-2');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `match_stats`
--

INSERT INTO `match_stats` (`match_id`, `team_name`, `match_stat_id`, `team_shots`, `team_fouls`, `team_corner_kicks`, `team_offsides`, `team_possession`, `team_yellow_cards`, `team_red_cards`, `team_saves`) VALUES
(1061254, 'other', 24, '-', 'asdas', '-', 'da', 'asda', 'sdasd', '-', '-'),
(1061254, 'manutd', 23, 'assadsa', '0f', 'asfas', '-', 'f', 'asfas', 'f', '-');

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

--
-- Dumping data for table `pbp`
--

INSERT INTO `pbp` (`id`, `game_id`, `half`, `minutes`, `seconds`, `additional_minutes`, `seq_number`, `event_number`, `event_text`, `global_team_id`, `team_id`, `away_score`, `home_score`, `global_offensive_player_id`, `global_defensive_player_id`, `global_assisting_player_id`, `offensive_player_id`, `defensive_player_id`, `assisting_player_id`, `offensive_player_first_name`, `offensive_player_last_name`, `offensive_player_shirt_name`, `offensive_player_full_first_name`, `offensive_player_full_last_name`, `defensive_player_first_name`, `defensive_player_last_name`, `defensive_player_shirt_name`, `defensive_player_full_first_name`, `defensive_player_full_last_name`, `assisting_player_first_name`, `assisting_player_last_name`, `assisting_player_shirt_name`, `assisting_player_full_first_name`, `assisting_player_full_last_name`, `x_coord`, `y_coord`) VALUES
(1, 1, 1, 1, 0, 0, 1, 21, 'Start Half', 8246, 1139, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(2, 1, 1, 1, 50, 0, 2, 6, 'Cross', 8246, 1139, 0, 0, 408123, 345873, 0, 81026, 3115, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', 'Rio', 'Ferdinand', '', 'Rio', 'Ferdinand', '', '', '', '', '', 95, 65),
(3, 1, 1, 2, 19, 0, 3, 5, 'Corner Kick', 8246, 1139, 0, 0, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 105, 70),
(4, 1, 1, 2, 51, 0, 4, 47, 'Throw-In', 8246, 1139, 0, 0, 360933, 0, 0, 81020, 0, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', '', '', '', '', '', '', '', '', '', '', 92, 70),
(5, 1, 1, 6, 20, 0, 5, 46, 'Goal Kick', 8246, 1139, 0, 0, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(6, 1, 1, 6, 33, 0, 6, 8, 'Foul', 8246, 1139, 0, 0, 368409, 515121, 0, 16509, 93900, 0, 'Jonathan', 'Walters', '', 'Jonathan', 'Walters', 'Phil', 'Jones', '', 'Phil', 'Jones', '', '', '', '', '', 83, 52),
(7, 1, 1, 7, 2, 0, 7, 8, 'Foul', 8246, 1139, 0, 0, 368309, 346097, 0, 16379, 18104, 0, 'Glenn', 'Whelan', '', 'Glenn', 'Whelan', 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', 54, 55),
(8, 1, 1, 7, 6, 0, 8, 2, 'Caution', 8246, 1139, 0, 0, 368309, 0, 0, 16379, 0, 0, 'Glenn', 'Whelan', '', 'Glenn', 'Whelan', '', '', '', '', '', '', '', '', '', '', 0, 0),
(9, 1, 1, 7, 53, 0, 9, 8, 'Foul', 8246, 1139, 0, 0, 346333, 348983, 0, 46350, 41516, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', '', '', '', '', '', 9, 7),
(10, 1, 1, 8, 23, 0, 10, 9, 'Free Kick', 6157, 34, 0, 0, 349057, 0, 0, 43857, 0, 0, '', 'Anderson', 'Anderson', 'Anderson', 'Luis de Abreu Oliveira', '', '', '', '', '', '', '', '', '', '', 9, 6),
(11, 1, 1, 8, 24, 0, 11, 6, 'Cross', 6157, 34, 0, 0, 346274, 0, 0, 41670, 0, 0, 'Ashley', 'Young', '', 'Ashley', 'Young', '', '', '', '', '', '', '', '', '', '', 9, 6),
(12, 1, 1, 8, 25, 0, 12, 19, 'Shot', 6157, 34, 0, 0, 515121, 0, 0, 93900, 0, 0, 'Phil', 'Jones', '', 'Phil', 'Jones', '', '', '', '', '', '', '', '', '', '', 10, 36),
(13, 1, 1, 9, 7, 0, 13, 19, 'Shot', 8246, 1139, 0, 0, 346049, 345873, 0, 15124, 3115, 0, 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', 'Rio', 'Ferdinand', '', 'Rio', 'Ferdinand', '', '', '', '', '', 75, 23),
(14, 1, 1, 9, 48, 0, 14, 47, 'Throw-In', 6157, 34, 0, 0, 345938, 0, 0, 3804, 0, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', '', '', '', '', '', '', '', '', '', '', 70, 0),
(15, 1, 1, 10, 26, 0, 15, 47, 'Throw-In', 8246, 1139, 0, 0, 360933, 0, 0, 81020, 0, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', '', '', '', '', '', '', '', '', '', '', 97, 70),
(16, 1, 1, 10, 27, 0, 16, 6, 'Cross', 8246, 1139, 0, 0, 360933, 0, 0, 81020, 0, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', '', '', '', '', '', '', '', '', '', '', 97, 70),
(17, 1, 1, 11, 13, 0, 17, 6, 'Cross', 6157, 34, 0, 0, 515121, 345858, 0, 93900, 2581, 0, 'Phil', 'Jones', '', 'Phil', 'Jones', 'Jonathan', 'Woodgate', '', 'Jonathan', 'Woodgate', '', '', '', '', '', 5, 52),
(18, 1, 1, 11, 37, 0, 18, 22, 'Substitution', 6157, 34, 0, 0, 345847, 0, 0, 2528, 0, 0, 'Michael', 'Owen', '', 'Michael James', 'Owen', '', '', '', '', '', '', '', '', '', '', 0, 0),
(19, 1, 1, 11, 47, 0, 19, 5, 'Corner Kick', 6157, 34, 0, 0, 348983, 375929, 0, 41516, 45009, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', 'Ryan', 'Shawcross', '', 'Ryan', 'Shawcross', '', '', '', '', '', 0, 70),
(20, 1, 1, 12, 29, 0, 20, 46, 'Goal Kick', 8246, 1139, 0, 0, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(21, 1, 1, 12, 43, 0, 21, 47, 'Throw-In', 6157, 34, 0, 0, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 78, 70),
(22, 1, 1, 12, 54, 0, 22, 47, 'Throw-In', 8246, 1139, 0, 0, 408123, 0, 0, 81026, 0, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', '', '', '', '', '', 68, 70),
(23, 1, 1, 14, 3, 0, 23, 47, 'Throw-In', 8246, 1139, 0, 0, 360933, 0, 0, 81020, 0, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', '', '', '', '', '', '', '', '', '', '', 96, 70),
(24, 1, 1, 14, 4, 0, 24, 6, 'Cross', 8246, 1139, 0, 0, 360933, 0, 0, 81020, 0, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', '', '', '', '', '', '', '', '', '', '', 96, 70),
(25, 1, 1, 14, 5, 0, 25, 19, 'Shot', 8246, 1139, 0, 0, 346049, 345873, 0, 15124, 3115, 0, 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', 'Rio', 'Ferdinand', '', 'Rio', 'Ferdinand', '', '', '', '', '', 96, 38),
(26, 1, 1, 14, 30, 0, 26, 5, 'Corner Kick', 8246, 1139, 0, 0, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 105, 70),
(27, 1, 1, 14, 31, 0, 27, 8, 'Foul', 8246, 1139, 0, 0, 346049, 515121, 0, 15124, 93900, 0, 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', 'Phil', 'Jones', '', 'Phil', 'Jones', '', '', '', '', '', 99, 29),
(28, 1, 1, 15, 3, 0, 28, 8, 'Foul', 8246, 1139, 0, 0, 408123, 346274, 0, 81026, 41670, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', 'Ashley', 'Young', '', 'Ashley', 'Young', '', '', '', '', '', 76, 59),
(29, 1, 1, 16, 9, 0, 29, 46, 'Goal Kick', 8246, 1139, 0, 0, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(30, 1, 1, 16, 55, 0, 30, 6, 'Cross', 8246, 1139, 0, 0, 345852, 515121, 0, 2556, 93900, 0, 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', 'Phil', 'Jones', '', 'Phil', 'Jones', '', '', '', '', '', 93, 63),
(31, 1, 1, 17, 53, 0, 31, 6, 'Cross', 8246, 1139, 0, 0, 346333, 345873, 0, 46350, 3115, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', 'Rio', 'Ferdinand', '', 'Rio', 'Ferdinand', '', '', '', '', '', 94, 6),
(32, 1, 1, 19, 12, 0, 32, 5, 'Corner Kick', 6157, 34, 0, 0, 349057, 0, 0, 43857, 0, 0, '', 'Anderson', 'Anderson', 'Anderson', 'Luis de Abreu Oliveira', '', '', '', '', '', '', '', '', '', '', 0, 0),
(33, 1, 1, 19, 13, 0, 33, 19, 'Shot', 6157, 34, 0, 0, 345969, 0, 0, 5887, 0, 0, 'Dimitar', 'Berbatov', '', 'Dimitar', 'Berbatov', '', '', '', '', '', '', '', '', '', '', 10, 38),
(34, 1, 1, 20, 0, 0, 34, 46, 'Goal Kick', 8246, 1139, 0, 0, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(35, 1, 1, 21, 4, 0, 35, 47, 'Throw-In', 6157, 34, 0, 0, 345938, 0, 0, 3804, 0, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', '', '', '', '', '', '', '', '', '', '', 79, 0),
(36, 1, 1, 23, 17, 0, 36, 46, 'Goal Kick', 6157, 34, 0, 0, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(37, 1, 1, 23, 38, 0, 37, 47, 'Throw-In', 8246, 1139, 0, 0, 408123, 0, 0, 81026, 0, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', '', '', '', '', '', 60, 70),
(38, 1, 1, 23, 51, 0, 38, 8, 'Foul', 6157, 34, 0, 0, 349057, 345852, 0, 43857, 2556, 0, '', 'Anderson', 'Anderson', 'Anderson', 'Luis de Abreu Oliveira', 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', '', '', '', '', '', 72, 62),
(39, 1, 1, 24, 15, 0, 39, 9, 'Free Kick', 8246, 1139, 0, 0, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 73, 63),
(40, 1, 1, 24, 16, 0, 40, 6, 'Cross', 8246, 1139, 0, 0, 345951, 346132, 0, 4809, 21632, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', 'Darren', 'Fletcher', 'Fletcher', 'Darren', 'Fletcher', '', '', '', '', '', 73, 63),
(41, 1, 1, 25, 17, 0, 41, 47, 'Throw-In', 8246, 1139, 0, 0, 346333, 0, 0, 46350, 0, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', '', '', '', '', '', '', '', '', '', 53, 0),
(42, 1, 1, 26, 19, 0, 42, 8, 'Foul', 8246, 1139, 0, 0, 346333, 348983, 0, 46350, 41516, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', '', '', '', '', '', 41, 16),
(43, 1, 1, 27, 33, 0, 43, 20, 'Shot on Goal', 6157, 34, 0, 0, 348983, 0, 0, 41516, 0, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', '', '', '', '', '', '', '', '', '', '', 11, 26),
(44, 1, 1, 27, 34, 0, 44, 11, 'Goal', 6157, 34, 1, 0, 348983, 0, 346132, 41516, 0, 21632, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', '', '', '', '', '', 'Darren', 'Fletcher', 'Fletcher', 'Darren', 'Fletcher', 11, 26),
(45, 1, 1, 28, 28, 0, 45, 20, 'Shot on Goal', 8246, 1139, 1, 0, 408123, 522545, 0, 81026, 94871, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', 92, 45),
(46, 1, 1, 28, 57, 0, 46, 5, 'Corner Kick', 8246, 1139, 1, 0, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 105, 70),
(47, 1, 1, 28, 58, 0, 47, 8, 'Foul', 8246, 1139, 1, 0, 360933, 522545, 0, 81020, 94871, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', 100, 31),
(48, 1, 1, 29, 33, 0, 48, 46, 'Goal Kick', 6157, 34, 1, 0, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(49, 1, 1, 32, 27, 0, 49, 19, 'Shot', 6157, 34, 1, 0, 348983, 0, 0, 41516, 0, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', '', '', '', '', '', '', '', '', '', '', 16, 27),
(50, 1, 1, 32, 58, 0, 50, 46, 'Goal Kick', 8246, 1139, 1, 0, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(51, 1, 1, 33, 14, 0, 51, 47, 'Throw-In', 6157, 34, 1, 0, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 73, 70),
(52, 1, 1, 33, 48, 0, 52, 47, 'Throw-In', 6157, 34, 1, 0, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 6, 70),
(53, 1, 1, 34, 12, 0, 53, 6, 'Cross', 8246, 1139, 1, 0, 408123, 0, 0, 81026, 0, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', '', '', '', '', '', 100, 61),
(54, 1, 1, 34, 25, 0, 54, 19, 'Shot', 8246, 1139, 1, 0, 360933, 0, 0, 81020, 0, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', '', '', '', '', '', '', '', '', '', '', 79, 35),
(55, 1, 1, 34, 58, 0, 55, 46, 'Goal Kick', 6157, 34, 1, 0, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(56, 1, 1, 36, 4, 0, 56, 20, 'Shot on Goal', 8246, 1139, 1, 0, 368409, 522545, 0, 16509, 94871, 0, 'Jonathan', 'Walters', '', 'Jonathan', 'Walters', 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', 92, 48),
(57, 1, 1, 36, 40, 0, 57, 5, 'Corner Kick', 8246, 1139, 1, 0, 345852, 0, 0, 2556, 0, 0, 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', '', '', '', '', '', '', '', '', '', '', 105, 0),
(58, 1, 1, 36, 41, 0, 58, 19, 'Shot', 8246, 1139, 1, 0, 345858, 0, 0, 2581, 0, 0, 'Jonathan', 'Woodgate', '', 'Jonathan', 'Woodgate', '', '', '', '', '', '', '', '', '', '', 95, 30),
(59, 1, 1, 37, 9, 0, 59, 46, 'Goal Kick', 6157, 34, 1, 0, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(60, 1, 1, 37, 57, 0, 60, 5, 'Corner Kick', 6157, 34, 1, 0, 346274, 346049, 0, 41670, 15124, 0, 'Ashley', 'Young', '', 'Ashley', 'Young', 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', '', '', '', '', '', 0, 70),
(61, 1, 1, 38, 25, 0, 61, 47, 'Throw-In', 6157, 34, 1, 0, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 33, 70),
(62, 1, 1, 38, 50, 0, 62, 47, 'Throw-In', 8246, 1139, 1, 0, 346333, 0, 0, 46350, 0, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', '', '', '', '', '', '', '', '', '', 40, 0),
(63, 1, 1, 39, 25, 0, 63, 5, 'Corner Kick', 8246, 1139, 1, 0, 345852, 515121, 0, 2556, 93900, 0, 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', 'Phil', 'Jones', '', 'Phil', 'Jones', '', '', '', '', '', 105, 0),
(64, 1, 1, 40, 23, 0, 64, 47, 'Throw-In', 6157, 34, 1, 0, 345938, 0, 0, 3804, 0, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', '', '', '', '', '', '', '', '', '', '', 64, 0),
(65, 1, 1, 41, 9, 0, 65, 47, 'Throw-In', 8246, 1139, 1, 0, 346333, 0, 0, 46350, 0, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', '', '', '', '', '', '', '', '', '', 5, 0),
(66, 1, 1, 41, 48, 0, 66, 6, 'Cross', 6157, 34, 1, 0, 348983, 0, 0, 41516, 0, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', '', '', '', '', '', '', '', '', '', '', 9, 7),
(67, 1, 1, 42, 11, 0, 67, 5, 'Corner Kick', 6157, 34, 1, 0, 349057, 0, 0, 43857, 0, 0, '', 'Anderson', 'Anderson', 'Anderson', 'Luis de Abreu Oliveira', '', '', '', '', '', '', '', '', '', '', 0, 0),
(68, 1, 1, 42, 28, 0, 68, 47, 'Throw-In', 6157, 34, 1, 0, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 10, 70),
(69, 1, 1, 42, 38, 0, 69, 6, 'Cross', 6157, 34, 1, 0, 348983, 389277, 0, 41516, 69999, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', 13, 19),
(70, 1, 1, 43, 46, 0, 70, 46, 'Goal Kick', 6157, 34, 1, 0, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(71, 1, 1, 44, 26, 0, 71, 47, 'Throw-In', 6157, 34, 1, 0, 345938, 0, 0, 3804, 0, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', '', '', '', '', '', '', '', '', '', '', 45, 0),
(72, 1, 1, 45, 34, 1, 72, 19, 'Shot', 6157, 34, 1, 0, 515121, 375929, 0, 93900, 45009, 0, 'Phil', 'Jones', '', 'Phil', 'Jones', 'Ryan', 'Shawcross', '', 'Ryan', 'Shawcross', '', '', '', '', '', 12, 47),
(73, 1, 1, 45, 3, 2, 73, 5, 'Corner Kick', 6157, 34, 1, 0, 346274, 345858, 0, 41670, 2581, 0, 'Ashley', 'Young', '', 'Ashley', 'Young', 'Jonathan', 'Woodgate', '', 'Jonathan', 'Woodgate', '', '', '', '', '', 0, 70),
(74, 1, 1, 45, 20, 3, 74, 47, 'Throw-In', 8246, 1139, 1, 0, 408123, 0, 0, 81026, 0, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', '', '', '', '', '', 67, 70),
(75, 1, 1, 45, 34, 3, 75, 8, 'Foul', 8246, 1139, 1, 0, 368409, 345873, 0, 16509, 3115, 0, 'Jonathan', 'Walters', '', 'Jonathan', 'Walters', 'Rio', 'Ferdinand', '', 'Rio', 'Ferdinand', '', '', '', '', '', 87, 36),
(76, 1, 1, 45, 36, 4, 76, 47, 'Throw-In', 6157, 34, 1, 0, 345938, 0, 0, 3804, 0, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', '', '', '', '', '', '', '', '', '', '', 28, 0),
(77, 1, 1, 45, 10, 5, 77, 13, 'Half Over', 8246, 1139, 1, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(78, 1, 2, 46, 0, 0, 78, 21, 'Start Half', 8246, 1139, 1, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(79, 1, 2, 46, 11, 0, 79, 8, 'Foul', 6157, 34, 1, 0, 346097, 345852, 0, 18104, 2556, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', '', '', '', '', '', 26, 3),
(80, 1, 2, 46, 34, 0, 80, 9, 'Free Kick', 8246, 1139, 1, 0, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 22, 5),
(81, 1, 2, 46, 35, 0, 81, 6, 'Cross', 8246, 1139, 1, 0, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 22, 5),
(82, 1, 2, 47, 2, 0, 82, 46, 'Goal Kick', 6157, 34, 1, 0, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(83, 1, 2, 48, 11, 0, 83, 6, 'Cross', 8246, 1139, 1, 0, 345951, 522545, 0, 4809, 94871, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', 25, 8),
(84, 1, 2, 49, 23, 0, 84, 47, 'Throw-In', 6157, 34, 1, 0, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 42, 0),
(85, 1, 2, 51, 47, 0, 85, 46, 'Goal Kick', 8246, 1139, 1, 0, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(86, 1, 2, 52, 2, 0, 86, 8, 'Foul', 6157, 34, 1, 0, 346132, 408123, 0, 21632, 81026, 0, 'Darren', 'Fletcher', 'Fletcher', 'Darren', 'Fletcher', 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', 39, 7),
(87, 1, 2, 52, 39, 0, 87, 5, 'Corner Kick', 8246, 1139, 1, 0, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 0, 0),
(88, 1, 2, 52, 40, 0, 88, 20, 'Shot on Goal', 8246, 1139, 1, 0, 346049, 0, 0, 15124, 0, 0, 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', '', '', '', '', '', '', '', '', '', '', 7, 34),
(89, 1, 2, 52, 41, 0, 89, 11, 'Goal', 8246, 1139, 1, 1, 346049, 0, 345951, 15124, 0, 4809, 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', '', '', '', '', '', 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', 7, 34),
(90, 1, 2, 53, 45, 0, 90, 6, 'Cross', 6157, 34, 1, 1, 345938, 0, 0, 3804, 0, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', '', '', '', '', '', '', '', '', '', '', 80, 64),
(91, 1, 2, 54, 13, 0, 91, 20, 'Shot on Goal', 6157, 34, 1, 1, 345969, 389277, 0, 5887, 69999, 0, 'Dimitar', 'Berbatov', '', 'Dimitar', 'Berbatov', 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', 86, 21),
(92, 1, 2, 55, 1, 0, 92, 19, 'Shot', 8246, 1139, 1, 1, 346049, 0, 0, 15124, 0, 0, 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', '', '', '', '', '', '', '', '', '', '', 4, 36),
(93, 1, 2, 55, 30, 0, 93, 5, 'Corner Kick', 8246, 1139, 1, 1, 345852, 0, 0, 2556, 0, 0, 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', '', '', '', '', '', '', '', '', '', '', 0, 70),
(94, 1, 2, 55, 55, 0, 94, 47, 'Throw-In', 6157, 34, 1, 1, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 5, 0),
(95, 1, 2, 56, 44, 0, 95, 47, 'Throw-In', 8246, 1139, 1, 1, 360933, 0, 0, 81020, 0, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', '', '', '', '', '', '', '', '', '', '', 8, 70),
(96, 1, 2, 56, 45, 0, 96, 6, 'Cross', 8246, 1139, 1, 1, 360933, 346097, 0, 81020, 18104, 0, 'Rory', 'Delap', '', 'Rory', 'Delap', 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', 8, 70),
(97, 1, 2, 58, 17, 0, 97, 16, 'Offside', 6157, 34, 1, 1, 346274, 0, 0, 41670, 0, 0, 'Ashley', 'Young', '', 'Ashley', 'Young', '', '', '', '', '', '', '', '', '', '', 94, 45),
(98, 1, 2, 59, 16, 0, 98, 16, 'Offside', 8246, 1139, 1, 1, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 9, 24),
(99, 1, 2, 59, 51, 0, 99, 47, 'Throw-In', 6157, 34, 1, 1, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 62, 0),
(100, 1, 2, 61, 28, 0, 100, 47, 'Throw-In', 6157, 34, 1, 1, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 40, 0),
(101, 1, 2, 62, 3, 0, 101, 20, 'Shot on Goal', 6157, 34, 1, 1, 349057, 389277, 0, 43857, 69999, 0, '', 'Anderson', 'Anderson', 'Anderson', 'Luis de Abreu Oliveira', 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', 82, 23),
(102, 1, 2, 63, 39, 0, 102, 6, 'Cross', 8246, 1139, 1, 1, 368309, 0, 0, 16379, 0, 0, 'Glenn', 'Whelan', '', 'Glenn', 'Whelan', '', '', '', '', '', '', '', '', '', '', 4, 18),
(103, 1, 2, 63, 51, 0, 103, 19, 'Shot', 8246, 1139, 1, 1, 346333, 0, 0, 46350, 0, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', '', '', '', '', '', '', '', '', '', 24, 45),
(104, 1, 2, 64, 17, 0, 104, 46, 'Goal Kick', 6157, 34, 1, 1, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(105, 1, 2, 64, 45, 0, 105, 47, 'Throw-In', 6157, 34, 1, 1, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 40, 0),
(106, 1, 2, 65, 16, 0, 106, 47, 'Throw-In', 8246, 1139, 1, 1, 408123, 0, 0, 81026, 0, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', '', '', '', '', '', 57, 0),
(107, 1, 2, 65, 56, 0, 107, 8, 'Foul', 8246, 1139, 1, 1, 408123, 346097, 0, 81026, 18104, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', 59, 3),
(108, 1, 2, 67, 15, 0, 108, 8, 'Foul', 6157, 34, 1, 1, 345938, 368409, 0, 3804, 16509, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', 'Jonathan', 'Walters', '', 'Jonathan', 'Walters', '', '', '', '', '', 20, 46),
(109, 1, 2, 68, 0, 0, 109, 9, 'Free Kick', 8246, 1139, 1, 1, 346333, 0, 0, 46350, 0, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', '', '', '', '', '', '', '', '', '', 22, 46),
(110, 1, 2, 68, 1, 0, 110, 20, 'Shot on Goal', 8246, 1139, 1, 1, 346333, 522545, 0, 46350, 94871, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', 22, 46),
(111, 1, 2, 69, 47, 0, 111, 20, 'Shot on Goal', 6157, 34, 1, 1, 346274, 389277, 0, 41670, 69999, 0, 'Ashley', 'Young', '', 'Ashley', 'Young', 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', 87, 45),
(112, 1, 2, 69, 55, 0, 112, 16, 'Offside', 6157, 34, 1, 1, 345847, 0, 0, 2528, 0, 0, 'Michael', 'Owen', '', 'Michael James', 'Owen', '', '', '', '', '', '', '', '', '', '', 92, 37),
(113, 1, 2, 70, 28, 0, 113, 22, 'Substitution', 6157, 34, 1, 1, 447916, 0, 0, 79900, 0, 0, 'Danny', 'Welbeck', '', 'Danny', 'Welbeck', '', '', '', '', '', '', '', '', '', '', 0, 0),
(114, 1, 2, 70, 28, 0, 114, 22, 'Substitution', 6157, 34, 1, 1, 345826, 0, 0, 2477, 0, 0, 'Ryan', 'Giggs', '', 'Ryan', 'Giggs', '', '', '', '', '', '', '', '', '', '', 0, 0),
(115, 1, 2, 71, 11, 0, 115, 47, 'Throw-In', 6157, 34, 1, 1, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 9, 0),
(116, 1, 2, 73, 18, 0, 116, 47, 'Throw-In', 8246, 1139, 1, 1, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 29, 70),
(117, 1, 2, 73, 50, 0, 117, 46, 'Goal Kick', 6157, 34, 1, 1, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(118, 1, 2, 74, 12, 0, 118, 47, 'Throw-In', 6157, 34, 1, 1, 345938, 0, 0, 3804, 0, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', '', '', '', '', '', '', '', '', '', '', 44, 70),
(119, 1, 2, 74, 47, 0, 119, 6, 'Cross', 6157, 34, 1, 1, 346097, 345852, 0, 18104, 2556, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', '', '', '', '', '', 99, 7),
(120, 1, 2, 75, 1, 0, 120, 5, 'Corner Kick', 6157, 34, 1, 1, 345826, 389277, 0, 2477, 69999, 0, 'Ryan', 'Giggs', '', 'Ryan', 'Giggs', 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', 105, 0),
(121, 1, 2, 75, 30, 0, 121, 47, 'Throw-In', 8246, 1139, 1, 1, 408123, 0, 0, 81026, 0, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', '', '', '', '', '', 69, 0),
(122, 1, 2, 75, 42, 0, 122, 6, 'Cross', 8246, 1139, 1, 1, 345852, 522545, 0, 2556, 94871, 0, 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', 19, 5),
(123, 1, 2, 76, 7, 0, 123, 19, 'Shot', 6157, 34, 1, 1, 348983, 389277, 0, 41516, 69999, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', 83, 44),
(124, 1, 2, 76, 36, 0, 124, 5, 'Corner Kick', 6157, 34, 1, 1, 345826, 408123, 0, 2477, 81026, 0, 'Ryan', 'Giggs', '', 'Ryan', 'Giggs', 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', 105, 0),
(125, 1, 2, 77, 2, 0, 125, 5, 'Corner Kick', 6157, 34, 1, 1, 345826, 0, 0, 2477, 0, 0, 'Ryan', 'Giggs', '', 'Ryan', 'Giggs', '', '', '', '', '', '', '', '', '', '', 105, 0),
(126, 1, 2, 77, 37, 0, 126, 19, 'Shot', 6157, 34, 1, 1, 345847, 0, 0, 2528, 0, 0, 'Michael', 'Owen', '', 'Michael James', 'Owen', '', '', '', '', '', '', '', '', '', '', 94, 27),
(127, 1, 2, 78, 10, 0, 127, 46, 'Goal Kick', 8246, 1139, 1, 1, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(128, 1, 2, 78, 23, 0, 128, 6, 'Cross', 8246, 1139, 1, 1, 368309, 522545, 0, 16379, 94871, 0, 'Glenn', 'Whelan', '', 'Glenn', 'Whelan', 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', 5, 6),
(129, 1, 2, 78, 58, 0, 129, 6, 'Cross', 8246, 1139, 1, 1, 345852, 0, 0, 2556, 0, 0, 'Jermaine', 'Pennant', '', 'Jermaine Lloyd', 'Pennant', '', '', '', '', '', '', '', '', '', '', 11, 8),
(130, 1, 2, 79, 56, 0, 130, 46, 'Goal Kick', 8246, 1139, 1, 1, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(131, 1, 2, 80, 56, 0, 131, 47, 'Throw-In', 8246, 1139, 1, 1, 408123, 0, 0, 81026, 0, 0, 'Andy', 'Wilkinson', '', 'Andy', 'Wilkinson', '', '', '', '', '', '', '', '', '', '', 68, 0),
(132, 1, 2, 81, 48, 0, 132, 47, 'Throw-In', 6157, 34, 1, 1, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 79, 0),
(133, 1, 2, 81, 56, 0, 133, 6, 'Cross', 6157, 34, 1, 1, 346097, 389277, 0, 18104, 69999, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', 95, 3),
(134, 1, 2, 83, 33, 0, 134, 22, 'Substitution', 8246, 1139, 1, 1, 346055, 0, 0, 15522, 0, 0, 'Robert', 'Huth', 'Huth', 'Robert', 'Huth', '', '', '', '', '', '', '', '', '', '', 0, 0),
(135, 1, 2, 83, 51, 0, 135, 5, 'Corner Kick', 8246, 1139, 1, 1, 345951, 0, 0, 4809, 0, 0, 'Matthew', 'Etherington', '', 'Matthew', 'Etherington', '', '', '', '', '', '', '', '', '', '', 0, 0),
(136, 1, 2, 83, 52, 0, 136, 19, 'Shot', 8246, 1139, 1, 1, 346049, 0, 0, 15124, 0, 0, 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', '', '', '', '', '', '', '', '', '', '', 4, 41),
(137, 1, 2, 84, 20, 0, 137, 46, 'Goal Kick', 6157, 34, 1, 1, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(138, 1, 2, 84, 45, 0, 138, 46, 'Goal Kick', 6157, 34, 1, 1, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(139, 1, 2, 85, 6, 0, 139, 47, 'Throw-In', 8246, 1139, 1, 1, 346333, 0, 0, 46350, 0, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', '', '', '', '', '', '', '', '', '', 64, 70),
(140, 1, 2, 85, 41, 0, 140, 22, 'Substitution', 8246, 1139, 1, 1, 374805, 0, 0, 33930, 0, 0, 'Dean', 'Whitehead', '', 'Dean', 'Whitehead', '', '', '', '', '', '', '', '', '', '', 0, 0),
(141, 1, 2, 85, 55, 0, 141, 47, 'Throw-In', 8246, 1139, 1, 1, 346333, 0, 0, 46350, 0, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', '', '', '', '', '', '', '', '', '', 37, 70),
(142, 1, 2, 86, 50, 0, 142, 19, 'Shot', 8246, 1139, 1, 1, 346049, 0, 0, 15124, 0, 0, 'Peter', 'Crouch', 'Crouch', 'Peter', 'Crouch', '', '', '', '', '', '', '', '', '', '', 3, 46),
(143, 1, 2, 87, 18, 0, 143, 46, 'Goal Kick', 6157, 34, 1, 1, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(144, 1, 2, 87, 38, 0, 144, 6, 'Cross', 8246, 1139, 1, 1, 346333, 0, 0, 46350, 0, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', '', '', '', '', '', '', '', '', '', 22, 63),
(145, 1, 2, 87, 51, 0, 145, 46, 'Goal Kick', 6157, 34, 1, 1, 522545, 0, 0, 94871, 0, 0, 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', '', '', '', '', '', 0, 0),
(146, 1, 2, 88, 32, 0, 146, 8, 'Foul', 6157, 34, 1, 1, 348983, 345858, 0, 41516, 2581, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', 'Jonathan', 'Woodgate', '', 'Jonathan', 'Woodgate', '', '', '', '', '', 70, 43),
(147, 1, 2, 90, 57, 0, 147, 47, 'Throw-In', 6157, 34, 1, 1, 345938, 0, 0, 3804, 0, 0, 'Antonio', 'Valencia', '', 'Luis Antonio', 'Valencia', '', '', '', '', '', '', '', '', '', '', 40, 70),
(148, 1, 2, 90, 37, 1, 148, 6, 'Cross', 6157, 34, 1, 1, 348983, 0, 0, 41516, 0, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', '', '', '', '', '', '', '', '', '', '', 89, 62),
(149, 1, 2, 90, 38, 1, 149, 19, 'Shot', 6157, 34, 1, 1, 345826, 0, 0, 2477, 0, 0, 'Ryan', 'Giggs', '', 'Ryan', 'Giggs', '', '', '', '', '', '', '', '', '', '', 98, 25),
(150, 1, 2, 90, 13, 2, 150, 22, 'Substitution', 8246, 1139, 1, 1, 396366, 0, 0, 61264, 0, 0, 'Cameron', 'Jerome', '', 'Cameron', 'Jerome', '', '', '', '', '', '', '', '', '', '', 0, 0),
(151, 1, 2, 90, 33, 2, 151, 46, 'Goal Kick', 8246, 1139, 1, 1, 389277, 0, 0, 69999, 0, 0, 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', '', '', '', '', '', 0, 0),
(152, 1, 2, 90, 15, 3, 152, 8, 'Foul', 8246, 1139, 1, 1, 346333, 348983, 0, 46350, 41516, 0, 'Marc', 'Wilson', 'Wilson', 'Marc', 'Wilson', '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', '', '', '', '', '', 62, 53),
(153, 1, 2, 90, 33, 3, 153, 16, 'Offside', 6157, 34, 1, 1, 345847, 0, 0, 2528, 0, 0, 'Michael', 'Owen', '', 'Michael James', 'Owen', '', '', '', '', '', '', '', '', '', '', 95, 21),
(154, 1, 2, 90, 16, 4, 154, 47, 'Throw-In', 6157, 34, 1, 1, 346097, 0, 0, 18104, 0, 0, 'Patrice', 'Evra', 'Evra', 'Patrice', 'Evra', '', '', '', '', '', '', '', '', '', '', 34, 0),
(155, 1, 2, 90, 46, 4, 155, 6, 'Cross', 6157, 34, 1, 1, 348983, 389277, 0, 41516, 69999, 0, '', 'Nani', 'Nani', 'Luis Carlos', 'Almeida da Cunha', 'Asmir', 'Begovic', '', 'Asmir', 'Begovic', '', '', '', '', '', 102, 59),
(156, 1, 2, 90, 14, 5, 156, 6, 'Cross', 8246, 1139, 1, 1, 368309, 522545, 0, 16379, 94871, 0, 'Glenn', 'Whelan', '', 'Glenn', 'Whelan', 'David', 'De Gea', '', 'David', 'De Gea Quintana', '', '', '', '', '', 4, 9),
(157, 1, 2, 90, 25, 5, 157, 13, 'Half Over', 8246, 1139, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(158, 1, 2, 90, 25, 5, 158, 10, 'Game Over', 8246, 1139, 1, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0);

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

--
-- Dumping data for table `player_stats`
--

INSERT INTO `player_stats` (`id`, `match_id`, `team_name`, `player_stat_id`, `jno`, `name`, `total_shots`, `shots_on_goal`, `goals`, `assists`, `offsides`, `fouls_drawn`, `fouls_committed`, `saves`, `yellow_cards`, `red_cards`) VALUES
(1, 1061254, 'manutd', 1, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(2, 1061254, 'manutd', 2, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(3, 1061254, 'manutd', 3, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(4, 1061254, 'manutd', 4, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(5, 1061254, 'manutd', 5, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(6, 1061254, 'manutd', 6, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(7, 1061254, 'manutd', 7, '-', 'asd', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(8, 1061254, 'manutd', 8, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(9, 1061254, 'manutd', 9, '-', '-', 'pwq-9dhpsa', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(10, 1061254, 'manutd', 10, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(11, 1061254, 'manutd', 11, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(12, 1061254, 'manutd', 12, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(13, 1061254, 'manutd', 13, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(14, 1061254, 'manutd', 14, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(15, 1061254, 'manutd', 15, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(16, 1061254, 'manutd', 16, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(17, 1061254, 'manutd', 17, '-', 'GOOGLE', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(18, 1061254, 'manutd', 18, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(19, 1061254, 'manutd', 19, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(20, 1061254, 'otherTeam', 20, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(21, 1061254, 'otherTeam', 21, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(22, 1061254, 'otherTeam', 22, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(23, 1061254, 'otherTeam', 23, '-', 'Ankur', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(24, 1061254, 'otherTeam', 24, '-', '-', '12948-96421364', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(25, 1061254, 'otherTeam', 25, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(26, 1061254, 'otherTeam', 26, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(27, 1061254, 'otherTeam', 27, '-', 'asfpabnsfksa', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(28, 1061254, 'otherTeam', 28, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(29, 1061254, 'otherTeam', 29, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(30, 1061254, 'otherTeam', 30, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(31, 1061254, 'otherTeam', 31, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(32, 1061254, 'otherTeam', 32, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(33, 1061254, 'otherTeam', 33, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(34, 1061254, 'otherTeam', 34, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(35, 1061254, 'otherTeam', 35, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(36, 1061254, 'otherTeam', 36, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(37, 1061254, 'otherTeam', 37, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(38, 1061254, 'otherTeam', 38, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

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
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-08-16 15:00:00', 1, 0, -4, 0, '2010-08-16 20:00:00', 1, 'false', 984457, 2010081610034, 6, '', 1, 'Regular Season', 1, 1, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 3, 0, 6151, 36, 'Newcastle United', '', 'NCU', 'Newcastle United', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-08-22 11:00:00', 7, 0, -4, 0, '2010-08-22 16:00:00', 7, 'false', 984521, 2010082210214, 6, '', 1, 'Regular Season', 2, 2, 4, 'Final', 5240, 75, 'Craven Cottage', 0, 6156, 214, 'Fulham', '', 'FUL', 'Fulham', 'Tie', 2, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 2, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-08-28 12:30:00', 6, 0, -4, 0, '2010-08-28 17:30:00', 6, 'false', 984591, 2010082810034, 6, '', 1, 'Regular Season', 3, 3, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 3, 0, 6143, 40, 'West Ham United', '', 'WHU', 'West Ham United', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-09-11 07:45:00', 6, 0, -4, 0, '2010-09-11 12:45:00', 6, 'false', 984678, 2010091110028, 6, '', 1, 'Regular Season', 4, 4, 4, 'Final', 5200, 27, 'Goodison Park', 0, 6149, 28, 'Everton', '', 'EVE', 'Everton', 'Tie', 3, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 3, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-09-19 08:30:00', 7, 0, -4, 0, '2010-09-19 13:30:00', 7, 'false', 984759, 2010091910034, 6, '', 1, 'Regular Season', 5, 5, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 3, 0, 6140, 32, 'Liverpool', '', 'LIV', 'Liverpool', 'Loss', 2, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-09-26 07:00:00', 7, 0, -4, 0, '2010-09-26 12:00:00', 7, 'false', 984825, 2010092610089, 6, '', 1, 'Regular Season', 6, 6, 4, 'Final', 5241, 76, 'Reebok Stadium', 0, 6155, 89, 'Bolton Wanderers', '', 'BW', 'Bolton Wanderers', 'Tie', 2, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 2, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-10-02 10:00:00', 6, 0, -4, 0, '2010-10-02 15:00:00', 6, 'false', 984930, 2010100210038, 6, '', 1, 'Regular Season', 7, 7, 4, 'Final', 5210, 37, 'Stadium Of Light', 0, 7129, 38, 'Sunderland', '', 'SUN', 'Sunderland', 'Tie', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-10-16 10:00:00', 6, 0, -4, 0, '2010-10-16 15:00:00', 6, 'false', 985023, 2010101610034, 6, '', 1, 'Regular Season', 8, 8, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 2, 0, 7139, 406, 'West Bromwich Albion', '', 'WBA', 'West Bromwich Albion', 'Tie', 2, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-10-24 08:30:00', 7, 0, -4, 0, '2010-10-24 13:30:00', 7, 'false', 985099, 2010102411139, 6, '', 1, 'Regular Season', 9, 9, 4, 'Final', 6128, 555, 'Britannia Stadium', 0, 8246, 1139, 'Stoke City', '', 'STO', 'Stoke City', 'Loss', 1, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-10-30 12:30:00', 6, 0, -4, 0, '2010-10-30 17:30:00', 6, 'false', 985164, 2010103010034, 6, '', 1, 'Regular Season', 10, 10, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 6154, 39, 'Tottenham Hotspur', '', 'TOT', 'Tottenham Hotspur', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-11-06 11:00:00', 6, 0, -4, 0, '2010-11-06 15:00:00', 6, 'false', 985231, 2010110610034, 6, '', 1, 'Regular Season', 11, 11, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 7140, 476, 'Wolverhampton', '', 'WLV', 'Wolverhampton', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-11-10 15:00:00', 3, 0, -5, 0, '2010-11-10 20:00:00', 3, 'false', 985275, 2010111010033, 6, '', 1, 'Regular Season', 12, 12, 4, 'Final', 5435, 280, 'City Of Manchester', 0, 6158, 33, 'Manchester City', '', 'MCY', 'Manchester City', 'Tie', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-11-13 07:45:00', 6, 0, -5, 0, '2010-11-13 12:45:00', 6, 'false', 985319, 2010111310022, 6, '', 1, 'Regular Season', 13, 13, 4, 'Final', 5194, 21, 'Villa Park', 0, 6144, 22, 'Aston Villa', '', 'AST', 'Aston Villa', 'Tie', 2, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 2, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-11-20 10:00:00', 6, 0, -5, 0, '2010-11-20 15:00:00', 6, 'false', 985393, 2010112010034, 6, '', 1, 'Regular Season', 14, 14, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 6150, 815, 'Wigan Athletic', '', 'WIG', 'Wigan Athletic', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-11-27 10:00:00', 6, 0, -5, 0, '2010-11-27 15:00:00', 6, 'false', 985442, 2010112710034, 6, '', 1, 'Regular Season', 15, 15, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 7, 0, 6152, 88, 'Blackburn Rovers', '', 'BLA', 'Blackburn Rovers', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-12-04 12:30:00', 6, 0, -5, 0, '2010-12-04 17:30:00', 6, 'false', 985508, 2010120411132, 6, '', 1, 'Regular Season', 16, 16, 5, 'Postponed', 6116, 543, 'Bloomfield Road', 0, 8239, 1132, 'Blackpool', '', 'BLP', 'Blackpool', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-12-13 15:00:00', 1, 0, -5, 0, '2010-12-13 20:00:00', 1, 'false', 985576, 2010121310034, 6, '', 1, 'Regular Season', 17, 17, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 1, 0, 6145, 21, 'Arsenal', '', 'ARS', 'Arsenal', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-12-19 11:00:00', 7, 0, -5, 0, '2010-12-19 16:00:00', 7, 'false', 985643, 2010121910025, 6, '', 1, 'Regular Season', 18, 18, 5, 'Postponed', 5197, 24, 'Stamford Bridge', 0, 6159, 25, 'Chelsea', '', 'CHE', 'Chelsea', '', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', '', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-12-26 10:00:00', 7, 0, -5, 0, '2010-12-26 15:00:00', 7, 'false', 985713, 2010122610034, 6, '', 1, 'Regular Season', 19, 19, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 7129, 38, 'Sunderland', '', 'SUN', 'Sunderland', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2010-12-28 15:00:00', 2, 0, -5, 0, '2010-12-28 20:00:00', 2, 'false', 985773, 2010122810546, 6, '', 1, 'Regular Season', 20, 20, 4, 'Final', 5384, 227, 'St. Andrews', 0, 7143, 546, 'Birmingham City', '', 'BC', 'Birmingham City', 'Tie', 1, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-01-01 07:45:00', 6, 0, -5, 0, '2011-01-01 12:45:00', 6, 'false', 985832, 2011010110406, 6, '', 1, 'Regular Season', 21, 21, 4, 'Final', 5383, 226, 'The Hawthorns', 0, 7139, 406, 'West Bromwich Albion', '', 'WBA', 'West Bromwich Albion', 'Loss', 1, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-01-04 15:00:00', 2, 0, -5, 0, '2011-01-04 20:00:00', 2, 'false', 985895, 2011010410034, 6, '', 1, 'Regular Season', 22, 22, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 8246, 1139, 'Stoke City', '', 'STO', 'Stoke City', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-01-16 11:10:00', 7, 0, -5, 0, '2011-01-16 16:10:00', 7, 'false', 985973, 2011011610039, 6, '', 1, 'Regular Season', 23, 23, 4, 'Final', 5211, 38, 'White Hart Lane', 0, 6154, 39, 'Tottenham Hotspur', '', 'TOT', 'Tottenham Hotspur', 'Tie', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-01-22 10:00:00', 6, 0, -5, 0, '2011-01-22 15:00:00', 6, 'false', 986041, 2011012210034, 6, '', 1, 'Regular Season', 24, 24, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 5, 0, 7143, 546, 'Birmingham City', '', 'BC', 'Birmingham City', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-01-25 14:30:00', 2, 0, -5, 0, '2011-01-25 19:30:00', 2, 'false', 1022007, 2011012511132, 6, '', 1, 'Regular Season', 24, 16, 4, 'Final', 6116, 543, 'Bloomfield Road', 0, 8239, 1132, 'Blackpool', '', 'BLP', 'Blackpool', 'Loss', 2, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 3, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-02-01 15:00:00', 2, 0, -5, 0, '2011-02-01 20:00:00', 2, 'false', 986156, 2011020110034, 6, '', 1, 'Regular Season', 25, 25, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 3, 0, 6144, 22, 'Aston Villa', '', 'AST', 'Aston Villa', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-02-05 12:30:00', 6, 0, -5, 0, '2011-02-05 17:30:00', 6, 'false', 986207, 2011020510476, 6, '', 1, 'Regular Season', 26, 26, 4, 'Final', 5437, 282, 'Molineux', 0, 7140, 476, 'Wolverhampton', '', 'WLV', 'Wolverhampton', 'Win', 2, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-02-12 07:45:00', 6, 0, -5, 0, '2011-02-12 12:45:00', 6, 'false', 986261, 2011021210034, 6, '', 1, 'Regular Season', 27, 27, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 6158, 33, 'Manchester City', '', 'MCY', 'Manchester City', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-02-26 10:00:00', 6, 0, -5, 0, '2011-02-26 15:00:00', 6, 'false', 986398, 2011022610815, 6, '', 1, 'Regular Season', 28, 28, 4, 'Final', 5546, 402, 'DW Stadium', 0, 6150, 815, 'Wigan Athletic', '', 'WIG', 'Wigan Athletic', 'Loss', 0, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 4, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-03-01 14:45:00', 2, 0, -5, 0, '2011-03-01 19:45:00', 2, 'false', 1026336, 2011030110025, 6, '', 1, 'Regular Season', 29, 18, 4, 'Final', 5197, 24, 'Stamford Bridge', 0, 6159, 25, 'Chelsea', '', 'CHE', 'Chelsea', 'Win', 2, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-03-06 08:30:00', 7, 0, -5, 0, '2011-03-06 13:30:00', 7, 'false', 986462, 2011030610032, 6, '', 1, 'Regular Season', 29, 29, 4, 'Final', 5204, 31, 'Anfield', 0, 6140, 32, 'Liverpool', '', 'LIV', 'Liverpool', 'Win', 3, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-03-19 11:00:00', 6, 0, -4, 0, '2011-03-19 15:00:00', 6, 'false', 986615, 2011031910034, 6, '', 1, 'Regular Season', 30, 30, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 1, 0, 6155, 89, 'Bolton Wanderers', '', 'BW', 'Bolton Wanderers', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-04-02 07:45:00', 6, 0, -4, 0, '2011-04-02 12:45:00', 6, 'false', 986730, 2011040210040, 6, '', 1, 'Regular Season', 31, 31, 4, 'Final', 5212, 39, 'Upton Park', 0, 6143, 40, 'West Ham United', '', 'WHU', 'West Ham United', 'Loss', 2, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 4, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-04-09 10:00:00', 6, 0, -4, 0, '2011-04-09 15:00:00', 6, 'false', 986795, 2011040910034, 6, '', 1, 'Regular Season', 32, 32, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 6156, 214, 'Fulham', '', 'FUL', 'Fulham', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-04-23 07:45:00', 6, 0, -4, 0, '2011-04-23 12:45:00', 6, 'false', 986941, 2011042310034, 6, '', 1, 'Regular Season', 34, 34, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 1, 0, 6149, 28, 'Everton', '', 'EVE', 'Everton', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-05-01 09:05:00', 7, 0, -4, 0, '2011-05-01 14:05:00', 7, 'false', 987032, 2011050110021, 6, '', 1, 'Regular Season', 35, 35, 4, 'Final', 5570, 430, 'Emirates Stadium', 0, 6145, 21, 'Arsenal', '', 'ARS', 'Arsenal', 'Win', 1, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Loss', 0, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-05-08 11:10:00', 7, 0, -4, 0, '2011-05-08 16:10:00', 7, 'false', 987085, 2011050810034, 6, '', 1, 'Regular Season', 36, 36, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 2, 0, 6159, 25, 'Chelsea', '', 'CHE', 'Chelsea', 'Loss', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-05-14 07:45:00', 6, 0, -4, 0, '2011-05-14 12:45:00', 6, 'false', 987120, 2011051410088, 6, '', 1, 'Regular Season', 37, 37, 4, 'Final', 5242, 77, 'Ewood Park', 0, 6152, 88, 'Blackburn Rovers', '', 'BLA', 'Blackburn Rovers', 'Tie', 1, 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Tie', 1, 0, 0),
('2011-07-19 10:46:23', 2, 'Eastern', -4, 0, 3, 39, 'English Premier League', 'EPL', '', 2010, 1, '2010 EPL Season', '2011-05-22 11:00:00', 7, 0, -4, 0, '2011-05-22 16:00:00', 7, 'false', 1061254, 2011052210034, 6, '', 1, 'Regular Season', 38, 38, 4, 'Final', 5206, 33, 'Old Trafford', 0, 6157, 34, 'Manchester United', '', 'Man', 'Manchester United', 'Win', 4, 0, 8239, 1132, 'Blackpool', '', 'BLP', 'Blackpool', 'Loss', 2, 0, 0);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `team_stats`
--

INSERT INTO `team_stats` (`id`, `match_id`, `team_name`, `team_stat_id`, `p_jno`, `p_name`, `p_goals`, `p_substitute`, `p_red_card`, `p_yellow_card`, `p_pos`) VALUES
(1, 1061254, 'manutd', 1, '12', 'JEF', '1', 'RoonEy', '-', 'yellow_card', 's'),
(2, 1061254, 'manutd', 2, '-', '-', '-', '-', '-', '-', '-'),
(3, 1061254, 'manutd', 3, '-', '-', '-', '-', '-', '-', '-'),
(4, 1061254, 'manutd', 4, '-', '-', '-', '-', '-', '-', '-'),
(5, 1061254, 'manutd', 5, '-', '-', '-', '-', '-', '-', '-'),
(6, 1061254, 'manutd', 6, '-', '-', '-', '-', '-', '-', '-'),
(7, 1061254, 'manutd', 7, '-', '-', '-', '-', '-', '-', '-'),
(8, 1061254, 'manutd', 8, '-', '-', '-', '-', '-', '-', '-'),
(9, 1061254, 'manutd', 9, '13', 'as', '-', '-', 'red_card', '-', 'c'),
(10, 1061254, 'manutd', 10, '-', '-', '-', '-', '-', '-', '-'),
(11, 1061254, 'manutd', 11, '-', '-', '-', '-', '-', '-', '-'),
(12, 1061254, 'manutd', 12, '10', 'RoonEy', '3', 'GOA', '-', 'yellow_card', 'F'),
(13, 1061254, 'manutd', 13, '-', '-', '-', '-', '-', '-', '-'),
(14, 1061254, 'manutd', 14, '-', 'GOA', '-', '-', '-', '-', '-'),
(15, 1061254, 'manutd', 15, '-', '-', '-', '-', '-', '-', '-'),
(16, 1061254, 'manutd', 16, '-', '-', '-', '-', '-', '-', '-'),
(17, 1061254, 'manutd', 17, '-', '-', '-', '-', '-', '-', '-'),
(18, 1061254, 'manutd', 18, '-', '-', '-', '-', '-', '-', '-'),
(19, 1061254, 'manutd', 19, '-', '-', '-', '-', '-', '-', '-'),
(20, 1061254, 'other', 20, '1', 'aso', '2', '-', 'red_card', '-', '123'),
(21, 1061254, 'other', 21, '-', '-', '-', '-', '-', '-', '-'),
(22, 1061254, 'other', 22, '-', '-', '-', '-', '-', '-', '-'),
(23, 1061254, 'other', 23, '-', '-', '-', '-', '-', '-', '-'),
(24, 1061254, 'other', 24, '-', '-', '-', '-', '-', '-', '-'),
(25, 1061254, 'other', 25, '-', '-', '-', '-', '-', '-', '-'),
(26, 1061254, 'other', 26, '-', '-', '-', '-', '-', '-', '-'),
(27, 1061254, 'other', 27, '-', '-', '-', '-', '-', '-', '-'),
(28, 1061254, 'other', 28, '-', 'as', '10', '-', '-', '-', '-'),
(29, 1061254, 'other', 29, '-', '-', '-', '-', '-', '-', 's'),
(30, 1061254, 'other', 30, '-', '-', '-', '-', '-', '-', '-'),
(31, 1061254, 'other', 31, '-', '-', '-', '-', '-', '-', '-'),
(32, 1061254, 'other', 32, '-', 'sa', '-', '-', '-', '-', '-'),
(33, 1061254, 'other', 33, '-', '-', '-', '-', '-', '-', '-'),
(34, 1061254, 'other', 34, '-', '-', '-', '-', '-', '-', '-'),
(35, 1061254, 'other', 35, '-', 'as', '-', '-', '-', '-', '-'),
(36, 1061254, 'other', 36, '-', '-', '-', '-', '-', '-', '-'),
(37, 1061254, 'other', 37, '-', '-', '-', '-', '-', '-', '-'),
(38, 1061254, 'other', 38, '-', '-', '-', '-', '-', '-', '-');
