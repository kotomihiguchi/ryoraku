<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inquiry;

class InquiyController extends Controller
{
  
  
  public function index()
  {

    $inquiries = Inquiry::all();
    
    return view('admin.inquiry.index',['inquiries'=>$inquiries]);
  }
  
  public function show(Request $request)
  {
   
    $inquiry = Inquiry::find($request->id);
    
    return view('admin.inquiry.show',['inquiry'=>$inquiry]);
  }
  
  // public function add()
  // {
  //   return view('admin.inquily.create');
  // }
  
  // public function create(Request $request)
  // {
  //   return view('admin.inquiry.complete');
  // }
  
  // public function confirm(Request $request)
  // {
  //   return view('admin.inquiry.confirm');
  // }
  
  // public function complete()
  // {
  //   return view('admin.inquiry.complete');
  // }
}
