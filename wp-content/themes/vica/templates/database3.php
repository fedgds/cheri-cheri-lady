<?php 
/* Template Name: database3 */
$id = get_the_ID();
$images = get_field('list_image', $id);

$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner-database.php') ?>
    <section class="section-library-database">
        <div class="container-database">
            <h2 class="title">Thư viện </h2>
            <div class="library-image">
                <?php foreach($images as $item){ ?>
                <img src="<?= $item['image'] ?>" alt="">
                <?php } ?>
            </div>
        </div>
    </section>

    <?php include('section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>