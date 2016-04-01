<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				
				<?php while(have_posts()) : the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with 
						<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');?>						
						</div>
						
						
						<?php read_more(20); ?>... <a href="<?php the_permalink(); ?>">Read more</a>
						
					</article>
					
				<?php endwhile; ?>	
				
				
				
				
				
					
					<div id="pagi">
						<?php 
							the_posts_pagination(array(
								//'show_all' => true,
								'prev_text' => 'Prev',
								'next_text' => 'Next',
								'screen_reader_text' => ' '
							));
						?>
					</div>
					
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>