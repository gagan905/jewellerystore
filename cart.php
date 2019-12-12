<?php

session_start();
$status="";


if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color: #6f2412;'>
		Item is removed from your cart!</div>";
		} // code to removes item form cart
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; //  When the item is founded its stop the loop
    }
}
  	
}
?>
<html>
<head>
<title>Signet Jewellers</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style1.css' type='text/css' media='all' />
 <meta name="viewport" content="width=device-width, initial-scale=1">
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body class="b1">
     
	    <nav id ="navcolor" class="navbar navbar-expand-lg navbar-light  sticky-top">
        <a  id="anchor" class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a  id="anchor" class="nav-link" href="store.php">Collections</a>
                </li>
                <li class="nav-item">
                    <a  id="anchor" class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a   id="anchor"  class="nav-link" href="checkout.php">Checkout</a>
                </li>
                
                
                 <li class="nav-item">
                    <a   id="anchor"  class="nav-link" href="about.php">About us</a>
                </li>
                
            </ul>
        </div>
            
            
            
            
            
            
            <div class="cart_div">
             <a href="cart.php"><img  src="shopping-cart.png" /> Cart<span>
                <?php $cart_count=''; echo $cart_count; ?></span></a> 
        </div> 
    </nav>
<div style="width:700px; margin:50 auto;">
<div style="background-image: url(cart.jpg);">
<h2> Your Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<span><?php echo $cart_count; ?></span>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>
    
<table class="table">
<tbody>
<tr>
<td></td>
    <td><b>NAME</b></td>

    <td><b>PRICE</b></td>
    <td> <b>TOTAL</b></td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $item){
?>
<tr>
<td><img src='<?php echo $item["image"]; ?>' width="60" height="50" /></td>
<td><?php echo $item["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $item["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>

<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $item["code"]; ?>" />
<input type='hidden' name='action' value="change" />

</form>
</td>
<td><?php echo "$".$item["price"]; ?></td>
<td><?php echo "$".$item["price"]; ?></td>
</tr>
<?php
$total_price += ($item["price"]);
}
?>
<tr>
<td colspan="5" align="right">
<b>TOTAL: <?php echo "$".$total_price; ?></b>
</td>
</tr>
</tbody>
</table>	
    </div>
  <?php

}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; 

?>
</div>


<br /><br />
<button type='index' class="btn btn-primary" onClick="location.href='store.php'" id="cart00">Inventory</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type='Checkout' class="btn btn-success" onClick="location.href='checkout.php'" id="cart00">Checkout</button>
</div>
    </body>
    
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br><br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    
    
    

   
    

</html>