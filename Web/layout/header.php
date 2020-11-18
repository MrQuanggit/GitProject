 <!-- Navigation -->
 <!-- <nav class="navbar"> -->
 <div class="header" class="home">
   <a href="index.php" class="logo"><img src="./image/Logo.svg" style="width:80%" alt=""></a>
   <input type="checkbox" id="check" />
   <label for="check" class="show-menu-btn">
     <i class="fas fa-ellipsis-h"></i>
   </label>
   <ul class="menu">
     <a href="index.php">TRANG CHỦ</a>
     <a href="category.php?id=VINTAS">SẢN PHẨM</a>
     <a href="#footer">CHÚNG TÔI</a>
     <a href="./search.php"><i class="fas fa-search"></i></a>
     <a href="./cart.php"><i class="fas fa-shopping-cart"></i>
       <span>(<?php if (isset($_SESSION['cart'])) {
                $qty = 0;
                foreach ($_SESSION['cart'] as $value) {
                  $qty += $value['qty'];
                }
                if ($qty == 0) {
                  echo "0";
                } else {
                  echo "$qty";
                }
              } else {
                echo "0";
              } ?>)</span></a>
     <label for="check" class="hide-menu-btn">
       <i class="fas fa-times"></i>
     </label>
   </ul>
 </div>
 <!-- </nav> -->