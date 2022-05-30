<?php include 'navbar.php';
session_start();
$host="localhost";
$user="root";
$password="";
$db="hotel";

$data = mysqli_connect($host,$user,$password,$db);
date_default_timezone_set('Asia/Singapore');
$date = date("m-d-y");
if(!$data){
  die("Could not conenct to mysql" . mysqli_connect_error());
}


date('m-d-yy');


// $checkin = $_SESSION['home_checkin'];
// $checkout = $_SESSION['home_checkout'];
// $home_days = $_SESSION['home_days'];

if(isset($_POST['book_submit']))
{

    $_SESSION['room'] = $_POST['room'];
    $_SESSION['price'] = $_POST['price'];

}?>

        <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
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
        <script src="ajax.js"></script>
        <style>
            p{

                font-size: 18px;
                color: #000;
                font-weight: 400;
            }
        </style>

		<form id = "tae" class="hotel-reservation-form" method="post" action="page2.php">
			<h1><i class="far fa-calendar-alt"></i>Hotel Reservation Form</h1>
			<div class="fields">
				<!-- Input Elements -->
        
                <div class="wrapper">
                    <div>
                        <label for="first_name">First Name</label>
                        <div class="field">
                            <i class="fas fa-user"></i>
                            <input id="first_name" type="text" name="item_name" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="last_name">Last Name</label>
                        <div class="field">
                            <i class="fas fa-user"></i>
                            <input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <label for="email">Email</label>
                <div class="field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" name="email" placeholder="Your Email" required>
                </div>
                <label for="radio">Where to pick up:</label>
                <div class="field">
                    <select id="radio" name="radio" required>
                                <option disabled selected value="">--</option>
                                <option value="None">None</option>
                                <option value="Tabaco City">Tabaco City</option>
                                <option value="Legazpi Airport">Legazpi Airport</option>
                            </select>
                </div>
               
                <label for="phone">Phone</label>
                <div class="field">
                    <i class="fas fa-phone"></i>
                    <input id="phone" type="tel" name="phone_number" placeholder="Your Phone Number" required>
                </div>
                <div class="wrapper">
                    <div>
                        <label for="adults">Additional Pax</label>
                        <div class="field">
                            <select id="adults" name="item_number" required>
                                <option disabled selected value="">--</option>
                                <option value="500">1</option>
                                <option value="1000">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="children">Children</label>
                        <div class="field">
                            <select id="children" name="children" required>
                                <option disabled selected value="">--</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>   
                    </div>
                </div>
                        <div class="wrapper">
                    <div>
                        <label for="arrival">Check In</label>
                        <div class="field">
                        <i class='bx bxs-calendar'></i><input id="checkin" autocomplete="off" type="text" name="check_in" placeholder="<?php echo $date;?>"  value="<?php echo $checkin;?>" required>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="departure">Check Out</label>
                        <div class="field">
                        <i class='bx bxs-calendar'></i> <input id="checkout" autocomplete="off" required="" type="text" placeholder="<?php echo $date;?>" value="<?php echo $checkout;?>"name="check_out" required>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="departure">Total Days to Stay:</label>
                        <div class="field">
                        <i class='bx bxs-calendar'></i> <input id="calculated" autocomplete="off" required="" type="text" value="<?php echo $home_days; ?>" placeholder="0"name="calculated" required>
                        </div>
                    </div>
                </div>
                <label for="email">Message</label>
                <div class="field">
                    <i class="fas fa-message"></i>
                    <textarea id="message" name="message" placeholder="Please type your special request"></textarea>
                </div>
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms"> I have read and agree to the <a data-toggle="modal" data-target="#myModal">terms and conditions</a></label><br>
                <input type="submit" value="Proceed To Payment" name="confirm" >

			</div>
		</form>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">   
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

<br><br>&emsp;&emsp;Should you have further queries, you may reach us thru email: balikbayanfunresorts@gmail.com or call us at +63 916-7978-187.
                        </li><br>
                    </ol> 
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>
</body>


<footer>
      <div class="bottom">
        <center>
          <span class="credit">Created By <a href="#">Barats</a> | </span>
          <span class="far fa-copyright"></span><span class="far"> 2022 All rights reserved.</span>
        </center>
      </div>
    </footer>
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