<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurante</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!-- More CSS -->
    <link rel="stylesheet" href="app.css">
    <link rel="icon" type="images/png" href="favicon.png">
    <script src="app.js" type="text/javascript"></script>
</head>
<body>

<?php
    include 'header.php';
?>

<main>
    <div id="reservas">

        <div id="resultado">
        <?php
        if (isset($_POST["nome"])){
            $nome = $_POST["nome"];
        }
        if (isset($_POST["lastName"])){
            $nome = $_POST["lastName"];
        }
        if (isset($_POST["email"])){
            $email = $_POST["email"];
        }

        if (isset($_POST["mensagem"])){
            $mensagem = $_POST["mensagem"];
        }
        
        if (isset($_POST["prato"])){
            $prato = $_POST["prato"];
        }
        if (isset($_POST["quantidade"])){
            $quantidade = $_POST["quantidade"];
        }
        if (isset($_POST["nomeprato"])){
            $nomeprato = $_POST["nomeprato"];
        }

        if (isset($_POST["preco"])){
            $preco = $_POST["preco"];
        }


        if (!empty($nome)) {
            echo "<br>Nome: ". $nome;
        } 
        if (!empty($email)) echo "<br>Email: ". $email;
        if (!empty($mensagem)) echo "<br>Mensagem: ". $mensagem;


        if (!empty($prato)){
            $total = 0;
            foreach($prato as $key => $value){
                $totallinha = $quantidade[$value]*$preco[$value];
                echo "<br>Escolheu ".$nomeprato[$value] . "; ".$quantidade[$value]." x ".$preco[$value]. " = ".$totallinha;
                $total = $total + $totallinha;
            }
            echo "<br><br>a continha é ".$total."€<br><br>";
        }


        ?>
        </div>

<!-- New Form -->
        <div id="registerbox" class="centralbox">
        <h1>Reservas</h1>
        
        <form id="registerForm" name="sigRegForm" method="post" action="reservas.php" onsubmit="return validateSignIn();">

            <!-- Fisl Last -->
            <label for="nome" class="sidebysidelabel1">Primeiro nome</label>
            <label for="lastName" class="sidebysidelabel1">&Uacute;ltimo nome</label>

            <!--<label for="nome">Nome</label><input type="text" name="nome">-->
            

            <input type="text" name="nome" id="firstName" class="field sidebysidefield1" tabindex="1" autofocus required onfocusout="validarCampo('firstName');">

            <input type="text" name="lastName" id="lastName" class="field sidebysidefield1" tabindex="1" autofocus required onfocusout="validarCampo('lastName', validaPrimNome);">

            <!-- Email -->
            <label for="email" class="mainlabel">Email</label>
            <input type="text" name="email" id="email" class="field mainfield" 
                    tabindex="1" autofocus required onfocusout="validarCampo('email', validaEmail);">
                    
            <!--<br><label for="email">Email</label><input type="text" name="email">-->
            <br>
            
            <input type="checkbox" value="0" name="prato[]" class="inlinecheck2">
            <label for="prato[]" name="prato" class="inlinelabel2">Arroz de Cabidela</label>
            <input type="text" name="quantidade[]" class="field inlinefield2"> 7eur
            <input type="hidden" name="nomeprato[]" value="Arroz de Cabidela">
            <input type="hidden" name="preco[]" value="7">
            
            <br>
            <input type="checkbox" value="1" name="prato[]" class="inlinecheck2">
            <label for="prato[]" name="prato" class="inlinelabel2">Frango Churrasco</label>
            <input type="text" name="quantidade[]" class="field inlinefield2"> 8,50eur
            <input type="hidden" name="nomeprato[]" value="Frango Churrasco">
            <input type="hidden" name="preco[]" value="8.5">
            
            <br>
            <input type="checkbox" value="2" name="prato[]" class="inlinecheck2">
            <label for="prato[]" name="prato" class="inlinelabel2">Arroz de Marisco</label>
            <input type="text" name="quantidade[]" class="field inlinefield2">
            5,50eur
            <input type="hidden" name="nomeprato[]" value="Arroz de Marisco">
            <input type="hidden" name="preco[]" value="5.5">
            
            <br>
            <input type="checkbox" value="3" name="prato[]" class="inlinecheck2">
            <label for="prato[]" name="prato" class="inlinelabel2">Francesinha</label>
            <input type="text" name="quantidade[]" class="field inlinefield2">
            6eur
            <input type="hidden" name="nomeprato[]" value="Francesinha">
            <input type="hidden" name="preco[]" value="6">
            
            <br>
            <input type="checkbox" value="4" name="prato[]" class="inlinecheck2">
            <label for="prato[]" name="prato" class="inlinelabel2">Cachorro Especial</label>
            <input type="text" name="quantidade[]" class="field inlinefield2">
            9eur
            <input type="hidden" name="nomeprato[]" value="Cachorro Especial">
            <input type="hidden" name="preco[]" value="9">
            
            <br>
            <input type="checkbox" value="5" name="prato[]" class="inlinecheck2">
            <label for="prato[]" name="prato" class="inlinelabel2">Carne à Portuguesa</label>
            <input type="text" name="quantidade[]" class="field inlinefield2">
            11,5eur
            <input type="hidden" name="nomeprato[]" value="Carne à Portuguesa">
            <input type="hidden" name="preco[]" value="11.5">
            
            <br>
            <input type="checkbox" value="6" name="prato[]" class="inlinecheck2">
            <label for="prato[]" name="prato" class="inlinelabel2">Ameijoas à Bulhão Pato</label>
            <input type="text" name="quantidade[]" class="field inlinefield2">
            7,5eur
            <input type="hidden" name="nomeprato[]" value="Ameijoas à Bulhão Pato">
            <input type="hidden" name="preco[]" value="7.5">

            <!-- Adress -->
            <label for="msg" class="mainlabel">Mensagem</label>
            <input type="text" name="mensagem" id="mensagem" class="field mainfield" 
                    tabindex="2" required>



            <br>

            <button type="submit" name="signin" id="signinbtn" class="button mainbutton blockbutton" 
                   tabindex="3">Enviar</button>

        </form>
    </div>
<main>


<?php
    include 'footer.php';
?>

</body>
</html>
