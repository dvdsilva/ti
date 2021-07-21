<?php
session_start();
include_once 'connect.php';

$tipo   = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_SPECIAL_CHARS);
$patrimonio = filter_input(INPUT_POST, 'patrimonio', FILTER_SANITIZE_SPECIAL_CHARS);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);
$tag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_SPECIAL_CHARS);

    $querInsert = $link->query("insert into tb_equipamento (id_equip,tipo,marca,modelo,patrimonio,setor_equip,tag,alocado) values(default,'$tipo','$marca','$modelo','$patrimonio','$setor','$tag','N')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0): 
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadstro efetuado com sucesso!'."</p>";
        header("Location:../cad_equip.php");
    endif;
?>


