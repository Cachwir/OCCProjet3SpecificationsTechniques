<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Festival des Films en Plein Air</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="theme/01.Default/html/css/bootstrap.css">
    <!--Main styles-->
    <link rel="stylesheet" type="text/css" href="theme/01.Default/html/css/main.css">
    <!--Adaptive styles-->
    <link rel="stylesheet" type="text/css" href="theme/01.Default/html/css/adaptive.css">
    <!--Swipe menu-->
    <link rel="stylesheet" type="text/css" href="theme/01.Default/html/css/pushy.css">
    <!--fonts-->
    <link rel="stylesheet" type="text/css" href="theme/01.Default/html/css/font-awesome.css">
    <!--animation css-->
    <link rel="stylesheet" type="text/css" href="theme/01.Default/html/css/animate.css">
    <!-- Custom CSS of heaven -->
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="promo">

<!-- Site Overlay -->
<div class="site-overlay"></div>
<div id="container">
    <div class="top_promo_block" id="promo_head">
        <div class="container top_promo_header">
            <div class="row">
                <div class="col-md-12">
                    <a href="#container">
                        <div class="header_promo">
                            <img src="img/logo.png" alt="logo">
                            Festival des Films de Plein Air
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="start_descrition">
            <h1>Bienvenue !<span></span></h1>
            <span>
                Vous êtes invité(e) à redécouvrir seul, en famille ou entre amis, les meilleurs films d'auteurs de ces dernières années.<br>
                Rendez-vous du 5 au 8 Août, chaque soir et de 18h à minuit au parc Monceau.<br>
                Pas besoin de s'inscrire, mais faites-nous savoir si vous êtes intéressé(e) en vous préinscrivant ci-dessous !
            </span>
            <div class="search_promo">
                <div class="input-group-btn btn_promo_search">
                    <a data-scroll href="#block_films">
                        <button type="button" class="btn btn-success">Le programme</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="scroll_block">
            <img src="theme/01.Default/html/img/scroll.png" class="animated infinite bounce" alt="#">
        </div>
    </div>

    <?php
    $festival_films = [
        "05/08" => [
            [
                "id" => 1,
                "poster" => "film1.jpg",
                "time" => "18h-19h30",
                "title" => "Tempête",
                "author" => "Samuel Collardey",
                "description" => "
                            Dominique Leborne, 36 ans, marin sur le Petit Gaël II, un petit bateau de pêche basé au port des Sables-d'Olonne fait de dures campagnes de pêche de trois semaines.<br><br>
                            
                            Depuis son divorce, ses enfants ont choisi d'habiter avec lui malgré son absence, mais il ne les voit qu'à peine quelques jours le week-end. Ceux-ci sont plus ou moins livrés à eux-mêmes dans la maison familiale modeste et en mauvais état.<br><br>
                            
                            Quand il apprend que Maélys, la fille de son ex-femme qu'il a reconnue comme étant sa fille, est tombée enceinte, Dominique va devoir choisir entre son métier et son rôle de père.
                        ",
            ],
            [
                "id" => 2,
                "poster" => "film2.jpg",
                "time" => "20h-21h50",
                "title" => "Timbuktu",
                "author" => "Abderrahmane Sissako",
                "description" => "
                            Au Mali, des islamistes envahissent la ville de Tombouctou et y imposent la charia. Ils bannissent la musique, le football, les cigarettes, procèdent à des mariages forcés, persécutent les femmes et improvisent des tribunaux qui rendent des sentences injustes et absurdes. <br>
                                            Malgré la férocité de leur répression, la population résiste avec courage, souvent au nom d'une autre conception de l'islam.<br><br>
                                            
                                            Kidane est un éleveur touareg vivant dans le désert avec sa femme et sa fille. D'abord épargnée, sa famille va bientôt subir les nouvelles lois islamiques, à l'occasion d'un conflit avec un autre habitant.
                        ",
            ],
            [
                "id" => 3,
                "poster" => "film3.jpg",
                "time" => "22h20-23h40",
                "title" => "Papa vient Dimanche",
                "author" => "Radu Jude",
                "description" => "
                            Un père divorcé souhaite passer quelques jours avec sa fille.<br>
                                            Mais lorsqu'il débarque chez son ancienne épouse, celle-ci est absente. Son nouveau compagnon et l'ex-belle-mère lui annoncent que sa fille a été malade la veille et qu'il faudra attendre le retour de sa maman pour prendre une décision.<br><br>
                                            
                                            Le dialogue, au départ difficile, devient rapidement impossible.<br>
                                            La mère revenue, le conflit dégénère en drame familial...
                        ",
            ],
        ],

        "06/08" => [
            [
                "id" => 4,
                "poster" => "film4.jpg",
                "time" => "18h-19h40",
                "title" => "Les Amours imaginaires",
                "author" => "Xavier Dolan",
                "description" => "
                            L'histoire se déroule dans le milieu artistico-estudiantin aisé de Montréal.<br>
                            Francis, 20 ans environ, et Marie, un peu plus âgée, sont deux amis très proches. Lors d'un petit dîner chez Francis, ils éprouvent un coup de cœur simultané pour le même garçon, Nicolas.<br>
                            Chacun des deux amis lui manifeste son intérêt et tente de le séduire. Nicolas, jouant la séduction ambiguë vis-à-vis des deux, ne manifeste pas de réelle préférence. Un étrange trio amoureux se forme.
                        ",
            ],
            [
                "id" => 5,
                "poster" => "film5.jpg",
                "time" => "20h-22h10",
                "title" => "Et maintenant, on va où ?",
                "author" => "Nadine Labaki",
                "description" => "
                            Un petit village du Liban est partagé depuis des années entre chrétiens et musulmans. L'harmonie est préservée grâce à la tolérance et la complicité des femmes.<br>
                            Alors que la guerre éclate à Beyrouth, les hommes voient monter en eux leur esprit belliqueux et absurde.<br>
                            Les femmes qui pleurent depuis trop longtemps de nombreux morts, utilisent tous les stratagèmes possibles pour conserver cette paix au sein du village.
                        ",
            ],
            [
                "id" => 6,
                "poster" => "film6.jpg",
                "time" => "22h30-23h50",
                "title" => "Mère et Fils",
                "author" => "Călin Peter Netzer",
                "description" => "
                            Un soir de printemps particulièrement froid, Barbu, au volant de sa voiture, erre dans les rues à 50 km/h au-dessus de la limite autorisée, et renverse un enfant. Le garçon meurt peu après l'accident. Barbu encourt entre trois et quinze ans de prison. Sa mère, Cornelia, une architecte membre de la haute société du pays, décide d'intervenir et commence une campagne pour sauver son fils léthargique.
                        ",
            ],
        ],

        "07/08" => [
            [
                "id" => 7,
                "poster" => "film7.jpg",
                "time" => "18h-19h20",
                "title" => "Ma vie de Courgette",
                "author" => "Claude Barras",
                "description" => "
                            Un petit garçon termine de dessiner un cerf-volant à l'étage d'une maison remplie de canettes de bière vides. Il empile ensuite des canettes pour en faire une pyramide, mais le tas finit par s'écrouler et par rouler dans l'escalier.<br><br>
                            
                            Au rez-de-chaussée, une vieille femme ivre regarde une série sentimentale à la télévision. C'est la mère du petit garçon, qu'elle appelle \"Courgette\". Au bruit, elle se met en colère et commence à monter l'escalier menant à l'étage, en annonçant au garçon qu'elle va le battre. Effrayé, le garçon referme brusquement la trappe sur la tête de sa mère qui tombe dans l'escalier et ne bouge plus.<br><br>
                            
                            Au commissariat, un policier, Raymond, prend la déposition du petit garçon. Il s'appelle Icare, mais préfère être appelé Courgette. Il n'a plus de père, mais il l'a dessiné sur son cerf-volant qui ne le quitte jamais. Raymond explique à Courgette que sa mère \"est partie\" et qu'il va l'emmener dans un endroit où vivent des enfants comme lui, qui n'ont plus ni père ni mère : un orphelinat.
                        ",
            ],
            [
                "id" => 8,
                "poster" => "film8.jpg",
                "time" => "19h50-21h30",
                "title" => "Puisque nous sommes nés",
                "author" => "Jean-Pierre Duret et Andrea Santana",
                "description" => "
                            Brésil. Nordeste. État du Pernambouc.<br><br>

Une immense station-service au milieu d’une terre brûlée, traversée par une route sans fin.<br><br>

Cocada et Nego ont 14 et 13 ans.<br><br>

Cocada a un rêve, devenir chauffeur routier. Il dort dans une cabine de camion et, la journée, il rend service et fait des petits boulots. Son père est mort assassiné, alors il s’est trouvé un père de substitution, Mineiro. Un routier qui prend le temps de lui parler et de le soutenir quand la tentation de l’argent mal acquis se fait plus forte.<br><br>

Nego, lui, vit dans une favela, entouré d’une nombreuse fratrie. Après le travail des champs, sa mère voudrait qu’il aille à l’école pour qu’il ait une éducation, mais Nego veut partir, gagner de l’argent. Le soir, il rode à la station, fasciné par les vitrines allumées, les commerces qui vendent de tout, la nourriture abondante.<br><br>

Avec son copain Cocada, ils regardent le mouvement incessant des camions et des voyageurs.<br><br>

Tout leur parle de ce grand pays dont ils ne savent rien.<br><br>

Avec cette singulière maturité qu’on acquiert trop tôt dans l’adversité, ils s’interrogent sur leur identité et leur avenir. Leur seule perspective : une route vers São Paulo, vers un ailleurs.
                        ",
            ],
            [
                "id" => 9,
                "poster" => "film9.jpg",
                "time" => "21h50-23h20",
                "title" => "Orpheline",
                "author" => "Arnaud des Pallières",
                "description" => "
                            Le film narre l'histoire d'une femme à quatre âges de sa vie, en se focalisant sur ses drames familiaux et leurs répercussions dans sa personnalité.
                        ",
            ],
        ],

        "08/08" => [
            [
                "id" => 10,
                "poster" => "film10.jpg",
                "time" => "18h-19h30",
                "title" => "Vic+Flo ont vu un ours",
                "author" => "Denis Côté",
                "description" => "
                            Victoria Champagne (Pierrette Robitaille), une sexagénaire bénéficiant d'une libération conditionnelle après avoir purgé une longue peine en prison, vient s'établir dans l'ancienne cabane à sucre familiale encore habitée par son vieil oncle muet.<br><br>
                            
                            Victoria tente d’apprivoiser sa nouvelle liberté en compagnie de son amante Florence (Romane Bohringer), une Française de vingt ans sa cadette, qu'elle a connue en prison.<br>
                            Tous les deux jours, Guillaume (Marc-André Grondin), un jeune agent de libération conditionnelle, vient faire son tour de contrôle.
                        ",
            ],
            [
                "id" => 11,
                "poster" => "film11.jpg",
                "time" => "19h50-21h30",
                "title" => "Le Voyage au Groenland",
                "author" => "Sébastien Betbeder",
                "description" => "
                            Thomas part à Kullorsuaq au Groenland avec son ami Thomas pour voir son père qui y vit depuis une vingtaine d'années.<br>
                            Les deux jeunes comédiens vont découvrir une communauté inuit relativement isolée du monde.
                        ",
            ],
            [
                "id" => 12,
                "poster" => "film12.jpg",
                "time" => "21h50-23h30",
                "title" => "Much Loved",
                "author" => "Nabil Ayouch",
                "description" => "
                            À l'époque actuelle, Noha, Randa, Soukaina et Hlima vivent d’amours tarifés à Marrakech.<br>
                            Objets de désirs inavoués dans la société marocaine, elles décrivent à l'aide du langage de la prostitution leur vie de tous les jours, allant des pseudos relations amoureuses avec des Européens à la prostitution institutionnalisée avec les Saoudiens, en passant par la corruption policière sans masquer les problèmes sociétaux comme les relations familiales où l'argent remplace l'amour filial.<br>
                            antôt joyeuses et complices mais aussi tristes et rejetées, elles pointent du doigt cette société qui les utilise et les avilit.
                        ",
            ],
        ],
    ]
    ?>

    <!--promo block-->
    <div class="promo_block container-fluid" id="block_films">
        <div class="slider-container">
            <div class="slider-nav-container">
                <?php $i = 0; ?>
                <?php foreach (array_keys($festival_films) as $day): ?>
                    <a href="#" class="slider-nav <?php echo $i === 0 ? 'active' : '' ?>"><?php echo $day ?></a>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <ul class="rslides">
                <?php foreach ($festival_films as $films): ?>
                <li>
                    <div class="slide-content">
                        <div class="films-container">
                            <?php foreach ($films as $film): ?>
                                <div class="film" data-film="<?php echo $film['id'] ?>">
                                    <img src="img/<?php echo $film['poster'] ?>" alt="<?php echo $film['title'] ?>" class="poster">
                                    <div class="projection-time">
                                        <span><?php echo $film['time'] ?></span>
                                    </div>
                                    <div class="film-content">
                                        <div class="film-meta">
                                            <div class="film-title">
                                                <?php echo $film['title'] ?>
                                            </div>
                                            <span class="separator"></span>
                                            <div class="film-author">
                                                Un film de <?php echo $film['author'] ?>
                                            </div>
                                            <div class="film-description">
                                                <?php echo $film['description'] ?>
                                            </div>
                                        </div>
                                        <div class="film-subscribe">
                                            <?php if (!in_array($film['id'], $session_participations)): ?>
                                                <a href="#" class="subscribe_btn">Se préinscrire</a>
                                            <?php else: ?>
                                                <a href="#" class="subscribe_btn clicked">Préinscription enregistrée</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
                <li>
                    <div class="slide-content">
                        <div class="films-container">

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--promo block-->
    <div class="promo_block container-fluid">
        <div class="fixed_w promka">
            <p>Qui sommes-nous ?</p>
            <br><br>
            <span class="small-span">
                Derrière le festival se trouve l'association "Les Films de Plein Air", créée le 24 Février 2017.<br>
                Notre objectif est de permettre aux gens de se rapprocher en se réappropriant l'espace public dans une ambiance de convivialité, autour de films d'auteurs de tous genres.
            </span>
        </div>
        <div class="anim_bg"></div>
    </div>

    <div class="places_index_block block_low_padding container-fluid text-right">
        <div class="fixed_w promka">
            <a href="https://www.facebook.com/FestivalDuFilmCourt" target="_blank">
                <i class="fa fa-facebook social-button" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/cinemathequeG" target="_blank">
                <i class="fa fa-twitter social-button" aria-hidden="true"></i>
            </a>
        </div>
    </div>

</div>

<!--
#################################
- SCRIPT FILES -
#################################
-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="theme/01.Default/html/js/jquery.min.js"></script>
<!--Bootstrap js-->
<script src="theme/01.Default/html/js/bootstrap.min.js"></script>
<!--ResponsiveSlides js-->
<script src="lib/ResponsiveSlides.js/responsiveslides.js"></script>
<!-- SmoothScroll js-->
<script src="lib/smooth-scroll/dist/js/smooth-scroll.js"></script>

<!--Slider revolution settings-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";
        $(".rslides").responsiveSlides({
            auto: false,             // Boolean: Animate automatically, true or false
            speed: 500,            // Integer: Speed of the transition, in milliseconds
            timeout: 20000,          // Integer: Time between slide transitions, in milliseconds
            pager: true,           // Boolean: Show pager, true or false
            nav: false,             // Boolean: Show navigation, true or false
            random: false,          // Boolean: Randomize the order of the slides, true or false
            pause: false,           // Boolean: Pause on hover, true or false
            pauseControls: true,    // Boolean: Pause when hovering controls, true or false
            prevText: "Previous",   // String: Text for the "previous" button
            nextText: "Next",       // String: Text for the "next" button
            maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
            navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
            manualControls: ".slider-nav-container",     // Selector: Declare custom pager navigation
            namespace: "rslides",   // String: Change the default namespace used
            before: function(index){
                $('.slider-nav').removeClass("active");
                $($('.slider-nav')[index]).addClass('active');
            },   // Function: Before callback
            after: function(){}     // Function: After callback
        });
        smoothScroll.init({
            // Speed & Easing
            speed: 700, // Integer. How fast to complete the scroll in milliseconds
            offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
            easing: 'easeInOutCubic' // Easing pattern to use
        });

        $('.subscribe_btn').click(function(e)
        {
            e.preventDefault();

            if (!$(this).hasClass('clicked'))
            {
                $(this).addClass('clicked');
                $(this).text("Préinscription enregistrée");

                var filmId = $(this).closest('.film').attr('data-film');

                $.ajax({
                    url: "/",
                    data: {id: filmId, action: "add_participation"},
                    method: "POST"
                });
            }
        });

        <?php $today = date("d/m"); ?>
        <?php if (array_key_exists($today, $festival_films)): ?>
            var activeIndex = <?php echo array_search(date("d/m"), array_keys($festival_films)); ?>;
            $($('.slider-nav')[activeIndex]).click();
        <?php endif; ?>
    }); //ready
</script>

<script type="text/javascript">
    "use strict";
    function setHeiHeight() {
        $('#promo_head').css({
            height: ($(window).height()) + 'px'
        });
    }
    setHeiHeight();
    $(window).resize( setHeiHeight );
</script>

</body>
</html>