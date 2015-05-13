<?php get_header(); ?>
	
	<div class="wrap-content">
	
		<?php get_sidebar(); ?>

		<div class="content">
		
			<section>
				
				<p class="category-title">Category: <?php echo trim(get_category_parents(get_query_var('cat'), true, '/'),'/'); ?></p>
			
				<?php if ( have_posts() ) { ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<article>
						
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="date">Date created: <?php the_date('F j,Y'); ?></span> </h1>
							<!--<p class="category">Categories: <?php the_category(', '); ?></p>-->

						</article>
				
					<?php endwhile; ?>

				<?php } else { ?>
				
					<p>No posts found.</p>
				
				<?php } ?>
				
				<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
		
			</section>
		
		</div>
		
	</div>

<?php get_footer(); ?>