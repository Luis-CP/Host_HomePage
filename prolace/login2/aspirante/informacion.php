<?php
require_once('../../login1/procesos/connect1.php');
mysql_select_db($database_desarrolloweb, $desarrolloweb);
?>
<?php
session_start();
 

echo "Bienvenidos";
$nombre=$_SESSION['usuario'];
echo 'vairable es :____'.$nombre;
echo '<a href="../index.html">salir</a>';
  if(!isset($nombre)){
  header('location:../../login1/index.php');
    error_reporting(0);
    die();
  }
?>
 
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Panel de control de usuario</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/notification/prolase.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="#"><img class="main-logo" src="img/notification/prolase.png" alt="IMG-LOGO" width="75" height="300"></a>
                <strong><img src="img/notification/prolase.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/notification/admin1.jpg" alt="" /></a>
					<h2>Usuari@ <span class="min-dtn">Prolase</span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="https://www.facebook.com/Prolase-513331929071271/"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                     <li class="active">
                            <a class="has-arrow" href="index.html">
                                   <i class="icon nalika-home icon-wrap"></i>
                                   <span class="mini-click-non">Usuario</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="registrar_pedido.php"><span class="mini-sub-pro">Registrar pedido</span></a></li>
                              
                                <li><a title="Dashboard v.3" href="mostrar_pedido1.php"> <span class="mini-sub-pro">Despacho de pedido</span></a></li>
                                <li><a title="Product List" href="pedido_mostrar.php"><span class="mini-sub-pro">Pedidos pendientes</span></a></li>
                     </li>
                       
                        
                        
                      
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="indicator-ms"></span></a>
                                                    
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="icon nalika-user"></i>
															<span class="admin-name"><?php echo ''.$nombre; ?></span>
															<i class="icon nalika-down-arrow nalika-angle-dw"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                      
                                                        <li><a href=""><span class="icon nalika-user author-log-ic"></span> Mi perfil</a>
                                                        </li>
                                                    
                                                        <li><a href="../../login1/usuario/salir.php"><span class="icon nalika-unlocked author-log-ic"></span> Salir</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                      
                                       
                                        <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Usuario</span></a></li>
                                        <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Aspirante</span></a></li>
                                        <li><a title="Dashboard v.3" href="index-2.html"> <span class="mini-sub-pro">Productos</span></a></li>
                                        <li><a title="Product List" href="product-list.html"><span class="mini-sub-pro">Pedidos</span></a></li>
                                        <li><a title="Product Edit" href="product-edit.html"><span class="mini-sub-pro">Editar productos</span></a></li>
                                 
                                      
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
                                            </div>
                                            <br>
											<div class="breadcomb-ctn">
												<h2>Panel de administración</h2>
												<p>Bienvenid@  Usuario <span class="bread-ntd"></span></p>
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                   
            </div>
        </div>
        <div class="author-area-pro">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="breadcomb-ctn">
                           <center><h2> Informacíon del usuario</h2></center> 
                        </div>
            <table class="table table-bordered" style="width: 200px;"> 
                      <?php
$query_rs_producto = "select * from usuario where id_usuario ='$nombre' ";
$rs_producto = mysql_query($query_rs_producto , $desarrolloweb) or
die(mysql_error());
$row_rs_producto = mysql_fetch_assoc($rs_producto);
$totalRows_rs_producto = mysql_num_rows($rs_producto);
?>
<?php
do {
?>

<tr >  
    <td>
      <div class="breadcomb-ctn">
            <h2><strong>Numero de cedula</strong></h2>
        </div>
        </td>
        <td>
             <div class="breadcomb-ctn">
            <h2> <?php echo $row_rs_producto['id_usuario'];?></h2></td>
             </div>
                                                    </tr>
                                                
    <tr>  
    <td>
      <div class="breadcomb-ctn">
            <h2><strong>Nombre del usuario</strong></h2>
        </div>
        </td>
        <td>
             <div class="breadcomb-ctn">
            <h2> <?php echo $row_rs_producto['user'];?></h2></td>
             </div>
                                                    </tr>


<tr>  
    <td>
      <div class="breadcomb-ctn">
            <h2><strong>Correo del usuario</strong></h2>
        </div>
        </td>
        <td>
             <div class="breadcomb-ctn">
            <h2> <?php echo $row_rs_producto['email'];?></h2></td>
             </div>
                                                    </tr>

<?php
} while ($row_rs_producto= mysql_fetch_assoc($rs_producto));
?>

</table>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="breadcome-list">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="breadcomb-wp">
                                                        <div class="breadcomb-icon">
                                                            <i class="icon nalika-favorites" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="breadcomb-ctn">
                                                            <h2>Gracias por tu visita</h2>
                                                            <p>Los mejores gestiónando tu información <span class="bread-ntd">Panel de administración</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div class="breadcomb-report">
                                                      
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
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020  Ingenieria en sistemas  de información <a href="https://colorlib.com/wp/templates/">Empresa Prolase</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>