<?php wp_head(); ?>
    <nav class="navbar navbar-static-top navbar-dark bg-inverse">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <?php // Use the new walker
        wp_nav_menu(['menu' => 'primary',
            'theme_location' => 'primary',
            'container' => 'div',
            'container_id' => 'exCollapsingNavbar2',
            'container_class' => 'collapse navbar-toggleable-sm',
            'menu_id' => false,
            'menu_class' => 'nav navbar-nav',
            'depth' => 2,
            'fallback_cb' => 'bs4navwalker::fallback',
            'walker' => new BaseTheme\Walkers\Bootstrap4()
        ]);
        ?>
    </nav>
    <!--Main jumbotron for a primary marketing message or call to action-->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-4">
                    <h2><a href="<?= the_permalink() ?>"> <?= the_title(); ?></a></h2>
                    <p> <?= the_excerpt(); ?></p>
                    <p><a class="btn btn-secondary" href="<?= the_permalink() ?>" role="button"> Read more</a></p>
                </div>
            <?php endwhile;
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php wp_footer(); ?>