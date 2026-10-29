@extends('layout.app')

@section('home')
 active
@endsection

@section('section')

    <!-- Futuristic Carousel Start (Crystal Clear Image Showcase) -->
    <div class="container-fluid hero-slider-section position-relative" id="hero-slider-section">
        <div class="cyber-grid-overlay"></div>
        <div class="ambient-orb ambient-orb-orange" style="top: 10%; right: 5%; width: 500px; height: 500px;"></div>
        <div class="ambient-orb ambient-orb-cyan" style="bottom: 10%; left: 5%; width: 450px; height: 450px;"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="7000" data-bs-pause="hover">
                <div class="carousel-inner">
                    
                    <!-- Slide 1: Éducation -->
                    <div class="carousel-item active">
                        <div class="row align-items-center g-4 g-lg-5">
                            <div class="col-lg-5 hero-content-col">
                                <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                                    <div class="futuristic-badge mb-0">
                                        <span class="beacon-dot"></span>
                                        <span>AXE 01 // ÉDUCATION</span>
                                    </div>
                                    <span class="badge bg-dark text-white-50 border border-secondary border-opacity-25 font-monospace px-3 py-1">MINEMBWE</span>
                                </div>

                                <h1 class="display-5 text-white mb-3">Éduquer les Jeunes Pour un <span class="text-gradient-orange">Avenir Radieux</span></h1>
                                
                                <div class="hero-hud-pill mb-3">
                                    <i class="fa fa-graduation-cap text-warning"></i>
                                    <span><strong>Complexe Isoko</strong> : Réussite historique passée de 2% à plus de 88%</span>
                                </div>

                                <p class="text-white-50 fs-6 mb-4">Doter la nouvelle génération de compétences solides et des connaissances nécessaires pour bâtir une société autonome, instruite et pacifiée en République Démocratique du Congo.</p>
                                
                                <div class="hero-btn-group d-flex flex-wrap gap-3">
                                    <a class="btn-futuristic-primary" href="/about">
                                        <span>Notre Vision</span>
                                        <div class="btn-icon-pill"><i class="fa fa-arrow-right"></i></div>
                                    </a>
                                    <a class="btn-futuristic-outline" href="/donate">
                                        <span>Soutenir l'École</span>
                                        <div class="btn-icon-pill"><i class="fa fa-heart"></i></div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="hero-image-showcase">
                                    <img src="img/school.jpg" alt="Éducation Isoko PAPC">
                                    <!-- HUD Corner Brackets -->
                                    <div class="hud-corner-tl"></div>
                                    <div class="hud-corner-tr"></div>
                                    <div class="hud-corner-bl"></div>
                                    <div class="hud-corner-br"></div>

                                    <!-- Telemetry Tags -->
                                    <div class="photo-hud-badge">
                                        <i class="fa fa-map-marker-alt text-primary me-2"></i>Minembwe, Sud-Kivu • Complexe Scolaire Isoko
                                    </div>
                                    <div class="photo-status-indicator">
                                        <span class="beacon-dot" style="background-color: #00F0FF; box-shadow: 0 0 8px #00F0FF;"></span> MISSION ACTIVE
                                    </div>

                                    <!-- Controls integrated on the showcase -->
                                    <button class="carousel-control-prev-futuristic" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Slide Précédent">
                                        <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button class="carousel-control-next-futuristic" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Slide Suivant">
                                        <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Humanité & Cohésion -->
                    <div class="carousel-item">
                        <div class="row align-items-center g-4 g-lg-5">
                            <div class="col-lg-5 hero-content-col">
                                <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                                    <div class="futuristic-badge futuristic-badge-cyan mb-0">
                                        <span class="beacon-dot"></span>
                                        <span>AXE 02 // HUMANITÉ</span>
                                    </div>
                                    <span class="badge bg-dark text-info border border-info border-opacity-25 font-monospace px-3 py-1">SOLIDARITÉ</span>
                                </div>

                                <h1 class="display-5 text-white mb-3">Changer le Monde avec <span class="text-gradient-cyan">l'Humanité</span></h1>

                                <div class="hero-hud-pill mb-3">
                                    <i class="fa fa-hands-helping text-info"></i>
                                    <span><strong>Consolidation de la Paix</strong> : Intégration des réfugiés et autonomisation locale</span>
                                </div>

                                <p class="text-white-50 fs-6 mb-4">Unir nos forces, notre compassion et l'innovation sociale pour transformer les vies et façonner un avenir où progrès et dignité humaine cheminent ensemble.</p>

                                <div class="hero-btn-group d-flex flex-wrap gap-3">
                                    <a class="btn-futuristic-primary" href="/service">
                                        <span>Nos Domaines</span>
                                        <div class="btn-icon-pill"><i class="fa fa-arrow-right"></i></div>
                                    </a>
                                    <a class="btn-futuristic-outline" href="/donate">
                                        <span>Agir Maintenant</span>
                                        <div class="btn-icon-pill"><i class="fa fa-hand-holding-heart"></i></div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="hero-image-showcase">
                                    <img src="img/change.jpg" alt="Transformation Sociale">
                                    <!-- HUD Corner Brackets -->
                                    <div class="hud-corner-tl"></div>
                                    <div class="hud-corner-tr"></div>
                                    <div class="hud-corner-bl"></div>
                                    <div class="hud-corner-br"></div>

                                    <!-- Telemetry Tags -->
                                    <div class="photo-hud-badge">
                                        <i class="fa fa-users text-info me-2"></i>Camps de Réfugiés • Cohésion Sociale Active
                                    </div>
                                    <div class="photo-status-indicator">
                                        <span class="beacon-dot" style="background-color: #00F0FF; box-shadow: 0 0 8px #00F0FF;"></span> COHÉSION COMMIS
                                    </div>

                                    <!-- Controls -->
                                    <button class="carousel-control-prev-futuristic" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Slide Précédent">
                                        <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button class="carousel-control-next-futuristic" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Slide Suivant">
                                        <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Eau Potable -->
                    <div class="carousel-item">
                        <div class="row align-items-center g-4 g-lg-5">
                            <div class="col-lg-5 hero-content-col">
                                <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                                    <div class="futuristic-badge futuristic-badge-cyan mb-0">
                                        <span class="beacon-dot"></span>
                                        <span>AXE 03 // EAU & CLIMAT</span>
                                    </div>
                                    <span class="badge bg-dark text-info border border-info border-opacity-25 font-monospace px-3 py-1">LUSENDA & IDJWI</span>
                                </div>

                                <h1 class="display-5 text-white mb-3">L'Eau Propre Pour une <span class="text-gradient-cyan">Vie Meilleure</span></h1>

                                <div class="hero-hud-pill mb-3">
                                    <i class="fa fa-tint text-info"></i>
                                    <span><strong>31 769 Vies Sécurisées</strong> : 103 forages modernes et 7 réservoirs de 30m³</span>
                                </div>

                                <p class="text-white-50 fs-6 mb-4">Élimination des maladies hydriques et suppression des longues distances de marche grâce à 24 comités locaux formés à la maintenance durable.</p>

                                <div class="hero-btn-group d-flex flex-wrap gap-3">
                                    <a class="btn-futuristic-primary" href="/service">
                                        <span>Nos Réalisations</span>
                                        <div class="btn-icon-pill"><i class="fa fa-arrow-right"></i></div>
                                    </a>
                                    <a class="btn-futuristic-outline" href="/donate">
                                        <span>Offrir de l'Eau</span>
                                        <div class="btn-icon-pill"><i class="fa fa-tint"></i></div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="hero-image-showcase">
                                    <img src="img/water.jpg" alt="Infrastructures Eau Potable">
                                    <!-- HUD Corner Brackets -->
                                    <div class="hud-corner-tl"></div>
                                    <div class="hud-corner-tr"></div>
                                    <div class="hud-corner-bl"></div>
                                    <div class="hud-corner-br"></div>

                                    <!-- Telemetry Tags -->
                                    <div class="photo-hud-badge">
                                        <i class="fa fa-tint text-info me-2"></i>Lusenda & Idjwi • 103 Bornes-Fontaines Actives
                                    </div>
                                    <div class="photo-status-indicator">
                                        <span class="beacon-dot" style="background-color: #00F0FF; box-shadow: 0 0 8px #00F0FF;"></span> RESEAU FONCTIONNEL
                                    </div>

                                    <!-- Controls -->
                                    <button class="carousel-control-prev-futuristic" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Slide Précédent">
                                        <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button class="carousel-control-next-futuristic" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Slide Suivant">
                                        <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Environnement -->
                    <div class="carousel-item">
                        <div class="row align-items-center g-4 g-lg-5">
                            <div class="col-lg-5 hero-content-col">
                                <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                                    <div class="futuristic-badge mb-0">
                                        <span class="beacon-dot"></span>
                                        <span>AXE 04 // AGRO-ÉCOLOGIE</span>
                                    </div>
                                    <span class="badge bg-dark text-success border border-success border-opacity-25 font-monospace px-3 py-1">RÉSILIENCE</span>
                                </div>

                                <h1 class="display-5 text-white mb-3">Protéger Notre <span class="text-gradient-orange">Écosystème</span></h1>

                                <div class="hero-hud-pill mb-3">
                                    <i class="fa fa-seedling text-success"></i>
                                    <span><strong>Sécurité Alimentaire</strong> : Semences maraîchères et terres arables réhabilitées</span>
                                </div>

                                <p class="text-white-50 fs-6 mb-4">Promouvoir une agriculture régénérative et préserver les équilibres naturels pour garantir la subsistance et l'héritage des générations futures.</p>

                                <div class="hero-btn-group d-flex flex-wrap gap-3">
                                    <a class="btn-futuristic-primary" href="/about">
                                        <span>Notre Approche</span>
                                        <div class="btn-icon-pill"><i class="fa fa-arrow-right"></i></div>
                                    </a>
                                    <a class="btn-futuristic-outline" href="/contact">
                                        <span>Rejoindre l'Action</span>
                                        <div class="btn-icon-pill"><i class="fa fa-seedling"></i></div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="hero-image-showcase">
                                    <img src="img/environment.jpg" alt="Préservation Environnementale">
                                    <!-- HUD Corner Brackets -->
                                    <div class="hud-corner-tl"></div>
                                    <div class="hud-corner-tr"></div>
                                    <div class="hud-corner-bl"></div>
                                    <div class="hud-corner-br"></div>

                                    <!-- Telemetry Tags -->
                                    <div class="photo-hud-badge">
                                        <i class="fa fa-seedling text-success me-2"></i>Hauts Plateaux du Kivu • Agro-Écologie
                                    </div>
                                    <div class="photo-status-indicator">
                                        <span class="beacon-dot" style="background-color: #00E676; box-shadow: 0 0 8px #00E676;"></span> DÉVELOPPEMENT VERT
                                    </div>

                                    <!-- Controls -->
                                    <button class="carousel-control-prev-futuristic" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Slide Précédent">
                                        <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button class="carousel-control-next-futuristic" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Slide Suivant">
                                        <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Futuristic Segmented Slide Navigation Bar -->
                <div class="hero-slider-nav">
                    <div class="hero-slider-nav-inner">
                        <div class="slider-nav-tab active" data-slide-index="0">
                            <div class="tab-top">
                                <span class="tab-num">01</span>
                                <span class="tab-title">Éducation</span>
                            </div>
                            <div class="tab-progress-bar"><div class="tab-progress-fill"></div></div>
                        </div>
                        <div class="slider-nav-tab" data-slide-index="1">
                            <div class="tab-top">
                                <span class="tab-num">02</span>
                                <span class="tab-title">Humanité</span>
                            </div>
                            <div class="tab-progress-bar"><div class="tab-progress-fill"></div></div>
                        </div>
                        <div class="slider-nav-tab" data-slide-index="2">
                            <div class="tab-top">
                                <span class="tab-num">03</span>
                                <span class="tab-title">Eau Potable</span>
                            </div>
                            <div class="tab-progress-bar"><div class="tab-progress-fill"></div></div>
                        </div>
                        <div class="slider-nav-tab" data-slide-index="3">
                            <div class="tab-top">
                                <span class="tab-num">04</span>
                                <span class="tab-title">Écosystème</span>
                            </div>
                            <div class="tab-progress-bar"><div class="tab-progress-fill"></div></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Futuristic Carousel End -->

    <!-- Futuristic Live Impact HUD Strip Start -->
    <div class="container hud-metrics-wrapper mb-5 wow fadeInUp" data-wow-delay="0.1s" id="impact-hud">
        <div class="hud-metrics-container">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4 pb-2 border-bottom border-secondary border-opacity-25">
                <div class="d-flex align-items-center gap-2">
                    <span class="beacon-dot"></span>
                    <span class="text-white-50 fw-bold text-uppercase small" style="letter-spacing: 0.1em;">Tableau de Bord d'Impact // Données Terrain Certifiées</span>
                </div>
                <div class="d-none d-md-flex align-items-center gap-2">
                    <span class="badge bg-dark text-info border border-info border-opacity-25 px-3 py-1 font-monospace">STATUS: ACTIF & DÉPLOYÉ</span>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-sm-6">
                    <div class="hud-metric-item">
                        <div class="hud-metric-icon icon-cyan">
                            <i class="fa fa-tint"></i>
                        </div>
                        <div>
                            <div class="hud-metric-val counter-animate" data-target="31769" data-suffix="+">31,769+</div>
                            <p class="hud-metric-label">Accès à l'eau potable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="hud-metric-item">
                        <div class="hud-metric-icon">
                            <i class="fa fa-faucet"></i>
                        </div>
                        <div>
                            <div class="hud-metric-val counter-animate" data-target="103" data-suffix=" Pts">103 Pts</div>
                            <p class="hud-metric-label">Points d'eau & réservoirs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="hud-metric-item">
                        <div class="hud-metric-icon">
                            <i class="fa fa-user-graduate"></i>
                        </div>
                        <div>
                            <div class="hud-metric-val counter-animate" data-target="2500" data-suffix="+">2,500+</div>
                            <p class="hud-metric-label">Élèves scolarisés</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="hud-metric-item">
                        <div class="hud-metric-icon icon-cyan">
                            <i class="fa fa-clinic-medical"></i>
                        </div>
                        <div>
                            <div class="hud-metric-val counter-animate" data-target="24" data-suffix=" Comités">24 Comités</div>
                            <p class="hud-metric-label">Cliniques & comités d'eau</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Futuristic Live Impact HUD Strip End -->


    <!-- About Start -->
        @include('components.about-layout')
    <!-- About End -->


    <!-- Futuristic Causes & Programmes Start -->
    <div class="container-fluid causes-section-futuristic my-5 py-5 position-relative">
        <div class="cyber-grid-overlay"></div>
        <div class="ambient-orb ambient-orb-orange" style="top: 10%; left: -5%; width: 450px; height: 450px;"></div>
        <div class="ambient-orb ambient-orb-cyan" style="bottom: 10%; right: -5%; width: 450px; height: 450px;"></div>

        <div class="container py-4 position-relative" style="z-index: 2;">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 680px;">
                <div class="futuristic-badge">
                    <span class="beacon-dot"></span>
                    <span>PROGRAMMES D'IMPACT STRATÉGIQUE</span>
                </div>
                <h1 class="display-5 text-white mb-3">Des Solutions Concrètes Pour un <span class="text-gradient-orange">Développement Pérenne</span></h1>
                <p class="text-white-50">Nos interventions ciblent les piliers essentiels de l'émancipation communautaire et de la résilience territoriale dans l'Est de la République Démocratique du Congo.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Programme 1: Éducation -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="program-card-futuristic">
                        <div class="program-img-wrapper">
                            <img src="img/courses-1.jpg" alt="Éducation PAPC">
                            <div class="program-img-overlay"></div>
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="program-header-tag">Axe 01 // Éducation</span>
                                <span class="text-white-50 small font-monospace"><i class="fa fa-map-marker-alt text-primary me-1"></i>Minembwe</span>
                            </div>
                            <h4 class="text-white mb-3">Complexe Scolaire Isoko & Avenir des Enfants</h4>
                            <p class="text-white-50 small flex-grow-1">Mis en place en 2005 dans une zone isolée et touchée par les conflits, le complexe scolaire a permis d'inverser le taux de réussite historique de 2% pour offrir une éducation d'excellence aux jeunes générations.</p>
                            
                            <div class="program-progress-hud">
                                <div class="d-flex justify-content-between align-items-center small">
                                    <span class="text-white-50 font-monospace">Taux de réussite examens</span>
                                    <span class="text-warning fw-bold font-monospace">88%</span>
                                </div>
                                <div class="program-progress-bar-wrap">
                                    <div class="program-progress-bar-fill" style="width: 88%;"></div>
                                </div>
                            </div>

                            <a class="btn-futuristic-outline mt-3 w-100 justify-content-between" href="/service">
                                <span>Découvrir le cursus</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Programme 2: Eau & Assainissement -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="program-card-futuristic">
                        <div class="program-img-wrapper">
                            <img src="img/courses-2.jpg" alt="Eau et Assainissement">
                            <div class="program-img-overlay"></div>
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="program-header-tag tag-cyan">Axe 02 // Eau & Climat</span>
                                <span class="text-white-50 small font-monospace"><i class="fa fa-map-marker-alt text-info me-1"></i>Lusenda & Idjwi</span>
                            </div>
                            <h4 class="text-white mb-3">Réseau d'Eau Potable & 103 Bornes-Fontaines</h4>
                            <p class="text-white-50 small flex-grow-1">Construction de 103 points d'eau et 7 grands réservoirs de 30m³, approvisionnant 31 769 personnes et éliminant les maladies d'origine hydrique avec 24 comités de gestion autonomes.</p>
                            
                            <div class="program-progress-hud">
                                <div class="d-flex justify-content-between align-items-center small">
                                    <span class="text-white-50 font-monospace">Bénéficiaires sécurisés</span>
                                    <span class="text-info fw-bold font-monospace">31 769 pers.</span>
                                </div>
                                <div class="program-progress-bar-wrap">
                                    <div class="program-progress-bar-fill bar-cyan" style="width: 95%;"></div>
                                </div>
                            </div>

                            <a class="btn-futuristic-outline mt-3 w-100 justify-content-between" href="/service">
                                <span>Voir les infrastructures</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Programme 3: Santé & Bien-être -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="program-card-futuristic">
                        <div class="program-img-wrapper">
                            <img src="img/courses-3.jpg" alt="Santé et Clinique Mobile">
                            <div class="program-img-overlay"></div>
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="program-header-tag tag-emerald">Axe 03 // Santé Proactive</span>
                                <span class="text-white-50 small font-monospace"><i class="fa fa-map-marker-alt text-success me-1"></i>Rusayo & Kivu</span>
                            </div>
                            <h4 class="text-white mb-3">Clinique Mobile & Soins Médicaux Décentralisés</h4>
                            <p class="text-white-50 small flex-grow-1">Soins curatifs et préventifs, consultations prénatales, accouchements assistés et dépistages. La clinique mobile déployée dans le camp de déplacés de Rusayo protège contre l'insécurité des longs déplacements.</p>
                            
                            <div class="program-progress-hud">
                                <div class="d-flex justify-content-between align-items-center small">
                                    <span class="text-white-50 font-monospace">Couverture médicale</span>
                                    <span class="text-success fw-bold font-monospace">100% Active</span>
                                </div>
                                <div class="program-progress-bar-wrap">
                                    <div class="program-progress-bar-fill bar-emerald" style="width: 100%;"></div>
                                </div>
                            </div>

                            <a class="btn-futuristic-outline mt-3 w-100 justify-content-between" href="/service">
                                <span>Détails des soins</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Futuristic Causes & Programmes End -->


    <!-- Service / Savoir Start -->
        @include('components.savoir-layout')
    <!-- Service / Savoir End -->


    <!-- Donate Start -->
        @include('components.donate-layout')
    <!-- Donate End -->


    <!-- Team Start -->
        @include('components.members-layout')
    <!-- Team End -->


    <!-- Testimonial Start -->
        @include('components.testimony-layout')
    <!-- Testimonial End -->


    <!-- Partners Start -->
        @include('components.partners-layout')
    <!-- Partners End -->

@endsection
