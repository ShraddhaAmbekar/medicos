@extends('frontend.layouts.master')
{{-- <!-- Hero Banner Start --> --}}
@section('title', 'Medicosminds Find Your University')
@section('content')
    <!--  Start header  -->
    <header class="tc-inner-header-st1">
        <div class="container">
            <h1> About Us </h1>
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
                    <img src="{{ asset('frontend/media/resources/page_title.png') }}" alt="page-title" class="main_img">
                </div>
                <img src="{{ asset('frontend/media/shapes/circle-lines-2.png') }}" alt="" class="circle_vector">
            </div>
        </div>
    </section>

    <main>
         <!--  Start about  -->
        <section class="tc-about-st1" style="padding-top:0px!important;">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="img mb-5 mb-lg-0">
                            <img src="{{ asset('frontend/assets/img/aboutus1.png') }}" alt="" class="main-img"
                                data-speed="1" data-lag="0.9">
                            <img src="{{ asset('frontend/assets/img/about3.png ') }}" alt=""
                                class="sub-img rotate-center">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                      
                    
                            <!--<h6 class="fsz-16 fw-bold mt-30 wow fadeInUp slow" data-wow-delay="0.2s"> Your Path to Global-->
                            <!--    Education at Medicos Mindz-->
                            <!--</h6>-->
                            <p class="fsz-16 mt-30 pe-lg-5 wow fadeInUp slow" data-wow-delay="0.2s"> Welcome to Medicos Mindz, one of India’s premier consultancies in medical education abroad. We specialize in guiding and supporting aspiring doctors to fulfill their dreams of pursuing MBBS in Europe. Our comprehensive services ensure that students have everything they need to succeed academically and personally while studying abroad.</p>
  <h4 class=" js-splittext-lines mt-3">Who We Are</h4>
   <p class="fsz-16 mt-10 pe-lg-5 wow fadeInUp slow" data-wow-delay="0.2s"> At Medicos Mindz, we are a team of dedicated professionals passionate about transforming the aspirations of young medical students into reality. With years of experience and a deep understanding of the international medical education landscape, we provide unparalleled guidance and support to students and their families.</p>



                           
                        </div>
                    </div>
                </div>
                
                <div class="row">
                     <div class="col-md-6 mt-2 ">
                    <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;background:#f9fcf5;">
                    <div class="card-body">
                        <h4 style="color:#f3a00c">Our Mission</h4>
                        <hr>
                       <p>Our mission is to simplify the journey to becoming a doctor by providing expert consultancy services that cover every aspect of studying MBBS abroad. We aim to ensure that each student receives the highest quality education, support, and resources to thrive in their academic and professional pursuits.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2 ">
                    <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;background:#f9fcf5;">
                    <div class="card-body">
                        <h4 style="color:#f3a00c">Our Vision</h4>
                        <hr>
                       <p>We envision a world where every aspiring doctor has access to the best medical education and the support needed to excel, regardless of geographical boundaries. Medicos Mindz strives to be the bridge that connects dreams with opportunities, fostering a new generation of competent and compassionate healthcare professionals.</p>
                    </div>
                    </div>
                </div>
                </div>
                
                
                <div class="row mt-3">
                    <div class="col-md-8">
                    <div class=" listcard py-3">
                        <h4 class="my-2">What We Offer</h4>
    <h5 class="my-2" style="color:#f3a00c">Education Services:</h5>
    <ul>
        <li>
            <strong>University Selection:</strong> Personalized assistance in choosing the right university based on the student’s academic profile, preferences, and career goals.
        </li>
        <li>
            <strong>Application Process:</strong> Comprehensive support throughout the application process, from filling out forms to meeting deadlines and ensuring all requirements are met.
        </li>
    </ul>
    <h5 class="my-2" style="color:#f3a00c">Comprehensive Support:</h5>
    <ul>
        <li>
            <strong>Accommodation:</strong> Assistance in finding comfortable and safe accommodation close to the university.
        </li>
        <li>
            <strong>Food Services:</strong> Coordination of meal plans that cater to the nutritional needs of students, ensuring they stay healthy and focused on their studies.
        </li>
        <li>
            <strong>Regular Classes & Faculty Interaction:</strong> Continuous support with regular classes, expert faculty guidance, and additional resources to enhance learning.
        </li>
    </ul>
    <h5 class="my-2" style="color:#f3a00c">Personalized Care:</h5>
    <ul>
        <li>
            <strong>Student Counseling:</strong> Ongoing counseling and mentorship to address academic and personal challenges, helping students adapt to a new environment.
        </li>
        <li>
            <strong>Parental Updates:</strong> Regular communication with parents to keep them informed about their child's progress and well-being.
        </li>
    </ul>
    <h4 class="my-3" style="color:#f3a00c">Why Choose Us?</h4>
    <ul>
        <li>
            <strong>Expert Guidance:</strong> Our team comprises seasoned professionals with extensive knowledge of the European medical education system.
        </li>
        <li>
            <strong>Comprehensive Services:</strong> From the initial consultation to graduation, we offer end-to-end services that cover every aspect of studying abroad.
        </li>
        <li>
            <strong>Student-Centric Approach:</strong> We prioritize the well-being and success of our students, offering tailored support to meet their unique needs.
        </li>
        <li>
            <strong>Proven Track Record:</strong> Over the years, we have successfully assisted numerous students in gaining admission to top medical universities in Europe and achieving their career aspirations.
        </li>
    </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    
                </div>
                </div>
                
                
              <br>
              <br>
                    <h3 class="text-center">Join us at Medicos Mindz, where your journey to becoming a doctor begins with expert guidance, unwavering support, and a commitment to excellence. Together, we will turn your aspirations into achievements.</h3>
                    


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding: 20px 5px;margin-bottom:20px;background:#f2f6ef;">
            <h4>Meet Our Directors</h4>
            <br>
            <p>At Medicos Mindz, our leadership team is composed of highly experienced and dedicated professionals who are deeply committed to ensuring the success of every student. Our directors bring decades of experience in the medical industry, combining their expertise with a genuine passion for education and student welfare. Their hands-on approach and unwavering dedication make Medicos Mindz a trusted partner in your journey to becoming a medical professional.</p>
           
            <hr>
            <div class="row">
                <div class="col-md-4 mt-2">
                    <div class="card" style="background:none;border:none;">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/MUBIN.jpg') }}" style="height:300px;">
                        </div>
                        <div class="card-footer">
                            <h5>Mubin Sayyed (Director)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="background:none;border:none;">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/JK.jpg') }}" style="height:300px;">
                        </div>
                        <div class="card-footer">
                            <h5>Jyoti Krishna (Director)</h5>
                        </div>
                    </div>
                </div>
                
                 <div class="col-md-4 mt-2" >
                    <div class="card" style="background:none;border:none;">
                        <div class="card-body">
                            <img src="{{ asset('frontend/assets/img/nonames.jpeg') }}" style="height:300px;">
                        </div>
                        <div class="card-footer">
                            <h5>Siddarth Advisor</h5>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>



      
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

    </main>

<style>
    .listcard li{
        list-style-type:disc;
        margin-left:20px;
        line-height:inherit;
    }
    .tc-inner-header-st1{
        padding: 20px 5px 5px;
    }
 
</style>


@endsection
