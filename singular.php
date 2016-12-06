<?php wp_head(); ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <h1><?= the_title(); ?></h1>
        <?= the_content(); ?>
    </div>
<?php endwhile; ?>
<?php wp_footer(); ?>