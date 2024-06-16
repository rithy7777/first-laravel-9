<!DOCTYPE html>
<html lang="en">
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
          <a class="nav-link " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/category">Category</a>
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
</head>
<body>
<main class="container">
    <div class ="row">
        <div class ="col">
            <a href="/category/create" class="btn btn-primary float-end">
                <i class ="bi bi-plus-lg"></i>
                Category
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table  table-border table-hover">
                <thead>
                    <tr>
                        <th width="50px">#</th>
                        <th>Name</th>
                        <th>Img</th>
                        <th width="160px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">1</td>
                        <td class="align-middle">Water</td>
                        <td>
                            <img width="40px" src="https://via.placeholder.com/150" alt="Water" class="img-thumbnail">
                        </td>
                        <td class="align-middle">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm">
                               <i class ="bi bi-trash3"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">2</td>
                        <td class="align-middle">Food</td>
                        <td>
                            <img width="40px" src="https://via.placeholder.com/150" alt="Water" class="img-thumbnail">
                        </td>
                        <td class="align-middle">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm">
                               <i class ="bi bi-trash3"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
</body>
</html>