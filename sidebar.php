<div class="quarter">

		<h5><a href="http://af.stonebriar.org/" >Fellowship Groups</a></h5>
			<div class="menu">
			<!--<ul class="special_list">-->
			<ul id="menu">
				<li class="open">
				<a href="#" class="arrow off">&nbsp;</a>
				<a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
					<ul>
			<!--  ******************** Begin Public Sidebar Links ******************** -->

					  <li>
					  <a href="<?php bloginfo('url'); ?>/home/">Home</a>
					  </li>
					  <li>
					  <a href="<?php bloginfo('url'); ?>/lessons/">Lessons</a>
					  </li>

			<!--  ******************** End Public Sidebar Links ******************** -->

					  <? $curuser= (is_user_member_of_blog(get_current_user_id()) || current_user_can('manage_options')); // checking to see if user logged in ?>

			<!--  ******************** Begin Require Login All Groups Links ******************** -->

					  <? if($curuser){ ?>
					  	<li>
					  	<a href="<?php bloginfo('url'); ?>/resources/">Resources</a>
					  	</li>
					  	<li>
					  	<a href="<?php bloginfo('url'); ?>/photos/">Photo Gallery</a>
					  	</li>
						<li>
						<a href="<?php bloginfo('url'); ?>/leaders/">Leadership Team</a>
						</li>
					  <? } ?>

			<!--  ******************** End Require Login All Groups Links ******************** -->


			<!--  ******************** Begin PUBLIC (no login required) Group Specific Links ******************** -->

<!-- *EXAMPLE* Begin [Group Name] Section *EXAMPLE* -->

					  <? if($wpdb->blogid == 0){ ?> <!-- Replace 00 with the blog id -->
						<li>
						<a href="<?php bloginfo('url'); ?>/pageslug/">Page Name</a> <!-- Replace /pageslug/ with the page slug of the page you want the link to take you to. Replace 'Page Name' with The name of the Link you want displayed -->
						</li>
					  <? } ?>

<!-- *EXAMPLE* End [Group Name] Section *EXAMPLE* -->

			<!--  ******************** End PUBLIC (no login required) Group Specific Links ******************** -->


			<!--  ******************** Begin Require Login Group Specific Links ******************** -->	

					  <? if($curuser){ ?>

<!-- Begin Worship Matters Section -->	
			
						<? if($wpdb->blogid == 39){ ?>
						  <li>
						  <a href="<?php bloginfo('url'); ?>/orchestra/">Stonebriar Orchestra</a>
						  </li>
						  <li>
						  <a href="<?php bloginfo('url'); ?>/winds/">Stonebriar Winds</a>
						  </li>
						  <li>
						  <a href="<?php bloginfo('url'); ?>/brass/">Stonebriar Brass</a>
						  </li>
						<? } ?>

<!-- End Worship Matters Section -->
						
					
<!-- Begin Awana Section -->
	
						<? if($wpdb->blogid == 55){ ?>
						  <li>
						  <a href="<?php bloginfo('url'); ?>/truth/">Truth & Training</a>
						  </li>
						  <li>
						  <a href="<?php bloginfo('url'); ?>/cubbies/">Cubbies</a>
						  </li>
						  <li>
						  <a href="<?php bloginfo('url'); ?>/sparks/">Sparks</a>
						  </li>
						  <li>
						  	<script type="text/javascript">
						  	  // Popup window code Calendar
						  	  function new2Popup(url) {
						  	    	popupWindow = window.open(
						  	  		url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
						  	  }
						  	</script>
						  <a href="JavaScript:newPopup('http://www.stonebriar.org/get-connected/children/evening-program-awana/schedules-and-fees.html');">Calendar</a>  
						  </li>
						  <li>
						  	<script type="text/javascript">
						  	  // Popup window code Awana International 
						  	  function newPopup(url) {
						  	  	popupWindow = window.open(
						  	  		url,'popUpWindow','height=600,width=700,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
						  	  }
						  	</script>
						  <a href="JavaScript:newPopup('http://www.awana.org');">Awana International</a>
						  </li>
						  <li>
						  	<script type="text/javascript">
						  	  // Popup window code Awana at Home
						  	  function new1Popup(url) {
						  		popupWindow = window.open(
						  			url,'popUpWindow','height=600,width=700,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
						  	  }
						  	</script>
						  <a href="JavaScript:newPopup('http://www.awana.org/athome/index.html');">Awana at Home</a>  
						  </li>
						<? } ?>

<!-- End Awana Section -->


<!-- Begin RURO Section -->

						<? if($wpdb->blogid == 57){ ?>
						  <li>
						  <a href="<?php bloginfo('url'); ?>/job/">Job Board</a>
						  </li>
						<? } ?>

<!-- End RURO Section -->

<!-- Begin Mosiac Section -->

						<? if($wpdb->blogid == 61){ ?>
						  <li>
						  <a href="<?php bloginfo('url'); ?>/stories/">Stories</a>
						  </li>
						
 <li>
						<dd>
						<strong><a href="http://www.stonebriar.org/blog/category/ministries/fellowship-groups/mosaic/" target="new">Blog</a></strong>
					</dd> 
						  </li>
<? } ?>

<!-- End Mosiac Section -->





<!-- *EXAMPLE* Begin [Group Name] Section *EXAMPLE* -->

						<? if($wpdb->blogid == 0){ ?> <!-- Replace 00 with the blog id -->
						  <li>
						  <a href="<?php bloginfo('url'); ?>/pageslug/">Page Name</a> <!-- Replace /pageslug/ with the page slug of the page you want the link to take you to. Replace 'Page Name' with The name of the Link you want displayed -->
						  </li>
						<? } ?>

<!-- *EXAMPLE* End [Group Name] Section *EXAMPLE* -->



<!-- *DON'T EDIT BELOW THIS LINE* -->	
					  <? } ?>

			<!--  ******************** End Require Login Group Specific Links ******************** -->	
					</ul>
				</li>
				<br>

			</ul>
			</div>

			<? if($wpdb->blogid == 18){ 
/********
code for widget testing
********/
			} else {?>

			<div class="chunk_topper">&nbsp;</div>
			<div class="chunk_middle">
				<dl>
					<dt>
						Announcements
					</dt>
					<dd>
						<?php genki_announcement_showmsg() ?>
					</dd>

				</dl>
			</div>

			<div class="chunk_topper">&nbsp;</div>
			<div class="chunk_middle">
				<dl>
					<dt>
						Related Links
					</dt>
					<dd>
						<strong><a href="<?php bloginfo('url'); ?>/member/" target="new">Member Information</a></strong>
					</dd>
					<dd>
						<strong><a href="http://www.stonebriar.org/helping-others/giving/" target="new">Giving</a></strong>
					</dd>
					<dd>

					

					<dd>

						<?php
							global $current_blog;

							$itunes_url = 'itpc://' . $current_blog->domain . $current_blog->path . '?feed=podcast';
							//echo '<a href="'.$itunes_url.'">';
							//echo '<img src="http://'. $current_blog->domain . $current_blog->path .'/wp-content/plugins/podpress/images/button_itunes.png" border="0" alt="Any Podcatcher"/></a>';

						?>

					</dd>

				</dl>
			</div>

			<? } // END CODE FOR WIDGET TESTING ?>

			<div id="sidebar">
			<?php if ( function_exists ( dynamic_sidebar(1) ) ) : ?>
			<?php dynamic_sidebar (1); ?>
			<?php endif; ?>
			</div>

		<span class="clear">&nbsp;</span>
		</div>
		<!-- end .quarter -->