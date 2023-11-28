<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Produtos </title>
</head>
<body>
    <?php
        include("../conexao.php");
        $CodProduto = $_GET['CodProduto'];
        $Query = "SELECT * FROM Produtos where CodProduto= '$CodProduto'";
        $Resultado = mysql_query($Query, $ConexaoId);
        $Registro = mysql_fetch_array($Resultado);

        $Query1 = "SELECT Descricao from Categorias where CodCategoria= '$Registro[Categoria]'";
        $Res = mysql_query($Query, $ConexaoId);
        $Categoria = mysql_fetch_array($Res);

    ?>

    <form action="del_produto1.php" method= "POST" name = "form1">
        <table width="50%" border = "0" align="center" cellpadding="1" cellspacing="1" >

            <tr>
                <td colspan="2"> <div align="center"> 
                   &#x274C; EXCLUSÃO DE PRODUTOS
                </div></td>
            </tr>
            <tr>
                <td width="50%" align="rigth">Código:</td>
                <td widht="50%"> 
                    <input type="text" id="CodProduto" value="<?php print("$CodProduto")?>"
                    readonly="true">
                </td>
            </tr>
            <tr>
                <td widht="50%" align="right">Categoria: </td>
                <td width="50%"><input type="text" id="Categoria"
                value="<?php print($Categoria['Descricao']);?>" readonly="true"></td>

            </tr>
            <tr>
                    <td widht="50%" align="right">&nbsp </td>
                <td width="50%"><input type="text" id="Excluir" name="Excluir"
                value="<?php print($Categoria['Descricao']);?>" readonly="true"></td>

            </tr>



        </table>
    </form>
</body>
</html>