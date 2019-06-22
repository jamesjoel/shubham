<?php
$con=mysqli_connect("localhost", "admin", "admin", "james_ajax");
// print_r($_POST);
$a = $_POST['id'];
$que = "DELETE FROM student WHERE id = $a";
mysqli_query($con, $que);


?>