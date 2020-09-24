<?php get_header() ?>

<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>

            <div class="card col-12 text-white bg-dark mb-3">
                <div class="row no-gutters">
                    <div class="col-4">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img mt-3', 'alt' => 'Movie Poster', 'style' => 'height: auto']); ?>
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <h5 class="card-subtitle md-2"><?php the_category(); ?></h5>
                            <p class="card-text"><?php the_content(); ?></p>
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