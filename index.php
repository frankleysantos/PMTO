<?php include("header.php"); ?>
  <body>
<?php include("menu.php"); ?>
   <div class="container" style="padding-top:50px">
    <h2 class="page-header" align="center">RECADASTRAMENTO DOS SERVIDORES PUBLICOS MUNICIPAIS</h2>
    <h3 align="center">QUESTIONÁRIO DE PERFIL SOCIOECONÔMICO</h3>
    <h3>ATENÇÃO:</h3>
    <h4>A veracidade das respostas e a devolução deste questionário são necessárias e indispensáveis.</h4>
    <h4>Todas as questões visam à coleta de informações para recadastramento dos servidores ativos. Portanto, por favor, não deixe nenhuma questão sem resposta!</h4>
    <div class="col-md-9">
<?php
include("formulario.php");
?>
    </div>
    <div class="col-md-3 hidden-print" style="padding-top:10px">
<?php include("sidebar.php"); ?>
    </div>
   </div>
<?php include("footer.php"); ?>   
 </body>
</html>
