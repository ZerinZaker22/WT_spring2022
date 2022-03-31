<?php

include ("../model/model.php");

$name = "";
$lname = "";
$age = "";
$salary = "";
$address = "";





if(isset($_POST["search"]))
{

$fname = $_POST["fname"];


        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $myData = $dbObj->search($fname,"person",$connObj);

        if($myData->num_rows>0)
        {
            while($row=$myData->fetch_assoc())
            {

                $name = $row["fname"];
                $lname = $row["lname"];
                $age = $row["age"];
                $salary = $row["salary"];
                $address = $row["address"];
            }
        }
        else
        {
            echo "no result found";
        }

        $dbObj->closeCon($connObj);

}








if(isset($_POST["update"]))
{

$name = $_POST["fname"];
$age= $_POST["age"];
$salary= $_POST["salary"];


        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $res = $dbObj->update($name,$age,$salary,"person",$connObj);

        if($res==TRUE)
        {
            echo "data updated";
        }
        else
        {
            echo "data update failed";
        }
       
       

        $dbObj->closeCon($connObj);

}



?>