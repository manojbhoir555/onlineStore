<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {

public function __construct()
{
parent::__construct();
//Load Library and model.
$this->load->library('cart');
$this->load->model('billing_model');
}

public function index()
{
//Get all data from database
$allProducts=file_get_contents("https://fakestoreapi.com/products");
$data['products']=json_decode($allProducts);
//$data['products'] = $this->billing_model->get_all();
//send all product data to "shopping_view", which fetch from database.
$this->load->view('shopping/shopping_view', $data);
}

public function product_detail($id)
{
//Get all data from database
$allProducts=file_get_contents("https://fakestoreapi.com/products/".$id);
$data['products']=json_decode($allProducts);
//$data['products'] = $this->billing_model->get_all();
//send all product data to "shopping_view", which fetch from database.
$this->load->view('shopping/product_view', $data);
}

function add()
{
// Set array for send data.
$insert_data = array(
'id' => $this->input->post('id'),
'name' => $this->input->post('name'),
'price' => $this->input->post('price'),
'qty' => 1
);

// This function add items into cart.


$this->cart->insert($insert_data);

// This will show insert data in cart.
$this->load->view('shopping/shopping_cart');
}

function remove($rowid) {
// Check rowid value.
if ($rowid==="all"){
// Destroy data which store in session.
$this->cart->destroy();
}else{
// Destroy selected rowid in session.
$data = array(
'rowid' => $rowid,
'qty' => 0
);
// Update cart data, after cancel.
$this->cart->update($data);
}

// This will show cancel data in cart.
//redirect('shopping');
$this->load->view('shopping/shopping_cart');
}

function update_cart(){

// Recieve post values,calcute them and update
$cart_info = $_POST['cart'] ;
foreach( $cart_info as $id => $cart)
{
$rowid = $cart['rowid'];
$price = $cart['price'];
$amount = $price * $cart['qty'];
$qty = $cart['qty'];

$data = array(
'rowid' => $rowid,
'price' => $price,
'amount' => $amount,
'qty' => $qty
);

$this->cart->update($data);
}
$this->load->view('shopping/shopping_cart');
}

function billing_view(){
// Load "billing_view".
$this->load->view('shopping/billing_view');
}

public function save_order()
{
// This will store all values which inserted from user.
$customer = array(
'name' => $this->input->post('name'),
'email' => $this->input->post('email'),
'address' => $this->input->post('address'),
'phone' => $this->input->post('phone')
);
// And store user information in database.
$cust_id = $this->billing_model->insert_customer($customer);

$order = array(
'date' => date('Y-m-d'),
'customerid' => $cust_id
);

$ord_id = $this->billing_model->insert_order($order);

if ($cart = $this->cart->contents()):
foreach ($cart as $item):
$order_detail = array(
'orderid' => $ord_id,
'productid' => $item['id'],
'quantity' => $item['qty'],
'price' => $item['price']
);

// Insert product imformation with order detail, store in cart also store in database.

$cust_id = $this->billing_model->insert_order_detail($order_detail);
endforeach;
endif;
$this->cart->destroy();
// After storing all imformation in database load "billing_success".
$this->load->view('shopping/billing_success');
}
}
?>