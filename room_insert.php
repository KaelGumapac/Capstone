<?php
session_start();

include 'admin/includes/db_inc.php';

$deluxed = "SELECT COUNT(*) as total FROM booking where room = 'Family Room'";
$deluxed2 = "SELECT COUNT(*) as total FROM check_in where room = 'Family Room'";
$deluxed3 = "SELECT COUNT(*) as total FROM reserved where room = 'Family Room'";
$numbers = mysqli_query($data, $deluxed);
$count = mysqli_fetch_assoc($numbers);
$numbers = mysqli_query($data, $deluxed2);
$count2 = mysqli_fetch_assoc($numbers);
$numbers = mysqli_query($data, $deluxed3);
$count3 = mysqli_fetch_assoc($numbers);

if($count['total'] < 1)
{
    $_SESSION['family_room'] = '<span class="label label-pill label-success">AVAILABLE</span>';
}
else
{
    $_SESSION['family_room'] = '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
}
if($count2['total'] < 1)
{
    $_SESSION['family_room'] = '<span class="label label-pill label-success">AVAILABLE</span>';
}
else
{
    $_SESSION['family_room'] = '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
}
if($count3['total'] < 1)
{
    $_SESSION['family_room'] = '<span class="label label-pill label-success">AVAILABLE</span>';
}
else
{
    $_SESSION['family_room'] = '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
}


//for beach
$beach = "SELECT COUNT(*) as total FROM booking where room = 'Family Room'";
$numbers2 = mysqli_query($data, $beach);
$count2 = mysqli_fetch_assoc($numbers2);

if($count2['total'] < 10)
{
    $_SESSION['couple_room'] = 'AVAILABLE';
}
else
{
    $_SESSION['couple_room'] = 'NOT AVAILABLE';
}

//for couple pool
$couplepool = "SELECT COUNT(*) as total FROM booking where room = 'Twinsharing Room'";
$numbers3 = mysqli_query($data, $couplepool);
$count3 = mysqli_fetch_assoc($numbers3);

if($count3['total'] < 1)
{
    $_SESSION['Twinsharing_room'] = '<span class="label label-pill label-success">AVAILABLE</span>';
}
else
{
    $_SESSION['Twinsharing_room'] = '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
}

//for couple beach
$couplebeach = "SELECT COUNT(*) as total FROM booking where room = 'Couple Room (beach view)'";
$numbers4 = mysqli_query($data, $couplebeach);
$count4 = mysqli_fetch_assoc($numbers4);

if($count4['total'] < 5)
{
    $_SESSION['couplebeach_status'] = '<span class="label label-pill label-success">AVAILABLE</span>';
}
else
{
    $_SESSION['couplebeach_status'] = '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
}



//for backpacker pool
$bpackerpool = "SELECT COUNT(*) as total FROM booking where room = 'Backpacker Room (pool view)'";
$numbers5 = mysqli_query($data, $bpackerpool);
$count5 = mysqli_fetch_assoc($numbers5);

if($count5['total'] < 1)
{
    $_SESSION['bpackerpool_status'] = '<span class="label label-pill label-success">AVAILABLE</span>';
}
else
{
    $_SESSION['bpackerpool_status'] = '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
}


//for backpacker beach
$bpackerbeach = "SELECT COUNT(*) as total FROM booking where room = 'Backpacker Room (beach view)'";
$numbers6 = mysqli_query($data, $bpackerbeach);
$count6 = mysqli_fetch_assoc($numbers6);

if($count6['total'] < 1)
{
    $_SESSION['bpackerbeach_status'] = '<span class="label label-pill label-success">AVAILABLE</span>';
}
else
{
    $_SESSION['bpackerbeach_status'] = '<span class="label label-pill label-danger">NOT AVAILABLE</span>'; 
}




