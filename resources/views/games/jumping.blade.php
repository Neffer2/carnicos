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
            <div class="game-item left-side">1</div>
            <div id="game" class="game-item game"></div>
            <div class="game-item right-side">3</div>
        </div>  
    @endsection

    @section('scripts')
        <script src="{{ asset('/js/jumping/phaser.min.js') }}"></script>
        <script src="{{ asset('/js/jumping/index.js') }}"></script>
    @endsection

 