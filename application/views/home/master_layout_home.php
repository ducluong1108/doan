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
                <li><a href="<?= base_url() ?>">Máy móc & thiết bị</a></li>
                <li><a href="<?= base_url() ?>">Dự án thi công</a></li>
                <li><a href="<?= base_url() ?>">Mẫu nhà</a></li>
                <li><a href="<?= base_url('contact') ?>">Liên hệ</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php $this->load->view('home/' . $view); ?>
    </main>
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
</body>

</html>