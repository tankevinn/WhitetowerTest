<?php
/**
 * This is the heading template containing main heading on the front page
 */

$main_heading = get_field("main_heading");
$heading_image = $main_heading["heading_background_image"]; 
?>

<header class="masthead" style="background-image: url('<?php echo $heading_image ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
            <h1><?php echo $main_heading["heading_title"]; ?></h1>
            <span class="subheading"><?php echo $main_heading["heading_description"]; ?></span>
            </div>
        </div>
        </div>
    </div>
</header>