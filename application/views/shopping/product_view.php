<html>
<head>
<title>Codeigniter cart class</title>
<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">


</head>
<body>
<div id='content'>
<div id='tag'>
<?php 
  $this->load->view('shopping/header');
?>
</div>

<div id="products_e" align="center">

<h2 id="head" align="center">Products</h2>
<?php

// "$products" send from "shopping" controller,its stores all product which available in database.



$id = $products->id;
$name = $products->title;
$description = $products->description;
$price = $products->price;
?>

<div id='product_div'>
<div id='image_div'>
<img src="<?php echo $products->image ?>" width="200" height="250"/>
</div>
<div id='info_product'>
<div id='name'><?php echo $name; ?></div>
<div id='desc'> <?php echo $description; ?></div>
<div id='rs'><b>Price</b>:<big>
RS<?php echo $price; ?></big></div>
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



</div>
</div>
</body>
</html>