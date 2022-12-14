{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

{{-- user.blade.phpの@yield('title')に'りょらく'を埋め込む --}}
@section('title', 'りょらく')

{{-- user.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


  <p> <img src="{{secure_asset('storage/images/'. 'ryoraku.jpg')}}" class="top-img" alt="サイトの名前"></p>
  <div>
    <ul class="top-letter">
        <li>自分で旅館やホテル、飲食店を探すのが面倒</li>
        <li>パッケージプランのプラン内容で行きたい場所がなかった</li>
        <li>足腰不安な親と小さな子どもどちらも楽しめる旅を作りたい！</li>
        <li>ペットも一緒に楽しめる宿を探したい！</li>
    </ul>
  </div>
  <div>
    <p class="for-u">そんなあなたに！</p>
    <h3>りょらくのオーダーメイド旅をおすすめします！</h3>
  </div>
  <div class="middle-img">
    <p> <img src="{{secure_asset('storage/images/'. 'place.png')}}" class="place-img" alt="場所"></p>
    <p> <img src="https://ryoraku.s3.ap-northeast-1.amazonaws.com/Ryoraku/food.png" class="food-img" alt="食べ物"></p>
  </div>  
    <div class="middle-letter">
        旅のプロがサポート<br>
        希望通りに何度でも！旅程をアレンジ可能
    </div>
  <p class="forexam">例えばこのような旅行プランをご提案いたします</p>
  <div>
      <p> <img src="{{secure_asset('storage/images/'. 'solo.jpg')}}" alt="一人旅"></p>
      <p> <img src="{{secure_asset('storage/images/'. 'pet.jpg')}}" alt="ペット同伴"></p>
      <p> <img src="https://ryoraku.s3.ap-northeast-1.amazonaws.com/Ryoraku/family.jpg" alt="家族旅行"></p>
  </div>
  <a href="{{ action('User\InquiryController@create') }}">問い合わせはこちら</a>

  <footer>]
    <div>
      よくある質問はこちら
        <a href="{{ action('User\InquiryController@create') }}">問い合わせはこちら</a>
      </div>
    </footer>

@endsection