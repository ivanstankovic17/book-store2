<?php

class Controller
{
    protected function loadModel($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    protected function renderView($viewPath, $data = [], $title = "Book Store")
    {
        extract($data);
        require_once '../app/views/layout.php';
    }

    protected function validateId($id)
    {
        if(!isset($id) || !ctype_digit(strval($id)) || (int)$id <= 0)
        {
            http_response_code(404);
            echo '<h1>404 Not Found</h1>';
            exit;
        }
    }

}


