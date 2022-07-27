

<?php $__env->startSection('titulo', 'Farmácia Veterinária'); ?>

<?php $__env->startSection('corpo'); ?>
<form class="needs-validation" novalidate>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nome</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Nome" value="Mark" required>
      <div class="valid-tooltip">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Sobrenome</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Sobrenome" value="Otto" required>
      <div class="valid-tooltip">
        Tudo certo!
      </div>
    </div>
</div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip03">Email</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="Email" required>
      <div class="invalid-tooltip">
        Por favor, informe um email válido.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip04">Assunto</label>
      <input type="text" class="form-control" placeholder="Assunto">
    </div>
</div>
    <div class="col-md-10 mb-3">
      <label for="validationTooltip04">Sua Mensagem</label>
      <input type="text" class="form-control" placeholder="Sua Mensagem">
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\AppClinica\resources\views/contato.blade.php ENDPATH**/ ?>