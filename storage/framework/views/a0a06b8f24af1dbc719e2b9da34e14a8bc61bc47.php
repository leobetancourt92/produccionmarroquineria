<?php
/**
 * @Nombre: ${user}Luis Fernando Angulo Palacios
 * @Fecha:  13/06/2016
 * @Hora:  08:36 PM
 * @Año:   ${year}
 * @Categoria: ${project_name}
 */
?>

<?php $__env->startSection('content'); ?>

<h1>hola</h1>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>