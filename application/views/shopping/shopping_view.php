<html>
<head>
<title>Products</title>
<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">

</head>
<body>
<div id='content'>
<div id='tag'>
<!-- Formget Fugo logo image -->



<?php 
  $this->load->view('shopping/header');
?>
</div>


<div id="products_e" align="center">

<h2 id="head" align="center">Products</h2>
<?php

// "$products" send from "shopping" controller,its stores all product which available in database.
foreach ($products as $product) {

$id = $product->id;
$name = $product->title;
$description = $product->description;
$price = $product->price;
?>

<div id='product_div'>
<a href="<?php echo base_url(); ?>shopping/product_detail/<?=$id?>" style="text-decoration:none; color : #000;">
<div id='image_div'>
<img src="<?php echo $product->image ?>" width="200" height="250"/>
</div>
<div id='info_product'>
<div id='name'><?php echo $name; ?></div>
<!--<div id='desc'> <?php echo $description; ?></div>-->
<div id='rs'><b>Price</b>:<big>
RS<?php echo $price; ?></big></div>
</a>
<?php

// Create form and send values in 'shopping/add' function.
echo form_open('shopping/add');
echo form_hidden('id', $id);
echo form_hidden('name', $name);
echo form_hidden('price', $price);
?> </div>
<div id='add_button'>
<?php
$btn = array(
'class' => 'fg-button teal',
'value' => 'Add to Cart',
'name' => 'action'
);

// Submit Button.
echo form_submit($btn);
echo form_close();
?>
</div>
</div>

<?php } ?>

</div>
</div>
</body>
</html>