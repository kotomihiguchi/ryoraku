{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

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
        <title>お問い合わせフォーム</title>
    </head>
    <body>
    	 @csrf
        <h1>オーダーメイドお問い合わせ</h1>
<form method="post" action="{{ action('User\InquiryController@confirm') }}" >
    @csrf
    <div class="wrap">
		<label>行きたい方面</label>
		<input type="text" name="direction" value="">
	</div>
	<div class="wrap">
		<label>日数</label>
		<input type="text" name="days" value="">
	</div>
	<div class="wrap">
		<label>出発場所</label>
		<input type="text" name="starting_point" value="">
	</div>
	<div class="wrap">
		<label>行きたい時期</label>
		<input type="text" name="season" value="">
	</div>
	<div class="wrap">
		<label>人数</label>
		<input type="text" name="person" value="">
	</div>
	<div class="wrap">
		<label>予算</label>
		<input type="text" name="budget" value="">
	</div>
	<div class="wrap">
		<label>交通手段</label>
		@foreach($transportations as $transportation)
        <input type="checkbox" name="transportations[]" value="{{$transportation->id}}">{{$transportation->name}}
        <input type="hidden" name="transportations_name[]" value="{{$transportation->name}}">
        @endforeach
        
        <input type="text" name="way" value="">
	</div>
	<div class="wrap">
		<label>その他、旅行についてのご要望</label>
		<input type="text" name="contact_body" value="">
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