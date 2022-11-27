<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
 　　　 <h1>詳細確認</h1>
        
            <p> 
              {{$inquiry->id}}
            </p>
            <p> 行きたい方面：
              {{$inquiry->direction}}
            </p>
            <p> 日数：
              {{$inquiry->days}}
            </p>
            <p> 出発場所：
              {{$inquiry->starting_point}}
            </p>
            <p> 時期：
              {{$inquiry->season}}
            </p>
            <p> 人数：
              {{$inquiry->person}}
            </p>
            <p> 予算：
              {{$inquiry->budget}}
            </p>
            
            @foreach($inquiry->transportations as $transpotation)
            <p> 交通手段：
              {{$transpotation->name}}
            </p>
            @endforeach
             <p> 
              {{$inquiry->way}}
            </p>
             <p> その他のご要望：
              {{$inquiry->contact_body}}
            </p>
             <p> 名前：
              {{$inquiry->name}}
            </p>
            <p> メールアドレス：
              {{$inquiry->email}}
            </p>
  
            <td><a href="{{ action('Admin\ReplyController@create',['id'=>$inquiry->id])}}" class="btn btn-primary">返信</a></td>

    </body>
</html>