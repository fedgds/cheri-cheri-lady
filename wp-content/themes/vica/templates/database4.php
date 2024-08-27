<?php 
/* Template Name: database4 */
$args = array(
    'post_type' => 'cong_thuc',
    'orderby' => 'name',
);

$recipes = new WP_Query($args);

$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner-database.php') ?>
    <section class="section-recipe-database">
        <div class="container-database">
            <div class="left">
                <form action="">
                    <label for="search-food">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <path d="M9.37528 1.26367C7.7188 1.26367 6.09953 1.75487 4.72222 2.67516C3.34492 3.59545 2.27144 4.90349 1.63753 6.43387C1.00363 7.96425 0.837771 9.64824 1.16093 11.2729C1.48409 12.8975 2.28176 14.3899 3.45306 15.5612C4.62437 16.7325 6.1167 17.5301 7.74134 17.8533C9.36599 18.1765 11.05 18.0106 12.5804 17.3767C14.1107 16.7428 15.4188 15.6693 16.3391 14.292C17.2593 12.9147 17.7505 11.2954 17.7505 9.63895C17.7504 7.41773 16.868 5.28753 15.2973 3.71689C13.7267 2.14625 11.5965 1.26381 9.37528 1.26367Z" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M15.6235 15.8877L21.4727 21.7369" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        </svg>
                    </label>
                    <input type="text" id="search-food" placeholder="Tìm kiếm món ăn...">
                    <button>Tìm kiếm</button>
                </form>
                <div class="food-recipe">
                    <h2 class="title">Công thức món ăn</h2>
                    <p class="description">Thể hiện kỹ năng của bạn và mở ra con đường sự nghiệp của bạn với Chứng chỉ Khách sạn Toàn cầu.</p>
                    <div class="list-recipe">
                        <?php 
                            if($recipes->have_posts()) :
                                while($recipes->have_posts()) : $recipes->the_post();
                                $recipe_id = get_the_ID();
                                $recipe = get_field('recipe', $recipe_id);
                                $processing = $recipe['processing'];
                                $ration = $recipe['ration'];
                                $image = $recipe['image'];
                        ?>
                        <div class="recipe">
                            <div class="infor">
                                <div class="recipe-name">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="time">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99935 3.12451C5.74215 3.12451 2.29102 6.57565 2.29102 10.8328C2.29102 15.09 5.74215 18.5412 9.99935 18.5412C14.2565 18.5412 17.7077 15.09 17.7077 10.8328C17.7077 6.57565 14.2565 3.12451 9.99935 3.12451ZM1.04102 10.8328C1.04102 5.88529 5.0518 1.87451 9.99935 1.87451C14.9469 1.87451 18.9577 5.88529 18.9577 10.8328C18.9577 15.7804 14.9469 19.7912 9.99935 19.7912C5.0518 19.7912 1.04102 15.7804 1.04102 10.8328ZM9.99935 6.87451C10.3445 6.87451 10.6243 7.15433 10.6243 7.49951V10.574L12.5246 12.4742C12.7687 12.7183 12.7687 13.114 12.5246 13.3581C12.2805 13.6022 11.8848 13.6022 11.6407 13.3581L9.55741 11.2748C9.4402 11.1576 9.37435 10.9986 9.37435 10.8328V7.49951C9.37435 7.15433 9.65417 6.87451 9.99935 6.87451Z" fill="#ED1E29"/>
                                    </svg>
                                    <p><?= $processing ?></p>
                                </div>
                                <div class="ration">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                        <path d="M1.36914 16.0728H16.6296" stroke="#ED1E29" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M2.25391 14.1974C2.53411 12.6013 3.36506 11.1539 4.60216 10.1071C5.83927 9.06034 7.40423 8.48041 9.02474 8.46826C10.642 8.47204 12.2053 9.05015 13.4358 10.0995C14.6664 11.1488 15.4842 12.6011 15.7435 14.1974" stroke="#ED1E29" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.02409 8.41635C9.77198 8.41635 10.3783 7.81006 10.3783 7.06218C10.3783 6.31429 9.77198 5.70801 9.02409 5.70801C8.27621 5.70801 7.66992 6.31429 7.66992 7.06218C7.66992 7.81006 8.27621 8.41635 9.02409 8.41635Z" stroke="#ED1E29" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.02539 1.59326V3.52034" stroke="#ED1E29" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.01562 2.89551V4.77051" stroke="#ED1E29" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.0371 2.89551V4.77051" stroke="#ED1E29" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p><?= $ration ?></p>
                                </div>
                                <div class="view-detail">
                                    <a href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.67461 3.28688C5.88428 3.10717 6.19993 3.13145 6.37964 3.34112L10.3796 8.00778C10.5401 8.19503 10.5401 8.47133 10.3796 8.65857L6.37964 13.3252C6.19993 13.5349 5.88428 13.5592 5.67461 13.3795C5.46495 13.1998 5.44067 12.8841 5.62038 12.6744L9.34147 8.33318L5.62038 3.99191C5.44067 3.78225 5.46495 3.4666 5.67461 3.28688Z" fill="#ED1E29"/>
                                    </svg>
                                </div>
                            </div>
                            <img src="<?= $image ?>" alt="">
                        </div>
                        <?php endwhile; 
                            wp_reset_postdata();
                            else : ?>
                                <p>Không có công thức.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php include('section/database-right.php') ?>
        </div>
    </section>

    <?php include('section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>