<?php

// teste de inlcude

$saudacao = "Hello LazyFOx!";


// Vai carregar as classes (controllers e models)
// Scandir
$controllers_files = scandir('./controllers');

foreach($controllers_files as $file){
    if($file == '.' || $file == '..'){
        continue;
    }
require_once './controllers/' . $file;
}


$models_files = scandir('./models');

foreach($models_files as $file){
    if($file == '.' || $file == '..'){
        continue;
    }
require_once './models/' . $file;
}