<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<!-- Jquery JS CDN -->
		<script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>


		<style>
		.navbar-default{
	background:transparent;
	background-image:none;
	border-color:transparent;
	box-shadow:none;
}
.account-wall
{
		margin-top: 20px;
		padding: 40px 0px 20px 0px;
		background-color: #f7f7f7;
		-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -60%);
}

		</style>


		<title>Page Administrateur</title>
	</head>
	<body>
		<div class="col-md-3"></div>
		<div class="col-md-6 account-wall" style="padding: 1%;">
			<h1 class="text-center">SmartPanel</h1><br><br><br>
			<div class=" center-block text-center">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<a href="index.php?cible=utilisateurs" class="btn btn-primary btn-lg" role="button">Utilisateurs</a>
						</div>
						<div class="col-md-6">
							<a href="index.php?cible=typesCapteurs" class="btn btn-primary btn-lg" role="button">Types capteurs</a>
						</div>
					</div>

					<br/>
					<br/>
					<br/>

					<a href="index.php?cible=deconnexion" class="btn btn-danger pull-right" role="button">Déconnexion</a>

				</div>
			</div>
	</div>

		<div class="col-md-3"></div>
	</body>
</html>
