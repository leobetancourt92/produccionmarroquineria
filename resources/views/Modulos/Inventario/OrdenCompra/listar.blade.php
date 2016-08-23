@extends('menu.estructura')
@section('content')
<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <center><h3 class="box-title">Orden de compra</h3></center>
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
                    <td>Fecha</td>
                    <td>Total</td>
                    <td>Estado</td>
                    <td>Cliente</td>
                    <td>Producto</td>
                    <td>Cantidad</td>
                    <td>Accion</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($purchaseOrders as $purchaseOrder)
                  <tr>
                    <td>{{ $purchaseOrder->ord_com_id }}</td>
                    <td>{{ $purchaseOrder->ord_com_fecha }}</td>
                    <td>{{ $purchaseOrder->ord_com_total }}</td>
                    <td>
                      @if ($purchaseOrder->ord_com_estado == 0)
                      <button class="btn btn-danger glyphicon glyphicon-hand-down" data-toggle="tooltip" title="Inactivo"></button>
                      @else
                      <button class="btn btn-success glyphicon glyphicon-hand-up" data-toggle="tooltip" title="Activo"></button>
                      @endif
                    </td>
                    <td>
                      @if (strrpos($purchaseOrder->ord_tipo_cli, 'p'))
                      @foreach ($persons as $person)
                      <?php $purchaseOrder->ord_tipo_cli = str_replace(', p', '', $purchaseOrder->ord_tipo_cli) ?>
                      @if ($purchaseOrder->ord_tipo_cli == $person->per_id)
                      {{ $person->per_nombres.' '.$person->per_apellidos }}
                      @endif
                      @endforeach
                      @else
                      @foreach ($business as $busines)
                      <?php $purchaseOrder->ord_tipo_cli = str_replace(', b', '', $purchaseOrder->ord_tipo_cli) ?>
                      @if ($purchaseOrder->ord_tipo_cli == $busines->emp_id)
                      {{ $busines->emp_nombres }}
                      @endif
                      @endforeach
                      @endif
                    </td>
                    <td>
                      @foreach ($products as $product)
                      @if ($purchaseOrder->pro_id == $product->pro_id)
                      {{ $product->pro_descripcion }}
                      @endif
                      @endforeach
                    </td>
                    <td>{{ $purchaseOrder->det_com_cantidad }}</td>
                    <td>
                      <button class="btn btn-warning" data-toggle="tooltip" title="Aprobar">
                        <a href="{{ url('inventario/state?id=').$purchaseOrder->ord_com_id }}" class="glyphicon glyphicon-hand-left" style="color: white"></a>
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- /.box box-primary -->
      </div><!-- /.col-md-12 -->
    </div><!-- /.box-body -->
  </div><!-- /.box-->
</section>
@endsection