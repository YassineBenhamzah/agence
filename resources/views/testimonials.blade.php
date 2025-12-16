<section id="testimonials" class="parallex">
    <div class="testi-overlay"></div>
    
    <div class="container">
        <div class="testi-content">
            <!-- Quote Icon -->
            <div class="quote-icon">
                <i class="fa fa-quote-left"></i>
            </div>

            <!-- Testimonial Slider -->
            <div id="owl-testi" class="owl-carousel owl-theme">
                <!-- Testimonial 1 -->
                <div class="item">
                    <div class="testi-box">
                        <img src="{{ asset('images/slider/03.jpg') }}" class="img-circle" alt="Sarah Martinez">
                        <p class="font2">
                            "Working with this team transformed our business. Their creativity and dedication exceeded all expectations. Highly recommended!"
                        </p>
                        <h5 class="font2">Sarah Martinez</h5>
                        <span>CEO, TechVision Inc.</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="item">
                    <div class="testi-box">
                        <img src="{{ asset('images/slider/03.jpg') }}" class="img-circle" alt="David Chen">
                        <p class="font2">
                            "Exceptional expertise and attention to detail. They brought our vision to life perfectly. Outstanding results!"
                        </p>
                        <h5 class="font2">David Chen</h5>
                        <span>Marketing Director</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="item">
                    <div class="testi-box">
                        <img src="{{ asset('images/slider/03.jpg') }}" class="img-circle" alt="Emma Johnson">
                        <p class="font2">
                            "Professional, innovative, and results-driven. Our brand has never looked better. Great team to work with!"
                        </p>
                        <h5 class="font2">Emma Johnson</h5>
                        <span>Founder, Creative Studios</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #testimonials {
        padding: 100px 0 120px;
        position: relative;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 600px;
    }

    .testi-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(31, 69, 108, 0.85);
        z-index: 1;
    }

    #testimonials .container {
        position: relative;
        z-index: 2;
    }

    .testi-content {
        max-width: 900px;
        margin: 0 auto;
    }

    .quote-icon {
        text-align: center;
        margin-bottom: 50px;
    }

    .quote-icon i {
        font-size: 50px;
        color: rgba(255, 255, 255, 0.3);
    }

    .testi-box {
        text-align: center;
        padding: 30px 20px 50px;
    }

    .testi-box img {
        width: 100px;
        height: 100px;
        border: 4px solid rgba(255, 255, 255, 0.3);
        margin: 0 auto 30px;
        display: block;
        object-fit: cover;
    }

    .testi-box p {
        font-size: 18px;
        line-height: 1.8;
        font-style: italic;
        color: #fff;
        margin: 0 auto 30px;
        max-width: 700px;
        padding: 0 20px;
    }

    .testi-box h5 {
        font-size: 24px;
        font-weight: bold;
        color: #fff;
        margin: 20px 0 8px;
    }

    .testi-box span {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
        text-transform: uppercase;
        letter-spacing: 1px;
        display: block;
    }

    /* Owl Dots */
    #owl-testi .owl-dots {
        text-align: center;
        margin-top: 40px;
        padding-bottom: 20px;
    }

    #owl-testi .owl-dot {
        display: inline-block;
        margin: 0 5px;
    }

    #owl-testi .owl-dot span {
        width: 10px;
        height: 10px;
        background: rgba(255, 255, 255, 0.4);
        display: block;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    #owl-testi .owl-dot.active span,
    #owl-testi .owl-dot:hover span {
        background: #ffd700;
        width: 25px;
        border-radius: 5px;
    }

    /* Mobile */
    @media (max-width: 767px) {
        #testimonials {
            padding: 60px 0 80px;
            background-attachment: scroll;
            min-height: 500px;
        }

        .quote-icon {
            margin-bottom: 30px;
        }

        .quote-icon i {
            font-size: 35px;
        }

        .testi-box {
            padding: 20px 15px 40px;
        }

        .testi-box img {
            width: 80px;
            height: 80px;
            border-width: 3px;
            margin-bottom: 20px;
        }

        .testi-box p {
            font-size: 15px;
            line-height: 1.6;
            padding: 0 10px;
            margin-bottom: 20px;
        }

        .testi-box h5 {
            font-size: 19px;
            margin: 15px 0 6px;
        }

        .testi-box span {
            font-size: 12px;
        }

        #owl-testi .owl-dots {
            margin-top: 30px;
            padding-bottom: 15px;
        }
    }
</style>

<script>
$(document).ready(function(){
    $("#owl-testi").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: false,
        dots: true,
        smartSpeed: 600,
        autoHeight: false
    });
});
</script>