<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dat'])) {

    date_default_timezone_set('America/Bogota');
    $dat = $_POST['dat'];
    $day = $_POST['day'];
    $tdy = date('Y-m-d H:i:s');
    
    if (strpos($dat, '-') !== false) {
        echo json_encode(array("success" => false, "message" => "Error"));
            exit();
    } else {
        $sql = "INSERT INTO register (creighton, day, created) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $dat, $day, $tdy);
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
