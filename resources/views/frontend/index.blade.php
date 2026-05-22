@extends('frontend.layouts.master')
{{-- <!-- Hero Banner Start --> --}}
@section('title', 'Medicosminds Find Your University')
@section('content')
 
    <header class="tc-header-st1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="info">
                        <h6 class="fsz-18 fw-300 mb-30"> <span class="icon me-2 cr-orange1"> <i
                                    class="fal fa-long-arrow-right"></i> </span> Your Global Gateway to University Admissions
                        </h6>
                        <h1> <span style="color:#f4a00c;">Define </span><br> Yourself <br> Proudly Say, <br> 'I Am an MBBS!' </h1>
                        <div class="text fsz-16 mt-20"> Discover and connect with top universities worldwide. MedicosMindz is
                            your trusted partner in navigating the path to higher education </div>
                        <a href="{{ route('about-us') }}" class="butn bg-ln-orange1 rounded-pill text-white fsz-16 mt-40"> <span> <i
                                    class="fal fa-arrow-right me-2"></i> Discover More </span> </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img mt-5 mt-lg-0">
                        <img src="{{ asset('universities/banner.webp') }}" alt="">
                        <div class="contact-card">
                            <span class="icon cr-ln-orange1 fsz-35"> <i class="fal fa-envelope"></i> </span>
                            <div class="cont">
                                <small> Contact Mail </small>
                                <h6> <a href="#" class="lnk"> medicosmindz@gmail.com</a> </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('frontend/assets/img/hero_back_line.png ') }}" alt="" class="bg-shap" data-speed="1.1"
            data-lag="0.8">
        <img src="{{ asset('frontend/assets/img/line_circle.png ') }}" alt="" class="line-circle" data-speed="1.1"
            data-lag="0.4">
        <img src="{{ asset('frontend/assets/img/top_circle.png ') }}" alt="" class="float-circle rotate-center">
        <img src="{{ asset('frontend/assets/img/3d_circle.png ') }}" alt="" class="circle-3d rotate-center">
    </header>
    <!--  header ended -->


<div class="container">
    <div class="row">
        <div class="col-md-12 text-center" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding: 20px 5px;margin-bottom:20px;background:#f2f6ef;">
            <h4>Top Universities For MBBS in Georgia</h4>
            <p>You can check out the list of top MCI approved universities for MBBS universities of Georgia here.</p>
            <a href="{{ route('universities.filter', ['country' => '8']) }}" class="butn bg-ln-orange1 rounded-pill text-white fsz-16 mt-20 py-2">Learn More</a>
            
        </div>
    </div>
</div>

    <!--Contents-->
    <main>

        <!--  Start service  -->
        <section class="tc-service-st1">
            <div class="container">
                <div class="services-cards">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-card wow fadeInUp slow" data-wow-delay="0.2s">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/img/icons/sr1.svg ') }}" alt="">
                                </div>
                                <p> Discover Your Perfect Academic Home</p>
                                <h6 class="title"> Find Your Ideal University </h6>
                                <a href="{{ route('universities.filter', ['country' => '8']) }}" class="fsz-16 hover-orange1"> <i class="fal fa-long-arrow-right me-2"></i>
                                    <span class="txt"> Read More </span> </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-card wow fadeInUp slow" data-wow-delay="0.4s">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/img/icons/sr2.svg ') }}" alt="">
                                </div>
                                <p> Streamline Your Path to Enrollment </p>
                                <h6 class="title"> Simplify Your Admission Process </h6>
                                <a href="{{ route('universities.filter', ['country' => '8']) }}" class="fsz-16 hover-orange1"> <i class="fal fa-long-arrow-right me-2"></i>
                                    <span class="txt"> Read More </span> </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-card wow fadeInUp slow" data-wow-delay="0.6s">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/img/icons/sr3.svg ') }}" alt="">
                                </div>
                                <p> Your Personalized Roadmap to Success </p>
                                <h6 class="title"> Access Expert Guidance </h6>
                                <a href="{{ route('universities.filter', ['country' => '8']) }}" class="fsz-16 hover-orange1"> <i class="fal fa-long-arrow-right me-2"></i>
                                    <span class="txt"> Read More </span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="btm-text"> <span class="text"> Explore Boundless Educational Horizons with MedicosMindz
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!--  End service  -->


        <!--  Start about  -->
        <section class="tc-about-st1">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="img mb-5 mb-lg-0">
                            <img src="{{ asset('frontend/assets/img/lady_doctor.png') }}" alt="" class="main-img"
                                data-speed="1" data-lag="0.9">
                            <img src="{{ asset('frontend/assets/img/about3.png ') }}" alt=""
                                class="sub-img rotate-center">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <h6>ABOUT US</h6>
                            <h5>MEDICOSMINDZ</h5>
                            <h6 class="fsz-18 fw-300 mb-30 js-splittext-lines"> <span class="icon me-2 cr-orange1"> 
                            <!--<i class="fal fa-long-arrow-right"></i>-->
                                       "By Doctor for the future Doctors"  </span></h6>
                            <h2 class="fsz-50 js-splittext-lines">WE ARE THE WORLD'S LARGEST MEDICAL UNIVERSITY CATALOG.</h2>
                            <!--<h6 class="fsz-16 fw-bold mt-30 wow fadeInUp slow" data-wow-delay="0.2s"> Your Path to Global-->
                            <!--    Education at Medicos Mindz-->
                            <!--</h6>-->
                            <p class="fsz-16 mt-30 pe-lg-5 wow fadeInUp slow" data-wow-delay="0.2s"> MEDICOS MINDZ is a unique venture started by doctors determined to light a
path for the next generation of doctors. For over a decade, a team of exceptional
doctors have dedicated their time to change the dreams of medical aspirants into a
reality. We provide consultation and serve as a gateway for admission for students
seeking to pursue their MBBS abroad. Our consultation methods and source of
information are unique. We provide comprehensive consultation to guide the
students to make an informed decision based on our doctor's personal
experiences. Unlike other consultants and agents, our doctors suggest universities
based on the information provided by the student as well as from their own
observations. </p>

   <p class="fsz-16 mt-30 pe-lg-5 wow fadeInUp slow" data-wow-delay="0.2s"> Our doctors have completed their MBBS in various international universities,
thus, have gained 5 to 6 years of information and experience. They have lived in
the various universities and their respective countries which will provide
additional guidance for the students. Moreover, our doctors were once the
students whose dream was to become a "doctor". Thus, every student will be
given the utmost importance and a unique consultation. We believe that doctors
are the best guides for future doctors in spirit and in experience. At MBBS
Universities, successful doctors guide future doctors. Fulfil your dreams and craft
your dream career with MEDICOS MINDZ.</p>



                            <a href="{{ route('about-us') }}"
                                class="butn bg-ln-green1 rounded-pill text-white fsz-16 mt-40 wow fadeInUp slow"
                                data-wow-delay="0.2s"> <span> <i class="fal fa-arrow-right me-2"></i> About More </span>
                            </a>
                        </div>
                    </div>
                </div>
                
            
                     <!--  Start blog  -->
            <section class="tc-blog-st1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="title text-center mb-60 js-splittext-lines">
                                <h6 class="fsz-18 fw-300 mb-15"> <span class="icon cr-orange1"> <i class="fal fa-long-arrow-right"></i> </span> </h6>
                                <h2 class="fsz-20" style="color:#cd2728;"> Top Trending  <span style="color:#f4a00c;"> Medical Universities <span style="color: #8ccefe;">2026</span>  </h2>
                            </div>
                        </div>
                    </div>
                    <div class="posts">
                        <div class="row">
                            @if(!empty($universities))
                            @foreach($universities as $university)
                            <div class="col-lg-4 ">
                                <div class="post-card wow fadeInUp slow" data-wow-delay="0.2s" style="height:100%;">
                                    <a href="{{ route('about-university', [
   'course' => optional(optional($university->studyAreas->first())->course)->courses_slug ?? 'mbbs',
    'university' => $university->university_slug
]) }}" class="img">
                                        <img src="{{ asset('universities/' . $university->image) }}" alt="" class="img-cover">
                                        <!--<span class="float-arrow"> <img src="{{ asset('universities/' . $university->logo) }}" alt=""  style="border-radius:50%;"> </span>-->
                                    </a>
                                   <div class="info">
    <h4>
        <a href="{{ route('about-university', [
            'course' => optional(optional($university->studyAreas->first())->course)->courses_slug ?? 'mbbs',
            'university' => $university->university_slug
        ]) }}"
        class="fsz-24 hover-orange1">

            {{ $university->name }}

        </a>
    </h4>

    <a href="{{ route('apply-now') }}"
       class="butn bg-ln-orange1 rounded-pill text-white fsz-16 mt-20 py-2">
        <span> Apply Now </span>
    </a>
</div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            
                           
                            
                        </div>
                    </div>
                </div>
            </section>
            <!--  End blog  -->

                 
                <div class="clients-cards" style="margin-top:0px;">
                    <a href="#" class="wow fadeInUp slow" data-wow-delay="0.6s"> <img
                            src="{{ asset('frontend/assets/img/clients/1.jpg') }}" alt=""style="width:100%;height:100px;" > </a>
                    <a href="#" class="wow fadeInUp slow" data-wow-delay="0.4s"> <img
                            src="{{ asset('frontend/assets/img/clients/2.jpg') }}" alt="" style="width:100%;height:100px;"> </a>
                    <a href="#" class="wow fadeInUp slow" data-wow-delay="0.2s"> <img
                            src="{{ asset('frontend/assets/img/clients/3.jpg') }}" alt="" style="width:100%;height:100px;"> </a>
                    <a href="#" class="wow fadeInUp slow" data-wow-delay="0.4s"> <img
                            src="{{ asset('frontend/assets/img/clients/4.jpg') }}" alt="" style="width:100%;height:100px;"> </a>
                    <a href="#" class="wow fadeInUp slow" data-wow-delay="0.6s"> <img
                            src="{{ asset('frontend/assets/img/clients/5.jpg') }}" alt="" style="width:100%;height:100px;"> </a>
                </div>
            </div>
            <div class="marq-text">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h2> Guranteed Admission. </h2>
                    </div>
                    <div class="swiper-slide">
                        <h2> Affordable  Fees. </h2>
                    </div>
                    <div class="swiper-slide">
                        <h2> Free Consultation. </h2>
                    </div>
                    <div class="swiper-slide">
                        <h2> No donations. </h2>
                    </div>
                    <div class="swiper-slide">
                        <h2> MCI Approved Universities. </h2>
                    </div>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/img/about_line.png ') }}" alt="" class="line wow">
            <img src="{{ asset('frontend/assets/img/about_bg.png ') }}" alt="" class="bg">
        </section>
        <!--  End about  -->


        <!--  Start video  -->
        <section class="tc-video-st1">
            <div class="container">
                <div class="video-card wow zoomIn slow" data-wow-delay="0.2s">
                    <img src="{{ asset('frontend/assets/img/now-video.jpg') }}" alt="" class="bg">
                    <div class="float-cont">
                        <a href="https://www.youtube.com/embed/lZRkCDVxLNc?si=82CGRmeNKIqd1wJb" class="play-btn" data-lity="video"> <i
                                class="fas fa-play"></i> </a>
                        <h2 class="title"> Watch This Video </h2>
                    </div>
                </div>
            </div>
        </section>
        <!--  End video  -->


        <!--  Start choose  -->
        <section class="tc-choose-st1 ">
            <div class="container">
                <div class="row gx-lg-0 text-center">
                       <h6 class="fsz-18 fw-300 mb-15"> What we offer Explore now </h6>
                        <h2 class="fsz-20" style="color:#cd2728;"> Our   <span style="color:#f4a00c;"> Services  </h2>
                    <div class="col-lg-12 mt-3">
                        <div class="cards mt-5 mt-lg-0">
                            <div class="row gx-lg-5">
                                <div class="col-lg-4">
                                    <a href="{{ route('universities.filter', ['country' => '8']) }}" class="choose-card wow fadeInUp slow" data-wow-delay="0.2s">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/no1.jpg') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="fsz-24 mb-15">Study Abroad Counselling</h5>
                                            <div class="text fsz-16"> Our trained and experienced team of counselors helps students identify a course and university that perfectly match their aptitude, interests, academic and financial background. </div>
                                            <span class="arrow"> <i class="fal fa-chevron-right"></i> </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('universities.filter', ['country' => '8']) }}" class="choose-card wow fadeInUp slow" data-wow-delay="0.4s">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/no2.jpg ') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="fsz-24 mb-15"> Course Advice </h5>
                                            <div class="text fsz-16"> Our comprehensive scholarship assistance includes appraising eligibility criteria to guide applicants in the right manner.</div>
                                            <span class="arrow"> <i class="fal fa-chevron-right"></i> </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('universities.filter', ['country' => '8']) }}" class="choose-card wow fadeInUp slow" data-wow-delay="0.2s">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/no3.jpg ') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="fsz-24 mb-15"> University / College application processing </h5>
                                            <div class="text fsz-16">We offer Guidance throughout the entire admission process to ensure a complete, error-free application.</div>
                                            <span class="arrow"> <i class="fal fa-chevron-right"></i> </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('universities.filter', ['country' => '8']) }}" class="choose-card wow fadeInUp slow" data-wow-delay="0.4s">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/no4.jpg ') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="fsz-24 mb-15">Visa Application Assistance</h5>
                                            <div class="text fsz-16">Our trained and experienced team of counsellors help students identify a course and university that perfectly match. </div>
                                            <span class="arrow"> <i class="fal fa-chevron-right"></i> </span>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="col-lg-4">
                                    <a href="{{ route('universities.filter', ['country' => '8']) }}" class="choose-card wow fadeInUp slow" data-wow-delay="0.4s">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/no5.jpg ') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="fsz-24 mb-15">Scholarship Assistance</h5>
                                            <div class="text fsz-16">Our comprehensive scholarship assistance includes appraising eligibility criteria to guide applicants in the right manner.</div>
                                            <span class="arrow"> <i class="fal fa-chevron-right"></i> </span>
                                        </div>
                                    </a>
                                </div>
                                
                                
                                <div class="col-lg-4">
                                    <a href="{{ route('universities.filter', ['country' => '8']) }}" class="choose-card wow fadeInUp slow" data-wow-delay="0.4s">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/img/no6.jpg ') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="fsz-24 mb-15">Pre Departure Guidance / Support</h5>
                                            <div class="text fsz-16">We organize pre departure briefing for students to let them know about the do's an don'ts while embarking their studies abroad. </div>
                                            <span class="arrow"> <i class="fal fa-chevron-right"></i> </span>
                                        </div>
                                    </a>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="numbers">
                    <div class="row justify-content-between gx-lg-5">
                        <div class="col-lg-2">
                            <div class="num-card wow zoomIn slow" data-wow-delay="0.2s">
                                <h2 class="num fsz-40"> 7000+ </h2>
                                <p class="fsz-16 px-4"> Medical Students </p>
                                <img src="{{ asset('frontend/assets/img/icons/num1.svg ') }}" alt=""
                                    class="shap">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="num-card wow zoomIn slow" data-wow-delay="0.4s">
                                <h2 class="num fsz-40"> 2500+ </h2>
                                <p class="fsz-16 px-4"> Non-Medical Students </p>
                                <img src="{{ asset('frontend/assets/img/icons/num2.svg ') }}" alt=""
                                    class="shap">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="num-card wow zoomIn slow" data-wow-delay="0.6s">
                                <h2 class="num fsz-40"> 50+ </h2>
                                <p class="fsz-16 px-4"> Approved Universities </p>
                                <img src="{{ asset('frontend/assets/img/icons/num3.svg ') }}" alt=""
                                    class="shap">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="num-card wow zoomIn slow" data-wow-delay="0.8s">
                                <h2 class="num fsz-40"> 40+ </h2>
                                <p class="fsz-16 px-4"> Branches All Over India </p>
                                <img src="{{ asset('frontend/assets/img/icons/num4.svg ') }}" alt=""
                                    class="shap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/img/numb_line.png ') }}" alt="" class="num-line wow">
        </section>
        <!--  End choose  -->


        <!--  Start case  -->
        {{-- <section class="tc-case-st1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-50 js-splittext-lines">
                            <h6 class="fsz-18 fw-300 mb-15"> <span class="icon cr-orange1"> <i
                                        class="fal fa-long-arrow-right"></i> </span> </h6>
                            <h2 class="fsz-50"> latest case study </h2>
                            <p class="fsz-16 mt-15"> Integer vehicula diam et sollicitudin scelerisque. Vestibulum
                                pellentesque bibendum magna, et bibendum turpis lacinia id. Praesent egestas tincidunt
                                risus. </p>
                        </div>
                    </div>
                </div>
                <div class="cases-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="case-card">
                                <a href="https://uithemez.com/i/nucaz/inner_pages/case_det.html" class="img">
                                    <img src="{{ asset('frontend/assets/img/case1.jpg') }}" alt=""
                                        class="img-cover">
                                    <span class="float-arrow"> <i class="fal fa-arrow-down-right"></i> </span>
                                </a>
                                <div class="info">
                                    <div class="tags fsz-16 mb-15"> <a href="#"> Data Analysis </a> </div>
                                    <h4> <a href="https://uithemez.com/i/nucaz/inner_pages/case_det.html"
                                            class="fsz-30 hover-orange1"> article data analysis blogs </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-card">
                                <a href="https://uithemez.com/i/nucaz/inner_pages/case_det.html" class="img">
                                    <img src="{{ asset('frontend/assets/img/case2.jpg ') }}" alt=""
                                        class="img-cover">
                                    <span class="float-arrow"> <i class="fal fa-arrow-down-right"></i> </span>
                                </a>
                                <div class="info">
                                    <div class="tags fsz-16 mb-15"> <a href="#"> SEO Marketing </a> </div>
                                    <h4> <a href="https://uithemez.com/i/nucaz/inner_pages/case_det.html"
                                            class="fsz-30 hover-orange1"> Offline SEO marketing services </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-card">
                                <a href="https://uithemez.com/i/nucaz/inner_pages/case_det.html" class="img">
                                    <img src="{{ asset('frontend/assets/img/case3.jpg ') }}" alt=""
                                        class="img-cover">
                                    <span class="float-arrow"> <i class="fal fa-arrow-down-right"></i> </span>
                                </a>
                                <div class="info">
                                    <div class="tags fsz-16 mb-15"> <a href="#"> Email Marketing </a> </div>
                                    <h4> <a href="https://uithemez.com/i/nucaz/inner_pages/case_det.html"
                                            class="fsz-30 hover-orange1"> 30+ Countries email Marketing </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="case-card">
                                <a href="https://uithemez.com/i/nucaz/inner_pages/case_det.html" class="img">
                                    <img src="{{ asset('frontend/assets/img/case2.jpg ') }}" alt=""
                                        class="img-cover">
                                    <span class="float-arrow"> <i class="fal fa-arrow-down-right"></i> </span>
                                </a>
                                <div class="info">
                                    <div class="tags fsz-16 mb-15"> <a href="#"> SEO Marketing </a> </div>
                                    <h4> <a href="https://uithemez.com/i/nucaz/inner_pages/case_det.html"
                                            class="fsz-30 hover-orange1"> Offline SEO marketing services </a> </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section> --}}
        <!--  End case  -->


        <!--  Start faq  -->
        <section class="tc-faq-st1">
            <div class="container">
                <div class="section-head mb-60">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-lg-5">
                            <div class="title mb-4 mb-lg-0 js-splittext-lines">
                                <h6 class="fsz-18 fw-300 mb-30"> <span class="icon me-2 cr-orange1"> <i
                                            class="fal fa-long-arrow-right"></i> </span> Frequency and question's </h6>
                                <h2 class="fsz-50"> fAQ we provide I have far and skills. </h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--<div class="text cr-666 fsz-16 mb-10 wow fadeInUp slow" data-wow-delay="0.2s"> Integer-->
                            <!--    vehicula diam et sollicitudin scelerisque. Vestibulum pellentesque bibendum magna, et-->
                            <!--    bibendum turpis lacinia id. Praesent egestas tincidunt risus, eget volutpat lectus porta et.-->
                            <!--    Suspendisse ultricies porta justo in pretium. </div>-->
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="img wow zoomIn slow" data-wow-delay="0.2s">
                                <img src="{{ asset('frontend/assets/img/faq_img.svg ') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion mt-5 mt-lg-0 js-splittext-lines" id="accordionFaq">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse1">
                                            What can Medicos Mindz do for you?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="text fsz-16">We provide complete end-to-end support—from selecting the right university to securing your admission, visa processing, and even post-arrival guidance. Our expert team ensures your journey to becoming a doctor is smooth, transparent, and stress-free.
 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2">
                                           How do you help in choosing the right university?
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="text fsz-16">We offer personalized counseling based on your academic profile, budget, and career goals. Unlike generic consultancies, our guidance is backed by real doctors with international experience, helping you make informed decisions.
</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3">
                                           Is MBBS abroad a safe and reliable option?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="text fsz-16"> Yes—when done through the right guidance. We connect you with globally recognized universities and ensure all processes—from admission to accommodation—are secure, transparent, and student-focused. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse4">
                                           Do you assist with the complete admission process?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="text fsz-16"> Absolutely. From application documentation to university communication, offer letters, and deadlines—we manage everything so you can focus on your future. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5">
                                            What support do students get after admission?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <div class="text fsz-16"> Our support doesn’t stop at admission. We assist with: <br>
                                            Accommodation & living arrangements  <br>
Travel & pre-departure guidance <br>
On-ground support and student assistance <br>
Why choose Medicos Mindz?
</div>
<p>Because we are not just consultants—we are doctors guiding future doctors. With years of experience and real insights from international medical education, we ensure your journey is not just successful, but meaningful.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/img/faq_bg.png ') }}" alt="" class="bg">
            <img src="{{ asset('frontend/assets/img/faq_line.svg ') }}" alt="" class="line wow">
        </section>
        <!--  End faq  -->


        <!--  Start pricing  -->
        {{-- <section class="tc-pricing-st1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-60 js-splittext-lines">
                            <h6 class="fsz-18 fw-300 mb-15"> <span class="icon cr-orange1"> <i
                                        class="fal fa-long-arrow-right"></i> </span> </h6>
                            <h2 class="fsz-50"> Unique Price table </h2>
                            <p class="fsz-16 mt-15"> Integer vehicula diam et sollicitudin scelerisque. Vestibulum
                                pellentesque bibendum magna, et bibendum turpis lacinia id. Praesent egestas tincidunt
                                risus. </p>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="price-card wow fadeInUp slow" data-wow-delay="0.2s">
                                <div class="card-head">
                                    <h4 class="fsz-30 mb-2"> Regular Plan </h4>
                                    <p> Monthly / Early </p>
                                </div>
                                <div class="card-body">
                                    <h6 class="price"> $0.96/ <small> monthly </small> </h6>
                                    <ul class="card-list">
                                        <li> <i class="fal fa-check"></i> <span class="txt"> <strong> 12 Hours
                                                </strong> Access </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Meeting <strong> Room
                                                    $2/Per </strong> hour </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Marketing Consultations
                                            </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Financial Access ...
                                            </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Customizable registration
                                            </span> </li>
                                    </ul>
                                </div>
                                <a href="#" class="butn bg-ln-orange1 rounded-pill text-white fsz-16 mt-30 mb-20">
                                    <span> <i class="fal fa-arrow-right me-2"></i> Choose this Package </span> </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="price-card wow fadeInUp slow" data-wow-delay="0.4s">
                                <div class="card-head">
                                    <h4 class="fsz-30 mb-2"> premium Plan </h4>
                                    <p> Monthly / Early </p>
                                </div>
                                <div class="card-body">
                                    <h6 class="price"> $9.96/ <small> monthly </small> </h6>
                                    <ul class="card-list">
                                        <li> <i class="fal fa-check"></i> <span class="txt"> <strong> 12 Hours
                                                </strong> Access </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Meeting <strong> Room
                                                    $2/Per </strong> hour </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Marketing Consultations
                                            </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Financial Access ...
                                            </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Customizable registration
                                            </span> </li>
                                    </ul>
                                </div>
                                <a href="#" class="butn bg-ln-green1 rounded-pill text-white fsz-16 mt-30 mb-20">
                                    <span> <i class="fal fa-arrow-right me-2"></i> Choose this Package </span> </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="price-card wow fadeInUp slow" data-wow-delay="0.6s">
                                <div class="card-head">
                                    <h4 class="fsz-30 mb-2"> Professional Plan </h4>
                                    <p> Monthly / Early </p>
                                </div>
                                <div class="card-body">
                                    <h6 class="price"> $19.96/ <small> monthly </small> </h6>
                                    <ul class="card-list">
                                        <li> <i class="fal fa-check"></i> <span class="txt"> <strong> 12 Hours
                                                </strong> Access </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Meeting <strong> Room
                                                    $2/Per </strong> hour </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Marketing Consultations
                                            </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Financial Access ...
                                            </span> </li>
                                        <li> <i class="fal fa-check"></i> <span class="txt"> Customizable registration
                                            </span> </li>
                                    </ul>
                                </div>
                                <a href="#" class="butn bg-ln-blue1 rounded-pill text-white fsz-16 mt-30 mb-20">
                                    <span> <i class="fal fa-arrow-right me-2"></i> Choose this Package </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/img/price_line.png ') }}" alt="" class="line wow">
        </section> --}}
        <!--  End pricing  -->


        <!--  Start testimonials  -->
        <section class="tc-testimonials-st1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="img mb-5 mb-lg-0 wow zoomIn slow" data-wow-delay="0.2s">
                            <img src="{{ asset('frontend/assets/img/testi_img.svg ') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonials-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="rate">
                                            <span class="icon"> <img
                                                    src="{{ asset('frontend/assets/img/qoate_icon.svg ') }}"
                                                    alt="">
                                            </span>
                                            <div class="cont">
                                                <p class="fsz-16 mb-2"> Average 5.00 ratting </p>
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-main"> My journey to pursuing an MBBS degree at Kutaisi University has been a transformative experience. Coming from Mumbai, India, I was initially apprehensive about moving to a new country, but Kutaisi University has exceeded all my expectations and provided me with a nurturing and supportive environment. </div>
                                        <div class="user-inf">
                                            <h6 class="fsz-24 fw-bold mb-2"> Arjun Patel (Program MBBS) </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="rate">
                                            <span class="icon"> <img
                                                    src="{{ asset('frontend/assets/img/qoate_icon.svg ') }}"
                                                    alt="">
                                            </span>
                                            <div class="cont">
                                                <p class="fsz-16 mb-2"> Average 5.00 ratting </p>
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-main"> Starting my MBBS at Kutaisi University has been a fantastic experience. The curriculum is comprehensive, emphasizing practical skills. Our dedicated professors ensure we grasp complex medical concepts. The diverse campus offers a global perspective, enriching my education. Kutaisi is a charming city with friendly locals, making my stay enjoyable. I'm excited about the future and grateful for the opportunities at Kutaisi University </div>
                                        <div class="user-inf">
                                            <h6 class="fsz-24 fw-bold mb-2"> Aisha Khan (Program MBBS) </h6>
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="rate">
                                            <span class="icon"> <img
                                                    src="{{ asset('frontend/assets/img/qoate_icon.svg ') }}"
                                                    alt="">
                                            </span>
                                            <div class="cont">
                                                <p class="fsz-16 mb-2"> Average 5.00 ratting </p>
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-main"> Choosing Kutaisi University for my MBBS was a pivotal decision. The state-of-the-art facilities and extensive clinical training have greatly enhanced my education. The knowledgeable and approachable faculty, along with a strong cultural exchange and support network, have significantly enriched my experience. The affordable living costs in Georgia are a bonus. I highly recommend Kutaisi University to future medical students.</div>
                                        <div class="user-inf">
                                            <h6 class="fsz-24 fw-bold mb-2"> Rajesh Kumar (Program MBBS) </h6>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="arrows">
                                <div class="swiper-prev"> <i class="fal fa-long-arrow-left"></i> </div>
                                <div class="swiper-next"> <i class="fal fa-long-arrow-right"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/img/testi_bg.png ') }}" alt="" class="bg">
        </section>
        <!--  End testimonials  -->


        <!--  Start blog  -->
        {{-- <section class="tc-blog-st1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-60 js-splittext-lines">
                            <h6 class="fsz-18 fw-300 mb-15"> <span class="icon cr-orange1"> <i
                                        class="fal fa-long-arrow-right"></i> </span> </h6>
                            <h2 class="fsz-50"> Latest News & blogs </h2>
                            <p class="fsz-16 mt-15"> Integer vehicula diam et sollicitudin scelerisque. Vestibulum
                                pellentesque bibendum magna, et bibendum turpis lacinia id. Praesent egestas tincidunt
                                risus. </p>
                        </div>
                    </div>
                </div>
                <div class="posts">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="post-card wow fadeInUp slow" data-wow-delay="0.2s">
                                <a href="https://uithemez.com/i/nucaz/inner_pages/post.html" class="img">
                                    <img src="{{ asset('frontend/assets/img/blog1.jpg ') }}" alt=""
                                        class="img-cover">
                                    <span class="float-arrow"> <i class="fal fa-arrow-down-right"></i> </span>
                                </a>
                                <div class="info">
                                    <div class="tags fsz-16 mb-15"> <a href="#" class="me-4"> <i
                                                class="fal fa-user me-1"></i> by tanvir alom </a> <a href="#"> <i
                                                class="fal fa-comment me-1"></i> 02 comments </a> </div>
                                    <h4> <a href="#" class="fsz-24 hover-orange1"> Integer vehicula diam sllicitudin
                                            scelerisque. Vestib pellent. </a> </h4>
                                    <a href="https://uithemez.com/i/nucaz/inner_pages/post.html"
                                        class="butn bg-ln-orange1 rounded-pill text-white fsz-16 mt-20 py-2"> <span> 12
                                            /Aug </span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="post-card wow fadeInUp slow" data-wow-delay="0.4s">
                                <a href="https://uithemez.com/i/nucaz/inner_pages/post.html" class="img">
                                    <img src="{{ asset('frontend/assets/img/blog2.jpg ') }}" alt=""
                                        class="img-cover">
                                    <span class="float-arrow"> <i class="fal fa-arrow-down-right"></i> </span>
                                </a>
                                <div class="info">
                                    <div class="tags fsz-16 mb-15"> <a href="#" class="me-4"> <i
                                                class="fal fa-user me-1"></i> by tanvir alom </a> <a href="#"> <i
                                                class="fal fa-comment me-1"></i> 02 comments </a> </div>
                                    <h4> <a href="#" class="fsz-24 hover-orange1"> Integer vehicula diam sllicitudin
                                            scelerisque. Vestib pellent. </a> </h4>
                                    <a href="https://uithemez.com/i/nucaz/inner_pages/post.html"
                                        class="butn bg-ln-green1 rounded-pill text-white fsz-16 mt-20 py-2"> <span> 12 /Aug
                                        </span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="post-card wow fadeInUp slow" data-wow-delay="0.6s">
                                <a href="https://uithemez.com/i/nucaz/inner_pages/post.html" class="img">
                                    <img src="{{ asset('frontend/assets/img/blog3.jpg ') }}" alt=""
                                        class="img-cover">
                                    <span class="float-arrow"> <i class="fal fa-arrow-down-right"></i> </span>
                                </a>
                                <div class="info">
                                    <div class="tags fsz-16 mb-15"> <a href="#" class="me-4"> <i
                                                class="fal fa-user me-1"></i> by tanvir alom </a> <a href="#"> <i
                                                class="fal fa-comment me-1"></i> 02 comments </a> </div>
                                    <h4> <a href="https://uithemez.com/i/nucaz/inner_pages/post.html"
                                            class="fsz-24 hover-orange1"> Integer vehicula diam sllicitudin scelerisque.
                                            Vestib pellent. </a> </h4>
                                    <a href="#" class="butn bg-ln-blue1 rounded-pill text-white fsz-16 mt-20 py-2">
                                        <span> 12 /Aug </span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--  End blog  -->


    </main>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:999999999;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply for Admission</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="card">
                            <div class="card-body ">
                               <form >
                                  
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
            <button type="submit" class="butn bg-ln-orange1 rounded-pill text-white fsz-16 mt-20 py-2">Submit</button>
            </div>
        </form>

                            </div>
                        </div>
      </div>
      
    </div>
  </div>
</div>
<script>
    $(document).ready(function() {
     
         setTimeout(function() {
            $('#exampleModal').modal('show');
        }, 5000); 
    });
</script>

    <!--End-Contents-->
@endsection
