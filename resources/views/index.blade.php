<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>一覧画面</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">equipsy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="#">備品登録する</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ログアウト</a>
          </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
  <h1 class="h3 my-3">サンプルテーブル</h1>
  <div class="table-responsive-sm ">
  <table class="table table-striped mx-auto " style="width: 75%">
      <thead>
        <tr>
          <th  scope="col">#</th>
          <th  scope="col">A</th>
          <th  scope="col">B</th>
          <th  scope="col">C</th>
          <th  scope="col">D</th>
          <th  scope="col">E</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>sample(A,1)</td>
          <td>sample(B,1)</td>
          <td>sample(C,1)</td>
          <td>sample(D,1)</td>
          <td>sample(E,1)</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>sample(A,2)</td>
          <td>sample(B,2)</td>
          <td>sample(C,2)</td>
          <td>sample(D,2)</td>
          <td>sample(E,2)</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>sample(A,3)</td>
          <td>sample(B,3)</td>
          <td>sample(C,3)</td>
          <td>sample(D,3)</td>
          <td>sample(E,3)</td>
        </tr>
      </tbody>
    </table>
  </div>

<footer class="footer mt-auto py-3 bg-light">
<div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
