<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $CodCliente = $_POST["CodCliente"];
    $Nome = $_POST["Nome"];
    if ($_POST['Excluir']) {
        include ("../conexao.php");
        $Query = "DELETE FROM CLIENTES WHERE
        CodCliente = '$CodCliente'";
        $Resultado=mysql_query($Query, $ConexaoId)
        or die ("Não foi possivel excluir");
        if($Resultado){
            print("cliente $Nome Excluido<br>");
        }
    }   
    ?>
</body>
<a href="lista_cliente.php">Voltar para clientes</a><br>
<a href="opcoes.html">Opções do ADM</a>
</html>