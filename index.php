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

    // $q="INSERT INTO contact_book values ('Friend1',8789524870)";

    // $Alter_Query="ALTER TABLE contact_book ADD addresses varchar(100) NOT NULL AFTER Phone_Num";

    $get_data="select Name,Phone_Num from contact_book";

    $update_data = "UPDATE contact_book SET 'addresses'='Mumbai' WHERE Phone_Num=9658740352";
    
    $result=mysqli_query($connection,$get_data);
    
    if($count=mysqli_num_rows($result))
    {
        echo $count." Results Found";
        echo "<table border=1>";

        echo "<tr><th>Name</th> <th>Phone Number</th></tr>";

        while($row=mysqli_fetch_array($result))
        {
            echo "<tr> <td>$row[0]</td> <td>$row[1]</td> </tr>";
        }
        echo "</tr>";

        $result=mysqli_query($connection,$update_data);
        if($status = mysqli_num_rows($result))
        {
            echo "Update Success";
        }

    }
    else
    {
        echo "Operation Unsuccessful ";
    }
}
?>