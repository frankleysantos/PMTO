    <div class="col-lg-12">
        <h4>Todos os dados obtidos deste questionário serão confidenciais!</h4>
     <form class="form-signin" action="formulariophp" name="form1" method="POST">
      <table class='table table-striped table-bordered table-hover'>
       <tr>
        <td colspan="3">Nome:<input type="text" name="Nome" id="Nome" value="" class="form-control" placeholder="Nome" required></td>
        <td>Data de Nascimento:<input type="text" name="Nascto" id="Nascto" value="" class="form-control" placeholder="01/01/2017" required></td>
       </tr>
       <tr>
        <td colspan="3">
         Vinculo <select class="form-control" name="Vinculo">
          <option value="">Escolha...</option>
          <option value="Efetivo">Efetivo</option>
          <option value="Contratado">Contratado</option>
          <option value="Aposentado">Inativo</option>
         </select>
        </td>
        <td>Matricula:<input type="text" name="Matricula" id="Matricula" value="" class="form-control" placeholder="000000" required></td>
       </tr>
       <tr>
        <td colspan="3">Filiação:
         <input type="text" name="Mae" id="Mae" value="" class="form-control" placeholder="Mãe" required>
         <input type="text" name="Pai" id="Pai" value="" class="form-control" placeholder="Pai" required>
       </td>
        <td>Naturilidade:<input type="text" name="Naturalidade" id="Naturalidade" value="" class="form-control" placeholder="Naturalidade" required></td>
       </tr>
       <tr>
        <td>RG<input type="text" name="RG_NUM" id="RG_NUM" value="" class="form-control" placeholder="RG" required></td>
        <td>Orgão Expeditor<input type="text" name="RG_ORG" id="RG_ORG" value="" class="form-control" placeholder="Orgao expeditor" required></td>
        <td>UF<input type="text" name="RG_UF" id="RG_UF" value="" class="form-control" placeholder="UF" required></td>
        <td>CPF<input type="text" name="CPF" id="CPF" value="" class="form-control" placeholder="00000000000" required></td>
       </tr>
       <tr>
        <td colspan="3">Grau de Excolaridade
         <select class="form-control" name="Grau_escolar">
          <option value="">Escolha...</option>
          <option value="fund">Ensino Fundamental</option>
          <option value="medio">Ensino Médio</option>
          <option value="sup">Superior</option>
          <option value="esp">Pos-Graduação</option>
          <option value="mes">Mestrado</option>
          <option value="doc">Doutorado</option>
          <option value="posdoc">Pós-Doutorado</option>
         </select>
         <div>
          <label><input type="checkbox" name="Status_escolar" value="completo">&nbsp;Completo</label>
          <label><input type="checkbox" name="Status_escolar" value="incompleto">&nbsp;Incompleto</label>
         </div>
        </td>
        <td>Formacao Profissional<input type="text" name="Formacao" id="Formacao" value="" class="form-control" placeholder="Formação Profissional" required></td>
        </tr>
        <tr>
         <td colspan="3">Cargo Atual:<input type="text" name="Cargo" id="Cargo" value="" class="form-control" placeholder="Cargo Atual" required></td>
         <td>Secretaria de Lotacao:<input type="text" name="Lotacao" id="Lotacao" value="" class="form-control" placeholder="Secretaria de Lotação" required></td>
        </tr>
        <tr>
         <td colspan="3">Endereco:<input type="text" name="End_Rua" id="End_rua" value="" class="form-control" placeholder="Endereço" required></td>
         <td colspan="1">Numero:<input type="text" name="End-Num" id="End_Num" value="" class="form-control" placeholder="Número" required></td>
        </tr>
        <tr>
         <td colspan="1">Complemento:<input type="text" name="End_Num" id="End_Comp" value="" class="form-control" placeholder="Complemento"></td>
         <td colspan="2">Bairro:<input type="text" name="End_Bairro" id="End_Bairro" value="" class="form-control" placeholder="Bairro" required></td>
         <td colspan="1">CEP:<input type="text" name="End_CEP" id="End_CEP" value="" class="form-control" placeholder="CEP" required></td>
        </tr>
        <tr>
         <td colspan="1">Fixo:<input type="text" name="Fone_Fixo" id="Fone_Fixo" value="" class="form-control" placeholder="Fixo" required></td>
         <td>
          Tipo: <select class="form-control" name="Fone_Tipo">
           <option value="">Escolha...</option>
           <option value="proprio">Próprio</option>
           <option value="recado">Recado</option>
         </td>
         <td colspan="2">Celular:<input type="text" name="Fone_Cel" id="Fone_Cel" value="" class="form-control" placeholder="Celular" required></td>
        </tr>
        <tr>
         <td colspan="3">E-Mail:<input type="email" name="Email" id="Email" value="" class="form-control" placeholder="E-Mail" required></td>
         <td>Sexo:
          <select class="form-control" name="Sexo">
           <option value="masculino">Masculino</option>
           <option value="feminino">Feminino</option>
          </select>
         </td>
        </tr>
        <tr>
         <td>Cor/Etnia:
          <select class="form-control" name="Cor">
           <option value="">Escolha...</option>
           <option value="amarelo">Amarelo(a)</option>
           <option value="branco">Branco(a)</option>
           <option value="indigena">Indigena</option>
           <option value="negro">Negro(a)</option>
           <option value="pardo">Pardo(a)</option>
          </select>
         </td>
         <td>Estado Civil:
          <select class="form-control" name="EstCivil">
           <option value="">Escolha...</option>
           <option value="casado">Casado(a)</option>
           <option value="divorciado">Divorciado(a)</option>
           <option value="separado">Separado(a)</option>
           <option value="solteiro">Solteiro(a)</option>
           <option value="uniao_estavel">Uniao Estavel</option>
           <option value="viuvo">Viuvo(a)</option>
          </select>
         </td> 
         <td colspan="2">Possui CadUnico:<br>
          <input type="radio" name="CadUnico" value="S">&nbsp;Sim
          <input type="radio" name="CadUnico" value="N">&nbsp;Não<br>
          NIS:<input type="text" name="nis" id="NIS" value="" class="form-control" placeholder="NIS" required>                
         </td> 
        </tr>
        <tr>
         <td colspan="4">Tempo de residencia em Teofilo Otoni:<br>
          <input type="radio" name="TimeRes" value="1">&nbsp;ate 5 anos
          <input type="radio" name="TimeRes" value="2">&nbsp;mais de 5 anos ate 10 anos
          <input type="radio" name="TimeRes" value="3">&nbsp;mais de 10 anos
         </td>
        </tr>
        <tr>

         <td>Condicoes de Moradia:
          <select class="form-control" name="Hab_Tipo">
           <option value="">Escolha...</option>
           <option value="1">Casa</option>
           <option value="2">Apartamento</option>
          </select>
         </td>
         <td> <br>
          <select class="form-control" name="Hab_Modo">
           <option value="">Escolha...</option>
           <option value="propria">Propria</option>
           <option value="alugada">Alugada</option>
           <option value="cedida">Cedida</option>
           <option value="invadida">Invadida</option>
          </select>        
         </td>
         <td> Quitada:
          <select class="form-control" name="Hab_Quit">
           <option value="">Escolha...</option>
           <option value="sim">Sim</option>
           <option value="nao">Não</option>
          </select>
         </td>
         <td> Valor:<br>
          <input type="text" name="Hab_Valor" id="Hab_valor" value="" class="form-control" placeholder="Prestacao ou Aluguel"></label><br>
         </td>


        </tr>
        <tr>
         <td colspan="4">Tipo de transporte que voce utiliza pra trabalhar:<br>
          <input type="radio" name="transporte" value="item1" >&nbsp;Transporte Coletivo
          <input type="radio" name="transporte" value="item2">&nbsp;Bicicleta
          <input type="radio" name="transporte" value="item3">&nbsp;Moto
          <input type="radio" name="transporte" value="item4">&nbsp;Outros
         </td>
        </tr>
        <tr>
         <td colspan="4">Lingua estrangeira:<br>
          Ingles:<input type="radio" name="lingua" value="item1" >&nbsp;Basico
          <input type="radio" name="lingua" value="item2">&nbsp;Tecnico
          <input type="radio" name="lingua" value="item2">&nbsp;Fluente<br>
          Espanhol:<input type="radio" name="lingua2" value="item1" >&nbsp;Basico
          <input type="radio" name="lingua2" value="item2">&nbsp;Tecnico
          <input type="radio" name="lingua2" value="item2">&nbsp;Fluente<br>
         </td>
        </tr>
        <tr>
         <td colspan="4">Informatica:<br>
          <label><input type="checkbox" value="">&nbsp;Word</label>&nbsp;
          <label><input type="checkbox" value="">&nbsp;Excel</label>&nbsp;
          <label><input type="checkbox" value="">&nbsp;Internet</label><br>
          Outros:<input type="text" name="outro" id="outro" value="" class="form-control" placeholder="Outros cursos" required>
         </td>
        </tr>
        <tr>
         <td colspan ="4">
          <table class='table table-striped table-bordered table-hover'>
           <tr><td colspan="5" align="center"><b>Composicao Familiar</td></tr>
           <tr><td>Nome</td><td>Idade</td><td>Parentesco</td><td>Ocupacao</td><td>Remuneracao</td></tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required></td>
            <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required></td>
            <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required></td>
            <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required></td>
           </tr>
           <tr>
            <td><input type="text" name="nomefamilia" id="nomefamilia" value="" class="form-control" placeholder="Nome" required></td>
            <td><input type="text" name="idade" id="idade" value="" class="form-control" placeholder="Idade" required></td>
            <td><input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required></td>
            <td><input type="text" name="ocupacao" id="ocupacao" value="" class="form-control" placeholder="Ocupacao" required></td>
            <td><input type="text" name="remuneracao" id="remuneracao" value="" class="form-control" placeholder="Remuneracao" required></td>
           </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td colspan="4">Voce paga pensao alimenticia p/ filhos e/ou ex-conjuge?<br>
          <input type="radio" name="recebepensao" value="pensaosim" >&nbsp;Sim&nbsp;
          <input type="radio" name="recebepensao" value="pensaonao">&nbsp;Nao<br>
          Valor:<input type="text" name="valor" id="valor" value="" class="form-control" placeholder="Valor" required>
         </td>
        </tr>
        <tr>
         <td colspan="4">Voce recebe pensao alimenticia para seus filhos?<br>
          <input type="radio" name="pagapensao" value="pagasim" >&nbsp;Sim&nbsp;
          <input type="radio" name="pagapensao" value="paganao">&nbsp;Nao<br>
          Valor:<input type="text" name="valor" id="valor" value="" class="form-control" placeholder="Valor" required>
         </td>
        </tr>
        <tr>
         <td colspan="4">Quem e a pessoa que mais contribui na renda familiar?<br>
          <input type="radio" name="renda" value="voce">&nbsp;Você&nbsp;
          <input type="radio" name="renda" value="conjuge">&nbsp;Conjuge/Companheiro(a)&nbsp;
          <input type="radio" name="renda" value="pai">&nbsp;Pai&nbsp;
          <input type="radio" name="renda" value="mae">&nbsp;Mãe&nbsp;
          <input type="radio" name="renda" value="outro">&nbsp;Outros
         </td>
        </tr> 
        <tr>
         <td colspan="4">Renda mensal individual<br>
          <input type="radio" name="mensal" value="salario2">&nbsp;Ate 2 salarios minimos&nbsp;
          <input type="radio" name="mensal" value="salario4">&nbsp;De 02 a 04 salarios minimos&nbsp;
          <input type="radio" name="mensal" value="salario5">&nbsp;Superior a 5 salarios minimos
         </td>
        </tr> 
        <tr>
         <td colspan="4">Renda mensal familiar (incluindo voce)<br>
          <input type="radio" name="mensal1" value="salario2min">&nbsp;Ate 2 salarios minimos&nbsp;
          <input type="radio" name="mensal1" value="salario4min">&nbsp;De 02 a 04 salarios minimos&nbsp;
          <input type="radio" name="mensal1" value="salario5min">&nbsp;Superior a 5 salarios minimos
         </td>
        </tr>
        <tr>
         <td colspan="4">Existe em seu domicilio pessoa portadora de deficiencia?<br>
          <input type="radio" name="portador" value="portadorsim">&nbsp;Sim
          <input type="radio" name="portador" value="portadornao">&nbsp;Nao<br>
          Parentesco:<input type="text" name="parentesco" id="parentesco" value="" class="form-control" placeholder="Parentesco" required>
         </td>
        </tr>
        <tr>
         <td colspan="4">Existe em seu grupo familiar pessoa idosa?<br>
          <input type="radio" name="idosa" value="idosasim">&nbsp;Sim&nbsp;
          <input type="radio" name="idosa" value="idosanao">&nbsp;Nao<br>
         </td>
        </tr>
        <tr>
         <td colspan="4">Qual dos itens ha na sua casa?
          <div><label><input type="checkbox" value="">&nbsp;TV</label></div>
          <div><label><input type="checkbox" value="">&nbsp;Video Cassete e/ou DVD</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Radio</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Microcomputador</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Automovel</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Motocicleta</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Maquina de Lavar Roupa</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Geladeira</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Telefone Fixo</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Telefone Celular</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Acesso a internet</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;TV por assinatura</label>&nbsp;</div>
          <div><label><input type="checkbox" value="">&nbsp;Empregada mensalista</label>&nbsp;</div>
         </td>
        </tr>
        <tr>
         <td colspan="4">Voce possui algum plano de assistencia medica?:<br>
          <input type="radio" name="assistencia" value="assistenciasim">&nbsp;Sim&nbsp;
          <input type="radio" name="assistencia" value="assistencianao">&nbsp;Nao<br>
          Qual?<input type="text" name="assistencia" id="assistencia" value="" class="form-control" placeholder="Assistencia medica" required></td>
       </tr>
       <tr>
        <td colspan="4">
         <p>Use este espaço para alguma observação que julgue necessária:</p>
         <textarea name="Observacoes" id="Observacoes" class="form-control" rows="7"></textarea>
        </td>
       </tr>
      </table>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Salvar</button> 
     </form>
    </div>
    <!-- /.col-lg-12 -->
