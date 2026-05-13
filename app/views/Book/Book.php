<div>
    <h1>Book</h1>
    <ul>
        <li>ID: <?= $book['id'] ?></li>
        <li>ISBN: <?= $book['isbn'] ?></li>
        <li>Title: <?= $book['title'] ?></li>
        <li>Author: <?= $book['author'] ?></li>
        <li>Date Added: <?= $book['date_added'] ?></li>
    </ul>
    <a href="<?= BASE_URL ?>books">View All Books</a>
</div>
