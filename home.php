<?php get_header(); ?>
    <div class="hero t-center">
        <div class="hero-container">
            <h1>Blogs</h1>
        </div>
    </div>
    <nav class="blog-nav d-flex p-relative">
        <div class="d-none d-md-flex navbar-drop-btn">
            <a href="#">All Articles</a>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 7.5L10 12.5L15 7.5" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <ul class="navbar d-flex">
            <li class="nav-item"><a href="<?php echo site_url(); ?>">All Articles</a></li>
            <?php
                $categories = get_categories();
                foreach ($categories as $categoryKey => $categoryValue) {
            ?>
                    <li class="nav-item"><a href="<?php echo get_category_link($categoryValue); ?>"><?php echo $categoryValue->name; ?></a></li>
            <?php
                }
            ?>
        </ul>
        <div class="search-box">
            <input type="search" placeholder="Search Articles">
        </div>
    </nav>
    <section class="blogs">
        <?php
            $c = 0;
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                
                $categories = get_the_category();
                $choiceCategoryKey = array_rand($categories);
                $choiceCategory = $categories[$choiceCategoryKey];

                if ($wp_query->current_post != 0 ){
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
                }else{
        ?>
                    <div class="featured-blog d-flex">
                        <div class="featured-blog-image">
                            <?php the_post_thumbnail('witeroo-medium'); ?>
                        </div>
                        <div class="featured-blog-text">
                            <a href="<?php echo get_category_link($choiceCategory); ?>" class="blog-tag"><?php echo $choiceCategory->name; ?></a>
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