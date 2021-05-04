<?php

$fun =$_GET;
$infected=$fun["infected"];
$SSN=$fun["SSN"];
$SSN=(int)$SSN;
$infected=(int)$infected;
require "init.php";

$query="UPDATE userinfo SET infected='".$infected."'WHERE SSN=".$SSN."";
$m=mysqli_query($con,$query);

if ($query)
{
$response=array();
$code="Done";


$message="success. ";

array_push( $response,array("code"=>$code,"message"=>$message,"infected"=>$infected));

echo json_encode(array("server_response"=>$response));

}
else
{
$response=array();
$code="false";
$message="Some server error occurred. Try again....";
array_push($response,array("code"=>$code,"message"=>$message));
echo json_encode(array("server_response"=>$response));

}
mysqli_close($con);
?>

