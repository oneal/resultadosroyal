@extends('web.layouts.master')
@section('content')
<section id="content">
    <div class="content-wrap">
        @if(isset($quests))
            <div class="container">
                <div class="row justify-content-between mb-3">
                    <div class="col-12 col-md-auto d-none d-md-flex">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('results.index') }}">Años</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('results.getResultsThemeByYear', ['year' => $year->year, 'theme' => $theme->slug]) }}">Temas {{$year->year}}</a></li>
                                <li class="breadcrumb-item active">{{ $theme->theme }}</li>
                            </ol>
                        </nav>

                    </div>
                </div>
                <div class="row col-mb-50 mb-0">
                    <h2>Preguntas oposiciones guardia civil {{$theme->theme}} {{ $year->year }}</h2>
                    <div class="accordion accordion-lg">
                        @foreach($quests as $quest)
                            <div class="accordion-header">
                                <div class="accordion-icon">
                                    <i class="accordion-closed bi-check-circle-fill"></i>
                                    <i class="accordion-open bi-x-circle-fill"></i>
                                </div>
                                <hr/>
                                <div class="accordion-title">
                                    {!! $quest->quest !!}
                                </div>
                            </div>
                            <div class="accordion-content">
                                {!!  $quest->description !!}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
         @endif
    </div>
</section>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            $("div").removeClass("accordion-active")
            $('.accordion-content').css('display', 'none')
        });
    </script>
@endsection
