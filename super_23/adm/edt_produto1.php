<html>
<body>

<?php
     include("..\conexao.php");

     $Categoria = $_POST["Categoria"];
     $Nome = $_POST["Nome"];
     $Valor = $_POST["Valor"];
     $CodProduto = $_POST["CodProduto"];


     $Query ="UPDATE produtos SET Categoria = '$Categoria',
     Nome='$Nome', Valor='$Valor'
     WHERE CodProduto='$CodProduto'";


  $Resultado = mysql_query($Query, $ConexaoId) or die("n�o foi possivel atualizar");
  if($Resultado)
  {
  print("<BR> <center> Produto $Nome alterado");
  }else{
  print("<BR> <center> Produto $Nome N�O alterado, ERRO DE ENVIO SQL");
  }
  ?>
  </body>
 <a href=lista_produtos.php><BR>Anterior</a> <BR>
  <a href=opcoes.html> <BR>Opcoes de administrador</a>
  </html>

