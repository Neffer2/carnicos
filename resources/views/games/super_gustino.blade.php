@extends('layouts.games')
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/super-gustino.css') }}">
        <link rel="stylesheet" href="{{ asset('js/super-gustino/Content/style.css') }}">
    @endsection 
    @section('title')
        S&uacute;per Gustino Bros
    @endsection 
    @section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <p>
                    <h6 class="text-danger">!Opps ha ocurrido un error</h6>
                </p>
                <ul>
                    @foreach ($errors->all() as $elem)
                        <li class="text-danger">{{ $elem }}</li>
                    @endforeach 
                </ul> 
            </div>
        @endif

        <div class="container">
            <div class="item left-bar">
                <div class="left-item">
                    <img src="https://www.fecarval.com.co/images/CONVENIOS/logo_zenu.JPG.png" alt="Zenu logo">
                </div>
                <div class="left-item">
                    <img src="https://www.creceryganar.negociocarnico.com/Content/img/brand/logos/ranchera.png" alt="Ranchera logo">
                </div>
            </div>
            <div class="item game-view">
                <div id="game" style="height: 75%; width: 45%;">
                    <div id="world"></div>
                    <div id="coinNumber" class="gauge">0</div>
                    <div id="coin" class="gaugeSprite"></div>
                    <div id="liveNumber" class="gauge">0</div>
                    <div id="live" class="gaugeSprite"></div>
                </div>   
                <iframe width="0" height="0" src="https://www.youtube.com/embed/SB1VqLCTFpA?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item right-bar">
                <div class="right-item">
                    <img src="https://www.pietran.com.co/wp-content/themes/pietran/dist/assets/images/pietran-con-conservantes-naturales.png?ver=a700f0e1" alt="Zenu logo">
                </div>
                <div class="right-item">
                    <img src="https://www.rica.com.co/wp-content/themes/rica/images/logo.svg" alt="Ranchera logo">
                </div>
                <div class="right-item">
                    <img src="https://cunit.com.co/wp-content/themes/cunit/images/logo.svg" alt="Ranchera logo">
                </div>
            </div>
        </div>

    @endsection
    @section('scripts')
        <!--  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="super-gustino/Scripts/jQuery.js"><\/script>')
        </script>
        <script src="{{ asset('js/super-gustino/Scripts/testlevels.js') }}"></script>
        <script src="{{ asset('js/super-gustino/Scripts/oop.js') }}"></script>
        <script src="{{ asset('js/super-gustino/Scripts/keys.js') }}"></script>
        <script src="{{ asset('js/super-gustino/Scripts/constants.js') }}"></script>
        <script src="{{ asset('js/super-gustino/Scripts/main.js') }}"></script>
    @endsection