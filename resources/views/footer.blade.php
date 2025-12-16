<footer id="footer">
    <div class="footer-main">
        <div class="container">

            <!-- Social Media Section -->
            <div class="social-section text-center">
                <a href="#" class="social-link" aria-label="Instagram">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#" class="social-link" aria-label="Facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="social-link" aria-label="LinkedIn">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="#" class="social-link" aria-label="YouTube">
                    <i class="fa fa-youtube"></i>
                </a>
            </div>

            <!-- Footer Content -->
            <div class="row footer-content">
                <!-- About Column -->
                <div class="col-lg-4 col-md-6 footer-col">
                    <div class="footer-logo">
                        <span class="logo-yassine">Yassine</span><span class="logo-dev">dev</span>
                    </div>
                    <p class="footer-description">
                        Notre réputation et la qualité de notre travail sont notre unique capital. Alors soyez
                        totalement confiants, vous êtes entre de bonnes mains. Nous espérons coopérer avec vous dès que
                        possible.
                    </p>
                </div>

                <!-- Services Column -->
                <div class="col-lg-2 col-md-6 footer-col">
                    <h4 class="footer-heading">Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/cons') }}">Construction d'identité</a></li>
                        <li><a href="{{ url('/pub') }}">Campagnes publicitaires</a></li>
                        <li><a href="{{ url('/vd') }}">Vidéos marketing</a></li>
                        <li><a href="{{ url('/réseau') }}">Gestion réseaux sociaux</a></li>
                    </ul>
                </div>

                <!-- About Us Column -->
                <div class="col-lg-3 col-md-6 footer-col">
                    <h4 class="footer-heading">À propos</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Qui sommes-nous</a></li>
                        <li><a href="{{ url('/') }}#team">Notre équipe</a></li>
                        <li><a href="{{ url('/') }}#testimonials">Témoignages</a></li>
                        <li><a href="{{ url('/') }}#portfolio">Portfolio</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="col-lg-3 col-md-6 footer-col">
                    <h4 class="footer-heading">Contact</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/cntn') }}">Contactez-nous</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Conditions d'utilisation</a></li>
                        <li><a href="#">Support client</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <p class="copyright-text">
                        <i class="fa fa-copyright"></i> 2025 Yassinedev. Tous droits réservés.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="developer-credit">
                        Conçu par <a href="https://yassinebenhamzah.com">yassine</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    #footer {
        background: linear-gradient(135deg, #1f456c 0%, #2c5f8d 100%);
        color: #fff;
        margin-top: 80px;
    }

    /* Social Media Section */
    .social-section {
        padding: 50px 0 40px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .social-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: #fff;
        font-size: 22px;
        margin: 0 10px;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background: #ffd700;
        color: #1f456c;
        transform: translateY(-5px);
        text-decoration: none;
    }

    /* Footer Content */
    .footer-content {
        padding: 60px 0 40px;
    }

    .footer-col {
        margin-bottom: 30px;
    }

    .footer-logo {
        margin-bottom: 20px;
        font-size: 32px;
        font-weight: bold;
    }

    .logo-yassine {
        color: #fff;
    }

    .logo-dev {
        color: #00ff88;
        /* Bright green */
    }

    .footer-logo img {
        max-width: 250px;
        height: auto;
    }

    .footer-description {
        font-size: 15px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
    }

    .footer-heading {
        font-size: 20px;
        font-weight: bold;
        color: #fff;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-heading::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 3px;
        background: #ffd700;
        border-radius: 2px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        font-size: 15px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-links a:hover {
        color: #ffd700;
        padding-left: 5px;
    }

    /* Footer Bottom */
    .footer-bottom {
        background: rgba(0, 0, 0, 0.2);
        padding: 25px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .copyright-text,
    .developer-credit {
        margin: 0;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
    }

    .developer-credit a {
        color: #ffd700;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .developer-credit a:hover {
        color: #fff;
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
        .footer-content {
            padding: 40px 0 20px;
        }

        .footer-logo img {
            max-width: 200px;
        }

        .footer-heading {
            font-size: 18px;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 767px) {
        #footer {
            margin-top: 50px;
        }

        .social-section {
            padding: 40px 0 30px;
        }

        .social-link {
            width: 45px;
            height: 45px;
            font-size: 20px;
            margin: 0 8px;
        }

        .footer-content {
            padding: 30px 0 20px;
        }

        .footer-col {
            text-align: center;
            margin-bottom: 40px;
        }

        .footer-logo {
            margin-bottom: 15px;
        }

        .footer-logo img {
            max-width: 180px;
        }

        .footer-description {
            font-size: 14px;
            padding: 0 15px;
        }

        .footer-heading {
            font-size: 17px;
        }

        .footer-heading::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-links a {
            font-size: 14px;
        }

        .footer-bottom {
            padding: 20px 0;
        }

        .footer-bottom .col-md-6 {
            text-align: center !important;
            margin-bottom: 10px;
        }

        .footer-bottom .col-md-6:last-child {
            margin-bottom: 0;
        }

        .copyright-text,
        .developer-credit {
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .social-link {
            width: 40px;
            height: 40px;
            font-size: 18px;
            margin: 0 6px;
        }

        .footer-logo img {
            max-width: 150px;
        }

        .footer-description {
            font-size: 13px;
        }
    }
</style>
