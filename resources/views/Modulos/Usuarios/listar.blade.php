@extends('menu.estructura')
@section('content')
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
        <center> <h3 class="box-title"> Listado de Usuarios</h3></center>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
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
                                            <td>Nombre</td>
                                            <td>Email</td>
                                            <td>Estado</td>
                                            <td>Acciones</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($objUsuario as $usuario){?>
                                        <tr>
                                            <td><?php echo $usuario->nombre ?></td>
                                            <td><?php echo $usuario->email?></td>
                                            <td>
                                                <?php if($usuario->estado == 1 ): ?>
                                                    <span class='label label-success'>
                                                        <font class='h5'>Activo</font>
                                                    </span>
                                                <?php else: ?>
                                                    <span class='label label-danger'>
                                                        <font class='h5'>Inactivo</font>
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                             <a href="<?php echo url("usuario/editar/" . $usuario->id) ?>"
                                                   class="btn btn-primary btn-sm">Editar</a>
                                                   <?php if($usuario->estado == 1 ): ?>
                                                    <button onclick="Desactivar(<?php echo $usuario->id?>)"
                                                            class="btn btn-danger btn-sm" id="dss">Deshabilitar
                                                    </button>
                                                <?php else: ?>
                                                    <button onclick="Activar(<?php echo $usuario->id?>)"
                                                            class="btn btn-success btn-sm" id="add">Activar
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

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
