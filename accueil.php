<!DOCTYPE html>
<html>
<head>

	<?php include('includes/head.php'); ?>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	
    <!--CSS-->
    <link rel="stylesheet" href="css/accueil.css">

</head>
<body>

<div class="main--contain">

    <section class="title-contain">
        <p class="main--title" id="title-show"></p>
        <p class="main--title" id="title--contain"></p>
    </section>

    <nav class="button--contain button--menu tagline" id="feature-nav">
        
            <a href="informations">INFORMATIONS</a>
            <a href="portfolio">PORTFOLIO</a>
            <a href="competences">COMPÉTENCES</a>
       
    </nav>

</div>
   
</body>
    <script>

        let typed1  =  new  Typed ( '#title-show' ,  { 
            strings : [ '<span class="title-feature">CLÉM</span>ENT - ',] , 
            typeSpeed : 100 ,
            showCursor: false,
        });

        let typed2  =  new  Typed ( '#title--contain' ,  { 
            strings : [ '^1500 &nbsp;Bonjour^500','&nbsp;Bonsoir^500','&nbsp;SLT^500','&nbsp;Welcome',] , 
            typeSpeed : 75,
            backSpeed : 75,
            showCursor: false,
        });

        ScrollReveal().reveal('.tagline' , { delay:1000 });

    </script>
</html>
