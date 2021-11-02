<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Trouble;
use App\User;
use App\Question;
use DB;

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
        $user = User::find($user->id);
        $posts = Post::where('user_id', $user->id)
            ->orderBy('date1', 'desc')
            ->paginate(100);
        $countries = Post::where('user_id', $user->id)
            ->orderBy('date1', 'asc')
            ->paginate(100);
        $troubles = Trouble::where('user_id', $user->id)
            ->orderBy('updated_at', 'desc')
            ->paginate(100);
        $questions = Question::where('user_id', $user->id)
            ->orderBy('updated_at', 'desc')
            ->paginate(100);
        $counts = User::where('id', $user->id)
            ->withCount('posts')->get();
        $country_counts = User::where('id', $user->id)
            ->withCount(['posts' => function($query) {
                $query->select(DB::raw('count(distinct(country_id))'));
            }])->get();
        return view('users.show', [
            'user_name' => $user->name,
            'post' => $posts,
            'trouble'=> $troubles,
            'question'=> $questions,
            'country'=> $countries,
            'count' => $counts,
            'country_count' => $country_counts,
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

    public function count()
    {

        $users = User::withCount('posts')
            ->get();
        foreach ($users as $user) {
            $posts_count = $site->posts_count;
        }
        return view('users.show', compact('users'));
    }
}
