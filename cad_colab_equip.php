<?php include_once 'include/header.inc.php' ?>
      
<?php include_once 'include/menu.inc.php' ?> 


<div class="row container">
    <div class="col s12">
      <h5 class="ligtht">Edição de Registros</h5><hr>
  </div>
</div>


<?php 
include_once 'db/connect.php';
session_start();  
  
$id_ = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
  $querySelect = $link->query("select id, nome, email, filial, setor from tb_colaborador where id='$id_'");

      while($registros =  $querySelect->fetch_assoc()): 
        $id = $registros['id'];
        $nome = $registros['nome'];
        $email = $registros['email'];
        $filial = $registros['filial'];
        $setor = $registros['setor'];
    
    endwhile;
    
?>

 <!--Foumulario de Cadastro-->
 <div class="row container">
    <p>&nbsp;</p>
    <form action="db/create_colab_equip.php" method="get" class="col s12">
        <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="150"></legend>
             <h5 class="light center">Alocação de Equipamento</h5>

             <?php
               if(isset($_SESSION['msg'])):
                 echo $_SESSION['msg'];
                 session_unset();
                endif;  
            ?>

            <input type="hidden" name='id' id="id" value="<?php echo $id?>">

     <!--Campo Nome-->
   <div class="input-field col s10">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" value="<?php echo $nome ?>" maxlength="50" required autofocus>
              <label for="nome">Nome do Colaborador</label>  

              <div class="input-field col s10"></div>
              <!--Campo Email-->
            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input type="text" value="<?php echo $email ?>" maxlength="50" required autofocus>
              <label for="email">Email do Colaborador</label>
              <div class="input-field col s10"></div>
             
              <!--Campo Filial-->
            <div class="input-field col s12">
              <i class="material-icons prefix">location_on</i>
              <input type="text" value="<?php echo $filial ?>" maxlength="50" required autofocus>
              <label for="email">Filial do Colaborador</label>
              <div class="input-field col s12"></div>
               
               <!--Campo Setor-->
            <div class="input-field col s12">
              <i class="material-icons prefix">people</i>
              <input type="text" value="<?php echo $setor ?>" maxlength="50" required autofocus>
              <label for="email">Setor do Colaborador</label>
              <div class="input-field col s12"></div>    
              
          

  <!--Campo Select-->
  <div class="input-field col s12">
      <i class="material-icons prefix">desktop_mac</i>
        <label for="id_equip">Selecionar o Equipamento do Colaborador</label></br></br>
          <select name="id_equip" id="id_equip">
  <?php
session_start();
include_once 'connect.php';

$querySelect = $link->query("select id_equip, tipo, marca, modelo, patrimonio,setor_equip, tag from tb_equipamento where alocado='N'");
while($registros = $querySelect->fetch_assoc()):
     $id_equip = $registros ['id_equip'];
     $tipo = $registros ['tipo'];
     $marca = $registros ['marca'];
     $modelo = $registros ['modelo'];
     $patrimonio = $registros ['patrimonio'];
     $tag = $registros ['tag'];
     $setor = $registros ['setor_equip'];
 
    echo "<option value='$id_equip'> $tipo | $marca | $modelo | $patrimonio | $tag | $setor </option>";

    endwhile;            
          
?>      
          </selct>
                </div>
                <div class="input-field col s12"></div>
                </div> 
                <input type="hidden" name="" id="">

 
<div class="input-field col s12"> 
</br></br></br><input type="submit" value="incluir" class="btn blue">
</div>
            </fieldset>
          </form>
        </div>

        <?php include_once 'include/footer.inc.php' ?> 
