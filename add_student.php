<?php

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";

    $check="SELECT * FROM user WHERE username='$username'";
    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'>
        alert('username already exist. try anotherone');
        
        </script>";

    }
     else{

    $sql="INSERT INTO user(username,email,phone,usertype,password) VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";

    $result=mysqli_query($data,$sql);

    if($result)
    {

        echo "<script type='text/javascript'>
        alert('DATA UPLAOD SUCCESS');
        
        </script>";
    }


    else
    {
        echo"UPLOAD FAILED";

    }

     }

}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>


    <style>

        label{
             display: inline-block;
             text-align: righ;
             width:100px;
             padding:top:10px;
             padding-bottom:10px;
        }

        .div_deg{

            background-color:skyblue;
            width:600px;
            height: 300px;
            padding-top:70px;
            padding-bottom:70px;



        }


    </style>




    
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
    <h1>ADD STUDENT</h1>

    <form class="div_deg" action="#" method="POST">



    <div >
        <label>NAME</label>
        <input type="text" name="name">
    </div>

    <div>
        <label>EMAIL</label>
        <input type="email" name="email">
    </div>

    <div>
        <label>PHONE</label>
        <input type="number" name="phone">
    </div>

    <div>
        <label>PASSWORD</label>
        <input type="text" name="password">
    </div>

    <div>
        
        <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
    </div>


    </form>

    </center>
</div>






</body>
</html>