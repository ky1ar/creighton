<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dat'])) {

    $dat = $_POST['dat'];   
    $tdy = date('Y-m-d H:i:s');
    
    if (strpos($dat, '-') !== false) {
        echo json_encode(array("success" => false, "message" => "Error"));
            exit();
    } else {
        $sql = "INSERT INTO register (creighton, fecha) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $dat, $tdy);
        $stmt->execute();
    
        if ($stmt->affected_rows > 0) {
            echo json_encode(array("success" => true));
            exit();
        } else {
            echo json_encode(array("success" => false, "message" => "Error."));
            exit();
        }
    }

}

$conn->close();
?>
