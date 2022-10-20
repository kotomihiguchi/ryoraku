
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
		 		<?php echo $direction;?>
		</div>

		<div class="wrap">
		 	<p>日数</p>
		 	<?php echo $days;?>
	 	</div>
	 	
	 	<div class="wrap">
		 	<p>出発場所</p>
		 	<?php echo $starting_point;?>
	 	</div>
	 	
	 		<div class="wrap">
		 	<p>行きたい時期</p>
		 	<?php echo $season;?>
	 	</div>

	 	<div class="wrap">
		 	<p>人数</p>
		 	<?php echo $person;?>
	 	</div>

	 	<div class="wrap">
		 	<p>予算</p>
		 	<?php echo $budget;?>
	 	</div>
	 	
	 		<div class="wrap">
		 	<p>交通手段</p>
		 	@foreach ($transportations as $transportation)
        <p> {{ $transportations_name[$loop->index]}} </p>
        <input type="hidden" name="transportations[]" value="<?php echo $transportation;?>">
      @endforeach
      </div>

		<div class="wrap">
	 		<p>その他、旅行についてのご要望</p>
	 		<?php echo nl2br(htmlspecialchars($contact_body,ENT_QUOTES,'UTF-8'));?>
		</div>
		<div class="wrap">
		 	<p>氏名</p>
		 		<?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>
	 	</div>
	 	<div class="wrap">
		 	<p>メールアドレス</p>
		 	<?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>
	 	</div>
	 	<div class="wrap">
	 		<input type='button' onclick='history.back()' value='戻る' class="btn-border">
	 		<input type="submit" value="送信" class="btn-border">
	 		<input type="hidden" name="direction" value="<?php echo $direction;?>">
	 		<input type="hidden" name="days" value="<?php echo $days;?>">
	 		<input type="hidden" name="starting_point" value="<?php echo $starting_point;?>">
	 		<input type="hidden" name="season" value="<?php echo $season;?>">
	 		<input type="hidden" name="person" value="<?php echo $person;?>">
	 		<input type="hidden" name="budget" value="<?php echo $budget;?>">
	 		
	 		<input type="hidden" name="contact_body" value="<?php echo $contact_body;?>">
	 	　<input type="hidden" name="name" value="<?php echo $name;?>">
	 		<input type="hidden" name="email" value="<?php echo $email;?>">
	 	</div>
	</form>
    </body>
</html>

@endsection