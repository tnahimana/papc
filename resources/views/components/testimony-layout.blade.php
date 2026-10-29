{{-- =========================================================
     TESTIMONIAL SECTION — Futuristic Dark Slider
========================================================== --}}
<div class="container-fluid position-relative py-5 futuristic-section-ambient"
     style="background: linear-gradient(180deg, #040911 0%, #071018 60%, #040911 100%);">
    <div class="cyber-grid-overlay"></div>
    <div class="ambient-orb ambient-orb-orange" style="top: 10%; left: 3%; width: 380px; height: 380px;"></div>
    <div class="ambient-orb ambient-orb-cyan"   style="bottom: 5%; right: 3%; width: 340px; height: 340px;"></div>

    <div class="container py-4 position-relative" style="z-index: 2;">

        {{-- Section heading --}}
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 660px;">
            <div class="futuristic-badge mb-3">
                <span class="beacon-dot"></span>
                <span>VOIX DU TERRAIN // IMPACT VÉCU</span>
            </div>
            <h2 class="display-5 text-white fw-bold mb-3">
                Ce Que Témoignent Nos<br>
                <span style="color: var(--primary);">Bénéficiaires Directs</span>
            </h2>
            <p class="text-white-50">
                Des vies transformées par l'accès à l'eau potable, à la terre cultivable et aux soins de santé de proximité.
            </p>
        </div>

        {{-- ── Stats strip ─────────────────────────────────────── --}}
        <div class="row g-3 justify-content-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-4 col-md-auto">
                <div class="text-center px-4 py-3 rounded-3" style="background: rgba(255,111,15,0.08); border: 1px solid rgba(255,111,15,0.2);">
                    <div class="fw-bold font-monospace fs-4" style="color: var(--primary);" data-counter="17000">0</div>
                    <div class="text-white-50 small font-monospace" style="font-size: 0.7rem;">BÉNÉFICIAIRES</div>
                </div>
            </div>
            <div class="col-4 col-md-auto">
                <div class="text-center px-4 py-3 rounded-3" style="background: rgba(0,240,255,0.08); border: 1px solid rgba(0,240,255,0.2);">
                    <div class="fw-bold font-monospace fs-4" style="color: var(--f-cyan);" data-counter="47">0</div>
                    <div class="text-white-50 small font-monospace" style="font-size: 0.7rem;">COMMUNAUTÉS</div>
                </div>
            </div>
            <div class="col-4 col-md-auto">
                <div class="text-center px-4 py-3 rounded-3" style="background: rgba(0,230,118,0.08); border: 1px solid rgba(0,230,118,0.2);">
                    <div class="fw-bold font-monospace fs-4" style="color: var(--f-emerald);" data-counter="12">0</div>
                    <div class="text-white-50 small font-monospace" style="font-size: 0.7rem;">ANS D'ACTION</div>
                </div>
            </div>
        </div>

        {{-- ── Testimonial Slider ───────────────────────────────── --}}
        <div class="testimony-slider-wrapper position-relative wow fadeInUp" data-wow-delay="0.3s">

            {{-- Owl Carousel --}}
            <div class="owl-carousel testimony-owl-carousel">

                {{-- Slide 1 --}}
                <div class="testimonial-card-futuristic mx-2">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="testimonial-avatar" style="border-color: var(--primary); box-shadow: 0 0 20px rgba(255,111,15,0.3);">
                            <img src="img/refugee-1.jpeg" alt="Nijimbere Nestor">
                            <span class="testimonial-verified-badge"><i class="fa fa-check"></i></span>
                        </div>
                        <div>
                            <h6 class="text-white mb-0 fw-bold">Nijimbere Nestor</h6>
                            <span class="testimonial-category-tag" style="color: var(--primary); border-color: rgba(255,111,15,0.4); background: rgba(255,111,15,0.1);">
                                Bénéficiaire Agricole • Réfugié
                            </span>
                        </div>
                    </div>
                    <div class="testimonial-stars mb-3">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon mb-2"><i class="fa fa-quote-left"></i></div>
                    <p class="text-white-50 fst-italic mb-0" style="line-height: 1.75;">
                        J'ai bénéficié de la part de PAPC d'intrants agricoles et outils aratoires, ainsi que de semences maraîchères (chou, oignon, amarante, aubergine). Un champ de 12 ares m'a également été alloué pour cultiver et subvenir dignement aux besoins de mes proches.
                    </p>
                    <div class="testimonial-card-rule mt-4"></div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <span class="font-monospace text-white-50" style="font-size: 0.7rem;">IMPACT VÉRIFIÉ</span>
                        <i class="fa fa-shield-alt" style="color: var(--f-emerald); font-size: 0.85rem;"></i>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="testimonial-card-futuristic mx-2" style="border-color: rgba(0,240,255,0.2);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="testimonial-avatar" style="border-color: var(--f-cyan); box-shadow: 0 0 20px rgba(0,240,255,0.3);">
                            <img src="img/refugee-2.png" alt="Mayabo Simon">
                            <span class="testimonial-verified-badge"><i class="fa fa-check"></i></span>
                        </div>
                        <div>
                            <h6 class="text-white mb-0 fw-bold">Mayabo Simon</h6>
                            <span class="testimonial-category-tag" style="color: var(--f-cyan); border-color: rgba(0,240,255,0.4); background: rgba(0,240,255,0.1);">
                                Bénéficiaire Maraîcher
                            </span>
                        </div>
                    </div>
                    <div class="testimonial-stars mb-3" style="color: var(--f-cyan);">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon mb-2" style="color: var(--f-cyan);"><i class="fa fa-quote-left"></i></div>
                    <p class="text-white-50 fst-italic mb-0" style="line-height: 1.75;">
                        Je remercie sincèrement PAPC pour l'appui en semences maraîchères de qualité et pour la prise en charge de la location d'une terre arable. Cela a redonné de l'espoir et un revenu stable à notre foyer.
                    </p>
                    <div class="testimonial-card-rule mt-4" style="background: linear-gradient(90deg, var(--f-cyan), transparent);"></div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <span class="font-monospace text-white-50" style="font-size: 0.7rem;">IMPACT VÉRIFIÉ</span>
                        <i class="fa fa-shield-alt" style="color: var(--f-emerald); font-size: 0.85rem;"></i>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="testimonial-card-futuristic mx-2" style="border-color: rgba(0,230,118,0.2);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="testimonial-avatar" style="border-color: var(--f-emerald); box-shadow: 0 0 20px rgba(0,230,118,0.3);">
                            <img src="img/refugee-3.avif" alt="Ndayishimiye Louise">
                            <span class="testimonial-verified-badge"><i class="fa fa-check"></i></span>
                        </div>
                        <div>
                            <h6 class="text-white mb-0 fw-bold">Ndayishimiye Louise</h6>
                            <span class="testimonial-category-tag" style="color: var(--f-emerald); border-color: rgba(0,230,118,0.4); background: rgba(0,230,118,0.1);">
                                Autonomisation Économique
                            </span>
                        </div>
                    </div>
                    <div class="testimonial-stars mb-3" style="color: var(--f-emerald);">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon mb-2" style="color: var(--f-emerald);"><i class="fa fa-quote-left"></i></div>
                    <p class="text-white-50 fst-italic mb-0" style="line-height: 1.75;">
                        Avec le kit de démarrage offert par PAPC et ses partenaires, j'ai pu lancer mon activité génératrice de revenus. Avant cette assistance, la vie était précaire ; aujourd'hui, mes enfants mangent à leur faim et vont à l'école.
                    </p>
                    <div class="testimonial-card-rule mt-4" style="background: linear-gradient(90deg, var(--f-emerald), transparent);"></div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <span class="font-monospace text-white-50" style="font-size: 0.7rem;">IMPACT VÉRIFIÉ</span>
                        <i class="fa fa-shield-alt" style="color: var(--f-emerald); font-size: 0.85rem;"></i>
                    </div>
                </div>

            </div>{{-- end owl-carousel --}}

            {{-- Custom futuristic nav arrows --}}
            <button class="testimony-nav-btn testimony-nav-prev" id="testimonyPrev" aria-label="Précédent">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button class="testimony-nav-btn testimony-nav-next" id="testimonyNext" aria-label="Suivant">
                <i class="fa fa-chevron-right"></i>
            </button>

        </div>{{-- end slider-wrapper --}}

        {{-- ── Futuristic dot indicators ───────────────────────── --}}
        <div class="testimony-dots d-flex justify-content-center gap-2 mt-4" id="testimonyDots">
            <button class="testimony-dot active" data-index="0"></button>
            <button class="testimony-dot" data-index="1"></button>
            <button class="testimony-dot" data-index="2"></button>
        </div>

        {{-- ── CTA strip ────────────────────────────────────────── --}}
        <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="d-inline-flex align-items-center gap-3 px-5 py-4 rounded-4"
                 style="background: rgba(255,111,15,0.06); border: 1px solid rgba(255,111,15,0.2);">
                <i class="fa fa-heart" style="color: var(--primary); font-size: 1.5rem;"></i>
                <div class="text-start">
                    <div class="text-white fw-bold mb-1">Rejoignez le Mouvement d'Impact</div>
                    <div class="text-white-50 small">Chaque contribution transforme une vie supplémentaire.</div>
                </div>
                <a href="/donate" class="btn-futuristic-primary ms-3 py-2 px-4">
                    <span>Faire un Don</span>
                    <div class="btn-icon-pill"><i class="fa fa-arrow-right"></i></div>
                </a>
            </div>
        </div>

    </div>
</div>
{{-- End Testimonial Section --}}
