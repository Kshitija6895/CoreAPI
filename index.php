<?php

header("Content-Type:application/json");

$con = mysqli_connect("localhost","root","","nodejs_api");
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die();
}

 $result = mysqli_query($con,"SELECT * FROM `data`");

while($row = mysqli_fetch_array($result))
{
 $name = $row['name'];
 response($name);
}
 mysqli_close($con);
 
function response($name){
 $response['name'] = $name;
 $json_response = json_encode($response);
 echo $json_response;
}


?>
