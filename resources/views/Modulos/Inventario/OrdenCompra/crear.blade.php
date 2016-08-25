@extends('menu.estructura')
@section('content')

<!-- invocamos el  archivo con las validaciones del formulario "Crear usuario" -->
@include('plantilla.validaciones.inventario.inventarioCrear')
<!-- Main content -->
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-globe"></i> Orden de Compra
        <small class="pull-right">Fecha: {{ date('d/m/Y') }}</small>
      </h2>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <button class="person_business btn btn-success">Persona</button> o <button class="person_business btn btn-success">Empresa</button>
    <div class="col-sm-4">
      <div class="hidden">
        Persona
        <select class="form-control" id="person">
          <option value="">Seleccione..</option>
          @foreach ($person as $key => $value)
          <option value="{{ $person[$key]->per_id }}, p">{{ $person[$key]->per_nombres }} {{ $person[$key]->per_apellidos }}</option>
          @endforeach
        </select>
      </div>
      <div class="hidden">
        Empresa
        <select class="form-control" id="business">
          <option value="">Seleccione..</option>
          @foreach ($business as $key => $value)
          <option value="{{ $business[$key]->emp_id }}, b">{{ $business[$key]->emp_nombres }}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  <!-- /.col -->
  <div class="col-sm-4 invoice-col">
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row hidden" id="1">
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <center><h3 class="box-title"> Listado de Productos</h3></center>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-success">
                <div class="table-responsive">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>Descripcion</td>
                        <td>Color</td>
                        <td>Talla</td>
                        <td>Disponible</td>
                        <td>Costo</td>
                        <td>Cantidad</td>
                        <td>Agregar</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($products as $product) { ?>
                        <tr>
                          <td class="id"><?php echo $product->pro_id ?></td>
                          <td><?php echo $product->pro_descripcion ?></td>
                          <td><?php echo $product->col_descripcion ?></td>
                          <td><?php echo $product->tal_dimension ?></td>
                          <td class="available"><?php echo $product->pro_cantidad ?></td>
                          <td class="cost"><?php echo $product->pro_costo ?></td>
                          <td>
                            <input type="number" id="number" class="quantity" min="1" max="{{ $product->pro_cantidad }}">
                          </td>
                          <td>

                            <button class="add btn btn-success glyphicon glyphicon-edit"></button>

                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- /.box box-primary -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
      </div><!-- /.box-->
    </section>
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row hidden two">
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <center><h3 class="box-title">Productos agregados</h3></center>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-success">
                <div class="table-responsive">
                  <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>Descripcion</td>
                        <td>Color</td>
                        <td>Talla</td>
                        <td>Costo</td>
                        <td>Cantidad</td>
                      </tr>
                    </thead>
                    <tbody id="add">
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- /.box box-primary -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.box-body -->
      </div><!-- /.box-->
    </section>
  </div>
  <!-- /.row -->
  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
  <div class="row hidden two">
    <!-- accepted payments column -->
    <div class="col-xs-6"></div>
    <!-- /.col -->
    <div class="col-xs-6">

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">Cantidad de productos:</th>
            <td id="quantityProduct">0</td>
          </tr>

          <tr>
            <th>Total:</th>
            <td id="total">0</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <button type="button" class="save btn btn-default pull-right hidden two" style="margin-right: 5px;">Generar Orden</button>
      <script src="{{ asset('js/purchaseOrder.js') }}"></script>
    </div>
  </div>
</section>
<!-- /.content -->
<div class="clearfix"></div>
@endsection
