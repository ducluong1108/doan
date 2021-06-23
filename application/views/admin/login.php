<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Đăng nhập</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    <section id="login">
        <div class="content">
            <label for="uname">TÊN ĐĂNG NHẬP:</label>
            <input type="text" id="uname" name="uname"><br><br>
            <label for="pname">MẬT KHẨU:</label>
            <input type="password" id="pname" name="pname"><br><br>
            <button type="submit" value="">Đăng nhập</button>
        </div>
    </section>
    <script>
    $(".content button").click(function(e) {
        e.preventDefault();
        if ($(".content input[name=uname]").val() != "" && $(".content input[name=pname]").val() != "") {
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/login/login') ?>",
                data: {
                    uname: $(".content input[name=uname]").val(),
                    pname: $(".content input[name=pname]").val()
                },
                dataType: "json",
                success: function(data) {
                    if (data.status == 1) {
                        toastr["success"](data.message);
                        setTimeout(function() {
                            window.location.replace('<?= base_url('admin') ?>');
                        }, 1500);
                    } else {
                        toastr["error"](data.message);
                    }
                }
            });
        } else {
            toastr["error"]("Tài khoản và mật khẩu không được để trống");
        }
    });
    </script>
</body>

</html>