<?php
// Recebendo os dados do post (parecido com o scanf do C).
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    echo "Formulário enviado via POST<br>";
//    var_dump($_POST);
    echo 'O formulário foi enviado pelo '.$_POST['nome'];
    exit;
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="exemplo-1.php" method="post">
<!--    <form action="" method="post"> Envia para a página que está atualmente, pode deixar vazio que dá na mesma-->
        <input type="text" name="nome">
        <input type="submit" value="enviar">
    </form>

<!--    <a href="index.php?name=Renan">Nome</a>-->
    <a href="?nome=Renan">Nome</a> <!-- Pode omitir o nome do arquivo que funcionará normalmente -->

    <p><?php echo $_GET['nome']; ?> clicou no link acima</p>
</body>
</html>
