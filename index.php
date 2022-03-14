<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="css/fa-css/all.min.css" rel="stylesheet" type="text/css">
    

</head>
<body>
   
<div id="wrapper"> <!-- First Div-->
    <!-- First UL-->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">K3L POS 2.0</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link text-center" href="#">
            <span>DASHBOARD</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
            <!-- Empty Content Heading -->
    </div>

    <!-- Nav Item - Manage Users -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages/manage-users.php" 
            aria-expanded="true" aria-controls="collapseInbox" target="accounts_iframe">
            <i class="fas fa-fw fa-users">
            </i>
            <span>Manage Users</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Update Product -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages/update-product.php" 
            aria-expanded="true" aria-controls="collapseInbox" target="accounts_iframe">
            <i class="fas fa-fw fa-wrench">
            </i>
            <span>Update Product</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Invoicing -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages/invoicing.php" 
            aria-expanded="true" aria-controls="collapseInbox" target="accounts_iframe">
            <i class="fas fa-fw fa-file-invoice">
            </i>
            <span>Invoicing</span>
            <span class="badge badge-pill badge-danger" >3</span> 
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Project Manager -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages/project-manager.php" 
            aria-expanded="true" aria-controls="collapseInbox" target="accounts_iframe">
            <i class="fas fa-fw fa-user">
            </i>
            <span>Project Manager</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Post Collection -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages/post-collection.php" 
            aria-expanded="true" aria-controls="collapseInbox" target="accounts_iframe">
            <i class="fas fa-fw fa-inbox">
            </i>
            <span>Post Collection</span>
            <span class="badge badge-pill badge-danger" >5</span> 
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Project Monitor -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages/project-monitor.php" 
            aria-expanded="true" aria-controls="collapseInbox" target="accounts_iframe">
            <i class="fas fa-fw fa-chart-pie">
            </i>
            <span>Project Monitor</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    </ul><!-- First UL-->

    <!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar (White) -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                        <div class="col-sm-12 minimal-text "> Admin_User </div>
                        </span>

                        <img class="dropdown img-profile rounded-circle"
                            src="img/undraw_profile_3.svg">
                          
                    </a>

                    <div class="dropdown-content">
                            
                              <a href="#" id="manage_accts" class="col-sm-8 manage-acc-button" data-toggle="modal" data-target="#manage_accounts"><p class="logout-text">MANAGE ACCOUNT</p></a>
                              <hr class="mb-1">
                              <a href="php/acct-logout.php" class="col-sm-8 logout-button"><p class="logout-text">LOGOUT</p></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Start of Iframe -->

        <div class="embed-responsive embed-responsive-16by9" style="height: 80vh">
        <iframe class="embed-responsive-item" src="pages/manage-users.php" name="accounts_iframe" id="accounts_iframe" allowfullscreen></iframe>
        </div>
        <!-- End of Iframe -->

</div> <!-- First Div-->

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>

</body>
</html>