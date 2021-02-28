<?php get_header(); ?>
    <ul>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <li>
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </li> 
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>

        <?php if (apply_filters('theme/single/sidebar/visibility', true)) : ?>
            <?php
                /**
                 * Functions hooked into `theme/single/sidebar` action.
                 *
                 * @hooked Tonik\Theme\App\Structure\render_sidebar - 10
                 */
                do_action('theme/single/sidebar');
            ?>
        <?php endif; ?>

<?php get_footer(); ?>
