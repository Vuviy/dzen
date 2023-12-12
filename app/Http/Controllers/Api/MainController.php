<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function addComment(Comment $request)
    {

        $data =  $request->validated();
        $user = User::create($data);
        $comment = $user->comments()->create($data);

        return $comment;
    }

    public function getComments(){
        return \App\Models\Comment::all();
    }
}
