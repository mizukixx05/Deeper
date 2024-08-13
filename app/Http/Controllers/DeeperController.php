<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artist; // ここで Artist モデルをインポート

class DeeperController extends Controller
{
    public function index()
    {
    // 注目のアーティストのデータを取得
        $artists = Artist::all(); // または条件に合わせて取得する
        
        // ビューにデータを渡す
        return view('deeper.index', ['artists' => $artists]);
    }
}
