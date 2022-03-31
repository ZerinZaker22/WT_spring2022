<?php

include ("../control/viewDataControl.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        
        First Name<input type="text" name="fname"> 
        <input type="submit" name="search" value="search data">

    </form>

<br><br><br>

    <form action="" method="POST">
        
        <input type="text" name="fname" value="<?php  echo  $name; ?>">
        <input type="text" name="lname" value="<?php  echo  $lname; ?>">

        <input type="text" name="age" value="<?php  echo  $age; ?>">

        <input type="text" name="salary" value="<?php  echo  $salary; ?>">

        <input type="text" name="address" value="<?php  echo  $address; ?>">




        <input type="submit" name="update" value="update data">

    </form>



</body>
</html>