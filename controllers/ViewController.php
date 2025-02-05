<?php

class ViewController {

    public function render($view){
        require_once './views/' . $view . '.php';
    }
}