<?php
	//$imgsrc= get_site_url().'/wp-content/plugins/matchcast/images/football-field-big.png';
	$imgsrc= plugins_url('images/stadium.png',dirname(__FILE__) );
?>
<div id='mc-ground-outer-wrapper-otherteam'>
	<div id='mc-ground-wrapper-otherteam'>
		<?php 
			$i = 1;
			while($i < 12){ 
		?>
			<div class='otherteam_players_wrapper'>
				<a class='otherteam_players' title="">
					<?php echo "p".$i;?>
				</a>
			</div>
		<?php 
			$i++;
			}
		?>
	
		<div id="mc-player-select-wrapper-otherteam">
			<input id="mc-player-select-otherteam" placeholder="'Jersey No'-'Player Name'"></input>
			<input id="mc-player-select-button-otherteam" type="button" value="Save"></input>
		</div>
	</div>
</div>
		<?php global $post; ?>
		<input type="hidden" name="postid" value="<?php echo $post->ID ?>" id="postid">
		<input type="hidden" name="post_type" value="<?php echo $post->post_type ?>" id="post_type">
		<input id="save-otherteam-mc" type="button" value="Save MatchCast"></input>
<style>
	#mc-ground-wrapper-otherteam{
		height:358px;
		width:450px;
		background-image:url('<?php echo $imgsrc ?>');
		position:relative;
		background-repeat:no-repeat;
	}
	.otherteam_players_wrapper{
		position:absolute;
	}
	.otherteam_players{
		height:20px;
		width:20px;
		font-size:9px;
		font-weight:bold;
		background-color:#333;
		color:#fff;
		-moz-user-select:none;
		-webkit-user-select:none;
		-o-user-select:none;
		user-select:none;
		cursor:move;
		display:block;
		line-height:20px;
		text-align:center;
		-webkit-border-radius: 100px; 
		-moz-border-radius: 100px; 
		border-radius:100px; 
		-moz-background-clip: padding; -webkit-background-clip: padding-box; background-clip: padding-box; 
	}
	#mc-player-select-wrapper-otherteam{
		position:absolute;
		display:none;
		background-color:#fff;
	}
</style>

<script>
	var pleft,ptop,str,jersey_no;
	jQuery(document).ready(function(){

		jQuery('.otherteam_players_wrapper').draggable({ containment: 'parent' });
		
		jQuery('.otherteam_players_wrapper').dblclick(function(e){
			jQuery('#mc-player-select-wrapper-otherteam').show().appendTo(this);
		})
		
		jQuery('#mc-player-select-button-otherteam').click(function(){
			str = jQuery(this).prev().val()
			jersey_no = str.split("-");
			jQuery(this).parent().prev().html(jersey_no[0]).attr('title',jersey_no[1]);
			jQuery('#mc-player-select-wrapper-otherteam').hide();
		})
		
		/*ajax*/
		jQuery('#save-otherteam-mc').click(function(){
			var mc_otherteam_content = jQuery('#mc-ground-outer-wrapper-otherteam').html();
			var postid = jQuery("#postid").val();
			var post_type = jQuery("#post_type").val();
			var data = {
					action: 'show_matchcast_otherteam',
					mc_otherteam_data: mc_otherteam_content,
					postid: postid,
					post_type: post_type
				}
			jQuery.post(ajaxurl,data, function(response)	
			{
				alert('Match Cast Saved')	;			
			});
		})
	})

</script>
