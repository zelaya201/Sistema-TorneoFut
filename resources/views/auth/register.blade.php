<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Registro - Asociación de Futbol de Lisiados</title>

    <link rel="shortcut icon" href="{{ asset('favicon (2).ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon (2).ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script src="{{asset('js/input-mask.js')}}"></script> 
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <link rel="stylesheet" href="{{asset('css/show-password-toggle.min.css')}}">
  </head>
  <body class="text-center">
    <div class="col-md-6 mx-auto">
        <main class="form-register">
            <div class="card">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 mt-4">
                                <form method="POST">
                                    @csrf
                                    
                                    <h2 class="mb-3 fw-semibold">¡Únete a nuestro equipo!</h2>
                                    <h5 class="mb-3 fw-normal">Crea tu nueva cuenta</h5>

                                    <p class="text-start fw-light text-muted">Información del organizador</p>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                                                <label for="floatingInput">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                                                <label for="floatingInput">Apellido</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento">
                                                <label for="floatingInput">Fecha nacimiento</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating">
                                                <select class="form-select" id="genero" name="genero">
                                                    <option value="" selected>Seleccione...</option>
                                                    <option value="m">Mujer</option>
                                                    <option value="h">Hombre</option>
                                                    <option value="o">Otro</option>
                                                </select>
                                                <label for="floatingInput">Genero</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" id="tel" name="tel" class="form-control" placeholder="Teléfono">
                                                <label for="floatingInput">Teléfono</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" name="email" class="form-control" placeholder="Email">
                                                <label for="floatingInput">Email</label>
                                            </div> 
                                        </div>
                                    </div>

                                    <p class="text-start fw-light text-muted">Usuario</p>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                                                <label for="floatingInput">Usuario</label>
                                            </div>   
                                        </div>
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                                                <button id="toggle-password" type="button" class="d-none"
                                                    aria-label="Show password as plain text. Warning: this will display your password on the screen.">
                                                </button>
                                                <label for="floatingInput">Contraseña</label>
                                            </div>     
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="password" name="pass_confirmacion" class="form-control" placeholder="Confirmar contraseña">
                                                <label for="floatingInput">Confirme su contraseña</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button class="mt-4 mb-4 w-100 btn btn-lg btn-success" type="submit">Crear cuenta</button>

                                    <h6 class="mb-5 fw-normal">¿Ya tienes una cuenta? <a href="{{route('login')}}" class="fw-semibold text-dark" style="text-decoration: none;">¡Inicia sesión!</a></h6>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
  </body>
  <script src="{{asset('js/show-password-toggle.min.js')}}"></script> 
  
</html>