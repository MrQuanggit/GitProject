<?php
include('./database/database.php');
session_start();
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM quangcasestudy.products where product_name like '%$search%'";
    $product = $pdo->query($query);
} else {
    // tổng record
    $query = "SELECT count(product_id) as total FROM quangcasestudy.products";
    $product = $pdo->query($query);
    $row = $product->fetch(PDO::FETCH_ASSOC);
    $total_records = $row['total'];
    // limit và curren page
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 9;
    // tổng trang
    $total_page = ceil($total_records / $limit);
    // 
    if ($current_page > $total_page) {
        $current_page = $total_page;
    } else if ($current_page < 1) {
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;
    // 
    $query2 = "SELECT * FROM quangcasestudy.products LIMIT $start, $limit";
    $product = $pdo->query($query2);
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
    <!-- Chi tiết Category -->
    <div style="padding-top: 100px;">
        <div class="container">
            <div class="col12">
                <div class="text-center mb-50">
                    <h5 style="font: bold; font-size: 2em;">TOÀN BỘ SẢN PHẨM</h5>
                    <form action="" method="post">
                        <input class="btn btn-outline-light" type="text" name="search" id="" placeholder="Nhập tên ..">
                        <button style="height: 40px;" class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <hr>
                </div>
            </div>
            <div class="row">
                <?php while ($row = $product->fetch(PDO::FETCH_ASSOC)) { ?>
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
        <?php if (!isset($_POST['search'])) { ?>
            <div class="pagination">
                <?php
                if ($current_page > 1 && $total_page > 1) {
                    echo '<a style="padding: 10px" href="search.php?page=' . ($current_page - 1) . '"><i class="fas fa-chevron-left"></i></a>';
                }
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $current_page) {
                        echo '<span style="padding: 10px">' . $i . '</span>';
                    } else {
                        echo '<a style="padding: 10px" href="search.php?page=' . $i . '">' . $i . '</a>';
                    }
                }
                if ($current_page < $total_page && $total_page > 1) {
                    echo '<a style="padding: 10px" href="search.php?page=' . ($current_page + 1) . '"><i class="fas fa-chevron-right"></i></a>';
                }
                ?>
            </div>
        <?php } ?>
    </div>
    <!-- Footer -->
    <?php include __DIR__ . "./layout/footer.php" ?>
</body>

</html>