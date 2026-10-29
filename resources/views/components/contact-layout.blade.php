<!-- Contact Section Start -->
<div class="container-xxl py-5 position-relative">
    <div class="container py-4">

        <!-- 3 High-Tech Contact Hub Cards -->
        <div class="row g-4 mb-5 justify-content-center">
            <!-- Hub 1: Adresse -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="contact-hub-card">
                    <div class="contact-hub-icon">
                        <i class="fa fa-map-marked-alt"></i>
                    </div>
                    <span class="badge bg-light text-primary border font-monospace px-2 py-1 mb-2 align-self-start">IMPLANTATION</span>
                    <h5 class="mb-2">Siège & Coordination</h5>
                    <p class="text-muted small mb-3">Siège opérationnel à Goma (Nord-Kivu), bureau administratif à Uvira (Sud-Kivu). Boîte Postale 6700 Bujumbura, Burundi.</p>
                    <div class="mt-auto pt-2 border-top">
                        <span class="text-dark fw-bold font-monospace small"><i class="fa fa-compass text-primary me-2"></i>Est de la RD Congo</span>
                    </div>
                </div>
            </div>

            <!-- Hub 2: Téléphone -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="contact-hub-card">
                    <div class="contact-hub-icon icon-cyan">
                        <i class="fa fa-phone-volume"></i>
                    </div>
                    <span class="badge bg-light text-info border font-monospace px-2 py-1 mb-2 align-self-start">LIGNE DIRECTE</span>
                    <h5 class="mb-2">Ligne d'Urgence & Terrain</h5>
                    <p class="text-muted small mb-3">Joignable par appel et WhatsApp pour le suivi des opérations humanitaires, partenariats et urgences sur le terrain.</p>
                    <div class="mt-auto pt-2 border-top">
                        <a href="tel:+243981477184" class="text-info fw-bold font-monospace text-decoration-none">
                            <i class="fab fa-whatsapp me-2"></i>+243 981 477 184
                        </a>
                    </div>
                </div>
            </div>

            <!-- Hub 3: E-mail -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="contact-hub-card">
                    <div class="contact-hub-icon icon-emerald">
                        <i class="fa fa-envelope-open-text"></i>
                    </div>
                    <span class="badge bg-light text-success border font-monospace px-2 py-1 mb-2 align-self-start">TRANSMISSION</span>
                    <h5 class="mb-2">Correspondance Officielle</h5>
                    <p class="text-muted small mb-3">Échangez avec la direction pour toute demande de documentation, audit de projet ou soumission de dossier d'appui.</p>
                    <div class="mt-auto pt-2 border-top">
                        <a href="mailto:papcjembah@gmail.com" class="text-success fw-bold font-monospace text-decoration-none">
                            <i class="fa fa-at me-2"></i>papcjembah@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Terminal & Map Grid -->
        <div class="row g-5 align-items-stretch">
            
            <!-- Left: Interactive Futuristic Contact Terminal -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="contact-terminal-box">
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                        <div>
                            <h4 class="text-white mb-0 font-monospace">CONSOLE DE MESSAGE</h4>
                            <span class="text-white-50 small">Transmission cryptée directe aux coordinateurs PAPC</span>
                        </div>
                        <span class="badge bg-dark text-info border border-info border-opacity-30 font-monospace px-3 py-1">
                            <span class="beacon-dot me-1" style="background:#00F0FF; box-shadow:0 0 8px #00F0FF;"></span> CANAL SÉCURISÉ
                        </span>
                    </div>

                    <!-- Category Pills -->
                    <label class="text-white-50 small font-monospace text-uppercase mb-2">Objet de votre transmission :</label>
                    <div class="contact-category-tabs">
                        <div class="contact-category-btn active" data-category="Partenariat & Co-Déploiement">Partenariat & ONG</div>
                        <div class="contact-category-btn" data-category="Donation & Mécénat">Donation & Parrainage</div>
                        <div class="contact-category-btn" data-category="Programme Écoles ou Eau Potable">Projets de Terrain</div>
                        <div class="contact-category-btn" data-category="Question Générale">Demande d'Information</div>
                    </div>

                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Merci pour votre message. La cellule opérationnelle PAPC vous répondra sous 24 à 48 heures.');">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="text-white-50 small font-monospace">Votre Nom Complet :</label>
                                <input type="text" class="form-control futuristic-input" id="contact-name" placeholder="Ex: NDAYISABA" required>
                            </div>
                            <div class="col-md-6">
                                <label class="text-white-50 small font-monospace">Votre E-mail :</label>
                                <input type="email" class="form-control futuristic-input" id="contact-email" placeholder="contact@domaine.com" required>
                            </div>
                            <div class="col-12">
                                <label class="text-white-50 small font-monospace">Sujet de la transmission :</label>
                                <input type="text" class="form-control futuristic-input" id="contact-subject" value="Partenariat & Co-Déploiement" placeholder="Précisez votre sujet" required>
                            </div>
                            <div class="col-12">
                                <label class="text-white-50 small font-monospace">Détails de votre message :</label>
                                <textarea class="form-control futuristic-input" id="contact-message" rows="4" placeholder="Décrivez votre projet, question ou proposition de collaboration..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn-futuristic-primary w-100 py-3">
                                    <i class="fa fa-paper-plane"></i>
                                    <span>Transmettre le Message</span>
                                    <div class="btn-icon-pill ms-auto"><i class="fa fa-arrow-right"></i></div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right: Interactive Radar Map Showcase -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="contact-map-card">
                    <!-- HUD Corner Brackets -->
                    <div class="hud-corner-tl"></div>
                    <div class="hud-corner-tr"></div>
                    <div class="hud-corner-bl"></div>
                    <div class="hud-corner-br"></div>

                    <!-- Telemetry Badges -->
                    <div class="map-coords-badge">
                        <span class="beacon-dot me-1" style="background:#00F0FF; box-shadow:0 0 8px #00F0FF;"></span>
                        GEO: -1.6587° S, 29.1669° E
                    </div>

                    <div class="map-location-badge">
                        <i class="fa fa-map-pin text-primary me-2"></i>
                        Siège PAPC • Goma & Kivu (RD Congo)
                    </div>

                    <!-- Clean Google Maps Embed -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63810.34492963385!2d29.16690876403174!3d-1.6586833745839253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dd0f5ff03ccf71%3A0x8702d152f9f905e7!2sGoma%2C%20Democratic%20Republic%20of%20the%20Congo!5e0!3m2!1sen!2srw!4v1751482471438!5m2!1sen!2srw" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Contact Section End -->
