<!DOCTYPE html>
<html>

<head>

	<?php include('includes/head.php'); ?>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
    <!--CSS-->
    <link rel="stylesheet" href="css/index.css">

</head>

<body>

    <section>
        <p>Clement.fr - Site personnel [Version 1.0]</p>
        <p>(c) clement.fr Tous droits réservés.</p>
        <br><br>
        <p>www.clement.fr > <span id="typed1"></span></p>
        <p>www.clement.fr/instances/portfolio > <span id="typed2"></span></p>
        <p>www.clement.fr/instances/selector > <span id="typed3"></span></p>
        <p>www.clement.fr/instances/inventory > <span id="typed4"></span></p>
        <p>www.clement.fr > <span id="typed5"></span></p>
        <p>www.clement.fr > <span id="typed6"></span></p>
    
    </section>

</body>

<script>

      	let typed1  =  new  Typed ( '#typed1' ,  { 
            strings : [ 'Establishing connection',] , 
            typeSpeed : 20 ,
            showCursor: false,
        });
    
        let typed2  =  new  Typed ( '#typed2' ,  { 
            strings : [ '^1000 Load Portfolio instance 100%',] , 
            typeSpeed : 20 ,
            showCursor: false,
        });

        let typed3  =  new  Typed ( '#typed3' ,  { 
            strings : [ '^2000 Load selector instance 100%',] , 
            typeSpeed : 20 ,
            showCursor: false,
        });

        let typed4  =  new  Typed ( '#typed4' ,  { 
            strings : [ '^3000 Load inventory instance 100%',] , 
            typeSpeed :20 ,
            showCursor: false,
        });

        let typed5  =  new  Typed ( '#typed5' ,  { 
            strings : [ '^4000 Connection established',] , 
            typeSpeed :20 ,
            showCursor: false,
        });

        setTimeout(function(){
            let typed6  =  new  Typed ( '#typed6' ,  { 
                strings : [ 'Redirection ',] , 
                typeSpeed : 20 ,
                showCursor: true,
                cursorChar: ' _',
                });
        }, 5000);

        setTimeout(function(){
           document.location.href="accueil"; 
        },6000);
      
</script>

</html>

