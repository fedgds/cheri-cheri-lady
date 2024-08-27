<?php
$url = get_template_directory_uri();
?>
<div class="right">
    <div class="categoty-content">
        <div class="title">
            <h3>DANH MỤC NỘI DUNG</h3>
        </div>
        <nav>
            <ul>
                <li class="active"><a href="<?= home_url() ?>/danh-sach-hoi-vien">Danh sách hội viên</a></li>
                <li><a href="<?= home_url() ?>/quyen-va-nghia-vu-hoi-vien">Quyền & nghĩa vụ Hội viên</a></li>
                <li><a href="<?= home_url() ?>/dang-ky-hoi-vien">Đăng ký hội viên</a></li>
            </ul>
        </nav>
    </div>
    <?php include('popular-news.php') ?>
</div>