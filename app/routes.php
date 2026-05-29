<?php

$routes = [
    '' => ['controller' => 'BookController', 'method' => 'index'],
    'books' => ['controller' => 'BookController', 'method' => 'index'],
    'book/id' => ['controller' => 'BookController', 'method' => 'bookById'],
    'book/add' => ['controller' => 'BookController', 'method' => 'addNewBook'],
    'book/delete' => ['controller' => 'BookController', 'method' => 'deleteBook'],
    'book/update' => ['controller' => 'BookController', 'method' => 'updateBook']
];