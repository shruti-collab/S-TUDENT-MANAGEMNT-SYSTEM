
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

<CENTER>
    <h1>ADD TEACHER</h1>

    <DIV>
        <Form>

        <div>
            <label>Teacher Name:</label>
            <input type="text " name="name">
        </div>

        <div>
            <label>Description:</label>
            <input type="text " name="description">
        </div>

        <div>
            <label>Image:</label>
            <input type="file" name="image">
        </div>

        <div>
            
            <input type="submit " name="add_teacher"
            value="Add Teacher">
        </div>

        </Form>
    </DIV>

    </CENTER>

    <P> 
    </P>

</div>






</body>
</html>