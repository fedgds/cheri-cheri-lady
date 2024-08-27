<?php 
/* Template Name: event */
$args = array(
    'taxonomy' => 'danh_muc_su_kien',
    'orderby' => 'name',
    'hide_empty' => false, 
);

$categories = get_terms($args);

$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner-list-event.php') ?>
    <section class="section-list-event">
        <div class="container-event">
            <?php foreach ($categories as $category) { ?>
                <div class="type type-1">
                    <h2><?= $category->name ?></h2>
                    <div class="list-event">
                        <?php 
                            $event_args = array(
                                'post_type' => 'su_kien', 
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'danh_muc_su_kien',
                                        'field'    => 'slug',
                                        'terms'    => $category->slug,
                                    ),
                                ),
                            );
                            $events = new WP_Query($event_args);

                            if ($events->have_posts()) : 
                                while ($events->have_posts()) : $events->the_post(); 
                                    $event_id = get_the_ID();
                                    $event = get_field('event', $event_id);
                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $date = $event['date'];
                                    $address = $event['address'];
                                    $formal = $event['formal'];
                                    $content = $event['content'];
                                    $event_count = count($event);

                        ?>
                            <div class="even-child">
                                <img src="<?= esc_url($thumbnail_url) ?>" alt="">
                                <div class="content">
                                    <div class="title">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <div class="infor">
                                        <div class="date-and-address">
                                            <div class="date">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M14.166 11.6668C14.6263 11.6668 14.9993 11.2937 14.9993 10.8335C14.9993 10.3733 14.6263 10.0002 14.166 10.0002C13.7058 10.0002 13.3327 10.3733 13.3327 10.8335C13.3327 11.2937 13.7058 11.6668 14.166 11.6668Z" fill="#303030"/>
                                                        <path d="M14.166 15.0002C14.6263 15.0002 14.9993 14.6271 14.9993 14.1668C14.9993 13.7066 14.6263 13.3335 14.166 13.3335C13.7058 13.3335 13.3327 13.7066 13.3327 14.1668C13.3327 14.6271 13.7058 15.0002 14.166 15.0002Z" fill="#303030"/>
                                                        <path d="M10.8327 10.8335C10.8327 11.2937 10.4596 11.6668 9.99935 11.6668C9.53911 11.6668 9.16602 11.2937 9.16602 10.8335C9.16602 10.3733 9.53911 10.0002 9.99935 10.0002C10.4596 10.0002 10.8327 10.3733 10.8327 10.8335Z" fill="#303030"/>
                                                        <path d="M10.8327 14.1668C10.8327 14.6271 10.4596 15.0002 9.99935 15.0002C9.53911 15.0002 9.16602 14.6271 9.16602 14.1668C9.16602 13.7066 9.53911 13.3335 9.99935 13.3335C10.4596 13.3335 10.8327 13.7066 10.8327 14.1668Z" fill="#303030"/>
                                                        <path d="M5.83268 11.6668C6.29292 11.6668 6.66602 11.2937 6.66602 10.8335C6.66602 10.3733 6.29292 10.0002 5.83268 10.0002C5.37245 10.0002 4.99935 10.3733 4.99935 10.8335C4.99935 11.2937 5.37245 11.6668 5.83268 11.6668Z" fill="#303030"/>
                                                        <path d="M5.83268 15.0002C6.29292 15.0002 6.66602 14.6271 6.66602 14.1668C6.66602 13.7066 6.29292 13.3335 5.83268 13.3335C5.37245 13.3335 4.99935 13.7066 4.99935 14.1668C4.99935 14.6271 5.37245 15.0002 5.83268 15.0002Z" fill="#303030"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83268 1.4585C6.17786 1.4585 6.45768 1.73832 6.45768 2.0835V2.7191C7.00935 2.70848 7.61712 2.70849 8.28556 2.7085H11.713C12.3815 2.70849 12.9893 2.70848 13.541 2.7191V2.0835C13.541 1.73832 13.8208 1.4585 14.166 1.4585C14.5112 1.4585 14.791 1.73832 14.791 2.0835V2.77274C15.0076 2.78925 15.2128 2.81001 15.4069 2.83611C16.3839 2.96746 17.1747 3.24423 17.7983 3.86787C18.4219 4.4915 18.6987 5.28229 18.8301 6.25931C18.9577 7.20865 18.9577 8.42166 18.9577 9.95312V11.7138C18.9577 13.2453 18.9577 14.4583 18.8301 15.4077C18.6987 16.3847 18.4219 17.1755 17.7983 17.7991C17.1747 18.4228 16.3839 18.6995 15.4069 18.8309C14.4575 18.9585 13.2445 18.9585 11.7131 18.9585H8.28567C6.75422 18.9585 5.54117 18.9585 4.59183 18.8309C3.61481 18.6995 2.82402 18.4228 2.20039 17.7991C1.57675 17.1755 1.29998 16.3847 1.16863 15.4077C1.04099 14.4583 1.041 13.2453 1.04102 11.7138V9.95315C1.041 8.42168 1.04099 7.20865 1.16863 6.25931C1.29998 5.28229 1.57675 4.4915 2.20039 3.86787C2.82402 3.24423 3.61481 2.96746 4.59183 2.83611C4.78594 2.81001 4.99106 2.78925 5.20768 2.77274V2.0835C5.20768 1.73832 5.48751 1.4585 5.83268 1.4585ZM4.75839 4.07496C3.91998 4.18768 3.43694 4.39907 3.08427 4.75175C2.73159 5.10442 2.5202 5.58746 2.40748 6.42587C2.38839 6.56786 2.37243 6.71734 2.35909 6.87516H17.6396C17.6263 6.71734 17.6103 6.56786 17.5912 6.42587C17.4785 5.58746 17.2671 5.10442 16.9144 4.75175C16.5618 4.39907 16.0787 4.18768 15.2403 4.07496C14.3839 3.95982 13.255 3.9585 11.666 3.9585H8.33268C6.74367 3.9585 5.61478 3.95982 4.75839 4.07496ZM2.29102 10.0002C2.29102 9.28848 2.29128 8.6691 2.30192 8.12516H17.6968C17.7074 8.6691 17.7077 9.28848 17.7077 10.0002V11.6668C17.7077 13.2558 17.7064 14.3847 17.5912 15.2411C17.4785 16.0795 17.2671 16.5626 16.9144 16.9152C16.5618 17.2679 16.0787 17.4793 15.2403 17.592C14.3839 17.7072 13.255 17.7085 11.666 17.7085H8.33268C6.74367 17.7085 5.61478 17.7072 4.75839 17.592C3.91998 17.4793 3.43694 17.2679 3.08427 16.9152C2.73159 16.5626 2.5202 16.0795 2.40748 15.2411C2.29234 14.3847 2.29102 13.2558 2.29102 11.6668V10.0002Z" fill="#303030"/>
                                                    </svg>
                                                </div>
                                                <p><?= $date ?></p>
                                            </div>
                                            <div class="address">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.70898 8.45258C2.70898 4.37006 5.96316 1.0415 10.0007 1.0415C14.0381 1.0415 17.2923 4.37006 17.2923 8.45258C17.2923 10.4235 16.7306 12.5398 15.7377 14.3681C14.746 16.1941 13.297 17.7809 11.4844 18.6281C10.5428 19.0682 9.45851 19.0682 8.51689 18.6281C6.70429 17.7809 5.25533 16.1941 4.26361 14.3681C3.27067 12.5398 2.70898 10.4235 2.70898 8.45258ZM10.0007 2.2915C6.67435 2.2915 3.95898 5.03941 3.95898 8.45258C3.95898 10.2001 4.46118 12.1127 5.36207 13.7715C6.26418 15.4325 7.539 16.7912 9.04619 17.4957C9.65236 17.779 10.3489 17.779 10.9551 17.4957C12.4623 16.7912 13.7371 15.4325 14.6392 13.7715C15.5401 12.1127 16.0423 10.2001 16.0423 8.45258C16.0423 5.03941 13.327 2.2915 10.0007 2.2915ZM10.0007 6.45817C8.96512 6.45817 8.12565 7.29764 8.12565 8.33317C8.12565 9.3687 8.96512 10.2082 10.0007 10.2082C11.0362 10.2082 11.8757 9.3687 11.8757 8.33317C11.8757 7.29764 11.0362 6.45817 10.0007 6.45817ZM6.87565 8.33317C6.87565 6.60728 8.27476 5.20817 10.0007 5.20817C11.7265 5.20817 13.1257 6.60728 13.1257 8.33317C13.1257 10.0591 11.7265 11.4582 10.0007 11.4582C8.27476 11.4582 6.87565 10.0591 6.87565 8.33317Z" fill="#303030"/>
                                                    </svg>
                                                </div>
                                                <p><?= $address ?></p>
                                            </div>
                                        </div>
                                        <div class="organizer">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M9.64892 1.8457C9.88255 1.8457 10.1162 1.8457 10.3498 1.8457C10.3851 1.85506 10.42 1.86868 10.4558 1.87294C11.6473 2.02272 12.5988 2.58825 13.2878 3.56527C13.4665 3.81888 13.6172 3.91505 13.9478 3.89931C15.8109 3.81122 17.4944 5.05504 17.9948 6.85078C18.0642 7.09971 18.1016 7.35715 18.1536 7.61077C18.1536 7.84439 18.1536 8.078 18.1536 8.31162C18.1446 8.33587 18.131 8.3597 18.128 8.38438C17.9757 9.69671 17.334 10.7018 16.2233 11.409C16.1322 11.4669 16.113 11.5303 16.113 11.6278C16.1152 13.2622 16.1152 14.8967 16.1147 16.5311C16.1143 17.509 15.4675 18.1541 14.487 18.1541C11.4937 18.1545 8.50079 18.1545 5.50746 18.1541C4.53039 18.1541 3.88356 17.5056 3.88313 16.5273C3.88271 14.898 3.88185 13.269 3.88568 11.6397C3.88611 11.5265 3.85717 11.4601 3.75802 11.3984C2.28476 10.4776 1.57494 8.78821 1.94049 7.08439C2.36945 5.0844 4.27421 3.69846 6.30239 3.91463C6.42495 3.92782 6.48921 3.8942 6.55559 3.78782C7.082 2.94059 7.81778 2.35038 8.76888 2.04485C9.05358 1.95336 9.35487 1.91081 9.64892 1.8457ZM15.096 14.0737C15.096 14.0026 15.096 13.9456 15.096 13.8882C15.096 13.0495 15.1092 12.2103 15.09 11.372C15.0815 11.012 15.21 10.7971 15.5313 10.6295C16.6854 10.0269 17.3118 8.73587 17.0952 7.46439C16.8739 6.16482 15.8458 5.13845 14.5598 4.94228C14.3611 4.91207 14.1581 4.91249 13.9657 4.8993C14.0057 5.26185 14.0551 5.581 14.0721 5.90227C14.0878 6.20014 13.8576 6.42737 13.5746 6.43163C13.2908 6.43588 13.0708 6.21503 13.0563 5.91802C13.0487 5.75929 13.0427 5.59929 13.0189 5.44227C12.8235 4.1576 11.7992 3.12825 10.4987 2.90442C9.21912 2.684 7.90587 3.33633 7.2952 4.4959C7.06115 4.94058 6.9471 5.41461 6.93944 5.91716C6.93518 6.21503 6.70751 6.43546 6.4241 6.43163C6.14111 6.4278 5.92365 6.20099 5.92322 5.9027C5.9228 5.79674 5.92961 5.69036 5.94365 5.58568C5.97344 5.36696 6.01046 5.14908 6.04919 4.8993C5.86875 4.91036 5.70066 4.91292 5.53427 4.93206C4.05931 5.1027 2.87926 6.39376 2.86819 7.87545C2.85883 9.13544 3.42694 10.0703 4.53635 10.6673C4.78913 10.8035 4.90871 10.9852 4.90573 11.2754C4.89679 12.1512 4.90275 13.0273 4.90275 13.9031C4.90275 13.9588 4.90275 14.0146 4.90275 14.0733C8.30844 14.0737 11.6899 14.0737 15.096 14.0737ZM15.0943 15.1073C11.6882 15.1073 8.30035 15.1073 4.90233 15.1073C4.90233 15.5843 4.90233 16.0507 4.90233 16.5171C4.90233 16.9482 5.09042 17.135 5.52363 17.135C8.50674 17.135 11.4894 17.135 14.4725 17.135C14.5202 17.135 14.5683 17.1367 14.616 17.1337C14.8709 17.1162 15.087 16.9167 15.0917 16.6626C15.1011 16.1482 15.0943 15.6337 15.0943 15.1073Z" fill="#303030" stroke="#303030" stroke-width="0.2"/>
                                                </svg>
                                            </div>
                                            <p>VICA Việt Nam</p>
                                            <svg class="dot" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                                <circle cx="2.03916" cy="3.0001" r="2.03916" fill="#303030"/>
                                            </svg>
                                            <p><?= $formal ?></p>
                                        </div>
                                        <div class="description">
                                            <?= $content ?>
                                        </div>
                                    </div>
                                    <div class="view-detail">
                                        <a href="<?php the_permalink(); ?>">Xem chi tiết</a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.09327 4.19198C7.35535 3.96734 7.74991 3.99769 7.97455 4.25977L12.9745 10.0931C13.1752 10.3272 13.1752 10.6725 12.9745 10.9066L7.97455 16.7399C7.74991 17.002 7.35535 17.0324 7.09327 16.8077C6.83119 16.5831 6.80084 16.1885 7.02548 15.9264L11.6768 10.4998L7.02548 5.07326C6.80084 4.81118 6.83119 4.41662 7.09327 4.19198Z" fill="#ED1E29"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; 
                            wp_reset_postdata();
                            else : ?>
                            <p>Không có sự kiện nào trong danh mục này.</p>
                        <?php endif; ?>
                    </div>
                    <div class="view-more">
                        <a href="<?= home_url() ?>/danh_muc_su_kien/<?= $category->slug ?>">Xem thêm</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php include('section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>