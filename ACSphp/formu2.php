<!DOCTYPE html>
<html>
<head>
	<title>javascript</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-cerulean.min.css">
	</head>
<body>
	<div id="case" class="container col-md-6 col-md-offset-3" >
		<div class="panel panel-info">
				<div class="panel-heading">Formulaire d'inscription</div>
			<div id="cadre" class="panel panel-body" >
				<form action="testphp.php" method="POST"  onsubmit="return validateForm();">
					<label for="">Prenom</label>
					<input class="form-control" type="text" name="prenom" id="prenom" placeholder="your prenom">
					<label for="">Nom</label>
					<input class="form-control" type="text" name="nom" id="nom" placeholder="your nom">
					<label for="">Email</label>
					<input class="form-control" type="email" name="email" id="email" placeholder="your email">
					<label for="">Message </label>
					<textarea class="form-control" name="message" id="message" placeholder="Your Message" ></textarea>
					homme <input type="radio" name="sexe" id="sexe" value="masculin">
					femme <input type="radio" name="sexe" id="sexe" value="feminin"><br>
					<button class="btn btn-success" type="submit" name="envoyer">Envoyer</button>
					<button class="btn btn-danger" type="reset" name="annuler">Annuler</button>
				</form>	
			</div>	
		</div>
	</div>
	<!-- <?php
	if(isset($_POST['envoyer'])){
		extract($_POST);?>
		<h1><?= $prenom ?></h1>
		<h1><?= $nom ?></h1>
		<h1><?= $email ?></h1>
		<h1><?= $message ?></h1>
		<h1><?= $sexe == "masculin"? "homme":"femme" ?></h1>

		<?php

	}	

	?> -->
	<script type="text/javascript">
		var prenom=document.getElementById('prenom');
		var nom=document.getElementById('nom');
		var email=document.getElementById('email');
		var message=document.getElementById('message');
		var sexe = document.getElementById('sexe');
		function	validateForm(){
			
			var tab = [];
			if (prenom.value == "") {
				tab.push("prenom");
				
			} 
			if (nom.value == "") {
				tab.push("nom");
				
			} 
			if (email.value == "") {
				tab.push("email");
				
			} 
			if (sexe.checked == "") {
				tab.push("sexe");

			} 
			if (tab.length > 0 ) {
				var chaine = tab.join(', ');

				alert('veuillez renseigner le(s) champ(s) ' + chaine);
				return false;
			}
			return true;
		}
	</script>
</body>
</html>