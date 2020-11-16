<?php
include('./database/database.php');
session_start();
$query = 'SELECT * FROM quangcasestudy.products where product_id IN(1,6,12,13,18,19);';
$top = $pdo->query($query);
$query2 = 'SELECT * FROM quangcasestudy.products where product_id IN(20,21,22);';
$top2 = $pdo->query($query2);
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
  <!-- Carousel -->
  <div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./image/slide3.jpg">
      </div>
      <div class="carousel-item">
        <img src="./image/slide1.jpg">
      </div>
      <div class="carousel-item">
        <img src="./image/slide2.jpg">
      </div>
    </div>
  </div>

  <!-- Top sản phẩm bán chạy -->
  <div class="container">
    <div class="col12">
      <div class="title text-center mb-50">
        <h3>Sản phẩm bán chạy nhất</h3>
      </div>
    </div>
    <div class="">
      <div class="row">
        <?php while ($row = $top->fetch(PDO::FETCH_ASSOC)) { ?>
          <div class="col-sm-6 col-md-4 element ">
            <a href="product.php?id=<?= $row['product_id'] ?>">
              <div class="image">
                <img class="image1" style="width: 100%;" src="<?= $row['img'] ?>" alt="">
                <img class="image2" style="width: 100%;" src="<?= $row['img2'] ?>" alt="">
              </div>
            </a>
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

  <!-- Top sản phẩm bán chạy -->
  <div class="container">
    <div class="col12">
      <div class="title text-center mb-50">
        <h3>Sản phẩm mới - Siêu phẩm TRACK 6</h3>
      </div>
    </div>
    <div class="">
      <div class="row">
        <?php while ($row = $top2->fetch(PDO::FETCH_ASSOC)) { ?>
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

  <div class="container">
    <div class="col12">
      <div class="title text-center mb-50">
        <h3>Tất cả các dòng sản phẩm của DQ Sneakers</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-md-2 element-info ">
        <a type="button" href="category.php?id=<?= 'VINTAS' ?>" class="btn btn-primary">VINTAS</a>
      </div>
      <div class="col-sm-4 col-md-2 element-info ">
        <a type="button" href="category.php?id=<?= 'ANANAS TRACK 6' ?>" class="btn btn-secondary">TRACK 6</a>
      </div>
      <div class="col-sm-4 col-md-2 element-info ">
        <a type="button" href="category.php?id=<?= 'URBAS' ?>" class="btn btn-success">URBAS</a>
      </div>
      <div class="col-sm-4 col-md-2 element-info ">
        <a type="button" href="category.php?id=<?= 'BASAS' ?>" class="btn btn-danger">BASAS</a>
      </div>
      <div class="col-sm-4 col-md-2 element-info ">
        <a type="button" href="category.php?id=<?= 'SWEATSHIRT' ?>" class="btn btn-warning">SWEATSHIRT</a>
      </div>
      <div class="col-sm-4 col-md-2 element-info ">
        <a type="button" href="category.php?id=<?= 'BASIC TEE' ?>" class="btn btn-info">BASIC TEE & VỚ</a>
      </div>
    </div>
  </div>

  <!-- Ảnh phân trang -->
  <div>
    <img style="width: 100%" src="./image/Banner_Clothing.jpg" alt="">
  </div>

  <!-- Bài viết tin tức -->
  <div class="container tintuc">
    <div class="col12">
      <div class="title text-center mb-50">
        <h3>TIN TỨC & BÀI VIẾT</h3>
      </div>
    </div>
    <div class="">
      <div class="row">

        <div class="col-sm-12 col-md-4 element-info">

          <div class="card" style="width: 18rem;">
            <img src="./image/vintas.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">"GIẢI PHẪU" VULCANIZED</h5>
              <p class="card-text">Trong phạm vi bài viết ngắn, hãy cùng nhau tìm hiểu cấu tạo giày Vulcanized Sneaker - loại sản phẩm mà Ananas đã chọn làm "cốt lõi" để theo đuổi trong ...</p>
              <a href="" class="btn btn-primary">Đọc thêm</a>
            </div>
          </div>

        </div>
        <div class="col-sm-12 col-md-4 element-info">

          <div class="card" style="width: 18rem;">
            <img src="./image/urbas.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">URBAS CORLURAY PACK</h5>
              <p class="card-text">Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể ...</p>
              <a href="" class="btn btn-primary">Đọc thêm</a>
            </div>
          </div>

        </div>
        <div class="col-sm-12 col-md-4 element-info">
          <div class="card" style="width: 18rem;">
            <img src="./image/1980.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">VINTAS SAIGON 1980s</h5>
              <p class="card-text">Với bộ 5 sản phẩm, Vintas Saigon 1980s Pack đem đến một sự lựa chọn “cũ kỹ thú vị” cho những người trẻ sống giữa thời hiện đại nhưng lại yêu nét ... </p>
              <a href="" class="btn btn-primary">Đọc thêm</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php include __DIR__ . "./layout/footer.php" ?>
</body>

</html>