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