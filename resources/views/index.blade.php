@extends('layouts.app')

@section('content')
<section class="index-header">
    <div class="container h-100">
        <div class="row align-items-center header-row">
            <ul class="col-md-5 mb-0">
                <li>
                    <h2 class="header-title mb-4">El mejor <span class="d-block">Hosting Web</span></h2>
                </li>
                <li>
                    <p class="header-subtitle">Comienza tu experiencia con nuestra promoción inicial de <strong><del>$800</del> $400/mes*</strong></p>
                </li>
                <li>
                    <p class="mb-4">Todo lo que necesitas para el manejo y alojamiento de tu sitio, en un solo lugar.</p>
                </li>
                <li><button class="btn btn-call-to-action">Comienza ahora!</button></li>
            </ul>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <ul class="col text-center mb-5">
                <li>
                    <h3 class="h3-title">Características generales</h3>
                </li>
                <li>
                    <p class="mb-5">Nuestra revolucionaria solución es poderosa, simple y sorprendentemente asequible</p>
                </li>
            </ul>
        </div>
        <div class="row">
            <ul class="col-md-4 d-flex">
                <li><i class="fas fa-upload features-icon"></i></li>
                <li>
                    <h4 class="features-subtitle">Actualizaciones automáticas</h4>
                    <p>Despreocúpese de andar perdiendo tiempo con actualizaciones tediosas</p>
                </li>
            </ul>
            <ul class="col-md-4 d-flex">
                <li><i class="fas fa-sliders-h features-icon"></i></li>
                <li>
                    <h4 class="features-subtitle">Software optimizado</h4>
                    <p>Despreocúpese de andar perdiendo tiempo con actualizaciones tediosas</p>
                </li>
            </ul>
            <ul class="col-md-4 d-flex">
                <li><i class="fas fa-globe features-icon"></i></li>
                <li>
                    <h4 class="features-subtitle">Amplia red</h4>
                    <p>Despreocúpese de andar perdiendo tiempo con actualizaciones tediosas</p>
                </li>
            </ul>
            <ul class="col-md-4 d-flex">
                <li><i class="fas fa-shield-virus features-icon"></i></li>
                <li>
                    <h4 class="features-subtitle">Protección</h4>
                    <p>Despreocúpese de andar perdiendo tiempo con actualizaciones tediosas</p>
                </li>
            </ul>
            <ul class="col-md-4 d-flex">
                <li><i class="fas fa-headphones-alt features-icon"></i></li>
                <li>
                    <h4 class="features-subtitle">Soporte gratuito</h4>
                    <p>Despreocúpese de andar perdiendo tiempo con actualizaciones tediosas</p>
                </li>
            </ul>
            <ul class="col-md-4 d-flex">
                <li><i class="fas fa-archive features-icon"></i></li>
                <li>
                    <h4 class="features-subtitle">Resguardos diarios</h4>
                    <p>Despreocúpese de andar perdiendo tiempo con actualizaciones tediosas</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="plans">
    <ul class="container">
        <li class="row">
            <ul class="col text-center mb-5">
                <li>
                    <h3 class="h3-title">Selecciona tu plan</h3>
                </li>
                <li>
                    <p>Alojamiento personalizado, sin cargos ocultos.</p>
                </li>
            </ul>
        </li>
        <li class="row justify-content-center">
            <div class="col-lg-4">
                <ul class="plan-card">
                    <li class="text-center mb-3">
                        <h4 class="mb-0">Standard Hosting</h4>
                        <small>En oferta - Ahórrate 50%</small>
                    </li>
                    <li class="text-center mb-4">
                        <p class="plan-price"><span class="dolar-price">$</span>400</p>
                        <p class="text-muted">/por mes</p>
                    </li>
                    <li>
                        <button class="btn btn-call-to-action w-100">Empieza aquí</button>
                    </li>
                    <li>
                        <ul class="pl-0 pt-4">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul class="plan-card">
                    <li class="text-center mb-3">
                        <h4 class="mb-0">Advance Hosting</h4>
                        <small>En oferta - Ahórrate 50%</small>
                    </li>
                    <li class="text-center mb-4"">
                        <p class="plan-price"><span class="dolar-price">$</span>700</p>
                        <p class="text-muted">/por mes</p>
                    </li>
                    <li>
                        <button class="btn btn-call-to-action w-100">Empieza aquí</button>
                    </li>
                    <li>
                        <ul class="pl-0 pt-4">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 25 sitios</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul class="plan-card">
                    <li class="text-center mb-3">
                        <h4 class="mb-0">Unlimited Hosting</h4>
                        <small>En oferta - Ahórrate 50%</small>
                    </li>
                    <li class="text-center mb-4">
                        <p class="plan-price"><span class="dolar-price">$</span>1050</p>
                        <p class="text-muted">/por mes</p>
                    </li>
                    <li>
                        <button class="btn btn-call-to-action w-100">Empieza aquí</button>
                    </li>
                    <li>
                        <ul class="pl-0 pt-4">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Sitios ilimitados</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-check mr-3"></i>
                                <p class="mb-0">Hasta 10 sitios</p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</section>
<section class="offer">

</section>
@endsection