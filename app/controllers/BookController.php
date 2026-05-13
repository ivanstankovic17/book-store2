<?php

class BookController extends Controller
{
    public function index()
    {
        $bookModel = $this->loadModel('Book');
        $books = $bookModel->getAllBooks();
        $this->renderView('Book/Books', ['books' => $books]);
    }
}