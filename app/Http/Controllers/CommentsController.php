<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmt=Comments::all();
        // $new = $cmt->news;
        return $cmt;
        // return view ('news',compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comments::create([
            'news_id'=>$request->news_id,
            'username'=> $request->username,
            'content'=> $request->content,
        ]);
        
        $news_id = $request->news_id;
        return redirect()->route('detail-news', $news_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $cmt = Comments::find($id);
        
        // return $cmt;
        // return view ('detail',compact('cmt'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cmt = Comments::find($id);
        $cmt->delete();
        return Comments::all();
    }
}
