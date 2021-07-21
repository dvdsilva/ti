<?php include_once 'include/header.inc.php' ?>
      
<?php include_once 'include/menu.inc.php' ?> 

<?php session_start() ?>

  
 <!--Foumulario de Cadastro-->
 <div class="row container">
    <p>&nbsp;</p>
    <form action="list_colab_setor.php" method="post" class="col s12">
        <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="180"></legend>
             <h5 class="light center">Pesquisa de Setor do Colaborador</h5>
            
           <!--Campo Select-->
           <div class="input-field col s8">
               <i class="material-icons prefix">people</i>
               <label for="setor">Setor do Colaborador</label></br></br>
              <select name="setor" id="setor">
                <option value="" disabled>Selecione um valor</option>
                ><option value="Administrativo">Administrativo</option>
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
                <div class="input-field col s8"></div>
             
             
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
    <form action="list_equip_setor.php" method="post" class="col s12">
        <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="180"></legend>
             <h5 class="light center">Pesquisa de Setor do Equipamento</h5>
            
           <!--Campo Select-->
           <div class="input-field col s8">
               <i class="material-icons prefix">people</i>
               <label for="setor">Setor do Equipamento</label></br></br>
              <select name="setor" id="setor">
                <option value="" disabled>Selecione um valor</option>
                ><option value="Administrativo">Administrativo</option>
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
                <div class="input-field col s8"></div>
             
             
                <input type="hidden" name="" id="">
             <!--Botões-->
             <div class="input-field col s12">                
              </br></br></br><input type="submit" value="pesquisar" class="btn blue">
             
             </div>
    
            </fieldset>
          </form>
        </div>


        <?php include_once 'include/footer.inc.php' ?> 