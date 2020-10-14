<?php $this->load->view('index/header.php');?>
<div class="featured">
  
</div>
<div class="recentlyadded content-wrapper">
    <h2>Products</h2>
    <div class="products">
       
       <?php foreach ($products as $product){

          
		   ?>
        <a href="" class="product">
            <img src="<?=$product->image?>" width="200" height="200" alt="<?=$product->title?>">
            
            <span class="price">
                RS<?=$product->price?>
                
            </span>
        </a>
	   <?php } ?>
       
    </div>
</div>

<?php $this->load->view('index/footer.php');?>