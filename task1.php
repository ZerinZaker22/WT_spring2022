<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
</head>
<body>
    <h1>Registration Form</h1>
    <br>
    <hr>
    <form action="#">

    <table>
        <tr>
            <td>
                First Name:
            </td>
            <td>
                <input type="text" name="fname">
            </td>
        </tr>
        
        <tr>
          <td>Last Name:</td>
          <td>
                <input type="text" name="lname">
            </td>
        </tr>
        
       <tr>
          <td>Age:</td>
          <td>
                <input type="text" name="age">
            </td>
        </tr> 
        
        <tr>
          <td>Designation:</td>
          <td>
            <input type="radio" name="des">Junior Programmer<br>
            <input type="radio" name="des">Senior Programmer<br>
            <input type="radio" name="des">Project Lead
          </td>
        </tr>
        
        <tr>
          <td>
            Prefferd Language:
          </td>
          <td>
            <input type="checkbox">JAVA
            <input type="checkbox">PHP
            <input type="checkbox">C++
          </td>
        </tr>
        <tr>
          <td>E-mail:</td>
          <td><input type="email" name="email"</td>
        </tr>
        <tr>
          <td>password:</td>
          <td><input type="password" name="password" id="password" value="" /></td>
        </tr>
        <tr>
          <td>Please Choose a file:<br></td>
          <td><input type="file"</td>
        </tr>
        
        
    </table>
    <input type="submit" value="submit">
    <input type="reset">
    </form>
    
    
</body>
</html>