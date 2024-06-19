<?php

$filmes = [
    1 => ['titulo' => 'Spider-Man', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore.', 'imagem' => 'img/hme.png'],
    2 => ['titulo' => 'The Batman', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore.', 'imagem' => 'img/btm.jpg'],
    3 => ['titulo' => 'Wonder Woman', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore.', 'imagem' => 'img/mwmw.jpg'],
    4 => ['titulo' => 'Avatar: The Way of Water', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore.', 'imagem' =>'img/avtt.jpg' ],
    5 => ['titulo' => 'Oppenheimer', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore.', 'imagem' => 'img/oppenheimer.jpg'],
    6 => ['titulo' => 'Barbie', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore.', 'imagem' => 'img/brb.jpg'],
    7 => ['titulo' => 'Bob Esponja', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore. 7.', 'imagem' => 'img/bobs.jpg'],
    8 => ['titulo' => 'Menino do Pijama Listrado', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore. 8.', 'imagem' => 'img/mn.jpeg'],
    9 => ['titulo' => 'Bad Boys', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore. 9.', 'imagem' => 'img/bb.jpg'],
    10 => ['titulo' => 'A Freira', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore. 10.', 'imagem' => 'img/frf.jpeg'],
    11 => ['titulo' => 'Minions', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore. 11.', 'imagem' => 'img/minn.jpg'],
    12 => ['titulo' => 'Todo Mundo em Pânico', 'sinopse' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla iste est, inventore eligendi officia adipisci ipsum quasi commodi? Aspernatur nulla beatae nisi optio veniam deleniti nobis repellendus id perferendis illum dignissimos in, recusandae quisquam fugiat cum ducimus minima deserunt exercitationem sunt, obcaecati eos temporibus necessitatibus, vitae porro! Illum, labore. 12.', 'imagem' => 'img/rdm.jpeg']
];

if (isset($_GET['id']) && array_key_exists($_GET['id'], $filmes)) {
    $filme = $filmes[$_GET['id']];
} else {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/sinopse.css">
  <title>Algoflix</title>
</head>

<body>
  <div class="fundo">
    <div class="fundo_filme">
      <?php echo '<img src="' . $filme['imagem'] . '" alt="' . $filme['titulo'] . '">';?>
    </div>
    <div class="tit_filme">
      <h1><?php echo $filme['titulo'];?></h1>
    </div>
    <div class="btns">
      <button type="button" class="btn_watch"><a href="index.php?id=<?= $filme['id'] ?>">Assistir Trailer</a></button>
    </div>
    <div class="text_sinopse">
      <p><?php echo $filme['sinopse'];?></p>
    </div>
  </div>
  <footer>
    <div class="tit_rodape">
      <h1>Algoflix©</h1>
    </div>
  </footer>
</body>

</html>