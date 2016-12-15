<!--
	Fichier de connexion à la base de donnée
-->

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=festivall;charset=utf8', 'root', 'kamini');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>