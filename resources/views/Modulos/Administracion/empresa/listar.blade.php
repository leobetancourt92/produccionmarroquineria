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
                            <h3 class="box-title">Listado de Empresas</h3>
                        </div><!-- /.box-header -->
                        <div class="box-success">
                            <div class="table-responsive">
                                <table id="tabla" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Nit</th>
                                            <th class="text-center">Razón Social</th>
                                            <th class="text-center">Dirección</th>                           
                                            <th class="text-center">Teléfono</th> 
                                            <th class="text-center">Correo</th>
                                            <th class="text-center">Contacto</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    foreach ($empresas as $empresa) { ?>
                                        <tr>
                                            <td><?php echo $empresa->emp_id ?></td>
                                            <td><?php echo $empresa->emp_nit ?></td>
                                            <td><?php echo $empresa->emp_razon_social ?></td>
                                            <td><?php echo $empresa->emp_direccion ?></td>                                        
                                            <td><?php echo $empresa->emp_telefono ?></td>
                                            <td><?php echo $empresa->emp_correo ?></td>
                                            <td><?php echo $empresa->emp_contacto ?></td>
                                            <td class="text-center">                                               
                                                <a href="<?php echo url("empresa/ver/" . $empresa->emp_id) ?>"
                                                    class="btn btn-info btn-sm">Ver</a>
                                                    
                                                <a href="<?php echo url("empresa/editar/" . $empresa->emp_id) ?>"
                                                    class="btn btn-primary btn-sm">Editar</a>
                                                    
                                                <?php if($empresa->emp_estado == "1" ): ?>
                                                <button onclick="Desactivar(<?php echo $empresa->emp_id?>)"
                                                    class="btn btn-danger btn-sm" id="dss">Desactivar
                                                </button>
                                                
                                                <?php else: ?>
                                                <button onclick="Activar(<?php echo $empresa->emp_id?>)"
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