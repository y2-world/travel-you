<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use App\Question;
use App\Answer;
use Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $questions = Question::latest()->get();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $question = new Question; 
        $question -> id         = $request -> id;
        $question -> user_id  = Auth::id(); 
        $question -> user_name  = Auth::user()->name;
        $question -> title    = $request -> title; 
        $question -> category     = $request -> category;
        $question -> body = $request-> body;
        $question -> save(); 
        
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        $question->load('user', 'answer');
        
        return view('questions.show', compact('question'));
    }

    
    public function edit($id)
    {
        $question = Question::find($id);

        if(Auth::id() !== $question->user_id){
            return with("投稿したユーザーでないと編集できません。"); 
        }

        return view('questions.edit', compact('question'));
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
        $question = Question::find($id);

        if(Auth::id() !== $question->user_id){
            return with("投稿したユーザーでないと更新できません。"); 
        }

        $question -> title    = $request -> title; 
        $question ->  category   = $request -> category; 
        $question ->  body   = $request -> body;
        $question -> save();
        return view('questions.show', compact('question'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);

        if(Auth::id() !== $question->user_id){
            return with("投稿したユーザーでないと削除できません。"); 
        }

        $question -> delete();
        return redirect()->route('questions.index', Auth::user()->id );
    }
}
