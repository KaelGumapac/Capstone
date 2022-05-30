<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="hotel";

$data = mysqli_connect($host,$user,$password,$db);

if(!$data){
  die("Could not conenct to mysql" . mysqli_connect_error());
}

if(isset($_POST['book']))
{

	$check_in =  $_POST['check_in'];
	$check_out = $_POST['check_out'];
	date_default_timezone_set('Asia/Singapore');
$date = date("m-d-y");
}


?>


<!DOCTYPE html>
<html>
<head>
<title>24/7 Balikbayan Fun Resort</title>
<link rel="icon" href="images/zAS.png">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Room Booking Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- jquery tang ina mo -->
 <script src="js/jquery.min.js"></script>
 
<!-- //js --> 
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="icon" href="images/icons/zAS.png">
<!-- //font-awesome-icons -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ajax.js"></script>
</head>
<body>
	<nav class="navbar">
		<div class="nav-bar">
		  <div class="logo">
			<a href="#"><img class="logo-icon" src="images/maybe-1@1x.png" alt=""></a>
		  </div>
		  <ul class="menu-list">
			<div class="icon cancel-btn">
			  <i class="fas fa-times"></i>
			</div>
			<li><a href="../../index.html">Home</a></li>
			<li><a href="../../about-UsFin/index.html">About Us</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="../../Contact/contact.html">Contact</a></li>
		  </ul>
		  <div class="icon menu-btn">
			<i class="fas fa-bars"></i>
		  </div>
		</div>
	  </nav>
	
	  <div class="main">
		
		<div class="w3_agile_main_grids">
			<div id='progress'><div id='progress-complete'></div></div>
			
			<form id="SignupForm" action="sample.php" class="agile_form"method="post">
				<fieldset>
					
					<h3>ACCOUNT INFORMATION</h3>
					<div class="form-group agileits_ryuzak_form w3_agileits_margin">
						<div class="wthree_input">
							<i class="fa fa-pesosign" aria-hidden="true"></i>
							<input autocomplete="off" id="Name" type="text" name="item_name" class="form-control" placeholder="Name" required="" />
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form">
						<div class="wthree_input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input autocomplete="off" id="Email" type="email" name="email" class="form-control" placeholder="Email" required="" />
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form w3_agileits_margin">
						<div class="wthree_input">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input autocomplete="off" id="Subject" type="text" name="phone_number" class="form-control" placeholder="Phone number" onkeyup="numberonly(this)" minlength="11" maxlength="11" required="" />
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form">
						<div class="wthree_input">
							<i class="fa fa-child" aria-hidden="true"></i>
							<input autocomplete="off" id="Password" type="text" name="item_number" class="form-control" placeholder="2 adult 1 child" required="" />
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form w3_agileits_margin">
						<div class="wthree_input">
							<i class="fa fas fa-home"  aria-hidden="true"></i>
							<select name="location" id="LocationId" class="form-control" onChange="getRestaurents(this.value);">
							<option value="">Select Location</option>
							</select>
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form">
						<div class="wthree_input">
							<i class="" aria-hidden="true"></i>
							<select name="restaurentId" id="restaurentId" class="form-control" onChange="getPrice(this.value);">
	 						<option value="">PAX</option>  	
							</select>
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form w3_agileits_margin">
						<div class="wthree_input">
							<h5 class="booking">Check-in</h5>
							<input id="checkin" required="text" autocomplete="off"name="check_in" value="<?php echo $check_in ?>" class="form-control" placeholder="<?php echo $date?>" required="" />
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form">
						<div class="wthree_input">
							<i class="" aria-hidden="true"></i>
							<input type="number" id="quantity" placeholder="Additional PAX" name="quantity"  min="0" max="2">
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form w3_agileits_margin">
						<div class="wthree_input">
							<h5 class="booking">Check-out</h5>
							<input id="checkout" autocomplete="off"required="text" name="check_out" value="<?php echo $check_out ?>" class="form-control" placeholder="<?php echo $date?>" required="" />
						</div>
					</div>  
			
					<div class="form-group agileits_ryuzak_form">
						<div class="wthree_input">
							<i class="" aria-hidden="true"></i>
							<select name="amount" id="price" class="form-control">
	 						<option value="">PAX</option>  	
							</select>
						</div>
					</div>
					<div class="form-group agileits_ryuzak_form w3_agileits_margin">
						<div class="wthree_input">
							<h5 class="booking">Number of Days</h5>
							<input id="calculated" readonly autocomplete="off"required="text" name="calculated"  class="calculated form-control calculated" placeholder="<?php echo $date?>"  />
						</div>
					</div>
					<div class="clear"> </div>
				</fieldset>

				<script>
   $('#checkin').datepicker({
    dateFormat: 'yy-mm-dd',
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
    minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
    $('#checkout').datepicker("option", "minDate", minValue);
    calculate();
});
$('#checkout').datepicker().bind("change", function () {
    var maxValue = $(this).val();
    maxValue = $.datepicker.parseDate("yy-mm-dd", maxValue);
    $('#checkin').datepicker("option", "maxDate", maxValue);
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
<script>
$(document).ready(function(){
  $(".counter").on('change keyup paste', function(e)
  {
   var number =
    {
        numad:$("#price").val(),
        numch:$("#calculated").val(),
        is_ajax:1
    };
    $.ajax(
    {
       type:"post",
       url:"process.php",
       data: number,
       dataType:"json",
       success:function(counter)
       {
           $("#total").html(counter);
       }
    });
    return false;
   });
  }); 
</script>



		
				<!-- Next Form -->
				<fieldset>
					<h3>Transportation Service</h3>
					<h4 class="ryuzak_type">Where do you want to be pick up?</h4>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-cab" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="radio" value="Tabaco City" checked="">
								<i></i>Tabaco City
							</label>
						</div>
					</div>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-cab" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="radio" value="Legazpi, Airport">
								<i></i>Legazpi, Airport
							</label>
						</div>
					</div>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa far fa-times-circle" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="radio" value="NONE">
								<i></i>None
							</label>
						</div>
					</div>
					<div class="clear"> </div>
				</fieldset>
				<!-- End of Next Form -->
				<fieldset>
					<h3 class="w3_room">Room Details</h3>
					<div class="form-group ryuzak_description">
						<i class="fa fa-align-right" aria-hidden="true"></i>
						<textarea name="message" placeholder="Your message here..." required=""></textarea>
					</div>
				</fieldset>
	
				<p>
					<button id="SaveAccount" name="book" value="Buy Now" class="btn btn-primary agileinfo_primary submit">Submit</button>
				</p>
			</form>
			<div class="social">
				<a href="#"><img  class="fb"src="/Main-roomFin -Book/book-formFin/images/icons/icons8-facebook-96.png" alt=""></a>
				<a href="#"><img class="ig" src="/Main-roomFin -Book/book-formFin/images/icons/icons8-instagram-96.png" alt=""></a>
				<a href="#"><img class="twitter" src="/Main-roomFin -Book/book-formFin/images/icons/icons8-twitter-96.png" alt=""></a>
				<a href="#"><img class="yt" src="/Main-roomFin -Book/book-formFin/images/icons/icons8-youtube-96.png"alt=""></a>
			  </div>
			<!-- Modal -->
			<div class="agileits_copyright">
				<p> Read Corana Virus | <a href="#" id="modal-show" class="modal-show">Terms and Policy</a></p>
			</div>
			<div class="center">
			<div class="content">
				<div class="header">
					<h2 class="Terms">Terms and Policy</h2>
				</div>
				<img class="corona" src="/Main-roomFin -Book/book-formFin/images/istockphoto-1210517344-170667a-removebg-preview.png" alt="">
				<p class="policy">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis magnam exercitationem reiciendis. Unde ducimus eos repudiandae atque iure reprehenderit et.</p>
				<div class="line"></div>
				<label for="click" class="close-btn">Close</label>
			</div>
			</div>
			<!-- End of Modal -->
		</div>
	</div>
	
		


	
	<script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.formtowizard.js"></script>

    <script>
        $( function() {
            var $signupForm = $( '#SignupForm' );

            $signupForm.validate({errorElement: 'em'});

            $signupForm.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
		});
	</script>
	<script type ="text/javascript">
	function numberonly(input)
	{
		var num = /[^0-9]/gi;
		input.value = input.value.replace(num,"");
	}

	</script>
	<script>
		document.getElementById('modal-show').addEventListener('click', 
function (){
    document.querySelector('.center').style.display = 'flex';

});
document.querySelector('.close-btn').addEventListener('click', function(){
	document.querySelector('.center').style.display= 'none';
})
	</script>
	<script src="/js/navbar.js"></script>
	
</body>
</html>

