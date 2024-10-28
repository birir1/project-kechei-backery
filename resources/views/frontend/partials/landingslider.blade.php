<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="max-width: 2000px; margin: 0 auto;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('imgs/land1.jpg') }}" alt="First slide" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center bg-dark bg-opacity-50 w-100 h-100">
                <h1 class="display-4 font-weight-bold text-white">Welcome to Our Bakery</h1>
                <p class="lead text-white">Crafting Delightful Pastries Just for You</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('imgs/land2.jpg') }}" alt="Second slide" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center bg-dark bg-opacity-50 w-100 h-100">
                <h1 class="display-4 font-weight-bold text-white">Freshly Baked Every Day</h1>
                <p class="lead text-white">From Our Oven to Your Table</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('imgs/land3.jpg') }}" alt="Third slide" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center bg-dark bg-opacity-50 w-100 h-100">
                <h1 class="display-4 font-weight-bold text-white">Taste the Difference</h1>
                <p class="lead text-white">Exquisite Ingredients, Exceptional Flavors</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
  
  <!-- Additional Styles -->
  <style>
    .carousel-caption {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: rgba(0, 0, 0, 0.4); /* Semi-transparent overlay */
        color: #fff;
    }
  
    .carousel-caption h1 {
        font-size: 3.5rem;
        margin-bottom: 0.5rem;
    }
  
    .carousel-caption p {
        font-size: 1.5rem;
    }
  </style>
  