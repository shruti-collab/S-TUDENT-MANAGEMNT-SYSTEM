<?php

$host="localhost";
$user="root";
$password="";
$db="schoolproject";//this is the database name

$data=mysqli_connect($host,$user,$password,$db);
//this is to copy all data in panel from database
$sql="SELECT * from admission";

$result= mysqli_query($data,$sql);

?>


<!-- here the main code starts-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <?php
    include'admin_css.php';
    ?>
</head>
<body>

   <?php
include 'admin_sidebar.php';
  ?>





<div class= " content">

<center>
    <h1> APPLIED FOR THE ADDMISSION</h1>
    <br>
    <br>
    <br>

<table border="1px">

<tr>

<th style="padding:20px; font-size:15px;">NAME</th>
<th style="padding:20px; font-size:15px;">EMAIL</th>
<th style="padding:20px; font-size:15px;">PHONE</th>
<th style="padding:20px; font-size:15px;">MESSAGE</th>
</tr>

<?php

while($info=$result->fetch_assoc())
{


?>

<tr>
<td style="padding:20px">
<!--here we have taken the names from the database -->
<?php echo "{$info['name']}"; ?>

</td>
<td style="padding:20px">
<!--here we have taken the emails from the database -->
<?php echo "{$info['email']}"; ?>

</td>
<td style="padding:20px">
<!--here we have taken the phone nos from the database -->
<?php echo "{$info['phone']}"; ?>

</td>
<td style="padding:30px">
<!--here we have taken the messages from the database -->
<?php echo "{$info['message']}"; ?>

</td>

</tr>
<?php
}

?>


</table>
</center>

    
   
</div>






</body>
</html>