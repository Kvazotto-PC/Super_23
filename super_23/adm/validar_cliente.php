<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Validação do Cliente</title>
<meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
   //  eerro na variável $codCliente  no php 7 
   //$CodCliente = htmlspecialchars($_GET['CodCliente']);

   include("..\conexao.php");
   $Query = "SELECT * FROM Clientes WHERE CodCliente='$CodCliente'";
   $Resultado = mysql_query($Query, $ConexaoId) or die //aqui
   ("Não foi possível selecionar o usuário");
   $Registro = mysql_fetch_array($Resultado);
?>

<form name="form1" method="post" action="validar_cliente.php">


<table width="75%" border="0" align="center"
  cellpadding="1" cellspacing="3">
  <tr>
     <td width="50%" align="right">Código:</td>
     <td width="50%"><input name="CodCliente"
     id="CodCliente"  readonly="true"
     value="<?php print("$Registro[CodCliente]")?>"></td>
  </tr>

<tr>
  <td width="50%" align="right">Nome:</td>
  <td width="50%"><input name="nome" type="text" id="nome"
     readonly="true"
     value="<?php print("$Registro[Nome]")?>"></td>
</tr>
<tr>
     <td align="right">Cidade:</td>
     <td><input name="cidade" type="text" id="cidade"
readonly="true"
value="<?php print("$Registro[Cidade]")?>"></td>
  </tr>
  <tr>
     <td align="right">Estado:</td>
     <td><input name="estado" type="text" id="estado"
     readonly="true"
     value="<?php print("$Registro[Estado]")?>"></td>
  </tr>
  <tr>
     <td align="right">E-mail:</td>
     <td><input name="email" type="text" id="email"
     readonly="true"
     value="<?php print("$Registro[Email]")?>"></td>
  </tr>
  <tr>
     <td align="right">Login:</td>
     <td><input name="login" type="text" id="login"
     readonly="true"
     value="<?php print("$Registro[Login]")?>"></td>
  </tr>
  <tr>
     <td align="right">Senha:</td>
     <td><input name="Senha" type="text" id="Senha"
     readonly="true"
     value="<?php print("$Registro[Senha]")?>"></td>
  </tr>

	<TR>
<TD WIDTH = "50%" ALIGN = "RIGHT">
  Validar(Sim)/Desvalidar(N&atilde;o):</TD>
<TD WIDTH = "50%">


      <SELECT Name="Validado" ID="Validado">
      <?php
      $ValAux = $Registro["Validado"];
      if ($ValAux == 0) {
		print("<OPTION Value='S' CHECKED> Sim </OPTION>");
		print("<OPTION Value='N'>N&atilde;o</OPTION>");
	  }else if ($ValAux == 1){
		print("<OPTION Value='N' CHECKED>N&atilde;o</OPTION>");
		print("<OPTION Value='S'>Sim</OPTION>");
	  }
	  ?>
	</SELECT>


  <!-- botoes de envio -->
  <tr>
     <td align="right">&nbsp;</td>
  <td><input name="Validar" type="submit" id="Validar"
             value="Validar">
  <input name="limpar" type="reset" id="limpar"
         value="Limpar">
     </td>
  </tr>
</table>
</form>

<?php
     function validado($Valor)
     {
        if($Valor == 0)
        {
           return('n');
        }
        else
        {
           return('s');
        }
     }
     // isset testa se o elemento  nulo, aqui usado para testar qual
     // submit foi clicado
     if(isset($_POST["Validar"]))
     {
       print("validado:$Validado - codcliente:$CodCliente");
       if($Validado == 's' OR $Validado == 'S')
       {
          $Query="UPDATE Clientes SET Validado='1'
          WHERE CodCliente='$CodCliente'";
          $Resultado=mysql_query($Query,$ConexaoId)
          or Die ("Não foi possível atualizar os dados");
          if($Resultado)
          {
             print("<br>Cliente Validado<br>");
          }
          }
          else if($Validado == 'n' OR $Validado == 'N')
            {
          $Query="UPDATE Clientes SET Validado='0' WHERE CodCliente='$CodCliente'";
          $Resultado=mysql_query($Query,$ConexaoId)
          or Die ("Não foi possível atualizar os dados");
          if($Resultado)
          {
             print("<br>Cliente Desabilitado<br>");
          }
       }
     }

?>
</body>
<a href="lista_cliente.php"> Página Anterior</a><br>
<a href=opcoes.html>Opções do Administrador</a>

</htm>
