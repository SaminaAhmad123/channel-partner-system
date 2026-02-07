<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['role'] = $user['role'];
    $_SESSION['user_id'] = $user['id'];

    if ($user['role'] == 'admin') {
        header("Location: admin_dashboard.php");
    } else {
        header("Location: partner_dashboard.php");
    }
} else {
    echo "Invalid login!";
}
?>
