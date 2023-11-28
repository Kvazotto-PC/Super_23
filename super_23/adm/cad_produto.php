<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php $Categoria $_POST["Categoria"];

include("..\conexao.php");

$Nome $_POST["Nome"]:

$Valor= $_POST["Valor"];

$CodProduto = $_POST["CodProduto"];

$Query= "UPDATE Produtos SET Categoria = '$Categoria',

Nome = "$Nome, Valor="$Valor'

WHERE $CodProduto ='$CodProduto";

$Resultado mysql_query($Query, $Conexaold) or die ("não foi possivel atualizar");

if($Resultado)

{

print("<br><CENTER>Produto $Nome alterado");

}else{

print("<br><CENTER>Produto $Nome NÃO alterado, erro DE ENVIO SQL");

}
 ?>
</body>
</html>