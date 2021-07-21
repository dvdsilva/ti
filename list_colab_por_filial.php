<?php include_once 'include/header.inc.php'?>
<?php include_once 'include/menu.inc.php'?> 


<div class="row container">
    <div class="col s12">
        <h5 class="light">Consulta Colaborador Filial</h5><hr>

        <table class="striped">
            <thead>
                <tr><th>Qte</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Filial</th>
                    <th>Setor</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                  session_start();
                  include_once 'db/connect.php';
                  
                  $filial = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_SPECIAL_CHARS);
                  
                  $querySelect = $link->query("select id,nome, email, filial, setor from tb_colaborador where tb_colaborador.filial = '$filial' ORDER BY nome ASC");
                    while($registros = $querySelect->fetch_assoc()):
                       $num= ++$num1+0;
                       $id = $registros ['id'];
                       $nome = $registros ['nome'];
                       $email = $registros ['email'];
                       $filial = $registros ['filial'];
                       $setor = $registros ['setor'];
                       
                  
                       echo "<tr>";
                       echo "<td>$num</td> 
                             <td>$nome</td>
                             <td>$email</td>
                             <td>$filial</td>
                             <td>$setor</td>
                             ";
                       echo "</tr>";
                  endwhile; 
            ?>

               </tbody>
           </table>
        </div>
    </div>
 <?php include_once 'include/footer.inc.php' ?>     

