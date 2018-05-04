<?php
use teste\Service\MidiaService;

require_once __DIR__. '/./vendor/autoload.php';
include createOrEditmidia.php;

$midiaService =new MidiaService();

if (isset($_GET['id']) && !empty($_GET['id'])){
    $midia = $midiaService->findByCategory($_GET['category']);
    $midiaList = array();
    array_push($midiaList,$midia);
}else{
$midiaList = $midiaService->listAll();
}

$smarty = new \Smarty();
$smarty->setTemplateDir(__DIR__.'/./templates/');

$smarty->assign('midiaList',$midiaList);
$smarty->display('midia.tpl');
?> 