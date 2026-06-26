<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<form action="/book/new" method="post">
<fieldset>
<legend>Add a New Book</legend>

    <label class="form-label" for="title">Title:</label>
    <input class="form-control form-text" type="text" id="title" name="title" required>

    <label class="form-label"  for="genre">Genre:</label>
    <select class="form-control form-select" t id="genre" name="genre" required>
        <option value="">Select a genre</option>
        <option value="fiction">Fiction</option>
        <option value="non-fiction">Non-Fiction</option>
        <option value="mystery">Mystery</option>
        <option value="science-fiction">Science Fiction</option>
    </select>

    <label for="author">Author:</label>
    <input class="form-control form-text" t class="input" type="text" id="author" name="author" required>

    <label class="form-label"  for="pubYear">Publication Year:</label>
    <input class="form-control form-text" type="text" id="pubYear" name="pubYear" required>

    <button class="form-control btn btn-primary" type="submit">Create Book</button>
</form>

<?= $this->endSection() ?>