 <!-- Navigation -->
 <!-- <nav class="navbar"> -->

 <div class="header" class="home">
   <h2 class="logo"><img src="./image/Logo.svg" style="width:80%" alt=""></h2>
   <input type="checkbox" id="check" />
   <label for="check" class="show-menu-btn">
     <i class="fas fa-ellipsis-h"></i>
   </label>
   <ul class="menu">
     <a href="index.php">TRANG CHỦ</a>
     <a href="category.php?id=VINTAS">SẢN PHẨM</a>
     <a href="#settable">CHÚNG TÔI</a>
     <a href=""><i class="fas fa-search"></i></a>
     <a href="cart.php"><i class="fas fa-shopping-cart"></i>(<span><?php if(isset($_SESSION['cart'])){
      echo count($_SESSION['cart']);
     } else { echo "0"; }  ?></span>)</a>
     <label for="check" class="hide-menu-btn">
       <i class="fas fa-times"></i>
     </label> 
   </ul>
 </div>
 <!-- </nav> -->