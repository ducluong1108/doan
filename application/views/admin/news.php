<section id="news">
    <div class="container">
        <h3>Tất cả bài viết</h3>
        <table id="table_news">
            <tr>
                <th>ID</th>
                <th>TÊN</th>
                <th>HÌNH ẢNH</th>
                <th>DANH MỤC</th>
                <th class="date">NGÀY ĐĂNG</th>
                <th>THAO TÁC</th>
            </tr>
            <?php
            foreach ($news as $row) :
            ?>
            <tr>
                <td><?= $row['news_id'] ?></td>
                <td class="name"> <?= $row['name'] ?></td>
                <td> <img src="<?= $row['image'] ?>" alt=""> </td>
                <td><?= $row['category'] ?></td>
                <td><?= $row['publish'] ?></td>
                <td>
                    <a href="#" class="btn edit"><i class="fas fa-edit"></i></a>
                    <a href="#" value="<?= $row['news_id'] ?>" class="btn delete"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach;
            ?>
        </table>
    </div>
</section>
<script>
//Xoá bài viết
$('a.btn.delete').click(function(e) {
    e.preventDefault();
    let cfm = confirm('Xoá bài viết: ' + $(this).parents('tr').find('.name').text());
    if (cfm) {
        $.ajax({
            type: "Post",
            url: "<?= base_url('admin/news/delete_news') ?>",
            data: {
                id: $(this).attr('value')
            },
            dataType: "json",
            success: function(data) {
                if (data.status == 1) {
                    toastr["success"](data.message);
                } else {
                    toastr["error"](data.message);
                }
            }
        });
    }
});
</script>