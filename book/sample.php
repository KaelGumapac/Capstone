<?php

if (empty($_POST['item_number'])) {
    throw new Exception('This script should not be called directly, expected post data');
}


        $_SESSION['name'] = $_POST['item_name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone_number'];
        $_SESSION['kasama'] = $_POST['item_number'];
        $_SESSION['check_in'] = $_POST['check_in'];
        $_SESSION['check_out'] = $_POST['check_out'];
        $_SESSION['pick_up'] = $_POST['radio'];
        $_SESSION['message'] = $_POST['message'];
        $_SESSION['price'] = $_POST['amount'];
        $_SESSION['calculated'] = $_POST['calculated'];
        $_SESSION['room'] = $_POST['location'];
        $_SESSION['pax'] = $_POST['restaurentId'];
        $_SESSION['quantity'] = $_POST['quantity'];
        $total = $_SESSION['price'] * $_SESSION['calculated'];
        $quantity = $_SESSION['quantity'] * 500;
        $totalprice = $total + $quantity;  
        $_SESSION['totalprice'] = $totalprice;
        $room = $_SESSION['room'];
        $pax = $_SESSION['pax'];
     
    //ROOM
    if ($room == 2)
    {
        $room = 'Twinsharing Room';
    }
    elseif ($room == 3)
    {
        $room = 'Family Room';
    }
    else
    {
        $room = 'Couple Room';
    }

    
    if ($pax == 11)
    {
        $pax = '2';
    }
    elseif ($pax == 2)
    {
        $pax = 4;
    }
    elseif ($pax == 3)
    {
        $pax = 6;
    }
    elseif ($pax == 4)
    {
        $pax = 7;
    }
    elseif ($pax == 6)
    {
        $pax = 1;
    }
    elseif ($pax == 7)
    {
        $pax = 2;
    }
    elseif ($pax == 9)
    {
        $pax = 3;
    }
    else
    {
        $pax = 1;
    }







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMPLe</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="preview.css">
</head>
<body>
    
<div class="container">
            <form class="form-horizontal" role="form" method="POST" action="../Email/paymongo/process.php">
              
                <h2>CONFIRMATION</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name: </label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="item_name"  value="<?php echo $_SESSION['name']; ?>" placeholder="First Name" readonly class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="email" value="<?php echo $_SESSION['email'];?>"placeholder="Last Name" class="form-control" autofocus readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Phone Number: </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="phone_number" value="<?php echo $_SESSION['phone'];?>" placeholder="Email" class="form-control" name= "email" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Check-in: </label>
                    <div class="col-sm-9">
                        <input type="text" id="password" name="check_in" value="<?php echo $_SESSION['check_in'];?> " placeholder="Password" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Check-out: </label>
                    <div class="col-sm-9">
                        <input type="text" id="password" name="check_out" value="<?php echo $_SESSION['check_out']; ?>" placeholder="Password" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Number of stay: </label>
                    <div class="col-sm-9">
                        <input type="text" id="birthDate" name="calculated" value="<?php echo $_SESSION['calculated'];?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Pick-up: </label>
                    <div class="col-sm-9">
                        <input type="text" id="phoneNumber" name="radio" value="<?php echo $_SESSION['pick_up'];?> "placeholder="Phone number" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Room:  </label>
                    <div class="col-sm-9">
                        <input type="text" id="height" name="location" value="<?php echo $room;?>" placeholder="Please write your height in centimetres" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Companion: </label>
                    <div class="col-sm-9">
                        <input type="text" id="phoneNumber" name="item_number" value="<?php echo $_SESSION['kasama'];?> "placeholder="Phone number" class="form-control" readonly>
                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Max Pax:  </label>
                    <div class="col-sm-9">
                        <input type="text" id="weight" name="restaurentId" value="<?php echo $pax; ?>" placeholder="Please write your weight in kilograms" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Additional Pax:  </label>
                    <div class="col-sm-9">
                        <input type="text" id="weight" name="quantity" value="<?php echo $_SESSION['quantity'];?>" placeholder="Please write your weight in kilograms" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Message:  </label>
                    <div class="col-sm-9">
                        <input type="text" id="weight" name="message" value="<?php echo $_SESSION['message'];?>" placeholder="Please write your weight in kilograms" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Total Price:  </label>
                    <div class="col-sm-9">
                        <input type="text" id="weight" name="amount" value="<?php echo $totalprice; ?>00" placeholder="Please write your weight in kilograms" class="form-control" readonly>
                        <input type="hidden" id="weight" name="rightamount" value="<?php echo $totalprice; ?>" placeholder="Please write your weight in kilograms" class="form-control" readonly>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Gcash</button>
                </form>
                <!-- FOR FUCKING PAYPAL -->
                <form class="form-horizontal" id="id" role="form" method="POST" action="../paypal/PaypalSuccess.php">
    
                        <input type="hidden" id="firstName" name="item_name"  value="<?php echo $_SESSION['name']; ?>" placeholder="First Name" readonly class="form-control" autofocus>
      
                        <input type="hidden" id="lastName" name="email" value="<?php echo $_SESSION['email'];?>"placeholder="Last Name" class="form-control" autofocus readonly>
          
            
                        <input type="hidden" id="email" name="phone_number" value="<?php echo $_SESSION['phone'];?>" placeholder="Email" class="form-control" name= "email" readonly>
                        <input type="hidden" id="phoneNumber" name="item_number" value="<?php echo $_SESSION['kasama'];?> "placeholder="Phone number" class="form-control" readonly>
              
                        <input type="hidden" id="password" name="check_in" value="<?php echo $_SESSION['check_in'];?> " placeholder="Password" class="form-control" readonly>
          
           
                        <input type="hidden" id="password" name="check_out" value="<?php echo $_SESSION['check_out']; ?>" placeholder="Password" class="form-control" readonly>
            
                        <input type="hidden" id="birthDate" name="calculated" value="<?php echo $_SESSION['calculated'];?>" class="form-control" readonly>
       
            
                        <input type="hidden" id="phoneNumber" name="radio" value="<?php echo $_SESSION['pick_up'];?> "placeholder="Phone number" class="form-control" readonly>
              
            
                        <input type="hidden" id="height" name="location" value="<?php echo $room;?>" placeholder="Please write your height in centimetres" class="form-control" readonly>
           
                
                        <input type="hidden" id="weight" name="quantity" value="<?php echo $_SESSION['quantity'];?>" placeholder="Please write your weight in kilograms" class="form-control" readonly>
            
                        <input type="hidden" id="weight" name="restaurentId" value="<?php echo $pax; ?>" placeholder="Please write your weight in kilograms" class="form-control" readonly>
             
           
           
         
                        <input type="hidden" id="weight" name="message" value="<?php echo $_SESSION['message'];?>" placeholder="Please write your weight in kilograms" class="form-control" readonly>
            
          
                        <input type="hidden" id="weight" name="amount" value="<?php echo $totalprice; ?>" placeholder="Please write your weight in kilograms" class="form-control" readonly>
             
                        
                
                <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=PHP" data-sdk-integration-source="button-factory"></script>
  <script>
      
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"PHP","value":<?php echo $totalprice;?>}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('id');
            element.innerHTML = '';
            element.innerHTML = '';
            element.innerHTML = 'Please proceed to confirmation <?php echo $_SESSION['name'];?> <button type="submit" class="btn btn-primary btn-block">PROCEED</button>';
          
            
            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>      
             
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>
