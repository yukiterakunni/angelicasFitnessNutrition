<?php

get_header();

?>

	<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
		<video id="video_home" loop muted autoplay screen>
			<source src="<?php bloginfo(stylesheet_directory)?>/video/finalvideo3.mp4"/>
		</video>
		<img src="<?php the_field('img_home_mobil'); ?>" alt="" style="display = none;" id="img_destacada_mobil">
		<?php/*
			if (has_post_thumbnail()){
				the_post_thumbnail('full', array('class' => 'img-destacada'));
			}
		*/?>
        <div class="container absolute-position">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading" id="try_free">
                    	<a href="#frm_tryfree" >
                    		<img src="<?php bloginfo(stylesheet_directory)?>/img/try_free.png" alt="">
                    	</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Main Content -->
    <div class="services">
    	<div class="container">
    		<h2 id="title_service">Our Services</h2>
	        <div class="row">
				<?php
				query_posts('pagename=Private Training');
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<a href="<?php the_permalink(); ?>">
		        					<img class="card-img-top" src="<?php the_field('img_service_1'); ?>" alt="Card image cap" style="width: 100%;">
		        				</a>
							  	<div class="caption">

									<!--<div class="caption-text">
										<img src="<?php //bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>-->
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title" style="text-align: right; color:#00cc00;"><?php the_field('first_title_service_1'); ?><span class="card-subtitle" style="font-weight: lighter;"><?php the_field('second_title_service_1'); ?></span></h4></a>
						  	</div>
						</div>
		        	</div>
					<?php
				endwhile;
				wp_reset_query(); //resetting the page query
				wp_reset_postdata(); //resetting the post query
				?>
				<?php
				query_posts('pagename=Circuit Training');
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<a href="<?php the_permalink(); ?>">
		        					<img class="card-img-top" src="<?php the_field('img_service_2'); ?>" alt="Card image cap" style="width: 100%;">
		        				</a>
							  	<div class="caption">

									<!--<div class="caption-text">
										<img src="<?php //bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>-->
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title" style="text-align: right; color:#00cc00;"><?php the_field('first_title_service_2'); ?><span class="card-subtitle" style="font-weight: lighter;"><?php the_field('second_title_service_2'); ?></span></h4></a>
						  	</div>
						</div>
		        	</div>
					<?php
				endwhile;
				wp_reset_query(); //resetting the page query
				wp_reset_postdata(); //resetting the post query
				?>
				<?php
				query_posts('pagename=Cardio Training');
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<a href="<?php the_permalink(); ?>">
		        					<img class="card-img-top" src="<?php the_field('img_service_3'); ?>" alt="Card image cap" style="width: 100%;">
		        				</a>
							  	<div class="caption">

									<!--<div class="caption-text">
										<img src="<?php //bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>-->
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title" style="text-align: right; color:#00cc00;"><?php the_field('first_title_service_3'); ?><span class="card-subtitle" style="font-weight: lighter;"><?php the_field('second_title_service_3'); ?></span></h4></a>
						  	</div>
						</div>
		        	</div>
					<?php
				endwhile;
				wp_reset_query(); //resetting the page query
				wp_reset_postdata(); //resetting the post query
				?>
				<?php
				query_posts('pagename=Nutrition Plan');
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<a href="<?php the_permalink(); ?>">
		        					<img class="card-img-top" src="<?php the_field('img_service_4'); ?>" alt="Card image cap" style="width: 100%;">
		        				</a>
							  	<div class="caption">

									<!--<div class="caption-text">
										<img src="<?php //bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>-->
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title" style="text-align: right; color:#00cc00;"><?php the_field('first_title_service_4'); ?><span class="card-subtitle" style="font-weight: lighter;"><?php the_field('second_title_service_4'); ?></span></h4></a>
						  	</div>
						</div>
		        	</div>
					<?php
				endwhile;
				wp_reset_query(); //resetting the page query
				wp_reset_postdata(); //resetting the post query
				?>
	        </div>
	        <div class="row">
	        	<div class="col-sm-12">
	        		<p><?php the_field('text_services'); ?></p>
	        	</div>
	        </div>
	    </div>
    </div>

	<div class="container">
		<div class="row content-biography">
        	<div class="col-sm-2">
        		<div class="card" style="width: 100%;">
				  <img id="fotobiografica" src="<?php bloginfo(stylesheet_directory)?>/img/fotobiografica.png" alt="">
				</div>
        	</div>
        	<div class="col-sm-10">
        		<div class="card" style="width: 100%;">
				  <h3><?php the_field('title_biography'); ?></h3>
				  <p><?php the_field('content_biography'); ?></p>
				  <h3><?php the_field('title_philosopy'); ?></h3>
				  <p><?php the_field('text_pilosophy'); ?></p>
				</div>
        	</div>
        </div>
	</div>
	<div class=" testimonials_home" style="background-image: url('<?php bloginfo(stylesheet_directory)?>/img/fitparallax.png');">
		<div class= "container">

				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-3 col-md-3">
							<img src="<?php the_field('img_first_testimonial'); ?>" alt="" class="img-testimonial">
						</div>
						<div class="col-sm-9 col-md-9">
                                                        <h4><?php the_field('name_first_testimonial'); ?></h4>
							<p>"<?php the_field('content_first_testimonial'); ?>"</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-3 col-md-3">
							<img src="<?php the_field('img_second_testimonial'); ?>" alt="" class="img-testimonial">
						</div>
						<div class="col-sm-9 col-md-9">
                                                        <h4><?php the_field('name_second_testimonial'); ?></h4>
							<p>"<?php the_field('content_second_testimonial'); ?>"</p>
						</div>
					</div>
				</div>

    </div>
	</div>
	<div class="panel_try" id='frm_tryfree'>
		<div class="container form_tryfree" >
			<div class="row">
				<div class="col-sm-3 col-sm-offset-2" style="text-align: right;">
					<img src="<?php bloginfo(stylesheet_directory)?>/img/try_free.png" alt="" class="img_try_form">
				</div>
				<div class="col-sm-5">
					<div>
						<?php
						query_posts('pagename=Inicio');
						while (have_posts()) : the_post();?>
							<?php the_content(); ?>
							<?php
						endwhile;
						wp_reset_query(); //resetting the page query
						wp_reset_postdata(); //resetting the post query
						?>
					</div>
				</div>
			</div>
		</div>
   	</div>

<?php get_footer(); ?>
