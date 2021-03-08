<?php

// Essa página deleta os registtos do campo de acordo com a seu código.

include "c_bnc.php";


if(isset($_REQUEST['deletar'])){

$codigo=$_REQUEST['codigo'];  

}

$sql="DELETE  FROM tb_clientes WHERE id = '$codigo' ";

$res=mysqli_query($con,$sql);
if($res==1){
 echo '<script>
      alert("Alteração feita com sucesso!");
      window.location="index.php";
     </script>';
}


?>