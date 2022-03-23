<?php
/**
 * Template Name: Full Width Page
 *
 * @package wpkites
 */
get_header();?>
<section class="page-section-space page">
	<div class="container<?php echo esc_html(wpkites_container());?>">
	   	<div class="row">
	     	<div class="col-lg-12 col-md-12 col-sm-12">
            	<?php
             	while ( have_posts()):
            	the_post();
             		get_template_part('template-parts/content','page');
             		if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
             	endwhile;
             	?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>