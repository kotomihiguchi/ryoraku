
@extends('layouts.user')
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
<form method="post" action="{{ action('User\InquiryController@create') }}" >
  @csrf
	 	<div class="wrap">
		 	<p>行きたい方面</p>
		 		{{ $direction }}
		</div>

		<div class="wrap">
		 	<p>日数</p>
		 	{{ $days }}
	 	</div>
	 	
	 	<div class="wrap">
		 	<p>出発場所</p>
		 	{{ $starting_point }}
	 	</div>
	 	
	 		<div class="wrap">
		 	<p>行きたい時期</p>
		 	{{ $season }}
	 	</div>

	 	<div class="wrap">
		 	<p>人数</p>
		 	{{ $person }}
	 	</div>

	 	<div class="wrap">
		 	<p>予算</p>
		 	{{ $budget }}
	 	</div>
	 	
	 		<div class="wrap">
		 	<p>交通手段</p>
		 	@foreach ($transportations as $transportation)
        <p> {{ $transportations_name[$loop->index]}} </p>
        <input type="hidden" name="transportations[]" value="{{ $transportation }}">
      @endforeach
      </div>

		<div class="wrap">
	 		<p>その他、旅行についてのご要望</p>
	 		{{ $contact_body }}
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
	 		<input type="hidden" name="direction" value="{{ $direction }}">
	 		<input type="hidden" name="days" value="{{ $days }}">
	 		<input type="hidden" name="starting_point" value="{{ $starting_point }}">
	 		<input type="hidden" name="season" value="{{ $season }}">
	 		<input type="hidden" name="person" value="{{ $person }}">
	 		<input type="hidden" name="budget" value="{{ $budget }}">
	 		
	 		<input type="hidden" name="contact_body" value="{{ $contact_body }}">
	 	　<input type="hidden" name="name" value="{{ $name }}">
	 		<input type="hidden" name="email" value="{{ $email }}">
	 	</div>
	</form>
    </body>
</html>

@endsection