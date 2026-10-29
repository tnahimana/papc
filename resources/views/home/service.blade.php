@extends('layout.app')

@section('service')
 active
@endsection

@section('page')
 active
@endsection

@section('section')

    <!-- Futuristic Page Header Start -->
    <div class="container-fluid page-header-futuristic position-relative">
        <div class="cyber-grid-overlay"></div>
        <div class="ambient-orb ambient-orb-orange" style="top: 10%; right: 10%; width: 450px; height: 450px;"></div>
        <div class="ambient-orb ambient-orb-cyan" style="bottom: 10%; left: 5%; width: 400px; height: 400px;"></div>

        <div class="container text-center position-relative" style="z-index: 2;">
            <div class="futuristic-badge mb-3">
                <span class="beacon-dot"></span>
                <span>PÔLES D'INTERVENTION // PAPC EST-RDC</span>
            </div>
            
            <h1 class="display-4 text-white mb-3">Nos Services & <span class="text-gradient-orange">Programmes d'Impact</span></h1>
            
            <p class="text-white-50 fs-5 mx-auto mb-4" style="max-width: 720px;">
                Des réponses coordonnées, durables et scientifiquement encadrées pour l'éducation, l'accès à l'eau potable, la santé de proximité et l'autonomie agricole en République Démocratique du Congo.
            </p>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-4">
                    <li class="breadcrumb-item"><a class="text-white-50" href="/"><i class="fa fa-home me-1"></i>Accueil</a></li>
                    <li class="breadcrumb-item"><span class="text-white-50">Organisation</span></li>
                    <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Nos Services</li>
                </ol>
            </nav>

            <!-- Quick Telemetry Strip -->
            <div class="d-inline-flex flex-wrap justify-content-center gap-3 p-2 px-3 rounded-pill" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-check text-warning me-1"></i>6 Pôles Actifs</span>
                <span class="text-white-50">|</span>
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-map-marker-alt text-info me-1"></i>Nord & Sud-Kivu</span>
                <span class="text-white-50">|</span>
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-shield-alt text-success me-1"></i>Gouvernance Transparente</span>
            </div>
        </div>
    </div>
    <!-- Futuristic Page Header End -->


    <!-- 6 Strategic Service Modules Start -->
        @include('components.service-layout')
    <!-- 6 Strategic Service Modules End -->


    <!-- 4-Phase Operational Methodology Pipeline Start -->
    <div class="container-fluid py-5 position-relative futuristic-section-ambient" style="background: linear-gradient(180deg, #050B14 0%, #071220 50%, #050B14 100%);">
        <div class="cyber-grid-overlay"></div>
        <div class="ambient-orb ambient-orb-cyan" style="top: 20%; right: 10%; width: 400px; height: 400px;"></div>

        <div class="container py-4 position-relative" style="z-index: 2;">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
                <div class="futuristic-badge futuristic-badge-cyan">
                    <span class="beacon-dot"></span>
                    <span>MÉTHODOLOGIE OPÉRATIONNELLE</span>
                </div>
                <h1 class="display-6 text-white mb-3">Le Cycle d'Action PAPC : De l'Urgence à l'Autonomie</h1>
                <p class="text-white-50">Un protocole rigoureux en 4 étapes garantissant que chaque projet devienne la propriété durable des communautés bénéficiaires.</p>
            </div>

            <div class="row g-4">
                <!-- Step 01 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="pipeline-step-card">
                        <span class="pipeline-step-num">01</span>
                        <div class="hud-metric-icon mb-3" style="width: 48px; height: 48px; font-size: 1.2rem;">
                            <i class="fa fa-search-location"></i>
                        </div>
                        <h5 class="text-white mb-2">Cartographie & Diagnostic</h5>
                        <p class="text-white-50 small mb-0">Évaluation participative avec les populations locales des besoins vitaux (eau, santé, éducation) et analyse des contraintes sécuritaires et logistiques.</p>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="pipeline-step-card">
                        <span class="pipeline-step-num">02</span>
                        <div class="hud-metric-icon icon-cyan mb-3" style="width: 48px; height: 48px; font-size: 1.2rem;">
                            <i class="fa fa-users-cog"></i>
                        </div>
                        <h5 class="text-white mb-2">Co-Conception & Comités</h5>
                        <p class="text-white-50 small mb-0">Création et formation des comités mixtes de gestion communautaire (comités d'eau, coopératives agricoles, associations de parents d'élèves).</p>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="pipeline-step-card">
                        <span class="pipeline-step-num">03</span>
                        <div class="hud-metric-icon mb-3" style="width: 48px; height: 48px; font-size: 1.2rem;">
                            <i class="fa fa-hammer"></i>
                        </div>
                        <h5 class="text-white mb-2">Déploiement Technique</h5>
                        <p class="text-white-50 small mb-0">Construction d'infrastructures résilientes (forages, adductions, classes, cliniques mobiles) avec des matériaux pérennes et suivi d'ingénierie certifié.</p>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pipeline-step-card">
                        <span class="pipeline-step-num">04</span>
                        <div class="hud-metric-icon icon-cyan mb-3" style="width: 48px; height: 48px; font-size: 1.2rem;">
                            <i class="fa fa-seedling"></i>
                        </div>
                        <h5 class="text-white mb-2">Autonomie & Pérennité</h5>
                        <p class="text-white-50 small mb-0">Transfert de gestion aux comités locaux formés à la maintenance, audits réguliers et pérennisation des acquis sans dépendance externe continue.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4-Phase Operational Methodology Pipeline End -->


    <!-- Service Call-To-Action Banner Start -->
    <div class="container py-5">
        <div class="service-cta-banner wow fadeInUp" data-wow-delay="0.1s">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <div class="futuristic-badge mb-3">
                        <span class="beacon-dot"></span>
                        <span>CO-DÉPLOYER OU FINANCER UN PROJET</span>
                    </div>
                    <h2 class="display-6 text-white mb-3">Vous Souhaitez Soutenir un de Nos Pôles d'Action ?</h2>
                    <p class="text-white-50 mb-0">Que vous soyez une agence internationale, une fondation, une entreprise ou un donateur individuel, votre engagement trouve ici un canal d'exécution directe, transparent et mesurable.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3 justify-content-lg-end">
                        <a class="btn-futuristic-primary w-100 justify-content-center" href="/donate">
                            <span>Financer un Programme</span>
                            <div class="btn-icon-pill"><i class="fa fa-heart"></i></div>
                        </a>
                        <a class="btn-futuristic-outline w-100 justify-content-center" href="/contact">
                            <span>Devenir Partenaire</span>
                            <div class="btn-icon-pill"><i class="fa fa-handshake"></i></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Call-To-Action Banner End -->


    <!-- Strategic Partners Start -->
        @include('components.partners-layout')
    <!-- Strategic Partners End -->

@endsection
