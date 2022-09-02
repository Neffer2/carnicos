@extends('layouts.auth')
    @section('title')
        Regístrate
    @endsection 

    @section('content')
        <div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                @method('POST')
                <input type="text" name="code_user" placeholder="Código de cliente" required>
                <input type="text" name="documento" placeholder="Número de cédula" required>
                <input type="text" name="email" placeholder="Correo electrónico" required>
                <button>Continuar</button>
            </form>
        </div>
    @endsection