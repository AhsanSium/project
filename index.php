
	<?php get_header(); ?>
	
	<div class="container_full">
		<div class="fix container">
		
			<div id="wrapper" class="slider_hight">
        

			<div class="slider-wrapper theme-dark">
            <div id="slider" class="nivoSlider">
                <?php
				$slider1 = new wp_query(array(
				
					'post_type'=>'customslider',
				
				));
					
				
				while($slider1 -> have_posts()): $slider1 -> the_post();
				
				the_post_thumbnail();
				
				endwhile;
				?>
            </div>
			
        </div>

    </div>
		
		</div>
	
	
	</div>
	
	
    

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	
	
	<div class="container_full">
		<div class="fix container">
			
			
			<section>
				
					<div class="discription">
					
					<?php
							$argss = array(
								'post_type' => 'head_description',);
								
							$servv = new WP_Query($argss);
					
				
						if($servv -> have_posts()): $servv -> the_post();
						?>
						<h2 class="heading_title"><?php	the_title(); ?></h2>
						<h3 class="heading_section">
						<?php	the_content(); ?>
						</h3>
						<?php	
							else:
							echo 'Nothing Found!';
							endif;
					?>
				
				</div>
				
				<div class="column_section">

						<?php
							$args = array(
								'post_type' => 'fourcol',);
								
							$serv = new WP_Query($args);
					
				
						while($serv -> have_posts()): $serv -> the_post();
						
						?>
					<div class="col col1">
						<?php the_post_thumbnail(); ?>
						<h3><?php the_title(); ?></h3>
						<?php
						 the_content();
						?>
					</div>
						<?php
						endwhile;
						?>
					


				</div>
				<div class="bottom_section">
				
					<div class="left_bottom_section"> 
						<?php
							$argsss = array(
								'post_type' => 'about_us',);
								
							$servvv = new WP_Query($argsss);
					
				
						if($servvv -> have_posts()): $servvv -> the_post();
						?>
						<?php the_post_thumbnail(); ?>
						<h3 class="heading_section">
						<?php	the_title(); ?>
						</h3>
						<?php the_content(); ?>
						<?php	
							else:
							echo 'Nothing Found!';
							endif;
					?>
					
					</div>
					
					<div class="right_bottom_section"> 
						
						<?php
							$argssss = array(
								'post_type' => 'l_work',);
								
							$servvvv = new WP_Query($argssss);
					
				
						if($servvvv -> have_posts()): $servvvv -> the_post();
						?>
						
						<?php the_post_thumbnail(); ?>
						
						<h3 class="heading_section">
						<?php	the_title(); ?>
						</h3>
						<a href="<?php the_permalink(); ?>">
						<?php the_content(); ?>
						</a>
						<?php	
							else:
							echo 'Nothing Found!';
							endif;
						?>
						
					
					
				
				</div>
				
			</section>
			
		
		</div>
	
	
	</div>
	<?php get_footer(); ?>