<?php 
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $data = json_decode(file_get_contents('php://input'));

    $id = $data->id;
    $title = $data->title;
    $content = $data->content;
    $image_url = $data->image_url;
    $start_date = $data->start_date;
    $end_date = $data->end_date;
    $status = $data->status;

    $sql = "UPDATE events SET title = :title, content = :content, image_url = :image_url, start_date = :start_date, end_date = :end_date, status = :status WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':title' => $title,
        ':content' => $content,
        ':image_url' => $image_url,
        ':start_date' => $start_date,
        ':end_date' => $end_date,
        ':status' => $status
    ]);

    echo json_encode(["message" => "Ad updated successfully"]);
};
?>