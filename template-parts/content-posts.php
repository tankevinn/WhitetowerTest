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