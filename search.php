<?php get_header(); ?>
    
    <?php get_template_part('template/blog-nav'); ?>
    <section class="search-header">
        <h2><span><?php echo have_posts() ? "" : "No "; ?>Search Results for </span>“<?php the_search_query(); ?>”</h2>
        <p class="search-count"><?php echo $wp_query->found_posts; ?> articles found</p>
    </section>
    <section class="blogs search">
        <?php
            $c = 0;
            if ( have_posts() ) :
        ?>
                <div class="recent-blogs">
                    <div class="recent-blogs-container">
                        <div class="article-cards-row d-flex">
        <?php
                while ( have_posts() ) : the_post();
                
                $categories = get_the_category();
                $choiceCategoryKey = array_rand($categories);
                $choiceCategory = $categories[$choiceCategoryKey];

                if ($c < 3) {
        ?>
                    <div class="article-card-item">
                        <div class="article-card-item-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="article-card-item-text">
                            <a href="<?php echo get_category_link($choiceCategory); ?>" class="blog-tag"><?php echo $choiceCategory->name; ?></a>
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
                                <div class="article-card-item-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="article-card-item-text">
                                    <a href="<?php echo get_category_link($choiceCategory); ?>" class="blog-tag"><?php echo $choiceCategory->name; ?></a>
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
            
                endwhile;
        ?>
                        </div>
                    </div>
                </div>
        <?php else: ?>
            <div class="recent-blogs">
            <h3 class="continue">You May Like...</h3>
            <div class="recent-blogs-container articles-container">
                <div class="article-cards-row d-flex">
                <?php
                        $args = [
                            'posts_per_page'        => '20',
                            'ignore_sticky_posts'   => false,
                        ];
                        
                        $query = new WP_Query($args);
                        
                        if ($query->have_posts()) :
                            
                            $relatedPostArray = [];

                            while ($query->have_posts()) : $query->the_post();
                                $categories = get_the_category();
                                $choiceCategoryKey = array_rand($categories);
                                $relatedPost['choice_category'] = $categories[$choiceCategoryKey];

                                $relatedPost['the_post_thumbnail'] = get_the_post_thumbnail();
                                $relatedPost['the_permalink'] = get_the_permalink();
                                $relatedPost['the_title'] = get_the_title();
                                $relatedPost['the_time'] = get_the_time('d M. Y');
                                $relatedPost['the_excerpt'] = wp_trim_words(get_the_excerpt(), 17, '...');
                                $relatedPostArray[] = $relatedPost;
                            endwhile;
                            wp_reset_postdata();

                            shuffle($relatedPostArray);
                            
                            $randomPostArray = array_slice($relatedPostArray, 0, 3);

                            // while ($randomPostArray) :
                            foreach ($randomPostArray as $randomPostKey => $randomPostValue) {
                    ?>
                                <div class="article-card-item">
                                    <div class="article-card-item-img">
                                        <?php echo $randomPostValue['the_post_thumbnail']; ?>
                                    </div>
                                    <div class="article-card-item-text">
                                        <a href="<?php echo get_category_link($randomPostValue['choice_category']); ?>" class="blog-tag"><?php echo $randomPostValue['choice_category']->name; ?></a>
                                        <a href="<?php echo $randomPostValue['the_permalink']; ?>">
                                            <h4 class="article-title"><?php echo $randomPostValue['the_title'] ?></h4>
                                        </a>
                                        <span class="article-date"><?php echo $randomPostValue['the_time']; ?></span>
                                        <p class="blog-excerpt"><?php echo $randomPostValue['the_excerpt']; ?></p>
                                    </div>
                                </div>
                    <?php   
                            }
                        endif; 
                    ?>
                    
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>
    
<?php get_footer(); ?>