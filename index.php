<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Festiv'All</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/style-nav.css">
	<link rel="stylesheet" type="text/css" href="css/style-footer.css">
	<link rel="stylesheet" type="text/css" href="css/style-search-form.css">
</head>
<body>
    <header>
		<?php include_once("navbar.php"); ?>
		<center>
			<img src="img-layout/logoblanc.png" class="logo">
			<?php include("searchForm.php"); ?>
		</center>
    </header>
<main>
    <h1>Prochainement</h1>
    <section>
        <article class="soon">
            <img src="img-content/dantesk.png" alt="Dantesk" class="imgarticleright">
            <div class="txtarticleleft">
                <h2>Chassieu (69), Rhône-Alpes</h2>
                <h3>techno / trance</h3>
                <br>
                <p>Birdy Nam Nam • Captain Hook • Clft Militia<br>
                Comah • Dj Loud • Dj Samite Aka Noisebuilder<br>
                Electrobugz Aka Beuns • Gaudium • Marc Houle<br>
                Minimum Syndicat • Nout • Paul Ritch • Petit Biscuit
                <br><br>
                30 €
                <br><br>
                <a href="" class="linkarticle">En savoir plus ></a></p>
            </div>
        </article>
        <br>
        <article class="soon">
            <img src="img-content/weatherwinter1.png" alt="Weather Winter" class="imgarticleleft">
            <div class="txtarticleright">
                <h2>Paris (75), Ile-de-France</h2>
                <h3>techno / house</h3>
                <br>
                <p>Antigone • Birth Of Frequency • Donato Dozzy<br>
                Josh Wink • Kosme • Laurent Garnier<br>
                Marcel Dettmann • Marcelus • Peter Van Hoesen<br>
                Russ Gabriel • Voiski • Zadig
                <br><br>
                35 €
                <br><br>
                <a href="" class="linkarticle">En savoir plus ></a></p>
            </div>
        </article>
        <br>
        <article class="soon">
            <img src="img-content/garosnow.png" alt="Garosnow" class="imgarticleright">
            <div class="txtarticleleft">
                <h2>Les Angles (65), Midi-Pyrénées</h2>
                <h3>tous les styles</h3>
                <br>
                <p>Chinese Man • Douchka • Panda Dub <br>
                Salut C'est Cool • Comah • Naive New Beaters<br>
                Oxia • Synapson
                <br><br>
                30 €
                <br><br>
                <a href="" class="linkarticle">En savoir plus ></a></p>
            </div>
        </article>
    </section>
    <br><br><br>
    <hr class="bottom">
    <br><br>
    <section class="secinfo">
        <article class="col">
            <h4>Le + attendu</h4>
            <div class="info">
                <img src="img-content/weatherwinter2.png" alt="Weather Winter" class="imginfo">
                <h5><a href="">Weather Winter</a></h5>
            </div>
        </article>

        <article class="col">
            <h4>Le + insolite</h4>
            <div class="info">
                <img src="img-content/chateauperche.png" alt="Chateau Perché" class="imginfo">
                <h5><a href="">Chateau Perché</a></h5>
            </div>
        </article>

        <article class="col">
            <h4>Le coup de <font color="#a24646">♥</font></h4>
            <div class="info">
                <img src="img-content/peacock.png" alt="Peacock" class="imginfo">
                <h5><a href="">Peacock</a></h5>
            </div>
        </article>
    </section>
</main>
<?php include("footer.php"); ?>
</body>
</html>
