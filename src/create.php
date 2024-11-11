<?php 
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image_url = $_POST['image_url'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO events (title, content, image_url, start_date, end_date, status) VALUES (:title, :content, :image_url, :start_date, :end_date, :status)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':title' => $title,
        ':content' => $content,
        ':image_url' => $image_url,
        ':start_date' => $start_date,
        ':end_date' => $end_date,
        ':status' => $status
    ]);

    echo json_encode(["message" => "Ad created successfully"]);

};
?>