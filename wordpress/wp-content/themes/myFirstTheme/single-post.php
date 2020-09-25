<?php get_header() ?>

<?php if (have_posts()) : ?>
    <section class="row" style="justify-content:center">
        <?php while (have_posts()) : the_post(); ?>

            <article class="card col-12 text-white bg-dark mb-3" style="max-width:90%">

                <!-- Version Mobile -->
                <div class="single-mobile col-12">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img ml-0 my-3', 'alt' => 'Movie Poster', 'style' => 'height: auto']); ?>

                    <div class="card-body">
                        <h2 class="card-title" style="font-size:2.2rem"><?php the_title(); ?></h2>
                        <h3 class="card-subtitle ml-4 mt-3" style="font-size:1.6rem"><?php the_category(); ?></h3>
                        <p class="card-text"><?php the_content(); ?></p>
                    </div>
                </div>

                <!-- Version Laptop -->
                <div class="single-laptop row">
                    <div class="col-4">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img ml-3 my-3', 'alt' => 'Movie Poster', 'style' => 'height: auto']); ?>
                    </div>
                    <div class="col-8">
                        <div class="card-body ml-4">
                            <h2 class="card-title" style="font-size:2.2rem"><?php the_title(); ?></h2>
                            <h3 class="card-subtitle ml-4 mt-3" style="font-size:1.6rem"><?php the_category(); ?></h3>
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