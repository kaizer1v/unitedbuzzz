			</div>
            <?php do_action( 'bp_after_container' ) ?>
            <?php do_action( 'bp_before_footer' ) ?>
            
            <div id="footer-wrapper" class="clearfix">
                <div id="footer">
                    <div id="footer-menu-wrapper">
						<?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
					</div>
                    <div id="connect-with-us">
						<span>CONNECT WITH US</span><br />
						<a href="<?php echo get_option('twitter_url'); ?>"><img src="<?php bloginfo('template_url')?>/images/twitter.png"></img></a> &nbsp;
						<a href="<?php echo get_option('facebook_url'); ?>"><img src="<?php bloginfo('template_url')?>/images/facebook.png"></img></a>
                    </div>
                    <div id="copyright">
						<span>Copyright &copy; 2011 UnitedBuzzz. All Rights Reserved.<br /><a href="http://wpoets.com/" title="Wordpress Development Shop">Built on Wordpress, by WPoets</a></span>
					</div>
                    <?php do_action( 'bp_footer' ) ?>
                </div>
            </div>
        </div>
        
        
        <div id="list-lightbox">
		    <ul></ul>
		    <button id="btn_sendMail">Send Mail</button><button id="btn_cancelSendMail">Cancel</button>
		    <input type="radio" name="selectAllEmails" value="select-all">Select All
		    <input type="radio" name="selectAllEmails" value="select-none" checked="checked">Select None
        </div>
        <div class="loading-icon"></div>
        <div id="overlay"></div>
        
        <?php do_action( 'bp_after_footer' ) ?>
        <?php wp_footer(); ?>
	</body>
	<script type="text/javascript">
		
			jQuery('.input-placeholder').defaultValue();
		
	</script>
	<script type="text/javascript">
		var analyticsFileTypes = [''];
		var analyticsEventTracking = 'enabled';
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-25293183-1']);
		_gaq.push(['_trackPageview']);
		_gaq.push(['_trackPageLoadTime']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</html>
