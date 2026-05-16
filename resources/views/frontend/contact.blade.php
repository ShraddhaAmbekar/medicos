@extends('frontend.layouts.master')
{{-- <!-- Hero Banner Start --> --}}
@section('title', 'Medicosminds Find Your University')
@section('content')
    <!--  Start header  -->
    <header class="tc-inner-header-st1">
        <div class="container">
            <h1> Contact Us </h1>
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
                <div class="col-md-4 mt-2 ">
                    <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card-body">
                        <h4>Phone</h4>
                        <hr>
                        <span>+91 9773877349, +91 8828377456</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2 ">
                    <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card-body">
                        <h4>Email</h4>
                        <hr>
                        <span>medicosmindz@gmail.com</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2 ">
                    <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card-body">
                        <h4>Address</h4>
                        <hr>
                        <span>Hansalya Building, Flat No.15 1st Floor, Barakhamba Road, New Delhi 110001.</span>
                    </div>
                    </div>
                </div>
            </div>
            
            
            <div class="map my-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194294.43876433122!2d77.2652782580461!3d28.612392866527564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd33c9f50295%3A0xc654840defbc891f!2sHansalaya%20Building!5e0!3m2!1sen!2sin!4v1724000720769!5m2!1sen!2sin" style="width:100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </main>




@endsection
