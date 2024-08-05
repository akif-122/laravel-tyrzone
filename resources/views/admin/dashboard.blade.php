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
    <link rel="stylesheet" href="../admin/assets/css/style.css">

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

                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Manufacturers</h5>
                            </div>


                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Manufacturer Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Created At</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Dunlop</td>
                                            <td>Image</td>
                                            <td>...</td>
                                            <td>2024-07-11 08:17:07</td>



                                        </tr>
                                        <tr>
                                            <td>Anchee</td>
                                            <td>Image</td>
                                            <td>...</td>
                                            <td>2024-07-11 08:17:56</td>



                                        </tr>
                                        <tr>
                                            <td>Antares</td>
                                            <td>Image</td>
                                            <td>...</td>
                                            <td>2024-07-11 08:18:08</td>



                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Tyre Pattern</h5>


                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Patteren Name</th>
                                            <th>manufacture</th>
                                            <th>Created At</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>ECONO DRIVE</td>
                                            <td>Dunlop</td>
                                            <td>2024-07-11 08:17:07050</td>

                                        </tr>
                                        <tr>
                                            <td>FASTRESPONSE</td>
                                            <td>Antares</td>
                                            <td>2024-07-11 08:18:08050</td>

                                        </tr>
                                        <tr>
                                            <td>GRANDTREK AT20</td>
                                            <td>Dunlop</td>
                                            <td>2024-07-11 08:17:07050</td>

                                        </tr>
                                        <tr>
                                            <td>AC808</td>
                                            <td>Anchee</td>
                                            <td>2024-07-11 08:17:56050</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Products</h5>


                    </div>


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tyre Name</th>
                                    <th>Image</th>
                                    <th>Manufac. Name</th>
                                    <th>Tyre Patteren</th>
                                    <th>fuel Effic.</th>
                                    <th>Wet Grip</th>
                                    <th>Road Noise</th>
                                    <th>Size</th>
                                    <th>Price</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>ECONO DRIVE</td>
                                    <td>Image</td>
                                    <td>Dunlop</td>
                                    <td>ECONO DRIVE</td>
                                    <td>B</td>
                                    <td>B</td>
                                    <td>72</td>
                                    <td>225/55 R17 109/107H</td>

                                    <td>127.05</td>

                                </tr>
                                <tr>
                                    <td> FASTRESPONSE</td>
                                    <td>Image</td>
                                    <td>Dunlop</td>
                                    <td>FASTRESPONSE</td>
                                    <td>B</td>
                                    <td>B</td>
                                    <td>72</td>
                                    <td>225/55 R17 109/107H</td>

                                    <td>57.05</td>

                                </tr>
                                <tr>
                                    <td>AC808</td>
                                    <td>Image</td>
                                    <td>Anchee</td>
                                    <td>AC808</td>
                                    <td>c</td>
                                    <td>c</td>
                                    <td>71</td>
                                    <td>195/60 R15 88H</td>

                                    <td>51.75</td>

                                </tr>
                                <tr>
                                    <td>Jamal Khan</td>
                                    <td>Image</td>
                                    <td>Dunlop</td>
                                    <td>ECONO DRIVE</td>
                                    <td>C</td>
                                    <td>D</td>
                                    <td>72</td>
                                    <td>265/65 R17 112S</td>

                                    <td>28500</td>

                                </tr>
                                <tr>
                                    <td>Note 10 Pro</td>
                                    <td>Image</td>
                                    <td>Dunlop</td>
                                    <td>ECONO DRIVE</td>
                                    <td>C</td>
                                    <td>B</td>
                                    <td>70</td>
                                    <td>225/45 R17 94Y</td>

                                    <td>40000</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

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