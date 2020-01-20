<?php


if(isset($_POST['envoyer'])){
		extract($_POST);?>
		<h1> PRENOM :<?= $prenom ?></h1>
		<h1> NOM : <?= $nom ?></h1>
		<h1> EMAIL :<?= $email ?></h1>
		<h1>MESSAGE :<?= $message ?></h1>
		<h1>SEXE : <?= $sexe == "masculin"? "homme":"femme" ?></h1>

		<?php

	}

	?>