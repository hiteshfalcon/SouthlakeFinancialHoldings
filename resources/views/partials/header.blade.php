<!-- resources/views/partials/header.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags -->
    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content=""/>
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="twitter:card" content="summary_large_image">

    <!-- Webpage Title -->
    <title>@yield('title', 'Default Title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ url('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/aos.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/style.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ url('public/assets/images/favicon.png') }}">
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand logo-text" href="{{ url('/') }}">Southlake Finance Holdings</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link claims-button" aria-current="page" href="{{ url('claims') }}">Claims</a>
                </li>
            </ul>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}#header">Home</a></li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="#">About</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <div class="dropdown-column">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="window.location.href='{{ url('/') }}#about'">Overview of the company</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="window.location.href='{{ url('/') }}#valuechain'">Business value chain</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="window.location.href='{{ url('/') }}#fronting'">How fronting works</a></li>
                                <li><a class="dropdown-item" href="news.html">News</a></li>
                            </div>
                        </ul>
                    </li>                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="#">Industries</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="{{ url('newcontractor') }}">Contractors</a></li>
                            <li><a class="dropdown-item" href="{{ url('financial-institutions') }}">Financial Institutions</a></li>
                            <li><a class="dropdown-item" href="{{ url('garage-package') }}">Garage Package</a></li>
                            <li><a class="dropdown-item" href="{{ url('grocery-stores') }}">Grocery Stores</a></li>
                            <li><a class="dropdown-item" href="{{ url('healthcare') }}">Healthcare</a></li>
                            <li><a class="dropdown-item" href="{{ url('hospitality') }}">Hospitality</a></li>
                            <li><a class="dropdown-item" href="{{ url('landscaping') }}">Landscapers</a></li>
                            <li><a class="dropdown-item" href="{{ url('manufacturing') }}">Manufacturing</a></li>
                            <li><a class="dropdown-item" href="{{ url('non-profits') }}">Non-profit</a></li>
                            <li><a class="dropdown-item" href="{{ url('personal-auto') }}">Personal Auto</a></li>
                            <li><a class="dropdown-item" href="{{ url('professional-liability') }}">Professional Liability</a></li>
                            <li><a class="dropdown-item" href="{{ url('restaurants') }}">Restaurants</a></li>
                            <li><a class="dropdown-item" href="{{ url('retail') }}">Retail</a></li>
                            <li><a class="dropdown-item" href="{{ url('schools') }}">Schools</a></li>
                            <li><a class="dropdown-item" href="{{ url('towing') }}">Towing</a></li>
                            <li><a class="dropdown-item" href="{{ url('trucking') }}">Trucking</a></li>
                            <li><a class="dropdown-item" href="{{ url('wholesale') }}">Wholesale</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#plans">Careers</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='{{ url('/') }}#contact'">Contact</a>
                    </li>
                </ul>
                <!-- <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span> -->
            </div>
        </div>
    </nav>
    <!-- end of navigation -->

    <!-- Header -->
    
    <!-- end of header -->
</body>
</html>
