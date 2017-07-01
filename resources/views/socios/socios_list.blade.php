@extends ('layouts.app')

@php ($title = 'Socios')

@section ('content')


<div class="container">
	<div class="form-group">
		<div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;"><h2> Socios </h2></div>
                <div class="panel-body">
					<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<div class="row">

					<div class="dataTables_length" id="datatable_length">
					<label>Mostrar <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
					<option value="10">10</option>
					<option value="25">25</option>
					</select> socios
					</label>
					</div>

					<div class="pull-right">
					<div id="datatable_filter" class="dataTables_filter">
					<label> Buscar: <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable">
					</label>
					</div>
					</div>
					</div>

          <div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid">
                      <thead>



                      <tbody>
										    <hr role="row" class="even">
                        <td class="col-sm-1" ><b> Nro Socio </b></td>
                        <td class="col-sm-3"><b> Apellido/s </b></td>
												<td class="col-sm-4"><b> Nombre/s </b></td>
												<td><b> Telefono </b></td>
												<td class="col-sm-2"><b> Tipo Socio </b></td>
												<td><a href="{{ route('create_socio_path') }}" class="btn btn-success"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a></td>

                      </hr>

                        @foreach($socios as $socio)
                      			<tr role="row" class="odd">
                            <td class="sorting_1">   <a  href="{{ route('socio_path', ['socio' => $socio->id] ) }}">	{{$socio->id}} </a>	</td>
                            <td>	{{$socio->apellido}}	</td>
                            <td>	{{$socio->nombre}}	 </td>
                            <td>	{{$socio->telefono}}	</td>
                            <td>	@if($socio->protector)
																		<b> Protector </b>
																	@else
																		<b> {{$socio->deporte->deporte}} </b>
																	@endif

														</td>
														<td><a href="{{ route('edit_socio_path', ['socio' => $socio->id] ) }}" class="btn btn-info"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a> </td>

														<form action="{{ route('delete_socio_path', ['socio' => $socio->id] ) }}" method="POST">
															{{ csrf_field() }}
															{{ method_field('DELETE') }}
															<td><button class="btn btn-danger" aria-hidden="true" type="submit"><i class="fa fa-times-circle fa-2x" aria-hidden="true" type="submit"></i></button></td>
														</form>
                      	</tr>


                        @endforeach

                        </tr></tbody>
                    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
				</div>
		</div>
	</div>
</div>

@endsection
