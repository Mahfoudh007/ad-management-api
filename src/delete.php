<?php 
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt = $stmt->execute([
        'id' => $id
    ]);

    echo json_encode(["message" => "Ad deleted successfully"]);
};
?>