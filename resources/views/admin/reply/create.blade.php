@extends('layouts.admin')
@section('title', 'りょらく')
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
        <title>返信用フォーム</title>
    </head>
    <body>
    	 @csrf
        <h1>返信用フォーム</h1>
<form method="post" action="{{ action('Admin\ReplyController@confirm',['id'=>$id]) }}" >
    @csrf
	<div class="wrap">
		<label>返信</label>
		<input type="text" name="reply_body" value="">
	</div>
	<div class="wrap">
		<label>氏名</label>
		<input type="text" name="name" value="">
	</div>
	<div class="wrap">
		<label>メールアドレス</label>
		<input type="text" name="email" value="">
	</div>
	<input type="submit" name="btn_confirm" value="入力内容を確認する">
</form>
    </body>
</html>
    
@endsection