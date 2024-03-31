@extends('web.layouts.master')

@section('content')
    <!-- Slider
        ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper min-vh-50 min-vh-md-100" data-loop="true" data-autoplay="5000">
        <div class="slider-inner">

            <div class="swiper swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="slider-caption color-with-slider">
                                <div>
                                    <h2 data-animate="zoomIn">Royal<span>Emeritum</span>.</h2>
                                    <p class="d-none d-sm-block" data-animate="zoomIn" data-delay="500">Comprueba aquí los resultados de tu examenes de oposiciones a la guardia civil.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url({{Voyager::image('clases-guardia-civil-2.png')}});"></div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #slider end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            @if(isset($years))
                <div class="container">

                    <div class="row col-mb-50 mb-0">
                        @foreach($years as $year)
                            <div class="col-sm-6 col-md-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon" data-animate="bounceIn">
                                        <a href="#"><img src="{{ Voyager::image('fav.png') }}" title="Resultados test oposciones guardia civil {{$year->year}}" alt="Resultados test oposciones guardia civil {{$year->year}}"></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Resultados test oposciones guardia civil {{$year->year}}</h3>
                                        <p>Entra y encuentra los reusultados de las preguntas de las oposciones a la guardia civil del año {{ $year->year }}.</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            @endif
            <div class="section row p-0 align-items-stretch dark mt-4">
                <div class="col-lg-5">
                    <div>
                        <img src="{{Voyager::image('Logo-Royal-Emeritum-White.svg')}}" title="Royalemeritum" alt="Royalemeritum"/>
                        <p>Grupo Formativo compuesto por un grupo de Oficiales y Suboficiales de la Guardia Civil con más de una década de experiencia docente en las oposiciones de ingreso a la Guardia Civil</p>
                        <div class="widget">

                            <div class="row col-mb-30">
                                <div class="col-lg-12">
                                    <div class="footer-big-contacts">
                                        <span>Llamanos:</span>
                                        +34 604 47 10 48
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="footer-big-contacts">
                                        <span>Envia un email:</span>
                                        info@royalemeritum.com
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="widget subscribe-widget">

                            <div class="row col-mb-30">
                                <div class="col-sm-4 col-md-12 col-lg-4">
                                    <a href="https://www.facebook.com/profile.php?id=61553762043690" target="_blank" class="social-icon bg-contrast-200 h-bg-facebook mb-0 me-3">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.facebook.com/profile.php?id=61553762043690" target="_blank"></a>
                                </div>
                                <div class="col-sm-4 col-md-12 col-lg-4">
                                    <a href="https://www.instagram.com/royal_emeritum/" target="_blank" class="social-icon bg-contrast-200 h-bg-instagram mb-0 me-3">
                                        <i class="fa-brands fa-instagram"></i>
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.instagram.com/royal_emeritum/" target="_blank"></a>
                                </div>
                                <div class="col-sm-4 col-md-12 col-lg-4">
                                    <a href="https://www.tiktok.com/@royal.emeritum" target="_blank" class="social-icon bg-contrast-200 h-bg-tiktok mb-0 me-3">
                                        <i class="fa-brands fa-tiktok"></i>
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                    <a href="https://www.tiktok.com/@royal.emeritum" target="_blank"></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div id="booking-appointment-form" class="col-lg-7 p-0">
                    <div class="bg-color form-widget col-padding" data-loader="button">
                        <h2>Cuéntanos tus dudas</h2>
                        <div class="form-result"></div>
                        <form class="row mb-0" id="template-medical-form" name="template-medical-form" action="include/form.php" method="post">
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="template-medical-name">Nombre:</label>
                                <input type="text" id="template-medical-name" name="template-medical-name" class="form-control not-dark required" value="">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="template-medical-phone">Teléfono:</label>
                                <input type="text" id="template-medical-phone" name="template-medical-phone" class="form-control not-dark required" value="">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12 form-group">
                                <label for="template-medical-email">Email:</label>
                                <input type="email" id="template-medical-email" name="template-medical-email" class="form-control not-dark required" value="">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12 form-group">
                                <label for="template-medical-message">Mensaje:</label>
                                <textarea id="template-medical-message" name="template-medical-message" class="form-control not-dark required" cols="30" rows="5"></textarea>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12 form-group d-none">
                                <input type="text" name="template-medical-botcheck" value="">
                            </div>
                            <div class="col-12 form-group text-end">
                                <button class="button button-white button-light button-rounded m-0" type="submit" value="submit">Enviar</button>
                            </div>
                            <input type="hidden" name="prefix" value="template-medical-">
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
