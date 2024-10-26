<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Main Admin</title>
    <!-- Include Stylesheet -->
    <?php include "../component-styles.php" ?>
    <!-- End Include Stylesheet -->
</head>
<body>
    <section class="admin" id="admin_main">
        <div class="row-grid">
            <div class="admin-sidebar">
                <div class="admin-sidebar-top">
                    <img src="../assets/imgs/logo.jpg" alt="">
                </div>
                <div class="admin-sidebar-content">
                    <ul>
                        <li><a href=""><i class="ri-dashboard-line"></i> Dashboard<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-items">
                                    <li><a href=""><i class="ri-arrow-right-s-fill"></i>Tổng quan</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i> Đơn Hàng<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-items">
                                    <li><a href=""><i class="ri-arrow-right-s-fill"></i>Danh sách</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i> Tour<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-items">
                                    <li><a href=""><i class="ri-arrow-right-s-fill"></i>Danh sách</a></li>
                                    <li><a href=""><i class="ri-arrow-right-s-fill"></i>Thêm</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin-content">
                <div class="admin-content-top">
                    <div class="admin-content-top-left">
                        <ul class="flex-box">
                            <li>
                                <i class="ri-search-line"></i>
                            </li>
                            <li>
                                <i class="ri-drag-move-line"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="admin-content-top-right">
                        <ul class="flex-box">
                            <li>
                                <i class="ri-notification-4-line" number ="3"></i>
                            </li>
                            <li>
                                <i class="ri-message-2-line" number ="5"></i>
                            </li>
                            <li class="flex-box">
                                <img src="../assets/imgs/logo.jpg" alt="" style="width: 50px;">
                                <p>Mina <i class="ri-arrow-down-s-fill"></i></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <h3>Thêm Tour</h3>
                    </div>
                    <div class="admin-content-main-content">
                            <!-- Wrapper cho tất cả các input -->
                            <div class="admin-inputs-wrapper">
                                <div class="admin-content-main-content-input">
                                    <label for="tour-name">Tên Tour:</label>
                                    <input type="text" id="tour-name" placeholder="Nhập tên tour">
                                </div>
                                <div class="admin-content-main-content-input">
                                    <label for="thumbnail">Thumbnail:</label>
                                    <input type="text" id="thumbnail" placeholder="Nhập đường dẫn thumbnail">
                                    <button type="button" class="btn btn-primary">Duyệt ảnh</button>
                                </div>
                                <div class="admin-content-main-content-input">
                                    <label for="overview">Tổng Quan Tour:</label>
                                    <input type="text" id="overview" placeholder="Nhập tổng quan tour">
                                </div>
                                <div class="admin-content-main-content-input">
                                    <label for="duration">Thời Lượng Tour:</label>
                                    <input type="text" id="duration" placeholder="Nhập thời lượng tour">
                                </div>
                                <div class="admin-content-main-content-input">
                                    <label for="transport">Phương Tiện:</label>
                                    <input type="text" id="transport" placeholder="Nhập phương tiện">
                                </div>
                            </div>
                            
                            <!-- Wrapper cho tất cả các textarea -->
                            <div class="admin-textareas-wrapper">
                                <div class="admin-content-main-content-textarea">
                                    <label for="tour-schedule">Tour Chi Tiết Lịch Trình:</label>
                                    <textarea id="tour-schedule" rows="5" placeholder="Nhập chi tiết lịch trình"></textarea>
                                </div>
                                <div class="admin-content-main-content-textarea">
                                    <label for="policy">Chính Sách:</label>
                                    <textarea id="policy" rows="5" placeholder="Nhập chính sách"></textarea>
                                </div>
                                <div class="admin-content-main-content-textarea">
                                    <label for="notes">Ghi Chú:</label>
                                    <textarea id="notes" rows="5" placeholder="Nhập ghi chú"></textarea>
                                </div>
                                <div class="admin-content-main-content-textarea">
                                    <label for="payment">Hình Thức Thanh Toán:</label>
                                    <textarea id="payment" rows="5" placeholder="Nhập hình thức thanh toán"></textarea>
                                </div>
                            </div>
                            <!-- chi tiết giá -->
                            <div class="price-container">
                                <div class="price-inputs">
                                    <div class="price-input">
                                        <label for="individual-price">Giá bán lẻ 1 người:</label>
                                        <input type="text" id="individual-price" placeholder="Nhập giá bán lẻ 1 người">
                                    </div>
                                    <div class="price-input">
                                        <label for="group-price">Giá bán lẻ nhóm:</label>
                                        <input type="text" id="group-price" placeholder="Nhập giá bán lẻ nhóm">
                                    </div>
                                </div>
                                <div class="price-textarea">
                                    <label for="price-details">Chi tiết giá tour:</label>
                                    <textarea id="price-details" rows="5" placeholder="Nhập chi tiết giá tour"></textarea>
                                </div>
                            </div>

                            <!-- Wrapper cho tất cả các input SEO -->
                            <div class="admin-seo-wrapper">
                                <div class="admin-content-main-content-input">
                                    <label for="slug">Slug Đường Dẫn SEO:</label>
                                    <input type="text" id="slug" placeholder="Nhập slug SEO">
                                </div>
                                <div class="admin-content-main-content-input">
                                    <label for="seo-title">Tiêu Đề SEO:</label>
                                    <input type="text" id="seo-title" placeholder="Nhập tiêu đề SEO">
                                </div>
                                <div class="admin-content-main-content-input">
                                    <label for="seo-description">Mô Tả SEO:</label>
                                    <input type="text" id="seo-description" placeholder="Nhập mô tả SEO">
                                </div>
                                <div class="admin-content-main-content-input">
                                    <label for="search-category">Danh Mục Tìm Kiếm:</label>
                                    <input type="text" id="search-category" placeholder="Nhập danh mục tìm kiếm">
                                </div>
                                <div class="admin-content-main-content-input">
                                    <label for="location">Địa Điểm Tour:</label>
                                    <input type="text" id="location" placeholder="Nhập địa điểm tour">
                                </div>
                            </div>

                            <!-- Nút Thêm Tour -->
                            <button type="button" class="btn btn-add-tour">Thêm Tour</button>
                        </div>
                        <footer class="footer">
                            <p>KienTrucHau@ Nhóm 7 21CN1</p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/admin.js" ></script>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
    // Khởi tạo CKEditor cho từng textarea
    CKEDITOR.replace('tour-schedule');
    CKEDITOR.replace('policy');
    CKEDITOR.replace('notes');
    CKEDITOR.replace('payment');
</script>
</body>
</html>