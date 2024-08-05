<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">
</head>

<body>

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
                    <h5 class="m-0">Products</h5>
                    <a href="{{route('adminAddProducts')}}">Add Product</a> <!-- Updated route -->
                </div>
            
                <p class="text-danger"></p>
                <p class="text-success"></p>
            
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tyre Name</th>
                                <th>Image</th>
                                <th>Manufac. Name</th>
                                <th>Tyre Pattern</th>
                                <th>Fuel Efficiency</th>
                                <th>Wet Grip</th>
                                <th>Road Noise</th>
                                <th>Size</th>
                                <th>Type</th>
                                <th>Season</th>
                                <th>Budget Tyre</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
            
                        <tbody>
                            @forelse($products as $product) 
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td><img src="{{ $product->image }}" alt="{{ $product->name }}" style="width: 100px; height: auto;"></td>
                                    <td>{{ $product->manufacturer_name }}</td>
                                    <td>{{ $product->patteren_type }}</td>
                                    <td>{{ $product->fuel }}</td>
                                    <td>{{ $product->wet_grip }}</td>
                                    <td>{{ $product->road_noise }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td>{{ $product->season }}</td>
                                    <td>{{ $product->budget ? 'Yes' : 'No' }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>
                                        <a href="{{route("adminEditProduct")}}" class="btn btn-sm btn-info">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <form action="{{ route('products.destroy') }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="manufacturer_name" value="{{ $product->manufacturer_name }}">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13" class="text-center">No products available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>

    

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
