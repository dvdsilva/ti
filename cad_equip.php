<?php include_once 'include/header.inc.php' ?>
      
 <?php include_once 'include/menu.inc.php' ?>

 <?php session_start() ?>
    <!--Foumulario de Cadastro-->
    <div class="row container">
    <p>&nbsp;</p>
    <form action="db/create_equip.php" method="post" class="col s12">
         <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="150"></legend>
             <h5 class="light center">Cadastro de Equipamentos</h5>

             <?php
               if(isset($_SESSION['msg'])):
                 echo $_SESSION['msg'];
                 session_unset();
                endif;  
            ?>
            
     <!--Campo Select-->
    
     <div class="input-field col s4">
     <i class="material-icons prefix">dehaze</i>
              <label for="tipo">Tipo de Equipamento</label></br></br>
               <div class="input-field">
              <select name="tipo" id="tipo">
                <option value="Desktop">Desktop</option>
                <option value="Notebook">Notebook</option>
                <option value="Pessoal">Pessoal</option>
                </select>
                </div>
                <div class="input-field col s12"></div>
                <!--</div>--> 

                <!--<input type="hidden" name="" id="">-->

              <!--Campo Marca
            <div class="input-field col s12">
           <i class="material-icons prefix">description</i>
              <input type="text" name="marca" id="marca" maxlength="30" required autofocus>
              <label for="marca">Marca do Equipamento</label>
        
              <div class="input-field col s12"></div>-->

                <!--Campo Select-->
    
     <div class="input-field col s10">
     <i class="material-icons prefix">description</i>
              <label for="tipo">Marca de Equipamento</label></br></br>
               <div class="input-field">
              <select name="marca" id="marca">
                <option value="Dell">Dell</option>
                <option value="Lenovo">Lenovo</option>
                <option value="Samsung">Samsung</option>
                <option value="HP">HP</option>
                <option value="Asus">Asus</option>
                <option value="Montado">Montado</option>
                </select>
                </div>
                <div class="input-field col s12"></div>
                </div>


               <!--Campo Modelo-->
            <div class="input-field col s12">
              <i class="material-icons prefix">format_list_bulleted</i>
              <input type="text" name="modelo" id="modelo" maxlength="30" required autofocus>
              <label for="modelo">Modelo do Equipamento</label>

              <div class="input-field col s12"></div>

               <!--Campo Patrimonio-->
            <div class="input-field col s12">
              <i class="material-icons prefix">line_weight</i>
              <input type="text" name="patrimonio" id="patrimonio" maxlength="30" required autofocus>
              <label for="patrimonio">N??mero do Patrimonio</label>

              <div class="input-field col s12"></div>


             <!--Campo TAG-->
            <div class="input-field col s12">
              <i class="material-icons prefix">local_offer</i>
              <input type="text" name="tag" id="tag" maxlength="30" required autofocus>
              <label for="tag">N??mero da Tag</label>

              <div class="input-field col s12"></div>

              <!--Campo Select-->
              <div class="input-field col s20">
               <i class="material-icons prefix">computer</i>
               <label for="setor">Setor do Equipamento</label></br></br>
              <select name="setor" id="setor">
                <option value="" disabled>Selecione um valor</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Analise Dados">Analise Dados</option>
                <option value="Assessoria Cient??fica">Assessoria Cient??fica</option>
                <option value="Assist??ncia T??cnica">Assist??ncia T??cnica</option>
                <option value="Auditoria Interna">Auditoria Interna</option>
                <option value="Cobran??a">Cobran??a</option>
                <option value="Comercial">Comercial</option>
                <option value="Contabilidade">Contabilidade</option>
                <option value="Diretoria">Diretoria</option>
                <option value="Divis??o de Equipamentos">Divis??o de Equipamentos</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Fiscal">Fiscal</option>
                <option value="Hotline">Hotline</option>
                <option value="Importa????o">Importa????o</option>
                <option value="Jur??dico">Jurid??co</option>
                <option value="Licita????o">Licita????o</option>
                <option value="Log??stica">Log??stica</option>
                <option value="Manuten????o">Manuten????o</option>
                <option value="Marketing">Marketing</option>
                <option value="P&D">P&D</option>
                <option value="Point of care">Point of care</option>
                <option value="Produ????o">Produ????o</option>
                <option value="Projetos">Projetos</option>
                <option value="Qualidade">Qualidade</option>
                <option value="Regulat??rio">Regulat??rio</option>
                <option value="Repair">Repair</option>
                <option value="RH">RH</option>
                <option value="Servi??os">Servi??os</option>
                <option value="Suporte Vendas">Suporte Vendas</option>
                <option value="Suprimentos">Supirmentos</option>
                <option value="T??cnico">T??cnico</option>
                <option value="Tesouraria">Tesouraria</option>
                <option value="TI">TI</option>
                <option value="Vendas">Vendas</option>
                </selct>
                </div>
                <div class="input-field col s20"></div>
             
                <input type="hidden" name="" id="">
                <input type="hidden" name="" id="">
               <!--Bot??es-->
             <div class="input-field col s20">                
              <input type="submit" value="cadastrar" class="btn blue"><p>
              <input type="reset" value="limpar" class="btn red">
             </div>
    
            </fieldset>
          </form>
        </div>

        <?php include_once 'include/footer.inc.php' ?> 