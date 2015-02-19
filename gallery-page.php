<?php 
/*
Template Name: Gallery Page
*/
	
get_header(); 

wp_reset_query();  // Restore global post data stomped by the_post().

?>

	<div class="row row-background">
		<div class="col-md-2 col-xs-4 firstCol">  <!-- First collumn -->
			<div class="header-container">
				<div class="header-logo">
					<?php						
						if( get_field('headerimage-gallery') ): ?>
							<a href="<?php echo get_page_link('27'); ?>"><img src="<?php the_field('headerimage-gallery'); ?>" class="img-responsive" /></a>
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
					//THE QUERY FOR NEWS
					// arguments for the new query
					$args = array(
					'category_name' => 'news',
					'posts_per_page' => 5
					// you could use the id to
					// 'cat' => 2 or whatever is the id for your category
					); 
		
					$wp_query_news = new WP_Query($args);

				
			
				if($wp_query_news->have_posts()):
					while ($wp_query_news->have_posts()) : $wp_query_news->the_post();
						?>	<div class="news-overlay"> <?php
							// check if the post has a Post Thumbnail assigned to it.
							if ( has_post_thumbnail() ) {
								?><a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); ?> </a> <?php
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
							
						</div><!-- news-overlay -->
						<?php
					endwhile;
				endif; 
				wp_reset_query(); ?>
			
				
				</div> <!--col-md-12-->
			</div> <!-- posts-container -->
		</div> <!-- First collumn -->
		
		<div class="col-md-10 col-xs-8 columns"><!-- Second column -->
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="container">
						<div class="gallery-logo">
							<h1 class="gallery-logo">Gallery</h1>
						</div>
						<div class="row row-gallery">
							<h2 class="gallery-title">Television</h2>
							<?php
								//THE QUERY FOR TELEVISION
								// arguments for the new query
								$args = array(
									'category_name' => 'television',
									'posts_per_page' => -1
								); 
		
								$wp_query_television = new WP_Query($args);
							
								while ($wp_query_television->have_posts()) : $wp_query_television->the_post();
									?>
										<div class="col-md-2 col-xs-6">
											<div class="news-overlay">
												<?php
													// check if the post has a Post Thumbnail assigned to it.
													if ( has_post_thumbnail() ) {
														the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); 
													}
												?>
												<div class="news-text-overlay">
													<div class="date">
														<?php if( get_field('caption-text') ): the_field('caption-text'); endif; ?>
													</div>
													<div class="title">
														<a href="<?php echo get_permalink(); ?>"><p> <?php the_title(); ?> </p></a>
													</div>										
												</div> <!-- news-text-overlay -->
											</div> <!-- news-overlay -->
										</div> <!--col2-->
									<?php
								endwhile;
							?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>											
						</div> <!-- row-->

					
					
						<div class="row row-gallery">
							<h2 class="gallery-title">Living the Life - Series 1</h2>
							<?php
								//THE QUERY FOR LTL1
								// arguments for the new query
								$args = array(
									'category_name' => 'ltl1',
									'posts_per_page' => -1
								); 
		
								$wp_query_ltl1 = new WP_Query($args);
							
								while ($wp_query_ltl1->have_posts()) : $wp_query_ltl1->the_post();
									?>
										<div class="col-md-2 col-xs-6">
											<div class="news-overlay">
												<?php
													// check if the post has a Post Thumbnail assigned to it.
													if ( has_post_thumbnail() ) {
														the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); 
													}
												?>
												<div class="news-text-overlay">
													<div class="date">
														<?php if( get_field('caption-text') ): the_field('caption-text'); endif; ?>
													</div>
													<div class="title">
														<a href="<?php echo get_permalink(); ?>"><p> <?php the_title(); ?> </p></a>
													</div>										
												</div> <!-- news-text-overlay -->
											</div> <!-- news-overlay -->
										</div> <!--col2-->
									<?php
								endwhile;
							?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>											
						</div> <!-- row-->
					
						
						<div class="row row-gallery">
							<h2 class="gallery-title">Living the Life - Series 2</h2>
							<?php
								//THE QUERY FOR LTL2
								// arguments for the new query
								$args = array(
									'category_name' => 'ltl2',
									'posts_per_page' => -1
								); 
		
								$wp_query_ltl2 = new WP_Query($args);
							
								while ($wp_query_ltl2->have_posts()) : $wp_query_ltl2->the_post();
									?>
										<div class="col-md-2 col-xs-6">
											<div class="news-overlay">
												<?php
													// check if the post has a Post Thumbnail assigned to it.
													if ( has_post_thumbnail() ) {
														the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); 
													}
												?>
												<div class="news-text-overlay">
													<div class="date">
														<?php if( get_field('caption-text') ): the_field('caption-text'); endif; ?>
													</div>
													<div class="title">
														<a href="<?php echo get_permalink(); ?>"><p> <?php the_title(); ?> </p></a>
													</div>										
												</div> <!-- news-text-overlay -->
											</div> <!-- news-overlay -->
										</div> <!--col2-->
									<?php
								endwhile;
							?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>											
						</div> <!-- row-->
						
					
					
						<div class="row row-gallery">
							<h2 class="gallery-title">Living the Life - Series 3</h2>
							<?php
								//THE QUERY FOR LTL3
								// arguments for the new query
								$args = array(
									'category_name' => 'ltl3',
									'posts_per_page' => -1
								); 
		
								$wp_query_ltl3 = new WP_Query($args);
							
								while ($wp_query_ltl3->have_posts()) : $wp_query_ltl3->the_post();
									?>
										<div class="col-md-2 col-xs-6">
											<div class="news-overlay">
												<?php
													// check if the post has a Post Thumbnail assigned to it.
													if ( has_post_thumbnail() ) {
														the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); 
													}
												?>
												<div class="news-text-overlay">
													<div class="date">
														<?php if( get_field('caption-text') ): the_field('caption-text'); endif; ?>
													</div>
													<div class="title">
														<a href="<?php echo get_permalink(); ?>"><p> <?php the_title(); ?> </p></a>
													</div>										
												</div> <!-- news-text-overlay -->
											</div> <!-- news-overlay -->
										</div> <!--col2-->
									<?php
								endwhile;
							?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>											
						</div> <!-- row-->
					
						
						<div class="row row-gallery">
							<h2 class="gallery-title">Publishing</h2>
							<?php
								//THE QUERY FOR Publishing
								// arguments for the new query
								$args = array(
									'category_name' => 'publishing',
									'posts_per_page' => -1
								); 
		
								$wp_query_publishing = new WP_Query($args);
							
								while ($wp_query_publishing->have_posts()) : $wp_query_publishing->the_post();
									?>
										<div class="col-md-2 col-xs-6">
											<div class="news-overlay">
												<?php
													// check if the post has a Post Thumbnail assigned to it.
													if ( has_post_thumbnail() ) {
														the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); 
													}
												?>
												<div class="news-text-overlay">
													<div class="date">
														<?php if( get_field('caption-text') ): the_field('caption-text'); endif; ?>
													</div>
													<div class="title">
														<a href="<?php echo get_permalink(); ?>"><p> <?php the_title(); ?> </p></a>
													</div>										
												</div> <!-- news-text-overlay -->
											</div> <!-- news-overlay -->
										</div> <!--col2-->
									<?php
								endwhile;
							?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>											
						</div> <!-- row-->
					
						<div class="row row-gallery">
							<h2 class="gallery-title">Apps</h2>
							<?php
								//THE QUERY FOR APPS
								// arguments for the new query
								$args = array(
									'category_name' => 'apps',
									'posts_per_page' => -1
								); 
		
								$wp_query_apps = new WP_Query($args);
							
								while ($wp_query_apps->have_posts()) : $wp_query_apps->the_post();
									?>
										<div class="col-md-2 col-xs-6">
											<div class="news-overlay">
												<?php
													// check if the post has a Post Thumbnail assigned to it.
													if ( has_post_thumbnail() ) {
														the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive')); 
													}
												?>
												<div class="news-text-overlay">
													<div class="date">
														<?php if( get_field('caption-text') ): the_field('caption-text'); endif; ?>
													</div>
													<div class="title">
														<a href="<?php echo get_permalink(); ?>"><p> <?php the_title(); ?> </p></a>
													</div>										
												</div> <!-- news-text-overlay -->
											</div> <!-- news-overlay -->
										</div> <!--col2-->
									<?php
								endwhile;
							?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>											
						</div> <!-- row-->
					
					
				</div><!--container-gallery-->
			</div><!--col-12-->
			</div> <!--row -->
		</div><!-- Second column -->
		
			
		
	</div> <!-- row -->



<?php get_footer(); ?>