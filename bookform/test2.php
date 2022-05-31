<?php include 'navbar.php';?>


<link rel="stylesheet" href="test.css?v=<?php echo time();?>">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<title>Hotel Reservation Form</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">

<style>
select:invalid,
select option[value=""] {
  color: #999999;
}
option[value=""][disabled] {
  display: none;
}
h4{
    margin-top: 20px;
    margin-bottom: -10px;
}
.container .title::before{
  width: 257px !important;
}
</style>

    <div class="wrapper">
        <div class="container">
            <div class="title">Complete your booking</div>
            <div class="content">
            <form action="#">
                <h4>Review Details</h4>
                <div class="user-details">
                <div class="input-box">
                        <span class="details-select2">Check in date:</span>
                        <input id="arrival" value="<?php echo $checkin;?>" type="text" name="check_in" readonly>
                    </div>
                    <div class="input-box">
                        <span class="details-select2">Check out date:</span>
                        <input id="departure" value="<?php echo $checkout;?>" type="text" name="departure" readonly>                        
                    </div>
                <div class="input-box">
                    <span class="details">Guest Name</span>
                    <input id="first_name"value="<?php echo $first_name; ?>" type="text" name="first_name" placeholder="First Name" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input id="email" type="email" value="<?php echo $email; ?>" name="email" placeholder="Your Email" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input id="first_name" type="text" value="<?php echo $phone_number;?>"name="phone_number" placeholder="phone_number" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Room selected:</span>
                    <input id="first_name" type="text" name="room" value="<?php echo $room;?>" placeholder="room" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Amount to Pay</span>
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
                </div>
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



    <!-- payment redio button -->
                <div class="payment">
                    <input type="radio" name="radio1" id="dot-1">
                    <input type="radio" name="radio1" id="dot-2">
                    <span class="payment_title">Payment option:</span>
                    <div class="category">
                        <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="payment_option">Paypal or Credit Card</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="payment_option">Gcash</span>
                    </label>
                </div>

                <input type="checkbox" id="terms" name="terms" required>
                <span for="terms" class="term-details"> I have read and agree to the <a data-toggle="modal" data-target="#myModal">terms and conditions</a></span><br>

                <div class="button">
                <input type="submit" value="Complete Payment">
                </div>
            
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">   
      <!-- Modal content-->
            <div class="modal-content" style="margin-left: auto !important; margin-right: auto !important;">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="font-weight: normal;">TERMS AND CONDITIONS</h4>
                </div>
                <div class="modal-body" style="margin-left: 15px; text-align: justify; margin-right: 15px; font-size: 16px; font-family: 'Montserrat', sans-serif;">
                    <ol>
                        <li>Please wear proper swimming attire. Only rashguards, board shorts, swimsuits, swimming trunks, and white cotton shirt are allowed. <br>A penalty of PHP 50 will be charged to guests not in proper attire.</li><br>
                        <li>No eating and drinking in and around the pool area.</li><br>
                        <li>Please refrain from using the pool if you have any skin conditions for your safety and the also the safety of other guests.</li><br>
                        <li>Dogs are allowed but must be left leashed near the dog pool area.</li><br>
                        <li>Food and drinks are available in the resort but bringing your own is allowed.</li><br>
                        <li>No smoking in the pool area.</li><br>
                        <li>Cancellation/Modification and No-Show Policy:</li><br>
                        <li>Any modification/cancellation must be coursed thru Reservation Office.</li><br>
                        <li>Firearms, deadly weapons, and drugs are strictly prohibited in the resort</li><br>
                        <li><strong>Privacy Notice:</strong><br><br>
                        &emsp;&emsp;Any information that you provided to us is subject to our Privacy Policy, which governs our collection and use of your information.
                        <br><br>&emsp;&emsp;At 24/7 Balikbayan Fun Resort, we take your privacy seriously, we will only use your personal information to facilitate your booking and reservation that you have availed on us, to confirm prior transactions and reconcile statements or invoices. In particular, we ask for certain sensitive personal information to ensure that only legally eligible and qualified persons can avail our products and services we have on offer.
                        <br><br>&emsp;&emsp;24/7 Balikbayan Fun Resort is responsible for using your personal data.
                        <br><br>Should you have further queries, you may reach us thru: <br><br><strong>Email:</strong> balikbayanfunresorts@gmail.com<br><strong>Call us at</strong> +63 916-7978-187.
                        </li><br>
                    </ol> 
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
            </div>
        </div>
    </div>
    <footer>
      <div class="bottom">
        <center>
          <span class="credit">Created By <a href="#">Barats</a> | </span>
          <span class="far fa-copyright"></span><span class="far"> 2022 All rights reserved.</span>
        </center>
      </div>
    </footer>
</body>


</html>

<script>
   $('#checkin').datepicker({
    dateFormat: 'yy-mm-dd',
    showAnim: 'drop',
    minDate: 0,
    changeMonth: true,
    changeYear: true,
	onClose: function() {
	   var date2 = $('#checkin').datepicker('getDate');
		 date2.setDate(date2.getDate()+1)
		$('#checkout').datepicker("option", "minDate", date2);
	  }
    });

    $('#checkout').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
    });


    $('#checkin').datepicker().bind("change", function () {
        var minValue = $(this).val();
        minValue = $.datepicker.parseDate('yy-mm-dd', minValue);
        $('#checkout').datepicker("option", "minDate", minValue);
        calculate();
    });
    $('#checkout').datepicker().bind("change", function () {
        var maxValue = $(this).val();
        maxValue = $.datepicker.parseDate('yy-mm-dd', maxValue);
        $('#checkout').datepicker("option", maxValue);
        calculate();
    });

    function calculate() {
        var d1 = $('#checkin').datepicker('getDate');
        var d2 = $('#checkout').datepicker('getDate');
        var oneDay = 24*60*60*1000;
        var diff = 0;
        if (d1 && d2) {
    
        diff = Math.round(Math.abs((d2.getTime() - d1.getTime())/(oneDay)));
        }
        $('#calculated').val(diff);
    }
</script>