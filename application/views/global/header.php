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
    <link rel="stylesheet" type="text/css" href="<?php echo CSS . 'slick/slick.css' ?> " />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS . 'slick/slick-theme.css' ?> " />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex">
    <meta name="googlebot-news" content="nosnippet">

    <link rel="stylesheet" href="https://unpkg.com/flexmasonry/dist/flexmasonry.css">
    <title>Nice</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo BASEURL ?>"><img src="<?php echo BASEURL . 'logo.png' ?>"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo BASEURL . 'about' ?>">About Nice</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL . 'about/aboutpik' ?>">About PIK2</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL . 'about/aboutasg' ?>">About Agung Sedayu Group</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASEURL . 'event' ?>">Events</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Venue
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo BASEURL . 'OurVanue/ExhibitionCenter' ?>">Exhibition Center</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL . 'OurVanue/ConventionBuilding' ?>">Convention Building</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL . 'OurVanue/MeetingRoom' ?>">Meeting Room</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL . 'OurVanue/semioutdoor' ?>">Semi Outdoor Exhibition Area</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL . 'OurVanue/vanuemap' ?>">Venue Map</a></li>
                            <li><a class="dropdown-item" href="#">Virtual Tour</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASEURL . 'visit' ?>">Visit Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASEURL . 'updates' ?>">Updates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASEURL . 'gallery' ?>">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASEURL . 'contactus ' ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>