<?php
session_start();
include_once 'connect.php';
//$id = $_SESSION['id'];
//$id_equip = $_SESSION['id_equip'];
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$id_equip = filter_input(INPUT_GET,'id_equip', FILTER_SANITIZE_NUMBER_INT);
//$nome   = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
//$email  = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
//$filial = filter_input(INPUT_GET, 'filial', FILTER_SANITIZE_SPECIAL_CHARS);
//$setor = filter_input(INPUT_GET, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);

    $querInsert = $link->query("insert into tb_colab_equip (id_colab_equip,id_colab,id_equip) values(default,'$id','$id_equip')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0): 

   $queryUpdate = $link->query("update tb_equipamento set alocado='S' where id_equip='$id_equip'");
    $affected_rows = mysqli_affected_rows($link);
    
    if($affected_rows > 0): 

        $_SESSION['msg'] = "<p class='center green-text'>".'Cadstro efetuado com sucesso!'."</p>";
        header("Location:../cad_colab_equip.php");
   
   endif;
endif;


