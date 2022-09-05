<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <title>
        @yield('title')
    </title>
</head>
<body>
    <h2>Aquí la navbar</h2>
        @yield('content')
    <h2>Aquí el footer</h2>  
     
    @yield('scripts')
</body>
</html> 