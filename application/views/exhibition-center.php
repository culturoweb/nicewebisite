<main>

    <img src="<?php echo ASSETS . 'website/ec-1.jpg' ?>" width="100%" class="img-fluid">

    <div class="container">
        <section class="text-about mt-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center description-space">
                        <h2>Exhibition Center</h2>
                        <p>Unleash your vision at our state-of-the-art exhibition center, where innovation meets creativity. Showcasing spacious halls, cutting-edge facilities, and sleek architecture, we provide the perfect backdrop for your work. With advanced technology, flexible layouts, and dedicated staff, your event will be seamless. Choose our conveniently located venue for unforgettable experiences that leave a lasting impression.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="table mt-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 description-space">
                        <h2>Technical Specification</h2>
                        <table border="1">
                            <tr>
                                <th rowspan="2" bgcolor="yellow">Bulan</th>
                                <th colspan="2" bgcolor="#00ff80">Hasil Panen</th>
                            </tr>
                            <tr>
                                <th>Padi</th>
                                <th>Kacang</th>
                            </tr>
                            <tr>
                                <td>Januari</td>
                                <td>500 Kg</td>
                                <td>231 Kg</td>
                            </tr>
                            <tr>
                                <td>Februari</td>
                                <td>342 Kg</td>
                                <td>423 Kg</td>
                            </tr>
                            <tr>
                                <td>Maret</td>
                                <td>432 Kg</td>
                                <td>124 Kg</td>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td>453 Kg</td>
                                <td>523 Kg</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .ec-button .nav-item button {
                font-weight: bold;
                padding: 10px 80px 10px 80px;
                border-radius: 15px;
                border: 2px solid #171C8F;
                color: #171C8F;
                width: 100%;
                background-color: #fff;
            }

            .ec-button .nav-item button:hover {
                border-color: #171C8F;
            }

            .ec-button .nav-item {
                padding-right: 20px;
            }

            .nav-pills .nav-link.active,
            .nav-pills .show>.nav-link {
                width: 100%;
                background-color: #171C8F;
            }
        </style>
        <section class="banquet mt-5 ">
            <div class="container">
                <div class="row">
                    <div class="ec-button">
                        <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-ex-tab" data-bs-toggle="pill" data-bs-target="#pills-ex" type="button" role="tab" aria-controls="pills-ex" aria-selected="true">Exhibition Hall 1 & 2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-nt-tab" data-bs-toggle="pill" data-bs-target="#pills-nt" type="button" role="tab" aria-controls="pills-nt" aria-selected="false">Exhibition Hall 3</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-ex" role="tabpanel" aria-labelledby="pills-ex-tab" tabindex="0">
                            <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-gt-tab" data-bs-toggle="pill" data-bs-target="#pills-gt" type="button" role="tab" aria-controls="pills-gt" aria-selected="true"><i class="bi bi-cake2"></i><br>Banquet</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-ju-tab" data-bs-toggle="pill" data-bs-target="#pills-ju" type="button" role="tab" aria-controls="pills-ju" aria-selected="false"><i class="bi bi-book"></i><br>Classroom</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-er-tab" data-bs-toggle="pill" data-bs-target="#pills-er" type="button" role="tab" aria-controls="pills-er" aria-selected="false"><i class="bi bi-eyeglasses"></i><br>Concert</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-rt-tab" data-bs-toggle="pill" data-bs-target="#pills-rt" type="button" role="tab" aria-controls="pills-rt" aria-selected="false"><i class="bi bi-palette"></i><br>Exhibition</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-ty-tab" data-bs-toggle="pill" data-bs-target="#pills-ty" type="button" role="tab" aria-controls="pills-ty" aria-selected="false"><i class="bi bi-bicycle"></i><br>Sport Area</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-gt" role="tabpanel" aria-labelledby="pills-gt-tab" tabindex="0">
                                    <h1 class="fw-bold">Banquet Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-1.png' ?>" width="60%" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pills-ju" role="tabpanel" aria-labelledby="pills-ju-tab" tabindex="0">
                                    <h1 class="fw-bold">Classroom Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-2.png' ?>" width="60%" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pills-er" role="tabpanel" aria-labelledby="pills-er-tab" tabindex="0">
                                    <h1 class="fw-bold">Concert Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-3.png' ?>" width="60%" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pills-rt" role="tabpanel" aria-labelledby="pills-rt-tab" tabindex="0">
                                    <h1 class="fw-bold">Exhibition Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-4.png' ?>" width="60%" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pills-ty" role="tabpanel" aria-labelledby="pills-ty-tab" tabindex="0">
                                    <h1 class="fw-bold">Sport Area Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-5.png' ?>" width="60%" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-nt" role="tabpanel" aria-labelledby="pills-nt-tab" tabindex="0">
                            <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-as-tab" data-bs-toggle="pill" data-bs-target="#pills-as" type="button" role="tab" aria-controls="pills-as" aria-selected="true"><i class="bi bi-cake2"></i><br>Banquet</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-sd-tab" data-bs-toggle="pill" data-bs-target="#pills-sd" type="button" role="tab" aria-controls="pills-sd" aria-selected="false"><i class="bi bi-book"></i><br>Classroom</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-df-tab" data-bs-toggle="pill" data-bs-target="#pills-df" type="button" role="tab" aria-controls="pills-df" aria-selected="false"><i class="bi bi-eyeglasses"></i><br>Concert</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-fg-tab" data-bs-toggle="pill" data-bs-target="#pills-fg" type="button" role="tab" aria-controls="pills-fg" aria-selected="false"><i class="bi bi-palette"></i><br>Exhibition</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-gh-tab" data-bs-toggle="pill" data-bs-target="#pills-gh" type="button" role="tab" aria-controls="pills-gh" aria-selected="false"><i class="bi bi-bicycle"></i><br>Sport Area</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-as" role="tabpanel" aria-labelledby="pills-as-tab" tabindex="0">
                                    <h1 class="fw-bold">Banquet Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-6.png' ?>" width="60%" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pills-sd" role="tabpanel" aria-labelledby="pills-sd-tab" tabindex="0">
                                    <h1 class="fw-bold">Classroom Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-7.png' ?>" width="60%" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pills-df" role="tabpanel" aria-labelledby="pills-df-tab" tabindex="0">
                                    <h1 class="fw-bold">Concert Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-8.png' ?>" width="60%" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pills-fg" role="tabpanel" aria-labelledby="pills-fg-tab" tabindex="0">
                                    <h1 class="fw-bold">Exhibition Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-9.png' ?>" width="60%" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pills-gh" role="tabpanel" aria-labelledby="pills-gh-tab" tabindex="0">
                                    <h1 class="fw-bold">Sport Area Layout</h1>
                                    <img src="<?php echo ASSETS . 'website/bn-10.png' ?>" width="60%" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="table mt-5 ">
            <div class="container">
                <div class="row description-space">
                    <h2>Room Priview</h2>
                    <div class="metting-img">
                        <img src="<?php echo ASSETS . 'website/vm-1.jpeg' ?>" class="img-fluid" width="50%">
                        <img src="<?php echo ASSETS . 'website/vm-2.jpeg' ?>" class="img-fluid" width="50%">
                        <img src="<?php echo ASSETS . 'website/vm-3.jpeg' ?>" class="img-fluid" width="50%">
                        <img src="<?php echo ASSETS . 'website/vm-4.jpeg' ?>" class="img-fluid" width="50%">
                        <img src="<?php echo ASSETS . 'website/vm-5.jpeg' ?>" class="img-fluid" width="50%">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .buttom-event {

            background-color: #E3E4F2;

            width: 100%;

        }



        .buttom-event .btn-danger {

            background-color: #171C8F;

            color: #E3E4F2;

            border-color: #171C8F;

            width: 20%;

        }



        .buttom-event .btn-danger a:hover {

            background-color: #171C8F;

            color: #E3E4F2;

        }
    </style>
    <section class="buttom-event mt-5 ">

        <div class="container">

            <div class="row text-center justify-content-center">

                <h2 class="mt-5 mb-5" style="font-weight: bold;">Ready to transform your dream event with us? </h2>

                <h4 class="mb-5">At Nusantara International Convention Exhibition, your event dreams take flight. Whether you're envisioning an intimate gathering or a grand spectacle, we'll work with you to bring your vision to life in every detail.</h4>

                <a href="" class="btn btn-danger mb-5">Plan Your Event Now</a>

            </div>

        </div>

    </section>









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

        <!-- Footer -->

        <footer class="text-center text-lg-start bg-body-tertiary text-muted">

            <!-- Section: Links  -->

            <section class="">

                <div class="container text-center text-md-start p-4">

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

                                Jl. KH Mas Mansyur PIK 2, Salembaran, Kec. Kosambi, Kabupaten Tangerang, Banten 15214

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