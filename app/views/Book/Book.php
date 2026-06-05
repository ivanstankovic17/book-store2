<div class="m-4"><h1 class="mb-4">Book Details</h1>
    <!-- Podaci se dobijaju iz renderView metode putem extract() funkcije -->
    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>ID:</strong> <?= $book['id'] ?></li>
        <li class="list-group-item"><strong>ISBN:</strong> <?= $book['isbn'] ?></li>
        <li class="list-group-item"><strong>Title:</strong> <?= $book['title'] ?></li>
        <li class="list-group-item"><strong>Author:</strong> <?= $book['author'] ?></li>
        <li class="list-group-item"><strong>Date Added:</strong> <?= $book['date_added'] ?></li>
    </ul> <!-- Link za povratak na listu svih knjiga --> <a href="<?= BASE_URL ?>books" class="btn btn-secondary">View
        All Books</a></div>