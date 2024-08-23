<?php 
/* Template Name: about5 */
$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner-about.php') ?>
    <section class="section-table-about">
        <div class="container-about">
            <div class="left">
                <div class="title">
                    <h2>Ban Chuyên môn Hiệp hội</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Chứng chỉ hành nghề Môi giới</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Phan Anh Tuấn</td>
                            <td>Chủ tịch Hiệp hội</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ngô Văn Doanh</td>
                            <td>Chủ tịch Hiệp hội</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Nguyễn Thị Thu Hà</td>
                            <td>Chủ tịch Hiệp hội</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Phan Anh Tuấn</td>
                            <td>Chủ tịch Hiệp hội</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ngô Văn Doanh</td>
                            <td>Chủ tịch Hiệp hội</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Nguyễn Thị Thu Hà</td>
                            <td>Chủ tịch Hiệp hội</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php include('section/about-right.php') ?>
        </div>
    </section>

    <?php include('section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>