@extends('layouts.app')

@php ($title = 'Mi Panel')

@section('content')

<div class="x_panel">

<div class="x_title">
  <h2>Listado de Gastos</h2>
  <span class="pull-right"><a class="btn btn-success" href="{{ route('create.gasto') }}">Nuevo Gasto</a></span>
  <div class="clearfix"></div>

  @include('gastos.msjs')
</div>

  <div class="x_content" style="display: block; ">

    <div class="row">
      <div>

        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid" aria-describedby="datatable-checkbox_info">
          <thead>
            <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 N° Factura
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Proveedor
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Concepto
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Fecha
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Monto
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Fecha de Pago
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Fecha de Vencimiento
                </th>
                @if ($gastos->isEmpty())

                @else
                  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=" " style="width: 6px;"></th>

                  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=" " style="width: 6px;"></th>
                @endif
            </tr>
          </thead>
<!-- Body -->
    <tbody>
      <!-- foreach -->
      @foreach ($gastos as $gasto)
        <tr role="row" class="odd">

          <td>{{ $gasto->num_factura }}</td>
          <td>{{ $gasto->proveedor }}</td>
          <td>{{ $gasto->concepto }}</td>
          <td>{{ $gasto->fecha }}</td>
          <td>${{ $gasto->monto }}</td>
          <td>{{ $gasto->fecha_pago }}</td>
          <td>{{ $gasto->fecha_vencimiento }}</td>

          <!-- boton para eliminar una entrada -->
          <td>
            <form action="{{ route('delete.gasto', ['gasto' => $gasto->id]) }}" method="POST">
              {{ csrf_field() }}
							{{ method_field('DELETE') }}

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                <i type="button" class="fa fa-times-circle" aria-hidden="true"></i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="modal-title" id="exampleModalLabel">Advertencia!</h2>

                    </div>
                    <div class="modal-body">
                      <h4>Esta seguro que quiere eliminar este GASTO?</h4>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                  </div>
                </div>
              </div>

            </form>
          </td>
          <!-- boton para editar entrada -->
          <td>
            <a class="btn btn-primary" href="{{ route('edit.gasto', ['gasto' => $gasto->id]) }}">
              <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      @endforeach

    </table>
  </div>
</div>

</div>
</div>
</div>
@endsection
