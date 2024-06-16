<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            min-height: 75rem;
            padding-top: 4.5rem;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class ="container">
  <div class="row">
    <h2>Dashboard</h2>
  </div>
  <div class="row">
    <div class="col-6 col-lg-3 mb-3">
      <div class="bg-primary text-white p-3 rounded">
        <h1>150</h1>
        <p>
          Total Users
        </p>
      </div>
    </div>
    <div class="col-6 col-lg-3 mb-3">
      <div class="bg-success text-white p-3 rounded">
        <h1>150</h1>
        <p>
          Total Users
        </p>
      </div>
    </div>
    <div class="col-6 col-lg-3 mb-3">
    <div class="bg-warning text-white p-3 rounded">
      <h1>150</h1>
      <p>
        Total Users
      </p>
    </div>
  </div>
  <div class="col-6 col-lg-3 mb-3">
    <div class="bg-danger text-white p-3 rounded">
      <h1>150</h1>
      <p>
        Total Users
      </p>
    </div>
  </div>
  </div>

    <!-- <div class="bg-light p-5 rounded">
      <h1>Navbar example</h1>
      <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
      <a class="btn btn-lg btn-primary" href="/docs/5.0/components/navbar/" role="button">View navbar docs &raquo;</a>
    </div> -->
    <img src="E:\laravel9\first-laravel-9\Logo Pawn_Shop.png" class="img-thumbnail" alt="">
</main>
    
</body>
</html>