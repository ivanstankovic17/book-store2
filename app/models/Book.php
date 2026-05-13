<?php

class Book
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllBooks()
    {
        $this->db->query("SELECT * FROM book");
        $this->db->execute();
        return $this->db->results();
    }

    public function addBook($title, $author, $isbn)
    {
        $this->db->query("INSERT INTO book (isbn, title, author) 
VALUES (:isbn, :title, :author)");
        $this->db->bind(':isbn', $isbn);
        $this->db->bind(':title', $title);
        $this->db->bind(':author', $author);
        $this->db->execute();
    }

    public function update($id, $title, $author, $isbn)
    {
        $this->db->query("UPDATE book SET 
        isbn = :isbn, title = :title, author = :author where id=:id");
        $this->db->bind(':isbn', $isbn);
        $this->db->bind(':title', $title);
        $this->db->bind(':author', $author);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

    public function getBookById($id)
    {
        $this->db->query("SELECT * FROM book WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->result();
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM book WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}