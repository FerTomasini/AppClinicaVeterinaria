

<?php $__env->startSection('titulo', 'Agendamento de Consultas'); ?>

<?php $__env->startSection('corpo'); ?>
<h1>Agendar Consulta Veterinária</h1>

    <?php if($errors->any()): ?>
        <p>Preencha os campos corretamente.</p>

        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($erro); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <form action="<?php echo e(route('consultas')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        
        <p><input value="<?php echo e(old('nomeanimal')); ?>" type="text" name="nomeanimal" placeholder="Nome do animal" value=""></p>
        <p><input value="<?php echo e(old('peso')); ?>" type="text" name="peso" placeholder="Peso" value=""></p>
        <p><input value="<?php echo e(old('idade')); ?>" type="text" name="idade" placeholder="Idade" value=""></p>
        <p>
            <select name="user_id">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </p>
        <p><input value="<?php echo e(old('dataconsulta')); ?>" type="number" name="data" placeholder="Data"></p>
        <p><textarea name="descricao" cols="30" rows="10" placeholder="Motivo da consulta"><?php echo e(old('descricao')); ?></textarea></p>

        <p><input type="submit" value="Gravar"></p>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\AppClinica\resources\views/consultas.blade.php ENDPATH**/ ?>