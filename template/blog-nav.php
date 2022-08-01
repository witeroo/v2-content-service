    <div class="hero t-center">
        <div class="hero-container">
            <h1>Blog</h1>
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
        <?php get_search_form(); ?>
    </nav>