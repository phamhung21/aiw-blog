<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagsController extends Controller
{
    
    //show list of tags
    public function index()
    {
        $tags = Tags::all();
        // return $tag;
        return view ('layout.app',compact('tags'));
    }

    
    // create new tag
    public function store(Request $request)
    {
        Tags::create([
            'tag_name'=> $request->tag_name,
        ]);

        return Tags::all();
    }

    // show detail of a tag
    public function show($id)
    {
        $tag = Tags::find($id);
        return $tag;
        // return view ('detail',compact('news'));
    }


    // show list news of tag
    public function listNews($id)
    {
        $tags = Categories::find($id)->id;
        $cate1 = Categories::all();
        $tag1 = Tags::all();
        $news = News::all()->where('tag_id', $id);
        return view ('newsByTag',compact('news',  'tag1', 'news', 'cate1'));
    }


    //update a tag
    public function update(Request $request, $id)
    {
        $tag = Tags::find($id);
        $tag->tag_name = $request->input('tag_name');
        $tag->save();
        return Tags::all();

    }

    //delete a tag
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();
        return Tags::all();
    }
}
