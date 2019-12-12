
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta charset="utf-8">
    <title>Signet Jewellers</title>
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='css/style.css' type='text/css'  />
    <link rel='stylesheet' href='css/style1.css' type='text/css' />

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
             <a href="cart.php"><img  src="images/shopping-cart.png" /> Cart<span>
                <?php $cart_count=''; echo $cart_count; ?></span></a> 
        </div> 
    </nav>
<br><br>

   
      <form action="thanks.php"> 
      
         
          <label><b><h3>Fill up Form</h3></b></label>
              <label > <b>First Name</b></label>
            <input type="text" id="firstname" name="firstname" placeholder="Aman"  pattern="[A-Za-z]{1,50}" required="required" class="intext">
              <label><b>Last Name</b></label>
            <input type="text" id="lastname" name="lastname" placeholder="M. Singh"  pattern="[A-Za-z]{1,50}" required="required" class="intext">
              <label><b> Email</b></label>
            <input type="text" id="email" name="email" placeholder="aman@example.com" required="required" class="intext">
              <label><b> Address</b></label>
            <input type="text" id="addr" name="address" placeholder="22 homer St." required="required"  class="intext">
              <label><b> City</b></label>
            <input type="text" id="city" name="city" placeholder="Kitchener"  required="required" class="intext">

            
         

          <label><b>Payment</b></label>
           
   <select name ="payment" id="payment"  id="pay" required="true" required="required" class="sel">
    
          <option>Visa</option>
        <option>Master</option>
        <option>Cash</option>
          
          
          </select>
             
             
              </div>
            </div>
          </div>
          <br>
      
           <input type="submit" value="Order" name="submit" id="exp" class="btn" ref="thanks.php"></div>
        
      </form>

    </div>
  </div>
    </div>
</body>
    
    
    <br>
<br>


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" id = "ff">© 2019 Copyright:
  <a href="">Signetjewellers.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
</html>
