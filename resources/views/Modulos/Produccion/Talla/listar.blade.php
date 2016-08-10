@extends('menu.estructura')
@section('content')
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
        <center> <h3 class="box-title"> Listado de Tallas</h3></center>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                </div>
        </div>
            <div class="box-body">
                <div class="col-md-12">
               <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Listado de Tallas</h3>
                            </div><!-- /.box-header -->
                            <div class="box-success">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Dimensi&oacute;n</td>
                                            <td>Acciones</td>
                                        </tr>
                                    </thead>x
                                     <?php $i = 1; ?>
                                    <tbody>
                                        <?php foreach($objTalla as $talla){?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $talla->tal_dimension?></td>
                                            <td><a href="<?php echo url("talla/editar/".$talla->tal_id)?>"><i class="fa fa-plus fa-2x"></i></a></td>
                                        </tr>
                                        
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>  
                        </div><!-- /.box box-primary -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.box-body -->
    </div><!-- /.box-->
</section>

@endsection
