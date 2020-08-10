    <script language="JavaScript">
        function ClickBotao(){ document.getElementById("modal123").click();  }
    </script>

    <script language="JavaScript">
        function ClickBotaoExcluir(){ document.getElementById("modalExcluir").click();  }
    </script>

    <script language="JavaScript">
        function ClickBotaoProntuario(){ document.getElementById("modalProntuario").click();  }
    </script>

    <script language="JavaScript" >
        
        function atualizadados(){

            if(document.atualiza.nome.value==""){
                /* SE O CAMPO ESTIVER EM BRANCO */
                /* alert( "OPS! Selecione um gabarito." ); */
                document.atualiza.nome.focus();
                document.getElementById("avisoAtualiza").innerHTML = "<div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Digite seu nome.</b></div>";
                
                return false;
            } 
            if(document.atualiza.idade.value==""){
                /* SE O CAMPO ESTIVER EM BRANCO */
                /* alert( "OPS! Selecione um gabarito." ); */
                document.atualiza.idade.focus();
                document.getElementById("avisoAtualiza").innerHTML = "<div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Digite sua idade.</b></div>";
                
                return false;
            } 
            if(document.atualiza.cpf.value==""){
                /* SE O CAMPO ESTIVER EM BRANCO */
                /* alert( "OPS! Selecione um gabarito." ); */
                document.atualiza.cpf.focus();
                document.getElementById("avisoAtualiza").innerHTML = "<div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Digite seu CPF.</b></div>";
                
                return false;
            }  
            
            if(document.atualiza.fone.value==""){
                /* SE O CAMPO ESTIVER EM BRANCO */
                /* alert( "OPS! Selecione um gabarito." ); */
                document.atualiza.fone.focus();
                document.getElementById("avisoAtualiza").innerHTML = "<div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Digite seu fone.</b></div>";
                
                return false;
            } 

            return true;
        }

        function enviardados(){

            if(document.formulario.nome.value==""){
                /* SE O CAMPO ESTIVER EM BRANCO */
                /* alert( "OPS! Selecione um gabarito." ); */
                document.formulario.nome.focus();
                document.getElementById("avisoCadastrar").innerHTML = "<div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Digite seu nome.</b></div>";
                
                return false;
            } 
            if(document.formulario.idade.value==""){
                /* SE O CAMPO ESTIVER EM BRANCO */
                /* alert( "OPS! Selecione um gabarito." ); */
                document.formulario.idade.focus();
                document.getElementById("avisoCadastrar").innerHTML = "<div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Digite sua idade.</b></div>";
                
                return false;
            } 
            if(document.formulario.cpf.value==""){
                /* SE O CAMPO ESTIVER EM BRANCO */
                /* alert( "OPS! Selecione um gabarito." ); */
                document.formulario.cpf.focus();
                document.getElementById("avisoCadastrar").innerHTML = "<div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Digite seu CPF.</b></div>";
                
                return false;
            }  

            if(document.formulario.fone.value==""){
                /* SE O CAMPO ESTIVER EM BRANCO */
                /* alert( "OPS! Selecione um gabarito." ); */
                document.formulario.fone.focus();
                document.getElementById("avisoCadastrar").innerHTML = "<div class='alert alert-info text-center caixa_sombra' role='alert'><b>Ops! Digite seu fone.</b></div>";
                
                return false;
            } 

            return true;

            }

        

    </script>