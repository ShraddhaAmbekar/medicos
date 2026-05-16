@extends('frontend.layouts.master')
{{-- <!-- Hero Banner Start --> --}}
@section('title', 'Medicosminds Find Your University')
@section('content')

    <header class="tc-inner-header-st1">
        <div class="container">
            <h1> Explore Top Universities </h1>
        </div>
        <img src="{{ asset('frontend/assets/img/line_circle.png') }}" alt="" class="shap1" data-speed="1"
            data-lag="0.5">
        <img src="{{ asset('frontend/assets/img/hero_back_line.png') }}" alt="" class="shap2" data-speed="1"
            data-lag="0.8">
    </header>

    {{-- <section class="page_title_banner">
        <div class="container">
            <div class="content">
                <div class="title">
                    <h1> </h1>
                    <img src="{{ asset('frontend/media/shapes/tag-2.png') }}" alt="" class="tag">
                </div>
                <div class="educate-tilt"
                    data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                    <img src="{{ asset('frontend/media/resources/page_title.png') }}" alt="" class="main_img">
                </div>
                <img src="{{ asset('frontend/media/shapes/circle-lines-2.png') }}" alt="" class="circle_vector">
            </div>
        </div>
    </section> --}}

    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="accordion" id="accordionExample">
                    <h5 class="text-center" style="background:#ffb170;color:white;padding: 10px 5px;">Filter Universities
                    </h5>

                    <form action="" method="POST">
                        @csrf
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo" style="line-height: 0;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Courses
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse show" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @if (!empty($courses))
                                        @foreach ($courses as $course)
                                            <input type="radio" name="coursename"
                                                {{ $course->id == $courseid ? 'checked' : '' }}
                                                id="course{{ $course->id }}" value="{{ $course->id }}">
                                            <label for="course{{ $course->id }}"
                                                style="font-size:18px;">{{ $course->course_name }}</label>
                                            <br>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree" style="line-height: 0;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Country
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="max-height: 200px;overflow: scroll;">
                                    @if (!empty($countries))
                                        @foreach ($countries as $country)
                                            <input type="radio" name="countryname"
                                                {{ $country->id == $countryid ? 'checked' : '' }}
                                                id="countrys{{ $country->id }}" value="{{ $country->id }}">
                                            <label for="countrys{{ $country->id }}"
                                                style="font-size:18px;">{{ $country->name }}</label>
                                            <br>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <input type="submit" name="submit" value="Filter" class="form-control btn "
                            style="background: #d05d5b;color:white;">

                    </form>
                </div>
            </div>

            <div class="col-md-9">
                @if (!empty($universities))
                    @foreach ($universities as $university)
                        <div class="card">
                            <div class="card-body universitylist">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h5><b>
                                                @if (!empty($university->logo))
                                                    <img src="{{ asset('universities/' . $university->logo) }}"
                                                        alt="{{ $university->name }}" style="height: 50px;">
                                                @endif
                                                {{ !empty($university->name) ? $university->name : '' }}
                                            </b>
                                        </h5>
                                        <hr>
                                        <p><b>Country:</b>
                                            {{ !empty($university->country['name']) ? $university->country['name'] : '' }}
                                        </p>
                                        <p><b>Location:</b>
                                            {{ !empty($university->location) ? $university->location : '' }}
                                        </p>
                                        <p>
                                            <b>Study Area:</b>
                                            @foreach ($university->studyAreas as $studyArea)
                                                <button class="btn educate-btn"
                                                    style="padding:5px;font-size:12px">{{ $studyArea->course->course_name }}</button>
                                            @endforeach
                                        </p>
                                        <p>
                                            <b>Available Courses:</b>
                                            @foreach ($university->availableCourses as $availableCourse)
                                                <button class="btn educate-btn"
                                                    style="padding:5px;font-size:12px;">{{ $availableCourse->subcourse->subcourse_name }}</button>
                                            @endforeach
                                        </p>
                                        <p><b>Recognition:</b>
                                            {{ !empty($university->recognition) ? $university->recognition : '' }}
                                        </p>
                                        <p><b>Eligibilty:</b>
                                            {{ !empty($university->eligibility) ? $university->eligibility : '' }}
                                        </p>

                                        <p><b>Course Duration:</b>
                                            {{ !empty($university->duration_of_course) ? $university->duration_of_course : '' }}
                                        </p>

                                        <p><b>Neet Exam:</b>
                                            {{ !empty($university->neet_exam) ? $university->neet_exam : '' }}
                                        </p>

                                        <p><b>IELTS/TOFEL:</b>
                                            {{ !empty($university->ielts) ? $university->ielts : '' }}
                                        </p>

                                        <p><b>Establishment Year:</b>
                                            {{ !empty($university->established_year) ? $university->established_year : '' }}
                                        </p>

                                        <p><b> Medium of Teaching:</b>
                                            {{ !empty($university->medium_of_instruction) ? $university->medium_of_instruction : '' }}
                                        </p>

                                    </div>

                                    <div class="col-md-3 text-center">
                                        <a href="{{ route('about-university', ['slug' => $university->slug]) }}"
                                            class="educate-btn"
                                            style="border:none;width:150px;padding:10px;border-radius:10px;background: #d05d5b;"
                                            type="button">
                                            View Details</a>
                                        <br>
                                        <br>
                                        <a href="{{ route('apply-now') }}" class="educate-btn"
                                            style="border:none;width:150px;padding:10px;border-radius:10px;"
                                            type="button">Apply
                                            Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </div>

    <style>
        .universitylist p {
            line-height: 2.5;
        }

        .educate-btn {
            background: #ed7f1c;
            color: white;
        }
        @media screen and (max-width: 991px) {
    .home-st1 br {
         display: block!important; 
    }
}
    </style>

@endsection
