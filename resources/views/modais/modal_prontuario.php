
<!-- Button trigger modal ATUALIZAR ------------------------------------------------------------------------>
<button type="button" id="modalProntuario" class="btn btn-link" data-toggle="modal" data-target="#myModalProntuario"></button>

<!-- Modal CADASTRAR-->
<div class="modal fade" id="myModalProntuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Cadastrar prontuário</h4>
        </div>
        <div class="modal-body">
            <div id="avisoCadastrar"></div>

            
            <?php
            $asd = "select * from pascientes where id='{$_GET['id_prontuario']}'";
            $res_asd = mysqli_query($mysqli->getMysqli(), $asd);
            $array = mysqli_fetch_array($res_asd);

            $sintomas = "select * from pascientes_sintomas where id_pasc ='{$_GET['id_prontuario']}' order by id DESc";
            $sintomas_query = mysqli_query($mysqli->getMysqli(), $sintomas);
            $sintomas_array = mysqli_fetch_array($sintomas_query);

            ?>

            <form action="#" method="post" style="padding:50px" class="text-center">
                <?php echo "<h4>Diga o que esta sentindo <b>".$array['nome']."</b></h4>"; ?>
                <?php if($sintomas_array['sintomas']){echo "<font color='red'><h6>Sintoma(s) atual: <b>".$sintomas_array['sintomas']."</b></h6></font>"; } ?>
                
                <div class="row" style="margin:30px">
                    <label class="checkbox-inline">
                    <input type="checkbox" name="sintomas1"  value="Febre,"> Febre
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas2"  value="Coriza,"> Coriza
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas3"  value="Nariz Entupido,"> Nariz Entupido
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas4"  value="Cansaco,"> Cansaco
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas5"  value="tosse,"> Tosse
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas6"  value="Dor de cabeca,"> Dor de cabeça
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas7"  value="Dore no corpo,"> Dore no corpo
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas8"  value="Mal estar,"> Mal estar
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas9"  value="Dor de garganta,"> Dor de garganta 
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas10"  value="Dificuldade para respirar,"> Dificuldade para respirar
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas11"  value="Falta de paladar,"> Falta de paladar
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas12"  value="Falta de olfato,"> Falta de olfato
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas13"  value="Dificuldade de locomoção,"> Dificuldade de locomoção
                    </label>
                    <label  class="checkbox-inline">
                    <input type="checkbox" name="sintomas14"  value="Diarréia"> Diarréia
                    </label>
                </div>

                <input type="hidden" name="id_pasc" value="<?php echo $array['id'];?>">
                
                <button type="submit" name="btn_sintomas" class="btn btn-default">CADASTRAR</button>
            </form>

                
        </div>
        <div class="modal-footer">
            <a href="../softmidia" type="submit" class="btn btn-default">Fechar</a>
        </div>
        </div>

    </div>
    </div>
