<!-- Futuristic Donate Section Start -->
<div class="container-fluid py-5 position-relative futuristic-section-ambient" style="background: linear-gradient(180deg, #050B14 0%, #091322 100%);">
    <div class="cyber-grid-overlay"></div>
    <div class="ambient-orb ambient-orb-orange" style="top: 20%; right: 5%; width: 400px; height: 400px;"></div>
    <div class="ambient-orb ambient-orb-cyan" style="bottom: 10%; left: 5%; width: 350px; height: 350px;"></div>

    <div class="container py-4 position-relative" style="z-index: 2;">
        <div class="row g-5 align-items-center">
            <!-- Left Info Column -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="futuristic-badge futuristic-badge-cyan">
                    <span class="beacon-dot"></span>
                    <span>TRANSPARENCE TOTALE & IMPACT CERTIFIÉ</span>
                </div>
                <h1 class="display-6 text-white mb-4">Votre Contribution Transforme des Vies en RDC</h1>
                <p class="text-white-50 mb-4">Chaque geste compte. Que ce soit pour scolariser un enfant isolé à Minembwe, construire une borne-fontaine à Lusenda ou déployer des soins d'urgence à Rusayo, votre générosité s'incarne en résultats concrets et pérennes.</p>
                
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <div class="d-flex align-items-center gap-3 p-3 rounded-3" style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08);">
                            <div class="hud-metric-icon icon-cyan" style="width: 42px; height: 42px; font-size: 1.1rem;">
                                <i class="fa fa-tint"></i>
                            </div>
                            <div>
                                <div class="text-white fw-bold font-monospace small">103 POINTS D'EAU ACTIFS</div>
                                <div class="text-white-50 small">Prévention certifiée du choléra et maladies d'origine hydrique.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center gap-3 p-3 rounded-3" style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08);">
                            <div class="hud-metric-icon" style="width: 42px; height: 42px; font-size: 1.1rem;">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div>
                                <div class="text-white fw-bold font-monospace small">ÉDUCATION ACCESSIBLE</div>
                                <div class="text-white-50 small">Fournitures scolaires, encadrement pédagogique et cantine.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 text-white-50 small">
                    <i class="fa fa-lock text-warning"></i>
                    <span>Transactions sécurisées • Traçabilité 100% terrain assurée par PAPC</span>
                </div>
            </div>

            <!-- Right Interactive Futuristic Console -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="donation-console-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-white mb-0 font-monospace">CONSOLE DE DON SÉCURISÉ</h4>
                        <span class="badge bg-primary bg-opacity-25 text-warning border border-primary border-opacity-50 font-monospace">DIRECT IMPACT</span>
                    </div>

                    <form action="/donate" method="GET">
                        <!-- Quick Amount Selection Pills -->
                        <label class="text-white-50 small font-monospace text-uppercase mb-2">Sélectionnez un montant :</label>
                        <div class="donation-pills-grid">
                            <div class="donation-pill-btn" data-amount="10">$10</div>
                            <div class="donation-pill-btn active" data-amount="25">$25</div>
                            <div class="donation-pill-btn" data-amount="50">$50</div>
                            <div class="donation-pill-btn" data-amount="100">$100</div>
                        </div>

                        <!-- Dynamic Live Impact Hint -->
                        <div class="donation-impact-hint" id="donation-impact-box">
                            <i class="fa fa-info-circle text-info"></i>
                            <span id="donation-impact-text">Votre don de $25 garantit l'accès continu à l'eau potable pour 5 personnes.</span>
                        </div>

                        <!-- Form Fields -->
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="text-white-50 small font-monospace">Montant personnalisé ($ USD) :</label>
                                <input type="number" class="form-control futuristic-input" id="custom-donation-amount" name="amount" value="25" min="1" placeholder="Ex: 50">
                            </div>
                            <div class="col-md-6">
                                <label class="text-white-50 small font-monospace">Votre Nom Complet :</label>
                                <input type="text" class="form-control futuristic-input" id="donor-name" placeholder="Ex: Jean Dupont" required>
                            </div>
                            <div class="col-md-6">
                                <label class="text-white-50 small font-monospace">Votre Adresse E-mail :</label>
                                <input type="email" class="form-control futuristic-input" id="donor-email" placeholder="Ex: contact@email.com" required>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn-futuristic-primary w-100 py-3">
                                    <i class="fa fa-shield-alt"></i>
                                    <span>Confirmer Mon Don Solidaire</span>
                                    <div class="btn-icon-pill ms-auto"><i class="fa fa-arrow-right"></i></div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Futuristic Donate Section End -->
