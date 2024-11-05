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
    <div class="login-container" >
        <div class="login-image">
            <img src="./assets/imgs/quang_truong_1.jpeg" alt="Background Image">
        </div>
        <div class="login-form">
            <h2 class="form-title">Đăng Nhập</h2>
            <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" required>
            </div>
            <button type="submit" class="btn btn-primary btn-login">Đăng Nhập</button>
            <p class="signup-link">Chưa có tài khoản? <a href="#">Đăng ký ngay</a></p>
            </form>
        </div>
    </div>
</body>

</html>