<?php get_header(); ?>
	
	<div class="wrap-content">
	
		<?php get_sidebar(); ?>

		<div class="content">
			
			<section>
			
			<?php 
				
				if(is_user_logged_in()){
				
					$categories = get_categories(); 
				
					global $current_user;
					
					get_currentuserinfo();

						foreach($categories as $category) { 
						
							$args = array(
								'showposts' => -1,
								'cat' => $category->term_id, 
								'meta_query' => array(
									array(
										'key'     => '_cmb_user_list',
										'value'   => $current_user->user_login,
										'compare' => 'LIKE',
									),
								),
							);
							
							$sub_categories = get_categories(array('child_of'=>$category->term_id)); 
							
							if(count($sub_categories) == 0){
							
								query_posts( $args ); 
						
								if ( have_posts() ) : ?>
								
									<p class="category-title">Category: <?php echo trim(get_category_parents(get_query_var('cat'), true, '/'),'/'); ?></p>

									<?php while ( have_posts() ) : the_post(); ?>

										<article>
											
											<!--<p class="category">Categories: <?php the_category('/','single'); ?></p>-->
											<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="date">Date created: <?php the_date('F j,Y'); ?></span> </h1>
										
											<?php //the_content(); ?>

										</article>
								
									<?php endwhile; ?>

								<?php endif; ?>
								
								<?php wp_reset_query();wp_reset_postdata();rewind_posts(); ?>
							
							<?php } ?>
						<?php } ?>
			
					<!--<div class="navigation"><p><?php posts_nav_link(); ?></p></div>-->
			
				<?php }else{ ?>
				
					<p>Welcome to our site</p>
				
				<?php } ?>
		
			</section>
		
		</div>
		
	</div>

<?php get_footer(); ?>