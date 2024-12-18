<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <style>
        /*** About Start ***/
        .section-about-title {
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            color: var(--bs-primary);
        }

        /*** About End ***/

        /*** Gallery Start ***/
        .gallery .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .gallery .gallery-item img {
            min-height: 300px;
            object-fit: cover;
        }

        /*** Gallery End ***/
    </style>
</head>

<body>
    <?php
    include('navbar.php')
        ?>
    <!-- About Start -->
    <div class="container-fluid py-5 ps-5">
        <div class="py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-50" style="border-color: transparent #13357B transparent #13357B;">
                        <img src="img/home_photo.jpg" class="img-fluid" alt="" style="height:400px; width: 400px;">
                    </div>
                </div>
                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">About Us</h5>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Dream Destination</span></h1>
                    <p class="mb-4">Welcome to our hub of hospitality and convenience! Dive into a world where delectable dining, luxurious accommodations, and seamless travel arrangements await. Embrace the journey with our integrated restaurant, hotel, and bus ticket booking services.</p>
                    <div class="row gy-2 gx-4 mb-4">

                        <div class="col-sm-6">
                            <p class="mb-0">First Class Bus Travel</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0">Handpicked Hotels</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0">5 Star Accommodations</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0">24/7 Service</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light py-5">
        <div class="py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Services</h5>
                <h1 class="mb-0">Our Services</h1>
            </div>

            <div class="row g-4 ps-2 pe-2">

                <div class="col-lg-6">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-10">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-warning rounded p-4">
                                <div class="service-content text-end pe-4">
                                    <h5 class="mb-4">Restaurant Service</h5>
                                    <p class="mb-0">Savor culinary delights crafted with passion and precision at our restaurant, where every meal is a celebration of flavor and hospitality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-10">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-warning rounded p-4">
                                <div class="service-content ps-4">
                                    <h5 class="mb-4">Restaurant Service</h5>
                                    <p class="mb-0">Savor culinary delights crafted with passion and precision at our restaurant, where every meal is a celebration of flavor and hospitality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row g-4 ps-2 pe-2 mt-2">

                <div class="col-lg-6">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-10">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-warning rounded p-4">
                                <div class="service-content text-end pe-4">
                                    <h5 class="mb-4">Hotel Service</h5>
                                    <p class="mb-0">Indulge in unparalleled comfort and luxury at our hotel, where every stay is an experience of refined elegance and personalized service.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-10">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-warning rounded p-4">
                                <div class="service-content ps-4">
                                    <h5 class="mb-4">Hotel Service</h5>
                                    <p class="mb-0">Indulge in unparalleled comfort and luxury at our hotel, where every stay is an experience of refined elegance and personalized service.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row g-4 ps-2 pe-2 mt-2">

                <div class="col-lg-6">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-10">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-warning rounded p-4">
                                <div class="service-content text-end pe-4">
                                    <h5 class="mb-4">Bus Service</h5>
                                    <p class="mb-0">Embark on effortless journeys with our reliable bus service, ensuring safe, convenient, and enjoyable travel experiences for every passenger
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-10">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-warning rounded p-4">
                                <div class="service-content ps-4">
                                    <h5 class="mb-4">Bus Service</h5>
                                    <p class="mb-0">Embark on effortless journeys with our reliable bus service, ensuring safe, convenient, and enjoyable travel experiences for every passenger
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5 my-5">
        <div class="mx-auto text-center mb-5" style="max-width: 800px;">
            <h5 class="section-title px-3">Our Gallery</h5>
            <h1 class="mb-4">Traveling Gallery.</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat
                corrupti
                eum cum repellat a laborum quasi.
            </p>
        </div>
        <div class="tab-class text-center pe-2 ps-2">
            <div class="tab-content">
                <div class="tab-pane fade show p-0 active">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-1.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-3.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-4.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-5.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-6.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-7.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-8.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-9.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="img/gallery-10.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php');
    ?>
</body>

</html>