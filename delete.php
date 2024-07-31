<?php

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if($_GET['user_id'])
{
    $users_id = $_GET['user_id'];

    $sql="DELETE FROM user WHERE id='$users_id' ";

    $result=mysqli_query($data,$sql);

    if($result)

    {
        $_SESSION['messgae']='Delete student is successfull';
        header("location:view_student.php");


    }
}


?>