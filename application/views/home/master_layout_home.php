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
            <section class="section cost">
                <label for="loainha">Chọn Loại Nhà<select name="" id="loainha">
                        <option selected value="2900000">Nhà phố hiện đại</option>
                        <option value="3300000">Nhà phố hiện đại</option>
                        <option value="3300000">Nhà biệt thự hiện đại</option>
                        <option value="3500000">Nhà biệt thự cổ điển</option>
                    </select>
                </label>
                <label for="chiphi">Chi phí xây nhà<select name="" id="chiphi">
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
                <label>Chiều rộng<input type="number" id="chieurong" /></label>
                <label>Chiều dài<input type="number" id="chieudai" /></label>
                <label>Số tầng(Trừ tum, lửng) <input value="1" type="number" id="tang" /></label>
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
        </div>
    </div>
    <footer>

        <div class="container">
            <div class="block_info">
                <ul class="info">
                    <li><i class="far fa-envelope"></i> hoangduc@gmail.com</li>
                    <li><i class="fas fa-phone-volume"></i> +84 123 456 789</li>
                    <li><i class="fas fa-map-marker-alt"></i> Bệnh viện tâm thần</li>
                </ul>
                <ul class="social_links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="block_links">
                <div class="about_us">
                    <h2>About Us</h2>
                    <p>We provide caring and knowledgeable technicians for making people.</p>
                </div>
                <div class="menu">
                    <h2>Menu</h2>
                    <ul>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Máy móc & thiết bị</a></li>
                        <li><a href="#">Dự án thi công</a></li>
                        <li><a href="#">Mẫu nhà</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="last_news">
                    <h2>Last News</h2>
                    <div class="news_item">
                        <a href="#">
                            <img src="<?= base_url('assets/images/news1.jpg') ?>" alt="Bài viết 1">
                            <div class="content">
                                <h3>How to become a successful businessman</h3>
                                <p>June 3, 2020</p>
                            </div>
                        </a>
                    </div>
                    <div class="news_item">
                        <a href="#">
                            <img src="<?= base_url('assets/images/news1.jpg') ?>" alt="Bài viết 1">
                            <div class="content">
                                <h3>How to become a successful businessman</h3>
                                <p>June 3, 2020</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Đây là đồ án tốt nghiệp của Đức Nhóc và Hoàng.</p>
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
    </script>
</body>

</html>