<?php
$blog_section_title = get_field('blog_section_title');
?>

<style>
    .text-truncate-2-lines {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<section class="blog-section">
    <div class="container">
        <?php if ($blog_section_title) : ?>
            <h2 class="text-center fw-bold text-dark mb-5">
                <?php echo esc_html($blog_section_title); ?>
            </h2>
        <?php endif; ?>

        <div class="row g-4">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'ignore_sticky_posts' => 1,
            );

            $latest_posts = new WP_Query($args);

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
            ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid rounded-top" />
                            <?php endif; ?>
                            <div class="p-4">
                                <h5 class="fw-bold text-dark text-truncate"><?php the_title(); ?></h5>
                                <div class="text-muted text-truncate-2-lines">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="container mx-0 px-0 py-4">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p class="text-center">No recent posts found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>