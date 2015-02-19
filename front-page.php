<?php 
/*
Template Name: Home Page
*/
	
get_header(); ?>

	<div class="row">
		<div class="col-md-2 col-xs-4 firstCol">  <!-- First collumn -->
			<div class="header-container">
				<div class="header-logo">
					<?php
						if( get_field('headerimg') ): ?>
							<img src="<?php the_field('headerimg'); ?>" class="img-responsive" />
							<?php 
						endif;
					?>
				</div>
			
								
				<?php wp_page_menu('show_home=1&exclude=5,9,23&menu_class=navigation-menu&sort_column=menu_order'); ?>				
							
			
				<div class="social-network">
					<div class="col-md-12 col-xs-12">
						<a href="https://www.facebook.com/infinityhouse14"><i class="fa fa-facebook-square fa-2x"></i></a>
						<a href="https://twitter.com/infinityhouseuk"><i class="fa fa-twitter-square fa-2x"></i></a>
						<a href="https://www.pinterest.com/infinityhouse14/"><i class="fa fa-pinterest-square fa-2x"></i></a>
					</div>				
				</div>
				
				<div class="col-md-12">
					<h3 class="latest-news">Latest News</h3>
				</div>
			</div> <!--header-container-->
			
			
			
			<div class="posts-container">
			<div class="col-md-12">
			
				<?php
					query_posts('cat=news&posts_per_page=5');
					while (have_posts()) : the_post();
						?>	<div class="news-overlay"> <?php
						// check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) {
							?>
								
								<a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); ?> </a> <?php
						}					
						?> 			
								<div class="news-text-overlay">
									<div class="date">
										<?php the_date(); ?>
									</div>
									<div class="title">
										<a href="<?php echo get_permalink(); ?>"><p> <?php the_title(); ?> </p></a>
									</div>									
								</div> <!--news-text-overlay-->	
							</div> <!--news-overlay-->
						<?php
					endwhile;
				?>
				<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
				
				
			</div> <!--col-md-12-->
			</div> <!-- posts-container -->
		</div> <!-- First collumn -->
		
		<div class="col-md-2 col-xs-4 columns"><!-- Second column -->
			<div class="img-overlay">
				<?php
					if( get_field('column-image1') ): ?>
						<img src="<?php the_field('column-image1'); ?>" class="img-responsive" />
						<?php 
					endif;
				?>
				<div class="background-overlay">
					<div class="col-md-12 col-xs-12">
						<div class="heading-text">
							<p>WELCOME TO THE OFFICIAL WEBSITE FOR ROSEMARY REED</p>
							<p>YOU'LL FIND NEWS ON ROSEMARY'S CURRENT WORK, PRODUCTIONS AND HER EFFORTS TO ENSURE A HEALTHIER FUTURE FOR HUMANITY AND THE PLANET</p>
						</div>
						<div class="twitter-button-container">
							<a href="https://twitter.com/InfinityHouseUk" class="twitter-follow-button" data-show-count="false">Follow @InfinityHouseUk</a>
							<script>
								!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
							</script>
						</div>
						<div class="twitter-widget-container">
							<a class="twitter-timeline" href="https://twitter.com/infinityhouseUk" data-widget-id="568033275059654656" data-chrome="noborders noheader transparent noscrollbar">Tweets by @InfinityHouseUk</a>
							<script>
								!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
							</script>
						</div>
					</div>
				</div>	
			</div> <!-- img-overlay-->
		</div><!-- Second column -->
		
		<div class="col-md-2 col-xs-4 columns"><!-- Third column -->
			<div class="column-overlay">
				<?php
					if( get_field('column-image2') ): ?>
						<img src="<?php the_field('column-image2'); ?>" class="img-responsive" />
						<?php 
					endif;
				?>
				
				<div class="text-overlay">
					<div class="col-md-12 col-xs-12">
						<?php
							if( get_field('title-1') ): ?>
								<h2><?php the_field('title-1'); ?></h2>
							<?php 
							endif;
						?>
						
						<?php
							if( get_field('subtitle-1') ): ?>
								<p><?php the_field('subtitle-1'); ?></p>
							<?php 
							endif;
						?>
						<a href="<?php if( get_field('link-1') ): the_field('link-1'); endif; ?>" class="btn btn-default">View <span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div><!-- column overlay -->
		</div><!-- Third column -->
		
		<div class="col-md-2 col-xs-4 columns"><!-- Fourth column -->
			<div class="column-overlay">
				<?php
					if( get_field('column-image3') ): ?>
						<img src="<?php the_field('column-image3'); ?>" class="img-responsive" />
						<?php 
					endif;
				?>
				
				<div class="text-overlay">
					<div class="col-md-12 col-xs-12">
						<?php
							if( get_field('title-2') ): ?>
								<h2><?php the_field('title-2'); ?></h2>
							<?php 
							endif;
						?>
						
						<?php
							if( get_field('subtitle-2') ): ?>
								<p><?php the_field('subtitle-2'); ?></p>
							<?php 
							endif;
						?>
						<a href="<?php if( get_field('link-2') ): the_field('link-2'); endif; ?>" class="btn btn-default">View <span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div><!-- column overlay -->		
		</div><!-- Fourth column -->
		
		<div class="col-md-2 col-xs-4 columns"><!-- Fifth column -->
			<div class="column-overlay">
				<?php
					if( get_field('column-image4') ): ?>
						<img src="<?php the_field('column-image4'); ?>" class="img-responsive" />
						<?php 
					endif;
				?>
				
				<div class="text-overlay">
					<div class="col-md-12 col-xs-12">
						<?php
							if( get_field('title-3') ): ?>
								<h2><?php the_field('title-3'); ?></h2>
							<?php 
							endif;
						?>
						
						<?php
							if( get_field('subtitle-3') ): ?>
								<p><?php the_field('subtitle-3'); ?></p>
							<?php 
							endif;
						?>
						<a href="<?php if( get_field('link-3') ): the_field('link-3'); endif; ?>" class="btn btn-default">View <span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div><!-- column overlay -->
		</div><!-- Fifth column -->
			
		<div class="col-md-2 col-xs-4 columns"><!-- Sixth column -->
			<div class="column-overlay">
				<?php
					if( get_field('column-image5') ): ?>
						<img src="<?php the_field('column-image5'); ?>" class="img-responsive" />
						<?php 
					endif;
				?>
				
				<div class="text-overlay">
					<div class="col-md-12 col-xs-12">
						<?php
							if( get_field('title-4') ): ?>
								<h2><?php the_field('title-4'); ?></h2>
							<?php 
							endif;
						?>
						
						<?php
							if( get_field('subtitle-4') ): ?>
								<p><?php the_field('subtitle-4'); ?></p>
							<?php 
							endif;
						?>
						<a href="<?php if( get_field('link-4') ): the_field('link-4'); endif; ?>" class="btn btn-default">View <span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div><!-- column overlay -->
		</div><!-- Sixth column -->		
		
	</div> <!-- row -->



<?php get_footer(); ?>