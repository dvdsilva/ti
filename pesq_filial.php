<?php include_once 'include/header.inc.php' ?>
      
<?php include_once 'include/menu.inc.php' ?> 

<?php session_start() ?>

    <!--Foumulario de Cadastro-->
    <div class="row container">
    <p>&nbsp;</p>
    <form action="list_colab_por_filial.php" method="post" class="col s12">
        <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="150"></legend>
             <h5 class="light center">Pesquisa da Filial do Colaborador</h5>
            
           
             
              <!--Campo Select-->
              <div class="input-field col s4">
               <i class="material-icons prefix">location_on</i>
               <label for="filial">Filial do Colaborador</label></br></br>
              <select name="filial" id="filial">
                <option value="" disabled>Selecione um valor</option>
                <option value="São Paulo">São Paulo</option>
                <option value="BH">BH</option>
                <option value="Bragança">Bragança</option>
                <option value="Curitiba">Curitiba</option>
                <option value="Goiania">Goiania</option>
                <option value="Repair">Repair</option>
                <option value="RJ">RJ</option>
                <option value="Teresina">Teresina</option>
                
                </selct>
                </div>
                <div class="input-field col s12"></div>
                <input type="hidden" name="" id="">
             <!--Botões-->
             <div class="input-field col s12">                
              </br></br></br><input type="submit" value="pesquisar" class="btn blue">
             
             </div>
    
            </fieldset>
          </form>
        </div>


 <!--Foumulario de Cadastro-->
 <div class="row container">
    <p>&nbsp;</p>
    <form action="list_filial_colab_equip.php" method="post" class="col s12">
        <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="150"></legend>
             <h5 class="light center">Pesquisa da Filial do Equipamento</h5>
            
           
             
              <!--Campo Select-->
              <div class="input-field col s4">
               <i class="material-icons prefix">location_on</i>
               <label for="filial">Filial do Equipamento</label></br></br>
              <select name="filial" id="filial">
                <option value="" disabled>Selecione um valor</option>
                <option value="São Paulo">São Paulo</option>
                <option value="BH">BH</option>
                <option value="Bragança">Bragança</option>
                <option value="Curitiba">Curitiba</option>
                <option value="Goiania">Goiania</option>
                <option value="Repair">Repair</option>
                <option value="RJ">RJ</option>
                <option value="Teresina">Teresina</option>
                
                </selct>
                </div>
                <div class="input-field col s12"></div>
                <input type="hidden" name="" id="">
             <!--Botões-->
             <div class="input-field col s12">                
              </br></br></br><input type="submit" value="pesquisar" class="btn blue">
             
             </div>
    
            </fieldset>
          </form>
        </div>


        <?php include_once 'include/footer.inc.php' ?> 