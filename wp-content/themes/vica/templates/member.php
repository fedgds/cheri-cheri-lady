<?php 
/* Template Name: member */
$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner-member.php') ?>
    <section class="section-list-member">
        <div class="container-member">
            <div class="left">
                <form action="">
                    <label for="search-member">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <path d="M9.37528 1.26367C7.7188 1.26367 6.09953 1.75487 4.72222 2.67516C3.34492 3.59545 2.27144 4.90349 1.63753 6.43387C1.00363 7.96425 0.837771 9.64824 1.16093 11.2729C1.48409 12.8975 2.28176 14.3899 3.45306 15.5612C4.62437 16.7325 6.1167 17.5301 7.74134 17.8533C9.36599 18.1765 11.05 18.0106 12.5804 17.3767C14.1107 16.7428 15.4188 15.6693 16.3391 14.292C17.2593 12.9147 17.7505 11.2954 17.7505 9.63895C17.7504 7.41773 16.868 5.28753 15.2973 3.71689C13.7267 2.14625 11.5965 1.26381 9.37528 1.26367Z" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M15.6235 15.8877L21.4727 21.7369" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        </svg>
                    </label>
                    <input type="text" id="search-member" placeholder="Tìm kiếm hội viên...">
                    <button>Tìm kiếm</button>
                </form>
                <div class="business-member">
                    <h2>Hội viên Doanh nghiệp</h2>
                    <div class="list-member">
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-1.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-2.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-3.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-4.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-5.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-6.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-7.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-8.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/business-member-9.png" alt="">
                            <div class="name">
                                <p>Electrolux Food Foundation</p>
                            </div>
                        </div>
                    </div>
                    <div class="link">
                        <a href="http://localhost/project-vica/business-member.php">Xem thêm</a>
                    </div>
                </div>
                <div class="individual-member">
                    <h2>Hội viên Cá nhân</h2>
                    <div class="list-member">
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/individual-member.png" alt="">
                            <div class="name">
                                <p>Annette Black</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/individual-member.png" alt="">
                            <div class="name">
                                <p>Guy Hawkins</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/individual-member.png" alt="">
                            <div class="name">
                                <p>Leslie Alexander</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/individual-member.png" alt="">
                            <div class="name">
                                <p>Courtney Henry</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/individual-member.png" alt="">
                            <div class="name">
                                <p>Brooklyn Simmons</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/individual-member.png" alt="">
                            <div class="name">
                                <p>Wade Warren</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/individual-member.png" alt="">
                            <div class="name">
                                <p>Annette Black</p>
                            </div>
                        </div>
                        <div class="child">
                            <img src="<?= $url ?>/dist/images/individual-member.png" alt="">
                            <div class="name">
                                <p>Annette Black</p>
                            </div>
                        </div>
                    </div>
                    <div class="link">
                        <a href="http://localhost/project-vica/individual-member.php">Xem thêm</a>
                    </div>
                </div>
            </div>
            <?php include('section/member-right.php') ?>
        </div>
    </section>

    <?php include('section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>