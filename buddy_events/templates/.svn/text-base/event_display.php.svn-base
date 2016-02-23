<div style="text-align:right">
	<input type="button" value="Attending" class="e-action attend '<?php (($im=='a')?'e-action-selected':'')?>'" data-action="a" data-pid="'<?php ($post->ID)?>'"/>
	<input type="button" value="Not Attending" class="e-action not-attend '<?php (($im=='na')?'e-action-selected':'')?>'" data-action="na" data-pid="'<?php ($post->ID)?>'"/>
	<input type="button" value="Not Sure" class="e-action not-sure '<?php (($im=='ns')?'e-action-selected':'')?>'" data-action="ns" data-pid="<?php ($post->ID)?>'"/>&middot;
    <input type="button" id="e-action-invite" data-pid="'<?php ($post->ID)?>" value="Invite Friends"/>
</div>
<div id="attendance"><?php echo $list ?></div>
<div class="e-el-overlay" style="display:none;"></div>
<div id="e-el-box"></div>

<script>
	var friends_selected=[]
	jQuery(".e-action").click(function(){
		jQuery(".e-action").removeClass("e-action-selected");
		jQuery(this).addClass("e-action-selected");
		jQuery.ajax({"url":ajaxurl, type:"post", data:{action:"e-action", "selection":jQuery(this).attr("data-action"), "pid":jQuery(this).attr("data-pid")}, dataType:"json", success:function(data){if(data.success){jQuery("#attendance").html(data.list)}else{alert(data.reason)}  } });
	})
	jQuery("#e-el-box img").live("click", function(){ jQuery(this).toggleClass("selected"); if(jQuery(this).hasClass("selected")){friends_selected.push(jQuery(this).attr("data-uid"))}else{var removeItem = jQuery(this).attr("data-uid");  friends_selected=jQuery.grep(friends_selected, function(value) {return value != removeItem;});  } } )
	jQuery("#e-action-invite").click(function(){
		jQuery.ajax({url:ajaxurl, data:{action:"friends"}, type:"post", dataType:"json", success:function(data){
			if(data.success){
				jQuery("#e-el-box").html("")
				//if(data.friends.length >= 1){
				for(f in data.friends){
					//alert(jQuery.inArray(data.friends[f].id, friends_selected))
					jQuery("#e-el-box").append("<img class=\'"+((jQuery.inArray(data.friends[f].id, friends_selected)!=-1)?"selected":"")+"\' data-uid=\'"+(data.friends[f].id)+"\' src=\'"+(data.friends[f].image)+"\'/>") 
				}
				jQuery("#e-el-box").append("<div style=\'clear:both; padding-top:5px;\'><form class=\'e-message-form standard-form\'><label>Emails:<br/><input id=\'e-email-box\' type=\'text\'/></label><!-- <label>Message:<br/><textarea></textarea></label> --> </form></div>")
				jQuery("#e-el-box").append("<div style=\'clear:both; padding-top:5px;\'><div style=\' text-align:right; padding-top:5px; border-top:1px solid #ccc\'><input type=\'button\' value=\'Invite\' data-pid=\'"+(jQuery("#e-action-invite").attr("data-pid"))+"\' id=\'e-el-send-invite\'/></div></div>")
				//}else{
				//  jQuery("#e-el-box").append("C\'mon make some friends first.")
				//}
				jQuery(".e-el-overlay").css({opacity:0.5}).fadeIn("fast", function(){jQuery("#e-el-box").animate({"top":"0px"},500);})
			}else{
				alert(data.reason)
			}

		}})
	})
	jQuery("#e-el-send-invite").live("click", function(){if(jQuery("#e-el-box img.selected").length==0 && jQuery("#e-email-box").val().length==0){alert(\'Please select some to be invited.\')}else{
		var invited=[]
		jQuery("#e-el-box img.selected").each(function(){invited.push(jQuery(this).attr(\'data-uid\'))})
		jQuery.ajax({url:ajaxurl, data:{action:"invite", uids:invited, emails:jQuery("#e-email-box").val(), pid:(jQuery("#e-action-invite").attr("data-pid"))}, type:"post", dataType:"json", success:function(data){ jQuery(".e-el-overlay").click()  }})
	}})
	jQuery(".e-el-overlay").click(function(){ 
		jQuery("#e-el-box").animate({"top":"-2500px"},500,function(){jQuery(".e-el-overlay").fadeOut()})
	});
</script>
<style>
	   .e-message-form.standard-form input{width:97%}
	   .e-message-form.standard-form textarea{width:97%}
	   .e-el-overlay{background:black repeat top left; position:fixed; top:0px; bottom:0px; left:0px; right:0px; z-index:1001;}
	   #e-el-box{position:fixed; top:-2500px; left:30%; right:30%; background-color:#fff; color:#7F7F7F; padding:20px; border:2px solid #ccc; -moz-border-radius: 20px; -webkit-border-radius:20px; -khtml-border-radius:20px; -moz-box-shadow: 0 1px 5px #333; -webkit-box-shadow: 0 1px 5px #333; z-index:1005;  border-top:0px; border-top-right-radius:0px; -moz-border-radius-topright:0px; -webkit-border-top-right-radius:0px; -khtml-border-top-right-radius:0px; border-top-left-radius:0px; -moz-border-radius-topleft:0px; -webkit-border-top-left-radius:0px; -khtml-border-top-left-radius:0px;}
   .e-action.attend.e-action-selected{ border-color:green ! important; }
	   .e-action.not-attend.e-action-selected{ border:1px solid green ! important; }
	   .e-action.not-sure.e-action-selected{ border-color:#1FB3DD ! important; }
	   #e-el-box img{width:50px; height:50px; float:left; border:2px solid white; cursor:pointer;}
	   #e-el-box img.selected{border:2px solid #888;}
	   #e-el-box{overflow:auto}
</style>
