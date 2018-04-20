<?php
/*
Template Name: page_contacto
*/

get_header(); 

?>
	<div class="testimonials" style="background-image: url('<?php the_field('img_parallax_page');?>');  height:500px;"></div>
    
    <!-- Main Content -->
    <div class="services">
    	<div class="container">
    		<h2 id="title_service"><?php the_title(); ?></h2>
	        <div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
					<?php the_content(); ?>
					<?php
				    endwhile; //resetting the page loop
				    wp_reset_query(); //resetting the page query
				    wp_reset_postdata(); //resetting the post query
				    ?>
				</div>
				<div class="col-sm-5 ">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13383.69263660321!2d-96.80273267730709!3d33.00580127876116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8e0fb94f5b15b35!2sANGELICA&#39;S+-+fitness+and+nutrition+center!5e0!3m2!1ses-419!2sco!4v1503636821024" height="450" frameborder="0" style="border:0" allowfullscreen style="width: 100%!important;" class="map"></iframe>
					<div class="footer_afnc">
            		<h4>Contact us</h4>
                    <p><span><img src="<?php bloginfo(stylesheet_directory)?>/img/phone.png" alt=""></span> (972) 363-5376</p>
<p><span><img src="<?php bloginfo(stylesheet_directory)?>/img/phone.png" alt=""></span> (972) 599-0009</p>
                    <p><span><img src="<?php bloginfo(stylesheet_directory)?>/img/mail.png" alt=""></span> hi@angelicasfitnessnutrition.com</p>
                    <p><span><img src="<?php bloginfo(stylesheet_directory)?>/img/address.png" alt=""></span> 18910 Preston Road #110 Dallas, Texas 75252-2447</p>
            	</div>
				</div>
		    </div>      
	    </div>
    </div>


<?php 
get_footer(); 
?>


    