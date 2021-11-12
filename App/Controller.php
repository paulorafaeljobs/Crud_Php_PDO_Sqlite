<?php
include 'Model.php';
$crud = new Model();

//Cadastro
if(isset($_POST['Create'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

    $crud->nome = $nome;
    $crud->telefone = $telefone;
    $crud->endereco = $endereco;
    $crud->Create();
    header('location: ./../');
}
//Edita Cadastro
else if(isset($_POST['Update'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    $crud->nome = $nome;
    $crud->telefone = $telefone;
    $crud->endereco = $endereco;
    $crud->id = $id;
    $crud->Update();
    header('location: ./../');
}
//Excluir Cadastro
else if(isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $crud->id = $id;
    $crud->Delete();
    header('location: ./../');
}
else{
    header('location: ./../');
}
