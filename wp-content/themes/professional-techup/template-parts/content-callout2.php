<?php
$techup_enable_callout_section = get_theme_mod( 'techup_enable_callout_section', false );
$techup_co2_image = get_theme_mod( 'techup_co2_image' );

if($techup_enable_callout_section == true ) {
   
$techup_callout_title = get_theme_mod( 'techup_callout_title');
$techup_callout_content = get_theme_mod( 'techup_callout_content');
$techup_callout_button_label1 = get_theme_mod( 'techup_callout_button_label1');
$techup_callout_button_link1 = get_theme_mod( 'techup_callout_button_link1');
if($techup_co2_image=="")
{
	$techup_co2_image = esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ); 
}
?>
 <!-- Start CTA Section -->
	  <section class="cta-sec-2" style="background-image: url(<?php if($techup_co2_image) { echo esc_url($techup_co2_image); } else { echo esc_url(get_header_image()); } ?>);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="heading">
              <h2 class="section-title"><?php echo esc_html($techup_callout_title); ?></h2>
              <div class="heading-description">
                <p><?php echo esc_html($techup_callout_content); ?></p>
                <?php if(!empty($techup_callout_button_label1)): ?>
                <div class="btn-wraper text-center">
                  <a href="<?php echo esc_url($techup_callout_button_link1); ?>" class="get-btn"><?php echo esc_html($techup_callout_button_label1); ?></a>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End CTA Section -->

<?php } ?>