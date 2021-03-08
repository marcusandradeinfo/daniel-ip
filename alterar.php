<?php

// Essa página executa a atualização dos dados com o formulário receibido da página resultado.php

include "c_bnc.php";


if(isset($_REQUEST['alterar'])){

$codigo=$_REQUEST['codigo'];
$cpf=$_REQUEST['cpf'];
$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$dt_nascimento=$_REQUEST['dt_nascimento'];
$sexo=$_REQUEST['sexo'];
$estado=$_REQUEST['estado_civil'];
if($status=$_REQUEST['status'] == " ")
{
$status="inativo";	
}

}



$sql="UPDATE tb_clientes SET cpf='$cpf', nome='$nome',email='$email',datadenascimento='$dt_nascimento',sexo='$sexo',
estado='$estado',status='$status' WHERE id = '$codigo' ";

$res=mysqli_query($con,$sql);
if($res==1){
 echo '<script>
      alert("Alteração feita com sucesso!");
      window.location="index.php";
      </script>';
}


?>