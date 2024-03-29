<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light osahan-nav shadow-sm">
        <div class="container">
        <a class="navbar-brand" href="index.html"><img alt="logo" src="/img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="offers.html"><i class="icofont-sale-discount"></i> Offers <span class="badge badge-danger">New</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Restaurants
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
        <a class="dropdown-item" href="listing.html">Listing</a>
        <a class="dropdown-item" href="detail.html">Detail + Cart</a>
        <a class="dropdown-item" href="checkout.html">Checkout</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pages
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
        <a class="dropdown-item" href="track-order.html">Track Order</a>
        <a class="dropdown-item" href="invoice.html">Invoice</a>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="404.html">404</a>
        <a class="dropdown-item" href="extra.html">Extra :)</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img alt="Generic placeholder image" src="/img/user/4.png" class="nav-osahan-pic rounded-pill" height="20px"> My Account
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
        <a class="dropdown-item" href="orders.html#orders"><i class="icofont-food-cart"></i> Orders</a>
        <a class="dropdown-item" href="orders.html#offers"><i class="icofont-sale-discount"></i> Offers</a>
        <a class="dropdown-item" href="orders.html#favourites"><i class="icofont-heart"></i> Favourites</a>
        <a class="dropdown-item" href="orders.html#payments"><i class="icofont-credit-card"></i> Payments</a>
        <a class="dropdown-item" href="orders.html#addresses"><i class="icofont-location-pin"></i> Addresses</a>
        </div>
        </li>
        <li class="nav-item dropdown dropdown-cart">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-shopping-basket"></i> Cart
        <span class="badge badge-success">5</span>
        </a>
        <div class="dropdown-menu dropdown-cart-top p-0 dropdown-menu-right shadow-sm border-0">
        <div class="dropdown-cart-top-header p-4">
        <img class="img-fluid mr-3" alt="osahan" src="/img/cart.jpg">
        <h6 class="mb-0">Gus's World Famous Chicken</h6>
        <p class="text-secondary mb-0">310 S Front St, Memphis, USA</p>
        <small><a class="text-primary font-weight-bold" href="#">View Full Menu</a></small>
        </div>
        <div class="dropdown-cart-top-body border-top p-4">
        <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1 <span class="float-right text-secondary">$314</span></p>
        <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Corn & Peas Salad x 1 <span class="float-right text-secondary">$209</span></p>
        <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Veg Seekh Sub 6" (15 cm) x 1 <span class="float-right text-secondary">$133</span></p>
        <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1 <span class="float-right text-secondary">$314</span></p>
        <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Corn & Peas Salad x 1 <span class="float-right text-secondary">$209</span></p>
        </div>
        <div class="dropdown-cart-top-footer border-top p-4">
        <p class="mb-0 font-weight-bold text-secondary">Sub Total <span class="float-right text-dark">$499</span></p>
        <small class="text-info">Extra charges may apply</small>
        </div>
        <div class="dropdown-cart-top-footer border-top p-2">
        <a class="btn btn-success btn-block btn-lg" href="checkout.html"> Checkout</a>
        </div>
        </div>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        </ul>
        </div>
        </div>
        </nav>
</body>
</html>