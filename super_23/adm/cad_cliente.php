<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Opções do ADM</title>
</head>
<body>
<?php
    include("../conexao.php");

    
if (isset($_POST['Salvar'])) {

    $Login = $_POST["Login"];
    $Senha = $_POST["Senha"];
    $Nome = $_POST["Nome"];
    $Cidade = $_POST["Cidade"];
    $Estado = $_POST["Estado"];
    $Email = $_POST["Email"];
    $Query = "INSERT into clientes(Nome, Cidade, Estado, Email, Login, Senha)";
    $Query .= " values('$Nome','$Cidade','$Estado','$Email','$Login','$Senha');";
    $Resultado = mysql_query($Query, $ConexaoId) or die("Não foi possivel inserir novo Usuario");

    if ($Resultado) {
        print("Cliente adicionado com sucesso");
    } else {
        print("Falhou com exito<br>");
    }
}


?>

<a href=opcoes.html> Opções Administrador </a>
</body>
</html>