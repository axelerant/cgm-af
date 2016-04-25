<?php
/*
	Template Name: Group List Static Page
 */
?>
<?php get_header(); ?>

		<div class="quarter">

		<h5><a href="http://af.stonebriar.org/" >Fellowship Groups</a></h5>
			<div class="menu">
			<ul id="menu">

			</ul>
			</div>
		</div>

		<div class="three_quarters">
		<?php query_posts('pagename=home') ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
						<div class="entry">
							<!--
							<div class="photo_frame_medium_right">
								<img src="http://rwfinearts.com/wordpressmu/wp-content/themes/cgm/images/photo_medium.jpg">
							</div>
							-->
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						</div>
				</div>
				<span class="clear">&nbsp;</span>
			<?php endwhile; endif; ?>
			<?php if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what youre looking for.</p><?php } ?>



		</div>
		<!-- end .three_quarters -->

<?php get_footer(); ?>