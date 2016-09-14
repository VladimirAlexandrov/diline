<?php
/*Template Name: ourservices.php*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>	
			<div class="ourservices_main">	
				<div class="ourservices_head">
					НАШИ УСЛУГИ
				</div>
				<div class="ourservices_image">
					
					<div class="test1">						
						<?php/* wp_nav_menu('menu=5');*/ ?>	
						
						<?php 
							$query_image = new WP_QUERY( 'cat=6' );
							if ($query_image -> have_posts()) : 
								while ($query_image ->have_posts()) : $query_image -> the_post();
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php 
							endwhile;
							endif; 
						?>	
					</div>	

					<div class="test2">						
						<?php/* wp_nav_menu('menu=5');*/ ?>	
						
						<?php 
							$query_image2 = new WP_QUERY( 'cat=8' );
							if ($query_image2 -> have_posts()) : 
								while ($query_image2 ->have_posts()) : $query_image2 -> the_post();
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php 
							endwhile;
							endif; 
						?>	
					</div>

					<div class="test3">						
						<?php/* wp_nav_menu('menu=5');*/ ?>	
						
						<?php 
							$query_image3 = new WP_QUERY( 'cat=9' );
							if ($query_image3 -> have_posts()) : 
								while ($query_image3 ->have_posts()) : $query_image3 -> the_post();
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php 
							endwhile;
							endif; 
						?>	
					</div>	

					<div class="test4">						
						<?php/* wp_nav_menu('menu=5');*/ ?>	
						
						<?php 
							$query_image4 = new WP_QUERY( 'cat=10' );
							if ($query_image4 -> have_posts()) : 
								while ($query_image4 ->have_posts()) : $query_image4 -> the_post();
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php 
							endwhile;
							endif; 
						?>	
					</div>

					<div class="test5">						
						<?php/* wp_nav_menu('menu=5');*/ ?>	
						
						<?php 
							$query_image5 = new WP_QUERY( 'cat=11' );
							if ($query_image5 -> have_posts()) : 
								while ($query_image5 ->have_posts()) : $query_image5 -> the_post();
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php 
							endwhile;
							endif; 
						?>	
					</div>	
					
				</div>
			</div>

			<style>
				.hidden_tele {
					display: none;
				}
				.hidden_address {
					display: none;
				}
			</style>	

			</div>
	
	</body>


</html>	