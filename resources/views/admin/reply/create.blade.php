{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'りょらく'を埋め込む --}}
@section('title', 'りょらく')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
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
        <title>返信フォーム</title>
    </head>
    <body>
    	 @csrf
        <h1>返信フォーム</h1>
<form method="post" action="{{ action('Admin\InquiryController@confirm') }}" >
    @csrf
	<div class="wrap">
		<label>氏名</label>
		<input type="text" name="name" value="">
	</div>
	<div class="wrap">
		<label>メールアドレス</label>
		<input type="text" name="email" value="">
	</div>
	<div class="wrap">
		<label>回答</label>
		<input type="text" name="contact_body" value="">
	</div>
	<div class="wrap">
		<label>画像</label>
		<input type="text" name="contact_body" value="">
	</div>
	<input type="submit" name="btn_confirm" value="入力内容を確認する">
</form>
    </body>
</html>
    
@endsection