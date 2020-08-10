<?php

    include_once("../resources/views/conexao_class.php"); 
    include_once("../resources/views/avisos_class.php"); 
    include_once("../resources/views/CPF.php");
    
    $mysqli = new Conexao();
    $avisos = new Avisos();

    if(isset($_POST["cad_pasciente"])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cpf = $_POST['cpf'];
        $fone = $_POST['fone'];
        $foto = $_POST['foto'];

        $valida = validaCPF($cpf);

        if($valida) {

            $img_name = $_FILES['foto']['name'];
            $img_tmp = $_FILES['foto']['tmp_name'];

            move_uploaded_file($img_tmp,"fotos/".$img_name);

            $equip = "INSERT INTO pascientes (nome, idade, cpf, fone, foto) VALUES ('$nome', '$idade', '$cpf', '$fone', '$img_name')";
            $res = mysqli_query($mysqli->getMysqli(), $equip);

            if($res){

                echo $avisos->okCadastro();

            }else{

                echo $avisos->erroCadastro();

            }

        }else{
            
            echo $avisos->cpfInvalido();

        }

    }

    if(isset($_POST["atua_paciente"])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cpf = $_POST['cpf'];
        $fone = $_POST['fone'];

        $foto = $_POST['foto'];
        $foto_atual = $_POST['foto_atual'];
                
        $img_name = $_FILES['foto']['name'];
        $img_tmp = $_FILES['foto']['tmp_name'];

        // SE O USUARIO NÃO ESCOLHER UMA IMAGEM NOVA ENTÃO É USADA A IMAGEM JÁ CADASTRADA (FOTO ATUAL)
        if(empty($img_name)){

            $img_name = $foto_atual;
            $img_tmp = $foto_atual;

        }

        move_uploaded_file($img_tmp,"fotos/".$img_name);

        $equip = "UPDATE pascientes SET nome = '$nome', idade = '$idade', cpf = '$cpf', fone = '$fone', foto = '$img_name' WHERE id = '$id'";
        $res = mysqli_query($mysqli->getMysqli(), $equip);

        
        if($res){

            
            $_GET["id"] = "";
            echo $avisos->okCadastro();


        }else{

            echo $avisos->erroCadastro();

        }
            
        



    }



    if(isset($_POST["exc_paciente"])){

        $id = $_POST['id_excluir'];

        $equip = "DELETE FROM pascientes WHERE id = '$id'";
        $res = mysqli_query($mysqli->getMysqli(), $equip);

        if($res){

            $_GET["id_excluir"] = "";
            echo $avisos->okExcluido();


        }else{

            echo $avisos->erroExcluido();

        }
            


    }


    if(isset($_POST["btn_sintomas"])){

        $id_pasc = $_POST['id_pasc'];
                
        for($i = 1; $i<=14; $i++){
            $sintomas .= $_POST['sintomas'.$i]; 
        }

        $equip = "INSERT INTO pascientes_sintomas (id_pasc, sintomas) VALUES ('$id_pasc', '$sintomas')";
        $res = mysqli_query($mysqli->getMysqli(), $equip);

        if($res){

            $_GET["id_prontuario"] = "";
            echo $avisos->okCadastro();

        }else{

            echo $avisos->erroCadastro();

        }


    }

    


   



?>