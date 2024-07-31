<?php
require_once 'db.php';

$frase = [
    'Fe en el Sagrado Corazón de Jesús, luz infinita.',
    'Oración al Sagrado Corazón, puente hacia el cielo.',
    'Jesús, guía mi sendero con tu Sagrado Corazón.',
    'Amor divino del Sagrado Corazón, fuerza eterna.',
    'Espíritu Santo, paz interior a través del Sagrado Corazón.',
    'María, madre tierna del Sagrado Corazón.',
    'Cruz, símbolo de redención en el Sagrado Corazón.',
    'Misericordia del Sagrado Corazón, siempre presente.',
    'Devoción al Sagrado Corazón de Cristo, camino seguro.',
    'Amor del Sagrado Corazón de Jesús, gracia insondable.',
    'Palabra del Sagrado Corazón, sabiduría eterna.',
    'Espíritu Santo, fuego transformador del Sagrado Corazón.',
    'Bendiciones del Sagrado Corazón, regalos diarios.',
    'Esperanza en el Sagrado Corazón, fuerza renovadora.',
    'María, ejemplo de humildad del Sagrado Corazón.',
    'Fe en el Sagrado Corazón, fortaleza inexpugnable.',
    'Misericordia del Sagrado Corazón, luz perpetua.',
    'Jesús, amor del Sagrado Corazón que sana todo.',
    'Cruz del Sagrado Corazón, amor redentor.',
    'María, estrella que guía hacia el Sagrado Corazón.',
    'Fe firme en el Sagrado Corazón, raíz de esperanza.',
    'Espíritu Santo, consuelo fiel del Sagrado Corazón.',
    'Cristo vive en el Sagrado Corazón, fuente de vida.',
    'María, consuelo en la adversidad del Sagrado Corazón.',
    'Dios provee a través del Sagrado Corazón, confía siempre en Él.',
    'Jesús, Salvador de nuestras almas con el Sagrado Corazón.',
    'Cruz gloriosa del Sagrado Corazón, signo de amor.',
    'Misericordia del Sagrado Corazón, amor inagotable.',
    'Oración constante al Sagrado Corazón, paz en todo.',
    'María, madre amorosa y compasiva del Sagrado Corazón.',
    'Fe en el Sagrado Corazón, certeza inquebrantable.',
    'Espíritu Santo, sabiduría divina del Sagrado Corazón.',
    'Cristo vive en el Sagrado Corazón, fuente de vida.',
    'María, intercesora fiel ante el Sagrado Corazón.',
    'Confianza en el Sagrado Corazón, camino seguro.',
    'Amor divino del Sagrado Corazón, cura y transforma.',
    'Cruz redentora del Sagrado Corazón, símbolo de esperanza.',
    'Misericordia eterna del Sagrado Corazón, regalo divino.',
    'Oración sincera al Sagrado Corazón, comunión con Dios.',
    'María, modelo de amor maternal del Sagrado Corazón.',
    'Fe en el Sagrado Corazón, fuerza invencible siempre.',
    'Espíritu Santo, consuelo en tribulación del Sagrado Corazón.',
    'Cristo del Sagrado Corazón, camino, verdad y vida.',
    'María, amor que nunca falla del Sagrado Corazón.',
    'Confianza en el Sagrado Corazón, paz interior perpetua.',
    'Amor divino del Sagrado Corazón, gracia infinita siempre.',
    'Cruz de amor del Sagrado Corazón, victoria segura.',
    'Misericordia divina del Sagrado Corazón, luz que guía.',
    'Oración humilde al Sagrado Corazón, corazón transformado.',
    'María, ejemplo de fe inquebrantable en el Sagrado Corazón.'

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
    <meta name="apple-mobile-web-app-status-bar-style" content="#f0f0f0">
    <link rel="apple-touch-startup-image" href="assets/img/icon.png">
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f0f0f0">
    <link rel="icon" href="assets/img/fav.png">
    <title>Método Creighton</title>
    <?php require_once 'header.php'; ?>
</head>
<body>
    <?php require_once 'application/views/sprite.php'; ?>

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

            <div class="calendar-header">
                <span class="month-name"></span>
                <div class="buttons">
                    <button class="prev-month">
                        <svg width="16" height="16" class="flip">
                            <use xlink:href="#icon-right"></use>
                        </svg>
                    </button>

                    <button class="next-month">
                        <svg width="16" height="16">
                            <use xlink:href="#icon-right"></use>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="day-selector">
                <div class="days-container">
                </div>
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