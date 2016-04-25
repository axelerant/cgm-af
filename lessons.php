<?php
/*
	Template Name: Lessons
*/
?>
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="three_quarters">
	<h1>Lessons</h1>
	<?php //if(is_user_member_of_blog(get_current_user_id())){ ?>
	<?php
		$lessons_id = $wpdb->get_var( "SELECT cat_ID FROM {$wpdb->sitecategories} WHERE category_nicename = 'lessons'" );
		query_posts('cat='.$lessons_id); ?>
	<br><br><h1>
	<?php echo $lessons_id . " lessons_id"; ?>
	<br><br></h1>
	<?php $counter = 0; ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if ($counter < 1 ) { ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<h6><?php the_time('F jS, Y') ?></h6>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
		</div>
		<span class="clear">&nbsp;</span>


		<?php } if ( $counter < 1 ) { ?>

		<br><br>
		<table class="data">
			<tr>
				<th width="25%">Topic</th>
				<th>Description</th>
				<th>Date</th>
			</tr>

		<?php } ?>

			<tr>
				<td ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
				<?php
					//need to create short version of description here
					$content = get_the_content('');
					$content = strip_tags($content, '<b><p><a>');
					$len = strlen($content);
					//echo $len;
					$the_description = '';
					if ( $len < 350 ) {
						$the_description = $content;
					} else {
						$the_description = substr($content, 0, 350);
						$the_description .= ' ... <a href="'. get_permalink().'">[more]</a>';
					}
				?>
				<td><?php echo $the_description; ?></td>
				<td><?php the_time('n/j/Y') ?></td>
			</tr>

		<?php $counter++; ?>

	<?php endwhile; endif; ?>
	<?php if ( have_posts() ) { echo '</table>'; } ?>
	<span class="clear">&nbsp;</span>
	<?php if(!have_posts()){ ?>
		<p class="notice">Sorry, there are no posts matching what you are looking for.</p>
		<br><br><h1>
		<?php echo $lessons_id . " lessons_id"; ?>
		<br><br></h1>

	<?php } ?>
	<?php //} else { ?>
	<!--<p class="notice">Sorry, you must be logged in to view this page.<br><a href="<?php bloginfo('url'); ?>/scc-login.php">Click here to login now</a></p>-->
	<?php //} ?>
</div>
<!-- end .three_quarters -->

<?php get_footer(); ?>