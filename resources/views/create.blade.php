<!doctype html>
<html lang="ja" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>備品情報登録画面</title>


    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="views/index">{{ Auth::user()->name }}</a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          
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
      </div>
    </div>
  </nav>
</header>

<body >
    <div class="border col-7 bg-light mx-auto " style=" margin-top: 20vh; width: 35%;">
        <br>
        <h2 class="text-center">備品情報登録</h2>
        <br>
        <div class="row ">
            <div class="col-md ">
                <form > 
                    <div class="form-group my-3 mx-auto" >
                        <label>管理番号</label>
                        <input type="text" class="form-control" placeholder="管理番号">
                    </div>
                    <div class="form-group my-3 mx-auto" >
                        <label>備品名</label>
                        <input type="text" class="form-control" placeholder="備品名">
                    </div>
                    <div class="form-group my-3 mx-auto" >
                        <label>数量</label>
                        <input type="text" class="form-control " placeholder="数量">
                    </div>
                  </form>
                </div>
              </div>
            <div class="col-5  mx-auto text-center my-4">
                <button type="button" class=" btn btn-lg btn-primary">登録</button>
            </div>
        </div>

  </body>

</html>
