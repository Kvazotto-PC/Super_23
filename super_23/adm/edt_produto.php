<html>
<head><title>Edição de produtos</title></head>
<body>
<?php
 ini_set('default_charset','UTF-8');
include("../conexao.php");
$CodProduto=$_GET['CodProduto'];
$Query="select * from produtos where CodProduto= '$CodProduto' ";
$resultado=mysql_query($Query, $ConexaoId)
or die ("Não foi possivel selecionar o produto");
$registro=mysql_fetch_array($resultado);
$Query1="select * from categorias";
$res=mysql_query($Query1, $ConexaoId);
?>

<form name="form1" method="post" action="edt_produto1.php">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="2">
<tr align="center">
<td colspan="2">Atualizar produto</td>

<input name="CodProduto" type="hidden" value="<?php print("$CodProduto")?>"</td>
</tr>


<td width= "50%" align="right">Categoria:</td>
<td width="50%"><select name="Categoria">
<?php while($Categoria= mysql_fetch_array($res))
{
if($Categoria["CodCategoria"] == $registro["Categoria"])
{


print("<option selected value=\"$Categoria[CodCategoria] \">
 $Categoria[CodCategoria] - $Categoria[Descricao]");
}
else
{
print("<option value= \"$Categoria[CodCategoria]\"> $Categoria[CodCategoria] - $Categoria[Descricao]");
}}?> </select> </td></tr>








<tr><td width= "50%" align="right">Nome:</td>
<td width="50%"><input name="Nome" id="Nome" type="text" value="<?php print("$registro[Nome]")?>"></td>

</tr>



<tr><td width= "50%" align="right">Valor:</td>
<td width="50%"><input name="Valor" id="Valor" type="text" value="<?php print("$registro[Valor]")?>"></td>

</tr>

<tr> <td align="right">&nbsp</td>
<td width= "50%">
<input name="Salvar" id="Salvar" type="submit" value="Salvar">
<input name="Limpar" id="Limpar" type="reset" value="Limpar">
</td></tr>
 </table>
 </form>
 <HR>
</body>
  <a href=lista_produtos.php><BR>Anterior</a> <BR>
<a href=opcoes.html> Opcoes de administrador</a>
</html>
