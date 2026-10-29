@extends('layout.app')

@section('contact')
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
                <span>CELLULE DE LIAISON // EST-RDC</span>
            </div>
            
            <h1 class="display-4 text-white mb-3">Entrer en Contact avec <span class="text-gradient-orange">PAPC</span></h1>
            
            <p class="text-white-50 fs-5 mx-auto mb-4" style="max-width: 720px;">
                Nos équipes basées à Goma et Uvira sont à votre disposition pour coordonner des actions humanitaires, engager des partenariats institutionnels ou répondre à vos sollicitations.
            </p>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white-50" href="/"><i class="fa fa-home me-1"></i>Accueil</a></li>
                    <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Contactez-nous</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Futuristic Page Header End -->

    <!-- Contact Start -->
        @include('components.contact-layout')
    <!-- Contact End -->

    <!-- Gallery Start -->
        @include('components.gallery-layout')
    <!-- Gallery End -->

    <!-- Strategic Partners Start -->
        @include('components.partners-layout')
    <!-- Strategic Partners End -->

@endsection
