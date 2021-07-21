<?php
session_start();
include_once 'connect.php';

$querySelect = $link->query("select id,nome, email, filial, setor from tb_colaborador ORDER BY filial ASC");
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
           <td><a href='edit_colab.php?id=$id'><i class='material-icons'>edit</i></td>
           <td><a href='db/delete_colab.php?id=$id'><i class='material-icons'>delete</i></td>
           <td><a href='cad_colab_equip.php?id=$id'><i class='material-icons'>add_box</i></td>
           ";
     echo "</tr>";
endwhile;