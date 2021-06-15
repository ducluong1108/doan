<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xây dựng Hoàng Đức - <?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div class="logo">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
        </div>
        <ul class="links">
            <li><a href="<?= base_url() ?>"></a></li>
            <li><a href="<?= base_url() ?>"></a></li>
            <li><a href="<?= base_url() ?>"></a></li>
            <li><a href="<?= base_url() ?>"></a></li>
            <li><a href="<?= base_url() ?>"></a></li>
        </ul>
    </nav>
    <main>
        <?php $this->load->view($view); ?>
    </main>
    <footer></footer>
</body>

</html>