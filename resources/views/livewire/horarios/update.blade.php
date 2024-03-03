<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Horario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="id_jue"></label>
                        <select wire:model="id_jue" type="text" class="form-control" id="id_jue"
                            placeholder="Juego">@error('id_jue') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                            <option>Seleccione</option>
                            @foreach($juegos as $juego)
                            <option value="{{$juego->id}}">{{$juego->nombre_jue}}</option>
                            @endforeach
                        </select>
                    </div>
            <div class="form-group">
                <label for="hora_ini_hor"></label>
                <input wire:model="hora_ini_hor" type="text" class="form-control" id="hora_ini_hor" placeholder="Hora Ini Hor">@error('hora_ini_hor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="hora_fin_hor"></label>
                <input wire:model="hora_fin_hor" type="text" class="form-control" id="hora_fin_hor" placeholder="Hora Fin Hor">@error('hora_fin_hor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="observacion_hor"></label>
                <input wire:model="observacion_hor" type="text" class="form-control" id="observacion_hor" placeholder="Observacion Hor">@error('observacion_hor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
