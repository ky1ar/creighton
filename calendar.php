<?php
    // Obtener el mes y año actuales o los proporcionados en los parámetros
    $month = isset($_GET['month']) ? $_GET['month'] : date('n');
    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');

    // Obtener el número de días en el mes y el día actual
    $numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $today = date('j');

    // Crear la tabla de días del mes
    echo '<table border="1">';
    echo '<tr><th colspan="7">' . date('F', mktime(0, 0, 0, $month, 1, $year)) . ' ' . $year . '</th></tr>';
    echo '<tr><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th></tr>';

    echo '<tr>';
    $dayOfWeek = date('N', mktime(0, 0, 0, $month, 1, $year));

    for ($i = 1; $i < $dayOfWeek; $i++) {
        echo '<td></td>';
    }

    for ($day = 1; $day <= $numDays; $day++) {
        if ($dayOfWeek > 7) {
            echo '</tr><tr>';
            $dayOfWeek = 1;
        }
        $class = ($day == $today && $month == date('n') && $year == date('Y')) ? 'today' : '';
        echo '<td class="' . $class . '">' . $day . '</td>';
        $dayOfWeek++;
    }

    echo '</tr>';
    echo '</table>';
?>
