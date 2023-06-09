
<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");

include 'mysqlconfig.php';
$sql="SELECT * FROM angularjs";
$output = array();
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {  
  $output[] = $row;
}

echo json_encode($output);
mysqli_close($conn);

?>