<?php
/*
Plugin Name: Fixtures Widget Plugin
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
add_action("widgets_init", array('fixtures_widget', 'register'));

class fixtures_widget {

	function __construct() {
		$this->numbers = array('one', 'two', 'three', 'four', 'five');
		$this->fixtureTypes = array('date', 'team', 'score', 'against', 'ko');
	}

	function activate() {
		foreach($this->numbers as $number) {
			foreach($this->fixtureTypes as $fixtureType) {
				$data = array('option_'.$number.'_'.$fixtureType => 'sample');
			}
		}	
		
		if(!get_option('fixtures_widget')) {
			add_option('fixtures_widget', $data);
		}
		else {
			update_option('fixtures_widget', $data);
		}
	}
	
	function deactivate() {
		delete_option('fixtures_widget');
	}
	
	function control() {
		$data = get_option('fixtures_widget');
	?>
		<table>
			<?php foreach($this->numbers as $number) { ?>
				<tr><th>Fixture <?php echo $number; ?></th></tr>
				<tr>
				<?php foreach($this->fixtureTypes as $fixtureType) { ?>
					<td>
						<label><?php echo $fixtureType; ?></label>
						<input size="2" type="text" name="txt_option_<?php echo $number; ?>_<?php echo $fixtureType; ?>" value="<?php echo $data['option_'.$number.'_'.$fixtureType]; ?>" />
				<?php } ?>
				</tr>
			<?php } ?>
		</table>
	<?php
		if(empty($_POST)) return;
		
		if(isset($_POST)) {
			foreach($this->numbers as $number) {
				foreach($this->fixtureTypes as $fixtureType) {
					$data['option_'.$number.'_'.$fixtureType] = strip_tags($_POST['txt_option_'.$number.'_'.$fixtureType]);		
				}
			}
			update_option('fixtures_widget', $data);
		}
	}

	function widget($args) {
		$data = get_option('fixtures_widget');
		#echo $args['before_widget'];
		#echo $args['before_title'];
	?>
		<table class="manu_fixtures_sidebar_table">
			<tr>
				<th>Date</th>
				<th></th>
				<th>Match</th>
				<th></th>
				<th>KO (GMT)</th>
			</tr>
			<?php foreach($this->numbers as $number) { ?>
			<tr>
				<?php foreach($this->fixtureTypes as $fixtureType) { ?>
					<td><span><?php echo $data['option_'.$number.'_'.$fixtureType]; ?></span></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	<?php
		#echo $args['after_title'];
		#echo $args['after_widget'];
	}
	
	function register() {
		$fixturesWidget = new fixtures_widget();
		wp_register_sidebar_widget('fixtures_widget_id_1', 'Fixtures Widget', array($fixturesWidget, 'widget'));
		wp_register_widget_control('fixtures_widget_id_1', 'Fixtures Widget', array($fixturesWidget, 'control'));
	}
}
