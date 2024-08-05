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







        <!-- TYRES PATTERN SECTION START -->
        <section class="tyres-detail tyre-pattern">
            <div class="container pattern-container">
                <h2>Dunlop ECONO DRIVE</h2>

                <!-- TYRES START-->
                <section class="tyres">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 side">
                            <h5>ALL TYRES PATTERNS</h5>
                            <div class="tyres-manu pattern">
                                <ul>
                                    <li><a href="{{route("tyre-pattren")}}" class="active">ECONO DRIVE</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">FASTRESPONSE</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">GRANDTREK AT20</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">GRANDTREK AT5</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">GRANDTREK ST20</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">GRANDTREK ST30</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP ER RESPONSE 2</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP ER SPORT 3D</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP ER SPORT 4D</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP ER SPORT5</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP QuattroMaxx</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP Sport 01</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP SPORT 270</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP Sport BluResponse</a></li>
                                    <li><a href="{{route("tyre-pattren")}}">SP Sport FastResponse</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">

                            <div class="row">

                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                    </div>
                                                    <span class="green">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/wet_grip.jpg" alt="">
                                                    </div>
                                                    <span class="orange">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                    </div>
                                                    <span class="black">72</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                Dunlop
                                            </a>
                                            <a href="#">Summer</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£127.05</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{route("booking")}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->

                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                    </div>
                                                    <span class="green">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/wet_grip.jpg" alt="">
                                                    </div>
                                                    <span class="orange">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                    </div>
                                                    <span class="black">72</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                Dunlop
                                            </a>
                                            <a href="#">Summer</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£127.05</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{route("booking")}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->

                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                    </div>
                                                    <span class="green">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/wet_grip.jpg" alt="">
                                                    </div>
                                                    <span class="orange">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                    </div>
                                                    <span class="black">72</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                Dunlop
                                            </a>
                                            <a href="#">Summer</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£127.05</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{route("booking")}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->

                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                    </div>
                                                    <span class="green">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/wet_grip.jpg" alt="">
                                                    </div>
                                                    <span class="orange">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                    </div>
                                                    <span class="black">72</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                Dunlop
                                            </a>
                                            <a href="#">Summer</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£127.05</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{route("booking")}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->

                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                    </div>
                                                    <span class="green">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/wet_grip.jpg" alt="">
                                                    </div>
                                                    <span class="orange">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                    </div>
                                                    <span class="black">72</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                Dunlop
                                            </a>
                                            <a href="#">Summer</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£127.05</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{route("booking")}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->
                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                    </div>
                                                    <span class="green">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/wet_grip.jpg" alt="">
                                                    </div>
                                                    <span class="orange">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                    </div>
                                                    <span class="black">72</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                Dunlop
                                            </a>
                                            <a href="#">Summer</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£127.05</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{route("booking")}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->
                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                    </div>
                                                    <span class="green">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/wet_grip.jpg" alt="">
                                                    </div>
                                                    <span class="orange">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                    </div>
                                                    <span class="black">72</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                Dunlop
                                            </a>
                                            <a href="#">Summer</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£127.05</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{route("booking")}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->
                                <!-- CARD -->
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                    </div>
                                                    <span class="green">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/wet_grip.jpg" alt="">
                                                    </div>
                                                    <span class="orange">B</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                    </div>
                                                    <span class="black">72</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                Dunlop
                                            </a>
                                            <a href="#">Summer</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£127.05</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{route("booking")}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <!-- CARD -->


                            </div>

                        </div>
                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES PATTERN SECTION END -->



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
