<header class="p-3  border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 link-dark">HOME</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/snack/tag/Chocolate">Chocolates</a></li>
                        <li><a class="dropdown-item" href="/snack/tag/cereal">Cereals</a></li>
                        <li><a class="dropdown-item" href="/snack/tag/candy">Candies</a></li>
                        <li><a class="dropdown-item" href="/snack/tag/soft%20drink">Soft Drinks</a></li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                <li><a href="/aboutUS" class="nav-link px-2 link-dark">About Us</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Shopping Cart
                        <i class="bi bi-cart-fill"></i>
                    </a></li>
                </li>
            </ul>
            <form action="/products/search" class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" name="search_query" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            <ul class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                @auth
                <div class="dropdown">
                    <a class="btn dropdown-toggle link-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">

                        <li><a class="dropdown-item" href="/profile">Profile Page</a></li>
                        <li>
                        <li><a class="dropdown-item" href="/profile/update">Edit Profile</a></li>
                        <li>
                            @if(auth()->user()->admin_status == 1)
                        <li><a class="dropdown-item" href="/products/add">Add Products</a></li>
                        <li>
                            @endif
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"> Logout </button>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <!-- <li><a href="/" class="nav-link px-2 link-dark">LOGIN</a></li> -->
                <li><a href="/login" class="nav-link px-2 link-dark">LOGIN<i class="bi bi-arrow-bar-right"></i></a></li>
            </ul>
            @endauth
        </div>
    </div>
</header>