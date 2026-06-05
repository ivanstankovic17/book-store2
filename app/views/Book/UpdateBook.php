<div class="row justify-content-center m-4">
    <div class="col-md-6">
        <h1 class="mb-4">Update Book</h1>
        <?php if (!empty($error)): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
        <?php endif; ?>
        <h2 class="h5 text-muted mb-3">ID: <?= $book['id']; ?></h2> <!-- Forma za ažuriranje podataka o knjizi -->
        <form method="POST">
            <div class="mb-3"> <!-- Polje za ISBN sa trenutnom vrednošću --> <label for="isbn"
                                                                                    class="form-label">ISBN:</label>
                <input type="text" name="isbn" value="<?= $book['isbn']; ?>" id="isbn" class="form-control"></div>
            <div class="mb-3"> <!-- Polje za naslov sa trenutnom vrednošću --> <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" value="<?= $book['title']; ?>" id="title" class="form-control"></div>
            <div class="mb-3"> <!-- Polje za autora sa trenutnom vrednošću --> <label for="author" class="form-label">Author:</label>
                <input type="text" name="author" value="<?= $book['author']; ?>" id="author" class="form-control"></div>
            <!-- Dugme za potvrdu ažuriranja -->
            <button type="submit" class="btn btn-warning">Update</button>
        </form> <!-- Link za povratak na listu svih knjiga --> <a href="<?= BASE_URL ?>books"
                                                                  class="btn btn-secondary mt-2">View All Books</a>
    </div>
</div>