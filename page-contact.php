<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Template</title>
    <!-- Include Stylesheet -->
    <?php include "./component-styles.php" ?>
    <!-- End Include Stylesheet -->
</head>

<body>
    <main>
        <div class="container">
            <div class="header-contact">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-house-chimney"></i><i
                                class="fa-solid fa-chevron-right"></i></a></li>
                    <li>Liên Hệ</li>
                </ul>
            </div>
            <div class="content-contact">
                <div class="row">
                    <div class="col-12 col-md-6 py-4">
                        <h1>Liên Hệ</h1>
                        <p>Nếu bạn có bất kỳ yêu cầu hoặc thắc mắc nào, đừng ngần ngại, hãy liên hệ với chúng tôi.</p>
                        <dl class="blocks">
                            <dt>Văn Phòng Chính</dt>
                            <dd>
                                <p><i class="fa-solid fa-location-dot"></i>677 Trần Hưng Đạo, Phường 1, Quận 5, TP. HCM
                                </p>
                                <p><a href="tel:19006420"><i class="fa-solid fa-phone"></i>1900 6420</a></p>
                                <p><a href="mailto:info@luavietours.com"><i
                                            class="fa-solid fa-envelope"></i>info@luavietours.com</a></p>
                            </dd>
                            <dt>Văn Phòng Hà Nội</dt>
                            <dd>
                                <p><i class="fa-solid fa-location-dot"></i>Tầng 3, Toà nhà Dolphin Plaza, số 28 Trần
                                    Bình, Phường Mỹ Đình 2, Quận Nam Từ Liêm, TP. Hà Nội</p>
                                <p><a href="tel:19006420"><i class="fa-solid fa-phone"></i>1900 6420</a></p>
                                <p><a href="mailto:info@luavietours.com"><i
                                            class="fa-solid fa-envelope"></i>info@luavietours.com</a></p>
                            </dd>
                            <dt>Chi Nhánh Cần Thơ</dt>
                            <dd>
                                <p><i class="fa-solid fa-location-dot"></i>Số 09 Cách Mạng Tháng Tám, Phường Thới Bình,
                                    Quận Ninh Kiều, TP. Cần Thơ</p>
                                <p><a href="tel:0906801855"><i class="fa-solid fa-phone"></i>0906 801 855</a></p>
                                <p><a href="mailto:mekong.bsm@luavietours.com"><i
                                            class="fa-solid fa-envelope"></i>mekong.bsm@luavietours.com</a></p>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-12 col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.979019187234!2d105.84538367495522!3d21.03352548061699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbe60e1d779%3A0x63d3c8efd288e933!2zMTkgUC4gSMOgbmcgVGhp4bq_YywgSMOgbmcgR2FpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1728183059452!5m2!1svi!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="image-container">
                <img src="https://www.luavietours.com/assets/img/lien-he/img_1.jpg" alt="">
            </div>
            <div class="box">
                <p>Form Liên Hệ</p>
                <div class="form-block">
                    <div class="row">
                        <label for="colFormLabelLg" class="col-md-2 col-form-label col-form-label-lg">Họ và tên
                            <em>*</em></label>
                        <div class="col-12 col-md-10">
                            <input type="text" class="form-control form-control-lg" placeholder="Nhập Họ và tên">
                        </div>
                        <label for="colFormLabelLg" class="col-md-2 col-form-label col-form-label-lg">Địa chỉ
                            <em>*</em></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control form-control-lg" placeholder="Nhập Địa chỉ liên hệ">
                        </div>
                        <label for="colFormLabelLg" class="col-md-2 col-form-label col-form-label-lg">Số điện thoại
                            <em>*</em></label>
                        <div class="col-md-10">
                            <input type="tel" class="form-control form-control-lg"
                                placeholder="Nhập Số điện thoại liên hệ">
                        </div>
                        <label for="colFormLabelLg" class="col-md-2 col-form-label col-form-label-lg">Email
                            <em>*</em></label>
                        <div class="col-md-10">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg"
                                placeholder="ex@gmail.com">
                        </div>
                        <label for="colFormLabelLg" class="col-md-2 col-form-label col-form-label-lg">Nội dung liên hệ
                        </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control form-control-lg" placeholder="">
                        </div>

                    </div>
                </div>
                <div class="button-cf">
                    <button type="button" class="btn btn-style">Xác Nhận</button>
                </div>
            </div>

        </div>
    </main>
    <!-- Include Javascript -->
    <?php include "./component-javascripts.php" ?>
    <!-- End Include Javascript -->
</body>

</html>