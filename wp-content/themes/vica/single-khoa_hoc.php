<?php
$query = new WP_Query(
    array(
        'post_type' => 'khoa_hoc',
        'post_status' => 'publish'
    )
);

$course_id = get_the_ID();
$course = get_field('course', $course_id);

$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');

// lay ra danh muc cua khoa hoc
$categories = wp_get_post_terms($course_id, 'danh_muc_khoa_hoc', array('fields' => 'ids'));

// Query cho khoa hoc cung danh muc
$related_courses_query = new WP_Query(array(
    'post_type' => 'khoa_hoc',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'danh_muc_khoa_hoc',
            'field' => 'id',
            'terms' => $categories,
        )
    ),
    'post__not_in' => array($course_id) // ngoai tru khoa hoc nay
));

get_header(); ?>
<main>
    <section class="section-detail-training">
        <div id="backdrop-subscribe" class="backdrop"></div>
        <form id="modal-form-subscribe" class="form-subscribe">
            <div class="content">
                <div class="close" id="colse-form-subscribe">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M13.9099 12.0002L20.2099 5.71019C20.3982 5.52188 20.504 5.26649 20.504 5.00019C20.504 4.73388 20.3982 4.47849 20.2099 4.29019C20.0216 4.10188 19.7662 3.99609 19.4999 3.99609C19.2336 3.99609 18.9782 4.10188 18.7899 4.29019L12.4999 10.5902L6.20994 4.29019C6.02164 4.10188 5.76624 3.99609 5.49994 3.99609C5.23364 3.99609 4.97824 4.10188 4.78994 4.29019C4.60164 4.47849 4.49585 4.73388 4.49585 5.00019C4.49585 5.26649 4.60164 5.52188 4.78994 5.71019L11.0899 12.0002L4.78994 18.2902C4.69621 18.3831 4.62182 18.4937 4.57105 18.6156C4.52028 18.7375 4.49414 18.8682 4.49414 19.0002C4.49414 19.1322 4.52028 19.2629 4.57105 19.3848C4.62182 19.5066 4.69621 19.6172 4.78994 19.7102C4.8829 19.8039 4.9935 19.8783 5.11536 19.9291C5.23722 19.9798 5.36793 20.006 5.49994 20.006C5.63195 20.006 5.76266 19.9798 5.88452 19.9291C6.00638 19.8783 6.11698 19.8039 6.20994 19.7102L12.4999 13.4102L18.7899 19.7102C18.8829 19.8039 18.9935 19.8783 19.1154 19.9291C19.2372 19.9798 19.3679 20.006 19.4999 20.006C19.632 20.006 19.7627 19.9798 19.8845 19.9291C20.0064 19.8783 20.117 19.8039 20.2099 19.7102C20.3037 19.6172 20.3781 19.5066 20.4288 19.3848C20.4796 19.2629 20.5057 19.1322 20.5057 19.0002C20.5057 18.8682 20.4796 18.7375 20.4288 18.6156C20.3781 18.4937 20.3037 18.3831 20.2099 18.2902L13.9099 12.0002Z"
                            fill="#00236E" />
                    </svg>
                </div>
                <h2 class="title">Đăng ký tham gia</h2>
                <p class="guide">Vui lòng điền thông tin của bạn vào các trường bên đưới để đăng ký tham gia khóa học
                </p>
                <div class="child-input">
                    <div class="section-input line-1">
                        <label for="name">Họ và tên</label>
                        <input type="text" id="name" placeholder="Nguyển Văn A">
                    </div>
                    <div class="line-2">
                        <div class="section-input">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" id="phone" placeholder="099999999">
                        </div>
                        <div class="section-input">
                            <label for="email">Email</label>
                            <input type="text" id="email" placeholder="abc123@gmail.com">
                        </div>
                    </div>
                    <div class="section-input line-3">
                        <label for="course">Khóa học tham gia</label>
                        <input type="text" id="course" value="Chương trình đào tạo nấu món Nhật Bản">
                    </div>
                </div>
                <div class="button">
                    <button>Đăng ký tham gia</button>
                </div>
            </div>
        </form>
        <div class="container-detail-training">
            <div class="bot">
                <a href="">
                    Home
                </a>
                <span>/</span>
                <a href="">
                    Đào tạo
                </a>
                <span>/</span>
                <a href="<?php the_permalink(); ?>" class="active">
                    <?php the_title(); ?>
                </a>
            </div>
            <div class="left">
                <div class="main-image">
                    <img src="<?= esc_url($thumbnail) ?>" alt="">
                </div>

                <h2><?php the_title(); ?></h2>

                <div class="infor">
                    <div class="child time">
                        <b>Thời gian đào tạo:</b>
                        <p> <?= $course['training_time'] ?></p>
                    </div>
                    <div class="child address">
                        <b>Địa điểm đào tạo:</b>
                        <p><?= $course['training_location'] ?></p>
                    </div>
                    <div class="child object">
                        <b>Đối tượng tham gia đào tạo:</b>
                        <p><?= $course['object'] ?></p>
                    </div>
                    <div class="trainer">
                        <b>Người đào tạo</b>
                        <div class="list-trainer">
                            <?php
                            $trainers = $course['trainer'];
                            foreach ($trainers as $trainer) {
                                ?>
                                <div class="child">
                                    <div class="image">
                                        <img src="<?= $trainer['avatar'] ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <p class="position"><?= $trainer['position'] ?></p>
                                        <p class="name"><?= $trainer['name'] ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <p><?= $course['description'] ?></p>
                </div>
                <div class="subscribe">
                    <div class="content">
                        <p class="text"><?= $course['subscribe']['text'] ?></p>
                        <button id="open-form-subscribe"><?= $course['subscribe']['text_button'] ?></button>
                    </div>
                </div>
                <h2 class="title-list">Khám phá thêm các khóa đào tạo khác</h2>
                <div class="course">

                    <?php if ($related_courses_query->have_posts()) : ?>
                        <?php while ($related_courses_query->have_posts()) : $related_courses_query->the_post(); ?>
                            <?php
                            $related_course_id = get_the_ID();
                            $related_course = get_field('course', $related_course_id);
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            // $related_course_slug = get_post_field('post_name', $related_course_id);
                            // $related_course_image = $related_course['image'];
                            $training_time = $related_course['training_time'];
                            $trainer_name = $related_course['trainer'][0]['name'];
                            $trainer_position = $related_course['trainer'][0]['position'];
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
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>Không có khóa học liên quan.</p>
                    <?php endif; ?>

                </div>
            </div>
            <?php include('templates/section/training-right.php') ?>
        </div>
    </section>

    <?php include('templates/section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>