<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function comments($user) {
        $user = User::find($user);
        $comments = $user->comments()->get();
        foreach ($comments as $comment) {
            $comment->user_id = $comment->user()->get();
            $comment->likes = $comment->likes()->count();
        }
        $byLikes = $comments->sortByDesc('likes')->values()->all();
        $byDate = $comments->sortByDesc('updated_at')->values()->all();
        $byName =$comments->sortBy(function ($comment, $key) {
            return $comment->user_id->first()->name;
        })->values()->all();
        return response()->json([
            'user' => $user,
            'byLikes' => $byLikes,
            'byDate' => $byDate,
            'byName' => $byName,
        ], 200);
    }
}
