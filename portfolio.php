<!DOCTYPE html>
<html>
<head>

	<?php include('includes/head.php'); ?>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	
    <!--CSS-->
    <link rel="stylesheet" href="css/portfolio.css">

</head>
<body>

    <p class="portfolio--title tagline">- MES PRO<span class="title-feature">JETS</span> - </p>
   
    <section>
     
        <article>
            <div class="punchline1">
                <p class="p--article">LE SELECTOR</p>
                <p class="p--info-article">"Pimentez vos parties grâce au selecteur"</p>
            
                <div class="hr--article"></div>

                <div class="img--article" style="background-image:url(img/selector.jpg)"></div>

                <div class="article--btn-center">
                    <a href="selector" target="_BLANK"><button class="btn btn-1 btn-1b">Visiter ce projet</button></a>
                </div>
            </div>
        </article>

        <article>
            <div class="punchline2">
                <p class="p--article">INVENTORY</p>
                <p class="p--info-article">"Faites un inventaire en toute simplicité !"</p>
            
                <div class="hr--article"></div>

                <div class="img--article" style="background-image:url(img/inventory.jpg)"></div>

                <div class="article--btn-center">
                    <a href="inventory" target="_BLANK"><button class="btn btn-1 btn-1b">Visiter ce projet</button></a>
                </div>
            </div>
        </article>

        <article>
            <div class="punchline3">
                <p class="p--article">A LA PATATE</p>
                <p class="p--info-article">"La meilleure petite restauration de Metz !"</p>
            
                <div class="hr--article"></div>

                <div class="img--article" style="background-image:url(img/alapatate.jpg)"></div>

                <div class="article--btn-center">
                    <a href="https://alapatate.fr/" target="_BLANK"><button class="btn btn-1 btn-1b">Visiter ce projet</button></a>
                </div>
            </div>
        </article>

    </section>
    <div class="punchline4 article--btn-center">
        <a href="accueil"><button class="btn btn-1 btn-1b">- Retourner à l'accueil -</button></a>
    </div>

</body>

<script>

    ScrollReveal().reveal('.tagline' , { delay:500 });
    ScrollReveal().reveal('.punchline1', { delay: 1000 });
    ScrollReveal().reveal('.punchline2', { delay: 1500 });
    ScrollReveal().reveal('.punchline3', { delay: 2000 });
    ScrollReveal().reveal('.punchline4',);

</script>
   
</html>
