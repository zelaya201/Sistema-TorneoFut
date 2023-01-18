<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Login - Asociación de Futbol de Lisiados</title>

    <link rel="shortcut icon" href="{{ asset('favicon (2).ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon (2).ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <link rel="stylesheet" href="{{asset('css/show-password-toggle.min.css')}}">
  </head>
  <body class="text-center">
    <div class="col-md-4 mx-auto">
      <main class="form-signin">
        <div class="card">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 mt-4">
              <form method="POST">
                @csrf
                <img class="mb-2" src="{{ asset('img/balon-fut.png') }}" width="130">
                <h2 class="mb-3 fw-semibold">¡Bienvenido!</h2>
                <h5 class="mb-3 fw-normal">Ingrese su cuenta</h5>

                <div class="form-floating">
                  <input type="text" class="form-control form-signin-text" id="user" name="user" placeholder="usuario">
                  <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control form-signin-pass" id="password" name="password" placeholder="contra" spellcheck="false" autocorrect="off" autocapitalize="off">
                  <button id="toggle-password" type="button" class="d-none"
                    aria-label="Show password as plain text. Warning: this will display your password on the screen.">
                  </button>
                  <label for="floatingPassword">Contraseña</label>
                </div>
                  @if (!empty($error))
                  <ul>
                      <li>{{$error}}</li>
                  </ul>
                    
                  @endif


                <button class="mt-4 mb-4 w-100 btn btn-lg btn-success" type="submit">Iniciar sesión</button>

                <h6 class="mb-5 fw-normal">¿Aún no tienes cuenta? <a href="{{route('login.register')}}" class="fw-semibold text-dark" style="text-decoration: none;">¡Únete a nuestro equipo!</a></h6>
              </form>
            </div>
          </div>
        </div> 
      </main>
    </div>
  </body>
  <script src="{{asset('js/show-password-toggle.min.js')}}"></script> 
</html>