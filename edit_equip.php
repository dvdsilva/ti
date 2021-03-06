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
  
$id_equip = filter_input(INPUT_GET,'id_equip', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id_equip'] = $id_equip;
  
$querySelect = $link->query("select id_equip, tipo, marca, modelo, patrimonio, tag from tb_equipamento where id_equip='$id_equip'");

      while($registros =  $querySelect->fetch_assoc()): 
        $id_equip = $registros['id_equip'];
        $tipo = $registros['tipo'];
        $marca = $registros['marca'];
        $modelo = $registros['modelo'];
        $patrimonio = $registros['patrimonio'];
        $tag = $registros['tag'];
    endwhile;
    
?>


    <!--Foumulario de Cadastro-->
    <div class="row container">
    <p>&nbsp;</p>
    <form action="db/update_equip.php" method="post" class="col s12">
         <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="150"></legend>
             <h5 class="light center">Alterar Equipamento</h5>
            
     <!--Campo Select-->
    
     <div class="input-field col s4">
     <i class="material-icons prefix">dehaze</i>
              <label for="tipo">Tipo de Equipamento</label></br></br>
               <div class="input-field">
              <select name="tipo" id="tipo" value="<?php echo $tipo ?>">
              <option value="<?php echo $tipo ?>"><?php echo $tipo ?></option>
                <option value="Desktop">Desktop</option>
                <option value="Notebook">Notebook</option>
                <option value="Impressora">Impressora</option>
                <option value="Servidor">Servidor</option>
                </selct>
                </div>
                <div class="input-field col s12"></div>
                </div> 

                <input type="hidden" name="" id="">

              <!--Campo Marca-->
            <div class="input-field col s12">
           <i class="material-icons prefix">description</i>
              <input type="text" name="marca" id="marca" value="<?php echo $marca ?>" maxlength="30" required autofocus>
              <label for="marca">Marca do Equipamento</label>
        
              <div class="input-field col s12"></div>

               <!--Campo Modelo-->
            <div class="input-field col s12">
              <i class="material-icons prefix">format_list_bulleted</i>
              <input type="text" name="modelo" id="modelo" value="<?php echo $modelo ?>" maxlength="30" required autofocus>
              <label for="modelo">Modelo do Equipamento</label>

              <div class="input-field col s12"></div>

               <!--Campo Patrimonio-->
            <div class="input-field col s12">
              <i class="material-icons prefix">line_weight</i>
              <input type="text" name="patrimonio" id="patrimonio" value="<?php echo $patrimonio ?>" maxlength="30" required autofocus>
              <label for="patrimonio">Número do Patrimonio</label>

              <div class="input-field col s12"></div>


           

             <!--Campo TAG-->
            <div class="input-field col s12">
              <i class="material-icons prefix">local_offer</i>
              <input type="text" name="tag" id="tag" value="<?php echo $tag ?>" maxlength="30" required autofocus>
              <label for="tag">Número da Tag</label>

              <div class="input-field col s12"></div>


              <!--Campo Select-->
            <div class="input-field col s20">
               <i class="material-icons prefix">computer</i>
               <label for="setor">Setor do Equipamento</label></br></br>
              <select name="setor" id="setor">
                <option value="" disabled>Selecione um valor</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Analise Dados">Analise Dados</option>
                <option value="Assessoria Científica">Assessoria Científica</option>
                <option value="Assistência Técnica">Assistência Técnica</option>
                <option value="Auditoria Interna">Auditoria Interna</option>
                <option value="Cobrança">Cobrança</option>
                <option value="Comercial">Comercial</option>
                <option value="Contabilidade">Contabilidade</option>
                <option value="Diretoria">Diretoria</option>
                <option value="Divisão de Equipamentos">Divisão de Equipamentos</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Fiscal">Fiscal</option>
                <option value="Hotline">Hotline</option>
                <option value="Importação">Importação</option>
                <option value="Jurídico">Juridíco</option>
                <option value="Licitação">Licitação</option>
                <option value="Logística">Logística</option>
                <option value="Manutenção">Manutenção</option>
                <option value="Marketing">Marketing</option>
                <option value="P&D">P&D</option>
                <option value="Point of care">Point of care</option>
                <option value="Produção">Produção</option>
                <option value="Projetos">Projetos</option>
                <option value="Qualidade">Qualidade</option>
                <option value="Regulatório">Regulatório</option>
                <option value="Repair">Repair</option>
                <option value="RH">RH</option>
                <option value="Serviços">Serviços</option>
                <option value="Suporte Vendas">Suporte Vendas</option>
                <option value="Suprimentos">Supirmentos</option>
                <option value="Técnico">Técnico</option>
                <option value="Tesouraria">Tesouraria</option>
                <option value="TI">TI</option>
                <option value="Vendas">Vendas</option>
                </selct>
                </div>
                <div class="input-field col s20"></div>
             
                <input type="hidden" name="" id="">
                <input type="hidden" name="" id="">



               <!--Botões-->
             <div class="input-field col s12">                
             <input type="submit" value="alterar" class="btn blue"><p>
              <a href="list_equip.php" class="btn red">cancelar</a>
             </div>
    
            </fieldset>
          </form>
        </div>

        <?php include_once 'include/footer.inc.php' ?> 
