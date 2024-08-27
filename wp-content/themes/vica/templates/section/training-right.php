<?php $args = array(
    'taxonomy' => 'danh_muc_khoa_hoc',
    'orderby' => 'name',
    'hide_empty' => false, 
);

$categories = get_terms($args); 
$url = get_template_directory_uri();
?>
<div class="right">
    <div class="categoty-content">
        <div class="title">
            <h3>DANH MỤC NỘI DUNG</h3>
        </div>
        <nav>
            <ul>
                <?php foreach ($categories as $category) { ?>
                    <li><a href="<?= home_url() ?>/danh_muc_khoa_hoc/<?= $category->slug ?>"><?= $category->name ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <?php include('popular-news.php') ?>
</div>