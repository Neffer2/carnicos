@extends('layouts.games') 
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jumping.css') }}">
    @endsection 
    @section('tittle')
        Crece y gana
    @endsection

    @section('content')
        <div class="container">
            <div class="left-side">
                <div class="left-side-item">No te conviene que yo te recuerde lo de jimenez</div>
                <div class="left-side-item">2</div>
                <div class="left-side-item">3</div>
            </div>
            <div id="game" class="game"></div>
            <div class="right-side">
                <div class="right-side-item">1</div>
                <div class="right-side-item">2</div>
                <div class="right-side-item">Tas viviendo alquilado y los carros son todos del Buddy</div>
            </div>
        </div>   
    @endsection

    @section('scripts')
        <script src="{{ asset('/js/jumping/phaser.min.js') }}"></script>
        <script src="{{ asset('/js/jumping/index.js') }}"></script>
    @endsection

 