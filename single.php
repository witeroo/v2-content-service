<?php get_header(); ?>
    <?php
        $categories = get_the_category();
        $choiceCategoryKey = array_rand($categories);
        $choiceCategory = $categories[$choiceCategoryKey];
    ?>
    <section class="blogs single">
        <div class="single-blog">
            <div class="blog-meta">
                <a href="<?php echo get_category_link($choiceCategory); ?>" class="blog-tag"><?php echo $choiceCategory->name; ?></a>
                <h1 class="single-title"><?php the_title(); ?></h1>
                <span class="article-date"><?php the_time('d M. Y'); ?></span>
                <div class="share-buttons d-flex">
                    <span>Share this Article</span>
                    <div class="socials d-inline-flex">
                        <a href="https://linkedin.com/shareArticle?url=<?php echo urlencode(get_the_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>&summary=<?php echo urlencode(get_the_excerpt()); ?>" target="_blank" class="social-icon">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6667 5.33398C11.7275 5.33398 12.7449 5.75541 13.4951 6.50556C14.2452 7.2557 14.6667 8.27312 14.6667 9.33398V14.0007H12V9.33398C12 8.98036 11.8595 8.64122 11.6095 8.39118C11.3594 8.14113 11.0203 8.00065 10.6667 8.00065C10.313 8.00065 9.9739 8.14113 9.72386 8.39118C9.47381 8.64122 9.33333 8.98036 9.33333 9.33398V14.0007H6.66666V9.33398C6.66666 8.27312 7.08809 7.2557 7.83824 6.50556C8.58838 5.75541 9.6058 5.33398 10.6667 5.33398V5.33398Z" stroke="" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4 6H1.33334V14H4V6Z" stroke="" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.66667 4.00065C3.40305 4.00065 4 3.4037 4 2.66732C4 1.93094 3.40305 1.33398 2.66667 1.33398C1.93029 1.33398 1.33334 1.93094 1.33334 2.66732C1.33334 3.4037 1.93029 4.00065 2.66667 4.00065Z" stroke="" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_the_permalink()); ?>" target="_blank" class="social-icon">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.3333 2.00084C14.6949 2.45116 13.9881 2.79558 13.24 3.02084C12.8385 2.55918 12.3049 2.23197 11.7114 2.08346C11.1178 1.93495 10.493 1.97231 9.92139 2.19048C9.34978 2.40865 8.85896 2.79711 8.51532 3.30332C8.17168 3.80953 7.9918 4.40907 8 5.02084V5.68751C6.82842 5.71789 5.66752 5.45805 4.62067 4.93114C3.57383 4.40423 2.67355 3.6266 2 2.66751C2 2.66751 -0.666665 8.66751 5.33333 11.3342C3.96035 12.2662 2.32477 12.7335 0.666668 12.6675C6.66667 16.0008 14 12.6675 14 5.00084C14 4.81418 13.98 4.62751 13.9467 4.44751C14.6271 3.77651 15.1072 2.92932 15.3333 2.00084V2.00084Z" stroke="" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>" target="_blank" class="social-icon">
                            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00033 1.33301H6.00033C5.11627 1.33301 4.26842 1.6842 3.6433 2.30932C3.01818 2.93444 2.66699 3.78229 2.66699 4.66634V6.66634H0.666992V9.33301H2.66699V14.6663H5.33366V9.33301H7.33366L8.00033 6.66634H5.33366V4.66634C5.33366 4.48953 5.4039 4.31996 5.52892 4.19494C5.65395 4.06991 5.82351 3.99967 6.00033 3.99967H8.00033V1.33301Z" stroke="#808187" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="featured-image">
                <?php the_post_thumbnail('witeroo-large'); ?>
            </div>
            <div class="blog-content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php if(wp_count_posts()->publish > 1): ?>
        <div class="recent-blogs">
            <div class="recent-blogs-container articles-container">
                <h3 class="continue">Continue Reading...</h3>
                <div class="article-cards-row d-flex">
                    <?php
                        $args = [
                            'cat'                   => $choiceCategory->cat_ID,
                            'post__not_in'          => [get_the_ID()],
                            'posts_per_page'        => '20',
                            'ignore_sticky_posts'   => false,
                        ];
                        
                        $query = new WP_Query($args);
                        
                        if ($query->have_posts()) :
                            
                            $relatedPostArray = [];

                            while ($query->have_posts()) : $query->the_post();
                                $relatedPost['the_post_thumbnail_url'] = get_the_post_thumbnail_url();
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
                                    <div class="article-card-item-img" style="background-image: url(<?php echo $randomPostValue['the_post_thumbnail_url']; ?>)"></div>
                                    <div class="article-card-item-text">
                                        <a href="<?php echo get_category_link($choiceCategory); ?>" class="blog-tag"><?php echo $choiceCategory->name; ?></a>
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
            <div class="articles-indicators d-flex">
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
            </div>
        </div>
        <?php endif; ?>
    </section>
    
<?php get_footer(); ?>