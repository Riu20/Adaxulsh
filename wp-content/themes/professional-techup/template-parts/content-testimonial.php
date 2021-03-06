<?php 
$techup_enable_testimonial_section = get_theme_mod( 'techup_enable_testimonial_section', false );
$techup_testimonial_title= get_theme_mod( 'techup_testimonial_title','What People Say');
$techup_testimonial_subtitle= get_theme_mod( 'techup_testimonial_subtitle');

if($techup_enable_testimonial_section == true ) {
	$techup_testimonials_no        = 6;
	$techup_testimonials_pages      = array();
	for( $i = 1; $i <= $techup_testimonials_no; $i++ ) {
		 $techup_testimonials_pages[] = get_theme_mod('techup_testimonial_page'.$i);
	}
	$techup_testimonials_args  = array(
	'post_type' => 'page',
	'post__in' => array_map( 'absint', $techup_testimonials_pages ),
	'posts_per_page' => absint($techup_testimonials_no),
	'orderby' => 'post__in'
	); 
	$techup_testimonials_query = new WP_Query( $techup_testimonials_args );
?>
 	<!-- ======= Testimonials Section ======= -->

    <section id="testimonials">
      <div class="container">
        <div class="row justify-content-flex-start">
          <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
            <div class="common-heading">
            	<?php if($techup_testimonial_title) : ?>
              <span><?php echo esc_html($techup_testimonial_title); ?></span>
              <?php endif; ?>
              <?php if($techup_testimonial_subtitle) : ?>
              <h2 class="mb-30"><?php echo esc_html($techup_testimonial_subtitle); ?></h2>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="testimonials-content owl-carousel owl-theme text-center">
			<?php
				  $count = 0;
				  while($techup_testimonials_query->have_posts() && $count <= 5 ) :
				  $techup_testimonials_query->the_post();
				?>
               <div class="testi-item wow fadeInUp" data-wow-delay="0.2s">
                <div class="client-description">
                   <p><?php echo esc_html(get_the_excerpt()); ?></p>
                </div> 
                 <div class="testi-detail">  
                  <div class="client-pic">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="client-heading">
                    <div class="client-info">
                      <h6><?php the_title(); ?></h6>
                      <span><?php get_the_author(); ?></span>
                    </div>
                    <div class="icon">
                      <i class="fa fa-quote-left"></i>
                    </div>
                  </div>
                </div> 
              </div>
              <?php
				$count = $count + 1;
				endwhile;
				wp_reset_postdata();
			?>  
            </div>
          </div>
        </div>
    </section>
    
    <!-- End Testimonials Section ---->

	
<?php } ?>