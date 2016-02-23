<?php
/*
Plugin Name: Leagues Widget Plugin
Plugin URI: 
Description:
Author: Vivek Shrinivasan
Version: 1.0
Author URI: http://vivekipedia.com/
*/

/**
 * Fixtures Widget
 */

#error_reporting(E_ALL);

add_action("widgets_init", array('leagues_widget', 'register'));

class leagues_widget {

	function __construct() {
		$this->numbers = array('one', 'two', 'three', 'four', 'five', 'six',);
		$this->leagueTypes = array('pos', 'team', 'g', 'w', 'd', 'l', 'gf', 'ga', 'p');
	}
	
	function activate() {
		foreach($this->numbers as $number) {
			foreach($this->leagueTypes as $leagueType) {
				$data = array('option_'.$number.'_'.$leagueType => 'sample');
			}
		}

		if(!get_option('leagues_widget')) {
			add_option('leagues_widget', $data);
		}
		else {
			update_option('leagues_widget', $data);
		}
	}
	
	function deactivate() {
		delete_option('leagues_widget');
	}
	
	function control() {
		$data = get_option('leagues_widget');
		#echo $this->numbers;
	?>
		<table class="backend_league_table">
			<?php foreach($this->numbers as $number) { ?>
			<tr>
				<th>League <?php echo $number; ?></th>
			</tr>				
			<tr>
				<?php foreach($this->leagueTypes as $leagueType) { ?>
				<td>
					<label><?php echo $leagueType; ?><label>
					<input size="2" type="text" name="txt_option_<?php echo $number; ?>_<?php echo $leagueType; ?>" value="<?php echo $data['option_'.$number.'_'.$leagueType]; ?>" />
				</td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	<?php
		if(empty($_POST)) return;
		
		if(isset($_POST)) {
			foreach($this->numbers as $number) {
				foreach($this->leagueTypes as $leagueType) {
					$data['option_'.$number.'_'.$leagueType] = strip_tags($_POST['txt_option_'.$number.'_'.$leagueType]);
				}
			}
			update_option('leagues_widget', $data);
		}
	}

	function widget($args) {
		$data = get_option('leagues_widget');
		#echo $args['before_widget'];
		#echo $args['before_title'];
	?>
		<table class="manu_leagues_sidebar_table">
			<tr>
				<th>Pos</th>
				<th><span>Team</span></th>
				<th>G</th>
				<th>W</th>
				<th>D</th>
				<th>L</th>
				<th>GF</th>
				<th>GA</th>
				<th>P</th>
			</tr>
			<?php foreach($this->numbers as $number) { ?>
			<tr>
				<?php foreach($this->leagueTypes as $leagueType) { ?>
					<td><span><?php echo $data['option_'.$number.'_'.$leagueType]; ?></span></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	<?php
		#echo $args['after_title'];
		#echo $args['after_widget'];
	}
	
	function register() {
		$leagues_widget = new leagues_widget();
		wp_register_sidebar_widget('leagues_widget_id_1', 'Leagues Widget', array($leagues_widget, 'widget'));
		wp_register_widget_control('leagues_widget_id_1', 'Leagues Widget', array($leagues_widget, 'control'));
	}
}
