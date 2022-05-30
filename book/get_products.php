<?php
include('config.php');

if(!empty($_POST["restaurentId"])) 
{

$sql2 =  "select price from price where roomid= '".$_POST['restaurentId']."'";
//echo $sql2;

$res = mysqli_query($con,$sql2);
while($row=mysqli_fetch_array($res))
{?>
<option value="<?php echo htmlentities($row['price']); ?>"><?php echo htmlentities($row['price']); ?></option>
<?php
}
}

?>

