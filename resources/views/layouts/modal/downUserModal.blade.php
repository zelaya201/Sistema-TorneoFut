<!-- Modal configuracion -->
<!-- <div class="modal fade" id="configModal{{$user->organizador->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('usuario.update', [$user, Request::path()]) }}">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar dar de baja</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                        
                    <p class="text-start fw-light text-muted">Información del organizador</p>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$user->organizador->nombre}}">
                                <label for="floatingInput">Nombre</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="{{$user->organizador->apellido}}">
                                <label for="floatingInput">Apellido</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{$user->organizador->fecha_nacimiento}}">
                                <label for="floatingInput">Fecha nacimiento</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="genero" name="genero">
                                    <option value="" selected>Seleccione...</option>
                                    <option value="m" {{ ( $user->organizador->genero == 'm') ? 'selected' : '' }}>Mujer</option>
                                    <option value="h" {{ ( $user->organizador->genero == 'h') ? 'selected' : '' }}>Hombre</option>
                                    <option value="o" {{ ( $user->organizador->genero == 'o') ? 'selected' : '' }}>Otro</option>
                                </select>
                                <label for="floatingInput">Genero</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" id="tel" name="tel" class="form-control" placeholder="Teléfono" value="{{$user->organizador->telefono}}">
                                <label for="floatingInput">Teléfono</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{$user->organizador->email}}">
                                <label for="floatingInput">Email</label>
                            </div> 
                        </div>
                    </div>

                    <p class="text-start fw-light text-muted">Información del usuario</p>
                    <div class="row mb-4 align-items-center">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="usuario" class="form-control" placeholder="Usuario" value="{{$user->nickname}}">
                                <label for="floatingInput">Usuario</label>
                            </div>   
                        </div>
                        <div class="col-md-6 d-none" id="passInput">
                            <div class="form-floating">
                                <input type="password" name="newPassword" class="form-control" placeholder="Contraseña">
                                <button id="toggle-password" type="button" class="d-none"
                                    aria-label="Show password as plain text. Warning: this will display your password on the screen.">
                                </button>
                                <label for="floatingInput">Nueva contraseña</label>
                            </div>     
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col mb-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="switchInput" onclick="switched()" name="switch">
                                <label class="form-check-label" for="switchInput">¿Desea establecer una nueva contraseña?</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="col-md-8 align-self-start">
                        <button type="button" class="btn btn-danger"><b>Dar de baja al usuario</b></button>
                    </div>
                    <div class="col align-self-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function switched(){
        var checkBox = document.getElementById("switchInput");

        var input = document.getElementById("passInput");
        
        if (checkBox.checked == true){
            input.classList.remove('d-none');
            input.classList.add('d-block');
        } else {
            input.classList.remove('d-block');
            input.classList.add('d-none');
        }
    }
</script> -->
<div class="modal fade" id="downUserModal{{$user->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 750px;">
        <div class="modal-content">
            <form action="{{ route('usuario.destroy', $user) }}" method="post">
                @csrf
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-11 ms-5">
                            <div class="row">
                                <div class="col-md-1">
                                    <h1>
                                        <i class="fa-solid fa-triangle-exclamation text-danger"></i>
                                    </h1>
                                </div>
                                <div class="col-md-10 ms-3 mt-2">
                                    <h5>¿Estás seguro que deseas dar de baja al usuario <b>{{$user->nickname}}</b>?</h5>
                                    <h6 class="text-danger">Ten en cuenta que este proceso no puede ser deshecho.</h6>    
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger"><b>Dar de baja</b></button>
                </div>
            </form>
        </div>
    </div>
</div>