<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Relatório de Estudantes</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">
</head>

<body class="skin-default-dark fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Sistemat</p>
        </div>
    </div>


    <!-- ============================================================== -->
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <b>
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Digite e tecle enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="img-circle fa fa-user-circle"></i> </a>
                            <ul class="nav-item dropdown-menu" id="dropdown">
                              <li> <a href="logout.php">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span style="color:#fff;">MENU</span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="cadastro-est.php" aria-expanded="false"><i class="fa fa-drivers-license-o"></i><span class="hide-menu"></span>Matricular estudante</a></li>
                        <li> <a class="waves-effect waves-dark" href="rel-est.php" aria-expanded="false"><i class="fa fa-file-text-o"></i><span class="hide-menu">Relatório de estudantes</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
        </aside>
        <!-- ============================================================== -->
        <?php
          //require 'open.php';
          require '../model/conexao.php';
        //  require '../model/insertEst';
          //$cod = $_SESSION['cod'];
          //$sql='SELECT * from alunos a join escolas e on e.cod_escolas = a.cod_escolas where nomeAcesso_escolas="'.$logado.'"';

          $sql = "select * from alunos";
          $res = mysqli_query($link,$sql);

        //  echo $logado;
          //  var_dump($_SESSION['user']);
        ?>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <br>
                <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="d-flex">
                                  <div>
                                      <h1>Relatório de Estudantes</h1>

                                  </div>
                              </div>
                          </div>
                          <div class="table-responsive">
                              <table class="table table-hover" style="background-color:#fff;">
                                  <thead>
                                      <tr>
                                          <th>Nome da Estudante</th>
                                          <th>CPF</th>
                                          <th>Série</th>
                                          <th>Bairro</th>
                                          <th>Telefone</th>
                                          <th>Email</th>
                                          <th>Data de matrícula</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      while($row = mysqli_fetch_assoc($res)):
                                        echo "<tr>
                                            <td class='txt-oflo'>".$row['nome_alunos']."</td>
                                            <td class='txt-oflo'>".$row['CPF_alunos']."</td>
                                            <td class='txt-oflo'>".$row['serie_alunos']."</td>
                                            <td class='txt-oflo'>".$row['bairro_alunos']."</td>
                                            <td class='txt-oflo'>".$row['celular_alunos']."</td>
                                            <td class='txt-oflo'>".$row['email_alunos']."</td>
                                            <td class='txt-oflo'>".$row['data_matricula_alunos']."</td>
                                            <td class='txt-oflo'><button class='btn btn-info waves-effect waves-light m-r-5'>Editar</button><button class='btn btn-danger waves-effect waves-light m-r-10'>Excluir</button></td>
                                        </tr>";
                                      endwhile;
                                    ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 <strong>Sistemat</strong> por SMILE.
        </footer>
    </div>
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="dist/js/jquery.mask.min.js"></script>
</body>

</html>
