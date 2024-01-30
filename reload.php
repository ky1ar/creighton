<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fecha'])) {

    $fecha = $_POST['fecha'];

    $sql = "SELECT id, creighton, DATE_FORMAT(r.fecha, '%h:%i:%s %p') AS hora FROM register r WHERE DATE(r.fecha) = '$fecha' ORDER BY r.fecha";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0):?>
        <?php while ($row = $result->fetch_assoc()):?>
            <li data-id="<?php echo $row['id'] ?>">
                <b><?php echo $row['creighton'] ?><span><?php echo $row['hora'] ?></span></b>
                <button type="submit" class="lst-del" name="submit"><img src="assets/img/del.svg" width="12" height="12" alt="ico"></button>
            </li>
        <?php endwhile; ?>
    <?php else:?>
        <li class="lst-clr">No hay registros</li>
    <?php endif; 
}
$conn->close();
?>



