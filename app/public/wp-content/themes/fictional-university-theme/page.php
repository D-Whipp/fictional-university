<?php 
    while(have_posts()) {
        the_post(); ?>
        <h1>This is a PAGE not a POST</h1>
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>
    <?php   }

?>