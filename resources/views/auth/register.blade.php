@extends('layouts.auth')
    @section('title')
        Regístrate
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
        <div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                @method('POST')
                <input type="text" name="cod_user" placeholder="Código de cliente" required>
                <input type="text" name="documento" placeholder="Número de cédula" required>
                <input type="text" name="email" placeholder="Correo electrónico" required>
                <button>Continuar</button>
            </form>
        </div>
    @endsection