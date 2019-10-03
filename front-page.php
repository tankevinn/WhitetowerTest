<?php get_header(); ?>

<body>

  <!-- Navigation -->
  <?php get_template_part('navigation'); ?>

  <!-- Page Heading -->
  <?php get_template_part('heading'); ?>

  <?php 

    $args = array(
      'post_type' => 'post',
      'posts_per_page'  => '10'
    );

    $the_query = new WP_Query($args);

    $postDetails = get_field('post_details');

  ?>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if( $the_query->have_posts()) while ( $the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="post-preview">
              <a href="post.html">
              <h2 class="post-title"><?php echo get_the_title(); ?></h2>
              <h3 class="post-subtitle"><?php echo get_field("subtitle"); ?></h3>
              </a>
              <p class="post-meta"><?php echo get_field("posted_text"); ?>
              <a href="#"> <?php echo get_the_author(); ?></a> on 
              <?php echo get_the_date(); ?></p>
            </div>
            <hr>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <?php get_footer(); ?>
