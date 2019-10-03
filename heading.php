<?php $mainHeading = get_field("main_heading"); ?>
<?php $headingImage = $mainHeading["heading_background_image"]; ?>
<header class="masthead" style="background-image: url('<?php echo $headingImage ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
            <h1><?php echo $mainHeading["heading_title"]; ?></h1>
            <span class="subheading"><?php echo $mainHeading["heading_description"]; ?></span>
            </div>
        </div>
        </div>
    </div>
</header>