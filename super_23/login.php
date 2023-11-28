<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body background="#cccccc">
    <h1>Bem vindo!!</h1>
    
        <?php 
            include("../super_23/conexao.php");
            if($_POST) {
                
                $loginUsuario = $_POST['LoginUsuario'];
                $SenhaUsuario = $_POST['SenhaUsuario'];
                

                if (!$loginUsuario or !$SenhaUsuario){
                    print("É necessário digitar login e senha <br>");
                } else {
                   
                    $Query = "SELECT * FROM clientes WHERE "; 
                    $Query .= " Login='$loginUsuario' AND "; // .= concatena com a linha que o tem
                    $Query .= " Senha='$SenhaUsuario'";
                    //$Resultado = mysqli_query($ConexaoId, $Query);
                    $Resultado = mysql_query($Query, $ConexaoId);

                    //$Registro = mysqli_fetch_array($Resultado);
                    $Registro = mysql_fetch_array($Resultado);

                    //Faz os campos com resultados
                    //print ("<br><br><br> ~Login= $LoginUsuario <br>")

                }if($Registro['Login'] == $loginUsuario and $Registro['Senha'] == $SenhaUsuario)
                                
                        
                        { 
                            
                            if($Registro["Login"] == "admin" and $Registro ["Senha"] == "admin" ){
                                
                                echo ("<script type=text/javascript>");
                                print("window.open('../super_23/adm/lista_cliente.php')");
                                echo ("</script>");
                        } else{
                            print("<br><a href='ver_produto.php?CodClienteId=$Registro[CodCliente]'>==> Produtos</a>");
                            //? Uma maneira de chamar o link e atribuir uma variÃ¡vel a ele
                        }
                  }
                    
            }
        
        ?>
  
   
</body>

</html>