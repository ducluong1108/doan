<section id="category">
    <div class="container">
        <h2>Danh mục bài viết</h2>
        <div class="add_category">
            <h3>Thêm mới danh mục</h3>
            <input type="text" name="name" placeholder="Nhập tên danh mục">
            <button>Thêm mới</button>
        </div>
        <div class="all_category">
            <h3>Tất cả danh mục</h3>
            <table id="table_category">
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Đường dẫn</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                $stt = 1;
                foreach ($category as $item) :
                ?>
                <tr>
                    <td><?= $stt ?></td>
                    <td class="name"><?= $item['name'] ?></td>
                    <td><?= $item['link'] ?></td>
                    <td>
                        <a href="#" value="<?= $item['category_id'] ?>" class="btn edit"><i class="fas fa-edit"></i></a>
                        <a href="#" value="<?= $item['category_id'] ?>" class="btn delete"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php
                    $stt++;
                endforeach;
                ?>
            </table>
        </div>
        <div id="edit_category">
            <div class="content">
                <input type="hidden">
                <label for="">Tên:<br><input type="text"></label>
                <button>Sửa</button>
                <button>Huỷ</button>
            </div>
        </div>
    </div>
</section>
<script>
//Thêm danh mục
$('.add_category button').click(function(e) {
    e.preventDefault();
    if ($('.add_category input').val() != '') {
        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/category/add_category') ?>",
            data: {
                name: $('.add_category input').val()
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
    } else {
        toastr["error"]("Bạn phải nhập tên danh mục.");
    }

});
//Xoá danh mục
$('a.btn.delete').click(function(e) {
    e.preventDefault();
    let cfm = confirm('Xoá danh mục: ' + $(this).parents('tr').find('.name').text());
    if (cfm) {
        $.ajax({
            type: "Post",
            url: "<?= base_url('admin/category/delete_category') ?>",
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
//Sửa
$('a.btn.edit').click(function(e) {
    e.preventDefault();
    $('#edit_category').addClass('show');
    $('#edit_category input[type=hidden]').val($(this).attr('value'));
    $('#edit_category input[type=text]').val($(this).parents('tr').find('.name').text());
});
//Bấm nút huỷ
$('#edit_category button:nth-of-type(2)').click(function(e) {
    e.preventDefault();
    $('#edit_category').removeClass('show');
});
//Bấm nút sửa
$('#edit_category button:nth-of-type(1)').click(function(e) {
    e.preventDefault();
    if ($('#edit_category input[type=text]').val() != '') {
        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/category/edit_category') ?>",
            data: {
                id: $('#edit_category input[type=hidden]').val(),
                name: $('#edit_category input[type=text]').val()
            },
            dataType: "json",
            success: function(data) {
                if (data.status == 1) {
                    toastr["success"](data.message);
                    $('#edit_category button:nth-of-type(2)').trigger('click');
                } else {
                    toastr["error"](data.message);
                }
            }
        });
    } else {
        toastr["error"]("Tên không được để trống");
    }
});
</script>