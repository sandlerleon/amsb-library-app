<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($meta_title ?? 'Library App', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">

    <h2><?php echo isset($data['title']) ? htmlspecialchars($data['title'], ENT_QUOTES, 'UTF-8') : htmlspecialchars($meta_title ?? '', ENT_QUOTES, 'UTF-8'); ?></h2>

<!-- <nav>
    <li><a href="/">Home</a></li>
    <li><a href="/book_form">Add Book</a></li>    
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/book_form">Add Book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/welcome_message">About</a>
      </li>

    </ul>    
  </div>
</nav>

<br />
<div class="row">
    <?= $this->include('partials/sidebar')  ?>

    <div class="col-8 col-sm-8">
      
    <?= $this->renderSection('content') ?>

    </div>
</div>
</body>
</html>

