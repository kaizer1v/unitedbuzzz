var inv, cvb, iAmFan, clickedEle, vbn, days, hrs, mins, sec;
function lightbox() {
	
	jQuery("#overlay").fadeIn(150, function() {
		jQuery("#list-lightbox").center().fadeIn();
	});
	
	jQuery("#overlay").click(function(){
		jQuery("#list-lightbox").fadeOut(150,function(){
			jQuery("#overlay").fadeOut().unbind('click');
			jQuery(document).unbind('keypress');
		});
	})
	
	jQuery(document).keypress(function(e){
		var code = e.keyCode || e.which;
		if(code==27){
			jQuery("#overlay").click();
		}
	})
}

jQuery.fn.center = function (a) {
	this.css("top", ((jQuery(window).height() - this.height() ) / 2)+jQuery(window).scrollTop()+ "px");
	this.css("left", (( jQuery(window).width() - this.width() ) / 2)+jQuery(window).scrollLeft()+ "px");
	return this;
}

function loadingIcon() {
	jQuery(".loading-icon").fadeIn(150, function(){
			var xxx = jQuery(".loading-icon");
			xxx.fadeIn();
			xxx.css("position","fixed");
			xxx.css("top", (((jQuery(window).height() - xxx.outerHeight()) / 2)-20) + "px");
			xxx.css("left", ((jQuery(window).width() - xxx.outerWidth()) / 2) + "px");
	});
}
function closefancybox(){
	jQuery(".loading-icon").fadeOut(150,function(){
		jQuery(".overlay").fadeOut().unbind('click');
		jQuery(".list-lightbox").fadeOut().unbind('click');
		jQuery(document).unbind('keypress');
	});
}


jQuery(".overlay").live('click',function(){
	closefancybox();
})

//dont remove lightbox if click on the list box
jQuery(".loading-icon").live('click',function(){
	return false;
})

//remove lightbox when escape key is pressed
jQuery(document).keypress(function(e){
	var code = e.keyCode || e.which;
	if(code==27){
		closefancybox();
	}
})

var myObj = {};
myObj.emails = Array();
myObj.inviteDropDown = '';
myObj.inviteDropDown = 'gmail';
myObj.selectedFormation = '';
myObj.selectedPlayerBox = '';
myObj.formationToShow = '';
myObj.dtPlayers = {};
myObj.selectedPlayerBoxClass = '';
myObj.allPossiblePlayers = Array();
myObj.currentPage= '';

myObj.setFormation = function() {
	if(myObj.prevSelectedFormation == "") {
		myObj.selectedFormation = jQuery("#formation-select option:selected").attr("id").substring(6);
	}
	else {
		jQuery.each(jQuery("#formation-select option"), function(k, v) {
			if(jQuery(v).attr("id") == "option" + myObj.prevSelectedFormation) {
				var sss = jQuery(v).val();
				jQuery("#formation-select").val(sss);
			}
		})
		myObj.selectedFormation = jQuery("#formation-select option:selected").attr("id").substring(6);
	}
}

myObj.showSelectedFormation = function() {

	myObj.selectedFormation = jQuery("#formation-select option:selected").attr("id").substring(6);
	
	jQuery("#dt-ground > div").hide();
	jQuery("#f"+myObj.selectedFormation).css('display', 'block');

	if(myObj.playersWithPositions != '') {
		jQuery.each(myObj.playersWithPositions, function(k, v) {
			if(k == 'gk') {
				jQuery("#goalkeeper-"+myObj.selectedFormation).html('<img id="'+v.playerID+'" src="'+v.playerDP+'" title="'+v.playerName+'" width="98%" height="99%" />');
			}
			else {
				jQuery("#f"+myObj.selectedFormation+" div #"+k).html('<img id="'+v.playerID+'" src="'+v.playerDP+'" title="'+v.playerName+'" width="98%" height="99%" />');
			}
		})
	}
}


myObj.loadPlayersToChoose = function() {
//	console.log(myObj.allPossiblePlayers);

	jQuery(".dropdown-div ul").html("");
	jQuery.each(myObj.allPossiblePlayers, function(i, j) {
		//console.log(i+" -- "+j.player_name+" -- "+j.player_img+" == "+j.player_position);
		jQuery(".dropdown-div ul").append(
			'<li id="player-'+i+'"><input type="radio" id="dtplayers" name="dtplayers" value="'+j.player_img+'" title="'+j.player_name+'" />'+
				j.player_name+' - '+j.player_position+
			'</li>'
		);
	})

	jQuery.each(jQuery("#f"+myObj.selectedFormation+" > div"), function(k, v) {
		if(jQuery(v).attr("id").substr(0, 4) == "goal") {
			jQuery.each(jQuery(".dropdown-div ul li"), function(x, y) {
				if(jQuery(v).children().eq(0).attr("id") == jQuery(y).attr("id").substr(7)) {
					jQuery(y).remove();
				}
			})
		}
		else {
			jQuery.each(jQuery(v).children(), function(a, b) {
				jQuery.each(jQuery(b).children().eq(0), function(m, n) {

					jQuery.each(jQuery(".dropdown-div ul li"), function(x, y) {

						if(jQuery(n).attr("id") == jQuery(y).attr("id").substr(7)) {
							jQuery(y).remove();
						}
					})
				})
			})
		}
	})
}

jQuery(document).ready(function() {

	/* DREAM TEAM */
	//myObj.selectedFormation = jQuery("#formation-select option:selected").attr("id").substring(6);

	if(jQuery('#formation-select').length > 0) {
		myObj.setFormation();
		myObj.showSelectedFormation();
		myObj.loadPlayersToChoose();
	}
	
	jQuery("#formation-select").change(myObj.showSelectedFormation);
	//}
	
	jQuery(".player").click(function() {
		myObj.selectedPlayerBox = jQuery(this).attr("id");
		myObj.selectedPlayerBoxClass = jQuery(this).attr("class");
		jQuery(".dropdown-div").show();
	})
	
	jQuery(".dt-player-done").click(function() {
		selectedPlayerID = jQuery("#dtplayers:checked").parent().attr("id").substring(7);
		selectedPlayerDP = jQuery("#dtplayers:checked").attr("value");
		selectedPlayerName = jQuery("#dtplayers:checked").attr("title");
		if(myObj.selectedPlayerBoxClass == 'goalkeeper player') {
			jQuery("#f"+myObj.selectedFormation+" #goalkeeper-"+myObj.selectedFormation).html('<img src="'+selectedPlayerDP+'" id="'+selectedPlayerID+'" width="98%" height="99%" title="'+selectedPlayerName+'" />');
		}
		else {
			//alert(selectedPlayerID);
			//alert("#f"+myObj.selectedFormation+" #"+myObj.selectedPlayerBox.substring(3)+"-f"+myObj.selectedFormation+" #"+myObj.selectedPlayerBox);
			jQuery("#f"+myObj.selectedFormation+" #"+myObj.selectedPlayerBox.substring(3)+"-f"+myObj.selectedFormation+" #"+myObj.selectedPlayerBox).html('<img src="'+selectedPlayerDP+'" id="'+selectedPlayerID+'" width="98%" height="99%" title="'+selectedPlayerName+'" />');
		}
		jQuery(this).parent().parent().hide();
		myObj.loadPlayersToChoose();
	})
	
	jQuery(".dt-player-cancel").click(function() {
		jQuery(this).parent().parent().hide();
	})
	
	jQuery("#saveFormation").click(function() {
		//alert('Your Formation saving is under progress');
		formationToSave = myObj.selectedFormation;
		jQuery.each(jQuery("#f"+myObj.selectedFormation).children(), function(k, v) {
			if(jQuery(v).attr("id").substr(0, 10) == 'goalkeeper') {
				myObj.dtPlayers['gk'] = jQuery("#goalkeeper-"+formationToSave).children().attr("id");
			}
			else {
				jQuery.each(jQuery(v).children(), function(a, b) {			
					var playerPos = jQuery(b).attr("id");
					var playerID = jQuery(b).children().attr("id");
					myObj.dtPlayers[playerPos] = playerID;
				})
			}
		})
		
		jQuery(".loading-icon").show();
		loadingIcon();

		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'save-dreamteam',
				dtFormation: formationToSave,
				dtPlayers: {'a':myObj.dtPlayers}
			},
			function(response) {
				jQuery(".loading-icon").hide();
				if(response.success) {
					alert('Your Dream Team Has Been Saved');
				}
			},
			'json'
		);
	})
	jQuery("#f"+myObj.selectedFormation).css('display', 'block');


	jQuery('#dream-team-player-search').keyup(function(event){
		if ((event.which > 47 && event.which < 91) || (event.which==8) || (event.which==46)) {
			event.preventDefault();
			var name_value = jQuery(this).val().toLowerCase();
			jQuery(this).parent().prev().children().hide();
			var number_of_li = jQuery(this).parent().prev().children().length;
			
			for(i=0; i<number_of_li ;i++){
				var structure = jQuery(this).parent().prev().children().eq(i);
				var default_value = structure.text().toLowerCase();
				
				if(default_value.indexOf(name_value) != -1){
					structure.show();
				}
			}
		}  
	});
	
	/* END DREAM TEAM */




	/*Logo Border Removal*/
	jQuery('#r-logo-text img').focus(function(){
		jQuery(this).blur();
	});


	/* =================================================================================================================================== */
	/* Become a Fan of a player - AJAX */
	/* =================================================================================================================================== */
	jQuery('.btn_becomeFan').live('click',function() {
		clickedEle = jQuery(this);
		if(jQuery(this).hasClass('i_am_fan')) {
			iAmFan = true;
		}
		else {
			iAmFan = false;
		}
		
		jQuery.post(
			// see tip #1 for how we declare global javascript variables
			MyAjax.ajaxurl,
			{
				action : 'myajax-submit',
				// other parameters can be added along with "action"
				postID : MyAjax.postID,
				playerID : jQuery(this).attr('id'),
				iAmFan : !iAmFan
			},
			function( response ) {
				if(response.success) {
					if(!iAmFan) {
						clickedEle.addClass('i_am_fan');
						clickedEle.attr('value', 'Remove From Fans');
					}
					else {
						clickedEle.removeClass('i_am_fan');
						clickedEle.attr('value', 'Become A Fan');
					}	
				}
				else {
					alert(response.reason);
				}
			}
		);
	})
	/* FOR RETRIEVING CLUB STATS */
	jQuery("#select_club_stats_date").change(function() {
		selectedPostTitle = jQuery('#select_club_stats_date option:selected').val();
		jQuery(".loading-icon").show();
		loadingIcon();

		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'get-category-from-post-title',
				selectedPostTitle: selectedPostTitle,
				postType: 'club_stats',
				categoryType: 'club_stats_category'
			},
			function(response) {
				jQuery(".loading-icon").hide();
				if(response.success == true) {
					jQuery("#select_club_stats_type").html('');
					jQuery.each(response.terms, function(k, v) {
						jQuery("#select_club_stats_type").append(
							'<option id=lc-'+v.term_id+' name='+v.slug+'>'+v.name+'</option>'
						);
					})
				}
				else {
					//alert("No Stats found for current combination");
				}
			},
			'json'
		);
	})
	
	
	jQuery("#select_squad_stats_date").change(function() {
		selectedPostTitle = jQuery('#select_squad_stats_date option:selected').val();

		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'get-category-from-post-title',
				selectedPostTitle: selectedPostTitle,
				postType: 'squad_stats',
				categoryType: 'squad_stats_category'
			},
			function(response) {
				if(response.success == true) {
					jQuery("#select_squad_stats_type").html('');
					jQuery.each(response.terms, function(k, v) {
						jQuery("#select_squad_stats_type").append(
							'<option id=lc-'+v.term_id+' name='+v.slug+'>'+v.name+'</option>'
						);
					})
				}
				else {
					//alert("No Stats found for current combination");
				}
			},
			'json'
		);
	})
	
	
	
	jQuery('#btn_club_stats_view').click(function() {
		//selectedPostID = jQuery('#select_club_stats_date option:selected').attr('id');
		selectedPostTitle = jQuery('#select_club_stats_date option:selected').val();
		selectedStatType = jQuery('#select_club_stats_type option:selected').attr('id').substring(3);
		selectedStatTypeSlug = jQuery('#select_club_stats_type option:selected').attr('name');

		jQuery(".loading-icon").show();
		loadingIcon();

		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'show-stats-club',
				//selectedPostID: selectedPostID,
				selectedPostTitle: selectedPostTitle,
				selectedStatType: selectedStatType,
				selectedStatTypeSlug: selectedStatTypeSlug
			},
			function(response) {
				jQuery(".loading-icon").hide();
				if(response.success == true) {
					jQuery('#clubStats').html('');
					jQuery('#clubStats').html(response.statsToDisplay);
				}
				else {
					alert("No Stats found for current combination");
				}
			},
			'json'
		);
	})
	/* FOR RETRIEVING CHILD POSTS OF A SELECTED PARENT LEAGUES/TOURNAMENTS */
	
	jQuery(".lnt-select").change(function() {
		var termTaxonomyID = jQuery('.lnt-select option:selected').attr('title');
		var postID = jQuery('.lnt-select option:selected').attr('id').substr(5);
		var leagueType = jQuery(".lnt-select").attr("id").substr(5);
		jQuery(".loading-icon").show();
		loadingIcon();
		
		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'show-child-leagues-tournaments',
				selectedTermTaxonomyID: termTaxonomyID,
				selectedpostID: postID
			},
			function(response) {
				jQuery(".loading-icon").hide();
				if(leagueType != 'barclays-premiere-league') {
					jQuery("#child-leagues-tournaments").html('');
					jQuery.each(response.childPosts, function(k, v) {
						jQuery("#child-leagues-tournaments").append(
							'<li class="lnt-rounds" id="'+v.ID+'">\
								<div class="lnt-back-triangle"></div>\
								<div class="single-child-title">\
									<span>'+v.post_title+'</span>\
								</div>\
								<div class="lnt-front-triangle"></div>\
							</li>'
						);
					})
					jQuery('#lnt-content').html("");
					jQuery('#lnt-content').html('<h3>'+response.childPosts[0].post_title+'</h3>'+response.childPosts[0].post_content);
					
					//Now populate Top Scorers Data
					jQuery('#lnt-top-scorer').html("");
					if(response.topScorers.player_lnt_top_scorer_name_1 != undefined) {
						jQuery('#lnt-top-scorer').html(
							'<table>\
								<tr>\
									<td>'+response.topScorers.player_lnt_top_scorer_name_1+'</td>\
									<td>'+response.topScorers.player_lnt_top_scorer_goals_1+'</td>\
								</tr>\
								<tr>\
									<td>'+response.topScorers.player_lnt_top_scorer_name_2+'</td>\
									<td>'+response.topScorers.player_lnt_top_scorer_goals_2+'</td>\
								</tr>\
								<tr>\
									<td>'+response.topScorers.player_lnt_top_scorer_name_3+'</td>\
									<td>'+response.topScorers.player_lnt_top_scorer_goals_3+'</td>\
								</tr>\
							</table>'
						);
					}
				}
				else {
					jQuery("#child-leagues-tournaments-dropdown").html('');
					jQuery.each(response.childPosts, function(k, v) {
						jQuery("#child-leagues-tournaments-dropdown").append(
							'<option class="lnt-rounds" id="'+v.ID+'">'+v.post_title+'</option>'
						);
					})
					jQuery('#lnt-content').html("");
					jQuery('#lnt-content').html('<h3>'+response.childPosts[0].post_title+'</h3>'+response.childPosts[0].post_content);
				}
			},
			'json'
		)
	})
	
	jQuery(".lnt-rounds").live("click", function() {
		var roundID = jQuery(this).attr("id");
		jQuery(".loading-icon").show();
		loadingIcon();
		
		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'show-lnt-round-content',
				selectedroundID: roundID
			},
			function(response) {
				jQuery(".loading-icon").hide();
				jQuery("#lnt-content").html("");
				jQuery("#lnt-content").html('<h3>'+response.roundContent.post_title+'</h3>'+response.roundContent.post_content);
			},
			'json'
		)
		
	})
	/* END LEAGUES/TOURNAMENTS */
	
	
	/* FOR RETRIEVING SQUAD STATS */
	jQuery('#btn_squad_stats_view').click(function() {
		//selectedPostID = jQuery('#select_squad_stats_date option:selected').attr('id');
		selectedStatType = jQuery('#select_squad_stats_type option:selected').attr('id');
		selectedStatTypeSlug = jQuery('#select_squad_stats_type option:selected').attr('name');
		selectedStatTypeID = jQuery('#select_squad_stats_type option:selected').attr('id').substring(3);
		selectedPostTitle = jQuery('#select_squad_stats_date option:selected').val();
		
		jQuery(".loading-icon").show();
		loadingIcon();

		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'show-stats-squad',
				//selectedPostID: selectedPostID,
				selectedStatType: selectedStatType,
				selectedStatTypeSlug: selectedStatTypeSlug,
				selectedStatTypeID: selectedStatTypeID,
				selectedStatDate: selectedPostTitle
			},
			function(response) {
				jQuery(".loading-icon").hide();
				if(response.success == true) {
					jQuery('#squadStats').html('');
					jQuery('#squadStats').html(response.statsToDisplay);
				}
				else {
					alert("No Stats found for current combination");
				}
			},
			'json'
		);
	
	})
	
	jQuery('#parent-fixtures li').children().eq(0).addClass('activePage');
	
	jQuery('#parent-fixtures li').click(function() {
		selectedParentFixture = jQuery(this).attr('id');
		
		jQuery.each(jQuery('#parent-fixtures li'), function(k, v) {
			jQuery(v).children().eq(0).removeClass('activePage');
		})
		jQuery(this).children().eq(0).addClass('activePage');
		
		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'show-child-fixtures',
				selectedParentFixture: selectedParentFixture
			},
			function(response) {
				jQuery('#child-fixtures').html('');
				jQuery('#child-fixtures').html('<li id="all"><a class="activePage" href="javascript:void(0)">All</a></li>');
				jQuery.each(response.childrenFixtures, function(k, v) {
					jQuery('#child-fixtures').append(
						'<li id="'+v.slug+'"><a href="javascript:void(0)">'+v.name+'</a></li>'
					);
				})
			},
			'json'
		);
	})
	
	jQuery('#child-fixtures li').live('click', function() {
		selectedFixtureType = jQuery(this).attr('id');
		
		jQuery.each(jQuery('#child-fixtures li'), function(k, v) {
			jQuery(v).children().eq(0).removeClass('activePage');
		})
		jQuery(this).children().eq(0).addClass('activePage');
		
		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'show-fixtures',
				selectedFixtureType: selectedFixtureType
			},
			function(response) {
				if(response.success == true) {
					jQuery('#fixtures').html('');
					if(response.all == true) {
						jQuery('#fixtures').text('');
						jQuery.each(response.fixturesToDisplay, function(key, value) {
							jQuery('#fixtures').append('<p>'+value.post_content+'</p>');
						})
					}
					else {
						jQuery.each(response.fixturesToDisplay, function(key, value) {
							jQuery('#fixtures').html(value.post_content);
						})
					}
				}
			},
			'json'
		);
	})
	
	jQuery('#sel_inviteService').change(function() {
		myObj.inviteDropDown = jQuery(this).val();
	});
	jQuery('#btn_inviteSubmit').click(function() {
		jQuery(".loading-icon").show();
		loadingIcon();
		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'invite-others-get-contacts',
				inviteUserEmail: jQuery('#txt_inviteUserEmail').val(),
				inviteUserPwd: jQuery('#txt_inviteUserPwd').val(),
				inviteSelectedService: myObj.inviteDropDown
			},
			function(response) {
				jQuery(".loading-icon").hide();
				jQuery.each(response.contacts, function(k, v) {
					//alert(v);
					jQuery('#list-lightbox ul').append('<li><input type="checkbox" value="'+k+'" /><span>'+v+' ('+k+')</span></li>');
				})
				lightbox();
			},
			'json'
		);
	})
	
	jQuery("#btn_sendMail").click(function() {
		myObj.emails = Array();
		jQuery.each(jQuery("#list-lightbox ul li"), function(k, v) {
			if(jQuery(v).children().eq(0).attr('checked')) {
				myObj.emails.push(jQuery(v).children().eq(0).attr('value'));
			}
		})
		jQuery.post(
			MyAjax.ajaxurl,
			{
				action: 'invite-others-send-email',
				emails: myObj.emails
			},
			function(response) {
				alert(response.message);
			},
			'json'
		);
	})
	jQuery("#btn_cancelSendMail").click(function() {
		jQuery("#overlay").click();
	})
	/* =================================================================================================================================== */
	/* That's it. Ajax ENDS HERE. */
	/* =================================================================================================================================== */

	jQuery("input:radio[name=selectAllEmails]").change(function() {
		if(jQuery(this).attr("value") == "select-all") {
			jQuery.each(jQuery("#list-lightbox ul li"), function(k, v) {
				jQuery(v).children().eq(0).attr("checked", "true");
			})
		}
		else if(jQuery(this).attr("value") == "select-none") {
			jQuery.each(jQuery("#list-lightbox ul li"), function(k, v) {
				jQuery(v).children().eq(0).removeAttr("checked");
			})
		}
	})


	/*Header Login Show*/
	
	jQuery('#hide-me').click(function(){
		jQuery('#index-header-login-wrapper').hide();
		jQuery('#header-login-option').show();
	});
	jQuery('#index-header-layer1-login').click(function(){
		jQuery('#header-login-option').hide();
		jQuery('#index-header-login-wrapper').show();
		
	});

	var menuCount = jQuery('#main-menu-wrapper > div > ul > li').length;
	var i;
	var eqcnt=0;
	for(i=0; i<menuCount;i++){
		var altContent = jQuery('#main-menu-wrapper > div > ul > li').eq(eqcnt).find('a').eq(0).attr('title');
		//jQuery('#main-menu-wrapper > div > ul > li').eq(eqcnt).find('a').eq(0).append("<br /><span class='menu-desc'>"+altContent+"</span><span class='green-indicator' id='green-"+eqcnt+"'></span>");
		jQuery('#main-menu-wrapper > div > ul > li').eq(eqcnt).find('a').eq(0).append("<br /><span class='green-indicator' id='green-"+eqcnt+"'></span>");
		eqcnt++;
	}
	jQuery('.current-menu-item').find('.green-indicator').eq(0).show();
	jQuery('#main-menu-wrapper > div > ul > li > a').mouseover(function(){
		jQuery(this).find('.green-indicator').eq(0).show();
	});
	jQuery('#main-menu-wrapper > div > ul > li > a').mouseout(function(){
		jQuery(this).find('.green-indicator').eq(0).hide();
		jQuery('.current-menu-item').find('.green-indicator').eq(0).show();
	});
	if(jQuery('#main-menu-wrapper > div > ul > li > ul > li').hasClass('current-menu-item')){
		jQuery('#main-menu-wrapper > div > ul > li > ul').find('.current-menu-item').parent().parent().find('.green-indicator').eq(0).show();
	}
	jQuery('#main-menu-wrapper > div > ul > li > ul').find('.current-menu-item').find('a').addClass('active-sub-menu');
	
	/*sub menu positioning*/
	//var ul_left = jQuery('#main-menu-wrapper > div > ul > li').eq(1).position().left;
	var ul_left = ((jQuery("#main-container").width() - jQuery(".sub-menu").width())/2) - (7*6);
	//var ul_left = jQuery(".container").width() - (jQuery(".sub-menu").width()/2);
	var ul_top = jQuery('#main-menu-wrapper > div > ul > li').eq(1).height();
	jQuery('#main-menu-wrapper > div > ul > li > ul').css({'left':ul_left+'px' , 'top':ul_top+'px'});
	
	
	jQuery('#player-tabs ul li a').mouseover(function(){
		jQuery(this).addClass('active-sub-menu');
	});
	jQuery('#player-tabs ul li a').mouseout(function(){
		jQuery(this).removeClass('active-sub-menu');
	});
	
	jQuery('#main-menu-wrapper > div > ul > li > ul > li').mouseover(function(){
		jQuery(this).find('a').eq(0).addClass('active-sub-menu');
	});
	jQuery('#main-menu-wrapper > div > ul > li > ul > li').mouseout(function(){
		jQuery(this).find('a').eq(0).removeClass('active-sub-menu');
		jQuery('#main-menu-wrapper > div > ul > li > ul').find('.current-menu-item').find('a').addClass('active-sub-menu');
	});



	jQuery('#main-menu-wrapper > div > ul > li').eq(1).mouseover(function(){
		clearTimeout(cvb)
		jQuery(this).find('ul').eq(0).show();
	//	jQuery(this).find('.green-indicator').eq(0).show();
	}).mouseout(function(){
		cvb=setTimeout("hideSubMenu('#main-menu-wrapper > div > ul > li')", 750)
		if(jQuery(this).hasClass('current-menu-item')){
			jQuery(this).find('.green-indicator').eq(0).show();
		}
		if(jQuery(this).find('a').hasClass('active-sub-menu')){
			jQuery(this).find('.green-indicator').eq(0).show();
		}
	});	

	jQuery('#main-menu-wrapper > div > ul > li > ul').mouseover(function(){
		clearTimeout(cvb)
		jQuery(this).show();
		if(jQuery(this).parent().hasClass('current-menu-item')){
	//		jQuery(this).parent().find('.green-indicator').eq(0).show();
		}
	}).mouseout(function(){
		cvb=setTimeout("hideSubMenu('#main-menu-wrapper > div > ul > li > ul')", 750)
		if(jQuery(this).parent().hasClass('current-menu-item') || jQuery(this).find('.active-sub-menu')){
	//		jQuery(this).parent().find('.green-indicator').eq(0).show();
		}else{
	//		jQuery(this).parent().find('.green-indicator').eq(0).hide();
		}
	});		
	
	
	/*Notification section*/
	jQuery('#notification-main-ul > li > a').removeAttr('href');
	jQuery('#notification-main-ul > li > a').click(function(){
		jQuery('#notification-main-ul > li > ul').toggle();
	});

	if(jQuery('#notification-main-ul > li > a > span').html() > 9 ){
		jQuery(this).css('right','-15px');
	}

	jQuery('#main-menu-wrapper > div > ul > li > a').attr('title','');
	
	/*Fancy Box*/
	jQuery('#fancy_more').click(function(){
		callfancybox();
	})
	
	/*News Slider Code*/
	jQuery('#slideshow').children().last().addClass('slideshow-active');
	
	
	jQuery('.slider-dots').click(function(){
		clearTimeout(vbn);
		if(jQuery(this).hasClass('slider-active')){
			vbn = setTimeout( "slideSwitch()", 10000 );
			return
		}
		currentINDEX = jQuery(this).index();
		jQuery('.slider-dots').removeClass('slider-active');
		jQuery(this).addClass('slider-active');
		jQuery('.slideshow-active').fadeOut(function(){
			jQuery(this).removeClass('slideshow-active');						
			vbn = setTimeout( "slideSwitch()", 10000 );
		})
		jQuery('#slideshow').children().eq(currentINDEX).fadeIn(function(){
			jQuery(this).addClass('slideshow-active');
		})
		
	})

	slideSwitch();
	
	/*CountDown Timer*/
	days = jQuery('#days').text();
	hrs = jQuery('#hrs').text();
	mins = jQuery('#min').text();
	sec = jQuery('#sec').text();
	if(days == ""){
		jQuery('#days').text('0');
		days = 0;
	}
	if(hrs == ""){
		jQuery('#hrs').text('0');
		hrs = 0;
	}
	if(mins == ""){
		jQuery('#min').text('0');
		mins = 0;
	}
	if(sec == ""){
		jQuery('#sec').text('0');
		sec = 0;
	}
	setInterval("countdown()", 1000);

	/*Profile Display Tabs Switching*/
	jQuery('.p-info-content').children().eq(0).show();
	jQuery("#p_info_tabs li a").click(function(){
		var pTabIndex = jQuery(this).parent().index();
		jQuery('.p-info-content').children().hide();
		jQuery('.p-info-content').children().eq(pTabIndex).show();
	})


});

/*CountDown Function*/
function countdown() {
	sec = sec - 1;
	if(sec < 0){
		if(mins == 0){
			sec = 0;
		}
		else{
			sec = 59;
			mins = mins - 1;
			if(mins <= 0){
				if(hrs == 0){
					mins = 0;
				}else{
					mins = 59;
					hrs = hrs - 1;
					
					
					if(hrs <= 0){
						if(days == 0){
							hrs = 0;
						}else{
							hrs = 23;
							days = days - 1;
							if(days < 0){
								jQuery('#days').text('0');
							}
							jQuery('#days').text(days);
						}
					}
					jQuery('#days').text(days);
					jQuery('#hrs').text(hrs);
				}
			}	
			jQuery('#hrs').text(hrs);
			jQuery('#min').text(mins);
		}
	}
	jQuery('#min').text(mins);
	jQuery('#sec').text(sec);
}

function alpha() {
	alert(123);
}


/*SlideSwitch Function*/
function slideSwitch() {
	cur=jQuery('.slideshow-active')
	next=cur.next()
	if(next.length == 0){
		next=jQuery('#slideshow').children().eq(0)
	}
	jQuery('.slider-dots').removeClass('slider-active')
	jQuery('.slider-dots').eq(jQuery('#slideshow').children().index(next)).addClass('slider-active')
	cur.fadeOut(function(){
		jQuery(this).removeClass('slideshow-active')
		next.fadeIn().addClass('slideshow-active')
		vbn = setTimeout( "slideSwitch()", 10000);
	})	
}


/*Submenu Hover Function*/
function hideSubMenu(which){
	jQuery(which).find('ul').eq(0).hide();
}
