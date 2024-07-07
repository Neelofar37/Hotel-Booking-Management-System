<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystical Suites - ROOMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php require("inc/links.php"); ?>  
</head>

<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
</div>  

<div class="container">
    <div class="row">
       <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2">FILTERS</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                        <label class="form-label">Check-in</label>
                        <input type="date" class="form-control shadow-none mb-3">
                        <label class="form-label">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>

                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                        <div class="mb-2">
                            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f1">Connecting Rooms</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f2">Airport Shuttle Service</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f3">Bicycle Rental</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f3">Inclusive Lunch/Dinner</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f3">Extra bed (1500/-)</label>
                        </div>
                    </div>

                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                        <div class="d-flex">
                            <div class="me-3">
                                <label class="form-label">Adults</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div>
                                <label class="form-label">Childrens</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
       </div>

       <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="rooms/image1.png" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h5 class="mb-3">Guest Room, 1 King</h5>
                    <div class="features mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            1 King
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Featherbed
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Marble bathroom
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Shower/tub combination
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Lighted makeup room
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Robe & Slippers
                        </span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            Sofa
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Featherbed
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Room service, 24 hour
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            bottled water, complimentary
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Coffee/tea maker
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Instant hot water
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Mini Fridge
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Air-conditioned
                        </span>
                    </div>
                    <div class="guests">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            2 adults
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            1 children
                        </span> 
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4">₹10000 per night</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                </div>
            </div>
            </div>

            <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="rooms/image2.png" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h5 class="mb-3">Executive Suite, 1 King</h5>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            1 King
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Featherbed
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Touchscreen controls
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Tub with spray jets
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Marble bathroom
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Shower/tub combination
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Lighted makeup room
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Robe & Slippers
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            Sofa
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Featherbed
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Room service, 24 hour
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            bottled water, complimentary
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Coffee/tea maker
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Instant hot water
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Mini Fridge
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Air-conditioned
                        </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            4 adults
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            2 children
                        </span> 
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4">₹20000 per night</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                </div>
            </div>
            </div>

            <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="rooms/image3.png" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h5 class="mb-3">Deluxe Suite, 1 King</h5>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            1 King
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Featherbed
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Rollaway beds permitted: 1 at ₹1500 per night
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Marble bathroom
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Shower/tub combination
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Lighted makeup room
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Robe & Slippers
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            Sofa
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Featherbed
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Room service, 24 hour
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            bottled water, complimentary
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Coffee/tea maker
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Instant hot water
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Mini Fridge
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            Air-conditioned
                        </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark text-wrap">
                            8 adults
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                            6 children
                        </span> 
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4">₹30000 per night</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                </div>
            </div>
            </div>
       </div>
    </div>
</div>

<?php require('inc/footer.php'); ?>


</body>
</html>