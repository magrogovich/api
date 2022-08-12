<!DOCTYPE html>
<html>
   <head>
        <link rel="stylesheet" href="style.css">

   </head>

   <body>
        <img id="loc" src="red.png" alt="">
        <img onload="coordinatesFunc(event)" src="map.png" alt="">

        <?php
            $content = file_get_contents("https://a2a0-41-225-81-33.ngrok.io/");
            $json = json_decode($content, true);
            $x = $json['X'];
            $y = $json['Y'];
        ?>

        <script>
            function coordinatesFunc(event) {

                im = document.getElementById('loc')
                im.style.top = <?= $x ?>+"px";
                im.style.left = <?= $y ?>+"px";
            }
        </script>
   </body>
</html>