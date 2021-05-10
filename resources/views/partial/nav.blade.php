
<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.skype.com/fr/" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href={{ route('home') }}><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href={{ route('about') }}><i class="bx bx-file-blank"></i> <span>About</span></a></li>
                <li><a href={{ route('fact') }}><i class="bx bx-user"></i> <span>Fact</span></a></li>
                <li><a href={{ route('skill') }}><i class="bx bx-envelope"></i> Skill</a></li>
                <li><a href={{ route('service') }}><i class="bx bx-book-content"></i> Services</a></li>
                <li><a href={{ route('portfolio') }}><i class="bx bx-server"></i> portfolio</a></li>
                <li><a href={{ route('user') }}><i class="bx bx-envelope"></i> Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header>
<!-- End Header -->

