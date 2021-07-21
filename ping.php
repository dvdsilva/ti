<?php include_once 'include/header.inc.php' ?>
<?php include_once 'include/menu.inc.php' ?> 

<div class="row container">
    <p>&nbsp;</p>
    <form action="" method="" class="col s12">
        <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="150"></legend>
             <h5 class="light center">Monitoramento Links</h5>

<?php
echo "<table width='10px' border=3>";
echo "<tr>";
echo "<td>Sao Paulo - Link Vivo</td>";
$str = exec("ping -c 1 172.16.0.1");
if ($str == ''){
echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
else{
echo "<td bgcolor=#00FF00>Em funcionamento</td>";
}
echo "</tr>";
echo "<tr>";
echo "<td>Sao Paulo - Link Americanet</td>";
$str = exec("ping -c 1 191.241.250.58");
if ($str == ''){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }
echo "<tr>";
echo "<td>Braganca - Link Vivo</td>";
$str = exec("ping -c 1 189.108.106.");
if ($str == 'ms'){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }
echo "<tr>";
echo "<td>Braganca - Link Starman</td>";
$str = exec("ping -c 1 132.255.36.");
if ($str == 'ms'){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }
echo "<tr>";
echo "<td>Repair - Link Vivo</td>";
$str = exec("ping -c 1 ");
if ($str == 'ms'){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }
echo "<tr>";
echo "<td>Repair - Link Starman</td>";
$str = exec("ping -c 1 132.255.36.122");
if ($str == 'ms'){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }
echo "<tr>";
echo "<td>Goiania - Link Vivo</td>";
$str = exec("ping -c 1 177.206.129.130");
if ($str == 'ms'){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }
echo "<tr>";
echo "<td>Goiania - Link Radio</td>";
$str = exec("ping -c 1 187.17.153.18");
if ($str == 'ms'){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }
echo "<tr>";
echo "<td>Curitiba - Link</td>";
$str = exec("ping -c 1 hemogramsul.ddns.net");
if ($str == 'ms'){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }
echo "<tr>";
echo "<td>Belo Horizonte - Link Mundivox</td>";
$str = exec("ping -c 1 187.111.20.27");
if ($str == 'ms'){
    echo "<td bgcolor=#FF0000>Sem funcionamento</td>";
}
    else{
    echo "<td bgcolor=#00FF00>Em funcionamento</td>";
    }

echo "</table>";

?>
  </fieldset>      
 </form>
</div>
<?php include_once 'include/footer.inc.php' ?>