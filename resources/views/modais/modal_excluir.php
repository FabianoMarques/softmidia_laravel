
    <!-- Button trigger modal EXCLUIR------------------------------------------------------------------------>
    <button type="button" id="modalExcluir" class="btn btn-link" data-toggle="modal" data-target="#myModalExclui"></button>

    <!-- Modal -->
    <div class="modal fade" id="myModalExclui" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Excluir paciente</h4>
        </div>
        <div class="modal-body text-center">

            <?php
                $asd = "select * from pascientes where id='{$_GET['id_excluir']}'";
                $res_asd = mysqli_query($mysqli->getMysqli(), $asd);
                $array = mysqli_fetch_array($res_asd);
                ?>

                <form action="" method="post">
                    Deseja excluir: <b><?php echo $array['nome']; ?></b>
                    <input type="hidden" name="id_excluir" value="<?php echo $array['id']; ?>">
                    <button type="submit" id="exc_paciente" name="exc_paciente" class="btn btn-danger"  style="margin-left:30px">Sim</button>
                </form>

                <?php

            
            ?>

        </div>
        <div class="modal-footer">
            <a href="../softmidia" type="submit" class="btn btn-default">Fechar</a>
        </div>
        </div>

    </div>
    </div>