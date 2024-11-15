


<?php $__env->startSection('content'); ?>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<title>Bootstrap Example</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<nav class="navbar navbar-dark fixed-top" style=" background-color:orange">
  <div class="container-fluid">
    <button class="navbar-toggler" style="border-color:white;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand" href="#" style="color:white;">Construções</h1>
    <img src="<?php echo e(asset('images/user.png')); ?>" alt="" width="60px" height="60px" style="border-radius: 50%;">
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ConstruControl</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Construções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Funcinários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Avisos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Relatórios</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>



<table class="table " style="margin-top: 10%;">
  

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Data de finalização</th>
      <th scope="col">Andamento</th>
      <th scope="col">Solicitação de materiais</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    
  <?php $__currentLoopData = $Constructions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $construction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
  

    <tr>
      <th scope="row"><?php echo e($construction->id); ?></th>
    <td>
        
      <?php echo e($construction->nome); ?>

        
    </td>

    <td>
      <?php echo e($construction->data_de_finalizacao); ?>

    </td>

    <td>
      <?php echo e($construction->andamento_da_obra); ?>

    </td>

    <td>
      <?php echo e($construction->solicitacao_de_materiais); ?>

    </td>

    <td>
      <button type="button" class="btn btn-danger">Deletar</button>
        <button type="button" class="btn btn-warning">Editar</button>
    </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<!-- Button trigger modal -->
<button type="button" id="modalAdicionar" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Adicionar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar obra:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
      </form>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Adicionar</button>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aluno\construLaravel\resources\views/constructions.blade.php ENDPATH**/ ?>