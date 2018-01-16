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

  <link rel="stylesheet" type="text/css" href="Vue/inscription/inscription.css">

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">S'inscrire</h1>
            <div class="account-wall">
                <img class="profile-img" src="Images/Logo_APP.png" height="120" width="120"
                    alt="">
                <form class="form-signin" method="POST" action="index.php?cible=inscriptionValidation">
                <input type="text" class="form-control" name="FullName" placeholder="Nom complet" required autofocus>
                <input type="text" class="form-control" name="identifiant" placeholder="Pseudo" required autofocus>
                <input type="password" id="mdp1"class="form-control" name="mdp" placeholder="Mot de passe" required>
                <input type="password" id="mdp2" class="form-control" name="mdpconf" placeholder="Confirmation mot de passe" required>
                <p style="text-align:center;" id="validate-status"></p>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="button">
                    S'inscrire </button>

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

$(document).ready(function() {
  $("#mdp2").keyup(validate);
});

function validate() {
  var password1 = $("#mdp1").val();
  var password2 = $("#mdp2").val();
    if(password1 == password2) {
       $("#validate-status").text("Les mots de passe correspondent").css({"color":"green"});
       $('#button').prop('disabled', false);
    }
    else {
        $("#validate-status").text("Les mots de passe ne correspent pas").css({"color":"red"});
        $('#button').prop('disabled', true);
    }
}
$('#button').prop('disabled', true);
</script>

</html>
