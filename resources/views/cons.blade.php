<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Construction et conception d'identité de marque">
<meta name="author" content="">
<title>Construction d'identité de marque - DevApp</title>
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
<section class="brand-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-content">
                    <h1 class="font2 hero-title">
                        Construction et conception<br>
                        <span>d'identité de marque</span>
                    </h1>
                    <p class="font2 hero-description">
                        La marque est le nom de l'entreprise qui permet une identification parfaite de votre produit ou service. Qui dit marque dit symbole et qui dit symbole dit professionnalisme de votre firme. La marque est un signe utilisé pour vous distinguer des autres entreprises.
                    </p>
                    <a href="{{ url('/contact') }}" class="btn btn-hero font2">
                        Commencer votre projet
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-image wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="{{ asset('images/back/construction.png') }}" alt="Brand Identity" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->


<!-- Services Section -->
<section class="services-grid-section">
    <div class="container-fluid">
        <div class="row no-gutters">
            <!-- Service 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('images/back/Icons4.png') }}" alt="Packaging">
                    </div>
                    <h3 class="font2">La conception d'emballage de produit</h3>
                    <p class="font2">Création d'emballage attrayant et professionnel pour tous les types de produits.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('images/123/back1.png') }}" alt="Flyers">
                    </div>
                    <h3 class="font2">La conception des dépliants</h3>
                    <p class="font2">Concevoir des dépliants expliquant les objectifs commerciaux du client.</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('images/back/Icons5.png') }}" alt="Logo">
                    </div>
                    <h3 class="font2">La conception d'un logo</h3>
                    <p class="font2">Concevoir un logo distinctif qui contient des concepts liés à l'origine d'activité fournie par le client et qui reflète son identité.</p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('images/123/back4.png') }}" alt="Menus">
                    </div>
                    <h3 class="font2">La conception de menus publicitaires</h3>
                    <p class="font2">Concevoir des papiers officiels, des cartes de visite et des dossiers officiels pour des projets d'entreprise.</p>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('images/123/back2.png') }}" alt="Website">
                    </div>
                    <h3 class="font2">La conception de site Web</h3>
                    <p class="font2">Concevoir et créer un site Web moderne compatible avec les moteurs de recherche et tous les navigateurs.</p>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('images/123/back3.png') }}" alt="Other Services">
                    </div>
                    <h3 class="font2">Autres services</h3>
                    <p class="font2">Fournir des services complets dans la conception et la création d'une identité commerciale et marketing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content text-center">
            <h2 class="font2">Prêt à créer votre identité de marque?</h2>
            <p class="font2">Contactez-nous aujourd'hui et donnons vie à votre vision</p>
            <a href="{{ url('/contact') }}" class="btn btn-cta font2">
                Demander un devis gratuit
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
.brand-hero-section {
    padding: 150px 0 100px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    position: relative;
    overflow: hidden;
}

.hero-content {
    padding: 40px 0;
}

.hero-title {
    font-size: 48px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 30px;
    line-height: 1.3;
}

.hero-title span {
    color: #ffd700;
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

/* Portfolio Section */
.portfolio-section {
    padding: 100px 0;
    background: #fff;
}

.section-header {
    margin-bottom: 60px;
}

.subtitle {
    font-size: 16px;
    color: #777;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
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
    margin: 0 auto;
    border-radius: 2px;
}

.portfolio-grid {
    margin: 0 -15px;
}

.portfolio-item {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    margin-bottom: 30px;
    cursor: pointer;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.portfolio-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.portfolio-item img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.portfolio-item:hover img {
    transform: scale(1.1);
}

.portfolio-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.portfolio-item:hover .portfolio-overlay {
    opacity: 1;
}

.portfolio-info {
    text-align: center;
    color: #fff;
    transform: translateY(20px);
    transition: transform 0.3s ease;
}

.portfolio-item:hover .portfolio-info {
    transform: translateY(0);
}

.portfolio-info h4 {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
}

.portfolio-info p {
    font-size: 14px;
    opacity: 0.9;
}

/* Services Grid Section */
.services-grid-section {
    background: #2b2b2b;
    padding: 0;
}

.service-card {
    padding: 60px 40px;
    text-align: center;
    background: #3f3d3d;
    transition: all 0.3s ease;
    min-height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.service-card:hover {
    background: #4a4848;
    transform: translateY(-5px);
}

.service-icon {
    margin-bottom: 30px;
}

.service-icon img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    filter: brightness(0) invert(1);
    transition: transform 0.3s ease;
}

.service-card:hover .service-icon img {
    transform: scale(1.1);
}

.service-card h3 {
    font-size: 22px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 20px;
    line-height: 1.4;
}

.service-card p {
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
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
    .brand-hero-section {
        padding: 120px 0 80px;
    }

    .hero-title {
        font-size: 38px;
    }

    .section-header h2 {
        font-size: 36px;
    }

    .cta-content h2 {
        font-size: 36px;
    }
}

@media (max-width: 767px) {
    .brand-hero-section {
        padding: 100px 0 60px;
    }

    .hero-title {
        font-size: 32px;
        text-align: center;
    }

    .hero-description {
        font-size: 16px;
        text-align: center;
    }

    .btn-hero {
        width: 100%;
        justify-content: center;
    }

    .hero-image {
        margin-top: 40px;
    }

    .portfolio-section {
        padding: 60px 0;
    }

    .section-header h2 {
        font-size: 28px;
    }

    .portfolio-item {
        margin-bottom: 20px;
    }

    .portfolio-item img {
        height: 250px;
    }

    .service-card {
        padding: 40px 30px;
        min-height: auto;
    }

    .service-card h3 {
        font-size: 20px;
    }

    .service-card p {
        font-size: 14px;
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

    .btn-hero {
        padding: 15px 30px;
        font-size: 14px;
    }

    .section-header h2 {
        font-size: 24px;
    }

    .service-icon img {
        width: 60px;
        height: 60px;
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