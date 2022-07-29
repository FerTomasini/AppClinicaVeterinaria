<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('titulo'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body style="background-color: #66CDAA;">
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?php echo e(route('entrada')); ?>" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="<?php echo e(route('servicos')); ?>" class="nav-link px-2 text-white">Serviços</a></li>
          <li><a href="<?php echo e(route('examesvet')); ?>" class="nav-link px-2 text-white">Exames</a></li>
          <li><a href="<?php echo e(route('consultasvet')); ?>" class="nav-link px-2 text-white">Agendamento de Consultas</a></li>
          <li><a href="<?php echo e(route('farmacia.ver')); ?>" class="nav-link px-2 text-white">Farmácia</a></li>
          <li><a href="<?php echo e(route('gravarmensagem')); ?>" class="nav-link px-2 text-white">Fale Conosco</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
        <?php if(session('usuario')): ?>
        Olá <?php echo e(session('usuario.name')); ?>!!
        <a href="<?php echo e(route('user.logout')); ?>">
        <button type="button" class="btn btn-success">Logout</button>
        </a>
        <?php else: ?> 
          <a a href="<?php echo e(route('user.index')); ?>" class="btn btn-outline-light me-2">Login</a>
          <button type="button" class="btn btn-success">Sign-up</button>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </header>
<?php echo $__env->yieldContent('corpo'); ?>
</body>
</html><?php /**PATH C:\Users\user\AppClinica\resources\views/templates/layout.blade.php ENDPATH**/ ?>