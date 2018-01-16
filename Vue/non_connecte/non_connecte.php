<!DOCTYPE html>
<html>
<head>

<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<!-- Jquery JS CDN -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="Vue/non_connecte/non_connecte.css">

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Veuillez vous connecter à Smart Panel</h1>
            <div class="account-wall">
                <img class="profile-img" src="Images/Logo_APP.png" height="120" width="120"
                    alt="">
                <form class="form-signin" method="POST" action="index.php?cible=verif">
                <input type="text" class="form-control" name="identifiant" placeholder="Identifiant" required autofocus>
                <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Se connecter</button>

                <a href="#" class="pull-right need-help">Besoin d'aide ? </a><span class="clearfix"></span>
                </form>
            </div>
            <br/>
            <?php if (!empty($erreur)) {
              echo($erreur);
            }?>
        </div>
    </div>
</div>
</body>

<!-- Animation message erreur -->
<script>
jQuery.fn.shake = function(intShakes, intDistance, intDuration) {
    this.each(function() {
        $(this).css("position","relative");
        for (var x=1; x<=intShakes; x++) {
        $(this).animate({left:(intDistance*-1)}, (((intDuration/intShakes)/4)))
    .animate({left:intDistance}, ((intDuration/intShakes)/2))
    .animate({left:0}, (((intDuration/intShakes)/4)));
    }
  });
return this;
};

$("#shaker").ready(function(){
	$("#shaker").shake(3,7,800);
});
</script>

</html>
