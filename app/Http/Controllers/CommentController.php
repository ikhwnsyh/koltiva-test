<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        // return Comment::query()->whereHas('author', function ($user) {
        //     return $user->where('name', 'koltiva');
        // })->get();
        return Comment::query()->whereRelation('author', 'name', 'koltiva')->get();
    }
}
