@extends('frontend.layouts.master')
{{-- <!-- Hero Banner Start --> --}}
@section('title', 'Medicosminds Find Your University')
@section('content')
    <!--  Start header  -->
    <header class="tc-inner-header-st1">
        <div class="container">
            <h1> {{ !empty($subcourses[0]['course_name']) ? $subcourses[0]['course_name'] : '' }} </h1>
        </div>
        <img src="{{ asset('frontend/assets/img/line_circle.png') }}" alt="" class="shap1" data-speed="1"
            data-lag="0.5">
        <img src="{{ asset('frontend/assets/img/hero_back_line.png') }}" alt="" class="shap2" data-speed="1"
            data-lag="0.8">
    </header>
    <!--  End header  -->
    <section class="page_title_banner">
        <div class="container">
            <div class="content">
                <div class="title">
                    <h1></h1>
                    <img src="{{ asset('frontend/media/shapes/tag-2.png') }}" alt="" class="tag">
                </div>
                <div class="educate-tilt"
                    data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                    <img src="{{ asset('frontend/media/resources/page_title.png') }}" alt="" class="main_img">
                </div>
                <img src="{{ asset('frontend/media/shapes/circle-lines-2.png') }}" alt="" class="circle_vector">
            </div>
        </div>
    </section>

    <main>
        <div class="container mt-3 mb-5">
            <div class="row">
                @if (!empty($subcourses))
                    @foreach ($subcourses as $val)
                        <div class="col-md-3 mt-2">
                            <a href="{{ route('filter-universities', ['subcoursecourse' => $val->id]) }}">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <b>{{ $val['subcourse_name'] }}</b>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </main>




@endsection
