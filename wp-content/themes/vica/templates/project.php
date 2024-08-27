<?php 
/* Template Name: project */
$args = array(
    'taxonomy' => 'danh_muc_du_an',
    'orderby' => 'name',
    'hide_empty' => false, 
);

$categories = get_terms($args);

$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner-list-project.php') ?>
    <section class="section-list-project">
        <div class="container-project">
            <?php foreach ($categories as $category) { ?>
                <div class="type type-1">
                    <h2><?= $category->name ?></h2>
                    <div class="list-project">
                        <?php 
                            $project_args = array(
                                'post_type' => 'du_an', 
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'danh_muc_du_an',
                                        'field'    => 'slug',
                                        'terms'    => $category->slug,
                                    ),
                                ),
                            );
                            $projects = new WP_Query($project_args);

                            if ($projects->have_posts()) : 
                                while ($projects->have_posts()) : $projects->the_post(); 
                                    $project_id = get_the_ID();
                                    $project = get_field('project', $project_id);
                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $content = $project['content'];
                                    $project_count = count($project);

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
                        <?php endwhile; 
                            wp_reset_postdata();
                            else : ?>
                            <p>Không có dự án nào trong danh mục này.</p>
                        <?php endif; ?>
                    </div>
                    <?php if ($project_count >= 1) : ?>
                        <div class="view-more">
                            <a href="<?= home_url() ?>/danh_muc_du_an/<?= $category->slug ?>">Xem thêm</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php include('section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>