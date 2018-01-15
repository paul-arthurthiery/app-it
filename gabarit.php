<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>
           SmartPanel
        </title>
        <style type="text/css">
        ul li {list-style-type: none; }
        .nav li{ line-height:20px; float:left; padding:0 5px; font-size: 23px;}
        .nav ul li a {display: block; width: 100%; background: #FFF}
        .nav li a:hover{ color:#F00}
        .ul{ padding:0; margin:0;list-style:none}
        .bg{margin: 25px; margin-bottom: 0px;}

        </style>

        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/structure.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="jQuery/jquery.mCustomScrollbar.min.css">


    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src = "Images/Logo_APP.png" height="100" width="100" style="display : block; margin : auto">
                </div>

                <ul class="list-unstyled components">
                    <p><font size="6">SmartPanel</font></p>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Appartements</a>
                        <?php echo genAptMenu(); ?>
                    </li>
                    <li>
                        <a href="index.php?cible=Myprofile">Mon Profil</a>
                    </li>
                    <li>
                        <a href="index.php?cible=nouscontacter">Nous contacter</a>
                    </li>
                    <li>
                        <a href="index.php?cible=about">À propos </a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="index.php?cible=deconnexion" class="article">Déconnexion</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <div id="contenu">
                <?php if (!empty($contenu)) {
            		    echo($contenu);
            		}?>
                </div>
            </div>





        <!-- jQuery  -->
        <script src="jQuery/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js  -->
        <script src="bootstrap/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller  -->
        <script src="jQuery/jquery.mCustomScrollbar.concat.min.js"></script>

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
