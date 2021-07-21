<?php
session_start();
include_once 'connect.php';

$querySelect = $link->query("select id_equip,tipo, marca, modelo, patrimonio, tag, alocado from tb_equipamento where tb_equipamento.tipo = 'notebook' ORDER BY marca");
while($registros = $querySelect->fetch_assoc()):
     $num = ++$num1+0;
     $id_equip = $registros ['id_equip'];
     $tipo = $registros ['tipo'];
     $marca = $registros ['marca'];
     $modelo = $registros ['modelo'];
     $patrimonio = $registros ['patrimonio'];
     $tag = $registros ['tag'];
     $alocado = $registros ['alocado'];
     echo "<tr>";
     echo "<td>$num</td>
           <td>$tipo</td>
           <td>$marca</td>
           <td>$modelo</td>
           <td>$patrimonio</td>
           <td>$tag</td>
           <td>$alocado</td>
           ";
     echo "</tr>";
endwhile;