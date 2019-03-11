<?php

class Controller {

    // Create a new instance of a model
    protected function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    // Load data to a specific view
    protected function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}

?>