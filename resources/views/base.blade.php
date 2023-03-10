<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous"
    >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
*{font-family: 'Poppins', sans-serif}
        .home-form {
            display: grid;
            grid-auto-columns: reapt()
        }

        @media(max-width: 768px) {
            .room-right {
                border: none !important;
            }
        }

        .booking-room:last-child{
            padding-bottom: 0px !important;
            margin-bottom: 0px !important;
            border-width: 0px !important;
        }
    </style>
</head>

<body>

    @if (request()->user() && request()->user()->is_admin)
        <a class="bg-white py-2 text-end px-4 d-block" href="{{ route('admin.dashboard') }}">Admin Panel</a>
    @endif

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('index') }}">MYStudio</a>

            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('index') ? 'active' : '' }}" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('rooms.index') ? 'active' : '' }}" href="{{ route('rooms.index') }}">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>

                    @if (auth()->user())
                        <li class="nav-item dropdown">
                            <a 
                                class="nav-link dropdown-toggle" 
                                href="#" 
                                role="button" 
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('bookings.index') }}">My Bookings</a></li>
                                <li><a class="dropdown-item" href="{{ route('auth.edit-account') }}">Edit Account</a></li>
                                <li><a class="dropdown-item" href="{{ route('auth.change-password') }}">Change Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <a href="{{ route('auth.login') }}" class="btn btn-warning ms-0 ms-md-2">Login/Register</a>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @if (session()->has('success'))
        <div class="container mt-4 px-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @yield('content')


    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"
    >
    </script>
</body>

</html>