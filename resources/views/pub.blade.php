<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Campagnes Publicitaires - Services de Marketing Digital">
<meta name="author" content="">
<title>Campagnes Publicitaires - DevApp</title>
<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--Responsive-->
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--Animation-->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<!--Prettyphoto-->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<!--Font-Awesome-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!--Owl-Slider-->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville&family=Poppins:wght@500&family=Tajawal:wght@200&family=Titillium+Web:wght@300&family=Xanh+Mono&display=swap" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

<!--Preloader-->
<div id="preloader">
  <div id="pre-status">
    <div class="preload-placeholder"></div>
  </div>
</div>

@include('header')

<!-- Hero Section -->
<section class="pub-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-content">
                    <h1 class="font2 hero-title">
                        Campagnes<br>
                        <span>Publicitaires</span>
                    </h1>
                    <p class="font2 hero-description">
                        Les campagnes publicitaires contribuent à améliorer l'accès au site Web de l'entreprise ou aux comptes des médias sociaux, mais elles nécessitent beaucoup d'expérience et une bonne planification pour vous garantir de bons résultats.
                    </p>
                    <a href="{{ url('/contact') }}" class="btn btn-hero font2">
                        Demandez le service maintenant
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-image">
                    <img src="{{ asset('images/back/pub1.png') }}" alt="Campagnes Publicitaires" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platforms Section -->
<section class="platforms-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="font2">Nos <span>Plateformes</span></h2>
            <div class="header-line"></div>
            <p class="font2">Nous gérons vos campagnes sur toutes les principales plateformes publicitaires</p>
        </div>

        <div class="row platforms-grid">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-card">
                    <img src="{{ asset('images/back/face.png') }}" alt="Facebook Ads">
                    <p class="font2">Facebook Ads</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-card">
                    <img src="{{ asset('images/back/download.jpg') }}" alt="Instagram Ads">
                    <p class="font2">Instagram Ads</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-card">
                    <img src="{{ asset('images/back/174857.png') }}" alt="Twitter Ads">
                    <p class="font2">Twitter Ads</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-card">
                    <img src="{{ asset('images/back/google.png') }}" alt="Google Ads">
                    <p class="font2">Google Ads</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-card">
                    <img src="{{ asset('images/back/unnamed.png') }}" alt="LinkedIn Ads">
                    <p class="font2">LinkedIn Ads</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-detail-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="services-image">
                    <img src="{{ asset('images/back/pub2.png') }}" alt="Marketing Services" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6">
                <div class="services-content">
                    <h2 class="font2 section-title">
                        Services de marketing des<br>
                        campagnes publicitaires
                    </h2>
                    <p class="font2 section-intro">
                        Diverses plateformes de médias sociaux sont devenues, en quelques années, un canal marketing à part entière dans un monde tourné vers le digital. Notre expertise en Marketing Digital vous aidera à tirer profit de ces plateformes marketing pour atteindre un fort retour sur investissement.
                    </p>
                    
                    <ul class="services-list font2">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Établir une stratégie marketing pour utiliser de manière optimale les médias sociaux les plus populaires auprès de votre public cible
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Étudier et analyser vos pages
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Déterminer les avantages concurrentiels et les avantages de vos produits
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Analyser les concurrents et étudier les opportunités et les menaces SWOT
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Étudier le « buyer persona » de votre client idéal
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Déterminer le meilleur contenu marketing adapté à votre audience
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Fournir des designs thinking pour une marque innovante
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Préparer des campagnes publicitaires qui atteignent un ciblage qualifié
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Leadership et supériorité sur vos concurrents
                        </li>
                    </ul>

                    <a href="{{ url('/contact') }}" class="btn btn-cta font2">
                        Demandez le service maintenant
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')

<!--Jquery-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--Boostrap-Jquery-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--Preetyphoto-Jquery-->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!--NiceScroll-Jquery-->
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<!--Isotopes-->
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<!--Wow-Jquery-->
<script type="text/javascript" src="js/wow.js"></script>
<!--Count-Jquey-->
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<!--Owl-Crousels-Jqury-->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<!--Main-Scripts-->
<script type="text/javascript" src="js/script.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>
/* Hero Section */
.pub-hero-section {
    padding: 150px 0 100px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    position: relative;
    overflow: hidden;
}

.hero-content {
    padding: 40px 0;
}

.hero-title {
    font-size: 56px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 30px;
    line-height: 1.2;
}

.hero-title span {
    color: #ffd700;
}

.hero-description {
    font-size: 18px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 40px;
}

.btn-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 18px 40px;
    font-size: 16px;
    border-radius: 50px;
    border: none;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-hero:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
    color: #fff;
}

.hero-image {
    text-align: center;
    animation: float 3s ease-in-out infinite;
}

.hero-image img {
    max-width: 100%;
    height: auto;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Platforms Section */
.platforms-section {
    padding: 80px 0;
    background: #fff;
}

.section-header {
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 42px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 15px;
}

.section-header h2 span {
    color: #ffd700;
}

.header-line {
    width: 80px;
    height: 4px;
    background: #ffd700;
    margin: 0 auto 20px;
    border-radius: 2px;
}

.section-header p {
    font-size: 16px;
    color: #777;
}

.platforms-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.platform-card {
    background: #fff;
    border-radius: 15px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    cursor: pointer;
}

.platform-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.platform-card img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    margin-bottom: 15px;
    border-radius: 10px;
}

.platform-card p {
    font-size: 14px;
    font-weight: 600;
    color: #1f456c;
    margin: 0;
}

/* Services Detail Section */
.services-detail-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.services-image {
    text-align: center;
    margin-bottom: 30px;
}

.services-image img {
    max-width: 100%;
    height: auto;
    animation: float 3s ease-in-out infinite;
}

.services-content {
    color: #fff;
}

.section-title {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 25px;
    color: #fff;
}

.section-intro {
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 30px;
    color: rgba(255, 255, 255, 0.9);
}

.services-list {
    list-style: none;
    padding: 0;
    margin-bottom: 40px;
}

.services-list li {
    padding: 12px 0;
    font-size: 15px;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.95);
    display: flex;
    align-items: flex-start;
    gap: 15px;
}

.services-list li i {
    color: #ffd700;
    font-size: 18px;
    margin-top: 2px;
    flex-shrink: 0;
}

.btn-cta {
    background: #ffd700;
    color: #1f456c;
    padding: 18px 40px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 50px;
    border: none;
    box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-cta:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(255, 215, 0, 0.6);
    color: #1f456c;
    background: #ffed4e;
}

/* Mobile Responsive */
@media (max-width: 991px) {
    .pub-hero-section {
        padding: 120px 0 80px;
    }

    .hero-title {
        font-size: 42px;
    }

    .section-title {
        font-size: 32px;
    }
}

@media (max-width: 767px) {
    .pub-hero-section {
        padding: 100px 0 60px;
    }

    .hero-title {
        font-size: 36px;
        text-align: center;
    }

    .hero-description {
        font-size: 16px;
        text-align: center;
    }

    .btn-hero {
        width: 100%;
        justify-content: center;
        margin: 0 auto;
        display: flex;
    }

    .hero-image {
        margin-top: 40px;
    }

    .platforms-section {
        padding: 60px 0;
    }

    .section-header h2 {
        font-size: 32px;
    }

    .platform-card {
        margin-bottom: 20px;
    }

    .services-detail-section {
        padding: 60px 0;
    }

    .services-image {
        order: 2;
        margin-top: 30px;
    }

    .services-content {
        order: 1;
        text-align: center;
    }

    .section-title {
        font-size: 28px;
    }

    .services-list li {
        text-align: left;
        font-size: 14px;
    }

    .btn-cta {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 28px;
    }

    .hero-description {
        font-size: 15px;
    }

    .btn-hero {
        padding: 15px 30px;
        font-size: 14px;
    }

    .section-header h2 {
        font-size: 26px;
    }

    .platform-card img {
        width: 60px;
        height: 60px;
    }

    .section-title {
        font-size: 24px;
    }

    .btn-cta {
        padding: 15px 30px;
        font-size: 14px;
    }
}
</style>

</body>
</html>