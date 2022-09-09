@extends('layouts.layout')
    @section('title')
        Crecer y ganar
    @endsection
    @section('content')
        @if ($errors->any())
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
               <p><strong>!Opps ha ocurrido un error</strong></p>
                <ul>
                    @foreach ($errors->all() as $elem)
                        <li><h5>{{ $elem }}</h5></li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>Soy el contenido</h2>
    @endsection