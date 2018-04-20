<?php
/*
Template Name: page_blog
*/
get_header(); 

?>
	<div class="testimonials" style="background-image: url('<?php the_field('img_parallax_page');?>');"></div>
    
    <!-- Main Content -->
    <div class="services">
    	<div class="container">
    		<div class="row">
	        	<div class="col-sm-12">
	        		<h3>News About Servces</h3>   
	        		<div class="row"> 
	        		    <?php
						   $args = array('category_name' => 'News');
						   $category_posts = new WP_Query($args);
						 
						   if($category_posts->have_posts()) : 
						      while($category_posts->have_posts()) : 
						         $category_posts->the_post();
						?>
						<div class="col-sm-3">
						    <div class="card mb-3">
							  <!--<img class="card-img-top" src="..." alt="Card image cap">-->
							  <?php the_post_thumbnail('full', array('class' => 'card-img-top wp-post-image')); ?>
							  <div class="card-block">
							    <h4 class="card-title" style="color: #00cc00;"><?php the_title(); ?></h4>
							    <div class="card-text">
							    	<p><?php the_excerpt(); ?></p>
							    </div>
							    <p class="card-text"><small class="text-muted">Last update <?php the_modified_date(); ?></small></p>
							    <a href="<?php the_permalink(); ?>" class="more_read">Read more...</a>
							    
							  </div>
							</div>  
						</div> 
						<?php
						      endwhile;
						   else: 
						?>
						      Vaya, no hay entradas.
						      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis asperiores, dolores tempore quibusdam cupiditate hic error facilis, rerum quae illum eveniet vel omnis magnam. Modi ab, ratione fuga deleniti repellendus.
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


    