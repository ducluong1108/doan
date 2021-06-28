<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xây dựng Hoàng Đức</title>
    <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    <header>
        <nav class="menu_pc container">
            <a class="logo" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
            </a>
            <ul class="links">
                <li><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
                <li class="active"><a href="<?= base_url('about-us') ?>">Về chúng tôi</a></li>
                <li><a href="<?= base_url('news/may-moc-thiet-bi') ?>">Máy móc & thiết bị</a></li>
                <li><a href="<?= base_url('news/du-an-thi-cong') ?>">Dự án thi công</a></li>
                <li><a href="<?= base_url('news/mau-thiet-ke') ?>">Mẫu thiết kế</a></li>
                <li><a href="<?= base_url('contact') ?>">Liên hệ</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php $this->load->view($view); ?>
    </main>
    <div id="cost">
        <div class="container">
            <h2>Tiện ích tính chi phí xây dựng</h2>
            <p>Quý khách vui lòng nhập đầy đủ các thông tin bên dưới. Lưu ý quý khách nhập diện tích xây dựng(không
                phải diện
                tích đất) để có kết quả tính tương đối chính xác nhất. Chân thành cảm ơn quý khách!</p>
            <section class="section cost">
                <label for="loainha">Chọn Loại Nhà<select name="" id="loainha">
                        <option selected value="2900000">Nhà phố hiện đại</option>
                        <option value="3300000">Nhà phố hiện đại</option>
                        <option value="3300000">Nhà biệt thự hiện đại</option>
                        <option value="3500000">Nhà biệt thự cổ điển</option>
                    </select>
                </label>
                <label for="chiphi">Chi phí xây nhà <select name="" id="chiphi">
                        <option selected value="phan-tho">Xây nhà phần thô</option>
                        <option value="tron-goi">Xây nhà trọn gói</option>
                    </select>
                </label>
                <label for="mucdautu">Mức đầu tư<select name="" id="mucdautu">
                        <option selected value="4800000">Cơ bản</option>
                        <option value="5300000">TB - Khá</option>
                        <option value="5600000">Khá+</option>
                        <option value="5900000">Tốt</option>
                        <option value="6500000">Cao cấp</option>
                    </select>
                </label>
                <label for="mattien">Mặt tiền<select name="" id="mattien">
                        <option selected value="1">1</option>
                        <option value="100000">2</option>
                    </select>
                </label>
                <label>Chiều rộng (m)<input type="number" id="chieurong" /></label>
                <label>Chiều dài (m)<input type="number" id="chieudai" /></label>
                <label>Số tầng <input value="1" type="number" id="tang" /></label>
                <label for="hem">Hẻm<select name="" id="hem">
                        <option selected value="0">Rộng hơn 5m</option>
                        <option value="1">Rộng từ 3m - 5m</option>
                        <option value="2">Nhỏ hơn 3m</option>
                    </select>
                </label>
                <label for="santhuong">Sân thượng<select name="" id="santhuong">
                        <option selected value="0">Không</option>
                        <option value="30">Sân thượng</option>
                        <option value="50">Sân thượng có mái</option>
                    </select>
                </label>
                <label for="mong">Móng<select name="" id="mong">
                        <option selected value="50">Móng băng</option>
                        <option value="40">Móng cọc(Móng đài)</option>
                        <option value="30">Móng đơn</option>
                    </select>
                </label>
                <label for="tangham">Hầm<select name="" id="tangham">
                        <option selected value="1">Không</option>
                        <option value="150%">Có</option>
                    </select>
                </label>
                <label for="mai">Mái<select name="" id="mai">
                        <option selected value="30">Mái tôn</option>
                        <option value="40">Mái BTCT</option>
                    </select>
                </label>
                <div class="tinhtien"><button id="btn_tinhtien">tính tiền</button></div>
            </section>
            <div class="result"></div>
        </div>
    </div>
    <footer>

        <div class="container">
            <div class="block_info">
                <ul class="info">
                    <li><i class="far fa-envelope"></i>xaydunghoangduc@gmail.com</li>
                    <li><i class="fas fa-phone-volume"></i> +84 123 456 789</li>
                    <li><i class="fas fa-map-marker-alt"></i> Biên Hòa Đồng Nai</li>
                </ul>
                <ul class="social_links">
                    <li><a href="https://www.facebook.com/xaydunghoangduc" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="block_links">
                <div class="about_us">
                    <h2>Về Chúng Tôi</h2>
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
                    <p>Chúng tôi yêu công việc của mình – mỗi giây phút kiến tạo vẻ đẹp của dự án là mỗi phút giây làm
                        đẹp cuộc đời…</p>
                </div>
                <div class="menu">
                    <h2>Menu</h2>
                    <ul>
                        <li><a href="<?= base_url('home/index/about_us') ?>">Về chúng tôi</a></li>
                        <li><a href="<?= base_url('news/may-moc-thiet-bi') ?>">Máy móc & thiết bị</a></li>
                        <li><a href="<?= base_url('news/du-an-thi-cong') ?>">Dự án thi công</a></li>
                        <li><a href="<?= base_url('news/mau-thiet-ke') ?>">Mẫu thiết kế</a></li>
                        <li><a href="<?= base_url('contact') ?>">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.7184291097665!2d106.8669398142885!3d10.984612858321302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174ddb237f9dd59%3A0x3ff1538c511f05d7!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBDw7RuZyBOZ2jhu4cgxJDhu5NuZyBOYWk!5e0!3m2!1svi!2s!4v1624525200104!5m2!1svi!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="copyright">
                <p>Đây là đồ án tốt nghiệp của Đức và Hoàng.</p>
            </div>
        </div>
    </footer>
    <script>
    $(document).ready(function() {
        $('header nav li').removeClass('active');
        $('header nav li').each(function() {
            if ($(this).find('a').attr('href') == window.location.href) {
                $(this).addClass('active');
                return false;
            }
        });
    });

    //Bấm nút tính tiền
    $(document).on("click", "#btn_tinhtien", function(e) {
        e.preventDefault();

        //Lấy dữ liệu người dùng nhập vào
        let ui_loainha = parseInt($("#loainha").val());
        let ui_chiphi = $("#chiphi").val();
        let ui_mucdautu = parseInt($("#mucdautu").val());
        let ui_mattien = $("#mattien").val();
        let ui_chieurong = $("#chieurong").val();
        let ui_chieudai = $("#chieudai").val();
        let ui_tang = parseInt($("#tang").val());
        let ui_hem = parseInt($("#hem").val());
        let ui_santhuong = parseInt($("#santhuong").val());
        let ui_mong = parseInt($("#mong").val());
        let ui_tangham = $("#tangham").val();
        let ui_mai = parseInt($("#mai").val());

        //Xử lý
        let txt2 = "";
        if (ui_chieudai != "" && ui_chieurong != "") {
            ui_chieurong = parseFloat(ui_chieurong);
            ui_chieudai = parseFloat(ui_chieudai);
            let dientich = ui_chieudai * ui_chieurong;
            txt2 += "<p>Diện tích: <span>" + dientich + "</span> m<sup>2</sup></p>";
            txt2 += "<p>Số tầng: <span>" + ui_tang + "</span></p>";
            let dttang = 0;
            if (ui_tang >= 2) {
                dttang = (ui_tang - 1) * dientich;
                txt2 += "<p>Diện tích tầng: <span>" + dttang + "</span> m<sup>2</sup></p>";
            }
            let dtmong = 0;
            switch (ui_mong) {
                case 50:
                    dtmong = dientich * 0.5;
                    break;
                case 40:
                    dtmong = dientich * 0.4;
                    break;
                case 30:
                    dtmong = dientich * 0.3;
                    break;
            }

            txt2 += "<p>Diện tích <span>" + $("#mong option:selected").text() + "</span>: <span>" + dtmong +
                "</span> m<sup>2</sup></p>";
            let dtsanthuongmai = 0;
            if (ui_santhuong == 0) {
                dtsanthuongmai = (ui_mai / 100) * dientich;
            } else {
                dtsanthuongmai = (ui_santhuong / 100) * dientich;
            }
            txt2 += "<p>Diện tích sân thượng / mái: <span>" + dtsanthuongmai + "</span> m<sup>2</sup></p>";
            let tongdientich = dientich + dtmong + dtsanthuongmai + dttang;
            txt2 += "<p>Tổng diện tích: <span>" + tongdientich + "</span> m<sup>2</sup></p>";
            let chiphi = 0;
            if (ui_chiphi == "phan-tho") {
                chiphi = ui_loainha;
            } else if (ui_chiphi == "tron-goi") {
                chiphi = ui_mucdautu;
            }
            txt2 += "<p>Chi phí: <span>" + chiphi + "</span> <sup>đ</sup></p>";
            let tongchiphi = chiphi * tongdientich;
            let hem = 0;
            switch (ui_hem) {
                case 0:
                    hem = 0;
                    break;
                case 1:
                    hem = 2000000;
                    break;
                case 2:
                    hem = 5000000;
                    break;
            }
            tongchiphi += hem;
            txt2 += "<p>Tổng chi phí: <span>" + tongchiphi + "</span> <sup>đ</sup></p>";
        } else {
            txt2 += "<p>Vui lòng nhập chiều dài và chiều rộng</p>";
        }
        $(".result").html(txt2);
    });
    </script>
    <a id="call" href="tel:+84123456789"><i class="fas fa-phone"></i></a>
</body>

</html>