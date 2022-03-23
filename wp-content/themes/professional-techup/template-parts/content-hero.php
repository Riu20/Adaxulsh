<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) {
?>  
 	<section class="hero-section" style="background-image:url(<?php if($techup_banner_image) { echo esc_url($techup_banner_image); } else { echo esc_url(get_header_image()); } ?>)">
        <div class="container">
        <div class="container">
          <div class="row p-100-100">
            <div class="col-lg-9 col-md-7 align-self-center wow fadeInUp" data-wow-delay="0.2s">
              <div class="header-heading">
                <h2 class="hero-title ">
                    <?php echo esc_html($techup_banner_title); ?>
                </h2>
                <span class="sub-title"><?php echo esc_html($techup_banner_content); ?></span>
              </div>
            </div>
              <div class="col-lg-3 col-md-5">
                <div class="btn-wraper wow fadeInUp" data-wow-delay="0.4s">
                  <a href="#" class="creative_button">                     
                    <span class="fa fa-long-arrow-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
	
	<div id="content"></div>

    <!--End Hero-->
 
<?php
}
?>