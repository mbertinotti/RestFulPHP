<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('X-Requested-With: *');
    
require 'vendor/autoload.php';
require_once 'service/InstituicaoService.php';
require_once 'service/CursoService.php';

//instancie o objeto
$app = new \Slim\Slim();

//defina a rota
$app->get('/api/instituicao', function () { 
  $instituicaoService = new InstituicaoService();
  echo $instituicaoService->findAll();
});

//defina a rota
$app->get('/api/curso', function () {
    $cursoService = new CursoService();
    echo $cursoService->findAll();
});


//rode a aplicação Slim 
$app->run();

?>