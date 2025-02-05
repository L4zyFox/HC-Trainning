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
    echo $file;
require_once './controllers/' . $file;
}


