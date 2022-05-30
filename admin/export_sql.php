<?php 


$username = "root";
$password = "";
$host = "localhost";
$dbname = "hotel";
$path = "/Applications/MAMP/htdocs/html/test123.sql";
$backup = exec('/Applications/MAMP/Library/bin/mysqldump --user=' . $username . ' --password='. $password .' --host=' . $host . ' ' . $dbname . ' > ' . $path . '');

if (isset($_POST['backup'])) {

        if (file_exists($path)) {

            echo "Backup Success";
            echo "<br>";

        } else {

            echo "Backup failed!";
            echo "<br>";
            echo "Backup of " . $dbname . " does not exist in " . $path;

        }

}

if (isset($_POST['download'])) {

    if (file_exists($path)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($path).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($path)); //Whoops...Forgot to change variable!
    readfile($path); //Whoops...Forgot to change variable!
    exit;
} else {

    echo "File does not exist!";

}


}

?>


<!DOCTYPE html>
<html>
<head>
<title>Backup Page</title>
</head>
<body>

        <form method="post">

            <input type="radio" name="backup"> Backup <br>
            <input type="radio" name="download"> Download <br>
            <input type="submit" value="MySQL Backup">

        </form>

</body>
</html>