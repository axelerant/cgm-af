<?php
/*
	Template Name: Member Information
*/
?>
<?php get_header(); ?>

<?php get_sidebar(); ?>

		<div class="three_quarters">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						</div>
				</div>
				<span class="clear">&nbsp;</span>
			<?php endwhile; endif; ?>
			<?php if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what you are looking for.</p><?php } ?>
				
			<h2>Subscribe to Newsletter</h2>
			<ul>
			   	Subscribe using this information:<br><br>
			  	<?php global $user_email; get_currentuserinfo(); ?>
			  	<?php 
			  		$user_info = get_userdata(get_current_user_id());
				?>
			  <form name="notifymeForm" method="post" action="notifyme.php">
			    <input type="hidden" name="maillistid" value="1">
			    <input type="hidden" name="naatan_notifyme_name" value="<?php echo($user_info->first_name .  " " . $user_info->last_name); ?>">
			    <input type="hidden" name="naatan_notifyme_email" value="<?php echo $user_email; ?>">
			    <input type="hidden" name="naatan_notifyme_website" value="<?php echo $user_info->ID; ?>">
			    Name: <?php echo($user_info->first_name .  " " . $user_info->last_name); ?> <br>
			    email: <?php echo $user_email; ?> <br><br>
			    <input type="submit" name="submit_notifyme_subscribe" value="Subscribe" style="margin-top: 2px;">
			  </form>
			</ul>	
				
			<h2>Edit Member Information</h2>
			<iframe src="https://webview.shelbyinc.com/app/05603/default.aspx" name="frame1" scrolling="auto" frameborder="no" align="left" height = "600px" width = "100%">
			</iframe>
		</div>
		<!-- end .three_quarters -->

<?php get_footer(); ?>

