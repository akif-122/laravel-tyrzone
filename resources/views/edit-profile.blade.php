<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETYRE ZONE Tyeres</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user-dashboard.css">

</head>

<body>

    <div class="wrapper">
        @includeif("includes.navbar")

        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">



                <div class="row">
                    <div class="col-lg-3">
                        <aside class="side-bar">
                            <h3>Akif Ullah</h3>

                            <ul>
                                <li><a href="user-dashboard.html" class="active"><i class="fa-solid fa-user"></i>
                                        Profile</a></li>
                                <li><a href="user-change-password.html" class=""><i
                                            class="fa-solid fa-lock"></i>
                                        Change Password</a></li>

                                <li><a href="orders.html"><i class="fa-solid fa-cart-flatbed"></i>
                                        My Orders</a>
                                </li>

                                <li><a href="php/logout.html"><i class="fa-solid fa-right-from-bracket"></i>
                                        Logout</a>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">


                        <section class="registration form-wrap">
                            <div class="container ">
                                <div class="col-lg-10 mx-auto sign-up-wrap">
                                    <h3 class="text-center mb-4">Edit Profile</h3>
                                    <div class="row">

                                        <div class="col-md-6 mb-4 mb-lg-0">

                                            <div class="form-group mb-3">
                                                <label for="">First Name <span>*</span></label>
                                                <input type="text" placeholder="First Name" class="form-control">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">Last Name <span>*</span></label>
                                                <input type="text" placeholder="Last Name" class="form-control">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">Email Address <span>*</span></label>
                                                <input type="email" placeholder="Email Address"
                                                    class="form-control">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">Phone </label>
                                                <input type="number" placeholder="Phone" class="form-control">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">Company</label>
                                                <input type="text" placeholder="Company" class="form-control">
                                            </div>


                                        </div>

                                        <div class="col-md-6">



                                            <div class="form-group mb-3">
                                                <label for="">Country</label>
                                                <select name="" class="form-select" id="">
                                                    <option value="">United Kingdom</option>
                                                </select>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">City</label>
                                                <input type="text" placeholder="City" class="form-control">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">Address </label>
                                                <input type="text" placeholder="Address" class="form-control">
                                            </div>


                                            <div class="form-group mb-3">
                                                <label for="">Postcode</label>
                                                <input type="text" placeholder="Postcode" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Company Phone</label>
                                                <input type="number" placeholder="Phone" class="form-control">
                                            </div>

                                        </div>


                                    </div>

                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="p-p">
                                            <label for="p-p">I have read and agree to the <a
                                                    href="#">Privacy
                                                    Policy</a></label>

                                        </div>

                                        <div class="mt-2">
                                            <button class="main-btn">Register</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </section>


                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->



        <!-- FOOTER SECTION START -->
        <footer class="footer">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>About TYRE ZONE Tyres</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> About Us </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Contact Us </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Sitemap </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Privacy Policy </a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies Policy </a></li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <h5>Services</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Wheel Balancing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">

                        <div class="col-sm-6">
                            <h5>Tyre Manufacturers</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Maxxis Tyres</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Dunlop Tyres</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Bridgestone Tyres</a>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i> Continental Tyres</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <h5>Contact Us</h5>
                            <ul>
                                <li><a href="#">Contact Us
                                        Unit 4 Church Street, Middleton Manchester M24 2PY, UK</a></li>
                                <li><a href="#">Ph: 01616547756</a></li>
                                <li><a href="#">Ph: 07899757543</a></li>
                                <li><a href="#">
                                        <p class="m-0">24/7 Open <a href="#">07899757543</a></p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-2">
                    <h5>Social Media</h5>
                    <ul class="social-icon list-unstyled d-flex flex-wrap">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                    <p>Registered No: <strong>10544461</strong></p>
                </div>


            </div>


            <div class="footer-bottom d-flex align-items-center justify-content-center flex-column">
                <p class="mb-0">© TYRE ZONE TYRES LTD 2024. All Rights Reserved.</p>
                <!-- <div class="d-flex align-items-center justify-content-center flex-wrap gap-1">
                <div class="">
                    <img src="assets/imgs/payzone.png" alt="">
                </div>
                <div class="">
                    <img src="assets/imgs/Barclaycard_Logo.svg.png" alt="">
                </div>
                <div class="">
                    <img src="assets/imgs/mastercard.png" alt="">
                </div>
                <div class="">
                    <img src="assets/imgs/Visa-Logo-PNG-Image.png" alt="">
                </div>
                <div class="">
                    <img src="assets/imgs/ecard.png" alt="">
                </div>
                <div class="">
                    <img src="assets/imgs/maestro.png" alt="">
                </div>
                <div class="">
                    <img src="assets/imgs/apple-pay.png" alt="">
                </div>
                <div class="">
                    <img src="assets/imgs/android-pay.png" alt="">
                </div>
            </div> -->
            </div>

        </footer>
        <!-- FOOTER SECTION END -->


    </div>


    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>


    <!-- CUSTOM JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
