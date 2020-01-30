<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha Calculadora</title>
</head>
<body>
    <form action="recebe_valores_calc.php" method="post">
        <?php echo 'Insira seu nome: '?><input type="text" name="nome"><br><br>
        <?php echo 'Insira um número: '?><input type="text" name="numero1"><br><br>
        <?php echo 'Insira outro número: '?><input type="text" name="numero2"><br><br>
        <?php echo 'O que você deseja fazer: '?>
        <select name="operacao">
            <option value="">Selecione...</option>
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>