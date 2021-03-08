 <?php

 // Essa página será executada na página resultado.php e armazenará em variáveis as informações dos clientes.

include "c_bnc.php";


                        //Essa query extrai os dados do banco pelo cpf ou pelo nome e armazena nas variáveis que 
                        //serão utilizadas no formulário de edição.

                        $sql="SELECT * FROM tb_clientes WHERE cpf = '$dados' OR nome LIKE '%$dados%' ";
                        $res=mysqli_query($con,$sql);     
                        $lin=mysqli_fetch_row($res);
                            
                        $res=mysqli_query($con,$sql);
                        while($vreg=mysqli_fetch_row($res)){

                        $dados1=$vreg[0];
                        $dados2=$vreg[1];
                        $dados3=$vreg[2];
                        $dados4=$vreg[3];
                        $dados5=$vreg[4];
                        $dados6=$vreg[5];
                        $dados7=$vreg[6];
                        $dados8=$vreg[7];



                        }




?>