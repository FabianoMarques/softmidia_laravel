<?php
    
    include_once("../resources/views/menu.blade.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script languague="javascript"> 
        var imagem;
        function popup(imagem){ window.open('http://www.sindieventosce.com.br/softmidia/fotos/'+imagem,'popup','width=200px,height=300px,scrolling=auto,top=50px,left=150px') }
    </script> 
    
</head>
<body <?php 
        if(isset($_GET["id"])AND(!empty($_GET["id"]))){ echo "onload='ClickBotao();'"; } 
        if(isset($_GET["id_excluir"])AND(!empty($_GET["id_excluir"]))){ echo "onload='ClickBotaoExcluir();'"; } 
        if(isset($_GET["id_prontuario"])AND(!empty($_GET["id_prontuario"]))){ echo "onload='ClickBotaoProntuario();'"; } 
        
        ?> >

    <div class="container">
    <div class="row"> 
                  
    <?php 

        // LISTAR OS ALUNOS DA ESCOLA DO USUARIO POR SERIE
        $selectSerie3 = "SELECT * FROM pascientes";
        $querySerie3 = mysqli_query($mysqli->getMysqli(), $selectSerie3);
        $numSerie3 = mysqli_num_rows($querySerie3);
    ?>
        <table class="table table-striped table-hover txt_cor" style="background-color:white; margin-top:20px;">
            <thead>
                <tr>
                    <th class="txt_cor"><h5><b>NOME</b></h5></th>
                    <th class="txt_cor"><h5><b>IDADE</b></h5></th>
                    <th class="txt_cor"><h5><b>CPF</b></h5></th>
                    <th class="txt_cor"><h5><b>FONE <i class="fab fa-whatsapp"></i></b></h5></th>
                    <th class="txt_cor"><h5><b>FOTO</b></h5></th>
                    <th class="txt_cor"><h5><b>RESULTADO</b></h5></th>
                    <th class="txt_cor"><h5><b>AMOSTRAGEM (SINTOMAS)</b></h5></th>
                    <th class="txt_cor text-center"><h5><b id="prontuario" data-container="body" data-toggle="popover" data-placement="top" data-content="Cadastre o prontuário."></b></h5></th>
                    <th class="txt_cor"><h5><b></b></h5></th>
                    <th class="txt_cor"><h5><b></b></h5></th>
                </tr>
            </thead>
            <tbody>
    <?php
        //TABELA ALUNOS ORDER BY SERIE
        while($res3 = mysqli_fetch_array($querySerie3)){
               
    ?>
        <tr>
            <td><h5><b><?php echo $res3['nome']; ?></b></h5></td>
            <td><h5><?php echo $res3['idade']; ?></h5></td>
            <td><h5><b><?php echo $res3['cpf']; ?></b></h5></td>
            <td><h5><?php echo $res3['fone']; ?></h5></td>
            <td style="padding-top:15px"><a href="javascript:popup('<?php echo $res3['foto']; ?>')"><font size="5px"><i class="fas fa-portrait"></i></font></a></td>
            <td style="padding-top:15px"><?php 
            
            $equip = "SELECT * FROM pascientes_sintomas WHERE id_pasc = '{$res3['id']}' order by id DESC";
            $res = mysqli_query($mysqli->getMysqli(), $equip);
            $array = mysqli_fetch_array($res);
            $array['sintomas'];
            
            $pieces = explode(",", $array['sintomas']);

            $contar = count($pieces)-1;
            
            $per = ($contar*100)/14;

            if($per >= 60) { echo "<font id='possivel' color='red'  data-toggle='tooltip' data-placement='left' title='Possivel infectado'><i class='far fa-frown'></i> Possivel infectado  </font>";}
            if(($per >= 40)AND($per <= 59)) { echo "<font id='potencial' data-toggle='tooltip' data-placement='left' title='Potencial infectado' color='orange' ><i class='far fa-flushed'></i> Potencial infectado</font>";}
            if(($per >= 11)AND($per <= 39)) { echo "<font id='potencial' data-toggle='tooltip' data-placement='left' title='Potencial infectado' color='orange' ><i class='far fa-flushed'></i> Potencial infectado</font>";}
            if($per <= 10){ echo "<font id='tranquilo' data-toggle='tooltip' data-placement='left' title='Sintomas insuficientes'color='green' ><i class='far fa-smile'></i> Sintomas insuficientes</font>";}

            //echo " ( ".$contar." - ".number_format($per, 2)."%) ";
            
            ?></td>

            <td  class="text-center"><h5><?PHP echo " ( ".$contar." - ".number_format($per, 2)."%) "; ?></h5></td>
            <td  class="text-center" ><h4><a href="../softmidia/index.php?id_prontuario=<?php echo $res3['id']; ?>"><i id="amostragem" class="fas fa-notes-medical" data-toggle="tooltip" data-placement="left" title="<?php echo $array['sintomas']; ?>"></i></a></h4></td>
            <td  class="text-center" ><h4><a href="../softmidia/index.php?id=<?php echo $res3['id']; ?>"><span id="editar" class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="<?php echo "Editar paciente"; ?>"></span></a></h4></td>
            <td  class="text-center" ><h4><a href="../softmidia/index.php?id_excluir=<?php echo $res3['id']; ?>"><span id="excluir" class="glyphicon glyphicon-trash" style='color:red' aria-hidden="true" data-toggle="tooltip" data-placement="left" title="<?php echo "Excluir paciente"; ?>"></span></a></h4></td>

        </tr>
    <?php
        } 
    ?>
            </tbody>
        </table>
        <h5><font color='red'><i class="far fa-frown"></i> Possível infectado </font>   <font color='orange'><i class="far fa-flushed"></i> Potencial infectado</font>   <font color='green'><i class="far fa-smile"></i> Sintomas insuficientes</font></h5>

    </div>
    </div>

   


    


    <script>
        $(function () {
        $('#amostragem').tooltip()
        })
        $(function () {
        $('#editar').tooltip()
        })
        $(function () {
        $('#excluir').tooltip()
        })


        $(function () {
        $('#possivel').tooltip()
        })
        $(function () {
        $('#potencial').tooltip()
        })
        $(function () {
        $('#tranquilo').tooltip()
        })



    </script>


    <script>

        $(function () {
        $('[data-toggle="popover"]').popover()
        })

        $(function () {
        $('#prontuario').popover('show')
        })

    </script>


</body>
</html><?php /**PATH C:\xampp\htdocs\softmidia\teste\resources\views/index.blade.php ENDPATH**/ ?>