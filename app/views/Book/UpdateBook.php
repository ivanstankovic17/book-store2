<div>
    <h1>Update Book</h1>
    <h2>ID: <?= $book['id']; ?></h2>
    <form method="post">
        <fieldset>
            <label for="isbn">ISBN: </label>
            <input type="text" name="isbn" id= "isbn" value="<?= $book['isbn']; ?>" />
        </fieldset>
        <fieldset>
            <label for="title">Title: </label>
            <input type="text" name="title" id= "title" value="<?= $book['title']; ?>" />
        </fieldset>
        <fieldset>
            <label for="author">Author: </label>
            <input type="text" name="author" id= "author" value="<?= $book['author']; ?>" />
        </fieldset>
        <button type="submit">Update</button>
    </form>
    <a href="<?=BASE_URL ?>books">View All Books</a>
</div>