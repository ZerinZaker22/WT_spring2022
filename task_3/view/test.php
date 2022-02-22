<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <br>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Lirst Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age"></td>
            </tr> 
            <tr>
                <td>Designation:</td>
                <td><input type="radio" name="myradio" value="radio1">Junior Programmer
                    <input type="radio" name="myradio" value="radio2">Senior Programmer
                    <input type="radio" name="myradio" value="radio3">Project Lead
                </td>
            </tr>
            <tr>
                <td>Prefferd language:</td>
                <td><input type="checkbox" name="box1" value="c1"> JAVA  
                    <input type="checkbox" name="box2" value="c2"> PHP  
                    <input type="checkbox" name="box3" value="c3"> C++  
                </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Pease choose a file:</td>
                <td><input type="file" name="myfile"></td>
            </tr>
            
        </table>
        <input type="submit" value="submit" name="submit"> 
        <input type="Reset">
    </form>

</body>
</html>


<?php
include "../control/result.php"
?>