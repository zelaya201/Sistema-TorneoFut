<div class="modal fade" id="generarJornadasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="signUpForm" method="post" action="{{ route('torneo.store') }}">
                @csrf   
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="#nuevoTorneo">Nuevo torneo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- start step indicators -->
                    <div class="form-header d-flex mb-4 mt-3">
                        <span class="stepIndicator">Información del torneo</span>
                        <span class="stepIndicator">Participantes</span>
                    </div>
                    <!-- end step indicators -->
    
                    <!-- step one -->
                    <div class="step">
                        <p class="text-center mb-3 fw-semibold">¡Vamos a crear un nuevo torneo!</p>
                        <div class="ms-4 me-4">
                            <p class="">El primer paso paso para crear un torneo es otorgarle un nombre, ¿ya tienes un buen nombre para tu torneo? ¡Vamos a darle un buen nombre!</p>
                            <div class="form-floating mb-3">
                                <input type="text" name="nomTorneo" class="form-control" placeholder="Nombre del torneo">
                                <label for="floatingInput">Nombre del torneo</label>
                            </div>
                        </div>
                    </div>
                
                    <!-- step two -->
                    <div class="step">
                        <p class="text-center mb-3 fw-semibold">¡Añade equipos a la competición!</p>
                        <div class="ms-4 me-4">
                            <p class="">Toca el escudo del equipo que desees añadir a tu torneo. Si el equipo que deseas no aparece, podrás registrarlo y añadirlo a tu torneo más adelante en el panel de administración.</p>
                            <!-- <div class="row">
                                <div class="col">
                                    <p class="text-start fw-light text-muted">Equipos seleccionados</p>
                                </div>
                            </div>
                            <div class="row" id="select_equipos">
                                
                            </div> -->
                            <div class="row imgCheckbox">
                                @foreach ($equipos as $equipo)
                                <div class="col-md-3">
                                    <li>
                                        <input type="checkbox" id="myCheckbox{{$equipo->id}}" value="{{$equipo->nombre}}" name="equipos[]" />
                                        <label for="myCheckbox{{$equipo->id}}"><img src="{{asset($equipo->escudo)}}" alt="{{$equipo->nombre}}" class="img-fluid"/></label> 
                                    </li>
                                </div>
                                @endforeach                               
                            </div>
                        </div>
                        
                    </div>

                </div> 

                <div class="modal-footer">
                    <!-- start previous / next buttons -->
                    <div class="form-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-outline-primary" id="prevBtn" onclick="nextPrev(-1)">Atras</button>
                        <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
                    </div>
                    <!-- end previous / next buttons -->
                    
                    <!-- <button type="submit" class="btn btn-primary">Añadir torneo</button> -->
                </div>
            </form>
         </div>
    </div>
</div>
<script src="{{asset('js/multi-step-modal.js')}}"></script>