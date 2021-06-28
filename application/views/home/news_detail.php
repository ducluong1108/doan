<?php $news = $news[0]; ?>
<section id="news_detail">
    <div class="container">
        <h2><?= $news['name'] ?></h2>
        <div class="content">
            <?= $news['content'] ?>
        </div>
        <div class="relative_news">
            <div class="contact">
                <h3>Liên hệ với chúng tôi</h3>
                <p><i class="far fa-envelope"></i> xaydunghoangduc@gmail.com</p>
                <p><i class="fas fa-phone-volume"></i> +84 123 456 789</p>
                <p><i class="fas fa-map-marker-alt"></i> Biên Hòa Đồng Nai</p>
            </div>
            <h3>Bài viết liên quan</h3>
            <div class="items">
                <?php foreach ($relative_news as $item) : ?>
                <a class="item" href="<?= $item['link'] ?>">
                    <img src="<?= $item['image'] ?>">
                    <h4><?= $item['name'] ?></h4>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>