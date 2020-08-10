<!-- Modal CADASTRAR-->
<div class="modal fade" id="myModalCadastrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Cadastrar paciente</h4>
        </div>
        <div class="modal-body">
            <div id="avisoCadastrar"></div>

            <form action="" name="formulario" method="post" enctype="multipart/form-data" style="padding:50px" onSubmit="return enviardados();">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="col-sm-2 ">Idade</label>
                    <div class="col-sm-10">
                    <input type="text" name="idade" class="form-control" id="exampleInputPassword1" placeholder="idade">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="col-sm-2 ">CPF</label>
                    <div class="col-sm-10">
                    <input type="text" id="cpf" name="cpf" class="form-control" id="exampleInputPassword1" placeholder="cpf">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="col-sm-2 ">Fone</label>
                    <div class="col-sm-10">
                    <input type="text" id="fone" name="fone" class="form-control" id="exampleInputPassword1" placeholder="fone">
                    </div>
                </div>

                <div class="col-md-12" style="background-color:aliceblue; margin:10px">
                    <div class="form-group">
                        <label for="exampleInputFile">Foto</label>
                        <input name="foto" type="file" id="exampleInputFile">
                    </div>
                </div>  

                <button type="submit" name="cad_pasciente" class="btn btn-default">CADASTRAR</button>
            </form>





        </div>
        <div class="modal-footer">
            <a href="../softmidia" type="submit" class="btn btn-default">Fechar</a>
        </div>
        </div>

    </div>
    </div>
