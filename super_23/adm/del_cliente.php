<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include("../conexao.php");
    
    $Query  = "SELECT * FROM CLIENTES WHERE CodCliente='$CodCliente'";
    $Resultado = mysql_query($Query, $ConexaoId);
    $Registro = mysql_fetch_array($Resultado);
?>
<body>
    <form name = "form1" method ="POST" action="del_cliente1.php">
        <table width = "75%" border = "0" align = "CENTER" cellpading ="1" cellspacing ="3">
            <tr>
                <td colspan = "2"> <div align="center" >Exclusão de Clientes</div> </td>
            </tr>
            <tr>
                <td width="50%" align="right">Código: </td>
                <td width="50">
            <input name="CodCliente" type="text" id="CodCliente"
            value="<?php print("$CodCliente")?>" readonly ="true">
                </td>
            </tr>
            <tr>
                <td widht="50%" align="right"> Nome:</td>
                <td widht="50%"> <input name="Nome" type="text" id="Nome" value="<?php print($Registro['Nome']);?>">
        </td>
            </tr>
            <tr>
            <td widht="50%" align="right">&nbsp;</td>
    <td widht="50%"> <input name="Excluir" type="submit" id="excluir" value="Excluir">
<input type="button" value="Voltar"
OnClick="window.location='lista_cliente.php'"></td>
            </tr>

        </table>
    </form>
</body>
</html>