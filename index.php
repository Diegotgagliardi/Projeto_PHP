<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlgoFlix - Lista de Filmes</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #141414; 
            color: #ffffff; 
            margin: 0;
            padding: 0;
        }

        h1, h2, h3 {
            color: #1DB954; 
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 20px 0;
        }

        .filmes-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px; 
            padding: 20px 0;
        }

        .filme {
            background-color: #111; 
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            transition: transform 0.2s ease-in-out;
            overflow: hidden; 
        }

        .filme-info {
            display: flex;
            flex-direction: column; 
            align-items: center; 
            text-align: center; 
            height: 100%; 
        }

        .filme img {
            width: 100%; 
            height: auto; 
            border-radius: 10px;
            transition: transform 0.2s ease-in-out;
        }

        .filme h2 {
            font-size: 1.2em; 
            margin: 10px 0 0;
        }

        .ver-sinopse {
            background-color: #1DB954; 
            color: #000000;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            margin-top: 10px; 
            text-decoration: none; 
            display: inline-block; 
        }

        .ver-sinopse:hover {
            background-color: #13a143; 
        }

        .filme:hover {
            transform: scale(1.05); 
        }

        @media (max-width: 768px) {
            .filmes-container {
                grid-template-columns: repeat(auto-fit, minmax(100%, 1fr)); 
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ALGOFLIX</h1>
        </div>
        
        <div class="filmes-container">
            <?php

            $filmes = [
                ["id" => 1, "nome" => "Spider-Man", "imagem" => "img/spiderman.jpg"],
                ["id" => 2, "nome" => "The Batman", "imagem" => "img/batman.jpg"],
                ["id" => 3, "nome" => "Wonder Woman", "imagem" => "img/wonderwoman.jpg"],
                ["id" => 4, "nome" => "Avatar: The Way of Water", "imagem" => "img/avatar.jpg"],
                ["id" => 5, "nome" => "Oppenheimer", "imagem" => "img/oppenheimer.jpg"],
                ["id" => 6, "nome" => "Barbie", "imagem" => "img/barbie.jpg"],
                ["id" => 7, "nome" => "Bob Esponja", "imagem" => "img/bob.jpg"],
                ["id" => 8, "nome" => "Menino do Pijama Listrado", "imagem" => "img/pijamalistrado.jpg"],
                ["id" => 9, "nome" => "Bad Boys", "imagem" => "img/badboys.jpg"],
                ["id" => 10, "nome" => "A Freira", "imagem" => "img/afreira.jpg"],
                ["id" => 11, "nome" => "Minions", "imagem" => "img/minions.jpg"],
                ["id" => 12, "nome" => "Todo Mundo em Pânico", "imagem" => "img/panico.jpg"]
            ];


            foreach ($filmes as $filme):
            ?>
            <div class="filme">
                <div class="filme-info">
                    <img src="<?= $filme['imagem'] ?>" alt="<?= $filme['nome'] ?>">
                    <h2><?= $filme['nome'] ?></h2>
                    <a href="sinopse.php?id=<?= $filme['id'] ?>" class="ver-sinopse">Ver Sinopse</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
=======
<?php
require('config/conexao.php');

if(isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    //RECEBER OS DADOS VINDO DO POST E LIMPAR
    $email = limparPost($_POST['email']);
    $senha = limparPost($_POST['senha']);
    $senha_cript = sha1($senha);   

    //VERIFICAR SE EXISTE ESTE USUÁRIO
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? AND senha=? LIMIT 1");
    $sql->execute(array($email,$senha_cript));
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        //EXISTE O USUARIO
        //VERIFICAR SE O CADASTRO FOI CONFIRMADO
            $token = sha1(uniqid().date('d-m-Y-H-i-s'));

            //ATUALIZAR O TOKEN DESTE USUARIO NO BANCO
            $sql = $pdo->prepare("UPDATE usuarios SET token=? WHERE email=? AND senha=?");
            if($sql->execute(array($token,$email,$senha_cript))){
                //ARMAZENAR ESTE TOKEN NA SESSAO (SESSION)
                $_SESSION['TOKEN'] = $token;
                header('location: restrita.php');
            }
    }else{
        $erro_login = "Usuário e/ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Login</title>
</head>

<body>
    <form method="post">
        <h1>Login</h1>

        <?php if (isset($_GET['result']) && ($_GET['result']=="ok")){ ?>
        <div class="sucesso animate__animated animate__rubberBand">
            Cadastrado com sucesso!
        </div>
        <?php }?>

        <?php if(isset($erro_login)){ ?>
        <div style="text-align:center" class="erro-geral animate__animated animate__rubberBand">
            <?php  echo $erro_login; ?>
        </div>
        <?php } ?>


        <div class="input-group">
            <img class="input-icon" src="img/user.png">
            <input type="email" name="email" placeholder="Digite seu email" required>
        </div>

        <div class="input-group">
            <img class="input-icon" src="img/lock.png">
            <input type="password" name="senha" placeholder="Digite sua senha" required>
        </div>
        <button class="btn-blue" type="submit">Fazer Login</button>
        <a href="cadastrar.php">Ainda não tenho cadastro</a>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <?php if (isset($_GET['result']) && ($_GET['result']=="ok")){ ?>
    <script>
    setTimeout(() => {
        $('.sucesso').hide();
    }, 7000);
    </script>
    <?php }?>

</body>

</html>
>>>>>>> 1f5b52f64b4fb4796015bf83b243bcd0fe75e290
