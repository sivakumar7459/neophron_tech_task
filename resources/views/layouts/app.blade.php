<!DOCTYPE html>
<html>

<head>
    <title>Neophron Tech Task</title>
    <!-- Include CSS files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>

<body>
    <header>
        <div class="container">
            <nav>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('products*') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('subcategories*') ? 'active' : '' }}" href="{{ route('subcategories.index') }}">Sub Categories</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>

    <!-- Include JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>