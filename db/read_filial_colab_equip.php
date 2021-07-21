<?php include_once 'include/header.inc.php'?>
<?php include_once 'include/menu.inc.php'?> 

<?php
session_start();
include_once 'connect.php';

$filial = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("select * from tb_colab_equip, tb_colaborador, tb_equipamento where tb_colaborador.id = tb_colab_equip.id_colab AND tb_equipamento.id_equip = tb_colab_equip.id_equip AND tb_colaborador.filial = '$filial' ORDER BY nome ASC");
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
           <td><a href='db/delete_colab_equip.php?id_equip=$id_equip&id_colab_equip=$id_colab_equip'><i class='material-icons'>delete</i></td>
           ";
     echo "</tr>";
endwhile;  ?>

<?php include_once 'include/footer.inc.php' ?>    