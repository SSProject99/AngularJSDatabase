<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");

include 'mysqlconfig.php';
$data = json_decode(file_get_contents("php://input"));
echo $data->ngName;

if (isset($data->ngName, $data->ngRoll)) {
    $ngNameVal = $data->ngName;
    $ngRollVal = $data->ngRoll;
    $sql = "INSERT INTO angularjs (ngNameCol, ngRollCol) VALUES('$ngNameVal','$ngRollVal')";
    $msg = mysqli_query($conn, $sql);
    // if ($msg) {
    //     echo "Data inserted successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
}
?>