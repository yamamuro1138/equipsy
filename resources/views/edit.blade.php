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

<header>
  <!-- ナビバー -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <!-- ユーザーネーム -->
      <a class="navbar-brand" href="/index">{{ Auth::user()->name  }}</a> 
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
        <h2 class="text-center">備品情報編集</h2>
        <br>
        <div class="row ">
            <div class="col-md ">
              <!-- エラーメッセージ -->
              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
              <!-- フォーム -->
                <form method="POST" action="{{route('post.update', ['id' => $post->id])}}"> 
                  @csrf
                  <!-- 管理番号 -->
                    <div class="form-group my-3 mx-auto" >
                        <label>管理番号</label> 
                        <input type="text" name="control_number" class="form-control" placeholder="管理番号" value="{{$post->control_number}}">
                    </div>
                    <!-- 備品名 -->
                    <div class="form-group my-3 mx-auto" >
                        <label>備品名</label><label class=" mx-2 text-center rounded text-light bg-danger" >必須</label>
                        <input type="text" name="item" class="form-control my-2" placeholder="備品名" value="{{$post->item}}">
                    </div>
                    <!-- 数量 -->
                    <div class="form-group my-3 mx-auto" >
                        <label>数量</label><label class=" mx-2 text-center rounded text-light bg-danger" >必須</label>
                        <input type="number" name="quantity" class="form-control my-2" placeholder="数量" min="0" value="{{$post->quantity}}">
                    </div>
                    <!-- 登録ボタン -->
                    <div class=" mx-auto text-center my-4">
                        <button type="submit" class=" btn btn-lg btn-primary">更新する</button>
                        <a href="/index"  class=" btn btn-lg btn-secondary">一覧に戻る</a>
                    </div>
                  </form>
              </div>
            </div>
        </div>

</body>
</html>
