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

</head>

<body>

    <div class="wrapper">
        @includeif("includes.navbar")

        <div class="container cart-page">



            <div class="row">
                <div id="content" class="col-md-12 col-sm-12">
                    <div class="contenttitle">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h4>Shopping Cart</h4>
                            </div>
                        </div>



                        <div class="order-detail-content">
                            <div class="table-responsive">
                                <table id="cart" class="table table-bordered cart_summary">
                                    <thead>
                                        <tr>
                                            <td class="text-center"><b>Image</b></td>
                                            <td class="text-left"><b>Product Name</b></td>

                                            <td class="text-left"><b>Quantity</b></td>
                                            <td class="text-right"><b>Unit Price</b></td>
                                            <td class="text-right"><b>Total</b></td>
                                            <td class="text-left"><b>Remove</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><img src="assets/imgs/tyres/econodrive.jpg"
                                                    alt="Summer Tyre Dunlop ECONO DRIVE 225/55R17 109/107 H"
                                                    class=" serviceicon" width="65"></td>
                                            <td data-th="Product Name:" class="text-left">Summer Tyre Dunlop ECONO
                                                DRIVE 225/55R17 109/107 H


                                            </td>
                                            <td class="text-center">
                                                <div class="quantity">
                                                    <div class="d-flex alig-items-center">
                                                        <button class="main-btn"><i
                                                                class="fa-solid fa-minus"></i></button>
                                                        <input type="text" min="1" value="1">
                                                        <button class="main-btn"><i
                                                                class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Unit Price:" class="text-right">£127.05</td>
                                            <td data-th="Total:" class="text-right">£127.05</td>
                                            <td class="text-start"><span class="input-group-btn">
                                                    <button type="button" class="remove"><i
                                                            class="fa-solid fa-trash-can"></i></button>
                                                </span></td>
                                        </tr>

                                        <tr class="hidden-xs">
                                            <td colspan="5" class="text-end"><strong>Sub-Total:</strong></td>
                                            <td colspan="5" class="text-end">£127.05</td>
                                        </tr>
                                        <tr class="hidden-xs">
                                            <td colspan="5" class="text-end"><strong>Total:</strong></td>
                                            <td colspan="5" class="text-end">£127.05</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="buttons d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <a class="main-btn" href="index.html">Continue Shopping</a>
                            <a class="main-btn" href="booking.html">Checkout</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

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
                    <ul class="list-unstyled d-flex flex-wrap">
                        <li>
                            <a href="#"></a>
                        </li>
                    </ul>
                    <p>Registered No: <strong>10544461</strong></p>
                </div>


            </div>


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
                                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Privacy Policy </a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookies Policy </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <h5>Services</h5>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Wheel Balancing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">

                            <div class="col-sm-6">
                                <h5>Tyre Manufacturers</h5>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Maxxis Tyres</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Dunlop Tyres</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Bridgestone
                                            Tyres</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Continental
                                            Tyres</a></li>
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
