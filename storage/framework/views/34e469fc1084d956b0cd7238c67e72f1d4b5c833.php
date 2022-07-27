

<?php $__env->startSection('titulo', 'Login'); ?>

<?php $__env->startSection('corpo'); ?>
    <h1>Login</h1>
    <h5>Caro cliente, para acessar e aproveitar de todas as 
        comodidades de nosso site, por favor faça o seu login!</h5>

    <?php if(session('erro')): ?>
        <p><?php echo e(session('erro')); ?></p>
    <?php endif; ?>

    <hr>
    <?php if(session('usuario')): ?>
        Olá <?php echo e(session('usuario.nome')); ?>.
        <a href="<?php echo e(route('usuario.logout')); ?>">
            Sair
        </a>
    <?php endif; ?>
    <hr>

    <form action="<?php echo e(route('user.login')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="email">
        <br>
        <input type="password" name="senha">
        <br>
        <input type="submit" value="Acessar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\AppClinica\resources\views/usuarios/index.blade.php ENDPATH**/ ?>