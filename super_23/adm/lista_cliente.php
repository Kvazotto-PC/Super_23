<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiários</title>
</head>
<body>
    <?php 

           include ("../conexao.php");
           
            $Query = "SELECT * FROM clientes";
            
                $Resultado = mysql_query($Query, $ConexaoId) or die ("Não foi possível selecionar a Base");

                            // PHP8: mysqli_query($ConexaoId; $Query) or die ("Não foi possível selecionar a Base");


                $Colunas =mysql_num_fields($Resultado); //Total de campos do BD.
                
                $Total = mysql_num_rows($Resultado); // total de registros do BD.

                    $LPP = 10; // linhas por página
                    $Paginas = ceil($Total/ $LPP); //função matemática que arredonda para o próximo número inteiro.

                    print("<br><font color=red><b> Clientes </b></font><br><br>"); //manual do php, php.net

                    if(!isset($Pagina)){ //isset verifica

                            $Pagina = 0;

                    }
                    $Inicio = $Pagina * $LPP;
                    $Query = "SELECT * FROM  clientes LIMIT $Inicio, $LPP"; // limita quanto vai me retornar do Banco de dados

                    $Resultado = mysql_query($Query, $ConexaoId);

                    print("<center><table border = 1>");
                    print("<TR>");
                    print("<TH> Código </TH><TH> Nome </TH><TH> Cidade </TH><TH> Estado </TH> <TH> Email </TH><TH> Login </TH><TH> Senha</TH><TH> Validado</TH>
                    <TH> Validar</TH><TH> Editar</TH><TH> Excluir</TH> ");
                    print("</TR>");                         


                    while ($Registros = mysql_fetch_array($Resultado)) {
                        
                       print("<tr>");
                       for($Cont = 0; $Cont < $Colunas; $Cont++){
                           print("<td>$Registros[$Cont]</td>");
                       }
                       print("<td><a href=validar_cliente.php?CodCliente=$Registros[CodCliente]>$Registros[CodCliente]</a></td>");  // O ponto de ? é para poder por variável
                       print("<td><a href=edt_cliente.php?CodCliente=$Registros[CodCliente]>$Registros[CodCliente]</a></td>");
                       print("<td><a href=del_cliente.php?CodCliente=$Registros[CodCliente]>$Registros[CodCliente]</a></td>");
                       print("</tr>");
                    }
                    print("</table>");

                            

                    #region Movimentação
                    if($Pagina > 0){
                        $Menos = $Pagina -1;
                        $link = "$PHP_SELF?Pagina=$Menos";
                        print("<a href=$link>Anterior</a>");
                    }

                    for($Cont=0; $Cont < $Paginas; $Cont++){
                        $link ="$PHP_SELF?Pagina=$Cont";
                        $numpage=($Cont +1);
                        print ("| <a href=$link>$numpage</a>");
                    }
                    if($Pagina < $Paginas -1){
                        $Mais = $Pagina +1;
                        $Link = "$PHP_SELF?Pagina=$Mais";
                        print('<br>');
                        print("<a href=$link>Próximo<br></a>");
                    }
                    #endregion
                    
                    
                    
?>
</body>
<a href="opcoes.html">Opções do ADM</a>
</html>