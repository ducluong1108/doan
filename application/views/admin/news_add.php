<section id="news_add">
    <div class="container">
        <h2>Thêm mới bài viết</h2>
        <form action="<?= base_url('admin/news/add_news') ?>" method="post">
            <div class="left">
                <label>Hình ảnh</label>
                <img src="<?= base_url('assets/images/no_image.jpg') ?>" id="image">
                <div>
                    <input type="text" name="image" id="image-link" readonly>
                    <button id="choose_image">Chọn hình ảnh</button>
                </div>
            </div>
            <div class="right">
                <label>Tên bài viết</label>
                <input type="text" name="name" required>
                <label>Danh mục</label>
                <select name="category" loaded="false">
                    <option value="0" selected>Chọn danh mục</option>
                </select>
                <label>Mô tả ngắn</label>
                <textarea name="description"></textarea>
            </div>
            <div class="content">
                <label for="content"> Nội dung</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="btn"><button type="submit" name="submit">Thêm mới</button></div>
        </form>
    </div>
</section>
<script>
var editor = CKEDITOR.replace('content');
CKEDITOR.config.height = 500;
CKFinder.setupCKEditor(editor);

$('#choose_image').click(function(e) {
    e.preventDefault();
    selectFileWithCKFinder('image-link', 'image');
});

function selectFileWithCKFinder(imageInput, image) {
    CKFinder.modal({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function(finder) {
            finder.on('files:choose', function(evt) {
                var file = evt.data.files.first();
                var output = document.getElementById(imageInput);
                output.value = file.getUrl();
                var img = document.getElementById(image);
                img.src = file.getUrl();
            });
        }
    });
}

$('select[name=category]').focus(function() {
    if ($(this).attr('loaded') == 'false') {
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/category/fetch_category') ?>",
            dataType: "json",
            success: function(data) {
                var txt = "";
                for (let i in data) {
                    txt += "<option value='" + data[i].category_id + "'>" + data[i].name +
                        "</option>";
                }
                $('select[name=category]').append(txt);
                $('select[name=category]').attr('loaded', 'true');
            }
        });
    }
});
</script>