<!DOCTYPE html>
<html>
<head>
    <title>Contactos</title>
</head>
<body>

<?php
    include 'header.php';
?>

<main>
    <div id="contactos">
            <div id="resultado">
                <?php
                    if (isset($_POST["nome"])){
                        $nome = $_POST["nome"];
                    }

                    if (isset($_POST["email"])){
                        $email = $_POST["email"];
                    }

                    if (isset($_POST["mensagem"])){
                        $mensagem = $_POST["mensagem"];
                    }

                    if (!empty($nome)) {
                        echo "<br>Nome: ". $nome;
                    } 
                    if (!empty($email)) echo "<br>Email: ". $email;
                    if (!empty($mensagem)) echo "<br>Mensagem: ". $mensagem;
                ?>
            </div>
    </div>

<div class="container">
    <div class="contactos">
      <form method="post" action="contactos.php">
        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="email">Email</label>
        <input type="text" name="email">

        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" placeholder="Escreve algo.." style="height:200px"></textarea>

        <input type="submit" value="Enviar">

      </form>
    </div>


    <iframe src="http://maps.google.com/maps?q=35.856737, 10.606619&z=15&output=embed" frameborder="1"></iframe>
</div>



</main>


<?php
    include 'footer.php';
?>


</body>
</html>