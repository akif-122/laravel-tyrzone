<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <div class="wrapper">
        <div class="main">
            @includeIf('admin.includes.sidebar')


            <div class="main-wrap" id="mainArea">

                <div class="top-bar d-flex w-100">
                    <button class="sidebar-toggler" id="sideToggler">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <h4 class="m-0">Dashboard</h4>

                    <div class="right-top dropwdown ms-auto">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="../php/logout.html" class="dropdown-item">Logout</a>
                        </ul>
                    </div>

                </div>
                <div class="content-area mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Add User</h5>

                        <a href="{{route("adminUsers")}}">All Users</a>

                    </div>

                    <!-- REGISTRATION FORM START-->
                    <section class="registration form-wrap">
                        <div class="container ">
                            <div class="col-lg-11 mx-auto sign-up-wrap">
                                <div class="row">

                                    <div class="col-md-6 mb-4 mb-lg-0">
                                        <h5>Primary Contact Information</h5>

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
                                            <input type="email" placeholder="Email Address" class="form-control">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="">Phone </label>
                                            <input type="number" placeholder="Phone" class="form-control">
                                        </div>


                                        <div class="form-group mb-3">
                                            <label for="">Password <span>*</span> </label>
                                            <input type="password" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Confirm Password <span>*</span> </label>
                                            <input type="password" placeholder="Confirm Password" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <h5>Company Information</h5>

                                        <div class="form-group mb-3">
                                            <label for="">Company</label>
                                            <input type="text" placeholder="Company" class="form-control">
                                        </div>

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
                                        <label for="p-p">I have read and agree to the <a href="#">Privacy
                                                Policy</a></label>

                                    </div>

                                    <div class="mt-2">
                                        <button class="main-btn">Register</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- REGISTRATION FORM END -->


                </div>


            </div>

        </div>
    </div>

    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>



    <script>
        let sideBar = document.getElementById("sideBar");
        let sideToggler = document.getElementById("sideToggler");
        let mainArea = document.getElementById("mainArea");
        let closeBtn = document.getElementById("sideCloseBtn");

        sideToggler.addEventListener("click", function (e) {
            sideBar.classList.toggle("none")
            mainArea.classList.toggle("side-none")
        })

        closeBtn.addEventListener("click", function (e) {
            sideBar.classList.remove("none")
            mainArea.classList.remove("side-none")
        })

    </script>
   

</body>

</html>