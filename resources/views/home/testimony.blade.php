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
        <div class="ambient-orb ambient-orb-orange" style="top: -80px; right: 8%; width: 480px; height: 480px;"></div>
        <div class="ambient-orb ambient-orb-cyan"   style="bottom: -120px; left: 5%; width: 380px; height: 380px;"></div>
        <div class="cyber-grid-overlay"></div>

        <div class="container position-relative d-flex flex-column align-items-center justify-content-center text-center py-5" style="min-height: 320px; z-index: 2;">
            <div class="futuristic-badge mb-3 wow fadeInDown" data-wow-delay="0.1s">
                <span class="beacon-dot"></span>
                <span>MODULE // VOIX DU TERRAIN</span>
            </div>
            <h1 class="display-4 text-white fw-bold wow fadeInDown" data-wow-delay="0.2s">
                Témoignages
            </h1>
            <p class="text-white-50 mb-4 wow fadeInUp" data-wow-delay="0.3s" style="max-width: 560px;">
                Des bénéficiaires qui racontent leur transformation au quotidien grâce à l'action de PAPC.
            </p>
            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay="0.35s">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white-50 text-decoration-none" href="/">Accueil</a></li>
                    <li class="breadcrumb-item text-warning active" aria-current="page">Témoignages</li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- End Page Header --}}

    {{-- =========================================================
         TESTIMONY SECTION
    ========================================================== --}}
    @include('components.testimony-layout')

    {{-- =========================================================
         PARTNERS
    ========================================================== --}}
    @include('components.partners-layout')

@endsection
