

<?php $__env->startSection('titulo', 'Página inicial'); ?>

<?php $__env->startSection('corpo'); ?>
    <h1 style=text-align-last:center>Saúde Animal - 24 Horas</h1>
    <p><h4 style=text-align-last:center>Centro veterinário com atendimento 24 horas. Carinho, zelo e proteção a todo instante para o seu pet.</h4></p>
    <?php if(session('msg')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(session('msg')); ?>

    </div>
    <?php endif; ?>
    <div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('imagens/gato.jpg')); ?>" alt="gato">
    <div class="card-body">
      <h5 class="card-title">Conheça um pouco mais sobre a FIV/FELV</h5>
      <p class="card-text">As doenças FIV e FeLV são causadas por vírus da família Retroviridae. A FIV (AIDs Felina) é uma infecção viral causada pelo Vírus Imunodeficiência Felina. A FeLV (Leucemia Felina) é uma doença infecciosa causada pelo Gammaretrovírus.</p>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Passeio com o pet: 5 motivos para adicionar os passeios à rotina!</h5>
      <p class="card-text">Ajuda no sedentarismo do pet;</p>
      <p class="card-text">Ele faz as necessidades fora de casa;</p>
      <p class="card-text">Controla o estresse e ansiedade;</p>
      <p class="card-text">Convive com outros animais/pessoas;</p>
      <p class="card-text">Deixa ele e você mais próximos, cria vínculo.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('imagens/cachorrinhos.jpg')); ?>" alt="ninhada">
    <div class="card-body">
      <h5 class="card-title">Desmitificando: veja 8 benefícios da castração</h5>
      <p class="card-text">Existem muitos mitos sobre a castração de animais de estimação. Uma das crenças mais comuns é que fêmeas devem ter ao menos uma ninhada antes de serem castradas, para que sejam saudáveis e felizes. Já no caso dos machos, crê-se que a castração torna o animal triste e frustrado, pois não conseguiria mais cruzar.</p>
      <p class="card-text">Todas as afirmações acima são falsas, tanto para cães quanto para gatos.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('imagens/dogcoçando.jpg')); ?>" alt="cachorrocoçando">
    <div class="card-body">
      <h5 class="card-title">Fique atento: Coceiras nem sempre são normais!</h5>
      <p class="card-text">Coceiras nem sempre são normais. O problema do animal se coçar frequentemente são as feridas e vermelhidões que aparecem, estando muitas vezes acompanhadas de doenças de pele.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Já agendou o check up dp seu pet?</h5>
      <p class="card-text">Nunca é tarde nem cedo para garantir que a saúde do seu pet esteja em dia.</p>
      <p class="card-text">Chama a gente e agende uma consulta de check-Up!</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img" src="<?php echo e(asset('imagens/consulta.jpg')); ?>" alt="consulta">
  </div>
  <div class="card p-3" style="background-color: #ADFF2F;">
    <blockquote class="blockquote mb-0 card-body">
      <p>"Se você passar tempo com os animais, corre o risco de se tornar uma pessoa melhor."</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Oscar Wilde
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Vacinas em pets: conheça quais e quando dá-las em seu cachorro ou gato</h5>
      <p class="card-text">A imunização com vacinas para prevenir doenças é muito importante para os pets. Para ajudar você a manter o controle, neste artigo falamos sobre as vacinas que seu cachorro ou gato precisa tomar.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\AppClinica\resources\views/entrada.blade.php ENDPATH**/ ?>