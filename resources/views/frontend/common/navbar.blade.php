<!--  Start navbar  -->
<nav class="navbar navbar-expand-lg tc-navbar-st1">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('frontend/assets/img/logo/medicos_logo.png') }}" alt="" class="logo" style="height: 100px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-lg-auto">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('about-us') }}">
                        About Us
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" style="min-width: max-content;">
                        @if (!empty($courses))
                            @foreach ($courses as $course)
                                <li><a class="dropdown-item"
                                        href="{{ route('course.show', ['course' => $course->id]) }}"> <img
                                            src="{{ asset('course/' . $course->image) }}" alt=""
                                            style="height: 50px;"> {{ $course->course_name }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}">
                        Find University
                    </a>
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Countries
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($countries as $country)
                            <li style="margin-bottom: 10px;"><a href="{{ route('universities.filter', ['country' => $country->id]) }}"
                                    style="display: flex;align-items:center;"> <img
                                        src="{{ asset('country/' . $country->flag) }}" alt=""
                                        style="height: 20px; width:30px;"> &nbsp;&nbsp; Study In {{ $country->name }}</a>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('contact') }}">
                        Contact Us
                    </a>
                </li>

            </ul>
            <div class="side-nav">
                <a href="{{ route('apply-now') }}" class="chat-btn"> <span class="txt"> Apply Now </span> <span class="arrow">
                        <i class="fal fa-long-arrow-right"></i> </span> </a>
               
            </div>
        </div>
    </div>
</nav>
<!--  End navbar  -->
