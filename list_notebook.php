<?php include_once 'include/header.inc.php'?>
<?php include_once 'include/menu.inc.php'?> 

<div class="row container">
    <div class="col s12">
        <h5 class="light">Consulta Equipamento</h5><hr>

        <table class="striped">
            <thead>
                <tr><th>Qte</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Patrimonio</th>
                    <th>TAG</th>
                    <th>Alocado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  include_once 'db/read_notebook.php';
            ?>

               </tbody>
           </table>
        </div>
    </div>
 <?php include_once 'include/footer.inc.php' ?>     
    
