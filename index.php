<?php

require_once 'db.php';

$frase = [
    'Fe en Dios, luz infinita.',
    'Oración: puente hacia el cielo.',
    'Jesús, guía mi sendero siempre.',
    'Amor divino, fuerza eterna.',
    'Espíritu Santo, paz interior constante.',
    'María, madre tierna y fiel.',
    'Cruz, símbolo de redención eterna.',
    'Misericordia de Dios, siempre presente.',
    'Devoción a Cristo, camino seguro.',
    'Amor de Dios, gracia insondable.',
    'Palabra de Dios, sabiduría eterna.',
    'Espíritu Santo, fuego transformador.',
    'Bendiciones divinas, regalos diarios.',
    'Esperanza en Dios, fuerza renovadora.',
    'María, ejemplo de humildad infinita.',
    'Fe en Dios, fortaleza inexpugnable.',
    'Misericordia divina, luz perpetua.',
    'Jesús, amor que sana todo.',
    'Cruz de Cristo, amor redentor.',
    'María, estrella que guía siempre.',
    'Fe firme, raíz de esperanza.',
    'Espíritu Santo, consuelo fiel.',
    'Cristo vive, fuente de vida.',
    'María, consuelo en la adversidad.',
    'Dios provee, confía siempre en Él.',
    'Jesús, Salvador de nuestras almas.',
    'Cruz gloriosa, signo de amor.',
    'Misericordia divina, amor inagotable.',
    'Oración constante, paz en todo.',
    'María, madre amorosa y compasiva.',
    'Fe en Dios, certeza inquebrantable.',
    'Espíritu Santo, sabiduría divina.',
    'Cristo vive en nosotros siempre.',
    'María, intercesora ante Dios fiel.',
    'Confianza en Dios, camino seguro.',
    'Amor divino, cura y transforma.',
    'Cruz redentora, símbolo de esperanza.',
    'Misericordia eterna, regalo divino.',
    'Oración sincera, comunión con Dios.',
    'María, modelo de amor maternal.',
    'Fe en Dios, fuerza invencible siempre.',
    'Espíritu Santo, consuelo en tribulación.',
    'Cristo, camino, verdad y vida.',
    'María, amor que nunca falla.',
    'Confianza en Dios, paz interior perpetua.',
    'Amor divino, gracia infinita siempre.',
    'Cruz de amor, victoria segura.',
    'Misericordia divina, luz que guía.',
    'Oración humilde, corazón transformado.',
    'María, ejemplo de fe inquebrantable.'
];
$rand = $frase[array_rand($frase)];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/fav.png">
    <title>Método Creighton</title>
    <?php require_once 'header.php'; ?>
</head>
<body>
    <header id="ky1-hdr">
        <div class="ky1-wrp">
            <div class="hdr-lft">
                <img src="assets/img/img.jpg" width="40" height="40" alt="ico">
                <div class="hdr-txt">
                    <h1>Leslie Gallegos</h1>
                    <h2><?php echo $rand ?></h2>
                </div>
            </div>
            <div class="hdr-rgt">
                <a href="#"><img src="assets/img/cal.svg" width="24" height="24" alt="ico"></a>
            </div>
        </div>
    </header>

    <section id="ky1-lst">
        <div class="ky1-wrp">
            <div id="ky1-ovr"></div>
            <div id="ky1-add"><img src="assets/img/plsb.svg" width="20" height="20" alt="ico"></div>
            <form id="ky1-add-frm" method="post">
                <div class="frm-cnt"> 
                    <div class="frm-box">
                        <h2><img src="assets/img/ind.svg" width="16" height="16" alt="ico">Indicador</h2> 
                        <ul id="sel-ind">
                            <li><b>0</b><span>Seco</span></li>
                            <li><b>2</b><span>Húmedo</span></li>
                            <li><b>4</b><span>Brillo</span></li>
                            <li><b>6</b><span>0.5 cm</span></li>
                            <li><b>8</b><span>2.0 cm</span></li>
                            <li><b>10</b><span>2.5 cm</span></li>
                        </ul>
                    </div>
                    <div class="frm-box box-mdl">
                        <h2><img src="assets/img/sen.svg" width="16" height="16" alt="ico">Sensación</h2>
                        <ul id="sel-sen">
                            <li><b>L</b><span>Lubri.</span></li>
                            <li><b>G</b><span>Gomoso</span></li>
                            <li><b>P</b><span>Pastoso</span></li>
                        </ul>
                    </div>
                    <div class="frm-box">
                        <h2><img src="assets/img/clr.svg" width="16" height="16" alt="ico">Color</h2>
                        <ul id="sel-clr">
                            <li><b>B</b><span>Marrón</span></li>
                            <li><b>C</b><span>Nublado</span></li>
                            <li><b>CK</b><span>Nub/Cla</span></li>
                            <li><b>K</b><span>Claro</span></li>
                            <li><b>G</b><span>Gomoso</span></li>
                            <li><b>P</b><span>Pastoso</span></li>
                            <li><b>R</b><span>R</span></li>
                            <li><b>Y</b><span>Amarillo</span></li>
                        </ul>
                    </div>
                    <div class="box-fnl">
                        <h2>
                            <b id="tmp-ind">-</b>
                            <b id="tmp-sen">-</b>
                            <b id="tmp-clr">-</b>
                        </h2>
                        <input id="msg-chn" type="hidden" name="changer" value="<?php echo $s_id ?>">
                        <button type="submit" id="frm-rgs" name="submit">Registrar</button>
                    </div>
                </div>
                <img id="frm-cls" src="assets/img/x.svg" alt="">
            </form>
            <div class="lst-hdr">
                <a href="#"><img src="assets/img/lft.svg" width="16" height="16" alt="ico"></a>
                <?php 
                    date_default_timezone_set('America/Bogota');
                    $meses = array(
                        "enero", "febrero", "marzo", "abril", "mayo", "junio",
                        "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
                    );
                    $today = date('d') . " de " . $meses[date('n') - 1];
                ?>
                <div class="hdr-mdl">Hoy, <?php echo $today ?></div>
                <a href="#"><img src="assets/img/rgt.svg" width="16" height="16" alt="ico"></a>
            </div>
            <form method="post">
                <ul class="lst-dat">
                <?php
                    $sql = "SELECT id, creighton, DATE_FORMAT(DATE_SUB(r.fecha, INTERVAL 5 HOUR), '%H:%i:%s') AS hora FROM register r WHERE DATE(r.fecha) = CURDATE() ORDER BY r.fecha";

                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()):?>
                        <li data-id="<?php echo $row['id'] ?>">
                        <b><?php echo $row['creighton'] ?><span><?php echo $row['hora'] ?></span></b>
                        <img src="assets/img/del.svg" width="16" height="16" alt="ico">
                    </li>
                    <?php endwhile; ?>
                </ul>
            </form>
        </div>
    </section>
</body>
</html>