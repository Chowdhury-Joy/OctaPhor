@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">

<div class="header-image">
    <div class="header-text">
        <h5>WE ARE</h5>
        <h3>CREATIVE</h3>
        <h1>AGENCY</h1>       
    </div>
    <div class="header-text2">
        <h5>GROW & NURTURE</h5>
        <h3>THE IDEAS YOU HAVE</h3>
        <h1>TOGETHER</h1>       
    </div>
</div>

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

        
    </div>
</section>
    {{--* Topbar section ends  --}}



    @endsection
