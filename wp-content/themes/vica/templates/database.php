<?php 
/* Template Name: database */
$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include ('section/section-banner-database.php') ?>
    <section class="section-list-database">
        <div class="container-database">
            <div class="left">
                <div class="group-search">
                    <div class="item item-search">
                        <label for="keyword" class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                                <path d="M7.77915 1.71387C6.43836 1.71387 5.12768 2.11146 4.01286 2.85636C2.89803 3.60126 2.02913 4.66002 1.51603 5.89874C1.00294 7.13747 0.868688 8.50053 1.13026 9.81556C1.39184 11.1306 2.03749 12.3385 2.98557 13.2866C3.93365 14.2347 5.14158 14.8803 6.4566 15.1419C7.77163 15.4035 9.13469 15.2692 10.3734 14.7561C11.6121 14.243 12.6709 13.3741 13.4158 12.2593C14.1607 11.1445 14.5583 9.8338 14.5583 8.49301C14.5582 6.6951 13.8439 4.97087 12.5726 3.69956C11.3013 2.42825 9.57705 1.71398 7.77915 1.71387Z" stroke="#4D4D4D" stroke-width="1.5" stroke-miterlimit="10"/>
                                <path d="M12.8359 13.5508L17.5704 18.2853" stroke="#4D4D4D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                            </svg>
                        </label>
                        .<div class="custom-input-wrapper">
                            <input type="text" id="keyword" placeholder="Vị trí ứng tuyển...">
                        </div>
                    </div>
                    <div class="item search-date-1">
                        <label for="search-date-1" class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.36198 0.25C5.70716 0.25 5.98698 0.529822 5.98698 0.875V1.5106C6.53867 1.49999 7.14648 1.49999 7.81497 1.5H11.2423C11.9108 1.49999 12.5186 1.49999 13.0703 1.5106V0.875C13.0703 0.529822 13.3501 0.25 13.6953 0.25C14.0405 0.25 14.3203 0.529822 14.3203 0.875V1.56424C14.5369 1.58075 14.7421 1.60152 14.9362 1.62761C15.9132 1.75897 16.704 2.03573 17.3276 2.65937C17.9512 3.283 18.228 4.0738 18.3594 5.05081C18.4013 5.36306 18.4295 5.70382 18.4484 6.07506C18.4734 6.14255 18.487 6.21551 18.487 6.29167C18.487 6.34944 18.4791 6.40537 18.4645 6.45847C18.487 7.12678 18.487 7.88562 18.487 8.74466V10.5053C18.487 12.0368 18.487 13.2498 18.3594 14.1992C18.228 15.1762 17.9512 15.967 17.3276 16.5906C16.704 17.2143 15.9132 17.491 14.9362 17.6224C13.9868 17.75 12.7738 17.75 11.2423 17.75H7.81497C6.2835 17.75 5.07047 17.75 4.12113 17.6224C3.14411 17.491 2.35332 17.2143 1.72968 16.5906C1.10605 15.967 0.829282 15.1762 0.697925 14.1992C0.570289 13.2498 0.5703 12.0368 0.570313 10.5053V8.74465C0.570305 7.88562 0.570299 7.12679 0.59282 6.45847C0.57815 6.40537 0.570313 6.34943 0.570313 6.29167C0.570313 6.21551 0.583933 6.14254 0.60887 6.07505C0.627774 5.70382 0.655946 5.36305 0.697925 5.05081C0.829282 4.0738 1.10605 3.283 1.72968 2.65937C2.35332 2.03573 3.14411 1.75897 4.12113 1.62761C4.31523 1.60152 4.52036 1.58075 4.73698 1.56424V0.875C4.73698 0.529822 5.0168 0.25 5.36198 0.25ZM1.83122 6.91667C1.82058 7.46061 1.82031 8.07999 1.82031 8.79167V10.4583C1.82031 12.0473 1.82164 13.1762 1.93678 14.0326C2.0495 14.871 2.26089 15.3541 2.61357 15.7067C2.96624 16.0594 3.44928 16.2708 4.28769 16.3835C5.14407 16.4987 6.27296 16.5 7.86198 16.5H11.1953C12.7843 16.5 13.9132 16.4987 14.7696 16.3835C15.608 16.2708 16.0911 16.0594 16.4437 15.7067C16.7964 15.3541 17.0078 14.871 17.1205 14.0326C17.2357 13.1762 17.237 12.0473 17.237 10.4583V8.79167C17.237 8.07999 17.2367 7.46061 17.2261 6.91667H1.83122ZM17.1689 5.66667H1.88838C1.90173 5.50884 1.91769 5.35936 1.93678 5.21737C2.0495 4.37897 2.26089 3.89593 2.61357 3.54325C2.96624 3.19058 3.44928 2.97919 4.28769 2.86647C5.14407 2.75133 6.27296 2.75 7.86198 2.75H11.1953C12.7843 2.75 13.9132 2.75133 14.7696 2.86647C15.608 2.97919 16.0911 3.19058 16.4437 3.54325C16.7964 3.89593 17.0078 4.37897 17.1205 5.21737C17.1396 5.35936 17.1556 5.50884 17.1689 5.66667ZM13.2786 11.9167C12.9335 11.9167 12.6536 12.1965 12.6536 12.5417C12.6536 12.8868 12.9335 13.1667 13.2786 13.1667C13.6238 13.1667 13.9036 12.8868 13.9036 12.5417C13.9036 12.1965 13.6238 11.9167 13.2786 11.9167ZM11.4036 12.5417C11.4036 11.5061 12.2431 10.6667 13.2786 10.6667C14.3142 10.6667 15.1536 11.5061 15.1536 12.5417C15.1536 13.5772 14.3142 14.4167 13.2786 14.4167C12.2431 14.4167 11.4036 13.5772 11.4036 12.5417Z" fill="#4D4D4D"/>
                            </svg>
                        </label>
                        <div class="custom-select-wrapper">
                            <select id="search-date-1" class="custom-select">
                                <option>Từ ngày</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="item search-date-2">
                        <label for="search-date-2" class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.36198 0.25C5.70716 0.25 5.98698 0.529822 5.98698 0.875V1.5106C6.53867 1.49999 7.14648 1.49999 7.81497 1.5H11.2423C11.9108 1.49999 12.5186 1.49999 13.0703 1.5106V0.875C13.0703 0.529822 13.3501 0.25 13.6953 0.25C14.0405 0.25 14.3203 0.529822 14.3203 0.875V1.56424C14.5369 1.58075 14.7421 1.60152 14.9362 1.62761C15.9132 1.75897 16.704 2.03573 17.3276 2.65937C17.9512 3.283 18.228 4.0738 18.3594 5.05081C18.4013 5.36306 18.4295 5.70382 18.4484 6.07506C18.4734 6.14255 18.487 6.21551 18.487 6.29167C18.487 6.34944 18.4791 6.40537 18.4645 6.45847C18.487 7.12678 18.487 7.88562 18.487 8.74466V10.5053C18.487 12.0368 18.487 13.2498 18.3594 14.1992C18.228 15.1762 17.9512 15.967 17.3276 16.5906C16.704 17.2143 15.9132 17.491 14.9362 17.6224C13.9868 17.75 12.7738 17.75 11.2423 17.75H7.81497C6.2835 17.75 5.07047 17.75 4.12113 17.6224C3.14411 17.491 2.35332 17.2143 1.72968 16.5906C1.10605 15.967 0.829282 15.1762 0.697925 14.1992C0.570289 13.2498 0.5703 12.0368 0.570313 10.5053V8.74465C0.570305 7.88562 0.570299 7.12679 0.59282 6.45847C0.57815 6.40537 0.570313 6.34943 0.570313 6.29167C0.570313 6.21551 0.583933 6.14254 0.60887 6.07505C0.627774 5.70382 0.655946 5.36305 0.697925 5.05081C0.829282 4.0738 1.10605 3.283 1.72968 2.65937C2.35332 2.03573 3.14411 1.75897 4.12113 1.62761C4.31523 1.60152 4.52036 1.58075 4.73698 1.56424V0.875C4.73698 0.529822 5.0168 0.25 5.36198 0.25ZM1.83122 6.91667C1.82058 7.46061 1.82031 8.07999 1.82031 8.79167V10.4583C1.82031 12.0473 1.82164 13.1762 1.93678 14.0326C2.0495 14.871 2.26089 15.3541 2.61357 15.7067C2.96624 16.0594 3.44928 16.2708 4.28769 16.3835C5.14407 16.4987 6.27296 16.5 7.86198 16.5H11.1953C12.7843 16.5 13.9132 16.4987 14.7696 16.3835C15.608 16.2708 16.0911 16.0594 16.4437 15.7067C16.7964 15.3541 17.0078 14.871 17.1205 14.0326C17.2357 13.1762 17.237 12.0473 17.237 10.4583V8.79167C17.237 8.07999 17.2367 7.46061 17.2261 6.91667H1.83122ZM17.1689 5.66667H1.88838C1.90173 5.50884 1.91769 5.35936 1.93678 5.21737C2.0495 4.37897 2.26089 3.89593 2.61357 3.54325C2.96624 3.19058 3.44928 2.97919 4.28769 2.86647C5.14407 2.75133 6.27296 2.75 7.86198 2.75H11.1953C12.7843 2.75 13.9132 2.75133 14.7696 2.86647C15.608 2.97919 16.0911 3.19058 16.4437 3.54325C16.7964 3.89593 17.0078 4.37897 17.1205 5.21737C17.1396 5.35936 17.1556 5.50884 17.1689 5.66667ZM13.2786 11.9167C12.9335 11.9167 12.6536 12.1965 12.6536 12.5417C12.6536 12.8868 12.9335 13.1667 13.2786 13.1667C13.6238 13.1667 13.9036 12.8868 13.9036 12.5417C13.9036 12.1965 13.6238 11.9167 13.2786 11.9167ZM11.4036 12.5417C11.4036 11.5061 12.2431 10.6667 13.2786 10.6667C14.3142 10.6667 15.1536 11.5061 15.1536 12.5417C15.1536 13.5772 14.3142 14.4167 13.2786 14.4167C12.2431 14.4167 11.4036 13.5772 11.4036 12.5417Z" fill="#4D4D4D"/>
                            </svg>
                        </label>
                        <div class="custom-select-wrapper">
                            <select id="search-date-2" class="custom-select">
                                <option>Đến ngày</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-button">
                        <button>Tìm kiếm</button>
                    </div>
                </div>
                <div class="list-report">
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            Tải xuống
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
                    </div>
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            <span>Tải xuống</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
                    </div>
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            <span>Tải xuống</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
                    </div>
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            <span>Tải xuống</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
                    </div>
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            <span>Tải xuống</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
                    </div>
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            <span>Tải xuống</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
                    </div>
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            <span>Tải xuống</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
                    </div>
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            <span>Tải xuống</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
                    </div>
                    <div class="child">
                        <span class="monthly-report">Báo cáo hàng tháng</span>
                        <h4 class="title">Báo cáo hoạt động của hiệp hội nghề bếp Việt Nam</h4>
                        <p class="content">Hội đầu bếp Việt Nam VICA (nay là Hiệp hội Dạy nghề và Việc Làm Đầu bếp Việt Nam - Vietnam Chef Association) </p>
                        <a href="" class="download">
                            <span>Tải xuống</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10.4613 13.7551C10.3429 13.8846 10.1755 13.9583 10 13.9583C9.82453 13.9583 9.65714 13.8846 9.53873 13.7551L6.2054 10.1092C5.97248 9.85448 5.99019 9.45915 6.24494 9.22623C6.49969 8.99332 6.89502 9.01102 7.12794 9.26577L9.375 11.7235V2.5C9.375 2.15482 9.65482 1.875 10 1.875C10.3452 1.875 10.625 2.15482 10.625 2.5V11.7235L12.8721 9.26577C13.105 9.01102 13.5003 8.99332 13.7551 9.22623C14.0098 9.45915 14.0275 9.85448 13.7946 10.1092L10.4613 13.7551Z" fill="#ED1E29"/>
                                <path d="M3.125 12.5C3.125 12.1548 2.84518 11.875 2.5 11.875C2.15482 11.875 1.875 12.1548 1.875 12.5V12.5457C1.87498 13.6854 1.87497 14.604 1.9721 15.3265C2.07295 16.0765 2.2887 16.7081 2.79029 17.2097C3.29189 17.7113 3.92345 17.9271 4.67354 18.0279C5.39602 18.125 6.31462 18.125 7.45428 18.125H12.5457C13.6854 18.125 14.604 18.125 15.3265 18.0279C16.0766 17.9271 16.7081 17.7113 17.2097 17.2097C17.7113 16.7081 17.9271 16.0765 18.0279 15.3265C18.125 14.604 18.125 13.6854 18.125 12.5457V12.5C18.125 12.1548 17.8452 11.875 17.5 11.875C17.1548 11.875 16.875 12.1548 16.875 12.5C16.875 13.6962 16.8737 14.5304 16.789 15.1599C16.7068 15.7714 16.5565 16.0952 16.3258 16.3258C16.0952 16.5565 15.7714 16.7068 15.1599 16.789C14.5304 16.8737 13.6962 16.875 12.5 16.875H7.5C6.30382 16.875 5.46956 16.8737 4.8401 16.789C4.22862 16.7068 3.90481 16.5565 3.67418 16.3258C3.44354 16.0952 3.29317 15.7714 3.21096 15.1599C3.12633 14.5304 3.125 13.6962 3.125 12.5Z" fill="#ED1E29"/>
                            </svg>
                        </a>
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
            <?php include ('section/database-right.php') ?>
        </div>
    </section>

    <?php include ('section/section-8-homepage.php') ?>
</main>
<?php get_footer(); ?>