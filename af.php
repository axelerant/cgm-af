<?php
/*
	Template Name: AF Template
*/
?>
<?php get_header(); ?>

<div class="quarter">

<h5><a href="http://af.stonebriar.org/" >Fellowship Groups</a></h5>
	<div class="menu">
	<ul id="menu">
		<?php  
			global $current_site;
			$blogs = $wpdb->get_results( "SELECT blog_id, domain, path FROM $wpdb->blogs WHERE site_id = '$wpdb->siteid' AND archived = '0' AND mature = '0' AND spam = '0' AND deleted = '0' ORDER BY path ASC", ARRAY_A );
			//echo $blogs;
			foreach ($blogs as $blog) {
				$blog_id = $blog['blog_id'];
				
				if ( $current_site->path != $blog['path'] ) {
				
				echo '<li>';
				echo '<a href="'.get_blog_option($blog_id, "siteurl").'" >'.get_blog_option($blog_id, "blogname").'</a>';
				echo '</li>';
				}
			}
		
		?>
	</ul>
	</div>
</div>

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
	<?php if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what you're looking for.</p><?php } ?>
</div>
<!-- end .three_quarters -->


<?php get_footer(); ?>