<?php
require('config/conexao.php');

//VERIFICAÇÃO DE AUTENTICAÇÃO
$user = auth($_SESSION['TOKEN']);
if ($user){
    echo "<br><br><a style='background:green; color:white; text-decoration:none; padding:20px; border-radius:5px;' href='logout.php'>Sair do sistema</a>";
}else{
    //REDIRECIONAR PARA LOGIN
    header('location: login.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>teste</h1>
</body>

</html>