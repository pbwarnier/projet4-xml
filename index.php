<?php
	$xml = new SimpleXMLElement('assets/source.xml', NULL, TRUE);
	if (!empty($_GET['id'])) {
		// On prend l'id d'URL et on retire 1 car la case du tableau XML démarre à 0
		$case = $_GET['id'] - 1;
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $xml -> page[$case] -> title ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>
	<body>
		<header>
			<div class="headerContainer"><p class="ocordoHeaderTitle">OCORDO</p></div>
		</header>
		<nav class="navbar navbar-dark bg-dark">
  			<a class="navbar-brand" href="index.php?id=1"><img width="40" src="assets/img/ocordoLogo.png" alt="Logo Ocordo"></a>
    		<ul class="navbar-nav mr-auto flex-row">
<?php
			// Boucle pour ajouter tous les liens de la navbar
			// $i est le compte tour et le numéro de case du tableau XML
			// on affiche l'id de la case dans le lien <a>
			// on affiche le texte XML de <menu> dans le texte du lien HTML <a> 
   			for ($i = 0; $i <= 3; $i++) {
?>
				<li class="mr-3 p-2 nav-item">
        			<a class="nav-link" href="index.php?id=<?= $xml -> page[$i]['id'] ?>"><?= $xml -> page[$i] -> menu ?></a>
      			</li>
<?php 					
   			}
?>
    		</ul>
		</nav>
		<div class="w-100 p-3">
			<?= $xml -> page[$case] -> content ?>
		</div>
		<!-- Script -->
		<script src="assets/js/script.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>
<?php
	}
	else{
		header('location: index.php?id=1');
		exit();
	}
?>