<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['did'])) {

    $did = $_POST['did'];   
    
    
    $sql = "DELETE FROM register WHERE id = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $did);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(array("success" => true));
        exit();
    } else {
        echo json_encode(array("success" => false, "message" => "Error"));
        exit();
    }

}
$conn->close();
?>
