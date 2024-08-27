<?php 
// Lay thong tin danh muc hien tai
$current_category = get_queried_object();

// Query tim san pham tu $current_category 
$query = new WP_Query(
    array(
        'post_type' => 'du_an',
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'danh_muc_du_an',
                'field'    => 'slug',
                'terms'    => $current_category->slug,
            ),
        ),
    )
);

$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('templates/section/section-banner-list-project.php') ?>
    <section class="section-list-project">
        <div class="container-project">
                <div class="type type-1">
                    <h2><?= $current_category->name ?></h2>
                    <div class="list-project">
                        <?php if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $project_id = get_the_ID();
                                $project = get_field('project', $project_id);
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $content = $project['content'];

                        ?>
                        <div class="child">
                            <a href="<?php the_permalink(); ?>"><img src="<?= esc_url($thumbnail_url) ?>" alt=""></a>
                            <div class="infor">
                                <h3><?php the_title(); ?></h3>
                                <div class="description">
                                    <?= $content ?>
                                </div>
                                <a href="<?php the_permalink(); ?>">
                                    <span>Xem chi tiết</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.09327 4.19247C7.35535 3.96783 7.74991 3.99818 7.97455 4.26026L12.9745 10.0936C13.1752 10.3276 13.1752 10.673 12.9745 10.9071L7.97455 16.7404C7.74991 17.0025 7.35535 17.0328 7.09327 16.8082C6.83119 16.5836 6.80084 16.189 7.02548 15.9269L11.6768 10.5003L7.02548 5.07375C6.80084 4.81167 6.83119 4.41711 7.09327 4.19247Z" fill="#ED1E29"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php } } else{ ?>
                        <p class="hollow">Không có dự án nào</p>
                    <?php } ?>
                    </div>
                </div>
        </div>
    </section>

    <?php include('templates/section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>