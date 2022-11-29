<!doctype html>
<html lang="en">
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
  </head>
  <body class="text-center">
    <main class="form-signin">
      <div class="card" style="width: 30rem;">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8 mt-4">
              <form method="POST">
                @csrf
                <img class="mb-2" src="{{ asset('img/balon-fut.png') }}" width="130">
                <h2 class="mb-3 fw-semibold">¡Bienvenido!</h2>
                <h5 class="mb-3 fw-normal">Ingrese su cuenta</h5>

                <div class="form-floating">
                  <input type="text" class="form-control" id="user" name="user" placeholder="name@example.com">
                  <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <label for="floatingPassword">Contraseña</label>
                </div>

                <button class="mt-4 mb-5 w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
         
    </main>
  </body>
</html>