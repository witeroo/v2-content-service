<?php get_header(); ?>

    <?php get_template_part('template/blog-nav'); ?>
    <section class="blogs">
        <?php
            $c = 0;
            if ( have_posts() ) : while ( have_posts() ) : the_post();

                if ($wp_query->current_post != 0 ){
                    if ($c < 3) {
        ?>
                        <div class="article-card-item">
                            <div class="article-card-item-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                            <div class="article-card-item-text">
                                <a href="#" class="blog-tag"><?php single_cat_title(); ?></a>
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="article-title"><?php echo wp_trim_words(get_the_title(), 12, '...'); ?></h4>
                                </a>
                                <span class="article-date"><?php the_time('d M. Y'); ?></span>
                                <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 17, '...'); ?></p>
                            </div>
                        </div>
        <?php
                    }else{
        ?>
                        </div>
                            <div class="article-cards-row d-flex">
                                <div class="article-card-item">
                                    <div class="article-card-item-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                                    <div class="article-card-item-text">
                                        <a href="#" class="blog-tag"><?php single_cat_title() ?></a>
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="article-title"><?php echo wp_trim_words(get_the_title(), 12, '...'); ?></h4>
                                        </a>
                                        <span class="article-date"><?php the_time('d M. Y'); ?></span>
                                        <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 17, '...'); ?></p>
                                    </div>
                                </div>
        <?php
                        $c = 0;
                    }
                    $c++;
                }else{
        ?>
                    <div class="featured-blog d-flex">
                        <div class="featured-blog-image">
                            <?php the_post_thumbnail('witeroo-medium'); ?>
                        </div>
                        <div class="featured-blog-text">
                            <a href="#" class="blog-tag"><?php single_cat_title() ?></a>
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="blog-title"><?php echo wp_trim_words(the_title(), 12, '...'); ?></h2>
                            </a>
                            <span class="article-date"><?php the_time('d M. Y'); ?></span>
                            <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 48, '...'); ?></p>
                            <div class="read-more d-flex">
                                <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-blogs">
                        <div class="recent-blogs-container">
                            <div class="article-cards-row d-flex">
        <?php
                }
            
                endwhile;
        ?>
                        </div>
                    </div>
                    <div class=" d-flex">
                        <a href="#" class="btn btn-secondary more-articles">See More Articles</a>
                    </div>
                </div>
        <?php else: ?>
            <p><?php _e('Sorry, there are no posts.'); ?></p>
        <?php endif; ?>
    </section>

    <?php get_template_part('template/subscription-form'); ?>
    
    <?php get_footer(); ?>