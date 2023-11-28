<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexao</title>
    
</head>
<body>
<?php
            $host="localhost";
            $Usuario="root";
            $Senha="masterkey";
            $Banco="super_23";

       $ConexaoId=mysql_connect($host, $Usuario, $Senha)
        or die("Não foi possível conectar o SGBD");
        

       $BancoDados=mysql_select_db ($Banco, $ConexaoId)
       or die ("Não foi possível selecionar o banco");

      
       

        
        

?>    
</body>
</html>