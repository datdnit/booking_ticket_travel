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
        <section id="tour-detail" class="p-5">
            <div class="container">
                <div class="tour-detail__header">
                    <div class="tour-detail__header-left">
                        <h1>CHÂU ÂU 10N9Đ | ĐỨC - ÁO - LIECHTENSTEIN - THỤY SĨ - PHÁP</h1>
                    </div>
                    <div class="tour-detail__header-right">
                        <div class="top">
                            <span>59.990.000</span>
                            <span>VNĐ</span>
                        </div>
                        <div class="bottom">
                            <button type="button" class="btn btn-style">Đặt Ngay</button>
                        </div>
                    </div>
                </div>

                <div class="gallery">
                    <div class="row">
                        <div class="col-6 px-0">
                            <div class="img-tour">
                                <img src="../assets/imgs/quang_truong_1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-3 pe-0">
                            <div class="row">
                                <div class="img-tour">
                                    <img src="../assets/imgs/lau_dai.jpg" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="img-tour">
                                    <img src="../assets/imgs/quang_truong_2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="img-tour">
                                    <img src="../assets/imgs/quang_truong_1.jpeg" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="img-tour">
                                    <img src="../assets/imgs/bao_tang.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Phần tử overlay -->
                <div id="overlay" class="overlay">
                    <span class="close" onclick="closeOverlay()"><i class="fa-solid fa-xmark"></i></span>
                    <img id="overlayImage" class="overlay-image" src="" alt="Zoomed Image">
                    <button class="prev" onclick="prevImage()"><i class="fa-solid fa-angle-left"></i></button>
                    <button class="next" onclick="nextImage()"><i class="fa-solid fa-angle-right"></i></button>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="overview">
                            <h2>Tổng Quan</h2>
                            <div class="endow">
                                <h4>ƯU ĐÃI</h4>
                                <ul>
                                    <li>Không rủi ro Visa: Hoàn 100% giá tour (Bao gồm Phí Visa).</li>
                                    <li>Tiện lợi ngay khi bắt đầu: Đưa đón tận nhà Miễn phí 2 chiều (nội thành Tp Hồ Chí
                                        Minh).</li>
                                    <li>Duy trì kết nối: Tặng sim 3G/4G (1 sim/2 khách người lớn).</li>
                                    <li>Thanh toán bằng Thẻ tín dụng: Tiết kiệm 1.000.000đ.</li>
                                </ul>
                                <p>Số lượng quà tặng có giới hạn và các khuyến mãi có điều kiện áp dụng.</p>
                            </div>
                            <div class="highlights">
                                <h4>ĐIỂM NHẤN CHƯƠNG TRÌNH</h4>
                                <ul>
                                    <li>Tham quan: Làng cổ Hallstatt, Hồ Zurich, Tòa thị chính Zurich, Đồi Montmartre,
                                        Quảng trường Tertre, Tháp Eiffel, Quảng trường Concorde, Nhà thờ St.Paul,… </li>
                                    <li>Lưu trú: Tiêu chuẩn 4*. </li>
                                    <li>Hoạt động khác: Đi dạo bên bờ sông Salzach, Trải nghiệm Du thuyền sông Seine.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="program">
                            <h2>Chương Trình</h2>
                        </div>
                        <div class="regulations">
                            <h2>Quy Định</h2>
                            <div class="regulations_1">
                                <h5>GIÁ TOUR BAO GỒM</h5>
                                <ul>
                                    <li>Vé máy bay khứ hồi hạng phổ thông theo chương trình: TP.HCM – Munich – TP.HCM.
                                        Hãng bay: Vietnam Airlines. Bao gồm 12kg hành lý xách tay và 23kg hành lý kí
                                        gửi.</li>
                                    <li>Các phụ phí thuế phi trường; thuế an ninh; phụ phí xăng dầu,…</li>
                                    <li>Xe vận chuyển đạt tiêu chuẩn phục vụ du lịch (tối đa 11 tiếng/ngày).</li>
                                    <li>Khách sạn tiêu chuẩn 4*: 2 khách/phòng.</li>
                                </ul>
                                <h5>GIÁ TOUR KHÔNG BAO GỒM</h5>
                                <ul>
                                    <li>Hộ chiếu còn hạn trên 06 (sáu) tháng tính đến ngày về.</li>
                                    <li>Phí visa Schengen và Tiền tip cho HDV, tài xế địa phương: 7,000,000 VNĐ/khách (đóng ngay khi đăng kí tour).</li>
                                    <li>Vé tham quan núi Titlis: ~120 Euro/khách.Phí đổi vé, dời ngày về, đổi hành trình, đổi chặng bay hoặc nâng hạng vé (thương gia), hành lý quá cước theo quy định hàng không.</li>
                                    <li>Chi phí cá nhân (hành lý quá cước, điện thoại, giặt ủi, tham quan ăn uống ngoài chương trình).</li>
                                    <li>Phí phụ thu phòng đơn (nếu khách yêu cầu ở phòng đơn hoặc đi lẻ không có người ghép phòng): 355 Euro/khách/tour.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-price-details">
                            <h2>Giá Tour & Phụ Thu Phòng Đơn</h2>
                            <div class="pricelist d-flex justify-content-between">
                                <b>Người lớn</b>
                                <hr>
                                54.990.000 VNĐ
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-buy-ticket">
                            <h4>Thông tin cơ bản</h4>
                            <ul>
                                <li>Khởi hành: 04-11-2024</li>
                                <li>Giờ đi: 23:50</li>
                                <li>Thời gian: 10 ngày 9 đêm</li>
                            </ul>
                            <div class="ticket-price">
                                <div class="ticket-price-detail">
                                    <span>59.990.000</span>
                                    <span>VNĐ</span>
                                </div>

                            </div>
                            <div class="ticket-botton">
                                <button type="button" class="btn btn-style">Đặt Ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Include Javascript -->
    <?php include "./component-javascripts.php" ?>
    <!-- End Include Javascript -->
</body>

</html>