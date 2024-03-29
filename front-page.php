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

$max_post_number = get_field("max_post_number");

$args = array(
	"post_type" => "post",
	"posts_per_page"  => $max_post_number
);

$the_query = new WP_Query($args);
?>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">

			<?php 
			if( $the_query->have_posts() ) :

				$post_button_text = get_field("post_button_text");

				while ( $the_query->have_posts() ) :	// Start the Loop if post is available
					$the_query->the_post();

					get_template_part("template-parts/content", "posts");	//Include the Post-Format specific template for the content
			
				endwhile; 
			?>

				<div class="clearfix">
					<a class="btn btn-primary float-right" href="#"><?php echo $post_button_text ?></a>
				</div>

			<?php 
			else :

				get_template_part("template-parts/content", "nopost");	//Include the no-post format template for the content

			endif;
			
			wp_reset_postdata(); 
			?>

		</div>
	</div>
</div>

<hr>

<?php get_footer(); ?>
