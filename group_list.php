<?php
/*
	Template Name: Group List Page
 */
?>
<? get_header(); ?>

		<div class="quarter">

		<h5><a href="http://af.stonebriar.org/" >Fellowship Groups</a></h5>
			<div class="menu">
			<ul id="menu">
<?  
global $current_site;
// print_r($current_site); echo "\n<br />"; echo '' . __LINE__ . ':' . basename( __FILE__ )  . "\n<br />";
$blogs = $wpdb->get_results( $wpdb->prepare("SELECT blog_id, domain, path FROM $wpdb->blogs WHERE site_id = %d AND public = '1' AND archived = '0' AND mature = '0' AND spam = '0' AND deleted = '0' ORDER BY registered DESC", $wpdb->siteid), ARRAY_A );
// print_r($blogs); echo "\n<br />"; echo '' . __LINE__ . ':' . basename( __FILE__ )  . "\n<br />";
//echo $blogs;
foreach ($blogs as $blog) {
	$blog_id = $blog['blog_id'];
	// print_r($blog_id); echo "\n<br />"; echo '' . __LINE__ . ':' . basename( __FILE__ )  . "\n<br />";

	if ( $current_site->blog_id != $blog_id ) {
		$details	= get_blog_details( $blog_id );

		echo '<li>';
		echo '<a href="'.$details->siteurl.'" >'.$details->blogname.'</a>';
		echo '</li>';
	}
}

?>
			</ul>
			</div>
		</div>

		<div class="three_quarters">
		<?php query_posts('pagename=home') ?>
			<? if (have_posts()) : while (have_posts()) : the_post(); ?>
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
			<? endwhile; endif; ?>
			<? if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what youre looking for.</p><? } ?>

<?  
global $current_site;
$blogs = $wpdb->get_results( $wpdb->prepare("SELECT blog_id, domain, path FROM $wpdb->blogs WHERE site_id = %d AND public = '1' AND archived = '0' AND mature = '0' AND spam = '0' AND deleted = '0' ORDER BY registered DESC", $wpdb->siteid), ARRAY_A );
//echo $blogs;
foreach ($blogs as $blog) {
	$blog_id = $blog['blog_id'];

	if ( $current_site->blog_id != $blog_id ) {
		$details	= get_blog_details( $blog_id );

		echo '<p>';
		echo '<a href="'.$details->siteurl.'" >'.$details->blogname.'</a>';
		echo '</p>';
	}
}

?>

		</div>
		<!-- end .three_quarters -->

<? get_footer(); ?>