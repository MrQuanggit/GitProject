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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-branch" href="#"><img src="./image/Logo.svg"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nam</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nữ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sale off</a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>
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
  <div class="container-fluid padding">	
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Contact us</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>	
<footer>
	<div class="container-fluid padding">	
		<div class="row text-center">
			<div class="col-md-3">
				<img src="./image/Logo.svg">
				<hr class="light">
				<p>111-222-3333</p>
				<p>mymail@gmail.com</p>
				<p>28 Nguyen Tri Phuong, Hue, Vietnam</p>
			</div>
			<div class="col-md-3">				
				<hr class="light">
				<h5>Giờ mở cửa</h5>
				<hr class="light">
				<p>Thứ hai-Thứ 6: 8am - 5pm</p>
				<p>Cuối tuần: 8am - 12am</p>
			</div>
			<div class="col-md-3">				
				<hr class="light">
				<h5>Services</h5>
				<hr class="light">
				<p>Dịch vụ</p>
				<p>Giao hàng tận nơi</p>
				<p>Bảo hành 6 tháng</p>
      </div>
      <div class="col-md-3">				
				<hr class="light">
				<h5>Services</h5>
				<hr class="light">
				<img src="./image/Store.svg" alt="">
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>2020 &copy; DQ Sneakers<img src="./image/Logo.svg" style="width: 15px"></h5>
			</div>
		</div>
	</div>
</footer>
</body>

</html>