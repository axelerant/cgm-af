<?php get_header(); ?>

<?php get_sidebar(); ?>

		<div class="three_quarters">
		<h1>Lessons</h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
				<h6><?php the_time('F jS, Y') ?></h6>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<span class="clear">&nbsp;</span>
			
			<?php $counter = 0; ?>
			<?php query_posts('showposts=5&order=DESC') ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if ( $counter < 1 ) { ?>
				
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
			
		</div>
		<!-- end .three_quarters -->

<?php get_footer(); ?>