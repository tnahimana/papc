@extends('layout.app')

@section('page')
 active
@endsection

@section('section')

    {{-- =========================================================
         PAGE HEADER — FUTURISTIC
    ========================================================== --}}
    <div class="page-header-futuristic position-relative overflow-hidden" style="min-height: 320px;">
        {{-- Ambient orbs --}}
        <div class="ambient-orb ambient-orb-orange" style="top: -60px; left: 8%; width: 500px; height: 500px;"></div>
        <div class="ambient-orb ambient-orb-cyan"   style="bottom: -100px; right: 5%; width: 400px; height: 400px;"></div>
        <div class="cyber-grid-overlay"></div>

        <div class="container position-relative d-flex flex-column align-items-center justify-content-center text-center py-5" style="min-height: 320px; z-index: 2;">
            <div class="futuristic-badge futuristic-badge-cyan mb-3 wow fadeInDown" data-wow-delay="0.1s">
                <span class="beacon-dot"></span>
                <span>MODULE // DON SOLIDAIRE</span>
            </div>
            <h1 class="display-4 text-white fw-bold wow fadeInDown" data-wow-delay="0.2s">
                Faire un Don
            </h1>
            <p class="text-white-50 mb-4 wow fadeInUp" data-wow-delay="0.3s" style="max-width: 560px;">
                Transformez votre générosité en impact concret pour les communautés vulnérables du Congo.
            </p>
            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay="0.35s">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white-50 text-decoration-none" href="/">Accueil</a></li>
                    <li class="breadcrumb-item text-warning active" aria-current="page">Don Solidaire</li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- End Page Header --}}

    {{-- =========================================================
         DONATE CONSOLE
    ========================================================== --}}
    @include('components.donate-layout')

    {{-- =========================================================
         IMPACT STATS STRIP
    ========================================================== --}}
    <div class="container-fluid py-4" style="background: #040911; border-top: 1px solid rgba(0,240,255,0.1); border-bottom: 1px solid rgba(0,240,255,0.1);">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="hud-metric-value text-warning fw-bold font-monospace fs-3" data-counter="17000">0</div>
                    <div class="hud-metric-label text-white-50 small font-monospace">BÉNÉFICIAIRES DIRECTS</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="hud-metric-value fw-bold font-monospace fs-3" style="color: var(--f-cyan);" data-counter="103">0</div>
                    <div class="hud-metric-label text-white-50 small font-monospace">POINTS D'EAU ACTIFS</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="hud-metric-value fw-bold font-monospace fs-3" style="color: var(--f-emerald);" data-counter="12">0</div>
                    <div class="hud-metric-label text-white-50 small font-monospace">ANNÉES D'OPÉRATION</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="hud-metric-value text-warning fw-bold font-monospace fs-3" data-counter="47">0</div>
                    <div class="hud-metric-label text-white-50 small font-monospace">COMMUNAUTÉS TOUCHÉES</div>
                </div>
            </div>
        </div>
    </div>

    {{-- =========================================================
         PARTNERS
    ========================================================== --}}
    @include('components.partners-layout')

@endsection
