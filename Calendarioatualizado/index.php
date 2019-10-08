<?php
session_start();
?>
<!--**
 * @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar e Bootstrap 4,
 * o código é aberto e o uso é free, 
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 *-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/personalizado.css">

        <script src='js/core/main.min.js'></script>
        <script src='js/interaction/main.min.js'></script>
        <script src='js/daygrid/main.min.js'></script>
        <script src='js/core/locales/pt-br.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/personalizado.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarE1 = document.getElementById('calerdar');
                var calerdar = new FullCalendar.calerdar(calendarE1){

                    locale:'pt-br',
                    plugins:['interaction', 'dayGrid'],
                    editable:true,
                    eventLimit:true,
                    events:'list_eventos.php'

                }
            })

        </script>
    </head>
    <body>
        
    </body>
</html>
