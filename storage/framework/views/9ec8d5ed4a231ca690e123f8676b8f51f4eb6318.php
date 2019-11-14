<?php $__env->startSection('cabecalho'); ?>
<img src="<?php echo e(url('/img/homep_ico.png')); ?>">
    <h2>Principal Cadastrados</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<a href="/jovens">Jovens</a>/
<a href="/adultos">Adultos</a>/
<a href="/idosos">Idosos</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\dantelaravel\resources\views/main.blade.php ENDPATH**/ ?>