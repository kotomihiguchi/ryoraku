<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReplyController extends Controller
{
    public function add()
  {
    return view('admin.reply.create');
  }
  
  public function create(Request $request)
  {
    return view('admin.reply.complete');
  }
  
  public function confirm(Request $request)
  {
    return view('admin.reply.confirm');
        
  }
}

