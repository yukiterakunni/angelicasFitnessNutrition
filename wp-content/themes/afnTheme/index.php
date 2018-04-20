<?php

get_header(); 

?>

	<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
		<video id="video_home" loop muted autoplay screen>
			<source src="<?php bloginfo(stylesheet_directory);?>/video/finalvideo3.mp4"/>
		</video>
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
                    		<img src="<?php bloginfo(stylesheet_directory);?>/img/try_free.png" alt="">
                    	</a>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- Main Content -->
    <div class="services">
    	<div class="container">
    		<h2 id="title_service">Our Services 1111</h2>
	        <div class="row">
				<?php
				query_posts('pagename=Private Training');
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<img class="card-img-top" src="<?php the_field('img_service_1'); ?>" alt="Card image cap" style="width: 100%;">
							  	<div class="caption">
									<div class="blur"></div>
									<div class="caption-text">
										<img src="<?php bloginfo(stylesheet_directory); ?>/img/search.png" alt="">
									</div>
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_field('first_title_service_1'); ?><span class="card-subtitle"><?php the_field('second_title_service_1'); ?></span></h4></a>
						  	</div>
						</div>	
		        	</div>
					<?php 
				endwhile;
				?>
				<?php
				query_posts('pagename=Circuit Training');
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<img class="card-img-top" src="<?php the_field('img_service_2'); ?>" alt="Card image cap" style="width: 100%;">
							  	<div class="caption">
									<div class="blur"></div>
									<div class="caption-text">
										<img src="<?php bloginfo(stylesheet_directory); ?>/img/search.png" alt="">
									</div>
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_field('first_title_service_2'); ?><span class="card-subtitle"><?php the_field('second_title_service_2'); ?></span></h4></a>
						  	</div>
						</div>	
		        	</div>
					<?php 
				endwhile;
				?>
				<?php
				query_posts('pagename=Cardio Training');
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<img class="card-img-top" src="<?php the_field('img_service_3'); ?>" alt="Card image cap" style="width: 100%;">
							  	<div class="caption">
									<div class="blur"></div>
									<div class="caption-text">
										<img src="<?php bloginfo(stylesheet_directory); ?>/img/search.png" alt="">
									</div>
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_field('first_title_service_3'); ?><span class="card-subtitle"><?php the_field('second_title_service_3'); ?></span></h4></a>
						  	</div>
						</div>	
		        	</div>
					<?php 
				endwhile;
				?>
				<?php
				query_posts('pagename=Nutrition Plan');
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<img class="card-img-top" src="<?php the_field('img_service_4'); ?>" alt="Card image cap" style="width: 100%;">
							  	<div class="caption">
									<div class="blur"></div>
									<div class="caption-text">
										<img src="<?php bloginfo(stylesheet_directory); ?>/img/search.png" alt="">
									</div>
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_field('first_title_service_4'); ?><span class="card-subtitle"><?php the_field('second_title_service_4'); ?></span></h4></a>
						  	</div>
						</div>	
		        	</div>
					<?php 
				endwhile;
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
		<div class="row">
        	<div class="col-sm-2">
        		<div class="card" style="width: 100%;">
				  <img src="<?php bloginfo(stylesheet_directory); ?>/img/fotobiografica.png" alt="">
				</div>	
        	</div>
        	<div class="col-sm-10">
        		<div class="card" style="width: 100%;">
				  <h3><?php the_field('title_biography');?></h3>
				  <p><?php the_field('content_biography');?></p>
				</div>
        	</div>        
        </div>
	</div>
	<div class="testimonials" style="background-image: url('<?php bloginfo(stylesheet_directory); ?>/img/fitparallax.jpg');">
		<div class= "container">
			<div class="row">	
				<div class="col-sm-6">	
					<div class="row">
						<div class="col-sm-3">
							<img src="<?php the_field('img_first_testimonial');?>" alt="" class="img-testimonial">		
						</div>
						<div class="col-sm-9">
							<h4><?php the_field('name_first_testimonial'); ?></h4>
							<p>"<?php the_field('content_first_testimonial');?>"</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">	
					<div class="row">
						<div class="col-sm-3">
							<img src="<?php the_field('img_second_testimonial');?>" alt="" class="img-testimonial">		
						</div>
						<div class="col-sm-9">
							<h4><?php the_field('name_second_testimonial'); ?></h4>
							<p>"<?php the_field('content_second_testimonial');?>"</p>
						</div>
					</div>
				</div>
			</div>
    	</div>
	</div>
	<div class="container form_tryfree" id='frm_tryfree'>
		<div class="row">
			<div class="col-sm-4" style="text-align: right;">
				<img src="<?php bloginfo(stylesheet_directory); ?>/img/try_free.png" alt="">
			</div>
			<div class="col-sm-8">
                <?php the_content(); ?>
                <h1>Holaaaa!!!!</h1>
			</div>
		</div>
	</div>
   

<?php get_footer(); ?>


    