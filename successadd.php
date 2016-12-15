<!--
	Page de confirmation de création de festival donnant un lien
	vers le festival créé
-->

<?php session_start(); ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Festiv'All</title>
	<link rel="stylesheet" type="text/css" href="css/style-success.css">
	<link rel="stylesheet" href="css/style-nav.css">
	<link rel="stylesheet" href="css/style-footer.css">
</head>
<body>

<?php include("navbar.php"); ?>

<main>
    <h1>Confirmation</h1>
    <section>   
        <p>Votre festival a bien été ajouté !<br>
        Voici l'identifiant requis en cas d'édition ou de suppression.
        <br><br>
        <strong><?php echo($_SESSION["pass"]); ?></strong><br><br>
		<a href="info.php?id=<?php echo($_SESSION["festId"]); ?>">Accéder à votre annonce</a></p>
    </section>
</main>
<?php include("footer.php"); ?>
</body>
</html>