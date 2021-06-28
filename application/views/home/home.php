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
    <main id="home">
        <div class="content">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
            <h1>Chúng tôi là<br><span>xây dựng Hoàng Đức</span></h1>
            <div class="home_links">
                <a href="<?= base_url('about-us') ?>">
                    <img src="<?= base_url('assets/images/aboutus.png') ?>" alt="Về chúng tôi">
                    <h2>Về chúng tôi</h2>
                </a>
                <a href="<?= base_url('news/du-an-thi-cong') ?>">
                    <img src="<?= base_url('assets/images/design.png') ?>" alt="Thiết kế">
                    <h2>Dự án thi công</h2>
                </a>
                <a href="<?= base_url('news/may-moc-thiet-bi') ?>">
                    <img src="<?= base_url('assets/images/contract.png') ?>" alt="Thi công">
                    <h2>Máy móc thiết bị</h2>
                </a>
            </div>
        </div>
    </main>
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
</body>

</html>