<form id="events" class="standard-form">
	<div id="menu-pages-heading-wrapper">
		<div id="menu-pages-heading">
			<h3>Create An Event</h3>
		</div>
	</div>
	<table>
		<tr>
			<td>
			<label>
				When?<br/>
				<?php if(isset($_GET['edit']) && $_GET['edit']=='y'){
					$post_details = get_post($_GET['id']);
					?>
					<input type="text" class="jq-cal data inputbox-common-class" name="when" value="<?php echo get_post_meta($_GET['id'], 'When', true);?>"/>
				<?php }else{ ?>
					<input type="text" class="jq-cal data inputbox-common-class" name="when"/>
				<?php } ?>
			</label>
			</td>
		</tr>
		<tr>
			<td>
			<label>
				Time?<br/>
				<?php if(isset($_GET['edit']) && $_GET['edit']=='y'){?>
					<input type="text" class="data inputbox-common-class" name="time" value="<?php echo get_post_meta($_GET['id'], 'Time', true);?>"/>
				<?php }else{ ?>
					<input type="text" class="data inputbox-common-class" name="time"/>
				<?php } ?>
			</label>
			</td>
		</tr>
		<tr>
			<td>
				<label>
					What are you planning?<br/>
					<?php if(isset($_GET['edit']) && $_GET['edit']=='y'){?>
						<input type="text" class="data inputbox-common-class" name="what" value="<?php echo $post_details->post_title;?>"/>
					<?php }else{ ?>
							<input type="text" class="data inputbox-common-class" name="what"/>
					<?php } ?>
				</label>
			</td>
		</tr>
		<tr>
			<td>
				<label>
					Where?<br/>
					<?php if(isset($_GET['edit']) && $_GET['edit']=='y'){?>
						<input type="text" class="data inputbox-common-class" name="where" value="<?php echo get_post_meta($_GET['id'], 'Where', true);?>"/>
					<?php }else{ ?>
						<input type="text" class="data inputbox-common-class" name="where"/>
					<?php } ?>
				</label>
			</td>
		</tr>
		<tr>
			<td>
				<label>
					More Info?<br/>
					<?php if(isset($_GET['edit']) && $_GET['edit']=='y'){?>
						<textarea name="more" class="data inputbox-common-class"><?php echo $post_details->post_content;?></textarea>
						<input type="hidden" class="data" name="editCheck" value="y" />
						<input type="hidden" class="data" name="editID" value="<?php echo $_GET['id'];?>" />
					<?php }else{ ?>
						<textarea name="more" class="data inputbox-common-class"></textarea>
					<?php } ?>
				</label>
			</td>
		</tr>
		<!--
		<tr>
		<td>Who's Invited?</td>
		<td><input type="text" id="send-to-input"/></td>
		</tr>
		-->
		<tr>
			<td colspan="2">
				<?php if(isset($_GET['edit']) && $_GET['edit']=='y'){?>
					<input type="submit" value="Update Event" id="add-event" class="create-event"/>
				<?php }else{ ?>
					<input type="submit" value="Create Event" id="add-event" class="create-event"/>
				<?php } ?>
			</td>
		</tr>
	</table>
	<script>
		jQuery(document).ready(function(){
			jQuery(".jq-cal").datepicker();
			jQuery('#events').submit(function(){
				data={}
				jQuery('.data').each(function(){
					data[jQuery(this).attr('name')]=jQuery(this).val()
				})
				data['action']='add-event'
				jQuery.ajax({url:ajaxurl, data:data, type:'post', dataType:'json', success:function(data){
					if(data.success){
					//	alert('Event has been successfully created.');
						jQuery('.data').val('')
						window.location = data.pLink;
					}else{
						alert(data.reason)
					}
				}})      
				//console.log(data)
				return false;
			})
		})
	</script>
</form>
