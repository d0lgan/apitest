<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function comments($user) {
        $comments = Comment::withCount('likes')->where('user_id', $user)->get();
        $byLikes = $comments->sortByDesc('likes_count')->values()->all();
        $byDate = $comments->sortByDesc('updated_at')->values()->all();
        return response()->json(['byLikes' => $byLikes, 'byDate' => $byDate], 200);
    }
}
