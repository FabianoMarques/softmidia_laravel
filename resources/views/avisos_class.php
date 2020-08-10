<?php 

        class Avisos{

                public function erroCadastro(){

                        $aviso = "<br><div class='col-md-12 text-center'><div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Cadastro não realizado.</b></div></div>";
                        return $aviso;

                }

                public function okCadastro(){

                        $aviso = "<br><div class='col-md-12 text-center'><div class='alert alert-success text-center caixa_sombra' role='alert'><b>Cadastrado realizado com sucesso! Espere...</b></div></div>"."<meta http-equiv='refresh' content='2;url=../softmidia/'>";
                        return $aviso;

                }

                public function vazioCampos(){

                        $aviso = "<br><div class='col-md-12 text-center'><div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Existem campos vazios!</b></div></div>";
                        return $aviso;

                }

                public function okExcluido(){

                        $aviso = "<br><div class='col-md-12 text-center'><div class='alert alert-success text-center caixa_sombra' role='alert'><b>Registro excluido com sucesso! Espere...</b></div></div>"."<meta http-equiv='refresh' content='2;url=../softmidia/'>";
                        return $aviso;

                }

                public function erroExcluido(){

                        $aviso = "<br><div class='col-md-12 text-center'><div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Erro ao excluir o registro</b></div></div>"."<meta http-equiv='refresh' content='2;url=../softmidia/'>";
                        return $aviso;

                }

                public function cpfInvalido(){

                        $aviso = "<br><div class='col-md-12 text-center'><div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! CPF inválido!</b></div></div>"."<meta http-equiv='refresh' content='2;url=../softmidia/'>";
                        return $aviso;

                }


               


               




        }



?>