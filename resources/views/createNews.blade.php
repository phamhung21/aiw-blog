@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <h2 style="margin:auto">CREATE NEW BLOG</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-1">
            
        </div>
        <div class="col-10">
            <form action="{{route('create-news')}}" method="post">
                
                
                <div class="card-body login">
                    <div class="form-group">
                        <label  class="placeholder"><b>Title:</b></label>
                        <input  type="text" name="title"  placeholder="Title of this blog" class="form-control " display=false required value="">
                    </div>
                    
                    <div class="form-group">
                        <label for=""><b>Category:</b></label>
                        <select class=" custom-select" name ="cate_id">
                            @foreach($cate1 as $cate)
                            <option value="{{$cate->id}}">{{$cate->cate_name}}</option>
                            
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for=""><b>Tag:</b></label>
                        <select class=" custom-select" name ="tag_id">
                            @foreach ($tag1 as $tag)
                            <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label  class="placeholder"><b>Short-intro:</b></label>
                        <textarea name="short_intro" required class="form-control" placeholder="Short intro of this blog"></textarea>
                        {{-- <br> --}}
                    </div>
                    
                    <div class="form-group">
                        <label  class="placeholder"><b>Content:</b></label>
                        <textarea name="content" required class="form-control" placeholder="Content of this blog"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label  class="placeholder"><b>Author:</b></label>
                        <input  type="text" name="author"  placeholder="Name of author" class="form-control " display=false required value="">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">
                        Add new blog
                    </button> 
                </div>
            </form>
        </div>
        
        <div class="col-1">
            
        </div>
    </div>
    
    
</div>
@endsection