<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


        <h2 class="mb-4">Books</h2>
        <table class="col-12 col-sm-9 table table-striped table-bordered bg-white">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($books)): ?>
                    <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?= $book['id'] ?></td>
                        <td><?= esc($book['title']) ?></td>
                        <td><?= esc($book['author']) ?></td>
                        <td><span class="badge bg-<?= $book['status'] == 'available' ? 'success' : 'warning' ?>"><?= $book['status'] ?></span></td>
                        <td><a href="/book/<?= $book['id'] ?>" class="btn btn-sm btn-outline-primary">View</a></td> 
                        <td><a href="/book/edit/<?= $book['id'] ?>" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                        <td><a href="/book/delete/<?= $book['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No books found in catalog.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?= $this->endSection() ?>