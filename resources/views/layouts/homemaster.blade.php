<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 11:49:26 GMT -->

<head>
    <meta charset="utf-8">
    <title>{{ $site_details[0]->sitename }}</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add these links in the <head> section of your HTML document -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap">


    <link href="{{ url('public/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rvCmN5lLPWk9ZFBq8v8VzL4pF6Eu/jl5F5n5n5n5n5n5n5n5n5n5n5n5n5n5n5n5n5n5" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"
        integrity="sha384-Rn538y5F5EC5CyTCWT5/Cs5eHV8l5X6w5V5X6w5X6w5X6w5V5X6w5X6w5X6w5V5X6w5" crossorigin="anonymous">
    </script>

    <link href="{{ url('public/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- Responsive File -->
    <link href="{{ url('public/assets/css/responsive.css') }}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{ url('public/assets/css/color.css') }}" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ url('public/assets/images/fav.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('public/assets/images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <style>
        .copyright-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.flag-india {
    display: flex;
    align-items: center;
    gap: 5px; /* Adjust the gap as needed */
}

        
         html,
    body {
        scroll-behavior: smooth;
    } 
    </style>
    <style>
        a {
            text-decoration: none !important;
        }

       

        /*!
 * three-dots - v0.3.2
 * CSS loading animations made with single element
 * https://nzbin.github.io/three-dots/
 *
 * Copyright (c) 2018 nzbin
 * Released under MIT License
 */
        @charset "UTF-8";

        /**
 * ==============================================
 * Dot Elastic
 * ==============================================
 */
    </style>
    <style>
        /* Add this CSS for mobile responsiveness */
        /* Add this CSS for mobile responsiveness */
        @media (max-width: 746px) {
            .pb{
                /* float: left; */
                margin-left:250px !important;
            }
        }
        @media (max-width: 320px) {
            .pb{
                /* float: left; */
                margin-left:250px !important;
            }
            .row {
                flex-direction: column;
                display: flex;
            }

            .widget {
                text-align: center;
                margin-bottom: 20px;
                width: 100%;
            }

            .widget.contact-widget {
                text-align: center;
                width: 100%;
            }

            .icon-box {
                display: flex;
                align-items: center;
                width: 100%;
            }

            .icon-box .icon {
                width: 100%;
                margin-right: 10px;
            }

            .social-icon {
                width: 100%;
                text-align: center;
                margin-top: 10px;
            }

            .widget.links-widget ul.list {
                width: 100%;
                margin-left: 0;
                padding-left: 0;
                list-style: none;
            }

            .widget_title {
                width: 100%;
                margin-bottom: 10px;
            }

            .widget_title:after {
                content: "";
                display: block;
                width: 20px;
                height: 2px;
                background-color: #000;
                margin-top: 5px;
                width: 100%;
            }
        }



        html,
        body {
            height: 100%;
            background: #f6f7fd;
            font-size: 16px;
        }

        .heading {
            margin: 36px 0;
            padding: 24px 32px;
            background: rgba(255, 255, 255, 0.4);
            border: 1px solid rgba(0, 32, 128, 0.12);
            border-radius: 16px;
            font-size: 18px;
        }
        .has-search{
            margin-left:-20px;
        }

        .snippet {
            position: relative;
            background: #fff;
            padding: 32px 5%;
            margin: 24px 0;
            box-shadow: 0 4px 12px -2px rgba(0, 32, 128, .1), 0 0 0 1px rgba(60, 80, 120, 0.1);
            border-radius: 16px;
        }

        .snippet::before {
            display: inline-block;
            position: absolute;
            top: 6px;
            left: 6px;
            padding: 0 8px;
            content: attr(data-title);
            font-size: 12px;
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            color: white;
            background-color: rgb(255, 25, 100);
            border-radius: 10px;
            line-height: 20px;
        }

        .snippet:hover {
            cursor: pointer;
            outline: 2px solid rgb(255, 25, 100);
        }
        .stage {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 32px 0;
            margin: 0 -5%;
            overflow: hidden;
        }

        .filter-contrast {
            filter: contrast(5);
            background-color: white;
        }

        .footer {
            margin: 120px 0 20px;
            text-align: center;
            overflow: auto;
        }

        .tooltip::after {
            position: absolute;
            top: 100%;
            left: 50%;
            margin-top: 8px;
            padding: 6px 8px;
            border-radius: 4px;
            font-size: 12px;
            line-height: 1;
            color: white;
            background-color: rgba(97, 97, 97, .9);
            transform: translateX(-50%);
            content: attr(aria-label);
            pointer-events: none;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Mobile-first styles (apply to all screen sizes) */

        /* Your existing styles for the footer can remain here */

        /* Media query for screens with a maximum width of 768px (typical mobile devices) */
        @media screen and (max-width: 768px) {
            .main-footer {
                /* Adjust the styles for the main footer container */
                padding: 20px;
                /* Add padding to provide spacing for mobile devices */
            }

            .col-2 {
                /* Adjust styles for the first column (Rider and User App) */
                width: 100%;
                /* Make it full-width on mobile devices */
                text-align: center;
                /* Center the content */
                margin-bottom: 20px;
                /* Add spacing between columns */
            }

            .col-4 {
                /* Adjust styles for the second column (Contact Us) */
                width: 100%;
                /* Make it full-width on mobile devices */
                text-align: center;
                /* Center the content */
                margin-bottom: 20px;
                /* Add spacing between columns */
            }

            .col-3 {
                /* Adjust styles for the third and fourth columns (Useful Links and Policy) */
                width: 100%;
                /* Make them full-width on mobile devices */
                text-align: center;
                /* Center the content */
                margin-bottom: 20px;
                /* Add spacing between columns */
            }

            /* You can further adjust styles as needed for specific elements within the columns */
        }

        /* Mobile-first styles (apply to all screen sizes) */

        /* Your existing styles for the footer can remain here */

        /* Media query for screens with a maximum width of 768px (typical mobile devices) */
        @media screen and (max-width: 768px) {
            .main-footer .row {
                flex-direction: column;
                /* Stack columns vertically on mobile */
            }

            .col-2,
            .col-4,
            .col-3 {
                width: 100%;
                /* Make all columns full-width on mobile devices */
                text-align: center;
                /* Center the content */
                margin-bottom: 20px;
                /* Add spacing between columns */
            }
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Reset default list styles */
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Semi-transparent background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .dots {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Semi-transparent background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .dot {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: #d3ff53;
            border-radius: 50%;
            animation: loading 1.8s infinite ease-in-out;

        }

        @keyframes loading {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.5);
            }
        }

        .contentt {
            display: none;
            /* Initially hide the content */
            /* Add your content styles here */
        }
        /* Style for the scroll-to-top button */
        @media (max-width: 480px) {
            .ridr{
        margin-top:-70px !important;
    }
    .gplay{
        margin-top:20px !important;
        margin-bottom: 30px !important;

    }
    .inner-container{
            margin-right: 0px !important;
        }
        .disblo{
            display:block !important;
        }
        }

    </style>







</head>

<body class="js-scroll" id="scroll-container">

    <div class="page-wrapper">
        <!-- Preloader -->

    </div>







    <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Simulate a 1.2-second loading time (adjust as needed)
            setTimeout(function() {
                // Hide the preloader
                document.querySelector(".dots").style.display = "none";

                // Display the content
                document.querySelector(".content").style.display = "block";

                // Remove the blur effect
                document.body.style.overflow = "auto";
            }, 1200);
        });
    </script>
    <!-- Main Header -->

    <header class="main-header header-style-one">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container" style="margin-right:-38px;">
                    <div class="left-column">
                        <ul class="social-icon ">
                            <li><a href="{{ url('/') }}"><img src="{{ url('public/assets/images/do.png') }}"
                                        style="width: 180px; margin-left:-40px;" ></a></li>
                            <!-- <li class="right-column  myhiddennav  myhiddennav2"><a href="https://www.facebook.com/donkeydeliveries/"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="right-column myhiddennav myhiddennav2"><a href="https://twitter.com/doNkeyDeliverys?t=CcXdqICxVYHRRnr1pE-zug&s=08"><i class="fab fa-twitter"></i></a></li>
                                <li class="right-column myhiddennav myhiddennav2"><a href="#"><i-->
                            <!--            class="fab fa-google-plus-g"></i></a></li>-->
                            <!-- <li class="right-column myhiddennav myhiddennav2"><a href="https://instagram.com/do_n_key_deliveries?igshid=NTc4MTIwNjQ2YQ=="><i class="fab fa-instagram"></i></a></l
                                <li class="right-column myhiddennav myhiddennav2"><a href="#"><i-->
                            <!--            class="fab fa-youtube"></i></a></li>-->
                        </ul>
                        <div class="right-column header-upper myhiddennav1 myhiddennav  ">
                            <!--Nav Box-->
                            <div class="nav-outer  ">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img
                                        src="{{ url('public/assets/images/icons/icon-bar.png') }}" alt="" style="margin-top: -147px;">
                                </div>

                                <!-- Main Menu -->
                                <!-- <nav class="main-menu navbar-expand-md navbar-light">
                                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                           <div class="navigations">                                                    <form class="form-inline" id="search-form" action="your-action-url" method="post">
                                                        <div class="form-group has-search" style="font-size: 12px;">
                                                            <span class="fa fa-search form-control-feedback" id="search-icon"></span>
                                                            <input type="text" class="form-control" placeholder="Search" name="search_query">
                                                        </div>
                                                    </form>
                                                    <script>
                                                        // Add an event listener to the search icon
                                                        document.getElementById("search-icon").addEventListener("click", function() {
                                                            // Get the form element
                                                            var form = document.getElementById("search-form");

                                                            // Submit the form
                                                            form.submit();
                                                        });
                                                    </script>
                                                    </div>


                                            <ul class="navigation " style="margin-right: 70px;">
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('about') }}">About Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('services') }}">Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </nav> -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent"
                                        style="margin-left:79px;">
                                        <!-- Search Form -->
                                        {{-- <form class="form-inline sb d-none d-md-block" action="{{ url('/') }}" method="get" style="padding-bottom: -17px;">
                                            @csrf
                                            <div class="form-group has-search" style="font-size: 12px;">
                                                <span class="fa fa-search form-control-feedback" id="search-icon"></span>
                                                <div class="input-container">
                                                    <input id="pincode-input" type="text" class="form-control" placeholder="Search Pincode" name="pincode" value="{{ request('pincode') }}"
                                                        style="background: none !important; border: none !important;"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, ''); if (this.value.length > 6) this.value = this.value.slice(0, 6);">
                                                </div>
                                            </div>
                                            @if (request('pincode') && $notification)
                                                <small id="notification" style="color: {{ $notificationColor ?? 'red' }}; padding-left:5px;">
                                                    {{ $notification }} <span id="clear-notification" style="cursor: pointer;">&times;</span>
                                                </small>
                                            @endif
                                        </form>
                                        
                                        <script>
                                            @if (request('pincode') && $notification)
                                                // Execute this JavaScript code when the clear (X) symbol in the notification is clicked
                                                document.getElementById('clear-notification').addEventListener('click', function() {
                                                    document.getElementById('pincode-input').value = ''; // Clear the input field
                                                    document.getElementById('notification').textContent = ''; // Clear the notification text
                                                });
                                            @endif
                                        </script> --}}
                                        {{-- <form class="form-inline sb d-none d-md-block" action="{{ url('/') }}" method="get" style="padding-bottom: -17px;"> --}}
                                            <form class="form-inline  d-sm-block d-md-block" action="{{ url('/') }}{{ request('pincode') ? '?pincode=' . request('pincode') : '' }}" method="get" style="padding-bottom: -17px;">

                                            @csrf
                                            <div class="form-group has-search" style="font-size: 12px;">
                                                <span class="fa fa-search form-control-feedback" id="search-icon"></span>
                                                <div class="input-container">
                                                    <input type="text"  id="pincode-input" class="form-control" placeholder="Search Pincode" name="pincode" value="{{ request('pincode') }}"
                                                        style="background: none !important; border: none !important;"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, ''); if (this.value.length > 6) this.value = this.value.slice(0, 6);">
                                                </div>
                                            </div>
                                            @if (request('pincode') && $notification)
                                                {{-- <small style="color: {{ $notificationColor ?? 'red' }}; padding-left:5px;"> {{ $notification }}</small> --}}
                                                <small id="notification" style="color: {{ $notificationColor ?? 'red' }}; padding-left:5px;">
                                                    {{ $notification }} <span id="clear-notification" style="cursor: pointer;">&times;</span>
                                                </small>
                                                @endif
                                        </form>
                                        {{-- <script>
                                            @if (request('pincode') && $notification)
                                                // Execute this JavaScript code when the clear (X) symbol in the notification is clicked
                                                
                                                document.getElementById('clear-notification').addEventListener('click', function() {
                                                    document.getElementById('pincode-input').value = ''; // Clear the input field
                                                    document.getElementById('notification').textContent = ''; // Clear the notification text
                                                    document.getElementById('clear-notification-form').submit(); // Submit the form to redirect
       
                                                    
                                                });
                                            @endif
                                        </script> --}}
                                        <script>
                                            @if (request('pincode') && $notification)
                                                // Execute this JavaScript code when the clear (X) symbol in the notification is clicked
                                                document.getElementById('clear-notification').addEventListener('click', function() {
                                                    document.getElementById('pincode-input').value = ''; // Clear the input field
                                                    document.getElementById('notification').textContent = ''; // Clear the notification text
                                        
                                                    // Remove the pincode parameter from the URL
                                                    const urlWithoutPincode = window.location.href.split('?')[0];
                                                    window.location.reload();
                                                    
                                                    // Update the URL without the pincode parameter
                                                    window.history.replaceState(null, null, urlWithoutPincode);
                                                });
                                            @endif
                                        </script>
                                        
                                        
                                        
                                        
                                        
                                        
                                        

                                        <!-- Navigation Links -->
                                        <ul class="navigation"
                                            style="margin-right: 70px; margin-left:22px; font-size: 12px;">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('about') }}">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('services') }}">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('pbp') }}">PBP</a>
                                            </li>

                                        </ul>
                                    </div>
                                </nav>

                            </div>
                            <!-- <div class="navbar-right-info ">

                                    <div class="sign-in "><a href="{{ url('login') }}"><i
                                                class="flaticon-delivery-man"></i>Sign In</a></div>

                                </div> -->
                        </div>
                    </div>
                    <div class="right-column myhiddennav  ">
                        <nav class="main-menu navbar-expand-md navbar-light a1">
                            <div class="collapse navbar-collapse show clearfix " id="navbarSupportedContent">

                                <ul class="navigation ">

                                    <li class=""><a href="{{ url('/') }}">Home</a>
                                        <!-- <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                                <li><a href="index-4.html">Home Page 04</a></li>
                                                <li><a href="onepage.html">Onepage</a></li>
                                            </ul> -->
                                    </li>
                                    <li class="dropdown "><a href="{{ url('about') }}">About Us</a>
                                        <!-- <ul>
                                                <li><a href="{{ url('about') }}">About Company</a></li>
                                                <li><a href="{{ url('history') }}">History</a></li>
                                                <li><a href="{{ url('leader') }}">Leadership Team</a></li>
                                                <li><a href="{{ url('global') }}">Global Networks</a></li>
                                            </ul> -->
                                    </li>
                                    <li class="dropdown "><a href="{{ url('services') }}">Services</a>
                                        <!-- <ul>
                                                <li><a href="{{ url('services') }}">Services</a></li>
                                                <li><a href="{{ url('about') }}"> Air Freight </a></li>
                                                <li><a href="{{ url('about') }}">Ocean Freight </a></li>
                                                <li><a href="{{ url('about') }}">Road Freight </a></li>
                                                <li><a href="{{ url('about') }}">Train Freight </a></li>
                                                <li><a href="{{ url('about') }}">Warehousing </a></li>
                                                <li><a href="{{ url('about') }}">Packaging</a></li>
                                            </ul> -->
                                    </li>
                                    
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                    <li>
                                        <a href="tel:{{ $site_details[0]->phone }}">
                                            <i class="flaticon-calling"></i>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="phone-number myhiddennav2">
                            {{-- <a href="{{url('login')}}"><i class="flaticon-delivery-man"></i>Sign In</a> --}}
                            <div class="row">
                                <div class="col">
                                    <div class="iconed" style="margin-top: 10px;  margin-right:-20px"> <i
                                            class="flaticon-calling"></i></div>
                                </div>
                                <div class="col">
                                    <a href="tel:{{ $site_details[0]->phone }}" style="display:inline-flex; width:116px;">
                                        @php
                                            $numbers = explode('/', $site_details[0]->phone);
                                            
                                        @endphp
                                        {{ $numbers[0] }}
                                        <br>
                                        {{ $numbers[1] }}
                                        <!-- {{ $site_details[0]->phone }} --> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper  myhiddennav1">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo">
                            {{-- <a href="{{url('/')}}"><img src="{{url('public/assets/images/do.png')}}" --}} {{-- style="width: 180px"></a> --}} </div>
                    </div>
                    <div class="right-column ">
                        <!--Nav Box-->
                        <div class="nav-outer ">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img
                                    src="{{ url('public/assets/images/icons/icon-bar.png') }}" alt="" style="margin-top: -147px;">
                            </div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li><a href="{{ url('/') }}">Home</a>
                                            <!-- <ul>
                                                    <li><a href="index.html">Home Page 01</a></li>
                                                    <li><a href="index-2.html">Home Page 02</a></li>
                                                    <li><a href="index-3.html">Home Page 03</a></li>
                                                    <li><a href="index-4.html">Home Page 04</a></li>
                                                    <li><a href="onepage.html">Onepage</a></li>
                                                </ul> -->
                                        </li>
                                        <li class="dropdown"><a href="{{ url('about') }}">About Us</a>
                                            <!-- <ul>
                                                    <li><a href="{{ url('about') }}">About Company</a></li>
                                                    <li><a href="{{ url('history') }}">History</a></li>
                                                    <li><a href="{{ url('leader') }}">Leadership Team</a></li>
                                                    <li><a href="{{ url('global') }}">Global Networks</a></li>
                                                </ul> -->
                                        </li>
                                        <li class="dropdown"><a href="{{ url('services') }}">Services</a>
                                            <!-- <ul>
                                                    <li><a href="{{ url('services') }}">Services</a></li>
                                                    <li><a href="{{ url('about') }}"> Air Freight </a></li>
                                                    <li><a href="{{ url('about') }}">Ocean Freight </a></li>
                                                    <li><a href="{{ url('about') }}">Road Freight </a></li>
                                                    <li><a href="{{ url('about') }}">Train Freight </a></li>
                                                    <li><a href="{{ url('about') }}">Warehousing </a></li>
                                                    <li><a href="{{ url('about') }}">Packaging</a></li>
                                                </ul> -->
                                        </li>
                                        <!-- <li class="dropdown"><a href="#">Pages</a>
                                                <ul>
                                                    <li class="dropdown"><a href="#">Portfolio</a>
                                                        <ul>
                                                            <li><a href="portfolio.html">Portfolio 02 Column</a></li>
                                                            <li><a href="portfolio-2.html">Portfolio 03 Column</a></li>
                                                            <li><a href="portfolio-3.html">Portfolio 04 Column</a></li>
                                                            <li><a href="portfolio-details.html">Portfolio Details</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="404.html">404</a></li>
                                                    <li><a href="faq.html">FAQ's</a></li>
                                                    <li><a href="request-quote.html">Request a Quote</a></li>
                                                    <li><a href="pricing-plan.html">Pricig Plan</a></li>
                                                </ul>
                                            </li> -->
                                        <!-- <li class="dropdown"><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">3 Columns Grid </a></li>
                                                    <li><a href="blog-2.html">3 Columns Sidebar</a></li>
                                                    <li><a href="blog-3.html">Large Image</a></li>
                                                    <li><a href="blog-details.html">Single Post</a></li>
                                                </ul>
                                            </li> -->
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- <div class="navbar-right-info">
                                    <div class="sign-in"><a href="{{ url('login') }}"><i
                                                class="flaticon-delivery-man"></i>Sign In</a></div>

                                </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{ url('/') }}"><img
                                        src="{{ url('public/assets/images/do.png') }}" style="width: 180px"
                                        alt=""></a></div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler "><img
                                        src="{{ url('public/assets/images/icons/icon-bar.png') }}" class="pb" alt="" style="margin-top: -147px;">
                                </div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <!-- <div class="navbar-right-info">
                                        <div class="sign-in"><a href="{{ url('login') }}"><i
                                                    class="flaticon-delivery-man-1"></i>Sign In</a>
                                        </div>

                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>

            <nav class="menu-box">
                <div class="nav-logo "><a href="{{ url('/') }}"><img
                            src="{{ url('public/assets/images/fav.png') }}" style="width: 100px; height:100px;" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                      
                        <li><a href="https://x.com/doNkey_Delivery?t=MNIa2Z-ja0QlsTExo4eDnQ&s=08"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/doNkey.app.deliveries?mibextid=ZbWKwL"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="https://instagram.com/donkey_deliveries?igshid=MzRlODBiNWFlZA=="><span class="fab fa-instagram"></span></a></li>
                        <li><a href="https://youtube.com/@doNkey_Delivery?si=VnSW6_eHtOQG5Zpg"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->

    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="{{ url('/') }}"><img
                                src="{{ url('public/assets/images/do.png') }}" style="width: 180px" alt="">
                            <div class="text">Demoralized by the charms of pleasure of the moment so blinded by
                                desire
                                that they cannot foresees the pain.</div>
                    </div>
                    <!-- PDF Widget -->
                    <div class="pdf-widget sidebar-widget">
                        <div class="row">
                            <div class="col-sm-6 column">
                                <div class="content">
                                    <div class="icon"><img src="{{ url('public/assets/images/icons/icon-8.png') }}"
                                            alt="">
                                    </div>
                                    <h4>Sender <br> Instructions</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 column">
                                <div class="content">
                                    <div class="icon"><img src="{{ url('public/assets/images/icons/icon-8.png') }}"
                                            alt="">
                                    </div>
                                    <h4>Sender <br> Instructions</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Widget -->
                    <div class="contact-widget">
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-cursor"></span></div>
                            <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-calling"></span></div>
                            <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 &
                                    790</a></div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-mail"></span></div>
                            <div class="text"><strong>Email</strong><a
                                    href="tel:(+61)32456789790">supportyou@transida.com</a></div>
                        </div>
                    </div>
                    <!-- Link Btn -->
                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i
                                    class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
                </div>
            </div>
    </section>

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>



    @yield('content')


    <!--Main Footer-->


    <footer class="main-footer">
        <div class="upper-box">
            <div class="auto-container">
                <div class="row">

                    <div class="col-md-2">
                        <div class="widget links-widget">

                            <h4 style="font-weight: 700;" class="ridr"> Rider App</h4><br>
                          <a href="https://play.google.com/store/apps/details?id=com.donkey.driverapp">  <img class="gplay" src="{{ asset('public/assets/images/play store.jpg') }}" alt="Rider App"
                                style="height: 35px; width:108px;">
                            <br> <br>
                            <h4 style="font-weight: 700;"> User App</h4><br>
                           <a href="https://play.google.com/store/apps/details?id=com.fertail.donkeyuser"> <img class="gplay" src="{{ asset('public/assets/images/play store.jpg') }}" alt="Rider App"
                                style="height: 35px; width:108px;"></a>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget contact-widget style-two">
                            <h4 class="widget_title"> Contact Us</h4>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="wrapper-box">
                                        {{-- <div class="icon-box">
                                            <div class="icon"><span class="flaticon-calling"></span></div>
                                            <div class="text"><strong></strong><a
                                                    href="tel:{{ $site_details[0]->phone }}">
                                                    @php
                                                        $numbers = explode('/', $site_details[0]->phone);
                                                        
                                                    @endphp
                                                    {{ $numbers[0] }}
                                                    <br>
                                                    {{ $numbers[1] }}
                                                    <!-- {{ $site_details[0]->phone }} --> </a>
                                            </div>
                                        </div> --}}
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-calling"></span></div>
                                            <div class="text"><strong></strong><a class="disblo" href="tel:{{ str_replace([' ', '-', '(', ')'], '', $numbers[0]) }}">
                                                @php
                                                    $numbers = explode('/', $site_details[0]->phone);
                                                @endphp
                                                {{ $numbers[0] }}
                                            </a>
                                                <br>
                                                <a href="tel:{{ str_replace([' ', '-', '(', ')'], '', $numbers[1]) }}">
                                              
                                                {{ $numbers[1] }}
                                                <!-- {{ $site_details[0]->phone }} --> 
                                            </a></div>
                                        </div>
                                        
                                        <div class="icon-box">
                                            <div class="icon" style="display: flex">
                                                <span class="flaticon-mail mr-3"></span>
                                            </div>
                                            <div class="text">
                                                <a href="tel:{{ $site_details[0]->email }}">
                                                    {{ $site_details[0]->email }}

                                                </a>
                                            </div>

                                        </div>








                                        <ul class="social-icon" style="margin-top: 10px">
                                            <li> <b>
                                                    Follow Us On:</b></li>
                                            <li><a href="https://www.facebook.com/doNkey.app.deliveries?mibextid=ZbWKwL"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a
                                                    href="https://x.com/doNkey_Delivery?t=MNIa2Z-ja0QlsTExo4eDnQ&s=08"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a
                                                    href="https://instagram.com/donkey_deliveries?igshid=MzRlODBiNWFlZA=="><i
                                                        class="fab fa-instagram"></i></a></li>
                                                        <li><a
                                                            href="https://youtube.com/@doNkey_Delivery?si=VnSW6_eHtOQG5Zpg"><i
                                                                class="fab fa-youtube"></i></a></li>
                                            <!--<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>-->
                                            <!--<li><a href="#"><i class="fab fa-youtube"></i></a></li>-->
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget links-widget">
                            <h4 class="widget_title">Useful Links</h4>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><a href="{{ url('about') }}">About Company</a></li>
                                    <li><a href="{{ url('contact') }}">Get In Touch</a></li>

                                    <li><a href="{{ url('services') }}">Our Services</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget links-widget">
                            <h4 class="widget_title">Policy</h4>
                            <div class="widget-content">
                                <ul class="list">


                                    <li><a href="{{ url('tc') }}">Terms And Conditions</a></li>

                                    <li><a href="{{ url('privacypolicyandcookies') }}">Privacy policy and cookies</a>
                                    </li>
                                    <li><a href="{{ url('returnandrefundpolicy') }}">Return and refund policy</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </footer>

    <!--End Main Footer-->

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row m-0 align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="copyright-container">
                        <div class="copyright-text text-dark">
                            Copyright © {{ now()->format('Y') }} <a href="{{ url('/') }}">{{ $site_details[0]->sitename }}</a>
                            All Rights Reserved. Patent Pending.
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <ul class="menu">
                        <!-- <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li> -->
                    </ul>
                </div>
                <div class="col-auto">
                    <span class="flag-india">
                        <img src=" {{ asset('public/assets/images/india.png') }}" alt="India Flag " style="height: 25px; width: 25px;">
                        <b>(IND)</b>
                    </span>
                </div>
            </div>
        </div>        
    </div>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    {{-- <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>
    </div> --}}
    <div class="scroll-to-top scroll-to-target" data-target="#top">
        <span class="flaticon-right-arrow-6"></span>
      </div>
      <script>
      // Get the scroll-to-top button element
      const scrollButton = document.querySelector('.scroll-to-top');
      
      // Add a scroll event listener to the window
      window.addEventListener('scroll', () => {
        // Show the button when scrolling down
        if (window.scrollY > 200) {
          scrollButton.style.display = 'block';
        } else {
          scrollButton.style.display = 'none';
        }
      });
      
      // Add a click event listener to the scroll button
      scrollButton.addEventListener('click', () => {
        // Scroll to the top of the page with a smooth transition
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    </script>
            
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');

            // Set the active link based on the current URL
            navLinks.forEach(function(link) {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });

            // Highlight the active link when scrolling to a section
            window.addEventListener('scroll', function() {
                const scrollPosition = window.scrollY;
                const sections = document.querySelectorAll('[data-scrollto]');

                sections.forEach(function(section) {
                    const offsetTop = section.offsetTop - 100; // Adjust the offset as needed
                    const targetLink = document.querySelector(
                        `.nav-link[href="#${section.getAttribute('data-scrollto')}"]`);

                    if (scrollPosition >= offsetTop) {
                        navLinks.forEach(function(link) {
                            link.classList.remove('active');
                        });
                        targetLink.classList.add('active');
                    }
                });
            });
        });
    </script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
          speed: 800, // Adjust the scrolling speed (milliseconds)
          offset: 0,  // Adjust the offset if needed (pixels)
        });
      </script>
      
    <script>
        new WOW().init();
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="{{ url('public/assets/js/jquery.js') }}"></script>
    <script src="{{ url('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ url('public/assets/js/isotope.js') }}"></script>
    <script src="{{ url('public/assets/js/owl.js') }}"></script>
    <script src="{{ url('public/assets/js/appear.js') }}"></script>
    <script src="{{ url('public/assets/js/wow.js') }}"></script>
    <script src="{{ url('public/assets/js/lazyload.js') }}"></script>
    <script src="{{ url('public/assets/js/scrollbar.js') }}"></script>
    <script src="{{ url('public/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ url('public/assets/js/swiper.min.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('public/assets/js/parallax-scroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>


    <script src="{{ url('public/assets/js/script.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css" rel="stylesheet">


    <!-- <div class="cursor"></div> -->
    <!-- <div class="cursor2"></div> -->
</body>
<!-- <style>
.cursor {
    width: 50px;
    height: 50px;
    border-radius: 100%;
    border: 1px solid black;
    transition: all 200ms ease-out;
    position: fixed;
    pointer-events: none;
    left: 0;
    top: 0;
    transform: translate(calc(-50% + 15px), -50%);
}

.cursor2 {
    width: 20px;
    height: 20px;
    border-radius: 100%;
    /* background-color: black; */
    border: #293e9c 2px solid;
    opacity: .3;
    position: fixed;
    transform: translate(-50%, -50%);
    z-index: 10 !important;
    pointer-events: none;
    transition: width .3s, height .3s, opacity .3s;
    animation: zoomInoutanimation 2s infinite;
}

@keyframes zoomInoutanimation {
    0% {
        width: 20px;
        height: 20px;
    }

    10% {
        width: 25px;
        height: 25px;
    }

    20% {
        width: 30px;
        height: 30px;
    }

    30% {
        width: 35px;
        height: 35px;
    }

    40% {
        width: 40px;
        height: 40px;
    }

    50% {
        width: 45px;
        height: 45px;
    }

    60% {
        width: 30px;
        height: 30px;
    }

    70% {
        width: 25px;
        height: 25px;
    }

    80% {
        width: 20px;
        height: 20px;
    }

    10% {
        width: 15px;
        height: 15px;
    }

    100% {
        width: 20px;
        height: 20px;
    }
}
</style>
<script>
    // UPDATE: I was able to get this working again... Enjoy!

    var cursor = document.querySelector('.cursor');
    var cursorinner = document.querySelector('.cursor2');
    // var a = document.querySelectorAll('a');

    document.addEventListener('mousemove', function(e) {
        var x = e.clientX;
        var y = e.clientY;
        cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
    });

    document.addEventListener('mousemove', function(e) {
        var x = e.clientX;
        var y = e.clientY;
        cursorinner.style.left = x + 'px';
        cursorinner.style.top = y + 'px';
    });

    // document.addEventListener('mousedown', function() {
    //     cursor.classList.add('click');
    //     cursorinner.classList.add('cursorinnerhover')
    // });

    // document.addEventListener('mouseup', function() {
    //     cursor.classList.remove('click')
    //     cursorinner.classList.remove('cursorinnerhover')
    // });

    // a.forEach(item => {
    //   item.addEventListener('mouseover', () => {
    //     cursor.classList.add('hover');
    //   });
    //   item.addEventListener('mouseleave', () => {
    //     cursor.classList.remove('hover');
    //   });
    // })
</script> -->

</html>
