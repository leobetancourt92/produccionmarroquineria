@extends('menu.estructura')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <center><h3 class="box-title"> Listado del Invetario</h3></center>
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
                                    <td>No Bodega</td>
                                    <td>Codigo Producto</td>
                                    <td>Descripcion Producto</td>
                                    <td>Cantidad Total</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($bodega as $producto){?>
                                    <tr>
                                        <td><?php echo $producto->bod_id ?></td>
                                        <td><?php echo $producto->pro_id ?></td>
                                        <td><?php echo $producto->pro_descripcion?></td>
                                        <td><?php echo $producto->bod_total ?></td>
                                <?php }?>
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