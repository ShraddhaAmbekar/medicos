<!-- Start navbar -->
<nav class="navbar navbar-expand-lg tc-navbar-st1">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('frontend/assets/img/logo/medicos_logo.png') }}"
                 alt=""
                 class="logo"
                 style="height: 100px;">
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-lg-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-us') }}">
                        About Us
                    </a>
                </li>

                {{-- Courses Dropdown --}}
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        Courses
                    </a>

                    <ul class="dropdown-menu" style="min-width: max-content;">

                        @if (!empty($courses))

                            @foreach ($courses as $course)

                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                       href="{{ route('course.show', ['course' => $course->courses_slug]) }}">

                                        <img src="{{ asset('course/' . $course->image) }}"
                                             alt="{{ $course->course_name }}"
                                             style="height: 40px; width: 40px; object-fit: cover; border-radius: 5px;">

                                        {{ $course->course_name }}
                                    </a>
                                </li>

                            @endforeach

                        @endif

                    </ul>

                </li>

                {{-- Countries Dropdown --}}
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        Countries
                    </a>

                    <ul class="dropdown-menu">

                        @if (!empty($countries))

                            @foreach ($countries as $country)

                                @if(!empty($country->country_slug))

                                    <li style="margin-bottom: 10px;">

                                        <a href="{{ route('universities.filter', ['country' => $country->country_slug]) }}"
                                           class="dropdown-item d-flex align-items-center gap-2">

                                            <img src="{{ asset('country/' . $country->flag) }}"
                                                 alt="{{ $country->name }}"
                                                 style="height: 20px; width: 30px; object-fit: cover;">

                                            Study In {{ $country->name }}

                                        </a>

                                    </li>

                                @endif

                            @endforeach

                        @endif

                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">
                        Contact Us
                    </a>
                </li>

            </ul>

            <div class="side-nav">

                <a href="{{ route('apply-now') }}" class="chat-btn">
                    <span class="txt"> Apply Now </span>

                    <span class="arrow">
                        <i class="fal fa-long-arrow-right"></i>
                    </span>
                </a>

            </div>

        </div>
    </div>
</nav>
<!-- End navbar -->
