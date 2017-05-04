<?php

?>
<html>
<head>
<title>Acesso Usuario</title>
 <!-- Bootstrap Core CSS -->
    <link href="../login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../login/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../login/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../login/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <script src="../login/js/funcoes_cpf.js"></script>
</head>

<body>

 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Acesso formulario</a>
            </div>
                       
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="http://csti.teofilootoni.mg.gov.br/"><i class="fa fa-dashboard fa-fw"></i>GLPI</a>
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
                    <div class="col-lg-6">
                        <h1 class="page-header">Usuario:</h1>
                          <form class="form-signin" action="index.php" name="form1" method="POST">
          <div class="form-group">
          <label for="login" class="sr-only">Login: </label>
          <input type="text" name="cpf" id="cpf" value="" class="form-control" minlength="11" maxlength="14" placeholder="Insira os n&uacute;meros do seu CPF" required autofocus>
         </div>
        

        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>

      </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
           
        
<?php

?>

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
