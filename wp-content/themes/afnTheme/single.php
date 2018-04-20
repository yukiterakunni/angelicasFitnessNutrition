<?php

get_header(); 

?>
	<div class="testimonials" style="background-image: url('<?php the_field('img_parallax_posts');?>');  height:500px;"></div>
    
    <!-- Main Content -->
    <div class="services">
    	<div class="container">
    		<h2 id="title_service"><?php the_title(); ?></h2>
	        <div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-single">
					
    				<?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
					<?php the_content(); ?>
					<?php
				    endwhile; //resetting the page loop
				    wp_reset_query(); //resetting the page query
				    wp_reset_postdata(); //resetting the post query
				    ?>
					
				</div>
				      
	        </div>
	    </div>
    </div>
    <div class="news_panel">
		<div class="container">
			<div class="row">
	        	<div class="col-sm-12">
	        		<h3>More news</h3>   
	        		<div class="row"> 
	        		    <?php
						   $args = array('category_name' => 'News','posts_per_page' => 4, 'orderby' => 'rand');
						   $category_posts = new WP_Query($args);
						 
						   if($category_posts->have_posts()) : 
						      while($category_posts->have_posts()) : 
						         $category_posts->the_post();
						?>
						<div class="col-sm-3">
						    <div class="card mb-3">
							  <!--<img class="card-img-top" src="..." alt="Card image cap">-->
							  <?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top')); ?>
							  <div class="card-block">
							    <h4 class="card-title" style = "color: #00cc00!important;"><?php the_title(); ?></h4>
							    <p class="card-text"><?php the_excerpt(); ?></p>
							    <a href="<?php the_permalink(); ?>" class="more_read">Read more...</a>
							    <p class="card-text"><small class="text-muted">Last update <?php the_modified_date(); ?></small></p>
							  </div>
							</div>  
						</div> 
						<?php
						      endwhile;
						   else: 
						?>
						      Vaya, no hay entradas.
						<?php
						   endif;
						?>
					</div>
	        	</div>        
	        </div>
	    </div>
	</div>
<?php 
get_footer(); 
?>

