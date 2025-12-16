<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Vidéo Marketing - Services professionnels">
<meta name="author" content="">
<title>Vidéo Marketing - DevApp</title>
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
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville&family=Tajawal:wght@200&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
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
<section class="video-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-image">
                    <img src="{{ asset('images/slider/03.jpg') }}" alt="Video Marketing" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-content">
                    <h1 class="font2 hero-title">
                        Transformez des produits<br>
                        ordinaires en <span>best-sellers</span>
                    </h1>
                    <p class="font2 hero-description">
                        Vous avez besoin d'une vidéo professionnelle ? Notre équipe est prête à transformer toutes vos idées et à en faire une vidéo publicitaire concise pour plus de notoriété.
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ url('/contact') }}" class="btn btn-primary-custom font2">
                            <i class="fa fa-play-circle"></i>
                            Commencer maintenant
                        </a>
                        <a href="{{ url('/contact') }}" class="btn btn-secondary-custom font2">
                            <i class="fa fa-folder-open"></i>
                            Découvrez notre travail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <div class="section-header text-center">
            <p class="subtitle font2">Voudrais-tu savoir</p>
            <h2 class="font2">Comment <span>ça se fait ?</span></h2>
            <p class="font2 section-description">
                La méthode est très facile et simple. Nous la limitons à trois étapes :
            </p>
        </div>

        <div class="row process-steps">
            <!-- Step 1 -->
            <div class="col-md-4">
                <div class="step-card">
                    <div class="step-number">01</div>
                    <div class="step-icon">
                        <img src="{{ asset('images/back/icon33.png') }}" alt="Choose Package">
                    </div>
                    <h3 class="font2">Choisir un pack adapté</h3>
                    <p class="font2">
                        Nous nous concentrons sur la créativité principalement pour offrir à votre public la meilleure publicité.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-4">
                <div class="step-card featured">
                    <div class="step-number">02</div>
                    <div class="step-icon">
                        <img src="{{ asset('images/back/icon32.png') }}" alt="Fill Form">
                    </div>
                    <h3 class="font2">Remplir le formulaire</h3>
                    <p class="font2">
                        Très court délai dans la fourniture de services, vous permettant d'intégrer les marchés au bon timing.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-4">
                <div class="step-card">
                    <div class="step-number">03</div>
                    <div class="step-icon">
                        <img src="{{ asset('images/back/icon31.png') }}" alt="Contact">
                    </div>
                    <h3 class="font2">Contact en 24 heures</h3>
                    <p class="font2">
                        Une équipe d'assistance technique est disponible 24 h/24, prête à répondre aux questions de manière continue.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="font2">Nos <span>Services Vidéo</span></h2>
            <div class="header-line"></div>
        </div>

        <div class="row features-grid">
            <div class="col-md-3 col-sm-6">
                <div class="feature-box">
                    <i class="fa fa-video-camera"></i>
                    <h4 class="font2">Vidéos Publicitaires</h4>
                    <p class="font2">Créations impactantes pour promouvoir vos produits</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-box">
                    <i class="fa fa-film"></i>
                    <h4 class="font2">Vidéos Corporatives</h4>
                    <p class="font2">Présentations professionnelles de votre entreprise</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-box">
                    <i class="fa fa-play"></i>
                    <h4 class="font2">Vidéos Sociales</h4>
                    <p class="font2">Content optimisé pour les réseaux sociaux</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-box">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 class="font2">Vidéos Explicatives</h4>
                    <p class="font2">Animations pour expliquer vos services</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content text-center">
            <h2 class="font2">Prêt à créer votre vidéo?</h2>
            <p class="font2">Contactez-nous aujourd'hui et donnons vie à vos idées</p>
            <a href="{{ url('/contact') }}" class="btn btn-cta font2">
                Démarrer votre projet
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
.video-hero-section {
    padding: 150px 0 100px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    overflow: hidden;
}

.hero-image {
    text-align: center;
    margin-bottom: 30px;
}

.hero-image img {
    max-width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.hero-content {
    padding: 40px 0;
}

.hero-title {
    font-size: 42px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 30px;
    line-height: 1.3;
}

.hero-title span {
    color: #C75C6F;
}

.hero-description {
    font-size: 17px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 40px;
}

.hero-buttons {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.btn-primary-custom {
    background: linear-gradient(135deg, #C75C6F 0%, #d4717f 100%);
    color: #fff;
    padding: 16px 35px;
    font-size: 16px;
    border-radius: 50px;
    border: none;
    box-shadow: 0 10px 30px rgba(199, 92, 111, 0.4);
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-primary-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(199, 92, 111, 0.6);
    color: #fff;
}

.btn-secondary-custom {
    background: transparent;
    color: #1f456c;
    padding: 16px 35px;
    font-size: 16px;
    border-radius: 50px;
    border: 2px solid #1f456c;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-secondary-custom:hover {
    background: #1f456c;
    color: #fff;
    transform: translateY(-3px);
}

/* Process Section */
.process-section {
    padding: 100px 0;
    background: #242424;
}

.section-header {
    margin-bottom: 60px;
}

.subtitle {
    font-size: 16px;
    color: #C75C6F;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 15px;
}

.section-header h2 {
    font-size: 42px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 20px;
}

.section-header h2 span {
    color: #C75C6F;
}

.section-description {
    font-size: 17px;
    color: rgba(255, 255, 255, 0.8);
}

.process-steps {
    margin-top: 40px;
}

.step-card {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    padding: 50px 30px;
    text-align: center;
    margin-bottom: 30px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.step-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #C75C6F, #d4717f);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.step-card:hover::before {
    transform: scaleX(1);
}

.step-card.featured {
    background: rgba(199, 92, 111, 0.1);
    border-color: #C75C6F;
    transform: scale(1.05);
}

.step-card:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 0.08);
}

.step-card.featured:hover {
    transform: scale(1.08) translateY(-10px);
}

.step-number {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 60px;
    font-weight: bold;
    color: rgba(255, 255, 255, 0.05);
}

.step-icon {
    margin-bottom: 25px;
}

.step-icon img {
    width: 70px;
    height: 70px;
    filter: brightness(0) invert(1);
    transition: transform 0.3s ease;
}

.step-card:hover .step-icon img {
    transform: scale(1.1);
}

.step-card h3 {
    font-size: 22px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 15px;
}

.step-card p {
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.7);
    margin: 0;
}

/* Features Section */
.features-section {
    padding: 100px 0;
    background: #fff;
}

.header-line {
    width: 80px;
    height: 4px;
    background: #C75C6F;
    margin: 0 auto 20px;
    border-radius: 2px;
}

.features-section .section-header h2 {
    font-size: 42px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 20px;
}

.features-section .section-header h2 span {
    color: #C75C6F;
}

.features-grid {
    margin-top: 40px;
}

.feature-box {
    text-align: center;
    padding: 40px 20px;
    background: #f8f9fa;
    border-radius: 15px;
    margin-bottom: 30px;
    transition: all 0.3s ease;
}

.feature-box:hover {
    background: linear-gradient(135deg, #C75C6F 0%, #d4717f 100%);
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(199, 92, 111, 0.3);
}

.feature-box i {
    font-size: 50px;
    color: #C75C6F;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

.feature-box:hover i {
    color: #fff;
}

.feature-box h4 {
    font-size: 20px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 15px;
    transition: color 0.3s ease;
}

.feature-box:hover h4 {
    color: #fff;
}

.feature-box p {
    font-size: 14px;
    color: #666;
    margin: 0;
    transition: color 0.3s ease;
}

.feature-box:hover p {
    color: rgba(255, 255, 255, 0.9);
}

/* CTA Section */
.cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
    .video-hero-section {
        padding: 120px 0 80px;
    }

    .hero-title {
        font-size: 36px;
    }

    .section-header h2 {
        font-size: 36px;
    }

    .cta-content h2 {
        font-size: 36px;
    }
}

@media (max-width: 767px) {
    .video-hero-section {
        padding: 100px 0 60px;
    }

    .hero-image {
        order: 2;
        margin-top: 30px;
    }

    .hero-content {
        order: 1;
        text-align: center;
    }

    .hero-title {
        font-size: 32px;
    }

    .hero-description {
        font-size: 16px;
    }

    .hero-buttons {
        justify-content: center;
    }

    .btn-primary-custom,
    .btn-secondary-custom {
        width: 100%;
        justify-content: center;
    }

    .process-section {
        padding: 60px 0;
    }

    .section-header h2 {
        font-size: 28px;
    }

    .step-card.featured {
        transform: scale(1);
    }

    .features-section {
        padding: 60px 0;
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
        font-size: 26px;
    }

    .hero-description {
        font-size: 15px;
    }

    .btn-primary-custom,
    .btn-secondary-custom {
        padding: 14px 25px;
        font-size: 14px;
    }

    .section-header h2 {
        font-size: 24px;
    }

    .step-card {
        padding: 40px 20px;
    }

    .step-icon img {
        width: 60px;
        height: 60px;
    }

    .step-card h3 {
        font-size: 20px;
    }

    .feature-box i {
        font-size: 40px;
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