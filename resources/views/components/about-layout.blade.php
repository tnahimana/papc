<div class="container-xxl py-5 position-relative">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative">
                    <!-- Main Image with Futuristic Glass Border -->
                    <div class="futuristic-light-card p-2 position-relative shadow-lg overflow-hidden" style="border-radius: 24px;">
                        <img class="w-100 rounded-4" src="img/papc.jpg" alt="PAPC sur le terrain" style="height: 420px; object-fit: cover;">
                        
                        <!-- Floating Secondary Badge Card -->
                        <div class="position-absolute bottom-0 start-0 m-4 p-3 futuristic-glass-card border-0 d-none d-sm-flex align-items-center gap-3" style="background: rgba(4, 9, 17, 0.9); backdrop-filter: blur(14px);">
                            <div class="hud-metric-icon" style="width: 48px; height: 48px; font-size: 1.25rem;">
                                <i class="fa fa-shield-alt"></i>
                            </div>
                            <div>
                                <div class="text-white fw-bold font-monospace small">ORGANISATION AGRÉÉE</div>
                                <div class="text-white-50" style="font-size: 0.75rem;">N° 01/248/CAB/GOUPRO-SK/2012</div>
                            </div>
                        </div>

                        <!-- Floating Stat Tag Top Right -->
                        <div class="position-absolute top-0 end-0 m-3 px-3 py-1 rounded-pill bg-white shadow-sm border font-monospace text-primary fw-bold small">
                            <span class="beacon-dot me-1"></span> DEPUIS 2012
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="h-100">
                    <div class="futuristic-badge">
                        <span class="beacon-dot"></span>
                        <span>À PROPOS DE NOTRE MISSION</span>
                    </div>
                    <h1 class="display-6 mb-4">Pionniers de la Solidarité & du Développement en RDC</h1>
                    
                    <div class="futuristic-light-card p-4 mb-4 border-start border-4 border-primary">
                        <p class="text-dark mb-3 fst-italic">« L'objectif principal de PAPC est de contribuer à la réduction de la pauvreté, à la restauration de la dignité humaine et à l'amélioration des conditions de vie des populations congolaises touchées par les catastrophes naturelles et humaines. »</p>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-2 py-1 font-monospace">FONDATEUR</span>
                            <span class="text-dark fw-bold font-monospace">NDAYISABA</span>
                        </div>
                    </div>

                    <p class="text-muted mb-4">Le siège opérationnel de la PAPC est implanté à <strong>Goma</strong> (Nord-Kivu), avec un bureau de coordination stratégique à <strong>Uvira</strong> (Sud-Kivu). Ce maillage territorial assure un déploiement réactif, traçable et pérenne de nos projets d'urgence et d'émancipation paysanne.</p>
                    
                    <!-- Futuristic Location Chips -->
                    <div class="d-flex flex-wrap gap-2 mb-4 pb-2">
                        <span class="badge bg-light text-dark border p-2 px-3 rounded-pill font-monospace">
                            <i class="fa fa-map-pin text-primary me-2"></i>Siège: Goma (Nord-Kivu)
                        </span>
                        <span class="badge bg-light text-dark border p-2 px-3 rounded-pill font-monospace">
                            <i class="fa fa-map-pin text-info me-2"></i>Coordination: Uvira (Sud-Kivu)
                        </span>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a class="btn-futuristic-primary" href="@if(Illuminate\Support\Str::after(url()->current(), url('/')) == '/about') # @else /about @endif">
                            <span>En Savoir Plus</span>
                            <div class="btn-icon-pill">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-dark rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2 fw-bold" href="/contact">
                            <span>Contactez-nous</span>
                            <i class="fa fa-paper-plane text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
