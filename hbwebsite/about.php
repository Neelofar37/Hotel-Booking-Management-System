<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystical Suites - ABOUT</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@07/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php require ("inc/links.php"); ?>
    <style>
        .box {
            border-top-color: var(--black) !important;
        }
    </style>
</head>


<body class="bg-light">

    <?php require ('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            "Mystical Suites" offers a range of top-notch facilities to ensure a delightful stay.
            Guests can unwind in the rooftop pool, or stay active in the fitness center.
            Exquisite dining options tantalize the taste buds, while personalized concierge services cater to every
            need.
            With attentive staff and luxurious amenities, Mystical Suites promises an unforgettable experience.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">About the Property:</h3>
                <p>
                    Our hotel features meticulously designed rooms and suites, each adorned with modern amenities and
                    stylish décor.
                    From our rooftop pool with panoramic city views to our rejuvenating spa and fitness center, we cater
                    to the needs of discerning travelers seeking comfort and relaxation.
                    Situated in New Orleans, our hotel provides easy access to iconic landmarks such as the Hollywood
                    Walk of Fame, Griffith Observatory, and the Getty Center.
                    Guests can explore the vibrant culture, entertainment, and culinary delights that New Orleans has to
                    offer, all within reach from our doorstep.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/image5.png" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="facilities/Hotel.svg" width="70px">
                    <h4 class="mt-3">Architectural Majesty</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="facilities/view.svg" width="70px">
                    <h4 class="mt-3">Scenic Outlook</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="facilities/review.svg" width="70px">
                    <h4 class="mt-3">150+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="facilities/staff.svg" width="70px">
                    <h4 class="mt-3">200+ Staff</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <?php
                $about_r = selectAll('team_details');
                $path = ABOUT_IMG_PATH;
                while ($row = mysqli_fetch_assoc($about_r)) {
                    echo <<<data
                        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                            <img src="$path$row[picture]" class="w-100">
                            <h5 class="mt-2">$row[name]</h5>
                        </div>
                    data;
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require ('inc/footer.php'); ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });    
    </script>

</body>

</html>