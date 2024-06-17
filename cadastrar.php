<?php
require('config/conexao.php');
    //VERIFICAR SE A POSTAGEM EXISTE DE ACORDO COM OS CAMPOS
if(isset($_POST['nome_completo']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repete_senha'])){
    //VERIFICAR SE TODOS OS CAMPOS FORAM PREENCHIDOS
    if(empty($_POST['nome_completo']) or empty($_POST['email']) or empty($_POST['senha']) or empty($_POST['repete_senha']) or empty($_POST['termos'])){
        $erro_geral = "Todos os campos são obrigatórios!";
        }
        else{
            $nome = limparPost($_POST['nome']);
            $email = limparPost($_POST['email']);
            $senha = limparPost($_POST['senha']);
            $repete_senha = limparPost($_POST['repete_senha']);
            $checkbox = limparPost($_POST['termos']);

            //VALIDAR NOME
            if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
                $erro_nome = "Somente permitido letras e espaços em branco!";
              }

            //VALIDAR EMAIL
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro_email = "Formato de email inválido!";

            //SENHA 6+
            if(strlen($senha) < 6){
                $erro_senha = "Senha deve ter 6 caracteres ou mais!";
            }

            //VERIFICAR SE SENHAS SÃO IGUAIS
            if($senha !== $repete_senha){
                $erro_repete_senha =  "As senhas não são iguais!";
            }

            //VALIDAR CHECKBOX
            if($checkbox !== "ok"){
                $erro_checkbox = "Desativado!";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Cadastrar</title>
</head>
<body>
    <form method="post">
        <h1>Cadastrar</h1>
        
        <?php if(isset($erro_geral)){?>
         <div class="erro-form animate__animated animate__rubberBand">
            echo $erro_geral;
        </div>   
        <?php } ?>

        <div class="input-login">
            <img class="input-icon" src="img/nomecompleto.png">
            <input <?php if(isset($erro_geral) or ($erro_nome)) {echo 'class="Erro-input"';}?> class="erro-input" type="text" name="nome_completo" placeholder="Digite seu nome completo" required>
            <?php if(isset($erro_nome)){?>
            <div class="erro"><?php echo $erro_nome; ?></div>
            <?php } ?>
        </div>

        <div class="input-login">
            <img class="input-icon" src="img/login.png">
            <input <?php if(isset($erro_geral) or isset($erro_nome)) {echo 'class="Erro-input"';}?> type="email" name="email" placeholder="Digite seu email" required>
            <?php if(isset($erro_email)){?>
            <div class="erro"><?php echo $erro_email; ?></div>
            <?php } ?>
        </div>
            
        <div class="input-login">
            <img class="input-icon" src="img/senha.png">
            <input <?php if(isset($erro_geral) or isset($erro_senha)) {echo 'class="Erro-input"';}?> type="password" name="senha" placeholder="Digite sua senha (6 dígitos)" required>
            <?php if(isset($erro_senha)){?>
            <div class="erro"><?php echo $erro_senha; ?></div>
            <?php } ?>
        </div>
        

        <div class="input-login">
            <img class="input-icon" src="img/confsenha.png">
            <input <?php if(isset($erro_geral) or isset($erro_repete_senha)) {echo 'class="Erro-input"';}?> type="password" name="repete_senha" placeholder="Repita a senha" required>
            <?php if(isset($erro_repete_senha)){?>
            <div class="erro"><?php echo $erro_repete_senha; ?></div>
            <?php } ?>
        </div>

        <div <?php if(isset($erro_geral) or isset($erro_checkbox)) {echo 'class="Erro-input"';}else{echo 'class="input-group"'}?>>
            <input  type="checkbox" id="termos" name="termos" value="Ok" required>
            <label for="termos">Ao se cadastrar você concorda com a nossa <a class="link" href="#">Política de Privacidade</a> e os <a class="link" href="#"></a> termos de uso</a></label>
        </div>

            <button class="btn-login" type="submit">Cadastrar</button>
            <a href="index.php">Já tenho uma conta</a>
    </form>
</body>
</html>