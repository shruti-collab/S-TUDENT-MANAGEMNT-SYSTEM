
<?php

error_reporting(0);
session_start();
session_destroy();


if($_SESSION['message'])
{

    $message=$_SESSION['message'];

    echo"<script type='text/javascript'>
    
    alert('$message');

    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>student management system</title>
</head>
<body>
    <nav>
        <label class="logo">STUDENT MANGEMENT</label>

        <ul>
            <li><a href="">home</a></li>
            <li><a href="contactus.html">contact</a></li>
            <li><a href="addmission.php">Addmission</a></li>
            <li><a href="login.php" class="btn btn-success">login</a></li>
</ul>           

</nav>
<div class="section1">
    <br>
    <!--<label class="img_text">we teach students with care</label>-->
<img  class="main_img"src="school_management2.jpg" >

<div class="container">

    <div class="row">

        <div class="col-md-4">

        <img  class="welcome_img"src="school3.jpg">
</div>
<div class="col-md-8">
    <h1>
        WELCOME TO STUDENT MANAGEMENT SYSTEM -MANAGED BY GOVERNMENT WOMENS  POLYTECHNIC.
    </h1>
   <H4>
    <p>A student management system is designed to record, analyze, and manage information in a school. These systems are updated by teachers and school administrators on a rolling basis to better serve the needs of the greater student body. 

Without a student management system, schools would become disorganized, staff would lack clarity into scheduling and student activity, and it would become increasingly difficult for school districts to leverage data in the decision-making process.</p></H4>
    
</div>
    </div>

</div>

</div>
<center>
    
    <h1>
       OUR TEACHERS
    </h1>

</center>
<div class="container">
    <div class="row">
        <div class="col-md-4">

            <img  class="teac" src="principal sir.png">
            <H1>PRINCIPAL</H1>
            <p> IT IS WITH GREAT PRIDE AND PRIVILEGE THAT I WELCOME YOU TO GOVERNMENT WOMEN'S POLYTECHNIC, BOKARO AND I HOPE, YOU ENJOY VISITING OUR WONDERFUL CAMPUS. OUR INSTITUTION IS A LEARNING COMMUNITY THAT SEEKS SUCCESS FOR EACH STUDENT AS WE STRIVE TO DEEPEN OUR CORE VALUES OF DISCIPLINE, LIFE-LONG LEARNING, RESPECT AND RESPONSIBILITY. </P> 
        </div>
        <div class="col-md-4">

        <img class="teac"src="subhashree mam.jpg" style="width:100%;
    height:250px;
"> 
        <H1> MRS.SUBHASHREE DAS</H1>

         <p> A computer teacher is an educator who teaches others computer literacy. They can teach students proper typing, vetting of internet sources and how to use computer programs. Computer teachers can work in schools teaching children technology skills.24-Jun-2022</P>
</div>
     <div class="col-md-4">

     <img class="teac" src="MAJHI SIR.PNG"   > 
     <h1>MR. LALJI MANJHI</h1>

    

     <p> Here are some effective ways to teach operating system (OS) skills : 1. Theory and Conceptual Understanding: - Start with foundational concepts like processes, memory management, file systems, and scheduling algorithms. - Explain the core principles of OS architecture, including kernel, user space, and system calls.03</P>
      
</div>
</div>
</div>


</div>
<center>
    <label>
    <h1>
        OUR COURSES
    </h1>
</label>
</center>
<div class="container">
    <div class="row">
        <div class="col-md-4">

            <img class="CSE" src="computerscience.jpg" style="width:100%;
    height:250px;">
        <h3>Computer Science</h3>    
        </div>
        <div class="col-md-4">

        <img class="ECE"src="ece.jpg" style="width:100%;
    height:250px;"> 
        <h3>Electronics And Communication
            Engenerring </h3>

        </div>
     <div class="col-md-4">

     <img class="EE" src="ee.jpg"
     
     style="width:100%;
    height:250px;"> 
     <h3>Electrical Engeneering</h3>
      
     <p></p>      
</div>
</div>
</div>

<div>
    <center class="">
        <h1 class="adm">ADDMISSION FORM</h1>
</center>
<div align="center" class="addmission_form">

    <form action="data_check.php" method="POST">

    <div>
        <label class="label_text">NAME</label>
        <input class="input_deg" type="text" name="name">
</div>
<br>
<div>
        <label class="label_text">Email</label>
        <input class="input_deg" type="text" name="email">
</div>
<br>
<div>
        <label class="label_text">Message</label>
        <textarea class="input_txt" name="message"></textarea>
</div>
<br>
<div>
        <label class="label_text">phone</label>
        <input class="input_deg" type="phonenumber" name="phone">
</div>
<br>

<div>
<center>
        <input class="btn btn-primary" type="submit"  id="submit" value="apply" name="apply">
        </center>
</div>

<br>

</form>
</div>

<footer>
<h3 class="footer_text">all @copyright reserved by shruti kumari</h3>

</footer>

        
</body>
</html>