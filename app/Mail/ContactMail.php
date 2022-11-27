<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     
     // 引数で受け取ったデータ用の変数
    protected $contact;
    
    public function __construct($contact)
    {
        //引数で受け取ったデータを変数にセット
      $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('contact.mail') // どのテンプレートを呼び出すか
                    ->from('koto.higuchi.hw93@gmail.com','りょらく') // 送信元
                    ->subject('お問い合わせありがとうございます') // メールタイトル
                    ->with(['contact' => $this->contact]); // withオプションでセットしたデータをテンプレートへ受け渡す
          
    }
}
