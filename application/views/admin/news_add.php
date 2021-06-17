<section id="news_add">
    <form action="<?= base_url('admin/news/add_news') ?>" method="post">
        <div>
            <label for=""> Tên bài viết
                <input type="text" name="name">
            </label>
        </div>
        <div>
            <label for=""> Hình ảnh
                <img src="<?= base_url('assets/images/no_image.jpg') ?>" id="image">
                <input type="text" name="image" id="image-link">
                <button id="choose_image">Chọn hình ảnh</button>
            </label>
        </div>
        <div>
            <label for=""> Mô tả ngắn
                <input type="text" name="description">
            </label>
        </div>
        <div>
            <label for=""> Nội dung
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </label>
        </div>
        <div>
            <button type="submit">Thêm mới</button>
        </div>
    </form>
</section>
<script>
var editor = CKEDITOR.replace('content');
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
</script>