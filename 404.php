<?php
/**
 * This is template for 404 error page if the page is not available
 */

get_header(); 

get_template_part('navigation');
get_template_part('heading'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
            <h2><?php _e("There is no page available in this URL"); ?></h2>
        </div>
    </div>
</div>

<?php get_footer(); ?>