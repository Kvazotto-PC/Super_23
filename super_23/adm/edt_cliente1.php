<html>
<body>

<?php
     include("..\conexao.php");

     $LoginUsuario = $_POST["LoginUsuario"];
     $SenhaUsuario = $_POST["SenhaUsuario"];
     $Nome = $_POST["Nome"];
     $Cidade = $_POST["Cidade"];
     $Estado = $_POST["Estado"];
     $Email = $_POST["Email"];
     $CodCliente = $_POST["CodCliente"];

     $resultado = $_POST["Salvar"];
     if($_POST["Salvar"])
     {
     $query="UPDATE clientes SET Nome='$Nome', Cidade='$Cidade', Estado='$Estado', Email='$Email', Login='$LoginUsuario', Senha='$SenhaUsuario' WHERE CodCliente='$CodCliente'";
     $resultado=mysql_query($query, $ConexaoId) or die ("Não foi possivel atualizar");
     if ($resultado)
     {
     print("<BR>cliente $Nome alterado com sucesso");
     }
     }


?>
</body>
<a href=opcoes.html><br>opções do ADM</a>
</html>
