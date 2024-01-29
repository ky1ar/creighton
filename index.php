<?php
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
            <div id="ky1-add-frm">
                <div class="frm-cnt">
                    <div class="frm-box">
                        <h2>Indicador</h2>
                        <ul>
                            <li>0<span>Seco</span></li>
                            <li>2<span>Húmedo</span></li>
                            <li>4<span>Brillo</span></li>
                            <li>6<span>0.5 cm</span></li>
                            <li>8<span>2.0 cm</span></li>
                            <li>10<span>2.5 cm</span></li>
                        </ul>
                    </div>
                    <div class="frm-box box-mdl">
                        <h2>Sensación</h2>
                        <ul>
                            <li>L<span>Lubri.</span></li>
                            <li>G<span>Gomoso</span></li>
                            <li>P<span>Pastoso</span></li>
                        </ul>
                    </div>
                    <div class="frm-box">
                        <h2>Indicador</h2>
                        <ul>
                            <li>B<span>Marrón</span></li>
                            <li>C<span>Nublado</span></li>
                            <li>CK<span>Nub/Cla</span></li>
                            <li>K<span>Claro</span></li>
                            <li>G<span>Gomoso</span></li>
                            <li>P<span>Pastoso</span></li>
                            <li>R<span>R</span></li>
                            <li>Y<span>Amarillo</span></li>
                        </ul>
                    </div>
                    <div class="box-fnl">
                        <h2>6GC</h2>
                        <div id="frm-rgs">Registrar</div>
                    </div>
                </div>
            </div>
            <div class="lst-hdr">
                <a href="#"><img src="assets/img/lft.svg" width="16" height="16" alt="ico"></a>
                <div class="hdr-mdl">Hoy, 6 de enero</div>
                <a href="#"><img src="assets/img/rgt.svg" width="16" height="16" alt="ico"></a>
            </div>
            <div class="">
                <p>No hay registros</p>
            </div>
        </div>
    </section>
</body>
</html>