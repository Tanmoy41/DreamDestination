<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="#">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <style>
        /*** About Start ***/
        .about .container .section-about-title {
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            color: var(--bs-primary);
        }

        .about .container .section-about-title::before {
            content: "";
            width: 50px;
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            margin-right: -50px;
            border: 1px solid var(--bs-primary) !important;
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
</head>
<body>

  <!-- About Start -->
<div class="container-fluid py-5" style="margin-top: 0px;">
    <div class="py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100 border border-primary"
                    style="border-color: transparent #13357B transparent #13357B;">
                    <img src="img/about-img.jpg" class="img-fluid w-60 h-50" alt="">
                </div>
            </div>
            <div class="col-lg-7"
                style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">About Us</h5>
                <h1 class="mb-4">Welcome to <span class="text-primary">Dream Destination</span></h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum,
                    doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam
                    assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                    suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                    numquam perferendis provident placeat molestiae quia?</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0">First Class Flights</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0">Handpicked Hotels</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0">5 Star Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0">Latest Model Vehicles</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0">150 Premium City Tours</p>
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
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                            <div class="service-content text-end pe-4">
                                <h5 class="mb-4">Restaurant Service</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- More service items -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                            <div class="service-content ps-4">
                                <h5 class="mb-4">Hotel Service</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- More service items -->
                </div>
            </div>
        </div>
        <div class="row g-4 ps-2 pe-2">
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                            <div class="service-content text-end pe-4">
                                <h5 class="mb-4">Hotel Service</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- More service items -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                            <div class="service-content ps-4">
                                <h5 class="mb-4">Hotel Service</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- More service items -->
                </div>
            </div>
        </div>
        <div class="row g-4 ps-2 pe-2">
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                            <div class="service-content text-end pe-4">
                                <h5 class="mb-4">Restaurant Service</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- More service items -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                            <div class="service-content ps-4">
                                <h5 class="mb-4">Hotel Service</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- More service items -->
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
            doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti
            eum cum repellat a laborum quasi.
        </p>
    </div>
    <div class="tab-class text-center">
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
                    <!-- More gallery items -->
                </div>
            </div>
        </div>
    </div>
</div>


    <?php include('footer.php');
    ?>
</body>

</html>