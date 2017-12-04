<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>
           <?php echo($titre); ?>
        </title>
        <style type="text/css">
        ul li {list-style-type: none; }
        .nav li{ line-height:20px; float:left; padding:0 5px; font-size: 23px;}
        .nav ul li a {display: block; width: 100%; background: #FFF}
        .nav li a:hover{ color:#F00}
        .ul{ padding:0; margin:0;list-style:none}
        .bg{margin: 25px; margin-bottom: 0px;}

        </style>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/structure.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        

    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src = "Logo_app.png" height="100" width="100" style="display : block; margin : auto">
                </div>

                <ul class="list-unstyled components">
                    <p><font size="6">SmartPanel</font></p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Navigation</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="index.php?cible=accueil">Accueil</a></li>
                            <li><a href="index.php?cible=etape1">Etape 1</a></li>
                            <li><a href="index.php?cible=etape2">Etape 2</a></li>
                            <li><a href="index.php?cible=etape3">Etape 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?cible=Myprofile">My Profile</a>

                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="index.php?cible=Page1">Page 1</a></li>
                            <li><a href="index.php?cible=Page2">Page 2</a></li>
                            <li><a href="index.php?cible=Page3">Page 3</a></li>
                            <li><a href="index.php?cible=Page4">Page 4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="index.php?cible=about">About</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="index.php?cible=deconnexion" class="article">Déconnexion</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default data-spy="affix" data-offset-top="197"">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <nav class="bg">
                                    <ul>
                                        <li><a href="index.php?cible=Page1">Page1</a></li>
                                        <li><a href="index.php?cible=Page2">Page2</a></li>
                                        <li><a href="index.php?cible=Page3">Page3</a></li>
                                        <li><a href="index.php?cible=Page4">Page4</a></li>
                                    </ul>
                                </nav>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div id="contenu">
                    <?php echo($contenu); ?>
                </div>
              </div>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>
