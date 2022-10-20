<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inquiry;
use App\Transportation;

class InquiryController extends Controller
{
  public function add()
  {
    $transportations=Transportation::all();
    
    return view('user.inquiry.create',['transportations'=>$transportations]);
  }
  
  public function create(Request $request)
  {
      $inquiry = new Inquiry;
      $form = $request->all();
      //dd($request->transportations);
      
      // データベースに保存する
      unset($form["transportations"]);
      unset($form["_token"]);
      $inquiry->fill($form);
      $inquiry->save();
      $inquiry->transportations()->attach($request->transportations);

    return view('user.inquiry.complete');
  }
  
  public function confirm(Request $request)
  {
    
    //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'direction' => 'required',
            'days' => 'required',
            'starting_point'  => 'required',
            'season' => 'required',
            'person' => 'required',
            'budget' => 'required',
            'transportations' => 'required|array',
            'contact_body'  => 'required',
            'name'  => 'required',
            'email' => 'required|email',
        ]);
        
        // Varidationを行う
      $this->validate($request, Inquiry::$rules);
      $inquiry = new Inquiry;
      $form = $request->all();
        
    //transportationの中にその他が含まれている場合wayをチェック
        $form = $request->all();
        if (in_array("その他",$form['transportations'])) {
        $request->validate([
            'way'=>'required',
        ]);
        }
 
        //入力内容確認ページのviewに変数を渡して表示
    return view('user.inquiry.confirm',[
            'direction' => $form['direction'],
            'days' => $form['days'],
            'starting_point' => $form['starting_point'],
            'season' => $form['season'],
            'person' => $form['person'],
            'budget' => $form['budget'],
            'transportations' => $form['transportations'],
            'transportations_name' => $form['transportations_name'],
            'contact_body' => $form['contact_body'],
            'name' => $form['name'],
            'email' => $form['email'],
        ]);
        
  }
  
  public function complete()
  {
    return view('user.inquiry.complete');
  }
}
