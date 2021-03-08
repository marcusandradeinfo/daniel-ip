<?php


// Essa página exibe o resultado da consulta além de realizar a edição e exclusão de clientes


// Verrifica os dados informados para a consulta.

if(isset($_REQUEST['consultar'])){
  
$opcao=$_REQUEST['opcao']; //Essa variável armazena se o usuário escolheu CPF ou Nome 
$dados=$_REQUEST['dados']; //Essa  variável armazena os dados de cpf ou nome.

}
?>



<html lang="pt-br">
  <title> </title>
      <head>
      <meta charset="utf-8">

      <!-- Inserção de SCRIPTS, Folhas de Estilo e Bootstrap -->
      <link rel="stylesheet" href="css\estilo2.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
       

    </head>
  
          <body id="corpo">
            <div id="titulo">
              <img id="logoempresa" src="logo.png">
              </div>
              <br>
              <div id="conteudo">
                <!-- Linha de Cabeçalho da Tabela-->
                 <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">CÓDIGO</th>
                        <th scope="col">CPF</th>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">DATA DE NASCIMENTO</th>
                        <th scope="col">SEXO</th>
                        <th scope="col">ESTADO CIVÍL</th>
                        <th scope="col">ATIVO</th>
                        <th scope="col"></th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>

                      <!-- Inclusão da pagina consultar junto com as funções de busca-->

                      <?php
                      include "consultar.php";
                      ConsultaCpf($opcao,$dados,$con);
                      ConsultaNome($opcao,$dados,$con);                   
                      ?>

                      <td>

                      <!-- Botão de Edição de Campos que executa a Modal_Alterar -->  
                      <button type="button" class="btn btn-primary" id="consultarcliente" data-toggle="modal" data-target="#Modal_Alterar">Alterar</button></td>

                      <!-- Botão Deletar registross que executa a Modal_Deletar -->
                      <td><button class="btn btn-danger" id="deletar" data-toggle="modal" data-target="#Modal_Deletar">Excluir</button> </td>
                    </tbody>

                  </table>
                  <!-- Botão para voltar a página inicial -->
                 <a class="btn btn-primary" id="consultarcliente" href="index.php" >Voltar</a>         
              </div>


        </body>
        

        
</html>



   <!-- Início do Modal_Alterar -->
      <div class="modal fade" id="Modal_Alterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
            <div class="modal-dialog" role="document">
             <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDITAR DADOS DO CLIENTE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
              </button>
              </div>

            <div class="modal-body">

           
            <div>
              <!-- Nesse formulário os campos são preenchidos com as variáveis $dados encontradas na pagina dadoscliente.php -->
              <!-- O formulário envia os dados para a página alterar.php onde é executada a Query de UPDATE -->
              <form id="f_cadastro" method="post" action="alterar.php" target="_self">
                <input name="codigo" type="hidden" value="<?php include"dadoscliente.php"; echo $dados1?>">

                <label id="texto">CPF:</label><br>
                <input name="cpf" size="13" maxlength="11" required type="text" class="form-control" 
                value="<?php include"dadoscliente.php"; echo $dados2 ?>">

                <label id="texto">Nome:</label><br>
                <input name="nome" size="13" maxlength="30" required type="text" class="form-control" 
                value="<?php include "dadoscliente.php"; echo $dados3 ?>">

                <label id="texto">E-mail:</label><br>
                <input name="email" size="13" maxlength="30" required type="text" class="form-control" 
                value="<?php include "dadoscliente.php"; echo $dados4 ?>">

                <label id="texto">Data de Nascimento:</label><br>
                <input name="dt_nascimento" size="13" maxlength="30" required type="text" class="form-control" 
                value="<?php include "dadoscliente.php"; echo $dados5 ?>">

                <label id="sexo">Sexo:</label><br>
                
                <input type="radio" id="Masculino" name="sexo" value="masculino"
                <?php include "dadoscliente.php"; if($dados6=="masculino"){echo "checked";}?>>   
                <label id="texto">Masculino </label>
                
                <input type="radio" id="Feminino" name="sexo" value="feminino" 
                <?php include "dadoscliente.php"; if($dados6=="feminino"){echo "checked";}?>>
                <label id="texto">Feminino </label><br>

                <label id="estado">Estado Civíl: </label><br>
                  <select name="estado_civil">
                    <option value="solteiro" 
                    <?php include "dadoscliente.php"; if($dados6=="solteiro"){echo "SELECTED";}?>>Solteiro</option>
                    
                    <option value="casado" 
                    <?php include "dadoscliente.php"; if($dados6=="casado"){echo "SELECTED";}?>>Casado</option>
                    
                    <option value="viuvo"
                    <?php include "dadoscliente.php"; if($dados6=="viuvo"){echo "SELECTED";}?>>Viúvo</option>
                    
                    <option value="desquitado"
                    <?php include "dadoscliente.php"; if($dados6=="desquitado"){echo "SELECTED";}?>>Desquitado</option>
                    
                  </select>
                <br><br>
                <label id="std">Status do Usuário:</label><br>
                  <input type="checkbox" id="status" name="status" value="ativo"
                  <?php include "dadoscliente.php"; if($dados7=="ativo"){echo "checked";}?>>

                <label id="texto">Ativo</label><br>
                <button type="submit" class="btn btn-primary" name="alterar">EDITAR</button>            
            </form> 
            </div>
        </div>
    </div>
  </div>
  </div>
   <!-- Fim do Modal_Alterar -->
   


    <!-- Início do Modal_Deletar -->

      <div class="modal fade" id="Modal_Deletar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
            <div class="modal-dialog" role="document">
             <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">DELETAR CLIENTE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
              </button>
              </div>

              <div class="modal-body">

                 <!-- Esse formuulário executa uma confirmação na hora de deletar o cliente e envia os dados para 
                 a pagina deletar.php onde a Query é executada -->
              <form method="post" action="deletar.php" target="_self">
              <label name="texto">DESEJA REALMENTE DELETAR ESSE CLIENTE ?</label><br>
              <input type="hidden" name="codigo" value="<?php include "dadoscliente.php"; echo $dados1 ?>">
              <button type="submit" class="btn btn-success" name="deletar">SIM</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">NÃO</button>
              </form>



            </div>
        </div>
    </div>
  </div>


   


    <!-- Início do Modal_Deletar  -->

















      
     <!-- Fim do Modal Alterar Cliente -->
 

          