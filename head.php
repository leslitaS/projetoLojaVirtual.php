<?php 
// incluyo el arquivo funcoes.php para tener acceso a mis funcoes
include "funcoes.php"; 

$usuario = isset($_SESSION['usuario'])?$_SESSION['usuario']:"";
//Aula sobre funções //



$usuario = logarUsuario("Leslie Cespedes", 1);





//$usuario = "false";

//Aula sobre o laço for envolvendo arrays.

// $produtos = [
    
//     "produto" =>["nome"=>"Curso Fullstack","descricao"=>"O curso fullstack ensina programação","preco"=> 1200, "img"=>"img/foto1.png"],

//     "produto2" =>["nome"=>"Curso Mobile","descricao"=>"O curso te ensina a criar apps","preco"=> 1300,"img"=>"img/foto2.png"],
    
//     "produto3" =>["nome"=>"Curso Mobile","descricao"=>"O curso te ensina a criar apps","preco"=> 1300,"img"=>"img/foto2.png"]    
     
// ]; 

// $produtos = addProduto("Curso de UX", "Curso Incrível", 2000, 'img/prduto3.png',$produtos);

$jsonProdutos = file_get_contents('Produtos.json'); // llamo al arqivo json
$produtos = json_decode($jsonProdutos,true); // para transformar um json a string
$produtos = $produtos['Produtos'];


// addProduto("Curso Mobile Androide",  "Curso para criar um app", 2300, "img/foto2.png");
$categorias = ["cursos", "Tutoriais", "Artigos", "Forum", "Codigos"];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

