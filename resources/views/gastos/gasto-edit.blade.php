@extends('layouts.app')

@php ($title = 'Editar Gasto')

@section('content')

  <h2>Editar Gasto</h2>

  <div class="x_panel">
    <div class="x_title">
      <h2>
        <i class="fa fa-usd" aria-hidden="true"></i> Gastos
        <small>editar un gasto</small>
      </h2>
      <div class="clearfix"></div>

      @include('gastos.errors')
    </div>
    <div class="x_content" style="display: block;">
      <br>

    <form class="form-horizontal form-label-left" action="{{ route('update.gasto', ['gasto' => $gasto->id]) }}" method="POST">

        {{ method_field('PUT') }}
        {{ csrf_field() }}

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_factura">
          N° de Factura
        </label>
        <div class="col-md-2 col-sm-2 col-xs-8">
          <input type="text" name="num_factura" class="form-control col-md-7 col-xs-12" value="{{ $gasto->num_factura }}">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proveedor">
          Proveedor
        </label>
        <div class="col-md-4 col-sm-4 col-xs-10">
          <input type="text" name="proveedor" class="form-control col-md-7 col-xs-12" value="{{ $gasto->proveedor }}">
        </div>
      </div>

      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
          Concepto <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input name="concepto" class="form-control col-md-7 col-xs-12" type="text" value="{{ $gasto->concepto }}">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">
          Fecha
        </label>
        <div class="col-md-3 col-sm-3 col-xs-8">
          <input type="text" name="fecha" class="form-control" data-inputmask="'mask': '9999/99/99'" value="{{ $gasto->fecha }}">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">
          Monto <span class="required">*</span>
        </label>
        <div class="col-md-2 col-sm-2 col-xs-8">
          <input name="monto" class="date-picker form-control col-md-7 col-xs-12" type="text" value="{{ $gasto->monto }}">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">
          Fecha de Pago
        </label>
        <div class="col-md-3 col-sm-3 col-xs-8">
          <input name="fecha_pago" type="text" class="form-control" data-inputmask="'mask': '9999/99/99'" value="{{ $gasto->fecha_pago }}">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">
          Fecha de Vencimiento
        </label>
        <div class="col-md-3 col-sm-3 col-xs-8">
          <input name="fecha_vencimiento" type="text" class="form-control" data-inputmask="'mask': '9999/99/99'" value="{{ $gasto->fecha_vencimiento }}">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">
          Observacion
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input name="observacion" class="date-picker form-control col-md-7 col-xs-12" rows="8" cols="80" type="text" value="{{ $gasto->observacion }}">
        </div>
      </div>

      <div class="ln_solid"></div>

      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <a type="button" href="{{ route('gastos.lista') }}" class="btn btn-primary">Cancelar</a>
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
      </div>

    </form>

    </div>
  </div>

@endsection
