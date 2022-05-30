<?php
include('config.php');
if(!empty($_POST["locationId"])) 
{

$sql2 =  "select id,pax, roomid from pax where roomid= ".$_POST['locationId'];

$res = mysqli_query($con,$sql2);

?>
<?php
}
while($row=mysqli_fetch_array($res))
{
    ?>
<option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['pax']); ?></option>
<?php
}


?>

