<?php
/*
Template Name: page_services
*/

get_header();

?>
	<div class="testimonials" style="background-image: url('<?php the_field('img_parallax_page');?>');  height:500px;"></div>

    <!-- Main Content -->
    <div class="services">
    	<div class="container">
    		<h2 id="title_service"><?php the_title(); ?></h2>
	        <div class="row">
					<?php
					query_posts('pagename=Private Training');
					while (have_posts()) : the_post();?>
					<div class="row spacin-border">
						<div class="col-sm-3">
							<div class="card caption-style-4" style="width: 100%;">
			        			<div class="hover_efect">
			        				<img class="" src="<?php the_field('img_service_1'); ?>" alt="Card image cap" style="width: 100%;">
								  	<div class="caption">

										<!--<div class="caption-text">
										<img src="<?php //bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>-->
									</div>
			        			</div>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_field('first_title_service_1'); ?><span class="card-subtitle"><?php the_field('second_title_service_1'); ?></span></h4></a>
						  	</div>
						  	<p><?php the_field('small_definition_first_service'); ?></p>
								<a href="<?php the_permalink(); ?>" class = "btn-link">Read More...</a>
			        	</div>
			        </div>
						<?php
					endwhile;
					?>
					<?php
					query_posts('pagename=Circuit Training');
					while (have_posts()) : the_post();?>
					<div class="row spacin-border">
						<div class="col-sm-3">
							<div class="card caption-style-4" style="width: 100%;">
			        			<div class="hover_efect">
			        				<img class="" src="<?php the_field('img_service_2'); ?>" alt="Card image cap" style="width: 100%;">
								  	<div class="caption">

										<!--<div class="caption-text">
										<img src="<?php //bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>-->
									</div>
			        			</div>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_field('first_title_service_2'); ?><span class="card-subtitle"><?php the_field('second_title_service_2'); ?></span></h4></a>
						  	</div>
						  	<p><?php the_field('small_definition_second_service'); ?></p>
								<a href="<?php the_permalink(); ?>" class = "btn-link">Read More...</a>
			        	</div>
			        </div>
						<?php
					endwhile;
					?>
					<?php
					query_posts('pagename=Cardio Training');
					while (have_posts()) : the_post();?>
					<div class="row spacin-border">
						<div class="col-sm-3">
							<div class="card caption-style-4" style="width: 100%;">
			        			<div class="hover_efect">
			        				<img class="" src="<?php the_field('img_service_3'); ?>" alt="Card image cap" style="width: 100%;">
								  	<div class="caption">

										<!--<div class="caption-text">
										<img src="<?php //bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>-->
									</div>
			        			</div>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_field('first_title_service_3'); ?><span class="card-subtitle"><?php the_field('second_title_service_3'); ?></span></h4></a>
						  	</div>
						  	<p><?php the_field('small_definition_third_service'); ?></p>
								<a href="<?php the_permalink(); ?>" class = "btn-link">Read More...</a>
								</div>
			        </div>
						<?php
					endwhile;
					?>
					<?php
					query_posts('pagename=Nutrition Plan');
					while (have_posts()) : the_post();?>
					<div class="row spacin-border">
						<div class="col-sm-3">
							<div class="card caption-style-4" style="width: 100%;">
			        			<div class="hover_efect">
			        				<img class="" src="<?php the_field('img_service_4'); ?>" alt="Card image cap" style="width: 100%;">
								  	<div class="caption">

										<!--<div class="caption-text">
										<img src="<?php //bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>-->
									</div>
			        			</div>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_field('first_title_service_4'); ?><span class="card-subtitle"><?php the_field('second_title_service_4'); ?></span></h4></a>
						  	</div>
						  	<p><?php the_field('small_definition_fourth_service'); ?></p>
								<a href="<?php the_permalink(); ?>" class = "btn-link">Read More...</a>
								</div>
			        </div>
						<?php
					endwhile;
					?>
		        </div>
	    </div>
    </div>



<?php
get_footer();
?>
