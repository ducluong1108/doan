<div id="contact">
    <h2>Liên hệ</h2>
    <section class="contact_mail">
        <div class="container">
            <div class="left">
                <h3>LIÊN HỆ VỚI CHÚNG TÔI</h3>
                <div class="blocks">
                    <div class="block">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="block_content">
                            <h4>Địa chỉ</h4>
                            <p class="content">Biên Hòa Đồng Nai</p>
                        </div>
                    </div>
                    <div class="block">
                        <div class="icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="block_content">
                            <h4>Số điện thoại</h4>
                            <p class="content">+84 123 456 789</p>
                        </div>
                    </div>
                    <div class="block">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="block_content">
                            <h4>Email</h4>
                            <p class="content">xaydunghoangduc@gmail.com</p>
                        </div>
                    </div>
                </div>
                <ul class="social_icon">
                    <li><a href="<?= base_url('https://www.facebook.com/xaydunghoangduc/') ?>"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="right">
                <span>Liên hệ</span>
                <h3>HÃY LIÊN HỆ VỚI CHÚNG TÔI</h3>
                <form>
                    <input type="text" name="name" placeholder="Tên">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="phone" placeholder="Số điện thoại">
                    <input type="text" name="subject" placeholder="Tiêu đề">
                    <textarea name="message" rows="5" placeholder="Lời nhắn"></textarea>
                    <button>Gửi thông tin</button>
                </form>
            </div>
        </div>
    </section>
    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.7184291097665!2d106.8669398142885!3d10.984612858321302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174ddb237f9dd59%3A0x3ff1538c511f05d7!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBDw7RuZyBOZ2jhu4cgxJDhu5NuZyBOYWk!5e0!3m2!1svi!2s!4v1624525200104!5m2!1svi!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</div>
<script>
$('#contact form button').click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?= base_url('mail/receive_mail') ?>",
        data: {
            name: $('#contact form input[name=name]').val(),
            email: $('#contact form input[name=email]').val(),
            phone: $('#contact form input[name=phone]').val(),
            subject: $('#contact form input[name=subject]').val(),
            message: $('#contact form textarea').val(),
        },
        dataType: "json",
        success: function(data) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            if (data.status == 1) {
                toastr["success"](data.message);
            } else {
                toastr["error"](data.message);
            }
        }
    });
});
</script>