<div class='wrap nosubsub'>
	<h2>Commentaries List</h2>
	<?php 
		if(!empty($message))
		{
			?>
			<div class="updated"><?php echo $message ?></div>
			<?php	
		}
		
	?>
	
	<div id="addcontainer" >
				Comment Number: <br><input type="text" name="cnumber" id="cnumber" value="" ><br>
				Comment Time:<br> <input type="text" name="ctime" id="ctime" value="" ><br>
				Comment Headline:<br> <input type="text" name="cheadline" id="cheadline" value="" size="117"><br>
				Comment:<br><textarea cols="100" rows="3" name="ccomments" id="ccomments"></textarea><br>
				Audio: <br><div id="audioContainer"><select name="caudio">
							<option></option>
							<?php
								foreach($chants as $chant)
								{			
									$selected = "";
									if($chant->ID == $comment->chant_id)
										$selected = "selected";	
									?>								
										<option value="<?php echo $chant->ID ?>" <?php echo $selected ?> ><?php echo $chant->post_title ?></option>
									<?php
								}
							?>						
						</select></div><br>
				<input type="hidden" name="global_code" id="global_code" value="<?php echo $_GET['commentid']?>">		
				<input type="button" name="" id="addcomment" value="Add Comment">
			</div>
			<div id="showaddbx"><a href="javascript:void(0);"  title="add" >Add new comment</a></div>
	
	<form name="" method="post" >
	<table  style="width: 100%" class="widefat">
		<tr>
			<th>Number</th>
			<th>Time</th>
			<th>Headline</th>
			<th>Text</th>
			<th>Add Audio</th>			
			<th>Action</th>			
		</tr>		
	<tbody id="commentsTblbody">		
	<?php		
		if($allcomments)
		{		
			foreach($allcomments as $comment)
			{
				?>
					<tr id="tr_<?php echo $comment->id ?>">
						<td><strong><?php echo $comment->comment_number ?></strong> </td>
						<td><strong><?php echo $comment->comment_time ?></strong></td>
						<td><?php echo $comment->comment_headline ?></td>
						<td><?php echo $comment->comment_text ?></td>
						<td>
							
							<select name="chant_list[<?php echo $comment->comment_number ?>]">
								<option></option>
								<?php
									foreach($chants as $chant)
									{			
										$selected = "";
										if($chant->ID == $comment->chant_id)
											$selected = "selected";	
										?>								
											<option value="<?php echo $chant->ID ?>" <?php echo $selected ?> ><?php echo $chant->post_title ?></option>
										<?php
									}
								?>						
							</select>
						</td>
						<td>
							<a href="javascript:void(0);" onclick="edit_comment('<?php echo $comment->id ?>')">Edit</a> &nbsp;|&nbsp; <a href="javascript:void(0);" onclick="delete_comment('<?php echo $comment->id ?>')">Delete</a>	
						</td>	
					</tr>
					<tr id="trh_<?php echo $comment->id ?>" style="display:none;"> 
						<td><input type="text" name="" value="<?php echo $comment->comment_number ?>" id="cnumber_<?php echo $comment->id ?>"></td>
						<td><input type="text" name="" value="<?php echo $comment->comment_time ?>" id="ctime_<?php echo $comment->id ?>">  </td>
						<td> <input type="text" name="" value="<?php echo $comment->comment_headline ?>" id="chline_<?php echo $comment->id ?>" > </td>
						<td> <textarea rows="4" cols="40" id="ctext_<?php echo $comment->id ?>"><?php echo $comment->comment_text ?></textarea></td>
						<td>						
							<select name="chant_list[<?php echo $comment->id ?>]" id="cchant_<?php echo $comment->id ?>">
								<option></option>
								<?php
									foreach($chants as $chant)
									{			
										$selected = "";
										if($chant->ID == $comment->chant_id)
											$selected = "selected";	
										?>								
											<option value="<?php echo $chant->ID ?>" <?php echo $selected ?> ><?php echo $chant->post_title ?></option>
										<?php
									}
								?>						
							</select>
						</td>
						<td>
							<a href="javascript:void(0);" onclick="save_updated_comment('<?php echo $comment->id ?>')">Save</a> &nbsp;|&nbsp; <a href="javascript:void(0);"  onclick="cancel('<?php echo $comment->id ?>')" >Cancel</a>	
						</td>	
					</tr>
					<?php
			}
		}		
	?>
	</tbody>	
	<tr>
		<td colspan="5" style="text-align:center;"><input type="submit" name="" value="Submit"></td>
	</tr>
	</table>
	</form>
	
</div>