<?php






if(isset($_POST["submit"]))
{
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];


    if(empty($firstName))
    {
        echo "please enter a valid First Name <br>";
    }
    else
    {
        echo "first Name = ".$firstName."<br>";
    }


    if(empty($lastName))
    {
        echo "please enter a valid last Name <br>";
    }
    else
    {
        echo "last Name = ".$lastName."<br>";
    }



    if(empty($age))
    {
        echo "please enter a valid age <br>";
    }
    else
    {
        echo "age = ".$age."<br>";
    }



    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        echo "please enter a valid email <br>";
    }
    else
    {
        echo "email = ".$email."<br>";
    }

    

    if(empty($pass) || strlen($pass)<8 )
    {
        echo "please enter a valid pass <br>";
    }
    else
    {
        echo "password = ".$pass."<br>";
    }



    if(isset($_POST["myradio"]))
    {
        echo "you have selected ".$_POST["myradio"]."<br>";
    }
    else
    {
        echo "please select a radio button <br>";
    }





    if(  !isset($_POST["box1"]) &&!isset($_POST["box2"]) &&!isset($_POST["box3"]) ) 
    {
        echo "you did not select any box <br>";
    }
    else
    {
        if(isset($_POST["box1"]))
        {
            echo "you selected box 1 <br>";
        }
        elseif(isset($_POST["box2"]))
        {
            echo "you selected box 2 <br>";
        }
        else
        {
            echo "you selected box 3 <br>";
        }
    }


    if($_FILES["myfile"]["type"]=='image/jpeg' && $_FILES["myfile"]["size"]<=2000000)
    {
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/"."abc.jpg"))
        {
            echo "uploaded <br>";
            echo $_FILES["myfile"]["size"];
        }
        else
        {
            echo "error";
        }
    }
    else
    {
        echo "must be image and size must be less than 2 mb";
    }
   
}









?>