<?php get_header() ?>

<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>

            <div class="card col-4 text-white bg-dark mb-4">
                <div class="row no-gutters">
                    <div class="col-5">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img mt-3 mb-3', 'alt' => 'Movie Poster', 'style' => 'height: auto']); ?>
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size:1.3rem"><?php the_title(); ?></h4>
                            <h5 class="card-subtitle" style="font-size:1rem;"><?php the_category(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-outline-light">See more</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
<?php else : ?>
    <h1>Pas d'article</h1>
<?php endif; ?>

<?php get_footer() ?>