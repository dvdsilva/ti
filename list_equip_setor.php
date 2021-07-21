<?php include_once 'include/header.inc.php'?>
<?php include_once 'include/menu.inc.php'?> 


<div class="row container">
    <div class="col s12">
        <h5 class="light">Consulta de Colaborador e Equipamento por Filial</h5><hr>

        <table class="striped">
            <thead>
                <tr><th>Qte</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Filial</th>
                    <th>Setor</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Patrimonio</th>
                    <th>TAG</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  session_start();
                  include_once 'db/connect.php';
                  
                  $setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);
                  
                  $querySelect = $link->query("select * from tb_colab_equip, tb_colaborador, tb_equipamento where tb_colaborador.id = tb_colab_equip.id_colab AND tb_equipamento.id_equip = tb_colab_equip.id_equip AND tb_colaborador.setor = '$setor' ORDER BY nome ASC");
                  while($registros = $querySelect->fetch_assoc()):
                      $num= ++$num1+0;
                       $id_colab_equip = $registros ['id_colab_equip'];
                       $id_colab = $registros ['id_colab'];
                       $id_equip = $registros ['id_equip'];
                       $nome = $registros ['nome'];
                       $email = $registros ['email'];
                       $filial = $registros ['filial'];
                       $setor = $registros ['setor'];
                       $tipo = $registros ['tipo'];
                       $marca = $registros ['marca'];
                       $modelo = $registros ['modelo'];
                       $patrimonio = $registros ['patrimonio'];
                       $tag = $registros ['tag'];
                  
                  
                       echo "<tr>";
                       echo "<td>$num</td> 
                             <td>$nome</td>
                             <td>$email</td>
                             <td>$filial</td>
                             <td>$setor</td>
                             <td>$tipo</td>
                             <td>$marca</td>
                             <td>$modelo</td>
                             <td>$patrimonio</td>
                             <td>$tag</td>
                             ";
                       echo "</tr>";
                  endwhile; 
            ?>

               </tbody>
           </table>
        </div>
    </div>
 <?php include_once 'include/footer.inc.php' ?>     

