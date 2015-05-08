<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;

//use Illuminate\Http\Request;
use Request;

use Illuminate\Http\Response;


class CommentController extends Controller {

    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return response()->json(Comment::get());
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Comment::create(array(
            'author' => Request::get('author'),
            'text' => Request::get('text')
        ));
    
        return response()->json(array('success' => true));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
    
        return response()->json(array('success' => true));
    }

}
