<?php include('controle_formulaire.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sezgin - Développeur Web</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.avif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css">
    <link rel="stylesheet" href="assets/css/swap.css">
    <link rel="stylesheet" href="assets/css/boostrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media_query.css">
</head>

<body>
    <!-- === Background Animation === -->
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <!-- === Background Animation End === -->
    <!-- === Cursor === -->
    <div class="cursor"></div>
    <!-- === Cursor End === -->
    <!-- === Dark Light Mode === -->
    <div class="dark_toggle">
        <div class="ul-header">
            <a class="mode" onclick="myFunction()" title="Toggle Mode">
                <div class="icon-container">
                    <i id="sunIcon" class="fa-solid fa-sun fa-spin icon"></i>
                    <i id="moonIcon" class="fa-solid fa-moon icon hidden"></i>
                </div>
            </a>
        </div>
    </div>
    <!-- === Dark Light Mode End === -->
    <header>
        <!-- === Fix Icon Menu === -->
        <div class="sidebar close">
            <ul class="nav-links icetab-container" id="icetab-container">
                <li class="icetab current-tab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon" src="assets/images/home_icon.svg" alt="Icône d'accueil">
                    </a>
                    <ul class="sub-menu blank">
                        <li class=""><a class="link_name" href="javascript:void(0)">Accueil</a></li>
                    </ul>
                </li>
                <li class="icetab menu-btn">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon" src="assets/images/about_icon.avif" alt="Icône à propos">
                    </a>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="javascript:void(0)">A propos de moi</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon" src="assets/images/resume_icon.svg" alt="Icône pour décrire les expériences et formation de Sezgin Eski">
                    </a>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="javascript:void(0)">Formation & Expérience</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon" src="assets/images/services_icon.svg" alt="Icône pour les services">
                    </a>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="javascript:void(0)">Services</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon" src="assets/images/skills_icon.svg" alt="Icône pour les compétences">
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="javascript:void(0)">Skills</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon" src="assets/images/portfolio_icon.svg" alt="Icône pour les projets réalisés">
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="javascript:void(0)">Portfolio</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="" href="javascript:void(0)">
                        <img class="nav_menu_icon" src="assets/images/contact_icon.avif" alt="Icône pour me contacter">
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="javascript:void(0)">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- === Fix Icon Menu End === -->
        <!-- === Side Menu === -->
        <div class="toggle" onclick="openNav()">
            <img class="line-menu" src="assets/images/line-menu.png" alt="line-menu">
        </div>
        <div id="mySidenav" class="sidenav">
            <div class="closebtn" onclick="closeNav()">&times;</div>

            <ul class="sidescreen_sub icetab-container" id="icetab-container2">
                <li class="icetab current-tab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img" src="assets/images/home_icon.svg" alt="home_icon">Accueil
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img" src="assets/images/about_icon.avif" alt="about_icon">A propos de moi
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img" src="assets/images/resume_icon.svg" alt="resume_icon">Formation & XP
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img" src="assets/images/services_icon.svg" alt="services_icon.svg">Services
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img" src="assets/images/skills_icon.svg" alt="skills_icon">Skills
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img" src="assets/images/portfolio_icon.svg" alt="portfolio_icon">Portfolio
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img" src="assets/images/contact_icon.avif" alt="contact_icon">Contact
                    </a>
                </li>
            </ul>
        </div>
        <!-- === Side Menu End === -->
    </header>
    <div class="all_page" id="page">
        <section class="card_section" id="card_main">
            <div class="eski-sezgin_bio" id="sezgin_details">
                <div class="imgBox">
                    <img class="eski-sezgin_photo" src="assets/images/eski-sezgin_photo.jpg" alt="Photo de Eski Sezgin, Développeur Web">
                </div>
                <div class="bio_contain">
                    <h1 class="eski_sezgin">Sezgin ESKI</h1>
                    <h2 class="designer font_w_font_s1 overflow-hidden"></h2>
                </div>
            </div>
            <div class="right_card_main icetab-content" id="icetab-content">
                <!-- === Home Section === -->
                <section class="sezgin-intro tabcontent tab-active" id="home">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">intro</h2>
                    </div>
                    <h2 class="eski font_w_font_s fade_up">Bonjour, moi c'est Sezgin</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">Je suis un travailleur indépendant passionné avec pour mission de créer des expériences numériques agréables et intuitives.<br>
                        Fort de solides bases en principes de design et d'un sens aigu du détail, je me spécialise dans la traduction d'idées complexes en interfaces conviviales qui captivent et engagent les utilisateurs.
                        <br><br>
                        Je suis en parallèle compositeur intermittent du spectacle, je compose des instrumentales de différents styles (Rap, Latino, Pop et Variété actuelle).<br>
                        Pour vos projets musicaux, je peux vous aider à réaliser votre prochain tube !
                    </h3>
                    <div class="button_circle_group">
                        <div>
                            <button class="download_cv font_w_font_s" onClick="window.open('assets/pdf/cv-dev-eski.sezgin.pdf');">
                                <i class="ri-download-cloud-2-line"></i>Télécharger mon CV
                            </button>
                        </div>
                        <div class="circular_text_main ">
                            <a href="javascript:void(0)" class="down_arrow_main position-relative">
                                <img class="circular_text" src="assets/images/circular_text.avif" alt="Texte circulaire menant à mes projets réalisés">
                                <img class="down_arrow" src="assets/images/down_arrow.svg" alt="Flèche pointant vers le bas">
                            </a>
                        </div>
                    </div>
                </section>
                <!-- === About Section === -->
                <section class="sezgin-intro tabcontent" id="about">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">A propos de moi</h2>
                    </div>
                    <h2 class="eski font_w_font_s fade_up">Concevoir des histoires à travers le design et l'innovation.</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">Depuis le début de mon parcours en tant que développeur web, j'ai travaillé à distance pour des agences, consulté pour des startups et collaboré avec des personnes talentueuses pour créer des produits numériques à la fois pour un usage professionnel et grand public.<br><br>
                        Je suis confiant dans mon travail tout en restant discret, naturellement curieux et constamment en train d'améliorer mes compétences.
                    </h3>
                    <div class="about_counter fade_up">
                        <div class="counter">
                            <h3 class="counter2 count font_w_font_s" data-count="5">3+</h3>
                            <h3 class="experince font_w_font_s1 ">ANNEES D'EXPERIENCE</h3>
                        </div>
                        <div class="counter">
                            <h3 class="counter2 count font_w_font_s" data-count="160">20+</h3>
                            <h3 class="experince">MISSIONS REALISEES</h3>
                        </div>
                    </div>
                </section>
                <!-- === Resume Section === -->
                <section class="sezgin-intro tabcontent" id="resume">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">Formation & Expérience</h2>
                    </div>
                    <h2 class="eski font_w_font_s fade_up">Formation</h2>
                    <div class="education position-relative education_space">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <h3 class="bachelor font_w_font_s1">Diplôme Développeur Web</h3>
                            <h4 class="university font_w_font_s1">IFOCOP Paris / 2023 - 2024</h4>
                            <h5 class="cursus font_w_font_s1">Formation intensive en développement web full stack
                            </h5>
                        </div>
                    </div>
                    <div class="education position-relative education_space">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <h3 class="bachelor font_w_font_s1">Licence Administration & Echanges internationaux</h3>
                            <h4 class="university font_w_font_s1">Université de Créteil / 2011 - 2014</h4>
                            <h5 class="cursus font_w_font_s1">Cursus sur le commerce international, la gestion des affaires et l'économie
                            </h5>
                        </div>
                    </div>
                    <div class="education position-relative">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <h3 class="bachelor font_w_font_s1">Baccalauréat Economiques et Sociales</h3>
                            <h4 class="university font_w_font_s1">Lycée G.Sand (77) / 2006 - 2009</h4>
                            <h5 class="cursus font_w_font_s1">Baccaulauréat option Sciences économiques et sociales</h5>
                        </div>
                    </div>
                    <h2 class="eski experience_main_text font_w_font_s fade_up">Experience</h2>
                    <div class="education position-relative education_space">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <div class="envato_group_main">
                                <div>
                                    <h3 class="bachelor font_w_font_s1">Développeur Web</h3>
                                    <h4 class="company font_w_font_s1">DYNSEO</h4>
                                </div>
                            </div>
                            <h5 class="cursus font_w_font_s1">Html / CSS / JAVASCRIPT / PHP / WORDPRESS / GIT / GITHUB
                            </h5>
                        </div>
                    </div>
                    <div class="education position-relative education_space">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <div class="envato_group_main">
                                <div>
                                    <h3 class="bachelor font_w_font_s1">Casque Anglais</h3>
                                    <h4 class="company font_w_font_s1">Aéroport d'Orly / 2018 - 2023</h4>
                                </div>
                            </div>
                            <h5 class="cursus font_w_font_s1">Responsable de zone avion / Liaison sol cockpit en Anglais / Assistance avitaillement / Sécurité / Guidage & Repousage avion moyen et long courrier
                            </h5>
                        </div>
                    </div>
                    <div class="education position-relative">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <div class="envato_group_main">
                                <div>
                                    <h3 class="bachelor font_w_font_s1">Gestionnaire ADV</h3>
                                    <h4 class="company font_w_font_s1">S.I.D.E / 2016 - 2018</h4>
                                </div>
                            </div>
                            <h5 class="cursus font_w_font_s1">Relation client / Gestion portefeuille client / Achat & Vente / Import & Export / Langues étrangères / Facturation / Logistique
                            </h5>
                        </div>
                    </div>
                </section>
                <!-- === Services Section === -->
                <section class="sezgin-intro tabcontent" id="services">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">Mes services</h2>
                    </div>
                    <h2 class="eski font_w_font_s fade_up">Donner vie à vos idées avec précision et passion</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">Je vous offre une expertise dédiée à concrétiser vos aspirations créatives.<br>
                        Avec un mélange unique de savoir-faire et d'engagement, je transforme vos idées en réalité avec professionnalisme et enthousiasme.
                    </h3>
                    <div class="services_box_main">
                        <div class="service_box fade_up">
                            <img class="services_icon" src="assets/images/ux.png" alt="Icône présentant le UX UI">
                            <h3 class="ui_ux font_w_font_s">UX / UI Design</h3>
                            <h4 class="ui_sub_text font_w_font_s1">L'interface / expérience utilisateur: Deux atouts essentiels pour le confort de visite et visuel ainsi que pour la facilité de navigation de vos visiteurs, et je suis là pour mettre tout cela en place.
                            </h4>
                        </div>
                        <div class="service_box fade_up">
                            <img class="services_icon" src="assets/images/web.png" alt="Icône présentant le développement web">
                            <h3 class="ui_ux font_w_font_s">Développement Web</h3>
                            <h4 class="ui_sub_text font_w_font_s1">De la création from scratch de votre projet, en passant par son entretien, sa sécurisation et sa mise en place, mon service de développement web est complet et vous accompagne jusqu'au bout.
                            </h4>
                        </div>
                        <div class="service_box fade_up">
                            <img class="services_icon" src="assets/images/seo.png" alt="Icône présentant le référencement SEO">
                            <h3 class="ui_ux font_w_font_s">Référencement SEO</h3>
                            <h4 class="ui_sub_text font_w_font_s1">Le référencement est un incontournable, mon travail sur le référencement de votre site web améliorera votre visibilité et vous propulsera au sommet des recherches Google !
                            </h4>
                        </div>
                        <div class="service_box fade_up">
                            <img class="services_icon" src="assets/images/music-icon.svg" alt="Icône présentant ma musique">
                            <h3 class="ui_ux font_w_font_s">Production musicale</h3>
                            <h4 class="ui_sub_text font_w_font_s1">Composition d'instrus à votre image ! Faites confiance à mon expérience, depuis plus de 10 ans au service de la musique et de la création de tubes pour tous les styles.
                            </h4>
                        </div>
                        <div class="service_box fade_up">
                            <img class="services_icon" src="assets/images/design.svg" alt="Icône présentant le design">
                            <h3 class="ui_ux font_w_font_s">Flyers / cartes de visite</h3>
                            <h4 class="ui_sub_text font_w_font_s1">Conception professionnelle de flyers et cartes de visite, offrant des designs percutants, personnalisés et mémorables pour promouvoir au maximum votre entreprise avec succès.
                            </h4>
                        </div>
                        <div class="service_box fade_up">
                            <img class="services_icon" src="assets/images/wp.svg" alt="Icône présentant WordPress">
                            <h3 class="ui_ux font_w_font_s">WordPress</h3>
                            <h4 class="ui_sub_text font_w_font_s1">Je conçois vos sites web dynamiques et personnalisés avec WordPress, offrant flexibilité, convivialité et performances sur un site vitrine ou e-commerce
                            </h4>
                        </div>
                    </div>
                </section>
                <!-- === Skills Section === -->
                <section class="sezgin-intro tabcontent" id="skill">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">Mes skills</h2>
                    </div>
                    <h2 class="eski font_w_font_s fade_up">Découvrez mes compétences ainsi que mon savoir-faire</h2>
                    <h3 class="lan_skill font_w_font_s fade_up">Langues parlées</h3>
                    <div class="skill_circle_main">
                        <div>
                            <div class="circlechart" data-percentage="100"></div>
                            <h2 class="subject">Français</h2>
                        </div>
                        <div>
                            <div class="circlechart" data-percentage="80"></div>
                            <h2 class="subject">Anglais</h2>
                        </div>
                        <div>
                            <div class="circlechart" data-percentage="95"></div>
                            <h2 class="subject">Espagnol</h2>
                        </div>
                        <div>
                            <div class="circlechart" data-percentage="100"></div>
                            <h2 class="subject">Turc</h2>
                        </div>
                    </div>
                    <h3 class="lan_skill hard_skill font_w_font_s fade_up">Hard Skills</h3>
                    <div class="skill_circle_main">
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" src="assets/images/html.svg" alt="Logo-html">
                            </div>
                            <h4 class="subject font_w_font_s1">HTML</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" src="assets/images/css.svg" alt="Logo-css">
                            </div>
                            <h4 class="subject font_w_font_s1">CSS</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" src="assets/images/javascript.svg" alt="Logo-javascript">
                            </div>
                            <h4 class="subject font_w_font_s1">JAVASCRIPT</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" src="assets/images/php.svg" alt="Logo-php">
                            </div>
                            <h4 class="subject font_w_font_s1">PHP</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" src="assets/images/bootstrap.avif" alt="Logo-bootstrap">
                            </div>
                            <h4 class="subject font_w_font_s1">BOOTSTRAP</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" src="assets/images/wordpress.svg" alt="Logo-wordpress">
                            </div>
                            <h4 class="subject font_w_font_s1">WORDPRESS</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" src="assets/images/git.svg" alt="Logo-git">
                            </div>
                            <h4 class="subject font_w_font_s1">GIT</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" src="assets/images/github.svg" alt="Logo-github">
                            </div>
                            <h4 class="subject font_w_font_s1">GITHUB</h4>
                        </div>
                    </div>
                </section>
                <!-- === Portfolio Section  === -->
                <section class="sezgin-intro tabcontent" id="portfolio">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">portfolio</h2>
                    </div>
                    <h2 class="eski font_w_font_s fade_up">Découvrez mes projets</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">Je vous présente mes derniers projets réalisés
                    </h3>
                    <div class="content_main">
                        <div class="content_main1">
                            <div class="fade_up">
                                <div class="content_portfolio pop-up">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="assets/images/crea-happybymi.avif" alt="Capture d'écran du site web HappyByMi">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Happy By Mi</h3>
                                        <p class="content-text">WordPress</p>
                                    </div>
                                </div>
                                <h4 class="project_name font_w_font_s">Happy By Mi</h4>
                                <p class="project_name_sub font_w_font_s1">WordPress</p>
                            </div>
                        </div>
                        <div class="content_main2">
                            <div class="">
                                <a href="#popup1">
                                    <div class="content_portfolio">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="assets/images/sez-musique.avif" alt="Photo de l'artiste Sez">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Mes albums & Singles</h3>
                                            <p class="content-text">Musique</p>
                                        </div>
                                    </div>
                                </a>
                                <h4 class="project_name font_w_font_s">Mes albums & Singles</h4>
                                <p class="project_name_sub font_w_font_s1">Musique</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- === Portfolio Section End  === -->
                <!-- === Contact me Section  === -->
                <section class="sezgin-intro tabcontent" id="contact">
                    <div class="intro_main">
                        <h2 class="intro fade_up">Me contacter</h2>
                    </div>
                    <h2 class="eski fade_up">Travaillons ensemble !</h2>
                    <?= $erreurNom ?>
                    <?= $erreurMail ?>
                    <?= $erreurTelephone ?>
                    <?= $erreurSujet ?>
                    <?= $erreurMessage ?>
                    <form method="post">
                        <div class="container1">
                            <div class="form form__1">
                                <label for="name" class="form__label">Votre nom *</label>
                                <input type="text" class="form__input" name="nom" id="name" required autocomplete="off">
                            </div>
                            <div class="form form__2">
                                <label for="email" class="form__label">Votre adresse e-mail *</label>
                                <input type="email" class="form__input" name="email" id="email" required autocomplete="off">
                            </div>
                            <div class="form form__1">
                                <label for="phone" class="form__label">Votre n° de téléphone *</label>
                                <input type="text" class="form__input" name="phone" id="phone" required autocomplete="off">
                            </div>
                            <div class="form form__1">
                                <label for="subject" class="form__label">Sujet *</label>
                                <input type="text" class="form__input" name="subject" id="subject" required autocomplete="off">
                            </div>
                        </div>
                        <div class="btn_message">
                            <div class="form form__3">
                                <label for="project" class="form__label">Parlez-moi de votre projet*</label>
                                <input type="text" class="form__input message2" name="message" id="project" required>
                            </div>
                            <div class="send_message_form">
                                <button type="submit" class="download_cv form__btn">
                                    <i class="fa-regular fa-paper-plane material-icons"></i>Envoyer
                                </button>
                            </div>
                            <?= $succesForm ?>
                            <?= $failForm ?>
                        </div>
                    </form>
                    <div>
                        <h3 class="eski touch">Informations de contact</h3>
                        <div class="contact_number_main">
                            <img src="assets/images/contact.avif" alt="Icône de contact">
                            <h4 class="contact_number"><a href="tel:+12345678899">06 49 64 33 51</a></h4>
                        </div>
                        <div class="contact_number_main">
                            <img src="assets/images/gmail.svg" alt="Icône de mail">
                            <h4 class="contact_number"><a href="mailto:eski.sezgin@gmail.com">eski.sezgin@gmail.com</a></h4>
                        </div>
                        <div class="contact_number_main">
                            <img src="assets/images/map.svg" alt="Icône de localisation">
                            <h4 class="contact_number">
                                <a href="javascript:void;">Paris, FRANCE</a>
                            </h4>
                        </div>
                    </div>
                    <h5 class="copyright">© ESKI Sezgin <?=date("Y")?>. Tous droits réservés</h5>
                </section>
                <!-- === Contact me Section End === -->
            </div>
        </section>
        <!-- === Social Media Right Side  === -->
        <div class="social_media_main" id="social_media_main">
            <ul class="social_media">
                <li><a href="https://www.youtube.com/sezofficiel" target="blank">YT</a></li>
                <li><a href="https://facebook.com/Sez350" target="blank">FB</a></li>
                <li><a href="https://linkedin.com/in/sezgineski" target="blank">IN</a></li>
                <li><a href="https://github.com/sezolazo" target="blank">GITHUB</a></li>
            </ul>
        </div>
        <!-- === Social Media Right Side End === -->
        <!-- === Portfolio PopUp Window  === -->
        <div class="overlay">
            <div class="content2">
                <div id="close">
                    <i class="ri-close-fill"></i>
                </div>
                <img class="pop-up-video" src="assets/images/screenshot-happybymi.avif" alt="Screenshot du site HappyByMi">
                <div class="corporate_main">
                    <div class="corporate_sub">
                        <h3 class="project_name corp font_w_font_s">Happy By Mi</h3>
                        <p class="project_name_sub font_w_font_s1">WordPress</p>
                    </div>
                </div>
                <p class="blandit_text font_w_font_s1">
                    Pascale Zrihen est psychologue clinicienne psychothérapeute, diplômée de l’Université Paris 8 en psychologie clinique et de l’Université Paris 5 René-Descartes en comportementalisme et troubles du comportement alimentaire.
                    Elle voulait un site web fait avec WordPress pour présenter son activité, proposer des rendez-vous, et mettre en vente son oeuvre "Anorexie Boulimie"
                </p>
                <div class="project_second">
                    <div>
                        <img class="project_sub_images" src="assets/images/anorexie-boulimie.avif" alt="Capture d'image du site web de la section présentant le livre 'Anorexie Boumie' de Pascale Zrihen">
                    </div>
                    <div>
                        <img class="project_sub_images" src="assets/images/presentation-pascale-zrihen.avif" alt="Capture d'image du site web de la section portant sur la présentation de Pascale Zrihen">
                    </div>
                </div>
                <div class="pop-up-footer">
                    <button class="download_cv view_project font_w_font_s" onClick="window.open('https://happybymi.fr/');">
                        <i class="ri-eye-line"></i> Voir le site web
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- === Portfolio PopUp Window End === -->
    <!-- === Portfolio gallery === -->
    <div id="popup1" class="overlay_gallery">
        <div class="popup_gallery">
            <h2 class="city_gallery">Albums & Singles</h2>
            <a class="close" href="#">&times;</a>
            <div id="cbwrap">
                <div class="gallery">
                    <a href="https://open.spotify.com/intl-fr/artist/5C8teVDlq3RSlmBW8PDCnD?si=FCP8hAv3RF66t8ayeIpm_w" target="_blank"><img src="assets/images/sez-albums-et-singles.avif" alt="Image d'une main tenant un iPhone dans lequel la page Spotify de Sez est ouverte, avec un accès à tous ses albums et singles disponibles en streaming"></a>
                    <a href="https://www.youtube.com/c/SezOfficiel" target="_blank"><img src="assets/images/sez-clips.avif" alt="Image d'une main tenant un iPhone dans lequel la page YouTube de Sez est ouverte, avec un accès à tous ses clips"></a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/javascript/jquery.min.js"></script>
    <script src="assets/javascript/cursor.js"></script>
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <script src="assets/javascript/script.js"></script>
</body>

</html>