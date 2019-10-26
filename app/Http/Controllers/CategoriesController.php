<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class CategoriesController extends Controller
{
    
    //show list of categories
    public function index()
    {
        $category = Categories::all();

        // return dd($category);
        return view ('layouts.app',compact('category'));
    }

    //create a new categories
    public function store(Request $request)
    {
        Categories::create([
            'cate_name'=> $request->cate_name,
        ]);

        return Categories::all();
    }

    //show detail of a categories
    public function show($id)
    {
        $cate = Categories::find($id);
        return $cate;
        // return view ('detail',compact('news'));
    }


    // show list news of a categories
    public function listNews($id){
        // $category = Categories::find($id)->news()->get();
        $category = Categories::find($id)->id;
        $cate1 = Categories::all();
        $tag1 = Tags::all();
        // return dd($tag);
        $news = News::all()->where('cate_id', $category);
        // return dd($news);
        return view('newsByCate', compact('cate1', 'category', 'news', 'tag1'));
    }

   
    //update a categories
    public function update(Request $request, $id)
    {
        $cate = Categories::find($id);
        $cate->cate_name = $request->input('cate_name');
        $cate->save();
        return Categories::all();

    }

    // delete a categories
    public function destroy($id)
    {
        $cate = Categories::find($id);
        $cate->delete();
        return Categories::all();
    }
}
