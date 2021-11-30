<?php

$customerid = $_POST['customerid'];
$name = $_POST['name'];
$country = $_POST['country'];

echo $name ."  ->  ". $country;


$serverName = ".";
$connectionInfo = array("Database"=>"TestDB","UID"=>"joy","PWD"=>"1234");

$conn = sqlsrv_connect($serverName,$connectionInfo);
if(!$conn){
    echo "Failed Connection";
    die(print_r(sqlsrv_errors(),true));
}

$sql = "Insert Into CustomerDetails (customerid,name,country) VALUES ('$customerid','$name','$country')";

$execute = sqlsrv_query($conn,$sql);

if($execute)
{
    echo "<h1>Insert Successfull</h1>";
}
else{
    die(print_r(sqlsrv_errors(),true));
}


?>