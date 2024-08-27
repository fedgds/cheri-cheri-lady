<?php 
// Lay thong tin danh muc hien tai
$current_category = get_queried_object();

// Query tim san pham tu $current_category 
$query = new WP_Query(
    array(
        'post_type' => 'khoa_hoc',
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'danh_muc_khoa_hoc',
                'field'    => 'slug',
                'terms'    => $current_category->slug,
            ),
        ),
    )
);
get_header(); ?>
<main>
    <?php include('templates/section/section-banner-training.php') ?>
    <section class="section-list-training">
        <div class="container-training">
            <div class="left">
                <form action="">
                    <label for="search-member">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <path d="M9.37528 1.26367C7.7188 1.26367 6.09953 1.75487 4.72222 2.67516C3.34492 3.59545 2.27144 4.90349 1.63753 6.43387C1.00363 7.96425 0.837771 9.64824 1.16093 11.2729C1.48409 12.8975 2.28176 14.3899 3.45306 15.5612C4.62437 16.7325 6.1167 17.5301 7.74134 17.8533C9.36599 18.1765 11.05 18.0106 12.5804 17.3767C14.1107 16.7428 15.4188 15.6693 16.3391 14.292C17.2593 12.9147 17.7505 11.2954 17.7505 9.63895C17.7504 7.41773 16.868 5.28753 15.2973 3.71689C13.7267 2.14625 11.5965 1.26381 9.37528 1.26367Z" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M15.6235 15.8877L21.4727 21.7369" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        </svg>
                    </label>
                    <input type="text" id="search-member" placeholder="Tìm kiếm khóa học...">
                    <button>Tìm kiếm</button>
                </form>
                <h2 class="course-name"><?= $current_category->name ?></h2>
                <div class="course">
                    <?php if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $course_id = get_the_ID();
                            $course = get_field('course', $course_id);
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            // $course_slug = get_post_field('post_name', $course_id);
                            $training_time = $course['training_time'];
                            $trainer_name = $course['trainer'][0]['name'];
                            $trainer_position = $course['trainer'][0]['position'];
                    ?>
                        <div class="child">
                            <a href="<?php the_permalink(); ?>"><img src="<?= esc_url($thumbnail_url) ?>" alt=""></a>
                            <div class="content">
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <div class="journey">
                                    <p>Lộ trình:</p>
                                    <b><?= $training_time ?></b>
                                </div>
                                <div class="trainer">
                                    <p>Người đào tạo:</p>
                                    <b><?= $trainer_position ?> <?= $trainer_name ?></b>
                                </div>
                            </div>
                        </div>
                        <?php  } ?>
                    <?php  } else{ ?>
                        <p class="hollow">Không có khóa học nào</p>
                    <?php } ?>
                </div>
            </div>
            <?php include('templates/section/training-right.php') ?>
        </div>
    </section>

    <?php include('templates/section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>