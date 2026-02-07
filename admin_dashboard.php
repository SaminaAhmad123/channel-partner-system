<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: login.html");
}
include "db.php";
?>

<h2>Admin Dashboard</h2>

<form method="POST" action="add_partner.php">
    <input type="text" name="company" placeholder="Company Name" required>
    <input type="number" name="sales" placeholder="Sales" required>
    <input type="number" name="rating" placeholder="Rating (1-5)" required>
    <button type="submit">Add Partner</button>
</form>
