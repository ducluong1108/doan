<section id="news_of_category">
    <h2><?= $category ?></h2>
    <div class="container">

        <div class="items">
            <?php foreach ($list_news as $item) : ?>
            <a class="item" href="<?= $item['link'] ?>">
                <img src="<?= $item['image'] ?>">
                <h3><?= $item['name'] ?></h3>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>