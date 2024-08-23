<?php 
/* Template Name: member2 */
$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner-member.php') ?>
    <section class="section-subscribe-member">
        <div class="container-member">
            <div class="left">
                <div class="header">
                    <h2>Đăng kí hội viên</h2>
                    <p id="individual-member" class="active">Để trở thành hội viên của Hiệp hội nghề Việt Nam (VECOM), quý khách hãy điền đầy đủ thông tin.</p>
                    <p id="business-member">Để trở thành Hội viên của Hiệp hội Dạy nghề và Việc làm Đầu bếp Việt Nam, quý Doanh nghiệp hãy điền đầy đủ thông tin vào mẫu đăng ký dưới đây</p>
                </div>
                <nav class="choose-subscribe">
                    <ul>
                        <li id="tab-individual" class="active">Hội viên cá nhân</li>
                        <li id="tab-business">Hội viên doanh nghiệp</li>
                    </ul>
                </nav>
                <form action="" class="form-subscribe">
                    <div id="form-individual-member" class="child active">
                        <div class="line line-1">
                            <div class="form-group">
                                <label for="fullName">Họ và tên<span>*</span></label>
                                <input type="text" id="fullName" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <label for="cccd">Số căn cước công dân<span>*</span></label>
                                <input type="text" id="cccd" placeholder="Số căn cước công dân">
                            </div>
                        </div>
                        <div class="line line-2">
                            <div class="form-group">
                                <label for="dateBirth">Ngày tháng sinh<span>*</span></label>
                                <input type="text" id="dateBirth" placeholder="20/08">
                            </div>
                            <div class="form-group">
                                <label for="yearBirth">Năm sinh<span>*</span></label>
                                <select id="yearBirth">
                                    <option value="">1990</option>
                                    <option value="">2000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sex">Giới tính<span>*</span></label>
                                <select id="sex">
                                    <option value="">Nam</option>
                                    <option value="">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="line line-3">
                            <div class="form-group">
                                <label for="degree">Trình độ văn hóa<span>*</span></label>
                                <input type="text" id="degree" placeholder="Trình độ văn hóa">
                            </div>
                            <div class="form-group">
                                <label for="working-time">Thời gian làm việc<span>*</span></label>
                                <select id="working-time">
                                    <option value="">Chọn thời gian làm việc</option>
                                    <option value="">Nam</option>
                                    <option value="">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="line line-4">
                            <div class="form-group">
                                <label for="degree">Chứng chỉ đã đạt được nếu có<span>*</span></label>
                                <input type="text" id="degree" placeholder="Chứng chỉ abd">
                            </div>
                        </div>
                        <div class="line line-5">
                            <div class="form-group">
                                <label for="email">Email<span>*</span></label>
                                <input type="text" id="email" placeholder="duongbay.mekong@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Điện thoại<span>*</span></label>
                                <input type="text" id="phoneNumber" placeholder="0999999999">
                            </div>
                        </div>
                        <div class="line line-6">
                            <div class="form-group">
                                <label for="city">Tỉnh/ Thành phố<span>*</span></label>
                                <select id="city">
                                    <option value="">Chọn tỉnh/ thành phố</option>
                                    <option value="">1990</option>
                                    <option value="">2000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="district">Quận/ Huyện<span>*</span></label>
                                <select id="district"> 
                                    <option value="">Chọn quận/ huyện</option>
                                    <option value="">1990</option>
                                    <option value="">2000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="commune">Phường/ Xã<span>*</span></label>
                                <select id="commune">
                                    <option value="">Chọn phường/ xã</option>
                                    <option value="">Nam</option>
                                    <option value="">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="line line-7">
                            <div class="form-group">
                                <label for="specific-address">Địa chỉ cụ thể</label>
                                <input type="text" id="specific-address" placeholder="Vui lòng nhập địa chỉ cụ thể của bạn">
                            </div>
                        </div>
                        <div class="line line-8">
                            <div class="form-group">
                                <label for="group-name">Tên doanh nghiệp/tổ chức đang làm việc<span>*</span></label>
                                <input type="text" id="group-name" placeholder="Tên doanh nghiệp">
                            </div>
                            <div class="form-group">
                                <label for="work-address">Vị trí tại nơi làm việc<span>*</span></label>
                                <input type="text" id="work-address" placeholder="Vị trí tại nơi làm việc">
                            </div>
                        </div>
                        <div class="line-9">
                            <input type="checkbox" id="confirm">
                            <label for="confirm">Tôi đã đọc và đồng ý với <span>quy chế của Hiệp Hội</span></label>
                        </div>
                    </div>
                    <div id="form-business-member" class="child">
                        <div class="infor infor-1">
                            <h4>Thông tin cơ bản về tổ chức</h4>
                            <div class="group group-1">
                                <div class="line line-1">
                                    <div class="form-group">
                                        <label for="name-1">Tên doanh nghiệp/tổ chức<span>*</span></label>
                                        <input type="text" id="name-1" placeholder="Tên doanh nghiệp/tổ chức">
                                    </div>
                                    <div class="form-group">
                                        <label for="businessAreas">Lĩnh vực kinh doanh<span>*</span></label>
                                        <input type="text" id="businessAreas" placeholder="Lĩnh vực kinh doanh">
                                    </div>
                                </div>
                                <div class="line line-2">
                                    <div class="form-group">
                                            <label for="website">Website doanh nghiệp<span>*</span></label>
                                            <input type="text" id="website" placeholder="abcd.xyz.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="email-1">Email<span>*</span></label>
                                            <input type="text" id="email-1" placeholder="duongbay.mekong@gmail.com">
                                        </div>
                                </div>
                                <div class="line line-3">
                                    <div class="form-group">
                                        <label for="city-1">Tỉnh/ Thành phố<span>*</span></label>
                                        <select id="city-1">
                                            <option value="">Chọn tỉnh/ thành phố</option>
                                            <option value="">1990</option>
                                            <option value="">2000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district-1">Quận/ Huyện<span>*</span></label>
                                        <select id="district-1"> 
                                            <option value="">Chọn quận/ huyện</option>
                                            <option value="">1990</option>
                                            <option value="">2000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="commune-1">Phường/ Xã<span>*</span></label>
                                        <select id="commune-1">
                                            <option value="">Chọn phường/ xã</option>
                                            <option value="">Nam</option>
                                            <option value="">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="line line-4">
                                    <div class="form-group">
                                        <label for="specific-address-1">Địa chỉ cụ thể</label>
                                        <input type="text" id="specific-address-1" placeholder="Vui lòng nhập địa chỉ cụ thể của bạn">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="infor infor-2">
                            <h4>Thông tin về người đại diện tổ chức tham gia</h4>
                            <div class="group group-2">
                                <div class="line line-1">
                                    <div class="form-group">
                                        <label for="name-2">Tên người đại diện<span>*</span></label>
                                        <input type="text" id="name-2" placeholder="Tên người đại diện">
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Chức vụ<span>*</span></label>
                                        <input type="text" id="position" placeholder="Nhân viên abc">
                                    </div>
                                </div>
                                <div class="line line-2">
                                    <div class="form-group">
                                        <label for="phoneNumber">Số điện thoại<span>*</span></label>
                                        <input type="text" id="phoneNumber" placeholder="0999999999">
                                    </div>
                                    <div class="form-group">
                                        <label for="email-2">Email<span>*</span></label>
                                        <input type="text" id="email-2" placeholder="duongbay.mekong@gmail.com">
                                    </div>
                                </div>
                                <div class="line line-3">
                                    <div class="form-group">
                                        <label for="dateBirth">Ngày tháng sinh<span>*</span></label>
                                        <input type="text" id="dateBirth" placeholder="20/08">
                                    </div>
                                    <div class="form-group">
                                        <label for="yearBirth">Năm sinh<span>*</span></label>
                                        <select id="yearBirth">
                                            <option value="">1990</option>
                                            <option value="">2000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sex">Giới tính<span>*</span></label>
                                        <select id="sex">
                                            <option value="">Nam</option>
                                            <option value="">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="line line-4">
                                    <div class="form-group">
                                        <label for="city-2">Tỉnh/ Thành phố<span>*</span></label>
                                        <select id="city-2">
                                            <option value="">Chọn tỉnh/ thành phố</option>
                                            <option value="">1990</option>
                                            <option value="">2000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district-2">Quận/ Huyện<span>*</span></label>
                                        <select id="district-2"> 
                                            <option value="">Chọn quận/ huyện</option>
                                            <option value="">1990</option>
                                            <option value="">2000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="commune-2">Phường/ Xã<span>*</span></label>
                                        <select id="commune-2">
                                            <option value="">Chọn phường/ xã</option>
                                            <option value="">Nam</option>
                                            <option value="">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="line line-5">
                                    <div class="form-group">
                                        <label for="specific-address-2">Địa chỉ cụ thể</label>
                                        <input type="text" id="specific-address-2" placeholder="Vui lòng nhập địa chỉ cụ thể của bạn">
                                    </div>
                                </div>
                                <div class="line line-6">
                                    <div class="form-group">
                                        <label for="certificate">Chứng chỉ đã đạt được trong các lĩnh vực liên quan đến ngành nghề bếp/lĩnh vực ẩm thực<span>*</span></label>
                                        <input type="text" id="certificate" placeholder="Chứng chỉ abc">
                                    </div>
                                </div>
                                <div class="line-7">
                                    <input type="checkbox" id="confirm">
                                    <label for="confirm">Tôi đã đọc và đồng ý với <span>quy chế của Hiệp Hội</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button>Đăng ký ngay</button>
                    </div>
                </form>
            </div>
            <?php include('section/member-right.php') ?>
        </div>
    </section>

    <?php include('section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>