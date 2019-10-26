<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Comments;
use App\Models\Tags;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Http\Resources\News as NewsResource;

class NewsController extends Controller
{
    
    //return list of all news
    public function index()
    {
        $news = News::all();
        $cate1 = Categories::all();
        $tag1 =  Tags::all();
        // return $news;
        // return dd($news);
        return view ('news',compact('news', 'cate1', 'tag1'));
    }
    
    //create a news
    public function store(Request $request)
    {
        News::create([
            'title'=> $request->title,
            'cate_id'=> $request->cate_id,
            'short_intro'=> $request->short_intro,
            'content'=> $request->content,
            'author'=> $request->author,
            'file_name'=>$request->file_name,
            'tag_id'=> $request->tag_id,
            'comment'=>$request->comment,
            // 'related_articles'=>$request->related_articles,
            
            ]);
            return redirect()->route('news');
        }
        
        public function create(){
            $cate1 = Categories::all('id', 'cate_name');
            $tag1 = Tags::all();
            // return dd($cate1);
            return view('createNews', compact('cate1', 'tag1'));
        }
        
        //return the detail of a news
        public function show($id)
        {
            $news = News::find($id);
            // return dd($news);
            $cate_id = $news->cate_id;

            $cate1 = Categories::all();
            $tag1 = Tags::all();
             
            $comment = Comments::all()->where('news_id', $id);
            
            
            $relate_news = News::all()->where('cate_id', $cate_id);
            
            // $cate = Categories::all();
            $tag = Tags::all();
            
            $tags =News::find($id)->tags()->get();
            
            $cat = $news->cate_id;

            $categories = Categories::find($cat)->cate_name;
            
            return view ('detail',compact('news', 'comment', 'categories','tags', 'relate_news', 'cate1', 'tag1'));
        }
        
        //show list tags of a news
        public function tagOfNews($id)
        {
            $listTag = News::find($id)->tags()->get();
            
            return $listTag;
        }
        
        public function listComments($id){
            $news = News::get(['cate_id']);
            
            return dd($news);
            // $related = Categories::
        }
        
        
        //update detail of a news
        public function update(Request $request, $id)
        {
            $news = News::find($id);
            $news->title = $request->input('title');
            $news->short_intro = $request->input('short_intro');
            $news->short_intro = $request->input('file_name');
            $news->content = $request->input('content');
            $news->author= $request->input('author');
            // $news->comment= $request->input('comment');
            $news->tag = $request->input('tag');
            $news->related_articles = $request->input('related_articles');
            $news->save();
            return News::all();
            
        }
        
        
        
        //delete a news
        public function destroy($id)
        {
            $news = News::find($id);
            $news->delete();
            return News::all();
        }
    }
    