<!-- Button trigger modal ATUALIZAR ------------------------------------------------------------------------>
<button type="button" id="modal123" class="btn btn-link" data-toggle="modal" data-target="#myModal"></button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Atualizar paciente</h4>
    </div>
    <div class="modal-body">
        <div id="avisoAtualiza"></div>

        <?php
        $asd = "SELECT * from pascientes where id='{$_GET['id']}'";
        $res_asd = mysqli_query($mysqli->getMysqli(), $asd);
        while($array = mysqli_fetch_array($res_asd)){
        ?>
            

            <form action="#" name="atualiza" method="post" enctype="multipart/form-data" style="padding:50px" onSubmit="return atualizadados();">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" id="exampleInputEmail1" value="<?php echo $array["nome"]; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="col-sm-2 ">Idade</label>
                    <div class="col-sm-10">
                    <input type="text" name="idade" class="form-control" id="exampleInputPassword1" value="<?php echo $array["idade"]; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="col-sm-2 ">CPF</label>
                    <div class="col-sm-10">
                    <input type="text" id="cpf" name="cpf" class="form-control" id="exampleInputPassword1"  value="<?php echo $array["cpf"]; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="col-sm-2 ">Fone</label>
                    <div class="col-sm-10">
                    <input type="text" id="fone" name="fone" class="form-control" id="exampleInputPassword1"  value="<?php echo $array["fone"]; ?>">
                    </div>
                </div>

                <div class="col-md-12" style="background-color:aliceblue; margin:10px">
                    <div class="form-group">
                        <label for="exampleInputFile">Foto <?php echo $array["foto"]; ?></label>
                        <input name="foto" type="file" id="exampleInputFile">
                    </div>
                </div>  

                <input type="hidden" name="id" value="<?php echo $array["id"]; ?>">
                <input type="hidden" name="foto_atual" value="<?php echo $array["foto"]; ?>">

                <button type="submit" name="atua_paciente" class="btn btn-default">ATUALIZAR</button>

            </form>

        <?php

            
        }

        ?>

    </div>
    <div class="modal-footer">
        <a href="../softmidia" type="submit" class="btn btn-default">Fechar</a>
    </div>
    </div>

</div>
</div>