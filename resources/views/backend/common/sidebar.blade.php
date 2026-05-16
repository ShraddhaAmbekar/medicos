<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <!-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> -->
        </div>
        <div>
            <h4 class="logo-text">Medicosmindz</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="{{ route('countries') }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-world'></i>
                </div>
                <div class="menu-title">Counties</div>
            </a>
        </li>
        <li>
            <a href="{{ route('courses.index') }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-book-reader'></i>
                </div>
                <div class="menu-title">Courses</div>
            </a>
        </li>

        <li>
            <a href="{{ route('subcourses.index') }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-layer-plus'></i>
                </div>
                <div class="menu-title">Subcourse</div>
            </a>
        </li>

        <li>
            <a href="{{ route('universities.index') }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-layer-plus'></i>
                </div>
                <div class="menu-title">Universities</div>
            </a>
        </li>


        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Admin</div>
            </a>
            <ul>
                <li>
                    <a href="#">
                        <div class="parent-icon"><i class='bx bx-user'></i>
                        </div>
                        <div class="menu-title">User List</div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="parent-icon"><i class='bx bx-user'></i>
                        </div>
                        <div class="menu-title">User List</div>
                    </a>
                </li>

            </ul>
        </li> --}}




    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
