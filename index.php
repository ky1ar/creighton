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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="apple-touch-icon" href="assets/img/icon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#141918">
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#141918">
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
                        <h2><img src="assets/img/ind.svg" width="16" height="16" alt="ico">Elasticidad</h2> 
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
                        <h2><img src="assets/img/sen.svg" width="16" height="16" alt="ico">Textura</h2>
                        <ul id="sel-sen">
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
                            <li><b>R</b><span>Rojo</span></li>
                            <li><b>Y</b><span>Amarillo</span></li>
                        </ul>
                    </div>
                    <div class="box-fnl">
                        <div class="fnl-dat">
                            <h2>
                                <b id="tmp-ind">-</b>
                                <b id="tmp-sen">-</b>
                                <b id="tmp-clr">-</b>
                            </h2>
                            <h3 id="tmp-lub">L</h3>
                        </div>
                       
                        <div class="fnl-cnt">
                            <div id="ky1-err"></div>
                            <button type="submit" id="frm-rgs" name="submit">Registrar</button>
                        </div>
                    </div>
                </div>
                <img id="frm-cls" src="assets/img/x.svg" alt="">
            </form>
            <div class="lst-hdr">
                <div id="ky1-bck" class="lst-btn"><img src="assets/img/lft.svg" width="16" height="16" alt="ico"></div>
                <?php 
                    date_default_timezone_set('America/Bogota');
                    $meses = array(
                        "enero", "febrero", "marzo", "abril", "mayo", "junio",
                        "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
                    );
                    $today = date('d') . " de " . $meses[date('n') - 1];
                ?>
                <div data-day="<?php echo date("Y-m-d") ?>" class="hdr-mdl">Hoy, <?php echo $today ?></div>
                <div id="ky1-nxt" class="lst-btn"><img src="assets/img/rgt.svg" width="16" height="16" alt="ico"></div>
            </div>
            <form method="post">
                <ul class="lst-dat">
                <?php
                    $sql = "SELECT id, creighton, DATE_FORMAT(r.created, '%d-%m-%Y %h:%i:%s %p') AS created FROM register r WHERE r.day = DATE(DATE_SUB(NOW(), INTERVAL 5 HOUR)) ORDER BY r.created";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0):?>
                        <?php while ($row = $result->fetch_assoc()):?>
                            <li data-id="<?php echo $row['id'] ?>">
                                <b><?php echo $row['creighton'] ?><span><?php echo $row['created'] ?></span></b>
                                <button type="submit" class="lst-del" name="submit"><img src="assets/img/del.svg" width="12" height="12" alt="ico"></button>
                            </li>
                        <?php endwhile; ?>
                    <?php else:?>
                        <li class="lst-clr">No hay registros</li>
                    <?php endif; ?>
                </ul>
            </form>
        </div>
    </section>
</body>
</html>