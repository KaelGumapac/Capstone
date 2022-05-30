<?php include 'navbar.php'; 
session_start();
if(isset($_POST['confirm']))
{
    $checkin = $_POST['check_in'];
    $checkout = $_POST['check_out'];
    $first_name = $_POST['item_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $additionalpax = $_POST['item_number'];
    $children = $_POST['children'];
    $number_of_stay = $_POST['calculated'];
    $price = $_SESSION['price'];
    $room = $_SESSION['room'];
    $pick_up = $_POST['radio'];
    $total = $price * $number_of_stay;
    $totalprice = $total + $additionalpax;
    $children = $_POST['children'];
    $message = $_POST['message'];



}

?>
    
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>Document</title>

 
    <form id = "tae" class="hotel-reservation-form" method="post" action="../paypal/request.php">
			<h1><img id="logo"src="maybe.png"></i><br>Complete your booking</h1>
			<div class="fields">
				<!-- Input Elements -->
                <div class="wrapper">
                    <div>
                        <label for="arrival">Check In date:</label>
                        <div class="field">
                            <input id="arrival" value="<?php echo $checkin;?>" type="text" name="check_in" readonly>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="departure">Check Out date:</label>
                        <div class="field">
                            <input id="departure" value="<?php echo $checkout;?>" type="text" name="departure" readonly>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div>
                        <label for="first_name">Guest Name</label>
                        <div class="field">
                            <i class="fas fa-user"></i>
                            <input id="first_name"value="<?php echo $first_name; ?>" type="text" name="first_name" placeholder="First Name" readonly>
                        </div>
                    </div>
                </div>
                <label for="email">Email</label>
                <div class="field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" value="<?php echo $email; ?>" name="email" placeholder="Your Email" readonly>
                </div>
                <div class="wrapper">
                    <div>
                        <label for="arrival">Phone</label>
                        <div class="field">
                        <i class="fas fa-phone"></i>
                        <input id="first_name" type="text" value="<?php echo $phone_number;?>"name="phone_number" placeholder="phone_number" readonly>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="departure">Room</label>
                        <div class="field">
                        <i class='bx bx-hotel'></i>
                        <input id="first_name" type="text" name="room" value="<?php echo $room;?>" placeholder="room" readonly>
                        </div>
                    </div>
                </div>
                <label>Total:</label>
                <div class="field"><i><span>&#8369;</span></i>
                    <input id="total" type="text" name="amount" value="<?php echo $totalprice;?>" readonly>
                <br>
                <input type="hidden" name="item_number" value="<?php echo $additionalpax;?>">
                <input type="hidden" name="item_name" value="<?php echo $first_name;?>">
                <input type="hidden" name="last_name" value="<?php echo $last_name;?>">
                <input type="hidden" name="phone_number" value="<?php echo $phone_number;?>">
                <input type="hidden" name="check_out" value="<?php echo $checkout;?>">
                <input type="hidden" name="radio" value="<?php echo $pick_up?>">
                <input type="hidden" name="children" value="<?php echo $children?>">
                <input type="hidden" name="room" value="<?php echo $room?>">
                <input type="hidden" name="message" value="<?php echo $message;?>">
                </div>
                <h5>Payment Method:</h5>
                <p>Paypal: </p>
                <!-- PayPal Logo --><button type="submit"> <table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><img 
                src="https://www.paypalobjects.com/webstatic/mktg/logo/PP_AcceptanceMarkTray-NoDiscover_243x40.png" alt="Buy now with PayPal" /></td></tr></table></button><!-- PayPal Logo -->
                </form>
                <form method="post" action="../Email/paymongo/process.php">
                            <input id="arrival" type="hidden" value="<?php echo $checkin;?>" >
                            <input id="departure" type="hidden" value="<?php echo $checkout;?>" >
                            <input id="first_name" type="hidden" value="<?php echo $first_name; ?>">
                            <input type="hidden" name="first_name" placeholder="First Name" readonly>
                            <input id="email" type="hidden" value="<?php echo $email; ?>" name="email" placeholder="Your Email" readonly>
                            <input id="first_name" type="hidden" value="<?php echo $phone_number;?>"name="phone_number" placeholder="phone_number" readonly>
                            <input id="first_name" type="hidden" name="room" value="<?php echo $room;?>" placeholder="room" readonly>
                            <input type="hidden" name="message" placeholder="Please type your special request">
                            <input id="total" type="hidden" name="amount" value="<?php echo $totalprice;?>" readonly>
                            <input type="hidden" name="item_number" value="<?php echo $additionalpax;?>">
                            <input type="hidden" name="item_name" value="<?php echo $first_name;?>">
                            <input type="hidden" name="last_name" value="<?php echo $last_name;?>">
                            <input type="hidden" name="phone_number" value="<?php echo $phone_number;?>">
                            <input type="hidden" name="check_out" value="<?php echo $checkout;?>">
                            <input type="hidden" name="radio" value="<?php echo $pick_up?>">
                            <input type="hidden" name="children" value="<?php echo $children?>">
                            <input type="hidden" name="room" value="<?php echo $room;?>">
                            <input type="hidden" name="amount" value="<?php echo $totalprice;?>00">
                            <input type="hidden" name="rightamount" value="<?php echo $totalprice;?>">
                            <input type="hidden" name="check_in" value="<?php echo $checkin?>">
                            <input type="hidden" name="message" value="<?php echo $message;?>">
                <div class="method">
                <p>Gcash:</p>
                <input type="image" src="gcash2.png" alt="Submit" srcset=""/>
		        </form>
                        </div>
					</div>
                </div>
                </div>
			</div>

        
  
</body>
</html>
