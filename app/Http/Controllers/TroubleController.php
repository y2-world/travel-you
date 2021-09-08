<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TroubleRequest;
use App\Trouble;
use App\Post;
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
        $troubles = Trouble::latest('updated_at')->get();
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

   
    public function store(TroubleRequest $request)
    {   
        $trouble = new Trouble; 
        $trouble -> id         = $request -> id;
        $trouble -> user_id  = Auth::id();
        $trouble -> user_name  = Auth::user()->name;
        $trouble -> title    = $request -> title;
        $trouble -> country     = $request -> country;
        $trouble -> category     = $request -> category;
        $trouble -> image = $request->file('image')->store('image','public');
        $trouble -> content = $request ->content;
    
        $trouble -> save();
        
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
        $trouble = Trouble::find($id);
        
        return view('troubles.show', compact('trouble'));
    }

    public function edit($id)
    {
        $trouble = Trouble::find($id);
        if(Auth::id() !== $trouble->user_id){
            return with("投稿したユーザーでないと編集できません。"); 
        }
        return view('troubles.edit', compact('trouble'));
    }

    public function update(Request $request, $id)
    {
        $trouble = Trouble::find($id);

        if(Auth::id() !== $trouble->user_id){
            return with("投稿したユーザーでないと更新できません。"); 
        }

        $trouble -> title = $request -> title; 
        $trouble -> country = $request -> country; 
        $trouble -> category = $request -> category;
        $trouble -> content  = $request -> content;
        $trouble -> save();
        return view('troubles.show', compact('trouble'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trouble = Trouble::find($id);

        if(Auth::id() !== $trouble->user_id){
            return with("投稿したユーザーでないと削除できません。"); 
        }

        $trouble -> delete();
        return redirect()->route('troubles.index', Auth::user()->id );
    }
}
