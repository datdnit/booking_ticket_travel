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
                        <h3>Danh sách Tour</h3>
                    </div>
                    <div class="admin-content-main-content">
                        <div class="tour-list-wrapper">
                            <h2>Danh Sách Tour</h2>
                            <table class="tour-list-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên Tour</th>
                                        <th>Thời Lượng</th>
                                        <th>Phương Tiện</th>
                                        <th>Giá Bán Lẻ</th>
                                        <th>Danh Sách Hình Ảnh</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tour Hà Nội</td>
                                        <td>3 Ngày 2 Đêm</td>
                                        <td>Xe Buýt</td>
                                        <td>5,000,000 VNĐ</td>
                                        <td><a href="#" class="action-link link-view">Xem ảnh</a></td>
                                        <td><a href="#" class="action-link link-edit">Sửa</a></td>
                                        <td><a href="#" class="action-link link-delete">Xóa</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Tour Sapa</td>
                                        <td>4 Ngày 3 Đêm</td>
                                        <td>Xe Lửa</td>
                                        <td>6,500,000 VNĐ</td>
                                        <td><a href="#" class="action-link link-view">Xem ảnh</a></td>
                                        <td><a href="#" class="action-link link-edit">Sửa</a></td>
                                        <td><a href="#" class="action-link link-delete">Xóa</a></td>
                                    </tr>
                                    <!-- Thêm các hàng khác cho các tour khác -->
                                </tbody>
                            </table>
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