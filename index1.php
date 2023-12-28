<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Subscribe</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form method="post" action="index1.php">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="Email">
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
        </div>
        <div class="col-md-4">

        </div>
        </form>
    </div>

</body>

</html>

<?php


if(isset($_POST['name']))
{
    $name=$_POST['name'];
    subscribe($name);
}
function subscribe($var1)
{
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "myacademy";

$connection = mysqli_connect($db_host, $db_user,$db_password, $db_name);

$q="INSERT INTO subsc values ($var1,'email@gmai.com')";
$res=mysqli_query($connection,$q);
    if($res)
    {
        echo "Subscribed";
    }


}

?>