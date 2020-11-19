<?php session_start(); ?>
<?php
include('./database/database.php');
$id = $_GET['id'];
$query = "SELECT * FROM quangcasestudy.products INNER JOIN images ON products.product_id = images.product_id where products.product_id = $id;";
$product = $pdo->query($query);
$query2 = "SELECT * FROM quangcasestudy.products where category_style = (select category_style from quangcasestudy.products  where product_id = $id);";
$category = $pdo->query($query2);
$conn = "UPDATE quangcasestudy.products SET products.view = products.view+1 WHERE (product_id = $id);";
$pdo->query($conn);
$img = "SELECT * FROM quangcasestudy.images where product_id = $id;";
$pdo->query($img);

// Add Product vào Giỏ hàng
if (isset($_POST['quantity'])) {
    $qty = $_POST['quantity'];
    if (isset($_SESSION['cart'])) {
        if ($_SESSION['cart'][$id]) {
            $_SESSION['cart'][$id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$id]['qty'] = $qty;
        }
    } else {
        $_SESSION['cart'][$id]['qty'] = $qty;
    }
}
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
    <!-- Chi tiết Product -->
    <div style="padding-top: 80px;">
        <div class="container">
            <div class="col12">     
                <div class="text-left mb-50">
                    <?php while ($row = $product->fetch(PDO::FETCH_ASSOC)) { ?>
                        <h5><?= $row['category_style'] ?> | <?= $row['product_name'] ?></h5>
                        <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-7">
                    <div class="image">
                        <img class="image" id="expandedImg" style="width: 100%;" src="<?= $row['img'] ?>" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12">
                    <div>
                        <img class="subimage" src="<?= $row['img'] ?>" alt="" onclick="myFunction(this);">
                        <img class="subimage" src="<?= $row['img2'] ?>" alt="" onclick="myFunction(this);">
                        <img class="subimage" src="<?= $row['img21'] ?>" alt="" onclick="myFunction(this);">
                        <img class="subimage" src="<?= $row['img31'] ?>" alt="" onclick="myFunction(this);">
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5">
                    <h5 style="font: bold; font-size: 2em;"><?= $row['product_name'] ?></h5>
                    <hr>
                    <h5 style="color: #ee5253"><?= number_format($row['priceEach']) ?> VNĐ</h5>
                    <hr>
                    <p><?= $row['product_description'] ?></p>
                    <hr>
                    <span>Số Lượng:</span>
                    <form action="" method="POST">
                        <input style="text-align: center;" type="text" value="1" name="quantity" size="3">
                        <hr>
                        <input type="submit" class="btn btn-outline-success" style="width: 100%" value="Thêm vào giỏ hàng"></input>
                    </form>
                </div>
            </div>
        <?php } ?>
        <hr>
        <div class="col12">
            <div class="text-center mb-50">
                <h5 style="font: bold; font-size: 2.5em;">Sản phẩm cùng thể loại</h5>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php while ($row = $category->fetch(PDO::FETCH_ASSOC)) { ?>
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
        <hr>
        </div>
        <!-- Footer -->
        <?php include __DIR__ . "./layout/footer.php" ?>
</body>

</html>
<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        expandImg.src = imgs.src;
        expandImg.parentElement.style.display = "block";
    }
</script>