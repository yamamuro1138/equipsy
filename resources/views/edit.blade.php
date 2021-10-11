<!doctype html>
<html lang="ja" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>備品情報編集画面</title>


    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
  <body class="d-flex flex-column h-100">

<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">equipsy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="#">ログアウト</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="container-sm" style="background-color: rgba(0, 0, 255, 0.1); margin-top: 15vh; width: 45%; height: 70% ">
    <h2 class="text-center my-5" >備品情報編集</h3>
    <form >
        <!-- 管理NO入力欄 -->
        <div class="form-group my-3 mx-auto" style="width: 35%">
          <label for="Management no">管理NO</label>
          <input type="Management no" class="form-control "  aria-describedby="Management no" placeholder="管理NOを入力">
        </div>
        <!-- 備品名入力欄 -->
        <div class="form-group my-3 mx-auto" style="width: 35%">
          <label for="item">備品名</label>
          <input type="item" class="form-control"  placeholder="備品名を入力">
        </div>
        <!-- 数量入力欄 -->
        <div class="form-group my-3 mx-auto" style="width: 15%">
            <label for="quantity">数量</label>
            <input type="quantity" class="form-control" ></textarea>
        </div>
        <!-- 送信ボタン -->
        <div class="text-center my-4 ">
          <button type="submit" class=" btn btn-lg btn-secondary ">一覧に戻る</button>
          <button type="submit" class=" btn btn-lg btn-primary ">登録</button>
        </div>
      </form>
  </div>


<footer class="footer mt-auto py-3 bg-light fixed-bottom ">
<div class="container text-center ">
    <span class="text-muted ">Thank you for using the equipsy.</span>
  </div>
</footer>

</body>
</html>
