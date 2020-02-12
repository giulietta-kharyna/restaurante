<!DOCTYPE html>
<html>
<head>
    <title>Restaurante</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!--LightBox CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" />

</head>
<body>

<?php
    include 'header.php';
?>

<main>
    <div id="galeria">
        <?php
            for ($i=1; $i<=12 ; $i++){

          

            echo '<a href="imagens/foto'. sprintf('%02d', $i) .'.jpg" data-lightbox="image-1" data-title="My caption"><img src="imagens/foto'. sprintf('%02d', $i) .'.jpg" alt=""></a>';

            }

        ?>

    </div>

    
</main>


<?php
    include 'footer.php';
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.js"></script>

</body>
</html>
