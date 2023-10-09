<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Your Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slider-image-1.jpg" class="d-block w-100" alt="Slider Image 1">
            </div>
            <div class="carousel-item">
                <img src="slider-image-2.jpg" class="d-block w-100" alt="Slider Image 2">
            </div>
            <div class="carousel-item">
                <img src="slider-image-3.jpg" class="d-block w-100" alt="Slider Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- Content Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h2>Welcome to Our Website</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae pretium odio. Proin facilisis
                    nisi in arcu laoreet, non consequat lorem rhoncus.</p>
            </div>
            <div class="col-lg-4">
                <h4>Latest News</h4>
                <ul class="list-unstyled">
                    <li><a href="#">New Product Launch</a></li>
                    <li><a href="#">Upcoming Events</a></li>
                    <li><a href="#">Company Updates</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 Your Company. All Rights Reserved.</p>
    </footer>
    <script src="{{ asset('frontend/assets') }}/js/jquery-3.6.3.min.js"></script>

    <script src="{{ asset('frontend/assets') }}/js/bootstrap.min.js"></script>

</body>

</html>
