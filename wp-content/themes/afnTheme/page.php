<?php

get_header();

?>
	<div class="testimonials" style="background-image: url('<?php the_field('img_parallax_page');?>');  height:500px;"></div>

    <!-- Main Content -->
    <div class="services">
    	<div class="container">
    		<!--<h2 id="title_service"><?php //the_title(); ?></h2>-->
	        <div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<p>
    				<?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
    				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?php
				    endwhile; //resetting the page loop
				    wp_reset_query(); //resetting the page query
				    wp_reset_postdata(); //resetting the post query
				    ?>
					</p>
					<a href="http://angelicasfitnessnutrition.com/contact/" class = "btn-link">Book a Session</a>
				</div>
				<!--<div class="col-sm-3">
	        		<div class="site-heading" id="try_free">
                    	<a href="#frm_tryfree" >
                    		<img src="<?php //bloginfo(stylesheet_directory); ?>/img/try_free.png" alt="">
                    	</a>
                    </div>
	        	</div> -->
	        </div>
	    </div>
    </div>


	<!--<div class="container form_tryfree" id='frm_tryfree'>
		<div class="row">
			<div class="col-sm-4" style="text-align: right;">
				<img src="<?php /*bloginfo(stylesheet_directory);*/ ?>/img/try_free.png" alt="">
			</div>
			<div class="col-sm-8">
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                    </div>
					<div class="form-group">
                        <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
			</div>
		</div>
	</div>-->


<?php
get_footer();
?>
