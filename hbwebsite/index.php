<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystical Suites - HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <?php require ("inc/links.php"); ?>

    <style>
        .swiper-slide img {
            width: 100%;
            /* Set the width to fill the container */
            height: 590px;
            /* Set a fixed height, adjust as needed */
            object-fit: cover;
            /* Ensure the image covers the container */
        }

        .availabilty-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availabilty-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }

        .star {
            font-size: 39px;
        }
    </style>
</head>

<body class="bg-light">

    <?php require ('inc/header.php'); ?>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <?php
                $res = selectAll('carousel');
                while ($row = mysqli_fetch_assoc($res)) {

                    $path = CAROUSEL_IMG_PATH;
                    echo <<<data
                        <div class="swiper-slide">
                            <img src="$path$row[image]">
                        </div>
                    data;
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Checking room availability -->
    <div class="container availabilty-form">
        <div class="row">
            <div class="col-lg-12 bg-white shodow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                                <option value="6">Six</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                                <option value="6">Six</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">ROOMS AND SUITES</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="rooms/image1.png" class="card-img-top">

                    <div class="card-body">
                        <h5>Guest Room, 1 King</h5>
                        <h6 class="mb-4">₹10000 per night</h6>
                        <div class="features mb-4">
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
                                2 adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                1 children
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="rooms/image2.png" class="card-img-top">

                    <div class="card-body">
                        <h5>Executive Suite, 1 King</h5>
                        <h6 class="mb-4">₹20000 per night</h6>
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

                        <div class="Special Features mb-4">
                            <h6 class="mb-1">Special Features</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                This room features executive lounge access
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                High speed Wi-Fi
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Private access floor
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Includes two way airport transfer
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Complimentary non-alcoholic beverages
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="rooms/image3.png" class="card-img-top">

                    <div class="card-body">
                        <h5>Deluxe Suite, 1 King</h5>
                        <h6 class="mb-4">₹30000 per night</h6>
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

                        <div class="Special Features mb-4">
                            <h6 class="mb-1">Special Features</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                This room features executive lounge access
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                High speed Wi-Fi
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Private access floor
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Includes two way airport transfer
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Complimentary non-alcoholic beverages
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="facilities/pool.svg" width="80px">
                <h5 class="mt-3">Swimming Pool</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="facilities/jacuzzi.svg" width="80px">
                <h5 class="mt-3">Jacuzzi Bath</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="facilities/service.svg" width="80px">
                <h5 class="mt-3">Room Service</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="facilities/laundry.svg" width="80px">
                <h5 class="mt-3">Laundry Service</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="facilities/gym.svg" width="80px">
                <h5 class="mt-3">Gym</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Reviews -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REVIEWS</h2>

    <div class="container mt-5">
        <div class="swiper swiper-reviews">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white">
                    <div class="profile d-flex align-items-center mb-0">
                        <!-- <img src="facilities/star.svg" width="30px"> -->
                        <div class="icon">
                            &#128100;
                        </div>
                        <h6 class="m-0 ms-2">Caroline</h6>
                    </div>
                    <p>
                        The rooms are cozy and inviting, and the staff is incredibly attentive. A perfect retreat for
                        anyone seeking a peaceful getaway!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white">
                    <div class="profile d-flex align-items-center mb-0">
                        <!-- <img src="facilities/star.svg" width="30px"> -->
                        <div class="icon">
                            &#128100;
                        </div>
                        <h6 class="m-0 ms-2">Damon</h6>
                    </div>
                    <p>
                        Mystical Suites is a true gem! The intimate setting and personalized service made me feel right
                        at home. Can't wait to experience the magic again!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white">
                    <div class="profile d-flex align-items-center mb-0">
                        <!-- <img src="facilities/star.svg" width="30px"> -->
                        <div class="icon">
                            &#128100;
                        </div>
                        <h6 class="m-0 ms-2">Cassie</h6>
                    </div>
                    <p>
                        Mystical Suites offers a culinary adventure like no other! From breakfast to dinner, every bite
                        is bursting with flavor and creativity. A foodie's paradise that leaves you satisfied and
                        craving seconds!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Reach Us -->



    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>"
                        class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +
                        <?php echo $contact_r['pn1'] ?>
                    </a>
                    <br>
                    <?php
                    if ($contact_r['pn2'] != '') {
                        echo <<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i> + $contact_r[pn2]
                            </a>
                        data;
                    }
                    ?>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: ask.mysticalsuties@gmail.com"
                        class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-at-fill"></i> ask.mysticalsuites@gmail.com
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <?php
                    if ($contact_r['tw'] != '') {
                        echo <<<data
                            <a href="$contact_r[tw]" class="d-inline-block mb-3">
                                <span class="badge bg-light text-dark fs-6 p-2">
                                    <i class="bi bi-twitter-x"></i> Twitter
                                </span>
                            </a>
                        data;
                    }
                    ?>
                    <br>
                    <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php require ('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-reviews", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            // breakpoints: {
            //     320: {
            //         slidesPerView: 1,
            //     }
            // 640: {
            //         slidesPerView: 1,
            //     }
            // 768: {
            //         slidesPerView: 2,
            //     }
            // 1024: {
            //         slidesPerView: 3,
            //     }
            // }
        });

    </script>


</body>

</html>