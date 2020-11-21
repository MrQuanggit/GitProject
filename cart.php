<?php session_start(); 
include('./database/products.php');
$total = 0;
if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case 'decrease':
      $qty = $_GET['qty'];
      $productId = $_GET['productId'];
      $_SESSION['cart'][$productId]['qty']--;
      if ($_SESSION['cart'][$productId]['qty'] < 0) {
        unset($_SESSION['cart'][$productId]);
        break;
      }
      break;
    case 'increase':
      $qty = $_GET['qty'];
      $productId = $_GET['productId'];
      $_SESSION['cart'][$productId]['qty']++;
      break;
    case 'delete':
      $productId = $_GET['productId'];
      unset($_SESSION['cart'][$productId]);
      break;
    case 'deleteAll':
      unset($_SESSION['cart']);
      break;
  }
  header("location: cart.php");
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
  <div class="container" style="padding-top: 90px;">
    <div class="col12">
      <div class="title text-center mb-50">
        <h1>Danh sách mua hàng</h3>
          <hr>
      </div>
    </div>

    <div class="col12" style="width:100%; text-align: center">
      <form action="fadd.php" method="post">
        <?php if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
          echo '<img src="./image/empty-cart.png" alt="">';
        } else { ?>
          <table class="table" style="width:100%; text-align: center">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá tiền</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thành tiền</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($_SESSION['cart'] as $key => $value) :
                $row = $productDB->getProduct($key);
                $total += ($row['priceEach'] * $value['qty'])
              ?>
                <tr>
                  <td><img style="width: 100px;" src="<?= $row['img'] ?>" alt=""></td>
                  <td><?= $row['product_name'] ?></td>
                  <td><?= number_format($row['priceEach']) ?> VNĐ</td>
                  <td><a style="padding: 0 10px" href="?action=decrease&qty=<?= $value['qty'] ?>&productId=<?= $key ?>"><i class="fas fa-minus"></i></a>
                    <?php echo $value['qty'] ?>
                    <a style="padding: 0 10px" href="?action=increase&qty=<?= $value['qty'] ?>&productId=<?= $key ?>"><i class="fas fa-plus"></i></a></td>
                  <td><?= number_format($row['priceEach'] * $value['qty']) ?> VNĐ</td>
                  <input type="hidden" name="priceEach" value="<?php echo $value['qty'] ?>">
                  <td><a href="?action=delete&productId=<?= $key ?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
              <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Tổng tiền:</th>
                <th scope="col"><?= number_format($total) ?> VNĐ</th>
                <th scope="col"></th>
              </tr>
            </tfoot>
          </table>
        <?php } ?>
    </div>
    <hr>
    <div class="col12">
      <a style="float: left;" href="category.php?id=VINTAS" class="btn btn-outline-info">Quay lại mua hàng</a>
      <a style="float: right;" id="deleteCart" href="?action=deleteAll" class="btn btn-outline-danger">Xóa hết</a>
      <div class="clearfix"></div>
    </div>
    <div class="col12 text-center">
      <h4>Thông tin khách hàng</h4>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default"><i class="far fa-user"></i></span>
        </div>
        <input type="text" name="name" placeholder="Nhập tên .." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-phone"></i></span>
        </div>
        <input type="text" name="phone" placeholder="Nhập số điện thoại .." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default"><i class="far fa-envelope"></i></span>
        </div>
        <input type="text" name="mail" placeholder="Nhập email .." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default"><i class="far fa-map"></i></span>
        </div>
        <input type="text" name="adress" placeholder="Nhập địa chỉ .." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default"><i class="far fa-sticky-note"></i></span>
        </div>
        <input type="text" name="comment" placeholder="Ghi chú .." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div>
        <input style="width: 70%" type="submit" class="btn btn-success" value="ĐẶT HÀNG NGAY">
      </div>
    </div>
    </form>
  </div>
  <hr>
  <!-- Footer -->
  <?php include __DIR__ . "./layout/footer.php" ?>
</body>

</html>