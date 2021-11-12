<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Adcionar Cliente</title>
	<style>
		.conteiner{width: 70%;margin: auto;margin-top: 150px;}
	</style>
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
		<h1>Cadastrar Cliente</h1>
		<form action="App/Controller.php" method="post">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Nome</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Nome">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Telefone</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="telefone" placeholder="Telefone">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Endereço</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="endereco" placeholder="Endereço">
			</div>

			<button type="submit" name="Create" class="btn btn-primary">Cadastrar</button>
		</form>
	</div>		
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>