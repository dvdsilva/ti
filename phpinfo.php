<?php include_once 'include/header.inc.php' ?>
      
<?php include_once 'include/menu.inc.php' ?> 

<?php 
include_once 'include/connect.php';
  
  $id = filter_input(INPUT_GET,'id', FLITER_SANITIZE_NUMBER_INT);
   $querySelect = $link->query("select id, nome, email, filial, setor from tb_colaborador where id='7'");

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
    <form action="db/update_colab.php" method="post" class="col s12">
        <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="150"></legend>
             <h5 class="light center">Edição dos Dados do Colaborador</h5>



            <!--Campo Nome-->
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="50" required autofocus>
              <label for="nome">Nome do Colaborador</label>

              <div class="input-field col s12"></div>

              <!--Campo Email-->
            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input type="text" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required autofocus>
              <label for="email">Email do Colaborador</label>
              
             
              <!--Campo Select-->
              <div class="input-field col s4">
               <i class="material-icons prefix">location_on</i>
               <label for="filial">Filial do Colaborador</label></br></br>
              <select name="filial" id="filial">
                <option value="" disabled>value="<?php echo $filial ?>"</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Bragança">Bragança</option>
                <option value="Repair">Repair</option>
                </selct>
                </div>
                <div class="input-field col s12"></div>
                <input type="text" name="" id="">
               
               
               <!--Campo Select-->
               <div class="input-field col s12">
               <i class="material-icons prefix">people</i>
               <label for="setor">Setor do Colaborador</label></br></br>
              <select name="setor" id="setor">
                <option value="" disabled>value="<?php echo $setor ?>"</option>
                <option value="Assistência Técnica">Assistência Técnica</option>
                <option value="Administrativo">Administrativo</option>
                <option value="TI">TI</option>
                </selct>
                </div>
                <div class="input-field col s12"></div>
             
                <input type="text" name="" id="">
            
             <!--Botões-->
             <div class="input-field col s12">                
              <input type="submit" value="cadastrar" class="btn blue">
              <input type="reset" value="limpar" class="btn red">
             </div>
    
            </fieldset>
          </form>
        </div>

        <?php include_once 'include/footer.inc.php' ?> 





        <table id="equip">            
            
            <?php
            //session_start();
            include_once 'connect.php';
            
            $querySelect = $link->query("select id_equip, tipo, marca, modelo, patrimonio, tag from tb_equipamento where alocado='N'");
            while($registros = $querySelect->fetch_assoc()):
                 $id_equip = $registros ['id_equip'];
                 $tipo = $registros ['tipo'];
                 $marca = $registros ['marca'];
                 $modelo = $registros ['modelo'];
                 $patrimonio = $registros ['patrimonio'];
                 $tag = $registros ['tag'];
                 
                 //"<input type='hidden' id='id_equip' value='<?php $id_equip?
                 
                 
                 echo "<tr>";
                 echo "<td>$tipo</td>";
                 echo "<td>$marca</td>";
                 echo "<td>$modelo</td>";
                 echo "<td>$patrimonio</td>";
                 echo "<td>$tag</td>";
                 echo "<td><input type='radio' id='id_equip'>$id_equip</td>";    
                 echo "</tr>";
                 
                 
            endwhile; ?>
            
            </table>

$nome   = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email  = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$filial = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_SPECIAL_CHARS);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_SPECIAL_CHARS);
$tipo   = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_SPECIAL_CHARS);
$patrimonio = filter_input(INPUT_POST, 'patrimonio', FILTER_SANITIZE_SPECIAL_CHARS);
$tag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_SPECIAL_CHARS);



  <!--Campo Nome
            <div class="input-field col s10">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="50" required autofocus>
              <label for="nome">Nome do Colaborador</label>

              <div class="input-field col s10"></div>-->

              <!--Campo Email
            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input type="text" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required autofocus>
              <label for="email">Email do Colaborador</label>
              <div class="input-field col s10"></div>-->
              <!--Campo Filial
            <div class="input-field col s12">
              <i class="material-icons prefix">location_on</i>
              <input type="text" name="filial" id="filial" value="<?php echo $filial ?>" maxlength="50" required autofocus>
              <label for="email">Filial do Colaborador</label>
              <div class="input-field col s12"></div>-->
               <!--Campo Setor
            <div class="input-field col s12">
              <i class="material-icons prefix">people</i>
              <input type="text" name="setor" id="setor" value="<?php echo $setor ?>" maxlength="50" required autofocus>
              <label for="email">Setor do Colaborador</label>
              <div class="input-field col s12"></div>-->
 


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