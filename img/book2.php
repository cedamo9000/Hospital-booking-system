<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//another alternative is to use mysqli connection instead of mysql
$servername='localhost';
$username='root';
$dbname='top-doc';
$password='Toio';
$con = mysqli_connect ("$servername","$username","$password","$dbname");
// Create connection
$doctor=$_POST['select'];
$email = $_POST['email'];
$date = $_POST['date'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$gender = $_POST['radio'];

//inserting using mysql command into php database
$sql = "INSERT INTO `schedule3` (`id`, `Doctor`, `Email`, `Date`,`Mobile`,`Full-name`,`Gender`) 
VALUES ('0', '$doctor', '$email', '$date', '$mobile', '$username', '$gender')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{

   
}
?>    
<h1>you have successfully scheduled with <?php  echo $_POST['select'];?> On <?php echo $_POST['date'];?>
</body>
</html>