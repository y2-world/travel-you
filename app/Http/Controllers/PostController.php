<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Trouble;
use App\Post;
use App\User;
use Auth;

class PostController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   $posts = Post::latest()->get();
        $troubles = Trouble::latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    { 
        $post = new Post; //インスタンスを作成
        $post -> id         = $request -> id;
        $post -> user_id  = Auth::id(); //ログイン中のユーザーidを代入
        $post -> user_name  = Auth::user()->name;
        $post -> title    = $request -> title; //ユーザー入力のtitleを代入
        $post -> date1     = $request -> date1; //ユーザー入力のbodyを代入
        $post -> date2     = $request -> date2;

        $file_name = $request->file('image')->getClientOriginalName();
        $post -> image = $request->file('image')->store('image','public',$file_name);
    
        $post -> country     = $request -> country;
        $post -> city     = $request -> city;
        $post -> diary     = $request -> diary;
        $post -> image1 = $request->file('image1')->store('image','public',$file_name);
        $post -> image2 = $request->file('image2')->store('image','public',$file_name);
        $post -> image3 = $request->file('image3')->store('image','public',$file_name);
        $post -> image4 = $request->file('image4')->store('image','public',$file_name);
    
        $post -> save(); //保存してあげましょう
        
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::find($id);// ページネーション; 
        return view('posts.show', compact('post'));
    }
    
    public function edit($id)
    {
        $post = Post::find($id);

        if(Auth::id() !== $post->user_id){
            return with("投稿したユーザーでないと編集できません。"); 
        }

        return view('posts.edit', compact('post'));
    }

    
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if(Auth::id() !== $post->user_id){
            return with("投稿したユーザーでないと更新できません。"); 
        }

        $post -> title    = $request -> title; //ユーザー入力のtitleを代入
        $post -> date1     = $request -> date1; //ユーザー入力のbodyを代入
        $post -> date2     = $request -> date2;
        $post -> country     = $request -> country;
        $post -> city     = $request -> city;
        $post -> diary     = $request -> diary;
        $post -> save();
        return view('posts.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if(Auth::id() !== $post->user_id){
            return with("投稿したユーザーでないと削除できません。"); 
        }

        $post -> delete();
        return redirect()->route('users.show', Auth::user()->id );
    }
}
