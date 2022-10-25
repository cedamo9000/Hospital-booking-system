<!DOCTYPE html>
<html lang="en">
<head>
    <style>
               @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&family=Poppins:wght@200&display=swap');

h1{
    text-align: center;
    margin-top:24%;
    font-family:'fredoka',sans-serif;
}
.alvin{
    height: 114px;
    width: 116px;
    margin-top: -121px;
    position: absolute;
    margin-left: 629px;
}
button{
    height: 48px;
    width: 144px;
    background-color: crimson;
    border: 1px solid crimson;
    border-radius: 5px
}



    </style>
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
$dbname='Hospital';
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
$sql = "INSERT INTO `schedule2` (`book_no`, `Doctor`, `Email`, `Date1`,`Mobile`,`Full_name`,`Gender`) 
VALUES ('0', '$doctor', '$email', '$date', '$mobile', '$username', '$gender')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs){
   
}
else{
   
}

?> 
<a href="service2.php"><button>home</button></a>
<div class="container">
<img src="img/calendar.png" class="alvin">   

<h1>you have successfully scheduled with <?php  echo $_POST['select'];?> On <?php echo $_POST['date'];?>
</div>
</body>
</html>