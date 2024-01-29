<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/fav.png">
    <title>Krear 3D - Soporte Técnico</title>
    <?php require_once 'header.php'; ?>
    <style>
        .today {
            background-color: yellow;
        }
    </style>
</head>
<body>
<div id="calendar">
        <?php include 'calendar.php'; ?>
    </div>
    <button id="prevMonth">Mes Anterior</button>
    <button id="nextMonth">Mes Siguiente</button>
    <button id="currentMonth">Hoy</button>

    <script>
        $(document).ready(function(){
            $('#prevMonth').click(function(){
                $.ajax({
                    url: 'calendar.php',
                    data: { month: <?php echo $month == 1 ? 12 : $month - 1; ?>, year: <?php echo $month == 1 ? $year - 1 : $year; ?> },
                    success: function(data){
                        $('#calendar').html(data);
                    }
                });
            });

            $('#nextMonth').click(function(){
                $.ajax({
                    url: 'calendar.php',
                    data: { month: <?php echo $month == 12 ? 1 : $month + 1; ?>, year: <?php echo $month == 12 ? $year + 1 : $year; ?> },
                    success: function(data){
                        $('#calendar').html(data);
                    }
                });
            });

            $('#currentMonth').click(function(){
                $.ajax({
                    url: 'calendar.php',
                    success: function(data){
                        $('#calendar').html(data);
                    }
                });
            });
        });
    </script>
    </body>
</html>