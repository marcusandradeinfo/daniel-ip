<!DOCTYPE HTML>

<html lang="pt-br">
	<title> </title>
	    <head>
	  	<meta charset="utf-8">
	    <link rel="stylesheet" href="css\estilo.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>



		</head>
  
        	<body id="corpo">
        		<div id="titulo">
        			<img id="logoempresa" src="logo.png">
          	</div>
          		<br>

              <!--  AQUI SE ENCONTRA OS DOIS BOTÕES QUE CHAMAM AS MODAIS CADASTRO E CONSULTA -->
              		<div id="conteudo">
              			<a class="btn btn-light" id="cadastocliente" data-toggle="modal" 
                    data-target="#Modal_Cadastro" >Cadastro</a>
              			&nbsp
          				 	<a class="btn btn-light" id="consultarcliente" data-toggle="modal" 
                    data-target="#Modal_Consulta">Consultar Cliente</a>			 	
                	</div>

            </body>
        
        
  </html>




   <!-- Início da Modal_Cadastro -->

                          <div class="modal fade" id="Modal_Cadastro" tabindex="-1" role="dialog" 
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">CADASTRO DE CLIENTE</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                          </div>

                          <div class="modal-body">

                              
                          <div>

                          <!-- A Modal_Cadastro envia os dados do formulário para a pagina cadastro.php   -->

                          <form name="f_cadastro" method="post" action="cadastro.php" target="_self" onSubmit="return enviardados();">
        
                          	<label id="texto">CPF:</label><br>
                          	<input name="cpf" size="13" maxlength="15" required type="text" class="form-control">
                          	<label id="texto">Nome:</label><br>
                          	<input name="nome" size="13" maxlength="30" type="text" class="form-control" >
                          	<label id="texto">E-mail:</label><br>
                          	<input name="email" size="13" maxlength="30" required type="text" class="form-control" >
                          	<label id="texto">Data de Nascimento:</label><br>
                          	<input name="dt_nascimento" size="13" maxlength="30" required type="text" class="form-control" >
                          	<label id="sexo">Sexo:</label><br>
                          	<input type="radio" id="Masculino" name="sexo" value="masculino">
                          	<label id="texto">Masculino </label>
                          	<input type="radio" id="Feminino" name="sexo" value="feminino"> 
                          	<label id="texto">Feminino </label><br>
                          	<label id="estado">Estado Civíl: </label><br>
                          	<select name="estado_civil">
                								  <option value="solteiro">Solteiro</option>
                								  <option value="casado" selected>Casado</option>
               								    <option value="viúvo">Viúvo</option>,
               								    <option value="desquitado">Desquitado</option>
							               </select>
              							<br><br>
              							<label id="std">Status do Usuário:</label><br>
              							<input type="checkbox" id="status" name="status" value="ativo">
              							<label id="texto">Ativo</label><br>

                            <!-- O Botão cadastrar envia os dados do formuláro e chama o script para validar os campos do
                              formulário da modal-->

						              	<button type="submit" class="btn btn-primary" name="cadastrar" onclick="return validar()">CADASTRAR</button>
                          	
                          </form> 
                             

                           </div>
                           </div>
                           </div>
                           </div>
                           </div>

<!-- Fim da Modal_Cadastro-->




<!-- Nesse script os dados do formulário são validados-->

              <script language="javascript" type="text/javascript">

              function validar() {
              var nome = f_cadastro.nome.value;
              var cpf  = f_cadastro.cpf.value.length;
              var email = f_cadastro.nome.value;
              var nascimento = f_cadastro.nome.value;

              if (cpf == 0){
                alert('Preencha o CPF');
                f_cadastro.cpf.focus();
              }

              if (cpf < 11 ){
                alert('Preencha o CPF corretamente');
                f_cadastro.cpf.focus();
              }

              if (cpf > 11 ){
                alert('Preencha o CPF apenas com números');
                f_cadastro.cpf.focus();
              }

              if (nome == "") {
                alert('Preencha o campo com seu nome');
                f_cadastro.nome.focus();
              }

              if (email == "") {
                alert('Preencha o email');
                f_cadastro.nome.focus();
              }

               if (nascimento == "") {
                alert('Preencha a data de nascimento');
                f_cadastro.nome.focus();
              }


              }
              </script>





<!-- Início do Modal_Consulta -->

                          <div class="modal fade" id="Modal_Consulta" tabindex="-1" role="dialog" 
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">CONSULTAR CLIENTE</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                          </div>

                          <div class="modal-body">

                              
                          <div>
                          
                          <!-- Esse formulário da modal oferece o filtro para buscar por nome ou por CPF
                          e enviapara a página resultado.php a consulta realizada  -->

                          <form id="f_consulta" method="post" action="resultado.php" target="_self">

                            <label id="metodo">SELECIONE POR QUAL MÉTODO VOCÊ DESEJA CONSULTAR:</label><br>
                          
                            <select name="opcao" id="opcao">
              								<option value="cpf">CPF</option>
              								<option value="nome" selected>Nome</option>
 							              </select>
							              <br><br>

                          	<input name="dados" size="13" maxlength="11" required type="text" class="form-control" ><br>
							              <button type="submit" class="btn btn-primary" name="consultar">CONSULTAR</button>
                          	
                          </form> 
                             

                           </div>
                           </div>
                           </div>
                           </div>
                           </div>

    <!-- Fim do Modal_Consulta Cliente -->