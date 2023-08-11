arquivo criado na url no repositorio novo
REPOSITÓRIO NOVO110823

EDITADO PELO USUARIO FABIOPASSARELLA COMO COLABORADOR.



<?php
             if(isset($_POST['buttonEditar'])){                
                // TRANSFORMANDO A SENHA EM criptografia
                // copia o valor da senha digitada pelo usuario e salva em um POST
                // depois criptografa e salva na variavel do banco de dados
                // ATENÇÃO. A COLUNA NO BANCO DE DADOS DEVE SER VARCHA(255) OU 
                // OU VAI SALVAR ERRADO.
                $novavariavel = $_POST['m_serialnumber'];
                // $u_senha1 = password_hash($password, PASSWORD_DEFAULT);
                // a variavel u_senha agora está criptografada
                $sqlcriarfolhainspecao = "INSERT INTO t_insp_fund_masc_maquina (m_codseqxx, m_codrastreioaux2, m_item, m_frequencia, m_operacao, m_instrumento, m_dimensaonominal,m_serialnumber)
                SELECT codseqx, codrastreioaux, itemmascara,frequencia1, operacao, instrumento1, Dimensional1, $novavariavel FROM t_insp_fund_masc_aux WHERE codrastreioaux = $codrastreiopai";
                $result = mysqli_query($conexao, $sqlcriarfolhainspecao);
                //$query = "INSERT FROM t_insp_fund_masc_aux where idw = 100";
                //mysqli_query($conexao, $query);
                echo "<script language='javascript'> window.location='pg_insp_fund_masc_aux.php?codrastreiopai=$codrastreioaux'; </script>";
                }              
             } 
