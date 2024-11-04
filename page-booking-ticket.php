<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tổng Quan Về Chuyến Đi</title>
  <?php include "./component-styles.php" ?>
  
</head>
<body>
    <div class="container">
        <ul class="navigation-list">
            <li>
                <a href="" class="nav-home-link">
                    <i class="bi bi-house-door"></i>
                </a>
                <i class="bi bi-chevron-right"></i>
            </li>
            <li>
                <span> Đặt Tour </span>
            </li>
        </ul>
    </div>
    <section id="booking">
    <div class="container">
        <h1 class="title">Tổng Quan Về Chuyến Đi</h1>
        <h2 class="section-title">Thông Tin Liên Lạc</h2>
        <div class="form-container">
            <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Họ và tên <span>*</span></label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập Họ và tên">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="sample@gmail.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Số điện thoại <span>*</span></label>
                    <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại liên hệ">
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Địa chỉ <span>*</span></label>
                    <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ liên hệ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Ngày đi <span>*</span></label>
                    <input type="text" class="form-control" id="name" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Giá <span>*</span></label>
                    <input type="text" class="form-control" id="email" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-tour ">
                    <label for="name">Tên Tour <span>*</span></label>
                    <input type="text" class="form-control" id="name" placeholder="">
                </div>
            </div>
            <button type="button" class="btn btn-booking">Đặt Ngay</button>
            </form>
        </div>
    </section>
  </div>


</body>
</html>
