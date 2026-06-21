<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="{{ asset('/css/app.css') }}"
          rel="stylesheet">

    <title>@yield('title', 'Online Store')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">

        <div class="container">

            <a class="navbar-brand"
               href="{{ route('home.index') }}">
                Online Store
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse"
                 id="navbarNavAltMarkup">

                <div class="navbar-nav ms-auto">

                    <a class="nav-link active"
                       href="{{ route('home.index') }}">
                        Home
                    </a>

                    <a class="nav-link active"
                       href="{{ route('product.index') }}">
                        Products
                    </a>

                    <a class="nav-link active"
                       href="{{ route('cart.index') }}">
                        Cart
                    </a>

                    <a class="nav-link active"
                       href="{{ route('home.about') }}">
                        About
                    </a>

                    @guest

                        <a class="nav-link active"
                           href="{{ route('login') }}">
                            Login
                        </a>

                        <a class="nav-link active"
                           href="{{ route('register') }}">
                            Register
                        </a>

                    @else

                        <a class="nav-link active"
                           href="{{ route('myaccount.orders') }}">
                            My Orders
                        </a>

                        <form action="{{ route('logout') }}"
                              method="POST">

                            @csrf

                            <button type="submit"
                                    class="btn btn-link nav-link active">
                                Logout ({{ Auth::user()->name }})
                            </button>

                        </form>

                    @endguest

                </div>

            </div>

        </div>

    </nav>

    <header class="bg-primary text-white text-center py-4">

        <div class="container">

            <h2>
                @yield('subtitle', 'A Laravel Online Store')
            </h2>

        </div>

    </header>

    <div class="container my-4">

        @yield('content')

    </div>

    <div class="copyright py-4 text-center text-white">

        <div class="container">

            <small>
                Copyright -
                <b>Daniel Correa</b>
                -
                <b>Paola Vallejo</b>
            </small>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>