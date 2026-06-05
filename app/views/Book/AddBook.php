<div class="row justify-content-center m-4">
    <div class="col-md-6">
    <h1 class="mb-4">Add Book</h1>
        <?php if(!empty($error)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
        <?php endif; ?>
    <form method="post">
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN No: </label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="<?= $old['isbn'] ?? '' ?>"/>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title: </label>
            <input type="text" name="title" id="title" class="form-control" value="<?= $old['title'] ?? '' ?>"/>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author: </label>
            <input type="text" name="author" id="author" class="form-control"  value="<?= $old['author'] ?? '' ?>"/>
            </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
    <a href="<?= BASE_URL ?>books" class="btn btn-secondary mt-2">View All Books</a>
    </div>
</div>



