<section id="service" class="backg4">
    <div class="container back33">
        <!-- Heading Section -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading text-center">
                    <h1 class="font2">OUR SERVI<span>CE</span></h1>
                    <div class="line"></div>
                    <p class="font2" style="color: black;">
                        <span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                </div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="row services-row" style="margin-top: 50px;">
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                <div class="service-card">
                    <div class="service-icon">
                        <lottie-player 
                            src="https://assets8.lottiefiles.com/private_files/lf30_7kykunku.json" 
                            background="transparent" 
                            speed="1" 
                            style="width: 80px; height: 80px;" 
                            loop 
                            autoplay>
                        </lottie-player>
                    </div>
                    <div class="service-content">
                        <h5 class="font2">
                            <a href="{{ url('cons') }}">Construction et conception d'identité de marque</a>
                        </h5>
                        <p class="font2">
                            Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                <div class="service-card">
                    <div class="service-icon">
                        <lottie-player 
                            src="https://assets5.lottiefiles.com/packages/lf20_g1YJeb.json" 
                            background="transparent" 
                            speed="1" 
                            style="width: 80px; height: 80px;" 
                            loop 
                            autoplay>
                        </lottie-player>
                    </div>
                    <div class="service-content">
                        <h5 class="font2">
                            <a href="{{ url('pub') }}">Campagnes publicitaires</a>
                        </h5>
                        <p class="font2">
                            Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                <div class="service-card">
                    <div class="service-icon">
                        <lottie-player 
                            src="https://assets8.lottiefiles.com/private_files/lf30_7kykunku.json" 
                            background="transparent" 
                            speed="1" 
                            style="width: 80px; height: 80px;" 
                            loop 
                            autoplay>
                        </lottie-player>
                    </div>
                    <div class="service-content">
                        <h5 class="font2">
                            <a href="{{ url('cons') }}">Gestion des réseaux sociaux</a>
                        </h5>
                        <p class="font2">
                            Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                <div class="service-card">
                    <div class="service-icon">
                        <lottie-player 
                            src="https://assets8.lottiefiles.com/private_files/lf30_7kykunku.json" 
                            background="transparent" 
                            speed="1" 
                            style="width: 80px; height: 80px;" 
                            loop 
                            autoplay>
                        </lottie-player>
                    </div>
                    <div class="service-content">
                        <h5 class="font2">
                            <a href="{{ url('cons') }}">Video Marketing</a>
                        </h5>
                        <p class="font2">
                            Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #service {
        padding: 80px 0;
    }

    .services-row {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 30px;
    }

    .services-row > [class*='col-'] {
        display: flex;
        margin-bottom: 30px;
    }

    .service-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        padding: 35px 25px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        background: rgba(255, 255, 255, 1);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .service-card:hover .service-icon {
        transform: scale(1.1);
    }

    .service-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .service-content h5 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 15px;
        line-height: 1.4;
        min-height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .service-content h5 a {
        color: #1f456c;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .service-content h5 a:hover {
        color: #0d6efd;
    }

    .service-content p {
        color: #555;
        font-size: 14px;
        line-height: 1.7;
        margin: 0;
        flex: 1;
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
        .service-card {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 767px) {
        #service {
            padding: 60px 0;
        }

        .service-content h5 {
            min-height: auto;
            font-size: 16px;
        }

        .service-icon {
            width: 70px;
            height: 70px;
        }
    }
</style>
