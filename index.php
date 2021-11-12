<?php
include 'App/View.php';
//Instaciano a Classe Controller
$Controller = new View();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro de Cliente</title>
    <style>.conteiner{width: 70%;margin: auto;margin-top: 150px;}</style>
</head>
<body>  

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="create.php">Cadastrar novo Cliente</a>
        </li>
    </ul>

<div class="conteiner">
    <h1>CRUD - Cadastro de Clientes</h1>
    <table class="table">
        <thead>
            <tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Endereço</th><th>Editar</th></tr>
        </thead>
            <tbody>
                <?php foreach($Controller->index() as $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>  
                        <td><?= $value['nome'] ?></td>             
                        <td><?= $value['telefone'] ?></td>        
                        <td><?= $value['endereco'] ?></td>  
                        <td>
                            <a href='update.php?id="<?= $value['id'] ?>"'><button type="button" class="btn btn-success">Editar</button></a>
                            <a href='App/Controller.php?id="<?= $value['id'] ?>'><button type="button" class="btn btn-danger">Deletar</button></a>
                        </td>    
                    </tr>
                    <?php endforeach ?>  
                </tbody>
                </table>
            </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
