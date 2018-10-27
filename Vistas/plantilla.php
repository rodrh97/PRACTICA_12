<?php  
    session_start();
    require_once "../Controladores/controlador.php";
    require_once "../Modelos/enlaces.php";
    require_once "../Modelos/crud.php";
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Sistema de Control de Inventarios</title>
    <link rel="icon" href="../Diseños/assets/images/abc.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Diseños/components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../Diseños/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../Diseños/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="../Diseños/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="../Diseños/assets/pages/menu-search/css/component.css">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="../Diseños/assets/pages/prism/prism.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../Diseños/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../Diseños/assets/css/jquery.mCustomScrollbar.css">
    </head>
    <body>
    
    <!--<div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>-->


    <div id="pcoded" class="pcoded">


    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a href="#">
                            <h5>Sistema de Control de Inventario</h5>
                        </a>                    
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            
                            <li>
                                <a href="#" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="../Diseños/assets/images/usuario.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $_SESSION['usuario'] ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Perfil
                                        </a>
                                    </li>
                                    <li>
                                    <a href="logout.php">
                                        <i class="ti-layout-sidebar-left"></i> Cerrar Sesion
                                    </a>
                                </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">


            <?php  include "Paginas/navegacion.php";?>



            <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <?php  
                            //mostraremos un controlador que muestra la plantilla
                            $mvc = new MvcController();
                            //mostramos la funcion
                            $mvc->enlacesPaginasController();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../Diseños/components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../Diseños/components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../Diseños/components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../Diseños/components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../Diseños/components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../Diseños/components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../Diseños/components/modernizr/js/css-scrollbars.js"></script>

<!-- Syntax highlighter prism js -->
<script type="text/javascript" src="../Diseños/assets/pages/prism/custom-prism.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="../Diseños/components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../Diseños/components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript"
        src="../Diseños/components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../Diseños/components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Custom js -->

<script src="../Diseños/assets/js/pcoded.min.js"></script>
<script src="../Diseños/assets/js/menu/box-layout.js"></script>
<script src="../Diseños/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../Diseños/assets/js/script.js"></script>
    </body>
    </html>