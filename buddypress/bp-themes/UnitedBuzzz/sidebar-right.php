<div class="sidebar-wrapper">
    <div class="sidebar" id="sidebar-right">
		<div class="sidebar-inner-wrapper">

			<div id="sidebar-fixtures-scores">
				<!--<h3><span>CountDown</span></h3>-->
				<div id="countdown-timer-wrapper" class="sidebar-f-s-div">
					<div id="between"><?php echo get_option('between'); ?></div>
					<?php
						$target = mktime( get_option('hours'), get_option('minutes'), get_option('seconds'), get_option('month'), get_option('day'), get_option('year'));
						$today = time(); 
						$time_parameters= days_hours_minutes_seconds($today, $target);
						$days = (isset($time_parameters['days'])?$time_parameters['days']:'0');
						$hrs = (isset($time_parameters['hours'])?$time_parameters['hours']:'0');
						$min = (isset($time_parameters['minutes'])?$time_parameters['minutes']:'0');
						$sec = (isset($time_parameters['seconds'])?$time_parameters['seconds']:'0');
					?>
					<div id='clock_text'>
						<div>
							<span id='days'><?php echo $days ?></span>
						</div>
						<div>
							<span id='hrs'><?php echo $hrs ?></span> 
						</div>
						<div>
							<span id='min'><?php echo $min ?></span>  
						</div>
						<div>
							<span id='sec'><?php echo $sec?></span>
						</div>
						<span>DAYS</span>  
						<span>HOURS</span> 
						<span>MINS</span>
						<span>SEC</span>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-fixtures-scores">
				<h3><span>Fixtures & Results</span></h3>
				<div id="sidebar-content-design-div" class="sidebar-f-s-div">
					<?php #dynamic_sidebar( $sidebar ); ?>
					<?php dynamic_sidebar('Right Fixures'); ?>
				</div>
				<?php $fixturesPage = get_page_by_title('Fixtures'); ?>
				<a href="<?php echo get_permalink($fixturesPage->ID); ?>" class="sidebar-more">More</a>
			</div>
		</div>
			
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-fixtures-scores">			
				<h3><span>League Table</span></h3>
				<div id="sidebar-content-design-div" class="sidebar-f-s-div">
					<?php #dynamic_sidebar( $sidebar ); ?>
					<?php dynamic_sidebar('Leagues'); ?>
				</div>
			</div>
		</div>
		<!--
		<div class="sidebar-inner-wrapper">
			<div id="sidebar-fixtures-scores">
				<h3><span>Invite Others</span></h3>
				<div id="sidebar-content-design-div" class="sidebar-f-s-div inviteOthers">
					<?php #dynamic_sidebar('Invite Others'); ?>
					<input type="text" id="txt_inviteUserEmail" name="inviter_email_box" class="r-header-login-text-input" placeholder="Email" />
					<input type="password" id="txt_inviteUserPwd" name="inviter_password_box" class="r-header-login-text-input" placeholder="Password" />
					
					<?php $services = array('Gmail', 'Yahoo!', 'Hotmail', 'AOL', 'Aussiemail', 'FastMail', 'Freemail', 'IndiaTimes', 'KataMail', 'OperaMail'); ?>
					<select id="sel_inviteService">
					<?php foreach($services as $service) { ?>
						<option value="<?php echo strtolower($service); ?>"><?php echo $service; ?></option>
					<?php } ?>
					</select>
					<button class="btn_inviteOthers" id="btn_inviteSubmit">Invite Others</button>
				</div>
			</div>
		</div>
		-->
		
    </div>
</div>
<div class="clear">&nbsp;</div>
