<?php
include "db.php";

$company = $_POST['company'];
$sales = $_POST['sales'];
$rating = $_POST['rating'];

mysqli_query($conn, "INSERT INTO users VALUES (NULL,'Partner','$company@gmail.com','".password_hash("1234",PASSWORD_DEFAULT)."','partner')");
$user_id = mysqli_insert_id($conn);

mysqli_query($conn, "INSERT INTO partners VALUES (NULL,$user_id,'$company','Active')");
$partner_id = mysqli_insert_id($conn);

mysqli_query($conn, "INSERT INTO performance VALUES (NULL,$partner_id,$sales,$rating)");

header("Location: admin_dashboard.php");
?>
