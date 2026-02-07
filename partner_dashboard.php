<?php
session_start();
include "db.php";

$user_id = $_SESSION['user_id'];

$query = "
SELECT p.company_name, f.sales, f.rating
FROM partners p
JOIN performance f ON p.id = f.partner_id
WHERE p.user_id = $user_id
";

$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<h2>Partner Dashboard</h2>
<p><b>Company:</b> <?= $data['company_name'] ?></p>
<p><b>Sales:</b> <?= $data['sales'] ?></p>
<p><b>Rating:</b> <?= $data['rating'] ?></p>
