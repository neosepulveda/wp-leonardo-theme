<?php 
/*
Template Name: Home Page
*/
	
get_header(); ?>

	<div class="row">
		<div class="col-md-2 col-xs-4 firstCol">  <!-- First collumn -->
			<div class="header-logo">
				<?php
					if( get_field('headerimg') ): ?>
						<img src="<?php the_field('headerimg'); ?>" class="img-responsive" />
						<?php 
					endif;
				?>
			</div>
			
			<div class="navigation-menu">				
				<?php wp_page_menu('show_home=1&exclude=5,9,23&menu_class=page-navi&sort_column=menu_order'); ?>				
			</div>
			
			<div class="social-network">
				<div class="col-md-4 col-xs-4">
					<a href="https://www.facebook.com/infinityhouse14"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" class="img-responsive"></a>					
				</div>
				<div class="col-md-4 col-xs-4">
					<a href="https://twitter.com/infinityhouseuk"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" class="img-responsive"></a>
				</div>
				<div class="col-md-4 col-xs-4">
					<a href="https://www.pinterest.com/infinityhouse14/"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png" class="img-responsive"></a>
				</div>				
			</div>
			
			<div class="col-md-12">
				<h3>Latest News</h3>
			</div>
			
			<?php
				query_posts('cat=news');
				while (have_posts()) : the_post();
					
					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
						?><a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); ?> </a> <?php
					}					
					?> <a href="<?php echo get_permalink(); ?>"><h3> <?php the_title(); ?> </h3></a>

					<?php
				endwhile;
			?>
		</div> <!-- First collumn -->
		
		<div class="col-md-2 col-xs-4"><!-- Second collumn -->
			<img src="http://placehold.it/500x3000" class="img-responsive">
		</div><!-- Second collumn -->
		
		<div class="col-md-2 col-xs-4"><!-- Third collumn -->
			<img src="http://placehold.it/500x3000" class="img-responsive">
		</div><!-- Third collumn -->
		
		<div class="col-md-2 col-xs-4"><!-- Fourth collumn -->
			<img src="http://placehold.it/500x3000" class="img-responsive">
		</div><!-- Fourth collumn -->
		
		<div class="col-md-2 col-xs-4"><!-- Fifth collumn -->
			<img src="http://placehold.it/500x3000" class="img-responsive">
		</div><!-- Fifth collumn -->
			
		<div class="col-md-2 col-xs-4"><!-- Sixth collumn -->
			<img src="http://placehold.it/500x3000" class="img-responsive">
		</div><!-- Sixth collumn -->		
		
	</div> <!-- row -->



<?php get_footer(); ?>