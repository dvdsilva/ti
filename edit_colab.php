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
  
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
  $querySelect = $link->query("select id, nome, email, filial, setor from tb_colaborador where id='$id'");

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
             <h5 class="light center">Alteração</h5>


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
              <select name="filial" id="filial" value="<?php $filial ?>">
                <option value="<?php echo $filial ?>"><?php echo $filial ?></option>
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
              <select name="setor" id="setor" value="<?php $setor ?>">
                <option value="<?php echo $setor ?>"><?php echo $setor ?></option>
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
                </br></br></br>
            
             <!--Botões-->
             <div class="input-field col s12">                
              <input type="submit" value="alterar" class="btn blue">
              <a href="list_colab.php" class="btn red">cancelar</a>
             </div>
    
            </fieldset>
          </form>
        </div>

        <?php include_once 'include/footer.inc.php' ?> 
