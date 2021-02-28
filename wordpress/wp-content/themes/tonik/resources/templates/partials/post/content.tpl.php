<article class="single">
    <h1><?php the_title(); ?></h1>

    <time>
        <small><?php the_date(); ?></small>
    </time>
    
    <div class="post-thumbnail"><?php the_post_thumbnail('medium') ?></div>

    <p><?php the_content(); ?></p>
</article>
