@extends('layouts.auth')
    @section('title')
        Incia sesi&oacute;n
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
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @method('POST')
                <input type="text" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button>Continuar</button>
            </form>
        </div>
    @endsection