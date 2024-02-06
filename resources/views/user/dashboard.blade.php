@extends('layouts.main')

@section('nav-head')
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Peminjaman</a>
                        </li>
                    </ul>
                    <li class="nav-item dropdown" style="list-style: none;">
                        @auth
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Home</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Log out</button>
                                </form>
                            </ul>
                        @else
                            <a href="/login" class="btn btn-primary px-4 mx-3" type="submit">Login</a>
                        @endauth
                    </li>

                </div>
            </div>
        </nav>
    </div>
@endsection

@section('main')
    <div class="container">
        <h1>Welcome, {{ auth()->user()->name }}</h1>
    </div>
@endsection
