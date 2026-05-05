<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema biblioteca -  Cadastro de Alunos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    
    <div>
        <?php include VIEWS . '/Includes/menu.php'; ?>
    </div>
  
    <h1>Cadastro de Alunos</h1>

    
    <form action="/alunos/cadastro" method="post" class="p-5">

      <div class="mb-3">
          <label for="nome class="form-label">Nome</label>
          <input type="text" class="form-control" name="nome" id="nome">
      </div>
      <div class="mb-3">
          <label for="ra" class="form-label">Ra</label>
          <input type="text" class="form-control" name="ra" id="ra">
      </div>
      <div class="mb-3">
          <label for="curso" class="form-label">Curso</label>
          <input type="text" class="form-control" name="curso" id="curso">
      </div>
       <div class="col-auto">
    <button type="submit" class="btn btn-success mb-3"> Cadastrar</button>
  </div>


    </form>
  
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>