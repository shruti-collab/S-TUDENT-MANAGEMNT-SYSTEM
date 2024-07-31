
<?php

error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$dbname="schoolproject";

$data=mysqli_connect($host,$user,$password,$dbname);

$sql="SELECT * FROM user";

$result=mysqli_query($data,$sql);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    
    <?php
    include'admin_css.php';
    ?>

    <style type="text/css">
        .table_th{

            padding:20px;
            font-size:20px;
        }
        .table_td
        {
            padding:30px;
            background-color:skyblue;

        }


    </style>

</head>
<body>

<?php
include 'admin_sidebar.php';
  ?>

<div class= " content">
    <h1 style="padding:50px; padding-left:500px; text-decoration-line:underline; text-decoration-style:boild;" BOLD>STUDENT DATA</h1>

    <?php

    if($_SESSION['message'])
    {

        echo $_SESSION ['message'];
    }
    unset($_SESSION['message']);

    ?>
<div align ="center">
    
<table border="1px" style="position:center;">
    <tr>
    <th class="table_th">USERNAME</th>
    <th class="table_th">EMAIL</th>
    <th class="table_th">PHONE</th>
    <th class="table_th">PASSWORD</th>
    <th class="table_th">DELETE</th>
    </tr>

    <?php
while($info=$result->fetch_assoc())
{



?>


    <tr>
        <td class=" table_td">
        <?php echo"{$info['username']}";?>
        </td>
        <td class=" table_td">
        <?php echo"{$info['email']}";?>

        </td>
        <td class=" table_td">
        <?php echo"{$info['phone']}";?>

        </td>
        <td class=" table_td">
        <?php echo"{$info['password']}";?>

        </td>

        </td>
        <td class=" table_td">
        <?php 

        echo "<a onclick=\" javascript:return confirm('Are you sure to delete this')\" href='delete.php?user_id={$info['id']}'>Delete</a>";
        
        ?>

        </td>

    </tr>

    <?php

    }

    ?>


</table>
</div>
</div>

</body>
</html>