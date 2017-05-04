<?php


?>
<html>
<head>
<title>Recadastramento dos servidores publicos municipais</title>
 <!-- Bootstrap Core CSS -->
    <link href="../login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../login/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../login/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../login/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
</head>

<body>

 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Prefeitura Municipal de Teofilo Otoni</a>
            </div>
                       
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="http://teofilootoni.mg.gov.br/site/"><i class="fa fa-hospital-o fa-fw"></i>Site Prefeitura</a>
                        </li>
                        
                        
                        </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <h2 class="page-header" align="center">Recadastramento dos servidores publicos municipais</h2>
                        <h3 align="center">Questionario de perfil socieconomico</h3>
                        <h3>Atencao</h3>
                        <h4>A veracidade das respostas e a devolucao deste questionario sao necessarias e indispensaveis.
Todas as questoes visam a coleta de informacoes para recadastramento dos servidores ativos. Portanto, por favor, nao deixe nenhuma questao sem resposta!
Todos os dados obtidos deste questionario serao confidenciais!
</h4>
                          <form class="form-signin" action="formulariophp" name="form1" method="POST">
          <table class='table table-striped table-bordered table-hover'>
          <tr>
                <td colspan="3">Nome:<input type="text" name="nome" id="nome" value="" class="form-control" placeholder="Nome" required autofocus></td>
                <td>Data Nascimento:<input type="text" name="nascimento" id="nascimento" value="" class="form-control" placeholder="Data nascimento" required autofocus></td>
          </tr>
            
          <tr>
                <td colspan="3">Vinculo <select class="form-control">
                        <option value="efetivo">Efetivo</option>
                        <option value="contratado">Contratado</option>
                        <option value="inativo">Inativo</option>
                        </select>
                </td>
                <td>Matricula:<input type="text" name="matricula" id="matricula" value="" class="form-control" placeholder="Matricula" required autofocus></td>
        </tr>
        <tr>
                <td colspan="3">Filiacao:<input type="text" name="filiacao" id="filiacao" value="" class="form-control" placeholder="Filiacao" required autofocus></td>
                <td>Naturilidade:<input type="text" name="naturalidade" id="naturalidade" value="" class="form-control" placeholder="Naturalidade" required autofocus></td>
          </tr>
        <tr>
            <td>RG<input type="text" name="identidade" id="identidade" value="" class="form-control" placeholder="RG" required autofocus></td>
            <td>Orgao Expeditor<input type="text" name="orgao" id="orgao" value="" class="form-control" placeholder="Orgao expeditor" required autofocus></td>
            <td>UF<input type="text" name="uf" id="uf" value="" class="form-control" placeholder="UF" required autofocus></td>
            <td>CPF<input type="text" name="cpf" id="cpf" value="" class="form-control" placeholder="CPF" required autofocus></td>
        </tr>

        <tr>
            <td colspan="3">Grau de Excolaridade
            <select class="form-control">
                        <option value="fundamental">Ensino Fundamental</option>
                        <option value="medio">Ensino Medio</option>
                        <option value="superior completo">Superior</option>
                        <option value="pos graduacao incompleto">Pos-Graduacao</option>
                        <option value="mestrado incompleto">Mestrado</option>
                        <option value="doutorado incompleto">Doutorado</option>
            </select>
            <div>
                    <label><input type="checkbox" value="completo">Completo</label>
                    <label><input type="checkbox" value="incompleto">Incompleto</label>
            </div>
            </td>
            <td>Formacao Profissional<input type="text" name="formacao" id="formacao" value="" class="form-control" placeholder="Formacao Profissional" required autofocus></td>
        </tr>
        <tr>
            <td colspan="3">Cargo Atual:<input type="text" name="cargo" id="cargo" value="" class="form-control" placeholder="Cargo Atual" required autofocus></td>
            <td>Secretaria de Lotacao:<input type="text" name="secretaria" id="secretaria" value="" class="form-control" placeholder="Secretaria de Lotacao" required autofocus></td>
        </tr>
        <tr>
            <td colspan="1">Endereco:<input type="text" name="endereco" id="endereco" value="" class="form-control" placeholder="Endereco" required autofocus></td>
            <td>Numero:<input type="text" name="numero" id="numero" value="" class="form-control" placeholder="Numero" required autofocus></td>
            <td>Bairro:<input type="text" name="bairro" id="bairro" value="" class="form-control" placeholder="Bairro" required autofocus></td>
            <td>CEP:<input type="text" name="cep" id="cep" value="" class="form-control" placeholder="CEP" required autofocus></td>
        </tr>
        <tr>
            <td colspan="2">Celular:<input type="text" name="celular" id="celular" value="" class="form-control" placeholder="Celular" required autofocus></td>
            <td colspan="2">Fixo:<input type="text" name="fixo" id="fixo" value="" class="form-control" placeholder="Fixo" required autofocus></td>
           
        </tr>
        <tr>
            <td colspan="3">Email:<input type="text" name="email" id="email" value="" class="form-control" placeholder="Email" required autofocus></td>
            <td>Sexo:
                <select class="form-control">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                </select>
            </td>
              
        </tr>
        <tr>
            <td>Cor/Etnia:
                <select class="form-control">
                        <option value="Masculino">Branco(a)</option>
                        <option value="Feminino">Pardo(a)</option>
                        <option value="Feminino">Negro(a)</option>
                        <option value="Feminino">Amarelo(a)</option>
                        <option value="Feminino">Indigena</option>
                </select>
            </td>
            <td>Estado Civil:
                <select class="form-control">
                        <option value="Masculino">Solteiro(a)</option>
                        <option value="Feminino">Casado(a)</option>
                        <option value="Feminino">Separado(a)</option>
                        <option value="Feminino">Divorciado(a)</option>
                        <option value="Feminino">Viuvo(a)</option>
                        <option value="Feminino">Uniao Estavel</option>
                </select>
            </td> 
            <td colspan="2">Possui CadUnico:<br>
                <input type="radio" name="cad" value="sim" checked> Sim<br>
                <input type="radio" name="cad" value="nao"> Nao<br>
                NIS:<input type="text" name="nis" id="nis" value="" class="form-control" placeholder="NIS" required autofocus>                
            </td> 
        </tr>
        <tr>
            <td colspan="4">Tempo de residencia em Teofilo Otoni:<br>
                <input type="radio" name="residencia" value="item1" checked>ate 5 anos&nbsp;
                <input type="radio" name="residencia" value="item2">mais de 5 anos ate 10 anos&nbsp;
                <input type="radio" name="residencia" value="item3">mais de 10 anos
            </td>
        </tr>
        <tr>
            <td colspan="4">Condicoes de Moradia:<br>
                <input type="radio" name="moradia" value="item1" checked>Casa&nbsp;
                <input type="radio" name="moradia" value="item2">Apartamento<br>
                   <label size="2"> 
                    <select class="form-control">
                        <option value="propria">Propria quitada</option>
                        <option value="alugada">Alugada</option>
                        <option value="cedida">Cedida</option>
                        <option value="invadida">Invadida</option>
                </select>        
                    </label>
                    <label>Prestacao ou Aluguel:<input type="radio" name="prestacao" value="prestacaosim" checked>Sim&nbsp;
                            <input type="radio" name="prestacao" value="prestacaonao">Nao<br></label>    
                <label size="2"><input type="text" name="prestacao" id="prestacao" value="" class="form-control" placeholder="Prestacao ou Aluguel" required autofocus></label><br>
            </td>
        </tr>
        <tr>
            <td colspan="4">Tipo de transporte que voce utiliza pra trabalhar:<br>
                <input type="radio" name="transporte" value="item1" checked>Transporte Coletivo&nbsp;
                <input type="radio" name="transporte" value="item2">Bicicleta&nbsp;
                <input type="radio" name="transporte" value="item3">Moto&nbsp;
                <input type="radio" name="transporte" value="item4">Outros&nbsp;
            </td>
        </tr>
         <tr>
            <td colspan="4">Lingua estrangeira:<br>
                Ingles:<input type="radio" name="lingua" value="item1" checked>Basico&nbsp;
                <input type="radio" name="lingua" value="item2">Tecnico&nbsp;
                <input type="radio" name="lingua" value="item2">Fluente<br>
                Espanhol:<input type="radio" name="lingua2" value="item1" checked>Basico&nbsp;
                <input type="radio" name="lingua2" value="item2">Tecnico&nbsp;
                <input type="radio" name="lingua2" value="item2">Fluente<br>
            </td>
        </tr>
         <tr>
            <td colspan="4">Informatica:<br>
                <label><input type="checkbox" value="">Word</label>&nbsp;
                <label><input type="checkbox" value="">Excel</label>&nbsp;
                <label><input type="checkbox" value="">Internet</label><br>
                Outros:<input type="text" name="outro" id="outro" value="" class="form-control" placeholder="Outros cursos" required autofocus>
            </td>
        </tr>

        <tr>
            <td colspan ="4">
            <table class='table table-striped table-bordered table-hover'>
                <tr>
                    <td colspan="5" align="center"><b>Composicao Familiar</td>
                </tr>
                <tr>
                    <td>Nome</td>
                    <td>Idade</td>
                    <td>Parentesco</td>
                    <td>Ocupacao</td>
                    <td>Remuneracao</td>
                </tr>
                <tr>
                    <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required autofocus></td>
                    <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required autofocus></td>
                    <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required autofocus></td>
                    <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required autofocus></td>
                    <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required autofocus></td>
                </tr>
                <tr>
                    <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required autofocus></td>
                    <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required autofocus></td>
                    <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required autofocus></td>
                    <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required autofocus></td>
                    <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required autofocus></td>
                </tr>
                <tr>
                    <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required autofocus></td>
                    <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required autofocus></td>
                    <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required autofocus></td>
                    <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required autofocus></td>
                    <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required autofocus></td>
                </tr>
                <tr>
                    <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required autofocus></td>
                    <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required autofocus></td>
                    <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required autofocus></td>
                    <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required autofocus></td>
                    <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required autofocus></td>
                </tr>
            </table>
            </td>
            </tr>
            <tr>
                <td colspan="4">Voce paga pensao alimenticia p/ filhos e/ou ex-conjuge?<br>
                <input type="radio" name="recebepensao" value="pensaosim" checked>Sim&nbsp;
                <input type="radio" name="recebepensao" value="pensaonao">Nao<br>
                Valor:<input type="text" name="valor" id="valor" value="" class="form-control" placeholder="Valor" required autofocus>
                </td>
             </tr>
             <tr>
                <td colspan="4">Voce recebe pensao alimenticia para seus filhos?<br>
                <input type="radio" name="pagapensao" value="pagasim" checked>Sim&nbsp;
                <input type="radio" name="pagapensao" value="paganao">Nao<br>
                Valor:<input type="text" name="valor" id="valor" value="" class="form-control" placeholder="Valor" required autofocus>
                </td>
             </tr>
             <tr>
                <td colspan="4">Quem e a pessoa que mais contribui na renda familiar?<br>
                <input type="radio" name="renda" value="voce">Voce&nbsp;
                <input type="radio" name="renda" value="conjuge">Conjuge/Companheiro(a)&nbsp;
                <input type="radio" name="renda" value="pai" checked>Pai&nbsp;
                <input type="radio" name="renda" value="mae">Mae&nbsp;
                <input type="radio" name="renda" value="outro">Outros
             </td>
             </tr> 
             <tr>
                <td colspan="4">Renda mensal individual<br>
                <input type="radio" name="mensal" value="salario2">Ate 2 salarios minimos&nbsp;
                <input type="radio" name="mensal" value="salario4">De 02 a 04 salarios minimos&nbsp;
                <input type="radio" name="mensal" value="salario5" checked>Superior a 5 salarios minimos&nbsp;
             </td>
             </tr> 
             <tr>
                <td colspan="4">Renda mensal familiar (incluindo voce)<br>
                <input type="radio" name="mensal1" value="salario2min">Ate 2 salarios minimos&nbsp;
                <input type="radio" name="mensal1" value="salario4min">De 02 a 04 salarios minimos&nbsp;
                <input type="radio" name="mensal1" value="salario5min" checked>Superior a 5 salarios minimos&nbsp;
             </td>
             </tr>
             <tr>
                <td colspan="4">Existe em seu domicilio pessoa portadora de deficiencia?<br>
                <input type="radio" name="portador" value="portadorsim">Sim&nbsp;
                <input type="radio" name="portador" value="portadornao" checked>Nao<br>
                Parentesco:<input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required autofocus>
             </td>
             </tr>
             <tr>
                <td colspan="4">Existe em seu grupo familiar pessoa idosa?<br>
                <input type="radio" name="idosa" value="idosasim">Sim&nbsp;
                <input type="radio" name="idosa" value="idosanao" checked>Nao<br>
             </td>
             </tr>
             <tr>
                <td colspan="4">Qual dos itens ha na sua casa?
                    <div>
                    <label><input type="checkbox" value="">TV</label>
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Video Cassete e/ou DVD</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Radio</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Microcomputador</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Automovel</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Motocicleta</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Maquina de Lavar Roupa</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Geladeira</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Telefone Fixo</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Telefone Celular</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Acesso a internet</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">TV por assinatura</label>&nbsp;
                    </div>
                    <div>
                    <label><input type="checkbox" value="">Empregada mensalista</label>&nbsp;
                    </div>

                </td>
             </tr>
             <tr>
                <td colspan="4">Voce possui algum plano de assistencia medica?:<br>
                <input type="radio" name="assistencia" value="assistenciasim">Sim&nbsp;
                <input type="radio" name="assistencia" value="assistencianao" checked>Nao<br>
                Qual?<input type="text" name="assistencia" id="assistencia" value="" class="form-control" placeholder="Assistencia medica" required autofocus></td>
             </tr>
             <tr>
                <td colspan="4">
             <table class='table table-striped table-bordered table-hover'> 
                <tr>
                    <td>Use este espaco para alguma observacao que julgue necessaria:<br>
                        <input type="text" name="observacao" id="observacao" value="" class="form-control" placeholder="Observacao" required autofocus>
                    </td>
                </tr>
            </table>
            </td>
            </tr>
        </table>
           
        <button class="btn btn-lg btn-primary btn-block" type="submit">Salvar</button>
        
      </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
           
        


 </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    
    <script src="../login/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../login/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../login/js/sb-admin-2.js"></script>    
</body>
</html>
