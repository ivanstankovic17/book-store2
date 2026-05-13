<div>
    <h1>All Books</h1>
    <!-- Tabela za prikaz svih knjiga -->
    <table border="1">
        <thead>
            <th>ID</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date Added</th>
            <th colspan="3">Actions</th>
        </thead>
        <?php
        foreach($books as $book) : ?>
        <tr>
            <td><?= $book['id'] ?></td>
            <td><?= $book['isbn'] ?></td>
            <td><?= $book['title'] ?></td>
            <td><?= $book['author'] ?></td>
            <td><?= $book['date_added'] ?></td>
            <td>
                <form action="<?= BASE_URL ?>book/delete/<?= $book['id']; ?>" method="post"
                onsubmit="return confirm('Da li ste sigurni da zelite da obrisete ovu knjigu?');">
                    <button type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a href="<?= BASE_URL ?>book/update/<?= $book['id']; ?>">Update</a>
            </td>
            <td><a href="<?= BASE_URL ?>book/id/<?= $book['id']; ?>">View</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= BASE_URL ?>book/add">Add new book</a>
</div>