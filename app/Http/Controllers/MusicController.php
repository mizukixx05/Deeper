<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    
    //一覧画面
    
    public function index()
    {
        return view('music.index');
    }

    //詳細画面

    public function detail()
    {
        return view('music.detail');
    }
    
    //登録画面
    
    public function create()
    {
        return view('music.creat');
    }  
    //編集画面
        
    public function edit()
    {
        return view('music.edit');
    }
}
