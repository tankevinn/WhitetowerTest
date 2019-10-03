<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

<?php 
get_template_part("navigation");
get_template_part("heading"); 

$args = array(
	"post_type" => "post",
	"posts_per_page"  => "10"
);

$the_query = new WP_Query($args);
?>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">

			<?php 
			if( $the_query->have_posts() ) :
			
				/* Start the Loop */
				while ( $the_query->have_posts() ) : 
					$the_query->the_post();

					/*
					* Include the Post-Format-specific template for the content.
					*/
					get_template_part("template-parts/content-posts");
			
				endwhile; ?>

				<div class="clearfix">
					<a class="btn btn-primary float-right" href="#"><?php echo get_field("older_post_button"); ?></a>
				</div>

			<?php 
			else :

				get_template_part("template-parts/content-nopost");

			endif;
			
			wp_reset_postdata(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
