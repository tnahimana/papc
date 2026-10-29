<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PAPC - PROMOTIONS DES ACTIONS PAYSANNES AU CONGO </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo-1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Saira:wght@500;600;700&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/futuristic.css') }}" rel="stylesheet">
    <style>
        .gallery-container {
            position: relative;
            overflow: hidden;
            margin: 20px auto;
            max-width: 1200px;
        }
        .gallery-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .gallery-item {
            flex: 0 0 25%;
            padding: 0 10px;
            box-sizing: border-box;
        }
        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .gallery-controls {
            text-align: center;
            margin-top: 15px;
        }
        .gallery-controls button {
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar top-bar-futuristic text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start d-flex align-items-center gap-3">
                <span class="d-inline-flex align-items-center gap-2 text-warning fw-bold"><span class="beacon-dot"></span> PAPC // IMPACT EST-RDC</span>
                <span class="text-white-50">|</span>
                <small><i class="fa fa-map-marker-alt me-2 text-primary"></i>BP 6700 Bujumbura, Burundi</small>
                <small class="ms-3"><i class="fa fa-envelope me-2 text-primary"></i>papcjembah@gmail.com</small>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <small class="me-2 text-white-50">Réseau d'Impact:</small>
                <a class="text-white-50 ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="/" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center">
                {{-- <h1 class="fw-bold text-primary m-0">PAPC<span class="text-white"> Charité</span></h1> --}}
                <img src="{{ asset('img/logo.jpg') }}" height="75" width="220" style="object-fit: contain; border-radius: 8px;" alt="Logo PAPC">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0 align-items-lg-center">
                    <a href="/" class="nav-item nav-link @yield('home')">Accueil</a>
                    <a href="/about" class="nav-item nav-link @yield('about')">À propos de nous</a>
                    <a href="/service" class="nav-item nav-link @yield('service')">Nos Actions</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle @yield('page')" data-bs-toggle="dropdown">Organisation</a>
                        <div class="dropdown-menu m-0 futuristic-glass-card border-0 py-2">
                            <a href="/service" class="dropdown-item py-2"><i class="fa fa-hand-holding-heart text-primary me-2"></i>Nos Domaines</a>
                            <a href="/donate" class="dropdown-item py-2"><i class="fa fa-donate text-primary me-2"></i>Faire un don</a>
                            <a href="/team" class="dropdown-item py-2"><i class="fa fa-users text-primary me-2"></i>Notre équipe</a>
                            <a href="/testimonial" class="dropdown-item py-2"><i class="fa fa-quote-left text-primary me-2"></i>Témoignages</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link @yield('contact')">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-3">
                    <a class="btn-futuristic-primary py-2 px-3" href="/donate">
                        <span>Faire un Don</span>
                        <div class="btn-icon-pill">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('section')

    <!-- Footer Start -->
    <footer class="footer-futuristic position-relative overflow-hidden" style="background: #020710;">
        <!-- Ambient decorations -->
        <div class="cyber-grid-overlay" style="opacity: 0.4;"></div>
        <div class="ambient-orb ambient-orb-orange" style="bottom: -100px; left: -60px; width: 380px; height: 380px; opacity: 0.4;"></div>
        <div class="ambient-orb ambient-orb-cyan"   style="top: -80px; right: -40px; width: 340px; height: 340px; opacity: 0.3;"></div>

        <!-- Top CTA Banner -->
        <div class="footer-cta-strip position-relative" style="z-index: 2; background: linear-gradient(90deg, rgba(255,111,15,0.12) 0%, rgba(0,240,255,0.08) 100%); border-top: 1px solid rgba(255,111,15,0.25); border-bottom: 1px solid rgba(0,240,255,0.15);">
            <div class="container py-4">
                <div class="row align-items-center g-3">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center gap-3">
                            <span class="beacon-dot"></span>
                            <div>
                                <span class="text-white fw-bold fs-5">Ensemble, transformons des vies à l'Est du Congo.</span>
                                <span class="text-white-50 ms-3 d-none d-lg-inline">Chaque geste compte, chaque don s'incarne en impact réel.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="/donate" class="btn-futuristic-primary py-2 px-4 me-2">
                            <span>Faire un Don</span>
                            <div class="btn-icon-pill"><i class="fa fa-heart"></i></div>
                        </a>
                        <a href="/contact" class="btn-futuristic-outline py-2 px-4">
                            <span>Nous Contacter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main footer body -->
        <div class="container py-5 position-relative" style="z-index: 2;">
            <div class="row g-5">

                <!-- Col 1 — Brand -->
                <div class="col-lg-4 col-md-12">
                    <div class="mb-4">
                        <img src="img/logo.jpg" alt="Logo PAPC"
                             style="height: 70px; width: auto; border-radius: 10px; filter: brightness(1.05);">
                    </div>
                    <p class="text-white-50 mb-4" style="line-height: 1.8; max-width: 320px;">
                        Organisation non gouvernementale de développement œuvrant à l'Est de la République Démocratique du Congo — Sud-Kivu &amp; Nord-Kivu.
                    </p>
                    <!-- Social links -->
                    <div class="d-flex gap-2">
                        <a class="footer-social-btn" href="" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="footer-social-btn" href="" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="footer-social-btn" href="" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a class="footer-social-btn" href="" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Col 2 — Coordonnées -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="footer-col-heading mb-4">
                        <span class="footer-heading-accent"></span>Coordonnées
                    </h6>
                    <ul class="list-unstyled footer-contact-list">
                        <li>
                            <i class="fa fa-map-marker-alt" style="color: var(--primary);"></i>
                            <span>BP 6700 Bujumbura, Burundi</span>
                        </li>
                        <li>
                            <i class="fa fa-phone-alt" style="color: var(--f-cyan);"></i>
                            <a href="tel:+243981477184" class="text-white-50 text-decoration-none">+243 981 477 184</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope" style="color: var(--f-emerald);"></i>
                            <a href="mailto:papcjembah@gmail.com" class="text-white-50 text-decoration-none">papcjembah@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3 — Navigation -->
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="footer-col-heading mb-4">
                        <span class="footer-heading-accent"></span>Navigation
                    </h6>
                    <ul class="list-unstyled footer-nav-list">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/about">À propos de nous</a></li>
                        <li><a href="/service">Nos Actions</a></li>
                        <li><a href="/team">Notre Équipe</a></li>
                        <li><a href="/testimonial">Témoignages</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>

                <!-- Col 4 — Newsletter -->
                <div class="col-lg-4 col-md-4">
                    <h6 class="footer-col-heading mb-4">
                        <span class="footer-heading-accent" style="background: var(--f-cyan);"></span>Bulletin d'Information
                    </h6>
                    <p class="text-white-50 small mb-3">
                        Recevez nos mises à jour terrain, rapports d'impact et alertes humanitaires directement dans votre boîte mail.
                    </p>
                    <div class="footer-newsletter-form">
                        <input type="email" class="futuristic-input w-100 mb-2" placeholder="votre@email.com">
                        <button class="btn-futuristic-primary w-100 py-2">
                            <i class="fa fa-paper-plane me-2"></i>
                            <span>S'abonner au Bulletin</span>
                        </button>
                    </div>
                    <div class="d-flex align-items-center gap-2 mt-3 text-white-50 small">
                        <i class="fa fa-lock" style="color: var(--f-emerald);"></i>
                        <span>Vos données sont protégées. Aucun spam.</span>
                    </div>
                </div>

            </div><!-- end row -->

            <!-- Divider -->
            <div class="footer-divider my-4"></div>

            <!-- Bottom bar -->
            <div class="row align-items-center g-3">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-white-50 small font-monospace">
                        &copy; {{ date('Y') }} <a href="/" class="text-warning text-decoration-none fw-bold">PAPC</a>
                        — Tous droits réservés.
                    </span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span class="text-white-50 small">
                        Conçu avec <i class="fa fa-heart text-danger mx-1" style="font-size: 0.75rem;"></i> par
                        <a href="#" class="text-warning text-decoration-none fw-semibold">Harris Tech</a>
                    </span>
                </div>
            </div>

        </div><!-- end container -->
    </footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/futuristic.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    // Sample image data (replace with your actual images)
    const images = [
        "https://images.unsplash.com/photo-1530076886461-ce58ea8abe24?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1720884413532-59289875c3e1?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1709884735626-63e92727d8b6?q=80&w=2428&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://plus.unsplash.com/premium_photo-1661963063875-7f131e02bf75?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1544894079-e81a9eb1da8b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1709884732294-90379fee354c?q=80&w=2428&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://plus.unsplash.com/premium_photo-1682091872078-46c5ed6a006d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1591779051696-1c3fa1469a79?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1721132447246-5d33f3008b05?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://plus.unsplash.com/premium_photo-1661889099855-b44dc39e88c9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    ];

    const slider = document.getElementById("gallerySlider");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let currentIndex = 0;
    let slideInterval;

    // Initialize the slider with images
    function initSlider() {
        slider.innerHTML = "";
        // Display 4 images at a time
        for (let i = 0; i < 4; i++) {
            const imgIndex = (currentIndex + i) % images.length;
            const item = document.createElement("div");
            item.className = "gallery-item";
            item.innerHTML = `<img src="${images[imgIndex]}" alt="PAPC Action Terrain ${imgIndex + 1}">`;
            slider.appendChild(item);
        }
    }

    // Move to next set of images
    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        initSlider();
    }

    // Move to previous set of images
    function prevSlide() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        initSlider();
    }

    // Start auto sliding
    function startSlider() {
        slideInterval = setInterval(nextSlide, 10000); // 10 seconds
    }

    // Event listeners
    nextBtn.addEventListener("click", function () {
        clearInterval(slideInterval);
        nextSlide();
        startSlider();
    });

    prevBtn.addEventListener("click", function () {
        clearInterval(slideInterval);
        prevSlide();
        startSlider();
    });

    // Initialize and start the slider
    initSlider();
    startSlider();
});
    </script>
</body>

</html>
