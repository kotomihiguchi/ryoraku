{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- user.blade.phpの@yield('title')に'りょらく'を埋め込む --}}
@section('title', 'りょらく')

{{-- user.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <html>
    <head>
        <html lang="ja">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>お問い合わせ送信完了</title>
    </head>
    <body>
        <h3>送信完了しました</h3>
<p>
<a href="{{ action('Admin\InquiyController@index')}}">トップ画面に戻る</a>
</p> 
    </body>
@csrf
</html>
@endsection