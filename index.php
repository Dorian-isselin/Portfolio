<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible", content="ie=edge">
        <link rel="icon" href="/img/Dorian_icon.png">
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <title>Dorian Isselin</title>
        <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",  
            "name" : "Dorian Isselin",
            "url" : "http://www.dorian-isselin.fr", 
            "logo": "http://www.dorian-isselin.fr/img/Dorian_icon.png" 
            "@context": "https://schema.org",

        }
        
        {
            "@context" : "http://schema.org",
            "@type": "Person",
            "email": "mailto:isselin.dorian@gmail.com",
            "image": "http://www.dorian-isselin.fr/img/Dorian_icon.png",
            "jobTitle": "engineer",
            "name": "Dorian Isselin",
            "telephone": "+33 7 82 61 34 49",
            "url": "http://www.dorian-isselin.fr"

        }
        </script>

        <link rel="stylesheet" href="/css/index.css">
    </head>
    

    <body>
        <?php
        include(__DIR__."/private/model/navbar.php");
        ?>

        <main class="notool">

            <section id="TopTitle">
                <img src="/img/Background_8.png" alt="bg8" id="bg8">
                <img src="/img/Background_7.png" alt="bg7" id="bg7">
                <img src="/img/Background_6.png" alt="bg6" id="bg6">
                <img src="/img/Background_5.png" alt="bg5" id="bg5">
                <div id="title">
                    <h1 style="text-transform:capitalize; font-family: Linear">Dorian Isselin</h1>
                    <p><?php echo TXT_TITRE; ?></p>
                </div>
                <img src="/img/Background_4.png" alt="bg4" id="bg4">
                <img src="/img/Background_3.png" alt="bg3" id="bg3">
                <img src="/img/Background_2.png" alt="bg2" id="bg2">
                <img src="/img/Background_1.png" alt="bg1" id="bg1">
                <!-- <img src="/img/Background_0.png" alt="bg0" id="bg0"> -->
            </section>



<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||| SECTION 1 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <section id="sec1">
                <div class="lineCut"><img src="/img/under.png" alt="underline"></div>
                <p>
                    <?php echo TXT_ACCEUIL; ?>
                </p>                
                <div class="lineCut"><img src="/img/under.png" alt="underline"></div>
            </section>

            

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||| SECTION 2 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <section id="sec2">
                <div id="r_bg">
                    <img src="/img/Background_reverse_2.png" alt="Background_r">
                    <img src="/img/Background_reverse_1.png" alt="Background_r">
                </div>
                <h1 id="goto2">
                    <img src="/img/line_start.png" alt="l_s">
                    <?php echo TXT_TITRE_EXP; ?>
                    <img src="/img/line_end.png" alt="l_e">
                </h1>
                <h2>
                    <div class="lineCut LCleft"><img src="/img/line_side.png" alt="l_s"></div>
                    <span> <?php echo TXT_TITRE_EXP_1; ?> </span> 
                    <div class="lineCut LCright"><img src="/img/line_side.png" alt="l_e"></div>
                </h2> 
                <div class="lineExp" id="exp1">
                <?php echo TXT_EXP_1; ?>
                </div>
            </section>


                
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||| SECTION 3 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <section id="sec3">
                <div id="r_bg">
                    <img src="/img/Background_reverse_3.png" alt="Background_r">
                    <img src="/img/Background_reverse_4.png" alt="Background_r">
                </div>
                <h1 id="goto3">
                    <img src="/img/line_start.png" alt="l_s">
                    <?php echo TXT_TITRE_ETUDES; ?>
                    <img src="/img/line_end.png" alt="l_e">
                </h1>
                <h2>
                    <div class="lineCut LCleft"><img src="/img/line_side.png" alt="l_s"></div>
                    <span> <?php echo TXT_TITRE_ETUDES_1; ?> </span> 
                    <div class="lineCut LCright"><img src="/img/line_side.png" alt="l_e"></div>
                </h2> 
                <div class="custom_line">
                    <div class="boxCut">
                        <img src="/img/stud11.png">
                    </div>
                    <p>
                        <?php echo TXT_TITRE_1_1_1; ?>
                    </p>
                </div>
                <div class="custom_line">
                    <p>
                        <?php echo TXT_TITRE_1_2_1; ?>
                    </p>
                    <div class="boxCut">
                        <img src="/img/stud12.png">
                    </div>
                </div>
                <div class="custom_line">
                    <div class="boxCut">
                        <img src="/img/stud13.png">
                    </div>
                    <p>
                        <?php echo TXT_TITRE_1_3_1; ?>
                    </p>
                </div>
                <h2>
                    <div class="lineCut LCleft"><img src="/img/line_side.png" alt="l_s"></div>
                    <span> <?php echo TXT_TITRE_ETUDES_2; ?> </span> 
                    <div class="lineCut LCright"><img src="/img/line_side.png" alt="l_e"></div>
                </h2> 
                <div class="custom_line">
                    <p>
                        <?php echo TXT_TITRE_2_1_1; ?>
                    </p>
                    <div class="boxCut">
                        <img src="/img/stud21.png">
                    </div>
                </div>
                <div class="custom_line">
                    <div class="boxCut">
                        <img src="/img/stud22.png">
                    </div>
                    <p>
                        <?php echo TXT_TITRE_2_2_1; ?>
                    </p>
                </div>
                <div class="custom_line">
                    <p>
                        <?php echo TXT_TITRE_2_3_1; ?>
                    </p>
                    <div class="boxCut">
                        <img src="/img/stud23.png">
                    </div>
                </div>
                <div class="custom_line">
                    <div class="boxCut">
                        <img src="/img/stud24.png">
                    </div>
                    <p>
                        <?php echo TXT_TITRE_2_4_1; ?>
                    </p>
                </div>
            </section>


            
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||| SECTION 4 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
            <section id="sec4">
                <div id="r_bg">
                    <img src="/img/Background_reverse_6.png" alt="Background_r">
                    <img src="/img/Background_reverse_5.png" alt="Background_r">
                </div>
                <h1 id="goto4">
                    <img src="/img/line_start.png" alt="l_s">
                    <?php echo TXT_TITRE_CONTACT; ?>
                    <img src="/img/line_end.png" alt="l_e">
                </h1> 
                <a target="_blank" rel="noopener noreferrer" href="mailto:isselin.dorian@gmail.com" class="custom_line">
                    <img class="boxCut" src="/img/e-mail.png" alt="e-mail">
                    <p>
                        isselin.dorian@gmail.com
                    </p>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="tel:+33782613449" class="custom_line">
                    <p>
                        +33 7 82 61 34 49
                    </p>
                    <img class="boxCut" src="/img/telephone-portable.png" alt="telephone-portable">
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/dorian-isselin/" class="custom_line">
                    <img class="boxCut" src="/img/linkedin.png" alt="linkedin">
                    <p>
                        www.linkedin.com/in/Dorian-isselin
                    </p>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/dorian-isselin" class="custom_line">
                    <p>
                        www.github.com/Dorian-isselin
                    </p>
                    <img class="boxCut" src="/img/github.png" alt="github">
                </a>
            </section>

        </main>

    </body>

    <script src="/js/parallax.js"></script>
</html>