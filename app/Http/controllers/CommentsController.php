<?php

namespace mywork\Http\Controllers;

use Illuminate\Http\Request;

use mywork\Comment;
use mywork\app\Http\Requests\CommentFormRequest;
use mywork\Http\Controllers\Controller;



class CommentsController extends Controller
{
    //
    public function newcomment(CommentFormRequest $request)
    {
        $comment = new Comment(array(
            'post_id' => $request->get('post_id'),
            'content' => $request->get('content')
        ));
        $comment->save();
        return redirect()->back()->with('status', 'Your comment has been created!' );
    }

}
