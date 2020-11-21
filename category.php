<?php
include('./database/products.php');
session_start();
$id = $_GET['id'];
$products = $productDB -> getByCategory($id);
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
        <div class="container">
            <div class="col12">
                <div class="text-center mb-50">
                    <h5 style="font: bold; font-size: 2.5em;">CÁC DÒNG SẢN PHẨM CỦA DQ SNEAKERS</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="list-group">
                        <a href="category.php?id=<?= 'VINTAS' ?>" class="list-group-item list-group-item-action list-group-item-primary">VINTAS</a>
                        <a href="category.php?id=<?= 'BASAS' ?>" class="list-group-item list-group-item-action list-group-item-secondary">BASAS</a>
                        <a href="category.php?id=<?= 'URBAS' ?>" class="list-group-item list-group-item-action list-group-item-success">URBAS</a>
                        <a href="category.php?id=<?= 'ANANAS TRACK 6' ?>" class="list-group-item list-group-item-action list-group-item-danger">TRACK 6</a>
                        <a href="category.php?id=<?= 'SWEATSHIRT' ?>" class="list-group-item list-group-item-action list-group-item-warning">SWEATSHIRT</a>
                        <a href="category.php?id=<?= 'BASIC TEE' ?>" class="list-group-item list-group-item-action list-group-item-info">BASIC TEE & VỚ</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-9">
                    <div class="row">
                    <?php foreach ($products as $row) { ?>
                            <div class="col-sm-6 col-md-4 element ">
                                <div>
                                    <a href="product.php?id=<?= $row['product_id'] ?>">
                                        <div class="image">
                                            <img class="image1" style="width: 100%;" src="<?= $row['img'] ?>" alt="">
                                            <img class="image2" style="width: 100%;" src="<?= $row['img2'] ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="content">
                                    <h5><?= $row['product_name'] ?></h5>
                                    <div class="">
                                        <div>
                                            <h6><?= $row['category_style'] ?></h6>
                                            <h5><?= number_format($row['priceEach']) ?> VNĐ</h5>
                                        </div>
                                    </div>
                                    <a class="btn btn-outline-secondary" href="product.php?id=<?= $row['product_id'] ?>">Xem chi tiết</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <!-- Footer -->
    <?php include __DIR__ . "./layout/footer.php" ?>
</body>

</html>