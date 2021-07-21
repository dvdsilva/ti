<?php include_once 'include/header.inc.php'?>
<?php include_once 'include/menu.inc.php'?> 

<div class="row container">
    <div class="col s12">
        <h5 class="light">Consulta Colaborador</h5><hr>

        <table class="striped">
            <thead>
                <tr><th>Qte</td>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Filial</th>
                    <th>Setor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  include_once 'db/read_colab.php';
            ?>

               </tbody>
           </table>
        </div>
    </div>
 <?php include_once 'include/footer.inc.php' ?>     
    
