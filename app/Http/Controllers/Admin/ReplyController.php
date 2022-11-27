<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inquiry;
use App\Mail\ContactMail;
use Mail;

class ReplyController extends Controller
{
    public function add(Request $request)
  {
    return view('admin.reply.create',['id'=>$request->id]);
  }
  
  public function create(Request $request)
  {
    $inquiry = Inquiry::find($request->id);
    $to = [
	    [
	        'email' => $inquiry->email, 
	        'name' => 'Test',
	    ]
	  ];

	  Mail::to($to)->send(new ContactMail($inquiry));
    
    $inquiry->is_reply = 1;
    $inquiry->save();
    
    return view('admin.reply.complete');
  }
  
  public function confirm(Request $request)
  {
    //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'reply_body'  => 'required',
            'name'  => 'required',
            'email' => 'required|email',
        ]);
        
        //入力内容確認ページのviewに変数を渡して表示
        $form = $request->all();
    return view('admin.reply.confirm',[
            'id' => $form['id'],
            'reply_body' => $form['reply_body'],
            'name' => $form['name'],
            'email' => $form['email'],
        ]);
        
  }
}

