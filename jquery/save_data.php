<?php
$con=mysqli_connect("localhost", "admin", "admin", "james_ajax");
// print_r($_POST);
extract($_POST);
$que = "INSERT INTO student (full_name, age) VALUES ('$name', '$age')";
mysqli_query($con, $que);

$id = mysqli_insert_id($con); // getting last row database id
$que = "SELECT * FROM student WHERE id=$id";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
echo json_encode($data);

?>