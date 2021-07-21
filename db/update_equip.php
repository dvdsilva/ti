<?php
session_start();
include_once 'connect.php';
$id_equip = $_SESSION['id_equip'];
//$id_equip = filter_input(INPUT_GET,'id_equip', FILTER_SANITIZE_NUMBER_INT);
$tipo   = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
$marca  = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_SPECIAL_CHARS);
$patrimonio = filter_input(INPUT_POST, 'patrimonio', FILTER_SANITIZE_SPECIAL_CHARS);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);
$tag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_equipamento set tipo='$tipo', marca='$marca', modelo='$modelo', patrimonio='$patrimonio', setor_equip='$setor', tag='$tag' where id_equip='$id_equip'");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    header("Location:../list_equip.php");
    
endif;

?>