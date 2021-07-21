<?php include_once 'include/header.inc.php' ?>
      
<?php include_once 'include/menu.inc.php' ?> 

<?php session_start() ?>

    <!--Foumulario de Cadastro-->
    <div class="row container">
    <p>&nbsp;</p>
    <form action="db/create_colab.php" method="post" class="col s12">
        <fieldset class="formulario">
             <legend><img src="images/vyttra.png" alt="[images]" width="150"></legend>
             <h5 class="light center">Cadastro de Colaboradores</h5>
            
            <?php
               if(isset($_SESSION['msg'])):
                 echo $_SESSION['msg'];
                 session_unset();
                endif;  
            ?>

            <!--Campo Nome-->
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" name="nome" id="nome" maxlength="50" required autofocus>
              <label for="nome">Nome do Colaborador</label>

              <div class="input-field col s12"></div>

              <!--Campo Email-->
            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input type="text" name="email" id="email" maxlength="50" required autofocus>
              <label for="email">Email do Colaborador</label>
              
             
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
               
               
               <!--Campo Select-->
               <div class="input-field col s12">
               <i class="material-icons prefix">people</i>
               <label for="setor">Setor do Colaborador</label></br></br>
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
                <div class="input-field col s12"></div>
             
                <input type="hidden" name="" id="">
            
             <!--Botões-->
             <div class="input-field col s12">                
              </br></br></br><input type="submit" value="cadastrar" class="btn blue">
              <input type="reset" value="limpar" class="btn red">
             </div>
    
            </fieldset>
          </form>
        </div>

        <?php include_once 'include/footer.inc.php' ?> 