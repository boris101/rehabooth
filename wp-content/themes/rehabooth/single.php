<?php get_header(); ?>
	
	<div class="wrap-content">
	
		<?php get_sidebar(); ?>

		<div class="content">
			
			<section>
			
				<?php if ( have_posts() ) { ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<article>
							<p class="category-title">Category: 
							<?php 
								$categories = get_the_category();
							
								foreach($categories as $category) { 
								
									$sub_categories = get_categories(array('child_of'=>$category->term_id));
									
									if(count($sub_categories) == 0){
										echo trim(get_category_parents($category->term_id, true, '/'),'/').'<br/>';
									}
								}
							?>
							</p>
							<h1><?php the_title(); ?><span class="date">Date created: <?php the_date('F j,Y'); ?></span> </h1>
						
							<?php the_content(); ?>

						</article>
				
					<?php endwhile; ?>

				<?php } ?>
		
			</section>
		
		</div>
		
	</div>

<?php get_footer(); ?>