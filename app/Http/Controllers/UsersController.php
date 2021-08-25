<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Trouble;
use App\User;
use App\Question;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show(User $user)
    {   
        $user = User::find($user->id); //idが、リクエストされた$userのidと一致するuserを取得
        $posts = Post::where('user_id', $user->id) //$userによる投稿を取得
            ->orderBy('date1', 'desc') // 投稿作成日が新しい順に並べる
            ->paginate(3); // ページネーション; 
        $troubles = Trouble::where('user_id', $user->id) //$userによる投稿を取得
            ->orderBy('updated_at', 'desc') // 投稿作成日が新しい順に並べる
            ->paginate(1); // ページネーション; 
        $questions = Question::where('user_id', $user->id) //$userによる投稿を取得
            ->orderBy('updated_at', 'desc') // 投稿作成日が新しい順に並べる
            ->paginate(1); // ページネーション; 
        return view('users.show', [
            'user_name' => $user->name, // $user名をviewへ渡す
            'post' => $posts, // $userの書いた記事をviewへ渡す
            'trouble'=> $troubles,
            'question'=> $questions,
        ]);
    }

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
