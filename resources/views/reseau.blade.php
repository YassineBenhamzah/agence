<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Gestion des réseaux sociaux - Services professionnels">
<meta name="author" content="">
<title>Gestion des réseaux sociaux - DevApp</title>
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
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville&family=Poppins:wght@500&family=Tajawal:wght@200&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
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
<section class="social-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-content">
                    <h1 class="font2 hero-title">
                        Gestion des<br>
                        <span>Réseaux Sociaux</span>
                    </h1>
                    <div class="title-line"></div>
                    <p class="font2 hero-description">
                        La publication sur les réseaux sociaux nécessite plusieurs compétences à savoir le design et le copywriting. Ce dernier est considéré comme l'art d'écrire des messages percutants et convaincants pour promouvoir une marque, il nécessite une stratégie particulière et qui s'adapte à la politique du site utilisé.
                    </p>
                    <a href="{{ url('/cntn') }}" class="btn btn-hero font2">
                        Démarrer votre stratégie
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-animation wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <lottie-player 
                        src="https://assets8.lottiefiles.com/packages/lf20_dyimsq5i.json" 
                        background="transparent" 
                        speed="1" 
                        style="width: 100%; max-width: 500px; height: auto;" 
                        loop 
                        autoplay>
                    </lottie-player>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="font2">Nos <span>Services</span></h2>
            <div class="header-line"></div>
            <p class="font2">Une gestion complète et professionnelle de votre présence sur les réseaux sociaux</p>
        </div>

        <div class="row features-grid">
            <!-- Feature 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fa fa-edit"></i>
                    </div>
                    <h3 class="font2">Copywriting Créatif</h3>
                    <p class="font2">
                        Rédaction de textes percutants et convaincants adaptés à chaque plateforme sociale pour maximiser l'engagement.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fa fa-paint-brush"></i>
                    </div>
                    <h3 class="font2">Design Professionnel</h3>
                    <p class="font2">
                        Création de visuels attrayants et cohérents avec votre identité de marque pour captiver votre audience.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <h3 class="font2">Planification Stratégique</h3>
                    <p class="font2">
                        Élaboration d'un calendrier éditorial adapté à votre secteur et optimisé pour chaque réseau social.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3 class="font2">Community Management</h3>
                    <p class="font2">
                        Gestion des interactions avec votre communauté pour créer un lien fort et fidéliser votre audience.
                    </p>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <h3 class="font2">Analyse & Reporting</h3>
                    <p class="font2">
                        Suivi des performances et rapports détaillés pour mesurer l'impact de votre stratégie sociale.
                    </p>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fa fa-bullhorn"></i>
                    </div>
                    <h3 class="font2">Campagnes Publicitaires</h3>
                    <p class="font2">
                        Création et gestion de campagnes publicitaires ciblées pour augmenter votre visibilité et vos conversions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platforms Section -->
<section class="platforms-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="font2">Plateformes <span>Supportées</span></h2>
            <div class="header-line"></div>
        </div>

        <div class="row platforms-list">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-item">
                    <i class="fa fa-facebook"></i>
                    <p class="font2">Facebook</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-item">
                    <i class="fa fa-instagram"></i>
                    <p class="font2">Instagram</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-item">
                    <i class="fa fa-twitter"></i>
                    <p class="font2">Twitter</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-item">
                    <i class="fa fa-linkedin"></i>
                    <p class="font2">LinkedIn</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-item">
                    <i class="fa fa-youtube"></i>
                    <p class="font2">YouTube</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="platform-item">
                    <i class="fa fa-pinterest"></i>
                    <p class="font2">Pinterest</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="stat-box">
                    <i class="fa fa-users"></i>
                    <h3 class="font2">500+</h3>
                    <p class="font2">Clients satisfaits</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-box">
                    <i class="fa fa-file-text"></i>
                    <h3 class="font2">10K+</h3>
                    <p class="font2">Publications créées</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-box">
                    <i class="fa fa-heart"></i>
                    <h3 class="font2">2M+</h3>
                    <p class="font2">Engagements générés</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-box">
                    <i class="fa fa-trophy"></i>
                    <h3 class="font2">98%</h3>
                    <p class="font2">Taux de satisfaction</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content text-center">
            <h2 class="font2">Prêt à booster votre présence sociale?</h2>
            <p class="font2">Contactez-nous aujourd'hui pour une consultation gratuite</p>
            <a href="{{ url('/cntn') }}" class="btn btn-cta font2">
                Contactez-nous maintenant
                <i class="fa fa-arrow-right"></i>
            </a>
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
.social-hero-section {
    padding: 150px 0 100px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    overflow: hidden;
}

.hero-content {
    padding: 40px 0;
}

.hero-title {
    font-size: 52px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 20px;
    line-height: 1.2;
}

.hero-title span {
    color: #ffd700;
}

.title-line {
    width: 80px;
    height: 4px;
    background: #ffd700;
    margin: 20px 0 30px;
}

.hero-description {
    font-size: 17px;
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

.hero-animation {
    text-align: center;
}

/* Features Section */
.features-section {
    padding: 100px 0;
    background: #fff;
}

.section-header {
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 42px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 20px;
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

.features-grid {
    margin-top: 40px;
}

.feature-box {
    text-align: center;
    padding: 40px 30px;
    margin-bottom: 30px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    height: 100%;
}

.feature-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.feature-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 25px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

.feature-box:hover .feature-icon {
    transform: scale(1.1);
}

.feature-icon i {
    font-size: 35px;
    color: #fff;
}

.feature-box h3 {
    font-size: 22px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 15px;
}

.feature-box p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin: 0;
}

/* Platforms Section */
.platforms-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.platforms-section .section-header h2,
.platforms-section .section-header p {
    color: #fff;
}

.platforms-list {
    margin-top: 40px;
}

.platform-item {
    text-align: center;
    padding: 30px 20px;
    margin-bottom: 20px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.platform-item:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-5px);
}

.platform-item i {
    font-size: 50px;
    color: #fff;
    margin-bottom: 15px;
}

.platform-item p {
    color: #fff;
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

/* Stats Section */
.stats-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.stat-box {
    padding: 30px 20px;
}

.stat-box i {
    font-size: 50px;
    color: #667eea;
    margin-bottom: 20px;
}

.stat-box h3 {
    font-size: 48px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 10px;
}

.stat-box p {
    font-size: 16px;
    color: #777;
    margin: 0;
}

/* CTA Section */
.cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #1f456c 0%, #2c5f8d 100%);
}

.cta-content h2 {
    font-size: 42px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 40px;
}

.btn-cta {
    background: #ffd700;
    color: #1f456c;
    padding: 18px 45px;
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
    .social-hero-section {
        padding: 120px 0 80px;
    }

    .hero-title {
        font-size: 42px;
    }

    .section-header h2 {
        font-size: 36px;
    }

    .cta-content h2 {
        font-size: 36px;
    }
}

@media (max-width: 767px) {
    .social-hero-section {
        padding: 100px 0 60px;
    }

    .hero-title {
        font-size: 36px;
        text-align: center;
    }

    .title-line {
        margin: 20px auto 30px;
    }

    .hero-description {
        font-size: 16px;
        text-align: center;
    }

    .btn-hero {
        width: 100%;
        justify-content: center;
    }

    .hero-animation {
        margin-top: 40px;
    }

    .features-section {
        padding: 60px 0;
    }

    .section-header h2 {
        font-size: 28px;
    }

    .platforms-section,
    .stats-section {
        padding: 60px 0;
    }

    .stat-box {
        margin-bottom: 30px;
    }

    .cta-section {
        padding: 60px 0;
    }

    .cta-content h2 {
        font-size: 28px;
    }

    .cta-content p {
        font-size: 16px;
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
        font-size: 24px;
    }

    .feature-icon {
        width: 70px;
        height: 70px;
    }

    .feature-icon i {
        font-size: 30px;
    }

    .feature-box h3 {
        font-size: 20px;
    }

    .platform-item i {
        font-size: 40px;
    }

    .stat-box h3 {
        font-size: 36px;
    }

    .cta-content h2 {
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