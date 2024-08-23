<?php include ('header.php') ?>
<main>
    <?php include ('section/section-banner-recruitment.php') ?>
    <section class="section-list-recruitment">
        <div class="container-recruitment">
            <div class="left">
                <div class="group-search">
                    <div class="item item-search">
                        <label for="keyword" class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                                <path d="M7.77915 1.71387C6.43836 1.71387 5.12768 2.11146 4.01286 2.85636C2.89803 3.60126 2.02913 4.66002 1.51603 5.89874C1.00294 7.13747 0.868688 8.50053 1.13026 9.81556C1.39184 11.1306 2.03749 12.3385 2.98557 13.2866C3.93365 14.2347 5.14158 14.8803 6.4566 15.1419C7.77163 15.4035 9.13469 15.2692 10.3734 14.7561C11.6121 14.243 12.6709 13.3741 13.4158 12.2593C14.1607 11.1445 14.5583 9.8338 14.5583 8.49301C14.5582 6.6951 13.8439 4.97087 12.5726 3.69956C11.3013 2.42825 9.57705 1.71398 7.77915 1.71387Z" stroke="#4D4D4D" stroke-width="1.5" stroke-miterlimit="10"/>
                                <path d="M12.8359 13.5508L17.5704 18.2853" stroke="#4D4D4D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                            </svg>
                        </label>
                        <div class="custom-input-wrapper">
                            <input type="text" id="keyword" placeholder="Vị trí ứng tuyển...">
                        </div>
                    </div>
                    <div class="item search-address">
                        <label for="address" class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18" fill="none">
                                <path d="M6.83493 16.6864L6.83769 16.6888C7.31542 17.1037 8.0295 17.1037 8.50723 16.6888L8.50724 16.6889L8.51037 16.6861C10.39 15.026 11.8219 13.4584 12.7868 11.9815C13.7509 10.5057 14.267 9.09213 14.267 7.75079C14.267 3.66314 11.1309 1 7.66865 1C4.20643 1 1.07031 3.66314 1.07031 7.75079C1.07031 9.09217 1.58639 10.5058 2.55161 11.9817C3.51753 13.4587 4.95142 15.0263 6.83493 16.6864ZM7.66865 8.62292C7.10627 8.62292 6.64406 8.16071 6.64406 7.59834C6.64406 7.03596 7.10627 6.57375 7.66865 6.57375C8.23103 6.57375 8.69323 7.03596 8.69323 7.59834C8.69323 8.16071 8.23103 8.62292 7.66865 8.62292Z" stroke="#4D4D4D"/>
                            </svg>
                        </label>
                        <div class="custom-select-wrapper">
                            <select id="address" class="custom-select">
                                <option>Địa chỉ làm việc</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="item search-time">
                        <label for="working-time" class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <path d="M10.6816 21C16.2045 21 20.6816 16.5228 20.6816 11C20.6816 5.47715 16.2045 1 10.6816 1C5.15879 1 0.681641 5.47715 0.681641 11C0.681641 16.5228 5.15879 21 10.6816 21Z" stroke="#4D4D4D"/>
                                <path d="M15.9758 11.0005H10.9758C10.8978 11.0005 10.8229 10.9695 10.7678 10.9143C10.7126 10.8592 10.6816 10.7843 10.6816 10.7063V6.88281" stroke="#4D4D4D" stroke-linecap="round"/>
                            </svg>
                        </label>
                        <div class="custom-select-wrapper">
                            <select id="working-time" class="custom-select">
                                <option>Thời gian làm việc</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-button">
                        <button>Tìm kiếm</button>
                    </div>
                </div>
                <div class="list-job">
                    <div class="child">
                        <div class="image">
                            <a href="http://localhost/project-vica/detail-recruitment.php"><img src="<?= $url ?>/dist/images/job-1.png" alt=""></a>
                        </div>
                        <div class="infor">
                            <h3>Nhân Viên Kỹ Thuật Bảo Hành Sửa Chữa Điện Tử </h3>
                            <div class="deadline-and-address">
                                <p class="deadline">Hạn ứng tuyển: <span>30/12/2023</span></p>
                                <p class="address">Địa điểm: <span>Hà nội</span></p>
                            </div>
                            <h4>Yêu cầu:</h4>
                            <nav class="required">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>6 năm kinh nghiệm vị trí quản lý</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Thông thạo Tiếng Anh</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Có bằng cứ nhân kinh tế</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Từng làm ở một vị trí tương đương</p>
                                    </li>
                                </ul>
                            </nav>
                            <a class="apply" href="http://localhost/project-vica/detail-recruitment.php">Ứng tuyển ngay</a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a href="http://localhost/project-vica/detail-recruitment.php"><img src="<?= $url ?>/dist/images/job-2.png" alt=""></a>
                        </div>
                        <div class="infor">
                            <h3>Nhân Viên Kỹ Thuật Bảo Hành Sửa Chữa Điện Tử </h3>
                            <div class="deadline-and-address">
                                <p class="deadline">Hạn ứng tuyển: <span>30/12/2023</span></p>
                                <p class="address">Địa điểm: <span>Hà nội</span></p>
                            </div>
                            <h4>Yêu cầu:</h4>
                            <nav class="required">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>6 năm kinh nghiệm vị trí quản lý</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Thông thạo Tiếng Anh</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Có bằng cứ nhân kinh tế</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Từng làm ở một vị trí tương đương</p>
                                    </li>
                                </ul>
                            </nav>
                            <a class="apply" href="http://localhost/project-vica/detail-recruitment.php">Ứng tuyển ngay</a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a href="http://localhost/project-vica/detail-recruitment.php"><img src="<?= $url ?>/dist/images/job-3.png" alt=""></a>
                        </div>
                        <div class="infor">
                            <h3>Nhân Viên Kỹ Thuật Bảo Hành Sửa Chữa Điện Tử </h3>
                            <div class="deadline-and-address">
                                <p class="deadline">Hạn ứng tuyển: <span>30/12/2023</span></p>
                                <p class="address">Địa điểm: <span>Hà nội</span></p>
                            </div>
                            <h4>Yêu cầu:</h4>
                            <nav class="required">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>6 năm kinh nghiệm vị trí quản lý</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Thông thạo Tiếng Anh</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Có bằng cứ nhân kinh tế</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Từng làm ở một vị trí tương đương</p>
                                    </li>
                                </ul>
                            </nav>
                            <a class="apply" href="http://localhost/project-vica/detail-recruitment.php">Ứng tuyển ngay</a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a href="http://localhost/project-vica/detail-recruitment.php"><img src="<?= $url ?>/dist/images/job-4.png" alt=""></a>
                        </div>
                        <div class="infor">
                            <h3>Nhân Viên Kỹ Thuật Bảo Hành Sửa Chữa Điện Tử </h3>
                            <div class="deadline-and-address">
                                <p class="deadline">Hạn ứng tuyển: <span>30/12/2023</span></p>
                                <p class="address">Địa điểm: <span>Hà nội</span></p>
                            </div>
                            <h4>Yêu cầu:</h4>
                            <nav class="required">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>6 năm kinh nghiệm vị trí quản lý</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Thông thạo Tiếng Anh</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Có bằng cứ nhân kinh tế</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Từng làm ở một vị trí tương đương</p>
                                    </li>
                                </ul>
                            </nav>
                            <a class="apply" href="http://localhost/project-vica/detail-recruitment.php">Ứng tuyển ngay</a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a href="http://localhost/project-vica/detail-recruitment.php"><img src="<?= $url ?>/dist/images/job-5.png" alt=""></a>
                        </div>
                        <div class="infor">
                            <h3>Nhân Viên Kỹ Thuật Bảo Hành Sửa Chữa Điện Tử </h3>
                            <div class="deadline-and-address">
                                <p class="deadline">Hạn ứng tuyển: <span>30/12/2023</span></p>
                                <p class="address">Địa điểm: <span>Hà nội</span></p>
                            </div>
                            <h4>Yêu cầu:</h4>
                            <nav class="required">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>6 năm kinh nghiệm vị trí quản lý</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Thông thạo Tiếng Anh</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Có bằng cứ nhân kinh tế</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Từng làm ở một vị trí tương đương</p>
                                    </li>
                                </ul>
                            </nav>
                            <a class="apply" href="http://localhost/project-vica/detail-recruitment.php">Ứng tuyển ngay</a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a href="http://localhost/project-vica/detail-recruitment.php"><img src="<?= $url ?>/dist/images/job-6.png" alt=""></a>
                        </div>
                        <div class="infor">
                            <h3>Nhân Viên Kỹ Thuật Bảo Hành Sửa Chữa Điện Tử </h3>
                            <div class="deadline-and-address">
                                <p class="deadline">Hạn ứng tuyển: <span>30/12/2023</span></p>
                                <p class="address">Địa điểm: <span>Hà nội</span></p>
                            </div>
                            <h4>Yêu cầu:</h4>
                            <nav class="required">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>6 năm kinh nghiệm vị trí quản lý</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Thông thạo Tiếng Anh</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Có bằng cứ nhân kinh tế</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Từng làm ở một vị trí tương đương</p>
                                    </li>
                                </ul>
                            </nav>
                            <a class="apply" href="http://localhost/project-vica/detail-recruitment.php">Ứng tuyển ngay</a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a href="http://localhost/project-vica/detail-recruitment.php"><img src="<?= $url ?>/dist/images/job-7.png" alt=""></a>
                        </div>
                        <div class="infor">
                            <h3>Nhân Viên Kỹ Thuật Bảo Hành Sửa Chữa Điện Tử </h3>
                            <div class="deadline-and-address">
                                <p class="deadline">Hạn ứng tuyển: <span>30/12/2023</span></p>
                                <p class="address">Địa điểm: <span>Hà nội</span></p>
                            </div>
                            <h4>Yêu cầu:</h4>
                            <nav class="required">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>6 năm kinh nghiệm vị trí quản lý</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Thông thạo Tiếng Anh</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Có bằng cứ nhân kinh tế</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                <path d="M11.3471 8.38092L7.88581 11.8422C7.12747 12.6005 5.88164 12.6005 5.11789 11.8422L1.65664 8.38092C0.898307 7.62259 0.898307 6.37676 1.65664 5.61301L5.11789 2.15176C5.87622 1.39342 7.12206 1.39342 7.88581 2.15176L11.3471 5.61301C12.1054 6.37676 12.1054 7.62259 11.3471 8.38092Z" fill="#453F3F"/>
                                            </svg>
                                        </div>
                                        <p>Từng làm ở một vị trí tương đương</p>
                                    </li>
                                </ul>
                            </nav>
                            <a class="apply" href="http://localhost/project-vica/detail-recruitment.php">Ứng tuyển ngay</a>
                        </div>
                    </div>
                </div>
                <nav class="pagination">
                    <ul>
                        <li class="prev">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M14 7L9 12L14 17" stroke="#303030" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li><a href="">1</a></li>
                        <li class="active"><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <rect x="0.5" y="0.5" width="35" height="35" rx="3.5"/>
                                    <circle cx="11" cy="18" r="2" fill="#303030"/>
                                    <circle cx="18" cy="18" r="2" fill="#303030"/>
                                    <circle cx="25" cy="18" r="2" fill="#303030"/>
                                </svg>
                            </a>
                        </li>
                        <li class="next">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M10 7L15 12L10 17" stroke="#303030" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <?php include ('section/recruitment-right.php') ?>
        </div>
    </section>

    <?php include ('section/section-8-homepage.php') ?>
</main>
<?php include ('footer.php') ?>