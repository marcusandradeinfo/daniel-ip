<?php

// Essa página recebe as informações do formulário de cadastro aramazena nas variáveis e realiza a query com o banco de dados// 

include "c_bnc.php"; //arquivo de conexão com o banco 


if(isset($_REQUEST['cadastrar'])){
  
$cpf=$_REQUEST['cpf'];
$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$dt_nascimento=$_REQUEST['dt_nascimento'];
$sexo=$_REQUEST['sexo'];
$estado=$_REQUEST['estado_civil'];

// Nessa condicional é validado o campo status caso o valor recebido seja vazio a variável recebe o valor inativo.
if($status=$_REQUEST['status'] == " ")
{
$status="inativo";	
}

}


// Aqui é realizada a query de inserção dos dados. Ao fim é executado um script de retorno para informar se os dados foram cadastrados com sucesso.

$sql="INSERT INTO tb_clientes VALUES (NULL,'$cpf','$nome','$email','$dt_nascimento','$sexo','$estado','$status')";
$res=mysqli_query($con,$sql);
echo $res;
if($res==1){
 echo '<script>
      alert("Cliente Cadastrado com Sucesso");
      window.location="index.php";
      </script>';
}


?>