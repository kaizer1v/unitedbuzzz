<?php
	//$imgsrc= get_site_url().'/wp-content/plugins/matchcast/images/football-field-big.jpg';
	$imgsrc= plugins_url('images/stadium.png',dirname(__FILE__) );
?>
<div id='mc-ground-outer-wrapper'>
	<div id='mc-ground-wrapper'>
		<?php 
			$i = 1;
			while($i < 12){ 
		?>
			<div class='utd_players_wrapper'>
				<a class='utd_players' title="">
					<?php echo "p".$i;?>
				</a>
			</div>
		<?php 
			$i++;
			}
		?>
	
		<div id="mc-player-select-wrapper">
			<select id="mc-player-select">
				<option>Select</option>
				<?php 
					$args=array('post_type' => 'player', 'numberposts' => 1000);
					$allposts = get_posts($args);
					foreach($allposts as $p)
					{
							$playerCustom = get_post_custom($p->ID);							
							echo "<option>".$playerCustom['player_jersey_number'][0]."-".$p->post_title."</option>";
					}
				?>						
			</select>
			<input id="mc-player-select-button" type="button" value="Save"></input>
		</div>
	</div>
</div>
		<?php global $post; ?>
		<input type="hidden" name="postid" value="<?php echo $post->ID ?>" id="postid">
		<input type="hidden" name="post_type" value="<?php echo $post->post_type ?>" id="post_type">
		<input id="save-mc" type="button" value="Save MatchCast"></input>
<style>
	#mc-ground-wrapper{
		height:358px;
		width:450px;
		background-image:url('<?php echo $imgsrc ?>');
		position:relative;
		background-repeat:no-repeat;
	}
	.utd_players_wrapper{
		position:absolute;
	}
	.utd_players{
		height:20px;
		width:20px;
		font-size:9px;
		font-weight:bold;
		background-color:red;
		color:#FFE500;
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
	#mc-player-select-wrapper{
		position:absolute;
		display:none;
		background-color:#fff;
	}
</style>

<script>
	var pleft,ptop,str,jersey_no;
	jQuery(document).ready(function(){

		jQuery('.utd_players_wrapper').draggable({ containment: 'parent' });
		
		jQuery('.utd_players_wrapper').dblclick(function(e){
			jQuery('#mc-player-select-wrapper').show().appendTo(this);
		})
		
		jQuery('#mc-player-select-button').click(function(){
			jQuery("#mc-player-select option:selected").each(function () {
				if(jQuery(this).val() != "Select"){
					str = jQuery(this).val();
					jersey_no = str.split("-");
					jQuery(this).parent().parent().prev().html(jersey_no[0]).attr('title',jersey_no[1]);
			//		jQuery(this).remove();
					jQuery('#mc-player-select-wrapper').hide();
				}
			})
		})
		
		/*ajax*/
		jQuery('#save-mc').click(function(){
			var mc_utd_content = jQuery('#mc-ground-outer-wrapper').html();
			var postid = jQuery("#postid").val();
			var post_type = jQuery("#post_type").val();
			var data = {
					action: 'show_matchcast_utd',
					mc_manutd_data:mc_utd_content,
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
