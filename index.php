<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "myacademy";

$connection = mysqli_connect($db_host, $db_user,$db_password, $db_name);

if (!$connection) 
{
    die("Connection Failed: ". mysqli_connect_error());
    
}
else
{
    
    // $query="CREATE TABLE Employee_Details(Empid int(10) NOT NULL auto_increment PRIMARY KEY, empname varchar(30) NOT NULL)";

    $q="INSERT INTO contact_book values ('Friend1',8789524870)";
    
    $result=mysqli_query($connection,$q);
    
    if($result)
    {
        echo "New Record Creation Successful ";
    }
    else
    {
        echo "New Record Creation Unsuccessful ";
    }
}
?>