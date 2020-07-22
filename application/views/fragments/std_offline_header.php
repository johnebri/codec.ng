<section id="topnav" class="topnav">
    <div class="topnav__container">
        <div class="topnav__bg">
            <div class="group-1">
                <div class="topnav__logo">
                    <a href="<?php echo base_url(); ?>" class="navbar-brand text-light">Codac</a>
                </div>
                <div class="form-group form__search m-0">
                    <form class="form-inline my-2 my-lg-0" id="searchcourse">
                        <input maxlength="200" autocomplete="off" placeholder="Search for courses" id="autocomplete" name="search" type="text" class="form-control form-control-lg topnav__search">
                        <button class="topnav__search-btn btn btn-primary">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="group-2">
                <div class="topnav__links">
                    <ul class="topnav__links-container">
                        <li class="toggle-1">
                            <a class="text-light" href="#">Lorem Ipsum</a>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                        </li>
                        <li class="ml-3 toggle-2">
                            <a class="text-light" href="#">Lorem Ipsum</a>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                        </li>
                        <li class="ml-3 toggle-3">
                            <a class="text-light" href="#">Lorem Ipsum</a>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>

                <div class="auth">
                    <div class="auth__buttons">

                        <a href="#?role=student">
                            <button class="btn btn-success signup-btn signupbtn" data-id="student" data-target="#signupModal" data-toggle="modal">Sign Up</button>
                        </a>

                        <a href="#?role=student">
                            <button class="btn text-light login-btn" data-target="#loginModal" data-toggle="modal">Log In</button>
                        </a>

                        <span class="language">
                            <span class="abbriev">en</span>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- LANGUAGE DROPDOWN -->
            <div class="language__globe">
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">French</a></li>
                    <li><a href="#">Italian</a></li>
                    <li><a href="#">Brazilian Portugese</a></li>
                </ul>
            </div>
            <!-- MOBILE VIEW -->
            <div class="mobile">
                <li class="mobile-logo">
                    <a href="#" class="nav-link navbar-brand">CODEC</a>
                </li>
                <ul>
                    <li class="togglenav">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </li>
                    <li class="search-icon">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </li>

                    <li class="mobile-login">
                        <a href="#" class="">Hello, Log in <i class="fas fa-user"></i> </a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- DROPDOWN SEARCH FORM -->
        <div class="search-container hidden-on-mobile displayed-on-mobile">
            <form method="GET" action="" accept-charset="UTF-8" id="header-search-form">
                <input maxlength="200" autocomplete="off" placeholder="Search for courses" id="autocomplete" name="query" type="text">
                <button class="search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>

        <div class="dropdown-1">
            <span class="technology"> <a href="#"><i class="fa fa-laptop" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Technology </p>
            </span>
            <span class="language"> <a href="#"><i class="fa fa-language" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Language </p>
            </span>
            <span class="science"> <a href="#"><i class="fas fa-flask" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Science</p>
            </span>
            <span class="heartbeat"><a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Health</p>
            </span>
            <span class="business"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Business</p>
            </span>
            <span class="mathematics"> <a href="#"><i class="fas fa-square-root-alt" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Math</p>
            </span>
            <span class="marketing"><a href="#"><i class="fa fa-bullseye" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Marketing </p>
            </span>
            <span class="lifestyle"> <a href="#"><i class="fas fa-pray" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Lifestyle </p>
            </span>
            <span class="humanities"><a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Humanities </p>
            </span>
            <span class="allapp"><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> All Categories </p>
            </span>
        </div>
        <div class="dropdown-2">
            <span>
                <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i>
                </a>
                <p class="hero__courses-text text-dark"> Certificate Courses</p>
            </span>
            <span> <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Diploma Courses </p>
            </span>
            <span> <a href="#"><i class="fas fa-wave-square" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Learning Paths</p>
            </span>

        </div>
        <div class="dropdown-3">
            <span> <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Get Career Skills and Guidance</p>
            </span>
            <span> <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                <p class="hero__courses-text text-dark"> Find Courses for Specific Jobs</p>
            </span>
        </div>


        <div class="toggle">

            <ul class="toggle__nav w-100 text-center">
                <li class="toggle__nav-item">
                    <a class="toggle__nav-link" href="#">Course Categories</a></li>

                <li class="toggle__nav-item"><a class="toggle__nav-link" href="#">Cerficate Course</a></li>
                <li class="toggle__nav-item"><a class="toggle__nav-link" href="#">Diploma Course</a></li>
                <li class="toggle__nav-item"><a class="toggle__nav-link" href="#">Courses for Jobs</a></li>
                <li class="toggle__nav-item"><a class="toggle__nav-link" href="<?php echo base_url(); ?>tutors">Instructors</a></li>
                <li class="toggle__nav-item"><a class="toggle__nav-link" href="#">Help</a></li>

            </ul>
        </div>
    </div>
</section>