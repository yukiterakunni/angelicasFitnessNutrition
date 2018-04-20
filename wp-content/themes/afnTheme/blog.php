<?php

get_header(); 

?>
	<div class="testimonials" style="background-image: url('<?php the_field('img_parallax_page');?>');  height:500px;"></div>
    
    <!-- Main Content -->
    <div class="services">
    	<div class="container">
    		<h2 id="title_service">Blog</h2>
	        <div class="row">
	        	<?php
				while (have_posts()) : the_post();?>
					<div class="col-sm-3">
		        		<div class="card caption-style-4" style="width: 100%;">
		        			<div class="hover_efect">
		        				<img class="card-img-top" src="<?php the_thumbnail(); ?>" alt="Card image cap" style="width: 100%;">
							  	<div class="caption">
									<div class="blur"></div>
									<div class="caption-text">
										<img src="<?php bloginfo(stylesheet_directory)?>/img/search.png" alt="">
									</div>
								</div>
		        			</div>
						  	<div class="card-block">
						    	<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
						  	</div>
						</div>	
		        	</div>
					<?php 
				endwhile;
				?>
			
				<div class="col-sm-3">
	        		<div class="site-heading" id="try_free">
                    	<a href="#frm_tryfree" >
                    		<img src="<?php bloginfo(stylesheet_directory)?>/img/try_free.png" alt="">
                    	</a>
                    </div>
	        	</div>       
	        </div>
	    </div>
    </div>
    
	<div class="container">
		<div class="row">
        	<div class="col-sm-12">
        		<h3>News About Servces</h3>                       
			        
        		
        	</div>        
        </div>
	</div>
	<div class="container form_tryfree" id='frm_tryfree'>
		<div class="row">
			<div class="col-sm-4" style="text-align: right;">
				<img src="<?php bloginfo(stylesheet_directory)?>/img/try_free.png" alt="">
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
	</div>
   

<?php 
get_footer(); 
?>


    