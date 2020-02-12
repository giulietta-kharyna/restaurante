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

    <?php 
    $servidor = "localhost";
    $utilizador = "root";
    $password = "";
    $basedados = "restaurante";

    $ligacao = mysqli_connect($servidor, $utilizador, $password);

    if (!$ligacao){
        die("Erro");
    }


    mysqli_select_db($ligacao, $basedados);

    $consulta = "SELECT * FROM ementa";
    $resultado = mysqli_query($ligacao, $consulta);

    if (mysqli_num_rows($resultado) > 0) {

        while ($row = mysqli_fetch_assoc($resultado)) { #mysqli_fetch_assoc - vai buscar primeira linha de resultado
            //echo "<br>".$row["foto"];
            //echo "<br>".$row["titulo"];
            //echo "<br>".$row["descricao"];
            //echo "<br>".$row["preco"];
?>

<div id="galeria">
    <a href="imagens/ementa/<?=$row["foto"]?>" data-lightbox="ementa" data-title="<?=$row["titulo"]?>"><img src="imagens/ementa/<?=$row["foto"]?>"></a>
    <h3><?=$row["titulo"]?></h3>
    <h4><?=$row["descricao"]?></h4>
    <h4>Pre&ccedil;o <?=$row["preco"]?>eur</h4>

</div>




<?php
        }
    }

 ?>
</main>


<?php
    include 'footer.php';
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.js"></script>

</body>
</html>
