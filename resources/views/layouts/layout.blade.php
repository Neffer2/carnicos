<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="http://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">                
    <title>@yield('title')</title>
</head> 
<body>
    <!-- Login Modal -->
    <div id="loginModal" class="modal">
    <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="header-text">Inicio</h2>
                <span id="close-login" class="header-close close"></span>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="text" name="email" class="form-input" placeholder="Tu correo electrónico" required>
                    <input type="password" name="password" class="form-input" placeholder="Tu contraseña" required>
                </div> 
                <div class="modal-footer">
                    <button>Continuar</button>
                </div> 
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header"> 
                <h2 class="header-text">Registro</h2>
                <span id="close-register" class="header-close close"></span>
            </div>
            <form action="{{ route('register') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('POST')
                    <input type="email" name="email" class="form-input" placeholder="Correo electrónico" required>
                    <input type="number" name="cod_user" class="form-input" placeholder="Código de cliente" required>
                    <input type="number" name="documento" class="form-input" placeholder="Número de cédula" required>
                </div>
                <div class="modal-footer">
                    <button>Continuar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="navbar">
        <div class="item brand">
            <img src="https://www.pietran.com.co/wp-content/themes/pietran/dist/assets/images/pietran-con-conservantes-naturales.png?ver=a700f0e1" alt="">
        </div>
        <div class="item text">
            <p>TU LABOR HACE <b>HOGARES FELICES</b></p>
        </div>
        <div class="item login">
            @guest
                <a id="loginBtn" href="#">Inicio</a>
            @endguest
        </div>
        <div class="item register">
            @guest
                <a id="registerBtn" href="#">Registro</a>   
            @endguest
            @auth
                <a href="/logout">Salir</a>    
            @endauth
        </div> 
    </div>
    <div class="container">
        @yield('content')
    </div>
    <h2>Aquí el footer</h2>
    <script>
        /* --- Login --- */ 
        let loginModal = document.getElementById("loginModal");        
        let loginBtn = document.getElementById("loginBtn");
        let span = document.getElementById('close-login');

        loginBtn.onclick = function() {
            loginModal.style.display = "block";
        }

        span.onclick = function() {
            loginModal.style.display = "none";
        }

        /* --- Register --- */ 
        let registerModal = document.getElementById("registerModal");        
        let registerBtn = document.getElementById("registerBtn");
        let registerSpan = document.getElementById('close-register');

        registerBtn.onclick = function() {
            registerModal.style.display = "block";
        }

        registerSpan.onclick = function() {
            registerModal.style.display = "none";
        }

        window.onclick = function(event) {
          if (event.target == loginModal) {
            loginModal.style.animation="animateout 0.4s linear";

            setTimeout(() => {
                loginModal.style.display = "none";
                loginModal.style.animation="animatetop 0.4s linear";
            }, 400);
          }

          if (event.target == registerModal){
            registerModal.style.animation="animateout 0.4s linear";

            setTimeout(() => {
                registerModal.style.display = "none";
                registerModal.style.animation="animatetop 0.4s linear";
            }, 300);
          }
        }
    </script>
</body>
</html> 