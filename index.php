<?php
// Recebendo os dados do post (parecido com o scanf do C).
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_POST);
    var_dump(S_FILES); //Agora sim irá printar o arquivo corretamente
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
<!--    Para conseguir enviar um arquivo de forma correta precisa colocar o atributo enctype conforme preenchido abaixo-->
    <form action="index.php" method="post" enctype="multipart/form-data">
<!--    <form action="" method="post"> Envia para a página que está atualmente, pode deixar vazio que dá na mesma-->
<!--        tipos de campos (input)-->
        <input type="text" name="nome"><br><br>
        <input type="email" name="email"><br><br>
        <input type="color" name="color"><br><br>
        <input type="date" name="date"><br><br>
        <input type="datetime" name="datetime"><br><br>
        <input type="file" name="file"><br><br>
        <input type="number" name="number"><br><br>
        <input type="radio" name="radio" value="valor 1">
        <input type="radio" name="radio" value="valor 2">
        <input type="radio" name="radio" value="valor 3"><br><br>
<!--        como os radios acima estão com mesmo name então só permitirá selecionar um, caso os names sejam diferentes permite selecionar mais de um-->
        <input type="checkbox" name="checked" value="check 1"><br><br>
        <input type="submit" value="enviar"><br><br>
    </form>
</body>
</html>
