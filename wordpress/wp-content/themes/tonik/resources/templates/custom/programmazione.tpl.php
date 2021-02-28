<?php get_header(); ?>

<section class="section">
    <div class="wrapper-programmazione">
        <div class="content-programmazione">
            <h4>Posts di programmazione</h4>
            <h4>Wordpress</h4>
            <div class="posts-programmazione">
                <?php
                    $args = [
                        'cat' => 13, // Wordpress
                        'posts_per_page' => 10
                    ];
                    
                    $query = new WP_Query($args);

                    if($query->have_posts()): while($query->have_posts()): $query->the_post();
                        do_action('theme/post/programmazione');
                    endwhile; endif;
                ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>