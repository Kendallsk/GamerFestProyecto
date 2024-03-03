<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear Jugador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
                <div class="form-group">
                
                        <select wire:model="id_equ" type="text" class="form-control" id="id_equ"
                            placeholder="Equipo">@error('id_equ') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                            <option>Ninguno</option>
                            @foreach($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->nombre_equ}}</option>
                            @endforeach
                        </select>
                    </div>
            <div class="form-group">
                <label for="nombre_jug"></label>
                <input wire:model="nombre_jug" type="text" class="form-control" id="nombre_jug" placeholder="Nombre Jug">@error('nombre_jug') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cedula_jug"></label>
                <input wire:model="cedula_jug" type="text" class="form-control" id="cedula_jug" placeholder="Cedula Jug">@error('cedula_jug') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="telefono_jug"></label>
                <input wire:model="telefono_jug" type="text" class="form-control" id="telefono_jug" placeholder="Telefono Jug">@error('telefono_jug') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="correo_jug"></label>
                <input wire:model="correo_jug" type="text" class="form-control" id="correo_jug" placeholder="Correo Jug">@error('correo_jug') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="descripcion_jug"></label>
                <input wire:model="descripcion_jug" type="text" class="form-control" id="descripcion_jug" placeholder="Descripcion Jug">@error('descripcion_jug') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
