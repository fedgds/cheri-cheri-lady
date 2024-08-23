<?php include ('header.php') ?>
<main>
    <?php include ('section/section-banner-recruitment.php') ?>
    <section class="section-recruitment">
        <div class="container-recruitment">
            <div class="left">
                <div class="header">
                    <h2>Đăng tuyển việc làm</h2>
                    <p>Để đăng ký thông tin tuyển dụng lên website Hiệp hội dạy nghề và đầu bếp Việt Nam, hội viên cần điền đầy đủ các thông tin dưới đây.</p>
                </div>
                <form action="">
                    <div class="line line-1">
                        <div class="form-group">
                            <label for="recruitment-units">Đơn vị đăng tuyển<span>*</span></label>
                            <input type="text" id="recruitment-units" placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="job-placement">Vị trí đăng tuyển<span>*</span></label>
                            <input type="text" id="job-placement" placeholder="Nhập nội dung">
                        </div>
                    </div>
                    <div class="line line-2">
                        <div class="form-group">
                            <label for="salary">Mức lương<span>*</span></label>
                            <input type="text" id="salary" placeholder="Nhập mức lương">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa điểm<span>*</span></label>
                            <input type="text" id="address" placeholder="Nhập địa điểm">
                        </div>
                    </div>
                    <div class="line line-3">
                        <div class="form-group">
                            <label for="application-deadline">Hạn ứng tuyển<span>*</span></label>
                            <input type="date" id="application-deadline">
                        </div>
                        <div class="form-group">
                            <label for="recruitment-quantity">Số lượng tuyển dụng</label>
                            <input type="text" id="recruitment-quantity" placeholder="Nhập số lượng">
                        </div>
                    </div>
                    <div class="line line-4">
                        <div class="form-group">
                            <label for="required">Yêu cầu<span>*</span></label>
                            <textarea id="required" placeholder="Nhập nội dung"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rights">Quyền lợi</label>
                            <textarea id="rights" placeholder="Nhập nội dung"></textarea>
                        </div>
                    </div>
                    <div class="line line-5">
                        <div class="form-group">
                            <label for="working-position">Vị trí làm việc<span>*</span></label>
                            <input type="text" id="working-position" placeholder="Nhập vị trí làm việc">
                        </div>
                        <div class="form-group">
                            <label for="form-of-work">Hình thức làm việc</label>
                            <select id="form-of-work">
                                <option value="">Toàn thời gian</option>
                                <option value="">Buổi sáng</option>
                                <option value="">Buổi chiều</option>
                            </select>
                        </div>
                    </div>
                    <div class="line line-6">
                        <div class="form-group">
                            <label for="description">Mô tả công việc<span>*</span></label>
                            <textarea id="description" placeholder="Nhập mô tả công việc"></textarea>
                        </div>
                    </div>
                    <div class="line line-7">
                        <div class="form-group">
                            <label for="job-required">Yêu cầu công việc<span>*</span></label>
                            <textarea id="job-required" placeholder="Nhập yêu cầu công việc"></textarea>
                        </div>
                    </div>
                    <div class="line line-8">
                        <div class="form-group">
                            <label for="salary-regime">Chế độ lương thưởng<span>*</span></label>
                            <textarea id="salary-regime" placeholder="Nhập chế độ lương thưởng"></textarea>
                        </div>
                    </div>
                    <div class="line line-9">
                        <div class="form-group">
                            <label for="salary-regime">Thông tin liên hệ<span>*</span></label>
                            <textarea id="salary-regime" placeholder="Nhập thông tin liên hệ với người tuyển dụng ( Số điện thoại, Email người tuyển dụng)"></textarea>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="confirm">
                            <input type="checkbox" id="confirm">
                            <label for="confirm">Tôi đã đọc và đồng ý với quy chế của hội</label>
                        </div>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M9.4994 15.6342L9.49943 15.6342L15.6626 9.47093C14.8238 9.12181 13.8303 8.54834 12.8907 7.60874C11.951 6.66899 11.3775 5.67532 11.0284 4.83642L4.86504 10.9998L4.86502 10.9998C4.38407 11.4807 4.14358 11.7212 3.93676 11.9864C3.69279 12.2992 3.48363 12.6376 3.31297 12.9957C3.16829 13.2993 3.06075 13.6219 2.84565 14.2672L1.71139 17.67C1.60554 17.9875 1.68819 18.3376 1.92487 18.5743C2.16156 18.811 2.51167 18.8936 2.82922 18.7878L6.232 17.6535C6.87728 17.4384 7.19993 17.3309 7.5035 17.1862C7.86159 17.0156 8.20003 16.8064 8.51282 16.5624C8.77797 16.3556 9.01847 16.1151 9.4994 15.6342Z" fill="white"/>
                                <path d="M17.3729 7.76072C18.6526 6.48096 18.6526 4.40607 17.3729 3.12632C16.0931 1.84657 14.0182 1.84657 12.7385 3.12632L11.9993 3.86552C12.0094 3.89608 12.0199 3.92707 12.0308 3.95847C12.3017 4.73942 12.8129 5.76318 13.7746 6.72485C14.7363 7.68653 15.76 8.19774 16.541 8.46868C16.5722 8.47953 16.6031 8.48998 16.6335 8.50006L17.3729 7.76072Z" fill="white"/>
                            </svg>
                            Đăng bài tuyển dụng
                        </button>
                    </div>
                </form>
            </div>
            <?php include ('section/recruitment-right.php') ?>
        </div>
    </section>

    <?php include ('section/section-8-homepage.php') ?>
</main>
<?php include ('footer.php') ?>