<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('X-Requested-With: *');
    
require 'vendor/autoload.php';
require_once 'service/InstituicaoService.php';
require_once 'service/CursoService.php';
require_once 'service/AlunoService.php';
require_once 'service/PublicacaoService.php';
require_once 'service/IndicadorService.php';

//instancie o objeto
$app = new \Slim\Slim();

//defina a rota
$app->get('/api/instituicao', function () { 
  $instituicaoService = new InstituicaoService();
  echo $instituicaoService->findAll();
}); 


$app->get('/api/curso', function () { 
  $cursoService = new CursoService();
  echo $cursoService->findAll();
}); 

$app->get('/api/aluno', function () { 
  $alunoService = new ALunoService();
  echo $alunoService->findAll();
}); 

$app->get('/api/publicacao', function () { 
  $publicacaoService = new PublicacaoService();
  echo $publicacaoService->findAll();
}); 


$app->get('/api/instituicao/indicador', function () { 
  $indicadorService = new IndicadorService();
  echo $indicadorService->findAll();
}); 

//rode a aplicação Slim 
$app->run();
?>