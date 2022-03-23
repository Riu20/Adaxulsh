<?php
$techup_enable_blog_section = get_theme_mod( 'techup_enable_blog_section', true );
$techup_blog_cat 		= get_theme_mod( 'techup_blog_cat', 'uncategorized' );
if($techup_enable_blog_section == true) 
{
	$techup_blog_title 	= get_theme_mod( 'techup_blog_title', esc_html__( 'Our News & Blogs','professional-techup'));
	$techup_blog_subtitle 	= get_theme_mod( 'techup_blog_subtitle', esc_html__( 'Latest News','professional-techup') );
	$techup_rm_button_label 	= get_theme_mod( 'techup_rm_button_label', esc_html__( 'Read More','professional-techup'));
	$techup_blog_count 	 = apply_filters( 'techup_blog_count', 3 );
?> 	
	<!-- blog start-->
        <section class="blog-sec">
        <div class="container">
          <div class="row justify-content-flex-start">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
              <div class="common-heading">
              	<?php if($techup_blog_title) : ?>
                <span><?php echo esc_html( $techup_blog_title ); ?></span>
                <?php endif; ?>
                <?php if($techup_blog_subtitle) : ?>
                <h2 class="mb-30"><?php echo esc_html( $techup_blog_subtitle ); ?></h2>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
            	<?php 
				if( !empty( $techup_blog_cat ) ) 
					{
					$blog_args = array(
						'post_type' 	 => 'post',
						'category_name'	 => esc_attr( $techup_blog_cat ),
						'posts_per_page' => absint( $techup_blog_count ),
					);

					$blog_query = new WP_Query( $blog_args );
					if( $blog_query->have_posts() ) 
					{
						while( $blog_query->have_posts() ) 
						{
							$blog_query->the_post();
				?>
              <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <article class="blog-item">
                  <div class="post-img">
                    		<?php if(the_post_thumbnail()): ?>
                            <?php the_post_thumbnail_url(); ?>
                            <?php endif; ?>
                  </div>
                  <div class="post-body ">
                    <div class="post-meta-list">
                      <span class="meta-date">
                        <i class="fa fa-calendar"></i><span class="meta-date-text"><?php echo esc_html(get_the_date( 'F j, Y' ));?></span>
                      </span>
                    </div>            
                      <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h2>
                      <a href="<?php the_permalink(); ?>" class="blog-btn">
                        <i  class="fa fa-plus"></i>                   
                      </a>
                  </div>
                </article>
              </div>
              <?php
						}
					}
					wp_reset_postdata();
				} ?>
            	</div>
              </div>
            </div>
          </section>

        <!-- blog end-->	

<?php } ?>