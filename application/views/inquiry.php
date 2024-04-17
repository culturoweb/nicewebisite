<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo CSS . 'style.css' ?>">
    <title>Nice</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="<?php echo BASEURL . 'logo.png' ?>"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <main>
        <div class="container">
            <section class="image-benner">
                <div class="container-fluid mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">

                            <img src="<?php echo ASSETS . 'website/inquiry.jpeg' ?>" width="50%" class="img-fluid rounded mx-auto d-block">
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-about mt-5 ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center description-space">
                            <h2>Inquiry Sent Successfully</h2>
                            <p>Thank you for your interest in Nusantara International Convention Exhibition! We've received your inquiry and our dedicated sales team will be in reach you soon to discuss your event vision and how we can make it a reality.</p>
                            <a href="" class="btn btn-success tombol-back">Back To Home</a>
                        </div>
                    </div>
                </div>
            </section>


        </div>




        <style>
            footer {
                background-color: #171C8F;
                color: #fff;
            }

            footer p,
            h6 {
                color: #fff;
            }

            .tombol-download {
                color: #171C8F;
            }

            .tombol-back {
                background-color: #171C8F;
                color: #fff;
            }

            footer a {
                text-decoration: none;
            }

            .circle {
                height: 50px;
                width: 50px;
                background-color: #fff;
                border-radius: 50%;
                margin-right: 7px;
            }

            .circle i {
                color: #171C8F;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 25px;
                margin-top: 13px;

            }

            .icon {
                display: flex;
                align-items: center;
            }
        </style>
        <section class="footer">
            <<!-- Footer -->
                <footer class="text-center text-lg-start bg-body-tertiary text-muted">
                    <!-- Section: Links  -->
                    <section class="">
                        <div class="container text-center text-md-start mt-5 p-4">
                            <!-- Grid row -->
                            <div class="row mt-3">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                    <!-- Content -->
                                    <img src="<?php echo ASSETS . 'website/logo-putih.png' ?>" width="80%" class="image-fluid">
                                    <p>
                                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                                        dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                    <h6>Follow our social media</h6>
                                    <div class="icon">
                                        <div class="circle">
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                        </div>
                                        <div class="circle">
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                        </div>
                                        <div class="circle">
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                        <div class="circle">
                                            <a href=""><i class="bi bi-youtube"></i></a>
                                        </div>
                                        <div class="circle">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        Quick Link
                                    </h6>
                                    <p>
                                        <a href="#!" class="text-reset">About Us</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Events</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Our Venue</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Visit Us</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Updates</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Gallery</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Contact Us</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold">
                                        Address
                                    </h6>
                                    <p>
                                    Jl. M.H. Thamrin, Pantai Indah Kapuk 2, Salembaran, Kec. Kosambi, Kabupaten Tangerang, Banten 15214
                                    </p>

                                    <h6 class="text-uppercase fw-bold">
                                        Email
                                    </h6>
                                    <p>
                                        info@nice.com
                                    </p>

                                    <h6 class="text-uppercase fw-bold">
                                        Phone
                                    </h6>
                                    <p>
                                        +62 21 1234 1234
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold">Part Of</h6>
                                    <img src="<?php echo ASSETS . 'website/logo-bw-1.png' ?>" width="50%" class="image-fluid">
                                    <img src="<?php echo ASSETS . 'website/logo-bw.png' ?>" width="45%" class="image-fluid">
                                    <h6 class="text-uppercase fw-bold">Download E-Brochure</h6>
                                    <p>
                                        We kindly invite you to explore our comprehensive e-brochure, which provides detailed information about our products/services.
                                    </p>
                                    <a href="" class="btn btn-light tombol-download">DOWNLOAD HERE</a>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </section>
                    <!-- Section: Links  -->

                    <!-- Copyright -->
                    <div class="text-center p-4" style="background-color: #fff; color:#171C8F">
                        Nusantara International Convention Exhibition © 2023 All Rights Reserved.
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>