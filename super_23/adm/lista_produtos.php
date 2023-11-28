<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Opcoes do ADM</title>
</head>
<BODY>
<?php
 ini_set('default_charset','UTF-8');
  print("<h1>LISTA DE PRODUTOS</h1>");
  include("../conexao.php");
  $Query= "select * from produtos";


  $resultado= mysql_query($Query, $ConexaoId) or die ("Não foi possivel selecionar o banco");
  $colunas=mysql_num_fields($resultado);  //total de campos do banco
  $total=mysql_num_rows($resultado); //total de registros
  $lpp=10; //linhas por pagina
  $paginas=ceil($total/$lpp);
  print("<BR><font color=red><B>clientes</b></font><BR>");
  if(!isset($pagina)){
  $pagina=0;
  }
  $inicio=$pagina*$lpp;
  $Query="select * from produtos limit $inicio,$lpp";
  $Resultado = mysql_query($Query,$ConexaoId);
  print("<center><TABLE Border = 1>");
  print("<TR>");
  print("<TH>CodProduto</TH><TH>Categoria</TH><TH>Nome</TH>
     <TH>Valor</TH> <TH>Editar</TH> <TH>Excluir</TH>");
  print("</TR>");
  while ($Registros = mysql_fetch_array($Resultado)) {
    print("<TR>");
    $SQL = "SELECT * FROM Categorias where
      CodCategoria ='$Registros[Categoria]'";
    $Result = mysql_query($SQL,$ConexaoId);
    $Categoria = mysql_fetch_array($Result);
    for ($Cont = 0; $Cont < $colunas; $Cont++) {
      if ($Cont == 1) {
        print("<TD>$Categoria[CodCategoria] - $Categoria[Descricao] </TD>");
      } else {
        print("<TD>$Registros[$Cont]</TD>");
      }
    }

print("<TD><a href=edt_produto.php?CodProduto=$Registros[CodProduto]>$Registros[CodProduto]</a></td>");
print("<TD><a href=del_produto.php?CodProduto=$Registros[CodProduto]>$Registros[CodProduto]</a></td>");
print("</tr>");
  }
print("</table></center>");

 #region MOVIMENTA��O
 if ($pagina>0){
  $menos=$pagina-1;
  $link="PHP_SELF?pagina=$menos";
  print("<a href=$link>Anterior</a>");
  }
  for($cont=0;$cont<$paginas;$cont++){
  $link="$PHP_SELF?pagina=$cont";
  $numpage=($cont+1);
  print(" | <a href=$link>$numpage</a>");
  }
  if ($pagina<$paginas-1){
  $mais=$pagina+1;
  $link="$PHP_SELF?pagina=$mais";
  print("<a href=$link> | Pr�xima</a>");
  }
  
 #endregion

?><BR>
   <a href=opcoes.html> Opcoes do administrador </a> </html>
