<!DOCTYPE html>
<html>

<head>

	<?php include('includes/head.php'); ?>
    
    <!--CSS-->
    <link rel="stylesheet" href="css/competences.css">


</head>

<body>

    <p class="tagline competence--title">- MES COMPÉT<span class="title-feature">ENCES</span> - </p>

    <section>

        <article class="punchline1">
            <p class="p--load-competences"><strong>HTML : </strong> Je pratique le l'HTML depuis que j'ai commencé mon apprentissage, 
            c'est la langage basique pour construire un site internet. </p>

            <p class="p--load-competences"><strong>CSS :</strong> J'utilise le CSS sans framework pour le moment,
            il est complet et même si je ne le maitrise pas dans son entièreté, je sais faire beaucoup de choses. </p>

            <p class="p--load-competences"><strong>PHP :</strong> J'utilise ce langage principalement pour les 
            formulaire et la gestion des bases de données. </p>

            <p class="p--load-competences"><strong>SQL :</strong> Je maitrise ce langage pour la communication
            avec les bases de données. Ma connaissance du langage se limite aux requêtes de base 
            (SELECT, INSERT, UPDATE, DELETE,...).</p>

            <p class="p--load-competences"><strong>JAVASCRIPT : </strong> j'ai commencé à apprendre le JavaScript il y'a peu, 
            Je ne connais pas entièrement ce langage, mais je maitrise les bases. </p>

            <p class="p--load-competences"><strong>FIGMA :</strong> Utilisation de figma pour les créations des
            interfaces utilisateurs, ainsi que la disposition des éléments sur les sites.</p>
        </article>

        <article class="punchline2">

            <div class="skill-load--contain">
                <p class="p--load">- HTML</p>
                <div class="load-bar">
                    <div class="code-load--bar1">75%&nbsp;</div>
                </div>
            </div>

            <div class="skill-load--contain">
                <p class="p--load">- CSS</p>
                <div class="load-bar">
                    <div class="code-load--bar2">55%&nbsp;</div>
                </div>
            </div>

            <div class="skill-load--contain">
                <p class="p--load">- PHP</p>
                <div class="load-bar">
                    <div class="code-load--bar3">40%&nbsp;</div>
                </div>
            </div>

            <div class="skill-load--contain">
                <p class="p--load">- SQL</p>
                <div class="load-bar">
                    <div class="code-load--bar4">35%&nbsp;</div>
                </div>
            </div>

            <div class="skill-load--contain">
                <p class="p--load">- JAVASCRIPT</p>
                <div class="load-bar">
                    <div class="code-load--bar5">10%&nbsp;</div>
                </div>
            </div>

        </article>

    </section>

    <div class="punchline4  article--btn-center">
        <a href="accueil"><button class="btn btn-1 btn-1b">- Retourner à l'accueil -</button></a>
    </div>

</body>

<script>
    ScrollReveal().reveal('.tagline' , { delay:500 });
    ScrollReveal().reveal('.punchline1', { delay: 1000 });
    ScrollReveal().reveal('.punchline2', { delay: 1500 });
    ScrollReveal().reveal('.punchline4',);
</script>


</html>

