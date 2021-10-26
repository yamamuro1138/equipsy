<!doctype html>
<html lang="ja" class="h-100">
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
      <a class="navbar-brand">{{ Auth::user()->name }}</a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- 備品登録 -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="{{ ('/create') }}">備品登録する</a>
          </li>
          
          <!-- ログアウト -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  ログアウト</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  </form>
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

<!-- 備品情報一覧 -->
  <h1 class="h3 my-4">サンプルテーブル</h1>
  <div class="table-responsive-sm ">
  <table class="table table-striped mx-auto text-center" style="width: 70%">
      <thead>
        <tr>
          <th  scope="col">管理番号</th>
          <th  scope="col">備品名</th>
          <th  scope="col">数量</th>
          <th  scope="col">更新日時</th>
          <th  scope="col">編集or削除</th>
          <!-- <th  scope="col">&#65049;</th> -->
        </tr>
      </thead>
      <tbody>
      @foreach($posts as $post)
        <tr>
          <td>{{$post->control_number}}</td>
          <td>{{$post->item}}</td>
          <td>{{$post->quantity}}</td>
          <td>{{$post->created_at->format('Y.m.d')}}</td>
          <td>&#65049;</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
