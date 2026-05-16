@extends('frontend.layouts.master')
{{-- <!-- Hero Banner Start --> --}}
@section('title', 'Medicosminds Find Your University')
@section('content')

    <header class="tc-inner-header-st1">
        <div class="container">
            <h1> Apply for Admission </h1>
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
        <div class="col-md-3"></div>
            <div class="col-md-6">
               
                        <div class="card">
                            <div class="card-body ">
                               <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city">
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Select Course</label>
                <select class="form-select" id="course">
                         <option value="" selected="" disabled="" hidden="">Select Course</option>
                                <option value="Medical">Medical</option>
                                <option value="MBA">MBA</option>
                                <option value="Hotel Management">Hotel Management</option>
                                <option value="Aviation">Aviation</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Law">Law</option>
                </select>
            </div>
            
            <div class="text-center">
            <button type="submit" class="btn educate-btn">Submit</button>
            </div>
        </form>

                            </div>
                        </div>
                

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
    </style>

@endsection
