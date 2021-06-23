<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xây dựng Hoàng Đức - Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?= base_url('assets/ckfinder/ckfinder.js') ?>"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body id="admin">
    <header>
        <nav class="container">
            <a class="logo" href="<?= base_url('admin') ?>">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
            </a>
            <ul class="menu">
                <li><a href="#">Dashboard</a></li>
                <li>
                    <a href="#">Bài viết</a>
                    <ul class="menu_2">
                        <li><a href="<?= base_url('admin/news') ?>">Tất cả bài viết</a></li>
                        <li><a href="<?= base_url('admin/news/add') ?>">Thêm mới</a></li>
                        <li><a href="<?= base_url('admin/category') ?>">Danh mục bài viết</a></li>
                    </ul>
                </li>
                <li><a href="#" class="file_manage">Quản lý file</a></li>
                <li><a href="<?= base_url('admin/login/logout') ?>">Đăng xuất</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php $this->load->view($view); ?>
    </main>
    <script>
    $('.file_manage').click(function(e) {
        e.preventDefault();
        CKFinder.modal({
            width: 800,
            height: 600,
        });
    });
    </script>
</body>

</html>