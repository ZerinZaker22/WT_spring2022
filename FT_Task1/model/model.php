<?php



class db 
{
    function openCon()
    {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbname = "testdb";

        $conn = new mysqli($serverName,$userName,$password,$dbname);

        if($conn->connect_error)
        {
            echo "connection failed <br>";
        }
        return $conn;
    }






  

    function search($fname,$tableName,$conn)
    {
        $sql = "SELECT * FROM $tableName WHERE fname='$fname' ";
        $result = $conn->query($sql);

        
        return $result;
        
    }


    function update($fname,$age,$salary,$tableName,$conn)
    {
        $sql = "UPDATE $tableName SET age=$age,salary=$salary WHERE fname='$fname' ";
        $result = $conn->query($sql);

        return $result;
        
    }



    function closeCon($conn)
    {
        $conn->close();
    }





}


?>