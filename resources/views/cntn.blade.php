<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Contactez-nous - DevApp">
<meta name="author" content="">
<title>Contactez-nous - DevApp</title>
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
<section class="contact-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="font2 hero-title">
                    <span>Contactez</span>-nous
                </h1>
                <p class="font2 hero-subtitle">
                    Nous sommes là pour répondre à toutes vos questions
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/back/bubble4.png') }}" alt="Contact" class="hero-image">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-main-section">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="contact-form-wrapper">
                    <h2 class="font2 form-title">
                        Nous serons heureux de<br>vous contacter
                    </h2>
                    
                    <form method="POST" action="{{ route('send.email') }}" class="contact-form">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name" class="font2">Nom</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom complet" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="font2">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="votre@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="typeservice" class="font2">Type de service</label>
                            <select class="form-control" name="typeservice" id="typeservice" required>
                                <option value="">-- Sélectionnez un service --</option>
                                <option value="Campagnes publicitaires">Campagnes publicitaires</option>
                                <option value="Gestion des réseaux sociaux">Gestion des réseaux sociaux</option>
                                <option value="Construction et conception d'identité de marque">Construction et conception d'identité de marque</option>
                                <option value="Vidéo Marketing">Vidéo Marketing</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message" class="font2">Comment pouvons-nous vous aider ?</label>
                            <textarea name="message" id="message" class="form-control" rows="5" placeholder="Décrivez votre projet..." required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-submit btn-block font2">
                                <i class="fa fa-paper-plane"></i>
                                Envoyer votre message
                            </button>
                        </div>

                        <div class="form-group">
                            <a href="https://wa.me/212664298242" target="_blank" class="btn btn-whatsapp btn-block font2">
                                <i class="fa fa-whatsapp"></i>
                                Contactez-nous via WhatsApp
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-md-6">
                <div class="contact-info-wrapper">
                    <!-- Phone Card -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="font2">Téléphone</h3>
                            <p class="font2">Le service client est ouvert du lundi au samedi de 10h à 18h.</p>
                            <a href="tel:+212664298242" class="info-link font2">(+212) 66666666</a>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="font2">E-mail</h3>
                            <p class="font2">Nous vous répondrons par e-mail en moins de 24 heures.</p>
                            <a href="mailto:contact@adscaling.ma" class="info-link font2">info@yassinebenhamzah.com</a>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="font2">Adresse</h3>
                            <p class="font2">Visitez-nous du lundi au samedi de 10h à 18h.</p>
                            <p class="info-link font2">15 med 5<br>Appartement 4, casablanca<br>casablanca, Maroc</p>
                        </div>
                    </div>
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
.contact-hero-section {
    padding: 150px 0 80px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.hero-title {
    font-size: 56px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 20px;
    line-height: 1.2;
}

.hero-title span {
    color: #ffd700;
}

.hero-subtitle {
    font-size: 20px;
    color: #555;
    margin-bottom: 0;
}

.hero-image {
    max-width: 100%;
    height: auto;
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Contact Main Section */
.contact-main-section {
    padding: 80px 0 100px;
    background: #fff;
}

/* Contact Form */
.contact-form-wrapper {
    background: #fff;
    padding: 50px 40px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.form-title {
    font-size: 32px;
    font-weight: bold;
    color: #1f456c;
    margin-bottom: 40px;
    line-height: 1.3;
}

.contact-form .form-group {
    margin-bottom: 25px;
}

.contact-form label {
    font-size: 15px;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

.contact-form .form-control {
    height: 50px;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    padding: 12px 20px;
    font-size: 15px;
    transition: all 0.3s ease;
}

.contact-form textarea.form-control {
    height: auto;
    resize: vertical;
}

.contact-form .form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.btn-submit {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 16px 30px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 10px;
    border: none;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.btn-submit:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
    color: #fff;
}

.btn-whatsapp {
    background: #25D366;
    color: #fff;
    padding: 16px 30px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 10px;
    border: none;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.btn-whatsapp:hover {
    background: #1fb855;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(37, 211, 102, 0.4);
    color: #fff;
}

/* Contact Info */
.contact-info-wrapper {
    padding-left: 30px;
}

.info-card {
    background: linear-gradient(135deg, #1f456c 0%, #2c5f8d 100%);
    border-radius: 20px;
    padding: 35px 30px;
    margin-bottom: 25px;
    display: flex;
    align-items: flex-start;
    gap: 25px;
    box-shadow: 0 10px 30px rgba(31, 69, 108, 0.2);
    transition: all 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(31, 69, 108, 0.3);
}

.info-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 215, 0, 0.2);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.info-icon i {
    font-size: 28px;
    color: #ffd700;
}

.info-content {
    flex: 1;
}

.info-content h3 {
    font-size: 22px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 10px;
}

.info-content p {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 12px;
    line-height: 1.6;
}

.info-link {
    font-size: 18px;
    font-weight: 600;
    color: #ffd700;
    text-decoration: none;
    transition: color 0.3s ease;
    display: block;
}

.info-link:hover {
    color: #ffed4e;
    text-decoration: none;
}

/* Mobile Responsive */
@media (max-width: 991px) {
    .contact-hero-section {
        padding: 120px 0 60px;
    }

    .hero-title {
        font-size: 46px;
    }

    .contact-info-wrapper {
        padding-left: 0;
        margin-top: 40px;
    }
}

@media (max-width: 767px) {
    .contact-hero-section {
        padding: 100px 0 50px;
        text-align: center;
    }

    .hero-title {
        font-size: 36px;
    }

    .hero-subtitle {
        font-size: 18px;
    }

    .hero-image {
        margin-top: 30px;
        max-width: 80%;
    }

    .contact-main-section {
        padding: 60px 0 80px;
    }

    .contact-form-wrapper {
        padding: 40px 25px;
        margin-bottom: 40px;
    }

    .form-title {
        font-size: 26px;
        text-align: center;
    }

    .info-card {
        padding: 25px 20px;
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .info-icon {
        width: 50px;
        height: 50px;
    }

    .info-icon i {
        font-size: 24px;
    }

    .info-content h3 {
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 28px;
    }

    .hero-subtitle {
        font-size: 16px;
    }

    .contact-form-wrapper {
        padding: 30px 20px;
    }

    .form-title {
        font-size: 22px;
    }

    .contact-form .form-control {
        height: 45px;
        font-size: 14px;
    }

    .btn-submit,
    .btn-whatsapp {
        padding: 14px 25px;
        font-size: 14px;
    }

    .info-content h3 {
        font-size: 18px;
    }

    .info-link {
        font-size: 16px;
    }
}
</style>

</body>
</html>