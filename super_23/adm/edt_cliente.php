<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de clientes</title>
</head>
<body>
    <?php
                include("..\conexao.php");
                $CodCliente = $_GET['CodCliente'];
                $Query = "SELECT * FROM CLIENTES WHERE CodCliente = '$CodCliente'";
                //$Resultado = mysqli_query($ConexaoId,$Query) or die ("Não foi possivel selecionar o usuario!");
                $Resultado = mysql_query($Query,$ConexaoId);
                //$Registro = mysqli_fetch_array($Resultado);
                $Registro = mysql_fetch_array($Resultado);
    ?>

<form name="form1" method="post" action="edt_cliente1.php">
<table width="75%" border="0" align="center" cellpadding="1" cellspacing="3">
<tr align="center">
<td colspan="2">Atualizar cliente</td>
<td><input name="CodCliente" type="hidden" value="<?php print("$CodCliente")?>"</td>
</tr>
<tr>
<td width= "50%" align="right">Nome:</td>
<td width="50%"><input name="Nome" id="Nome" type="text" value="<?php print("$Registro[Nome]")?>"></td>
</tr>
<HR>
<tr><td width= "50%" align="right">Cidade:</td>
<td width="50%"><input name="Cidade" id="Cidade" type="text" value="<?php print("$Registro[Cidade]")?>"></td>
</tr>
<tr><td width= "50%" align="right">Estado:</td>
<td width="50%"><select name="Estado" id="Estado" type="text" value="<?php print("$Registro[Estado]")?>">

                <option value="SC">SC</option>
                <option value="PR">PR</option>
                <option value="RS">RS</option>
                <option value="SP">SP</option>
                <option value="RJ">RJ</option>
                <option value="MG">MG</option>
                </select></td></tr>

<tr><td width= "50%" align="right">Email:</td>
<td width="50%"><input name="Email" id="Email" type="text" value="<?php print("$Registro[Email]")?>"></td>  </tr>
<tr><td width= "50%" align="right">Login:</td>
<td width="50%"><input name="LoginUsuario" id="Login" type="text" value="<?php print("$Registro[Login]")?>"></td>  </tr>

<tr><td width= "50%" align="right">Senha:</td>
<td width="50%"><input name="SenhaUsuario" id="Senha" type="text" value="<?php print("$Registro[Senha]")?>"></td>   </tr>

<tr> <td align="right">&nbsp</td>
<td width= "50%">
<input name="Salvar" id="salvar" type="submit" value="Salvar">
<input name="Limpar" id="limpar" type="reset" value="Limpar"></td></tr>
 </table>
 </form>
 <HR>
</body>
</html>