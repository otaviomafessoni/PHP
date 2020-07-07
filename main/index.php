<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistema - Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->

  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
    <!--
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
    -->      
      <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Relação de Clientes</span>
              </a>
            </li>        
            
            <li class="nav-item">
              <a class="nav-link active" href="../login/login.php">
                <!--<i class="ni ni-tv-2 text-primary"></i>-->
                <span class="nav-link-text">Sair</span>
              </a>              
            </li> 
                          
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Otavio Mafessoni</span>
          </h6>                        
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>     
          </ul>
<!---
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        -->          
        </div>
      </div>
    </nav>
    <!-- Header -->

    <div class="header bg-primary pb-6">
        
      <div class="container-fluid">
        <div class="header-body">             
          <div class="row">
            <div class="col-xl-12 col-md-6">
              <div class="card card-stats">
     
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total de clientes</h5>                              
                    </div>                    
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>     
                </div>
              </div>
            </div>
          </div>             
        </div>
      </div>
      
    </div>
  
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Clientes</h3>
                </div>
                <!--<button id="btnCarregar" type="submit">Carregar</button>-->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Razão Social</th>
                    <th scope="col">CNPJ</th>
                  </tr>
                </thead>
                <tbody>                                    
                    <?php
                      require "../conexao.php";

                      $sql = ' ';
                      $sql .= 'SELECT ID_ENTIDADES, NOME, RAZAOSOCIAL, CNPJCPF FROM ENTIDADES';
                      $sql .= " WHERE ATIVO = 1 AND CLIENTE_FORNECEDOR = 0 AND PENDENCIA = 0";
                      //$sql .= " AND ID_ENTIDADES = 1391";
                
                      $Conexao = new Conexao();   
                      $clientes = $Conexao->query($sql);

                      $i = 0;
                      while($row = sqlsrv_fetch_object($clientes)){         
                      ?>
                        <tr id="linha<?=$i?>">									
                          <th align="left" valign="center" ><?= $row->ID_ENTIDADES ?></th>
                          <th align="left" valign="center" ><?= $row->NOME ?></th>
                          <th align="left" valign="center" ><?= $row->RAZAOSOCIAL ?></th>
                          <th align="left" valign="left" ><?= $row->CNPJCPF ?></th>
                         <?php         
                         $i ++;
                      }                      
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>