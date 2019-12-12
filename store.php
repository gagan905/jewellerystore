<?php

session_start();
include('db.php');
$status="";
//accessing record from database

if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
    //selecting data from invemtory table
$result = mysqli_query($con,"SELECT * FROM `inventory` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

    
    
    //cart array
$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,	
	'image'=>$image)
);
    

    //it wil display msg when item is added to cart
if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box' style='color:#6f2412;'>Item is added to your cart!</div>";
}else{
    
    //it wil display if item is already in cart
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:#6f2412;'>
		Item is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'  style='color:#6f2412;'>Item is added to your cart!</div>";
	}

	}
}

?>
<html>
<head>
<title>Signet Jewellers</title>
    <link rel ="stylesheet" href="css/style.css">
<link rel='stylesheet' href='css/style1.css' type='text/css' media='all' />
 <meta name="viewport" content="width=device-width, initial-scale=1">
             
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
    
     

</head> 
<body  >
     
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
             <a href="cart.php"><img  src="images/shopping-cart.png" /> Cart<span>
                <?php $cart_count=''; echo $cart_count; ?></span></a> 
        </div> 
    </nav>

	
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<?php
}

    //displays inventory from database
$result = mysqli_query($con,"SELECT * FROM `inventory`");
while($row = mysqli_fetch_assoc($result)){
   //<div class='col-md-2'>
		echo "<form method='post' action=''>
              <div class='product_wrapper'>	  
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div><img src='".$row['image']."' height=300px width=300px/></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			 <button type='submit'   class='btn btn-primary' id='cart00'>Add to cart</button>
			  </form>
		   	  </div>";
    echo "</div>";
        }
mysqli_close($con);

?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
    

<br /><br />
</div>
</body>
    
    
    
    

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" id = "ff">© 2019 Copyright:
  <a href="">Signetjewellers.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
    
</html>