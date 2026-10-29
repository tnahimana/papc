@extends('layout.app')

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
                <span>CAPITAL HUMAIN & GOUVERNANCE // PAPC EST-RDC</span>
            </div>
            
            <h1 class="display-4 text-white mb-3">Une Équipe Passionnée au Service des <span class="text-gradient-orange">Communautés</span></h1>
            
            <p class="text-white-50 fs-5 mx-auto mb-4" style="max-width: 760px;">
                Agronomes, soignants, ingénieurs hydrauliques, pédagogues et médiateurs : découvrez les femmes et les hommes qui incarnent chaque jour notre mission sur le terrain du Kivu.
            </p>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-4">
                    <li class="breadcrumb-item"><a class="text-white-50" href="/"><i class="fa fa-home me-1"></i>Accueil</a></li>
                    <li class="breadcrumb-item"><span class="text-white-50">Organisation</span></li>
                    <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Notre équipe</li>
                </ol>
            </nav>

            <!-- Quick Telemetry Strip -->
            <div class="d-inline-flex flex-wrap justify-content-center gap-3 p-2 px-3 rounded-pill" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-users text-warning me-1"></i>Équipe Pluridisciplinaire</span>
                <span class="text-white-50">|</span>
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-map-marker-alt text-info me-1"></i>Goma, Uvira & Minembwe</span>
                <span class="text-white-50">|</span>
                <span class="badge bg-transparent text-white font-monospace small"><i class="fa fa-shield-alt text-success me-1"></i>Présence Permanente 24/7</span>
            </div>
        </div>
    </div>
    <!-- Futuristic Page Header End -->


    <!-- Executive Leadership Spotlight Start -->
    <div class="container py-5">
        <div class="team-spotlight-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="position-relative">
                        <div class="hero-image-showcase" style="height: 400px; border-radius: 20px;">
                            <img src="img/team-1.jpg" alt="NDAYISABA - Fondateur & CEO">
                            <!-- HUD Corner Brackets -->
                            <div class="hud-corner-tl"></div>
                            <div class="hud-corner-tr"></div>
                            <div class="hud-corner-bl"></div>
                            <div class="hud-corner-br"></div>
                            <div class="photo-hud-badge">
                                <i class="fa fa-award text-primary me-2"></i>DIRECTION GÉNÉRALE
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="futuristic-badge mb-3">
                        <span class="beacon-dot"></span>
                        <span>DIRECTION STRATÉGIQUE</span>
                    </div>
                    <h2 class="display-6 text-white mb-2">NDAYISABA</h2>
                    <p class="text-primary fw-bold font-monospace mb-4">Fondateur & Directeur Exécutif de PAPC</p>
                    
                    <div class="p-3 rounded-3 mb-4" style="background: rgba(255, 255, 255, 0.05); border-left: 3px solid #FF6F0F;">
                        <p class="text-white-50 fst-italic mb-0 small">
                            « La véritable transformation sociale et la paix durable naissent lorsque nous donnons aux communautés paysannes les moyens de leur propre autonomie : par l'école, l'eau potable, la santé et la terre cultivée avec dignité. »
                        </p>
                    </div>

                    <p class="text-white-50 small mb-4">
                        Pionnier du développement communautaire dans les hauts plateaux de Minembwe et les camps de réfugiés du Sud et Nord-Kivu, NDAYISABA coordonne depuis 2012 l'ensemble des programmes, le dialogue avec les bailleurs internationaux et le respect des normes d'impact sur le terrain.
                    </p>

                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-dark text-info border border-info border-opacity-25 font-monospace px-3 py-2">12+ Années d'Engagement</span>
                        <span class="badge bg-dark text-warning border border-warning border-opacity-25 font-monospace px-3 py-2">31 769+ Vies Impactées</span>
                        <span class="badge bg-dark text-success border border-success border-opacity-25 font-monospace px-3 py-2">103 Forages Déployés</span>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <a class="btn-futuristic-outline py-2 px-3" href="/contact">
                            <i class="fa fa-envelope me-2"></i>Contacter la Direction
                        </a>
                        <div class="d-flex gap-2">
                            <a class="btn btn-sm btn-outline-light rounded-circle" style="width: 38px; height: 38px; display:inline-flex; align-items:center; justify-content:center;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-sm btn-outline-light rounded-circle" style="width: 38px; height: 38px; display:inline-flex; align-items:center; justify-content:center;" href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Executive Leadership Spotlight End -->


    <!-- Multi-Disciplinary Operational Team Grid Start -->
    <div class="container-xxl py-5 position-relative">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
                <div class="futuristic-badge">
                    <span class="beacon-dot"></span>
                    <span>PÔLES OPÉRATIONNELS & TERRAIN</span>
                </div>
                <h1 class="display-6 mb-3">Les Responsables de Nos Pôles d'Action</h1>
                <p class="text-muted">Des compétences techniques éprouvées au service de l'exécution rigoureuse de nos projets au Nord et Sud-Kivu.</p>
            </div>

            <div class="row g-4">
                
                <!-- Member 1: Logistique & Opérations -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-member-card-elevated">
                        <div class="team-photo-wrap">
                            <img src="img/team-2.jpg" alt="Coordination Opérations">
                            <span class="team-role-badge bg-info text-dark">OPÉRATIONS</span>
                        </div>
                        <h5 class="mb-1">Coordination Logistique</h5>
                        <p class="text-primary fw-bold font-monospace small mb-2">Responsable Déploiement & Convois</p>
                        <p class="text-muted small mb-3 flex-grow-1">Supervision de l'acheminement sécurisé des matériels de forage, vivres et intrants vers les zones enclavées de Minembwe et Bibokoboko.</p>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <span class="badge bg-light text-dark border small font-monospace"><i class="fa fa-map-marker-alt text-primary me-1"></i>Sud-Kivu</span>
                            <div class="d-flex gap-2">
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 2: Santé & Clinique Mobile -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-member-card-elevated">
                        <div class="team-photo-wrap">
                            <img src="img/team-3.jpg" alt="Pôle Médical">
                            <span class="team-role-badge bg-success text-white">SANTÉ</span>
                        </div>
                        <h5 class="mb-1">Pôle Médical & Soins</h5>
                        <p class="text-primary fw-bold font-monospace small mb-2">Médecin Coordinateur Clinique Mobile</p>
                        <p class="text-muted small mb-3 flex-grow-1">Direction des campagnes de consultations prénatales, accouchements assistés, dépistage et distribution de kits d'hygiène au camp de Rusayo.</p>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <span class="badge bg-light text-dark border small font-monospace"><i class="fa fa-map-marker-alt text-success me-1"></i>Rusayo & Goma</span>
                            <div class="d-flex gap-2">
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 3: Agro-Écologie -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-member-card-elevated">
                        <div class="team-photo-wrap">
                            <img src="img/team-4.jpg" alt="Pôle Agro-Écologie">
                            <span class="team-role-badge bg-warning text-dark">AGRONOMIE</span>
                        </div>
                        <h5 class="mb-1">Pôle Agro-Écologie</h5>
                        <p class="text-primary fw-bold font-monospace small mb-2">Ingénieur Agronome Principal</p>
                        <p class="text-muted small mb-3 flex-grow-1">Sélection des semences maraîchères adaptées au climat, formation des paysans aux pratiques agro-écologiques et gestion des terres arables.</p>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <span class="badge bg-light text-dark border small font-monospace"><i class="fa fa-map-marker-alt text-warning me-1"></i>Bibokoboko</span>
                            <div class="d-flex gap-2">
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 4: Eau Potable & Forages -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-member-card-elevated">
                        <div class="team-photo-wrap">
                            <img src="img/courses-2.jpg" alt="Ingénierie Eau">
                            <span class="team-role-badge bg-info text-dark">HYDRAULIQUE</span>
                        </div>
                        <h5 class="mb-1">Pôle Eau & Assainissement</h5>
                        <p class="text-primary fw-bold font-monospace small mb-2">Ingénieur Hydraulique de Terrain</p>
                        <p class="text-muted small mb-3 flex-grow-1">Conception et maintenance des 103 bornes-fontaines et 7 réservoirs de 30m³ à Lusenda et Idjwi. Formation des 24 comités d'eau locaux.</p>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <span class="badge bg-light text-dark border small font-monospace"><i class="fa fa-map-marker-alt text-info me-1"></i>Lusenda & Idjwi</span>
                            <div class="d-flex gap-2">
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 5: Éducation & Complexe Isoko -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-member-card-elevated">
                        <div class="team-photo-wrap">
                            <img src="img/school.jpg" alt="Complexe Scolaire Isoko">
                            <span class="team-role-badge bg-primary text-white">ÉDUCATION</span>
                        </div>
                        <h5 class="mb-1">Complexe Scolaire Isoko</h5>
                        <p class="text-primary fw-bold font-monospace small mb-2">Directeur des Études & Pédagogie</p>
                        <p class="text-muted small mb-3 flex-grow-1">Encadrement pédagogique des enseignants, suivi des examens d'État et distribution des fournitures didactiques aux 2 500+ élèves scolarisés.</p>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <span class="badge bg-light text-dark border small font-monospace"><i class="fa fa-map-marker-alt text-primary me-1"></i>Minembwe</span>
                            <div class="d-flex gap-2">
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 6: Autonomisation & Genre -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-member-card-elevated">
                        <div class="team-photo-wrap">
                            <img src="img/women.png" alt="Autonomisation Féminine">
                            <span class="team-role-badge bg-warning text-dark">GENRE & AGR</span>
                        </div>
                        <h5 class="mb-1">Autonomisation Féminine</h5>
                        <p class="text-primary fw-bold font-monospace small mb-2">Responsable Micro-Activités (AGR)</p>
                        <p class="text-muted small mb-3 flex-grow-1">Accompagnement des femmes chefs de ménage, gestion des kits de démarrage de 100$ et animation des cercles de solidarité paysanne.</p>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <span class="badge bg-light text-dark border small font-monospace"><i class="fa fa-map-marker-alt text-warning me-1"></i>Uvira & Masisi</span>
                            <div class="d-flex gap-2">
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Multi-Disciplinary Operational Team Grid End -->


    <!-- Volunteer / Mobilization Banner Start -->
    <div class="container py-5">
        <div class="service-cta-banner wow fadeInUp" data-wow-delay="0.1s">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <div class="futuristic-badge mb-3">
                        <span class="beacon-dot"></span>
                        <span>APPEL AUX TALENTS & BÉNÉVOLAT</span>
                    </div>
                    <h2 class="display-6 text-white mb-3">Envie de Mettre Vos Compétences au Service du Terrain ?</h2>
                    <p class="text-white-50 mb-0">Que vous soyez ingénieur, professionnel de santé, expert en développement rural ou agronome, PAPC accueille les compétences engagées pour co-bâtir un avenir résilient en RD Congo.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn-futuristic-primary py-3 px-4 w-100 justify-content-center" href="/contact">
                        <span>Rejoindre la Mission</span>
                        <div class="btn-icon-pill"><i class="fa fa-paper-plane"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer / Mobilization Banner End -->


    <!-- Strategic Partners Start -->
        @include('components.partners-layout')
    <!-- Strategic Partners End -->

@endsection
