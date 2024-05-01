@extends('web.layouts.master')
@section('content')
<section id="content">
    <div class="content-wrap">
        @if(isset($resultsYearsTheme))
            <div class="container">
                <div class="row justify-content-between mb-3">
                    <div class="col-12 col-md-auto d-none d-md-flex">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('results.index') }}">Años</a></li>
                                <li class="breadcrumb-item active">Temas {{$year->year}}</li>
                            </ol>
                        </nav>

                    </div>
                </div>
                <div class="row col-mb-50 mb-0">
                    <h2>Temas oposiciones guardia civil {{ $year->year }}</h2>
                    <div class="col-sm-12 col-md-12">
                        @foreach($resultsYearsTheme as $resultYearTheme)
                            @if($resultYearTheme->questTheme($resultYearTheme->theme_id,$year->id)->count() > 0)
                                <h4><a href="{{ route('results.getResultsQuestByTheme', ['year' => $resultYearTheme->year->year, 'theme' => $resultYearTheme->themeYear->slug]) }}">{{$resultYearTheme->themeYear->theme}}</a></h4>
                                <hr>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
         @endif
    </div>
</section>
@endsection
