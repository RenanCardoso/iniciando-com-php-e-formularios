<?php

$nome = trim($_POST['nome']);
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

echo "$nome<br>";
echo "$numero1<br>";
echo "$numero2<br>";
echo "$operacao<br>";

//if (empty($nome)){
//    echo "Informe o nome!<br>";
//} else {
//    echo "Olá $nome";
//}

if (empty($operacao)){
    echo 'Por favor, selecione alguma operação matématica corretamente';
} else if ($operacao == 'somar'){
    echo 'Por favor, selecione alguma operação matématica corretamente';
}