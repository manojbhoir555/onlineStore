 <style>
 @import "https://fonts.googleapis.com/css?family=Lato:300,400,700";
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css";
*, *::before, *::after {
    box-sizing: border-box;
}
body {
    background: rgb(99, 148, 248) none repeat scroll 0 0;
    font: 14px/22px "Lato",Arial,sans-serif;
}
.lighter-text {
    color: rgb(171, 176, 190);
}
.main-color-text {
    color: rgb(99, 148, 248);
}
nav {
    background: rgb(248, 248, 248) none repeat scroll 0 0;
    font-size: 16px;
    padding: 20px 0 40px;
}
nav .navbar-left {
    float: left;
}
nav .navbar-right {
    float: right;
}
nav ul li {
    display: inline;
    padding-left: 20px;
}
nav ul li a {
    color: rgb(119, 119, 119);
    text-decoration: none;
}
nav ul li a:hover {
    color: rgb(0, 0, 0);
}
.container {
    margin: auto;
    width: 80%;
}
.badge {
    background-color: rgb(99, 148, 248);
    border-radius: 15px;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
    color: rgb(255, 255, 255);
    display: inline-block;
    font-size: 12px;
    height: 25px;
    line-height: 1;
    padding: 6px 7px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    width: 25px;
}
.shopping-cart {
    background: rgb(255, 255, 255) none repeat scroll 0 0;
    border-radius: 3px;
    float: right;
    margin: 20px 0;
    padding: 20px;
    position: relative;
    width: 320px;
}
.shopping-cart .shopping-cart-header {
    border-bottom: 1px solid rgb(232, 232, 232);
    padding-bottom: 15px;
}
.shopping-cart .shopping-cart-header .shopping-cart-total {
    float: right;
}
.shopping-cart .shopping-cart-items {
    padding-top: 20px;
}
.shopping-cart .shopping-cart-items li {
    margin-bottom: 18px;
}
.shopping-cart .shopping-cart-items img {
    float: left;
    margin-right: 12px;
}
.shopping-cart .shopping-cart-items .item-name {
    display: block;
    font-size: 16px;
    padding-top: 10px;
}
.shopping-cart .shopping-cart-items .item-price {
    color: rgb(99, 148, 248);
    font-size: 12px;
    margin-right: 8px;
}
.shopping-cart .shopping-cart-items .item-quantity {
    color: rgb(171, 176, 190);
    font-size: 13px;
}
.shopping-cart::after {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgb(255, 255, 255);
    border-image: none;
    border-style: solid;
    border-width: 8px;
    bottom: 100%;
    content: " ";
    height: 0;
    left: 89%;
    margin-left: -8px;
    pointer-events: none;
    position: absolute;
    width: 0;
}
.cart-icon {
    color: rgb(81, 87, 131);
    float: left;
    font-size: 24px;
    margin-right: 7px;
}
.button {
    background: rgb(99, 148, 248) none repeat scroll 0 0;
    border-radius: 30px;
    box-shadow: 7px 7px 10px rgba(0, 0, 0, 0.15);
    color: rgb(255, 255, 255);
    display: block;
    font-size: 16px;
    margin: 25px 0 15px;
    padding: 12px;
    text-align: center;
    text-decoration: none;
}
.button:hover {
    background: rgb(114, 158, 249) none repeat scroll 0 0;
}
.clearfix::after {
    clear: both;
    content: "";
    display: table;
}
 </style>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
 
  $("#cart").on("click", function() {
	  
  });
  
 });
 </script>
 
 

 
 
 <nav>
  <div class="container">
      
    <ul class="navbar-left">
	
      <li><a href="<?php echo base_url(); ?>shopping">Home</a></li>
      <li><a href="#about">About</a></li>
    </ul> <!--end navbar-left -->
<?php
$grand_total = 0;
$item_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
$item_total++;
endforeach;
endif;
?>
    <ul class="navbar-right">
      <li><a href="<?php echo base_url(); ?>shopping/add" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge"><?=$item_total?></span></a></li>
    </ul> <!--end navbar-right -->
  </div> <!--end container -->
</nav>

