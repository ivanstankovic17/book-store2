<?php

class BookController extends Controller
{
    public function index()
    {
        $bookModel = $this->loadModel('Book');
        $books = $bookModel->getAllBooks();
        $this->renderView('Book/Books', ['books' => $books]);
    }

    public function addNewBook()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bookModel = $this->loadModel('Book');
            $bookModel->addBook($_POST["title"], $_POST["author"], $_POST["isbn"]);
            header('Location: ', BASE_URL . 'books');
            exit;
        }
        $this->renderView('Book/AddBook');
    }

    public function deleteBook($id)
    {
        $bookModel = $this->loadModel('Book');
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bookModel->delete($id);
        }
        header('Location: ', BASE_URL . 'books');
        exit;
    }

    public function bookById($id)
    {
        $bookModel = $this->loadModel('Book');
        $book = $bookModel->getBookById($id);
        $this->renderView('Book/Book', ['book' => $book], $book['title']);
    }

    public function updateBook($id)
    {
        $bookModel = $this->loadModel('Book');
        $book = $bookModel->getBookById($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bookModel->update($id, $_POST["title"], $_POST["author"], $_POST["ISBN"]);
            header('Location: ', BASE_URL . 'books');
            exit;
        }
        $this->renderView('Book/UpdateBook', ['book' => $book]);
    }
}