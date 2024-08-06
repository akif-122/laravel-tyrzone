<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

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

                    <div class="right-top dropdown ms-auto">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="../php/logout.html" class="dropdown-item">Logout</a>
                        </ul>
                    </div>
                </div>

                <div class="content-area mt-5">
                    <div class="col-md-9 mx-auto">

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-0">Edit Product</h5>
                            <a href="{{ url('adminProducts') }}">All Products</a>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="form form-wrap sign-up-wrap">
                            <form action="{{ route('updateProduct') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}" />

                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="image">Image:</label>
                                            <input type="text" name="image" value="{{ $product->image }}" class="form-control" placeholder="Image URL">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="manufacturer_name">Manufacture Name:</label>
                                            <select class="form-select" name="manu_name">
                                                <option value="" selected disabled>Select Manufacture</option>
                                                <option value="Dunlop" {{ $product->manufacturer_name == 'Dunlop' ? 'selected' : '' }}>Dunlop</option>
                                                <option value="Anchee" {{ $product->manufacturer_name == 'Anchee' ? 'selected' : '' }}>Anchee</option>
                                                <option value="Antares" {{ $product->manufacturer_name == 'Antares' ? 'selected' : '' }}>Antares</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="patteren_type">Tyre Pattern:</label>
                                            <select class="form-select" name="patteren_type">
                                                <option value="" selected disabled>Select Pattern</option>
                                                <option value="ECONO DRIVE" {{ $product->patteren_type == 'ECONO DRIVE' ? 'selected' : '' }}>ECONO DRIVE</option>
                                                <option value="FASTRESPONSE" {{ $product->patteren_type == 'FASTRESPONSE' ? 'selected' : '' }}>FASTRESPONSE</option>
                                                <option value="GRANDTREK AT20" {{ $product->patteren_type == 'GRANDTREK AT20' ? 'selected' : '' }}>GRANDTREK AT20</option>
                                                <option value="AC808" {{ $product->patteren_type == 'AC808' ? 'selected' : '' }}>AC808</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="fuel">Fuel Efficiency:</label>
                                            <input type="text" name="fuel" value="{{ $product->fuel }}" class="form-control" placeholder="Fuel Efficiency">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="wet_grip">Wet Grip:</label>
                                            <input type="text" name="wet_grip" value="{{ $product->wet_grip }}" class="form-control" placeholder="Wet Grip">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="road_noise">Road Noise:</label>
                                            <input type="text" name="road_noise" value="{{ $product->road_noise }}" class="form-control" placeholder="Road Noise">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="size">Size:</label>
                                            <input type="text" name="size" value="{{ $product->size }}" class="form-control" placeholder="Size">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="type">Tyre Type:</label>
                                            <input type="text" name="type" value="{{ $product->type }}" class="form-control" placeholder="Tyre Type (car, bike, etc)">
                                        </div>
                                    </div>

                                    <div class="col-md-5 mb-4">
                                        <label for="season">Season Type:</label>
                                        <div>
                                            <div class="form-check form-check-inline mt-2">
                                                <label for="winter" class="form-check-label">Winter</label>
                                                <input type="radio" class="form-check-input" name="season" value="0" {{ $product->season == 0 ? 'checked' : '' }}>
                                            </div>
                                            <div class="form-check form-check-inline mt-2">
                                                <label for="summer" class="form-check-label">Summer</label>
                                                <input type="radio" class="form-check-input" name="season" value="1" {{ $product->season == 1 ? 'checked' : '' }}>
                                            </div>
                                            <div class="form-check form-check-inline mt-2">
                                                <label for="all" class="form-check-label">All Season</label>
                                                <input type="radio" class="form-check-input" name="season" value="2" {{ $product->season == 2 ? 'checked' : '' }}>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="budget">Budget Tyre</label>
                                        <div class="form-check mt-2">
                                            <label for="budget">Yes Budget Tyre</label>
                                            <input id="budget" type="checkbox" name="budget" value="1" {{ $product->budget ? 'checked' : '' }} class="form-check-input">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="price">Price:</label>
                                            <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">Update Product</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <!-- CUSTOM JS -->
    <script src="../admin/assets/js/script.js"></script>
</body>

</html>
