<?php
//
/**
 * @Nombre: ${user}Mercedes Ortiz Cardenas
 * @Fecha:  14/06/2016
 * @Hora:  12.52 PM
 * @Año:   ${year}
 * @Categoria: ${project_name}
 */
?>
@extends('menu.estructura')
@section('content')
    <!-- Confirmacion de Desactivar -->
    <script src="{{ asset('js/Confirmacion.js') }}"></script>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <center><h3 class="box-title"> Listado de Tallas</h3></center>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                                class="fa fa-minus"></i></button>
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
                            <div class="table-responsive">
                                <table id="tabla" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Identificación</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Apellidos</th>                   
                                        <th class="text-center">Dirección</th> 
                                        <th class="text-center">Teléfono</th>
                                        <th class="text-center">Correo</th>
                                        <th class="text-center">Fecha Nacimiento</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    foreach ($personas as $persona) { ?>
                                        <tr>
                                            <td><?php echo $persona->tip_identificacion ?></td>
                                            <td><?php echo $persona->tip_nombres ?></td>                                        
                                            <td><?php echo $persona->tip_apellidos ?></td>
                                            <td><?php echo $persona->per_direccion ?></td>
                                            <td><?php echo $persona->per_telefono ?></td>
                                            <td><?php echo $persona->per_correo ?></td>
                                            <td class="text-center"><?php echo $persona->per_fecha_nacimiento ?></td>
                                            <td class="text-center">                                               
                                                <a href="<?php echo url("persona/ver/" . $persona->per_id) ?>"
	                                               	class="btn btn-info btn-sm">Ver</a>
	                                               	
	                                            <a href="<?php echo url("persona/editar/" . $persona->per_id) ?>"
	                                               	class="btn btn-primary btn-sm">Editar</a>
	                                               	
	                                            <?php if($persona->per_estado == "ACTIVO" ): ?>
	                                            <button onclick="Desactivar(<?php echo $persona->per_id?>)"
	                                                class="btn btn-danger btn-sm" id="dss">Desactivar
	                                            </button>
	                                            
	                                            <?php else: ?>
	                                            <button onclick="Activar(<?php echo $persona->per_id?>)"
	                                                class="btn btn-success btn-sm" id="add">Activar
	                                            </button>
	                                            
	                                            <?php endif; ?>
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
@endsection