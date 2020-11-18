<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DQ Sneakers</title>
    <!-- Import Boostrap css, js, font awesome here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <link rel="shortcut icon" href="./image/Logo.svg">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php include __DIR__ . "./layout/header.php" ?>
    <!-- Chi tiết Category -->
    <div style="padding-top: 100px;">
        <div class="container text-center">
            <div class="col12">
                <div class="text-center mb-50">
                    <h5 style="font: bold; font-size: 2.5em;">ĐƠN ĐẶT HÀNG THÀNH CÔNG</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <img class="img" src="./image/Store.svg">
                </div>
                <div class="col-sm-6 col-md-8 text-left">
                    <h4>Cám ơn bạn đã mua hàng tại DQ Sneakers</h4>
                    <p>Mã số đơn hàng của bạn: <span class="btn-outline-warning">CG256398</span></p>
                    <p>Thời gian giao hàng dự kiến vào Thứ Sáu, 27/11/2020</p>
                    <div style="float: left; font-size: 40px; color: green; padding-right: 10px;">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div>
                        <p>Nhằm giúp việc xử lí đơn hàng được nhanh chóng, chúng tôi xin phép gọi điện cho các bạn 
                            để xác nhận lại thông tin đơn hàng và gửi mail về mail của mình. Mọi thắc mắc vui lòng liên hệ đến chúng tôi: 111-222-3333</p>
                    </div>
                    <p>Hy vọng các bạn có một đôi giày thật ưng ý và một ngày mới thật tuyệt vời !</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col12">
                <div class="text-center mb-50">
                    <img class="image" src="./image/giao-hàng-1.gif" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include __DIR__ . "./layout/footer.php" ?>
</body>

</html>