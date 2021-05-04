<?php


$SSN=$_GET["SSN"];

require "init.php";

$query="select * from userinfo WHERE SSN='$SSN'";
$res=mysqli_query($con,$query);
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,array('full_name'=>$row[0],'infected'=>$row[3],'phone_number'=>$row[2]

));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>