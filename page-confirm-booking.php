<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Booking</title>
    <!-- Include Stylesheet -->
    <?php include "./component-styles.php" ?>
    <!-- End Include Stylesheet -->
</head>

<body>
    <!-- Include Header -->
    <?php
        include "./component-header.php"
    ?> 
    <!-- End Include Header -->
    <div class="container pt-5" >
        <ul class="navigation-list">
            <li>
                <a href="" class="nav-home-link">
                    <i class="bi bi-house-door"></i>
                </a>
                <i class="bi bi-chevron-right"></i>
            </li>
            <li>
                <span> Xác Nhận </span>
            </li>
        </ul>
    </div>
    <div class="order-confirmation-wrapper container" id="confirm-booking">
        <div class="order-confirmation">
            <p class="order-id">Xác nhận đơn hàng: <strong>Ngô Sỹ Nguyên#37</strong></p>
            <div class="confirmation-box">
            <p>Đơn hàng của bạn đã được gửi <strong>Thành công!</strong></p>
            <p>Vui lòng check <strong>Email</strong> đã đăng ký để nhận và xác nhận Đơn hàng</p>
            <button class="btn btn-dark continue-btn">Tiếp tục mua hàng</button>
        </div>
    </div>
</div>


     <!-- Include Footer -->
    <?php include "./component-footer.php" ?>
    <!-- End Include Footer -->

    <!-- Include Javascript -->
    <?php include "./component-javascripts.php" ?>
    <!-- End Include Javascript -->
</body>

</html>