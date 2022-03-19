<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div style="…">
    <h4>会員登録 会員ID:{{$member->id}}</h4>
    <form action="/memberEdit" method="post">
        @csrf
        <input class="form-control" type="text" name="id" value="{{$member->id}}" hidden>
        <div class="form-group">
            <input class="form-control" type="text" name="name" value="{{$member->name}}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="tel" value="{{$member->tel}}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="email" value="{{$member->email}}">
        </div>
        <div class="form-group">
            <a href="/memberEdit"><button type="submit" class="btn btn-secondary ">編集</button></a>
        </div>
        <div class="form-group">
            <a href="/memberDelete/{{$member->id}}"><button type="button" class="btn btn-secondary">削除</button></a>
        </div>
    </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
