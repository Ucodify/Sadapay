<!DOCTYPE html>
<html lang="en">

<head>
    <title>SadaPay</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white pt-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/website-logo.png') }}"
                    width="225px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-danger fs-7 me-4" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bold text-danger fs-7 me-4" href="{{ route('faq') }}">FAQ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bold text-danger fs-7 me-4" href="{{ route('blog') }}">Blog</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link fw-bold text-danger fs-7 me-4" href="{{ route('contact') }}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bold text-danger fs-7 me-4" href="{{ route('hiring') }}">We're Hiring
                            ❤️</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-danger fs-7 me-4" href="{{ route('tasks.index') }}">Tasks</a>
                        </li>
                    @endauth
                </ul>
                @guest
                    <a class="nav-link fw-bold text-danger fs-7 me-4" href="{{ route('login') }}">Login</a>

                    <a href="{{ route('signup') }}" class="btn btn-danger fw-bold p-signup"> <span class="fs-8">Signup now
                        </span></a>
                @endguest
                @auth
                    <span class="nav-link fw-bold text-danger fs-7 me-4">{{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}" class="btn btn-danger fw-bold p-signup"> <span class="fs-8">Logout
                        </span></a>
                @endauth

            </div>
        </div>
    </nav>
