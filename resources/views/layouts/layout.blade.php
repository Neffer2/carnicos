<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('title')</title>
</head> 
<body>
    <div class="navbar">
        <div class="item brand">
            <img src="https://www.pietran.com.co/wp-content/themes/pietran/dist/assets/images/pietran-con-conservantes-naturales.png?ver=a700f0e1" alt="">
        </div>
        <div class="item text">
            <p>TU LABOR HACE <b>HOGARES FELICES</b></p>
        </div>
        <div class="item login">
            <a href="#">Inicio</a>
        </div>
        <div class="item register">
            <a href="#">Registro</a>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <h2>Aquí el footer</h2>    
</body>
</html> 