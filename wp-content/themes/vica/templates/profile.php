<?php include('header.php') ?>
<main>
    <section class="profile-page">
        <div class="background"></div>
        <div class="container-profile">
            <div class="title">
                <h2>Hồ sơ cá nhân</h2>
            </div>
            <div class="content">
                <div class="left-profile">
                    <ul>
                        <li id="tab-overview" class="active">Tổng quan</li>
                        <li id="tab-profile">Chỉnh sửa hồ sơ</li>
                        <li id="tab-password">Mật khẩu</li>
                        <li id="tab-experience">Kinh nghiệm làm việc</li>
                    </ul>
                </div>
                <div class="right-profile">
                    <div id="overview" class="child active">
                        <div class="title">
                            <h3>Thông tin tổng quan</h3>
                        </div>
                        <form action="">
                            <div class="input">
                                <div class="name">
                                    <label for="overview-name">Tên đăng nhập:</label>
                                    <input type="text" id="overview-name" value="Hải Trần">
                                </div>
                                <div class="email">
                                    <label for="overview-email">Email:</label>
                                    <input type="email" id="overview-email" value="haitran@gmail.com">
                                </div>
                            </div>
                            <div class="button">
                                <button>Lưu thay đổi</button>    
                            </div>
                        </form>
                    </div>
                    <div id="profile" class="child">
                        <form action="">
                            <div class="form-left">
                                <label for="avatar-file"><img src="<?= $url ?>/dist/images/avatar.png" alt=""></label>
                                <input type="file" id="avatar-file">
                            </div>
                            <div class="form-right">
                                <div class="title">
                                    <h3>Thông tin cá nhân</h3>
                                </div>
                                <div class="input">
                                    <div class="name">
                                        <label for="profile-name">Họ và tên <span>*</span></label>
                                        <input type="text" id="profile-name" placeholder="Hải Trần">
                                    </div>
                                    <div class="nick-name">
                                        <label for="profile-nick-name">Họ và tên <span>*</span></label>
                                        <input type="text" id="profile-nick-name" placeholder="Hải Trần">
                                    </div>
                                    <div class="birthday">
                                        <label for="profile-birthday">Ngày sinh</label>
                                        <input type="date" id="profile-birthday">
                                    </div>
                                    <div class="sex">
                                        <label for="profile-sex">Giới tính</label>
                                        <select id="profile-sex">
                                            <option value="Nam" selected>Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="button">
                                    <button>Lưu thay đổi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="password" class="child">
                        <form action="">
                            <div class="input">
                                <div class="old-password">
                                    <label for="old-password">Mật khẩu cũ</label>
                                    <input type="password" id="old-password" value="********">
                                </div>
                                <div class="new-password">
                                    <label for="new-password">Mật khẩu mới</label>
                                    <input type="password" id="new-password" value="********">
                                </div>
                                <div class="confirm-password">
                                    <label for="confirm-password">Xác nhận</label>
                                    <input type="password" id="confirm-password" value="********">
                                </div>
                            </div>
                            <div class="button">
                                <button>Lưu thay đổi</button>
                            </div>
                        </form>
                    </div>
                    <div id="experience" class="child">
                        <div class="list-experience">
                            <div class="child">
                                <div class="job-and-date">
                                    <h4>Hiệp hội nghề đầu bếp Việt Nam</h4>
                                    <p>11/2023 - Hiện tại</p>
                                </div>
                                <div class="position">
                                    <h5>Vị trí:</h5>
                                    <p>Phụ bếp</p>
                                </div>
                                <nav class="description">
                                    <ul>
                                        <li>Thực hiện các món ăn truyền thống </li>
                                        <li>Làm các món ăn thượng lưu ở nhà hàng</li>
                                        <li>Sáng tạo các món ăn mới</li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="child">
                                <div class="job-and-date">
                                    <h4>Nhà hàng bếp Tây Bắc - An Việt</h4>
                                    <p>10/2021 - 6/2021</p>
                                </div>
                                <div class="position">
                                    <h5>Vị trí:</h5>
                                    <p>Nhân viên bếp</p>
                                </div>
                                <nav class="description">
                                    <ul>
                                        <li>Kiểm tra bảo quản thức ăn nhà hàng mỗi ngày</li>
                                        <li>Dọn dẹp chuẩn bị khu vực nấu</li>
                                        <li>Chuẩn bị các món ăn theo chỉ định và phân công của bếp trường</li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="child">
                                <div class="job-and-date">
                                    <h4>Hiệp hội nghề đầu bếp Việt Nam</h4>
                                    <p>10/2021 - 6/2023</p>
                                </div>
                                <div class="position">
                                    <h5>Vị trí:</h5>
                                    <p>Nhân viên bếp</p>
                                </div>
                                <nav class="description">
                                    <ul>
                                        <li>Kiểm tra bảo quản thức ăn nhà hàng mỗi ngày</li>
                                        <li>Dọn dẹp chuẩn bị khu vực nấu</li>
                                        <li>Sáng tạo các món ăn mới</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div id="tab-add-experience">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                                <path d="M14 0.195312C10.3009 0.240196 6.76597 1.7296 4.15013 4.34544C1.53429 6.96129 0.0448832 10.4962 0 14.1953C0.0448832 17.8944 1.53429 21.4293 4.15013 24.0452C6.76597 26.661 10.3009 28.1504 14 28.1953C17.6991 28.1504 21.234 26.661 23.8499 24.0452C26.4657 21.4293 27.9551 17.8944 28 14.1953C27.9551 10.4962 26.4657 6.96129 23.8499 4.34544C21.234 1.7296 17.6991 0.240196 14 0.195312ZM22 15.1953H15V22.1953H13V15.1953H6V13.1953H13V6.19531H15V13.1953H22V15.1953Z" fill="#ED1E29"/>
                            </svg>
                            <p>Thêm kinh nghiệm</p>
                        </div>
                    </div>
                    <div id="experience-form" class="child">
                        <h3>Thông tin kinh nghiệm</h3>
                        <form action="">
                            <div class="workplace">
                                <label for="">Nơi làm việc</label>
                                <input type="text" value="Nhà hàng truyền thống An Quốc">
                            </div>
                            <div class="position-and-date">
                                <div class="position">
                                    <label for="">Vị trí</label>
                                    <input type="text" value="Bếp trưởng">
                                </div>
                                <div class="date">
                                    <label for="">Thời gian làm việc</label>
                                    <div class="group-date">
                                        <input type="date" class="start-date">
                                        <input type="date" class="end-date">
                                    </div>
                                </div>
                            </div>
                            <div class="mission">
                                <label for="">Nhiệm vụ</label>
                                <textarea name="" id="" cols="30" rows="10">Kiểm tra bảo quản thức ăn nhà hàng mỗi ngày</textarea>
                            </div>
                            <button>Thêm kinh nghiệm làm việc</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
<?php include('footer.php') ?>