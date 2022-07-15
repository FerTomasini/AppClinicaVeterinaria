

<?php $__env->startSection('titulo', 'Página de Produtos'); ?>

<?php $__env->startSection('corpo'); ?>
    <h1>Saúde Animal - 24 Horas</h1>

    <hr>
    <?php if(session('usuario')): ?>
        Olá <?php echo e(session('usuario.nome')); ?>.
        <a href="<?php echo e(route('usuario.logout')); ?>">
            Sair
        </a>
    <?php else: ?>
        <a href="<?php echo e(route('usuario.index')); ?>">
            Clique aqui para fazer login
        </a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\AppClinica\dsi22\resources\views/produtos/index.blade.php ENDPATH**/ ?>