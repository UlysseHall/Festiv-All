<!--
	Page d'informations d'un festival sélectionné par son id
-->

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Festiv'All</title>
    <link rel="stylesheet" type="text/css" href="css/style-info.css">
	<link rel="stylesheet" type="text/css" href="css/style-nav.css">
	<link rel="stylesheet" type="text/css" href="css/style-footer.css">
</head>
<body>

<?php
include_once("navbar.php");
include_once("connect.php");

$festId = mysql_real_escape_string($_GET["id"]);

$festReq = $bdd->prepare("
	SELECT f.nom festNom, f.lieu festLieu, f.date_start festDateStart, f.date_stop festDateStop, f.prix festPrix, f.description festDesc, f.lien festLien, f.img festImg
	FROM festival f
	WHERE f.id = :festId
	");
$festReq->execute(array(":festId" => $festId));
$festival = $festReq->fetch();

$artReq = $bdd->prepare("SELECT nom FROM artiste WHERE festival_id = :festId");
$artReq->execute(array(":festId" => $festId));

$styReq = $bdd->prepare("
	SELECT s.nom styNom
	FROM festyle fs
	INNER JOIN style s
	ON fs.style_id = s.id
	WHERE fs.festival_id = :festId");
$styReq->execute(array(":festId" => $festId));

$dateStart = new DateTime($festival["festDateStart"]);
$dateStart = $dateStart->format("j")." ".$dateStart->format("F")." ".$dateStart->format("Y")." ".$dateStart->format("G").":".$dateStart->format("i");
$dateStop = new DateTime($festival["festDateStop"]);
$dateStop = $dateStop->format("j")." ".$dateStop->format("F")." ".$dateStop->format("Y")." ".$dateStop->format("G").":".$dateStop->format("i");
?>

<main>
    <h2>Informations</h2>
	
    <article class="soon">
            <div class="imgarticle" style="background-image:url('img-content/festivals/<?php echo($festival["festImg"]); ?>');">
            <h1><?php echo($festival["festNom"]); ?></h1>
            </div>
            <hr class="bottom">
            <div class="txtarticle">
                <p class="colleft"><img src="img-content/location.png" alt="Location"  class="imglocation"><?php echo(ucfirst($festival["festLieu"])); ?></p>
                <p class="colright">Du <?php echo($dateStart); ?><br>Au <?php echo($dateStop); ?></p>
            </div>
                <hr class="bottom">
            <div class="textarticle">
               <p><?php echo($festival["festDesc"]); ?></p>
                <table>
                    <tr>
                        <td class="tdartist">
							<h3>Artistes</h3><br>
                            <ul>
                                <?php
									foreach($artReq as $artiste)
									{
										echo("<li>".$artiste["nom"]."</li>");
									}
								?>
                            </ul>
                        </td>

                        <td class="tdright">
                            <h3>
								<?php
								foreach($styReq as $style)
								{
									echo("#".$style["styNom"]." ");
								}
								?>
							</h3>
                            <h4><?php echo($festival["festPrix"]); ?> €</h4>
                        </td>
                    </tr>
                </table>
            </div>
            <hr class="bottom">
            <article class="soon">
                <div class="linkdiv">
                    <a href="<?php echo($festival["festLien"]); ?>" class="linkarticle">Accéder au site de l'événement</a>
                </div>
            </article>
    </article>

</main>
<?php include("footer.php"); ?>
</body>
</html>