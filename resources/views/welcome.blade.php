@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">

        {{-- For perticularly this page we don't need signin or register option --}}

        {{-- @auth
                <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth --}}
    </div>
    @endif
<section class="colortop">
    <div class="topbar">

        {{-- We will put a flexbox here to align them in top bar perfectly --}}
        <div class="company">
            <img src="img/Octaphor logo.png" alt="logo"> <span> OctaPhor </span>
        </div>

        <!--NAVIGATION Start-->
        <nav class="main-nav"> {{--Check nav.scss --}}
            <ul>
                <li><a href="#">PRICING</a></i></li>
                <li><a href="#">OUR WORK</a></i></li>
                <li><a href="#">BLOG</a></i></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>

        <nav class="social">
            <ul>
                <li><a href="https://www.facebook.com/OctaPhor" class="fa fa-facebook"></a></li>
                <li><a href="https://www.twitter.com/OctaPhor" class="fa fa-twitter"></a></li>
                <li><a href="https://www.linkedin.com/OctaPhor" class="fa fa-linkedin"></a></li>
                <li><a href="https://www.dribbble.com/OctaPhor" class="fa fa-dribbble"></a></li>

            </ul>
        </nav>

        
    </div>
</section>
    {{--* Topbar section ends  --}}



    @endsection
