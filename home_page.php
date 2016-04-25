<?php
/*
	Template Name: Home Page
*/
?>
<? get_header(); ?>

<? get_sidebar(); ?>

		<div class="three_quarters">
		<?php query_posts('pagename=home') ?>
			<? if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
						<div class="entry">
							<?php scc_logo_display_logo(); ?>
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						</div>
				</div>
				<span class="clear">&nbsp;</span>
			<? endwhile; endif; ?>
			<? if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what youre looking for.</p><? } ?>			
		
		</div>
		<!-- end .three_quarters -->

<? get_footer(); ?>