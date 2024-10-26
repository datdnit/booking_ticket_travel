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
                        <h3>Trang chủ Admin</h3>
                    </div>
                    <div class="admin-content-main-content">
                    <div class="admin-info-wrapper">
                        <h2>Thông Tin Quản Trị Viên</h2>
                        <div class="admin-info-item">
                            <label for="full-name">Họ và Tên:</label>
                            <p id="full-name">Nguyễn Văn A</p>
                        </div>
                        <div class="admin-info-item">
                            <label for="email">Email:</label>
                            <p id="email">vana@gmail.com</p>
                        </div>
                        <div class="admin-info-item">
                            <label for="phone">Số Điện Thoại:</label>
                            <p id="phone">0912345678</p>
                        </div>
                        <div class="admin-info-item">
                            <label for="dob">Ngày Sinh:</label>
                            <p id="dob">1990-01-01</p>
                        </div>
                        <div class="admin-info-item">
                            <label for="role">Vai Trò:</label>
                            <p id="role">Quản Trị Viên</p>
                        </div>
                        <div class="admin-info-item">
                            <label for="date-joined">Ngày Tham Gia:</label>
                            <p id="date-joined">2023-01-15</p>
                        </div>
                    </div>
                    <div class="admin-action-buttons">
                        <button class="btn btn-edit">Chỉnh Sửa</button>
                        <button class="btn btn-delete" style="color: red;">Xóa Tài Khoản</button>
                    </div>
                    </div>
                </div>
                <footer class="footer">
                        <p>KienTrucHau@ Nhóm 7 21CN1</p>
                </footer>
            </div>
        </div>
    </section>

    <script src="../assets/js/admin.js" ></script>
</body>
</html>