<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== ICON ONGLET ====================-->
    <link rel="icon" oncontextmenu="return false;" href="assets/img/icon.png" type="image/x-icon">

    <!--==================== UNICONS ====================-->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> -->
    <link rel="stylesheet" href="assets/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" media="print" onload="this.onload=null;this.removeAttribute('media');">
    <noscript><link rel="stylesheet" href="assets/css/swiper-bundle.min.css"></noscript>

    <!--==================== CSS ====================-->
    <link rel="preload" href="assets/css/styles.min.css" as="style">
    <link rel="stylesheet" href="assets/css/styles.min.css">

    <title>Mon portfolio responsive</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <?php include 'inc/header.php'; ?>
    
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== ACCUEIL ====================-->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <!-- <button class="color-picker">Choisir une couleur</button> -->

                <div class="home_content grid">
                    <div class="home_social">
                        <a href="https://www.linkedin.com/in/mathéo-da-silva" target="_blank" class="home_social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCPTkJEYRPmzeZ_BLxemXW8Q" target="_blank" class="home_social-icon">
                            <i class="uil uil-youtube"></i>
                        </a>
                        <a href="https://www.github.com/dasmathe" target="_blank" class="home_social-icon">
                            <i class="uil uil-github"></i>
                        </a>
                    </div>
                    <div class="home_img">
                        <svg class="home_cadre" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M180.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 200.353C69.6454 185.297 30.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -4.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M180.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 200.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -4.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home_cadre-img" x="12" y="18" oncontextmenu="return false;" xlink:href="assets/img/me.png" />
                            </g>
                        </svg>
                    </div>

                    <div class="home_data">
                        <h1 class="home_title" data-lang="home_title"></h1>
                        <h3 class="home_subtitle" data-lang="home_subtitle"></h3>
                        <p class="home_description" data-lang="home_description"></p>
                        <a href="#contact" class="button button-flex">
                            <span data-lang="home_button_contact"></span>
                            <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </div>

                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button-flex">
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name" data-lang="home_scroll"></span>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== A PROPOS ====================-->
        <section class="about section" id="about">
            <h2 class="section_title" data-lang="about_title"></h2>
            <span class="section_subtitle" data-lang="about_subtitle"></span>

            <div class="about_container container grid">
                <img src="assets/img/me2.jpg" oncontextmenu="return false;" alt="" class="about_img">

                <div class="about_data">
                    <p class="about_description" data-lang="about_description">
                    </p>

                    <div class="about_info">
                        <div>
                            <span class="about_info-title" data-lang="about_projects_title"></span>
                            <span class="about_info-name" data-lang="about_projects_name"></span>
                        </div>
                        <div>
                            <span class="about_info-title" data-lang="about_work_title"></span>
                            <span class="about_info-name" data-lang="about_work_name"></span>
                        </div>
                    </div>

                    <div class="about_buttons">
                        <a id="CV" download="" href="assets/pdf/CV fr.pdf" class="button button-flex">
                            <span data-lang="about_download_button"></span>
                            <i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== COMPETENCES ====================-->
        <section class="skills section" id="skills">
            <h2 class="section_title" data-lang="skills_title"></h2>
            <span class="section_subtitle" data-lang="skills_subtitle"></span>

            <div class="skills_container container grid">

                <!-- Div pour le media queries le positionnement des compétences -->
                <div>
                    <!-- 1ière catégorie de compétences -->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>

                            <div>
                                <h3 class="skills_titles" data-lang="skills_title_category1"></h3>
                                    <!-- <span class="skills_subtitle"></span> -->
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>

                        <div class="skills_list grid">
                            <!-- 1ière compétences -->
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h4 class="skills_name">HTML</h4>
                                    <!-- Pour CV internationnale-->
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>
                            <!-- 2ième compétences -->
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h4 class="skills_name">CSS</h4>
                                        <!-- Pour CV internationnale-->
                                        <span class="skills_number">85%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>
                            <!-- 3ième compétences -->
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h4 class="skills_name">JavaScript</h4>
                                        <!-- Pour CV internationnale-->
                                        <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2ième catégorie de compétences -->
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-server skills_icon"></i>

                        <div>
                            <h3 class="skills_titles" data-lang="skills_title_category2"></h3>
                                <!-- <span class="skills_subtitle"></span> -->
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>

                    <div class="skills_list grid">
                        <!-- 1ière compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">PHP</h4>
                                    <!-- Pour CV internationnale-->
                                    <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_php"></span>
                            </div>
                        </div>
                        <!-- 2ième compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">C#</h4>
                                    <!-- Pour CV internationnale-->
                                    <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_cSharp"></span>
                            </div>
                        </div>
                        <!-- 3ième compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">Python</h4>
                                <!-- Pour CV internationnale-->
                                <span class="skills_number">70%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_py"></span>
                            </div>
                        </div>
                        <!-- 4ième compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">NodeJs</h4>
                                <!-- Pour CV internationnale-->
                                <span class="skills_number">60%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_nodeJs"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3ième catégorie de compétences -->
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-database skills_icon"></i>

                        <div>
                            <h3 class="skills_titles" data-lang="skills_title_category3"></h3>
                                <!-- <span class="skills_subtitle"></span> -->
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>

                    <div class="skills_list grid">
                        <!-- 1ière compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">Postgres</h4>
                                    <!-- Pour CV internationnale-->
                                    <span class="skills_number ">95%</span>
                            </div>
                            <div class="skills_bar ">
                                <span class="skills_percentage skills_postgres"></span>
                            </div>
                        </div>
                        <!-- 2ième compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">MySql</h4>
                                    <!-- Pour CV internationnale-->
                                    <span class="skills_number ">85%</span>
                            </div>
                            <div class="skills_bar ">
                                <span class="skills_percentage skills_mysql"></span>
                            </div>
                        </div>
                        <!-- 3ième compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">MongoDB</h4>
                                    <!-- Pour CV internationnale-->
                                    <span class="skills_number ">85%</span>
                            </div>
                            <div class="skills_bar ">
                                <span class="skills_percentage skills_mongodb"></span>
                            </div>
                        </div>
                        <!-- 4ième compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">InfluxDB</h4>
                                <!-- Pour CV internationnale-->
                                <span class="skills_number ">80%</span>
                            </div>
                            <div class="skills_bar ">
                                <span class="skills_percentage skills_influxdb"></span>
                            </div>
                        </div>
                        <!-- 5ième compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name">ElasticSearch</h4>
                                    <!-- Pour CV internationnale-->
                                    <span class="skills_number ">75%</span>
                            </div>
                            <div class="skills_bar ">
                                <span class="skills_percentage skills_elasticsearch"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4ième catégorie de compétences -->
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-english-to-chinese skills_icon"></i>

                        <div>
                            <h3 class="skills_titles" data-lang="skills_title_category4"></h1>
                                <!-- <span class="skills_subtitle"></span> -->
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>

                    <div class="skills_list grid">
                        <!-- 1ière compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name" data-lang="skills_category4_name1"></h4>
                                <!-- Pour CV internationnale-->
                                <span class="skills_number ">100%</span>
                            </div>
                            <div class="skills_bar ">
                                <span class="skills_percentage skills_francais"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name" data-lang="skills_category4_name2"></h4>
                                <!-- Pour CV internationnale-->
                                <span class="skills_number ">66%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_anglais"></span>
                            </div>
                        </div>
                        <!-- 2ième compétences -->
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h4 class="skills_name" data-lang="skills_category4_name3"></h4>
                                <!-- Pour CV internationnale-->
                                <span class="skills_number ">33%</span>
                            </div>
                            <div class="skills_bar ">
                                <span class="skills_percentage skills_espagnol"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PARCOURS ====================-->
        <section class="parcours section" id="experience">
            <h2 class="section_title" data-lang="experience_title"></h2>
            <span class="section_subtitle" data-lang="experience_subtitle"></span>

            <div class="parcours_container container">
                <div class="parcours_nav">
                    <i class="uil uil-graduation-cap parcours_icon"></i>
                    <div class="parcours_button button-flex parcours_active parcours_active_button" data-target="#scolaire" data-lang="education">
                    </div>
                    <i class="uil uil-user-md parcours_icon"></i>
                    <div class="parcours_button button-flex" data-target="#travail" data-lang="work">
                    </div>
                </div>
                <div class="parcours_sections">
                    <!--==================== CONTENUE 1 (Scolaire) ====================-->
                    <div class="parcours_content parcours_active" data-content id="scolaire">
                        <!--==================== Parcours 1 ====================-->
                        <div class="parcours_data">
                            <div>
                                <h3 class="parcours_title">
                                    <a href="skills-formation.html" class="">
                                        <span data-lang="education_bachelor"></span>
                                        <i class="uil uil-arrow-right"></i>
                                    </a>
                                </h3>
                                <span class="parcours_subtitle" data-lang="education_university"></span>
                                <div class="parcours_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021-2024
                                </div>
                            </div>

                            <div>
                                <span class="parcours_rounder"></span>
                                <span class="parcours_line"></span>
                            </div>
                        </div>
                        <!--==================== Parcours 2 ====================-->
                        <div class="parcours_data">
                            <div></div>
                            <div>
                                <span class="parcours_rounder"></span>
                                <!-- <span classs="parcours_line"></span> -->
                            </div>

                            <div>
                                <h3 class="parcours_title" data-lang="education_highschool"></h3>
                                <span class="parcours_subtitle" data-lang="education_highschool_location"></span>
                                <div class="parcours_calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019-2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== CONTENUE 2 (Travail) ====================-->
                    <div class="parcours_content" data-content id="travail">    
                        <!--==================== Parcours 1 ====================-->
                        <div class="parcours_data">
                            <div>
                                <h3 class="parcours_title" data-lang="work_employee"></h3>
                                <span class="parcours_subtitle" data-lang="work_company"></span>
                                <div class="parcours_calendar" data-lang="work_date">
                                    <i class="uil uil-calendar-alt"></i>
                                    
                                </div>
                            </div>
                            <div>
                                <span class="parcours_rounder"></span>
                                <span class="parcours_line"></span>
                            </div>
                        </div>
                        <!--==================== Parcours 2 ====================-->
                        <div class="parcours_data">
                            <div></div>
                            <div>
                                <span class="parcours_rounder"></span>
                            </div>

                            <div>
                                <h3 class="parcours_title" data-lang="work_employee2"></h3>
                                <span class="parcours_subtitle" data-lang="work_company2"></span>
                                <div class="parcours_calendar" data-lang="work_date2">
                                    <i class="uil uil-calendar-alt"></i>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PROJETS ====================-->
        <section class="projects section" id="projects">
            <h2 class="section_title" data-lang="projects_title"></h2>
            <span class="section_subtitle" data-lang="projects_subtitle"></span>

            <div class="projects_container container swiper swiper-container ">
                <div class="swiper-wrapper">
                    <!--==================== PROJET 1 ====================-->
                    <div class="projects_content grid swiper-slide">
                        <img src="assets/img/clubmed.png" oncontextmenu="return false;" alt="Image du projet" class="project_img">

                        <div class="project_data">
                            <h3 class="project_title" data-lang="project_1_title"></h3>
                            <p class="project_description" data-lang="project_1_description">
                            </p>
                            <!-- <a href="http://iutannecy-deptinfo.fr:4269/" target="_blank" class="button button-flex button-small project_button">
                                <span data-lang="project_1_button"> Voir le site </span>
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                            <span class="button_new_window" data-lang="button_new_window"></span> -->
                        </div>
                    </div>
                    <!--==================== PROJET 2 ====================-->
                    <div class="projects_content grid swiper-slide">
                        <img src="assets/img/MyWebsite.png" oncontextmenu="return false;" alt="Image de mon site web" class="project_img">

                        <div class="project_data">
                            <h3 class="project_title" data-lang="project_2_title"></h3>
                            <p class="project_description" data-lang="project_2_description">
                            </p>
                            <!-- <a href="" class="button button-flex button-small project_button">
                                <span data-lang="project_2_button"> Voir le site web </span>
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                            <span class="button_new_window" data-lang="button_new_window"></span> -->
                        </div>
                    </div>
                    <!--==================== PROJET 3 ====================-->
                    <div class="projects_content grid swiper-slide">
                        <img src="assets/img/sae201.png" oncontextmenu="return false;" alt="Image du projet sae201" class="project_img">

                        <div class="project_data">
                            <h3 class="project_title" data-lang="project_3_title"></h3>
                            <p class="project_description" data-lang="project_3_description">
                            </p>
                        </div>
                    </div>
                    <!--==================== PROJET 4 ====================-->
                    <div class="projects_content grid swiper-slide">
                        <img src="assets/img/screenGenerateAI.png" oncontextmenu="return false;" alt="Image de l'interface d'utilisation de Stable Diffusion local que j'utilise" class="project_img">

                        <div class="project_data">
                            <h3 class="project_title" data-lang="project_4_title"></h3>
                            <p class="project_description" data-lang="project_4_description">
                            </p>
                            <a href="https://stablediffusionweb.com/" target="_blank" class="button button-flex button-small project_button">
                                <span data-lang="project_4_button"> </span>
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PROJET 5 w====================-->
                    <div class="projects_content grid swiper-slide">
                        <img src="assets/img/chaineYtb.png" oncontextmenu="return false;" alt="Image de ma chaine youtube" class="project_img">

                        <div class="project_data">
                            <h3 class="project_title" data-lang="project_5_title"></h3>
                            <p class="project_description" data-lang="project_5_description">
                            </p>
                            <a href="https://www.youtube.com/channel/UCPTkJEYRPmzeZ_BLxemXW8Q" target="_blank" class="button button-flex button-small project_button">
                                <span data-lang="project_5_button"></span>
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                            <span class="button_new_window" data-lang="button_new_window"></span>
                        </div>
                    </div>
                    <!--==================== PROJET 6 w====================-->
                    <div class="projects_content grid swiper-slide">
                        <img src="assets/img/arcade.png" oncontextmenu="return false;" alt="Image de la décoration droit de l'arcade" class="project_img">

                        <div class="project_data">
                            <h3 class="project_title" data-lang="project_6_title"></h3>
                            <p class="project_description" data-lang="project_6_description">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-project-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-project-icon"></i>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <h2 class="section_title" data-lang="contact_title"></h2>
            <span class="section_subtitle" data-lang="contact_subtitle"></span>

            <div class="contact_container container grid">
                <div class="contact_status">
                    <i class="uil uil-info-circle contact_status_icon"></i>
                    <p data-lang="contact_status"></p>
                </div>

                <div class="contact_informations">
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title" data-lang="contact_info_call"></h3>
                            <span class="contact_subtitle" data-lang="contact_info_phone"></span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title" data-lang="contact_info_email"></h3>
                            <span class="contact_subtitle" data-lang="contact_info_email_address"></span>
                        </div>
                    </div>
                </div>

                <form class="contact_form grid">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label for="name" class="contact_label" data-lang="contact_label_name"></label>
                            <input type="text" name="name" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label for="email" class="contact_label" data-lang="contact_label_email"></label>
                            <input type="email" name="email" class="contact_input">
                        </div>
                    </div>
                    <div class="contact_content">
                        <label for="object" class="contact_label" data-lang="contact_label_object"></label>
                        <input type="text" name="object" class="contact_input">
                    </div>
                    <div class="contact_content">
                        <label for="message" class="contact_label" data-lang="contact_label_message"></label>
                        <textarea name="message" id="message" cols="8" rows="7" class="contact_input"></textarea>
                    </div>

                    <div>
                        <button class="button button-flex">
                            <span data-lang="contact_button_send"></span>
                            <i class="uil uil-message button_icon"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <?php include 'inc/footer.php'; ?>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--==================== REVELATION SCROLL ====================-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script type="module" src="assets/js/main-bundle.js"></script>
</body>

</html>