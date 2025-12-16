<section id="about" class="backg7">
    <div class="container">
        <!-- Heading Section -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading text-center" style="margin-top: 150px;">
                    <h1 class="font2">ABOUT <span>US</span></h1>
                    <div class="line"></div>
                    <h5 class="font2">
                        <span><strong>N</strong></span>ous sommes une équipe de concepteurs, de développeurs, de responsables de données,
                        de spécialistes du marketing et d'individus talentueux.
                        Notre grand souci est le travail que nous créons et que nous nous amusons à faire.
                    </h5>
                </div>
            </div>
        </div>

        <!-- Features Cards Section -->
        <div class="row row-equal-height" style="margin-top: 75px; margin-bottom: 75px; display: flex; flex-wrap: wrap;">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="icon-wrapper">
                        <img src="{{ asset('images/back/1.png') }}" alt="Service après-vente" width="120" class="img-responsive">
                    </div>
                    <h3 class="font2">Service après-vente</h3>
                    <p class="font2">
                        Les services après-vente qui permettent au client de modifier les services pour atteindre le but qu'il souhaite.
                    </p>
                </div>
            </div>
            <!-- Card 3 - Featured -->
            <div class="col-md-4">
                <div class="feature-card featured text-center">
                    <div class="icon-wrapper">
                        <img src="{{ asset('images/back/2.png') }}" alt="Grande vitesse" width="150" class="img-responsive">
                    </div>
                    <h3 class="font2">Grande vitesse</h3>
                    <p class="font2">
                        Très court délai dans la fourniture de services, vous permettant d'intégrer les marchés au bon timing.
                    </p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="icon-wrapper">
                        <img src="{{ asset('images/back/3.png') }}" alt="Support Technique" width="100" class="img-responsive">
                    </div>
                    <h3 class="font2">Support Technique</h3>
                    <p class="font2">
                        Une équipe d'assistance technique est disponible 24 h/24, prête à répondre aux questions et demandes de renseignements de manière continue.
                    </p>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<style>
    .row-equal-height {
        display: flex;
        flex-wrap: wrap;
    }

    .row-equal-height > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }

    .feature-card {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        padding: 30px 20px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        flex: 1;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .feature-card.featured {
        background-color: rgba(244, 234, 234, 0.95);
        border: 3px solid #1f456c;
        transform: translateY(-15px);
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .feature-card.featured:hover {
        transform: translateY(-20px);
        box-shadow: 0 12px 35px rgba(31, 69, 108, 0.3);
    }

    .icon-wrapper {
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .icon-wrapper img {
        transition: transform 0.3s ease;
        max-width: 100%;
        height: auto;
    }

    .feature-card:hover .icon-wrapper img {
        transform: scale(1.1);
    }

    .feature-card h3 {
        font-weight: bold;
        font-size: 22px;
        color: #1f456c;
        margin-bottom: 15px;
    }

    .feature-card p {
        color: #555;
        font-size: 15px;
        line-height: 1.8;
        flex: 1;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .row-equal-height {
            display: block;
        }

        .feature-card {
            margin-bottom: 30px;
        }

        .feature-card.featured {
            transform: translateY(0);
        }

        .heading {
            margin-top: 80px !important;
        }

        .row:last-child {
            margin-top: 40px !important;
        }
    }
</style>