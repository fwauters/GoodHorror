<?php get_header() ?>

<?php if (have_posts()) : ?>
    <section class="row" style="justify-content:center">
        <?php while (have_posts()) : the_post(); ?>

            <article class="card col-12 text-white bg-dark mb-3" style="max-width:90%">
                <div class="row no-gutters">
                    <div class="col-4">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img ml-3 my-3', 'alt' => 'Movie Poster', 'style' => 'height: auto']); ?>
                    </div>
                    <div class="col-8">
                        <div class="card-body ml-4">
                            <h4 class="card-title" style="font-size:2.2rem"><?php the_title(); ?></h4>
                            <h5 class="card-subtitle md-2"><?php the_category(); ?></h5>
                            <p class="card-text"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    </section>
<?php else : ?>
    <h1>No article</h1>
<?php endif; ?>

<?php get_footer() ?>