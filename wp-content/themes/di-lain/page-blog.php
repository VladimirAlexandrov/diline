<?php
/*Template Name: blog.php*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>	
		<div class="blog_content">
		<div class="blog_content_half_1">
			<div class="blog_content_half_1_head">
				ПОПУЛЯРНЫЕ СТАТЬИ
			</div>
			<div class="blog_content_photo">
				
				<?php 
					$query = new WP_Query( 'cat=3&showposts=6' );
					if ( $query -> have_posts()) :  
					while ($query -> have_posts()) : $query -> the_post(); 
				?>
					
				<div class="blog_content_photo_1">
					<figure class="sign">
						<?php 
							if ( function_exists('add_theme_support') )
							the_post_thumbnail();
						?>
						<figcaption style="color: #495147;"><?php the_title(); ?><?php the_date('d.m.Y', '<span>', '</span>'); ?></figcaption>
						<figcaption><?php the_excerpt(); ?></figcaption>
						<a class="ghost-button" href="#popup1">ЧИТАТЬ ДАЛЕЕ</a>
					</figure>
				</div>

				<?php 
					endwhile;
					endif; 
					wp_reset_postdata();
				?>	

			</div>			
		</div>
		<div class="blog_content_half_2">
			<div class="blog_content_half_2_head">ДРУГИЕ ПУБЛИКАЦИИ</div>
			<div class="blog_content_half_2_text">
				<ul>
					<?php 
						$query2 = new WP_Query( 'cat=4' );
					?>
					<?php if ( $query -> have_posts()) : while ($query2 -> have_posts()) : $query2 -> the_post(); ?>
					<li class="liclickpup"><a class="clickpup" data-id="<?php the_id(); ?>" href="#"><?php the_title(); ?><?php the_date('d.m.Y', '<span>', '</span>'); ?>
						
										
					<?php 
						endwhile;
						endif;
						wp_reset_postdata();
					?>	
					</a></li>
				</ul>
				<div id="popup1">	
								
				</div>
				<div id="mask">
					
				</div>
			</div>
		</div>		

		</div>			
	
	</body>

</html>