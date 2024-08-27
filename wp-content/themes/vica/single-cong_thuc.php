<?php 
$query = new WP_Query(
    array(
        'post_type' => 'cong_thuc',
        'post_status' => 'publish'
    )
);

$recipe_id = get_the_ID();
$recipe = get_field('recipe', $recipe_id);

$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');

$categories = wp_get_post_terms($recipe_id, 'danh_muc_cong_thuc', array('fields' => 'ids'));

$related_recipes_query = new WP_Query(array(
    'post_type' => 'cong_thuc',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'danh_muc_cong_thuc',
            'field' => 'id',
            'terms' => $categories,
        )
    ),
    'post__not_in' => array($recipe_id) 
));
$url = get_template_directory_uri();
get_header(); ?>
<main>
    <section class="section-detail-recipe">
        <div class="container-detail-recipe">
            <div class="bot">
                    <a href="">
                        Home
                    </a>
                    <span>/</span>
                    <a href="">
                        Dự án
                    </a>
                    <span>/</span>
                    <a href="<?php the_permalink(); ?>" class="active"> 
                        <?php the_title(); ?>
                    </a>
            </div>
            <div class="left">
                <h2 class="title">
                    <?php the_title(); ?>
                </h2>
                <div class="content">
                    <div class="introduce">
                        <?= $recipe['introduce'] ?>
                    </div>
                    <div class="image-and-infor">
                        <img src="<?= esc_url($thumbnail) ?>" alt="">
                        <div class="infor">
                            <div class="processing">
                                <p>Chế biến</p>
                                <span><?= $recipe['processing'] ?></span>
                            </div>
                            <div class="prepare">
                                <p>Chuẩn bị</p>
                                <span><?= $recipe['prepare'] ?></span>
                            </div>
                            <div class="ration">
                                <p>Khẩu phần</p>
                                <span><?= $recipe['ration'] ?></span>
                            </div>
                        </div>
                    </div>
                    <nav class="material">
                        <h3>Nguyên liệu làm món gà kho gừng</h3>
                        <ul>
                            <?php foreach($recipe['material'] as $item){ ?>
                                <li><?= $item['text'] ?></li>
                            <?php } ?>
                        </ul>
                    </nav>
                    <div class="step">
                        <h3>Cách làm gà kho gừng</h3>
                        <ul>
                            <?php 
                            $count = 1;
                            foreach($recipe['step'] as $item){ ?>
                                <li>
                                    <span>Bước <?= $count ?></span>
                                    <p><?= $item['text'] ?></p>
                                </li>
                            <?php 
                                $count++;
                                } 
                            ?>
                        </ul>
                    </div>
                    <p class="conclusion">Trên đây là cách làm gà kho gừng thơm lừng, ấm nồng khiến ai cũng thích mê. Hãy cùng bắt tay vào bếp để làm ngay món ngon này cho cả nhà thôi nào!</p>
                </div>
            </div>
            
            <div class="right">
                <?php include('templates/section/popular-news.php') ?>
            </div>
        </div>
        <div class="recipe-relate">
            <h3 class="title">Sự kiện liên quan</h3>
            <div class="list-recipe">
            <?php if ($related_recipes_query->have_posts()) : ?>
                <?php while ($related_recipes_query->have_posts()) : $related_recipes_query->the_post(); ?>
                    <?php
                    $related_recipe_id = get_the_ID();
                    $related_recipe = get_field('recipe', $related_recipe_id);
                    $related_recipe_image = $related_recipe['image'];
                    $related_recipe_processing = $related_recipe['processing'];
                    $related_recipe_ration = $related_recipe['ration'];
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
                            <p><?= $related_recipe_processing ?></p>
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
                            <p><?= $related_recipe_ration ?></p>
                        </div>
                        <div class="view-detail">
                            <a href="http://localhost/project-vica/detail-recipe.php">Xem chi tiết</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.67461 3.28688C5.88428 3.10717 6.19993 3.13145 6.37964 3.34112L10.3796 8.00778C10.5401 8.19503 10.5401 8.47133 10.3796 8.65857L6.37964 13.3252C6.19993 13.5349 5.88428 13.5592 5.67461 13.3795C5.46495 13.1998 5.44067 12.8841 5.62038 12.6744L9.34147 8.33318L5.62038 3.99191C5.44067 3.78225 5.46495 3.4666 5.67461 3.28688Z" fill="#ED1E29"/>
                            </svg>
                        </div>
                    </div>
                    <img src="<?= $related_recipe_image ?>" alt="">
                </div>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p>Không có sự kiện liên quan.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include('templates/section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>