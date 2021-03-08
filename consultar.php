<?php

// Essa página possui duas funções que serão executadas na página resultado.php.


include "c_bnc.php";



//Essa função recebe 3 parâmetros : 
//primeiro é a opção que o usuário escolheu Nome ou CPF.
//segundo é os dados contidos.
//terceiro conexão com o banco
//Depois ela verifica se a opção é CPF consulta o CPF no banco e retorna os dados do cliente em forma de tabela.

function ConsultaCpf ($opcao,$dados,$con)
    {

      if($opcao=="cpf")
          {
            $sql="SELECT * FROM tb_clientes WHERE cpf = '$dados'";
            $res=mysqli_query($con,$sql);     
            $lin=mysqli_fetch_row($res);
                if($lin<=1){
                      echo '<script>
                      alert("Cliente não encontrado");
                      window.location="index.php";
                      </script>';
                      }else{
                       $res=mysqli_query($con,$sql);
                       while($vreg=mysqli_fetch_row($res)){ 

                     echo"<tr>";
                     echo"
                     <td>$vreg[0]</td>
                     <td>$vreg[1]</td>
                     <td>$vreg[2]</td>
                     <td>$vreg[3]</td>
                     <td>$vreg[4]</td>
                     <td>$vreg[5]</td>
                     <td>$vreg[6]</td>
                     <td>$vreg[7]</td>";

          }
        }
      }
    }             



//Essa função recebe 3 parâmetros : 
//primeiro é a opção que o usuário escolheu Nome ou CPF.
//segundo é os dados contidos.
//terceiro conexão com o banco
//Depois ela verifica se a opção é Nome consulta o Nome no banco e retorna os dados do cliente em forma de tabela.

function ConsultaNome ($opcao,$dados,$con)
{
          if($opcao=="nome")
              {
                $sql="SELECT * FROM tb_clientes WHERE nome LIKE '%$dados%'";
                $res=mysqli_query($con,$sql);
                  
                $lin=mysqli_fetch_row($res);
                    if($lin<=1){
                    echo '<script>
                    alert("Cliente não encontrado");
                    window.location="index.php";
                    </script>';
                    }else{
                     $res=mysqli_query($con,$sql);
                     while($vreg=mysqli_fetch_row($res)){ 

                   echo"<tr>";
                   echo"
                   <td>$vreg[0]</td>
                   <td>$vreg[1]</td>
                   <td>$vreg[2]</td>
                   <td>$vreg[3]</td>
                   <td>$vreg[4]</td>
                   <td>$vreg[5]</td>
                   <td>$vreg[6]</td>
                   <td>$vreg[7]</td>";

      }
    }
  }
}      



       

?>


