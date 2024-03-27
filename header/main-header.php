<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pet shop Mário Dutram</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="js/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- Left Panel -->

       <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="">
                    <h3 style="color: #fff"><img src="images/5889338.png" height="35px" width="35px">&nbsp;&nbsp;Pet Shop</h3>
   
                </div>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="main.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-paw"></i>Pets</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="category.php">Categoria</a></li>
                            <li><i class="fa fa-circle"></i><a href="pet_management.php">Gerenciamento</a></li>
                            <li><i class="fa fa-circle"></i><a href="category_product.php">Categoria de Produto</a></li>
                            <li><i class="fa fa-circle"></i><a href="product.php">Produto</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Gerenciamento</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle"></i><a href="client_form.php">Formulário de cliente</a></li>
                            <li><i class="fa fa-circle"></i><a href="services.php">Serviço</a></li>
                            <li><i class="fa fa-circle"></i><a href="order.php">Ordem</a></li>
                            <li><i class="fa fa-circle"></i><a href="vendor.php">Fornecedor</a></li>
                            <li><i class="fa fa-circle"></i><a href="user.php">Usuário</a></li>
                        </ul>
                    </li>
                   <li class="active">
                         <a href="payment.php"> <i class="menu-icon fa fa-money"></i>Pagamento </a>
                    </li>
                   <li class="active">
                        <a href="orderdetail.php"> <i class="menu-icon fa fa-list-alt"></i>Detalhes do pedido </a>
                    </li>
                    <li class="active">
                        <a href="usergroup.php"> <i class="menu-icon fa fa-cog"></i>Controle de usuário </a>
                    </li>
                 
            </div>
        </nav>
    </aside>
    
