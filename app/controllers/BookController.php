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
            $title = trim($_POST['title']);
            $author = trim($_POST['author']);
            $isbn = trim($_POST['isbn']);
            if($title === '' || $author === '' || $isbn === '') {
                $this->renderView('Book/AddBook', [
                    'error' => 'All Fields are required',
                    'old' => [
                        'title' => $title,
                        'author' => $author,
                        'isbn' => $isbn
                    ]
                ]);
                return;
            }
            $bookModel->addBook($_POST["title"], $_POST["author"], $_POST["isbn"]);
            header('Location: '. BASE_URL . 'books');
            exit;
        }
        $this->renderView('Book/AddBook');
    }

    public function deleteBook($id)
    {
        $this->validateId($id);
        $bookModel = $this->loadModel('Book');
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bookModel->delete($id);
        }
        header('Location: '. BASE_URL . 'books');
        exit;
    }

    public function bookById($id)
    {
        $this->validateId($id);
        $bookModel = $this->loadModel('Book');
        $book = $bookModel->getBookById($id);
        if(!$book) {
            http_response_code(404);
            echo "<h1>404 Not Found</h1>";
            exit;
        }
        $this->renderView('Book/Book', ['book' => $book], $book['title']);
    }

    public function updateBook($id)
    {
        $this->validateId($id);
        $bookModel = $this->loadModel('Book');
        $book = $bookModel->getBookById($id);
        if(!$book) {
            http_response_code(404);
            echo "<h1>404 Not Found</h1>";
            exit;
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = trim($_POST['title']);
            $author = trim($_POST['author']);
            $isbn = trim($_POST['isbn']);
            if($title === '' || $author === '' || $isbn === '') {
                $book['title'] = $title;
                $book['author'] = $author;
                $book['isbn'] = $isbn;

                $this->renderView('Book/UpdateBook', [
                    'error' => 'All Fields are required',
                    'book' => $book
                ]);
                return;
            }
            $bookModel->update($id, $title, $author, $isbn);
            header('Location: '. BASE_URL . 'books');
            exit;
        }
        $this->renderView('Book/UpdateBook', ['book' => $book]);
    }
}