@extends('web.layouts.master')
@section('content')
<section id="content">
    <div class="content-wrap">
        @if(isset($years))
            <div class="container">
                <div class="row justify-content-between mb-3">
                    <div class="col-12 col-md-auto d-none d-md-flex">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Años</li>
                            </ol>
                        </nav>

                    </div>
                </div>
                <div class="row col-mb-50 mb-0">
                    <h2>Resultados oposiciones guardia civil</h2>
                    @foreach($years as $year)
                        <div class="col-sm-6 col-md-4">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon" data-animate="bounceIn">
                                    <a href="{{ route('results.getResultsThemeByYear', ['year' => $year->year]) }}">
                                        <img src="{{ Voyager::image('fav.png') }}" title="Resultados test oposciones guardia civil {{$year->year}}" alt="Resultados test oposciones guardia civil {{$year->year}}">
                                    </a>
                                </div>
                                <div class="fbox-content">
                                    <h3><a href="{{ route('results.getResultsThemeByYear', ['year' => $year->year]) }}"> Resultados test oposciones guardia civil {{$year->year}}</a></h3>
                                    <p>Entra y encuentra los reusultados de las preguntas de las oposciones a la guardia civil del año {{ $year->year }}.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
         @endif
    </div>
</section>
@endsection
