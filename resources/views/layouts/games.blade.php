<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1, width=device-width">
    <link rel="stylesheet" href="styles/styles.css">
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