@section('title', __('Partida Inds'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left .col-auto .me-auto">
							<h4>
							Partida Individual </h4>
						</div>
						
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control .col-auto .me-auto" name="search" id="search" placeholder="Search Partida Inds">
						</div>
						<div class="btn btn-sm btn-success .col-auto .me-auto" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i> Crear
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.partida-inds.create')
						@include('livewire.partida-inds.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Jug1</th>
								<th>Jug2</th>
								<th>Ganador </th>
								<th>Fecha </th>
								<th>Observacion </th>
								<td>Acciones</td>
							</tr>
						</thead>
						<tbody>
							@foreach($partidaInds as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->jugadors1->nombre_ind }}</td>
								<td>{{ $row->jugadors2->nombre_ind }}</td>
								<td>{{ $row->jugadors3->nombre_ind }}</td>
								<td>{{ $row->fecha_par_ind }}</td>
								<td>{{ $row->observacion_par_ind }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" style="color:white; background-color:blue;" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item " style="color:white; background-color:red;" onclick="confirm('Confirm Delete Inscripcion Equ id {{$row->id}}? \nDeleted Inscripcion Equs cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
