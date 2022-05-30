<?php
include('config.php');

$sql = "select * from roomscategory";
$res=mysqli_query($con,$sql);
 
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['rooms']); ?></option>
<?php
}
?>

