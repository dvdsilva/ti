<?php
session_start();
include_once 'connect.php';

$id_colab_equip = filter_input(INPUT_GET,'id_colab_equip', FILTER_SANITIZE_SPECIAL_CHARS);
$id_equip = filter_input(INPUT_GET,'id_equip', FILTER_SANITIZE_SPECIAL_CHARS);
//$id_equip = filter_input(INPUT_GET,'id_equip', FILTER_SANITIZE_SPECIAL_CHARS);
//$id_equip = $_SESSION['id_equip'];

$queryDelete = $link->query("delete from tb_colab_equip where id_colab_equip='$id_colab_equip'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):

$queryUpdate = $link->query("update tb_equipamento set alocado='N' where id_equip='$id_equip'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0): 

header("Location:../list_colab_equip.php");
   
  endif;
endif;


