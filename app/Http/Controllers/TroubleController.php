<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Trouble;
use App\User;
use Auth;

class TroubleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $troubles = Trouble::latest()->get();
        return view('troubles.index', compact('troubles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('troubles.create');
    }

   
    public function store(Request $request)
    {   
        $trouble = new Trouble; //インスタンスを作成
        $trouble -> id         = $request -> id;
        $trouble -> user_id  = Auth::id(); //ログイン中のユーザーidを代入
        $trouble -> user_name  = Auth::user()->name;
        $trouble -> title    = $request -> title; //ユーザー入力のtitleを代入
        $trouble -> country     = $request -> country;
        $trouble -> category     = $request -> category;
        $trouble -> image = $request->file('image')->store('image','public');
        $trouble -> content = $request ->content;
    
        $trouble -> save(); //保存してあげましょう
        
        return redirect()->route('troubles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
