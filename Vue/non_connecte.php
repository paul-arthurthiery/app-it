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

<style>
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
</style>
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
