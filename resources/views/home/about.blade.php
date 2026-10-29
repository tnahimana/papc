@extends('layout.app')

@section('about')
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
                <span>HISTORIQUE & VISION STRATÉGIQUE // PAPC EST-RDC</span>
            </div>
            
            <h1 class="display-4 text-white mb-3">Bâtir la Résilience & Restaurer la <span class="text-gradient-orange">Dignité Humaine</span></h1>
            
            <p class="text-white-50 fs-5 mx-auto mb-4" style="max-width: 760px;">
                Fondée en 2012, l'association sans but lucratif Promotion des Actions Paysannes au Congo (PAPC) œuvre au cœur des communautés du Kivu pour transformer les défis humanitaires en leviers d'émancipation durable.
            </p>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-4">
                    <li class="breadcrumb-item"><a class="text-white-50" href="/"><i class="fa fa-home me-1"></i>Accueil</a></li>
                    <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">À propos de nous</li>
                </ol>
            </nav>

            <!-- Quick Telemetry Strip -->
            <div class="d-inline-flex flex-wrap justify-content-center gap-3 p-2 px-3 rounded-pill" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-award text-warning me-1"></i>Agrément N° 01/248/CAB/GOUPRO-SK/2012</span>
                <span class="text-white-50">|</span>
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-map-marker-alt text-info me-1"></i>Goma & Uvira</span>
                <span class="text-white-50">|</span>
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-users text-success me-1"></i>Ancrage Paysan Direct</span>
            </div>
        </div>
    </div>
    <!-- Futuristic Page Header End -->


    <!-- Core Overview Section Start -->
        @include('components.about-layout')
    <!-- Core Overview Section End -->


    <!-- Core Values & Ethical Pillars Start -->
    <div class="container-xxl py-5 position-relative">
        <div class="container py-4">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
                <div class="futuristic-badge">
                    <span class="beacon-dot"></span>
                    <span>ÉTHIQUE & PRINCIPES FONDAMENTAUX</span>
                </div>
                <h1 class="display-6 mb-3">Les 4 Piliers de Notre Engagement</h1>
                <p class="text-muted">Des valeurs inébranlables qui guident chacune de nos décisions et garantissent la neutralité, l'efficacité et l'intégrité de nos actions sur le terrain.</p>
            </div>

            <div class="row g-4">
                <!-- Value 1 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="value-pillar-card">
                        <div class="value-pillar-icon">
                            <i class="fa fa-shield-alt"></i>
                        </div>
                        <h5 class="mb-2">Intégrité & Traçabilité</h5>
                        <p class="text-muted small mb-0">Gestion rigoureuse, audits réguliers et transparence totale envers nos partenaires et bénéficiaires pour chaque dollar engagé.</p>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="value-pillar-card">
                        <div class="value-pillar-icon icon-cyan">
                            <i class="fa fa-hands-helping"></i>
                        </div>
                        <h5 class="mb-2">Co-Décision Paysanne</h5>
                        <p class="text-muted small mb-0">Rien n'est imposé d'en haut : chaque projet naît d'un diagnostic participatif conduit directement avec les comités communautaires.</p>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="value-pillar-card">
                        <div class="value-pillar-icon icon-emerald">
                            <i class="fa fa-dove"></i>
                        </div>
                        <h5 class="mb-2">Neutralité & Paix</h5>
                        <p class="text-muted small mb-0">Assistance impartiale aux populations sans distinction ethnique ou tribale, favorisant la réconciliation et la cohésion sociale.</p>
                    </div>
                </div>

                <!-- Value 4 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="value-pillar-card">
                        <div class="value-pillar-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h5 class="mb-2">Agro-Écologie & Durabilité</h5>
                        <p class="text-muted small mb-0">Préservation des écosystèmes locaux et transmission de techniques régénératives garantissant l'autosuffisance des générations futures.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core Values & Ethical Pillars End -->


    <!-- Chronological Milestones Timeline Start -->
    <div class="container-fluid py-5 position-relative futuristic-section-ambient" style="background: linear-gradient(180deg, #050B14 0%, #071220 50%, #050B14 100%);">
        <div class="cyber-grid-overlay"></div>
        <div class="ambient-orb ambient-orb-orange" style="top: 20%; left: 5%; width: 400px; height: 400px;"></div>
        <div class="ambient-orb ambient-orb-cyan" style="bottom: 10%; right: 5%; width: 400px; height: 400px;"></div>

        <div class="container py-4 position-relative" style="z-index: 2;">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 680px;">
                <div class="futuristic-badge futuristic-badge-cyan">
                    <span class="beacon-dot"></span>
                    <span>TRAJECTOIRE HISTORIQUE D'IMPACT</span>
                </div>
                <h1 class="display-6 text-white mb-3">Notre Évolution : Plus d'une Décennie d'Impact</h1>
                <p class="text-white-50">De la création d'une école dans une zone enclavée jusqu'au déploiement de cliniques mobiles et de réseaux d'eau potable pour plus de 30 000 personnes.</p>
            </div>

            <div class="row g-4">
                <!-- Milestone 1: 2012 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="timeline-card-futuristic">
                        <div class="timeline-year-badge">
                            <i class="fa fa-flag"></i>
                            <span>2012</span>
                        </div>
                        <h5 class="text-white mb-2">Fondation & Agrément Officiel</h5>
                        <p class="text-white-50 small mb-0">Création de l'association PAPC enregistrée sous l'autorisation N° 01/248/CAB/GOUPRO-SK/2012 à Uvira pour répondre aux crises récurrentes.</p>
                    </div>
                </div>

                <!-- Milestone 2: 2015 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="timeline-card-futuristic">
                        <div class="timeline-year-badge badge-cyan">
                            <i class="fa fa-school"></i>
                            <span>2015</span>
                        </div>
                        <h5 class="text-white mb-2">Complexe Isoko & Santé Minembwe</h5>
                        <p class="text-white-50 small mb-0">Ouverture de structures de soins primaires et consolidation du Complexe Scolaire Isoko pour inverser l'échec scolaire dans les hauts plateaux isolés.</p>
                    </div>
                </div>

                <!-- Milestone 3: 2020 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="timeline-card-futuristic">
                        <div class="timeline-year-badge badge-emerald">
                            <i class="fa fa-tint"></i>
                            <span>2020</span>
                        </div>
                        <h5 class="text-white mb-2">103 Bornes & Eau Potable</h5>
                        <p class="text-white-50 small mb-0">Construction de 103 forages et 7 réservoirs de 30m³ à Lusenda et Idjwi, desservant 31 769 réfugiés et créant 24 comités de maintenance autonomes.</p>
                    </div>
                </div>

                <!-- Milestone 4: 2024 - 2030 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="timeline-card-futuristic">
                        <div class="timeline-year-badge">
                            <i class="fa fa-rocket"></i>
                            <span>2024 - 2030</span>
                        </div>
                        <h5 class="text-white mb-2">Clinique Mobile & Vision 2030</h5>
                        <p class="text-white-50 small mb-0">Lancement de la clinique mobile au camp de Rusayo, appui agro-écologique à grande échelle et déploiement de technologies de résilience communautaire.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chronological Milestones Timeline End -->


    <!-- Mission, Vision & Strategic Horizon Nodes Start -->
        @include('components.savoir-layout')
    <!-- Mission, Vision & Strategic Horizon Nodes End -->


    <!-- Leadership & Team Members Start -->
        @include('components.members-layout')
    <!-- Leadership & Team Members End -->


    <!-- Strategic Partners & Funders Start -->
        @include('components.partners-layout')
    <!-- Strategic Partners & Funders End -->

@endsection
