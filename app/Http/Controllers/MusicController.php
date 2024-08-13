<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class MusicController extends Controller
{
    
    //一覧画面
    
    public function index()
    {
        $artists = Artist::all();
        
        return view('music.index', ['artists' => $artists]);
    }
   
    // 詳細画面
    public function show($id)
    {
        $artist = Artist::findOrFail($id);
        return view('music.show', ['artist' => $artist]);
    }

    // 登録画面
    public function create()
    {
        return view('music.create');
    }

    // 登録処理
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        Artist::create($request->all());
        return redirect()->route('music.index')->with('success', 'Artist created successfully.');
    }

    // 編集画面
    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        return view('music.edit', ['artist' => $artist]);
    }

    // 編集処理
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        $artist = Artist::findOrFail($id);
        $artist->update($request->all());
        return redirect()->route('music.index')->with('success', 'Artist updated successfully.');
    }

    // 削除処理
    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();
        return redirect()->route('music.index')->with('success', 'Artist deleted successfully.');
    }
}
