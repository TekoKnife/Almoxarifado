<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo'-'.css">
</head>
<body>
    <form class="formulario" method="post">
        
        <?php
            if (isset($_POST["acao"])){
                $nome=$_POST["nome"];
                $telefone=$_POST["telefone"];
                $email=$_POST["email"];
                $radio=$_POST["novidades"];
                $msg=$_POST["mensagem"];

                echo"<p>Olá, ".$nome."</p>";
                echo "<p>Seu email é: ".$email."</p>";
                echo "<p>Seu telefone é: ".$telefone."</p>";
                echo "<p>Sua mensagem é:<br/>".$msg."</p>";
            }
        ?>
        <p><b> Envie uma mensagem preenchendo o formulário abaixo </b></p>

        <div class="field">
            <label for="nome"><b>Seu nome:</b></label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required="">
        </div>
        <br />
        <div class="fiel">
            <label for="telefone"><b>Seu Telefone:</b></label>
            <input type="nunber" maxlength="8" name="telefone" id="telefone" placeholder="Digite seu Telefone*"  required="" > 
        </div>
        <br />
        <div class="fiel">
            <label for="email"><b>Seu E-Mail:</b></label>
            <input  type="email" name="email" id="email" placeholder="Digite su e-mail*" required="">
        </div>
        <br />
        <div class="field">
            <label for="mensagem"><b>Sua mensagem:</b></label>
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem*" required></textarea>
        </div>

        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>
