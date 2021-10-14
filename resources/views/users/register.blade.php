<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>新規登録</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

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
    <link href="../assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form>
    <h1 class="h3 mb-3 fw-normal">新規登録</h1>
    <label for="name" class="visually-hidden">name</label>
    <input type="name"  class="form-control" placeholder="名前" >
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password"  class="form-control" placeholder="パスワード" >
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password"  class="form-control" placeholder="パスワード(確認)">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> 記憶する
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">登録</button>
  </form>
</main>


    
  </body>
</html>
