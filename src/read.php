<?php 
include '../config/db.php';

$sql = "SELECT * FROM ads WHERE status = 'active' AND NOW() BETWEEN start_date AND end_date";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($ads)
?>