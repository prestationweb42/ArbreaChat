<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!------------ BOX ICONS ------------>
        <link
            href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!----------- Font Awesome ----------->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous"
        />

        <!------------- Lightbox ------------->
        <link rel="stylesheet" href="./css/lightbox.min.css" />

        <!----------- CSS Bootstrap ----------->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous"
        />

        <!--------------- Fonts --------------->
        <link
            href="https://fonts.googleapis.com/css?family=Kaushan+Script"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Lato"
            rel="stylesheet"
        />

        <!------------- Custom CSS ------------->
        <link rel="stylesheet" href="../css/reset.css" />
        <link rel="stylesheet" href="../css/navbar.css" />
        <link rel="stylesheet" href="../css/cookiescrolltop.css" />
        <link rel="stylesheet" href="../css/guideachat.css" />
        <!-- js -->
        <script src="../js/app.js" defer></script>
        <!------------- TITLE ------------->
        <title>Guide d'achat - Arbres à chat</title>
    </head>
    <body>
        <!----------- Header Nav Title ----------->
        <header id="top">
            <!---------- navbar // Mega Menu ---------->
            <nav class="navbar navbar-expand-xl fixed-top">
                <div class="container">
                    <a class="navbar-brand py-2" href="../index.html"
                        >Arbres à chats</a
                    >
                    <button
                        class="navbar-toggler bg-light"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarNavDropdown"
                    >
                        <ul class="navbar-nav">
                            <!-- Navbar Guide d'Achat -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    >Guide d'Achat</a
                                >
                                <!-- ul dropdown-menu -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="./guideachat.html#guideachat-2050"
                                            >Entre 20 et 50 €</a
                                        >
                                    </li>
                                    <hr />
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="./guideachat.html#guideachat-50100"
                                            >Entre 50 et 100 €</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <!-- Navbar Promotions -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    >Promotions</a
                                >
                                <!-- ul dropdown-menu -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="./promotions.html#promotions-2050"
                                            >Entre 20 et 50 €</a
                                        >
                                    </li>
                                    <hr />
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="./promotions.html#promotions-50100"
                                            >Entre 50 et 100 €</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <!-- Navbar Connaissez-vous -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    >Connaissez-vous ?</a
                                >
                                <!-- ul dropdown-menu -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#icones"
                                            >Icônes</a
                                        >
                                    </li>
                                    <hr />
                                    <li>
                                        <a class="dropdown-item" href="#ban1"
                                            >Démarrer</a
                                        >
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-------- Section Guide Achat 20€-50€ ---------->
        <section class="guideachat-2050" id="guideachat-2050">
            <h2 class="text-center titleH2">
                Sélection des 8 meilleures notes pour un buget compris entre
                <span>20</span> € et <span>50</span> €
            </h2>
            <div class="container">
                <!------ Row Cards ------>
                <div class="row">
                    <!----------------- card 1----------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img src="../img/Lionto-85cm.jpeg" alt="" />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Lionto</h3>
                            <p class="textDetails">Arbre à chat à grimper</p>
                            <p class="textDetails">Griffoir pour chat</p>
                            <p class="textDetails">85 cm</p>
                            <p class="textDetails">Gris foncé</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,4/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">34.95</span> €
                        </p>
                        <div class="btn-card">
                            <a
                                target="_blank"
                                href="https://www.amazon.fr/dibea-KB00252-Griffoir-Centre-dActivit%C3%A9s/dp/B01JD9PGMU/ref=sr_1_6?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BYM3CLX9LCCY&keywords=arbre+a+chat&qid=1666463169&qu=eyJxc2MiOiI4LjMyIiwicXNhIjoiOC4zNiIsInFzcCI6IjcuNjAifQ%3D%3D&refinements=p_72%3A437873031%2Cp_36%3A2042626031&rnid=2042624031&s=pet-supplies&sprefix=arbre+a+chat%2Caps%2C131&sr=1-6"
                            >
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 2---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img src="../img/Fleandra-68cm.jpg" alt="" />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">FEANDREA</h3>
                            <p class="textDetails">Arbre à chat</p>
                            <p class="textDetails">Tour grattoir</p>
                            <p class="textDetails">68 cm</p>
                            <p class="textDetails">Gris Anthracite</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">40.09</span> €
                        </p>
                        <div class="btn-card">
                            <a
                                target="_blank"
                                href="https://www.amazon.fr/FEANDREA-Arbre-grattoir-Anthracite-PCT59G/dp/B07ZZ5DFGJ/ref=sr_1_9?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BYM3CLX9LCCY&keywords=arbre+a+chat&qid=1666463169&qu=eyJxc2MiOiI4LjMyIiwicXNhIjoiOC4zNiIsInFzcCI6IjcuNjAifQ%3D%3D&refinements=p_72%3A437873031%2Cp_36%3A2042626031&rnid=2042624031&s=pet-supplies&sprefix=arbre+a+chat%2Caps%2C131&sr=1-9"
                            >
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 3---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <p>N°1 des<br />Ventes</p>
                            <img src="../img/Lionto-112cm.jpeg" alt="" />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Lionto</h3>
                            <p class="textDetails">
                                Arbre à Chat Arbre à Grimper
                            </p>
                            <p class="textDetails">Griffoir pour chat</p>
                            <p class="textDetails">112 cm</p>
                            <p class="textDetails">Beige</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,3/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">42.95</span> €
                        </p>
                        <div class="btn-card">
                            <a
                                target="_blank"
                                href="https://www.amazon.fr/dibea-Arbre-Griffoir-Centre-dActivit%C3%A9s/dp/B00GXFJQ9W/ref=sr_1_7?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BYM3CLX9LCCY&keywords=arbre+a+chat&qid=1666463169&qu=eyJxc2MiOiI4LjMyIiwicXNhIjoiOC4zNiIsInFzcCI6IjcuNjAifQ%3D%3D&refinements=p_72%3A437873031%2Cp_36%3A2042626031&rnid=2042624031&s=pet-supplies&sprefix=arbre+a+chat%2Caps%2C131&sr=1-7"
                            >
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 4---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <p>
                                N°1 des <br />
                                Ventes
                            </p>
                            <img src="../img/Lionto-112cm-gris.jpg" alt="" />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Lionto</h3>
                            <p class="textDetails">
                                Arbre à Chat Arbre à Grimper
                            </p>
                            <p class="textDetails">Griffoir pour chat</p>
                            <p class="textDetails">112 cm</p>
                            <p class="textDetails">Gris/Blanc</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,3/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">42.95</span> €
                        </p>
                        <div class="btn-card">
                            <a
                                target="_blank"
                                href="https://www.amazon.fr/dibea-Arbre-Griffoir-Centre-dActivit%C3%A9s/dp/B00GXF2CWA/ref=sr_1_8?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BYM3CLX9LCCY&keywords=arbre+a+chat&qid=1666463169&qu=eyJxc2MiOiI4LjMyIiwicXNhIjoiOC4zNiIsInFzcCI6IjcuNjAifQ%3D%3D&refinements=p_72%3A437873031%2Cp_36%3A2042626031&rnid=2042624031&s=pet-supplies&sprefix=arbre+a+chat%2Caps%2C131&sr=1-8"
                            >
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 5---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <p>
                                N°1 des <br />
                                Ventes
                            </p>
                            <img
                                src="../img/Lionto-112cm-beige-blanc.jpg"
                                alt=""
                            />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Lionto</h3>
                            <p class="textDetails">Arbre à Grimper</p>
                            <p class="textDetails">Griffoir pour chat</p>
                            <p class="textDetails">112 cm</p>
                            <p class="textDetails">Beige/Blanc</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,3/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">42.95</span> €
                        </p>
                        <div class="btn-card">
                            <a
                                target="_blank"
                                href="https://www.amazon.fr/dibea-Arbre-Griffoir-Centre-dActivit%C3%A9s/dp/B00GXF2L5S/ref=sr_1_27?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BYM3CLX9LCCY&keywords=arbre+a+chat&qid=1666463169&qu=eyJxc2MiOiI4LjMyIiwicXNhIjoiOC4zNiIsInFzcCI6IjcuNjAifQ%3D%3D&refinements=p_72%3A437873031%2Cp_36%3A2042626031&rnid=2042624031&s=pet-supplies&sprefix=arbre+a+chat%2Caps%2C131&sr=1-27"
                            >
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 6---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img src="../img/Beltom-120cm.jpg" alt="" />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Beltom</h3>
                            <p class="textDetails">Arbre à Chat</p>
                            <p class="textDetails">
                                Griffoir - Grattoir - Grimpeur
                            </p>
                            <p class="textDetails">120 cm</p>
                            <p class="textDetails">Bleu - Beige - Brun</p>
                            <p class="textDetails">Gris - Rouge-vin</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">45.74</span> €
                        </p>
                        <div class="btn-card">
                            <a
                                target="_blank"
                                href="https://www.amazon.fr/Arbre-griffoir-grattoir-grimpeur-animalerie/dp/B078BKKLGV/ref=sr_1_30?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BYM3CLX9LCCY&keywords=arbre+a+chat&qid=1666463169&qu=eyJxc2MiOiI4LjMyIiwicXNhIjoiOC4zNiIsInFzcCI6IjcuNjAifQ%3D%3D&refinements=p_72%3A437873031%2Cp_36%3A2042626031&rnid=2042624031&s=pet-supplies&sprefix=arbre+a+chat%2Caps%2C131&sr=1-30"
                            >
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 7---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img
                                src="../img/Fleandra-118cm-GrisClair.jpg"
                                alt=""
                            />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Lionto</h3>
                            <p class="textDetails">
                                Arbre à Chat Arbre à Grimper
                            </p>
                            <p class="textDetails">Griffoir pour chat</p>
                            <p class="textDetails">112 cm</p>
                            <p class="textDetails">Gris/Blanc</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">48.99</span> €
                        </p>
                        <div class="btn-card">
                            <a
                                target="_blank"
                                href="https://www.amazon.fr/FEANDREA-Arbre-Hauteur-Chaton-PCT143W01/dp/B09NLS54TR/ref=sr_1_25?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BYM3CLX9LCCY&keywords=arbre+a+chat&qid=1666463169&qu=eyJxc2MiOiI4LjMyIiwicXNhIjoiOC4zNiIsInFzcCI6IjcuNjAifQ%3D%3D&refinements=p_72%3A437873031%2Cp_36%3A2042626031&rnid=2042624031&s=pet-supplies&sprefix=arbre+a+chat%2Caps%2C131&sr=1-25"
                            >
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 8---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img src="../img/Dibeao-80cm.jpg" alt="" />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Dibea</h3>
                            <p class="textDetails">Arbre à Gratter</p>
                            <p class="textDetails">Arbre à Grimper</p>
                            <p class="textDetails">Griffoir pour chat</p>
                            <p class="textDetails">80 cm</p>
                            <p class="textDetails">Gris Foncé</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">49.95</span> €
                        </p>
                        <div class="btn-card">
                            <a
                                target="_blank"
                                href="https://www.amazon.fr/dibea-KB00381-Arbre-griffoir-Hauteur/dp/B07V2M5DW1/ref=sr_1_31?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BYM3CLX9LCCY&keywords=arbre+a+chat&qid=1666463169&qu=eyJxc2MiOiI4LjMyIiwicXNhIjoiOC4zNiIsInFzcCI6IjcuNjAifQ%3D%3D&refinements=p_72%3A437873031%2Cp_36%3A2042626031&rnid=2042624031&s=pet-supplies&sprefix=arbre+a+chat%2Caps%2C131&sr=1-31"
                            >
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------- Section Guide Achat 50€-100€ ---------->
        <section class="guideachat-50100" id="guideachat-50100">
            <h2 class="text-center titleH2">
                Pour un buget compris entre <span>50</span> € et
                <span>100</span> €
            </h2>
            <div class="container">
                <!------ Row Cards ------>
                <div class="row">
                    <!----------------- card 1----------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img
                                src="../img/arbre-a-chat-cosy-silvio-design.jpg"
                                alt=""
                            />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Animal-Design</h3>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Peluche solide</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">9.99</span> €
                        </p>
                        <div class="btn-card">
                            <a href="#">
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 2---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img
                                src="../img/arbre-a-chat-cosy-silvio-design.jpg"
                                alt=""
                            />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Animal-Design</h3>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Peluche solide</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">9.99</span> €
                        </p>
                        <div class="btn-card">
                            <a href="#">
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 3---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img
                                src="../img/arbre-a-chat-cosy-silvio-design.jpg"
                                alt=""
                            />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Animal-Design</h3>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Peluche solide</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">9.99</span> €
                        </p>
                        <div class="btn-card">
                            <a href="#">
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 4---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img
                                src="../img/arbre-a-chat-cosy-silvio-design.jpg"
                                alt=""
                            />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Animal-Design</h3>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Peluche solide</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">9.99</span> €
                        </p>
                        <div class="btn-card">
                            <a href="#">
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <!---------------- cartes 5---------------->
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <div class="header">
                            <img
                                src="../img/arbre-a-chat-cosy-silvio-design.jpg"
                                alt=""
                            />
                        </div>
                        <div class="details">
                            <h3 class="titleCard">Animal-Design</h3>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Cadre métal</p>
                            <p class="textDetails">Peluche solide</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                            <p class="textDetails">3 Noms de Domaine</p>
                        </div>
                        <div class="starsDetails">
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <i class="bx bx-star"></i>
                            <p class="starText">&nbsp;4,5/5</p>
                        </div>
                        <p class="price">
                            <span class="spanPrice">9.99</span> €
                        </p>
                        <div class="btn-card">
                            <a href="#">
                                <img
                                    src="../img/amazon-2.png"
                                    alt="icone amazon"
                                />
                                <span>Voir l'offre</span>
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------- Footer --------------->
        <footer class="text-center p-4">
            <div class="row">
                <div class="container">
                    <div class="col">
                        <p>
                            Tous droits réservés &copy;
                            <span class="year">Prestation Web 42</span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!------------- SCROLL TOP ------------->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class="bx bx-chevron-up scrolltop__icon"></i>
        </a>
        <!------------ Cookie Banner ---------->
        <div id="cookieModal">
            <div id="cookieContent">
                <!-- <img src="./ressources/cookie.png" alt="icone cookie" /> -->
                <p>
                    <span>
                        Nous utilisons des cookies sur notre site Web pour vous
                        offrir l'expérience la plus pertinente en mémorisant vos
                        préférences et vos visites répétées. En cliquant sur
                        "Accepter", vous consentez à l'utilisation de TOUS les
                        cookies.
                    </span>

                    <a href="https://google.fr" class="my-4"
                        >Politique de confidentialité</a
                    >
                </p>
                <!-- div buttons -->
                <div class="btns">
                    <button type="button" id="acceptCookie">Accepter</button>
                    <button type="button" id="refusedCookie">Refuser</button>
                </div>
            </div>
        </div>
        <!-------------- Scripts -------------->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
