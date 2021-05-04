<?php

$fun =$_POST;
$full_name=$fun["full_name"];
$SSN=$fun["SSN"];
$phone_number=$fun["phone_number"];
$infected=$fun["infected"];
$longitude=$fun["longitude"];
$latitude=$fun["latitude"];

$SSN=(int)$SSN;
$phone_number=(int)$phone_number;
$infected=(int)$infected;
$longitude=(int)$longitude;
$latitude=(int)$latitude;
require "init.php";




$query="insert into userinfo(full_name, SSN, phone_number,infected,longitude,latitude) values ('".$full_name."','".$SSN."','".$phone_number."','".$infected."','".$longitude."','".$latitude."')";
$m=mysqli_query($con,$query);

if (!mysqli_query($con,$query))
{
$response=array();
$code="sign_up_true";


$message="sign_up success. ";

array_push( $response,array("code"=>$code,"message"=>$message,"full_name"=>$full_name,"SSN"=>$SSN,"phone_number"=>$phone_number,"infected"=>$infected,"longitude"=>$longitude,"latitude"=>$latitude));

echo json_encode(array("server_response"=>$response));

}
else
{
$response=array();
$code="reg_false";
$message="Some server error occurred. Try again....";
array_push($response,array("code"=>$code,"message"=>$message));
echo json_encode(array("server_response"=>$response));

}
mysqli_close($con);
?>

