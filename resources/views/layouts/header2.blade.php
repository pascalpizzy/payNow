    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar d-flex navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" class="logo" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active " href="/" role="button"
                                        data-bs-toggle="dropdown">
                                        Home
                                    </a>
                                   
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="index-4.html">Send</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-5.html">Receive</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                        data-bs-toggle="dropdown">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu show">
                                        <li><a class="nav-item" href="blog.html">Blog 1</a></li>
                                        <li><a class="nav-item" href="blog-2.html">Blog 2</a></li>
                                        <li><a class="nav-item" href="blog-3.html">Blog 3</a></li>
                                        <li><a class="nav-item" href="blog-4.html">Blog 4</a></li>
                                        <li><a class="nav-item" href="blog-single.html">Blog Single 1</a></li>
                                        <li><a class="nav-item" href="blog-single-2.html">Blog Single 2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                        data-bs-toggle="dropdown">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu show mega-menu">
                                        <ul class="dropdown">
                                            <li><a class="nav-item" href="about-us.html">About Us</a></li>
                                            <li><a class="nav-item" href="careers.html">Careers</a></li>
                                            <li><a class="nav-item" href="fees.html">Fees</a></li>
                                            <li><a class="nav-item" href="open-positions.html">Open Positions</a></li>
                                            <li><a class="nav-item" href="our-team.html">Our Team</a></li>
                                            <li><a class="nav-item" href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a class="nav-item" href="countries.html">Countries</a></li>
                                            <li><a class="nav-item" href="team-details.html">Team Details</a></li>
                                            <li><a class="nav-item" href="terms-conditions.html">Terms Conditions</a></li>
                                            <li><a class="nav-item" href="reviews.html">Reviews</a></li>
                                            <li><a class="nav-item" href="how-works.html">How Works</a></li>
                                            <li><a class="nav-item" href="faqs.html">Faq</a></li>
                                            <li><a class="nav-item" href="login.html">Login 1</a></li>
                                            <li><a class="nav-item" href="login-2.html">Login 2</a></li>
                                            <li><a class="nav-item" href="register.html">Register 1</a></li>
                                            <li><a class="nav-item" href="register-2.html">Register 2</a></li>
                                            <li><a class="nav-item" href="forgot-password.html">Forgot Password 1</a></li>
                                            <li><a class="nav-item" href="forgot-password-2.html">Forgot Password 2</a></li>
                                            <li><a class="nav-item" href="reset-password.html">Reset Password</a></li>
                                            <li><a class="nav-item" href="coming-soon.html">Coming Soon</a></li>
                                            <li><a class="nav-item" href="404.html">404</a></li>
                                            <li><a class="nav-item" href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                        data-bs-toggle="dropdown">
                                        Help
                                    </a>
                                    <ul class="dropdown-menu show">
                                        <li><a class="nav-item" href="help-center.html">Help Center 1</a></li>
                                        <li><a class="nav-item" href="help-center-2.html">Help Center 2</a></li>
                                        <li><a class="nav-item" href="help-center-details.html">Help Center Details</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                            <div class="right-area header-action d-flex align-items-center">
                                <div class="lang d-flex align-items-center">
                                    <img src="assets/img/lang.png" alt="icon">
                                    <select>
                                        <option value="1">EN</option>
                                        <option value="2">BN</option>
                                        <option value="3">ES</option>
                                        <option value="4">NL</option>
                                    </select>
                                </div>

                                @if (Auth::check())
                                    <a href="/user_dashboard" class="cmn-btn">Dashboard</a>

                                    <a href="{{ route('logout') }}" class="cmn-btn login" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                <a href="login" class="cmn-btn login">Login</a>
                                <a href="register" class="cmn-btn">Sign up</a>
                                @endif


                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>