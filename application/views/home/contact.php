<div id="contact">
    <h2>Liên hệ</h2>
    <section class="contact_mail">
        <div class="container">
            <div class="left">
                <h3>GET OUR CONTACTS FROM HERE</h3>
                <div class="blocks">
                    <div class="block">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="block_content">
                            <h4>Our location</h4>
                            <p class="content">Bệnh viện tâm thần</p>
                        </div>
                    </div>
                    <div class="block">
                        <div class="icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="block_content">
                            <h4>Phone number</h4>
                            <p class="content">+84 123 456 789</p>
                        </div>
                    </div>
                    <div class="block">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="block_content">
                            <h4>Email address</h4>
                            <p class="content">xamlon@gmail.com</p>
                        </div>
                    </div>
                </div>
                <ul class="social_icon">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="right">
                <span>Contact us</span>
                <h3>GET IN TOUCH WITH US</h3>
                <form>
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="phone" placeholder="Phone">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" rows="5" placeholder="Message"></textarea>
                    <button>Send message</button>
                </form>
            </div>
        </div>
    </section>
    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.9698146637315!2d106.843883314338!3d10.965650958672049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174dc3cc88199a9%3A0x520dab10ebb6cfc8!2zQuG7h25oIFZp4buHbiBUw6JtIFRo4bqnbiBUcnVuZyDGr8ahbmcgMg!5e0!3m2!1svi!2s!4v1624004818377!5m2!1svi!2s"
            height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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