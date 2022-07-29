

<?php $__env->startSection('titulo', 'Farmácia Veterinária'); ?>

<?php $__env->startSection('corpo'); ?>
<form action="<?php echo e(route('gravarmensagem')); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<form>

        <p><input value="<?php echo e(old('nome')); ?>" type="text" name="nome" placeholder="Nome" value=""></p>
        <p><input value="<?php echo e(old('sobrenome')); ?>" type="text" name="sobrenome" placeholder="Sobrenome" value=""></p>
        <p><input value="<?php echo e(old('email')); ?>" type="text" name="email" placeholder="Email" value=""></p>
        <p><input value="<?php echo e(old('assunto')); ?>" type="text" name="assunto" placeholder="Assunto" value=""></p>
        <p><textarea name="mensagem" cols="30" rows="10" placeholder="Mensagem"><?php echo e(old('mensagem')); ?></textarea></p>

        <p><input type="submit" value="Gravar"></p>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\AppClinica\resources\views/contato.blade.php ENDPATH**/ ?>