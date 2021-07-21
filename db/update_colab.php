<?php
session_start();
include_once 'connect.php';
$id = $_SESSION['id'];

$nome   = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email  = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$filial = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_SPECIAL_CHARS);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_colaborador set nome='$nome', email='$email', filial='$filial', setor='$setor' where id='$id'");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    header("Location:../list_colab.php");
    
endif;
