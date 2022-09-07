@extends('layouts.layout')
    @section('title')
        Crecer y ganar
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
        <h2>Soy el contenido</h2>
    @endsection