<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title class="title">Correspondencia/Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="public/icon.png"><!-- icono -->
    
  </head>

  <body class="p-0 me-0 me-lg-2 ">
    <nav class="navbar navbar-expand-lg" style="background-color: #3b5b50;">
        <div class="container-fluid ">
          
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="navbar-brand text-white" ><?php echo session('usuario'); ?></a>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">  
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="mensaje" data-bs-placement="top" data-bs-title="Salir"
              aria-current="page" href="<?php echo base_url('/salir') ?>"><i class="fa-solid fa-door-open text-white"></i></i></a>
              </li>
            
          </ul>
</div>
    </div>
  </div>
</nav>


<div class="container-fluid">
<h3 class="text-center mt-3 fw-bold fst-italic">Sistema de correspondencia</h3>
<?=view ("partials/session"); ?><!--mensaje-->
<div class="table-responsive">
  <table class="table table-striped align-middle table-hover table-responsive-sm table-sm mt-4" >
    <thead >
      <tr class="table-success">
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Genero</th>
        <th>Direccion</th>
        <th>Pais</th>
        <th>Estado</th>
        
      </tr>
    </thead>

    <tbody>
    <?php foreach ($regist as $key=> $p) :?>
    <tr>
        <td><?=$p->id?></td>
        <td><?=$p->nombre?></td>
        <td><?=$p->edad?></td>
        <td><?=$p->genero?></td>
        <td><?=$p->direccion?></td>
        <td><?=$p->pais?></td>
        <td><?=$p->estado?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
  </table>
  </div>

  <?=$pager->links() ?>

  <a href="<?=base_url()?>/Reg/new" class="btn btn-success mt-4 mb-4 ms-2 me-2 btn d-grid gap-2 d-md-block">Nuevo Registro</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/997a5fa9ea.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>


  </body>
</html>

