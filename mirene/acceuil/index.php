<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>tontine++</title>
    <style>
     
     .social-buttons a{
  display: inline-flex;
  text-decoration: none;
  font-size: 18px;
  width: 60px;
  height: 60px;
  color: #fff;
  justify-content: center;
  align-items: center;
  position: relative;
  margin: 0 8px;
}

.social-buttons a::before{
  content: "";
  position: absolute;
  width: 60px;
  height: 60px;
  background: linear-gradient(45deg,#22a6b3,#30336b);
  border-radius: 50%;
  z-index: -1;
  transition: 0.3s ease-in;
}

.social-buttons a:hover::before{
  transform: scale(0);
}

.social-buttons a i{
  transition: 0.3s ease-in;
}

.social-buttons a:hover i{
  background: linear-gradient(45deg,#22a6b3,#30336b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transform: scale(2.2);
}








.social-buttons a{
  display: inline-flex;
  text-decoration: none;
  font-size: 18px;
  width: 60px;
  height: 60px;
  color: #fff;
  justify-content: center;
  align-items: center;
  position: relative;
  margin: 0 8px;
}

.social-buttons a::before{
  content: "";
  position: absolute;
  width: 60px;
  height: 60px;
  background: linear-gradient(45deg,#22a6b3,#30336b);
  border-radius: 50%;
  z-index: -1;
  transition: 0.3s ease-in;
}

.social-buttons a:hover::before{
  transform: scale(0);
}

.social-buttons a i{
  transition: 0.3s ease-in;
}

.social-buttons a:hover i{
  background: linear-gradient(45deg,#22a6b3,#30336b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transform: scale(2.2);
}
    </style>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
        
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
        
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
        
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
        
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
        
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Aetrt message
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Decembre 122019</div>
                                        <span class="font-weight-bold">nous avons creer un groupe</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"> 7, 2019</div>
                                       nous avons ajouter une mise
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">7mais, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
        
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message 
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">bonjour j'ai u probleme pour la creation du groupe.</div>
                                        <div class="small text-gray-500">mirene</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">vous pourrez m'aider</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate"></div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate"></div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">lire moin de message</a>
                            </div>
                        </li>
        
                        <div class="topbar-divider d-none d-sm-block"></div>
        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="affiche.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Mon profil
                                </a>
                                <a class="dropdown-item" href="modifier.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    paramettre
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activité
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    deconnexion
                                </a>
                            </div>
                        </li>
        
                    </ul>
        
                </nav>
            
                <div class="row"><a
                    target="_blank" rel="nofollow" href="groupe/index.php"  class="text-decoration-none">

                    <div class="col-lg-6 mb-4">
                        <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">GESTION DES GROUPES</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="images/imag.jfif" alt="...">
                    </div>
                    <p> Ce dossier portant sur la gestion des associations a pour vocation de faire le tour de cette activité complexe. Une activité qui va de l'administration en </a></p>
                   
                                
                            </div>
                        </div>
                    </div>
   

        <div class="col-lg-6 mb-4">  <a  target="_blank" rel="nofollow" href="montant/index.php"  class="text-decoration-none">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">GESTION DES MISES</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="images/images (10).jfif" alt="...">
                    </div>
                    <p> la tontine est une clause insérée dans un contrat d'acquisition en commun qui stipule que le dernier ...</p>
                    
                </div>
            </div>
        </div>
    </div>  <div class="row"><a
                    target="_blank" rel="nofollow" href="tontine/index.php"  class="text-decoration-none">

                    <div class="col-lg-6 mb-4">
                        <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">GESTION DES COTISATIONS</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="images/imag.jfif" alt="...">
                    </div>
                    <p> Ce dossier portant sur la gestion des associations a pour vocation de faire le tour de cette activité complexe. Une activité qui va de l'administration en </a></p>
                   
                                
                            </div>
                        </div>
                    </div>
   

        <div class="col-lg-6 mb-4"><a target="_blank" rel="nofollow" href="membre/index.php"  class="text-decoration-none">
               

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">GESTION DES MEMBRES</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="images/images (10).jfif" alt="...">
                    </div>
                    <p> la tontine est une clause insérée dans un contrat d'acquisition en commun qui stipule que le dernier ...</p>
                    
                </div>
            </div>
        </div>
    </div>
           
    <div class="row"><a
                    target="_blank" rel="nofollow" href="groupe/index.php"  class="text-decoration-none">

                    <div class="col-lg-6 mb-4">
                        <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">GESTION DES OPERATION</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="images/imag.jfif" alt="...">
                    </div>
                    <p> Ce dossier portant sur la gestion des associations a pour vocation de faire le tour de cette activité complexe. Une activité qui va de l'administration en </a></p>
                   
                                
                            </div>
                        </div>
                    </div>
   

        <div class="col-lg-6 mb-4">
               

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">HISTORIQUE DES OPERATION</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="images/images (10).jfif" alt="...">
                    </div>
                    <p> la tontine est une clause insérée dans un contrat d'acquisition en commun qui stipule que le dernier ...</p>
                    
                </div>
            </div>
        </div>
    </div>
  
        </div>
    </div>
</div>
    <div class="social-buttons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>