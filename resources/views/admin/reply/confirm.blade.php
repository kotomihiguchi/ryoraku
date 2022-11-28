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
        <title>お問い合わせフォーム</title>
    </head>
    <body>
        <h2>お問い合わせ内容確認</h2>
<form method="post" action="{{ action('Admin\ReplyController@create') }}" >
  @csrf
		<div class="wrap">
	 		<p>返信</p>
	 		<div class="wrap">
		 	<p>id</p>
      {{ $id }}
	 	</div>
	 		{{ $reply_body }}
		</div>
		<div class="wrap">
		 	<p>氏名</p>
		 		{{ $name }}
	 	</div>
	 	<div class="wrap">
		 	<p>メールアドレス</p>
		 	{{ $email }}
	 	</div>
	 	<div class="wrap">
	 		<input type='button' onclick='history.back()' value='戻る' class="btn-border">
	 		<input type="submit" value="送信" class="btn-border">
	 		<input type="hidden" name="id" value="{{ $id }}">
	 		<input type="hidden" name="reply_body" value="{{ $reply_body }}">
	 	　<input type="hidden" name="name" value="{{ $name }}">
	 		<input type="hidden" name="email" value="{{ $email }}">
	 	</div>
	</form>
    </body>
</html>

@endsection 