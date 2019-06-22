<?php
$con=mysqli_connect("localhost", "admin", "admin", "james_ajax");
// print_r($_POST);

$que = "SELECT * FROM student";

$result=mysqli_query($con, $que);
$json_arr = [];
while($data=mysqli_fetch_assoc($result))
{
$json_arr[]=$data;
}
echo json_encode($json_arr);
?>



